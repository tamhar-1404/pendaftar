<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Approval Izin</title>
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
</head>

<body>
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
            @include('jurnal_admin.nav')
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
