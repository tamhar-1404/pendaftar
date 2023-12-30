<!doctype html>
<html lang="en">

<!-- Mirrored from 99webpage.com/theme-review/landingpage/smooth/home-alt2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Dec 2023 17:40:34 GMT -->

<head>
    <title>Smooth software company landing page</title>

    <meta charset="utf-8">
    <meta name="keywords"
        content="Landing page, software, (SaaS) services, Bootstrap 4 template, plugins, app, SEO friendly, business, Sass, Gulp">
    <meta name="description"
        content="Smooth is a HTML5 Landing Page Build using Gulp, SCSS, and Bootstrap4. It was designed to promote your App, services or business projects.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="99webpage">

    <link rel="icon" type="image/png" href="{{ asset('favicon-landing/smooth-favicon-16x16.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="favicon-landing/smooth-favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-landing/smooth-favicon-144x144.png" sizes="144x144">
    <link rel="icon" type="image/png" href="favicon-landing/smooth-favicon-196x196.png" sizes="196x196">

    <link rel="apple-touch-icon" href="favicon-landing/smooth-favicon-196x196.png">

    <!-- Template stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets-landing/css/style.min.css') }}">
</head>

<body>
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
    @include('layout.landing.header')

    @yield('content')
    <!-- Start Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__widget">
                        <img src="assets/brand/logo.png" class="footer__widget-logo" alt="Smooth" />
                        <p>St.Kemacetan timur No.13 Block Q2 Jakarta - Indonesia</p>
                        <div class="footer__widget-contact">
                            <i class="fa fa-phone"></i>
                            <p>(021) 111-222-333-44</p>
                        </div>
                        <div class="footer__widget-contact">
                            <i class="fa fa-envelope"></i>
                            <p>info@yourdomain.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-2 col-sm-3">
                    <div class="footer__widget">
                        <h4 class="footer__widget-title">Product</h4>
                        <ul class="footer__widget-linklist">
                            <li><a href="#">Landing page</a></li>
                            <li><a href="#">Email marketing</a></li>
                            <li><a href="#">HTML template</a></li>
                            <li><a href="#">Angular builder</a></li>
                            <li><a href="#">Worpress theme</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-lg-2 col-sm-3">
                    <div class="footer__widget">
                        <h4 class="footer__widget-title">Company</h4>
                        <ul class="footer__widget-linklist">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-lg-2 col-sm-3">
                    <div class="footer__widget">
                        <h4 class="footer__widget-title">Resources</h4>
                        <ul class="footer__widget-linklist">
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">F.A.Q</a></li>
                            <li><a href="#">Testimoni</a></li>
                            <li><a href="#">Site map</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-sm-3">
                    <div class="footer__widget">
                        <h4 class="footer__widget-title">Follow us</h4>
                        <ul class="footer__widget-network">
                            <li><a href="#" class="footer__widget-network-link"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#" class="footer__widget-network-link"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#" class="footer__widget-network-link"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li><a href="#" class="footer__widget-network-link"><i
                                        class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="footer__subfooter">
                        <div class="row">
                            <div class="col-md-6">
                                <p>© <a href="#">99webpage</a> | Web Design Indonesia 2020. All Rights Reserved.
                                </p>
                            </div>
                            <div class="col-md-6 text-right">
                                <ul class="footer__subfooter-liststyle">
                                    <li><a href="#">Terms Of Service</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Help</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <div id="preloader">
        <div id="loader"></div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('assets-landing/js/jquery.min.js') }}"></script>

    <!-- Template main JavaScript -->
    <script src="{{ asset('assets-landing/js/main.min.js') }}"></script>
    <script>
        window.addEventListener('load', function() {
            const preloader = document.getElementById('preloader');
            preloader.style.animation = 'none';
            preloader.style.opacity = 0;
            document.body.classList.add('loaded');
        });
    </script>
    <!-- Template custome JavaScript -->
    <script src="{{ asset('assets-landing/js/scripts.min.js') }}"></script>
</body>

<!-- Mirrored from 99webpage.com/theme-review/landingpage/smooth/home-alt2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Dec 2023 17:40:54 GMT -->

</html>
