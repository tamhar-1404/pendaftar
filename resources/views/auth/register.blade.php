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
    <link href="{{ asset('assets-admin/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
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
    @if (session()->has('limitbang'))
        <script>
            toastr.error("{{ session('limitbang') }}");
        </script>
    @endif
    @if (session()->has('berhasil_daftar'))
        <script>
            Swal.fire({
                title: "Berhasil!",
                text: "{{ session('berhasil_daftar') }}",
                icon: "info",
                showCancelButton: false,
                confirmButtonColor: "#3085d6",
                confirmButtonText: "OK",
                timer: 3000
            });
        </script>
    @endif
    @if (session()->has('success'))
        <script>
            Swal.fire(
                'Berhasil!',
                "{{ session('success') }}",
                'success'
            )
        </script>
    @endif
    @if (session()->has('error'))
        <script>
            Swal.fire(
                'Oops..!',
                "{{ session('error') }}",
                'error'
            )
        </script>
    @endif
    <div>
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xl-6">
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

                <div class="col-xl-6">
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
                                <div id="basic-example">
                                    <!-- Seller Details -->
                                    <h3>Seller Details</h3>
                                    <section>
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-firstname-input">First name</label>
                                                        <input type="text" class="form-control" id="basicpill-firstname-input" placeholder="Enter Your First Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-lastname-input">Last name</label>
                                                        <input type="text" class="form-control" id="basicpill-lastname-input" placeholder="Enter Your Last Name">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-phoneno-input">Phone</label>
                                                        <input type="text" class="form-control" id="basicpill-phoneno-input" placeholder="Enter Your Phone No.">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-email-input">Email</label>
                                                        <input type="email" class="form-control" id="basicpill-email-input" placeholder="Enter Your Email ID">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="basicpill-address-input">Address</label>
                                                        <textarea id="basicpill-address-input" class="form-control" rows="2" placeholder="Enter Your Address"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </section>

                                    <!-- Company Document -->
                                    <h3>Company</h3>
                                    <section>
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-pancard-input">PAN Card</label>
                                                        <input type="text" class="form-control" id="basicpill-pancard-input" placeholder="Enter Your PAN No.">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-vatno-input">VAT/TIN No.</label>
                                                        <input type="text" class="form-control" id="basicpill-vatno-input"  placeholder="Enter Your VAT/TIN No.">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-cstno-input">CST No.</label>
                                                        <input type="text" class="form-control" id="basicpill-cstno-input" placeholder="Enter Your CST No.">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-servicetax-input">Service Tax No.</label>
                                                        <input type="text" class="form-control" id="basicpill-servicetax-input" placeholder="Enter Your Service Tax No.">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-companyuin-input">Company UIN</label>
                                                        <input type="text" class="form-control" id="basicpill-companyuin-input" placeholder="Enter Your Company UIN">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-declaration-input">Declaration</label>
                                                        <input type="text" class="form-control" id="basicpill-Declaration-input" placeholder="Declaration Details">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </section>

                                    <!-- Bank Details -->
                                    <h3>Bank Details</h3>
                                    <section>
                                        <div>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-namecard-input">Name on Card</label>
                                                            <input type="text" class="form-control" id="basicpill-namecard-input" placeholder="Enter Your Name on Card">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label>Credit Card Type</label>
                                                            <select class="form-select">
                                                                  <option selected>Select Card Type</option>
                                                                  <option value="AE">American Express</option>
                                                                  <option value="VI">Visa</option>
                                                                  <option value="MC">MasterCard</option>
                                                                  <option value="DI">Discover</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-cardno-input">Credit Card Number</label>
                                                            <input type="text" class="form-control" id="basicpill-cardno-input"  placeholder="Credit Card Number">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-card-verification-input">Card Verification Number</label>
                                                            <input type="text" class="form-control" id="basicpill-card-verification-input" placeholder="Credit Verification Number">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="basicpill-expiration-input">Expiration Date</label>
                                                            <input type="text" class="form-control" id="basicpill-expiration-input" placeholder="Card Expiration Date">
                                                        </div>
                                                    </div>

                                                </div>
                                            </form>
                                          </div>
                                    </section>

                                    <!-- Confirm Details -->
                                    <h3>Confirm Detail</h3>
                                    <section>
                                        <div class="row justify-content-center">
                                            <div class="col-lg-6">
                                                <div class="text-center">
                                                    <div class="mb-4">
                                                        <i class="mdi mdi-check-circle-outline text-success display-4"></i>
                                                    </div>
                                                    <div>
                                                        <h5>Confirm Detail</h5>
                                                        <p class="text-muted">If several languages coalesce, the grammar of the resulting</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
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
    <script src="{{ asset('assets-admin/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/node-waves/waves.min.js') }}"></script>

    <!-- jquery step -->
    <script src="{{ asset('assets-admin/libs/jquery-steps/build/jquery.steps.min.js') }}"></script>

    <!-- form wizard init -->
    <script src="{{ asset('assets-admin/js/pages/form-wizard.init.js') }}"></script>
    <!-- owl.carousel js -->
    <script src="{{ asset('assets-admin/libs/owl.carousel/owl.carousel.min.js') }}"></script>

    <!-- auth-2-carousel init -->
    <script src="{{ asset('assets-admin/js/pages/auth-2-carousel.init.js') }}"></script>
</body>

<!-- Mirrored from themesbrand.com/skote/layouts/auth-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Dec 2023 01:39:50 GMT -->

</html>
