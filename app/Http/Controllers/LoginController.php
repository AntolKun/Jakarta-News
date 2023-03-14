<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('home');
        } else {
            return view('login');
        }
        // return view('login');
    }

    public function actionLogin(Request $request)
    {
        $data = [
            'name' => $request->name,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            return redirect()->route('adminDashboard');
        } else {
            return back()->with('error', 'Nama atau Password salah!');
        }
    }

    public function actionLogout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect ('/login');
    }

    public function store(Request $request)
    {
        dd($request->all());

        //upload image
        $foto = $request->file('foto');
        // upload file
		$foto->move('foto', $foto->getClientOriginalName());
        // $gambar->storeAs('pu1blic/posts', $gambar->hashName());

        //create post
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'staff' => $request->staff,
            'foto' => $foto->getClientOriginalName(),
            'no_telp' => $request->no_telp,
        ]);

        dd($request->all());

        if ($user) {
            //redirect to index
            return redirect()->route('manageUser')->with('success', 'Data Berhasil Tersimpan');
        } else {
            return back()->with('error', 'Data Gagal Tersimpan');
        }
    }
}
