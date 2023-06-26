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
    <link rel="stylesheet" type="text/css" media="screen" href="siswa/css/perfect-scrollbar.min.css" />
    <link rel="stylesheet" href="load/load.css">
    <link rel="stylesheet" type="text/css" media="screen" href="siswa/css/style.css" />
    <link defer rel="stylesheet" type="text/css" media="screen" href="siswa/css/animate.css" />
    <script src="siswa/js/perfect-scrollbar.min.js"></script>
    <script defer src="siswa/js/popper.min.js"></script>
    <script defer src="siswa/js/tippy-bundle.umd.min.js"></script>
    <script defer src="siswa/js/sweetalert.min.js"></script>
</head>

<body>

     <!-- screen loader -->
     <div  class="spin_load  screen_loader animate__animated fixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
        <div class="center">
            <div class="ring">
            </div>
            <img src="load/logo.png" alt="Deskripsi gambar" class="my-img">
        </div>
    </div>
    <!-- sidebar menu overlay -->
    <div x-cloak class="fixed inset-0 z-50 bg-[black]/60 lg:hidden" :class="{ 'hidden': !$store.app.sidebar }"
        @click="$store.app.toggleSidebar()"></div>

    <!-- screen loader -->
    {{-- <div
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
    </div> --}}

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

    <!-- end theme customizer section -->

    <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
        <!-- start sidebar section -->
        <!-- end sidebar section -->

        <div class="">
            <!-- start header section -->

            <!-- end header section -->

            <div class="animate__animated p-6" :class="[$store.app.animation]">
                <!-- start main content section -->

                <div x-data="notes">
                    <div class="relative flex h-full gap-5 sm:h-[calc(100vh_-_150px)]">
                        <div class="absolute z-10 hidden h-full w-full rounded-md bg-black/60"
                            :class="{ '!block xl:!hidden': isShowNoteMenu }"
                            @click="isShowNoteMenu = !isShowNoteMenu">
                        </div>
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
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 7.5V6.108c0-1.135.845-2.098 1.976-2.192.373-.03.748-.057 1.123-.08M15.75 18H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08M15.75 18.75v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5A3.375 3.375 0 006.375 7.5H5.25m11.9-3.664A2.251 2.251 0 0015 2.25h-1.5a2.251 2.251 0 00-2.15 1.586m5.8 0c.065.21.1.433.1.664v.75h-6V4.5c0-.231.035-.454.1-.664M6.75 7.5H4.875c-.621 0-1.125.504-1.125 1.125v12c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V16.5a9 9 0 00-9-9z" />
                                                  </svg>
                                                <div class="ltr:ml-3 rtl:mr-3">Laporan Masuk</div>
                                            </div>
                                        </button>
                                        <button type="button"
                                            class="flex h-10 w-full items-center justify-between rounded-md p-2 font-medium hover:bg-white-dark/10 hover:text-primary dark:hover:bg-[#181F32] dark:hover:text-primary"
                                            :class="{
                                                'bg-gray-100 dark:text-primary text-primary dark:bg-[#181F32]': selectedTab ===
                                                    'acc'
                                            }"
                                            @click="tabChanged('acc')">
                                            <div class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
                                                  </svg>
                                                <div class="ltr:ml-3 rtl:mr-3">Laporan Diterima</div>
                                            </div>
                                        </button>
                                        <button type="button"
                                            class="flex h-10 w-full items-center justify-between rounded-md p-2 font-medium hover:bg-white-dark/10 hover:text-primary dark:hover:bg-[#181F32] dark:hover:text-primary"
                                            :class="{
                                                'bg-gray-100 dark:text-primary text-primary dark:bg-[#181F32]': selectedTab ===
                                                    'dec'
                                            }"
                                            @click="tabChanged('dec')">
                                            <div class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m6 4.125l2.25 2.25m0 0l2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                                  </svg>
                                                <div class="ltr:ml-3 rtl:mr-3">Laporan Ditolak</div>
                                            </div>
                                        </button>
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
                                                                    x-text="note.date">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h4 class="mt-4 font-semibold" x-text="note.title"></h4>
                                                        <p class="mt-2 text-white-dark" x-text="note.description">
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="absolute bottom-4 left-0 w-full px-5">
                                                    <div class="mt-5 flex items-center justify-between">
                                                        <div class="flex items-center mt-5">
                                                            <button type="button"
                                                                class="group text-gray-600">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            class="h-4.5 w-4.5 ltr:mr-3 rtl:ml-3">
                                                                            <path opacity="0.5"
                                                                                d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z"
                                                                                stroke="currentColor"
                                                                                stroke-width="1.5" />
                                                                            <path
                                                                                d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                                                                stroke="currentColor"
                                                                                stroke-width="1.5" />
                                                                        </svg>
                                                            </button>
                                                        </div>
                                                        <div class="flex items-center mt-4">
                                                            <button type="button" class="text-success">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                  </svg>

                                                            </button>
                                                            <button type="button"
                                                                class="group text-danger ltr:ml-1 rtl:mr-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
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
                                                        stroke-linecap="round">
                                                    </path>
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
                <!-- end footer section -->
            </div>
        </div>
    </div>

    <script src="siswa/js/alpine-collaspe.min.js"></script>
    <script src="siswa/js/alpine-persist.min.js"></script>
    <script defer src="siswa/js/alpine-ui.min.js"></script>
    <script defer src="siswa/js/alpine-focus.min.js"></script>
    <script defer src="siswa/js/alpine.min.js"></script>
    <script src="siswa/js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script>
      $(window).on('load', function() {
          $('.spin_load').fadeOut();
      });
  </script>
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
                        user: 'Max Smith',
                        thumb: 'profile-16.jpeg',
                        title: 'Lionel Messi',
                        description: 'Curabitur facilisis vel elit sed dapibus sodales purus rhoncus.',
                        date: '11/01/2020',
                        isFav: false,
                        tag: '',
                    },
                    {
                        id: 2,
                        user: 'John Doe',
                        thumb: 'profile-8.jpeg',
                        title: 'C. Ronaldo',
                        description: 'Facilisis curabitur facilisis vel elit sed dapibus sodales purus.',
                        date: '11/02/2020',
                        isFav: true,
                        tag: '',
                    },
                    {
                        id: 3,
                        user: 'Kia Jain',
                        thumb: 'profile-4.jpeg',
                        title: 'Benzema',
                        description: 'Proin a dui malesuada, laoreet mi vel, imperdiet diam quam laoreet.',
                        date: '11/04/2020',
                        isFav: false,
                        tag: '',
                    },
                    {
                        id: 4,
                        user: 'Max Smith',
                        thumb: 'profile-16.jpeg',
                        title: 'Mbappe',
                        description: 'Excepteur sint occaecat cupidatat non proident, anim id est laborum.',
                        date: '11/08/2020',
                        isFav: false,
                        tag: '',
                    },
                    {
                        id: 5,
                        user: 'Gissele',
                        thumb: 'profile-2.jpeg',
                        title: 'Vinicius Jr.',
                        description: 'Maecenas condimentum neque mollis, egestas leo ut, gravida.',
                        date: '11/09/2020',
                        isFav: false,
                        tag: '',
                    },
                    {
                        id: 6,
                        user: 'Max Smith',
                        thumb: 'profile-16.jpeg',
                        title: 'Pesulap Merah',
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
                    if (this.selectedTab != 'acc') {
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

                searchNotes() {
                    if (this.selectedTab != 'dec') {
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
