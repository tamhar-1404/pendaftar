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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/smartwizard/dist/css/smart_wizard.min.css">

    {{-- <style>
        .step {
            display: none;
        }

        .step.active {
            display: block;
        }
    </style> --}}
</head>

<body x-data class="is-header-blur" x-bind="$store.global.documentBody">
    <!-- App preloader-->
    {{-- <div class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">
        <div class="app-preloader-inner relative inline-block h-48 w-48"></div>

    </div> --}}
    {{-- <div class="center fixed z-50 grid h-full w-full place-content-center">
        <div class="ring relative inline-block h-48 w-48"></div>
        <img src="{{ asset('admin/loading/logo.png') }}" alt="Deskripsi gambar" class="my-img">
    </div> --}}

    <!-- Page Wrapper -->
    <div id="" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak>
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
            <ol class="steps is-horizontal line-space [--size:2.75rem] [--line:.5rem]">
                <li id="" class="step space-x-4 pb-12 before:bg-slate-200 dark:before:bg-navy-500">
                    <a  href="#step-1">
                        <div class="step-header mask is-hexagon bg-info text-white dark:bg-accent">
                            <i class="fa-solid fa-layer-group text-base"></i>
                        </div>
                        <div class="text-center">
                            <p class="text-xs text-slate-400 dark:text-navy-300">Step 1</p>
                            <h3 class="text-base font-medium text-info dark:text-accent-light">Data Diri</h3>
                        </div>
                    </a>
                </li>
                <li id="" class="step space-x-4 pb-12 before:bg-slate-200 dark:before:bg-navy-500">
                    <a href="#step-2">
                        <div
                            class="step-header mask is-hexagon bg-slate-200 text-slate-500 dark:bg-navy-500 dark:text-navy-100">
                            <i class="fa-solid fa-user text-base"></i>
                        </div>
                        <div class="text-center">
                            <p class="text-xs text-slate-400 dark:text-navy-300">Step 2</p>
                            <h3 class="text-base font-medium">Data Diri</h3>
                        </div>
                    </a>
                </li>
                <li id="" class="step space-x-4 pb-12 before:bg-slate-200 dark:before:bg-navy-500">
                    <a href="#step-3">
                        <div
                            class="step-header mask is-hexagon bg-slate-200 text-slate-500 dark:bg-navy-500 dark:text-navy-100">
                            <i class="fa-solid fa-file-lines text-base"></i>
                        </div>
                        <div class="text-center">
                            <p class="text-xs text-slate-400 dark:text-navy-300">Step 3</p>
                            <h3 class="text-base font-medium">Berkas</h3>
                        </div>
                    </a>
                </li>
                <li id="" class="step space-x-4 before:bg-slate-200 dark:before:bg-navy-500">
                    <a href="#step-4">
                        <div
                            class="step-header mask is-hexagon bg-slate-200 text-slate-500 dark:bg-navy-500 dark:text-navy-100">
                            <i class="fa-solid fa-check text-base"></i>
                        </div>
                        <div class="text-center">
                            <p class="text-xs text-slate-400 dark:text-navy-300">Step 4</p>
                            <h3 class="text-base font-medium">Konfirmasi</h3>
                        </div>
                    </a>
                </li>
            </ol>
        </div>
        {{-- <div class="progress-bar">
            <div class="progress"></div>
        </div> --}}

        <div class="col-span-12 grid lg:col-span-6 lg:place-items-center z-10">

        </div>
        <main  id="smartwizard" class="flex w-full flex-col items-center bg-white dark:bg-navy-700 lg:max-w-md">
            <div class="flex w-full max-w-sm grow flex-col justify-center p-5">

                <div class="text-center">
                    <img class="mx-auto h-16 w-16 lg:hidden" src="lineone/images/app-logo.svg" alt="logo" />
                    <div class="mt-4">
                        <h2 class="text-2xl font-semibold text-slate-600 dark:text-navy-100">
                            Selamat Datang
                        </h2>
                        <p class="text-slate-400 dark:text-navy-300">
                            di Hummasoft Technology
                        </p>
                    </div>
                </div>
               {{-- form  --}}
               <div class="tab-content">
                <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                    Step content
                </div>
                <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                    Step content
                </div>
                <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                    Step content
                </div>
                <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
                    Step content
                </div>
                </div>
               {{-- end form  --}}
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



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>



    {{-- <div id="x-teleport-target"></div> --}}
    <script>
        window.addEventListener("DOMContentLoaded", () => Alpine.start());
    </script>


    <!-- JavaScript untuk mengatur tampilan dan navigasi antar langkah -->

</body>

<!-- Mirrored from lineone.piniastudio.com/pages-singup-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 May 2023 04:16:45 GMT -->

</html>
