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
    <style>
        .step {
            display: none;
        }

        .step.active {
            display: block;
        }
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
            <ol class="steps is-horizontal line-space [--size:2.75rem] [--line:.5rem]">
                <li id="" class="step space-x-4 pb-12 before:bg-slate-200 dark:before:bg-navy-500">
                    <div class="step-header mask is-hexagon bg-info text-white dark:bg-accent">
                        <i class="fa-solid fa-layer-group text-base"></i>
                    </div>
                    <div class="text-center">
                        <p class="text-xs text-slate-400 dark:text-navy-300">Step 1</p>
                        <h3 class="text-base font-medium text-info dark:text-accent-light">Data Diri</h3>
                    </div>
                </li>
                <li id="" class="step space-x-4 pb-12 before:bg-slate-200 dark:before:bg-navy-500">
                    <div
                        class="step-header mask is-hexagon bg-slate-200 text-slate-500 dark:bg-navy-500 dark:text-navy-100">
                        <i class="fa-solid fa-user text-base"></i>
                    </div>
                    <div class="text-center">
                        <p class="text-xs text-slate-400 dark:text-navy-300">Step 2</p>
                        <h3 class="text-base font-medium">Data Diri</h3>
                    </div>
                </li>
                <li id="" class="step space-x-4 pb-12 before:bg-slate-200 dark:before:bg-navy-500">
                    <div
                        class="step-header mask is-hexagon bg-slate-200 text-slate-500 dark:bg-navy-500 dark:text-navy-100">
                        <i class="fa-solid fa-file-lines text-base"></i>
                    </div>
                    <div class="text-center">
                        <p class="text-xs text-slate-400 dark:text-navy-300">Step 3</p>
                        <h3 class="text-base font-medium">Berkas</h3>
                    </div>
                </li>
                <li id="" class="step space-x-4 before:bg-slate-200 dark:before:bg-navy-500">
                    <div
                        class="step-header mask is-hexagon bg-slate-200 text-slate-500 dark:bg-navy-500 dark:text-navy-100">
                        <i class="fa-solid fa-check text-base"></i>
                    </div>
                    <div class="text-center">
                        <p class="text-xs text-slate-400 dark:text-navy-300">Step 4</p>
                        <h3 class="text-base font-medium">Konfirmasi</h3>
                    </div>
                </li>
            </ol>
        </div>
        <div class="progress-bar">
            <div class="progress"></div>
        </div>

        <div class="col-span-12 grid lg:col-span-6 lg:place-items-center z-10">

        </div>
        <main class="flex w-full flex-col items-center bg-white dark:bg-navy-700 lg:max-w-md">
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
                <form method="POST" action="{{ route('postregister') }}" enctype="multipart/form-data"
                    id="multistep-form">
                    {{-- step 1 --}}
                    <div class="step step-1" id="step1">
                        <div class="mt-4 space-y-4">
                            <label class="block">
                                <span>Nama</span>
                                <span class="relative mt-1.5 flex">
                                    <input id="name" name="name"
                                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="Masukkan nama anda" type="text" re/>
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
                        <button
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
                        <div class="flex items-center justify-end mt-4">
                            <div class="ml-auto col">
                                <button type="button" onclick="prevStep()"
                                    class="prev-button btn mt-10 h-10 bg-info font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                    Kembali
                                </button>
                                <button type="button" onclick="nextStep()"
                                    class="next-button btn mt-10 h-10 bg-info font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                    Selanjutnya
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- step 3 --}}
                    <div class="step step-3" id="step3">
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
                        <div class="flex items-center justify-end mt-4">
                            <div class="ml-auto col">
                                <button type="button" onclick="prevStep()"
                                    class="prev-button btn mt-10 h-10 bg-info font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                    Kembali
                                </button>
                                <button type="button" onclick="nextStep()"
                                    class="next-button btn mt-10 h-10 bg-info font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                    Selanjutnya
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- step 4 --}}
                    <div class="step step-4" id="step4">
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
                        <div class="flex items-center justify-end mt-4">
                            <div class="ml-auto col">
                                <button type="button" onclick="prevStep()"
                                    class="prev-button btn mt-10 h-10 bg-info font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                    Kembali
                                </button>
                                <button type="submit"
                                    class="btn mt-10 h-10 bg-info font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                    Daftar
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="mt-4 text-center text-xs+">
                    <p class="line-clamp-1">
                        <span>Sudah punya Akun? </span>
                        <a class="text-info transition-colors hover:text-info-focus dark:text-accent-light dark:hover:text-accent"
                            href="{{ route('login.index') }}">Login</a>
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


    <!-- JavaScript untuk mengatur tampilan dan navigasi antar langkah -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById("multistep-form");
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
