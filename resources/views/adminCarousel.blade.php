<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Jakarta - News</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/jktnews-r.png') }}" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('skoteassets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('skoteassets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('skoteassets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body data-sidebar="dark" data-layout-mode="light">
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{ asset('images/jktnews-r.png') }}" alt="" height="80" />
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('images/jktnews-r.png') }}" alt="" height="80" />
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{ asset('images/jktnews-r.png') }}" alt="" height="80" />
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('images/jktnews-r.png') }}" alt="" height="80" />
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                </div>

                <div class="d-flex">

                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                            <i class="bx bx-fullscreen"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="{{ url('foto/', auth()->user()->foto) }}" alt="Header Avatar" />
                            <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ auth()->user()->name }}</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item text-danger" href="{{ route('actionLogout') }}"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
                                <span key="t-logout">Logout</span></a>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <i class="bx bx-cog bx-spin"></i>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">
            <div data-simplebar class="h-100">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" key="t-menu">Menu</li>

                        <li>
                            <a href="/admin/dashboard" class="waves-effect">
                                <i class="bx bx-file"></i>
                                <span key="t-file-manager">Dashboard</span>
                            </a>
                        </li>

                        <li class="menu-title" key="t-apps">Apps</li>

                        <li>
                            <a href="/admin/posts" class="waves-effect">
                                <i class="bx bx-chat"></i>
                                <span key="t-chat">Posts</span>
                            </a>
                        </li>

                        <li>
                            <a href="/admin/create-posts" class="waves-effect">
                                <i class="bx bx-chat"></i>
                                <span key="t-chat">Tambah Artikel</span>
                            </a>
                        </li>

                        <li>
                            <a href="/admin/kategori" class="waves-effect">
                                <i class="bx bx-chat"></i>
                                <span key="t-chat">Tambah Kategori</span>
                            </a>
                        </li>

                        <li>
                            <a href="/admin/tag" class="waves-effect">
                                <i class="bx bx-chat"></i>
                                <span key="t-chat">Tambah Tag</span>
                            </a>
                        </li>

                        <li>
                            <a href="/admin/carousel" class="waves-effect">
                                <i class="bx bx-chat"></i>
                                <span key="t-chat">Tambah Carousel</span>
                            </a>
                        </li>

                        <li>
                            <a href="/admin/breaking" class="waves-effect">
                                <i class="bx bx-chat"></i>
                                <span key="t-chat">Tambah Breaking</span>
                            </a>
                        </li>

                        <li>
                            <a href="/admin/manage-user" class="waves-effect">
                                <i class="bx bx-file"></i>
                                <span key="t-file-manager">Manajemen User</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Carousel</h4>
                                <div>
                                    <!-- center modal -->
                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">
                                        <i class="bx bx-smile font-size-16 align-middle me-2"></i>Tambah Carousel</button>
                                    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Tambah Carousel</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <form action="{{ url('admin/postsCarousel') }}" method="POST" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <div class="modal-body">

                                                <div class="mb-3 column">
                                                        <label class="col-md-12 col-form-label">Upload Foto</label>
                                                        <div class="col-md-12">
                                                            <div>
                                                                <input class="form-control form-control-lg" id="formFileLg" type="file" name="carousel" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 column">
                                                        <label for="judul" class="col-md-2 col-form-label">Judul</label>
                                                        <div class="col-md-12">
                                                            <input class="form-control" type="text" value="" id="judul" name="judul" />
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 column">
                                                        <label for="subjudul" class="col-md-2 col-form-label">Subjudul</label>
                                                        <div class="col-md-12">
                                                            <input class="form-control" type="text" value="" id="subjudul" name="subjudul" />
                                                        </div>
                                                    </div>

                                                    <div class="row-12">
                                                        <button type="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
                                                        <button type="button" class="btn btn-danger waves-effect waves-light">Cancel</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Manajemen Carousel</h4>
                                    <p class="card-title-desc">Semua Carousel yang terdaftar muncul disini
                                    </p>

                                    <div class="table-responsive">
                                        <table id="datatable" class="table table-bordered nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>Gambar</th>
                                                    <th>Judul</th>
                                                    <th>Sub Judul</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($carousel as $c)
                                                <tr>
                                                    <td><img src="{{ url('carousel/', $c->carousel) }}" alt="" width="100px"></td>
                                                    <td>{{ $c->judul }}</td>
                                                    <td>{{ $c->subjudul }}</td>
                                                    <td>
                                                        <div class="row-12">
                                                            <!-- <button type="button" class="btn btn-primary waves-effect waves-light">Edit</button> -->
                                                            <form action="/admin/carouselDelete/{{ $c->id }}" method="POST">
                                                                @csrf
                                                                @method("DELETE")
                                                                <button type="submit" class="btn btn-danger waves-effect waves-light">Hapus</button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>

            <!-- end row -->

            <!-- end row -->

            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    © Jakarta - News.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Developed by Antol-Kun
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center px-3 py-4">
                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center mb-0">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="{{asset('skoteassets/images/layouts/layout-1.jpg')}}" class="img-thumbnail" alt="layout images" />
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked />
                    <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="{{asset('skoteassets/images/layouts/layout-2.jpg')}}" class="img-thumbnail" alt="layout images" />
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" />
                    <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                </div>

            </div>
        </div>
        <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('skoteassets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('skoteassets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('skoteassets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('skoteassets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('skoteassets/libs/node-waves/waves.min.js') }}"></script>
    <script src="//cdn.ckeditor.com/4.20.2/full/ckeditor.js"></script>

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

    <!-- apexcharts -->
    <script src="{{ asset('skoteassets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- dashboard init -->
    <script src="{{ asset('skoteassets/js/pages/dashboard.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('skoteassets/js/app.js') }}"></script>
</body>

<!-- Mirrored from themesbrand.com/skote/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jan 2023 06:55:28 GMT -->

</html>
