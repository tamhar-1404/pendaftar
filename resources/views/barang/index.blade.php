<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Approval Pendaftaran</title>
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
    <link rel="stylesheet" href="load/load.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    @if (session()->has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Selamat',
                confirmButtonColor: '#3b82f6',
                text: "{{ session('success') }}",
            });
        </script>
    @endif
    @if ($errors->any())
        <script>
            // SweetAlert to show the error message
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                confirmButtonColor: '#3b82f6',
                text: '{{ $errors->first() }}',
            });
        </script>
    @endif

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

        {{--  isi  --}}
        <br>
        <center>

            <h4 class="font-bold">Pendataan barang</h4>
        </center>
        &nbsp;
        &nbsp;&nbsp;
        <!-- Button to Trigger Wizard -->
        <button type="button"
            class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            onclick="showStep(1)">Tambah data</button>

        <br>
        <hr class="mt-1">
        <div class="flex flex-col px-4">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-left text-sm ">
                            <thead class="border-rounded bg-[#E2E8F0] dark:border-neutral-500">
                                <tr>
                                    <th scope="col" class="px-6 py-2">#</th>
                                    <th scope="col" class="px-6 py-2">Nama</th>
                                    <th scope="col" class="px-6 py-2">Foto</th>
                                    <th scope="col" class="px-6 py-2">Kode</th>
                                    <th scope="col" class="px-6 py-2">Harga</th>
                                    <th scope="col" class="px-6 py-2">Kategori</th>
                                    <th scope="col" class="px-6 py-2">Deskripsi</th>
                                    <th scope="col" class="px-6 py-2">Stok</th>
                                    <th scope="col" class="px-6 py-2">Aksi</th>
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            <tbody>
                                @forelse ($barang as $barang)
                                    <tr>
                                        <td class="whitespace-nowrap px-6 py-2">
                                            {{ $no++ }}
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-2">
                                            {{ $barang->nama }}
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-2">
                                            <img src="{{ asset('storage/pendataanbarang/' . $barang->foto) }}"
                                                class="w-10" alt="" srcset="">
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-2">
                                            {{ $barang->kode }}
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-2">
                                            Rp. {{ number_format($barang->harga, 0, ',', '.') }}
                                        </td>

                                        <td class="whitespace-nowrap px-6 py-2">
                                            {{ $barang->kategori }}
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-2">
                                            {{ $barang->deskripsi }}
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-2">
                                            {{ $barang->stok }}
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-2 flex">
                                            <button type="button"
                                                class="text-white mr-3 bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                data-te-toggle="modal"
                                                data-modal-target="staticModal{{ $barang->id }}"
                                                data-modal-toggle="staticModal{{ $barang->id }}">
                                                <i class="fa fa-pencil-square-o"></i>
                                            </button>
                                            <form action="{{ route('barang.destroy', $barang->id) }}" method="post"
                                                id="confirm-form-{{ $barang->id }}">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" onclick="confirmDelete(event)"
                                                    class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                                    <i class=" fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <script>
                            function confirmDelete(event) {
                                event.preventDefault();

                                Swal.fire({
                                    title: 'Konfirmasi',
                                    text: 'Apakah Anda yakin ingin menghapus stok barang ini?',
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Ya, terima!',
                                    cancelButtonText: 'Batal',
                                    background: '#f5f5f5',
                                    customClass: {
                                        icon: 'swal-icon',
                                        confirmButton: 'swal-button swal-button--confirm',
                                        cancelButton: 'swal-button swal-button--cancel'
                                    },
                                    animation: false
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        Swal.fire({
                                            title: 'Sukses',
                                            text: 'Berhasil dihapus!',
                                            icon: 'success',
                                            timer: 2000,
                                            showConfirmButton: false,
                                            background: '#f5f5f5',
                                            customClass: {
                                                icon: 'swal-icon',
                                                popup: 'swal-popup',
                                                title: 'swal-title',
                                                confirmButton: 'swal-button swal-button--confirm'
                                            },
                                            animation: false
                                        });
                                        setTimeout(() => {
                                            event.target.closest('form').submit();
                                        }, 2000);
                                    }
                                });
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
        @forelse ($barangs as $barang)
            {{-- barang --}}
            <div id="staticModal{{ $barang->id }}" tabindex="-1" aria-hidden="true"
                class="kamu-tak-diajak fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Detail Barang {{ $barang->nama }}
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="staticModal{{ $barang->id }}">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form action="{{ route('barang.update', $barang->id) }}" method="post"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="p-6 space-y-6">
                                <div>
                                    <p class="text-base leading-relaxed font-bold  text-gray-800 dark:text-gray-400">
                                        Nama
                                    </p>

                                    <input type="text" name="nama" value="{{ $barang->nama }}"
                                        class="border border-gray-400 rounded px-2 w-full py-1">

                                </div>
                                <div>
                                    <p class="text-base leading-relaxed font-bold text-gray-800 dark:text-gray-400">
                                        Tanggal
                                    </p>
                                    <img src="{{ asset('storage/pendataanbarang/' . $barang->foto) }}" class="w-20"
                                        alt="" srcset="">

                                    <input type="file" name="foto" value="{{ $barang->foto }}"
                                        class="mt-2">
                                </div>
                                <div>
                                    <p class="text-base leading-relaxed font-bold text-gray-800 dark:text-gray-400">
                                        Kode barang
                                    </p>
                                    <input type="number" name="kode" value="{{ $barang->kode }}"
                                        class="border border-gray-400 w-full py-1 rounded px-2" id="">
                                </div>
                                <div>
                                    <p class="text-base leading-relaxed font-bold text-gray-800 dark:text-gray-400">
                                        Harga
                                    </p>
                                    <input type="text" name="harga"
                                        class="border border-gray-400 w-full py-1 px-2 rounded"
                                        value="{{ $barang->harga }}" id="">
                                </div>
                                <div>
                                    <p class="text-base leading-relaxed font-bold text-gray-800 dark:text-gray-400">
                                        Kategori
                                    </p>
                                    <select name="kategori" id=""
                                        class="border border-gray-400 w-full py-1 px-2 rounded">
                                        <option value="" disabled selected>Pilih barang</option>
                                        <option value="Makanan"
                                            {{ old('kategori', $barang->kategori) == 'Makanan' ? 'selected' : '' }}>
                                            Makanan</option>
                                        <option value="Minuman"
                                            {{ old('kategori', $barang->kategori) == 'Minuman' ? 'selected' : '' }}>
                                            Minuman</option>
                                    </select>
                                </div>
                                <div>
                                    <p class="text-base leading-relaxed font-bold text-gray-800 dark:text-gray-400">
                                        Deskripsi
                                    </p>
                                    <textarea name="deskripsi" id="" class="border border-gray-400 w-full py-1 px-2 rounded">{{ $barang->deskripsi }}</textarea>
                                </div>
                                <div class="flex justify-end">
                                    <button type="submit"
                                        class="border border-blue-500 px-5 text-base font-medium py-1 hover:bg-blue-500 hover:text-white  rounded">Edit</button>
                                </div>
                            </div>
                        </form>
                        <!-- barang footer -->

                        <input autofocus type="text" id="email" name="kode"
                            class="block w-full py-2.5 px-3 mt-1 text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 appearance-none focus:outline-none focus:border-blue-600"
                            placeholder="Scan code barang" required>
                    </div>
                    <div class="flex justify-between">
                        <button type="button"
                            class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            onclick="prevStep()">Previous</button>
                        <button type="submit"
                            class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </div>
                </div>
            </div>
            </form>
    </div>
    </div>
    </div>
@empty
    @endforelse

    <!-- Modal Wizard Step 1 -->
    <div id="modal-step1" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div class="fixed inset-0 bg-black bg-opacity-50 backdrop-filter backdrop-blur"></div>
        <div class="modal bg-white dark:bg-gray-800 rounded-lg p-8 w-[max-content] md:w-2/3 lg:w-1/2 relative">
            <h2 class="text-lg font-semibold mb-4">Pendataan barang</h2>
            <form action="{{ route('barang.store') }}" method="post" onsubmit="return validateStep1()"
                enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" id="name" name="nama"
                        class="block w-full py-2.5 px-3 mt-1 text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 appearance-none focus:outline-none focus:border-blue-600"
                        placeholder="Masukkan Nama Barang" required>
                </div>
                <div class="mb-6">
                    <label for="name2" class="block text-sm font-medium text-gray-700">Foto</label>
                    <input type="file" id="name2" name="foto"
                        class="block w-full py-2.5 px-3 mt-1 text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 appearance-none focus:outline-none focus:border-blue-600"
                        placeholder="Masukkan Nama 2" required>
                </div>
                <div class="mb-6">
                    <label for="name3" class="block text-sm font-medium text-gray-700">Harga</label>
                    <input type="number" id="name3" name="harga"
                        class="block w-full py-2.5 px-3 mt-1 text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 appearance-none focus:outline-none focus:border-blue-600"
                        placeholder="Masukkan Harga Barang" required min="1">
                    <div id="error_harga" class="text-sm text-red-600"></div>
                </div>
                <div class="mb-6">
                    <label for="name4" class="block text-sm font-medium text-gray-700">Kategori</label>
                    <select name="kategori" id="kategori"
                        class="block w-full py-2.5 px-3 mt-1 text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 appearance-none focus:outline-none focus:border-blue-600"
                        placeholder="Masukkan Nama 3" required>
                        <option value="" disabled selected>Pilih kategori</option>
                        <option value="Makanan">Makanan</option>
                        <option value="Minuman">Minuman</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label for="name5" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                    <input type="text" id="name5" name="deskripsi"
                        class="block w-full py-2.5 px-3 mt-1 text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 appearance-none focus:outline-none focus:border-blue-600"
                        placeholder="Masukkan Deskripsi" required>
                </div>
                <div class="flex justify-end">
                    <button type="button"
                        class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        onclick="nextStep()">Next</button>
                </div>

        </div>
    </div>

    <!-- Modal Wizard Step 2 -->
    <div id="modal-step2" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div class="fixed inset-0 bg-black bg-opacity-50 backdrop-filter backdrop-blur"></div>
        <div class="modal bg-white dark:bg-gray-800 rounded-lg p-8 w-96 relative">
            <center>

                <h2 class="text-lg font-semibold mb-4">Scan code barang anda</h2>
            </center>
            <div class="mb-6">

                <input type="text" id="kodebarang" name="kode"
                    class="block w-full py-2.5 px-3 mt-1 text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 appearance-none focus:outline-none focus:border-blue-600"
                    autofocus placeholder="Scan code barang" required>
            </div>
            <div class="flex justify-between">
                <button type="button"
                    class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    onclick="prevStep()">Previous</button>
                <button type="submit"
                    class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </div>
    </div>
    </form>

    <script>
        let currentStep = 1;

        function showStep(step) {
            hideAllSteps();
            if (step === 1) {
                document.getElementById('modal-step1').classList.remove('hidden');
            } else if (step === 2) {
                document.getElementById('modal-step2').classList.remove('hidden');
            }
            currentStep = step;
        }

        function nextStep() {
            if (currentStep === 1) {
                const isValid = validateStep1();
                if (isValid) {
                    document.getElementById('modal-step1').classList.add('hidden');
                    document.getElementById('modal-step2').classList.remove('hidden');
                    document.getElementById('kodebarang').focus();
                    currentStep = 2;
                }
            }
        }

        function prevStep() {
            if (currentStep === 2) {
                document.getElementById('modal-step2').classList.add('hidden');
                document.getElementById('modal-step1').classList.remove('hidden');
                currentStep = 1;
            }
        }

        function hideAllSteps() {
            document.getElementById('modal-step1').classList.add('hidden');
            document.getElementById('modal-step2').classList.add('hidden');
        }

        function validateStep1() {
            const nama = document.getElementById('name').value;
            const foto = document.getElementById('name2').value;
            const harga = document.getElementById('name3').value;
            const kategori = document.getElementById('kategori').value;
            const deskripsi = document.getElementById('name5').value;

            if (nama.trim() === '' || foto.trim() === '' || harga.trim() === '' || kategori.trim() === '' || deskripsi
                .trim() === '') {
                alert('Mohon lengkapi semua field pada langkah 1');
                return false;
            } else if (harga.trim() < '0') {
                document.getElementById('error_harga').innerHTML = "Masukan harga yang valid";
                // alert('Mohon isi harga yang valid');
                return false;
            }

            return true;
        }
    </script>


    </div>
    </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
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
        $(window).on('load', function() {
            $('.spin_load').fadeOut();
        });
    </script>
</body>

</html>
