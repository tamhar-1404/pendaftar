<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/skote/layouts/auth-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Dec 2023 01:39:50 GMT -->

<head>

    <meta charset="utf-8" />
    <title>PKL HUMMATECH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('image/logo.png') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ asset('assets-admin/libs/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/libs/owl.carousel/assets/owl.theme.default.min.css') }}">
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets-admin/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets-admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets-admin/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <style>
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            opacity: 1;
            transition: opacity 0.5s ease-out;
        }

        #loader {
            border: 16px solid #f3f3f3;
            border-top: 16px solid #3498db;
            border-radius: 50%;
            width: 120px;
            height: 120px;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        body.loaded #preloader {
            display: none;
        }
    </style>
</head>

<body class="auth-body-bg">

    <div>
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xl-8">
                    <div class="auth-full-bg pt-lg-5 p-4">
                        <div class="w-100">
                            <div class="bg-overlay"></div>
                            <div class="d-flex h-100 flex-column">
                                <div class="mt-auto">
                                    <div class="d-flex justify-content-center px-5">
                                        <img class="w-full" x-show="!$store.global.isDarkModeEnabled"
                                            src="{{ asset('admin/assets/images/Logo.png') }}" width="100px"
                                            alt="image" />
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7">
                                            <div class="text-center">
                                                <h4 class="mb-3"><i
                                                        class="bx bxs-quote-alt-left text-primary h1 align-middle me-3"></i><span
                                                        class="text-primary">PKL HUMMATECH</span></h4>
                                                <div dir="ltr">
                                                    <div class="owl-carousel owl-theme auth-review-carousel"
                                                        id="auth-review-carousel">
                                                        <div class="item">
                                                            <div class="py-3">
                                                                <p class="font-size-16 mb-4">" Selamat datang di
                                                                    HUMMATECH Software House, tempat di mana inovasi
                                                                    bertemu dengan keahlian. Kami adalah perusahaan
                                                                    pengembangan perangkat lunak terkemuka yang
                                                                    berdedikasi untuk mengubah ide-ide Anda menjadi
                                                                    solusi terdepan. Dengan tim profesional yang
                                                                    terampil dan semangat dalam teknologi, kami berusaha
                                                                    memberikan produk perangkat lunak yang luar biasa
                                                                    dan disesuaikan untuk memenuhi kebutuhan Anda yang
                                                                    unik.. "</p>
                                                            </div>

                                                        </div>
                                                        <div class="item">
                                                            <div class="py-3">
                                                                <p class="font-size-16 mb-4">" Selamat datang di
                                                                    HUMMATECH Software House, tempat di mana ide-ide
                                                                    menjadi kenyataan yang kuat. Kami adalah perusahaan
                                                                    pengembangan perangkat lunak yang berdedikasi untuk
                                                                    memberikan solusi inovatif bagi Anda. Dengan tim
                                                                    ahli kami dan semangat dalam teknologi, kami
                                                                    berkomitmen untuk menghadirkan produk perangkat
                                                                    lunak yang luar biasa, mengubah cara Anda
                                                                    berbisnis.. "</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-4">
                    <div class="auth-full-page-content p-md-5 p-4">
                        <div class="w-100">

                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5">
                                    <a href="kavascript:void(0)" class="d-block card-logo">
                                        <img src="{{ asset('assets-landing/images/logolandingpng.png') }}"
                                            alt="" height="45" class="card-logo-dark">
                                        <img src="assets/images/logo-light.png" alt="" height="18"
                                            class="card-logo-light">
                                    </a>
                                </div>
                                <div class="my-auto">
                                    <div>
                                        <h5 class="text-primary">Selamat Datang</h5>
                                        <p class="text-muted">Di PKL HUMMATECH </p>
                                    </div>
                                    <div class="mt-4">
                                        <form method="POST" action="{{ route('postlogin') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="text" class="form-control" id="email" name="email"
                                                    placeholder="Enter Email">
                                                @error('email')
                                                    <div class="text-sm text-danger font-medium">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <div class="float-end">
                                                    <a href="auth-recoverpw-2.html" class="text-muted">Forgot
                                                        password?</a>
                                                </div>
                                                <label class="form-label">Password</label>
                                                <div class="input-group auth-pass-inputgroup">
                                                    <input type="password" class="form-control"
                                                        placeholder="Enter password" aria-label="Password"
                                                        aria-describedby="password-addon" name="password">
                                                    <button class="btn btn-light " type="button" id="password-addon"><i
                                                            class="mdi mdi-eye-outline"></i></button>
                                                </div>
                                                @error('password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mt-3 d-grid">
                                                <button class="btn btn-primary waves-effect waves-light"
                                                    type="submit">Log In</button>
                                            </div>
                                        </form>
                                        <div class="mt-5 text-center">
                                            <p>Belum Punya Akun ? <a href="{{ route('login.create') }}"
                                                    class="fw-medium text-primary"> Register </a> </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 mt-md-5 text-center">
                                    <p class="mb-0">©
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script> <i class="mdi mdi-heart text-danger"></i> by Hummatech
                                    </p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>
    <div id="preloader">
        <div id="loader"></div>
    </div>
    <!-- JAVASCRIPT -->
    <script>
        window.addEventListener('load', function() {
            const preloader = document.getElementById('preloader');
            preloader.style.animation = 'none';
            preloader.style.opacity = 0;
            document.body.classList.add('loaded');
        });
    </script>
    <script src="{{ asset('assets-admin/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/node-waves/waves.min.js') }}"></script>

    <!-- owl.carousel js -->
    <script src="{{ asset('assets-admin/libs/owl.carousel/owl.carousel.min.js') }}"></script>

    <!-- auth-2-carousel init -->
    <script src="{{ asset('assets-admin/js/pages/auth-2-carousel.init.js') }}"></script>
</body>

<!-- Mirrored from themesbrand.com/skote/layouts/auth-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Dec 2023 01:39:50 GMT -->

</html>
