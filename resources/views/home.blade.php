<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords" content=",World news website2">

    <meta name="description" content="Get Latest News2">

    <meta http-equiv="content-language" content="English">
    <meta name="csrf-token" content="TqH72dmnTvdXd0vZPboPHxzcfLfwpSKtwGcXr1O1">
    <meta property="og:image" content="{{ URL::asset('images/jktnews-r.png') }}" />
    <title> Jakarta-News | Portal Berita Terpercaya </title>

    <link rel="shortcut icon" type="image/x-icon" href="https://i.pinimg.com/736x/06/7e/4b/067e4b7f0ae093c1a0de845aeb49f960.jpg">
    <link href="{{ URL::asset('css/front-third-party1fff.css?id=3c7e5cc9c7e858fdce690772ea7fb18b') }}   " rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/front-pagesdfa4.css?id=1df1acb19605ff56c2ea2bce30b61115') }}" rel="stylesheet" type="text/css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <style>
        [wire\:loading],
        [wire\:loading\.delay],
        [wire\:loading\.inline-block],
        [wire\:loading\.inline],
        [wire\:loading\.block],
        [wire\:loading\.flex],
        [wire\:loading\.table],
        [wire\:loading\.grid],
        [wire\:loading\.inline-flex] {
            display: none;
        }

        [wire\:loading\.delay\.shortest],
        [wire\:loading\.delay\.shorter],
        [wire\:loading\.delay\.short],
        [wire\:loading\.delay\.long],
        [wire\:loading\.delay\.longer],
        [wire\:loading\.delay\.longest] {
            display: none;
        }

        [wire\:offline] {
            display: none;
        }

        [wire\:dirty]:not(textarea):not(input):not(select) {
            display: none;
        }

        input:-webkit-autofill,
        select:-webkit-autofill,
        textarea:-webkit-autofill {
            animation-duration: 50000s;
            animation-name: livewireautofill;
        }

        @keyframes livewireautofill {
            from {}
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ URL::asset('vendor/livewire/livewire.js') }}"></script>
    <script>
        let livewireToken = "TqH72dmnTvdXd0vZPboPHxzcfLfwpSKtwGcXr1O1"
    </script>
    <script data-turbo-eval="false" data-turbolinks-eval="false">
        window.livewire = new Livewire();
        window.Livewire = window.livewire;
        window.livewire_app_url = '';
        window.livewire_token = livewireToken;
        window.deferLoadingAlpine = function(callback) {
            window.addEventListener('livewire:load', function() {
                callback();
            });
        };
        let started = false;
        window.addEventListener('alpine:initializing', function() {
            if (!started) {
                window.livewire.start();
                started = true;
            }
        });
        document.addEventListener("DOMContentLoaded", function() {
            if (!started) {
                window.livewire.start();
                started = true;
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('cdn.jsdelivr.net/gh/livewire/turbolinks%40v0.1.x/dist/livewire-turbolinks.js') }}" data-turbolinks-eval="false" data-turbo-eval="false">
    </script>
    <script src="{{ URL::asset('assets/js/front-third-partyaede.js?id=2dfc34ab6dde663d408cd43e9a04649b') }}"></script>
    <script src="{{ URL::asset('assets/js/front-pages37b4.js?id=fa8ec6abc6c5a024fd7ba50a0813c918') }}"></script>
</head>

<body class="dark-mode">
    <!-- start-breaking-news-section -->
    <!-- <div class="breaking-news-section py-2" id="topbar-wrap">
        <div class="container"> -->
            <!-- <div class="row align-items-center justify-content-center"> -->
            <!-- <div class="col-lg-8 text-center">
                    <div class="title d-flex align-items-center justify-content-center">
                        <div class="icon bg-primary d-flex justify-content-center align-items-center me-1">
                            <i class="fas fa-bolt text-white"></i>
                        </div>
                        <div class="trending-title d-flex ">
                            <a href="#" class="text-white">Breaking</a>
                        </div>
                        <span class="text-gray mx-2 h-100" aria-live="assertive" aria-atomic="true"> | </span>
                        <div class="content float-left breaking-slider swiper-container">
                            <div class="swiper-wrapper">
                                <div class="content item d-flex justify-content-start align-items-center swiper-slide">
                                    <i class="fa-solid fa-circle text-white me-2"></i>
                                    <a href="#" class="fs-12 text-white">
                                        @foreach($breaking as $bkg)
                                        {{ $bkg->breaking }}
                                        @endforeach
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            <!-- </div> -->
        <!-- </div>
    </div> -->
    <!-- end-breaking-news-section -->

    <!--start top-bar-section -->
    <section class="top-bar-section py-lg-2 py-3 top-bar">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-1 col-sm-3 col-3 ">
                    <a href="index.html" class="logo">
                        <img src="{{ URL::asset('images/jktnews-r.png') }}" alt="" class="img-fluid w-100 h-100" />
                    </a>
                </div>
                <div class="col-xl-7 col-md-8 col-9 ">
                    <div class="row align-items-center justify-content-end  ">
                        <div class="col-xl-4 col-lg-4 br-gray py-1 d-lg-block d-none ">
                            <div class="social-icon d-flex justify-content-around ">
                                <a href="https://www.facebook.com/infyom/" target="_blank"> <i class="fa-brands fa-facebook text-secondary fs-18"></i></a>
                                <a href="https://twitter.com/infyom?lang=en" target="_blank"> <i class="fa-brands fa-twitter text-secondary fs-18"></i></a>
                                <a href="https://www.linkedin.com/organization-guest/company/infyom-technologies?challengeId=AQFgQaMxwSxCdAAAAXOA_wosiB2vYdQEoITs6w676AzV8cu8OzhnWEBNUQ7LCG4vds5-A12UIQk1M4aWfKmn6iM58OFJbpoRiA&amp;submissionId=0088318b-13b3-2416-9933-b463017e531e" target="_blank"> <i class="fa-brands fa-linkedin-in text-secondary fs-18"></i></a>
                                <a href="https://www.pinterest.com/" target="_blank"> <i class="fa-brands fa-pinterest text-secondary fs-18"></i></a>
                                <a href="https://www.instagram.com/?hl=en" target="_blank"> <i class="fa-brands fa-instagram text-secondary fs-18"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-sm-6  d-flex flex-wrap justify-content-sm-between justify-content-end align-items-center">
                            <span id="datetime" class="text-secondary fs-14 pe-sm-0"></span>
                            <button class="dropdown border-0 bg-transparent position-relative me-2 d-lg-none" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">

                            </button>
                            <div class="offcanvas-toggle d-lg-none d-block">
                                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasToggle" aria-controls="offcanvasToggle">
                                    <i class="fa-solid fa-bars "></i>
                                </a>
                                <div class="offcanvas-wrapper offcanvas-wrapper-start" tabindex="-1" id="offcanvasToggle" aria-labelledby="offcanvasToggleLabel">
                                    <div class="offcanvas-content m-0">
                                        <div class="text-end">
                                            <a href="/" data-bs-toggle="offcanvas" data-bs-target="#offcanvasToggle" aria-controls="offcanvasToggle">
                                                <i class="fa fa-close text-black fs-5 m-2 me-3"></i>
                                            </a>
                                        </div>
                                        <div class="set">
                                            <a href="/" class="fs-14 fw-6 active">
                                                Home
                                            </a>
                                            <a href="/kategoriLokal" class="fs-14 fw-6 active">
                                                Lokal
                                            </a>
                                            <a href="/kategoriNasional" class="fs-14 fw-6 active">
                                                Nasional
                                            </a>
                                            <a href="/kategoriInternasional" class="fs-14 fw-6 active">
                                                Internasional
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--end top-bar-section -->

    <!-- start header section -->
    <header class="bg-light d-lg-block d-none header">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-11 col-12">
                    <nav>
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link fs-14 fw-6 active" aria-current="page" href="/">
                                    Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link fs-14 fw-6 active" aria-current="page" href="/kategoriLokal">
                                    Lokal</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link fs-14 fw-6 active" aria-current="page" href="/kategoriNasional">
                                    Nasional</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link fs-14 fw-6 active" aria-current="page" href="/kategoriInternasional">
                                    Internasional</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-1">
                    <div class="dropdown header-icon d-lg-flex  justify-content-end d-none position-relative">
                        <button class="dropdown-toggle border-0 bg-transparent position-relative me-4" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <a href="javascript:void(0)"><i class="fa-solid fa-magnifying-glass fs-20 "></i></a>
                        </button>
                        <div class="dropdown-menu">
                            <form action="https://infynews.infyom.com/p" class="form search-form-box search-input">
                                <div class="form-group border-0 search-input">
                                    <input type="text" name="search" id="search" placeholder="Search..." class="form-control bg-light rt-search-control custom-input-control search-input mb-0" value="">
                                    <button type="submit" class="search-submit custom-submit search-input">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                            <i class="fa-solid fa-bars  fs-20"></i>
                        </a>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                            <a type="button" class="closebtn text-reset text-black" data-bs-dismiss="offcanvas" aria-label="Close">&times;</a>
                            <div class="offcanvas-content pt-60">
                                <div class="jktnews-logo mb-5">
                                    <a href="index.html">
                                        <img src="{{ URL::asset('images/jktnews-r.png') }}" alt="" class="w-100 h-100" />
                                    </a>
                                </div>
                                <div class="contact-desc">
                                    <h3 class="text-black fw-7 mb-4">Informasi Kontak</h3>
                                    <div class="desc d-flex  mb-4">
                                        <div class="icon bg-primary  d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-location-dot  text-white"></i>
                                        </div>
                                        <a class="fs-14 text-black mb-0  ps-4">Jl. Way Semangka No. 49 Pahoman, Bandar Lampung</a>
                                    </div>
                                    <div class="desc d-flex align-items-sm-center mb-4">
                                        <div class="icon bg-primary  d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-envelope  text-white"></i>
                                        </div>
                                        <a href="mailto:contact@infyom.in" class="fs-14 text-black mb-0  ps-4 d-flex  align-items-center"><span class="__cf_email__">jakartaws49@gmail.com</span></a>
                                    </div>
                                    <div class="desc d-flex align-items-sm-center mb-4 ">
                                        <div class="icon bg-primary  d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-phone  text-white"></i>
                                        </div>
                                        <a href="tel:+91 70963 36561" class="fs-14 text-black mb-0  ps-4 -flex  align-items-center">+62 895-6189-68020</a>
                                    </div>
                                </div>
                                <div class="social-icon d-flex  mt-4 flex-wrap">
                                    <a href="https://www.facebook.com/infyom/" target="_blank"> <i class="fa-brands fa-facebook-f text-gray fs-18 me-3"></i> </a>
                                    <a href="https://twitter.com/infyom?lang=en" target="_blank"> <i class="fa-brands fa-twitter text-gray fs-18 me-3"></i> </a>
                                    <a href="https://www.linkedin.com/organization-guest/company/infyom-technologies?challengeId=AQFgQaMxwSxCdAAAAXOA_wosiB2vYdQEoITs6w676AzV8cu8OzhnWEBNUQ7LCG4vds5-A12UIQk1M4aWfKmn6iM58OFJbpoRiA&amp;submissionId=0088318b-13b3-2416-9933-b463017e531e" target="_blank"> <i class="fa-brands fa-linkedin-in  text-gray fs-18 me-3"></i></a>
                                    <a href="https://www.pinterest.com/" target="_blank"> <i class="fa-brands fa-pinterest text-gray fs-18 me-3"></i></a>
                                    <a href="https://www.instagram.com/?hl=en" target="_blank"> <i class="fa-brands fa-instagram  text-gray fs-18 me-3"></i></a>
                                    <a href="https://vk.com/?lang=en" target="_blank"> <i class="fa-brands fa-vk text-gray fs-18 me-3"></i></a>
                                    <a href="https://www.telegram.org/k/" target="_blank"> <i class="fa-brands fa-telegram text-gray fs-18 me-3"></i></a>
                                    <a href="https://www.youtube.com/" target="_blank"> <i class="fa-brands fa-youtube text-gray fs-18 "></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- end header section -->

    <div>
        <div class="home-page">
            <!-- start hero section -->
            <section class="hero-section pt-60">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div id="my-carousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach($carousel as $key => $sliderItem)
                                    <div class="carousel-item {{$key == 0 ? 'active' : '' }} ">
                                        @if($sliderItem->carousel)
                                        <img src="{{ url('carousel/', $sliderItem->carousel) }}" class="d-block w-100 h-100 opacity-75" alt="..." >
                                        @endif
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>{{ $sliderItem->judul }}</h5>
                                            <p>{{ $sliderItem->subjudul }}</p>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#my-carousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#my-carousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-lg-0  mt-sm-5 mt-4">
                            <div class="row">
                                @foreach ($post as $p)
                                <div class="col-sm-6 mb-4 pb-xl-1 ">
                                    <div class="card position-relative">
                                        <div class="card-img-top">
                                            <a href="{{ route('readBerita', $p->slug) }}">
                                                <img src="{{ url('posts/', $p->gambar) }}" class="w-100 h-100" alt="" />
                                            </a>
                                        </div>
                                        <a href="" class="tags position-absolute  fw-7">{{ $p->kategori }}</a>
                                        <div class="card-body">
                                            <h5 class="card-title mb-1 fs-16 text-black fw-6">
                                                <a href="{{ route('readBerita', $p->slug) }}" class="fs-16 text-black fw-6">{{ $p->judul }}</a>
                                            </h5>
                                            <span class="card-text fs-12 text-gray">{{ $p->tanggal }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end hero section -->
            <!-- start sub-section -->
            <section class="sub-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">

                            <!-- start latest-news-section -->
                            <section class="latest-news-section pt-60">
                                <div class="section-heading border-bottom-0">
                                    <div class="row align-items-center">
                                        <div class="col-sm-6 section-heading-left">
                                            <h2 class="text-black mb-0">Berita Terkini</h2>
                                        </div>
                                        <div class=" col-sm-6 text-end">
                                            <a href="p.html" class="fs-14 btn fw-6">Lainnya</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="latest-news-post pt-40">
                                    <div class="row">
                                        @foreach($post as $p)
                                        <div class="col-lg-6 mb-sm-5 mb-4 pb-lg-0 pb-sm-3">
                                            <div class="card position-relative">
                                                <div class="news-post-image rounded-10">
                                                    <a href="{{ route('readBerita', $p->slug) }}">
                                                        <img src="{{ url('posts/', $p->gambar) }}" class="w-100 h-100" alt="" />
                                                    </a>
                                                </div>
                                                <a href="#" class="tags position-absolute fw-7">{{ $p->kategori }}</a>
                                                <div class="news-post-content">
                                                    <h3 class="text-black py-2 fw-7 mb-0 ">
                                                        <a href="{{ route('readBerita', $p->slug) }}" class="text-black py-2 fw-7">{{ $p->judul }}</a>
                                                    </h3>
                                                    <p class="fs-14 text-gray mb-0 pb-2">
                                                        {{ $p->subjudul}}
                                                    </p>
                                                    <div class="desc d-flex">
                                                        <p class="fs-14 text-black mb-0">By {{ $p->user }}</p>
                                                        <span class=" text-primary  px-2"> | </span>
                                                        <p class="fs-14 text-black mb-0">{{ $p->tanggal }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </section>
                            <!-- end latest-news-section -->

                            <!-- start latest-news-section -->
                            <section class="latest-news-section pt-60">
                                <div class="section-heading border-bottom-0">
                                    <div class="row align-items-center">
                                        <div class="col-sm-6 section-heading-left">
                                            <h2 class="text-black mb-0">Berita Nasional</h2>
                                        </div>
                                        <div class=" col-sm-6 text-end">
                                            <a href="p.html" class="fs-14 btn fw-6">Lainnya</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="latest-news-post pt-40">
                                    <div class="row">
                                        @foreach($postnasional as $pn)
                                        <div class="col-lg-6 mb-sm-5 mb-4 pb-lg-0 pb-sm-3">
                                            <div class="card position-relative">
                                                <div class="news-post-image rounded-10">
                                                    <a href="{{ route('readBerita', $pn->slug) }}">
                                                        <img src="{{ url('posts/', $pn->gambar) }}" class="w-100 h-100" alt="" />
                                                    </a>
                                                </div>
                                                <a href="#" class="tags position-absolute fw-7">{{ $pn->kategori }}</a>
                                                <div class="news-post-content">
                                                    <h3 class="text-black py-2 fw-7 mb-0 ">
                                                        <a href="{{ route('readBerita', $pn->slug) }}" class="text-black py-2 fw-7">{{ $pn->judul }}</a>
                                                    </h3>
                                                    <p class="fs-14 text-gray mb-0 pb-2">
                                                        {{ $pn->subjudul}}
                                                    </p>
                                                    <div class="desc d-flex">
                                                        <p class="fs-14 text-black mb-0">By {{ $pn->user }}</p>
                                                        <span class=" text-primary  px-2"> | </span>
                                                        <p class="fs-14 text-black mb-0">{{ $pn->tanggal }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </section>
                            <!-- end latest-news-section -->

                            <!-- start latest-news-section -->
                            <section class="latest-news-section pt-60">
                                <div class="section-heading border-bottom-0">
                                    <div class="row align-items-center">
                                        <div class="col-sm-6 section-heading-left">
                                            <h2 class="text-black mb-0">Berita Lokal</h2>
                                        </div>
                                        <div class=" col-sm-6 text-end">
                                            <a href="p.html" class="fs-14 btn fw-6">View More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="latest-news-post pt-40">
                                    <div class="row">
                                        @foreach($postlokal as $pl)
                                        <div class="col-lg-6 mb-sm-5 mb-4 pb-lg-0 pb-sm-3">
                                            <div class="card position-relative">
                                                <div class="news-post-image rounded-10">
                                                    <a href="{{ route('readBerita', $pl->slug) }}">
                                                        <img src="{{ url('posts/', $pl->gambar) }}" class="w-100 h-100" alt="" />
                                                    </a>
                                                </div>
                                                <a href="#" class="tags position-absolute fw-7">{{ $pl->kategori }}</a>
                                                <div class="news-post-content">
                                                    <h3 class="text-black py-2 fw-7 mb-0 ">
                                                        <a href="{{ route('readBerita', $pl->slug) }}" class="text-black py-2 fw-7">{{ $pl->judul }}</a>
                                                    </h3>
                                                    <p class="fs-14 text-gray mb-0 pb-2">
                                                        {{ $pl->subjudul}}
                                                    </p>
                                                    <div class="desc d-flex">
                                                        <p class="fs-14 text-black mb-0">By {{ $pl->user }}</p>
                                                        <span class=" text-primary  px-2"> | </span>
                                                        <p class="fs-14 text-black mb-0">{{ $pl->tanggal }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </section>
                            <!-- end latest-news-section -->

                        </div>
                        <div class="col-lg-4">

                            <!-- start trending-post-section -->
							<section class="trending-post-section pt-60">
								<div class="section-heading border-0 mb-2">
									<div class="row align-items-center">
										<div class="col-12 section-heading-left">
											<h2 class="text-black mb-0">Trending Post</h2>
										</div>
									</div>
								</div>
								<div class="trending-post">
									<div class="row">
										<div class="col-xl-12 d-flex flex-wrap justify-content-between">
                                            @foreach ($postrekomen as $pr)
											<div class="col-xl-12 col-sm-6 card d-flex flex-xl-row py-20 pe-xl-0 pe-lg-4 pe-sm-3">
												<div class="row">
													<div class="col-xl-4 col-5 card-top">
														<div class="card-img-top">
															<a href="{{ route('readBerita', $pr->slug) }}">
																<img src="{{ url('posts/', $pr->gambar) }}" alt="" class="w-100 h-100 w-300px">
															</a>
														</div>
													</div>
													<div class="col-xl-8 col-7">
														<div class="card-body ">
															<h5 class="card-title mb-1 fs-12 text-gray fw-7">{{ $pr->kategori }}</h5>
															<p class="card-title mb-0 fs-14 text-black fw-6">
																<a href="{{ route('readBerita', $pr->slug) }}" class="text-black">
																	{{ $pr->judul }}
																</a>
															</p>
															<span class="card-text fs-12 text-gray">{{ $pr->tanggal }}</span>
														</div>
													</div>
												</div>
											</div>
                                            @endforeach
										</div>

									</div>
								</div>
							</section>
							<!-- end trending-post-section -->

                            <!-- start popular-tag-section -->
                            <section class="popular-tag-section py-4">
                                <div class="section-heading border-0 mb-30">
                                    <div class="row align-items-center">
                                        <div class="col-12 section-heading-left">
                                            <h2 class="text-black mb-0">Popular Tags</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="popular-tags">
                                    @foreach ($tag as $t)
                                    <div class="tag br-gray-100 d-inline-block py-2 px-3 mb-3 me-2">
                                        <a href="#" class="fs-14 text-black ">{{ $t->tag }}</a>
                                    </div>
                                    @endforeach
                                </div>
                            </section>
                            <!-- end popular-tag-section -->

                        </div>
                    </div>
                </div>
            </section>

            <!-- start featured-post-section -->
            <!-- <section class="featured-post-section py-60">
                <div class="container">
                    <div class="section-heading pb-3">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-md-6 section-heading-left">
                                <h2 class="text-black">Featured Post</h2>
                            </div>
                            <div class="col-md-6 section-heading-right">
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade featured-post pt-60 show active" id="menu-f-23" role="tabpanel" aria-labelledby="23-f-tab">
                            <div class="row">
                                <div class="col-lg-3 d-lg-block d-sm-flex">
                                    <div class="card mb-4 pb-sm-2 me-lg-0 pe-sm-1 me-sm-2">
                                        <div class="card-img-top ">
                                            <a href="p/samsung-to-invest-over-us-5-billion-as-it-targets-net-zero-emissions-by-2050.html">

                                                <img src="../infynews.nyc3.digitaloceanspaces.com/post%20image/692/sam-2-(1).jpg" class="w-100 h-100" alt="" />
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title mb-1 fs-16 text-black fw-6">
                                                <a href="p/samsung-to-invest-over-us-5-billion-as-it-targets-net-zero-emissions-by-2050.html" class="fs-16 text-black fw-6">Samsung to invest over US$5 billion as i...</a>
                                            </h5>
                                            <span class="card-text fs-12 text-gray">Sep 15, 2022</span>
                                        </div>
                                    </div>
                                    <div class="card mb-4 pb-sm-2 me-lg-0 pe-sm-1 me-sm-2">
                                        <div class="card-img-top ">
                                            <a href="p/microsoft-s-acquisition-deal-for-activision-to-face-in-depth-antitrust-probe-in-uk-report.html">

                                                <img src="../infynews.nyc3.digitaloceanspaces.com/post%20image/690/micro-11.jpg" class="w-100 h-100" alt="" />
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title mb-1 fs-16 text-black fw-6">
                                                <a href="p/microsoft-s-acquisition-deal-for-activision-to-face-in-depth-antitrust-probe-in-uk-report.html" class="fs-16 text-black fw-6">Microsoft's acquisition deal for Activis...</a>
                                            </h5>
                                            <span class="card-text fs-12 text-gray">Sep 15, 2022</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-lg-0">
                                    <div class="featured-post-image position-relative rounded-10">
                                        <a href="p/once-rejected-for-a-job-at-hp-singapore-this-tiger-mum-is-now-its-managing-director-.html">


                                            <img src="../infynews.nyc3.digitaloceanspaces.com/post%20image/808/HR-2.jpg" class="w-100 h-100" alt="" />
                                        </a>
                                        <a href="p/once-rejected-for-a-job-at-hp-singapore-this-tiger-mum-is-now-its-managing-director-.html" class="overlay">
                                        </a>
                                        <div class="featured-post-content position-absolute px-30 mb-3 pb-1">
                                            <h3 class="text-white pb-sm-2">
                                                <a href="p/once-rejected-for-a-job-at-hp-singapore-this-tiger-mum-is-now-its-managing-director-.html" class="text-white">Once rejected for a job at HP Singapore, this 'tiger mum' is now its
                                                    managing director.</a>
                                            </h3>
                                            <div class="desc d-sm-flex align-items-center justify-content-between">
                                                <p class="fs-14 text-white mb-sm-0 mb-1">
                                                    Sep 15, 2022</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-lg-block d-sm-flex mt-lg-0 mt-sm-5 mt-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- end featured-post-section -->

            <!-- start blog-section -->
            <!-- end blog-section -->
            <!-- end sub-section -->
        </div>
    </div>

    <!-- start footer section -->
    <footer class="footer pt-60 bg-light">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 col-sm-7 ">
                    <div class="footer-logo">
                        <a href="/">
                            <img src="{{ URL::asset('images/jktnews-r.png') }}" alt="" class="img-fluid" style="width: 300px;" />
                        </a>
                    </div>
                    <p class="d-block text-gray my-4 fs-14 text-gray">
                        Leading Web & Mobile Development Company with proven expertise, India's Leading Laravel Open-Source
                        contributor with over 3 million+ Downloads.
                    </p>
                </div>
                <div class="col-lg-2 col-sm-4 mb-3  ">
                    <div class="categories ps-xxl-5 ps-lg-4 ps-md-5 ms-lg-0 ms-md-5 ps-sm-4">
                        <h3 class="mb-3 text-black fw-7">Categories</h3>
                        @foreach ($katesedikit as $ks)
                        <ul class="ps-0">
                            <li>
                                <a href="#l" class="text-decoration-none mb-3 d-block text-gray fs-14 text:hover">{{ $ks->kategori }}</a>
                            </li>
                        </ul>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="last-line pt-60 pb-4">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xxl-3 col-lg-4 col-sm-6 text-lg-start text-sm-end text-center order-2 order-lg-0">
                        <p href="#" class="fs-12 text-gray mb-0">All Rights Reserved © 2023 Jakarta-News</p>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-sm-6 text-lg-center text-sm-end text-center my-sm-0 my-3  order-1 order-lg-1">
                        <div class="social-icon d-flex justify-content-lg-center justify-content-sm-start justify-content-center">
                            <a href="https://www.facebook.com/infyom/" target="_blank"> <i class="fa-brands fa-facebook-f text-gray fs-18 me-xl-5 me-4"></i> </a>
                            <a href="https://twitter.com/infyom?lang=en" target="_blank"> <i class="fa-brands fa-twitter text-gray fs-18 me-xl-5 me-4"></i> </a>
                            <a href="https://www.linkedin.com/organization-guest/company/infyom-technologies?challengeId=AQFgQaMxwSxCdAAAAXOA_wosiB2vYdQEoITs6w676AzV8cu8OzhnWEBNUQ7LCG4vds5-A12UIQk1M4aWfKmn6iM58OFJbpoRiA&amp;submissionId=0088318b-13b3-2416-9933-b463017e531e" target="_blank"> <i class="fa-brands fa-linkedin-in  text-gray fs-18 me-xl-5 me-4"></i></a>
                            <a href="https://www.pinterest.com/" target="_blank"> <i class="fa-brands fa-pinterest text-gray fs-18 me-xl-5 me-4"></i></a>
                            <a href="https://www.instagram.com/?hl=en" target="_blank"> <i class="fa-brands fa-instagram  text-gray fs-18  me-xl-5 me-4"></i></a>
                            <a href="https://vk.com/?lang=en" target="_blank"> <i class="fa-brands fa-vk text-gray fs-18  me-xl-5 me-4"></i></a>
                            <a href="https://www.telegram.org/k/" target="_blank"> <i class="fa-brands fa-telegram  text-gray fs-18  me-xl-5 me-4"></i></a>
                            <a href="https://www.youtube.com/" target="_blank"> <i class="fa-brands fa-youtube  text-gray fs-18 "></i></a>
                        </div>
                    </div>
                    <!-- <div class="col-xxl-3 col-lg-4 col-sm-12 text-lg-end mb-lg-0 mb-sm-4 text-center order-0 order-lg-2">
                        <div class="desc  justify-content-center ">
                            <a href="terms-conditions.html" class="fs-12 text-gray  me-4">Terms &amp; conditions</a>
                            <a href="https://infynews.infyom.com/support" class="fs-12 text-gray  me-4">Support</a>
                            <a href="privacy.html" class="fs-12 text-gray">Privacy</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer section -->

    <!-- start dark-mode-section -->
    <div class="theme-switch-box-wrap">
        <div class="theme-switch-box">
            <span class="theme-status"><i class="fa-solid fa-sun"></i></span>
            <label class="switch-label" for="themeSwitchCheckbox">
                <input class="input" type="checkbox" name="themeSwitchCheckbox" id="themeSwitchCheckbox">
                <span class="switch" onclick="myFunction()"></span>
            </label>
            <span class="theme-status"><i class="fas fa-moon"></i></span>
        </div>
    </div>
    <!-- end dark-mode-section -->
</body>

<script>
    var dt = new Date();
    document.getElementById("datetime").innerHTML = dt.toDateString();
</script>
</script>
<!-- Mirrored from infynews.infyom.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Feb 2023 16:12:56 GMT -->

</html>
