<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Approval Izin</title>
    <link href="/admin/assets/images/Logo.png" rel="shortcut icon">
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <link rel="stylesheet" href="load/load.css">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.33/moment-timezone-with-data.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body>
    @if (session('success'))
        <script>
            toastr.success("{{ session('success') }}");
        </script>
    @endif
    @if (auth()->user()->role == 'Admin')
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
            <nav id="main-navbar"
                class=" sticky relative left-0  right-0 top-0 flex z-9  flex-nowrap items-center justify-between bg-white py-[0.6rem] text-gray-500 shadow-lg hover:text-gray-700 focus:text-gray-700 dark:bg-zinc-700 lg:flex-wrap lg:justify-start fixed kamu-tak-diajak"
                data-te-navbar-ref>

                <div class="flex w-full flex-wrap items-center justify-between px-4  kamu-tak-diajak">
                    <div class="flex gap-4">
                        <!-- Toggler -->
                        <div class="flex items-center justify-between ltr:mr-2 rtl:ml-2 "
                            style="
            position: fixed">
                            <a href="index-2.html" class="main-logo flex shrink-9 items-center">
                                <img class="inline w-40 ltr:-ml-1 rtl:-mr-1 hidden"
                                    src="{{ asset('admin/assets/images/humma.png') }}" alt="image" />
                            </a>
                        </div>
                        <button
                            class="mt-0.5 inline-block rounded bg-info px-3 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-200 hover:shadow-lg "
                            data-te-sidenav-toggle-ref data-te-target="#sidenav-2" aria-controls="#sidenav-2"
                            aria-haspopup="true">
                            <span class="block [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->

                                    <path fill="currentColor"
                                        d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                                </svg>
                            </span>
                        </button>

                    </div>

                    <ul class="relative flex items-center">

                        <li class="relative" data-te-dropdown-ref>
                            <a class="hidden-arrow flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none"
                                href="#" id="navbarDropdownMenuLink" role="button" data-te-dropdown-toggle-ref
                                aria-expanded="false">
                                <img src="{{ asset('admin/assets/images/Logo.png') }}" class="rounded-full"
                                    style="height: 32px; width: 32px" alt="Avatar" loading="lazy" />
                            </a>
                            <ul class="absolute left-auto right-0 z-[1000] float-left m-0 mt-5 hidden min-w-[10rem] list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-zinc-700 [&[data-te-dropdown-show]]:block"
                                aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>

                                <li>
                                    <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                                        href="{{ route('keluar') }}" data-te-dropdown-item-ref>Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            {{-- <button id="addButton" class="outline outline-offset-2 outline-1 bg-[#24AEE4] hover:bg-blue-700 text-white text-sm py-2 px-4 rounded">
            Tambah data
          </button>
          <div id="registerModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
            <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
              <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
              </div>
              <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4 w-30">
                  <div class="max-w-7xl mx-auto">
                    <div class="flex flex-col">
                      <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                        Form Tambah absensi
                      </h3>
                     <form action="{{ route('approvalizin.store') }}" class="mt-4" method="post" enctype="multipart/form-data">
                        @csrf
                          <div class="mt-4">
                            <label for="Nama" class="block text-gray-700 font-medium mb-2">nama</label>
                            <input type="text" placeholder="Masukkan kegiatan Anda " id="Kegiatan" name="nama" class="block w-full h-9 px-4 rounded-md bg-white border border-gray-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                          </div>
                          <div class="mt-4">
                            <label for="Nama" class="block text-gray-700 font-medium mb-2">sekolah</label>
                            <input type="text" placeholder="Masukkan kegiatan Anda " id="Kegiatan" name="sekolah" class="block w-full h-9 px-4 rounded-md bg-white border border-gray-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                          </div>
                          <input type="hidden" name="email" value="kaderofficial33@gmail.com">
                        <div class="mt-4">
                          <label for="Nama" class="block text-gray-700 font-medium mb-2">dari</label>
                          <input type="date" placeholder="Masukkan tanggal awal" id="sekolah" name="dari" class="block w-full h-9 px-4 rounded-md bg-white border border-gray-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>

                        <div class="mt-4">
                          <label for="sekolah" class="block text-gray-700 font-medium mb-2">sampai</label>
                          <input type="date" placeholder="masukan tanggal akhir" id="sekolah" name="sampai" class="block w-full h-9 px-4 rounded-md bg-white border border-gray-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div class="mt-4">
                            <label for="sekolah" class="block text-gray-700 font-medium mb-2">keterangan</label>
                        <div class="flex items-center mb-4">
                            <input  id="disabled-radio-1" type="radio" value="izin" name="keterangan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="disabled-radio-1" class="ml-2 text-sm font-medium text-gray-400 dark:text-gray-500">Izin</label>
                        </div>
                        <div class="flex items-center">
                            <input   id="disabled-radio-2" type="radio" value="sakit" name="keterangan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="disabled-radio-2" class="ml-2 text-sm font-medium text-gray-400 dark:text-gray-500">Sakit</label>
                        </div>
                    </div>
                        <div class="mt-4">
                            <label for="sekolah" class="block text-gray-700 font-medium mb-2">deskripsi</label>
                        <textarea name="deskripsi" id="" cols="65" rows="5" class="border border-1" placeholder="Masukkan alamat anda"></textarea>
                        </div>

                        <div class="mt-4">
                            <label for="Nama" class="block text-gray-700 font-medium mb-2">bukti</label>
                            <input type="file" name="bukti" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                          </div>

                        <div class="flex items-center justify-end mt-4">
                          <div class="ml-auto">
                            <button type="button" class="bg-transparent border border-gray-300 text-gray-800 hover:bg-gray-300 hover:text-gray-800 font-bold py-2 px-4 rounded">
                              Batal
                            </button>
                          <button type="submit" class="btn btn-primary">Tambah</button>
                              <script>
                                  async function showAlert() {
                                      new window.Swal({
                                          title: "Berhasil",
                                          text: "Data berhasil di tambahkan",
                                          icon: "success",
                                          button: "oke",
                                      });
                                  }
                            </script>
                            </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}

            <script>
                const addButton = document.querySelector("#addButton");
                const registerModal = document.querySelector("#registerModal");
                const cancelButton = document.querySelector(".ml-auto button");

                addButton.addEventListener("click", () => {
                    registerModal.classList.remove("hidden");
                });

                cancelButton.addEventListener("click", () => {
                    registerModal.classList.add("hidden");
                });
            </script>


            @include('approvalizin.content')
        </div>
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
                            [].forEach((item) => node.classList.remove(item));
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
    @endif
</body>

</html>
