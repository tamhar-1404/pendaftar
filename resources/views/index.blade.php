<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

{{--  <!-- Mirrored from shreethemes.in/ovaxo/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2023 01:19:36 GMT -->  --}}

<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hummasoft | Halaman Utama</title>
    <meta name="description" content="Responsive Tailwind CSS Template">
    <meta name="keywords" content="Onepage, creative, modern, Tailwind CSS, multipurpose, clean">
    <meta name="author" content="Shreethemes">
    <meta name="website" content="https://shreethemes.in/">
    <meta name="email" content="support@shreethemes.in">
    <meta name="version" content="1.1.0">
    <!-- favicon -->
    <link href="/admin/assets/images/logo.png" rel="shortcut icon">
    @vite('resources/css/app.css')
    <!-- Css -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="landing/libs/tobii/css/tobii.min.css" rel="stylesheet">
    <!-- Main Css -->
    <link href="landing/libs/%40iconscout/unicons/css/line.css" type="text/css" rel="stylesheet">
    <link href="landing/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="landing/css/tailwind.min.css">
    <link rel="stylesheet" href="load/load.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



</head>


<body class="font-inter text-base text-slate-950 dark:text-white dark:bg-slate-900">
    <!-- screen loader -->

    <!-- Loader Start -->
    <!-- <div id="preloader">
            <div id="status">
                <div class="logo">
                    <img src="landing/images/logo-icon-64.png" class="d-block mx-auto animate-[spin_10s_linear_infinite]" alt="">
                </div>
                <div class="justify-content-center">
                    <div class="text-center">
                        <h4 class="mb-0 mt-2 text-lg font-semibold">Ovaxo</h4>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- Loader End -->
    <style>
        .element {
            background: red;
        }
    </style>



    <!-- Navbar Start -->
    <div class="h-screen bg-no-repeat">
        <nav class="navbar" id="navbar">
            <div class="px-5 flex items-center">
                <a class="navbar-brand md:me-8" href="index.html">
                    <span class="inline-block">
                        <img src="{{ asset('admin/assets/images/hitam.png') }}" class="l-dark w-28" alt="">
                        <img src="{{ asset('admin/assets/images/hitam.png') }}" class="l-light w-28" alt="">
                    </span>

                </a>

                <div class="nav-icons flex items-end lg_992:order-2 ms-auto lg:ms-4">
                    <!-- Navbar Button -->
                    <ul class="list-none menu-social mb-0">
                        <li class="inline">
                            <a href="{{ route('login.index') }}"
                                class="h-9 w-9 inline-flex items-center text-center justify-center text-base font-normal tracking-wide border align-middle transition duration-500 ease-in-out rounded-full bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white"><i
                                    class="uil uil-user"></i></a>
                        </li>
                    </ul>
                    <!-- Navbar Collapse Manu Button -->
                    <button data-collapse="menu-collapse" type="button"
                        class="collapse-btn inline-flex items-center ms-3 text-slate-950 dark:text-white lg_992:hidden"
                        aria-controls="menu-collapse" aria-expanded="false">
                        <span class="sr-only">Navigation Menu</span>
                        <i class="mdi mdi-menu text-[24px]"></i>
                    </button>
                </div>



                <!-- Navbar Manu -->
                <div class="navigation lg_992:order-1 lg_992:flex hidden ms-auto" id="menu-collapse ">
                    <ul class="navbar-nav nav-light" id="navbar-navlist">
                        <li class="nav-item text-gray-400">
                            <button
                                class="border bg-blue-400 px-4 py-1 rounded text-white hover:bg-blue-500 hover:text-white"
                                onclick="confirmReject(event)">Cek Saldo</button>
                        </li>
                    </ul>
                    <style>
                        .text-black {
                            color: black;
                            font-weight: bold;
                        }
                    </style>
                    <script>
                        function confirmReject(event) {
                            let user_id;
                            event.preventDefault();
                            Swal.fire({
                                title: 'RFID',
                                input: 'text',
                                inputLabel: 'Masukan kode RFID :',
                                showCancelButton: true,
                                confirmButtonText: 'Kirim',
                                cancelButtonText: 'Batal',
                                confirmButtonColor: '#00B7FF',
                                cancelButtonColor: '#FF0000',
                                allowOutsideClick: false,
                                inputValidator: (value) => {
                                    if (!value || value.trim() === '') {
                                        return 'Harap masukkan RFID.';
                                    }
                                },
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    const alasanPenolakan = result.value;
                                    $.ajax({
                                        url: "{{ route('find_rfid') }}",
                                        method: 'POST',
                                        data: {
                                            rfid: result.value,
                                        },
                                        success: function(response) {
                                            if (response == 'not found') {
                                                Swal.fire({
                                                    icon: 'error',
                                                    title: 'Oops...',
                                                    text: 'RFID tidak ditemukan!',
                                                });
                                            } else {
                                                Swal.fire({
                                                text: `Total saldo anda : Rp. ${response.toString()}!`,
                                                customClass: {
                                                    content: 'text-black'
                                                }
                                            });.then((a) => {
                                                    console.log(a.value);
                                                    if (a.isConfirmed) {
                                                        // Awal
                                                        console.log('id : ', parseInt(user_id));
                                                        console.log('password : ', a.value);
                                                        $.ajax({
                                                            url: `/pw/${user_id}/${a.value}`,
                                                            method: 'GET',
                                                            success: function(response) {
                                                                console.log(response);
                                                                if (response == 'error') {
                                                                    Swal.fire({
                                                                        icon: 'error',
                                                                        title: 'Oops...',
                                                                        text: 'Password salah!',
                                                                    });
                                                                } else {
                                                                    Swal.fire({
                                                                        text: `Total saldo anda : Rp. ${response.toString()}!`,
                                                                        customClass: {
                                                                            content: 'text-black'
                                                                        }
                                                                    });
                                                                }
                                                            },
                                                        });
                                                        //Akhir
                                                    }
                                                });
                                            }
                                        }
                                    });

                                }
                            });
                        }
                    </script>
                    &nbsp; &nbsp;
                    <ul class="navbar-nav nav-light" id="navbar-navlist hover:text-white">
                        <li class="nav-item text-gray-400">
                            <a href="{{ route('kode_beli') }}" class="hover:text-white">
                                <svg class="w-7 h-7 hover:fill-white" xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 576 512">
                                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        svg {
                                            fill: #e6e6e6;
                                        }
                                    </style>
                                    <path
                                        d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                                </svg>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
        <!-- Navbar End -->
        <div class=" relative flex items-center justify-center h-screen overflow-hidden">
            <img src="{{ asset('admin/images/kamii.jpg') }}" class="absolute z-10 brightness-50 blur-xs" alt=""
                srcset="">

            <div class="absolute z-10 grid grid-cols-1 pb-8 text-center">
                <h3 class="font-medium leading-normal font-bold text-5xl mb-5 mt-10 text-white animate-fade-in"
                    style="font-weight: bold">
                    Selamat Datang di
                    Hummasoft
                </h3>

                <p class="text-white  dark:text-slate-300 max-w-xl mx-auto">Disini terdapat berita yang bisa kamu
                    baca, dan jangan lupa untuk share berita ini ketemen-temen kamu!</p>
            </div>
        </div>

        <!--end grid-->
    </div>
    <!--end container-->
    </div>

    <!--end div-->
    <!-- Hero End -->

    <!-- Start -->

    <!--end div-->
    <!-- End -->
    <div
        class="spin_load  screen_loader animate__animated fixed inset-1 z-[0] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
        <div class="center">
            <div class="ring">
            </div>
            <img src="{{ asset('load/logo.png') }}" alt="Deskripsi gambar" class="my-img">
        </div>
    </div>



    <!-- Start -->
    <div class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800" id="features">

        <div class="container lg mx-auto">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-2xl text-xl font-medium mt-5">Teknologi dan Bahasa Pemrogaman Yang Kami Pakai
                </h3>

                <p class="text-slate-400 max-w-xl mx-auto">Berikut daftar beberapa bahasa pemrogaman yang kami pakai
                    untuk membuat website yang keren ini!!</p>
            </div>
            <!--end grid-->

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-4 gap-[30px]">
                <!-- Content -->
                <div
                    class="group relative lg:px-6 mt-4 transition duration-500 ease-in-out rounded-xl overflow-hidden text-center">
                    <div class="relative overflow-hidden text-transparent -m-3">
                        <i data-feather="hexagon" class="h-28 w-28 fill-violet-600/5 mx-auto rotate-[30deg]"></i>
                        <div
                            class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-violet-600 rounded-xl transition duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                            <img src="/admin/assets/images/tailwind.png" alt=""
                                class="w-12 h-12 hover:scale-125 animate-pulse">
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="https://tailwindcss.com/" target="_blank"
                            class="text-lg h5 transition duration-500 ease-in-out hover:text-violet-600">Tailwind
                            CSS</a>
                        <p class="text-slate-400 transition duration-500 ease-in-out mt-3">Tailwind CSS adalah alat
                            yang tak ternilai bagi pengembang web modern. Dengan fitur-fitur canggihnya, seperti utility
                            classes, variabel yang kuat, dan fleksibilitas desain yang tak tertandingi.</p>
                    </div>
                </div>
                <!-- Content -->

                <!-- Content -->
                <div
                    class="group relative lg:px-6 mt-4 transition duration-500 ease-in-out rounded-xl overflow-hidden text-center">
                    <div class="relative overflow-hidden text-transparent -m-3">
                        <i data-feather="hexagon" class="h-28 w-28 fill-violet-600/5 mx-auto rotate-[30deg]"></i>
                        <div
                            class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-violet-600 rounded-xl transition duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                            <img src="/admin/assets/images/htmll.png" alt=""
                                class="w-12 h-12 hover:scale-125 animate-pulse">
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="https://www.w3schools.com/TAGS/default.asp" target="_blank"
                            class="text-lg h5 transition duration-500 ease-in-out hover:text-violet-600">HTML</a>
                        <p class="text-slate-400 transition duration-500 ease-in-out mt-3">HTML, bahasa pemrograman
                            dasar untuk web, memberi Anda kekuatan untuk mengubah imajinasi menjadi kenyataan. Dengan
                            menguasai tag dan atribut yang sesuai, Anda dapat menciptakan tampilan yang struktur.</p>
                    </div>
                </div>
                <!-- Content -->

                <!-- Content -->
                <div
                    class="group relative lg:px-6 mt-4 transition duration-500 ease-in-out rounded-xl overflow-hidden text-center">
                    <div class="relative overflow-hidden text-transparent -m-3">
                        <i data-feather="hexagon" class="h-28 w-28 fill-violet-600/5 mx-auto rotate-[30deg]"></i>
                        <div
                            class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-violet-600 rounded-xl transition duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                            <img src="/admin/assets/images/nodee.png" alt=""
                                class="w-10 h-10 hover:scale-125 animate-pulse">
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="https://nodejs.org/en/docs" target="_blank"
                            class="text-lg h5 transition duration-500 ease-in-out hover:text-violet-600">Node JS</a>
                        <p class="text-slate-400 transition duration-500 ease-in-out mt-3">Node.js membuka pintu bagi
                            pengembangan web yang dinamis dan canggih. Dengan kemampuan server yang kuat, Anda dapat
                            menciptakan aplikasi interaktif yang menghadirkan pengalaman luar biasa bagi pengguna.</p>
                    </div>
                </div>
                <!-- Content -->

                <!-- Content -->
                <div
                    class="group relative lg:px-6 mt-4 transition duration-500 ease-in-out rounded-xl overflow-hidden text-center">
                    <div class="relative overflow-hidden text-transparent -m-3">
                        <i data-feather="hexagon" class="h-28 w-28 fill-violet-600/5 mx-auto rotate-[30deg]"></i>
                        <div
                            class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-violet-600 rounded-xl transition duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                            <img src="/admin/assets/images/laravel.png" alt=""
                                class="w-14 h-12 hover:scale-125 animate-pulse">
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="https://laravel.com/" target="_blank"
                            class="text-lg h5 transition duration-500 ease-in-out hover:text-violet-600">Laravel</a>
                        <p class="text-slate-400 transition duration-500 ease-in-out mt-3">Laravel adalah framework
                            yang memikat hati pengembang web dengan keindahan dan kehebatannya. Dengan abstraksi kode
                            yang canggih, Laravel memberikan Anda produktivitas yang tinggi dalam mengembangkan website.
                        </p>
                    </div>
                </div>
                <!-- Content -->

                <!-- Content -->
                <div
                    class="group relative lg:px-6 mt-4 transition duration-500 ease-in-out rounded-xl overflow-hidden text-center">
                    <div class="relative overflow-hidden text-transparent -m-3">
                        <i data-feather="hexagon" class="h-28 w-28 fill-violet-600/5 mx-auto rotate-[30deg]"></i>
                        <div
                            class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-violet-600 rounded-xl transition duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                            <img src="/admin/assets/images/js.png" alt=""
                                class="w-20 h-12 hover:scale-125 animate-pulse">
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank"
                            class="text-lg h5 transition duration-500 ease-in-out hover:text-violet-600">Java
                            Script</a>
                        <p class="text-slate-400 transition duration-500 ease-in-out mt-3">JavaScript memberikan
                            kehidupan pada website Anda dengan kemampuan serba bisa yang luar biasa. Dari animasi hingga
                            efek visual yang memikat, JavaScript memberikan interaksi yang mengagumkan kepada pengguna.
                        </p>
                    </div>
                </div>
                <!-- Content -->

                <!-- Content -->
                <div
                    class="group relative lg:px-6 mt-4 transition duration-500 ease-in-out rounded-xl overflow-hidden text-center">
                    <div class="relative overflow-hidden text-transparent -m-3">
                        <i data-feather="hexagon" class="h-28 w-28 fill-violet-600/5 mx-auto rotate-[30deg]"></i>
                        <div
                            class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-violet-600 rounded-xl transition duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                            <img src="/admin/assets/images/alphine.svg" alt=""
                                class="w-12 h-12 hover:scale-125 animate-pulse">
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="https://alpinejs.dev/" target="_blank"
                            class="text-lg h5 transition duration-500 ease-in-out hover:text-violet-600">Alpine.js</a>
                        <p class="text-slate-400 transition duration-500 ease-in-out mt-3">Alpine.js menawarkan
                            kecepatan dan kemudahan dalam membangun website dinamis. Dengan JavaScript yang ringan, Anda
                            dapat mencapai performa yang optimal. </p>
                    </div>
                </div>
                <!-- Content -->
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </div>
    <!--end div-->
    <!-- End  -->

    <!-- Start -->

    <!-- End -->

    <!-- Start -->

    <!--end div-->
    <!-- End -->

    <!-- Start -->

    <!-- End -->

    <!-- Start -->
    <div class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800" id="testi">
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-2xl text-xxl font-medium">Berita Terbaru</h3>

                <p class="text-slate-400 dark:text-slate-300 max-w-xl mx-auto">Disini terdapat berita yang bisa kamu
                    baca, dan jangan lupa untuk share berita ini ketemen-temen kamu!</p>
            </div>
            <!--end grid-->

            <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px] mt-8">
                <div class="blog relative rounded-md shadow shadow-slate-200 dark:shadow-gray-800 overflow-hidden">
                    <img src="/admin/assets/images/pakafrizal.jpg" alt="">

                    <div class="content p-6">
                        <a href="blog-detail.html"
                            class="text-lg hover:text-violet-600 dark:text-slate-700 dark:hover:text-violet-600 transition duration-500 ease-in-out font-medium h5">Pengumuman
                            hari raya idul fitri 2023.</a>
                        <p class="text-slate-400 mt-3">Berdasarkan surat edaran dari pemerintah bahwa diadakan libur
                            hari raya idul fitri.....</p>

                        <div class="flex justify-between">
                            <div class="mt-5">
                                <a href="#"
                                    class="hover:text-violet-600 dark:hover:text-violet-600 after:bg-violet-600 dark:text-slate-700 transition duration-500">Read
                                    More <i class="uil uil-arrow-right"></i></a>
                            </div>
                            <div class="mt-5">
                                <a href="#"
                                    class="hover:text-violet-600 dark:hover:text-blue-600 after:bg-violet-600 dark:text-slate-700 transition duration-500">17
                                    Juli 2023</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="blog relative rounded-md shadow shadow-slate-200 dark:shadow-gray-800 overflow-hidden">
                    <img src="/admin/assets/images/pakafrizal.jpg" alt="">

                    <div class="content p-6">
                        <a href="blog-detail.html"
                            class="text-lg hover:text-violet-600 dark:text-slate-700 dark:hover:text-violet-600 transition duration-500 ease-in-out font-medium h5">Pengumuman
                            hari raya idul fitri 2023.</a>
                        <p class="text-slate-400 mt-3">Berdasarkan surat edaran dari pemerintah bahwa diadakan libur
                            hari raya idul fitri.....</p>

                        <div class="flex justify-between">
                            <div class="mt-5">
                                <a href="#"
                                    class="hover:text-violet-600 dark:hover:text-violet-600 after:bg-violet-600 dark:text-slate-700 transition duration-500">Read
                                    More <i class="uil uil-arrow-right"></i></a>
                            </div>
                            <div class="mt-5">
                                <a href="#"
                                    class="hover:text-violet-600 dark:hover:text-blue-600 after:bg-violet-600 dark:text-slate-700 transition duration-500">17
                                    Juli 2023</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="blog relative rounded-md shadow shadow-slate-200 dark:shadow-gray-800 overflow-hidden">
                    <img src="/admin/assets/images/pakafrizal.jpg" alt="">

                    <div class="content p-6">
                        <a href="blog-detail.html"
                            class="text-lg hover:text-violet-600 dark:text-slate-700 dark:hover:text-violet-600 transition duration-500 ease-in-out font-medium h5">Pengumuman
                            hari raya idul fitri 2023.</a>
                        <p class="text-slate-400 mt-3">Berdasarkan surat edaran dari pemerintah bahwa diadakan libur
                            hari raya idul fitri.....</p>

                        <div class="flex justify-between">
                            <div class="mt-5">
                                <a href="#"
                                    class="hover:text-violet-600 dark:hover:text-violet-600 after:bg-violet-600 dark:text-slate-700 transition duration-500">Read
                                    More <i class="uil uil-arrow-right"></i></a>
                            </div>
                            <div class="mt-5">
                                <a href="#"
                                    class="hover:text-violet-600 dark:hover:text-blue-600 after:bg-violet-600 dark:text-slate-700 transition duration-500">17
                                    Juli 2023</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </div>
    <!--end div-->
    <!-- End -->

    <!-- Start -->

    <!--end div-->
    <!-- End -->

    <!-- Footer Start -->
    <footer class="footer bg-slate-950 relative text-gray-200 dark:text-gray-200">
        <!--end container-->

        <div class="py-[30px] px-0 border-t border-slate-800">
            <div class="container text-center">
                <div class="grid md:grid-cols-12 items-center">
                    <div class="md:col-span-6">
                        <div class="md:text-start text-center">
                            <p class="text-gray-400">©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Hummasoft. Design with <i
                                    class="mdi mdi-heart text-red-700"></i>
                                by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Yowis
                                    Iki</a>.
                            </p>
                        </div>
                    </div>

                    <div class="md:col-span-6 md:mt-0 mt-8">
                        <ul class="list-none md:text-end text-center">
                            <li class="inline"><a href="https://1.envato.market/ovaxo" target="_blank"
                                    class="h-8 w-8 inline-flex items-center text-center justify-center text-base font-normal tracking-wide align-middle transition duration-500 ease-in-out border border-gray-800 rounded-md hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600"><i
                                        class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>
                            <li class="inline"><a href="https://dribbble.com/shreethemes" target="_blank"
                                    class="h-8 w-8 inline-flex items-center text-center justify-center text-base font-normal tracking-wide align-middle transition duration-500 ease-in-out border border-gray-800 rounded-md hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600"><i
                                        class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                            <li class="inline"><a href="https://www.behance.net/shreethemes" target="_blank"
                                    class="h-8 w-8 inline-flex items-center text-center justify-center text-base font-normal tracking-wide align-middle transition duration-500 ease-in-out border border-gray-800 rounded-md hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600"><i
                                        class="uil uil-behance" title="Behance"></i></a></li>
                            <li class="inline"><a href="http://linkedin.com/company/shreethemes" target="_blank"
                                    class="h-8 w-8 inline-flex items-center text-center justify-center text-base font-normal tracking-wide align-middle transition duration-500 ease-in-out border border-gray-800 rounded-md hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600"><i
                                        class="uil uil-linkedin" title="Linkedin"></i></a></li>
                            <li class="inline"><a href="https://www.facebook.com/shreethemes" target="_blank"
                                    class="h-8 w-8 inline-flex items-center text-center justify-center text-base font-normal tracking-wide align-middle transition duration-500 ease-in-out border border-gray-800 rounded-md hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600"><i
                                        class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                            <li class="inline"><a href="https://www.instagram.com/shreethemes/" target="_blank"
                                    class="h-8 w-8 inline-flex items-center text-center justify-center text-base font-normal tracking-wide align-middle transition duration-500 ease-in-out border border-gray-800 rounded-md hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600"><i
                                        class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                            <li class="inline"><a href="https://twitter.com/shreethemes" target="_blank"
                                    class="h-8 w-8 inline-flex items-center text-center justify-center text-base font-normal tracking-wide align-middle transition duration-500 ease-in-out border border-gray-800 rounded-md hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600"><i
                                        class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                            <li class="inline"><a href="mailto:support@shreethemes.in"
                                    class="h-8 w-8 inline-flex items-center text-center justify-center text-base font-normal tracking-wide align-middle transition duration-500 ease-in-out border border-gray-800 rounded-md hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600"><i
                                        class="uil uil-envelope align-middle" title="email"></i></a></li>
                            <li class="inline"><a href="https://forms.gle/QkTueCikDGqJnbky9" target="_blank"
                                    class="h-8 w-8 inline-flex items-center text-center justify-center text-base font-normal tracking-wide align-middle transition duration-500 ease-in-out border border-gray-800 rounded-md hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600"><i
                                        class="uil uil-file align-middle" title="customization"></i></a></li>
                        </ul>
                        <!--end icon-->
                    </div>
                </div>
            </div>
            <!--end container-->
        </div>
    </footer>
    <!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top"
        class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-violet-600 text-white leading-9"><i
            class="uil uil-arrow-up"></i></a>
    <!-- Back to top -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

    <!-- JAVASCRIPTS -->
    <script src="landing/libs/gumshoejs/gumshoe.polyfills.min.js"></script>
    <script src="landing/libs/tobii/js/tobii.min.js"></script>
    <script src="landing/libs/feather-icons/feather.min.js"></script>
    <script src="landing/js/plugins.init.js"></script>
    <script src="landing/js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        })
        $(window).on('load', function() {
            $('.spin_load').fadeOut();
        });
    </script>
    <!-- JAVASCRIPTS -->
</body>

<!-- Mirrored from shreethemes.in/ovaxo/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2023 01:19:43 GMT -->

</html>
