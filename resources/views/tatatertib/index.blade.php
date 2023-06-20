<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="css/app.css" />

{{--  <!-- Mirrored from html.vristo.sbthemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 02:32:26 GMT -->  --}}
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Admin - Tata Tertib</title>
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/x-icon" href="admin/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" media="screen"
        href="{{ asset('admin/assets/css/perfect-scrollbar.min.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('admin/assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/swiper-bundle.min.css') }}" />
    <link defer rel="stylesheet" type="text/css" media="screen" href="{{ asset('admin/assets/css/animate.css') }}" />
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="{{ asset('admin/assets/js/perfect-scrollbar.min.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/tippy-bundle.umd.min.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/sweetalert.min.js') }}"></script>

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
        <svg width="64" height="64" viewBox="0 0 135 135" xmlns="http://www.w3./2000/svg" fill="#4361ee">
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
                class="btn btn-outline-primary animate-pulse rounded-full bg-[#fafafa] p-5 dark:bg-[#060818] dark:hover:bg-primary"
                @click="goToTop">
                <svg width="24" height="24" class="h-4 w-4" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/0/svg">
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
                        <button type="button" class="btn"
                            :class="[$store.app.menu === 'horizontal' ? 'btn-primary' : 'btn-outline-primary']"
                            @click="$store.app.toggleMenu('horizontal')">
                            Horizontal
                        </button>
                        <button id="verticalButton" type="button" class="btn"
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
                        const verticalButton = document.getElementById("verticalButton");
                        verticalButton.classList.add("btn-primary");
                        verticalButton.click();
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


        <div class="main-content">
            @include('aproval.layout')
            <div class="animate__animated p-6" :class="[$store.app.animation]">
                <!-- start main content section -->

                <div x-data="basic" class="mt-16">
                    {{-- judul --}}
                    <div class="mb-5 font-semibold">
                        <span>Peraturan / <span class="text-[#00B7FF]">Tata Tertib</span></span>
                    </div>
                    <div class="panel">
                        <div class="flex justify-between">
                            <div class="">
                                <a href="#">
                                    <div class="w-20 flex h-8 me-2 bg-[#00B7FF] rounded-md border-2 border-[#00B7FF] justify-center items-center text-[#00B7FF] hover:bg-[#00B7FF] hover:text-white dark:bg-transparent ">
                                        <span class=" p-1  font-semibold dark:hover:text-black"><i class="fa-solid fa-plus"></i> Tambah</span>
                                    </div>
                                </a>
                            </div>
                            {{-- serch dan filter --}}
                            <div class="flex">
                                {{-- serch --}}
                                <div class="mr-4 ">
                                    <input
                                        class=" p-1 border-2 border-gray-400 rounded-xl outline-1 outline-gray-400 dark:bg-transparent"
                                        type="text" placeholder="Cari...">
                                </div>
                                {{-- filter --}}
                                <div class="border-2 rounded-full border-gray-400 flex items-center mr-2 ">
                                    <span class="mr-1 ml-3">
                                        Filter
                                    </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class=" mr-3 w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        {{-- tabel --}}

                        <div class="flex flex-col">
                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full text-left text-sm font-light">
                                            <thead class="border-b font-medium dark:border-neutral-500 ">
                                                <tr class="">
                                                    <th scope="col" class="px-6 py-4">#</th>
                                                    <th scope="col" class="px-6 py-4">Judul</th>
                                                    <th scope="col" class="px-6 py-4">Deskripsi</th>
                                                    <th scope="col" class="px-6 py-4">Aksi</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr
                                                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:text-black-200 ">
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">1</td>
                                                    <td class="whitespace-nowrap px-6 py-4">TATA TERTIB SISWA MAGANG</td>
                                                    <td class="whitespace-nowrap px-6 py-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, inventore.</td>
                                                    <td class="whitespace-nowrap px-6 py-4">
                                                        <div class="flex gap-1">
                                                            <a href="#">
                                                                <div class="w-16 flex h-8 me-2 bg-white rounded-md border-2 border-[#00B7FF] justify-center items-center text-[#00B7FF] hover:bg-[#00B7FF] hover:text-white dark:bg-transparent ">
                                                                    <span class=" p-1  font-semibold dark:hover:text-black">Edit</span>
                                                                </div>
                                                            </a>
                                                            <a href="#">
                                                                <div class="w-16 flex h-8 bg-white rounded-md border-2 border-[#E7515A] justify-center items-center text-[#E7515A] hover:bg-[#E7515A] hover:text-white dark:bg-transparent ">
                                                                    <span class=" p-1  font-semibold dark:hover:text-black">Hapus</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr
                                                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:text-black-200 ">
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">2</td>
                                                    <td class="whitespace-nowrap px-6 py-4">PERATURAN PADA SAAT JAM KANTOR</td>
                                                    <td class="whitespace-nowrap px-6 py-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, inventore.</td>
                                                    <td class="whitespace-nowrap px-6 py-4">
                                                        <div class="flex gap-1">
                                                            <a href="#">
                                                                <div class="w-16 flex h-8 me-2 bg-white rounded-md border-2 border-[#00B7FF] justify-center items-center text-[#00B7FF] hover:bg-[#00B7FF] hover:text-white dark:bg-transparent ">
                                                                    <span class=" p-1  font-semibold dark:hover:text-black">Edit</span>
                                                                </div>
                                                            </a>
                                                            <a href="#">
                                                                <div class="w-16 flex h-8 bg-white rounded-md border-2 border-[#E7515A] justify-center items-center text-[#E7515A] hover:bg-[#E7515A] hover:text-white dark:bg-transparent ">
                                                                    <span class=" p-1  font-semibold dark:hover:text-black">Hapus</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr
                                                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:text-black-200 ">
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">3</td>
                                                    <td class="whitespace-nowrap px-6 py-4">PERATURAN PIKET</td>
                                                    <td class="whitespace-nowrap px-6 py-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, inventore.</td>
                                                    <td class="whitespace-nowrap px-6 py-4">
                                                        <div class="flex gap-1">
                                                            <a href="#">
                                                                <div class="w-16 flex h-8 me-2 bg-white rounded-md border-2 border-[#00B7FF] justify-center items-center text-[#00B7FF] hover:bg-[#00B7FF] hover:text-white dark:bg-transparent ">
                                                                    <span class=" p-1  font-semibold dark:hover:text-black">Edit</span>
                                                                </div>
                                                            </a>
                                                            <a href="#">
                                                                <div class="w-16 flex h-8 bg-white rounded-md border-2 border-[#E7515A] justify-center items-center text-[#E7515A] hover:bg-[#E7515A] hover:text-white dark:bg-transparent ">
                                                                    <span class=" p-1  font-semibold dark:hover:text-black">Hapus</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- end tabel --}}
                        {{-- paginate --}}
                        <div class="flex justify-between">
                            <p>
                                Show 1 to 10 of 15 entries
                            </p>
                            <nav aria-label="Page navigation example">
                                <ul class="list-style-none flex">
                                    <li>
                                        <a
                                            class="pointer-events-none relative block rounded-full bg-transparent px-3 py-1.5 text-sm text-neutral-500 transition-all duration-300 dark:text-neutral-400">Previous</a>
                                    </li>
                                    <li>
                                        <a class="relative block rounded-full bg-[#00B7FF] px-3 py-1.5 text-sm text-white transition-all duration-300   dark:text-white dark: dark:hover:text-white"
                                            href="#!">1</a>

                                    </li>
                                    <li aria-current="page">
                                        <a class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm text-black transition-all duration-300 hover:bg-neutral-100  dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
                                            href="#!">2

                                        </a>
                                    </li>
                                    <li>
                                        <a class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm text-black transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
                                            href="#!">3</a>
                                    </li>
                                    <li>
                                        <a class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm text-black transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
                                            href="#!">Next</a>
                                    </li>
                                </ul>
                            </nav>
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


            <script src="{{ asset('admin/assets/js/swiper-bundle.min.js') }}"></script>
            <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
            <script src="{{ asset('admin/assets/js/alpine-collaspe.min.js') }}"></script>
            <script src="{{ asset('admin/assets/js/alpine-persist.min.js') }}"></script>
            <script defer src="{{ asset('admin/assets/js/alpine-ui.min.js') }}"></script>
            <script defer src="{{ asset('admin/assets/js/alpine-focus.min.js') }}"></script>
            <script defer src="{{ asset('admin/assets/js/alpine.min.js') }}"></script>
            <script src="{{ asset('admin/assets/js/custom.js') }}"></script>
            <script defer src="{{ asset('admin/assets/js/apexcharts.js') }}"></script>
            <script src="{{ asset('admin/assets/js/simple-datatables.js') }}"></script>



            <script>
                document.addEventListener('alpine:init', () => {
                    Alpine.data('basic', () => ({
                        datatable: null,
                        init() {
                            this.datatable = new simpleDatatables.DataTable('#myTable', {
                                data: {
                                    headings: ['ID', 'Nama', 'Jurusan', 'Lama Magang', 'Sekolah',
                                        'Kelas', 'Aksi'
                                    ],
                                    data: [
                                        [1, 'Caroline', 'RPL', '03-04-2023 -> 03-04-2023',
                                            'SMKN 1 KEPANJEN', '12', ''
                                        ],
                                        [2, 'Celeste', 'RPL', '03-04-2023 -> 03-04-2023',
                                            'SMKN 1 KEPANJEN', '12', ''
                                        ],
                                        [3, 'Tillman', 'RPL', '03-04-2023 -> 03-04-2023',
                                            'SMKN 1 KEPANJEN', '12', ''
                                        ],
                                        [4, 'Daisy', 'RPL', '03-04-2023 -> 03-04-2023',
                                            'SMKN 1 KEPANJEN', '12', ''
                                        ],
                                        [5, 'Weber', 'RPL', '03-04-2023 -> 03-04-2023',
                                            'SMKN 1 KEPANJEN', '12', ''
                                        ],
                                        [6, 'Buckley', 'RPL', '03-04-2023 -> 03-04-2023',
                                            'SMKN 1 KEPANJEN', '12', ''
                                        ],
                                        [7, 'Latoya', 'RPL', '03-04-2023 -> 03-04-2023',
                                            'SMKN 1 KEPANJEN', '12', ''
                                        ],
                                        [8, 'Kate', 'RPL', '03-04-2023 -> 03-04-2023',
                                            'SMKN 1 KEPANJEN', '12', ''
                                        ],
                                        [9, 'Marva', 'RPL', '03-04-2023 -> 03-04-2023',
                                            'SMKN 1 KEPANJEN', '12', ''
                                        ],
                                        [10, 'Decker', 'RPL', '03-04-2023 -> 03-04-2023',
                                            'SMKN 1 KEPANJEN', '12', ''
                                        ],
                                        [11, 'Odom', 'RPL', '03-04-2023 -> 03-04-2023',
                                            'SMKN 1 KEPANJEN', '12', ''
                                        ],
                                        [12, 'Sellers', 'RPL', '03-04-2023 -> 03-04-2023',
                                            'SMKN 1 KEPANJEN', '12', ''
                                        ],
                                        [13, 'Wendi', 'RPL', '03-04-2023 -> 03-04-2023',
                                            'SMKN 1 MALANG', '12', ''
                                        ],
                                        [14, 'Sophie', 'RPL', '03-04-2023 -> 03-04-2023',
                                            'SMKN 1 MALANG', '11', ''
                                        ],
                                        [15, 'Levine', 'RPL', '03-04-2023 -> 03-04-2023',
                                            'SMKN 1 MALANG', '11', ''
                                        ],

                                    ],
                                },
                                sortable: true,
                                searchable: true,
                                perPage: 10,
                                perPageSelect: [10, 20, 30, 50, 100],

                                firstLast: true,
                                firstText: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M13 19L7 12L13 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path opacity="0.5" d="M16.9998 19L10.9998 12L16.9998 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
                                lastText: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M11 19L17 12L11 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path opacity="0.5" d="M6.99976 19L12.9998 12L6.99976 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
                                prevText: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
                                nextText: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
                                labels: {
                                    perPage: '{select}',
                                },
                                layout: {
                                    top: '{search}',
                                    bottom: '{info}{select}{pager}',
                                },
                                columns: [{
                                    select: 6,
                                    render: (data, cell, row) => {
                                        return `

                                        `;
                                    },
                                    sortable: false,
                                }, ],
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

</html>
