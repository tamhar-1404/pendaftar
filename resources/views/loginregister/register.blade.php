<!DOCTYPE html>
<html lang="en">
{{--  <!-- Mirrored from lineone.piniastudio.com/pages-singup-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 May 2023 04:16:45 GMT -->  --}}
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Meta tags  -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

    <title>Daftar</title>
    <link rel="icon" type="image/png" href="lineone/images/favicon.png" />
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/perfect-scrollbar.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" />
    <link defer rel="stylesheet" type="text/css" media="screen" href="assets/css/animate.css" />
    <script src="assets/js/perfect-scrollbar.min.js"></script>
    <script defer src="assets/js/popper.min.js"></script>
    <script defer src="assets/js/tippy-bundle.umd.min.js"></script>
    <script defer src="assets/js/sweetalert.min.js"></script>
    <!-- CSS Assets -->
    <link rel="stylesheet" href="lineone/css/app.css" />

    <!-- Javascript Assets -->
    <script src="lineone/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <script>
        /**
         * THIS SCRIPT REQUIRED FOR PREVENT FLICKERING IN SOME BROWSERS
         */
        localStorage.getItem("_x_darkMode_on") === "true" && document.documentElement.classList.add("dark");
    </script>
    <style>
        .step {
            display: none;
        }

        .step.active {
            display: block;
        }

        /* .parsley-errors-list {
            color: red
        } */
    </style>
</head>

<body x-data class="is-header-blur" x-bind="$store.global.documentBody">
    <!-- App preloader-->
    <div class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">
        <div class="app-preloader-inner relative inline-block h-48 w-48"></div>

    </div>
    {{-- <div class="center fixed z-50 grid h-full w-full place-content-center">
        <div class="ring relative inline-block h-48 w-48"></div>
        <img src="{{ asset('admin/loading/logo.png') }}" alt="Deskripsi gambar" class="my-img">
    </div> --}}

    <!-- Page Wrapper -->
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak>
        <div class="fixed top-0 hidden p-6 lg:block lg:px-12">
            <a href="#" class="flex items-center space-x-2">
                <img class="h-12 w-100" src="lineone/images/hummasoft2.png" alt="logo" />
            </a>
        </div>
        <div class="w-full">
            <div class="hidden w-full place-items-center lg:grid">
                <div class="w-full max-w-lg p-6">
                    <img class="w-full" x-show="!$store.global.isDarkModeEnabled"
                        src="lineone/images/illustrations/login.svg" alt="image" />
                    <img class="w-full" x-show="$store.global.isDarkModeEnabled"
                        src="lineone/images/illustrations/dashboard-meet-dark.svg" alt="image" />
                </div>

            </div>

            <div class="mb-5" x-data="{ activeTab: 1}">
                <div class="inline-block w-full">
                    <div class="relative z-[1]">
                        <div
                            class="absolute top-[30px] -z-[1] m-auto h-1 w-[15%] bg-primary transition-[width] ltr:left-0 rtl:right-0"
                            :class="{'w-[15%]' : activeTab === 1, 'w-[48%]' : activeTab === 2, 'w-[81%]' : activeTab === 3}"
                        ></div>
                        <ul class="mb-5 grid grid-cols-4">
                            <li class="mx-auto">
                                <a
                                    href="javascript:;"
                                    class="flex h-16 w-16 items-center justify-center rounded-full border-[3px] border-[#f3f2ee] bg-white dark:border-[#1b2e4b] dark:bg-[#253b5c]"
                                    :class="{'!border-primary !bg-primary text-white': activeTab === 1}"
                                    @click="activeTab = 1"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5"
                                    >
                                        <path
                                            opacity="0.5"
                                            d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        />
                                        <path d="M12 15L12 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </a>
                                <span class="mt-2 block text-center" :class="{'text-primary' : activeTab === 1}">Home</span>
                            </li>
                            <li class="mx-auto">
                                <a
                                    href="javascript:;"
                                    class="flex h-16 w-16 items-center justify-center rounded-full border-[3px] border-[#f3f2ee] bg-white dark:border-[#1b2e4b] dark:bg-[#253b5c]"
                                    :class="{'!border-primary !bg-primary text-white': activeTab === 2}"
                                    @click="activeTab = 2"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5"
                                    >
                                        <circle cx="12" cy="6" r="4" stroke="currentColor" stroke-width="1.5" />
                                        <ellipse opacity="0.5" cx="12" cy="17" rx="7" ry="4" stroke="currentColor" stroke-width="1.5" />
                                    </svg>
                                </a>
                                <span class="mt-2 block text-center" :class="{'text-primary' : activeTab === 2}">About</span>
                            </li>
                            <li class="mx-auto">
                                <a
                                    href="javascript:;"
                                    class="flex h-16 w-16 items-center justify-center rounded-full border-[3px] border-[#f3f2ee] bg-white dark:border-[#1b2e4b] dark:bg-[#253b5c]"
                                    :class="{'!border-primary !bg-primary text-white': activeTab === 3}"
                                    @click="activeTab = 3"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5"
                                    >
                                        <path
                                            d="M20.9751 12.1852L20.2361 12.0574L20.9751 12.1852ZM20.2696 16.265L19.5306 16.1371L20.2696 16.265ZM6.93776 20.4771L6.19055 20.5417H6.19055L6.93776 20.4771ZM6.1256 11.0844L6.87281 11.0198L6.1256 11.0844ZM13.9949 5.22142L14.7351 5.34269V5.34269L13.9949 5.22142ZM13.3323 9.26598L14.0724 9.38725V9.38725L13.3323 9.26598ZM6.69813 9.67749L6.20854 9.10933H6.20854L6.69813 9.67749ZM8.13687 8.43769L8.62646 9.00585H8.62646L8.13687 8.43769ZM10.518 4.78374L9.79207 4.59542L10.518 4.78374ZM10.9938 2.94989L11.7197 3.13821L11.7197 3.13821L10.9938 2.94989ZM12.6676 2.06435L12.4382 2.77841L12.4382 2.77841L12.6676 2.06435ZM12.8126 2.11093L13.0419 1.39687L13.0419 1.39687L12.8126 2.11093ZM9.86194 6.46262L10.5235 6.81599V6.81599L9.86194 6.46262ZM13.9047 3.24752L13.1787 3.43584V3.43584L13.9047 3.24752ZM11.6742 2.13239L11.3486 1.45675L11.3486 1.45675L11.6742 2.13239ZM20.2361 12.0574L19.5306 16.1371L21.0086 16.3928L21.7142 12.313L20.2361 12.0574ZM13.245 21.25H8.59634V22.75H13.245V21.25ZM7.68497 20.4125L6.87281 11.0198L5.37839 11.149L6.19055 20.5417L7.68497 20.4125ZM19.5306 16.1371C19.0238 19.0677 16.3813 21.25 13.245 21.25V22.75C17.0712 22.75 20.3708 20.081 21.0086 16.3928L19.5306 16.1371ZM13.2548 5.10015L12.5921 9.14472L14.0724 9.38725L14.7351 5.34269L13.2548 5.10015ZM7.18772 10.2456L8.62646 9.00585L7.64728 7.86954L6.20854 9.10933L7.18772 10.2456ZM11.244 4.97206L11.7197 3.13821L10.2678 2.76157L9.79207 4.59542L11.244 4.97206ZM12.4382 2.77841L12.5832 2.82498L13.0419 1.39687L12.897 1.3503L12.4382 2.77841ZM10.5235 6.81599C10.8354 6.23198 11.0777 5.61339 11.244 4.97206L9.79207 4.59542C9.65572 5.12107 9.45698 5.62893 9.20041 6.10924L10.5235 6.81599ZM12.5832 2.82498C12.8896 2.92342 13.1072 3.16009 13.1787 3.43584L14.6306 3.05921C14.4252 2.26719 13.819 1.64648 13.0419 1.39687L12.5832 2.82498ZM11.7197 3.13821C11.7547 3.0032 11.8522 2.87913 11.9998 2.80804L11.3486 1.45675C10.8166 1.71309 10.417 2.18627 10.2678 2.76157L11.7197 3.13821ZM11.9998 2.80804C12.1345 2.74311 12.2931 2.73181 12.4382 2.77841L12.897 1.3503C12.3872 1.18655 11.8312 1.2242 11.3486 1.45675L11.9998 2.80804ZM14.1537 10.9842H19.3348V9.4842H14.1537V10.9842ZM14.7351 5.34269C14.8596 4.58256 14.824 3.80477 14.6306 3.0592L13.1787 3.43584C13.3197 3.97923 13.3456 4.54613 13.2548 5.10016L14.7351 5.34269ZM8.59634 21.25C8.12243 21.25 7.726 20.887 7.68497 20.4125L6.19055 20.5417C6.29851 21.7902 7.34269 22.75 8.59634 22.75V21.25ZM8.62646 9.00585C9.30632 8.42 10.0391 7.72267 10.5235 6.81599L9.20041 6.10924C8.85403 6.75767 8.30249 7.30493 7.64728 7.86954L8.62646 9.00585ZM21.7142 12.313C21.9695 10.8365 20.8341 9.4842 19.3348 9.4842V10.9842C19.9014 10.9842 20.3332 11.4959 20.2361 12.0574L21.7142 12.313ZM12.5921 9.14471C12.4344 10.1076 13.1766 10.9842 14.1537 10.9842V9.4842C14.1038 9.4842 14.0639 9.43901 14.0724 9.38725L12.5921 9.14471ZM6.87281 11.0198C6.84739 10.7258 6.96474 10.4378 7.18772 10.2456L6.20854 9.10933C5.62021 9.61631 5.31148 10.3753 5.37839 11.149L6.87281 11.0198Z"
                                            fill="currentColor"
                                        />
                                        <path
                                            opacity="0.5"
                                            d="M3.9716 21.4709L3.22439 21.5355L3.9716 21.4709ZM3 10.2344L3.74721 10.1698C3.71261 9.76962 3.36893 9.46776 2.96767 9.48507C2.5664 9.50239 2.25 9.83274 2.25 10.2344L3 10.2344ZM4.71881 21.4063L3.74721 10.1698L2.25279 10.299L3.22439 21.5355L4.71881 21.4063ZM3.75 21.5129V10.2344H2.25V21.5129H3.75ZM3.22439 21.5355C3.2112 21.383 3.33146 21.2502 3.48671 21.2502V22.7502C4.21268 22.7502 4.78122 22.1281 4.71881 21.4063L3.22439 21.5355ZM3.48671 21.2502C3.63292 21.2502 3.75 21.3686 3.75 21.5129H2.25C2.25 22.1954 2.80289 22.7502 3.48671 22.7502V21.2502Z"
                                            fill="currentColor"
                                        />
                                    </svg>
                                </a>
                                <span class="mt-2 block text-center" :class="{'text-primary' : activeTab === 3}">Success</span>
                            </li>
                            <li class="mx-auto">
                                <a
                                    href="javascript:;"
                                    class="flex h-16 w-16 items-center justify-center rounded-full border-[3px] border-[#f3f2ee] bg-white dark:border-[#1b2e4b] dark:bg-[#253b5c]"
                                    :class="{'!border-primary !bg-primary text-white': activeTab === 4}"
                                    @click="activeTab = 4"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5"
                                    >
                                        <circle cx="12" cy="6" r="4" stroke="currentColor" stroke-width="1.5" />
                                        <ellipse opacity="0.5" cx="12" cy="17" rx="7" ry="4" stroke="currentColor" stroke-width="1.5" />
                                    </svg>
                                </a>
                                <span class="mt-2 block text-center" :class="{'text-primary' : activeTab === 2}">About</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <template x-if="activeTab === 1">
                            {{--  isi  --}}
                           </template>
                        <template x-if="activeTab === 2">
                             {{--  isi  --}}
                             </template>
                        <template x-if="activeTab === 3">
                             {{--  isi  --}}
                           </template>
                        <template x-if="activeTab === 4">
                             {{--  isi  --}}
                            </template>
                    </div>
                    <div class="flex justify-between">
                        <button type="button" class="btn btn-primary" :disabled="activeTab === 1" @click="activeTab--">Back</button>
                        <button type="button" class="btn btn-primary" :disabled="activeTab === 3" @click="activeTab++">Next</button>
                    </div>
                </div>
            </div>
            <template x-if="codeArr.includes('code5')">
                <pre class="code overflow-auto rounded-md !bg-[#191e3a] p-4 text-white">
&lt;!-- basic --&gt;
&lt;div class=&quot;mb-5&quot; x-data=&quot;{ activeTab: 1}&quot;&gt;
&lt;div class=&quot;inline-block w-full&quot;&gt;
&lt;div class=&quot;relative z-[1]&quot;&gt;
&lt;div class=&quot;bg-primary w-[15%] h-1 absolute ltr:left-0 rtl:right-0 top-[30px] m-auto -z-[1] transition-[width]&quot; :class=&quot;{'w-[15%]' : activeTab === 1, 'w-[48%]' : activeTab === 2, 'w-[81%]' : activeTab === 3}&quot;&gt;&lt;/div&gt;
&lt;ul class=&quot;mb-5 grid grid-cols-3&quot;&gt;
&lt;li class=&quot;mx-auto&quot;&gt;
&lt;a href=&quot;javascript:;&quot; class=&quot;border-[3px] border-[#f3f2ee] bg-white dark:bg-[#253b5c] dark:border-[#1b2e4b] flex justify-center items-center w-16 h-16 rounded-full&quot; :class=&quot;{'!border-primary !bg-primary text-white': activeTab === 1}&quot; @click=&quot;activeTab = 1&quot;&gt;
&lt;svg&gt; ... &lt;/svg&gt;
&lt;/a&gt;
&lt;span class=&quot;text-center block mt-2&quot; :class=&quot;{'text-primary' : activeTab === 1}&quot;&gt;Home&lt;/span&gt;
&lt;/li&gt;
&lt;li class=&quot;mx-auto&quot;&gt;
&lt;a href=&quot;javascript:;&quot; class=&quot;border-[3px] border-[#f3f2ee] bg-white dark:bg-[#253b5c] dark:border-[#1b2e4b] flex justify-center items-center w-16 h-16 rounded-full&quot; :class=&quot;{'!border-primary !bg-primary text-white': activeTab === 2}&quot; @click=&quot;activeTab = 2&quot;&gt;
&lt;svg&gt; ... &lt;/svg&gt;
&lt;/a&gt;
&lt;span class=&quot;text-center block mt-2&quot; :class=&quot;{'text-primary' : activeTab === 2}&quot;&gt;About&lt;/span&gt;
&lt;/li&gt;
&lt;li class=&quot;mx-auto&quot;&gt;
&lt;a href=&quot;javascript:;&quot; class=&quot;border-[3px] border-[#f3f2ee] bg-white dark:bg-[#253b5c] dark:border-[#1b2e4b] flex justify-center items-center w-16 h-16 rounded-full&quot; :class=&quot;{'!border-primary !bg-primary text-white': activeTab === 3}&quot; @click=&quot;activeTab = 3&quot;&gt;
&lt;svg&gt; ... &lt;/svg&gt;
&lt;/a&gt;
&lt;span class=&quot;text-center block mt-2&quot; :class=&quot;{'text-primary' : activeTab === 3}&quot;&gt;Success&lt;/span&gt;
&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;div&gt;
&lt;template x-if=&quot;activeTab === 1&quot;&gt;
&lt;p class=&quot;mb-5&quot;&gt;Try the keyboard navigation by clicking arrow left or right!&lt;/p&gt;
&lt;/template&gt;
&lt;template x-if=&quot;activeTab === 2&quot;&gt;
&lt;p class=&quot;mb-5&quot;&gt;The next and previous buttons help you to navigate through your content.&lt;/p&gt;
&lt;/template&gt;
&lt;template x-if=&quot;activeTab === 3&quot;&gt;
&lt;p class=&quot;mb-5&quot;&gt;Wonderful transition effects.&lt;/p&gt;
&lt;/template&gt;
&lt;/div&gt;
&lt;div class=&quot;flex justify-between&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; :disabled=&quot;activeTab === 1&quot; @click=&quot;activeTab--&quot;&gt;Back&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; :disabled=&quot;activeTab === 3&quot; @click=&quot;activeTab++&quot;&gt;Next&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
</pre
                >
            </template>
        </div>
        <div class="progress-bar">
            <div class="progress"></div>
        </div>

        <div class="col-span-12 grid lg:col-span-6 lg:place-items-center z-10">

        </div>
        <main class="flex w-full flex-col items-center bg-white dark:bg-navy-700 lg:max-w-md">
            <div class="flex w-full max-w-sm grow flex-col justify-center p-5">
                <div class="text-center">
                    <img class="mx-auto h-16 w-16 lg:hidden" src="images/app-logo.svg" alt="logo" />
                    <div class="mt-4">
                        <h2 class="text-2xl font-semibold text-slate-600 dark:text-navy-100">Selamat Datang</h2>
                        <p class="text-slate-400 dark:text-navy-300">di Hummasoft Tecnology</p>
                    </div>
                </div>

                <div class="mt-5 space-y-4">
                    <form method="POST" action="{{ route('postregister') }}" enctype="multipart/form-data"
                        id="register-form">
                        {{-- step 1 --}}
                        <div class="step" id="">
                            <div class="mt-4 space-y-4">
                                <label class="block">
                                    <span>Nama</span>
                                    <span class="relative mt-1.5 flex">
                                        <input id="name" name="name"
                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Masukkan nama anda" type="text" required />
                                    </span>
                                </label>
                            </div>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 mt-4">
                                <label class="block">
                                    <span>Tempat</span>
                                    <span class="relative mt-1.5 flex">
                                        <input id="tempat" name="tempat"
                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Kota anda" type="text" />
                                    </span>
                                </label>
                                @error('tempat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <label class="block">
                                    <span>Tanggal lahir</span>
                                    <span class="relative mt-1.5 flex">
                                        <input x-init="$el._x_flatpickr = flatpickr($el)" id="tanggal" name="tanggal"
                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Choose date..." type="text" />
                                        <span
                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-5 w-5 transition-colors duration-200" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </span>
                                    </span>
                                </label>
                                @error('tanggal')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mt-4 space-y-4">
                                <label class="block">
                                    <span>Kelas</span>
                                    <span class="relative mt-1.5 flex">
                                        <input id="kelas" name="kelas"
                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Masukkan Kelas anda" type="text" />
                                    </span>
                                </label>
                            </div>
                            @error('kelas')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="mt-4 space-y-4">
                                <label class="block">
                                    <span>NISN</span>
                                    <span class="relative mt-1.5 flex">
                                        <input id="nisn" name="nisn"
                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Masukkan NISN anda" type="text" />
                                    </span>
                                </label>
                            </div>
                            @error('nisn')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="mt-4 space-y-4">
                                <label class="block">
                                    <span>Jenis Kelamin</span>
                                    <div class="mt-2 grid grid-cols-2 place-items-start gap-6 sm:grid-cols-6">
                                        <label class="inline-flex items-center space-x-2">
                                            <input id="jeniskelamin" name="jeniskelamin"
                                                class="form-radio is-outline h-5 w-5 rounded-full border-slate-400/70 before:!bg-info checked:!border-info hover:!border-info focus:!border-info dark:border-navy-400"
                                                name="outline_squircle" type="radio" />
                                            <span>Laki - laki</span>
                                        </label>
                                        <label class="inline-flex items-center space-x-2">
                                            <input id="jeniskelamin" name="jeniskelamin"
                                                class="form-radio is-outline h-5 w-5 rounded-full border-slate-400/70 before:!bg-info checked:!border-info hover:!border-info focus:!border-info dark:border-navy-400"
                                                name="outline_squircle" type="radio" />
                                            <span>Perempuan</span>
                                        </label>
                                    </div>
                                </label>
                            </div>
                            @error('jeniskelamin')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <button type="button"
                                class="next-button btn mt-10 h-10 w-full bg-info font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                Selanjutnya
                            </button>
                        </div>

                        {{-- step 2 --}}
                        <div class="step step-2" id="step2">
                            <div class="mt-4 space-y-4">
                                <label class="block">
                                    <span>Alamat</span>
                                    <span class="relative mt-1.5 flex">
                                        <textarea name="alamat" id="alamat"
                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Masukkan nama anda"></textarea>
                                    </span>
                                </label>
                            </div>
                            @error('alamat')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="mt-4 space-y-4">
                                <label class="block">
                                    <span>Sekolah</span>
                                    <span class="relative mt-1.5 flex">
                                        <input id="sekolah" name="sekolah"
                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Masukkan Kelas anda" type="text" />
                                    </span>
                                </label>
                            </div>
                            @error('sekolah')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="mt-4 space-y-4">
                                <label class="block">
                                    <span>Jurusan</span>
                                    <span class="relative mt-1.5 flex">
                                        <input id="jurusan" name="jurusan"
                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Masukkan Kelas anda" type="text" />
                                    </span>
                                </label>
                            </div>
                            @error('jurusan')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 mt-4">
                                <label class="block">
                                    <span>Awal Magang</span>
                                    <span class="relative mt-1.5 flex">
                                        <input x-init="$el._x_flatpickr = flatpickr($el)" id="magang_awal" name="magang_awal"
                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Choose date..." type="text" />
                                        <span
                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-5 w-5 transition-colors duration-200" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </span>
                                    </span>
                                </label>
                                @error('magang_awal')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <label class="block">
                                    <span>Akhir Magang</span>
                                    <span class="relative mt-1.5 flex">
                                        <input x-init="$el._x_flatpickr = flatpickr($el)" id="magang_akhir" name="magang_akhir"
                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Choose date..." type="text" />
                                        <span
                                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-5 w-5 transition-colors duration-200" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            @error('magang_akhir')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class=" flex items-center justify-center mt-4 ml-auto col gap-4">
                                <button type="button"
                                    class="prev-button btn w-full mt-10 h-10 bg-info font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                    Kembali
                                </button>
                                <button type="button"
                                    class="next-button btn mt-10 w-full h-10 bg-info font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                    Selanjutnya
                                </button>
                            </div>
                        </div>

                        {{-- step 3 --}}
                        <div class="step" id="step3">
                            <div class="mt-4 space-y-4">
                                <label class="block">
                                    <span>Foto Siswa</span>
                                    <span class="relative mt-1.5 flex">
                                        <input id="ctnFile" type="file" id="foto_siswa" name="foto_siswa"
                                            class="block w-full h-9 rounded-md file:py-2 file:px-4 file:border-0 file:font-semibold p-0  bg-white border focus:outline-none focus:ring  focus:ring-indigo-200 focus:ring-opacity-50 file:bg-[#24AEE4] ltr:file:mr-5 rtl:file:ml-5 file:text-white file:hover:bg-[#24AEE4]"
                                            required />
                                    </span>
                                </label>
                            </div>
                            @error('foto_siswa')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="mt-4 space-y-4">
                                <label class="block">
                                    <span>Surat Pernyataan diri sendiri</span>
                                    <span class="relative mt-1.5 flex">
                                        <input id="ctnFile" type="file" id="sp_diri" name="sp_diri"
                                            class="block w-full h-9 rounded-md file:py-2 file:px-4 file:border-0 file:font-semibold p-0  bg-white border focus:outline-none focus:ring  focus:ring-indigo-200 focus:ring-opacity-50 file:bg-[#24AEE4] ltr:file:mr-5 rtl:file:ml-5 file:text-white file:hover:bg-[#24AEE4]"
                                            required />
                                    </span>
                                </label>
                            </div>
                            @error('sp_diri')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="mt-4 space-y-4">
                                <label class="block">
                                    <span>Surat Pernyataan Orang Tua</span>
                                    <span class="relative mt-1.5 flex">
                                        <input id="ctnFile" type="file" id="sp_ortu" name="sp_ortu"
                                            class="block w-full h-9 rounded-md file:py-2 file:px-4 file:border-0 file:font-semibold p-0  bg-white border focus:outline-none focus:ring  focus:ring-indigo-200 focus:ring-opacity-50 file:bg-[#24AEE4] ltr:file:mr-5 rtl:file:ml-5 file:text-white file:hover:bg-[#24AEE4]"
                                            required />
                                    </span>
                                </label>
                            </div>
                            @error('sp_ortu')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="mt-4 space-y-4">
                                <label class="block">
                                    <span>SKCK</span>
                                    <span class="relative mt-1.5 flex">
                                        <input id="ctnFile" type="file" id="skck" name="skck"
                                            class="block w-full h-9 rounded-md file:py-2 file:px-4 file:border-0 file:font-semibold p-0  bg-white border focus:outline-none focus:ring  focus:ring-indigo-200 focus:ring-opacity-50 file:bg-[#24AEE4] ltr:file:mr-5 rtl:file:ml-5 file:text-white file:hover:bg-[#24AEE4]"
                                            required />
                                    </span>
                                </label>
                            </div>
                            @error('skck')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="mt-4 space-y-4">
                                <label class="block">
                                    <span>CV</span>
                                    <span class="relative mt-1.5 flex">
                                        <input id="ctnFile" type="file" id="cv" name="cv"
                                            class="block w-full h-9 rounded-md file:py-2 file:px-4 file:border-0 file:font-semibold p-0  bg-white border focus:outline-none focus:ring  focus:ring-indigo-200 focus:ring-opacity-50 file:bg-[#24AEE4] ltr:file:mr-5 rtl:file:ml-5 file:text-white file:hover:bg-[#24AEE4]"
                                            required />
                                    </span>
                                </label>
                            </div>
                            @error('cv')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class=" flex items-center justify-center mt-4 ml-auto col gap-4">
                                <button type="button"
                                    class="prev-button btn mt-10 w-full h-10 bg-info font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                    Kembali
                                </button>
                                <button type="button"
                                    class="next-button btn mt-10 w-full h-10 bg-info font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                    Selanjutnya
                                </button>
                            </div>
                        </div>

                        {{-- step 4 --}}
                        <div class="step" id="">
                            <div class="mt-4 space-y-4">
                                <label class="relative flex">
                                    <input id="email" name="email"
                                        class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                                        placeholder="Email" type="email" />
                                    <span
                                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 transition-colors duration-200" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </span>
                                </label>
                            </div>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="mt-4 space-y-4">
                                <label class="relative mt-4 flex">
                                    <input id="password" name="password"
                                        class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                                        placeholder="Password" type="password" />
                                    <span
                                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 transition-colors duration-200" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                        </svg>
                                    </span>
                                </label>
                            </div>
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="mt-4 space-y-4">
                                <label class="relative mt-4 flex">
                                    <input id="password" name="password"
                                        class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                                        placeholder="Konfirmasi Password" type="password" />
                                    <span
                                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 transition-colors duration-200" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                        </svg>
                                    </span>
                                </label>
                            </div>
                            @error('password_confirmation')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class=" flex items-center justify-center mt-4 ml-auto col gap-4">
                                <button type="button"
                                    class="prev-button btn mt-10 w-full h-10 bg-info font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                    Kembali
                                </button>
                                <button type="submit"
                                    class="btn mt-10 w-full h-10 bg-info font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                    Daftar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="mt-4 text-center text-xs+">
                    <p class="line-clamp-1">
                        <span>Sudah punya Akun? </span>
                        <a class="text-info transition-colors hover:text-info-focus dark:text-accent-light dark:hover:text-accent"
                            href="{{ route('login.index') }}">Login</a>
                    </p>
                </div>
            </div>
        </main>
    </div>

    <!--
        This is a place for Alpine.js Teleport feature
        @see https://alpinejs.dev/directives/teleport
      -->
    <div id="x-teleport-target"></div>
    <script>
        window.addEventListener("DOMContentLoaded", () => Alpine.start());
    </script>


    <!-- JavaScript untuk mengatur tampilan dan navigasi antar langkah -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById("register-form");
            const steps = Array.from(form.getElementsByClassName("step"));
            const nextButtons = Array.from(form.getElementsByClassName("next-button"));
            const prevButtons = Array.from(form.getElementsByClassName("prev-button"));
            let currentStep = 0;

            function showStep(stepIndex) {
                steps.forEach(function(step, index) {
                    if (index === stepIndex) {
                        step.style.display = "block";
                    } else {
                        step.style.display = "none";
                    }
                });
            }

            function goToNextStep() {
                if (currentStep < steps.length - 1) {
                    currentStep++;
                    showStep(currentStep);
                }
            }

            function goToPrevStep() {
                if (currentStep > 0) {
                    currentStep--;
                    showStep(currentStep);
                }
            }

            nextButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                    goToNextStep();
                });
            });

            prevButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                    goToPrevStep();
                });
            });

            showStep(currentStep);
        });
    </script>
</body>

<!-- Mirrored from lineone.piniastudio.com/pages-singup-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 May 2023 04:16:45 GMT -->

</html>
