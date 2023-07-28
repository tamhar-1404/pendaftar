<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Absensi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        theme: {
            extend: {
                blur: {
                    xs: '3px',
                }
            },
        },
    </script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="admin/hummasoft.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" media="screen"
        href="{{ asset('admin/assets/css/perfect-scrollbar.min.css') }}" />
    <link rel="stylesheet" href="load/load.css">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('Admin/Assets/Css/Style.css') }}" />
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
        /* Menyembunyikan tombol cetak saat mencetak */
        @media print {
            . {
                display: none;
            }

            .print-container {
                position: absolute;
                top: 20px;
                left: 0;
            }
        }
    </style>
</head>

<body>


    <!-- screen loader -->
    <div
        class="spin_load  screen_loader animate__animated fixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
        <div class="center">
            <div class="ring">
            </div>
            <img src="load/logo.png" alt="Deskripsi gambar" class="my-img">
        </div>
    </div>

    @include('jurnal_admin.layout')

    <div class=" pl-[px] " id="content">


        @include('jurnal_admin.nav')
        <!-- Navbar -->
        <div class="animate__animated p-6" :class="[$store.app.animation]">
            <!-- start main content section -->
            <div x-data="basic" class="mt-8">
                {{-- judul --}}
                <div class="mb-5 font-semibold">
                    <span> Absensi / <span class="text-[#00B7FF]"></span></span>
                </div>
                <div class="panel">
                    <div class="flex justify-between ">
                        {{-- serch dan filter --}}
                        <div class="flex justify-start items-center ">
                            {{-- filter --}}
                            <div id="buttonContainer" class="mb-4">
                                <div id="openModalBtn" class="border-2 rounded-full text-white border-gray-400 flex items-center mr-2 py-2 px-2 mb-1" onclick="openModal()">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
                                    </svg>
                                </div>
                            </div>
                            <!-- Modal -->
                                <div  id="modal" class="fixed left-4 top-4 flex items-center justify-center z-50 hidden">
                                    <div class="w-96 bg-white rounded-lg p-6 shadow-lg">
                                        <div class="modal-header mb-4">
                                            <div class="flex items-center justify-between mb-4">
                                                <h5 class="text-xl font-bold">Filter Approval Siswa</h5>
                                                <button onclick="closeModal()" class="text-gray-500 ml-auto focus:outline-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="max-h-[250px] overflow-scroll">
                                            <div class="modal-body mt-5">
                                                <label class="flex flex-col mb-2">
                                                    <p class="text-base mb-3">Status</p>
                                                    <div class="w-full grid grid-cols-2 gap-2" id="statusOptions">
                                                        <!-- Data status akan dimuat menggunakan AJAX -->
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="modal-footer mt-4 flex justify-end gap-2">
                                                <button class="bg-white py-1 px-3 rounded-lg border border-gray-200 text-gray-300">Atur Ulang</button>
                                                <button onclick="applyFilter()" class="bg-blue-400 py-1 px-3 rounded-lg border border-gray-200 text-white">Pakai</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {{-- script filter --}}
                            <script>
                                function openModal() {
                                    //
                                    fetch('/data-approval')
                                        .then(response => response.json())
                                        .then(data => {
                                            // Populate data ke dalam modal
                                            const statusOptions = document.getElementById('statusOptions');
                                            statusOptions.innerHTML = ''; // Hapus konten sebelumnya jika ada

                                            data.forEach(approval => {
                                                const checkbox = document.createElement('input');
                                                checkbox.type = 'checkbox';
                                                checkbox.className = 'hidden';
                                                checkbox.onclick = () => changeColor(checkbox);

                                                const checkboxLabel = document.createElement('span');
                                                checkboxLabel.className = 'border text-sm font-thin w-full border-gray-300 rounded px-2 py-1 bg-white text-gray-700 max-w-xs p-3';
                                                checkboxLabel.innerText = approval.status; // Ganti dengan kolom yang sesuai dengan status yang Anda inginkan

                                                statusOptions.appendChild(checkbox);
                                                statusOptions.appendChild(checkboxLabel);
                                            });
                                        });

                                    // Tentukan posisi modal berdasarkan posisi tombol SVG
                                    const buttonContainer = document.getElementById('buttonContainer');
                                    const modal = document.getElementById('modal');
                                    const modalWidth = 400; // Atur lebar modal sesuai kebutuhan Anda

                                    const modalLeft = buttonContainer.offsetLeft - (modalWidth - buttonContainer.offsetWidth) / 2;
                                    const modalTop = buttonContainer.offsetTop + buttonContainer.offsetHeight + 10; // Jarak vertikal antara tombol dan modal

                                    modal.style.left = `${modalLeft}px`;
                                    modal.style.top = `${modalTop}px`;

                                    // Tampilkan modal
                                    modal.classList.remove('hidden');
                                }

                                function closeModal() {
                                    // Sembunyikan modal
                                    const modal = document.getElementById('modal');
                                    modal.classList.add('hidden');
                                }

                                function changeColor(checkbox) {
                                    // Implementasikan fungsi untuk mengubah warna label checkbox sesuai dengan status checkbox
                                    // Misalnya, jika checkbox terpilih, ubah warna label menjadi berbeda
                                }

                                function applyFilter() {
                                    // Implementasikan fungsi untuk menerapkan filter dengan mengambil opsi-opsi yang dipilih oleh pengguna
                                    // Lakukan AJAX untuk mengambil data sesuai filter dan tampilkan data yang sesuai di halaman
                                }
                            </script>
                            {{-- serch --}}
                            <form action="">
                                <label class="relative hidden sm:flex">
                                    <input
                                        class="form-input peer h-9 w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 text-xs+ placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="Search users..." type="text" name="cari"
                                        value="{{ request('cari') }}" />
                                    <span
                                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-4 w-4 transition-colors duration-200" fill="currentColor"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M3.316 13.781l.73-.171-.73.171zm0-5.457l.73.171-.73-.171zm15.473 0l.73-.171-.73.171zm0 5.457l.73.171-.73-.171zm-5.008 5.008l-.171-.73.171.73zm-5.457 0l-.171.73.171-.73zm0-15.473l-.171-.73.171.73zm5.457 0l.171-.73-.171.73zM20.47 21.53a.75.75 0 101.06-1.06l-1.06 1.06zM4.046 13.61a11.198 11.198 0 010-5.115l-1.46-.342a12.698 12.698 0 000 5.8l1.46-.343zm14.013-5.115a11.196 11.196 0 010 5.115l1.46.342a12.698 12.698 0 000-5.8l-1.46.343zm-4.45 9.564a11.196 11.196 0 01-5.114 0l-.342 1.46c1.907.448 3.892.448 5.8 0l-.343-1.46zM8.496 4.046a11.198 11.198 0 015.115 0l.342-1.46a12.698 12.698 0 00-5.8 0l.343 1.46zm0 14.013a5.97 5.97 0 01-4.45-4.45l-1.46.343a7.47 7.47 0 005.568 5.568l.342-1.46zm5.457 1.46a7.47 7.47 0 005.568-5.567l-1.46-.342a5.97 5.97 0 01-4.45 4.45l.342 1.46zM13.61 4.046a5.97 5.97 0 014.45 4.45l1.46-.343a7.47 7.47 0 00-5.568-5.567l-.342 1.46zm-5.457-1.46a7.47 7.47 0 00-5.567 5.567l1.46.342a5.97 5.97 0 014.45-4.45l-.343-1.46zm8.652 15.28l3.665 3.664 1.06-1.06-3.665-3.665-1.06 1.06z" />
                                        </svg>
                                    </span>
                                </label>
                            </form>
                        </div>
                        <div class="mb-5 flex flex-wrap  mt-5 items-center ">
                            <a href="{{ route('exportToDocxabsen') }}">
                                <button type="button"
                                    class="flex gap-2 text-white bg-blue-400 hover:bg-blue-400 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-400 dark:hover:bg-blue-400 focus:outline-none dark:focus:ring-blue-800"
                                    @click="exportTable('csv')">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ltr:mr-2 rtl:ml-2">
                                        <path
                                            d="M15.3929 4.05365L14.8912 4.61112L15.3929 4.05365ZM19.3517 7.61654L18.85 8.17402L19.3517 7.61654ZM21.654 10.1541L20.9689 10.4592V10.4592L21.654 10.1541ZM3.17157 20.8284L3.7019 20.2981H3.7019L3.17157 20.8284ZM20.8284 20.8284L20.2981 20.2981L20.2981 20.2981L20.8284 20.8284ZM14 21.25H10V22.75H14V21.25ZM2.75 14V10H1.25V14H2.75ZM21.25 13.5629V14H22.75V13.5629H21.25ZM14.8912 4.61112L18.85 8.17402L19.8534 7.05907L15.8947 3.49618L14.8912 4.61112ZM22.75 13.5629C22.75 11.8745 22.7651 10.8055 22.3391 9.84897L20.9689 10.4592C21.2349 11.0565 21.25 11.742 21.25 13.5629H22.75ZM18.85 8.17402C20.2034 9.3921 20.7029 9.86199 20.9689 10.4592L22.3391 9.84897C21.9131 8.89241 21.1084 8.18853 19.8534 7.05907L18.85 8.17402ZM10.0298 2.75C11.6116 2.75 12.2085 2.76158 12.7405 2.96573L13.2779 1.5653C12.4261 1.23842 11.498 1.25 10.0298 1.25V2.75ZM15.8947 3.49618C14.8087 2.51878 14.1297 1.89214 13.2779 1.5653L12.7405 2.96573C13.2727 3.16993 13.7215 3.55836 14.8912 4.61112L15.8947 3.49618ZM10 21.25C8.09318 21.25 6.73851 21.2484 5.71085 21.1102C4.70476 20.975 4.12511 20.7213 3.7019 20.2981L2.64124 21.3588C3.38961 22.1071 4.33855 22.4392 5.51098 22.5969C6.66182 22.7516 8.13558 22.75 10 22.75V21.25ZM1.25 14C1.25 15.8644 1.24841 17.3382 1.40313 18.489C1.56076 19.6614 1.89288 20.6104 2.64124 21.3588L3.7019 20.2981C3.27869 19.8749 3.02502 19.2952 2.88976 18.2892C2.75159 17.2615 2.75 15.9068 2.75 14H1.25ZM14 22.75C15.8644 22.75 17.3382 22.7516 18.489 22.5969C19.6614 22.4392 20.6104 22.1071 21.3588 21.3588L20.2981 20.2981C19.8749 20.7213 19.2952 20.975 18.2892 21.1102C17.2615 21.2484 15.9068 21.25 14 21.25V22.75ZM21.25 14C21.25 15.9068 21.2484 17.2615 21.1102 18.2892C20.975 19.2952 20.7213 19.8749 20.2981 20.2981L21.3588 21.3588C22.1071 20.6104 22.4392 19.6614 22.5969 18.489C22.7516 17.3382 22.75 15.8644 22.75 14H21.25ZM2.75 10C2.75 8.09318 2.75159 6.73851 2.88976 5.71085C3.02502 4.70476 3.27869 4.12511 3.7019 3.7019L2.64124 2.64124C1.89288 3.38961 1.56076 4.33855 1.40313 5.51098C1.24841 6.66182 1.25 8.13558 1.25 10H2.75ZM10.0298 1.25C8.15538 1.25 6.67442 1.24842 5.51887 1.40307C4.34232 1.56054 3.39019 1.8923 2.64124 2.64124L3.7019 3.7019C4.12453 3.27928 4.70596 3.02525 5.71785 2.88982C6.75075 2.75158 8.11311 2.75 10.0298 2.75V1.25Z"
                                            fill="currentColor" />
                                        <path opacity="0.5"
                                            d="M13 2.5V5C13 7.35702 13 8.53553 13.7322 9.26777C14.4645 10 15.643 10 18 10H22"
                                            stroke="currentColor" stroke-width="1.5" />
                                    </svg>
                                    DOCX
                                </button>
                            </a>
                            <a href="{{ route('absensi_pdf_admin') }}">
                                <button type="button"
                                    class="flex gap-2 text-white bg-red-500 hover:bg-red-500 cus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5  py-2.5 mr-2 mb-2 dark:bg-red-500 dark:hover:bg-red-500 focus:outline-none dark:focus:ring-red-800"
                                    @click="exportTable('txt')">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ltr:mr-2 rtl:ml-2">
                                        <path
                                            d="M15.3929 4.05365L14.8912 4.61112L15.3929 4.05365ZM19.3517 7.61654L18.85 8.17402L19.3517 7.61654ZM21.654 10.1541L20.9689 10.4592V10.4592L21.654 10.1541ZM3.17157 20.8284L3.7019 20.2981H3.7019L3.17157 20.8284ZM20.8284 20.8284L20.2981 20.2981L20.2981 20.2981L20.8284 20.8284ZM14 21.25H10V22.75H14V21.25ZM2.75 14V10H1.25V14H2.75ZM21.25 13.5629V14H22.75V13.5629H21.25ZM14.8912 4.61112L18.85 8.17402L19.8534 7.05907L15.8947 3.49618L14.8912 4.61112ZM22.75 13.5629C22.75 11.8745 22.7651 10.8055 22.3391 9.84897L20.9689 10.4592C21.2349 11.0565 21.25 11.742 21.25 13.5629H22.75ZM18.85 8.17402C20.2034 9.3921 20.7029 9.86199 20.9689 10.4592L22.3391 9.84897C21.9131 8.89241 21.1084 8.18853 19.8534 7.05907L18.85 8.17402ZM10.0298 2.75C11.6116 2.75 12.2085 2.76158 12.7405 2.96573L13.2779 1.5653C12.4261 1.23842 11.498 1.25 10.0298 1.25V2.75ZM15.8947 3.49618C14.8087 2.51878 14.1297 1.89214 13.2779 1.5653L12.7405 2.96573C13.2727 3.16993 13.7215 3.55836 14.8912 4.61112L15.8947 3.49618ZM10 21.25C8.09318 21.25 6.73851 21.2484 5.71085 21.1102C4.70476 20.975 4.12511 20.7213 3.7019 20.2981L2.64124 21.3588C3.38961 22.1071 4.33855 22.4392 5.51098 22.5969C6.66182 22.7516 8.13558 22.75 10 22.75V21.25ZM1.25 14C1.25 15.8644 1.24841 17.3382 1.40313 18.489C1.56076 19.6614 1.89288 20.6104 2.64124 21.3588L3.7019 20.2981C3.27869 19.8749 3.02502 19.2952 2.88976 18.2892C2.75159 17.2615 2.75 15.9068 2.75 14H1.25ZM14 22.75C15.8644 22.75 17.3382 22.7516 18.489 22.5969C19.6614 22.4392 20.6104 22.1071 21.3588 21.3588L20.2981 20.2981C19.8749 20.7213 19.2952 20.975 18.2892 21.1102C17.2615 21.2484 15.9068 21.25 14 21.25V22.75ZM21.25 14C21.25 15.9068 21.2484 17.2615 21.1102 18.2892C20.975 19.2952 20.7213 19.8749 20.2981 20.2981L21.3588 21.3588C22.1071 20.6104 22.4392 19.6614 22.5969 18.489C22.7516 17.3382 22.75 15.8644 22.75 14H21.25ZM2.75 10C2.75 8.09318 2.75159 6.73851 2.88976 5.71085C3.02502 4.70476 3.27869 4.12511 3.7019 3.7019L2.64124 2.64124C1.89288 3.38961 1.56076 4.33855 1.40313 5.51098C1.24841 6.66182 1.25 8.13558 1.25 10H2.75ZM10.0298 1.25C8.15538 1.25 6.67442 1.24842 5.51887 1.40307C4.34232 1.56054 3.39019 1.8923 2.64124 2.64124L3.7019 3.7019C4.12453 3.27928 4.70596 3.02525 5.71785 2.88982C6.75075 2.75158 8.11311 2.75 10.0298 2.75V1.25Z"
                                            fill="currentColor" />
                                        <path opacity="0.5" d="M6 14.5H14" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path opacity="0.5" d="M6 18H11.5" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path opacity="0.5"
                                            d="M13 2.5V5C13 7.35702 13 8.53553 13.7322 9.26777C14.4645 10 15.643 10 18 10H22"
                                            stroke="currentColor" stroke-width="1.5" />
                                    </svg>
                                    PDF
                                </button>
                            </a>
                            <button id="printButton" onclick="printPage()" type="button"
                                class="flex gap-2 text-white bg-gray-500 hover:bg-gray-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-500 dark:hover:bg-gray-500 focus:outline-none dark:focus:ring-gray-500"
                                @click="printTable">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ltr:mr-2 rtl:ml-2">
                                    <path
                                        d="M6 17.9827C4.44655 17.9359 3.51998 17.7626 2.87868 17.1213C2 16.2426 2 14.8284 2 12C2 9.17157 2 7.75736 2.87868 6.87868C3.75736 6 5.17157 6 8 6H16C18.8284 6 20.2426 6 21.1213 6.87868C22 7.75736 22 9.17157 22 12C22 14.8284 22 16.2426 21.1213 17.1213C20.48 17.7626 19.5535 17.9359 18 17.9827"
                                        stroke="currentColor" stroke-width="1.5" />
                                    <path opacity="0.5" d="M9 10H6" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" />
                                    <path d="M19 14L5 14" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" />
                                    <path
                                        d="M18 14V16C18 18.8284 18 20.2426 17.1213 21.1213C16.2426 22 14.8284 22 12 22C9.17157 22 7.75736 22 6.87868 21.1213C6 20.2426 6 18.8284 6 16V14"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path opacity="0.5"
                                        d="M17.9827 6C17.9359 4.44655 17.7626 3.51998 17.1213 2.87868C16.2427 2 14.8284 2 12 2C9.17158 2 7.75737 2 6.87869 2.87868C6.23739 3.51998 6.06414 4.44655 6.01733 6"
                                        stroke="currentColor" stroke-width="1.5" />
                                    <circle opacity="0.5" cx="17" cy="10" r="1"
                                        fill="currentColor" />
                                    <path opacity="0.5" d="M15 16.5H9" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" />
                                    <path opacity="0.5" d="M13 19H9" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" />
                                </svg>
                                PRINT
                            </button>
                        </div>
                    </div>
                    <div id="grafik_admin"
                        class=" w-90% h-35 mx-4 bg-white rounded-lg dark:bg-black mt-4 "style="box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.25); border-radius: 8px; ">
                        <div class="w-full px-4 mt-6">
                            <div class="w-80%  bg-white h-35 pt-5 text-same font-semibold dark:bg-transparent">
                                Grafik Absensi
                            </div>
                        </div>
                    </div>


                    {{-- tabel --}}

                    <div class="flex flex-col  ">
                        <div class="overflow-x-auto mt-5 sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full text-left text-sm font-light">
                                        <thead class="border-b font-medium dark:border-neutral-500 ">
                                            <tr class="">
                                                <th scope="col" class="px-6 py-4">#</th>
                                                <th scope="col" class="px-6 py-4">Nama</th>
                                                <th scope="col" class="px-6 py-4">Sekolah</th>
                                                <th scope="col" class="px-6 py-4">Tanggal</th>
                                                <th scope="col" class="px-6 py-4 ">jam</th>
                                                <th scope="col" class="px-6 py-4">keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @forelse ($terima as $absen)
                                                <tr
                                                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:text-black-200 ">
                                                    <td class="whitespace-nowrap px-6 py-2 font-medium">
                                                        {{ $no++ }}</td>
                                                    <td class="whitespace-nowrap px-6 py-2">{{ $absen->nama }}</td>
                                                    <td class="whitespace-nowrap px-6 py-2">{{ $absen->sekolah }}</td>
                                                    <td class="whitespace-nowrap px-6 py-2">{{ $absen->tanggal }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4">{{ $absen->jam }}</td>
                                                    <td class="whitespace-nowrap px-6 py-2">
                                                        @if ($absen->keterangan === 'Hadir')
                                                            <span
                                                                class=" text-green-500">{{ $absen->keterangan }}</span>
                                                        @else
                                                            <span
                                                                class=" text-red-500">{{ $absen->keterangan }}</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="p-8 text-center">
                                                        <div class="flex justify-center items-center">
                                                            <img src="/admin/noData.png" alt=""
                                                                width="280px">
                                                        </div>
                                                    </td>
                                                </tr>
                                </div>
                                @endforelse
                                </tbody>
                                </table>
                                {{ $terima->appends(['cari' => request('cari')])->links() }}
                            </div>
                        </div>
                    </div>
                </div>

                {{-- paginate --}}

            </div>
            {{-- end tabel --}}

        </div>
    </div>
    <!-- end main content section -->
    <!-- start footer section -->
    {{-- <p class="pt-6 text-center dark:text-white-dark ltr:sm:text-left rtl:sm:text-right">
            © <span id="footer-year">2022</span>. Vristo All rights reserved.
        </p> --}}
    <!-- end footer section -->

    </div>
    {{-- modal --}}
    <div data-te-modal-init
        class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollable"
        aria-modal="true" role="dialog">
        <div data-te-modal-dialog-ref
            class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
            <div
                class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <!--Modal title-->
                    <h5 class="text-xl font-medium leading-normal text-neutral-900 dark:text-neutral-200"
                        id="exampleModalCenteredScrollableLabel">
                        Detail Pelanggaran
                    </h5>
                    <!--Close button-->
                    <button type="button"
                        class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                        data-te-modal-dismiss aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!--Modal body-->
                <div class="relative p-4">
                    <p class=" text-md">
                        Nama :
                    </p>

                    <p class="ml-5 mt-2 text-md text-gray-400">
                        Mark
                    </p>

                    <p class=" text-md mt-4">
                        Tanggal :
                    </p>

                    <p class="ml-5 mt-2 text-md text-gray-400">
                        03-04-2023
                    </p>

                    <p class=" text-md mt-4">
                        Sekolah :
                    </p>

                    <p class="ml-5 mt-2 text-md text-gray-400">
                        SMKN 1 KEPANJEN
                    </p>

                    <p class=" text-md mt-4">
                        Pelanggaran :
                    </p>

                    <p class="ml-5 mt-2 text-md text-gray-400">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic unde excepturi velit quibusdam
                        consequuntur et facilis, labore veritatis debitis vitae enim libero odio soluta at cumque
                        asperiores ea. Autem, incidunt?
                    </p>



                </div>

                <!--Modal footer-->
                <div
                    class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <button type="button"
                        class="ml-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                        data-te-ripple-init data-te-modal-dismiss data-te-ripple-color="light">
                        Kembali
                    </button>
                </div>
            </div>
            {{-- end modal --}}
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script>
        $(window).on('load', function() {
            $('.spin_load').fadeOut();
        });
    </script>
    <script>
        var options = {
            series: [{
                name: 'Izin & Sakit',
                data: [{{ $izin_jan }}, {{ $izin_feb }}, {{ $izin_mar }}, {{ $izin_apr }},
                    {{ $izin_mei }},
                    {{ $izin_jun }}, {{ $izin_jul }}, {{ $izin_aug }}, {{ $izin_sep }},
                    {{ $izin_okt }}, {{ $izin_nov }}, {{ $izin_des }}
                ]
            }, {
                name: 'Hadir',
                data: [{{ $Hadir_jan }}, {{ $Hadir_feb }}, {{ $Hadir_mar }}, {{ $Hadir_apr }},
                    {{ $Hadir_mei }},
                    {{ $Hadir_jun }}, {{ $Hadir_jul }}, {{ $Hadir_aug }}, {{ $Hadir_sep }},
                    {{ $Hadir_okt }}, {{ $Hadir_nov }}, {{ $Hadir_des }}
                ]
            }, {
                name: 'telat',
                data: [{{ $Telat_jan }}, {{ $Telat_feb }}, {{ $Telat_mar }}, {{ $Telat_apr }},
                    {{ $Telat_mei }},
                    {{ $Telat_jun }}, {{ $Telat_jul }}, {{ $Telat_aug }}, {{ $Telat_sep }},
                    {{ $Telat_okt }}, {{ $Telat_nov }}, {{ $Telat_des }}
                ]
            }, {
                name: 'alfa',
                data: [{{ $Alfa_jan }}, {{ $Alfa_feb }}, {{ $Alfa_mar }}, {{ $Alfa_apr }},
                    {{ $Alfa_mei }},
                    {{ $Alfa_jun }}, {{ $Alfa_jul }}, {{ $Alfa_aug }}, {{ $Alfa_sep }},
                    {{ $Alfa_okt }}, {{ $Alfa_nov }}, {{ $Alfa_des }}
                ]
            }, ],
            chart: {
                type: 'bar',
                height: 350
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded',
                    borderRadius: 7,
                },
            },
            dataLabels: {
                enabled: false,
            },
            animations: {
                enabled: true,
                easing: 'easeinout',
                speed: 1200,
                animateGradually: {
                    enabled: true,
                    delay: 200
                },
                dynamicAnimation: {
                    enabled: true,
                    speed: 450
                }
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Des'],

            },
            yaxis: {
                title: {
                    text: ''
                }
            },
            fill: {
                opacity: 3,
                colors: ['#6769EB', '#47EBB3', '#FFA726', '#D21312']
            },
            tooltip: {
                y: {
                    // formatter: function (val) {
                    //   return "$ " + val + " thousands"
                    // }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#grafik_admin"), options);
        chart.render();
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

        initTE({
            sidenav - 2
        });
    </script>
    <script>
        // Fungsi untuk mencetak halaman
        function printPage() {
            window.print();
        }
    </script>
</body>

</html>
