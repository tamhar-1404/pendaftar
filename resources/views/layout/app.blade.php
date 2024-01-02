<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PKL HUMMATECH</title>
    <link rel="shortcut icon" type="{{ asset('image/png') }}" href="{{ asset('assets-admin/sipjaki.png') }}" />
    <link href="{{ asset('assets-admin/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-admin/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/plugin.js') }}"></script>
    <link href="{{ asset('assets-admin/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <link href="{{ asset('assets-admin/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets-admin/libs/summernote/summernote.css') }}">

    @yield('style')
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

<body data-sidebar="dark">
    <div class="layout-wraper">
        @include('layout.header')
        @include('layout.sidebar')
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')

                </div>
                <!-- container-fluid -->
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Hummatech.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Hummatech
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <div id="preloader">
        <div id="loader"></div>
    </div>
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
    <script src="{{ asset('assets-admin/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets-admin/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/summernote/summernote.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

    <script src="{{ asset('assets-admin/js/app.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/jquery-steps/build/jquery.steps.min.js') }}"></script>

    <!-- form wizard init -->
    <script src="{{ asset('assets-admin/js/pages/form-wizard.init.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('assets-admin/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- Sweet alert init js-->
    <script src="{{ asset('assets-admin/js/pages/sweet-alerts.init.js') }}"></script>
    @yield('script')
</body>

</html>
