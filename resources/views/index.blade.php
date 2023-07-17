<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

{{--  <!-- Mirrored from shreethemes.in/ovaxo/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2023 01:19:36 GMT -->  --}}
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hummasoft</title>
        <meta name="description" content="Responsive Tailwind CSS Template">
        <meta name="keywords" content="Onepage, creative, modern, Tailwind CSS, multipurpose, clean">
        <meta name="author" content="Shreethemes">
        <meta name="website" content="https://shreethemes.in/">
        <meta name="email" content="support@shreethemes.in">
        <meta name="version" content="1.1.0">
        <!-- favicon -->
        <link href="landing/images/favicon.ico" rel="shortcut icon">

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


        <!-- Navbar Start -->
        <nav class="navbar" id="navbar">
            <div class="px-5 flex items-center" >
                <a class="navbar-brand md:me-8" href="index.html">
                    <span class="inline-block dark:hidden">
                        <img src="{{asset('admin/assets/images/LOGO Hummasoft BD.png')}}" class="l-dark w-28" alt="">
                        <img src="{{asset('admin/assets/images/LOGO Hummasoft BD.png')}}" class="l-light w-28" alt="">
                    </span>
                    <img src="{{asset('admin/assets/images/LOGO Hummasoft BD.png')}}" class="hidden dark:inline-block" alt="">
                </a>

                <div class="nav-icons flex items-end lg_992:order-2 ms-auto lg:ms-4">
                    <!-- Navbar Button -->
                    <ul class="list-none menu-social mb-0">
                        <li class="inline">
                            <a href="{{route('login.index')}}" class="h-9 w-9 inline-flex items-center text-center justify-center text-base font-normal tracking-wide border align-middle transition duration-500 ease-in-out rounded-full bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white"><i class="uil uil-user"></i></a>
                        </li>
                    </ul>
                    <!-- Navbar Collapse Manu Button -->
                    <button data-collapse="menu-collapse" type="button" class="collapse-btn inline-flex items-center ms-3 text-slate-950 dark:text-white lg_992:hidden" aria-controls="menu-collapse" aria-expanded="false">
                        <span class="sr-only">Navigation Menu</span>
                        <i class="mdi mdi-menu text-[24px]"></i>
                    </button>
                </div>

                <!-- Navbar Manu -->
                <div class="navigation lg_992:order-1 lg_992:flex hidden ms-auto" id="menu-collapse">
                    <ul class="navbar-nav nav-light" id="navbar-navlist">
                        <li class="nav-item text-gray-400">
                            <a href="{{route('kode_beli')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Hero Start -->
        <section class="py-36 lg:py-56 w-full table relative bg-[url('../../landing/images/bg/bg.html')] bg-top bg-no-repeat" id="home">
            <div class="absolute inset-0 bg-gradient-to-t to-slate-950/50 via-slate-950/75 from-slate-950"></div>

            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center mt-10">
                    <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="lightbox lg:h-20 h-16 lg:w-20 w-16 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white hover:bg-violet-600 text-violet-600 hover:text-white duration-500 ease-in-out mx-auto">
                        <i class="mdi mdi-play inline-flex items-center justify-center text-3xl"></i>
                    </a>

                    <h3 class="font-medium leading-normal text-4xl mb-5 mt-10 text-white">Were Helping to Achieve your Success.</h3>

                    <p class="text-slate-400 text-lg max-w-xl mx-auto">This is just a simple text made for this unique and awesome template, you can replace it with any text.</p>

                    <div class="mt-8">
                        <a href="#" class="py-2 px-5 inline-block font-normal tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white rounded-md"><i class="uil uil-envelope"></i> Contact Now</a>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Hero End -->

        <!-- Start -->
        <section class="relative md:py-24 py-16" id="about">
            <div class="container mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-12 md:grid-cols-2 gap-10 items-center">
                    <div class="lg:col-span-5">
                        <img src="landing/images/about.jpg" class="rounded-lg shadow-lg relative" alt="">
                    </div><!--end col-->

                    <div class="lg:col-span-7">
                        <div class="lg:ms-7">
                            <h3 class="mb-4 md:text-2xl text-xl font-medium">About Us: Ovaxo</h3>

                            <p class="text-slate-400 dark:text-slate-300 max-w-2xl mx-auto">Start working with Ovaxo that can provide everything you need to generate awareness, drive traffic, connect. Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with  content. This is required when, for example, the final text is not yet available. Dummy texts have been in use by typesetters since the 16th century.</p>

                            <div class="relative mt-8">
                                <a href="aboutus.html" class="py-2 px-5 inline-block font-normal tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white rounded-md">Read More <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800" id="features">
            <div class="container lg mx-auto">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-4 md:text-2xl text-xl font-medium">Our Services</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">This is just a simple text made for this unique and awesome template, you can replace it with any text.</p>
                </div><!--end grid-->

                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-4 gap-[30px]">
                    <!-- Content -->
                    <div class="group relative lg:px-6 mt-4 transition duration-500 ease-in-out rounded-xl overflow-hidden text-center">
                        <div class="relative overflow-hidden text-transparent -m-3">
                            <i data-feather="hexagon" class="h-28 w-28 fill-violet-600/5 mx-auto rotate-[30deg]"></i>
                            <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-violet-600 rounded-xl transition duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                                <i class="uil uil-adjust-circle"></i>
                            </div>
                        </div>

                        <div class="mt-6">
                            <a href="services.html" class="text-lg h5 transition duration-500 ease-in-out hover:text-violet-600">Grow Your Business</a>
                            <p class="text-slate-400 transition duration-500 ease-in-out mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                        </div>
                    </div>
                    <!-- Content -->

                    <!-- Content -->
                    <div class="group relative lg:px-6 mt-4 transition duration-500 ease-in-out rounded-xl overflow-hidden text-center">
                        <div class="relative overflow-hidden text-transparent -m-3">
                            <i data-feather="hexagon" class="h-28 w-28 fill-violet-600/5 mx-auto rotate-[30deg]"></i>
                            <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-violet-600 rounded-xl transition duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                                <i class="uil uil-circuit"></i>
                            </div>
                        </div>

                        <div class="mt-6">
                            <a href="services.html" class="text-lg h5 transition duration-500 ease-in-out hover:text-violet-600">Drive More Sales</a>
                            <p class="text-slate-400 transition duration-500 ease-in-out mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                        </div>
                    </div>
                    <!-- Content -->

                    <!-- Content -->
                    <div class="group relative lg:px-6 mt-4 transition duration-500 ease-in-out rounded-xl overflow-hidden text-center">
                        <div class="relative overflow-hidden text-transparent -m-3">
                            <i data-feather="hexagon" class="h-28 w-28 fill-violet-600/5 mx-auto rotate-[30deg]"></i>
                            <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-violet-600 rounded-xl transition duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                                <i class="uil uil-fire"></i>
                            </div>
                        </div>

                        <div class="mt-6">
                            <a href="services.html" class="text-lg h5 transition duration-500 ease-in-out hover:text-violet-600">Handled By Expert</a>
                            <p class="text-slate-400 transition duration-500 ease-in-out mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                        </div>
                    </div>
                    <!-- Content -->

                    <!-- Content -->
                    <div class="group relative lg:px-6 mt-4 transition duration-500 ease-in-out rounded-xl overflow-hidden text-center">
                        <div class="relative overflow-hidden text-transparent -m-3">
                            <i data-feather="hexagon" class="h-28 w-28 fill-violet-600/5 mx-auto rotate-[30deg]"></i>
                            <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-violet-600 rounded-xl transition duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                                <i class="uil uil-flower"></i>
                            </div>
                        </div>

                        <div class="mt-6">
                            <a href="services.html" class="text-lg h5 transition duration-500 ease-in-out hover:text-violet-600">Discussion For Idea</a>
                            <p class="text-slate-400 transition duration-500 ease-in-out mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                        </div>
                    </div>
                    <!-- Content -->

                    <!-- Content -->
                    <div class="group relative lg:px-6 mt-4 transition duration-500 ease-in-out rounded-xl overflow-hidden text-center">
                        <div class="relative overflow-hidden text-transparent -m-3">
                            <i data-feather="hexagon" class="h-28 w-28 fill-violet-600/5 mx-auto rotate-[30deg]"></i>
                            <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-violet-600 rounded-xl transition duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                                <i class="uil uil-shopping-basket"></i>
                            </div>
                        </div>

                        <div class="mt-6">
                            <a href="services.html" class="text-lg h5 transition duration-500 ease-in-out hover:text-violet-600">Increase Conversion</a>
                            <p class="text-slate-400 transition duration-500 ease-in-out mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                        </div>
                    </div>
                    <!-- Content -->

                    <!-- Content -->
                    <div class="group relative lg:px-6 mt-4 transition duration-500 ease-in-out rounded-xl overflow-hidden text-center">
                        <div class="relative overflow-hidden text-transparent -m-3">
                            <i data-feather="hexagon" class="h-28 w-28 fill-violet-600/5 mx-auto rotate-[30deg]"></i>
                            <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-violet-600 rounded-xl transition duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                                <i class="uil uil-flip-h"></i>
                            </div>
                        </div>

                        <div class="mt-6">
                            <a href="services.html" class="text-lg h5 transition duration-500 ease-in-out hover:text-violet-600">Sales Growth Idea</a>
                            <p class="text-slate-400 transition duration-500 ease-in-out mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                        </div>
                    </div>
                    <!-- Content -->
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End  -->

        <!-- Start -->
        <section class="relative md:py-24 py-16 md:pt-0 pt-0 bg-gray-50 dark:bg-slate-800">
            <div class="container">
                <div class="grid grid-cols-1 justify-center">
                    <div class="relative z-1">
                        <div class="grid lg:grid-cols-12 grid-cols-1 md:text-start text-center justify-center">
                            <div class="lg:col-start-2 lg:col-span-10">
                                <div class="relative">
                                    <img src="landing/images/cta.jpg" class="rounded-md shadow-lg" alt="">
                                    <div class="absolute bottom-2/4 translate-y-2/4 end-0 start-0 text-center">
                                        <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="lightbox lg:h-20 h-16 lg:w-20 w-16 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white hover:bg-violet-600 text-violet-600 hover:text-white duration-500 ease-in-out mx-auto">
                                            <i class="mdi mdi-play inline-flex items-center justify-center text-3xl"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content md:mt-8">
                            <div class="grid lg:grid-cols-12 grid-cols-1 md:text-start text-center justify-center">
                                <div class="lg:col-start-2 lg:col-span-10">
                                    <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
                                        <div class="mt-8">
                                            <div class="section-title text-md-start">
                                                <h6 class="text-white/50">Customers needs</h6>
                                                <h3 class="md:text-2xl text-xl font-medium text-white mt-2">Spaces for every size <br> and type of need.</h3>
                                            </div>
                                        </div>

                                        <div class="section-title text-md-start">
                                            <p class="text-white/50 max-w-xl mx-auto mb-2">This is just a simple text made for this unique and awesome template, you can replace it with any text.</p>
                                            <a href="#" class="text-white">Read More <i class="uil uil-angle-end-b align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row -->
            </div>
            <!--end container-->

            <div class="absolute bottom-0 end-0 start-0 h-4/5 md:h-2/3 bg-violet-600"></div>
        </section>
        <!-- End -->

        <!-- Start -->
        <section class="relative md:py-24 py-16" id="pricing">
            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-4 md:text-2xl text-xl font-medium">Our Comfortable Pricing</h3>

                    <p class="text-slate-400 dark:text-slate-300 max-w-xl mx-auto">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS html page.</p>
                </div><!--end grid-->

                <div class="grid md:grid-cols-3 grid-cols-1 mt-8 gap-[30px] items-center">
                    <div class="shadow rounded-md p-6 bg-gradient-to-t bg-violet-600">
                        <div class="pb-8">
                            <h3 class="mb-6 text-xl font-medium text-white">Business</h3>
                            <div class="mb-6 text-white/50">
                                <span class="relative h6 -top-5 text-xl">$</span>
                                <span class="text-5xl h6 font-bold text-white">10</span>
                                <span class="inline-block h6 ms-1">/ month</span>
                            </div>
                            <p class="mb-6 text-white">Basic features for up to 10 users.</p>
                            <a href="#" class="py-2 px-5 inline-block font-normal tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white rounded-md w-full">Started Now</a>
                        </div>
                        <div class="border-b border-slate-200/10"></div>
                        <ul class="self-start pt-8">
                            <li class="flex items-center mb-1 text-white/80">
                                <i class="uil uil-check-circle text-xl text-orange-600 me-2"></i>
                                <span>Complete documentation</span>
                            </li>
                            <li class="flex items-center my-1 text-white/80">
                                <i class="uil uil-check-circle text-xl text-orange-600 me-2"></i>
                                <span>Working materials in Figma</span>
                            </li>
                            <li class="flex items-center my-1 text-white/80">
                                <i class="uil uil-check-circle text-xl text-orange-600 me-2"></i>
                                <span>100GB cloud storage</span>
                            </li>
                            <li class="flex items-center my-1 text-white/80">
                                <i class="uil uil-check-circle text-xl text-orange-600 me-2"></i>
                                <span>500 team members</span>
                            </li>
                            <li class="flex items-center my-1 text-white/80">
                                <i class="uil uil-check-circle text-xl text-orange-600 me-2"></i>
                                <span>Free Support</span>
                            </li>
                        </ul>
                    </div>

                    <div class="p-6">
                        <div class="pb-8">
                            <h3 class="mb-6 text-xl font-medium dark:text-white">Free</h3>
                            <div class="mb-6 dark:text-white/50">
                                <span class="relative h6 -top-5 text-xl">$</span>
                                <span class="text-5xl h6 font-medium dark:text-white">00</span>
                                <span class="inline-block h6 ms-1">/ month</span>
                            </div>
                            <p class="mb-6 text-slate-400">Free features for your business.</p>
                            <a href="#" class="py-2 px-5 inline-block font-normal tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-violet-600/5 hover:bg-violet-600 border-violet-600/10 hover:border-violet-600 text-violet-600 hover:text-white rounded-md w-full">Redeem Now</a>
                        </div>
                        <div class="border-b border-slate-200 dark:border-slate-200/5"></div>
                        <ul class="self-start pt-8">
                            <li class="flex items-center mb-1 text-slate-400">
                                <i class="uil uil-check-circle text-xl text-green-600 me-2"></i>
                                <span>Complete documentation</span>
                            </li>
                            <li class="flex items-center my-1 text-slate-400">
                                <i class="uil uil-check-circle text-xl text-green-600 me-2"></i>
                                <span>Working materials in Figma</span>
                            </li>
                            <li class="flex items-center my-1 text-slate-400">
                                <i class="uil uil-check-circle text-xl text-green-600 me-2"></i>
                                <span>100GB cloud storage</span>
                            </li>
                            <li class="flex items-center my-1 text-slate-400">
                                <i class="uil uil-check-circle text-xl text-green-600 me-2"></i>
                                <span>500 team members</span>
                            </li>
                        </ul>
                    </div>

                    <div class="p-6">
                        <div class="pb-8">
                            <h3 class="mb-6 text-xl font-medium dark:text-white">Corporate</h3>
                            <div class="mb-6 dark:text-white/50">
                                <span class="relative h6 -top-5 text-xl">$</span>
                                <span class="text-5xl h6 font-medium dark:text-white">49</span>
                                <span class="inline-block h6 ms-1">/ month</span>
                            </div>
                            <p class="mb-6 text-slate-400">Corporate features for up to 100 users.</p>
                            <a href="#" class="py-2 px-5 inline-block font-normal tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white rounded-md w-full">Signup Now</a>
                        </div>
                        <div class="border-b border-slate-200 dark:border-slate-200/5"></div>
                        <ul class="self-start pt-8">
                            <li class="flex items-center mb-1 text-slate-400">
                                <i class="uil uil-check-circle text-xl text-green-600 me-2"></i>
                                <span>Complete documentation</span>
                            </li>
                            <li class="flex items-center my-1 text-slate-400">
                                <i class="uil uil-check-circle text-xl text-green-600 me-2"></i>
                                <span>Working materials in Figma</span>
                            </li>
                            <li class="flex items-center my-1 text-slate-400">
                                <i class="uil uil-check-circle text-xl text-green-600 me-2"></i>
                                <span>100GB cloud storage</span>
                            </li>
                            <li class="flex items-center my-1 text-slate-400">
                                <i class="uil uil-check-circle text-xl text-green-600 me-2"></i>
                                <span>500 team members</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800" id="testi">
            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-6 md:text-2xl text-xl font-medium">Client's Review</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">This is just a simple text made for this unique and awesome template, you can replace it with any text.</p>
                </div><!--end grid-->

                <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                    <ul class="space-y-8">
                        <li class="rounded-lg shadow-lg dark:shadow-gray-800 p-6 bg-white dark:bg-slate-900">
                            <div class="flex items-center pb-6 border-b border-gray-100 dark:border-gray-800">
                                <img src="landing/images/client/01.jpg" class="h-16 w-16 rounded-full shadow dark:shadow-gray-800" alt="">

                                <div class="ps-4">
                                    <a href="#" class="text-lg h5 hover:text-violet-600 duration-500 ease-in-out">Thomas Israel</a>
                                    <p class="text-slate-400">C.E.O</p>
                                </div>
                            </div>

                            <div class="mt-6">
                                <p class="text-slate-400">I didn't know a thing about icon design until I read this book. Now I can create any icon I need in no time. Great resource!</p>
                                <ul class="list-none mb-0 text-amber-400 mt-2">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </li>

                        <li class="rounded-lg shadow-lg dark:shadow-gray-800 p-6 bg-white dark:bg-slate-900">
                            <div class="flex items-center pb-6 border-b border-gray-100 dark:border-gray-800">
                                <img src="landing/images/client/05.jpg" class="h-16 w-16 rounded-full shadow dark:shadow-gray-800" alt="">

                                <div class="ps-4">
                                    <a href="#" class="text-lg h5 hover:text-violet-600 duration-500 ease-in-out">Barbara McIntosh</a>
                                    <p class="text-slate-400">C.E.O</p>
                                </div>
                            </div>

                            <div class="mt-6">
                                <p class="text-slate-400">There are so many things I had to do with my old software that I just don't do at all with Techwind. Suspicious but I can't say I don't love it.</p>
                                <ul class="list-none mb-0 text-amber-400 mt-2">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                    <ul class="space-y-8 hidden sm:block">
                        <li class="rounded-lg shadow-lg dark:shadow-gray-800 p-6 bg-white dark:bg-slate-900">
                            <div class="flex items-center pb-6 border-b border-gray-100 dark:border-gray-800">
                                <img src="landing/images/client/02.jpg" class="h-16 w-16 rounded-full shadow dark:shadow-gray-800" alt="">

                                <div class="ps-4">
                                    <a href="#" class="text-lg h5 hover:text-violet-600 duration-500 ease-in-out">Carl Oliver</a>
                                    <p class="text-slate-400">C.E.O</p>
                                </div>
                            </div>

                            <div class="mt-6">
                                <p class="text-slate-400">The best part about Techwind is every time I pay my employees, my bank balance doesn't go down like it used to. Looking forward to spending this extra cash when I figure out why my card is being declined.</p>
                                <ul class="list-none mb-0 text-amber-400 mt-2">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </li>

                        <li class="rounded-lg shadow-lg dark:shadow-gray-800 p-6 bg-white dark:bg-slate-900">
                            <div class="flex items-center pb-6 border-b border-gray-100 dark:border-gray-800">
                                <img src="landing/images/client/04.jpg" class="h-16 w-16 rounded-full shadow dark:shadow-gray-800" alt="">

                                <div class="ps-4">
                                    <a href="#" class="text-lg h5 hover:text-violet-600 duration-500 ease-in-out">Jill Webb</a>
                                    <p class="text-slate-400">C.E.O</p>
                                </div>
                            </div>

                            <div class="mt-6">
                                <p class="text-slate-400">I'm trying to get a hold of someone in support, I'm in a lot of trouble right now and they are saying it has something to do with my books. Please get back to me right away.</p>
                                <ul class="list-none mb-0 text-amber-400 mt-2">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                    <ul class="space-y-8 hidden lg:block">
                        <li class="rounded-lg shadow-lg dark:shadow-gray-800 p-6 bg-white dark:bg-slate-900">
                            <div class="flex items-center pb-6 border-b border-gray-100 dark:border-gray-800">
                                <img src="landing/images/client/03.jpg" class="h-16 w-16 rounded-full shadow dark:shadow-gray-800" alt="">

                                <div class="ps-4">
                                    <a href="#" class="text-lg h5 hover:text-violet-600 duration-500 ease-in-out">Barbara McIntosh</a>
                                    <p class="text-slate-400">C.E.O</p>
                                </div>
                            </div>

                            <div class="mt-6">
                                <p class="text-slate-400">I used to have to remit tax to the EU and with Techwind I somehow don't have to do that anymore. Nervous to travel there now though.</p>
                                <ul class="list-none mb-0 text-amber-400 mt-2">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </li>

                        <li class="rounded-lg shadow-lg dark:shadow-gray-800 p-6 bg-white dark:bg-slate-900">
                            <div class="flex items-center pb-6 border-b border-gray-100 dark:border-gray-800">
                                <img src="landing/images/client/06.jpg" class="h-16 w-16 rounded-full shadow dark:shadow-gray-800" alt="">

                                <div class="ps-4">
                                    <a href="#" class="text-lg h5 hover:text-violet-600 duration-500 ease-in-out">Janisha Doll</a>
                                    <p class="text-slate-400">C.E.O</p>
                                </div>
                            </div>

                            <div class="mt-6">
                                <p class="text-slate-400">This is the fourth email I've sent to your support team. I am literally being held in jail for tax fraud. Please answer your damn emails, this is important.</p>
                                <ul class="list-none mb-0 text-amber-400 mt-2">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!--end container-->
        </section>
        <!-- End -->

        <!-- Start -->
        <section class="relative md:py-24 py-16" id="blog">
            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-4 md:text-2xl text-xl font-medium">Blogs or News</h3>

                    <p class="text-slate-400 dark:text-slate-300 max-w-xl mx-auto">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS html page.</p>
                </div><!--end grid-->

                <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px] mt-8">
                    <div class="blog relative rounded-md shadow shadow-slate-200 dark:shadow-gray-800 overflow-hidden">
                        <img src="landing/images/blog/1.jpg" alt="">

                        <div class="content p-6">
                            <a href="blog-detail.html" class="text-lg hover:text-violet-600 dark:text-white dark:hover:text-violet-600 transition duration-500 ease-in-out font-medium h5">Introducing new tools for your design.</a>
                            <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>

                            <div class="mt-5">
                                <a href="#" class="hover:text-violet-600 dark:hover:text-violet-600 after:bg-violet-600 dark:text-white transition duration-500">Read More <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="blog relative rounded-md shadow shadow-slate-200 dark:shadow-gray-800 overflow-hidden">
                        <img src="landing/images/blog/2.jpg" alt="">

                        <div class="content p-6">
                            <a href="blog-detail.html" class="text-lg hover:text-violet-600 dark:text-white dark:hover:text-violet-600 transition duration-500 ease-in-out font-medium h5">The Right Hand of Business IT World</a>
                            <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>

                            <div class="mt-5">
                                <a href="#" class="hover:text-violet-600 dark:hover:text-violet-600 after:bg-violet-600 dark:text-white transition duration-500">Read More <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="blog relative rounded-md shadow shadow-slate-200 dark:shadow-gray-800 overflow-hidden">
                        <img src="landing/images/blog/3.jpg" alt="">

                        <div class="content p-6">
                            <a href="blog-detail.html" class="text-lg hover:text-violet-600 dark:text-white dark:hover:text-violet-600 transition duration-500 ease-in-out font-medium h5">Truck Side Advertising Isn It Time for action.</a>
                            <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>

                            <div class="mt-5">
                                <a href="#" class="hover:text-violet-600 dark:hover:text-violet-600 after:bg-violet-600 dark:text-white transition duration-500">Read More <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800" id="contact">
            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-4 md:text-2xl text-xl font-medium">Get In Touch !</h3>

                    <p class="text-slate-400 dark:text-slate-300 max-w-xl mx-auto">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS html page.</p>
                </div><!--end grid-->

                <div class="grid grid-cols-1 lg:grid-cols-12 md:grid-cols-2 mt-8 items-center gap-[30px]">
                    <div class="lg:col-span-8">
                        <div class="p-6 rounded-md shadow bg-white dark:bg-slate-900">
                            <form method="post" name="myForm" id="myForm" onsubmit="return validateForm()">
                                <p class="mb-0" id="error-msg"></p>
                                <div id="simple-msg"></div>
                                <div class="grid lg:grid-cols-12 lg:gap-[30px]">
                                    <div class="lg:col-span-6 mb-5">
                                        <input name="name" id="name" type="text" class="form-input w-full py-2 px-3 h-10 bg-transparent border border-inherit dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded outline-none focus:border-violet-600/50 dark:focus:border-violet-600/50 focus:ring-0" placeholder="Name :">
                                    </div>

                                    <div class="lg:col-span-6 mb-5">
                                        <input name="email" id="email" type="email" class="form-input w-full py-2 px-3 h-10 bg-transparent border border-inherit dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded outline-none focus:border-violet-600/50 dark:focus:border-violet-600/50 focus:ring-0" placeholder="Email :">
                                    </div><!--end col-->
                                </div>

                                <div class="grid grid-cols-1">
                                    <div class="mb-5">
                                        <input name="subject" id="subject" class="form-input w-full py-2 px-3 h-10 bg-transparent border border-inherit dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded outline-none focus:border-violet-600/50 dark:focus:border-violet-600/50 focus:ring-0" placeholder="Subject :">
                                    </div>

                                    <div class="mb-5">
                                        <textarea name="comments" id="comments" class="form-input w-full py-2 px-3 bg-transparent border border-inherit dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded outline-none focus:border-violet-600/50 dark:focus:border-violet-600/50 focus:ring-0 h-28" placeholder="Message :"></textarea>
                                    </div>
                                </div>
                                <button type="submit" id="submit" name="send" class="py-2 px-5 inline-block font-normal tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-violet-600 hover:bg-violet-700 border-violet-600 hover:border-violet-700 text-white rounded-md">Send Message</button>
                            </form>
                        </div>
                    </div>

                    <div class="lg:col-span-4">
                        <div class="lg:ms-8">
                            <div class="flex">
                                <div class="icons text-center mx-auto">
                                    <i class="uil uil-phone block rounded text-2xl dark:text-white mb-0"></i>
                                </div>

                                <div class="flex-1 ms-6">
                                    <h5 class="text-lg dark:text-white mb-2 font-medium">Phone</h5>
                                    <a href="tel:+152534-468-854" class="text-slate-400">+152 534-468-854</a>
                                </div>
                            </div>

                            <div class="flex mt-4">
                                <div class="icons text-center mx-auto">
                                    <i class="uil uil-envelope block rounded text-2xl dark:text-white mb-0"></i>
                                </div>

                                <div class="flex-1 ms-6">
                                    <h5 class="text-lg dark:text-white mb-2 font-medium">Email</h5>
                                    <a href="mailto:contact@example.com" class="text-slate-400">contact@example.com</a>
                                </div>
                            </div>

                            <div class="flex mt-4">
                                <div class="icons text-center mx-auto">
                                    <i class="uil uil-map-marker block rounded text-2xl dark:text-white mb-0"></i>
                                </div>

                                <div class="flex-1 ms-6">
                                    <h5 class="text-lg dark:text-white mb-2 font-medium">Location</h5>
                                    <p class="text-slate-400 mb-2">C/54 Northwest Freeway, Suite 558, Houston, USA 485</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Footer Start -->
        <footer class="footer bg-slate-950 relative text-gray-200 dark:text-gray-200">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="py-[60px] px-0">
                            <div class="grid grid-cols-1">
                                <div class="text-center">
                                    <img src="landing/images/logo-icon-64.png" class="block mx-auto" alt="">
                                    <p class="max-w-xl mx-auto text-slate-400 mt-8">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS html page.</p>
                                </div>

                                <ul class="list-none footer-list text-center mt-8">
                                    <li class="inline px-2"><a href="services.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out">Services</a></li>
                                    <li class="inline px-2 mt-[10px]"><a href="aboutus.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out ms-2">About Us</a></li>
                                    <li class="inline px-2 mt-[10px]"><a href="blogs.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out ms-2">Blogs</a></li>
                                    <li class="inline px-2 mt-[10px]"><a href="team.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out ms-2">Team</a></li>
                                    <li class="inline px-2 mt-[10px]"><a href="pricing.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out ms-2">Pricing</a></li>
                                    <li class="inline px-2 mt-[10px]"><a href="contactus.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out ms-2">Contact Us</a></li>
                                </ul><!--end icon-->
                            </div><!--end grid-->
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="py-[30px] px-0 border-t border-slate-800">
                <div class="container text-center">
                    <div class="grid md:grid-cols-12 items-center">
                        <div class="md:col-span-6">
                            <div class="md:text-start text-center">
                                <p class="text-gray-400">© <script>document.write(new Date().getFullYear())</script> Ovaxo. Design with <i class="mdi mdi-heart text-red-700"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                            </div>
                        </div>

                        <div class="md:col-span-6 md:mt-0 mt-8">
                            <ul class="list-none md:text-end text-center">
                                <li class="inline"><a href="https://1.envato.market/ovaxo" target="_blank" class="h-8 w-8 inline-flex items-center text-center justify-center text-base font-normal tracking-wide align-middle transition duration-500 ease-in-out border border-gray-800 rounded-md hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>
                                <li class="inline"><a href="https://dribbble.com/shreethemes" target="_blank" class="h-8 w-8 inline-flex items-center text-center justify-center text-base font-normal tracking-wide align-middle transition duration-500 ease-in-out border border-gray-800 rounded-md hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                                <li class="inline"><a href="https://www.behance.net/shreethemes" target="_blank" class="h-8 w-8 inline-flex items-center text-center justify-center text-base font-normal tracking-wide align-middle transition duration-500 ease-in-out border border-gray-800 rounded-md hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600"><i class="uil uil-behance" title="Behance"></i></a></li>
                                <li class="inline"><a href="http://linkedin.com/company/shreethemes" target="_blank" class="h-8 w-8 inline-flex items-center text-center justify-center text-base font-normal tracking-wide align-middle transition duration-500 ease-in-out border border-gray-800 rounded-md hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600"><i class="uil uil-linkedin" title="Linkedin"></i></a></li>
                                <li class="inline"><a href="https://www.facebook.com/shreethemes" target="_blank" class="h-8 w-8 inline-flex items-center text-center justify-center text-base font-normal tracking-wide align-middle transition duration-500 ease-in-out border border-gray-800 rounded-md hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                                <li class="inline"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="h-8 w-8 inline-flex items-center text-center justify-center text-base font-normal tracking-wide align-middle transition duration-500 ease-in-out border border-gray-800 rounded-md hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                                <li class="inline"><a href="https://twitter.com/shreethemes" target="_blank" class="h-8 w-8 inline-flex items-center text-center justify-center text-base font-normal tracking-wide align-middle transition duration-500 ease-in-out border border-gray-800 rounded-md hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                                <li class="inline"><a href="mailto:support@shreethemes.in" class="h-8 w-8 inline-flex items-center text-center justify-center text-base font-normal tracking-wide align-middle transition duration-500 ease-in-out border border-gray-800 rounded-md hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
                                <li class="inline"><a href="https://forms.gle/QkTueCikDGqJnbky9" target="_blank" class="h-8 w-8 inline-flex items-center text-center justify-center text-base font-normal tracking-wide align-middle transition duration-500 ease-in-out border border-gray-800 rounded-md hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600"><i class="uil uil-file align-middle" title="customization"></i></a></li>
                            </ul><!--end icon-->
                        </div>
                    </div>
                </div><!--end container-->
            </div>
        </footer><!--end footer-->
        <!-- Footer End -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-violet-600 text-white leading-9"><i class="uil uil-arrow-up"></i></a>
        <!-- Back to top -->

        <!-- Switcher -->
        <div class="fixed top-1/4 -right-2 z-3">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk">
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
                </label>
            </span>
        </div>
        <!-- Switcher -->

        <!-- LTR & RTL Mode Code -->
        <div class="fixed top-[40%] -right-3 z-50">
            <a href="#" id="switchRtl">
                <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold rtl:block ltr:hidden" >LTR</span>
                <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold ltr:block rtl:hidden">RTL</span>
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
