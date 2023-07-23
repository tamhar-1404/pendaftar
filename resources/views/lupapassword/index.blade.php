<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from lineone.piniastudio.com/pages-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 May 2023 04:16:44 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Meta tags  -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

    <title>Lupa Password</title>
    <script>
        theme: {
            extend: {
                blur: {
                    xs: '3px',
                }
            },
        },
    </script>
    <link rel="icon" type="image/png" href="lineone/images/favicon.png" />

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
        localStorage.getItem("_x_darkMode_on") === "true" &&
            document.documentElement.classList.add("dark");
    </script>
</head>

<body x-data class="is-header-blur" x-bind="$store.global.documentBody">
    <!-- screen loader -->
    {{-- <div
        class="spin_load  screen_loader animate__animated fixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
        <div class="center">
            <div class="ring">
            </div>
            <img src="load/logo.png" alt="Deskripsi gambar" class="my-img">
        </div>
    </div> --}}

    <!-- Page Wrapper -->
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak>
        <div class="fixed top-0 hidden p-6 lg:block lg:px-12">
            <a href="#" class="flex items-center space-x-2">
                <img class="h-12 w-100" src="lineone/images/hummasoft2.png" alt="logo" />
                <p class="text-xl font-semibold uppercase text-slate-700 dark:text-navy-100">
                </p>
            </a>
        </div>
        <div class="hidden w-full place-items-center lg:grid">
            <div class="w-full max-w-lg p-6">
                <img class="w-full" x-show="!$store.global.isDarkModeEnabled"
                    src="lineone/images/illustrations/lupapassword2.svg" alt="image" />
                <img class="w-full" x-show="$store.global.isDarkModeEnabled"
                    src="lineone/images/illustrations/dashboard-check-dark.svg" alt="image" />
            </div>
        </div>
        <main class="flex w-full flex-col items-center bg-white dark:bg-navy-700 lg:max-w-md">
            <div class="flex w-full max-w-sm grow flex-col justify-center p-5">
                <div class="text-center mb-4">
                    <img class="mx-auto h-16 w-16 lg:hidden" src="lineone/images/app-logo.svg" alt="logo" />
                    <div class="mt-4">
                        <h2 class="text-2xl font-semibold text-slate-600 dark:text-navy-100">
                            Lupa Password
                        </h2>
                    </div>
                </div>
                <form action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <div class="mt-36">
                        @if (session('sukses'))
                            <div class="alert flex overflow-hidden rounded-lg border border-info text-info">
                                <div class="bg-info p-3 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div class="px-4 py-3 sm:px-5">{{ session('sukses') }}</div>
                            </div>
                        @endif
                        @if ($errors->any())
                            @foreach ($errors->all() as $err)
                                <div class="alert flex space-x-2 rounded-lg border border-error px-4 py-2 text-error">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <p>{{ $err }}</p>
                                </div>
                            @endforeach
                        @endif
                        <label class="mt-4 relative flex">
                            <input id="email" name="email"
                                class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                                placeholder="Email" type="email" required="required" />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </span>
                        </label>
                        <button type="submit"
                            class="btn mt-20 h-10 w-full bg-info font-medium text-white hover:bg-info-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                            Kirim
                        </button>
                    </div>
                </form>
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
</body>

<!-- Mirrored from lineone.piniastudio.com/pages-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 May 2023 04:16:45 GMT -->

</html>
