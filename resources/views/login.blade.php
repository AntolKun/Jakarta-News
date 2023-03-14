<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/skote/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jan 2023 07:04:47 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Login | Jakarta - News</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('images/jktnews-r.png')}}">

    <!-- Bootstrap Css -->
    <link href="{{asset('skoteassets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('skoteassets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('skoteassets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-primary bg-soft">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">Welcome Back !</h5>
                                        <p>Login Untuk Lanjut Ke Dashboard</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="{{asset('skoteassets/images/profile-img.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="auth-logo">
                                <a href="index.html" class="auth-logo-light">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="{{asset('images/jktnews-r.png')}}" alt="" class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>

                                <a href="index.html" class="auth-logo-dark">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="{{asset('images/jktnews-r.png')}}" alt="" class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">
                                <form class="form-horizontal" method="POST" action="{{ url('actionLogin') }}">
                                {{ csrf_field() }}
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama</label>
                                        <input type="name" class="form-control" id="name" name="name" placeholder="Enter name" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <div class="input-group auth-pass-inputgroup">
                                            <input type="password" class="form-control" name="password" placeholder="Enter password" aria-label="Password" required>
                                            <button class="btn btn-light " type="submit" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                        </div>
                                    </div>

                                    <div class="mt-3 d-grid">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">

                        <div>
                            <p>© <script>
                                    document.write(new Date().getFullYear())
                                </script> Antol-Kun. Crafted with <i class="mdi mdi-heart text-danger"></i> For Jakarta - News</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end account-pages -->

    <!-- JAVASCRIPT -->
    <script src="{{asset('skoteassets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('skoteassets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('skoteassets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('skoteassets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('skoteassets/libs/node-waves/waves.min.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if ($message = session()->get('success'))
    <script type="text/javascript">
        Swal.fire({
            icon: 'success',
            title: 'Sukses!',
            text: '{{ $message }}',
        })
    </script>
    @endif

    @if ($message = session()->get('error'))
    <script type="text/javascript">
        Swal.fire({
            icon: 'error',
            title: 'Waduh!',
            text: '{{ $message }}',
        })
    </script>
    @endif

    <!-- App js -->
    <script src="{{asset('skoteassets/js/app.js')}}"></script>
</body>

<!-- Mirrored from themesbrand.com/skote/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jan 2023 07:04:47 GMT -->

</html>
