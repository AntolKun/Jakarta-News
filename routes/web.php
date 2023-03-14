<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReadberitaController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminCreatePostController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminTagController;
use App\Http\Controllers\AdminCarouselController;
use App\Http\Controllers\AdminBreakingController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/ ', [HomeController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/readberita/{slug}', [HomeController::class, 'readBerita'])->name('readBerita');

Route::get('/kategoriLokal', [HomeController::class, 'kategoriLokal'])->name('kategoriLokal');
Route::get('/kategoriNasional', [HomeController::class, 'kategoriNasional'])->name('kategoriNasional');
Route::get('/kategoriInternasional', [HomeController::class, 'kategoriInternasional'])->name('kategoriInternasional');


Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('adminDashboard');


Route::get('/admin/posts', [AdminPostController::class, 'index']);
Route::post('/admin/postsStore', [AdminCreatePostController::class, 'store']);
Route::delete('/admin/postsDelete/{id}', [AdminPostController::class, 'destroy']);

Route::get('/admin/create-posts', [AdminCreatePostController::class, 'index']);

Route::get('/admin/manage-user', [AdminUserController::class, 'index'])->name('manageUser');
Route::post('/admin/postsUser', [AdminUserController::class, 'store']);
Route::delete('/admin/userDelete/{id}', [AdminUserController::class, 'destroy']);

Route::get('/admin/kategori', [AdminKategoriController::class, 'index']);
Route::delete('/admin/kategoriDelete/{id}', [AdminKategoriController::class, 'destroy']);
Route::post('/admin/postsKategori', [AdminKategoriController::class, 'store']);

Route::get('/admin/tag', [AdminTagController::class, 'index']);
Route::delete('/admin/tagDelete/{id}', [AdminTagController::class, 'destroy']);
Route::post('/admin/postsTag', [AdminTagController::class, 'store']);

Route::get('/admin/carousel', [AdminCarouselController::class, 'index']);
Route::delete('/admin/carouselDelete/{id}', [AdminCarouselController::class, 'destroy']);
Route::post('/admin/postsCarousel', [AdminCarouselController::class, 'store']);

Route::get('/admin/breaking', [AdminBreakingController::class, 'index']);
Route::delete('/admin/breakingDelete/{id}', [AdminBreakingController::class, 'destroy']);
Route::post('/admin/postsBreaking', [AdminBreakingController::class, 'store']);


Route::post('actionLogin', [LoginController::class, 'actionLogin']);
Route::get('actionLogout', [LoginController::class, 'actionLogout'])->name('actionLogout')->middleware('auth');

