<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="HCBSC - Harley Club Bandung Shooting Club">
    <meta name="author" content="Harley Club Bandung">
    <meta name="keyword" content="HCBSC,Harley,Davidson,Shooting,Club,Bandung,Perbakin,IPSC,WRAFB">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'HCBSC') }}</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/FontAwesome/6.2.1/css/all.min.css') }}">

    <!-- Favicons-->
    <link rel="icon" type="image/png" href="{{ asset('favicons/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicons/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-touch-icon.png') }}" />
    <meta name="apple-mobile-web-app-title" content="HCBSC" />
    <link rel="manifest" href="{{ asset('favicons/site.webmanifest') }}" />

    <!-- Sweetalert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/4ce77u0y45a0kxjxqgmq8hyqdgrqd8pdetaervdmri41d1qa/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#desc',
            plugins: 'code table lists',
            toolbar: 'undo redo | blocks| bold italic | bullist numlist | code | table | alignleft aligncenter alignright alignjustify | indent outdent'
        });
    </script>

    @stack('css')

</head>

<body>
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
            <div class="container-fluid px-lg-5 py-2">
                <a class="navbar-brand" href="{{ route('landing') }}">
                    <img src="{{ asset('assets/logo/hcb_main.webp') }}" alt="HCBSC" height="50">
                </a>
                <h4 class="text-warning">HCB Shooting Club</h4>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        @if (Route::is('landing'))
                            <li class="nav-item">
                                <button class="nav-link active" aria-current="page" onclick="backToTop()"
                                    id="homee">Beranda</button>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('landing') }}"
                                    class="nav-link {{ request()->is('/') ? 'active' : '' }}">Beranda</a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('tentang-kami*') ? 'active' : '' }}"
                                href="{{ route('about') }}">Tentang kami</a>
                        </li>
                        <li class="nav-item dropdown">
                            <button class="nav-link dropdown-toggle {{ request()->is('informasi*') ? 'active' : '' }}"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">Informasi</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('berita') }}">Berita</a></li>
                                <li><a class="dropdown-item" href="{{ route('agenda') }}">Agenda Kegiatan</a></li>
                                <li><a class="dropdown-item" href="{{ route('galeri') }}">Galeri</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <button
                                class="nav-link dropdown-toggle {{ request()->is('keanggotaan*') ? 'active' : '' }}"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">Keanggotaan</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                        href="{{ route('keanggotaan.pendaftaran') }}">Pendaftaran</a></li>
                                <li><a class="dropdown-item" href="{{ route('keanggotaan.cek') }}">Cek keanggotaan</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('keanggotaan.atribut') }}">Atribut</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('hubungi-kami*') ? 'active' : '' }}"
                                href="{{ route('contact') }}">Hubungi kami</a>
                        </li>
                        @auth
                            <li class="nav-item dropdown">
                                <button
                                    class="nav-link dropdown-toggle {{ request()->is('keanggotaan*') ? 'active' : '' }}"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">Admin</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('berita.create') }}">Buat Berita</a></li>
                                    <li><a class="dropdown-item" href="{{ route('agenda.create') }}">Buat Agenda</a></li>
                                    <li><a class="dropdown-item" href="{{ route('anggota.index') }}">Cek Pendaftaran</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <main>
                @yield('content')
            </main>
        </div>

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 pt-5">
                    <div class="col-12 col-md-5 mb-3">
                        <a aria-current="page" onclick="backToTop()" id="homee"
                            class="d-flex align-items-center mb-3 text-decoration-none">
                            <img src="{{ asset('assets/logo/hcb_main.webp') }}" alt="HCBSC" height="64px">
                            <h3 class="text-warning">HCB Shooting Club</h3>
                        </a>
                        <p class="text-warning"><strong>Sekretariat</strong></p>
                        <ul class="nav flex-column text-white">
                            <li class="nav-item mb-2">
                                <p><strong>HCB Shooting Club<br></strong>Inhoftank Jati Permai, Ruko 72, Kota Bandung,
                                    Jawa Barat 40243</p>
                            </li>
                        </ul>

                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="https://wa.me/6281318554360" target="_blank"
                                    class="nav-link p-0 text-white"><i class="fa-brands fa-whatsapp fa-xl me-2"></i>
                                    0813 1855 4360 - Admin</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-1"></div>

                    <div class="col-6 col-md-3 mb-3">
                        <h5 class="text-warning"><strong>Informasi</strong></h5>
                        <ul class="nav flex-column">
                            @if (Route::is('landing'))
                                <li class="nav-item mb-2">
                                    <button aria-current="page" onclick="backToTop()" id="homee"
                                        class="nav-link p-0 text-white">Beranda
                                    </button>
                                </li>
                            @else
                                <li class="nav-item mb-2">
                                    <a href="{{ route('landing') }}"
                                        class="nav-link p-0 text-white {{ request()->is('/') ? 'active' : '' }}">Beranda</a>
                                </li>
                            @endif

                            <li class="nav-item mb-2">
                                <a href="{{ route('about') }}" class="nav-link p-0 text-white">
                                    Tentang kami
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="{{ route('agenda') }}" class="nav-link p-0 text-white">
                                    Agenda kegiatan
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="{{ route('berita') }}" class="nav-link p-0 text-white">
                                    Berita
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="{{ route('galeri') }}" class="nav-link p-0 text-white">
                                    Galeri
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="{{ route('contact') }}" class="nav-link p-0 text-white">
                                    Hubungi kami
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-3 mb-3">
                        <h5 class="text-warning"><strong>Keanggotaan</strong></h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="{{ route('keanggotaan.pendaftaran') }}"
                                    class="nav-link p-0 text-white">Pendaftaran</a>
                            </li>
                            <li class="nav-item mb-2"><a href="{{ route('keanggotaan.cek') }}"
                                    class="nav-link p-0 text-white">Cek
                                    keanggotaan</a>
                            </li>
                            <li class="nav-item mb-2"><a href="{{ route('keanggotaan.atribut') }}"
                                    class="nav-link p-0 text-white">Atribut</a>
                            </li>
                            @auth
                            @else
                                <li class="nav-item mb-2"><a href="{{ route('login') }}"
                                        class="nav-link p-0 text-white">Login - Admin</a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
                <div class="row pb-3 pt-4">
                    <div class="col-12 text-md-end text-center">
                        <a href="https://www.instagram.com/partnership.co.id/" target="_blank" class="text-white"
                            style="margin-left: 12px"><i class="fa-brands fa-instagram fa-xl"></i></a>
                        <a href="https://www.youtube.com/@partnershipsolution" target="_blank" class="text-white"
                            style="margin-left: 12px"><i class="fa-brands fa-youtube fa-xl"></i></a>
                    </div>
                </div>
                <div class="row py-3 mt-2" style="border-top: 1px solid #e0b256;">
                    <small class="col-12 col-md-6 text-white text-md-start text-center">&copy; 2025
                        <strong class="text-warning">HCBSC</strong>. All
                        rights
                        reserved</small>

                    {{-- <a href="{{ route('landing') }}"
                        class="col-12 col-md-2 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/logo/hcb_bw.webp') }}" alt="HCBSC" height="32px">
                    </a> --}}

                    <div class="col-12 col-md-6 text-md-end text-center">
                        <a href="#" class="text-white" style="text-decoration:none"><small>Syarat &
                                Ketentuan</small></a>
                        <a href="#" class="text-white"
                            style="text-decoration:none; margin-left: 12px"><small>Kebijakan
                                Privasi</small></a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Back to top button -->
        <button type="button" class="btn btn-dark btn-floating btn-lg shadow-lg " id="btn-back-to-top"
            aria-label="Back to Top">
            <i class="fas fa-angle-up fa-2xl text-center" style="color: #e0b256"></i>
        </button>
    </div>

    <!-- REQUIRED SCRIPTS -->

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- DataTables -->
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>

    <!-- Navbar -->
    <script>
        const navEl = document.querySelector('.navbar');
        var element = document.getElementById("homee");

        window.addEventListener('scroll', () => {
            if (window.scrollY >= 56) {
                // element.classList.remove("active");
                navEl.classList.add('navbar-scrolled');
            } else if (window.scrollY < 56) {
                // element.classList.add("active");
                navEl.classList.remove('navbar-scrolled');
            }
        })
    </script>

    <!-- Back to Top Button -->
    <script>
        let mybutton = document.getElementById("btn-back-to-top");

        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (
                document.body.scrollTop > 20 ||
                document.documentElement.scrollTop > 20
            ) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }
        mybutton.addEventListener("click", backToTop);

        function backToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

    <!-- Sweetalert2 -->
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            iconColor: 'white',
            customClass: {
                popup: 'colored-toast'
            },
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true
        })

        @if (session('pesan'))
            @switch(session('level-alert'))
                @case('alert-success')
                Toast.fire({
                    icon: 'success',
                    title: '{{ Session::get('pesan') }}'
                })
                @break

                @case('alert-danger')
                Toast.fire({
                    icon: 'error',
                    title: '{{ Session::get('pesan') }}'
                })
                @break

                @case('alert-warning')
                Toast.fire({
                    icon: 'warning',
                    title: '{{ Session::get('pesan') }}'
                })
                @break

                @case('alert-question')
                Toast.fire({
                    icon: 'question',
                    title: '{{ Session::get('pesan') }}'
                })
                @break

                @default
                Toast.fire({
                    icon: 'info',
                    title: '{{ Session::get('pesan') }}'
                })
            @endswitch
        @endif
        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                Toast.fire({
                    icon: 'error',
                    title: '{{ $error }}'
                })
            @endforeach
        @endif
    </script>

    @stack('scripts')
</body>

</html>
