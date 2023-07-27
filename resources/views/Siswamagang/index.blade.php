<!DOCTYPE html>
<html lang="en" dir="ltr">

{{--  <!-- Mirrored from html.vristo.sbthemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 02:32:26 GMT -->  --}}
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>siswa - Dashboad</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="icon" type="image/x-icon" href="favicon.png" />
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
    <script defer src="siswa/js/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
    <!-- Add this line to include ApexCharts library -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.28.0/dist/apexcharts.min.js"></script>
    <script src="https://cdn.tailwindcss.com/"></script>
    <script>
        theme: {
            extend: {
                blur: {
                    xs: '3px',
                }
            },
        },

    </script>

</head>

<body x-data="main"
    class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased bg-[#F6F5FF]"
    :class="[$store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme, $store.app.menu, $store.app.layout, $store.app
        .rtlClass
    ]">
    @if (session()->has('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: "{{ session('error') }}",
            })
        </script>
    @endif
    @if (session()->has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil...',
                text: "{{ session('success') }}",
            })
        </script>
    @endif
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
                            <img class="ml-[5px] w-10 flex-none" src="{{ asset('siswa/images/hummasoft.png') }}" alt="image" />

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
                        <li class="menu nav-item">
                            <button type="button" class="nav-link group"
                                :class="{ 'active': activeDropdown === 'dashboard' }"
                                @click="activeDropdown === 'dashboard' ? activeDropdown = null : activeDropdown = 'dashboard'">
                                <div class="flex items-center">
                                    <svg class="group-hover:!text-primary" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.5"
                                            d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                                            fill="currentColor" />
                                        <path
                                            d="M9 17.25C8.58579 17.25 8.25 17.5858 8.25 18C8.25 18.4142 8.58579 18.75 9 18.75H15C15.4142 18.75 15.75 18.4142 15.75 18C15.75 17.5858 15.4142 17.25 15 17.25H9Z"
                                            fill="currentColor" />
                                    </svg>

                                    <span
                                        class="text-white ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Dashboard</span>
                                </div>
                                <div class="rtl:rotate-180" :class="{ '!rotate-90': activeDropdown === 'dashboard' }">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </button>
                        </li>

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
                                <li class="nav-item">
                                    <a href="{{ route('jurnal_siswa.index') }}" class="group">
                                        <div class="flex items-center">
                                            <svg class="group-hover:!text-primary" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M10.4036 22.4797L10.6787 22.015C11.1195 21.2703 11.3399 20.8979 11.691 20.6902C12.0422 20.4825 12.5001 20.4678 13.4161 20.4385C14.275 20.4111 14.8523 20.3361 15.3458 20.1317C16.385 19.7012 17.2106 18.8756 17.641 17.8365C17.9639 17.0571 17.9639 16.0691 17.9639 14.093V13.2448C17.9639 10.4683 17.9639 9.08006 17.3389 8.06023C16.9892 7.48958 16.5094 7.0098 15.9388 6.66011C14.919 6.03516 13.5307 6.03516 10.7542 6.03516H8.20964C5.43314 6.03516 4.04489 6.03516 3.02507 6.66011C2.45442 7.0098 1.97464 7.48958 1.62495 8.06023C1 9.08006 1 10.4683 1 13.2448V14.093C1 16.0691 1 17.0571 1.32282 17.8365C1.75326 18.8756 2.57886 19.7012 3.61802 20.1317C4.11158 20.3361 4.68882 20.4111 5.5477 20.4385C6.46368 20.4678 6.92167 20.4825 7.27278 20.6902C7.6239 20.8979 7.84431 21.2703 8.28514 22.015L8.5602 22.4797C8.97002 23.1721 9.9938 23.1721 10.4036 22.4797ZM13.1928 14.5171C13.7783 14.5171 14.253 14.0424 14.253 13.4568C14.253 12.8713 13.7783 12.3966 13.1928 12.3966C12.6072 12.3966 12.1325 12.8713 12.1325 13.4568C12.1325 14.0424 12.6072 14.5171 13.1928 14.5171ZM10.5422 13.4568C10.5422 14.0424 10.0675 14.5171 9.48193 14.5171C8.89637 14.5171 8.42169 14.0424 8.42169 13.4568C8.42169 12.8713 8.89637 12.3966 9.48193 12.3966C10.0675 12.3966 10.5422 12.8713 10.5422 13.4568ZM5.77108 14.5171C6.35664 14.5171 6.83133 14.0424 6.83133 13.4568C6.83133 12.8713 6.35664 12.3966 5.77108 12.3966C5.18553 12.3966 4.71084 12.8713 4.71084 13.4568C4.71084 14.0424 5.18553 14.5171 5.77108 14.5171Z"
                                                    fill="currentColor" />
                                                <path opacity="0.5"
                                                    d="M15.486 1C16.7529 0.999992 17.7603 0.999986 18.5683 1.07681C19.3967 1.15558 20.0972 1.32069 20.7212 1.70307C21.3632 2.09648 21.9029 2.63623 22.2963 3.27821C22.6787 3.90219 22.8438 4.60265 22.9226 5.43112C22.9994 6.23907 22.9994 7.24658 22.9994 8.51343V9.37869C22.9994 10.2803 22.9994 10.9975 22.9597 11.579C22.9191 12.174 22.8344 12.6848 22.6362 13.1632C22.152 14.3323 21.2232 15.2611 20.0541 15.7453C20.0249 15.7574 19.9955 15.7691 19.966 15.7804C19.8249 15.8343 19.7039 15.8806 19.5978 15.915H17.9477C17.9639 15.416 17.9639 14.8217 17.9639 14.093V13.2448C17.9639 10.4683 17.9639 9.08006 17.3389 8.06023C16.9892 7.48958 16.5094 7.0098 15.9388 6.66011C14.919 6.03516 13.5307 6.03516 10.7542 6.03516H8.20964C7.22423 6.03516 6.41369 6.03516 5.73242 6.06309V4.4127C5.76513 4.29934 5.80995 4.16941 5.86255 4.0169C5.95202 3.75751 6.06509 3.51219 6.20848 3.27821C6.60188 2.63623 7.14163 2.09648 7.78361 1.70307C8.40759 1.32069 9.10805 1.15558 9.93651 1.07681C10.7445 0.999986 11.7519 0.999992 13.0188 1H15.486Z"
                                                    fill="currentColor" />
                                            </svg>
                                            <span
                                                class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Jurnal</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('absensi_siswa.index') }}" class="group">
                                        <div class="flex items-center">
                                            <svg class="group-hover:!text-primary" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M24 5C24 6.65685 22.6569 8 21 8C19.3431 8 18 6.65685 18 5C18 3.34315 19.3431 2 21 2C22.6569 2 24 3.34315 24 5Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M17.2339 7.46394L15.6973 8.74444C14.671 9.59966 13.9585 10.1915 13.357 10.5784C12.7747 10.9529 12.3798 11.0786 12.0002 11.0786C11.6206 11.0786 11.2258 10.9529 10.6435 10.5784C10.0419 10.1915 9.32941 9.59966 8.30315 8.74444L5.92837 6.76546C5.57834 6.47377 5.05812 6.52106 4.76643 6.87109C4.47474 7.22112 4.52204 7.74133 4.87206 8.03302L7.28821 10.0465C8.2632 10.859 9.05344 11.5176 9.75091 11.9661C10.4775 12.4334 11.185 12.7286 12.0002 12.7286C12.8154 12.7286 13.523 12.4334 14.2495 11.9661C14.947 11.5176 15.7372 10.859 16.7122 10.0465L18.3785 8.65795C17.9274 8.33414 17.5388 7.92898 17.2339 7.46394Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M18.4538 6.58719C18.7362 6.53653 19.0372 6.63487 19.234 6.87109C19.3965 7.06614 19.4538 7.31403 19.4121 7.54579C19.0244 7.30344 18.696 6.97499 18.4538 6.58719Z"
                                                    fill="currentColor" />
                                                <path opacity="0.5"
                                                    d="M16.9576 3.02099C16.156 3 15.2437 3 14.2 3H9.8C5.65164 3 3.57746 3 2.28873 4.31802C1 5.63604 1 7.75736 1 12C1 16.2426 1 18.364 2.28873 19.682C3.57746 21 5.65164 21 9.8 21H14.2C18.3484 21 20.4225 21 21.7113 19.682C23 18.364 23 16.2426 23 12C23 10.9326 23 9.99953 22.9795 9.1797C22.3821 9.47943 21.7103 9.64773 21 9.64773C18.5147 9.64773 16.5 7.58722 16.5 5.04545C16.5 4.31904 16.6646 3.63193 16.9576 3.02099Z"
                                                    fill="currentColor" />
                                            </svg>
                                            <span
                                                class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Absensi</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
        <div class="main-content">
            @include('Siswamagang.nav_siswa')

            <div class="animate__animated p-6" :class="[$store.app.animation]">
                <!-- start main content section -->
                <div x-data="sales">
                    <div class="flex justify-between">
                        <div class="justify-start">

                            <h1>Dashboard</h1>
                        </div>
                        <div class="flex justify-end font-semibold bg-blue-400 text-white px-4 py-1 rounded">
                            <h1>Saldo anda : <span id="a">Rp
                                    {{ number_format($user->saldo ? $user->saldo : 0, 0, ',', '.') }}</span></h1>
                        </div>
                    </div>
                    {{--  modal  --}}
                    <div id="modal-step1"
                        class="fixed inset-0 flex items-center justify-center z-50 hidden " style="backdrop-filter: blur(6px);">
                        <div class="relative w-full max-w-2xl max-h-full ">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 shadow-lg">
                                <!-- Modal header -->
                                <div
                                    class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Topup
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="staticModal" onclick="hideAllSteps()">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <form action="{{ route('saldo', $user->id) }}" method="post"
                                    onsubmit="konfirmpassword(event)">
                                    @method('PUT')
                                    @csrf
                                    <div class="p-6 space-y-6">
                                        <div>
                                            <div class="relative z-0 w-full mb-6 group">
                                                <input type="number" name="saldo" id="saldo"
                                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                    placeholder=" " min="5000" max="100000"
                                                    oninvalid="this.setCustomValidity('Topup minimal 5.000 dan maksimal 100.000')"
                                                    oninput="setCustomValidity('')" />
                                                <label for="saldo"
                                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Masukkan
                                                    saldo</label>
                                            </div>
                                            <div class="grid gap-4 grid-cols-2 grid-rows-2">
                                                <div>
                                                    <input type="radio" name="saldo" id="5000"
                                                        class="hidden" value="5000">
                                                    <label for="5000"
                                                        class="px-4 py-2 border border-gray-300 rounded-md cursor-pointer hover:bg-gray-100 transition-colors checked:bg-blue-500 checked:text-white"
                                                        onclick="document.getElementById('saldo').value = '5000'">5000</label>
                                                </div>
                                                <div>
                                                    <input type="radio" name="saldo" id="10000"
                                                        class="hidden" value="10000">
                                                    <label for="10000"
                                                        class="px-4 py-2 border border-gray-300 rounded-md cursor-pointer hover:bg-gray-100 transition-colors checked:bg-blue-500 checked:text-white"
                                                        onclick="document.getElementById('saldo').value = '10000'">10000</label>
                                                </div>
                                                <div>
                                                    <input type="radio" name="saldo" id="15000"
                                                        class="hidden" value="15000">
                                                    <label for="15000"
                                                        class="px-4 py-2 border border-gray-300 rounded-md cursor-pointer hover:bg-gray-100 transition-colors checked:bg-blue-500 checked:text-white"
                                                        onclick="document.getElementById('saldo').value = '15000'">15000</label>
                                                </div>
                                                <div>
                                                    <input type="radio" name="saldo" id="20000"
                                                        class="hidden" value="20000">
                                                    <label for="20000"
                                                        class="px-4 py-2 border border-gray-300 rounded-md cursor-pointer hover:bg-gray-100 transition-colors checked:bg-blue-500 checked:text-white"
                                                        onclick="document.getElementById('saldo').value = '20000'">20000</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <input type="hidden" name="password" id="password-user">
                                        <button data-modal-hide="modal-step1" type="button"
                                            class="text-gray-700 bg-white border border-gray-700 hover:text-white hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                            onclick="hideAllSteps()">Kembali</button>
                                        <button type="submit" data-modal-hide="modal-step1"
                                            class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
                                    </div>
                                </form>
                                <script>
                                    function konfirmpassword(event) {
                                        event.preventDefault();
                                        let saldo = document.getElementById('saldo');
                                        console.log(saldo.value);
                                        if (saldo.value == "") {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Oops...',
                                                text: "Harap isi saldo",
                                            })
                                            return;
                                        }
                                        Swal.fire({
                                            title: 'Konfirmasi password',
                                            input: 'password',
                                            inputLabel: 'Masukkan password anda:',
                                            showCancelButton: true,
                                            confirmButtonText: 'Submit',
                                            cancelButtonText: 'Batal',
                                            confirmButtonColor: '#00B7FF',
                                            cancelButtonColor: '#FF0000',
                                            allowOutsideClick: false,
                                            inputValidator: (value) => {
                                                if (!value || value.trim() === '') {
                                                    return 'Harap masukkan password.';
                                                }
                                            },
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                document.getElementById("password-user").value = result.value;
                                                event.target.submit();
                                            }
                                        });
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                    <div id="modal-step2" class="fixed inset-0 flex items-center justify-center z-50 hidden">
                        <div class="relative w-full max-w-2xl max-h-full">

                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <div
                                    class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Scan rfid anda
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="staticModal" onclick="hideAllSteps()">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-6 space-y-6">
                                    <div>
                                        <div class="relative z-0 w-full mb-6 group">
                                            <input type="text" name="password" id="floating_email"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                placeholder=" " required />
                                            <label for="floating_email"
                                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Masukan
                                                password anda</label>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <button data-modal-hide="staticModal" type="button"
                                        class="text-gray-700 bg-white border border-gray-700 hover:text-white hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        onclick="prevStep()">Kembali</button>
                                    <button data-modal-hide="staticModal" type="submit"
                                        class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    {{--  end modal  --}}

                    <div class="pt-5 lg:w-full  md: sm:w-10/12">
                        <div class="mb-6 grid gap-6 xl:grid-cols-3 lg:grid-cols-1">
                            <div class="panel h-full xl:col-span-2">
                                <div class="mb-5 flex items-center dark:text-white-light">
                                    <h5 class="text-lg font-semibold">Jurnal</h5>
                                    <div x-data="dropdown" @click.outside="open = false"
                                        class="dropdown ltr:ml-auto rtl:mr-auto">
                                        <a href="javascript:;" @click="toggle">
                                            <svg class="h-5 w-5 text-black/70 hover:!text-primary dark:text-white/70"
                                                viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="5" cy="12" r="2"
                                                    stroke="currentColor" stroke-width="1.5" />
                                                <circle opacity="0.5" cx="12" cy="12"
                                                    r="2" stroke="currentColor" stroke-width="1.5" />
                                                <circle cx="19" cy="12" r="2"
                                                    stroke="currentColor" stroke-width="1.5" />
                                            </svg>
                                        </a>
                                        <ul x-cloak x-show="open" x-transition x-transition.duration.300ms
                                            class="ltr:right-0 rtl:left-0">
                                            <li><a href="javascript:;" @click="toggle">Weekly</a></li>
                                            <li><a href="javascript:;" @click="toggle">Monthly</a></li>
                                            <li><a href="javascript:;" @click="toggle">Yearly</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="relative w-full ">
                                    {{-- grafik --}}
                                    <div id="grafik_jurnal" style=""
                                    class=" w-[100%] h-35 mx-3 bg-white rounded-lg dark:bg-black mt-4 "style="box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.25); border-radius: 8px; ">
                                    <div class="w-full px-4 mt-6">
                                        <div class="w-[100%]  bg-white h-35 pb-5 text-same font-semibold dark:bg-transparent">
                                            tabel jurnal
                                        </div>
                                    </div>
                                </div>

                                {{-- end grafik --}}
                                </div>
                            </div>

                            <div class="panel h-full">
                                <div class="mb-5 flex items-center">
                                    <h5 class="text-lg font-semibold dark:text-white-light">Absensi</h5>
                                </div>
                                <canvas id="grafik_absensi"></canvas>
                            </div>
                            <div class="panel h-full lg:col-span-3">
                                <div class="mb-5 flex items-center">
                                    <h5 class="text-lg font-semibold dark:text-white-light">Tata tertib</h5>
                                </div>
                                {{-- tata tertib  --}}
                                <div class=" panel w-full flex justify-around gap-20 px-5">
                                    @php $count = 0; @endphp
                                    @forelse ($tatib as $tatatertib)
                                        @if ($count % 3 == 0)
                                            <div class="w-9/12">
                                        @endif
                                        {{-- pertama --}}
                                        <div class=" w-9/12">
                                            <div id="accordion-collapse" data-accordion="collapse">
                                                <h2 id="accordion-collapse-heading-1">
                                                    <button type="button"
                                                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                                                        data-accordion-target="#accordion-collapse-body-1"
                                                        aria-expanded="false"
                                                        aria-controls="accordion-collapse-body-1">
                                                        <span>{{ $tatatertib->judul }}</span>
                                                        <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                </h2>
                                                <div id="accordion-collapse-body-1" class="hidden"
                                                    aria-labelledby="accordion-collapse-heading-1">
                                                    <div
                                                        class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                                                        <p class="mb-2 text-gray-500 dark:text-gray-400">
                                                            {!! $tatatertib->deskripsi !!}</p>

                                                    </div>
                                                </div>


                                                <div id="accordion-collapse-body-3" class="hidden"
                                                    aria-labelledby="accordion-collapse-heading-3">
                                                    <div
                                                        class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                                                        <p class="mb-2 text-gray-500 dark:text-gray-400">The main
                                                            difference is that the core components from Flowbite are
                                                            open source under the MIT license, whereas Tailwind UI is a
                                                            paid product. Another difference is that Flowbite relies on
                                                            smaller and standalone components, whereas Tailwind UI
                                                            offers sections of pages.</p>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-400">However, we
                                                            actually recommend using both Flowbite, Flowbite Pro, and
                                                            even Tailwind UI as there is no technical reason stopping
                                                            you from using the best of two worlds.</p>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more
                                                            about these technologies:</p>
                                                        <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                                                            <li><a href="https://flowbite.com/pro/"
                                                                    class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite
                                                                    Pro</a></li>
                                                            <li><a href="https://tailwindui.com/" rel="nofollow"
                                                                    class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind
                                                                    UI</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @if (($count + 1) % 3 == 0 || $loop->last)
                                </div>
                                @endif
                                @php $count++; @endphp
                            @empty
                                @endforelse



                            </div>
                            {{-- end tata tertib --}}
                            {{-- caraousel --}}
                            <section>
                                <div class="swiper mySwiper container w-full">
                                    <div class="swiper-wrapper content">
                                        @forelse ( $mou as $data)
                                        <div class="swiper-slide card dark:bg-black">
                                            <div class="card-content ">
                                                <div class="image">
                                                    <img src="{{asset('Storage/mou/'. $data->logo)}}" alt="">
                                                </div>


                                            </div>
                                        </div>

                                        @empty

                                        @endforelse

                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </section>


                        </div>


                    </div>
                </div>
            </div>
        </div>




    </div>
    </div>
    </div>
    <script>
        let currentStep = 1;

        function showStep(step) {
            hideAllSteps();
            if (step === 1) {
                document.getElementById('modal-step1').classList.remove('hidden');
            } else if (step === 2) {
                document.getElementById('modal-step2').classList.remove('hidden');
            }
            currentStep = step;
        }

        function nextStep() {
            if (currentStep === 1) {
                const isValid = validateStep1();
                if (isValid) {
                    document.getElementById('modal-step1').classList.add('hidden');
                    document.getElementById('modal-step2').classList.remove('hidden');
                    currentStep = 2;
                }

            }
        }

        function prevStep() {
            if (currentStep === 2) {
                document.getElementById('modal-step2').classList.add('hidden');
                document.getElementById('modal-step1').classList.remove('hidden');
                currentStep = 1;
            }
        }

        function hideAllSteps() {
            document.getElementById('modal-step1').classList.add('hidden');
            document.getElementById('modal-step2').classList.add('hidden');
        }

        function validateStep1() {
            const saldo = document.getElementById('saldo').value;

            if (saldo.trim() === '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Saldo tidak boleh kosong!',
                });
                return false;
            }

            return true;
        }
    </script>

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
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-e lements.umd.min.js"></script> --}}
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

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
    const ctx = document.getElementById('grafik_absensi');

    new Chart(ctx, {
        type: 'doughnut',
        data: {
        labels: ['Hadir', 'Alfa', 'izin', 'telat'],
        datasets: [{
            label: '# of Votes',
            data: [{{ $Hadir }},{{ $Alfa }}, {{ $izin }}, {{ $Telat }}],
            borderWidth: 1
        }]
        },
        options: {
        scales: {
            y: {
            beginAtZero: true
            }
        }
        }
    });
    </script>

    <script>
        // Initialization for ES Users
    var options = {
        series: [{
        name: 'Mengisi',
        data: [{{$mengisi_jan}},{{$mengisi_feb}},{{$mengisi_mar}},{{$mengisi_apr}},{{$mengisi_mei}},
            {{$mengisi_jun}},{{$mengisi_jul}},{{$mengisi_aug}},{{$mengisi_sep}},{{$mengisi_okt}},{{$mengisi_nov}},{{$mengisi_des}}
        ]
        }, {
        name: 'Tidak Mengisi',
        data: [
            {{$tdk_mengisi_jan}},{{$tdk_mengisi_feb}},{{$tdk_mengisi_mar}},{{$tdk_mengisi_apr}},{{$tdk_mengisi_mei}},
            {{$tdk_mengisi_jun}},{{$tdk_mengisi_jul}},{{$tdk_mengisi_aug}},{{$tdk_mengisi_sep}},{{$tdk_mengisi_okt}},{{$tdk_mengisi_nov}},{{$tdk_mengisi_des}}
        ]
    }],
    chart: {
    type: 'bar',
    height: 350,
    width: 850,
    },
    plotOptions: {
    bar: {
        horizontal: false,
        columnWidth: '55%',
        endingShape: 'rounded',
        borderRadius: 7,
    },
    },
    dataLabels: {
    enabled: false,
    },
    animations: {
        enabled: true,
        easing: 'easeinout',
        speed: 1200,
        animateGradually: {
            enabled: true,
            delay: 200
        },
        dynamicAnimation: {
            enabled: true,
            speed: 450
        }
    },
    stroke: {
    show: true,
    width: 2,
    colors: ['transparent']
    },
    xaxis: {
    categories: ['Jan','Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Des'],

            },
            yaxis: {
                title: {
                    text: ''
                }
            },
            fill: {
                opacity: 5,
                colors: ['#008ffb', '#47EBB3']
            },
            tooltip: {
                y: {
                    // formatter: function (val) {
                    //   return "$ " + val + " thousands"
                    // }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#grafik_jurnal"), options);
        chart.render();
    </script>





</body>



</html>
