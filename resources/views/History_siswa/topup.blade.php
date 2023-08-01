<!DOCTYPE html>
<html lang="en" dir="ltr">

{{--  <!-- Mirrored from html.vristo.sbthemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 02:32:26 GMT -->  --}}
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>siswa - Dashboad</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/app.css" />
    <link href="/admin/assets/images/Logo.png" rel="shortcut icon">
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link rel="stylesheet" href="load/load.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" media="screen" href="siswa/css/perfect-scrollbar.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="siswa/css/style.css" />
    <link defer rel="stylesheet" type="text/css" media="screen" href="siswa/css/animate.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('admin/assets/css/style.css') }}" />
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    {{-- <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" /> --}}
    <script src="siswa/js/perfect-scrollbar.min.js"></script>
    <script defer src="siswa/js/popper.min.js"></script>
    <script defer src="siswa/js/tippy-bundle.umd.min.js"></script>
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <script src="https://cdn.tailwindcss.com%22%3E/""></script>
    <script>
        theme: {
            extend: {
                blur: {
                    xs: '3px',
                }
            },
        },
    </script>
    <script defer src="siswa/js/sweetalert.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
</head>

<body x-data="main"
    class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased bg-[#F6F5FF]"
    :class="[$store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme, $store.app.menu, $store.app.layout, $store.app
        .rtlClass
    ]">
    <!-- sidebar menu overlay -->
    <div x-cloak class="fixed inset-0 z-50 bg-[black]/60 lg:hidden" :class="{ 'hidden': !$store.app.sidebar }"
        @click="$store.app.toggleSidebar()"></div>

    <!-- screen loader -->
    <div
        class="screen_loader animate__animated fixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
        <div class="center">
            <div class="ring">
            </div>
            <img src="load/logo.png" alt="Deskripsi gambar" class="my-img">
        </div>
    </div>

    <!-- scroll to top button -->
    <div class="fixed bottom-6 z-50 ltr:right-6 rtl:left-6" x-data="scrollToTop">
        <template x-if="showTopButton">
            <button type="button"
                class="btn btn-outline-primary animate-pulse rounded-full bg-[#fafafa] p-2 dark:bg-[#060818] dark:hover:bg-primary"
                @click="goToTop">
                <svg width="24" height="24" class="h-4 w-4" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd"
                        d="M12 20.75C12.4142 20.75 12.75 20.4142 12.75 20L12.75 10.75L11.25 10.75L11.25 20C11.25 20.4142 11.5858 20.75 12 20.75Z"
                        fill="currentColor" />
                    <path
                        d="M6.00002 10.75C5.69667 10.75 5.4232 10.5673 5.30711 10.287C5.19103 10.0068 5.25519 9.68417 5.46969 9.46967L11.4697 3.46967C11.6103 3.32902 11.8011 3.25 12 3.25C12.1989 3.25 12.3897 3.32902 12.5304 3.46967L18.5304 9.46967C18.7449 9.68417 18.809 10.0068 18.6929 10.287C18.5768 10.5673 18.3034 10.75 18 10.75L6.00002 10.75Z"
                        fill="currentColor" />
                </svg>
            </button>
        </template>
    </div>

    <!-- start theme customizer section -->
    <div x-data="customizer">
        <div class="fixed inset-0 z-[51] hidden bg-[black]/60 px-4 transition-[display]"
            :class="{ '!block': showCustomizer }" @click="showCustomizer = false"></div>

        <nav class="fixed top-0 bottom-0 z-[51] w-full max-w-[400px] bg-white p-4 shadow-[5px_0_25px_0_rgba(94,92,154,0.1)] transition-[right] duration-300 ltr:-right-[400px] rtl:-left-[400px] dark:bg-[#0e1726]"
            :class="{ 'ltr:!right-0 rtl:!left-0': showCustomizer }">

            <div class="perfect-scrollbar h-full overflow-y-auto overflow-x-hidden">
                <div class="relative pb-5 text-center">
                    <a href="javascript:;"
                        class="absolute top-0 opacity-30 hover:opacity-100 ltr:right-0 rtl:left-0 dark:text-white"
                        @click="showCustomizer = false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" class="h-5 w-5">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </a>
                    <h4 class="mb-1 dark:text-white">TEMPLATE CUSTOMIZER</h4>
                    <p class="text-white-dark">Set preferences that will be cookied for your live preview
                        demonstration.</p>
                </div>
                <div class="mb-3 rounded-md border border-dashed border-[#e0e6ed] p-3 dark:border-[#1b2e4b]">
                    <h5 class="mb-1 text-base leading-none dark:text-white">Color Scheme</h5>
                    <p class="text-xs text-white-dark">Overall light or dark presentation.</p>
                    <div class="mt-3 grid grid-cols-3 gap-2">
                        <button type="button" class="btn"
                            :class="[$store.app.theme === 'light' ? 'btn-primary' : 'btn-outline-primary']"
                            @click="$store.app.toggleTheme('light')">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0 ltr:mr-2 rtl:ml-2">
                                <circle cx="12" cy="12" r="5" stroke="currentColor"
                                    stroke-width="1.5"></circle>
                                <path d="M12 2V4" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round"></path>
                                <path d="M12 20V22" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round"></path>
                                <path d="M4 12L2 12" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round"></path>
                                <path d="M22 12L20 12" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round"></path>
                                <path opacity="0.5" d="M19.7778 4.22266L17.5558 6.25424" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round"></path>
                                <path opacity="0.5" d="M4.22217 4.22266L6.44418 6.25424" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round"></path>
                                <path opacity="0.5" d="M6.44434 17.5557L4.22211 19.7779" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round"></path>
                                <path opacity="0.5" d="M19.7778 19.7773L17.5558 17.5551" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round"></path>
                            </svg>
                            Light
                        </button>
                        <button type="button" class="btn"
                            :class="[$store.app.theme === 'dark' ? 'btn-primary' : 'btn-outline-primary']"
                            @click="$store.app.toggleTheme('dark')">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0 ltr:mr-2 rtl:ml-2">
                                <path
                                    d="M21.0672 11.8568L20.4253 11.469L21.0672 11.8568ZM12.1432 2.93276L11.7553 2.29085V2.29085L12.1432 2.93276ZM21.25 12C21.25 17.1086 17.1086 21.25 12 21.25V22.75C17.9371 22.75 22.75 17.9371 22.75 12H21.25ZM12 21.25C6.89137 21.25 2.75 17.1086 2.75 12H1.25C1.25 17.9371 6.06294 22.75 12 22.75V21.25ZM2.75 12C2.75 6.89137 6.89137 2.75 12 2.75V1.25C6.06294 1.25 1.25 6.06294 1.25 12H2.75ZM15.5 14.25C12.3244 14.25 9.75 11.6756 9.75 8.5H8.25C8.25 12.5041 11.4959 15.75 15.5 15.75V14.25ZM20.4253 11.469C19.4172 13.1373 17.5882 14.25 15.5 14.25V15.75C18.1349 15.75 20.4407 14.3439 21.7092 12.2447L20.4253 11.469ZM9.75 8.5C9.75 6.41182 10.8627 4.5828 12.531 3.57467L11.7553 2.29085C9.65609 3.5593 8.25 5.86509 8.25 8.5H9.75ZM12 2.75C11.9115 2.75 11.8077 2.71008 11.7324 2.63168C11.6686 2.56527 11.6538 2.50244 11.6503 2.47703C11.6461 2.44587 11.6482 2.35557 11.7553 2.29085L12.531 3.57467C13.0342 3.27065 13.196 2.71398 13.1368 2.27627C13.0754 1.82126 12.7166 1.25 12 1.25V2.75ZM21.7092 12.2447C21.6444 12.3518 21.5541 12.3539 21.523 12.3497C21.4976 12.3462 21.4347 12.3314 21.3683 12.2676C21.2899 12.1923 21.25 12.0885 21.25 12H22.75C22.75 11.2834 22.1787 10.9246 21.7237 10.8632C21.286 10.804 20.7293 10.9658 20.4253 11.469L21.7092 12.2447Z"
                                    fill="currentColor"></path>
                            </svg>
                            Dark
                        </button>
                        <button type="button" class="btn"
                            :class="[$store.app.theme === 'system' ? 'btn-primary' : 'btn-outline-primary']"
                            @click="$store.app.toggleTheme('system')">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0 ltr:mr-2 rtl:ml-2">
                                <path
                                    d="M3 9C3 6.17157 3 4.75736 3.87868 3.87868C4.75736 3 6.17157 3 9 3H15C17.8284 3 19.2426 3 20.1213 3.87868C21 4.75736 21 6.17157 21 9V14C21 15.8856 21 16.8284 20.4142 17.4142C19.8284 18 18.8856 18 17 18H7C5.11438 18 4.17157 18 3.58579 17.4142C3 16.8284 3 15.8856 3 14V9Z"
                                    stroke="currentColor" stroke-width="1.5"></path>
                                <path opacity="0.5" d="M22 21H2" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round"></path>
                                <path opacity="0.5" d="M15 15H9" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round"></path>
                            </svg>
                            System
                        </button>
                    </div>
                </div>
                <div class="mb-3 rounded-md border border-dashed border-[#e0e6ed] p-3 dark:border-[#1b2e4b]">
                    <h5 class="mb-1 text-base leading-none dark:text-white">Navigation Position</h5>
                    <p class="text-xs text-white-dark">Select the primary navigation paradigm for your app.</p>
                    <div class="mt-3">
                        <button id="horizontalButton" type="button" class="btn"
                            :class="[$store.app.menu === 'horizontal' ? 'btn-primary' : 'btn-outline-primary']"
                            @click="$store.app.toggleMenu('horizontal')">
                            Horizontal
                        </button>
                        <button type="button" class="btn"
                            :class="[$store.app.menu === 'vertical' ? 'btn-primary' : 'btn-outline-primary']"
                            @click="$store.app.toggleMenu('vertical')">
                            Vertical
                        </button>
                        <button type="button" class="btn"
                            :class="[$store.app.menu === 'collapsible-vertical' ? 'btn-primary' : 'btn-outline-primary']"
                            @click="$store.app.toggleMenu('collapsible-vertical')">
                            Collapsible
                        </button>
                    </div>
                </div>

                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        const horizontalButton = document.getElementById("horizontalButton");
                        horizontalButton.classList.add("btn-primary");
                        horizontalButton.click();
                    });
                </script>
                <div class="mt-5 text-primary">
                    <label class="mb-0 inline-flex">
                        <input x-model="$store.app.semidark" type="checkbox" :value="true"
                            class="form-checkbox" @change="$store.app.toggleSemidark()" />
                        <span>Semi Dark (Sidebar & Header)</span>
                    </label>
                </div>
            </div>
            <div class="mb-3 rounded-md border border-dashed border-[#e0e6ed] p-3 dark:border-[#1b2e4b]">
                <h5 class="mb-1 text-base leading-none dark:text-white">Layout Style</h5>
                <p class="text-xs text-white-dark">Select the primary layout style for your app.</p>
                <div class="mt-3 flex gap-2">
                    <button type="button" class="btn flex-auto"
                        :class="[$store.app.layout === 'boxed-layout' ? 'btn-primary' : 'btn-outline-primary']"
                        @click="$store.app.toggleLayout('boxed-layout')">
                        Box
                    </button>
                    <button type="button" class="btn flex-auto"
                        :class="[$store.app.layout === 'full' ? 'btn-primary' : 'btn-outline-primary']"
                        @click="$store.app.toggleLayout('full')">
                        Full
                    </button>
                </div>
            </div>
            <div class="mb-3 rounded-md border border-dashed border-[#e0e6ed] p-3 dark:border-[#1b2e4b]">
                <h5 class="mb-1 text-base leading-none dark:text-white">Direction</h5>
                <p class="text-xs text-white-dark">Select the direction for your app.</p>
                <div class="mt-3 flex gap-2">
                    <button type="button" class="btn flex-auto"
                        :class="[$store.app.rtlClass === 'ltr' ? 'btn-primary' : 'btn-outline-primary']"
                        @click="$store.app.toggleRTL('ltr')">
                        LTR
                    </button>
                    <button type="button" class="btn flex-auto"
                        :class="[$store.app.rtlClass === 'rtl' ? 'btn-primary' : 'btn-outline-primary']"
                        @click="$store.app.toggleRTL('rtl')">
                        RTL
                    </button>
                </div>
            </div>

            <div class="mb-3 rounded-md border border-dashed border-[#e0e6ed] p-3 dark:border-[#1b2e4b]">
                <h5 class="mb-1 text-base leading-none dark:text-white">Navbar Type</h5>
                <p class="text-xs text-white-dark">Sticky or Floating.</p>
                <div class="mt-3 flex items-center gap-3 text-primary">
                    <label class="mb-0 inline-flex">
                        <input x-model="$store.app.navbar" type="radio" value="navbar-sticky" class="form-radio"
                            @change="$store.app.toggleNavbar()" />
                        <span>Sticky</span>
                    </label>
                    <label class="mb-0 inline-flex">
                        <input x-model="$store.app.navbar" type="radio" value="navbar-floating" class="form-radio"
                            @change="$store.app.toggleNavbar()" />
                        <span>Floating</span>
                    </label>
                    <label class="mb-0 inline-flex">
                        <input x-model="$store.app.navbar" type="radio" value="navbar-static" class="form-radio"
                            @change="$store.app.toggleNavbar()" />
                        <span>Static</span>
                    </label>
                </div>
            </div>

            <div class="mb-3 rounded-md border border-dashed border-[#e0e6ed] p-3 dark:border-[#1b2e4b]">
                <h5 class="mb-1 text-base leading-none dark:text-white">Router Transition</h5>
                <p class="text-xs text-white-dark">Animation of main content.</p>
                <div class="mt-3">
                    <select x-model="$store.app.animation" class="form-select border-primary text-primary"
                        @change="$store.app.toggleAnimation()">
                        <option value="">Select Animation</option>
                        <option value="animate__fadeIn">Fade</option>
                        <option value="animate__fadeInDown">Fade Down</option>
                        <option value="animate__fadeInUp">Fade Up</option>
                        <option value="animate__fadeInLeft">Fade Left</option>
                        <option value="animate__fadeInRight">Fade Right</option>
                        <option value="animate__slideInDown">Slide Down</option>
                        <option value="animate__slideInLeft">Slide Left</option>
                        <option value="animate__slideInRight">Slide Right</option>
                        <option value="animate__zoomIn">Zoom In</option>
                    </select>
                </div>
            </div>
    </div>
    </nav>
    </div>
    <!-- end theme customizer section -->

    <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
        <!-- start sidebar section -->
        <div :class="{ 'dark text-white-dark': $store.app.semidark }">
            <nav x-data="sidebar"
                class="sidebar fixed top-0 bottom-0 z-50 h-full min-h-screen w-[260px] shadow-[5px_0_25px_0_rgba(94,92,154,0.1)] transition-all duration-300">
                <div class="h-full bg-white dark:bg-[#0e1726]">
                    <div class="flex items-center justify-between px-4 py-3">
                        <a href="" class="main-logo flex shrink-0 items-center">
                            <img class="ml-[5px] w-10 flex-none" src="{{ asset('siswa/images/hummasoft.png') }}"
                                alt="image" />

                        </a>
                        <a href="javascript:;"
                            class="collapse-icon flex h-8 w-8 items-center rounded-full transition duration-300 hover:bg-gray-500/10 rtl:rotate-180 dark:text-white-light dark:hover:bg-dark-light/10"
                            @click="$store.app.toggleSidebar()">
                            <svg class="m-auto h-5 w-5" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 19L7 12L13 5" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.5" d="M16.9998 19L10.9998 12L16.9998 5" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                    <ul class="perfect-scrollbar relative h-[calc(100vh-80px)] space-y-0.5 overflow-y-auto overflow-x-hidden p-4 py-0 font-semibold"
                        x-data="{ activeDropdown: 'dashboard' }">

                        <h2
                            class="-mx-4 mb-1 flex items-center bg-white-light/30 py-3 px-7 font-extrabold uppercase dark:bg-dark dark:bg-opacity-[0.08]">
                            <svg class="hidden h-5 w-4 flex-none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                            <span>Menu</span>
                        </h2>

                        <li class="nav-item">
                            <ul>
                                <li class="menu nav-item relative">
                                    <a href="{{ route('Siswamagang.index') }}"
                                        class="nav-link {{ request()->routeIs('Siswamagang.index') ? 'bg-blue-500 text-white hover:bg-blue-500' : '' }} ">
                                        <div class="flex items-center ">
                                            <svg width="20" height="20" viewBox="0 0 24 24"
                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3"
                                                    d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M9 17.25C8.58579 17.25 8.25 17.5858 8.25 18C8.25 18.4142 8.58579 18.75 9 18.75H15C15.4142 18.75 15.75 18.4142 15.75 18C15.75 17.5858 15.4142 17.25 15 17.25H9Z"
                                                    fill="currentColor" class=" opacity-3" />
                                            </svg>
                                            <span class="px-1 ">Dashboard</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="menu nav-item relative">
                                    <a href="{{ route('jurnal_siswa.index') }}"
                                        class="nav-link {{ request()->routeIs('jurnal_siswa.index') ? 'bg-blue-500 text-white hover:bg-blue-500' : '' }}">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                            </svg>
                                            <span class="px-1">Jurnal</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="menu nav-item relative">
                                    <a href="{{ route('absensi_siswa.index') }}"
                                        class="nav-link {{ request()->routeIs('absensi_siswa.index') ? 'bg-blue-500 text-white hover:bg-blue-500' : '' }}">
                                        <div class="flex items-center ">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-3 h-3">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                            </svg>
                                            <span class="px-1">Absensi</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="menu nav-item relative">
                                    <a href="{{ route('berita_siswa.index') }}"
                                        class="nav-link {{ request()->routeIs('berita_siswa.index') ? 'bg-blue-500 text-white hover:bg-blue-500' : '' }}">
                                        <div class="flex items-center ">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                            </svg>
                                            <span class="px-1">Berita</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="menu nav-item relative" id="hari_ini">
                                    <a class="flex h-12  cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ebg-blue-400 dark:text-gray-300 hover:bg-blue-400 hover:text-white"
                                        data-te-sidenav-link-ref>
                                        <div class="flex items-center">
                                            <svg class="group-hover:!text-primary" width="14" height="14"
                                                viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.5"
                                                    d="M13 15.4C13 13.3258 13 12.2887 13.659 11.6444C14.318 11 15.3787 11 17.5 11C19.6213 11 20.682 11 21.341 11.6444C22 12.2887 22 13.3258 22 15.4V17.6C22 19.6742 22 20.7113 21.341 21.3556C20.682 22 19.6213 22 17.5 22C15.3787 22 14.318 22 13.659 21.3556C13 20.7113 13 19.6742 13 17.6V15.4Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M2 8.6C2 10.6742 2 11.7113 2.65901 12.3556C3.31802 13 4.37868 13 6.5 13C8.62132 13 9.68198 13 10.341 12.3556C11 11.7113 11 10.6742 11 8.6V6.4C11 4.32582 11 3.28873 10.341 2.64437C9.68198 2 8.62132 2 6.5 2C4.37868 2 3.31802 2 2.65901 2.64437C2 3.28873 2 4.32582 2 6.4V8.6Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M13 5.5C13 4.4128 13 3.8692 13.1713 3.44041C13.3996 2.86867 13.8376 2.41443 14.389 2.17761C14.8024 2 15.3266 2 16.375 2H18.625C19.6734 2 20.1976 2 20.611 2.17761C21.1624 2.41443 21.6004 2.86867 21.8287 3.44041C22 3.8692 22 4.4128 22 5.5C22 6.5872 22 7.1308 21.8287 7.55959C21.6004 8.13133 21.1624 8.58557 20.611 8.82239C20.1976 9 19.6734 9 18.625 9H16.375C15.3266 9 14.8024 9 14.389 8.82239C13.8376 8.58557 13.3996 8.13133 13.1713 7.55959C13 7.1308 13 6.5872 13 5.5Z"
                                                    fill="currentColor" />
                                                <path opacity="0.5"
                                                    d="M2 18.5C2 19.5872 2 20.1308 2.17127 20.5596C2.39963 21.1313 2.83765 21.5856 3.38896 21.8224C3.80245 22 4.32663 22 5.375 22H7.625C8.67337 22 9.19755 22 9.61104 21.8224C10.1624 21.5856 10.6004 21.1313 10.8287 20.5596C11 20.1308 11 19.5872 11 18.5C11 17.4128 11 16.8692 10.8287 16.4404C10.6004 15.8687 10.1624 15.4144 9.61104 15.1776C9.19755 15 8.67337 15 7.625 15H5.375C4.32663 15 3.80245 15 3.38896 15.1776C2.83765 15.4144 2.39963 15.8687 2.17127 16.4404C2 16.8692 2 17.4128 2 18.5Z"
                                                    fill="currentColor" />
                                            </svg>
                                            <span class="px-1">Lainnya</span>
                                            <span
                                                class="absolute  right-0 ml-auto mr-[0.8rem] transition-transform duration-300 ease-linear motion-reduce:transition-none "
                                                data-te-sidenav-rotate-icon-ref>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" class="h-5 w-5 ">
                                                    <path fill-rule="evenodd" fill="currentColor"
                                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </div>

                                    </a>
                                    <ul class="show visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
                                        data-te-sidenav-collapse-ref>
                                        <li class="menu nav-item relative">
                                            <a href="{{ route('tatib_siswa.index') }}"
                                                class="px-1 {{ request()->routeIs('tatib_siswa.index') ? 'bg-blue-500' : 'text-white' }}">Tata
                                                tertib</a>

                                        </li>
                                        <li class="menu nav-item relative">
                                            <a href="{{ route('piket_siswa.index') }}" class="px-1">Jadwal
                                                Piket</a>

                                        </li>
                                        <li class="menu nav-item relative">
                                            <a href="{{ route('siswamagang_siswa') }}" class="px-1">Siswa</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu nav-item relative" id="hari_ini1">
                                    <a class="flex h-12  cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ebg-blue-400 dark:text-gray-300 hover:bg-blue-400 hover:text-white"
                                        data-te-sidenav-link-ref>
                                        <div class="flex items-center">
                                            <img src="/admin/Money.png" class="h-6 w-6" alt="">
                                            <span class="px-1">Transaksi</span>
                                            <span
                                                class="absolute  right-0 ml-auto mr-[0.8rem] transition-transform duration-300 ease-linear motion-reduce:transition-none "
                                                data-te-sidenav-rotate-icon-ref>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" class="h-5 w-5 ">
                                                    <path fill-rule="evenodd" fill="currentColor"
                                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </div>

                                    </a>
                                    <ul class="show visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
                                        data-te-sidenav-collapse-reff>
                                        <li class="menu nav-item relative">
                                            <a href="{{ route('History_topup.index') }}" class="px-1">History
                                                Topup</a>

                                        </li>
                                        <li class="menu nav-item relative">
                                            <a href="{{ route('History.index') }}" class="px-1">History
                                                Transaksi</a>
                                        </li>
                                    </ul>
                                </li>
                                @if (request()->routeIs('Siswamagang.index'))
                                    <li class="mt-10">
                                        <button onclick="showStep(1)"
                                            class="border border-blue-400 px-4 py-1 text-blue-400 hover:bg-blue-400 hover:text-blue-600 hover:border-blue-600 rounded">Isi
                                            saldo</button>

                                    </li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const menuItem = document.getElementById("hari_ini");
                const submenu = document.querySelector("[data-te-sidenav-collapse-ref]");

                menuItem.addEventListener("click", function() {
                    submenu.classList.toggle("hidden");
                    submenu.classList.toggle("block");
                });
            });

            document.addEventListener("DOMContentLoaded", function() {
                const menuItem = document.getElementById("hari_ini1");
                const submenu = document.querySelector("[data-te-sidenav-collapse-reff]");

                menuItem.addEventListener("click", function() {
                    submenu.classList.toggle("hidden");
                    submenu.classList.toggle("block");
                });
            });
        </script>
        <!-- end sidebar section -->

        <div class="main-content">
            @include('Siswamagang.nav_siswa')

            <div class="animate__animated p-6" :class="[$store.app.animation]">
                <!-- start main content section -->

                <div x-data="basic" class="mt-0">
                    <div class="flex items-center justify-between">
                        {{-- judul --}}
                        <div class="mb-5 font-semibold kamu-tak-diajak">
                            <span>history top up /<span class="text-[#00B7FF]"> {{ Auth::user()->name }}</span></span>
                        </div>
                        <label class="relative hidden sm:flex">
                            <form action="">
                                <label class="relative hidden sm:flex">
                                    <input
                                        class="form-input peer h-9 w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 text-xs+ placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="Search users..." type="text" name="cari"
                                        value="{{ request('cari') }}" />
                                </label>
                            </form>
                        </label>
                    </div>
                    @error('tanggal')
                        <div class="text-danger">Anda telah mengisi jurnal pada hari ini</div>
                    @enderror


                    {{-- <h2>{{ $e }}</h2> --}}

                    <style>
                        /* Menyembunyikan tombol cetak saat mencetak */
                        @media print {
                            .kamu-tak-diajak {
                                display: none;
                                border: none;
                            }

                            .print-container {
                                position: absolute;
                                top: 20px;
                                left: 0;
                            }
                        }

                        /*
                        .button_pdf:hover{
                            background-color: red;
                        }
                        .button_print:hover{
                            background-color: blue;
                        }
                        .button_izin:hover{
                            background-color: #f5e50c;
                        }
                        .button_absen:hover{
                            background-color: #02e802;
                            color: white;
                        } */
                    </style>

                    {{-- tabel --}}

                    <div class="print-container flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <table id="data-table" class="w-full text-left text-sm font-light print-container">
                                <div class="overflow-hidden">
                                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                        <thead class="border-b font-medium dark:border-neutral-500 ">
                                            <tr class="">
                                                <th scope="col" class="px-6 py-2">#</th>
                                                {{-- <th scope="col" class="px-6 py-2"></th> --}}
                                                <th scope="col" class="px-6 py-2">Top up</th>
                                                <th scope="col" class="px-6 py-2">Tanggal</th>
                                                <th scope="col" class="px-6 py-2 ">Status</th>
                                                {{-- <th scope="col" class="px-6 py-2">tanggal</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @forelse ($TopUp as $data)
                                                <tr
                                                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:text-black-200 ">
                                                    <td class="whitespace-nowrap px-6 py-2 font-medium">
                                                        {{ $no++ }}
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-2">{{ $data->saldo }}
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-2">{{ $data->tanggal }}
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-2">{{ $data->status }}
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="p-8 text-center">
                                                        <div class="flex justify-center items-center">
                                                            <img src="/admin/noData.png" alt=""
                                                                width="280px">
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforelse

                                        </tbody>
                            </table>
                            {{ $TopUp->appends(['cari' => request('cari')])->links() }}
                        </div>
                    </div>
                </div>
            </div>
            {{-- end tabel --}}
            {{-- paginate --}}



            {{-- modal --}}
            <div id="staticModal1" tabindex="-1" aria-hidden="true"
                class="kamu-tak-diajak fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Detail Jurnal 2
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="staticModal1">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <form action="" method="post" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div>
                                    <input type="hidden" name="nama" class="" value=" "
                                        id="">
                                </div>
                                <div>
                                    <input type="hidden" name="tanggal" id="" value=" ">
                                </div>
                                <div>
                                    <input type="hidden" name="sekolah" id="" value="">
                                </div>
                                <div>
                                    <label for="kegiatan"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kegiatan</label>
                                    <textarea name="kegiatan" class="w-full rounded-md" id="" cols="" rows="5"></textarea>
                                </div>
                                <div>
                                    <label for="bukti"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bukti</label>
                                    <img id="preview-image" src="" class="w-64 h-64" alt=""
                                        srcset="">
                                    <input type="file" name="image" id="image-input" placeholder=""
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        onchange="previewImage(event)">
                                </div>

                                <script>
                                    function previewImage(event) {
                                        var input = event.target;
                                        var reader = new FileReader();

                                        reader.onload = function() {
                                            var imgElement = document.getElementById("preview-image");
                                            imgElement.src = reader.result;
                                        };

                                        reader.readAsDataURL(input.files[0]);
                                    }
                                </script>

                                <input type="hidden" name="status" value="mengisi">
                                <div class="flex justify-end">
                                    <button type="submit"
                                        class="border text-blue-400 bg-white font-semibold border-blue-400  py-1.5 px-3 text-sm rounded-md hover:bg-blue-400 hover:text-white">Kirim</button>
                                </div>
                            </form>
                        </div>
                        <!-- Modal footer -->
                        <div
                            class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="staticModal" type="button"
                                class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        {{-- modal --}}
        <div id="staticModal" tabindex="-1" aria-hidden="true"
            class="kamu-tak-diajak fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Detail Jurnal
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="staticModal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <div>
                            <p class="text-base leading-relaxed font-bold  text-gray-800 dark:text-gray-400">
                                Nama
                            </p>
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">

                            </p>
                        </div>
                        <div>
                            <p class="text-base leading-relaxed font-bold text-gray-800 dark:text-gray-400">
                                Tanggal
                            </p>
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">

                            </p>
                        </div>
                        <div>
                            <p class="text-base leading-relaxed font-bold text-gray-800 dark:text-gray-400">
                                Sekolah
                            </p>
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">

                            </p>
                        </div>
                        <div>
                            <p class="text-base leading-relaxed font-bold text-gray-800 dark:text-gray-400">
                                Kegiatan
                            </p>
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">

                            </p>
                        </div>
                        <div>
                            <p class="text-base leading-relaxed font-bold text-gray-800 dark:text-gray-400">
                                Bukti
                            </p>
                            <img id="preview-image" src="{{ asset('storage/image/p') }}" class="w-64 h-64"
                                alt="" srcset="">
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="staticModal" type="button"
                            class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kembali</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>

    {{--  <!-- Swiper JS -->  --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    {{--  <!-- Initialize Swiper -->  --}}
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <style>
        /* === Google Font Import - Poppins === */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');



        section {
            position: relative;
            display: flex;
            align-items: center;
            padding: 20px;
        }

        .swiper {
            flex: 1;
        }

        .card {
            position: ;
            background: #fff;
            border-radius: 20px;
            margin: 20px 0;
            box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.1);
        }



        .card .card-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 30px;
            position: relative;
            z-index: 100;
        }



        .card .media-icons i:hover {
            opacity: 1;
        }

        .card .name-profession {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 10px;
            color: black;
        }

        .name-profession .name {
            font-size: 20px;
            font-weight: 600;
        }

        .name-profession .profession {
            font-size: 15px;
            font-weight: 500;
        }


        .card .button {
            width: 100%;
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .card .button button {
            background: #278be1;
            outline: none;
            border: none;
            color: #000000;
            padding: 8px 22px;
            border-radius: 20px;
            font-size: 14px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .card .button button:hover {
            background: #278be1;
        }

        .swiper-pagination {
            position: absolute;
        }

        .swiper-pagination-bullet {
            height: 7px;
            width: 26px;
            border-radius: 25px;
            background: #278be1;
        }

        .swiper-button-next,
        .swiper-button-prev {
            opacity: 0.7;
            color: #278be1;
            transition: all 0.3s ease;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            opacity: 1;
            color: #278be1;
        }

        @media (max-width: 768px) {
            section {
                flex-direction: column;
            }

            .swiper {
                width: 100%;
                max-width: 400px;
                margin: 0 auto;
            }

            .card {
                width: 100%;
            }

            .card::before {
                border-radius: 20px;
            }
        }
    </style>

    {{--  <!-- Include necessary scripts, e.g., Font Awesome -->  --}}
    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
    {{-- end carousel --}}

    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="siswa/js/alpine-collaspe.min.js"></script>
    <script src="siswa/js/alpine-persist.min.js"></script>
    <script defer src="siswa/js/alpine-ui.min.js"></script>
    <script defer src="siswa/js/alpine-focus.min.js"></script>
    <script defer src="siswa/js/alpine.min.js"></script>
    <script src="siswa/js/custom.js"></script>
    <script defer src="siswa/js/apexcharts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script> --}}
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                fontFamily: {
                    sans: ["Roboto", "sans-serif"],
                    body: ["Roboto", "sans-serif"],
                    mono: ["ui-monospace", "monospace"],
                },
            },
            corePlugins: {
                preflight: false,
            },
        };
    </script>


    <script>
        document.addEventListener('alpine:init', () => {
            //Carousel
            Alpine.data('carousel', () => ({
                items: ['carousel1.jpeg', 'carousel2.jpeg', 'carousel3.jpeg'],

                init() {
                    // basic
                    const swiper1 = new Swiper('#slider1', {
                        navigation: {
                            nextEl: '.swiper-button-next-ex1',
                            prevEl: '.swiper-button-prev-ex1',
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                    });
                    // Autoplay
                    const swiper2 = new Swiper('#slider2', {
                        navigation: {
                            nextEl: '.swiper-button-next-ex2',
                            prevEl: '.swiper-button-prev-ex2',
                        },
                        autoplay: {
                            delay: 2000,
                        },
                    });
                    // vertical
                    setTimeout(() => {
                        const swiper3 = new Swiper('#slider3', {
                            direction: 'vertical',
                            pagination: {
                                el: '.swiper-pagination',
                                clickable: true,
                            },
                            autoplay: {
                                delay: 2000,
                            },
                        });
                    });
                    // Loop
                    const swiper4 = new Swiper('#slider4', {
                        slidesPerView: 1,
                        spaceBetween: 30,
                        loop: true,
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                            type: 'fraction',
                        },
                        navigation: {
                            nextEl: '.swiper-button-next-ex4',
                            prevEl: '.swiper-button-prev-ex4',
                        },
                    });
                    // Multiple Slides
                    const swiper5 = new Swiper('#slider5', {
                        navigation: {
                            nextEl: '.swiper-button-next-ex5',
                            prevEl: '.swiper-button-prev-ex5',
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                        breakpoints: {
                            1024: {
                                slidesPerView: 3,
                                spaceBetween: 30,
                            },
                            768: {
                                slidesPerView: 2,
                                spaceBetween: 40,
                            },
                            320: {
                                slidesPerView: 1,
                                spaceBetween: 20,
                            },
                        },
                    });
                },
            }));
            // main section
            Alpine.data('scrollToTop', () => ({
                showTopButton: false,
                init() {
                    window.onscroll = () => {
                        this.scrollFunction();
                    };
                },

                scrollFunction() {
                    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                        this.showTopButton = true;
                    } else {
                        this.showTopButton = false;
                    }
                },

                goToTop() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                },
            }));

            // theme customization
            Alpine.data('customizer', () => ({
                showCustomizer: false,
            }));

            // sidebar section
            Alpine.data('sidebar', () => ({
                init() {
                    const selector = document.querySelector('.sidebar ul a[href="' + window.location
                        .pathname + '"]');
                    if (selector) {
                        selector.classList.add('active');
                        const ul = selector.closest('ul.sub-menu');
                        if (ul) {
                            let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                            if (ele) {
                                ele = ele[0];
                                setTimeout(() => {
                                    ele.click();
                                });
                            }
                        }
                    }
                },
            }));

            // header section
            Alpine.data('header', () => ({
                init() {
                    const selector = document.querySelector('ul.horizontal-menu a[href="' + window
                        .location.pathname + '"]');
                    if (selector) {
                        selector.classList.add('active');
                        const ul = selector.closest('ul.sub-menu');
                        if (ul) {
                            let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                            if (ele) {
                                ele = ele[0];
                                setTimeout(() => {
                                    ele.classList.add('active');
                                });
                            }
                        }
                    }
                },

                notifications: [{
                        id: 1,
                        profile: 'user-profile.jpeg',
                        message: '<strong class="text-sm mr-1">John Doe</strong>invite you to <strong>Prototyping</strong>',
                        time: '45 min ago',
                    },
                    {
                        id: 2,
                        profile: 'profile-34.jpeg',
                        message: '<strong class="text-sm mr-1">Adam Nolan</strong>mentioned you to <strong>UX Basics</strong>',
                        time: '9h Ago',
                    },
                    {
                        id: 3,
                        profile: 'profile-16.jpeg',
                        message: '<strong class="text-sm mr-1">Anna Morgan</strong>Upload a file',
                        time: '9h Ago',
                    },
                ],

                messages: [{
                        id: 1,
                        image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-success-light dark:bg-success text-success dark:text-success-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></span>',
                        title: 'Congratulations!',
                        message: 'Your OS has been updated.',
                        time: '1hr',
                    },
                    {
                        id: 2,
                        image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-info-light dark:bg-info text-info dark:text-info-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg></span>',
                        title: 'Did you know?',
                        message: 'You can switch between artboards.',
                        time: '2hr',
                    },
                    {
                        id: 3,
                        image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-danger-light dark:bg-danger text-danger dark:text-danger-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>',
                        title: 'Something went wrong!',
                        message: 'Send Reposrt',
                        time: '2days',
                    },
                    {
                        id: 4,
                        image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-warning-light dark:bg-warning text-warning dark:text-warning-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">    <circle cx="12" cy="12" r="10"></circle>    <line x1="12" y1="8" x2="12" y2="12"></line>    <line x1="12" y1="16" x2="12.01" y2="16"></line></svg></span>',
                        title: 'Warning',
                        message: 'Your password strength is low.',
                        time: '5days',
                    },
                ],

                languages: [{
                        id: 1,
                        key: 'Chinese',
                        value: 'zh',
                    },
                    {
                        id: 2,
                        key: 'Danish',
                        value: 'da',
                    },
                    {
                        id: 3,
                        key: 'English',
                        value: 'en',
                    },
                    {
                        id: 4,
                        key: 'French',
                        value: 'fr',
                    },
                    {
                        id: 5,
                        key: 'German',
                        value: 'de',
                    },
                    {
                        id: 6,
                        key: 'Greek',
                        value: 'el',
                    },
                    {
                        id: 7,
                        key: 'Hungarian',
                        value: 'hu',
                    },
                    {
                        id: 8,
                        key: 'Italian',
                        value: 'it',
                    },
                    {
                        id: 9,
                        key: 'Japanese',
                        value: 'ja',
                    },
                    {
                        id: 10,
                        key: 'Polish',
                        value: 'pl',
                    },
                    {
                        id: 11,
                        key: 'Portuguese',
                        value: 'pt',
                    },
                    {
                        id: 12,
                        key: 'Russian',
                        value: 'ru',
                    },
                    {
                        id: 13,
                        key: 'Spanish',
                        value: 'es',
                    },
                    {
                        id: 14,
                        key: 'Swedish',
                        value: 'sv',
                    },
                    {
                        id: 15,
                        key: 'Turkish',
                        value: 'tr',
                    },
                ],

                removeNotification(value) {
                    this.notifications = this.notifications.filter((d) => d.id !== value);
                },

                removeMessage(value) {
                    this.messages = this.messages.filter((d) => d.id !== value);
                },
            }));

            // content section
            Alpine.data('sales', () => ({
                init() {
                    isDark = this.$store.app.theme === 'dark' ? true : false;
                    isRtl = this.$store.app.rtlClass === 'rtl' ? true : false;

                    const revenueChart = null;
                    const salesByCategory = null;
                    const dailySales = null;
                    const totalOrders = null;

                    // revenue
                    setTimeout(() => {
                        this.revenueChart = new ApexCharts(this.$refs.revenueChart, this
                            .revenueChartOptions);
                        this.$refs.revenueChart.innerHTML = '';
                        this.revenueChart.render();

                        // sales by category
                        this.salesByCategory = new ApexCharts(this.$refs.salesByCategory, this
                            .salesByCategoryOptions);
                        this.$refs.salesByCategory.innerHTML = '';
                        this.salesByCategory.render();

                        // daily sales
                        this.dailySales = new ApexCharts(this.$refs.dailySales, this
                            .dailySalesOptions);
                        this.$refs.dailySales.innerHTML = '';
                        this.dailySales.render();

                        // total orders
                        this.totalOrders = new ApexCharts(this.$refs.totalOrders, this
                            .totalOrdersOptions);
                        this.$refs.totalOrders.innerHTML = '';
                        this.totalOrders.render();
                    }, 300);

                    this.$watch('$store.app.theme', () => {
                        isDark = this.$store.app.theme === 'dark' ? true : false;

                        this.revenueChart.updateOptions(this.revenueChartOptions);
                        this.salesByCategory.updateOptions(this.salesByCategoryOptions);
                        this.dailySales.updateOptions(this.dailySalesOptions);
                        this.totalOrders.updateOptions(this.totalOrdersOptions);
                    });

                    this.$watch('$store.app.rtlClass', () => {
                        isRtl = this.$store.app.rtlClass === 'rtl' ? true : false;
                        this.revenueChart.updateOptions(this.revenueChartOptions);
                    });
                },

                // revenue
                get revenueChartOptions() {
                    return {
                        series: [{
                                name: 'Income',
                                data: [16800, 16800, 15500, 17800, 15500, 17000, 19000, 16000,
                                    15000, 17000, 14000, 17000
                                ],
                            },
                            {
                                name: 'Expenses',
                                data: [16500, 17500, 16200, 17300, 16000, 19500, 16000, 17000,
                                    16000, 19000, 18000, 19000
                                ],
                            },
                        ],
                        chart: {
                            height: 325,
                            type: 'area',
                            fontFamily: 'Nunito, sans-serif',
                            zoom: {
                                enabled: false,
                            },
                            toolbar: {
                                show: false,
                            },
                        },
                        dataLabels: {
                            enabled: false,
                        },
                        stroke: {
                            show: true,
                            curve: 'smooth',
                            width: 2,
                            lineCap: 'square',
                        },
                        dropShadow: {
                            enabled: true,
                            opacity: 0.2,
                            blur: 10,
                            left: -7,
                            top: 22,
                        },
                        colors: isDark ? ['#2196f3', '#e7515a'] : ['#1b55e2', '#e7515a'],
                        markers: {
                            discrete: [{
                                    seriesIndex: 0,
                                    dataPointIndex: 6,
                                    fillColor: '#1b55e2',
                                    strokeColor: 'transparent',
                                    size: 7,
                                },
                                {
                                    seriesIndex: 1,
                                    dataPointIndex: 5,
                                    fillColor: '#e7515a',
                                    strokeColor: 'transparent',
                                    size: 7,
                                },
                            ],
                        },
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep',
                            'Oct', 'Nov', 'Dec'
                        ],
                        xaxis: {
                            axisBorder: {
                                show: false,
                            },
                            axisTicks: {
                                show: false,
                            },
                            crosshairs: {
                                show: true,
                            },
                            labels: {
                                offsetX: isRtl ? 2 : 0,
                                offsetY: 5,
                                style: {
                                    fontSize: '12px',
                                    cssClass: 'apexcharts-xaxis-title',
                                },
                            },
                        },
                        yaxis: {
                            tickAmount: 7,
                            labels: {
                                formatter: (value) => {
                                    return value / 1000 + 'K';
                                },
                                offsetX: isRtl ? -30 : -10,
                                offsetY: 0,
                                style: {
                                    fontSize: '12px',
                                    cssClass: 'apexcharts-yaxis-title',
                                },
                            },
                            opposite: isRtl ? true : false,
                        },
                        grid: {
                            borderColor: isDark ? '#191e3a' : '#e0e6ed',
                            strokeDashArray: 5,
                            xaxis: {
                                lines: {
                                    show: true,
                                },
                            },
                            yaxis: {
                                lines: {
                                    show: false,
                                },
                            },
                            padding: {
                                top: 0,
                                right: 0,
                                bottom: 0,
                                left: 0,
                            },
                        },
                        legend: {
                            position: 'top',
                            horizontalAlign: 'right',
                            fontSize: '16px',
                            markers: {
                                width: 10,
                                height: 10,
                                offsetX: -2,
                            },
                            itemMargin: {
                                horizontal: 10,
                                vertical: 5,
                            },
                        },
                        tooltip: {
                            marker: {
                                show: true,
                            },
                            x: {
                                show: false,
                            },
                        },
                        fill: {
                            type: 'gradient',
                            gradient: {
                                shadeIntensity: 1,
                                inverseColors: !1,
                                opacityFrom: isDark ? 0.19 : 0.28,
                                opacityTo: 0.05,
                                stops: isDark ? [100, 100] : [45, 100],
                            },
                        },
                    };
                },

                // sales by category
                get salesByCategoryOptions() {
                    return {
                        series: [985, 737, 270],
                        chart: {
                            type: 'donut',
                            height: 460,
                            fontFamily: 'Nunito, sans-serif',
                        },
                        dataLabels: {
                            enabled: false,
                        },
                        stroke: {
                            show: true,
                            width: 25,
                            colors: isDark ? '#0e1726' : '#fff',
                        },
                        colors: isDark ? ['#5c1ac3', '#e2a03f', '#e7515a', '#e2a03f'] : ['#e2a03f',
                            '#5c1ac3', '#e7515a'
                        ],
                        legend: {
                            position: 'bottom',
                            horizontalAlign: 'center',
                            fontSize: '14px',
                            markers: {
                                width: 10,
                                height: 10,
                                offsetX: -2,
                            },
                            height: 50,
                            offsetY: 20,
                        },
                        plotOptions: {
                            pie: {
                                donut: {
                                    size: '65%',
                                    background: 'transparent',
                                    labels: {
                                        show: true,
                                        name: {
                                            show: true,
                                            fontSize: '29px',
                                            offsetY: -10,
                                        },
                                        value: {
                                            show: true,
                                            fontSize: '26px',
                                            color: isDark ? '#bfc9d4' : undefined,
                                            offsetY: 16,
                                            formatter: (val) => {
                                                return val;
                                            },
                                        },
                                        total: {
                                            show: true,
                                            label: 'Total',
                                            color: '#888ea8',
                                            fontSize: '29px',
                                            formatter: (w) => {
                                                return w.globals.seriesTotals.reduce(function(a,
                                                    b) {
                                                    return a + b;
                                                }, 0);
                                            },
                                        },
                                    },
                                },
                            },
                        },
                        labels: ['Apparel', 'Sports', 'Others'],
                        states: {
                            hover: {
                                filter: {
                                    type: 'none',
                                    value: 0.15,
                                },
                            },
                            active: {
                                filter: {
                                    type: 'none',
                                    value: 0.15,
                                },
                            },
                        },
                    };
                },

                // daily sales
                get dailySalesOptions() {
                    return {
                        series: [{
                                name: 'Sales',
                                data: [44, 55, 41, 67, 22, 43, 21],
                            },
                            {
                                name: 'Last Week',
                                data: [13, 23, 20, 8, 13, 27, 33],
                            },
                        ],
                        chart: {
                            height: 160,
                            type: 'bar',
                            fontFamily: 'Nunito, sans-serif',
                            toolbar: {
                                show: false,
                            },
                            stacked: true,
                            stackType: '100%',
                        },
                        dataLabels: {
                            enabled: false,
                        },
                        stroke: {
                            show: true,
                            width: 1,
                        },
                        colors: ['#e2a03f', '#e0e6ed'],
                        responsive: [{
                            breakpoint: 480,
                            options: {
                                legend: {
                                    position: 'bottom',
                                    offsetX: -10,
                                    offsetY: 0,
                                },
                            },
                        }, ],
                        xaxis: {
                            labels: {
                                show: false,
                            },
                            categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat'],
                        },
                        yaxis: {
                            show: false,
                        },
                        fill: {
                            opacity: 1,
                        },
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                columnWidth: '25%',
                            },
                        },
                        legend: {
                            show: false,
                        },
                        grid: {
                            show: false,
                            xaxis: {
                                lines: {
                                    show: false,
                                },
                            },
                            padding: {
                                top: 10,
                                right: -20,
                                bottom: -20,
                                left: -20,
                            },
                        },
                    };
                },

                // total orders
                get totalOrdersOptions() {
                    return {
                        series: [{
                            name: 'Sales',
                            data: [28, 40, 36, 52, 38, 60, 38, 52, 36, 40],
                        }, ],
                        chart: {
                            height: 290,
                            type: 'area',
                            fontFamily: 'Nunito, sans-serif',
                            sparkline: {
                                enabled: true,
                            },
                        },
                        stroke: {
                            curve: 'smooth',
                            width: 2,
                        },
                        colors: isDark ? ['#00ab55'] : ['#00ab55'],
                        labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
                        yaxis: {
                            min: 0,
                            show: false,
                        },
                        grid: {
                            padding: {
                                top: 125,
                                right: 0,
                                bottom: 0,
                                left: 0,
                            },
                        },
                        fill: {
                            opacity: 1,
                            type: 'gradient',
                            gradient: {
                                type: 'vertical',
                                shadeIntensity: 1,
                                inverseColors: !1,
                                opacityFrom: 0.3,
                                opacityTo: 0.05,
                                stops: [100, 100],
                            },
                        },
                        tooltip: {
                            x: {
                                show: false,
                            },
                        },
                    };
                },
            }));
        });
    </script>
</body>

<!-- Mirrored from html.vristo.sbthemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 02:32:57 GMT -->

</html>
