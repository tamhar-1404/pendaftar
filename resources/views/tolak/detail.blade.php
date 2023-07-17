<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Data Ditolak</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="admin/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" media="screen"
        href="{{ asset('admin/assets/css/perfect-scrollbar.min.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('admin/assets/css/style.css') }}" />
    <link rel="stylesheet" href="load/load.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    {{--  <link defer rel="stylesheet" type="text/css" media="screen" href="{{ asset('admin/assets/css/animate.css') }}" />  --}}
    <script src="{{ asset('admin/assets/js/perfect-scrollbar.min.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/tippy-bundle.umd.min.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/sweetalert.min.js') }}"></script>
    {{--  <!-- Javascript Assets -->  --}}
    <script src="admin/js/app.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
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
    <style>
        .step:not(.active) {
            display: none;
        }
    </style>
</head>

<body>
    <div
        class="spin_load  screen_loader animate__animated fixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
        <div class="center">
            <div class="ring">
            </div>
            <img src="load/logo.png" alt="Deskripsi gambar" class="my-img">
        </div>
    </div>


    <!-- Sidenav -->
    <nav id="sidenav-2"
        class="fixed left-0 top-0 h-screen w-60 -translate-x-full overflow-hidden bg-white shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] data-[te-sidenav-hidden='false']:translate-x-0 dark:bg-zinc-800"
        data-te-sidenav-init data-te-sidenav-hidden="false" data-te-sidenav-mode="side" data-te-sidenav-accordion="true"
        data-te-sidenav-content="#content">

        <ul class="relative m-0 list-none px-[0.2rem]" data-te-sidenav-menu-ref>
            <li class="relative mt-2">
                <a class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                    data-te-sidenav-link-ref>
                    <span class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                        <img src="{{ asset('admin/assets/images/humma.png') }}" alt="">
                    </span>

                </a>
            </li>
            {{-- dashboard --}}
            <li class="relative mt-5">
                <a
                    class="flex h-12 cursor-pointer items-center   rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-blue-500 {{ request()->routeIs('dudi.index') ? 'bg-blue-500 text-white' : '' }} hover:text-white hover:outline-none focus:bg-blue-500 focus:text-white focus:outline-none active:bg-blue-500 active:text-white active:outline-none data-[te-sidenav-state-active]:text-white data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10">
                    <span class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-white dark:[&>svg]:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <style>
                                svg {
                                    fill: #ffffff
                                }
                            </style>
                            <path
                                d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                        </svg>
                    </span>
                    <span>Dashboard</span>

                </a>
            </li>
            {{-- approval --}}
            <li class="relative">
                <a class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear  hover:bg-blue-500 hover:text-white hover:outline-none focus:bg-blue-500 focus:text-white focus:outline-none active:bg-slate-50 active:text-white active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                    data-te-sidenav-link-ref>
                    <span class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <style>
                                svg {
                                    fill: #8d94a0
                                }
                            </style>
                            <path
                                d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                        </svg>
                    </span>
                    <span>Approval</span>
                    <span
                        class="absolute  right-0 ml-auto mr-[0.8rem] transition-transform duration-300 ease-linear motion-reduce:transition-none [&>svg]:text-gray-600 dark:[&>svg]:text-gray-300"
                        data-te-sidenav-rotate-icon-ref>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="h-5 w-5 ">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </a>
                <ul class="show visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
                    data-te-sidenav-collapse-ref>
                    <li class="relative">
                        <a href="{{ route('aproval.index') }}"
                            class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                            data-te-sidenav-link-ref>pendaftaran</a>
                    </li>
                    <li class="relative">
                        <a href="{{ route('approvalizin.index') }}"
                            class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                            data-te-sidenav-link-ref>izin & sakit</a>
                    </li>

                </ul>
            </li>
            {{-- user --}}
            <li class="relative">
                <a class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-blue-500 hover:text-white hover:outline-none focus:bg-slate-50 focus:text-white focus:outline-none active:bg-slate-50 active:text-white active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                    data-te-sidenav-link-ref>
                    <span class="mr-4 [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                        </svg>
                    </span>
                    <span>User</span>
                    <span
                        class="absolute right-0 ml-auto mr-[0.8rem] transition-transform duration-300 ease-linear motion-reduce:transition-none [&>svg]:text-gray-600 dark:[&>svg]:text-gray-300"
                        data-te-sidenav-rotate-icon-ref>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </a>
                <ul class="show visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
                    data-te-sidenav-collapse-ref>
                    <li class="relative">
                        <a href="{{ route('siswa_admin.index') }}"
                            class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                            data-te-sidenav-link-ref>Siswa</a>
                    </li>
                    <li class="relative">
                        <a href="{{ route('alumni_admin.index') }}"
                            class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                            data-te-sidenav-link-ref>Alumni</a>
                    </li>
                    <li class="relative">
                        <a href="{{ route('guru_admin.index') }}"
                            class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                            data-te-sidenav-link-ref>Penanggung jawab</a>
                    </li>

                </ul>
            </li>
            {{-- jurnal --}}
            <li class="relative">
                <a href="http://127.0.0.1:8000/jurnal_admin"
                    class="flex h-12 cursor-pointer items-center   rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-blue-500 hover:text-white hover:outline-none focus:bg-blue-500 focus:text-white focus:outline-none active:bg-blue-500 active:text-white active:outline-none data-[te-sidenav-state-active]:text-white data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10">
                    <span class="mr-4 [&>svg]:h-4 [&>svg]:w-5 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <style>
                                svg {
                                    fill: #8e98a9
                                }
                            </style>
                            <path
                                d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                        </svg>
                    </span>
                    <span>Jurnal</span>

                </a>
            </li>
            {{-- absensi --}}
            <li class="relative">
                <a href="{{ route('absensi_admin.index') }}"
                    class="flex h-12 cursor-pointer items-center   rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-blue-500 hover:text-white hover:outline-none focus:bg-blue-500 focus:text-white focus:outline-none active:bg-blue-500 active:text-white active:outline-none data-[te-sidenav-state-active]:text-white data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10">
                    <span class="mr-4 [&>svg]:h-4 [&>svg]:w-5 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <style>
                                svg {
                                    fill: #828997
                                }
                            </style>
                            <path
                                d="M64 464c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16H224v80c0 17.7 14.3 32 32 32h80V448c0 8.8-7.2 16-16 16H64zM64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V154.5c0-17-6.7-33.3-18.7-45.3L274.7 18.7C262.7 6.7 246.5 0 229.5 0H64zm56 256c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H120z" />
                        </svg>
                    </span>
                    <span>Absensi</span>

                </a>
            </li>
            {{-- peraturan --}}
            <li class="relative">
                <a class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-blue-500 hover:text-white hover:outline-none focus:bg-slate-50 focus:text-white focus:outline-none active:bg-slate-50 active:text-white active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                    data-te-sidenav-link-ref>
                    <span class="mr-4 [&>svg]:h-4 [&>svg]:w-5 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <style>
                                svg {
                                    fill: #787c82
                                }
                            </style>
                            <path
                                d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z" />
                        </svg>
                    </span>
                    <span>Peraturan</span>
                    <span
                        class="absolute right-0 ml-auto mr-[0.8rem] transition-transform duration-300 ease-linear motion-reduce:transition-none [&>svg]:text-gray-600 dark:[&>svg]:text-gray-300"
                        data-te-sidenav-rotate-icon-ref>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </a>
                <ul class="show visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
                    data-te-sidenav-collapse-ref>
                    <li class="relative">
                        <a href="{{ route('tatatertib.index') }}"
                            class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                            data-te-sidenav-link-ref>Tata tertib</a>
                    </li>
                    <li class="relative">
                        <a href="{{ route('laporansiswa.index') }}"
                            class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                            data-te-sidenav-link-ref>Laporan Siswa</a>
                    </li>
                    <li class="relative">
                        <a href="{{ route('laporan_piket.index') }}"
                            class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                            data-te-sidenav-link-ref>Laporan PIket</a>
                    </li>
                    <li class="relative">
                        <a href="{{ route('sp.index') }}"
                            class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                            data-te-sidenav-link-ref>Laporan SP</a>
                    </li>

                </ul>
            </li>
            {{-- lainnya --}}
            <li class="relative">
                <a class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-blue-500 hover:text-white hover:outline-none focus:bg-slate-50 focus:text-white focus:outline-none active:bg-slate-50 active:text-white active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                    data-te-sidenav-link-ref>
                    <span class="mr-4 [&>svg]:h-5 [&>svg]:w-6 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                        </svg>

                    </span>
                    <span>Lainnya</span>
                    <span
                        class="absolute right-0 ml-auto mr-[0.8rem] transition-transform duration-300 ease-linear motion-reduce:transition-none [&>svg]:text-gray-600 dark:[&>svg]:text-gray-300"
                        data-te-sidenav-rotate-icon-ref>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </a>
                <ul class="show visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
                    data-te-sidenav-collapse-ref>
                    <li class="relative">
                        <a href="{{ route('Berita.index') }}"
                            class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                            data-te-sidenav-link-ref>Berita</a>
                    </li>
                    <li class="relative">
                        <a href="{{ route('chat.index') }}"
                            class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                            data-te-sidenav-link-ref>Chat</a>
                    </li>
                    <li class="relative">
                        <a href="{{ route('piket.index') }}"
                            class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                            data-te-sidenav-link-ref>Jadwal Piket</a>
                    </li>
                    <li class="relative">
                        <a href="{{ route('mou.index') }}"
                            class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                            data-te-sidenav-link-ref>MOU</a>
                    <li class="relative">
                        <a href="{{ route('tolak.index') }}"
                            class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                            data-te-sidenav-link-ref>Di Tolak</a>

                </ul>
            </li>
        </ul>
    </nav>
    <!-- Sidenav -->

    <div class=" pl-[px] " id="content">


<<<<<<< HEAD
        <!-- Navbar -->
        <nav id="main-navbar"
            class="sticky left-0  right-0 top-0 flex  flex-nowrap items-center justify-between bg-white py-[0.6rem] text-gray-500 shadow-lg hover:text-gray-700 focus:text-gray-700 dark:bg-zinc-700 lg:flex-wrap lg:justify-start "
            data-te-navbar-ref>
            <!-- Container wrapper -->

            <div class="flex w-full flex-wrap items-center justify-between px-4 ">
                <div class="flex gap-4">
                    <!-- Toggler -->
                    <div class="flex items-center justify-between ltr:mr-2 rtl:ml-2 ">
                        <a href="index-2.html" class="main-logo flex shrink-9 items-center">
                            <img class="inline w-40 ltr:-ml-1 rtl:-mr-1 hidden"
                                src="{{ asset('admin/assets/images/humma.png') }}" alt="image" />
                        </a>
=======
    <!-- Navbar -->
    <nav
    id="main-navbar"
    class="sticky z-50 left-0  right-0 top-0 flex  flex-nowrap items-center justify-between bg-white py-[0.6rem] text-gray-500 shadow-lg hover:text-gray-700 focus:text-gray-700 dark:bg-zinc-700 lg:flex-wrap lg:justify-start "
    data-te-navbar-ref>
    <!-- Container wrapper -->

    <div
    class="flex w-full flex-wrap items-center justify-between px-4 ">
    <div class="flex gap-4">
            <!-- Toggler -->
            <div class="flex items-center justify-between ltr:mr-2 rtl:ml-2 ">
                <a href="index-2.html" class="main-logo flex shrink-9 items-center">
                    <img class="inline w-40 ltr:-ml-1 rtl:-mr-1 hidden" src="{{ asset('admin/assets/images/humma.png') }}" alt="image" />
                </a>
            </div>
            <button
            class="mt-0.5 inline-block rounded bg-primary px-3 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
            data-te-sidenav-toggle-ref
            data-te-target="#sidenav-2"
            aria-controls="#sidenav-2"
            aria-haspopup="true">
            <span class="block [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-white">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="h-5 w-5">
                <path
                fill-rule="evenodd"
                d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                clip-rule="evenodd" />
            </svg>
            </span>
        </button>
        <!-- Toggler -->

    <!-- Search form -->
    <form
        class="relative  mr-auto flex flex-wrap items-stretch xl:mx-0">
        <input
        autocomplete="off"
        type="search"
        class="relative m-0 inline-block w-[1%] min-w-[225px] flex-auto rounded border border-solid border-gray-300 bg-transparent bg-clip-padding px-3 py-1.5 text-base font-normal text-gray-700 transition duration-300 ease-in-out focus:border-primary-600 focus:text-gray-700 focus:shadow-te-primary focus:outline-none dark:text-gray-200 dark:placeholder:text-gray-200"
        placeholder='Cari...' />
        <span
        class="flex items-center whitespace-nowrap rounded px-3 py-1.5 text-center text-base font-normal text-gray-700 dark:text-gray-200 [&>svg]:w-4"
        id="basic-addon2">
        <svg
            aria-hidden="true"
            focusable="false"
            data-prefix="fas"
            data-icon="search"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 512 512">
            <path
            fill="currentColor"
            d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
        </svg>
        </span>
    </form>

    </div>

    <!-- Right links -->
    <ul class="relative flex items-center">
        <!-- Notification dropdown -->
        <li class="relative" data-te-dropdown-ref>
        <a
            class="mr-4 flex items-center text-gray-500 hover:text-gray-700 focus:text-gray-700"
            href="#"
            id="navbarDropdownMenuLink"
            role="button"
            data-te-dropdown-toggle-ref
            aria-expanded="false">
            <span class="dark:text-gray-200 [&>svg]:w-3.5">
            <svg
                aria-hidden="true"
                focusable="false"
                data-prefix="fas"
                data-icon="bell"
                role="img"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512">
                <path
                fill="currentColor"
                d="M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z"></path>
            </svg>
            </span>
            <span
            class="absolute -mt-2.5 ml-2 rounded-full bg-red-600 px-1.5 py-[1px] text-[0.6rem] text-white"
            >1</span
            >
        </a>
        <ul
            class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-[10rem] list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-zinc-700 [&[data-te-dropdown-show]]:block"
            aria-labelledby="navbarDropdownMenuLink"
            data-te-dropdown-menu-ref>
            <li>
            <a
                class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                href="#"
                data-te-dropdown-item-ref
                >Some news</a
            >
            </li>
            <li>
            <a
                class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                href="#"
                data-te-dropdown-item-ref
                >Another news</a
            >
            </li>
            <li>
            <a
                class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                href="#"
                data-te-dropdown-item-ref
                >Something else here</a
            >
            </li>
        </ul>
        </li>






        <!-- Avatar -->
        <li class="relative" data-te-dropdown-ref>
        <a
            class="hidden-arrow flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none"
            href="#"
            id="navbarDropdownMenuLink"
            role="button"
            data-te-dropdown-toggle-ref
            aria-expanded="false">
            <img
            src="https://tecdn.b-cdn.net/img/Photos/Avatars/img (31).webp"
            class="rounded-full"
            style="height: 22px; width: 22px"
            alt="Avatar"
            loading="lazy" />
        </a>
        <ul
            class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-[10rem] list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-zinc-700 [&[data-te-dropdown-show]]:block"
            aria-labelledby="dropdownMenuButton2"
            data-te-dropdown-menu-ref>
            <li>
            <a
                class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                href="#"
                data-te-dropdown-item-ref
                >My profile</a
            >
            </li>
            <li>
            <a
                class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                href="#"
                data-te-dropdown-item-ref
                >Settings</a
            >
            </li>
            <li>
            <a
                class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                href="#"
                data-te-dropdown-item-ref
                >Logout</a
            >
            </li>
        </ul>
        </li>
    </ul>
    </div>
    <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
    <div class="animate__animated p-6" :class="[$store.app.animation]">
        <!-- start main content section -->
        <div x-data="basic" class="mt-8">
            {{-- judul --}}
            <div class="mb-5 font-semibold">
                <span> lainnya / <span class="text-[#00B7FF]">Di Tolak</span></span>
            </div>
            <div class="flex justify-end items-center pr-16">
             <a href="{{ route('tolak.index') }}" class="Button w-[116px] h-[37.33px] pl-[27.63px] pr-[27.37px] pt-[8.67px] pb-[8.66px] rounded-lg border border border border border-slate-300 justify-end items-end inline-flex">
                <div class="Kembali text-center text-slate-700 text-[14px] font-medium leading-tight tracking-wide">Kembali</div>
             </a>
            </div>

            <div class="DivGrid w-[1133px] h-[954px] pl-[20px] pt-[19.67px] pb-[93.33px] justify-start items-center inline-flex">
                <div class="Group422 w-[1133px] h-[841px] relative">
                  <div class="DivCard w-[1133px] h-[677px] left-[7px] top-[164px] absolute bg-white rounded-lg shadow"></div>
                  <div id="wizardForm" class="Group421 w-[1133px] h-[794px] left-0 top-0 absolute">
                    <div  class="step active DivTabs w-[1133px] h-[630px] pb-[35.98px] left-[7px] top-[164px] absolute flex-col justify-start items-center gap-5 inline-flex">
                      <div class="DivBorderB2 w-[1133px] border border-slate-200 justify-start items-start inline-flex">
                        <div class="DivTabsList pr-[348.16px] justify-start items-start flex">
                          <div class="Button pl-5 pr-[20.21px] pt-[17px] pb-[19px] border border-sky-500 justify-start items-center gap-[8.35px] flex">
                            <button id="" class="Detail text-center text-sky-500 text-[14px] font-medium leading-tight tracking-wide">Detail</button>
                          </div>
                          <div class="Button pl-[18px] pr-[19.83px] pt-[17px] pb-[19px] justify-start items-center gap-[6.36px] flex">
                            <button id="nextStep1" class="BerkasBerkas text-center text-slate-500 text-[14px] font-medium leading-tight tracking-wide">Berkas - berkas</button>
                          </div>
                        </div>
                      </div>
                      <div class="DivSpaceY5 w-[1133px] h-[564px] pl-10 flex-col justify-start items-start gap-[20.01px] flex">
                        <div class="Label flex-col justify-start items-start gap-1.5 flex">
                          <div class="Nama text-slate-600 text-[14px] font-medium leading-tight">Nama</div>
                          <div class="Pseudo w-[682.22px] h-[20.67px] justify-center items-center inline-flex">
                            <div class="MuhamadDimasJuliansyah w-[682.42px] h-[20.67px] text-slate-400 text-opacity-70 text-[15px] font-light tracking-wide">{{ $tolak->name }}</div>
                          </div>
                        </div>
                        <div class="DivH2dD7a3866b h-[46.67px] flex-col justify-start items-start gap-1.5 flex">
                          <div class="DivH2dD7a3866b h-[46.67px] flex-col justify-start items-start gap-1.5 flex">
                            <div class="JenisKelamin text-slate-600 text-[14px] font-medium leading-tight">Jenis Kelamin</div>
                            <div class="Pseudo w-[682.22px] h-[20.67px] justify-center items-center inline-flex">
                              <div class="LakiLaki w-[682.42px] h-[20.67px] text-slate-400 text-opacity-70 text-[15px] font-light tracking-wide">{{ $tolak->jeniskelamin }}</div>
                            </div>
                          </div>
                        </div>
                        <div class="DivH2dD7a3866b h-[46.67px] flex-col justify-start items-start gap-1.5 flex">
                          <div class="DivH2dD7a3866b h-[46.67px] flex-col justify-start items-start gap-1.5 flex">
                            <div class="Nisn text-slate-600 text-[14px] font-medium leading-tight">NISN</div>
                            <div class="Pseudo w-[682.22px] h-[20.67px] justify-center items-center inline-flex">
                              <div class=" w-[682.42px] h-[20.67px] text-slate-400 text-opacity-70 text-[15px] font-light tracking-wide">{{ $tolak->nisn }}</div>
                            </div>
                          </div>
                        </div>
                        <div class="DivH2dD7a3866b h-[46.67px] flex-col justify-start items-start gap-1.5 flex">
                          <div class="KelasJurusan text-slate-600 text-[14px] font-medium leading-tight">Kelas/Jurusan</div>
                          <div class="Pseudo w-[682.22px] h-[20.67px] justify-center items-center inline-flex">
                            <div class="XiRpl2 w-[682.42px] h-[20.67px] text-slate-400 text-opacity-70 text-[15px] font-light tracking-wide">{{ $tolak->kelas }} / {{ $tolak->jurusan }}</div>
                          </div>
                        </div>
                        <div class="Label flex-col justify-start items-start gap-1.5 flex">
                          <div class="AsalSekolah text-slate-600 text-[14px] font-medium leading-tight">Asal Sekolah</div>
                          <div class="Pseudo w-[682.22px] h-[20.67px] justify-center items-center inline-flex">
                            <div class="Smkn12Malang w-[682.42px] h-[20.67px] text-slate-400 text-opacity-70 text-[15px] font-light tracking-wide">{{ $tolak->sekolah }}</div>
                          </div>
                        </div>
                        <div class="DivH2dD7a3866b h-[46.67px] flex-col justify-start items-start gap-1.5 flex">
                          <div class="TempatTanggalLahir text-slate-600 text-[14px] font-medium leading-tight">Tempat, Tanggal Lahir</div>
                          <div class="Pseudo w-[682.22px] h-[20.67px] justify-center items-center inline-flex">
                            <div class="Malang21Juli2006 w-[682.42px] h-[20.67px] text-slate-400 text-opacity-70 text-[15px] font-light tracking-wide">{{ $tolak->tempat }}, {{ $tolak->tanggal }}</div>
                          </div>
                        </div>
                        <div class="DivH2dD7a3866b h-[46.67px] flex-col justify-start items-start gap-1.5 flex">
                          <div class="Alamat text-slate-600 text-[14px] font-medium leading-tight">Alamat</div>
                          <div class="Pseudo w-[682.22px] justify-center items-center inline-flex">
                            <div class="GgMekkahJlArabMalang w-[682.42px] h-[20.67px] text-slate-400 text-opacity-70 text-[15px] font-light tracking-wide">{{ $tolak->alamat }}</div>
                          </div>
                        </div>
                        <div class="DivH2dD7a3866b h-[46.67px] flex-col justify-start items-start gap-1.5 flex">
                          <div class="LamaMagang text-slate-600 text-[14px] font-medium leading-tight">Lama Magang</div>
                          <div class="Pseudo w-[682.22px] justify-center items-center inline-flex">
                            <div class="Januari202530Juni2025 w-[682.42px] h-[20.67px] text-slate-400 text-opacity-70 text-[15px] font-light tracking-wide">
                                {{ \Carbon\Carbon::parse($tolak->magang_awal)->format('d F Y') }} - {{ \Carbon\Carbon::parse($tolak->magang_akhir)->format('d F Y') }}
                            </div>
                        </div>

                        </div>
                      </div>
>>>>>>> 34382e7c6b176700470cf140b400c02155c62b64
                    </div>
                    <button
                        class="mt-0.5 inline-block rounded bg-primary px-3 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
                        data-te-sidenav-toggle-ref data-te-target="#sidenav-2" aria-controls="#sidenav-2"
                        aria-haspopup="true">
                        <span class="block [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </button>
                    <!-- Toggler -->

                    <!-- Search form -->
                    <form action="">
                        <label class="relative hidden sm:flex">
                            <input
                                class="form-input peer h-9 w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 text-xs+ placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                placeholder="Search users..." type="text" name="cari"
                                value="{{ request('cari') }}" />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-colors duration-200"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M3.316 13.781l.73-.171-.73.171zm0-5.457l.73.171-.73-.171zm15.473 0l.73-.171-.73.171zm0 5.457l.73.171-.73-.171zm-5.008 5.008l-.171-.73.171.73zm-5.457 0l-.171.73.171-.73zm0-15.473l-.171-.73.171.73zm5.457 0l.171-.73-.171.73zM20.47 21.53a.75.75 0 101.06-1.06l-1.06 1.06zM4.046 13.61a11.198 11.198 0 010-5.115l-1.46-.342a12.698 12.698 0 000 5.8l1.46-.343zm14.013-5.115a11.196 11.196 0 010 5.115l1.46.342a12.698 12.698 0 000-5.8l-1.46.343zm-4.45 9.564a11.196 11.196 0 01-5.114 0l-.342 1.46c1.907.448 3.892.448 5.8 0l-.343-1.46zM8.496 4.046a11.198 11.198 0 015.115 0l.342-1.46a12.698 12.698 0 00-5.8 0l.343 1.46zm0 14.013a5.97 5.97 0 01-4.45-4.45l-1.46.343a7.47 7.47 0 005.568 5.568l.342-1.46zm5.457 1.46a7.47 7.47 0 005.568-5.567l-1.46-.342a5.97 5.97 0 01-4.45 4.45l.342 1.46zM13.61 4.046a5.97 5.97 0 014.45 4.45l1.46-.343a7.47 7.47 0 00-5.568-5.567l-.342 1.46zm-5.457-1.46a7.47 7.47 0 00-5.567 5.567l1.46.342a5.97 5.97 0 014.45-4.45l-.343-1.46zm8.652 15.28l3.665 3.664 1.06-1.06-3.665-3.665-1.06 1.06z" />
                                </svg>
                            </span>
                        </label>
                    </form>

                </div>

                <!-- Right links -->
                <ul class="relative flex items-center">
                    <!-- Notification dropdown -->
                    <li class="relative" data-te-dropdown-ref>
                        <a class="mr-4 flex items-center text-gray-500 hover:text-gray-700 focus:text-gray-700"
                            href="#" id="navbarDropdownMenuLink" role="button" data-te-dropdown-toggle-ref
                            aria-expanded="false">
                            <span class="dark:text-gray-200 [&>svg]:w-3.5">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bell"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor"
                                        d="M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z">
                                    </path>
                                </svg>
                            </span>
                            <span
                                class="absolute -mt-2.5 ml-2 rounded-full bg-red-600 px-1.5 py-[1px] text-[0.6rem] text-white">1</span>
                        </a>
                        <ul class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-[10rem] list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-zinc-700 [&[data-te-dropdown-show]]:block"
                            aria-labelledby="navbarDropdownMenuLink" data-te-dropdown-menu-ref>
                            <li>
                                <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                                    href="#" data-te-dropdown-item-ref>Some news</a>
                            </li>
                            <li>
                                <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                                    href="#" data-te-dropdown-item-ref>Another news</a>
                            </li>
                            <li>
                                <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                                    href="#" data-te-dropdown-item-ref>Something else here</a>
                            </li>
                        </ul>
                    </li>






                    <!-- Avatar -->
                    <li class="relative" data-te-dropdown-ref>
                        <a class="hidden-arrow flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none"
                            href="#" id="navbarDropdownMenuLink" role="button" data-te-dropdown-toggle-ref
                            aria-expanded="false">
                            <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-full"
                                style="height: 22px; width: 22px" alt="Avatar" loading="lazy" />
                        </a>
                        <ul class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-[10rem] list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-zinc-700 [&[data-te-dropdown-show]]:block"
                            aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
                            <li>
                                <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                                    href="#" data-te-dropdown-item-ref>My profile</a>
                            </li>
                            <li>
                                <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                                    href="#" data-te-dropdown-item-ref>Settings</a>
                            </li>
                            <li>
                                <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                                    href="#" data-te-dropdown-item-ref>Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
        <div class="animate__animated p-6" :class="[$store.app.animation]">
            <!-- start main content section -->
            <div x-data="basic" class="mt-8">
                {{-- judul --}}
                <div class="mb-5 font-semibold">
                    <span> lainnya / <span class="text-[#00B7FF]">Di Tolak</span></span>
                </div>
                <div class="flex justify-end items-center pr-16">
                    <button
                        class="Button w-[116px] h-[37.33px] pl-[27.63px] pr-[27.37px] pt-[8.67px] pb-[8.66px] rounded-lg border border border border border-slate-300 justify-end items-end inline-flex">
                        <div
                            class="Kembali text-center text-slate-700 text-[14px] font-medium leading-tight tracking-wide">
                            Kembali</div>
                    </button>
                </div>

                <div
                    class="DivGrid w-[1133px] h-[954px] pl-[20px] pt-[19.67px] pb-[93.33px] justify-start items-center inline-flex">
                    <div class="Group422 w-[1133px] h-[841px] relative">
                        <div
                            class="DivCard w-[1133px] h-[677px] left-[7px] top-[164px] absolute bg-white rounded-lg shadow">
                        </div>
<<<<<<< HEAD
                        <div id="wizardForm" class="Group421 w-[1133px] h-[794px] left-0 top-0 absolute">
                            <div
                                class="step active DivTabs w-[1133px] h-[630px] pb-[35.98px] left-[7px] top-[164px] absolute flex-col justify-start items-center gap-5 inline-flex">
                                <div
                                    class="DivBorderB2 w-[1133px] border border-slate-200 justify-start items-start inline-flex">
                                    <div class="DivTabsList pr-[348.16px] justify-start items-start flex">
                                        <div
                                            class="Button pl-5 pr-[20.21px] pt-[17px] pb-[19px] border border-sky-500 justify-start items-center gap-[8.35px] flex">
                                            <button id=""
                                                class="Detail text-center text-sky-500 text-[14px] font-medium leading-tight tracking-wide">Detail</button>
                                        </div>
                                        <div
                                            class="Button pl-[18px] pr-[19.83px] pt-[17px] pb-[19px] justify-start items-center gap-[6.36px] flex">
                                            <button id="nextStep1"
                                                class="BerkasBerkas text-center text-slate-500 text-[14px] font-medium leading-tight tracking-wide">Berkas
                                                - berkas</button>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="DivSpaceY5 w-[1133px] h-[564px] pl-10 flex-col justify-start items-start gap-[20.01px] flex">
                                    <div class="Label flex-col justify-start items-start gap-1.5 flex">
                                        <div class="Nama text-slate-600 text-[14px] font-medium leading-tight">Nama
                                        </div>
                                        <div
                                            class="Pseudo w-[682.22px] h-[20.67px] justify-center items-center inline-flex">
                                            <div
                                                class="MuhamadDimasJuliansyah w-[682.42px] h-[20.67px] text-slate-400 text-opacity-70 text-[15px] font-light tracking-wide">
                                                Muhamad Dimas Juliansyah</div>
                                        </div>
                                    </div>
                                    <div
                                        class="DivH2dD7a3866b h-[46.67px] flex-col justify-start items-start gap-1.5 flex">
                                        <div
                                            class="DivH2dD7a3866b h-[46.67px] flex-col justify-start items-start gap-1.5 flex">
                                            <div
                                                class="JenisKelamin text-slate-600 text-[14px] font-medium leading-tight">
                                                Jenis Kelamin</div>
                                            <div
                                                class="Pseudo w-[682.22px] h-[20.67px] justify-center items-center inline-flex">
                                                <div
                                                    class="LakiLaki w-[682.42px] h-[20.67px] text-slate-400 text-opacity-70 text-[15px] font-light tracking-wide">
                                                    Laki - laki</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="DivH2dD7a3866b h-[46.67px] flex-col justify-start items-start gap-1.5 flex">
                                        <div
                                            class="DivH2dD7a3866b h-[46.67px] flex-col justify-start items-start gap-1.5 flex">
                                            <div class="Nisn text-slate-600 text-[14px] font-medium leading-tight">NISN
                                            </div>
                                            <div
                                                class="Pseudo w-[682.22px] h-[20.67px] justify-center items-center inline-flex">
                                                <div
                                                    class=" w-[682.42px] h-[20.67px] text-slate-400 text-opacity-70 text-[15px] font-light tracking-wide">
                                                    008187281117</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="DivH2dD7a3866b h-[46.67px] flex-col justify-start items-start gap-1.5 flex">
                                        <div class="KelasJurusan text-slate-600 text-[14px] font-medium leading-tight">
                                            Kelas/Jurusan</div>
                                        <div
                                            class="Pseudo w-[682.22px] h-[20.67px] justify-center items-center inline-flex">
                                            <div
                                                class="XiRpl2 w-[682.42px] h-[20.67px] text-slate-400 text-opacity-70 text-[15px] font-light tracking-wide">
                                                XI RPL 2</div>
                                        </div>
                                    </div>
                                    <div class="Label flex-col justify-start items-start gap-1.5 flex">
                                        <div class="AsalSekolah text-slate-600 text-[14px] font-medium leading-tight">
                                            Asal Sekolah</div>
                                        <div
                                            class="Pseudo w-[682.22px] h-[20.67px] justify-center items-center inline-flex">
                                            <div
                                                class="Smkn12Malang w-[682.42px] h-[20.67px] text-slate-400 text-opacity-70 text-[15px] font-light tracking-wide">
                                                SMKN 12 Malang</div>
                                        </div>
                                    </div>
                                    <div
                                        class="DivH2dD7a3866b h-[46.67px] flex-col justify-start items-start gap-1.5 flex">
                                        <div
                                            class="TempatTanggalLahir text-slate-600 text-[14px] font-medium leading-tight">
                                            Tempat, Tanggal Lahir</div>
                                        <div
                                            class="Pseudo w-[682.22px] h-[20.67px] justify-center items-center inline-flex">
                                            <div
                                                class="Malang21Juli2006 w-[682.42px] h-[20.67px] text-slate-400 text-opacity-70 text-[15px] font-light tracking-wide">
                                                Malang, 21 Juli 2006</div>
                                        </div>
                                    </div>
                                    <div
                                        class="DivH2dD7a3866b h-[46.67px] flex-col justify-start items-start gap-1.5 flex">
                                        <div class="Alamat text-slate-600 text-[14px] font-medium leading-tight">Alamat
                                        </div>
                                        <div class="Pseudo w-[682.22px] justify-center items-center inline-flex">
                                            <div
                                                class="GgMekkahJlArabMalang w-[682.42px] h-[20.67px] text-slate-400 text-opacity-70 text-[15px] font-light tracking-wide">
                                                Gg. Mekkah, Jl. Arab, Malang</div>
                                        </div>
                                    </div>
                                    <div
                                        class="DivH2dD7a3866b h-[46.67px] flex-col justify-start items-start gap-1.5 flex">
                                        <div class="LamaMagang text-slate-600 text-[14px] font-medium leading-tight">
                                            Lama Magang</div>
                                        <div class="Pseudo w-[682.22px] justify-center items-center inline-flex">
                                            <div
                                                class="Januari202530Juni2025 w-[682.42px] h-[20.67px] text-slate-400 text-opacity-70 text-[15px] font-light tracking-wide">
                                                2 Januari 2025 - 30 Juni 2025</div>
                                        </div>
                                    </div>
                                </div>
=======
                      </div>
                      <div class="DivSpaceY5 w-[1133px] h-[564px] pl-10 flex-col justify-start items-start gap-[20.01px] flex">
                        <div class="Label flex-col justify-start items-start gap-1.5 flex">
                          <div class="Nama text-slate-600 text-[14px] font-medium leading-tight">Nama</div>
                          <div class="Pseudo w-[682.22px] h-[20.67px] justify-center items-center inline-flex">
                            <div class="MuhamadDimasJuliansyah w-[682.42px] h-[20.67px] text-slate-400 text-opacity-70 text-[15px] font-light tracking-wide">Muhamad Dimas Juliansyah</div>
                          </div>
                        </div>
                        <div class="DivH2dD7a3866b h-[46.67px] flex-col justify-start items-start gap-1.5 flex">
                          <div class="DivH2dD7a3866b h-[46.67px] flex-col justify-start items-start gap-1.5 flex">
                            <div class="JenisKelamin text-slate-600 text-[14px] font-medium leading-tight">Jenis Kelamin</div>
                            <div class="Pseudo w-[682.22px] h-[20.67px] justify-center items-center inline-flex">
                              <div class="LakiLaki w-[682.42px] h-[20.67px] text-slate-400 text-opacity-70 text-[15px] font-light tracking-wide">Laki - laki</div>
>>>>>>> 34382e7c6b176700470cf140b400c02155c62b64
                            </div>
                            <div id="step1">
                                <div
                                    class="step DivTabs w-[1133px] h-[630px] pb-[35.98px] left-[7px] top-[164px] absolute flex-col justify-start items-center gap-5 inline-flex">
                                    <div
                                        class="DivBorderB2 w-[1133px] border border-slate-200 justify-start items-start inline-flex">
                                        <div class="DivTabsList pr-[348.16px] justify-start items-start flex">
                                            <div
                                                class="Button pl-5 pr-[20.21px] pt-[17px] pb-[19px] border border-sky-500 justify-start items-center gap-[8.35px] flex">
                                                <button id=""
                                                    class="Detail text-center text-sky-500 text-[14px] font-medium leading-tight tracking-wide">Detail</button>
                                            </div>
                                            <div
                                                class="Button pl-[18px] pr-[19.83px] pt-[17px] pb-[19px] justify-start items-center gap-[6.36px] flex">
                                                <button id="nextStep2"
                                                    class="BerkasBerkas text-center text-slate-500 text-[14px] font-medium leading-tight tracking-wide">Berkas
                                                    - berkas</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="DivSpaceY5 w-[1133px] h-[564px] pl-10 flex-col justify-start items-start gap-[20.01px] flex">
                                        <div class="Label flex-col justify-start items-start gap-1.5 flex">
                                            <div class="Nama text-slate-600 text-[14px] font-medium leading-tight">Nama
                                            </div>
                                            <div
                                                class="Pseudo w-[682.22px] h-[20.67px] justify-center items-center inline-flex">
                                                <div
                                                    class="MuhamadDimasJuliansyah w-[682.42px] h-[20.67px] text-slate-400 text-opacity-70 text-[15px] font-light tracking-wide">
                                                    Muhamad Dimas Juliansyah</div>
                                            </div>
                                        </div>
                                        <div
                                            class="DivH2dD7a3866b h-[46.67px] flex-col justify-start items-start gap-1.5 flex">
                                            <div
                                                class="DivH2dD7a3866b h-[46.67px] flex-col justify-start items-start gap-1.5 flex">
                                                <div
                                                    class="JenisKelamin text-slate-600 text-[14px] font-medium leading-tight">
                                                    Jenis Kelamin</div>
                                                <div
                                                    class="Pseudo w-[682.22px] h-[20.67px] justify-center items-center inline-flex">
                                                    <div
                                                        class="LakiLaki w-[682.42px] h-[20.67px] text-slate-400 text-opacity-70 text-[15px] font-light tracking-wide">
                                                        Laki - laki</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="DivH2dD7a3866b h-[46.67px] flex-col justify-start items-start gap-1.5 flex">
                                            <div
                                                class="DivH2dD7a3866b h-[46.67px] flex-col justify-start items-start gap-1.5 flex">
                                                <div class="Nisn text-slate-600 text-[14px] font-medium leading-tight">
                                                    NISN</div>
                                                <div
                                                    class="Pseudo w-[682.22px] h-[20.67px] justify-center items-center inline-flex">
                                                    <div
                                                        class=" w-[682.42px] h-[20.67px] text-slate-400 text-opacity-70 text-[15px] font-light tracking-wide">
                                                        008187281117</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="DivH2dD7a3866b h-[46.67px] flex-col justify-start items-start gap-1.5 flex">
                                            <div
                                                class="KelasJurusan text-slate-600 text-[14px] font-medium leading-tight">
                                                Kelas/Jurusan</div>
                                            <div
                                                class="Pseudo w-[682.22px] h-[20.67px] justify-center items-center inline-flex">
                                                <div
                                                    class="XiRpl2 w-[682.42px] h-[20.67px] text-slate-400 text-opacity-70 text-[15px] font-light tracking-wide">
                                                    XI RPL 2</div>
                                            </div>
                                        </div>
                                        <div class="Label flex-col justify-start items-start gap-1.5 flex">
                                            <div
                                                class="AsalSekolah text-slate-600 text-[14px] font-medium leading-tight">
                                                Asal Sekolah</div>
                                            <div
                                                class="Pseudo w-[682.22px] h-[20.67px] justify-center items-center inline-flex">
                                                <div
                                                    class="Smkn12Malang w-[682.42px] h-[20.67px] text-slate-400 text-opacity-70 text-[15px] font-light tracking-wide">
                                                    SMKN 12 Malang</div>
                                            </div>
                                        </div>
                                        <div
                                            class="DivH2dD7a3866b h-[46.67px] flex-col justify-start items-start gap-1.5 flex">
                                            <div
                                                class="TempatTanggalLahir text-slate-600 text-[14px] font-medium leading-tight">
                                                Tempat, Tanggal Lahir</div>
                                            <div
                                                class="Pseudo w-[682.22px] h-[20.67px] justify-center items-center inline-flex">
                                                <div
                                                    class="Malang21Juli2006 w-[682.42px] h-[20.67px] text-slate-400 text-opacity-70 text-[15px] font-light tracking-wide">
                                                    Malang, 21 Juli 2006</div>
                                            </div>
                                        </div>
                                        <div
                                            class="DivH2dD7a3866b h-[46.67px] flex-col justify-start items-start gap-1.5 flex">
                                            <div class="Alamat text-slate-600 text-[14px] font-medium leading-tight">
                                                Alamat</div>
                                            <div class="Pseudo w-[682.22px] justify-center items-center inline-flex">
                                                <div
                                                    class="GgMekkahJlArabMalang w-[682.42px] h-[20.67px] text-slate-400 text-opacity-70 text-[15px] font-light tracking-wide">
                                                    Gg. Mekkah, Jl. Arab, Malang</div>
                                            </div>
                                        </div>
                                        <div
                                            class="DivH2dD7a3866b h-[46.67px] flex-col justify-start items-start gap-1.5 flex">
                                            <div
                                                class="LamaMagang text-slate-600 text-[14px] font-medium leading-tight">
                                                Lama Magang</div>
                                            <div class="Pseudo w-[682.22px] justify-center items-center inline-flex">
                                                <div
                                                    class="Januari202530Juni2025 w-[682.42px] h-[20.67px] text-slate-400 text-opacity-70 text-[15px] font-light tracking-wide">
                                                    2 Januari 2025 - 30 Juni 2025</div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="">
                    </div> --}}
<<<<<<< HEAD
                                </div>
=======
                    </div>
                  </div>
                </div>

                    <div class="DivCard w-[1133px] h-[123px] left-0 top-0 absolute bg-white rounded-lg shadow">
                      <div class="DivBorderB2 w-[1133px] border border-slate-200 justify-start items-start inline-flex">
                        <div class="DivBorderB2 w-[1133px] border border-slate-200 justify-start items-start inline-flex">
                          <div class="DivTabsList pr-[348.16px] justify-start items-start flex">
                            <div class="Button pl-5 pr-[20.21px] py-[18px] border border-red-600 justify-start items-center gap-[8.35px] flex">
                              <div class="AlasanPenolakan text-center text-red-600 text-[14px] font-medium leading-tight tracking-wide">Alasan Penolakan</div>
>>>>>>> 34382e7c6b176700470cf140b400c02155c62b64
                            </div>
                        </div>
<<<<<<< HEAD

                        <div class="DivCard w-[1133px] h-[123px] left-0 top-0 absolute bg-white rounded-lg shadow">
                            <div
                                class="DivBorderB2 w-[1133px] border border-slate-200 justify-start items-start inline-flex">
                                <div
                                    class="DivBorderB2 w-[1133px] border border-slate-200 justify-start items-start inline-flex">
                                    <div class="DivTabsList pr-[348.16px] justify-start items-start flex">
                                        <div
                                            class="Button pl-5 pr-[20.21px] py-[18px] border border-red-600 justify-start items-center gap-[8.35px] flex">
                                            <div
                                                class="AlasanPenolakan text-center text-red-600 text-[14px] font-medium leading-tight tracking-wide">
                                                Alasan Penolakan</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="DivFlex w-[116px] h-[50px] left-[828px] top-[612px] absolute"></div>
                            <div
                                class="Label left-[40px] top-[66.68px] absolute flex-col justify-start items-start gap-1.5 inline-flex">
                                <div class="Alasan text-slate-600 text-[14px] font-medium leading-tight">Alasan </div>
                                <div class="Pseudo w-[682.22px] h-[20.67px] justify-center items-center inline-flex">
                                    <div
                                        class="KurangLengkapPadaBerkasBerkas w-[682.42px] h-[20.67px] text-slate-400 text-opacity-70 text-[15px] font-light tracking-wide">
                                        kurang lengkap pada berkas berkas</div>
                                </div>
                            </div>
=======
                      </div>
                      <div class="DivFlex w-[116px] h-[50px] left-[828px] top-[612px] absolute"></div>
                      <div class="Label left-[40px] top-[66.68px] absolute flex-col justify-start items-start gap-1.5 inline-flex">
                        <div class="Alasan text-slate-600 text-[14px] font-medium leading-tight">Alasan </div>
                        <div class="Pseudo w-[682.22px] h-[20.67px] justify-center items-center inline-flex">
                          <div class="KurangLengkapPadaBerkasBerkas w-[682.42px] h-[20.67px] text-slate-400 text-opacity-70 text-[15px] font-light tracking-wide">{{ $tolak->alasan }}</div>
>>>>>>> 34382e7c6b176700470cf140b400c02155c62b64
                        </div>
                    </div>
                </div>
<<<<<<< HEAD
            </div>
=======
              </div>

>>>>>>> 34382e7c6b176700470cf140b400c02155c62b64



            <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
            <script>
                $(window).on('load', function() {
                    $('.spin_load').fadeOut();
                });
            </script>
            <script>
                const instanceMode = te.Sidenav.getInstance(
                    document.getElementById("sidenav-2")
                );
                const modes = ["side"];

                modes.forEach((mode) => {
                    const modeSwitch = document.getElementById(mode);
                    modeSwitch.addEventListener("click", () => {
                        const instance = te.Sidenav.getInstance(
                            document.getElementById("sidenav-2")
                        );
                        instance.changeMode(mode);
                        modes.forEach((el) => {
                            if (el === mode) {
                                ["text-primary-600", "border-primary-600"].forEach((item) =>
                                    modeSwitch.classList.remove(item)
                                );
                                modeSwitch.className +=
                                    " bg-primary text-white hover:bg-primary-700 active:bg-primary-800 focus:bg-primary-700 border-transparent";
                            } else {
                                const node = document.getElementById(el);
                                node.className += " text-primary-600 border-primary-600";
                                [

                                ].forEach((item) => node.classList.remove(item));
                            }
                        });
                    });
                });
            </script>
            <script>
                // Initialization for ES Users
                import {
                    sidenav - 2,
                    initTE,
                } from "tw-elements";

<<<<<<< HEAD
                initTE({
                    sidenav - 2
                });
            </script>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const form = document.getElementById("wizardForm");
                    const steps = Array.from(form.getElementsByClassName("step"));
                    const nextButtons = Array.from(form.querySelectorAll("[id^=nextStep]"));
                    const prevButtons = Array.from(form.querySelectorAll("[id^=prevStep]"));

                    let currentStep = 0;

                    function showStep(stepIndex) {
                        steps.forEach(function(step, index) {
                            if (index === stepIndex) {
                                step.classList.add("active");
                            } else {
                                step.classList.remove("active");
                            }
                        });
                    }

                    function validateStep(stepIndex) {
                        const step = steps[stepIndex];
                        const inputs = Array.from(step.getElementsByTagName("input"));
                        const textareas = Array.from(step.getElementsByTagName("textarea"));

                        let isValid = true;

                        inputs.forEach(function(input) {
                            if (!input.checkValidity()) {
                                input.classList.add("border-red-500");
                                input.placeholder = "Masukan data ";
                                isValid = false;
                            } else {
                                input.classList.remove("border-red-500");
                                input.placeholder = "";

                            }

                        });

                        inputs.forEach(function(input) {
                            if (!input.checkValidity()) {
                                if (input.type === "radio") {
                                    var radioGroup = input.parentNode;
                                    var errorMessage = radioGroup.querySelector(".error-message");

                                    if (!errorMessage) {
                                        errorMessage = document.createElement("span");
                                        errorMessage.className = "error-message text-red-500";
                                        radioGroup.appendChild(errorMessage);
                                    }

                                    errorMessage.textContent = "Pilih salah satu opsi.";
                                } else {
                                    input.classList.add("border-red-500");
                                    input.placeholder = "Masukan data";
                                }

                                isValid = false;
                            } else {
                                input.classList.remove("border-red-500");
                                input.placeholder = "";
                            }
                        });


                        textareas.forEach(function(textarea) {
                            if (!textarea.checkValidity()) {
                                textarea.classList.add("border-red-500");
                                textarea.placeholder = "jangan di kosongkan";
                                isValid = false;
                            } else {
                                textarea.classList.remove("border-red-500");
                                textarea.placeholder = "";

                            }
                        });

                        return isValid;
                    }

                    nextButtons.forEach(function(button) {
                        button.addEventListener("click", function() {
                            if (validateStep(currentStep)) {
                                currentStep++;
                                showStep(currentStep);
                            }
                        });
                    });

                    prevButtons.forEach(function(button) {
                        button.addEventListener("click", function() {
                            currentStep--;
                            showStep(currentStep);
                        });
                    });



                });
            </script>
=======
        initTE({ sidenav-2 });
    </script>
         <script>
            document.addEventListener("DOMContentLoaded", function() {
              const form = document.getElementById("wizardForm");
              const steps = Array.from(form.getElementsByClassName("step"));
              const nextButtons = Array.from(form.querySelectorAll("[id^=nextStep]"));
              const prevButtons = Array.from(form.querySelectorAll("[id^=prevStep]"));

              let currentStep = 0;

              function showStep(stepIndex) {
                steps.forEach(function(step, index) {
                  if (index === stepIndex) {
                    step.classList.add("active");
                  } else {
                    step.classList.remove("active");
                  }
                });
              }

              function validateStep(stepIndex) {
                const step = steps[stepIndex];
                const inputs = Array.from(step.getElementsByTagName("input"));
                const textareas = Array.from(step.getElementsByTagName("textarea"));

                let isValid = true;

                inputs.forEach(function(input) {
                  if (!input.checkValidity()) {
                    input.classList.add("border-red-500");
                    input.placeholder = "Masukan data ";
                    isValid = false;
                  } else {
                    input.classList.remove("border-red-500");
                    input.placeholder = "";

                  }

                });

                inputs.forEach(function(input) {
                if (!input.checkValidity()) {
                    if (input.type === "radio") {
                    var radioGroup = input.parentNode;
                    var errorMessage = radioGroup.querySelector(".error-message");

                    if (!errorMessage) {
                        errorMessage = document.createElement("span");
                        errorMessage.className = "error-message text-red-500";
                        radioGroup.appendChild(errorMessage);
                    }

                    errorMessage.textContent = "Pilih salah satu opsi.";
                    } else {
                    input.classList.add("border-red-500");
                    input.placeholder = "Masukan data";
                    }

                    isValid = false;
                } else {
                    input.classList.remove("border-red-500");
                    input.placeholder = "";
                }
                });


                textareas.forEach(function(textarea) {
                  if (!textarea.checkValidity()) {
                    textarea.classList.add("border-red-500");
                    textarea.placeholder = "jangan di kosongkan";
                    isValid = false;
                  } else {
                    textarea.classList.remove("border-red-500");
                    textarea.placeholder = "";

                  }
                });

                return isValid;
              }

              nextButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                  if (validateStep(currentStep)) {
                    currentStep++;
                    showStep(currentStep);
                  }
                });
              });

              prevButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                  currentStep--;
                  showStep(currentStep);
                });
              });



            });
          </script>
>>>>>>> 34382e7c6b176700470cf140b400c02155c62b64
</body>

</html>
