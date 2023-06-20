<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from html.vristo.sbthemes.com/apps-notes.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 02:33:03 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Admin - Laporan Siswa</title>
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/x-icon" href="admin/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" media="screen" href="admin/assets/css/perfect-scrollbar.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="admin/assets/css/style.css" />
    <link defer rel="stylesheet" type="text/css" media="screen" href="admin/assets/css/animate.css" />
    <script src="admin/assets/js/perfect-scrollbar.min.js"></script>
    <script defer src="admin/assets/js/popper.min.js"></script>
    <script defer src="admin/assets/js/tippy-bundle.umd.min.js"></script>
    <script defer src="admin/assets/js/sweetalert.min.js"></script>
</head>

<body x-data="main" class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased"
    :class="[$store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme, $store.app.menu, $store.app.layout, $store.app
        .rtlClass
    ]">
    <!-- sidebar menu overlay -->
    <div x-cloak class="fixed inset-0 z-50 bg-[black]/60 lg:hidden" :class="{ 'hidden': !$store.app.sidebar }"
        @click="$store.app.toggleSidebar()"></div>

    <!-- screen loader -->
    <div
        class="screen_loader animate__animated fixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
        <svg width="64" height="64" viewBox="0 0 135 135" xmlns="http://www.w3.org/2000/svg" fill="#4361ee">
            <path
                d="M67.447 58c5.523 0 10-4.477 10-10s-4.477-10-10-10-10 4.477-10 10 4.477 10 10 10zm9.448 9.447c0 5.523 4.477 10 10 10 5.522 0 10-4.477 10-10s-4.478-10-10-10c-5.523 0-10 4.477-10 10zm-9.448 9.448c-5.523 0-10 4.477-10 10 0 5.522 4.477 10 10 10s10-4.478 10-10c0-5.523-4.477-10-10-10zM58 67.447c0-5.523-4.477-10-10-10s-10 4.477-10 10 4.477 10 10 10 10-4.477 10-10z">
                <animateTransform attributeName="transform" type="rotate" from="0 67 67" to="-360 67 67" dur="2.5s"
                    repeatCount="indefinite" />
            </path>
            <path
                d="M28.19 40.31c6.627 0 12-5.374 12-12 0-6.628-5.373-12-12-12-6.628 0-12 5.372-12 12 0 6.626 5.372 12 12 12zm30.72-19.825c4.686 4.687 12.284 4.687 16.97 0 4.686-4.686 4.686-12.284 0-16.97-4.686-4.687-12.284-4.687-16.97 0-4.687 4.686-4.687 12.284 0 16.97zm35.74 7.705c0 6.627 5.37 12 12 12 6.626 0 12-5.373 12-12 0-6.628-5.374-12-12-12-6.63 0-12 5.372-12 12zm19.822 30.72c-4.686 4.686-4.686 12.284 0 16.97 4.687 4.686 12.285 4.686 16.97 0 4.687-4.686 4.687-12.284 0-16.97-4.685-4.687-12.283-4.687-16.97 0zm-7.704 35.74c-6.627 0-12 5.37-12 12 0 6.626 5.373 12 12 12s12-5.374 12-12c0-6.63-5.373-12-12-12zm-30.72 19.822c-4.686-4.686-12.284-4.686-16.97 0-4.686 4.687-4.686 12.285 0 16.97 4.686 4.687 12.284 4.687 16.97 0 4.687-4.685 4.687-12.283 0-16.97zm-35.74-7.704c0-6.627-5.372-12-12-12-6.626 0-12 5.373-12 12s5.374 12 12 12c6.628 0 12-5.373 12-12zm-19.823-30.72c4.687-4.686 4.687-12.284 0-16.97-4.686-4.686-12.284-4.686-16.97 0-4.687 4.686-4.687 12.284 0 16.97 4.686 4.687 12.284 4.687 16.97 0z">
                <animateTransform attributeName="transform" type="rotate" from="0 67 67" to="360 67 67" dur="8s"
                    repeatCount="indefinite" />
            </path>
        </svg>
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
                    <div class="mt-3 grid grid-cols-3 gap-2">
                        <button type="button" class="btn"
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
                            <input x-model="$store.app.navbar" type="radio" value="navbar-sticky"
                                class="form-radio" @change="$store.app.toggleNavbar()" />
                            <span>Sticky</span>
                        </label>
                        <label class="mb-0 inline-flex">
                            <input x-model="$store.app.navbar" type="radio" value="navbar-floating"
                                class="form-radio" @change="$store.app.toggleNavbar()" />
                            <span>Floating</span>
                        </label>
                        <label class="mb-0 inline-flex">
                            <input x-model="$store.app.navbar" type="radio" value="navbar-static"
                                class="form-radio" @change="$store.app.toggleNavbar()" />
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
        @include('dudi.sidebar')
        <!-- end sidebar section -->

        <div class="main-content">
            <!-- start header section -->
            <header :class="{ 'dark': $store.app.semidark && $store.app.menu === 'horizontal' }">
                <div class="shadow-sm">
                    <div class="relative flex w-full items-center bg-white px-5 py-2.5 dark:bg-[#0e1726]">
                        <div class="horizontal-logo flex items-center justify-between ltr:mr-2 rtl:ml-2 lg:hidden">
                            <a href="index-2.html" class="main-logo flex shrink-0 items-center">
                                <img class="inline w-8 ltr:-ml-1 rtl:-mr-1" src="admin/assets/images/logo.svg"
                                    alt="image" />
                                <span
                                    class="hidden align-middle text-2xl font-semibold transition-all duration-300 ltr:ml-1.5 rtl:mr-1.5 dark:text-white-light md:inline">VRISTO</span>
                            </a>

                            <a href="javascript:;"
                                class="collapse-icon flex flex-none rounded-full bg-white-light/40 p-2 hover:bg-white-light/90 hover:text-primary ltr:ml-2 rtl:mr-2 dark:bg-dark/40 dark:text-[#d0d2d6] dark:hover:bg-dark/60 dark:hover:text-primary lg:hidden"
                                @click="$store.app.toggleSidebar()">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 7L4 7" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" />
                                    <path opacity="0.5" d="M20 12L4 12" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" />
                                    <path d="M20 17L4 17" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" />
                                </svg>
                            </a>
                        </div>
                        <div x-data="header"
                            class="flex items-center space-x-1.5 ltr:ml-auto rtl:mr-auto rtl:space-x-reverse dark:text-[#d0d2d6] sm:flex-1 ltr:sm:ml-0 sm:rtl:mr-0 lg:space-x-2">
                            <div class="sm:ltr:mr-auto sm:rtl:ml-auto" x-data="{ search: false }"
                                @click.outside="search = false">
                                <form
                                    class="absolute inset-x-0 top-1/2 z-10 mx-4 hidden -translate-y-1/2 sm:relative sm:top-0 sm:mx-0 sm:block sm:translate-y-0"
                                    :class="{ '!block': search }" @submit.prevent="search = false">
                                    <div class="relative">
                                        <button type="button"
                                            class="absolute top-1/2 block -translate-y-1/2 hover:opacity-80 ltr:right-2 rtl:left-2 sm:hidden"
                                            @click="search = false">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle opacity="0.5" cx="12" cy="12" r="10"
                                                    stroke="currentColor" stroke-width="1.5" />
                                                <path d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5"
                                                    stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" />
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                                <button type="button"
                                    class="search_btn rounded-full bg-white-light/40 p-2 hover:bg-white-light/90 dark:bg-dark/40 dark:hover:bg-dark/60 sm:hidden"
                                    @click="search = ! search">
                                    <svg class="mx-auto h-4.5 w-4.5 dark:text-[#d0d2d6]" width="20"
                                        height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="11.5" cy="11.5" r="9.5" stroke="currentColor"
                                            stroke-width="1.5" opacity="0.5" />
                                        <path d="M18.5 18.5L22 22" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" />
                                    </svg>
                                </button>
                            </div>
                            <div>
                                <a href="javascript:;" x-cloak x-show="$store.app.theme === 'light'"
                                    href="javascript:;"
                                    class="flex items-center rounded-full bg-white-light/40 p-2 hover:bg-white-light/90 hover:text-primary dark:bg-dark/40 dark:hover:bg-dark/60"
                                    @click="$store.app.toggleTheme('dark')">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12" r="5" stroke="currentColor"
                                            stroke-width="1.5" />
                                        <path d="M12 2V4" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path d="M12 20V22" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path d="M4 12L2 12" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path d="M22 12L20 12" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path opacity="0.5" d="M19.7778 4.22266L17.5558 6.25424"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        <path opacity="0.5" d="M4.22217 4.22266L6.44418 6.25424"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        <path opacity="0.5" d="M6.44434 17.5557L4.22211 19.7779"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        <path opacity="0.5" d="M19.7778 19.7773L17.5558 17.5551"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </a>
                                <a href="javascript:;" x-cloak x-show="$store.app.theme === 'dark'"
                                    href="javascript:;"
                                    class="flex items-center rounded-full bg-white-light/40 p-2 hover:bg-white-light/90 hover:text-primary dark:bg-dark/40 dark:hover:bg-dark/60"
                                    @click="$store.app.toggleTheme('system')">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.0672 11.8568L20.4253 11.469L21.0672 11.8568ZM12.1432 2.93276L11.7553 2.29085V2.29085L12.1432 2.93276ZM21.25 12C21.25 17.1086 17.1086 21.25 12 21.25V22.75C17.9371 22.75 22.75 17.9371 22.75 12H21.25ZM12 21.25C6.89137 21.25 2.75 17.1086 2.75 12H1.25C1.25 17.9371 6.06294 22.75 12 22.75V21.25ZM2.75 12C2.75 6.89137 6.89137 2.75 12 2.75V1.25C6.06294 1.25 1.25 6.06294 1.25 12H2.75ZM15.5 14.25C12.3244 14.25 9.75 11.6756 9.75 8.5H8.25C8.25 12.5041 11.4959 15.75 15.5 15.75V14.25ZM20.4253 11.469C19.4172 13.1373 17.5882 14.25 15.5 14.25V15.75C18.1349 15.75 20.4407 14.3439 21.7092 12.2447L20.4253 11.469ZM9.75 8.5C9.75 6.41182 10.8627 4.5828 12.531 3.57467L11.7553 2.29085C9.65609 3.5593 8.25 5.86509 8.25 8.5H9.75ZM12 2.75C11.9115 2.75 11.8077 2.71008 11.7324 2.63168C11.6686 2.56527 11.6538 2.50244 11.6503 2.47703C11.6461 2.44587 11.6482 2.35557 11.7553 2.29085L12.531 3.57467C13.0342 3.27065 13.196 2.71398 13.1368 2.27627C13.0754 1.82126 12.7166 1.25 12 1.25V2.75ZM21.7092 12.2447C21.6444 12.3518 21.5541 12.3539 21.523 12.3497C21.4976 12.3462 21.4347 12.3314 21.3683 12.2676C21.2899 12.1923 21.25 12.0885 21.25 12H22.75C22.75 11.2834 22.1787 10.9246 21.7237 10.8632C21.286 10.804 20.7293 10.9658 20.4253 11.469L21.7092 12.2447Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                                <a href="javascript:;" x-cloak x-show="$store.app.theme === 'system'"
                                    href="javascript:;"
                                    class="flex items-center rounded-full bg-white-light/40 p-2 hover:bg-white-light/90 hover:text-primary dark:bg-dark/40 dark:hover:bg-dark/60"
                                    @click="$store.app.toggleTheme('light')">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3 9C3 6.17157 3 4.75736 3.87868 3.87868C4.75736 3 6.17157 3 9 3H15C17.8284 3 19.2426 3 20.1213 3.87868C21 4.75736 21 6.17157 21 9V14C21 15.8856 21 16.8284 20.4142 17.4142C19.8284 18 18.8856 18 17 18H7C5.11438 18 4.17157 18 3.58579 17.4142C3 16.8284 3 15.8856 3 14V9Z"
                                            stroke="currentColor" stroke-width="1.5" />
                                        <path opacity="0.5" d="M22 21H2" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path opacity="0.5" d="M15 15H9" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" />
                                    </svg>
                                </a>
                            </div>
                            <div class="dropdown" x-data="dropdown" @click.outside="open = false">
                                <a href="javascript:;"
                                    class="relative block rounded-full bg-white-light/40 p-2 hover:bg-white-light/90 hover:text-primary dark:bg-dark/40 dark:hover:bg-dark/60"
                                    @click="toggle">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z"
                                            stroke="currentColor" stroke-width="1.5" />
                                        <path
                                            d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        <path d="M12 6V10" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" />
                                    </svg>

                                    <span class="absolute top-0 flex h-3 w-3 ltr:right-0 rtl:left-0">
                                        <span
                                            class="absolute -top-[3px] inline-flex h-full w-full animate-ping rounded-full bg-success/50 opacity-75 ltr:-left-[3px] rtl:-right-[3px]"></span>
                                        <span
                                            class="relative inline-flex h-[6px] w-[6px] rounded-full bg-success"></span>
                                    </span>
                                </a>
                                <ul x-cloak x-show="open" x-transition x-transition.duration.300ms
                                    class="top-11 w-[300px] divide-y !py-0 text-dark ltr:-right-2 rtl:-left-2 dark:divide-white/10 dark:text-white-dark sm:w-[350px]">
                                    <li>
                                        <div
                                            class="flex items-center justify-between px-4 py-2 font-semibold hover:!bg-transparent">
                                            <h4 class="text-lg">Notification</h4>
                                            <template x-if="notifications.length">
                                                <span class="badge bg-primary/80"
                                                    x-text="notifications.length + 'New'"></span>
                                            </template>
                                        </div>
                                    </li>
                                    <template x-for="notification in notifications">
                                        <li class="dark:text-white-light/90">
                                            <div class="group flex items-center px-4 py-2" @click.self="toggle">
                                                <div class="grid place-content-center rounded">
                                                    <div class="relative h-12 w-12">
                                                        <img class="h-12 w-12 rounded-full object-cover"
                                                            :src="`assets/images/${notification.profile}`"
                                                            alt="image" />
                                                        <span
                                                            class="absolute right-[6px] bottom-0 block h-2 w-2 rounded-full bg-success"></span>
                                                    </div>
                                                </div>
                                                <div class="flex flex-auto ltr:pl-3 rtl:pr-3">
                                                    <div class="ltr:pr-3 rtl:pl-3">
                                                        <h6 x-html="notification.message"></h6>
                                                        <span class="block text-xs font-normal dark:text-gray-500"
                                                            x-text="notification.time"></span>
                                                    </div>
                                                    <button type="button"
                                                        class="text-neutral-300 opacity-0 hover:text-danger group-hover:opacity-100 ltr:ml-auto rtl:mr-auto"
                                                        @click="removeNotification(notification.id)">
                                                        <svg width="20" height="20" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle opacity="0.5" cx="12" cy="12"
                                                                r="10" stroke="currentColor"
                                                                stroke-width="1.5" />
                                                            <path d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                    </template>
                                    <template x-if="notifications.length">
                                        <li>
                                            <div class="p-4">
                                                <button class="btn btn-primary btn-small block w-full"
                                                    @click="toggle">Read All Notifications</button>
                                            </div>
                                        </li>
                                    </template>
                                    <template x-if="!notifications.length">
                                        <li>
                                            <div
                                                class="!grid min-h-[200px] place-content-center text-lg hover:!bg-transparent">
                                                <div
                                                    class="mx-auto mb-4 rounded-full text-primary ring-4 ring-primary/30">
                                                    <svg width="40" height="40" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.5"
                                                            d="M20 10C20 4.47715 15.5228 0 10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20C15.5228 20 20 15.5228 20 10Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M10 4.25C10.4142 4.25 10.75 4.58579 10.75 5V11C10.75 11.4142 10.4142 11.75 10 11.75C9.58579 11.75 9.25 11.4142 9.25 11V5C9.25 4.58579 9.58579 4.25 10 4.25Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M10 15C10.5523 15 11 14.5523 11 14C11 13.4477 10.5523 13 10 13C9.44772 13 9 13.4477 9 14C9 14.5523 9.44772 15 10 15Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </div>
                                                No data available.
                                            </div>
                                        </li>
                                    </template>
                                </ul>
                            </div>
                            <div class="dropdown flex-shrink-0" x-data="dropdown"
                                @click.outside="open = false">
                                <a href="javascript:;" class="group relative" @click="toggle()">
                                    <span><img
                                            class="h-9 w-9 rounded-full object-cover saturate-50 group-hover:saturate-100"
                                            src="admin/assets/images/user-profile.jpeg" alt="image" /></span>
                                </a>
                                <ul x-cloak x-show="open" x-transition x-transition.duration.300ms
                                    class="top-11 w-[230px] !py-0 font-semibold text-dark ltr:right-0 rtl:left-0 dark:text-white-dark dark:text-white-light/90">
                                    <li>
                                        <div class="flex items-center px-4 py-4">
                                            <div class="flex-none">
                                                <img class="h-10 w-10 rounded-md object-cover"
                                                    src="admin/assets/images/user-profile.jpeg" alt="image" />
                                            </div>
                                            <div class="ltr:pl-4 rtl:pr-4">
                                                <h4 class="text-base">
                                                    John Doe<span
                                                        class="rounded bg-success-light px-1 text-xs text-success ltr:ml-2 rtl:ml-2">Pro</span>
                                                </h4>
                                                <a class="text-black/60 hover:text-primary dark:text-dark-light/60 dark:hover:text-white"
                                                    href="javascript:;">johndoe@gmail.com</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="users-profile.html" class="dark:hover:text-white" @click="toggle">
                                            <svg class="h-4.5 w-4.5 ltr:mr-2 rtl:ml-2" width="18" height="18"
                                                viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="12" cy="6" r="4"
                                                    stroke="currentColor" stroke-width="1.5" />
                                                <path opacity="0.5"
                                                    d="M20 17.5C20 19.9853 20 22 12 22C4 22 4 19.9853 4 17.5C4 15.0147 7.58172 13 12 13C16.4183 13 20 15.0147 20 17.5Z"
                                                    stroke="currentColor" stroke-width="1.5" />
                                            </svg>
                                            Profile</a>
                                    </li>
                                    <li>
                                        <a href="apps-mailbox.html" class="dark:hover:text-white" @click="toggle">
                                            <svg class="h-4.5 w-4.5 ltr:mr-2 rtl:ml-2" width="18" height="18"
                                                viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.5"
                                                    d="M2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12C22 15.7712 22 17.6569 20.8284 18.8284C19.6569 20 17.7712 20 14 20H10C6.22876 20 4.34315 20 3.17157 18.8284C2 17.6569 2 15.7712 2 12Z"
                                                    stroke="currentColor" stroke-width="1.5" />
                                                <path
                                                    d="M6 8L8.1589 9.79908C9.99553 11.3296 10.9139 12.0949 12 12.0949C13.0861 12.0949 14.0045 11.3296 15.8411 9.79908L18 8"
                                                    stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" />
                                            </svg>
                                            Inbox</a>
                                    </li>
                                    <li>
                                        <a href="auth-boxed-lockscreen.html" class="dark:hover:text-white"
                                            @click="toggle">
                                            <svg class="h-4.5 w-4.5 ltr:mr-2 rtl:ml-2" width="18" height="18"
                                                viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2 16C2 13.1716 2 11.7574 2.87868 10.8787C3.75736 10 5.17157 10 8 10H16C18.8284 10 20.2426 10 21.1213 10.8787C22 11.7574 22 13.1716 22 16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H8C5.17157 22 3.75736 22 2.87868 21.1213C2 20.2426 2 18.8284 2 16Z"
                                                    stroke="currentColor" stroke-width="1.5" />
                                                <path opacity="0.5"
                                                    d="M6 10V8C6 4.68629 8.68629 2 12 2C15.3137 2 18 4.68629 18 8V10"
                                                    stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" />
                                                <g opacity="0.5">
                                                    <path
                                                        d="M9 16C9 16.5523 8.55228 17 8 17C7.44772 17 7 16.5523 7 16C7 15.4477 7.44772 15 8 15C8.55228 15 9 15.4477 9 16Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M13 16C13 16.5523 12.5523 17 12 17C11.4477 17 11 16.5523 11 16C11 15.4477 11.4477 15 12 15C12.5523 15 13 15.4477 13 16Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M17 16C17 16.5523 16.5523 17 16 17C15.4477 17 15 16.5523 15 16C15 15.4477 15.4477 15 16 15C16.5523 15 17 15.4477 17 16Z"
                                                        fill="currentColor" />
                                                </g>
                                            </svg>
                                            Lock Screen</a>
                                    </li>
                                    <li class="border-t border-white-light dark:border-white-light/10">
                                        <a href="auth-boxed-signin.html" class="!py-3 text-danger" @click="toggle">
                                            <svg class="h-4.5 w-4.5 rotate-90 ltr:mr-2 rtl:ml-2" width="18"
                                                height="18" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.5"
                                                    d="M17 9.00195C19.175 9.01406 20.3529 9.11051 21.1213 9.8789C22 10.7576 22 12.1718 22 15.0002V16.0002C22 18.8286 22 20.2429 21.1213 21.1215C20.2426 22.0002 18.8284 22.0002 16 22.0002H8C5.17157 22.0002 3.75736 22.0002 2.87868 21.1215C2 20.2429 2 18.8286 2 16.0002L2 15.0002C2 12.1718 2 10.7576 2.87868 9.87889C3.64706 9.11051 4.82497 9.01406 7 9.00195"
                                                    stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" />
                                                <path d="M12 15L12 2M12 2L15 5.5M12 2L9 5.5" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                            Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- horizontal menu -->
                    <ul
                        class="horizontal-menu hidden border-t border-[#ebedf2] bg-white py-1.5 px-6 font-semibold text-black rtl:space-x-reverse dark:border-[#191e3a] dark:bg-[#0e1726] dark:text-white-dark lg:space-x-1.5 xl:space-x-8">
                        <li class="menu nav-item relative">
                            <a href="javascript:;" class="nav-link">
                                <div class="flex items-center">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.5"
                                            d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                                            fill="currentColor" />
                                        <path
                                            d="M9 17.25C8.58579 17.25 8.25 17.5858 8.25 18C8.25 18.4142 8.58579 18.75 9 18.75H15C15.4142 18.75 15.75 18.4142 15.75 18C15.75 17.5858 15.4142 17.25 15 17.25H9Z"
                                            fill="currentColor" />
                                    </svg>
                                    <span class="px-1">Dashboard</span>
                                </div>
                                <div class="right_arrow">
                                    <svg class="h-4 w-4 rotate-90" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="index-2.html">Sales</a>
                                </li>
                                <li>
                                    <a href="analytics.html">Analytics</a>
                                </li>
                                <li>
                                    <a href="finance.html">Finance</a>
                                </li>
                                <li>
                                    <a href="crypto.html">Crypto</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu nav-item relative">
                            <a href="javascript:;" class="nav-link active">
                                <div class="flex items-center">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="0.5">
                                            <path
                                                d="M14 2.75C15.9068 2.75 17.2615 2.75159 18.2892 2.88976C19.2952 3.02503 19.8749 3.27869 20.2981 3.7019C20.7213 4.12511 20.975 4.70476 21.1102 5.71085C21.2484 6.73851 21.25 8.09318 21.25 10C21.25 10.4142 21.5858 10.75 22 10.75C22.4142 10.75 22.75 10.4142 22.75 10V9.94359C22.75 8.10583 22.75 6.65019 22.5969 5.51098C22.4392 4.33856 22.1071 3.38961 21.3588 2.64124C20.6104 1.89288 19.6614 1.56076 18.489 1.40314C17.3498 1.24997 15.8942 1.24998 14.0564 1.25H14C13.5858 1.25 13.25 1.58579 13.25 2C13.25 2.41421 13.5858 2.75 14 2.75Z"
                                                fill="currentColor" />
                                            <path
                                                d="M9.94358 1.25H10C10.4142 1.25 10.75 1.58579 10.75 2C10.75 2.41421 10.4142 2.75 10 2.75C8.09318 2.75 6.73851 2.75159 5.71085 2.88976C4.70476 3.02503 4.12511 3.27869 3.7019 3.7019C3.27869 4.12511 3.02503 4.70476 2.88976 5.71085C2.75159 6.73851 2.75 8.09318 2.75 10C2.75 10.4142 2.41421 10.75 2 10.75C1.58579 10.75 1.25 10.4142 1.25 10V9.94358C1.24998 8.10583 1.24997 6.65019 1.40314 5.51098C1.56076 4.33856 1.89288 3.38961 2.64124 2.64124C3.38961 1.89288 4.33856 1.56076 5.51098 1.40314C6.65019 1.24997 8.10583 1.24998 9.94358 1.25Z"
                                                fill="currentColor" />
                                            <path
                                                d="M22 13.25C22.4142 13.25 22.75 13.5858 22.75 14V14.0564C22.75 15.8942 22.75 17.3498 22.5969 18.489C22.4392 19.6614 22.1071 20.6104 21.3588 21.3588C20.6104 22.1071 19.6614 22.4392 18.489 22.5969C17.3498 22.75 15.8942 22.75 14.0564 22.75H14C13.5858 22.75 13.25 22.4142 13.25 22C13.25 21.5858 13.5858 21.25 14 21.25C15.9068 21.25 17.2615 21.2484 18.2892 21.1102C19.2952 20.975 19.8749 20.7213 20.2981 20.2981C20.7213 19.8749 20.975 19.2952 21.1102 18.2892C21.2484 17.2615 21.25 15.9068 21.25 14C21.25 13.5858 21.5858 13.25 22 13.25Z"
                                                fill="currentColor" />
                                            <path
                                                d="M2.75 14C2.75 13.5858 2.41421 13.25 2 13.25C1.58579 13.25 1.25 13.5858 1.25 14V14.0564C1.24998 15.8942 1.24997 17.3498 1.40314 18.489C1.56076 19.6614 1.89288 20.6104 2.64124 21.3588C3.38961 22.1071 4.33856 22.4392 5.51098 22.5969C6.65019 22.75 8.10583 22.75 9.94359 22.75H10C10.4142 22.75 10.75 22.4142 10.75 22C10.75 21.5858 10.4142 21.25 10 21.25C8.09318 21.25 6.73851 21.2484 5.71085 21.1102C4.70476 20.975 4.12511 20.7213 3.7019 20.2981C3.27869 19.8749 3.02503 19.2952 2.88976 18.2892C2.75159 17.2615 2.75 15.9068 2.75 14Z"
                                                fill="currentColor" />
                                        </g>
                                        <path
                                            d="M5.52721 5.52721C5 6.05442 5 6.90294 5 8.6C5 9.73137 5 10.2971 5.35147 10.6485C5.70294 11 6.26863 11 7.4 11H8.6C9.73137 11 10.2971 11 10.6485 10.6485C11 10.2971 11 9.73137 11 8.6V7.4C11 6.26863 11 5.70294 10.6485 5.35147C10.2971 5 9.73137 5 8.6 5C6.90294 5 6.05442 5 5.52721 5.52721Z"
                                            fill="currentColor" />
                                        <path
                                            d="M5.52721 18.4728C5 17.9456 5 17.0971 5 15.4C5 14.2686 5 13.7029 5.35147 13.3515C5.70294 13 6.26863 13 7.4 13H8.6C9.73137 13 10.2971 13 10.6485 13.3515C11 13.7029 11 14.2686 11 15.4V16.6C11 17.7314 11 18.2971 10.6485 18.6485C10.2971 19 9.73138 19 8.60002 19C6.90298 19 6.05441 19 5.52721 18.4728Z"
                                            fill="currentColor" />
                                        <path
                                            d="M13 7.4C13 6.26863 13 5.70294 13.3515 5.35147C13.7029 5 14.2686 5 15.4 5C17.0971 5 17.9456 5 18.4728 5.52721C19 6.05442 19 6.90294 19 8.6C19 9.73137 19 10.2971 18.6485 10.6485C18.2971 11 17.7314 11 16.6 11H15.4C14.2686 11 13.7029 11 13.3515 10.6485C13 10.2971 13 9.73137 13 8.6V7.4Z"
                                            fill="currentColor" />
                                        <path
                                            d="M13.3515 18.6485C13 18.2971 13 17.7314 13 16.6V15.4C13 14.2686 13 13.7029 13.3515 13.3515C13.7029 13 14.2686 13 15.4 13H16.6C17.7314 13 18.2971 13 18.6485 13.3515C19 13.7029 19 14.2686 19 15.4C19 17.097 19 17.9456 18.4728 18.4728C17.9456 19 17.0971 19 15.4 19C14.2687 19 13.7029 19 13.3515 18.6485Z"
                                            fill="currentColor" />
                                    </svg>
                                    <span class="px-1">Apps</span>
                                </div>
                                <div class="right_arrow">
                                    <svg class="h-4 w-4 rotate-90" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="apps-chat.html">Chat</a>
                                </li>
                                <li>
                                    <a href="apps-mailbox.html">Mailbox</a>
                                </li>
                                <li>
                                    <a href="apps-todolist.html">Todo List</a>
                                </li>
                                <li>
                                    <a href="apps-notes.html" class="active">Notes</a>
                                </li>
                                <li>
                                    <a href="apps-scrumboard.html">Scrumboard</a>
                                </li>
                                <li>
                                    <a href="apps-contacts.html">Contacts</a>
                                </li>
                                <li class="relative">
                                    <a href="javascript:;">Invoice
                                        <div class="ltr:ml-auto rtl:mr-auto rtl:rotate-180">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </a>
                                    <ul
                                        class="absolute top-0 z-[10] hidden min-w-[180px] rounded bg-white p-0 py-2 text-dark shadow ltr:left-[95%] rtl:right-[95%] dark:bg-[#1b2e4b] dark:text-white-dark">
                                        <li>
                                            <a href="apps-invoice-list.html">List</a>
                                        </li>
                                        <li>
                                            <a href="apps-invoice-preview.html">Preview</a>
                                        </li>
                                        <li>
                                            <a href="apps-invoice-add.html">Add</a>
                                        </li>
                                        <li>
                                            <a href="apps-invoice-edit.html">Edit</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="apps-calendar.html">Calendar</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu nav-item relative">
                            <a href="javascript:;" class="nav-link">
                                <div class="flex items-center">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.42229 20.6181C10.1779 21.5395 11.0557 22.0001 12 22.0001V12.0001L2.63802 7.07275C2.62423 7.09491 2.6107 7.11727 2.5974 7.13986C2 8.15436 2 9.41678 2 11.9416V12.0586C2 14.5834 2 15.8459 2.5974 16.8604C3.19479 17.8749 4.27063 18.4395 6.42229 19.5686L8.42229 20.6181Z"
                                            fill="currentColor" />
                                        <path opacity="0.7"
                                            d="M17.5774 4.43152L15.5774 3.38197C13.8218 2.46066 12.944 2 11.9997 2C11.0554 2 10.1776 2.46066 8.42197 3.38197L6.42197 4.43152C4.31821 5.53552 3.24291 6.09982 2.6377 7.07264L11.9997 12L21.3617 7.07264C20.7564 6.09982 19.6811 5.53552 17.5774 4.43152Z"
                                            fill="currentColor" />
                                        <path opacity="0.5"
                                            d="M21.4026 7.13986C21.3893 7.11727 21.3758 7.09491 21.362 7.07275L12 12.0001V22.0001C12.9443 22.0001 13.8221 21.5395 15.5777 20.6181L17.5777 19.5686C19.7294 18.4395 20.8052 17.8749 21.4026 16.8604C22 15.8459 22 14.5834 22 12.0586V11.9416C22 9.41678 22 8.15436 21.4026 7.13986Z"
                                            fill="currentColor" />
                                    </svg>
                                    <span class="px-1">Components</span>
                                </div>
                                <div class="right_arrow">
                                    <svg class="h-4 w-4 rotate-90" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="components-tabs.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="components-accordions.html">Accordions</a>
                                </li>
                                <li>
                                    <a href="components-modals.html">Modals</a>
                                </li>
                                <li>
                                    <a href="components-cards.html">Cards</a>
                                </li>
                                <li>
                                    <a href="components-carousel.html">Carousel</a>
                                </li>
                                <li>
                                    <a href="components-countdown.html">Countdown</a>
                                </li>
                                <li>
                                    <a href="components-counter.html">Counter</a>
                                </li>
                                <li>
                                    <a href="components-sweetalert.html">Sweet Alerts</a>
                                </li>
                                <li>
                                    <a href="components-timeline.html">Timeline</a>
                                </li>
                                <li>
                                    <a href="components-notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="components-media-object.html">Media Object</a>
                                </li>
                                <li>
                                    <a href="components-list-group.html">List Group</a>
                                </li>
                                <li>
                                    <a href="components-pricing-table.html">Pricing Tables</a>
                                </li>
                                <li>
                                    <a href="components-lightbox.html">Lightbox</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu nav-item relative">
                            <a href="javascript:;" class="nav-link">
                                <div class="flex items-center">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M8.73167 5.77133L5.66953 9.91436C4.3848 11.6526 3.74244 12.5217 4.09639 13.205C4.10225 13.2164 4.10829 13.2276 4.1145 13.2387C4.48945 13.9117 5.59888 13.9117 7.81775 13.9117C9.05079 13.9117 9.6673 13.9117 10.054 14.2754L10.074 14.2946L13.946 9.72466L13.926 9.70541C13.5474 9.33386 13.5474 8.74151 13.5474 7.55682V7.24712C13.5474 3.96249 13.5474 2.32018 12.6241 2.03721C11.7007 1.75425 10.711 3.09327 8.73167 5.77133Z"
                                            fill="currentColor"></path>
                                        <path opacity="0.5"
                                            d="M10.4527 16.4432L10.4527 16.7528C10.4527 20.0374 10.4527 21.6798 11.376 21.9627C12.2994 22.2457 13.2891 20.9067 15.2685 18.2286L18.3306 14.0856C19.6154 12.3474 20.2577 11.4783 19.9038 10.7949C19.8979 10.7836 19.8919 10.7724 19.8857 10.7613C19.5107 10.0883 18.4013 10.0883 16.1824 10.0883C14.9494 10.0883 14.3329 10.0883 13.9462 9.72461L10.0742 14.2946C10.4528 14.6661 10.4527 15.2585 10.4527 16.4432Z"
                                            fill="currentColor"></path>
                                    </svg>
                                    <span class="px-1">Elements</span>
                                </div>
                                <div class="right_arrow">
                                    <svg class="h-4 w-4 rotate-90" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="elements-alerts.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="elements-avatar.html">Avatar</a>
                                </li>
                                <li>
                                    <a href="elements-badges.html">Badges</a>
                                </li>
                                <li>
                                    <a href="elements-breadcrumbs.html">Breadcrumbs</a>
                                </li>
                                <li>
                                    <a href="elements-buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="elements-buttons-group.html">Button Groups</a>
                                </li>
                                <li>
                                    <a href="elements-color-library.html">Color Library</a>
                                </li>
                                <li>
                                    <a href="elements-dropdown.html">Dropdown</a>
                                </li>
                                <li>
                                    <a href="elements-infobox.html">Infobox</a>
                                </li>
                                <li>
                                    <a href="elements-jumbotron.html">Jumbotron</a>
                                </li>
                                <li>
                                    <a href="elements-loader.html">Loader</a>
                                </li>
                                <li>
                                    <a href="elements-pagination.html">Pagination</a>
                                </li>
                                <li>
                                    <a href="elements-popovers.html">Popovers</a>
                                </li>
                                <li>
                                    <a href="elements-progress-bar.html">Progress Bar</a>
                                </li>
                                <li>
                                    <a href="elements-search.html">Search</a>
                                </li>
                                <li>
                                    <a href="elements-tooltips.html">Tooltips</a>
                                </li>
                                <li>
                                    <a href="elements-treeview.html">Treeview</a>
                                </li>
                                <li>
                                    <a href="elements-typography.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu nav-item relative">
                            <a href="javascript:;" class="nav-link">
                                <div class="flex items-center">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.97883 9.68508C2.99294 8.89073 2 8.49355 2 8C2 7.50645 2.99294 7.10927 4.97883 6.31492L7.7873 5.19153C9.77318 4.39718 10.7661 4 12 4C13.2339 4 14.2268 4.39718 16.2127 5.19153L19.0212 6.31492C21.0071 7.10927 22 7.50645 22 8C22 8.49355 21.0071 8.89073 19.0212 9.68508L16.2127 10.8085C14.2268 11.6028 13.2339 12 12 12C10.7661 12 9.77318 11.6028 7.7873 10.8085L4.97883 9.68508Z"
                                            fill="currentColor" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2 8C2 8.49355 2.99294 8.89073 4.97883 9.68508L7.7873 10.8085C9.77318 11.6028 10.7661 12 12 12C13.2339 12 14.2268 11.6028 16.2127 10.8085L19.0212 9.68508C21.0071 8.89073 22 8.49355 22 8C22 7.50645 21.0071 7.10927 19.0212 6.31492L16.2127 5.19153C14.2268 4.39718 13.2339 4 12 4C10.7661 4 9.77318 4.39718 7.7873 5.19153L4.97883 6.31492C2.99294 7.10927 2 7.50645 2 8Z"
                                            fill="currentColor" />
                                        <path opacity="0.7"
                                            d="M5.76613 10L4.97883 10.3149C2.99294 11.1093 2 11.5065 2 12C2 12.4935 2.99294 12.8907 4.97883 13.6851L7.7873 14.8085C9.77318 15.6028 10.7661 16 12 16C13.2339 16 14.2268 15.6028 16.2127 14.8085L19.0212 13.6851C21.0071 12.8907 22 12.4935 22 12C22 11.5065 21.0071 11.1093 19.0212 10.3149L18.2339 10L16.2127 10.8085C14.2268 11.6028 13.2339 12 12 12C10.7661 12 9.77318 11.6028 7.7873 10.8085L5.76613 10Z"
                                            fill="currentColor" />
                                        <path opacity="0.4"
                                            d="M5.76613 14L4.97883 14.3149C2.99294 15.1093 2 15.5065 2 16C2 16.4935 2.99294 16.8907 4.97883 17.6851L7.7873 18.8085C9.77318 19.6028 10.7661 20 12 20C13.2339 20 14.2268 19.6028 16.2127 18.8085L19.0212 17.6851C21.0071 16.8907 22 16.4935 22 16C22 15.5065 21.0071 15.1093 19.0212 14.3149L18.2339 14L16.2127 14.8085C14.2268 15.6028 13.2339 16 12 16C10.7661 16 9.77318 15.6028 7.7873 14.8085L5.76613 14Z"
                                            fill="currentColor" />
                                    </svg>
                                    <span class="px-1">Tables</span>
                                </div>
                                <div class="right_arrow">
                                    <svg class="h-4 w-4 rotate-90" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="tables.html">Tables</a>
                                </li>
                                <li class="relative">
                                    <a href="javascript:;">Data Tables
                                        <div class="ltr:ml-auto rtl:mr-auto rtl:rotate-180">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </a>
                                    <ul
                                        class="absolute top-0 z-[10] hidden min-w-[180px] rounded bg-white p-0 py-2 text-dark shadow ltr:left-[95%] rtl:right-[95%] dark:bg-[#1b2e4b] dark:text-white-dark">
                                        <li>
                                            <a href="datatables-basic.html">Basic</a>
                                        </li>
                                        <li>
                                            <a href="datatables-advanced.html">Advanced</a>
                                        </li>
                                        <li>
                                            <a href="datatables-skin.html">Skin</a>
                                        </li>
                                        <li>
                                            <a href="datatables-order-sorting.html">Order Sorting</a>
                                        </li>
                                        <li>
                                            <a href="datatables-multi-column.html">Multi Column</a>
                                        </li>
                                        <li>
                                            <a href="datatables-multiple-tables.html">Multiple Tables</a>
                                        </li>
                                        <li>
                                            <a href="datatables-alt-pagination.html">Alt. Pagination</a>
                                        </li>
                                        <li>
                                            <a href="datatables-checkbox.html">Checkbox</a>
                                        </li>
                                        <li>
                                            <a href="datatables-range-search.html">Range Search</a>
                                        </li>
                                        <li>
                                            <a href="datatables-export.html">Export</a>
                                        </li>
                                        <li>
                                            <a href="datatables-sticky-header.html">Sticky Header</a>
                                        </li>
                                        <li>
                                            <a href="datatables-clone-header.html">Clone Header</a>
                                        </li>
                                        <li>
                                            <a href="datatables-column-chooser.html">Column Chooser</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu nav-item relative">
                            <a href="javascript:;" class="nav-link">
                                <div class="flex items-center">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.5"
                                            d="M3 10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H13C16.7712 2 18.6569 2 19.8284 3.17157C21 4.34315 21 6.22876 21 10V14C21 17.7712 21 19.6569 19.8284 20.8284C18.6569 22 16.7712 22 13 22H11C7.22876 22 5.34315 22 4.17157 20.8284C3 19.6569 3 17.7712 3 14V10Z"
                                            fill="currentColor" />
                                        <path
                                            d="M16.5189 16.5013C16.6939 16.3648 16.8526 16.2061 17.1701 15.8886L21.1275 11.9312C21.2231 11.8356 21.1793 11.6708 21.0515 11.6264C20.5844 11.4644 19.9767 11.1601 19.4083 10.5917C18.8399 10.0233 18.5356 9.41561 18.3736 8.94849C18.3292 8.82066 18.1644 8.77687 18.0688 8.87254L14.1114 12.8299C13.7939 13.1474 13.6352 13.3061 13.4987 13.4811C13.3377 13.6876 13.1996 13.9109 13.087 14.1473C12.9915 14.3476 12.9205 14.5606 12.7786 14.9865L12.5951 15.5368L12.3034 16.4118L12.0299 17.2323C11.9601 17.4419 12.0146 17.6729 12.1708 17.8292C12.3271 17.9854 12.5581 18.0399 12.7677 17.9701L13.5882 17.6966L14.4632 17.4049L15.0135 17.2214L15.0136 17.2214C15.4394 17.0795 15.6524 17.0085 15.8527 16.913C16.0891 16.8004 16.3124 16.6623 16.5189 16.5013Z"
                                            fill="currentColor" />
                                        <path
                                            d="M22.3665 10.6922C23.2112 9.84754 23.2112 8.47812 22.3665 7.63348C21.5219 6.78884 20.1525 6.78884 19.3078 7.63348L19.1806 7.76071C19.0578 7.88348 19.0022 8.05496 19.0329 8.22586C19.0522 8.33336 19.0879 8.49053 19.153 8.67807C19.2831 9.05314 19.5288 9.54549 19.9917 10.0083C20.4545 10.4712 20.9469 10.7169 21.3219 10.847C21.5095 10.9121 21.6666 10.9478 21.7741 10.9671C21.945 10.9978 22.1165 10.9422 22.2393 10.8194L22.3665 10.6922Z"
                                            fill="currentColor" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.25 9C7.25 8.58579 7.58579 8.25 8 8.25H14.5C14.9142 8.25 15.25 8.58579 15.25 9C15.25 9.41421 14.9142 9.75 14.5 9.75H8C7.58579 9.75 7.25 9.41421 7.25 9ZM7.25 13C7.25 12.5858 7.58579 12.25 8 12.25H11C11.4142 12.25 11.75 12.5858 11.75 13C11.75 13.4142 11.4142 13.75 11 13.75H8C7.58579 13.75 7.25 13.4142 7.25 13ZM7.25 17C7.25 16.5858 7.58579 16.25 8 16.25H9.5C9.91421 16.25 10.25 16.5858 10.25 17C10.25 17.4142 9.91421 17.75 9.5 17.75H8C7.58579 17.75 7.25 17.4142 7.25 17Z"
                                            fill="currentColor" />
                                    </svg>
                                    <span class="px-1">Forms</span>
                                </div>
                                <div class="right_arrow">
                                    <svg class="h-4 w-4 rotate-90" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="forms-basic.html">Basic</a>
                                </li>
                                <li>
                                    <a href="forms-input-group.html">Input Group</a>
                                </li>
                                <li>
                                    <a href="forms-layouts.html">Layouts</a>
                                </li>
                                <li>
                                    <a href="forms-validation.html">Validation</a>
                                </li>
                                <li>
                                    <a href="forms-input-mask.html">Input Mask</a>
                                </li>
                                <li>
                                    <a href="forms-select2.html">Select2</a>
                                </li>
                                <li>
                                    <a href="forms-touchspin.html">TouchSpin</a>
                                </li>
                                <li>
                                    <a href="forms-checkbox-radio.html">Checkbox & Radio</a>
                                </li>
                                <li>
                                    <a href="forms-switches.html">Switches</a>
                                </li>
                                <li>
                                    <a href="forms-wizards.html">Wizards</a>
                                </li>
                                <li>
                                    <a href="forms-file-upload.html">File Upload</a>
                                </li>
                                <li>
                                    <a href="forms-quill-editor.html">Quill Editor</a>
                                </li>
                                <li>
                                    <a href="forms-markdown-editor.html">Markdown Editor</a>
                                </li>
                                <li>
                                    <a href="forms-date-picker.html">Date & Range Picker</a>
                                </li>
                                <li>
                                    <a href="forms-clipboard.html">Clipboard</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu nav-item relative">
                            <a href="javascript:;" class="nav-link">
                                <div class="flex items-center">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V10C2 6.22876 2 4.34315 3.17157 3.17157C4.34315 2 6.23869 2 10.0298 2C10.6358 2 11.1214 2 11.53 2.01666C11.5166 2.09659 11.5095 2.17813 11.5092 2.26057L11.5 5.09497C11.4999 6.19207 11.4998 7.16164 11.6049 7.94316C11.7188 8.79028 11.9803 9.63726 12.6716 10.3285C13.3628 11.0198 14.2098 11.2813 15.0569 11.3952C15.8385 11.5003 16.808 11.5002 17.9051 11.5001L18 11.5001H21.9574C22 12.0344 22 12.6901 22 13.5629V14C22 17.7712 22 19.6569 20.8284 20.8284C19.6569 22 17.7712 22 14 22Z"
                                            fill="currentColor" />
                                        <path
                                            d="M6 13.75C5.58579 13.75 5.25 14.0858 5.25 14.5C5.25 14.9142 5.58579 15.25 6 15.25H14C14.4142 15.25 14.75 14.9142 14.75 14.5C14.75 14.0858 14.4142 13.75 14 13.75H6Z"
                                            fill="currentColor" />
                                        <path
                                            d="M6 17.25C5.58579 17.25 5.25 17.5858 5.25 18C5.25 18.4142 5.58579 18.75 6 18.75H11.5C11.9142 18.75 12.25 18.4142 12.25 18C12.25 17.5858 11.9142 17.25 11.5 17.25H6Z"
                                            fill="currentColor" />
                                        <path
                                            d="M11.5092 2.2601L11.5 5.0945C11.4999 6.1916 11.4998 7.16117 11.6049 7.94269C11.7188 8.78981 11.9803 9.6368 12.6716 10.3281C13.3629 11.0193 14.2098 11.2808 15.057 11.3947C15.8385 11.4998 16.808 11.4997 17.9051 11.4996L21.9574 11.4996C21.9698 11.6552 21.9786 11.821 21.9848 11.9995H22C22 11.732 22 11.5983 21.9901 11.4408C21.9335 10.5463 21.5617 9.52125 21.0315 8.79853C20.9382 8.6713 20.8743 8.59493 20.7467 8.44218C19.9542 7.49359 18.911 6.31193 18 5.49953C17.1892 4.77645 16.0787 3.98536 15.1101 3.3385C14.2781 2.78275 13.862 2.50487 13.2915 2.29834C13.1403 2.24359 12.9408 2.18311 12.7846 2.14466C12.4006 2.05013 12.0268 2.01725 11.5 2.00586L11.5092 2.2601Z"
                                            fill="currentColor" />
                                    </svg>
                                    <span class="px-1">Pages</span>
                                </div>
                                <div class="right_arrow">
                                    <svg class="h-4 w-4 rotate-90" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </a>
                            <ul class="sub-menu">
                                <li class="relative">
                                    <a href="javascript:;">Users
                                        <div class="ltr:ml-auto rtl:mr-auto rtl:rotate-180">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </a>
                                    <ul
                                        class="absolute top-0 z-[10] hidden min-w-[180px] rounded bg-white p-0 py-2 text-dark shadow ltr:left-[95%] rtl:right-[95%] dark:bg-[#1b2e4b] dark:text-white-dark">
                                        <li>
                                            <a href="users-profile.html">Profile</a>
                                        </li>
                                        <li>
                                            <a href="users-account-settings.html">Account Settings</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="pages-knowledge-base.html">Knowledge Base</a>
                                </li>
                                <li>
                                    <a href="pages-contact-us.html" target="_blank">Contact Form</a>
                                </li>
                                <li>
                                    <a href="pages-faq.html">Faq</a>
                                </li>
                                <li>
                                    <a href="pages-coming-soon.html" target="_blank">Coming Soon</a>
                                </li>
                                <li>
                                    <a href="pages-maintenence.html" target="_blank">Maintanence</a>
                                </li>
                                <li class="relative">
                                    <a href="javascript:;">Error
                                        <div class="ltr:ml-auto rtl:mr-auto rtl:rotate-180">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </a>
                                    <ul
                                        class="absolute top-0 z-[10] hidden min-w-[180px] rounded bg-white p-0 py-2 text-dark shadow ltr:left-[95%] rtl:right-[95%] dark:bg-[#1b2e4b] dark:text-white-dark">
                                        <li>
                                            <a href="pages-error404.html" target="_blank">404</a>
                                        </li>
                                        <li>
                                            <a href="pages-error500.html" target="_blank">500</a>
                                        </li>
                                        <li>
                                            <a href="pages-error503.html" target="_blank">503</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="relative">
                                    <a href="javascript:;">Login
                                        <div class="ltr:ml-auto rtl:mr-auto rtl:rotate-180">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </a>
                                    <ul
                                        class="absolute top-0 z-[10] hidden min-w-[180px] rounded bg-white p-0 py-2 text-dark shadow ltr:left-[95%] rtl:right-[95%] dark:bg-[#1b2e4b] dark:text-white-dark">
                                        <li>
                                            <a href="auth-cover-login.html" target="_blank">Login Cover</a>
                                        </li>
                                        <li>
                                            <a href="auth-boxed-signin.html" target="_blank">Login Boxed</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="relative">
                                    <a href="javascript:;">Register
                                        <div class="ltr:ml-auto rtl:mr-auto rtl:rotate-180">
                                            <svg width="16" height="16" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </a>
                                    <ul
                                        class="absolute top-0 z-[10] hidden min-w-[180px] rounded bg-white p-0 py-2 text-dark shadow ltr:left-[95%] rtl:right-[95%] dark:bg-[#1b2e4b] dark:text-white-dark">
                                        <li>
                                            <a href="auth-cover-register.html" target="_blank">Register Cover</a>
                                        </li>
                                        <li>
                                            <a href="auth-boxed-signup.html" target="_blank">Register Boxed</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="relative">
                                    <a href="javascript:;">Password Recovery
                                        <div class="ltr:ml-auto rtl:mr-auto rtl:rotate-180">
                                            <svg width="16" height="16" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </a>
                                    <ul
                                        class="absolute top-0 z-[10] hidden min-w-[180px] rounded bg-white p-0 py-2 text-dark shadow ltr:left-[95%] rtl:right-[95%] dark:bg-[#1b2e4b] dark:text-white-dark">
                                        <li>
                                            <a href="auth-cover-password-reset.html" target="_blank">Recover ID
                                                Cover</a>
                                        </li>
                                        <li>
                                            <a href="auth-boxed-password-reset.html" target="_blank">Recover ID
                                                Boxed</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="relative">
                                    <a href="javascript:;">Lockscreen
                                        <div class="ltr:ml-auto rtl:mr-auto rtl:rotate-180">
                                            <svg width="16" height="16" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </a>
                                    <ul
                                        class="absolute top-0 z-[10] hidden min-w-[180px] rounded bg-white p-0 py-2 text-dark shadow ltr:left-[95%] rtl:right-[95%] dark:bg-[#1b2e4b] dark:text-white-dark">
                                        <li>
                                            <a href="auth-cover-lockscreen.html" target="_blank">Unlock Cover</a>
                                        </li>
                                        <li>
                                            <a href="auth-boxed-lockscreen.html" target="_blank">Unlock Boxed</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu nav-item relative">
                            <a href="javascript:;" class="nav-link">
                                <div class="flex items-center">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.5"
                                            d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                            fill="currentColor" />
                                        <path
                                            d="M12.75 9C12.75 8.58579 12.4142 8.25 12 8.25C11.5858 8.25 11.25 8.58579 11.25 9L11.25 11.25H9C8.58579 11.25 8.25 11.5858 8.25 12C8.25 12.4142 8.58579 12.75 9 12.75H11.25V15C11.25 15.4142 11.5858 15.75 12 15.75C12.4142 15.75 12.75 15.4142 12.75 15L12.75 12.75H15C15.4142 12.75 15.75 12.4142 15.75 12C15.75 11.5858 15.4142 11.25 15 11.25H12.75V9Z"
                                            fill="currentColor" />
                                    </svg>
                                    <span class="px-1">More</span>
                                </div>
                                <div class="right_arrow">
                                    <svg class="h-4 w-4 rotate-90" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="dragndrop.html">Drag and Drop</a>
                                </li>
                                <li>
                                    <a href="charts.html">Charts</a>
                                </li>
                                <li>
                                    <a href="font-icons.html">Font Icons</a>
                                </li>
                                <li>
                                    <a href="widgets.html">Widgets</a>
                                </li>
                                <li>
                                    <a href="https://vristo.sbthemes.com/" target="_blank">Documentation</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </header>
            <!-- end header section -->

            <div class="animate__animated p-6" :class="[$store.app.animation]">
                <!-- start main content section -->

                <div x-data="notes">
                    <div class="relative flex h-full gap-5 sm:h-[calc(100vh_-_150px)]">
                        <div class="absolute z-10 hidden h-full w-full rounded-md bg-black/60"
                            :class="{ '!block xl:!hidden': isShowNoteMenu }"
                            @click="isShowNoteMenu = !isShowNoteMenu"></div>
                        <div class="panel absolute z-10 hidden h-full w-[240px] flex-none space-y-4 overflow-hidden p-4 ltr:rounded-r-none rtl:rounded-l-none ltr:lg:rounded-r-md rtl:lg:rounded-l-md xl:relative xl:block xl:h-auto"
                            :class="{ 'hidden shadow': !isShowNoteMenu, 'h-full ltr:left-0 rtl:right-0': isShowNoteMenu }">
                            <div class="flex h-full flex-col pb-16">
                                <div class="flex items-center text-center">
                                    <div>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                                            <path
                                                d="M20.3116 12.6473L20.8293 10.7154C21.4335 8.46034 21.7356 7.3328 21.5081 6.35703C21.3285 5.58657 20.9244 4.88668 20.347 4.34587C19.6157 3.66095 18.4881 3.35883 16.2331 2.75458C13.978 2.15033 12.8504 1.84821 11.8747 2.07573C11.1042 2.25537 10.4043 2.65945 9.86351 3.23687C9.27709 3.86298 8.97128 4.77957 8.51621 6.44561C8.43979 6.7254 8.35915 7.02633 8.27227 7.35057L8.27222 7.35077L7.75458 9.28263C7.15033 11.5377 6.84821 12.6652 7.07573 13.641C7.25537 14.4115 7.65945 15.1114 8.23687 15.6522C8.96815 16.3371 10.0957 16.6392 12.3508 17.2435L12.3508 17.2435C14.3834 17.7881 15.4999 18.0873 16.415 17.9744C16.5152 17.9621 16.6129 17.9448 16.7092 17.9223C17.4796 17.7427 18.1795 17.3386 18.7203 16.7612C19.4052 16.0299 19.7074 14.9024 20.3116 12.6473Z"
                                                stroke="currentColor" stroke-width="1.5" />
                                            <path opacity="0.5"
                                                d="M16.415 17.9741C16.2065 18.6126 15.8399 19.1902 15.347 19.6519C14.6157 20.3368 13.4881 20.6389 11.2331 21.2432C8.97798 21.8474 7.85044 22.1495 6.87466 21.922C6.10421 21.7424 5.40432 21.3383 4.86351 20.7609C4.17859 20.0296 3.87647 18.9021 3.27222 16.647L2.75458 14.7151C2.15033 12.46 1.84821 11.3325 2.07573 10.3567C2.25537 9.58627 2.65945 8.88638 3.23687 8.34557C3.96815 7.66065 5.09569 7.35853 7.35077 6.75428C7.77741 6.63996 8.16368 6.53646 8.51621 6.44531"
                                                stroke="currentColor" stroke-width="1.5" />
                                            <path d="M11.7769 10L16.6065 11.2941" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" />
                                            <path opacity="0.5" d="M11 12.8975L13.8978 13.6739"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-semibold ltr:ml-3 rtl:mr-3">Laporan</h3>
                                </div>
                                <div class="my-4 h-px w-full border-b border-[#e0e6ed] dark:border-[#1b2e4b]"></div>
                                <div class="perfect-scrollbar relative -mr-3.5 h-full grow pr-3.5">
                                    <div class="space-y-1">
                                        <button type="button"
                                            class="flex h-10 w-full items-center justify-between rounded-md p-2 font-medium hover:bg-white-dark/10 hover:text-primary dark:hover:bg-[#181F32] dark:hover:text-primary"
                                            :class="{
                                                'bg-gray-100 dark:text-primary text-primary dark:bg-[#181F32]': selectedTab ===
                                                    'all'
                                            }"
                                            @click="tabChanged('all')">
                                            <div class="flex items-center">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M18.18 8.03933L18.6435 7.57589C19.4113 6.80804 20.6563 6.80804 21.4241 7.57589C22.192 8.34374 22.192 9.58868 21.4241 10.3565L20.9607 10.82M18.18 8.03933C18.18 8.03933 18.238 9.02414 19.1069 9.89309C19.9759 10.762 20.9607 10.82 20.9607 10.82M18.18 8.03933L13.9194 12.2999C13.6308 12.5885 13.4865 12.7328 13.3624 12.8919C13.2161 13.0796 13.0906 13.2827 12.9882 13.4975C12.9014 13.6797 12.8368 13.8732 12.7078 14.2604L12.2946 15.5L12.1609 15.901M20.9607 10.82L16.7001 15.0806C16.4115 15.3692 16.2672 15.5135 16.1081 15.6376C15.9204 15.7839 15.7173 15.9094 15.5025 16.0118C15.3203 16.0986 15.1268 16.1632 14.7396 16.2922L13.5 16.7054L13.099 16.8391M13.099 16.8391L12.6979 16.9728C12.5074 17.0363 12.2973 16.9867 12.1553 16.8447C12.0133 16.7027 11.9637 16.4926 12.0272 16.3021L12.1609 15.901M13.099 16.8391L12.1609 15.901"
                                                        stroke="currentColor" stroke-width="1.5" />
                                                    <path d="M8 13H10.5" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" />
                                                    <path d="M8 9H14.5" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" />
                                                    <path d="M8 17H9.5" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" />
                                                    <path opacity="0.5"
                                                        d="M3 10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H13C16.7712 2 18.6569 2 19.8284 3.17157C21 4.34315 21 6.22876 21 10V14C21 17.7712 21 19.6569 19.8284 20.8284C18.6569 22 16.7712 22 13 22H11C7.22876 22 5.34315 22 4.17157 20.8284C3 19.6569 3 17.7712 3 14V10Z"
                                                        stroke="currentColor" stroke-width="1.5" />
                                                </svg>
                                                <div class="ltr:ml-3 rtl:mr-3">Laporan Masuk</div>
                                            </div>
                                        </button>
                                        <button type="button"
                                            class="flex h-10 w-full items-center justify-between rounded-md p-2 font-medium hover:bg-white-dark/10 hover:text-primary dark:hover:bg-[#181F32] dark:hover:text-primary"
                                            :class="{
                                                'bg-gray-100 dark:text-primary text-primary dark:bg-[#181F32]': selectedTab ===
                                                    'fav'
                                            }"
                                            @click="tabChanged('fav')">
                                            <div class="flex items-center">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z"
                                                        stroke="currentColor" stroke-width="1.5"></path>
                                                </svg>
                                                <div class="ltr:ml-3 rtl:mr-3">Laporan Diterima</div>
                                            </div>
                                        </button>
                                        <button type="button"
                                            class="flex h-10 w-full items-center justify-between rounded-md p-2 font-medium hover:bg-white-dark/10 hover:text-primary dark:hover:bg-[#181F32] dark:hover:text-primary"
                                            :class="{
                                                'bg-gray-100 dark:text-primary text-primary dark:bg-[#181F32]': selectedTab ===
                                                    'fav'
                                            }"
                                            @click="tabChanged('fav')"
                                            >
                                            <div class="flex items-center">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z"
                                                        stroke="currentColor" stroke-width="1.5"></path>
                                                </svg>
                                                <div class="ltr:ml-3 rtl:mr-3">Laporan Ditolak</div>
                                            </div>
                                        </button>
                                        <div class="h-px w-full border-b border-[#e0e6ed] dark:border-[#1b2e4b]">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel h-full flex-1 overflow-auto">
                            <div class="pb-5">
                                <button type="button" class="hover:text-primary xl:hidden"
                                    @click="isShowNoteMenu = !isShowNoteMenu">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="h-6 w-6">
                                        <path d="M20 7L4 7" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round"></path>
                                        <path opacity="0.5" d="M20 12L4 12" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round"></path>
                                        <path d="M20 17L4 17" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round"></path>
                                    </svg>
                                </button>
                            </div>
                            <template x-if="!filterdNotesList.length">
                                <div
                                    class="flex h-full min-h-[400px] items-center justify-center text-lg font-semibold sm:min-h-[300px]">
                                    No data available
                                </div>
                            </template>
                            <template x-if="filterdNotesList.length">
                                <div class="min-h-[400px] sm:min-h-[300px]">
                                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4">
                                        <template x-for="note in filterdNotesList" :key="note.id">
                                            <div class="panel pb-12"
                                                :class="{
                                                    'bg-primary-light shadow-primary': note.tag === 'personal',
                                                    'bg-warning-light shadow-warning': note.tag === 'work',
                                                    'bg-info-light shadow-info': note.tag === 'social',
                                                    'bg-danger-light shadow-danger': note.tag === 'important',
                                                    'dark:shadow-dark': !note.tag
                                                }">
                                                <div class="min-h-[142px]">
                                                    <div class="flex justify-between">
                                                        <div class="flex w-max items-center">
                                                            <div class="flex-none">
                                                                <template x-if="note.thumb">
                                                                    <div
                                                                        class="rounded-full bg-gray-300 p-0.5 dark:bg-gray-700">
                                                                        <img class="h-8 w-8 rounded-full object-cover"
                                                                            :src="`assets/images/${note.thumb}`" />
                                                                    </div>
                                                                </template>
                                                                <template x-if="!note.thumb && note.user">
                                                                    <div class="grid h-8 w-8 place-content-center rounded-full bg-gray-300 text-sm font-semibold dark:bg-gray-700"
                                                                        x-text="note.user.charAt(0) + '' + note.user.charAt(note.user.indexOf(' ') + 1)">
                                                                    </div>
                                                                </template>
                                                                <template x-if="!note.thumb && !note.user">
                                                                    <div
                                                                        class="rounded-full bg-gray-300 p-2 dark:bg-gray-700">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            class="h-4.5 w-4.5">
                                                                            <circle cx="12" cy="6"
                                                                                r="4" stroke="currentColor"
                                                                                stroke-width="1.5"></circle>
                                                                            <ellipse opacity="0.5" cx="12"
                                                                                cy="17" rx="7"
                                                                                ry="4" stroke="currentColor"
                                                                                stroke-width="1.5"></ellipse>
                                                                        </svg>
                                                                    </div>
                                                                </template>
                                                            </div>
                                                            <div class="ltr:ml-2 rtl:mr-2">
                                                                <div class="font-semibold" x-text="note.user"></div>
                                                                <div class="text-sx text-white-dark"
                                                                    x-text="note.date"></div>
                                                            </div>
                                                        </div>
                                                        <div x-data="dropdown" @click.outside="open = false"
                                                            class="dropdown">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h4 class="mt-4 font-semibold" x-text="note.title"></h4>
                                                        <p class="mt-2 text-white-dark" x-text="note.description">
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="absolute bottom-5 left-0 w-full px-5">
                                                    <div class="mt-2 flex items-center justify-between">
                                                        <div>
                                                            <div x-data="dropdown" <ul x-cloak x-show="open"
                                                                x-transition x-transition.duration.300ms
                                                                class="ltr:left-0 rtl:right-0">
                                                                <li>
                                                                    <a href="javascript:;"
                                                                        @click="toggle, setTag(note, 'personal')">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            class="h-3 w-3 rotate-45 fill-primary ltr:mr-2 rtl:ml-2">
                                                                            <path
                                                                                d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z"
                                                                                stroke="none" stroke-width="1.5">
                                                                            </path>
                                                                        </svg>
                                                                        Personal</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;"
                                                                        @click="toggle, setTag(note, 'work')">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            class="h-3 w-3 rotate-45 fill-warning ltr:mr-2 rtl:ml-2">
                                                                            <path
                                                                                d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z"
                                                                                stroke="none" stroke-width="1.5">
                                                                            </path>
                                                                        </svg>
                                                                        Work</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;"
                                                                        @click="toggle, setTag(note, 'social')">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            class="h-3 w-3 rotate-45 fill-info ltr:mr-2 rtl:ml-2">
                                                                            <path
                                                                                d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z"
                                                                                stroke="none" stroke-width="1.5">
                                                                            </path>
                                                                        </svg>
                                                                        Social</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;"
                                                                        @click="toggle, setTag(note, 'important')">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            class="h-3 w-3 rotate-45 fill-danger ltr:mr-2 rtl:ml-2">
                                                                            <path
                                                                                d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z"
                                                                                stroke="none" stroke-width="1.5">
                                                                            </path>
                                                                        </svg>
                                                                        Important</a>
                                                                </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <button type="button" class="text-danger"
                                                                @click="deleteNoteConfirm(note)">
                                                                <svg width="24" height="24"
                                                                    viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-5 w-5">
                                                                    <path d="M20.5001 6H3.5" stroke="currentColor"
                                                                        stroke-width="1.5" stroke-linecap="round">
                                                                    </path>
                                                                    <path
                                                                        d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"></path>
                                                                    <path opacity="0.5" d="M9.5 11L10 16"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"></path>
                                                                    <path opacity="0.5" d="M14.5 11L14 16"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"></path>
                                                                    <path opacity="0.5"
                                                                        d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6"
                                                                        stroke="currentColor" stroke-width="1.5">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </template>

                            <div class="fixed inset-0 z-[999] hidden overflow-y-auto bg-[black]/60 px-4"
                                :class="isAddNoteModal && '!block'">
                                <div class="flex min-h-screen items-center justify-center">
                                    <div x-show="isAddNoteModal" x-transition x-transition.duration.300
                                        @click.outside="isAddNoteModal = false"
                                        class="panel my-8 w-[90%] max-w-lg overflow-hidden rounded-lg border-0 p-0 md:w-full">
                                        <button type="button"
                                            class="absolute top-4 text-white-dark hover:text-dark ltr:right-4 rtl:left-4"
                                            @click="isAddNoteModal = false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                class="h-6 w-6">
                                                <line x1="18" y1="6" x2="6"
                                                    y2="18"></line>
                                                <line x1="6" y1="6" x2="18"
                                                    y2="18"></line>
                                            </svg>
                                        </button>
                                        <div class="bg-[#fbfbfb] py-3 text-lg font-medium ltr:pl-5 ltr:pr-[50px] rtl:pr-5 rtl:pl-[50px] dark:bg-[#121c2c]"
                                            x-text="params.id ? 'Edit Note' : 'Add Note'"></div>
                                        <div class="p-5">
                                            <form @submit.prevent="saveNote">
                                                <div class="mb-5">
                                                    <label for="title">Title</label>
                                                    <input id="title" type="text" placeholder="Enter Title"
                                                        class="form-input" x-model="params.title" />
                                                </div>
                                                <div class="mb-5">
                                                    <label for="name">User Name</label>
                                                    <select id="name" class="form-select"
                                                        x-model="params.user">
                                                        <option value="">Select User</option>
                                                        <option value="Max Smith">Max Smith</option>
                                                        <option value="John Doe">John Doe</option>
                                                        <option value="Kia Jain">Kia Jain</option>
                                                        <option value="Karena Courtliff">Karena Courtliff</option>
                                                        <option value="Vladamir Koschek">Vladamir Koschek</option>
                                                        <option value="Robert Garcia">Robert Garcia</option>
                                                        <option value="Marie Hamilton">Marie Hamilton</option>
                                                        <option value="Megan Meyers">Megan Meyers</option>
                                                        <option value="Angela Hull">Angela Hull</option>
                                                        <option value="Karen Wolf">Karen Wolf</option>
                                                        <option value="Jasmine Barnes">Jasmine Barnes</option>
                                                        <option value="Thomas Cox">Thomas Cox</option>
                                                        <option value="Marcus Jones">Marcus Jones</option>
                                                        <option value="Matthew Gray">Matthew Gray</option>
                                                        <option value="Chad Davis">Chad Davis</option>
                                                        <option value="Linda Drake">Linda Drake</option>
                                                        <option value="Kathleen Flores">Kathleen Flores</option>
                                                    </select>
                                                </div>
                                                <div class="mb-5">
                                                    <label for="tag">Tag</label>
                                                    <select id="tag" class="form-select"
                                                        x-model="params.tag">
                                                        <option value="">None</option>
                                                        <option value="personal">Personal</option>
                                                        <option value="work">Work</option>
                                                        <option value="social">Social</option>
                                                        <option value="important">Important</option>
                                                    </select>
                                                </div>
                                                <div class="mb-5">
                                                    <label for="desc">Description</label>
                                                    <textarea id="desc" rows="3" class="form-textarea min-h-[130px] resize-none"
                                                        placeholder="Enter Description" x-model="params.description"></textarea>
                                                </div>
                                                <div class="mt-8 flex items-center justify-end">
                                                    <button type="button" class="btn btn-outline-danger gap-2"
                                                        @click="isAddNoteModal = false">
                                                        Cancel
                                                    </button>
                                                    <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4"
                                                        x-text="params.id ? 'Update Note' : 'Add Note'"></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="fixed inset-0 z-[999] hidden overflow-y-auto bg-[black]/60 px-4"
                                :class="isDeleteNoteModal && '!block'">
                                <div class="flex min-h-screen items-center justify-center">
                                    <div x-show="isDeleteNoteModal" x-transition x-transition.duration.300
                                        @click.outside="isDeleteNoteModal = false"
                                        class="panel my-8 w-[90%] max-w-lg overflow-hidden rounded-lg border-0 p-0 md:w-full">
                                        <button type="button"
                                            class="absolute top-4 text-white-dark hover:text-dark ltr:right-4 rtl:left-4"
                                            @click="isDeleteNoteModal = false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                class="h-6 w-6">
                                                <line x1="18" y1="6" x2="6"
                                                    y2="18"></line>
                                                <line x1="6" y1="6" x2="18"
                                                    y2="18"></line>
                                            </svg>
                                        </button>
                                        <div
                                            class="bg-[#fbfbfb] py-3 text-lg font-medium ltr:pl-5 ltr:pr-[50px] rtl:pr-5 rtl:pl-[50px] dark:bg-[#121c2c]">
                                            Delete Notes
                                        </div>
                                        <div class="p-5 text-center">
                                            <div
                                                class="mx-auto w-fit rounded-full bg-danger p-4 text-white ring-4 ring-danger/30">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                    class="mx-auto h-7 w-7">
                                                    <path d="M20.5001 6H3.5" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"></path>
                                                    <path
                                                        d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5"
                                                        stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round"></path>
                                                    <path opacity="0.5" d="M9.5 11L10 16" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"></path>
                                                    <path opacity="0.5" d="M14.5 11L14 16" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"></path>
                                                    <path opacity="0.5"
                                                        d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6"
                                                        stroke="currentColor" stroke-width="1.5"></path>
                                                </svg>
                                            </div>
                                            <div class="mx-auto mt-5 sm:w-3/4">Are you sure you want to delete Notes?
                                            </div>

                                            <div class="mt-8 flex items-center justify-center">
                                                <button type="button" class="btn btn-outline-danger"
                                                    @click="isDeleteNoteModal = false">Cancel</button>
                                                <button type="button" class="btn btn-primary ltr:ml-4 rtl:mr-4"
                                                    @click="deleteNote">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="fixed inset-0 z-[999] hidden overflow-y-auto bg-[black]/60 px-4"
                                :class="isViewNoteModal && '!block'">
                                <div class="flex min-h-screen items-center justify-center">
                                    <div x-show="isViewNoteModal" x-transition x-transition.duration.300
                                        @click.outside="isViewNoteModal = false"
                                        class="panel my-8 w-[90%] max-w-lg overflow-hidden rounded-lg border-0 p-0 md:w-full">
                                        <button type="button"
                                            class="absolute top-4 text-white-dark hover:text-dark ltr:right-4 rtl:left-4"
                                            @click="isViewNoteModal = false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                class="h-6 w-6">
                                                <line x1="18" y1="6" x2="6"
                                                    y2="18"></line>
                                                <line x1="6" y1="6" x2="18"
                                                    y2="18"></line>
                                            </svg>
                                        </button>
                                        <div
                                            class="bg-[#fbfbfb] py-3 text-lg font-medium ltr:pl-5 ltr:pr-[50px] rtl:pr-5 rtl:pl-[50px] dark:bg-[#121c2c]">
                                            <div class="flex flex-wrap items-center">
                                                <div class="ltr:mr-3 rtl:ml-3" x-text="selectedNote.title"></div>
                                                <div class="flex items-center">
                                                    <button x-show="selectedNote.tag" type="button"
                                                        class="badge badge-outline-primary rounded-3xl capitalize ltr:mr-3 rtl:ml-3"
                                                        :class="{
                                                            'shadow-primary': selectedNote.tag === 'personal',
                                                            'shadow-warning': selectedNote.tag === 'work',
                                                            'shadow-info': selectedNote.tag === 'social',
                                                            'shadow-danger': selectedNote.tag === 'important',
                                                        }"
                                                        x-text="selectedNote.tag"></button>
                                                    <button x-show="selectedNote.isFav" type="button"
                                                        class="text-warning">
                                                        <svg width="18" height="18" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg"
                                                            class="fill-warning">
                                                            <path
                                                                d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z"
                                                                stroke="currentColor" stroke-width="1.5"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-5">
                                            <div class="text-base" x-text="selectedNote.description"></div>

                                            <div class="mt-8 ltr:text-right rtl:text-left">
                                                <button type="button" class="btn btn-outline-danger"
                                                    @click="isViewNoteModal = false">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end main content section -->

                <!-- start footer section -->
                {{-- <p class="pt-6 text-center dark:text-white-dark ltr:sm:text-left rtl:sm:text-right">
                    © <span id="footer-year">2022</span>. Vristo All rights reserved.
                </p> --}}
                <!-- end footer section -->
            </div>
        </div>
    </div>

    <script src="admin/assets/js/alpine-collaspe.min.js"></script>
    <script src="admin/assets/js/alpine-persist.min.js"></script>
    <script defer src="admin/assets/js/alpine-ui.min.js"></script>
    <script defer src="admin/assets/js/alpine-focus.min.js"></script>
    <script defer src="admin/assets/js/alpine.min.js"></script>
    <script src="admin/assets/js/custom.js"></script>
    <script>
        document.addEventListener('alpine:init', () => {
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
            //notes
            Alpine.data('notes', () => ({
                defaultParams: {
                    id: null,
                    title: '',
                    description: '',
                    tag: '',
                    user: '',
                    thumb: '',
                },
                isAddNoteModal: false,
                isDeleteNoteModal: false,
                isViewNoteModal: false,
                params: {
                    id: null,
                    title: '',
                    description: '',
                    tag: '',
                    user: '',
                    thumb: '',
                },
                isShowNoteMenu: false,
                notesList: [{
                        id: 1,
                        user: 'Nadine Amizah',
                        thumb: 'profile-16.jpeg',
                        title: 'Ronaldo',
                        description: 'Curabitur facilisis vel elit sed dapibus sodales purus rhoncus.',
                        date: '11/01/2020',
                        isFav: false,
                        tag: '',
                    },
                    {
                        id: 2,
                        user: 'John Doe',
                        thumb: 'profile-9.jpeg',
                        title: 'Messi',
                        description: 'Facilisis curabitur facilisis vel elit sed dapibus sodales purus.',
                        date: '11/02/2020',
                        isFav: true,
                        tag: '',
                    },
                    {
                        id: 3,
                        user: 'Kia Jain',
                        thumb: 'profile-5.jpeg',
                        title: 'Mbappe',
                        description: 'Proin a dui malesuada, laoreet mi vel, imperdiet diam quam laoreet.',
                        date: '11/04/2020',
                        isFav: false,
                        tag: '',
                    },
                    {
                        id: 4,
                        user: 'Max Smith',
                        thumb: 'profile-16.jpeg',
                        title: 'Chris Martin',
                        description: 'Excepteur sint occaecat cupidatat non proident, anim id est laborum.',
                        date: '11/08/2020',
                        isFav: true,
                        tag: '',
                    },
                    {
                        id: 5,
                        user: 'Marcelo',
                        thumb: 'profile-7.jpeg',
                        title: 'Windah Basudara',
                        description: 'Maecenas condimentum neque mollis, egestas leo ut, gravida.',
                        date: '11/09/2020',
                        isFav: true,
                        tag: '',
                    },
                    {
                        id: 6,
                        user: 'Max Smith',
                        thumb: 'profile-16.jpeg',
                        title: 'Sri Suliswati',
                        description: 'Suspendisse efficitur diam quis gravida. Nunc molestie est eros.',
                        date: '11/09/2020',
                        isFav: false,
                        tag: '',
                    },
                ],
                filterdNotesList: '',
                selectedTab: 'all',
                deletedNote: null,
                selectedNote: {
                    id: null,
                    title: '',
                    description: '',
                    tag: '',
                    user: '',
                    thumb: '',
                },

                init() {
                    this.searchNotes();
                },

                searchNotes() {
                    if (this.selectedTab != 'fav') {
                        if (this.selectedTab != 'all' || this.selectedTab === 'delete') {
                            this.filterdNotesList = this.notesList.filter((d) => d.tag === this
                                .selectedTab);
                        } else {
                            this.filterdNotesList = this.notesList;
                        }
                    } else {
                        this.filterdNotesList = this.notesList.filter((d) => d.isFav);
                    }
                },

                saveNote() {
                    if (!this.params.title) {
                        this.showMessage('Title is required.', 'error');
                        return false;
                    }
                    if (this.params.id) {
                        //update task
                        let note = this.notesList.find((d) => d.id === this.params.id);
                        note.title = this.params.title;
                        note.user = this.params.user;
                        note.description = this.params.description;
                        note.tag = this.params.tag;
                    } else {
                        //add note
                        let maxNoteId = this.notesList.length ?
                            this.notesList.reduce((max, character) => (character.id > max ? character
                                .id : max), this.notesList[0].id) :
                            0;
                        if (!maxNoteId) {
                            maxNoteId = 0;
                        }
                        let dt = new Date();
                        let note = {
                            id: maxNoteId + 1,
                            title: this.params.title,
                            user: this.params.user,
                            thumb: 'profile-21.jpeg',
                            description: this.params.description,
                            date: dt.getDate() + '/' + Number(dt.getMonth()) + 1 + '/' + dt
                                .getFullYear(),
                            isFav: false,
                            tag: this.params.tag,
                        };
                        this.notesList.splice(0, 0, note);
                        this.searchNotes();
                    }

                    this.showMessage('Note has been saved successfully.');
                    this.isAddNoteModal = false;
                    this.searchNotes();
                },

                tabChanged(type) {
                    this.selectedTab = type;
                    this.searchNotes();
                    this.isShowNoteMenu = false;
                },

                setFav(note) {
                    let item = this.filterdNotesList.find((d) => d.id === note.id);
                    item.isFav = !item.isFav;
                    this.searchNotes();
                },

                setTag(note, name) {
                    let item = this.filterdNotesList.find((d) => d.id === note.id);
                    item.tag = name;
                    this.searchNotes();
                },

                deleteNoteConfirm(note) {
                    setTimeout(() => {
                        this.deletedNote = note;
                        this.isDeleteNoteModal = true;
                    });
                },

                viewNote(note) {
                    setTimeout(() => {
                        this.selectedNote = note;
                        this.isViewNoteModal = true;
                    });
                },

                editNote(note) {
                    this.isShowNoteMenu = false;
                    setTimeout(() => {
                        this.params = JSON.parse(JSON.stringify(this.defaultParams));
                        if (note) {
                            this.params = JSON.parse(JSON.stringify(note));
                        }
                        this.isAddNoteModal = true;
                    });
                },

                deleteNote() {
                    this.notesList = this.notesList.filter((d) => d.id != this.deletedNote.id);
                    this.searchNotes();
                    this.showMessage('Note has been deleted successfully.');
                    this.isDeleteNoteModal = false;
                },

                showMessage(msg = '', type = 'success') {
                    const toast = window.Swal.mixin({
                        toast: true,
                        position: 'top',
                        showConfirmButton: false,
                        timer: 3000,
                    });
                    toast.fire({
                        icon: type,
                        title: msg,
                        padding: '10px 20px',
                    });
                },
            }));
        });
    </script>
</body>

<!-- Mirrored from html.vristo.sbthemes.com/apps-notes.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 02:33:03 GMT -->

</html>
