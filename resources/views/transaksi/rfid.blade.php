<!DOCTYPE html>
<html class="no-js" lang="en">


{{--  <!-- Mirrored from template.hasthemes.com/sinp/sinp/shop-grid-4-column.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2023 02:22:46 GMT -->  --}}

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Hummastore | Transaksi</title>
    <!-- <meta name="robots" content="noindex, follow" /> -->
    <meta name="AdsBot-Google" content="noindex follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <script src="https://cdn.tailwindcss.com%22%3E/"></script>
    <script>
        theme: {
            extend: {
                blur: {
                    xs: '3px',
                }
            },
        },
    </script>


    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="kode/images/favicon.webp" />

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <link rel="stylesheet" href="kode/css/vendor/icofont.min.css" />
    <link rel="stylesheet" href="kode/css/vendor/line-awesome.min.css" />
    <link rel="stylesheet" href="kode/css/vendor/simple-line-icons.css" />
    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link rel="stylesheet" href="load/load.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Plugins CSS (All Plugins Files) -->

    <link rel="stylesheet" href="kode/css/plugins/swiper-bundle.min.css" />

    <link rel="stylesheet" href="kode/css/plugins/magnific-popup.css" />


    <!-- Style CSS -->
    <link rel="stylesheet" href="kode/css/style.css" />

</head>


<body class="font-poppins text-dark text-sm leading-loose">
    <!-- Header start -->

    <!-- Header end -->

    @if (session()->has('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                confirmButtonColor: '#3b82f6',
                text: "{{ session('error') }}",
            });
        </script>
    @endif

    <!-- Hero section start -->
    <div class="py-5 bg-gray-light">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-4">
                <div class="col-span-12">
                    <nav>
                        <ul class="flex max-w-[100px] items-start justify-center">
                            <img src="{{ asset('admin/images/hummashitam.png') }}" class="" alt=""
                                srcset="" style="width: 20%">
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <!-- Hero section end -->
    {{-- <div
        class="spin_load  screen_loader animate__animated fixed inset-1 z-[30] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
        <div class="center">
            <div class="ring">
            </div>
            <img src="{{ asset('load/logo.png') }}" alt="Deskripsi gambar" class="my-img">
        </div>
    </div> --}}


    <!-- blog grid section start -->

    <div class="pt-24 mt-10">
        <div class="container">
            <div class="flex flex-wrap flex-col lg:flex-row">
                <div id="shoptab" class="flex-1">
                    <p class="text-center mb-10 font-bold text-xl">SCAN RFID</p>
                    <div
                        class="flex flex-wrap justify-center items-center px-4 relative text-center md:max-w-xl mx-auto mb-10">
                        <form action="{{ route('transaksi.create') }}" method="get"
                            class="flex items-center justify-center ">
                            @csrf
                            <input id="mc-email" type="text" placeholder="Scan RFID anda"
                                class="border border-solid border-primary mb-10  h-14 sm:h-16 rounded-full bg-transparent placeholder-primary placeholder-opacity-50 text-sm sm:text-base focus:outline-none py-1 pl-8 pr-14 sm:pr-36"
                                name="rfid" style="height: 50px" autofocus />
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <center>

            <img class="w-2/2 h-full flex items-center " src="{{asset("images/step.jpg")}}" alt="" srcset="">
        </center>
    </div>





                    <!-- JS Vendor, Plugins & Activation Script Files -->

                    <!-- Vendors JS -->
                    <script src="kode/js/vendor/modernizr-3.11.7.min.js"></script>
                    <script src="kode/js/vendor/jquery-3.6.0.min.js"></script>
                    <script src="kode/js/vendor/jquery-migrate-3.3.2.min.js"></script>
                    <!-- Plugins JS -->
                    <script src="kode/js/plugins/swiper-bundle.min.js"></script>
                    <script src="kode/js/plugins/popper.min.js"></script>
                    <script src="kode/js/plugins/tippy-bundle.umd.min.js"></script>
                    <script src="kode/js/plugins/jquery.magnific-popup.min.js"></script>
                    <script src="kode/js/plugins/jquery.ajaxchimp.min.js"></script>

                    <!-- Activation JS -->
                    <script src="kode/js/main.js"></script>

                    <script>
                        $(window).on('load', function() {
                            $('.spin_load').fadeOut();
                        });
                    </script>


</body>


<!-- Mirrored from template.hasthemes.com/sinp/sinp/shop-grid-4-column.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2023 02:23:01 GMT -->

</html>
