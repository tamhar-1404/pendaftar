<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Approval Pendaftaran</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="load/load.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

{{--  isi  --}}
<br>
<center>

    <h4 class="font-bold">Pendataan barang</h4>
</center>
&nbsp;
&nbsp;&nbsp;
<!-- Button to Trigger Wizard -->
<button type="button" class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="showStep(1)">Tambah data</button>

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
                            <th scope="col" class="px-6 py-2">Aksi</th>
                        </tr>
                    </thead>
                    @php
                    $no = 1;
                @endphp
                    <tbody>
                        @forelse ($barang as $barang)

                        <tr>
                            <td  class="whitespace-nowrap px-6 py-2">
                                {{ $no++ }}
                            </td>
                            <td  class="whitespace-nowrap px-6 py-2">
                                {{ $barang->nama }}
                            </td>
                            <td  class="whitespace-nowrap px-6 py-2">
                               <img src="{{ asset('storage/pendataanbarang/' . $barang->foto) }}" class="w-10" alt="" srcset="">
                            </td>
                            <td  class="whitespace-nowrap px-6 py-2">
                                {{ $barang->kode }}
                            </td>
                            <td  class="whitespace-nowrap px-6 py-2">
                                {{ $barang->harga }}
                            </td>
                            <td  class="whitespace-nowrap px-6 py-2">
                                    {{ $barang->kategori }}
                            </td>
                            <td  class="whitespace-nowrap px-6 py-2">
                                {{ $barang->deskripsi }}
                            </td>
                            <td  class="whitespace-nowrap px-6 py-2" >
                                <form action="{{ route('barang.destroy' , $barang->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                        <a href="{{ route('barang.edit' , $barang->id) }}" class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i class="fa fa-pencil-square-o"></i></a>
                                        <button type="submit" class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"> <i class="animate-spin fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty

                        @endforelse
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal Wizard Step 1 -->
<div id="modal-step1" class="fixed inset-0 flex items-center justify-center z-50 hidden">
  <div class="fixed inset-0 bg-black bg-opacity-50 backdrop-filter backdrop-blur"></div>
  <div class="modal bg-white dark:bg-gray-800 rounded-lg p-8 w-[max-content] md:w-2/3 lg:w-1/2 relative">
    <h2 class="text-lg font-semibold mb-4">Pendataan barang</h2>
    <form action="{{ route('barang.store') }}" method="post" onsubmit="return validateStep1()" enctype="multipart/form-data">
      @csrf
      <div class="mb-6">
        <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
        <input type="text" id="name" name="nama" class="block w-full py-2.5 px-3 mt-1 text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 appearance-none focus:outline-none focus:border-blue-600" placeholder="Masukkan Nama Barang" required>
      </div>
      <div class="mb-6">
        <label for="name2" class="block text-sm font-medium text-gray-700">Foto</label>
        <input type="file" id="name2" name="foto" class="block w-full py-2.5 px-3 mt-1 text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 appearance-none focus:outline-none focus:border-blue-600" placeholder="Masukkan Nama 2" required>
      </div>
      <div class="mb-6">
        <label for="name3" class="block text-sm font-medium text-gray-700">Harga</label>
        <input type="text" id="name3" name="harga" class="block w-full py-2.5 px-3 mt-1 text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 appearance-none focus:outline-none focus:border-blue-600" placeholder="Masukkan Harga Barang" required>
      </div>
      <div class="mb-6">
        <label for="name4" class="block text-sm font-medium text-gray-700">Kategori</label>
        <select name="kategori" id="kategori" class="block w-full py-2.5 px-3 mt-1 text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 appearance-none focus:outline-none focus:border-blue-600" placeholder="Masukkan Nama 3" required>
          <option value="" disabled selected>Pilih kategori</option>
          <option value="Makanan">Makanan</option>
          <option value="Minuman">Minuman</option>
        </select>
      </div>
      <div class="mb-6">
        <label for="name5" class="block text-sm font-medium text-gray-700">Deskripsi</label>
        <input type="text" id="name5" name="deskripsi" class="block w-full py-2.5 px-3 mt-1 text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 appearance-none focus:outline-none focus:border-blue-600" placeholder="Masukkan Deskripsi" required>
      </div>
      <div class="flex justify-end">
        <button type="button" class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="nextStep()">Next</button>
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

      <input type="text" id="email" name="kode" class="block w-full py-2.5 px-3 mt-1 text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 appearance-none focus:outline-none focus:border-blue-600" placeholder="Scan code barang" required>
    </div>
    <div class="flex justify-between">
        <button type="button" class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="prevStep()">Previous</button>
        <button type="submit" class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
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

    if (nama.trim() === '' || foto.trim() === '' || harga.trim() === '' || kategori.trim() === '' || deskripsi.trim() === '') {
        alert('Mohon lengkapi semua field pada langkah 1');
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
