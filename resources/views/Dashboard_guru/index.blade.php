<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from html.vristo.sbthemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 02:32:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Guru - Dashboad</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" type="image/x-icon" href="favicon.png" />
        <link rel="preconnect" href="https://fonts.googleapis.com/" />
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" media="screen" href="assets_guru/css/perfect-scrollbar.min.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="assets_guru/css/style.css" />
        <link defer rel="stylesheet" type="text/css" media="screen" href="assets_guru/css/animate.css" />
        <script src="assets_guru/js/perfect-scrollbar.min.js"></script>
        <script defer src="assets_guru/js/popper.min.js"></script>
        <script defer src="assets_guru/js/tippy-bundle.umd.min.js"></script>
        <script defer src="assets_guru/js/sweetalert.min.js"></script>
    </head>
    <body
        x-data="main"
        class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased"
        :class="[ $store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme, $store.app.menu, $store.app.layout,$store.app.rtlClass]"
    >
        <!-- sidebar menu overlay -->
        <div x-cloak class="fixed inset-0 z-50 bg-[black]/60 lg:hidden" :class="{'hidden' : !$store.app.sidebar}" @click="$store.app.toggleSidebar()"></div>

        <!-- screen loader -->
        <div class="screen_loader animate__animated fixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
            <svg width="64" height="64" viewBox="0 0 135 135" xmlns="http://www.w3.org/2000/svg" fill="#4361ee">
                <path
                    d="M67.447 58c5.523 0 10-4.477 10-10s-4.477-10-10-10-10 4.477-10 10 4.477 10 10 10zm9.448 9.447c0 5.523 4.477 10 10 10 5.522 0 10-4.477 10-10s-4.478-10-10-10c-5.523 0-10 4.477-10 10zm-9.448 9.448c-5.523 0-10 4.477-10 10 0 5.522 4.477 10 10 10s10-4.478 10-10c0-5.523-4.477-10-10-10zM58 67.447c0-5.523-4.477-10-10-10s-10 4.477-10 10 4.477 10 10 10 10-4.477 10-10z"
                >
                    <animateTransform attributeName="transform" type="rotate" from="0 67 67" to="-360 67 67" dur="2.5s" repeatCount="indefinite" />
                </path>
                <path
                    d="M28.19 40.31c6.627 0 12-5.374 12-12 0-6.628-5.373-12-12-12-6.628 0-12 5.372-12 12 0 6.626 5.372 12 12 12zm30.72-19.825c4.686 4.687 12.284 4.687 16.97 0 4.686-4.686 4.686-12.284 0-16.97-4.686-4.687-12.284-4.687-16.97 0-4.687 4.686-4.687 12.284 0 16.97zm35.74 7.705c0 6.627 5.37 12 12 12 6.626 0 12-5.373 12-12 0-6.628-5.374-12-12-12-6.63 0-12 5.372-12 12zm19.822 30.72c-4.686 4.686-4.686 12.284 0 16.97 4.687 4.686 12.285 4.686 16.97 0 4.687-4.686 4.687-12.284 0-16.97-4.685-4.687-12.283-4.687-16.97 0zm-7.704 35.74c-6.627 0-12 5.37-12 12 0 6.626 5.373 12 12 12s12-5.374 12-12c0-6.63-5.373-12-12-12zm-30.72 19.822c-4.686-4.686-12.284-4.686-16.97 0-4.686 4.687-4.686 12.285 0 16.97 4.686 4.687 12.284 4.687 16.97 0 4.687-4.685 4.687-12.283 0-16.97zm-35.74-7.704c0-6.627-5.372-12-12-12-6.626 0-12 5.373-12 12s5.374 12 12 12c6.628 0 12-5.373 12-12zm-19.823-30.72c4.687-4.686 4.687-12.284 0-16.97-4.686-4.686-12.284-4.686-16.97 0-4.687 4.686-4.687 12.284 0 16.97 4.686 4.687 12.284 4.687 16.97 0z"
                >
                    <animateTransform attributeName="transform" type="rotate" from="0 67 67" to="360 67 67" dur="8s" repeatCount="indefinite" />
                </path>
            </svg>
        </div>

        <!-- scroll to top button -->
        <div class="fixed bottom-6 z-50 ltr:right-6 rtl:left-6" x-data="scrollToTop">
            <template x-if="showTopButton">
                <button
                    type="button"
                    class="btn btn-outline-primary animate-pulse rounded-full bg-[#fafafa] p-2 dark:bg-[#060818] dark:hover:bg-primary"
                    @click="goToTop"
                >
                    <svg width="24" height="24" class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            opacity="0.5"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12 20.75C12.4142 20.75 12.75 20.4142 12.75 20L12.75 10.75L11.25 10.75L11.25 20C11.25 20.4142 11.5858 20.75 12 20.75Z"
                            fill="currentColor"
                        />
                        <path
                            d="M6.00002 10.75C5.69667 10.75 5.4232 10.5673 5.30711 10.287C5.19103 10.0068 5.25519 9.68417 5.46969 9.46967L11.4697 3.46967C11.6103 3.32902 11.8011 3.25 12 3.25C12.1989 3.25 12.3897 3.32902 12.5304 3.46967L18.5304 9.46967C18.7449 9.68417 18.809 10.0068 18.6929 10.287C18.5768 10.5673 18.3034 10.75 18 10.75L6.00002 10.75Z"
                            fill="currentColor"
                        />
                    </svg>
                </button>
            </template>
        </div>

        <!-- start theme customizer section -->
        <div x-data="customizer">
            <div
                class="fixed inset-0 z-[51] hidden bg-[black]/60 px-4 transition-[display]"
                :class="{'!block': showCustomizer}"
                @click="showCustomizer = false"
            ></div>

            <nav
                class="fixed top-0 bottom-0 z-[51] w-full max-w-[400px] bg-white p-4 shadow-[5px_0_25px_0_rgba(94,92,154,0.1)] transition-[right] duration-300 ltr:-right-[400px] rtl:-left-[400px] dark:bg-[#0e1726]"
                :class="{'ltr:!right-0 rtl:!left-0' : showCustomizer}"
            >
                <a
                    href="javascript:;"
                    class="absolute top-0 bottom-0 my-auto flex h-10 w-12 cursor-pointer items-center justify-center bg-primary text-white ltr:-left-12 ltr:rounded-tl-full ltr:rounded-bl-full rtl:-right-12 rtl:rounded-tr-full rtl:rounded-br-full"
                    @click="showCustomizer = !showCustomizer"
                >
                    <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 animate-[spin_3s_linear_infinite]"
                    >
                        <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.5" />
                        <path
                            opacity="0.5"
                            d="M13.7654 2.15224C13.3978 2 12.9319 2 12 2C11.0681 2 10.6022 2 10.2346 2.15224C9.74457 2.35523 9.35522 2.74458 9.15223 3.23463C9.05957 3.45834 9.0233 3.7185 9.00911 4.09799C8.98826 4.65568 8.70226 5.17189 8.21894 5.45093C7.73564 5.72996 7.14559 5.71954 6.65219 5.45876C6.31645 5.2813 6.07301 5.18262 5.83294 5.15102C5.30704 5.08178 4.77518 5.22429 4.35436 5.5472C4.03874 5.78938 3.80577 6.1929 3.33983 6.99993C2.87389 7.80697 2.64092 8.21048 2.58899 8.60491C2.51976 9.1308 2.66227 9.66266 2.98518 10.0835C3.13256 10.2756 3.3397 10.437 3.66119 10.639C4.1338 10.936 4.43789 11.4419 4.43786 12C4.43783 12.5581 4.13375 13.0639 3.66118 13.3608C3.33965 13.5629 3.13248 13.7244 2.98508 13.9165C2.66217 14.3373 2.51966 14.8691 2.5889 15.395C2.64082 15.7894 2.87379 16.193 3.33973 17C3.80568 17.807 4.03865 18.2106 4.35426 18.4527C4.77508 18.7756 5.30694 18.9181 5.83284 18.8489C6.07289 18.8173 6.31632 18.7186 6.65204 18.5412C7.14547 18.2804 7.73556 18.27 8.2189 18.549C8.70224 18.8281 8.98826 19.3443 9.00911 19.9021C9.02331 20.2815 9.05957 20.5417 9.15223 20.7654C9.35522 21.2554 9.74457 21.6448 10.2346 21.8478C10.6022 22 11.0681 22 12 22C12.9319 22 13.3978 22 13.7654 21.8478C14.2554 21.6448 14.6448 21.2554 14.8477 20.7654C14.9404 20.5417 14.9767 20.2815 14.9909 19.902C15.0117 19.3443 15.2977 18.8281 15.781 18.549C16.2643 18.2699 16.8544 18.2804 17.3479 18.5412C17.6836 18.7186 17.927 18.8172 18.167 18.8488C18.6929 18.9181 19.2248 18.7756 19.6456 18.4527C19.9612 18.2105 20.1942 17.807 20.6601 16.9999C21.1261 16.1929 21.3591 15.7894 21.411 15.395C21.4802 14.8691 21.3377 14.3372 21.0148 13.9164C20.8674 13.7243 20.6602 13.5628 20.3387 13.3608C19.8662 13.0639 19.5621 12.558 19.5621 11.9999C19.5621 11.4418 19.8662 10.9361 20.3387 10.6392C20.6603 10.4371 20.8675 10.2757 21.0149 10.0835C21.3378 9.66273 21.4803 9.13087 21.4111 8.60497C21.3592 8.21055 21.1262 7.80703 20.6602 7C20.1943 6.19297 19.9613 5.78945 19.6457 5.54727C19.2249 5.22436 18.693 5.08185 18.1671 5.15109C17.9271 5.18269 17.6837 5.28136 17.3479 5.4588C16.8545 5.71959 16.2644 5.73002 15.7811 5.45096C15.2977 5.17191 15.0117 4.65566 14.9909 4.09794C14.9767 3.71848 14.9404 3.45833 14.8477 3.23463C14.6448 2.74458 14.2554 2.35523 13.7654 2.15224Z"
                            stroke="currentColor"
                            stroke-width="1.5"
                        />
                    </svg>
                </a>
                <div class="perfect-scrollbar h-full overflow-y-auto overflow-x-hidden">
                    <div class="relative pb-5 text-center">
                        <a
                            href="javascript:;"
                            class="absolute top-0 opacity-30 hover:opacity-100 ltr:right-0 rtl:left-0 dark:text-white"
                            @click="showCustomizer = false"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24px"
                                height="24px"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="h-5 w-5"
                            >
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </a>
                        <h4 class="mb-1 dark:text-white">TEMPLATE CUSTOMIZER</h4>
                        <p class="text-white-dark">Set preferences that will be cookied for your live preview demonstration.</p>
                    </div>
                    <div class="mb-3 rounded-md border border-dashed border-[#e0e6ed] p-3 dark:border-[#1b2e4b]">
                        <h5 class="mb-1 text-base leading-none dark:text-white">Color Scheme</h5>
                        <p class="text-xs text-white-dark">Overall light or dark presentation.</p>
                        <div class="mt-3 grid grid-cols-3 gap-2">
                            <button
                                type="button"
                                class="btn"
                                :class="[$store.app.theme === 'light' ? 'btn-primary' :'btn-outline-primary']"
                                @click="$store.app.toggleTheme('light')"
                            >
                                <svg
                                    width="20"
                                    height="20"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 shrink-0 ltr:mr-2 rtl:ml-2"
                                >
                                    <circle cx="12" cy="12" r="5" stroke="currentColor" stroke-width="1.5"></circle>
                                    <path d="M12 2V4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                    <path d="M12 20V22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                    <path d="M4 12L2 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                    <path d="M22 12L20 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                    <path
                                        opacity="0.5"
                                        d="M19.7778 4.22266L17.5558 6.25424"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                    ></path>
                                    <path
                                        opacity="0.5"
                                        d="M4.22217 4.22266L6.44418 6.25424"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                    ></path>
                                    <path
                                        opacity="0.5"
                                        d="M6.44434 17.5557L4.22211 19.7779"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                    ></path>
                                    <path
                                        opacity="0.5"
                                        d="M19.7778 19.7773L17.5558 17.5551"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                    ></path>
                                </svg>
                                Light
                            </button>
                            <button
                                type="button"
                                class="btn"
                                :class="[$store.app.theme === 'dark' ? 'btn-primary' :'btn-outline-primary']"
                                @click="$store.app.toggleTheme('dark')"
                            >
                                <svg
                                    width="20"
                                    height="20"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 shrink-0 ltr:mr-2 rtl:ml-2"
                                >
                                    <path
                                        d="M21.0672 11.8568L20.4253 11.469L21.0672 11.8568ZM12.1432 2.93276L11.7553 2.29085V2.29085L12.1432 2.93276ZM21.25 12C21.25 17.1086 17.1086 21.25 12 21.25V22.75C17.9371 22.75 22.75 17.9371 22.75 12H21.25ZM12 21.25C6.89137 21.25 2.75 17.1086 2.75 12H1.25C1.25 17.9371 6.06294 22.75 12 22.75V21.25ZM2.75 12C2.75 6.89137 6.89137 2.75 12 2.75V1.25C6.06294 1.25 1.25 6.06294 1.25 12H2.75ZM15.5 14.25C12.3244 14.25 9.75 11.6756 9.75 8.5H8.25C8.25 12.5041 11.4959 15.75 15.5 15.75V14.25ZM20.4253 11.469C19.4172 13.1373 17.5882 14.25 15.5 14.25V15.75C18.1349 15.75 20.4407 14.3439 21.7092 12.2447L20.4253 11.469ZM9.75 8.5C9.75 6.41182 10.8627 4.5828 12.531 3.57467L11.7553 2.29085C9.65609 3.5593 8.25 5.86509 8.25 8.5H9.75ZM12 2.75C11.9115 2.75 11.8077 2.71008 11.7324 2.63168C11.6686 2.56527 11.6538 2.50244 11.6503 2.47703C11.6461 2.44587 11.6482 2.35557 11.7553 2.29085L12.531 3.57467C13.0342 3.27065 13.196 2.71398 13.1368 2.27627C13.0754 1.82126 12.7166 1.25 12 1.25V2.75ZM21.7092 12.2447C21.6444 12.3518 21.5541 12.3539 21.523 12.3497C21.4976 12.3462 21.4347 12.3314 21.3683 12.2676C21.2899 12.1923 21.25 12.0885 21.25 12H22.75C22.75 11.2834 22.1787 10.9246 21.7237 10.8632C21.286 10.804 20.7293 10.9658 20.4253 11.469L21.7092 12.2447Z"
                                        fill="currentColor"
                                    ></path>
                                </svg>
                                Dark
                            </button>
                            <button
                                type="button"
                                class="btn"
                                :class="[$store.app.theme === 'system' ? 'btn-primary' :'btn-outline-primary']"
                                @click="$store.app.toggleTheme('system')"
                            >
                                <svg
                                    width="20"
                                    height="20"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 shrink-0 ltr:mr-2 rtl:ml-2"
                                >
                                    <path
                                        d="M3 9C3 6.17157 3 4.75736 3.87868 3.87868C4.75736 3 6.17157 3 9 3H15C17.8284 3 19.2426 3 20.1213 3.87868C21 4.75736 21 6.17157 21 9V14C21 15.8856 21 16.8284 20.4142 17.4142C19.8284 18 18.8856 18 17 18H7C5.11438 18 4.17157 18 3.58579 17.4142C3 16.8284 3 15.8856 3 14V9Z"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                    ></path>
                                    <path opacity="0.5" d="M22 21H2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                    <path opacity="0.5" d="M15 15H9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                </svg>
                                System
                            </button>
                        </div>
                    </div>
                    <div class="mb-3 rounded-md border border-dashed border-[#e0e6ed] p-3 dark:border-[#1b2e4b]">
                        <h5 class="mb-1 text-base leading-none dark:text-white">Navigation Position</h5>
                        <p class="text-xs text-white-dark">Select the primary navigation paradigm for your app.</p>
                        <div class="mt-3">
                            <button
                            id="horizontalButton"
                                type="button"
                                class="btn"
                                :class="[$store.app.menu === 'horizontal' ? 'btn-primary' :'btn-outline-primary']"
                                @click="$store.app.toggleMenu('horizontal')"
                            >
                                Horizontal
                            </button>
                            <button

                                type="button"
                                class="btn"
                                :class="[$store.app.menu === 'vertical' ? 'btn-primary' :'btn-outline-primary']"
                                @click="$store.app.toggleMenu('vertical')"
                            >
                                Vertical
                            </button>
                            <button
                                type="button"
                                class="btn"
                                :class="[$store.app.menu === 'collapsible-vertical' ? 'btn-primary' :'btn-outline-primary']"
                                @click="$store.app.toggleMenu('collapsible-vertical')"
                            >
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
                                <input
                                    x-model="$store.app.semidark"
                                    type="checkbox"
                                    :value="true"
                                    class="form-checkbox"
                                    @change="$store.app.toggleSemidark()"
                                />
                                <span>Semi Dark (Sidebar & Header)</span>
                            </label>
                        </div>
                    </div>
                    <div class="mb-3 rounded-md border border-dashed border-[#e0e6ed] p-3 dark:border-[#1b2e4b]">
                        <h5 class="mb-1 text-base leading-none dark:text-white">Layout Style</h5>
                        <p class="text-xs text-white-dark">Select the primary layout style for your app.</p>
                        <div class="mt-3 flex gap-2">
                            <button
                                type="button"
                                class="btn flex-auto"
                                :class="[$store.app.layout === 'boxed-layout' ? 'btn-primary' :'btn-outline-primary']"
                                @click="$store.app.toggleLayout('boxed-layout')"
                            >
                                Box
                            </button>
                            <button
                                type="button"
                                class="btn flex-auto"
                                :class="[$store.app.layout === 'full' ? 'btn-primary' :'btn-outline-primary']"
                                @click="$store.app.toggleLayout('full')"
                            >
                                Full
                            </button>
                        </div>
                    </div>
                    <div class="mb-3 rounded-md border border-dashed border-[#e0e6ed] p-3 dark:border-[#1b2e4b]">
                        <h5 class="mb-1 text-base leading-none dark:text-white">Direction</h5>
                        <p class="text-xs text-white-dark">Select the direction for your app.</p>
                        <div class="mt-3 flex gap-2">
                            <button
                                type="button"
                                class="btn flex-auto"
                                :class="[$store.app.rtlClass === 'ltr' ? 'btn-primary' :'btn-outline-primary']"
                                @click="$store.app.toggleRTL('ltr')"
                            >
                                LTR
                            </button>
                            <button
                                type="button"
                                class="btn flex-auto"
                                :class="[$store.app.rtlClass === 'rtl' ? 'btn-primary' :'btn-outline-primary']"
                                @click="$store.app.toggleRTL('rtl')"
                            >
                                RTL
                            </button>
                        </div>
                    </div>

                    <div class="mb-3 rounded-md border border-dashed border-[#e0e6ed] p-3 dark:border-[#1b2e4b]">
                        <h5 class="mb-1 text-base leading-none dark:text-white">Navbar Type</h5>
                        <p class="text-xs text-white-dark">Sticky or Floating.</p>
                        <div class="mt-3 flex items-center gap-3 text-primary">
                            <label class="mb-0 inline-flex">
                                <input x-model="$store.app.navbar" type="radio" value="navbar-sticky" class="form-radio" @change="$store.app.toggleNavbar()" />
                                <span>Sticky</span>
                            </label>
                            <label class="mb-0 inline-flex">
                                <input
                                    x-model="$store.app.navbar"
                                    type="radio"
                                    value="navbar-floating"
                                    class="form-radio"
                                    @change="$store.app.toggleNavbar()"
                                />
                                <span>Floating</span>
                            </label>
                            <label class="mb-0 inline-flex">
                                <input x-model="$store.app.navbar" type="radio" value="navbar-static" class="form-radio" @change="$store.app.toggleNavbar()" />
                                <span>Static</span>
                            </label>
                        </div>
                    </div>

                    <div class="mb-3 rounded-md border border-dashed border-[#e0e6ed] p-3 dark:border-[#1b2e4b]">
                        <h5 class="mb-1 text-base leading-none dark:text-white">Router Transition</h5>
                        <p class="text-xs text-white-dark">Animation of main content.</p>
                        <div class="mt-3">
                            <select x-model="$store.app.animation" class="form-select border-primary text-primary" @change="$store.app.toggleAnimation()">
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
            <div :class="{'dark text-white-dark' : $store.app.semidark}">
                <nav
                    x-data="sidebar"
                    class="sidebar fixed top-0 bottom-0 z-50 h-full min-h-screen w-[260px] shadow-[5px_0_25px_0_rgba(94,92,154,0.1)] transition-all duration-300"
                >
                    <div class="h-full bg-white dark:bg-[#0e1726]">
                        <div class="flex items-center justify-between px-4 py-3">
                            <a href="" class="main-logo flex shrink-0 items-center">
                                <img class="ml-[5px] w-8 flex-none" src="" alt="image" />

                            </a>
                            <a
                                href="javascript:;"
                                class="collapse-icon flex h-8 w-8 items-center rounded-full transition duration-300 hover:bg-gray-500/10 rtl:rotate-180 dark:text-white-light dark:hover:bg-dark-light/10"
                                @click="$store.app.toggleSidebar()"
                            >
                                <svg class="m-auto h-5 w-5" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13 19L7 12L13 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        opacity="0.5"
                                        d="M16.9998 19L10.9998 12L16.9998 5"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </a>
                        </div>
                        <ul
                            class="perfect-scrollbar relative h-[calc(100vh-80px)] space-y-0.5 overflow-y-auto overflow-x-hidden p-4 py-0 font-semibold"
                            x-data="{ activeDropdown: 'dashboard' }"
                        >
                            <li class="menu nav-item">
                                <button
                                    type="button"
                                    class="nav-link group"
                                    :class="{'active' : activeDropdown === 'dashboard'}"
                                    @click="activeDropdown === 'dashboard' ? activeDropdown = null : activeDropdown = 'dashboard'"
                                >
                                    <div class="flex items-center">
                                        <svg
                                            class="group-hover:!text-primary"
                                            width="20"
                                            height="20"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                opacity="0.5"
                                                d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M9 17.25C8.58579 17.25 8.25 17.5858 8.25 18C8.25 18.4142 8.58579 18.75 9 18.75H15C15.4142 18.75 15.75 18.4142 15.75 18C15.75 17.5858 15.4142 17.25 15 17.25H9Z"
                                                fill="currentColor"
                                            />
                                        </svg>

                                        <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Dashboard</span>
                                    </div>
                                    <div class="rtl:rotate-180" :class="{'!rotate-90' : activeDropdown === 'dashboard'}">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </button>
                            </li>

                            <h2 class="-mx-4 mb-1 flex items-center bg-white-light/30 py-3 px-7 font-extrabold uppercase dark:bg-dark dark:bg-opacity-[0.08]">
                                <svg
                                    class="hidden h-5 w-4 flex-none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                                <span>Siswa</span>
                            </h2>

                            <li class="nav-item">
                                <ul>
                                    <li class="nav-item">
                                        <a href="apps-chat.html" class="group">
                                            <div class="flex items-center">
                                                <svg
                                                    class="group-hover:!text-primary"
                                                    width="20"
                                                    height="20"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M10.4036 22.4797L10.6787 22.015C11.1195 21.2703 11.3399 20.8979 11.691 20.6902C12.0422 20.4825 12.5001 20.4678 13.4161 20.4385C14.275 20.4111 14.8523 20.3361 15.3458 20.1317C16.385 19.7012 17.2106 18.8756 17.641 17.8365C17.9639 17.0571 17.9639 16.0691 17.9639 14.093V13.2448C17.9639 10.4683 17.9639 9.08006 17.3389 8.06023C16.9892 7.48958 16.5094 7.0098 15.9388 6.66011C14.919 6.03516 13.5307 6.03516 10.7542 6.03516H8.20964C5.43314 6.03516 4.04489 6.03516 3.02507 6.66011C2.45442 7.0098 1.97464 7.48958 1.62495 8.06023C1 9.08006 1 10.4683 1 13.2448V14.093C1 16.0691 1 17.0571 1.32282 17.8365C1.75326 18.8756 2.57886 19.7012 3.61802 20.1317C4.11158 20.3361 4.68882 20.4111 5.5477 20.4385C6.46368 20.4678 6.92167 20.4825 7.27278 20.6902C7.6239 20.8979 7.84431 21.2703 8.28514 22.015L8.5602 22.4797C8.97002 23.1721 9.9938 23.1721 10.4036 22.4797ZM13.1928 14.5171C13.7783 14.5171 14.253 14.0424 14.253 13.4568C14.253 12.8713 13.7783 12.3966 13.1928 12.3966C12.6072 12.3966 12.1325 12.8713 12.1325 13.4568C12.1325 14.0424 12.6072 14.5171 13.1928 14.5171ZM10.5422 13.4568C10.5422 14.0424 10.0675 14.5171 9.48193 14.5171C8.89637 14.5171 8.42169 14.0424 8.42169 13.4568C8.42169 12.8713 8.89637 12.3966 9.48193 12.3966C10.0675 12.3966 10.5422 12.8713 10.5422 13.4568ZM5.77108 14.5171C6.35664 14.5171 6.83133 14.0424 6.83133 13.4568C6.83133 12.8713 6.35664 12.3966 5.77108 12.3966C5.18553 12.3966 4.71084 12.8713 4.71084 13.4568C4.71084 14.0424 5.18553 14.5171 5.77108 14.5171Z"
                                                        fill="currentColor"
                                                    />
                                                    <path
                                                        opacity="0.5"
                                                        d="M15.486 1C16.7529 0.999992 17.7603 0.999986 18.5683 1.07681C19.3967 1.15558 20.0972 1.32069 20.7212 1.70307C21.3632 2.09648 21.9029 2.63623 22.2963 3.27821C22.6787 3.90219 22.8438 4.60265 22.9226 5.43112C22.9994 6.23907 22.9994 7.24658 22.9994 8.51343V9.37869C22.9994 10.2803 22.9994 10.9975 22.9597 11.579C22.9191 12.174 22.8344 12.6848 22.6362 13.1632C22.152 14.3323 21.2232 15.2611 20.0541 15.7453C20.0249 15.7574 19.9955 15.7691 19.966 15.7804C19.8249 15.8343 19.7039 15.8806 19.5978 15.915H17.9477C17.9639 15.416 17.9639 14.8217 17.9639 14.093V13.2448C17.9639 10.4683 17.9639 9.08006 17.3389 8.06023C16.9892 7.48958 16.5094 7.0098 15.9388 6.66011C14.919 6.03516 13.5307 6.03516 10.7542 6.03516H8.20964C7.22423 6.03516 6.41369 6.03516 5.73242 6.06309V4.4127C5.76513 4.29934 5.80995 4.16941 5.86255 4.0169C5.95202 3.75751 6.06509 3.51219 6.20848 3.27821C6.60188 2.63623 7.14163 2.09648 7.78361 1.70307C8.40759 1.32069 9.10805 1.15558 9.93651 1.07681C10.7445 0.999986 11.7519 0.999992 13.0188 1H15.486Z"
                                                        fill="currentColor"
                                                    />
                                                </svg>
                                                <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Chat</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-mailbox.html" class="group">
                                            <div class="flex items-center">
                                                <svg
                                                    class="group-hover:!text-primary"
                                                    width="20"
                                                    height="20"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        d="M24 5C24 6.65685 22.6569 8 21 8C19.3431 8 18 6.65685 18 5C18 3.34315 19.3431 2 21 2C22.6569 2 24 3.34315 24 5Z"
                                                        fill="currentColor"
                                                    />
                                                    <path
                                                        d="M17.2339 7.46394L15.6973 8.74444C14.671 9.59966 13.9585 10.1915 13.357 10.5784C12.7747 10.9529 12.3798 11.0786 12.0002 11.0786C11.6206 11.0786 11.2258 10.9529 10.6435 10.5784C10.0419 10.1915 9.32941 9.59966 8.30315 8.74444L5.92837 6.76546C5.57834 6.47377 5.05812 6.52106 4.76643 6.87109C4.47474 7.22112 4.52204 7.74133 4.87206 8.03302L7.28821 10.0465C8.2632 10.859 9.05344 11.5176 9.75091 11.9661C10.4775 12.4334 11.185 12.7286 12.0002 12.7286C12.8154 12.7286 13.523 12.4334 14.2495 11.9661C14.947 11.5176 15.7372 10.859 16.7122 10.0465L18.3785 8.65795C17.9274 8.33414 17.5388 7.92898 17.2339 7.46394Z"
                                                        fill="currentColor"
                                                    />
                                                    <path
                                                        d="M18.4538 6.58719C18.7362 6.53653 19.0372 6.63487 19.234 6.87109C19.3965 7.06614 19.4538 7.31403 19.4121 7.54579C19.0244 7.30344 18.696 6.97499 18.4538 6.58719Z"
                                                        fill="currentColor"
                                                    />
                                                    <path
                                                        opacity="0.5"
                                                        d="M16.9576 3.02099C16.156 3 15.2437 3 14.2 3H9.8C5.65164 3 3.57746 3 2.28873 4.31802C1 5.63604 1 7.75736 1 12C1 16.2426 1 18.364 2.28873 19.682C3.57746 21 5.65164 21 9.8 21H14.2C18.3484 21 20.4225 21 21.7113 19.682C23 18.364 23 16.2426 23 12C23 10.9326 23 9.99953 22.9795 9.1797C22.3821 9.47943 21.7103 9.64773 21 9.64773C18.5147 9.64773 16.5 7.58722 16.5 5.04545C16.5 4.31904 16.6646 3.63193 16.9576 3.02099Z"
                                                        fill="currentColor"
                                                    />
                                                </svg>
                                                <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Mailbox</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-todolist.html" class="group">
                                            <div class="flex items-center">
                                                <svg
                                                    class="group-hover:!text-primary"
                                                    width="20"
                                                    height="20"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        opacity="0.5"
                                                        d="M3 10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H13C16.7712 2 18.6569 2 19.8284 3.17157C21 4.34315 21 6.22876 21 10V14C21 17.7712 21 19.6569 19.8284 20.8284C18.6569 22 16.7712 22 13 22H11C7.22876 22 5.34315 22 4.17157 20.8284C3 19.6569 3 17.7712 3 14V10Z"
                                                        fill="currentColor"
                                                    />
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M12 5.25C12.4142 5.25 12.75 5.58579 12.75 6V7.25H14C14.4142 7.25 14.75 7.58579 14.75 8C14.75 8.41421 14.4142 8.75 14 8.75L12.75 8.75L12.75 10C12.75 10.4142 12.4142 10.75 12 10.75C11.5858 10.75 11.25 10.4142 11.25 10L11.25 8.75H9.99997C9.58575 8.75 9.24997 8.41421 9.24997 8C9.24997 7.58579 9.58575 7.25 9.99997 7.25H11.25L11.25 6C11.25 5.58579 11.5858 5.25 12 5.25ZM7.25 14C7.25 13.5858 7.58579 13.25 8 13.25H16C16.4142 13.25 16.75 13.5858 16.75 14C16.75 14.4142 16.4142 14.75 16 14.75H8C7.58579 14.75 7.25 14.4142 7.25 14ZM8.25 18C8.25 17.5858 8.58579 17.25 9 17.25H15C15.4142 17.25 15.75 17.5858 15.75 18C15.75 18.4142 15.4142 18.75 15 18.75H9C8.58579 18.75 8.25 18.4142 8.25 18Z"
                                                        fill="currentColor"
                                                    />
                                                </svg>
                                                <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Todo List</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-notes.html" class="group">
                                            <div class="flex items-center">
                                                <svg
                                                    class="group-hover:!text-primary"
                                                    width="20"
                                                    height="20"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        opacity="0.5"
                                                        d="M3 10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H13C16.7712 2 18.6569 2 19.8284 3.17157C21 4.34315 21 6.22876 21 10V14C21 17.7712 21 19.6569 19.8284 20.8284C18.6569 22 16.7712 22 13 22H11C7.22876 22 5.34315 22 4.17157 20.8284C3 19.6569 3 17.7712 3 14V10Z"
                                                        fill="currentColor"
                                                    />
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M7.25 12C7.25 11.5858 7.58579 11.25 8 11.25H16C16.4142 11.25 16.75 11.5858 16.75 12C16.75 12.4142 16.4142 12.75 16 12.75H8C7.58579 12.75 7.25 12.4142 7.25 12Z"
                                                        fill="currentColor"
                                                    />
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M7.25 8C7.25 7.58579 7.58579 7.25 8 7.25H16C16.4142 7.25 16.75 7.58579 16.75 8C16.75 8.41421 16.4142 8.75 16 8.75H8C7.58579 8.75 7.25 8.41421 7.25 8Z"
                                                        fill="currentColor"
                                                    />
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M7.25 16C7.25 15.5858 7.58579 15.25 8 15.25H13C13.4142 15.25 13.75 15.5858 13.75 16C13.75 16.4142 13.4142 16.75 13 16.75H8C7.58579 16.75 7.25 16.4142 7.25 16Z"
                                                        fill="currentColor"
                                                    />
                                                </svg>
                                                <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Notes</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-scrumboard.html" class="group">
                                            <div class="flex items-center">
                                                <svg
                                                    class="group-hover:!text-primary"
                                                    width="20"
                                                    height="20"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        opacity="0.5"
                                                        d="M21 15.9983V9.99826C21 7.16983 21 5.75562 20.1213 4.87694C19.3529 4.10856 18.175 4.01211 16 4H8C5.82497 4.01211 4.64706 4.10856 3.87868 4.87694C3 5.75562 3 7.16983 3 9.99826V15.9983C3 18.8267 3 20.2409 3.87868 21.1196C4.75736 21.9983 6.17157 21.9983 9 21.9983H15C17.8284 21.9983 19.2426 21.9983 20.1213 21.1196C21 20.2409 21 18.8267 21 15.9983Z"
                                                        fill="currentColor"
                                                    />
                                                    <path
                                                        d="M8 3.5C8 2.67157 8.67157 2 9.5 2H14.5C15.3284 2 16 2.67157 16 3.5V4.5C16 5.32843 15.3284 6 14.5 6H9.5C8.67157 6 8 5.32843 8 4.5V3.5Z"
                                                        fill="currentColor"
                                                    />
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M12 9.25C12.4142 9.25 12.75 9.58579 12.75 10V12.25L15 12.25C15.4142 12.25 15.75 12.5858 15.75 13C15.75 13.4142 15.4142 13.75 15 13.75L12.75 13.75L12.75 16C12.75 16.4142 12.4142 16.75 12 16.75C11.5858 16.75 11.25 16.4142 11.25 16L11.25 13.75H9C8.58579 13.75 8.25 13.4142 8.25 13C8.25 12.5858 8.58579 12.25 9 12.25L11.25 12.25L11.25 10C11.25 9.58579 11.5858 9.25 12 9.25Z"
                                                        fill="currentColor"
                                                    />
                                                </svg>
                                                <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark"
                                                    >Scrumboard</span
                                                >
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-contacts.html" class="group">
                                            <div class="flex items-center">
                                                <svg
                                                    class="group-hover:!text-primary"
                                                    width="20"
                                                    height="20"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        opacity="0.5"
                                                        d="M19.7165 20.3624C21.143 19.5846 22 18.5873 22 17.5C22 16.3475 21.0372 15.2961 19.4537 14.5C17.6226 13.5794 14.9617 13 12 13C9.03833 13 6.37738 13.5794 4.54631 14.5C2.96285 15.2961 2 16.3475 2 17.5C2 18.6525 2.96285 19.7039 4.54631 20.5C6.37738 21.4206 9.03833 22 12 22C15.1066 22 17.8823 21.3625 19.7165 20.3624Z"
                                                        fill="currentColor"
                                                    />
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M5 8.51464C5 4.9167 8.13401 2 12 2C15.866 2 19 4.9167 19 8.51464C19 12.0844 16.7658 16.2499 13.2801 17.7396C12.4675 18.0868 11.5325 18.0868 10.7199 17.7396C7.23416 16.2499 5 12.0844 5 8.51464ZM12 11C13.1046 11 14 10.1046 14 9C14 7.89543 13.1046 7 12 7C10.8954 7 10 7.89543 10 9C10 10.1046 10.8954 11 12 11Z"
                                                        fill="currentColor"
                                                    />
                                                </svg>

                                                <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Contacts</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="menu nav-item">
                                        <button
                                            type="button"
                                            class="nav-link group"
                                            :class="{'active' : activeDropdown === 'invoice'}"
                                            @click="activeDropdown === 'invoice' ? activeDropdown = null : activeDropdown = 'invoice'"
                                        >
                                            <div class="flex items-center">
                                                <svg
                                                    class="group-hover:!text-primary"
                                                    width="20"
                                                    height="20"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        opacity="0.5"
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                                        fill="currentColor"
                                                    />
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M12 5.25C12.4142 5.25 12.75 5.58579 12.75 6V6.31673C14.3804 6.60867 15.75 7.83361 15.75 9.5C15.75 9.91421 15.4142 10.25 15 10.25C14.5858 10.25 14.25 9.91421 14.25 9.5C14.25 8.82154 13.6859 8.10339 12.75 7.84748V11.3167C14.3804 11.6087 15.75 12.8336 15.75 14.5C15.75 16.1664 14.3804 17.3913 12.75 17.6833V18C12.75 18.4142 12.4142 18.75 12 18.75C11.5858 18.75 11.25 18.4142 11.25 18V17.6833C9.61957 17.3913 8.25 16.1664 8.25 14.5C8.25 14.0858 8.58579 13.75 9 13.75C9.41421 13.75 9.75 14.0858 9.75 14.5C9.75 15.1785 10.3141 15.8966 11.25 16.1525V12.6833C9.61957 12.3913 8.25 11.1664 8.25 9.5C8.25 7.83361 9.61957 6.60867 11.25 6.31673V6C11.25 5.58579 11.5858 5.25 12 5.25ZM11.25 7.84748C10.3141 8.10339 9.75 8.82154 9.75 9.5C9.75 10.1785 10.3141 10.8966 11.25 11.1525V7.84748ZM14.25 14.5C14.25 13.8215 13.6859 13.1034 12.75 12.8475V16.1525C13.6859 15.8966 14.25 15.1785 14.25 14.5Z"
                                                        fill="currentColor"
                                                    />
                                                </svg>
                                                <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Invoice</span>
                                            </div>
                                            <div class="rtl:rotate-180" :class="{'!rotate-90' : activeDropdown === 'invoice'}">
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9 5L15 12L9 19"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    />
                                                </svg>
                                            </div>
                                        </button>
                                        <ul x-cloak x-show="activeDropdown === 'invoice'" x-collapse class="sub-menu text-gray-500">
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
                                    <li class="nav-item">
                                        <a href="apps-calendar.html" class="group">
                                            <div class="flex items-center">
                                                <svg
                                                    class="group-hover:!text-primary"
                                                    width="20"
                                                    height="20"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        d="M6.94028 2C7.35614 2 7.69326 2.32421 7.69326 2.72414V4.18487C8.36117 4.17241 9.10983 4.17241 9.95219 4.17241H13.9681C14.8104 4.17241 15.5591 4.17241 16.227 4.18487V2.72414C16.227 2.32421 16.5641 2 16.98 2C17.3958 2 17.733 2.32421 17.733 2.72414V4.24894C19.178 4.36022 20.1267 4.63333 20.8236 5.30359C21.5206 5.97385 21.8046 6.88616 21.9203 8.27586L22 9H2.92456H2V8.27586C2.11571 6.88616 2.3997 5.97385 3.09665 5.30359C3.79361 4.63333 4.74226 4.36022 6.1873 4.24894V2.72414C6.1873 2.32421 6.52442 2 6.94028 2Z"
                                                        fill="currentColor"
                                                    />
                                                    <path
                                                        opacity="0.5"
                                                        d="M21.9995 14.0001V12.0001C21.9995 11.161 21.9963 9.66527 21.9834 9H2.00917C1.99626 9.66527 1.99953 11.161 1.99953 12.0001V14.0001C1.99953 17.7713 1.99953 19.6569 3.1711 20.8285C4.34267 22.0001 6.22829 22.0001 9.99953 22.0001H13.9995C17.7708 22.0001 19.6564 22.0001 20.828 20.8285C21.9995 19.6569 21.9995 17.7713 21.9995 14.0001Z"
                                                        fill="currentColor"
                                                    />
                                                </svg>
                                                <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Calendar</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <h2 class="-mx-4 mb-1 flex items-center bg-white-light/30 py-3 px-7 font-extrabold uppercase dark:bg-dark dark:bg-opacity-[0.08]">
                                <svg
                                    class="hidden h-5 w-4 flex-none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                                <span>USER INTERFACE</span>
                            </h2>

                            <li class="menu nav-item">
                                <button
                                    type="button"
                                    class="nav-link group"
                                    :class="{'active' : activeDropdown === 'components'}"
                                    @click="activeDropdown === 'components' ? activeDropdown = null : activeDropdown = 'components'"
                                >
                                    <div class="flex items-center">
                                        <svg
                                            class="group-hover:!text-primary"
                                            width="20"
                                            height="20"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M8.42229 20.6181C10.1779 21.5395 11.0557 22.0001 12 22.0001V12.0001L2.63802 7.07275C2.62423 7.09491 2.6107 7.11727 2.5974 7.13986C2 8.15436 2 9.41678 2 11.9416V12.0586C2 14.5834 2 15.8459 2.5974 16.8604C3.19479 17.8749 4.27063 18.4395 6.42229 19.5686L8.42229 20.6181Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                opacity="0.7"
                                                d="M17.5774 4.43152L15.5774 3.38197C13.8218 2.46066 12.944 2 11.9997 2C11.0554 2 10.1776 2.46066 8.42197 3.38197L6.42197 4.43152C4.31821 5.53552 3.24291 6.09982 2.6377 7.07264L11.9997 12L21.3617 7.07264C20.7564 6.09982 19.6811 5.53552 17.5774 4.43152Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                opacity="0.5"
                                                d="M21.4026 7.13986C21.3893 7.11727 21.3758 7.09491 21.362 7.07275L12 12.0001V22.0001C12.9443 22.0001 13.8221 21.5395 15.5777 20.6181L17.5777 19.5686C19.7294 18.4395 20.8052 17.8749 21.4026 16.8604C22 15.8459 22 14.5834 22 12.0586V11.9416C22 9.41678 22 8.15436 21.4026 7.13986Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                        <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Jurnal</span>
                                    </div>
                                    <div class="rtl:rotate-180" :class="{'!rotate-90' : activeDropdown === 'components'}">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </button>

                            </li>

                            <li class="menu nav-item">
                                <button
                                    type="button"
                                    class="nav-link group"
                                    :class="{'active' : activeDropdown === 'elements'}"
                                    @click="activeDropdown === 'elements' ? activeDropdown = null : activeDropdown = 'elements'"
                                >
                                    <div class="flex items-center">
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="group-hover:!text-primary"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M8.73167 5.77133L5.66953 9.91436C4.3848 11.6526 3.74244 12.5217 4.09639 13.205C4.10225 13.2164 4.10829 13.2276 4.1145 13.2387C4.48945 13.9117 5.59888 13.9117 7.81775 13.9117C9.05079 13.9117 9.6673 13.9117 10.054 14.2754L10.074 14.2946L13.946 9.72466L13.926 9.70541C13.5474 9.33386 13.5474 8.74151 13.5474 7.55682V7.24712C13.5474 3.96249 13.5474 2.32018 12.6241 2.03721C11.7007 1.75425 10.711 3.09327 8.73167 5.77133Z"
                                                fill="currentColor"
                                            ></path>
                                            <path
                                                opacity="0.5"
                                                d="M10.4527 16.4432L10.4527 16.7528C10.4527 20.0374 10.4527 21.6798 11.376 21.9627C12.2994 22.2457 13.2891 20.9067 15.2685 18.2286L18.3306 14.0856C19.6154 12.3474 20.2577 11.4783 19.9038 10.7949C19.8979 10.7836 19.8919 10.7724 19.8857 10.7613C19.5107 10.0883 18.4013 10.0883 16.1824 10.0883C14.9494 10.0883 14.3329 10.0883 13.9462 9.72461L10.0742 14.2946C10.4528 14.6661 10.4527 15.2585 10.4527 16.4432Z"
                                                fill="currentColor"
                                            ></path>
                                        </svg>
                                        <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Elements</span>
                                    </div>
                                    <div class="rtl:rotate-180" :class="{'!rotate-90' : activeDropdown === 'elements'}">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </button>
                                <ul x-cloak x-show="activeDropdown === 'elements'" x-collapse class="sub-menu text-gray-500">
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

                            <li class="menu nav-item">
                                <a href="charts.html" class="nav-link group">
                                    <div class="flex items-center">
                                        <svg
                                            class="group-hover:!text-primary"
                                            width="20"
                                            height="20"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                opacity="0.5"
                                                d="M6.22209 4.60105C6.66665 4.304 7.13344 4.04636 7.6171 3.82976C8.98898 3.21539 9.67491 2.9082 10.5875 3.4994C11.5 4.09061 11.5 5.06041 11.5 7.00001V8.50001C11.5 10.3856 11.5 11.3284 12.0858 11.9142C12.6716 12.5 13.6144 12.5 15.5 12.5H17C18.9396 12.5 19.9094 12.5 20.5006 13.4125C21.0918 14.3251 20.7846 15.011 20.1702 16.3829C19.9536 16.8666 19.696 17.3334 19.399 17.7779C18.3551 19.3402 16.8714 20.5578 15.1355 21.2769C13.3996 21.9959 11.4895 22.184 9.64665 21.8175C7.80383 21.4509 6.11109 20.5461 4.78249 19.2175C3.45389 17.8889 2.5491 16.1962 2.18254 14.3534C1.81598 12.5105 2.00412 10.6004 2.72315 8.86451C3.44218 7.12861 4.65982 5.64492 6.22209 4.60105Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M21.446 7.06901C20.6342 5.00831 18.9917 3.36579 16.931 2.55398C15.3895 1.94669 14 3.34316 14 5.00002V9.00002C14 9.5523 14.4477 10 15 10H19C20.6569 10 22.0533 8.61055 21.446 7.06901Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                        <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Charts</span>
                                    </div>
                                </a>
                            </li>

                            <li class="menu nav-item">
                                <a href="widgets.html" class="nav-link group">
                                    <div class="flex items-center">
                                        <svg
                                            class="group-hover:!text-primary"
                                            width="20"
                                            height="20"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                opacity="0.5"
                                                d="M13 15.4C13 13.3258 13 12.2887 13.659 11.6444C14.318 11 15.3787 11 17.5 11C19.6213 11 20.682 11 21.341 11.6444C22 12.2887 22 13.3258 22 15.4V17.6C22 19.6742 22 20.7113 21.341 21.3556C20.682 22 19.6213 22 17.5 22C15.3787 22 14.318 22 13.659 21.3556C13 20.7113 13 19.6742 13 17.6V15.4Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M2 8.6C2 10.6742 2 11.7113 2.65901 12.3556C3.31802 13 4.37868 13 6.5 13C8.62132 13 9.68198 13 10.341 12.3556C11 11.7113 11 10.6742 11 8.6V6.4C11 4.32582 11 3.28873 10.341 2.64437C9.68198 2 8.62132 2 6.5 2C4.37868 2 3.31802 2 2.65901 2.64437C2 3.28873 2 4.32582 2 6.4V8.6Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M13 5.5C13 4.4128 13 3.8692 13.1713 3.44041C13.3996 2.86867 13.8376 2.41443 14.389 2.17761C14.8024 2 15.3266 2 16.375 2H18.625C19.6734 2 20.1976 2 20.611 2.17761C21.1624 2.41443 21.6004 2.86867 21.8287 3.44041C22 3.8692 22 4.4128 22 5.5C22 6.5872 22 7.1308 21.8287 7.55959C21.6004 8.13133 21.1624 8.58557 20.611 8.82239C20.1976 9 19.6734 9 18.625 9H16.375C15.3266 9 14.8024 9 14.389 8.82239C13.8376 8.58557 13.3996 8.13133 13.1713 7.55959C13 7.1308 13 6.5872 13 5.5Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                opacity="0.5"
                                                d="M2 18.5C2 19.5872 2 20.1308 2.17127 20.5596C2.39963 21.1313 2.83765 21.5856 3.38896 21.8224C3.80245 22 4.32663 22 5.375 22H7.625C8.67337 22 9.19755 22 9.61104 21.8224C10.1624 21.5856 10.6004 21.1313 10.8287 20.5596C11 20.1308 11 19.5872 11 18.5C11 17.4128 11 16.8692 10.8287 16.4404C10.6004 15.8687 10.1624 15.4144 9.61104 15.1776C9.19755 15 8.67337 15 7.625 15H5.375C4.32663 15 3.80245 15 3.38896 15.1776C2.83765 15.4144 2.39963 15.8687 2.17127 16.4404C2 16.8692 2 17.4128 2 18.5Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                        <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Widgets</span>
                                    </div>
                                </a>
                            </li>

                            <li class="menu nav-item">
                                <a href="font-icons.html" class="nav-link group">
                                    <div class="flex items-center">
                                        <svg
                                            class="group-hover:!text-primary"
                                            width="20"
                                            height="20"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                opacity="0.5"
                                                d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M12 6.75C9.1005 6.75 6.75 9.1005 6.75 12C6.75 14.8995 9.1005 17.25 12 17.25C12.4142 17.25 12.75 17.5858 12.75 18C12.75 18.4142 12.4142 18.75 12 18.75C8.27208 18.75 5.25 15.7279 5.25 12C5.25 8.27208 8.27208 5.25 12 5.25C15.7279 5.25 18.75 8.27208 18.75 12C18.75 12.8103 18.6069 13.5889 18.3439 14.3108C18.211 14.6756 17.9855 14.9732 17.7354 15.204L17.6548 15.2783C16.8451 16.0252 15.6294 16.121 14.7127 15.5099C14.3431 15.2635 14.0557 14.9233 13.8735 14.5325C13.3499 14.9205 12.7017 15.15 12 15.15C10.2603 15.15 8.85 13.7397 8.85 12C8.85 10.2603 10.2603 8.85 12 8.85C13.7397 8.85 15.15 10.2603 15.15 12V13.5241C15.15 13.8206 15.2981 14.0974 15.5448 14.2618C15.8853 14.4888 16.3369 14.4533 16.6377 14.1758L16.7183 14.1015C16.8295 13.9989 16.8991 13.8944 16.9345 13.7973C17.1384 13.2376 17.25 12.6327 17.25 12C17.25 9.1005 14.8995 6.75 12 6.75ZM12 10.35C12.9113 10.35 13.65 11.0887 13.65 12C13.65 12.9113 12.9113 13.65 12 13.65C11.0887 13.65 10.35 12.9113 10.35 12C10.35 11.0887 11.0887 10.35 12 10.35Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                        <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Font Icons</span>
                                    </div>
                                </a>
                            </li>

                            <li class="menu nav-item">
                                <a href="dragndrop.html" class="nav-link group">
                                    <div class="flex items-center">
                                        <svg
                                            class="group-hover:!text-primary"
                                            width="20"
                                            height="20"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                opacity="0.5"
                                                d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M13.25 7C13.25 7.41421 13.5858 7.75 14 7.75H15.1893L12.9697 9.96967C12.6768 10.2626 12.6768 10.7374 12.9697 11.0303C13.2626 11.3232 13.7374 11.3232 14.0303 11.0303L16.25 8.81066V10C16.25 10.4142 16.5858 10.75 17 10.75C17.4142 10.75 17.75 10.4142 17.75 10V7C17.75 6.58579 17.4142 6.25 17 6.25H14C13.5858 6.25 13.25 6.58579 13.25 7Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M11.0303 14.0303C11.3232 13.7374 11.3232 13.2626 11.0303 12.9697C10.7374 12.6768 10.2626 12.6768 9.96967 12.9697L7.75 15.1893V14C7.75 13.5858 7.41421 13.25 7 13.25C6.58579 13.25 6.25 13.5858 6.25 14V17C6.25 17.4142 6.58579 17.75 7 17.75H10C10.4142 17.75 10.75 17.4142 10.75 17C10.75 16.5858 10.4142 16.25 10 16.25H8.81066L11.0303 14.0303Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M10.75 7C10.75 7.41421 10.4142 7.75 10 7.75H8.81066L11.0303 9.96967C11.3232 10.2626 11.3232 10.7374 11.0303 11.0303C10.7374 11.3232 10.2626 11.3232 9.96967 11.0303L7.75 8.81066V10C7.75 10.4142 7.41421 10.75 7 10.75C6.58579 10.75 6.25 10.4142 6.25 10V7C6.25 6.58579 6.58579 6.25 7 6.25H10C10.4142 6.25 10.75 6.58579 10.75 7Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M12.9697 14.0303C12.6768 13.7374 12.6768 13.2626 12.9697 12.9697C13.2626 12.6768 13.7374 12.6768 14.0303 12.9697L16.25 15.1893V14C16.25 13.5858 16.5858 13.25 17 13.25C17.4142 13.25 17.75 13.5858 17.75 14V17C17.75 17.4142 17.4142 17.75 17 17.75H14C13.5858 17.75 13.25 17.4142 13.25 17C13.25 16.5858 13.5858 16.25 14 16.25H15.1893L12.9697 14.0303Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                        <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Drag and Drop</span>
                                    </div>
                                </a>
                            </li>

                            <h2 class="-mx-4 mb-1 flex items-center bg-white-light/30 py-3 px-7 font-extrabold uppercase dark:bg-dark dark:bg-opacity-[0.08]">
                                <svg
                                    class="hidden h-5 w-4 flex-none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                                <span>TABLES AND FORMS</span>
                            </h2>

                            <li class="menu nav-item">
                                <a href="tables.html" class="nav-link group">
                                    <div class="flex items-center">
                                        <svg
                                            class="group-hover:!text-primary"
                                            width="20"
                                            height="20"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                opacity="0.5"
                                                d="M12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M18.75 8C18.75 8.41421 18.4142 8.75 18 8.75H6C5.58579 8.75 5.25 8.41421 5.25 8C5.25 7.58579 5.58579 7.25 6 7.25H18C18.4142 7.25 18.75 7.58579 18.75 8Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M18.75 12C18.75 12.4142 18.4142 12.75 18 12.75H6C5.58579 12.75 5.25 12.4142 5.25 12C5.25 11.5858 5.58579 11.25 6 11.25H18C18.4142 11.25 18.75 11.5858 18.75 12Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M18.75 16C18.75 16.4142 18.4142 16.75 18 16.75H6C5.58579 16.75 5.25 16.4142 5.25 16C5.25 15.5858 5.58579 15.25 6 15.25H18C18.4142 15.25 18.75 15.5858 18.75 16Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                        <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Tables</span>
                                    </div>
                                </a>
                            </li>

                            <li class="menu nav-item">
                                <button
                                    type="button"
                                    class="nav-link group"
                                    :class=" {'active' : activeDropdown==='datatables' }"
                                    @click="activeDropdown === 'datatables' ? activeDropdown = null : activeDropdown = 'datatables'"
                                >
                                    <div class="flex items-center">
                                        <svg
                                            class="group-hover:!text-primary"
                                            width="20"
                                            height="20"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M4.97883 9.68508C2.99294 8.89073 2 8.49355 2 8C2 7.50645 2.99294 7.10927 4.97883 6.31492L7.7873 5.19153C9.77318 4.39718 10.7661 4 12 4C13.2339 4 14.2268 4.39718 16.2127 5.19153L19.0212 6.31492C21.0071 7.10927 22 7.50645 22 8C22 8.49355 21.0071 8.89073 19.0212 9.68508L16.2127 10.8085C14.2268 11.6028 13.2339 12 12 12C10.7661 12 9.77318 11.6028 7.7873 10.8085L4.97883 9.68508Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M2 8C2 8.49355 2.99294 8.89073 4.97883 9.68508L7.7873 10.8085C9.77318 11.6028 10.7661 12 12 12C13.2339 12 14.2268 11.6028 16.2127 10.8085L19.0212 9.68508C21.0071 8.89073 22 8.49355 22 8C22 7.50645 21.0071 7.10927 19.0212 6.31492L16.2127 5.19153C14.2268 4.39718 13.2339 4 12 4C10.7661 4 9.77318 4.39718 7.7873 5.19153L4.97883 6.31492C2.99294 7.10927 2 7.50645 2 8Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                opacity="0.7"
                                                d="M5.76613 10L4.97883 10.3149C2.99294 11.1093 2 11.5065 2 12C2 12.4935 2.99294 12.8907 4.97883 13.6851L7.7873 14.8085C9.77318 15.6028 10.7661 16 12 16C13.2339 16 14.2268 15.6028 16.2127 14.8085L19.0212 13.6851C21.0071 12.8907 22 12.4935 22 12C22 11.5065 21.0071 11.1093 19.0212 10.3149L18.2339 10L16.2127 10.8085C14.2268 11.6028 13.2339 12 12 12C10.7661 12 9.77318 11.6028 7.7873 10.8085L5.76613 10Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                opacity="0.4"
                                                d="M5.76613 14L4.97883 14.3149C2.99294 15.1093 2 15.5065 2 16C2 16.4935 2.99294 16.8907 4.97883 17.6851L7.7873 18.8085C9.77318 19.6028 10.7661 20 12 20C13.2339 20 14.2268 19.6028 16.2127 18.8085L19.0212 17.6851C21.0071 16.8907 22 16.4935 22 16C22 15.5065 21.0071 15.1093 19.0212 14.3149L18.2339 14L16.2127 14.8085C14.2268 15.6028 13.2339 16 12 16C10.7661 16 9.77318 15.6028 7.7873 14.8085L5.76613 14Z"
                                                fill="currentColor"
                                            />
                                        </svg>

                                        <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Data Tables</span>
                                    </div>
                                    <div class="rtl:rotate-180" :class="{'!rotate-90' : activeDropdown === 'datatables'}">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </button>
                                <ul x-cloak x-show="activeDropdown === 'datatables'" x-collapse class="sub-menu text-gray-500">
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

                            <li class="menu nav-item">
                                <button
                                    type="button"
                                    class="nav-link group"
                                    :class="{'active' : activeDropdown === 'forms'}"
                                    @click="activeDropdown === 'forms' ? activeDropdown = null : activeDropdown = 'forms'"
                                >
                                    <div class="flex items-center">
                                        <svg
                                            class="group-hover:!text-primary"
                                            width="20"
                                            height="20"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                opacity="0.5"
                                                d="M3 10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H13C16.7712 2 18.6569 2 19.8284 3.17157C21 4.34315 21 6.22876 21 10V14C21 17.7712 21 19.6569 19.8284 20.8284C18.6569 22 16.7712 22 13 22H11C7.22876 22 5.34315 22 4.17157 20.8284C3 19.6569 3 17.7712 3 14V10Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M16.5189 16.5013C16.6939 16.3648 16.8526 16.2061 17.1701 15.8886L21.1275 11.9312C21.2231 11.8356 21.1793 11.6708 21.0515 11.6264C20.5844 11.4644 19.9767 11.1601 19.4083 10.5917C18.8399 10.0233 18.5356 9.41561 18.3736 8.94849C18.3292 8.82066 18.1644 8.77687 18.0688 8.87254L14.1114 12.8299C13.7939 13.1474 13.6352 13.3061 13.4987 13.4811C13.3377 13.6876 13.1996 13.9109 13.087 14.1473C12.9915 14.3476 12.9205 14.5606 12.7786 14.9865L12.5951 15.5368L12.3034 16.4118L12.0299 17.2323C11.9601 17.4419 12.0146 17.6729 12.1708 17.8292C12.3271 17.9854 12.5581 18.0399 12.7677 17.9701L13.5882 17.6966L14.4632 17.4049L15.0135 17.2214L15.0136 17.2214C15.4394 17.0795 15.6524 17.0085 15.8527 16.913C16.0891 16.8004 16.3124 16.6623 16.5189 16.5013Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M22.3665 10.6922C23.2112 9.84754 23.2112 8.47812 22.3665 7.63348C21.5219 6.78884 20.1525 6.78884 19.3078 7.63348L19.1806 7.76071C19.0578 7.88348 19.0022 8.05496 19.0329 8.22586C19.0522 8.33336 19.0879 8.49053 19.153 8.67807C19.2831 9.05314 19.5288 9.54549 19.9917 10.0083C20.4545 10.4712 20.9469 10.7169 21.3219 10.847C21.5095 10.9121 21.6666 10.9478 21.7741 10.9671C21.945 10.9978 22.1165 10.9422 22.2393 10.8194L22.3665 10.6922Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M7.25 9C7.25 8.58579 7.58579 8.25 8 8.25H14.5C14.9142 8.25 15.25 8.58579 15.25 9C15.25 9.41421 14.9142 9.75 14.5 9.75H8C7.58579 9.75 7.25 9.41421 7.25 9ZM7.25 13C7.25 12.5858 7.58579 12.25 8 12.25H11C11.4142 12.25 11.75 12.5858 11.75 13C11.75 13.4142 11.4142 13.75 11 13.75H8C7.58579 13.75 7.25 13.4142 7.25 13ZM7.25 17C7.25 16.5858 7.58579 16.25 8 16.25H9.5C9.91421 16.25 10.25 16.5858 10.25 17C10.25 17.4142 9.91421 17.75 9.5 17.75H8C7.58579 17.75 7.25 17.4142 7.25 17Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                        <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Forms</span>
                                    </div>
                                    <div class="rtl:rotate-180" :class="{'!rotate-90' : activeDropdown === 'forms'}">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </button>
                                <ul x-cloak x-show="activeDropdown === 'forms'" x-collapse class="sub-menu text-gray-500">
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

                            <h2 class="-mx-4 mb-1 flex items-center bg-white-light/30 py-3 px-7 font-extrabold uppercase dark:bg-dark dark:bg-opacity-[0.08]">
                                <svg
                                    class="hidden h-5 w-4 flex-none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                                <span>USER AND PAGES</span>
                            </h2>

                            <li class="menu nav-item">
                                <button
                                    type="button"
                                    class="nav-link group"
                                    :class="{'active' : activeDropdown === 'users'}"
                                    @click="activeDropdown === 'users' ? activeDropdown = null : activeDropdown = 'users'"
                                >
                                    <div class="flex items-center">
                                        <svg
                                            class="group-hover:!text-primary"
                                            width="20"
                                            height="20"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <circle opacity="0.5" cx="15" cy="6" r="3" fill="currentColor" />
                                            <ellipse opacity="0.5" cx="16" cy="17" rx="5" ry="3" fill="currentColor" />
                                            <circle cx="9.00098" cy="6" r="4" fill="currentColor" />
                                            <ellipse cx="9.00098" cy="17.001" rx="7" ry="4" fill="currentColor" />
                                        </svg>
                                        <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Users</span>
                                    </div>
                                    <div class="rtl:rotate-180" :class="{'!rotate-90' : activeDropdown === 'users'}">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </button>
                                <ul x-cloak x-show="activeDropdown === 'users'" x-collapse class="sub-menu text-gray-500">
                                    <li>
                                        <a href="users-profile.html">Profile</a>
                                    </li>
                                    <li>
                                        <a href="users-account-settings.html">Account Settings</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu nav-item">
                                <button
                                    type="button"
                                    class="nav-link group"
                                    :class="{'active' : activeDropdown === 'pages'}"
                                    @click="activeDropdown === 'pages' ? activeDropdown = null : activeDropdown = 'pages'"
                                >
                                    <div class="flex items-center">
                                        <svg
                                            class="group-hover:!text-primary"
                                            width="20"
                                            height="20"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                opacity="0.5"
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V10C2 6.22876 2 4.34315 3.17157 3.17157C4.34315 2 6.23869 2 10.0298 2C10.6358 2 11.1214 2 11.53 2.01666C11.5166 2.09659 11.5095 2.17813 11.5092 2.26057L11.5 5.09497C11.4999 6.19207 11.4998 7.16164 11.6049 7.94316C11.7188 8.79028 11.9803 9.63726 12.6716 10.3285C13.3628 11.0198 14.2098 11.2813 15.0569 11.3952C15.8385 11.5003 16.808 11.5002 17.9051 11.5001L18 11.5001H21.9574C22 12.0344 22 12.6901 22 13.5629V14C22 17.7712 22 19.6569 20.8284 20.8284C19.6569 22 17.7712 22 14 22Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M6 13.75C5.58579 13.75 5.25 14.0858 5.25 14.5C5.25 14.9142 5.58579 15.25 6 15.25H14C14.4142 15.25 14.75 14.9142 14.75 14.5C14.75 14.0858 14.4142 13.75 14 13.75H6Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M6 17.25C5.58579 17.25 5.25 17.5858 5.25 18C5.25 18.4142 5.58579 18.75 6 18.75H11.5C11.9142 18.75 12.25 18.4142 12.25 18C12.25 17.5858 11.9142 17.25 11.5 17.25H6Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M11.5092 2.2601L11.5 5.0945C11.4999 6.1916 11.4998 7.16117 11.6049 7.94269C11.7188 8.78981 11.9803 9.6368 12.6716 10.3281C13.3629 11.0193 14.2098 11.2808 15.057 11.3947C15.8385 11.4998 16.808 11.4997 17.9051 11.4996L21.9574 11.4996C21.9698 11.6552 21.9786 11.821 21.9848 11.9995H22C22 11.732 22 11.5983 21.9901 11.4408C21.9335 10.5463 21.5617 9.52125 21.0315 8.79853C20.9382 8.6713 20.8743 8.59493 20.7467 8.44218C19.9542 7.49359 18.911 6.31193 18 5.49953C17.1892 4.77645 16.0787 3.98536 15.1101 3.3385C14.2781 2.78275 13.862 2.50487 13.2915 2.29834C13.1403 2.24359 12.9408 2.18311 12.7846 2.14466C12.4006 2.05013 12.0268 2.01725 11.5 2.00586L11.5092 2.2601Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                        <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Pages</span>
                                    </div>
                                    <div class="rtl:rotate-180" :class="{'!rotate-90' : activeDropdown === 'pages'}">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </button>
                                <ul x-cloak x-show="activeDropdown === 'pages'" x-collapse class="sub-menu text-gray-500">
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
                                    <li x-data="{subActive:null}">
                                        <button
                                            type="button"
                                            class="before:h-[5px] before:w-[5px] before:rounded before:bg-gray-300 hover:bg-gray-100 ltr:before:mr-2 rtl:before:ml-2 dark:text-[#888ea8] dark:hover:bg-gray-900"
                                            @click="subActive === 'error' ? subActive = null : subActive = 'error'"
                                        >
                                            Error
                                            <div class="ltr:ml-auto rtl:mr-auto rtl:rotate-180" :class="{'!rotate-90' : subActive === 'error'}">
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        opacity="0.5"
                                                        d="M6.25 19C6.25 19.3139 6.44543 19.5946 6.73979 19.7035C7.03415 19.8123 7.36519 19.7264 7.56944 19.4881L13.5694 12.4881C13.8102 12.2073 13.8102 11.7928 13.5694 11.5119L7.56944 4.51194C7.36519 4.27364 7.03415 4.18773 6.73979 4.29662C6.44543 4.40551 6.25 4.68618 6.25 5.00004L6.25 19Z"
                                                        fill="currentColor"
                                                    />
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M10.5119 19.5695C10.1974 19.2999 10.161 18.8264 10.4306 18.5119L16.0122 12L10.4306 5.48811C10.161 5.17361 10.1974 4.70014 10.5119 4.43057C10.8264 4.161 11.2999 4.19743 11.5695 4.51192L17.5695 11.5119C17.8102 11.7928 17.8102 12.2072 17.5695 12.4881L11.5695 19.4881C11.2999 19.8026 10.8264 19.839 10.5119 19.5695Z"
                                                        fill="currentColor"
                                                    />
                                                </svg>
                                            </div>
                                        </button>
                                        <ul class="sub-menu text-gray-500 ltr:ml-2 rtl:mr-2" x-show="subActive === 'error'" x-collapse>
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
                                    <li>
                                        <a href="pages-maintenence.html" target="_blank">Maintanence</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu nav-item">
                                <button
                                    type="button"
                                    class="nav-link group"
                                    :class="{'active' : activeDropdown === 'authentication'}"
                                    @click="activeDropdown === 'authentication' ? activeDropdown = null : activeDropdown = 'authentication'"
                                >
                                    <div class="flex items-center">
                                        <svg
                                            class="group-hover:!text-primary"
                                            width="20"
                                            height="20"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                opacity="0.5"
                                                d="M2 16C2 13.1716 2 11.7574 2.87868 10.8787C3.75736 10 5.17157 10 8 10H16C18.8284 10 20.2426 10 21.1213 10.8787C22 11.7574 22 13.1716 22 16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H8C5.17157 22 3.75736 22 2.87868 21.1213C2 20.2426 2 18.8284 2 16Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M8 17C8.55228 17 9 16.5523 9 16C9 15.4477 8.55228 15 8 15C7.44772 15 7 15.4477 7 16C7 16.5523 7.44772 17 8 17Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M17 16C17 16.5523 16.5523 17 16 17C15.4477 17 15 16.5523 15 16C15 15.4477 15.4477 15 16 15C16.5523 15 17 15.4477 17 16Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M6.75 8C6.75 5.10051 9.10051 2.75 12 2.75C14.8995 2.75 17.25 5.10051 17.25 8V10.0036C17.8174 10.0089 18.3135 10.022 18.75 10.0546V8C18.75 4.27208 15.7279 1.25 12 1.25C8.27208 1.25 5.25 4.27208 5.25 8V10.0546C5.68651 10.022 6.18264 10.0089 6.75 10.0036V8Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                        <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Authentication</span>
                                    </div>
                                    <div class="rtl:rotate-180" :class="{'!rotate-90' : activeDropdown === 'authentication'}">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </button>
                                <ul x-cloak x-show="activeDropdown === 'authentication'" x-collapse class="sub-menu text-gray-500">
                                    <li>
                                        <a href="auth-boxed-signin.html" target="_blank">Login Boxed</a>
                                    </li>
                                    <li>
                                        <a href="auth-boxed-signup.html" target="_blank">Register Boxed</a>
                                    </li>
                                    <li>
                                        <a href="auth-boxed-lockscreen.html" target="_blank">Unlock Boxed</a>
                                    </li>
                                    <li>
                                        <a href="auth-boxed-password-reset.html" target="_blank">Recover ID Boxed</a>
                                    </li>
                                    <li>
                                        <a href="auth-cover-login.html" target="_blank">Login Cover</a>
                                    </li>
                                    <li>
                                        <a href="auth-cover-register.html" target="_blank">Register Cover</a>
                                    </li>
                                    <li>
                                        <a href="auth-cover-lockscreen.html" target="_blank">Unlock Cover</a>
                                    </li>
                                    <li>
                                        <a href="auth-cover-password-reset.html" target="_blank">Recover ID Cover</a>
                                    </li>
                                </ul>
                            </li>

                            <h2 class="-mx-4 mb-1 flex items-center bg-white-light/30 py-3 px-7 font-extrabold uppercase dark:bg-dark dark:bg-opacity-[0.08]">
                                <svg
                                    class="hidden h-5 w-4 flex-none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                                <span>SUPPORTS</span>
                            </h2>

                            <li class="menu nav-item">
                                <a href="https://vristo.sbthemes.com/" target="_blank" class="nav-link group">
                                    <div class="flex items-center">
                                        <svg
                                            class="group-hover:!text-primary"
                                            width="20"
                                            height="20"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M4 4.69434V18.6943C4 20.3512 5.34315 21.6943 7 21.6943H17C18.6569 21.6943 20 20.3512 20 18.6943V8.69434C20 7.03748 18.6569 5.69434 17 5.69434H5C4.44772 5.69434 4 5.24662 4 4.69434ZM7.25 11.6943C7.25 11.2801 7.58579 10.9443 8 10.9443H16C16.4142 10.9443 16.75 11.2801 16.75 11.6943C16.75 12.1085 16.4142 12.4443 16 12.4443H8C7.58579 12.4443 7.25 12.1085 7.25 11.6943ZM7.25 15.1943C7.25 14.7801 7.58579 14.4443 8 14.4443H13.5C13.9142 14.4443 14.25 14.7801 14.25 15.1943C14.25 15.6085 13.9142 15.9443 13.5 15.9443H8C7.58579 15.9443 7.25 15.6085 7.25 15.1943Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                opacity="0.5"
                                                d="M18 4.00038V5.86504C17.6872 5.75449 17.3506 5.69434 17 5.69434H5C4.44772 5.69434 4 5.24662 4 4.69434V4.62329C4 4.09027 4.39193 3.63837 4.91959 3.56299L15.7172 2.02048C16.922 1.84835 18 2.78328 18 4.00038Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                        <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Documentation</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- end sidebar section -->

            <div class="main-content">
                <!-- start header section -->
                <header :class="{'dark' : $store.app.semidark && $store.app.menu === 'horizontal'}">
                    <div class="shadow-sm">
                        <div class="relative flex w-full items-center bg-white px-5 py-2.5 dark:bg-[#0e1726]">
                            <div class="horizontal-logo flex items-center justify-between ltr:mr-2 rtl:ml-2 lg:hidden">
                                <a href="index-2.html" class="main-logo flex shrink-0 items-center">
                                    <img class="inline w-20
                                     ltr:-ml-1 rtl:-mr-1" src="assets_guru/images/LOGO HUMMASOFT 2.png" alt="image" />
                                </a>

                                <a
                                    href="javascript:;"
                                    class="collapse-icon flex flex-none rounded-full bg-white-light/40 p-2 hover:bg-white-light/90 hover:text-primary ltr:ml-2 rtl:mr-2 dark:bg-dark/40 dark:text-[#d0d2d6] dark:hover:bg-dark/60 dark:hover:text-primary lg:hidden"
                                    @click="$store.app.toggleSidebar()"
                                >
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 7L4 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        <path opacity="0.5" d="M20 12L4 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        <path d="M20 17L4 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </a>
                            </div>
                            <div
                                x-data="header"
                                class="flex items-center space-x-1.5 ltr:ml-auto rtl:mr-auto rtl:space-x-reverse dark:text-[#d0d2d6] sm:flex-1 ltr:sm:ml-0 sm:rtl:mr-0 lg:space-x-2"
                            >
                                <div class="sm:ltr:mr-auto sm:rtl:ml-auto" x-data="{ search: false }" @click.outside="search = false">
                                    <form
                                        class="absolute inset-x-0 top-1/2 z-10 mx-4 hidden -translate-y-1/2 sm:relative sm:top-0 sm:mx-0 sm:block sm:translate-y-0"
                                        :class="{'!block' : search}"
                                        @submit.prevent="search = false"
                                    >
                                        <div class="relative">
                                            <input
                                                type="text"
                                                class="peer form-input bg-gray-100 placeholder:tracking-widest ltr:pl-9 ltr:pr-9 rtl:pr-9 rtl:pl-9 sm:bg-transparent ltr:sm:pr-4 rtl:sm:pl-4"
                                                placeholder="Search..."
                                            />
                                            <button
                                                type="button"
                                                class="absolute inset-0 h-9 w-9 appearance-none peer-focus:text-primary ltr:right-auto rtl:left-auto"
                                            >
                                                <svg class="mx-auto" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="11.5" cy="11.5" r="9.5" stroke="currentColor" stroke-width="1.5" opacity="0.5" />
                                                    <path d="M18.5 18.5L22 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                </svg>
                                            </button>
                                            <button
                                                type="button"
                                                class="absolute top-1/2 block -translate-y-1/2 hover:opacity-80 ltr:right-2 rtl:left-2 sm:hidden"
                                                @click="search = false"
                                            >
                                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle opacity="0.5" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5" />
                                                    <path
                                                        d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                    />
                                                </svg>
                                            </button>
                                        </div>
                                    </form>
                                    <button
                                        type="button"
                                        class="search_btn rounded-full bg-white-light/40 p-2 hover:bg-white-light/90 dark:bg-dark/40 dark:hover:bg-dark/60 sm:hidden"
                                        @click="search = ! search"
                                    >
                                        <svg
                                            class="mx-auto h-4.5 w-4.5 dark:text-[#d0d2d6]"
                                            width="20"
                                            height="20"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <circle cx="11.5" cy="11.5" r="9.5" stroke="currentColor" stroke-width="1.5" opacity="0.5" />
                                            <path d="M18.5 18.5L22 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        </svg>
                                    </button>
                                </div>
                                <div>
                                    <a
                                        href="javascript:;"
                                        x-cloak
                                        x-show="$store.app.theme === 'light'"
                                        href="javascript:;"
                                        class="flex items-center rounded-full bg-white-light/40 p-2 hover:bg-white-light/90 hover:text-primary dark:bg-dark/40 dark:hover:bg-dark/60"
                                        @click="$store.app.toggleTheme('dark')"
                                    >
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="12" cy="12" r="5" stroke="currentColor" stroke-width="1.5" />
                                            <path d="M12 2V4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                            <path d="M12 20V22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                            <path d="M4 12L2 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                            <path d="M22 12L20 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                            <path
                                                opacity="0.5"
                                                d="M19.7778 4.22266L17.5558 6.25424"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                            />
                                            <path
                                                opacity="0.5"
                                                d="M4.22217 4.22266L6.44418 6.25424"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                            />
                                            <path
                                                opacity="0.5"
                                                d="M6.44434 17.5557L4.22211 19.7779"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                            />
                                            <path
                                                opacity="0.5"
                                                d="M19.7778 19.7773L17.5558 17.5551"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                            />
                                        </svg>
                                    </a>
                                    <a
                                        href="javascript:;"
                                        x-cloak
                                        x-show="$store.app.theme === 'dark'"
                                        href="javascript:;"
                                        class="flex items-center rounded-full bg-white-light/40 p-2 hover:bg-white-light/90 hover:text-primary dark:bg-dark/40 dark:hover:bg-dark/60"
                                        @click="$store.app.toggleTheme('system')"
                                    >
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21.0672 11.8568L20.4253 11.469L21.0672 11.8568ZM12.1432 2.93276L11.7553 2.29085V2.29085L12.1432 2.93276ZM21.25 12C21.25 17.1086 17.1086 21.25 12 21.25V22.75C17.9371 22.75 22.75 17.9371 22.75 12H21.25ZM12 21.25C6.89137 21.25 2.75 17.1086 2.75 12H1.25C1.25 17.9371 6.06294 22.75 12 22.75V21.25ZM2.75 12C2.75 6.89137 6.89137 2.75 12 2.75V1.25C6.06294 1.25 1.25 6.06294 1.25 12H2.75ZM15.5 14.25C12.3244 14.25 9.75 11.6756 9.75 8.5H8.25C8.25 12.5041 11.4959 15.75 15.5 15.75V14.25ZM20.4253 11.469C19.4172 13.1373 17.5882 14.25 15.5 14.25V15.75C18.1349 15.75 20.4407 14.3439 21.7092 12.2447L20.4253 11.469ZM9.75 8.5C9.75 6.41182 10.8627 4.5828 12.531 3.57467L11.7553 2.29085C9.65609 3.5593 8.25 5.86509 8.25 8.5H9.75ZM12 2.75C11.9115 2.75 11.8077 2.71008 11.7324 2.63168C11.6686 2.56527 11.6538 2.50244 11.6503 2.47703C11.6461 2.44587 11.6482 2.35557 11.7553 2.29085L12.531 3.57467C13.0342 3.27065 13.196 2.71398 13.1368 2.27627C13.0754 1.82126 12.7166 1.25 12 1.25V2.75ZM21.7092 12.2447C21.6444 12.3518 21.5541 12.3539 21.523 12.3497C21.4976 12.3462 21.4347 12.3314 21.3683 12.2676C21.2899 12.1923 21.25 12.0885 21.25 12H22.75C22.75 11.2834 22.1787 10.9246 21.7237 10.8632C21.286 10.804 20.7293 10.9658 20.4253 11.469L21.7092 12.2447Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                    </a>
                                    <a
                                        href="javascript:;"
                                        x-cloak
                                        x-show="$store.app.theme === 'system'"
                                        href="javascript:;"
                                        class="flex items-center rounded-full bg-white-light/40 p-2 hover:bg-white-light/90 hover:text-primary dark:bg-dark/40 dark:hover:bg-dark/60"
                                        @click="$store.app.toggleTheme('light')"
                                    >
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3 9C3 6.17157 3 4.75736 3.87868 3.87868C4.75736 3 6.17157 3 9 3H15C17.8284 3 19.2426 3 20.1213 3.87868C21 4.75736 21 6.17157 21 9V14C21 15.8856 21 16.8284 20.4142 17.4142C19.8284 18 18.8856 18 17 18H7C5.11438 18 4.17157 18 3.58579 17.4142C3 16.8284 3 15.8856 3 14V9Z"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                            />
                                            <path opacity="0.5" d="M22 21H2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                            <path opacity="0.5" d="M15 15H9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        </svg>
                                    </a>
                                </div>




                                <div class="dropdown" x-data="dropdown" @click.outside="open = false">
                                    <a
                                        href="javascript:;"
                                        class="relative block rounded-full bg-white-light/40 p-2 hover:bg-white-light/90 hover:text-primary dark:bg-dark/40 dark:hover:bg-dark/60"
                                        @click="toggle"
                                    >
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                            />
                                            <path
                                                d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                            />
                                            <path d="M12 6V10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        </svg>

                                        <span class="absolute top-0 flex h-3 w-3 ltr:right-0 rtl:left-0">
                                            <span
                                                class="absolute -top-[3px] inline-flex h-full w-full animate-ping rounded-full bg-success/50 opacity-75 ltr:-left-[3px] rtl:-right-[3px]"
                                            ></span>
                                            <span class="relative inline-flex h-[6px] w-[6px] rounded-full bg-success"></span>
                                        </span>
                                    </a>
                                    <ul
                                        x-cloak
                                        x-show="open"
                                        x-transition
                                        x-transition.duration.300ms
                                        class="top-11 w-[300px] divide-y !py-0 text-dark ltr:-right-2 rtl:-left-2 dark:divide-white/10 dark:text-white-dark sm:w-[350px]"
                                    >
                                        <li>
                                            <div class="flex items-center justify-between px-4 py-2 font-semibold hover:!bg-transparent">
                                                <h4 class="text-lg">Notification</h4>
                                                <template x-if="notifications.length">
                                                    <span class="badge bg-primary/80" x-text="notifications.length + 'New'"></span>
                                                </template>
                                            </div>
                                        </li>
                                        <template x-for="notification in notifications">
                                            <li class="dark:text-white-light/90">
                                                <div class="group flex items-center px-4 py-2" @click.self="toggle">
                                                    <div class="grid place-content-center rounded">
                                                        <div class="relative h-12 w-12">
                                                            <img
                                                                class="h-12 w-12 rounded-full object-cover"
                                                                :src="`assets_guru/images/${notification.profile}`"
                                                                alt="image"
                                                            />
                                                            <span class="absolute right-[6px] bottom-0 block h-2 w-2 rounded-full bg-success"></span>
                                                        </div>
                                                    </div>
                                                    <div class="flex flex-auto ltr:pl-3 rtl:pr-3">
                                                        <div class="ltr:pr-3 rtl:pl-3">
                                                            <h6 x-html="notification.message"></h6>
                                                            <span class="block text-xs font-normal dark:text-gray-500" x-text="notification.time"></span>
                                                        </div>
                                                        <button
                                                            type="button"
                                                            class="text-neutral-300 opacity-0 hover:text-danger group-hover:opacity-100 ltr:ml-auto rtl:mr-auto"
                                                            @click="removeNotification(notification.id)"
                                                        >
                                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <circle opacity="0.5" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5" />
                                                                <path
                                                                    d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5"
                                                                    stroke="currentColor"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                        </template>
                                        <template x-if="notifications.length">
                                            <li>
                                                <div class="p-4">
                                                    <button class="btn btn-primary btn-small block w-full" @click="toggle">Read All Notifications</button>
                                                </div>
                                            </li>
                                        </template>
                                        <template x-if="!notifications.length">
                                            <li>
                                                <div class="!grid min-h-[200px] place-content-center text-lg hover:!bg-transparent">
                                                    <div class="mx-auto mb-4 rounded-full text-primary ring-4 ring-primary/30">
                                                        <svg width="40" height="40" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                opacity="0.5"
                                                                d="M20 10C20 4.47715 15.5228 0 10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20C15.5228 20 20 15.5228 20 10Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M10 4.25C10.4142 4.25 10.75 4.58579 10.75 5V11C10.75 11.4142 10.4142 11.75 10 11.75C9.58579 11.75 9.25 11.4142 9.25 11V5C9.25 4.58579 9.58579 4.25 10 4.25Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M10 15C10.5523 15 11 14.5523 11 14C11 13.4477 10.5523 13 10 13C9.44772 13 9 13.4477 9 14C9 14.5523 9.44772 15 10 15Z"
                                                                fill="currentColor"
                                                            />
                                                        </svg>
                                                    </div>
                                                    No data available.
                                                </div>
                                            </li>
                                        </template>
                                    </ul>
                                </div>
                                <div class="dropdown flex-shrink-0" x-data="dropdown" @click.outside="open = false">
                                    <a href="javascript:;" class="group relative" @click="toggle()">
                                        <span
                                            ><img
                                                class="h-9 w-9 rounded-full object-cover saturate-50 group-hover:saturate-100"
                                                src="assets_guru/images/user-profile.jpeg"
                                                alt="image"
                                        /></span>
                                    </a>
                                    <ul
                                        x-cloak
                                        x-show="open"
                                        x-transition
                                        x-transition.duration.300ms
                                        class="top-11 w-[230px] !py-0 font-semibold text-dark ltr:right-0 rtl:left-0 dark:text-white-dark dark:text-white-light/90"
                                    >
                                        <li>
                                            <div class="flex items-center px-4 py-4">
                                                <div class="flex-none">
                                                    <img class="h-10 w-10 rounded-md object-cover" src="assets_guru/images/user-profile.jpeg" alt="image" />
                                                </div>
                                                <div class="ltr:pl-4 rtl:pr-4">
                                                    <h4 class="text-base">
                                                        John Doe<span class="rounded bg-success-light px-1 text-xs text-success ltr:ml-2 rtl:ml-2">Pro</span>
                                                    </h4>
                                                    <a
                                                        class="text-black/60 hover:text-primary dark:text-dark-light/60 dark:hover:text-white"
                                                        href="javascript:;"
                                                        >johndoe@gmail.com</a
                                                    >
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="users-profile.html" class="dark:hover:text-white" @click="toggle">
                                                <svg
                                                    class="h-4.5 w-4.5 ltr:mr-2 rtl:ml-2"
                                                    width="18"
                                                    height="18"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <circle cx="12" cy="6" r="4" stroke="currentColor" stroke-width="1.5" />
                                                    <path
                                                        opacity="0.5"
                                                        d="M20 17.5C20 19.9853 20 22 12 22C4 22 4 19.9853 4 17.5C4 15.0147 7.58172 13 12 13C16.4183 13 20 15.0147 20 17.5Z"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                    />
                                                </svg>
                                                Profile</a
                                            >
                                        </li>
                                        <li>
                                            <a href="apps-mailbox.html" class="dark:hover:text-white" @click="toggle">
                                                <svg
                                                    class="h-4.5 w-4.5 ltr:mr-2 rtl:ml-2"
                                                    width="18"
                                                    height="18"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        opacity="0.5"
                                                        d="M2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12C22 15.7712 22 17.6569 20.8284 18.8284C19.6569 20 17.7712 20 14 20H10C6.22876 20 4.34315 20 3.17157 18.8284C2 17.6569 2 15.7712 2 12Z"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                    />
                                                    <path
                                                        d="M6 8L8.1589 9.79908C9.99553 11.3296 10.9139 12.0949 12 12.0949C13.0861 12.0949 14.0045 11.3296 15.8411 9.79908L18 8"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                    />
                                                </svg>
                                                Inbox</a
                                            >
                                        </li>
                                        <li>
                                            <a href="auth-boxed-lockscreen.html" class="dark:hover:text-white" @click="toggle">
                                                <svg
                                                    class="h-4.5 w-4.5 ltr:mr-2 rtl:ml-2"
                                                    width="18"
                                                    height="18"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        d="M2 16C2 13.1716 2 11.7574 2.87868 10.8787C3.75736 10 5.17157 10 8 10H16C18.8284 10 20.2426 10 21.1213 10.8787C22 11.7574 22 13.1716 22 16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H8C5.17157 22 3.75736 22 2.87868 21.1213C2 20.2426 2 18.8284 2 16Z"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                    />
                                                    <path
                                                        opacity="0.5"
                                                        d="M6 10V8C6 4.68629 8.68629 2 12 2C15.3137 2 18 4.68629 18 8V10"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                    />
                                                    <g opacity="0.5">
                                                        <path
                                                            d="M9 16C9 16.5523 8.55228 17 8 17C7.44772 17 7 16.5523 7 16C7 15.4477 7.44772 15 8 15C8.55228 15 9 15.4477 9 16Z"
                                                            fill="currentColor"
                                                        />
                                                        <path
                                                            d="M13 16C13 16.5523 12.5523 17 12 17C11.4477 17 11 16.5523 11 16C11 15.4477 11.4477 15 12 15C12.5523 15 13 15.4477 13 16Z"
                                                            fill="currentColor"
                                                        />
                                                        <path
                                                            d="M17 16C17 16.5523 16.5523 17 16 17C15.4477 17 15 16.5523 15 16C15 15.4477 15.4477 15 16 15C16.5523 15 17 15.4477 17 16Z"
                                                            fill="currentColor"
                                                        />
                                                    </g>
                                                </svg>
                                                Lock Screen</a
                                            >
                                        </li>
                                        <li class="border-t border-white-light dark:border-white-light/10">
                                            <a href="auth-boxed-signin.html" class="!py-3 text-danger" @click="toggle">
                                                <svg
                                                    class="h-4.5 w-4.5 rotate-90 ltr:mr-2 rtl:ml-2"
                                                    width="18"
                                                    height="18"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        opacity="0.5"
                                                        d="M17 9.00195C19.175 9.01406 20.3529 9.11051 21.1213 9.8789C22 10.7576 22 12.1718 22 15.0002V16.0002C22 18.8286 22 20.2429 21.1213 21.1215C20.2426 22.0002 18.8284 22.0002 16 22.0002H8C5.17157 22.0002 3.75736 22.0002 2.87868 21.1215C2 20.2429 2 18.8286 2 16.0002L2 15.0002C2 12.1718 2 10.7576 2.87868 9.87889C3.64706 9.11051 4.82497 9.01406 7 9.00195"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                    />
                                                    <path
                                                        d="M12 15L12 2M12 2L15 5.5M12 2L9 5.5"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    />
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
                            class="horizontal-menu hidden border-t border-[#ebedf2] bg-white py-1.5 px-6 font-semibold text-black rtl:space-x-reverse dark:border-[#191e3a] dark:bg-[#0e1726] dark:text-white-dark lg:space-x-1.5 xl:space-x-8"
                        >
                            <li class="menu nav-item relative">
                                <a href="javascript:;" class="nav-link active">
                                    <div class="flex items-center">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                opacity="0.5"
                                                d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M9 17.25C8.58579 17.25 8.25 17.5858 8.25 18C8.25 18.4142 8.58579 18.75 9 18.75H15C15.4142 18.75 15.75 18.4142 15.75 18C15.75 17.5858 15.4142 17.25 15 17.25H9Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                        <span class="px-1">Dashboard</span>
                                    </div>
                                </a>
                            </li>
                            <li class="menu nav-item relative">
                                <a href="javascript:;" class="nav-link">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                          </svg>
                                        <span class="px-1">Siswa</span>
                                    </div>
                                </a>
                            </li>
                            <li class="menu nav-item relative">
                                <a href="javascript:;" class="nav-link">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                          </svg>
                                        <span class="px-1">Jurnal</span>
                                    </div>
                                </a>
                            </li>
                            <li class="menu nav-item relative">
                                <a href="javascript:;" class="nav-link">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                          </svg>
                                        <span class="px-1">Absensi</span>
                                    </div>
                                </a>
                            </li>
                            <li class="menu nav-item relative">
                                <a href="javascript:;" class="nav-link">
                                    <div class="flex items-center">
                                        <svg
                                            class="group-hover:!text-primary"
                                            width="20"
                                            height="20"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                opacity="0.5"
                                                d="M13 15.4C13 13.3258 13 12.2887 13.659 11.6444C14.318 11 15.3787 11 17.5 11C19.6213 11 20.682 11 21.341 11.6444C22 12.2887 22 13.3258 22 15.4V17.6C22 19.6742 22 20.7113 21.341 21.3556C20.682 22 19.6213 22 17.5 22C15.3787 22 14.318 22 13.659 21.3556C13 20.7113 13 19.6742 13 17.6V15.4Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M2 8.6C2 10.6742 2 11.7113 2.65901 12.3556C3.31802 13 4.37868 13 6.5 13C8.62132 13 9.68198 13 10.341 12.3556C11 11.7113 11 10.6742 11 8.6V6.4C11 4.32582 11 3.28873 10.341 2.64437C9.68198 2 8.62132 2 6.5 2C4.37868 2 3.31802 2 2.65901 2.64437C2 3.28873 2 4.32582 2 6.4V8.6Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M13 5.5C13 4.4128 13 3.8692 13.1713 3.44041C13.3996 2.86867 13.8376 2.41443 14.389 2.17761C14.8024 2 15.3266 2 16.375 2H18.625C19.6734 2 20.1976 2 20.611 2.17761C21.1624 2.41443 21.6004 2.86867 21.8287 3.44041C22 3.8692 22 4.4128 22 5.5C22 6.5872 22 7.1308 21.8287 7.55959C21.6004 8.13133 21.1624 8.58557 20.611 8.82239C20.1976 9 19.6734 9 18.625 9H16.375C15.3266 9 14.8024 9 14.389 8.82239C13.8376 8.58557 13.3996 8.13133 13.1713 7.55959C13 7.1308 13 6.5872 13 5.5Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                opacity="0.5"
                                                d="M2 18.5C2 19.5872 2 20.1308 2.17127 20.5596C2.39963 21.1313 2.83765 21.5856 3.38896 21.8224C3.80245 22 4.32663 22 5.375 22H7.625C8.67337 22 9.19755 22 9.61104 21.8224C10.1624 21.5856 10.6004 21.1313 10.8287 20.5596C11 20.1308 11 19.5872 11 18.5C11 17.4128 11 16.8692 10.8287 16.4404C10.6004 15.8687 10.1624 15.4144 9.61104 15.1776C9.19755 15 8.67337 15 7.625 15H5.375C4.32663 15 3.80245 15 3.38896 15.1776C2.83765 15.4144 2.39963 15.8687 2.17127 16.4404C2 16.8692 2 17.4128 2 18.5Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                        <span class="px-1">Lainnya</span>
                                    </div>
                                    <div class="right_arrow">
                                        <svg
                                            class="h-4 w-4 rotate-90"
                                            width="16"
                                            height="16"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="">Berita</a>
                                    </li>
                                    <li>
                                        <a href="">Chat</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </header>
                <!-- end header section -->

                <div class="animate__animated p-6" :class="[$store.app.animation]">
                    <!-- start main content section -->
                    <div x-data="sales">
                        <ul class="flex space-x-2 rtl:space-x-reverse">
                            <li>
                                <a href="javascript:;" class="text-primary hover:underline">Dashboard</a>
                            </li>
                            <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
                                <span>Sales</span>
                            </li>
                        </ul>

                        <div class="pt-5">
                            <div class="mb-6 grid gap-6 xl:grid-cols-3">
                                <div class="panel h-full xl:col-span-2">
                                    <div class="mb-5 flex items-center dark:text-white-light">
                                        <h5 class="text-lg font-semibold">Revenue</h5>
                                        <div x-data="dropdown" @click.outside="open = false" class="dropdown ltr:ml-auto rtl:mr-auto">
                                            <a href="javascript:;" @click="toggle">
                                                <svg
                                                    class="h-5 w-5 text-black/70 hover:!text-primary dark:text-white/70"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                                    <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                                    <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                                </svg>
                                            </a>
                                            <ul x-cloak x-show="open" x-transition x-transition.duration.300ms class="ltr:right-0 rtl:left-0">
                                                <li><a href="javascript:;" @click="toggle">Weekly</a></li>
                                                <li><a href="javascript:;" @click="toggle">Monthly</a></li>
                                                <li><a href="javascript:;" @click="toggle">Yearly</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="text-lg dark:text-white-light/90">Total Profit <span class="ml-2 text-primary">$10,840</span></p>
                                    <div class="relative">
                                        <div x-ref="revenueChart" class="rounded-lg bg-white dark:bg-black">
                                            <!-- loader -->
                                            <div class="grid min-h-[325px] place-content-center bg-white-light/30 dark:bg-dark dark:bg-opacity-[0.08]">
                                                <span
                                                    class="inline-flex h-5 w-5 animate-spin rounded-full border-2 border-black !border-l-transparent dark:border-white"
                                                ></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel h-full">
                                    <div class="mb-5 flex items-center">
                                        <h5 class="text-lg font-semibold dark:text-white-light">Sales By Category</h5>
                                    </div>
                                    <div>
                                        <div x-ref="salesByCategory" class="rounded-lg bg-white dark:bg-black">
                                            <!-- loader -->
                                            <div class="grid min-h-[353px] place-content-center bg-white-light/30 dark:bg-dark dark:bg-opacity-[0.08]">
                                                <span
                                                    class="inline-flex h-5 w-5 animate-spin rounded-full border-2 border-black !border-l-transparent dark:border-white"
                                                ></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-6 grid gap-6 sm:grid-cols-2 xl:grid-cols-3">
                                <div class="panel h-full sm:col-span-2 xl:col-span-1">
                                    <div class="mb-5 flex items-center">
                                        <h5 class="text-lg font-semibold dark:text-white-light">
                                            Daily Sales <span class="block text-sm font-normal text-white-dark">Go to columns for details.</span>
                                        </h5>
                                        <div class="relative ltr:ml-auto rtl:mr-auto">
                                            <div
                                                class="grid h-11 w-11 place-content-center rounded-full bg-[#ffeccb] text-warning dark:bg-warning dark:text-[#ffeccb]"
                                            >
                                                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 6V18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                    <path
                                                        d="M15 9.5C15 8.11929 13.6569 7 12 7C10.3431 7 9 8.11929 9 9.5C9 10.8807 10.3431 12 12 12C13.6569 12 15 13.1193 15 14.5C15 15.8807 13.6569 17 12 17C10.3431 17 9 15.8807 9 14.5"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div x-ref="dailySales" class="rounded-lg bg-white dark:bg-black">
                                            <!-- loader -->
                                            <div class="grid min-h-[175px] place-content-center bg-white-light/30 dark:bg-dark dark:bg-opacity-[0.08]">
                                                <span
                                                    class="inline-flex h-5 w-5 animate-spin rounded-full border-2 border-black !border-l-transparent dark:border-white"
                                                ></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel h-full">
                                    <div class="mb-5 flex items-center dark:text-white-light">
                                        <h5 class="text-lg font-semibold">Summary</h5>
                                        <div x-data="dropdown" @click.outside="open = false" class="dropdown ltr:ml-auto rtl:mr-auto">
                                            <a href="javascript:;" @click="toggle">
                                                <svg
                                                    class="h-5 w-5 text-black/70 hover:!text-primary dark:text-white/70"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                                    <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                                    <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                                </svg>
                                            </a>
                                            <ul x-cloak x-show="open" x-transition x-transition.duration.300ms class="ltr:right-0 rtl:left-0">
                                                <li><a href="javascript:;" @click="toggle">View Report</a></li>
                                                <li><a href="javascript:;" @click="toggle">Edit Report</a></li>
                                                <li><a href="javascript:;" @click="toggle">Mark as Done</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="space-y-9">
                                        <div class="flex items-center">
                                            <div class="h-9 w-9 ltr:mr-3 rtl:ml-3">
                                                <div
                                                    class="grid h-9 w-9 place-content-center rounded-full bg-secondary-light text-secondary dark:bg-secondary dark:text-secondary-light"
                                                >
                                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M3.74157 18.5545C4.94119 20 7.17389 20 11.6393 20H12.3605C16.8259 20 19.0586 20 20.2582 18.5545M3.74157 18.5545C2.54194 17.1091 2.9534 14.9146 3.77633 10.5257C4.36155 7.40452 4.65416 5.84393 5.76506 4.92196M3.74157 18.5545C3.74156 18.5545 3.74157 18.5545 3.74157 18.5545ZM20.2582 18.5545C21.4578 17.1091 21.0464 14.9146 20.2235 10.5257C19.6382 7.40452 19.3456 5.84393 18.2347 4.92196M20.2582 18.5545C20.2582 18.5545 20.2582 18.5545 20.2582 18.5545ZM18.2347 4.92196C17.1238 4 15.5361 4 12.3605 4H11.6393C8.46374 4 6.87596 4 5.76506 4.92196M18.2347 4.92196C18.2347 4.92196 18.2347 4.92196 18.2347 4.92196ZM5.76506 4.92196C5.76506 4.92196 5.76506 4.92196 5.76506 4.92196Z"
                                                            stroke="currentColor"
                                                            stroke-width="1.5"
                                                        />
                                                        <path
                                                            opacity="0.5"
                                                            d="M9.1709 8C9.58273 9.16519 10.694 10 12.0002 10C13.3064 10 14.4177 9.16519 14.8295 8"
                                                            stroke="currentColor"
                                                            stroke-width="1.5"
                                                            stroke-linecap="round"
                                                        />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="flex-1">
                                                <div class="mb-2 flex font-semibold text-white-dark">
                                                    <h6>Income</h6>
                                                    <p class="ltr:ml-auto rtl:mr-auto">$92,600</p>
                                                </div>
                                                <div class="h-2 rounded-full bg-dark-light shadow dark:bg-[#1b2e4b]">
                                                    <div class="h-full w-11/12 rounded-full bg-gradient-to-r from-[#7579ff] to-[#b224ef]"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center">
                                            <div class="h-9 w-9 ltr:mr-3 rtl:ml-3">
                                                <div
                                                    class="grid h-9 w-9 place-content-center rounded-full bg-success-light text-success dark:bg-success dark:text-success-light"
                                                >
                                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M4.72848 16.1369C3.18295 14.5914 2.41018 13.8186 2.12264 12.816C1.83509 11.8134 2.08083 10.7485 2.57231 8.61875L2.85574 7.39057C3.26922 5.59881 3.47597 4.70292 4.08944 4.08944C4.70292 3.47597 5.59881 3.26922 7.39057 2.85574L8.61875 2.57231C10.7485 2.08083 11.8134 1.83509 12.816 2.12264C13.8186 2.41018 14.5914 3.18295 16.1369 4.72848L17.9665 6.55812C20.6555 9.24711 22 10.5916 22 12.2623C22 13.933 20.6555 15.2775 17.9665 17.9665C15.2775 20.6555 13.933 22 12.2623 22C10.5916 22 9.24711 20.6555 6.55812 17.9665L4.72848 16.1369Z"
                                                            stroke="currentColor"
                                                            stroke-width="1.5"
                                                        />
                                                        <circle
                                                            opacity="0.5"
                                                            cx="8.60699"
                                                            cy="8.87891"
                                                            r="2"
                                                            transform="rotate(-45 8.60699 8.87891)"
                                                            stroke="currentColor"
                                                            stroke-width="1.5"
                                                        />
                                                        <path
                                                            opacity="0.5"
                                                            d="M11.5417 18.5L18.5208 11.5208"
                                                            stroke="currentColor"
                                                            stroke-width="1.5"
                                                            stroke-linecap="round"
                                                        />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="flex-1">
                                                <div class="mb-2 flex font-semibold text-white-dark">
                                                    <h6>Profit</h6>
                                                    <p class="ltr:ml-auto rtl:mr-auto">$37,515</p>
                                                </div>
                                                <div class="h-2 w-full rounded-full bg-dark-light shadow dark:bg-[#1b2e4b]">
                                                    <div
                                                        class="h-full w-full rounded-full bg-gradient-to-r from-[#3cba92] to-[#0ba360]"
                                                        style="width: 65%"
                                                    ></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center">
                                            <div class="h-9 w-9 ltr:mr-3 rtl:ml-3">
                                                <div
                                                    class="grid h-9 w-9 place-content-center rounded-full bg-warning-light text-warning dark:bg-warning dark:text-warning-light"
                                                >
                                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12C22 15.7712 22 17.6569 20.8284 18.8284C19.6569 20 17.7712 20 14 20H10C6.22876 20 4.34315 20 3.17157 18.8284C2 17.6569 2 15.7712 2 12Z"
                                                            stroke="currentColor"
                                                            stroke-width="1.5"
                                                        />
                                                        <path opacity="0.5" d="M10 16H6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                        <path opacity="0.5" d="M14 16H12.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                        <path opacity="0.5" d="M2 10L22 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="flex-1">
                                                <div class="mb-2 flex font-semibold text-white-dark">
                                                    <h6>Expenses</h6>
                                                    <p class="ltr:ml-auto rtl:mr-auto">$55,085</p>
                                                </div>
                                                <div class="h-2 w-full rounded-full bg-dark-light shadow dark:bg-[#1b2e4b]">
                                                    <div
                                                        class="h-full w-full rounded-full bg-gradient-to-r from-[#f09819] to-[#ff5858]"
                                                        style="width: 80%"
                                                    ></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel h-full p-0">
                                    <div class="absolute flex w-full items-center justify-between p-5">
                                        <div class="relative">
                                            <div
                                                class="flex h-11 w-11 items-center justify-center rounded-lg bg-success-light text-success dark:bg-success dark:text-success-light"
                                            >
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2 3L2.26491 3.0883C3.58495 3.52832 4.24497 3.74832 4.62248 4.2721C5 4.79587 5 5.49159 5 6.88304V9.5C5 12.3284 5 13.7426 5.87868 14.6213C6.75736 15.5 8.17157 15.5 11 15.5H19"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                    />
                                                    <path
                                                        opacity="0.5"
                                                        d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                    />
                                                    <path
                                                        opacity="0.5"
                                                        d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                    />
                                                    <path opacity="0.5" d="M11 9H8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                    <path
                                                        d="M5 6H16.4504C18.5054 6 19.5328 6 19.9775 6.67426C20.4221 7.34853 20.0173 8.29294 19.2078 10.1818L18.7792 11.1818C18.4013 12.0636 18.2123 12.5045 17.8366 12.7523C17.4609 13 16.9812 13 16.0218 13H5"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                        <h5 class="text-2xl font-semibold ltr:text-right rtl:text-left dark:text-white-light">
                                            3,192
                                            <span class="block text-sm font-normal">Total Orders</span>
                                        </h5>
                                    </div>
                                    <div x-ref="totalOrders" class="rounded-lg bg-transparent">
                                        <!-- loader -->
                                        <div class="grid min-h-[290px] place-content-center bg-white-light/30 dark:bg-dark dark:bg-opacity-[0.08]">
                                            <span
                                                class="inline-flex h-5 w-5 animate-spin rounded-full border-2 border-black !border-l-transparent dark:border-white"
                                            ></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-6 grid gap-6 sm:grid-cols-2 xl:grid-cols-3">
                                <div class="panel h-full pb-0 sm:col-span-2 xl:col-span-1">
                                    <h5 class="mb-5 text-lg font-semibold dark:text-white-light">Recent Activities</h5>

                                    <div class="perfect-scrollbar relative mb-4 -mr-3 h-[290px] pr-3">
                                        <div class="cursor-pointer text-sm">
                                            <div class="group relative flex items-center py-1.5">
                                                <div class="h-1.5 w-1.5 rounded-full bg-primary ltr:mr-1 rtl:ml-1.5"></div>
                                                <div class="flex-1">Updated Server Logs</div>
                                                <div class="text-xs text-white-dark ltr:ml-auto rtl:mr-auto dark:text-gray-500">Just Now</div>

                                                <span
                                                    class="badge badge-outline-primary absolute bg-primary-light text-xs opacity-0 group-hover:opacity-100 ltr:right-0 rtl:left-0 dark:bg-[#0e1726]"
                                                    >Pending</span
                                                >
                                            </div>
                                            <div class="group relative flex items-center py-1.5">
                                                <div class="h-1.5 w-1.5 rounded-full bg-success ltr:mr-1 rtl:ml-1.5"></div>
                                                <div class="flex-1">Send Mail to HR and Admin</div>
                                                <div class="text-xs text-white-dark ltr:ml-auto rtl:mr-auto dark:text-gray-500">2 min ago</div>

                                                <span
                                                    class="badge badge-outline-success absolute bg-success-light text-xs opacity-0 group-hover:opacity-100 ltr:right-0 rtl:left-0 dark:bg-[#0e1726]"
                                                    >Completed</span
                                                >
                                            </div>
                                            <div class="group relative flex items-center py-1.5">
                                                <div class="h-1.5 w-1.5 rounded-full bg-danger ltr:mr-1 rtl:ml-1.5"></div>
                                                <div class="flex-1">Backup Files EOD</div>
                                                <div class="text-xs text-white-dark ltr:ml-auto rtl:mr-auto dark:text-gray-500">14:00</div>

                                                <span
                                                    class="badge badge-outline-danger absolute bg-danger-light text-xs opacity-0 group-hover:opacity-100 ltr:right-0 rtl:left-0 dark:bg-[#0e1726]"
                                                    >Pending</span
                                                >
                                            </div>
                                            <div class="group relative flex items-center py-1.5">
                                                <div class="h-1.5 w-1.5 rounded-full bg-black ltr:mr-1 rtl:ml-1.5"></div>
                                                <div class="flex-1">Collect documents from Sara</div>
                                                <div class="text-xs text-white-dark ltr:ml-auto rtl:mr-auto dark:text-gray-500">16:00</div>

                                                <span
                                                    class="badge badge-outline-dark absolute bg-dark-light text-xs opacity-0 group-hover:opacity-100 ltr:right-0 rtl:left-0 dark:bg-[#0e1726]"
                                                    >Completed</span
                                                >
                                            </div>
                                            <div class="group relative flex items-center py-1.5">
                                                <div class="h-1.5 w-1.5 rounded-full bg-warning ltr:mr-1 rtl:ml-1.5"></div>
                                                <div class="flex-1">Conference call with Marketing Manager.</div>
                                                <div class="text-xs text-white-dark ltr:ml-auto rtl:mr-auto dark:text-gray-500">17:00</div>

                                                <span
                                                    class="badge badge-outline-warning absolute bg-warning-light text-xs opacity-0 group-hover:opacity-100 ltr:right-0 rtl:left-0 dark:bg-[#0e1726]"
                                                    >In progress</span
                                                >
                                            </div>
                                            <div class="group relative flex items-center py-1.5">
                                                <div class="h-1.5 w-1.5 rounded-full bg-info ltr:mr-1 rtl:ml-1.5"></div>
                                                <div class="flex-1">Rebooted Server</div>
                                                <div class="text-xs text-white-dark ltr:ml-auto rtl:mr-auto dark:text-gray-500">17:00</div>

                                                <span
                                                    class="badge badge-outline-info absolute bg-info-light text-xs opacity-0 group-hover:opacity-100 ltr:right-0 rtl:left-0 dark:bg-[#0e1726]"
                                                    >Completed</span
                                                >
                                            </div>
                                            <div class="group relative flex items-center py-1.5">
                                                <div class="h-1.5 w-1.5 rounded-full bg-secondary ltr:mr-1 rtl:ml-1.5"></div>
                                                <div class="flex-1">Send contract details to Freelancer</div>
                                                <div class="text-xs text-white-dark ltr:ml-auto rtl:mr-auto dark:text-gray-500">18:00</div>

                                                <span
                                                    class="badge badge-outline-secondary absolute bg-secondary-light text-xs opacity-0 group-hover:opacity-100 ltr:right-0 rtl:left-0 dark:bg-[#0e1726]"
                                                    >Pending</span
                                                >
                                            </div>
                                            <div class="group relative flex items-center py-1.5">
                                                <div class="h-1.5 w-1.5 rounded-full bg-primary ltr:mr-1 rtl:ml-1.5"></div>
                                                <div class="flex-1">Updated Server Logs</div>
                                                <div class="text-xs text-white-dark ltr:ml-auto rtl:mr-auto dark:text-gray-500">Just Now</div>

                                                <span
                                                    class="badge badge-outline-primary absolute bg-primary-light text-xs opacity-0 group-hover:opacity-100 ltr:right-0 rtl:left-0 dark:bg-[#0e1726]"
                                                    >Pending</span
                                                >
                                            </div>
                                            <div class="group relative flex items-center py-1.5">
                                                <div class="h-1.5 w-1.5 rounded-full bg-success ltr:mr-1 rtl:ml-1.5"></div>
                                                <div class="flex-1">Send Mail to HR and Admin</div>
                                                <div class="text-xs text-white-dark ltr:ml-auto rtl:mr-auto dark:text-gray-500">2 min ago</div>

                                                <span
                                                    class="badge badge-outline-success absolute bg-success-light text-xs opacity-0 group-hover:opacity-100 ltr:right-0 rtl:left-0 dark:bg-[#0e1726]"
                                                    >Completed</span
                                                >
                                            </div>
                                            <div class="group relative flex items-center py-1.5">
                                                <div class="h-1.5 w-1.5 rounded-full bg-danger ltr:mr-1 rtl:ml-1.5"></div>
                                                <div class="flex-1">Backup Files EOD</div>
                                                <div class="text-xs text-white-dark ltr:ml-auto rtl:mr-auto dark:text-gray-500">14:00</div>

                                                <span
                                                    class="badge badge-outline-danger absolute bg-danger-light text-xs opacity-0 group-hover:opacity-100 ltr:right-0 rtl:left-0 dark:bg-[#0e1726]"
                                                    >Pending</span
                                                >
                                            </div>
                                            <div class="group relative flex items-center py-1.5">
                                                <div class="h-1.5 w-1.5 rounded-full bg-black ltr:mr-1 rtl:ml-1.5"></div>
                                                <div class="flex-1">Collect documents from Sara</div>
                                                <div class="text-xs text-white-dark ltr:ml-auto rtl:mr-auto dark:text-gray-500">16:00</div>

                                                <span
                                                    class="badge badge-outline-dark absolute bg-dark-light text-xs opacity-0 group-hover:opacity-100 ltr:right-0 rtl:left-0 dark:bg-[#0e1726]"
                                                    >Completed</span
                                                >
                                            </div>
                                            <div class="group relative flex items-center py-1.5">
                                                <div class="h-1.5 w-1.5 rounded-full bg-warning ltr:mr-1 rtl:ml-1.5"></div>
                                                <div class="flex-1">Conference call with Marketing Manager.</div>
                                                <div class="text-xs text-white-dark ltr:ml-auto rtl:mr-auto dark:text-gray-500">17:00</div>

                                                <span
                                                    class="badge badge-outline-warning absolute bg-warning-light text-xs opacity-0 group-hover:opacity-100 ltr:right-0 rtl:left-0 dark:bg-[#0e1726]"
                                                    >In progress</span
                                                >
                                            </div>
                                            <div class="group relative flex items-center py-1.5">
                                                <div class="h-1.5 w-1.5 rounded-full bg-info ltr:mr-1 rtl:ml-1.5"></div>
                                                <div class="flex-1">Rebooted Server</div>
                                                <div class="text-xs text-white-dark ltr:ml-auto rtl:mr-auto dark:text-gray-500">17:00</div>

                                                <span
                                                    class="badge badge-outline-info absolute bg-info-light text-xs opacity-0 group-hover:opacity-100 ltr:right-0 rtl:left-0 dark:bg-[#0e1726]"
                                                    >Completed</span
                                                >
                                            </div>
                                            <div class="group relative flex items-center py-1.5">
                                                <div class="h-1.5 w-1.5 rounded-full bg-secondary ltr:mr-1 rtl:ml-1.5"></div>
                                                <div class="flex-1">Send contract details to Freelancer</div>
                                                <div class="text-xs text-white-dark ltr:ml-auto rtl:mr-auto dark:text-gray-500">18:00</div>

                                                <span
                                                    class="badge badge-outline-secondary absolute bg-secondary-light text-xs opacity-0 group-hover:opacity-100 ltr:right-0 rtl:left-0 dark:bg-[#0e1726]"
                                                    >Pending</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-t border-white-light dark:border-white/10">
                                        <a href="javascript:;" class="group group flex items-center justify-center p-4 font-semibold hover:text-primary">
                                            View All
                                            <svg
                                                class="h-4 w-4 transition duration-300 group-hover:translate-x-1 ltr:ml-1 rtl:mr-1 rtl:rotate-180 rtl:group-hover:-translate-x-1"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M4 12H20M20 12L14 6M20 12L14 18"
                                                    stroke="currentColor"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                <div class="panel h-full">
                                    <div class="mb-5 flex items-center justify-between dark:text-white-light">
                                        <h5 class="text-lg font-semibold">Transactions</h5>
                                        <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                                            <a href="javascript:;" @click="toggle">
                                                <svg
                                                    class="h-5 w-5 text-black/70 hover:!text-primary dark:text-white/70"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                                    <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                                    <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                                                </svg>
                                            </a>
                                            <ul x-cloak x-show="open" x-transition x-transition.duration.300ms class="ltr:right-0 rtl:left-0">
                                                <li><a href="javascript:;" @click="toggle">View Report</a></li>
                                                <li><a href="javascript:;" @click="toggle">Edit Report</a></li>
                                                <li><a href="javascript:;" @click="toggle">Mark as Done</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="space-y-6">
                                            <div class="flex">
                                                <span
                                                    class="grid h-9 w-9 place-content-center rounded-md bg-success-light text-base text-success dark:bg-success dark:text-success-light"
                                                    >SP</span
                                                >
                                                <div class="flex-1 px-3">
                                                    <div>Shaun Park</div>
                                                    <div class="text-xs text-white-dark dark:text-gray-500">10 Jan 1:00PM</div>
                                                </div>
                                                <span class="whitespace-pre px-1 text-base text-success ltr:ml-auto rtl:mr-auto">+$36.11</span>
                                            </div>
                                            <div class="flex">
                                                <span
                                                    class="grid h-9 w-9 place-content-center rounded-md bg-warning-light text-warning dark:bg-warning dark:text-warning-light"
                                                >
                                                    <svg
                                                        width="24"
                                                        height="24"
                                                        viewBox="0 0 24 24"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="h-6 w-6"
                                                    >
                                                        <path
                                                            d="M2 10C2 7.17157 2 5.75736 2.87868 4.87868C3.75736 4 5.17157 4 8 4H13C15.8284 4 17.2426 4 18.1213 4.87868C19 5.75736 19 7.17157 19 10C19 12.8284 19 14.2426 18.1213 15.1213C17.2426 16 15.8284 16 13 16H8C5.17157 16 3.75736 16 2.87868 15.1213C2 14.2426 2 12.8284 2 10Z"
                                                            stroke="currentColor"
                                                            stroke-width="1.5"
                                                        />
                                                        <path
                                                            opacity="0.5"
                                                            d="M19.0003 7.07617C19.9754 7.17208 20.6317 7.38885 21.1216 7.87873C22.0003 8.75741 22.0003 10.1716 22.0003 13.0001C22.0003 15.8285 22.0003 17.2427 21.1216 18.1214C20.2429 19.0001 18.8287 19.0001 16.0003 19.0001H11.0003C8.17187 19.0001 6.75766 19.0001 5.87898 18.1214C5.38909 17.6315 5.17233 16.9751 5.07642 16"
                                                            stroke="currentColor"
                                                            stroke-width="1.5"
                                                        />
                                                        <path
                                                            d="M13 10C13 11.3807 11.8807 12.5 10.5 12.5C9.11929 12.5 8 11.3807 8 10C8 8.61929 9.11929 7.5 10.5 7.5C11.8807 7.5 13 8.61929 13 10Z"
                                                            stroke="currentColor"
                                                            stroke-width="1.5"
                                                        />
                                                        <path opacity="0.5" d="M16 12L16 8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                        <path opacity="0.5" d="M5 12L5 8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                    </svg>
                                                </span>
                                                <div class="flex-1 px-3">
                                                    <div>Cash withdrawal</div>
                                                    <div class="text-xs text-white-dark dark:text-gray-500">04 Jan 1:00PM</div>
                                                </div>
                                                <span class="whitespace-pre px-1 text-base text-danger ltr:ml-auto rtl:mr-auto">-$16.44</span>
                                            </div>
                                            <div class="flex">
                                                <span
                                                    class="grid h-9 w-9 place-content-center rounded-md bg-danger-light text-danger dark:bg-danger dark:text-danger-light"
                                                >
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="12" cy="6" r="4" stroke="currentColor" stroke-width="1.5" />
                                                        <path
                                                            opacity="0.5"
                                                            d="M20 17.5C20 19.9853 20 22 12 22C4 22 4 19.9853 4 17.5C4 15.0147 7.58172 13 12 13C16.4183 13 20 15.0147 20 17.5Z"
                                                            stroke="currentColor"
                                                            stroke-width="1.5"
                                                        />
                                                    </svg>
                                                </span>
                                                <div class="flex-1 px-3">
                                                    <div>Amy Diaz</div>
                                                    <div class="text-xs text-white-dark dark:text-gray-500">10 Jan 1:00PM</div>
                                                </div>
                                                <span class="whitespace-pre px-1 text-base text-success ltr:ml-auto rtl:mr-auto">+$66.44</span>
                                            </div>
                                            <div class="flex">
                                                <span
                                                    class="grid h-9 w-9 place-content-center rounded-md bg-secondary-light text-secondary dark:bg-secondary dark:text-secondary-light"
                                                >
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="1em"
                                                        height="1em"
                                                        preserveAspectRatio="xMidYMid meet"
                                                        viewBox="0 0 24 24"
                                                    >
                                                        <path
                                                            fill="currentColor"
                                                            d="M5.398 0v.006c3.028 8.556 5.37 15.175 8.348 23.596c2.344.058 4.85.398 4.854.398c-2.8-7.924-5.923-16.747-8.487-24zm8.489 0v9.63L18.6 22.951c-.043-7.86-.004-15.913.002-22.95zM5.398 1.05V24c1.873-.225 2.81-.312 4.715-.398v-9.22z"
                                                        />
                                                    </svg>
                                                </span>
                                                <div class="flex-1 px-3">
                                                    <div>Netflix</div>
                                                    <div class="text-xs text-white-dark dark:text-gray-500">04 Jan 1:00PM</div>
                                                </div>
                                                <span class="whitespace-pre px-1 text-base text-danger ltr:ml-auto rtl:mr-auto">-$32.00</span>
                                            </div>
                                            <div class="flex">
                                                <span
                                                    class="grid h-9 w-9 place-content-center rounded-md bg-info-light text-base text-info dark:bg-info dark:text-info-light"
                                                    >DA</span
                                                >
                                                <div class="flex-1 px-3">
                                                    <div>Daisy Anderson</div>
                                                    <div class="text-xs text-white-dark dark:text-gray-500">10 Jan 1:00PM</div>
                                                </div>
                                                <span class="whitespace-pre px-1 text-base text-success ltr:ml-auto rtl:mr-auto">+$10.08</span>
                                            </div>
                                            <div class="flex">
                                                <span
                                                    class="grid h-9 w-9 place-content-center rounded-md bg-primary-light text-primary dark:bg-primary dark:text-primary-light"
                                                >
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.926 9.70541C13.5474 9.33386 13.5474 8.74151 13.5474 7.55682V7.24712C13.5474 3.96249 13.5474 2.32018 12.6241 2.03721C11.7007 1.75425 10.711 3.09327 8.73167 5.77133L5.66953 9.91436C4.3848 11.6526 3.74244 12.5217 4.09639 13.205C4.10225 13.2164 4.10829 13.2276 4.1145 13.2387C4.48945 13.9117 5.59888 13.9117 7.81775 13.9117C9.05079 13.9117 9.6673 13.9117 10.054 14.2754"
                                                            stroke="currentColor"
                                                            stroke-width="1.5"
                                                        />
                                                        <path
                                                            opacity="0.5"
                                                            d="M13.9259 9.70557L13.9459 9.72481C14.3326 10.0885 14.9492 10.0885 16.1822 10.0885C18.4011 10.0885 19.5105 10.0885 19.8854 10.7615C19.8917 10.7726 19.8977 10.7838 19.9036 10.7951C20.2575 11.4785 19.6151 12.3476 18.3304 14.0858L15.2682 18.2288C13.2888 20.9069 12.2991 22.2459 11.3758 21.9629C10.4524 21.68 10.4524 20.0376 10.4525 16.753L10.4525 16.4434C10.4525 15.2587 10.4525 14.6663 10.074 14.2948L10.054 14.2755"
                                                            stroke="currentColor"
                                                            stroke-width="1.5"
                                                        />
                                                    </svg>
                                                </span>
                                                <div class="flex-1 px-3">
                                                    <div>Electricity Bill</div>
                                                    <div class="text-xs text-white-dark dark:text-gray-500">04 Jan 1:00PM</div>
                                                </div>
                                                <span class="whitespace-pre px-1 text-base text-danger ltr:ml-auto rtl:mr-auto">-$22.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel h-full overflow-hidden border-0 p-0">
                                    <div class="min-h-[190px] bg-gradient-to-r from-[#4361ee] to-[#160f6b] p-6">
                                        <div class="mb-6 flex items-center justify-between">
                                            <div class="flex items-center rounded-full bg-black/50 p-1 font-semibold text-white ltr:pr-3 rtl:pl-3">
                                                <img
                                                    class="block h-8 w-8 rounded-full border-2 border-white/50 object-cover ltr:mr-1 rtl:ml-1"
                                                    src="assets_guru/images/profile-34.jpeg"
                                                    alt="image"
                                                />
                                                Alan Green
                                            </div>
                                            <button
                                                type="button"
                                                class="flex h-9 w-9 items-center justify-between rounded-md bg-black text-white hover:opacity-80 ltr:ml-auto rtl:mr-auto"
                                            >
                                                <svg
                                                    class="m-auto h-6 w-6"
                                                    viewBox="0 0 24 24"
                                                    stroke="currentColor"
                                                    stroke-width="1.5"
                                                    fill="none"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                >
                                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="flex items-center justify-between text-white">
                                            <p class="text-xl">Wallet Balance</p>
                                            <h5 class="text-2xl ltr:ml-auto rtl:mr-auto"><span class="text-white-light">$</span>2953</h5>
                                        </div>
                                    </div>
                                    <div class="-mt-12 grid grid-cols-2 gap-2 px-8">
                                        <div class="rounded-md bg-white px-4 py-2.5 shadow dark:bg-[#060818]">
                                            <span class="mb-4 flex items-center justify-between dark:text-white"
                                                >Received
                                                <svg class="h-4 w-4 text-success" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19 15L12 9L5 15"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    />
                                                </svg>
                                            </span>
                                            <div
                                                class="btn w-full border-0 bg-[#ebedf2] py-1 text-base text-[#515365] shadow-none dark:bg-black dark:text-[#bfc9d4]"
                                            >
                                                $97.99
                                            </div>
                                        </div>
                                        <div class="rounded-md bg-white px-4 py-2.5 shadow dark:bg-[#060818]">
                                            <span class="mb-4 flex items-center justify-between dark:text-white"
                                                >Spent
                                                <svg class="h-4 w-4 text-danger" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19 9L12 15L5 9"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    />
                                                </svg>
                                            </span>
                                            <div
                                                class="btn w-full border-0 bg-[#ebedf2] py-1 text-base text-[#515365] shadow-none dark:bg-black dark:text-[#bfc9d4]"
                                            >
                                                $53.00
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <div class="mb-5">
                                            <span
                                                class="rounded-full bg-[#1b2e4b] px-4 py-1.5 text-xs text-white before:inline-block before:h-1.5 before:w-1.5 before:rounded-full before:bg-white ltr:before:mr-2 rtl:before:ml-2"
                                                >Pending</span
                                            >
                                        </div>
                                        <div class="mb-5 space-y-1">
                                            <div class="flex items-center justify-between">
                                                <p class="font-semibold text-[#515365]">Netflix</p>
                                                <p class="text-base"><span>$</span> <span class="font-semibold">13.85</span></p>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <p class="font-semibold text-[#515365]">BlueHost VPN</p>
                                                <p class="text-base"><span>$</span> <span class="font-semibold">15.66</span></p>
                                            </div>
                                        </div>
                                        <div class="flex justify-around px-2 text-center">
                                            <button type="button" class="btn btn-secondary ltr:mr-2 rtl:ml-2">View Details</button>
                                            <button type="button" class="btn btn-success">Pay Now $29.51</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
                                <div class="panel h-full w-full">
                                    <div class="mb-5 flex items-center justify-between">
                                        <h5 class="text-lg font-semibold dark:text-white-light">Recent Orders</h5>
                                    </div>
                                    <div class="table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="ltr:rounded-l-md rtl:rounded-r-md">Customer</th>
                                                    <th>Product</th>
                                                    <th>Invoice</th>
                                                    <th>Price</th>
                                                    <th class="ltr:rounded-r-md rtl:rounded-l-md">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="group text-white-dark hover:text-black dark:hover:text-white-light/90">
                                                    <td class="min-w-[150px] text-black dark:text-white">
                                                        <div class="flex items-center">
                                                            <img
                                                                class="h-8 w-8 rounded-md object-cover ltr:mr-3 rtl:ml-3"
                                                                src="assets_guru/images/profile-6.jpeg"
                                                                alt="avatar"
                                                            />
                                                            <span class="whitespace-nowrap">Luke Ivory</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-primary">Headphone</td>
                                                    <td><a href="apps-invoice-preview.html">#46894</a></td>
                                                    <td>$56.07</td>
                                                    <td><span class="badge bg-success shadow-md dark:group-hover:bg-transparent">Paid</span></td>
                                                </tr>
                                                <tr class="group text-white-dark hover:text-black dark:hover:text-white-light/90">
                                                    <td class="text-black dark:text-white">
                                                        <div class="flex items-center">
                                                            <img
                                                                class="h-8 w-8 rounded-md object-cover ltr:mr-3 rtl:ml-3"
                                                                src="assets_guru/images/profile-7.jpeg"
                                                                alt="avatar"
                                                            />
                                                            <span class="whitespace-nowrap">Andy King</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-info">Nike Sport</td>
                                                    <td><a href="apps-invoice-preview.html">#76894</a></td>
                                                    <td>$126.04</td>
                                                    <td><span class="badge bg-secondary shadow-md dark:group-hover:bg-transparent">Shipped</span></td>
                                                </tr>
                                                <tr class="group text-white-dark hover:text-black dark:hover:text-white-light/90">
                                                    <td class="text-black dark:text-white">
                                                        <div class="flex items-center">
                                                            <img
                                                                class="h-8 w-8 rounded-md object-cover ltr:mr-3 rtl:ml-3"
                                                                src="assets_guru/images/profile-8.jpeg"
                                                                alt="avatar"
                                                            />
                                                            <span class="whitespace-nowrap">Laurie Fox</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-warning">Sunglasses</td>
                                                    <td><a href="apps-invoice-preview.html">#66894</a></td>
                                                    <td>$56.07</td>
                                                    <td><span class="badge bg-success shadow-md dark:group-hover:bg-transparent">Paid</span></td>
                                                </tr>
                                                <tr class="group text-white-dark hover:text-black dark:hover:text-white-light/90">
                                                    <td class="text-black dark:text-white">
                                                        <div class="flex items-center">
                                                            <img
                                                                class="h-8 w-8 rounded-md object-cover ltr:mr-3 rtl:ml-3"
                                                                src="assets_guru/images/profile-9.jpeg"
                                                                alt="avatar"
                                                            />
                                                            <span class="whitespace-nowrap">Ryan Collins</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-danger">Sport</td>
                                                    <td><a href="apps-invoice-preview.html">#75844</a></td>
                                                    <td>$110.00</td>
                                                    <td><span class="badge bg-secondary shadow-md dark:group-hover:bg-transparent">Shipped</span></td>
                                                </tr>
                                                <tr class="group text-white-dark hover:text-black dark:hover:text-white-light/90">
                                                    <td class="text-black dark:text-white">
                                                        <div class="flex items-center">
                                                            <img
                                                                class="h-8 w-8 rounded-md object-cover ltr:mr-3 rtl:ml-3"
                                                                src="assets_guru/images/profile-10.jpeg"
                                                                alt="avatar"
                                                            />
                                                            <span class="whitespace-nowrap">Irene Collins</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-secondary">Speakers</td>
                                                    <td><a href="apps-invoice-preview.html">#46894</a></td>
                                                    <td>$56.07</td>
                                                    <td><span class="badge bg-success shadow-md dark:group-hover:bg-transparent">Paid</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="panel h-full w-full">
                                    <div class="mb-5 flex items-center justify-between">
                                        <h5 class="text-lg font-semibold dark:text-white-light">Top Selling Product</h5>
                                    </div>
                                    <div class="table-responsive">
                                        <table>
                                            <thead>
                                                <tr class="border-b-0">
                                                    <th class="ltr:rounded-l-md rtl:rounded-r-md">Product</th>
                                                    <th>Price</th>
                                                    <th>Discount</th>
                                                    <th>Sold</th>
                                                    <th class="ltr:rounded-r-md rtl:rounded-l-md">Source</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="group text-white-dark hover:text-black dark:hover:text-white-light/90">
                                                    <td class="min-w-[150px] text-black dark:text-white">
                                                        <div class="flex">
                                                            <img
                                                                class="h-8 w-8 rounded-md object-cover ltr:mr-3 rtl:ml-3"
                                                                src="assets_guru/images/product-headphones.jpg"
                                                                alt="avatar"
                                                            />
                                                            <p class="whitespace-nowrap">Headphone <span class="block text-xs text-primary">Digital</span></p>
                                                        </div>
                                                    </td>
                                                    <td>$168.09</td>
                                                    <td>$60.09</td>
                                                    <td>170</td>
                                                    <td>
                                                        <a class="flex items-center text-danger" href="javascript:;">
                                                            <svg
                                                                class="h-3.5 w-3.5 ltr:mr-1 rtl:ml-1 rtl:rotate-180"
                                                                viewBox="0 0 24 24"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M12.6644 5.47875L16.6367 9.00968C18.2053 10.404 18.9896 11.1012 18.9896 11.9993C18.9896 12.8975 18.2053 13.5946 16.6367 14.989L12.6644 18.5199C11.9484 19.1563 11.5903 19.4746 11.2952 19.342C11 19.2095 11 18.7305 11 17.7725V15.4279C7.4 15.4279 3.5 17.1422 2 19.9993C2 10.8565 7.33333 8.57075 11 8.57075V6.22616C11 5.26817 11 4.78917 11.2952 4.65662C11.5903 4.52407 11.9484 4.8423 12.6644 5.47875Z"
                                                                    stroke="currentColor"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                />
                                                                <path
                                                                    opacity="0.5"
                                                                    d="M15.5386 4.5L20.7548 9.34362C21.5489 10.081 22.0001 11.1158 22.0001 12.1994C22.0001 13.3418 21.4989 14.4266 20.629 15.1671L15.5386 19.5"
                                                                    stroke="currentColor"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                />
                                                            </svg>

                                                            Direct
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="group text-white-dark hover:text-black dark:hover:text-white-light/90">
                                                    <td class="text-black dark:text-white">
                                                        <div class="flex">
                                                            <img
                                                                class="h-8 w-8 rounded-md object-cover ltr:mr-3 rtl:ml-3"
                                                                src="assets_guru/images/product-shoes.jpg"
                                                                alt="avatar"
                                                            />
                                                            <p class="whitespace-nowrap">Shoes <span class="block text-xs text-warning">Faishon</span></p>
                                                        </div>
                                                    </td>
                                                    <td>$126.04</td>
                                                    <td>$47.09</td>
                                                    <td>130</td>
                                                    <td>
                                                        <a class="flex items-center text-success" href="javascript:;">
                                                            <svg
                                                                class="h-3.5 w-3.5 ltr:mr-1 rtl:ml-1 rtl:rotate-180"
                                                                viewBox="0 0 24 24"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M12.6644 5.47875L16.6367 9.00968C18.2053 10.404 18.9896 11.1012 18.9896 11.9993C18.9896 12.8975 18.2053 13.5946 16.6367 14.989L12.6644 18.5199C11.9484 19.1563 11.5903 19.4746 11.2952 19.342C11 19.2095 11 18.7305 11 17.7725V15.4279C7.4 15.4279 3.5 17.1422 2 19.9993C2 10.8565 7.33333 8.57075 11 8.57075V6.22616C11 5.26817 11 4.78917 11.2952 4.65662C11.5903 4.52407 11.9484 4.8423 12.6644 5.47875Z"
                                                                    stroke="currentColor"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                />
                                                                <path
                                                                    opacity="0.5"
                                                                    d="M15.5386 4.5L20.7548 9.34362C21.5489 10.081 22.0001 11.1158 22.0001 12.1994C22.0001 13.3418 21.4989 14.4266 20.629 15.1671L15.5386 19.5"
                                                                    stroke="currentColor"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                />
                                                            </svg>
                                                            Google
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="group text-white-dark hover:text-black dark:hover:text-white-light/90">
                                                    <td class="text-black dark:text-white">
                                                        <div class="flex">
                                                            <img
                                                                class="h-8 w-8 rounded-md object-cover ltr:mr-3 rtl:ml-3"
                                                                src="assets_guru/images/product-watch.jpg"
                                                                alt="avatar"
                                                            />
                                                            <p class="whitespace-nowrap">Watch <span class="block text-xs text-danger">Accessories</span></p>
                                                        </div>
                                                    </td>
                                                    <td>$56.07</td>
                                                    <td>$20.00</td>
                                                    <td>66</td>
                                                    <td>
                                                        <a class="flex items-center text-warning" href="javascript:;">
                                                            <svg
                                                                class="h-3.5 w-3.5 ltr:mr-1 rtl:ml-1 rtl:rotate-180"
                                                                viewBox="0 0 24 24"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M12.6644 5.47875L16.6367 9.00968C18.2053 10.404 18.9896 11.1012 18.9896 11.9993C18.9896 12.8975 18.2053 13.5946 16.6367 14.989L12.6644 18.5199C11.9484 19.1563 11.5903 19.4746 11.2952 19.342C11 19.2095 11 18.7305 11 17.7725V15.4279C7.4 15.4279 3.5 17.1422 2 19.9993C2 10.8565 7.33333 8.57075 11 8.57075V6.22616C11 5.26817 11 4.78917 11.2952 4.65662C11.5903 4.52407 11.9484 4.8423 12.6644 5.47875Z"
                                                                    stroke="currentColor"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                />
                                                                <path
                                                                    opacity="0.5"
                                                                    d="M15.5386 4.5L20.7548 9.34362C21.5489 10.081 22.0001 11.1158 22.0001 12.1994C22.0001 13.3418 21.4989 14.4266 20.629 15.1671L15.5386 19.5"
                                                                    stroke="currentColor"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                />
                                                            </svg>
                                                            Ads
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="group text-white-dark hover:text-black dark:hover:text-white-light/90">
                                                    <td class="text-black dark:text-white">
                                                        <div class="flex">
                                                            <img
                                                                class="h-8 w-8 rounded-md object-cover ltr:mr-3 rtl:ml-3"
                                                                src="assets_guru/images/product-laptop.jpg"
                                                                alt="avatar"
                                                            />
                                                            <p class="whitespace-nowrap">Laptop <span class="block text-xs text-primary">Digital</span></p>
                                                        </div>
                                                    </td>
                                                    <td>$110.00</td>
                                                    <td>$33.00</td>
                                                    <td>35</td>
                                                    <td>
                                                        <a class="flex items-center text-secondary" href="javascript:;">
                                                            <svg
                                                                class="h-3.5 w-3.5 ltr:mr-1 rtl:ml-1 rtl:rotate-180"
                                                                viewBox="0 0 24 24"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M12.6644 5.47875L16.6367 9.00968C18.2053 10.404 18.9896 11.1012 18.9896 11.9993C18.9896 12.8975 18.2053 13.5946 16.6367 14.989L12.6644 18.5199C11.9484 19.1563 11.5903 19.4746 11.2952 19.342C11 19.2095 11 18.7305 11 17.7725V15.4279C7.4 15.4279 3.5 17.1422 2 19.9993C2 10.8565 7.33333 8.57075 11 8.57075V6.22616C11 5.26817 11 4.78917 11.2952 4.65662C11.5903 4.52407 11.9484 4.8423 12.6644 5.47875Z"
                                                                    stroke="currentColor"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                />
                                                                <path
                                                                    opacity="0.5"
                                                                    d="M15.5386 4.5L20.7548 9.34362C21.5489 10.081 22.0001 11.1158 22.0001 12.1994C22.0001 13.3418 21.4989 14.4266 20.629 15.1671L15.5386 19.5"
                                                                    stroke="currentColor"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                />
                                                            </svg>
                                                            Email
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="group text-white-dark hover:text-black dark:hover:text-white-light/90">
                                                    <td class="text-black dark:text-white">
                                                        <div class="flex">
                                                            <img
                                                                class="h-8 w-8 rounded-md object-cover ltr:mr-3 rtl:ml-3"
                                                                src="assets_guru/images/product-camera.jpg"
                                                                alt="avatar"
                                                            />
                                                            <p class="whitespace-nowrap">Camera <span class="block text-xs text-primary">Digital</span></p>
                                                        </div>
                                                    </td>
                                                    <td>$56.07</td>
                                                    <td>$26.04</td>
                                                    <td>30</td>
                                                    <td>
                                                        <a class="flex items-center text-primary" href="javascript:;">
                                                            <svg
                                                                class="h-3.5 w-3.5 ltr:mr-1 rtl:ml-1 rtl:rotate-180"
                                                                viewBox="0 0 24 24"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M12.6644 5.47875L16.6367 9.00968C18.2053 10.404 18.9896 11.1012 18.9896 11.9993C18.9896 12.8975 18.2053 13.5946 16.6367 14.989L12.6644 18.5199C11.9484 19.1563 11.5903 19.4746 11.2952 19.342C11 19.2095 11 18.7305 11 17.7725V15.4279C7.4 15.4279 3.5 17.1422 2 19.9993C2 10.8565 7.33333 8.57075 11 8.57075V6.22616C11 5.26817 11 4.78917 11.2952 4.65662C11.5903 4.52407 11.9484 4.8423 12.6644 5.47875Z"
                                                                    stroke="currentColor"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                />
                                                                <path
                                                                    opacity="0.5"
                                                                    d="M15.5386 4.5L20.7548 9.34362C21.5489 10.081 22.0001 11.1158 22.0001 12.1994C22.0001 13.3418 21.4989 14.4266 20.629 15.1671L15.5386 19.5"
                                                                    stroke="currentColor"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                />
                                                            </svg>
                                                            Referral
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end main content section -->

                    <!-- start footer section -->
                    <p class="pt-6 text-center dark:text-white-dark ltr:sm:text-left rtl:sm:text-right">
                        © <span id="footer-year">2022</span>. Vristo All rights reserved.
                    </p>
                    <!-- end footer section -->
                </div>
            </div>
        </div>

        <script src="assets_guru/js/alpine-collaspe.min.js"></script>
        <script src="assets_guru/js/alpine-persist.min.js"></script>
        <script defer src="assets_guru/js/alpine-ui.min.js"></script>
        <script defer src="assets_guru/js/alpine-focus.min.js"></script>
        <script defer src="assets_guru/js/alpine.min.js"></script>
        <script src="assets_guru/js/custom.js"></script>
        <script defer src="assets_guru/js/apexcharts.js"></script>

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
                        const selector = document.querySelector('.sidebar ul a[href="' + window.location.pathname + '"]');
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
                        const selector = document.querySelector('ul.horizontal-menu a[href="' + window.location.pathname + '"]');
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

                    notifications: [
                        {
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

                    messages: [
                        {
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

                    languages: [
                        {
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
                            this.revenueChart = new ApexCharts(this.$refs.revenueChart, this.revenueChartOptions);
                            this.$refs.revenueChart.innerHTML = '';
                            this.revenueChart.render();

                            // sales by category
                            this.salesByCategory = new ApexCharts(this.$refs.salesByCategory, this.salesByCategoryOptions);
                            this.$refs.salesByCategory.innerHTML = '';
                            this.salesByCategory.render();

                            // daily sales
                            this.dailySales = new ApexCharts(this.$refs.dailySales, this.dailySalesOptions);
                            this.$refs.dailySales.innerHTML = '';
                            this.dailySales.render();

                            // total orders
                            this.totalOrders = new ApexCharts(this.$refs.totalOrders, this.totalOrdersOptions);
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
                            series: [
                                {
                                    name: 'Income',
                                    data: [16800, 16800, 15500, 17800, 15500, 17000, 19000, 16000, 15000, 17000, 14000, 17000],
                                },
                                {
                                    name: 'Expenses',
                                    data: [16500, 17500, 16200, 17300, 16000, 19500, 16000, 17000, 16000, 19000, 18000, 19000],
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
                                discrete: [
                                    {
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
                            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
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
                            series: [985, 737],
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
                            colors: isDark ? ['#5c1ac3', '#e2a03f', '#e7515a', '#e2a03f'] : ['#e2a03f', '#5c1ac3', '#e7515a'],
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
                                                    return w.globals.seriesTotals.reduce(function (a, b) {
                                                        return a + b;
                                                    }, 0);
                                                },
                                            },
                                        },
                                    },
                                },
                            },
                            labels: ['Apparel', 'Sports'],
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
                            series: [
                                {
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
                            responsive: [
                                {
                                    breakpoint: 480,
                                    options: {
                                        legend: {
                                            position: 'bottom',
                                            offsetX: -10,
                                            offsetY: 0,
                                        },
                                    },
                                },
                            ],
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
                            series: [
                                {
                                    name: 'Sales',
                                    data: [28, 40, 36, 52, 38, 60, 38, 52, 36, 40],
                                },
                            ],
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
