<!DOCTYPE html>
<html lang="en">

{{--  <!-- Mirrored from lineone.piniastudio.com/pages-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 May 2023 04:16:44 GMT -->  --}}
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<head>
    <!-- Meta tags  -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

    <title>Login</title>
    <script src="https://cdn.tailwindcss.com%22%3E/"></script>
        <script>
            theme: {
                extend: {
                    blur: {
                        xs: '3px',
                    }
                },
            }
        </script>
    <link href="/admin/assets/images/logo.png" rel="shortcut icon">

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

    @if (session()->has('berhasil_daftar'))
        <script>
            Swal.fire({
                title: "Data Anda berhasil dikirim",
                text: "silangkan Tunggu proses selama paling lama 2 hari.",
                icon: "info",
                showCancelButton: false,
                confirmButtonColor: "#3085d6",
                confirmButtonText: "OK",
                timer: 3000
            });
        </script>
    @endif
    @if (session()->has('success'))
        <script>
            Swal.fire(
                'Berhasil!',
                "{{ session('success') }}",
                'success'
            )
        </script>
    @endif
    @if (session()->has('error'))
        <script>
            Swal.fire(
                'Oops..!',
                "{{ session('error') }}",
                'error'
            )
        </script>
    @endif


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
                    src="lineone/images/illustrations/login.svg" alt="image" />
                <img class="w-full" x-show="$store.global.isDarkModeEnabled"
                    src="lineone/images/illustrations/dashboard-check-dark.svg" alt="image" />
            </div>
        </div>
        <main class="flex w-full flex-col items-center bg-white dark:bg-navy-700 lg:max-w-md">
            <div class="flex w-full max-w-sm grow flex-col justify-center p-5">
                <div class="text-center">
                    <img class="mx-auto h-16 w-16 lg:hidden" src="{{ asset('admin/assets/images/logo.png') }}" alt="logo" />
                    <div class="mt-4">
                        <h2 class="text-2xl font-semibold text-slate-600 dark:text-navy-100">
                            Selamat Datang
                        </h2>
                        <p class="text-slate-400 dark:text-navy-300">
                            di Hummasoft Technology
                        </p>
                    </div>
                </div>

                <div class="mt-16">
                    <form method="POST" action="{{ route('postlogin') }}">
                        @csrf
                        <label class="relative flex">
                            <input id="email" name="email"
                                class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                                placeholder="Email" type="email" required />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </span>
                        </label>
                        @error('email')
                            <div class="text-sm text-red-500 font-medium">{{ $message }}</div>
                        @enderror

                        <label class="relative mt-4 flex">
                            <input id="password" name="password"
                                class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                                placeholder="Password" type="password" required />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </span>
                        </label>
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mt-4 flex items-center justify-between space-x-2">
                            <label class="inline-flex items-center space-x-2">
                                <input id="remember-checkbox"
                                    class="form-checkbox is-outline h-5 w-5 rounded border-slate-400/70 bg-slate-100 before:bg-primary checked:border-primary hover:border-primary focus:border-primary dark:border-navy-500 dark:bg-navy-900 dark:before:bg-accent dark:checked:border-accent dark:hover:border-accent dark:focus:border-accent"
                                    type="checkbox" />

                                <p class="line-clamp-1 cursor-pointer text-sm" onclick="showModal()">Kebijakan privasi
                                </p>


                                <div id="myModal" class="modal hidden">
                                    <div class="modal-overlay"></div>
                                    <div class="modal-content">
                                        <span class="close absolute top-2 right-2 text-gray-600 cursor-pointer "
                                            onclick="closeModal()">&times;</span>
                                        <div class="modal-inner-content">
                                            <img src="http://127.0.0.1:8000/siswa/images/hummasoft.png" class="w-40"
                                                alt=""> <br>
                                            <hr><br>
                                            <h3 class="font-semibold">Privacy Policy untuk Hummasoft Technology
                                            </h3>
                                            <br>
                                            <p>Di Magang Hummasoft, dapat diakses dari MagangHummasoft.com, salah
                                                satu
                                                prioritas utama kami adalah privasi pengunjung kami. Dokumen
                                                Kebijakan
                                                Privasi
                                                ini berisi jenis informasi yang dikumpulkan dan dicatat oleh
                                                MagangHummasoft.com
                                                dan bagaimana kami menggunakannya.
                                            </p><br>
                                            <p>
                                                Jika Anda memiliki pertanyaan tambahan atau memerlukan informasi
                                                lebih
                                                lanjut tentang Kebijakan Privasi kami, jangan ragu untuk menghubungi
                                                kami.

                                            </p>
                                            <br>
                                            <p class="font-semibold">Informasi yang Kami Kumpulkan
                                            </p>
                                            <br>
                                            <p> MagangHummasoft.com mengikuti prosedur standar menggunakan file log.
                                                File-file ini mencatat pengunjung ketika mereka mengunjungi situs
                                                web.
                                                Semua perusahaan hosting melakukan ini dan merupakanbagian dari
                                                analisis
                                                layanan hosting. Informasi yang dikumpulkan oleh file log termasuk
                                                alamat protokol internet (IP), jenis browser, Penyedia Layanan
                                                Internet
                                                (ISP), tanggal dan waktu,
                                                halaman rujukan/keluar, dan mungkin jumlah klik.Ini tidak terkait
                                                dengan
                                                informasi apa pun yang dapat diidentifikasi secara pribadi. Tujuan
                                                informasi adalah untuk menganalisis jurnal sisiwa magang, mengelola
                                                siswa magang, dan pendataran siswa magang.
                                            </p><br>
                                            <p class="font-semibold">Cookies
                                            </p>
                                            <p>Seperti situs web lainnya, MagangHummasoft.com menggunakan ‘cookie’.
                                                Cookie digunakan untuk menyimpan informasi seperti preferensi
                                                pengunjung
                                                dan halaman yang diakses atau dikunjungi pengunjung pada situs web
                                                ini.
                                                Informasi tersebut kami gunakan untuk mengoptimalkan pengalaman
                                                pengguna
                                                dengan menyesuaikan konten halaman web kami.
                                            </p><br>
                                            <p class="font-semibold">Kebijakan Privasi Pihak Ketiga
                                            </p><br>
                                            <p>Kebijakan Privasi MagangHummasoft.com tidak berlaku untuk pengiklan
                                                atau
                                                situs web lain. Karena itu, kami menyarankan Anda untuk membaca
                                                seksama
                                                masing-masing Kebijakan Privasi dari pihak ketiga untuk informasi
                                                yang
                                                lebih rinci. Anda berhak untuk menonaktifkan cookies pada browser
                                                Anda.
                                            </p><br>
                                            <p class="font-semibold">Persetujuan</p> <br>
                                            <p>Dengan menggunakan situs web kami, Anda dengan ini menyetujui
                                                Kebijakan
                                                Privasi kami dan menyetujui syarat dan ketentuannya.</p> <br><br>
                                        </div>
                                    </div>
                                </div>

                                <link href="https://cdn.tailwindcss.com/2.2.19/tailwind.min.css" rel="stylesheet">
                                <style>
                                    .modal-overlay {
                                        z-index: 50;
                                        position: fixed;
                                        top: 0;
                                        left: 0;
                                        width: 100%;
                                        height: 100%;
                                        background-color: rgba(0, 0, 0, 0.5);
                                        backdrop-filter: blur(10px);
                                    }

                                    .modal-content {
                                        z-index: 60;
                                        position: fixed;
                                        top: 50%;
                                        left: 50%;
                                        transform: translate(-50%, -50%);
                                        width: 583px;
                                        height: 505px;
                                        border-radius: 8px;
                                        background: #FFF;
                                        box-shadow: 0px 0px 2px -1px rgba(0, 0, 0, 0.10);
                                        overflow-y: auto;
                                        padding: 20px;
                                    }

                                    .modal-inner-content {
                                        max-height: 100%;
                                    }

                                    .close {
                                        top: 10px;
                                        right: 10px;
                                    }
                                </style>


                                <script>
                                    function showModal() {
                                        var modal = document.getElementById("myModal");
                                        modal.classList.remove("hidden");
                                        document.body.style.overflow = "hidden";
                                    }

                                    function closeModal() {
                                        var modal = document.getElementById("myModal");
                                        modal.classList.add("hidden");
                                        document.body.style.overflow = "auto";
                                    }
                                </script>
                            </label>
                            <a href="lupapassword"
                                class="text-xs text-slate-400 transition-colors line-clamp-1 hover:text-slate-800 focus:text-slate-800 dark:text-navy-300 dark:hover:text-navy-100 dark:focus:text-navy-100">Lupa
                                Password?</a>
                        </div>
                        <p id="privacy-warning" style="margin-bottom: -20px;"
                            class="text-red-500 mt-3 text-xs hidden line-clamp-1 cursor-pointer " style="text-red">Anda harus
                            menyetujui
                            kebijakan privasi.</p>

                        <button id="login-button" type="submit"
                            class="btn mt-10 h-10 w-full bg-info font-medium text-white">Login</button>
                        <script>
                            const rememberCheckbox = document.getElementById('remember-checkbox');
                            const loginButton = document.getElementById('login-button');
                            const privacyWarning = document.getElementById('privacy-warning');

                            rememberCheckbox.addEventListener('change', function() {
                                loginButton = !this.checked;
                                privacyWarning.classList.add('hidden');
                            });

                            loginButton.addEventListener('click', function(event) {
                                if (!rememberCheckbox.checked) {
                                    event.preventDefault();
                                    privacyWarning.classList.remove('hidden');
                                }
                            });
                        </script>


                    </form>
                    <div class="mt-4 text-center text-xs+">
                        <p class="line-clamp-1">
                            <span>Belum punya Akun?</span>
                            <a class="text-info transition-colors hover:text-info-focus dark:text-accent-light dark:hover:text-accent"
                                href="{{ route('login.create') }}">Daftar</a>
                        </p>
                    </div>
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
</body>
<!-- Mirrored from lineone.piniastudio.com/pages-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 May 2023 04:16:45 GMT -->

</html>
