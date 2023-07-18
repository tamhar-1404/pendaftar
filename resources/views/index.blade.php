<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

{{--  <!-- Mirrored from shreethemes.in/ovaxo/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2023 01:19:36 GMT -->  --}}

<head>
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
    <link href="landing/libs/tobii/css/tobii.min.css" rel="stylesheet">
    <!-- Main Css -->
    <link href="landing/libs/%40iconscout/unicons/css/line.css" type="text/css" rel="stylesheet">
    <link href="landing/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="landing/css/tailwind.min.css">

</head>

<body class="font-inter text-base text-slate-950 dark:text-white dark:bg-slate-900">
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
    <section class="h-screen bg-no-repeat"
        style="background-image: url('{{ asset('admin/assets/images/hitam.png') }}')">
        <nav class="navbar" id="navbar">
            <div class="px-5 flex items-center">
                <a class="navbar-brand md:me-8" href="index.html">
                    <span class="inline-block">
                        <img src="{{ asset('admin/assets/images/hitam.png') }}" class="l-dark w-28" alt="">
                        <img src="{{ asset('admin/assets/images/hitam.png') }}" class="l-light w-28" alt="">
                    </span>
                    <img src="{{ asset('admin/assets/images/hitam.png') }}" class="hidden dark:inline-block w-"
                        alt="">
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
                <div class="navigation lg_992:order-1 lg_992:flex hidden ms-auto" id="menu-collapse">
                    <ul class="navbar-nav nav-light" id="navbar-navlist">
                        <li class="nav-item text-gray-400">
                            <a href="{{ route('kode_beli') }}" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Navbar End -->
        <div class="relative flex items-center justify-center h-screen overflow-hidden">
            <img src="{{ asset('admin/images/tangan.jpg') }}" class="absolute z-10 brightness-50" alt=""
                srcset="">

            <div class="absolute z-10">
                <h3 class="font-medium leading-normal font-bold text-5xl mb-5 mt-10 text-white animate-fade-in">
                    Selamat Datang di
                    Hummasoft
                </h3>
                <p class="text-slate-400 text-lg max-w-xl mx-auto justify-between">Website ini akan memberikan
                    pengalaman anda
                    yang
                    berbeda coba perhatikan dan pelajari dengan cermat.</p>
            </div>
        </div>

        <!--end grid-->
        </div>
        <!--end container-->
    </section>
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- Start -->

    <!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800" id="features">
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
    </section>
    <!--end section-->
    <!-- End  -->

    <!-- Start -->

    <!-- End -->

    <!-- Start -->

    <!--end section-->
    <!-- End -->

    <!-- Start -->

    <!-- End -->

    <!-- Start -->
    <section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800" id="testi">
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
    </section>
    <!--end section-->
    <!-- End -->

    <!-- Start -->

    <!--end section-->
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

    <!-- Switcher -->
    <div class="fixed top-1/4 -right-2 z-3">
        <span class="relative inline-block rotate-90">
            <input type="checkbox" class="checkbox opacity-0 absolute" id="chk">
            <label
                class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8"
                for="chk">
                <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                <span
                    class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
            </label>
        </span>
    </div>
    <!-- Switcher -->

    <!-- LTR & RTL Mode Code -->
    <div class="fixed top-[40%] -right-3 z-50">
        <a href="#" id="switchRtl">
            <span
                class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold rtl:block ltr:hidden">LTR</span>
            <span
                class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold ltr:block rtl:hidden">RTL</span>
        </a>
    </div>
    <!-- LTR & RTL Mode Code -->

    <!-- JAVASCRIPTS -->
    <script src="landing/libs/gumshoejs/gumshoe.polyfills.min.js"></script>
    <script src="landing/libs/tobii/js/tobii.min.js"></script>
    <script src="landing/libs/feather-icons/feather.min.js"></script>
    <script src="landing/js/plugins.init.js"></script>
    <script src="landing/js/app.js"></script>
    <!-- JAVASCRIPTS -->
</body>

<!-- Mirrored from shreethemes.in/ovaxo/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2023 01:19:43 GMT -->

</html>
