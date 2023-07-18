<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
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

    <h4 class="font-bold">Opname</h4>
</center>
&nbsp;
&nbsp;&nbsp;
<!-- Button to Trigger Wizard -->
<center>

    <input type="text" id="kodeopname" name="nama" onchange="showStep(1)" class="block w-1/2 py-2.5 px-3 mt-1 text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 appearance-none focus:outline-none focus:border-blue-600" placeholder="Kode barang" autofocus id="kodebarang">

</center>
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
                            <th scope="col" class="px-6 py-2">Tanggal</th>
                            <th scope="col" class="px-6 py-2">Stok</th>
                            <th scope="col" class="px-6 py-2">Aksi</th>
                        </tr>
                    </thead>
                    @php
                    $no = 1;
                @endphp
                    <tbody>
                        @forelse ($opname as $oname)

                        <tr>
                            <td  class="whitespace-nowrap px-6 py-2">
                                {{ $no++ }}
                            </td>
                            <td  class="whitespace-nowrap px-6 py-2">
                                {{ $oname->barang->nama }}
                            </td>
                            <td  class="whitespace-nowrap px-6 py-2">
                               <img src="{{ asset('storage/pendataanbarang/' . $oname->barang->foto) }}" class="w-10" alt="" srcset="">
                            </td>
                            <td  class="whitespace-nowrap px-6 py-2">
                                {{ $oname->barang->kode }}
                            </td>
                            <td  class="whitespace-nowrap px-6 py-2">
                                {{ $oname->barang->harga }}
                            </td>
                            <td  class="whitespace-nowrap px-6 py-2">
                                    {{ $oname->barang->kategori }}
                            </td>
                            <td  class="whitespace-nowrap px-6 py-2">
                                {{ $oname->tanggal }}
                            </td>
                            <td  class="whitespace-nowrap px-6 py-2">
                                {{ $oname->stok }}
                            </td>
                            <td  class="whitespace-nowrap px-6 py-2" >
                                <form action="{{ route('opname.destroy' , $oname->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                        <a href="#" class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="showModalEdit({{ $oname->id }})"><i class="fa fa-pencil-square-o"></i></a>
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
<!-- Modal -->
@forelse ($barang as $brg)
<div id="{{ $brg->kode }}" class="fixed inset-0 flex items-center justify-center z-50 hidden">
  <div class="fixed inset-0 bg-black bg-opacity-50 backdrop-filter backdrop-blur"></div>
  <div class="modal bg-white dark:bg-gray-800 rounded-lg p-8 w-[max-content] md:w-2/3 lg:w-1/2 relative">
    <h2 class="text-lg font-semibold mb-4">Opname barang</h2>
  <form action="{{ route('opname.store') }}" method="POST">
        @method('POST')
        @csrf
        <input type="hidden" name="kode_barang" value="{{ $brg->kode }}">
        <input type="hidden" name="barang_id" value="{{ $brg->id }}">
        <div class="grid grid-cols-4 gap-4">
            <div class="mb-6">
                <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                <h2 id="name" class="font-semibold">{{ $brg->nama }}</h2>
            </div>
            <div class="mb-6">
                <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                <h2 id="kategori" class="font-semibold">{{ $brg->kategori }}</h2>
            </div>
            <div class="mb-6">
                <label for="stok" class="block text-sm font-medium text-gray-700">Stok</label>
                <input type="text" id="stok" name="stok" class="block w-full text-sm bg-transparent border-b-2 border-gray-300 appearance-none focus:outline-none focus:border-blue-600" placeholder="Stok barang" required autofocus>
            </div>
            <div class="">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
            </div>
        </div>
    </form>
  </div>
</div>
@empty

@endforelse
@forelse ($opname as $brg)
<div id="edit{{ $brg->id }}" class="fixed inset-0 flex items-center justify-center z-50 hidden">
  <div class="fixed inset-0 bg-black bg-opacity-50 backdrop-filter backdrop-blur"></div>
  <div class="modal bg-white dark:bg-gray-800 rounded-lg p-8 w-[max-content] md:w-2/3 lg:w-1/2 relative">
    <h2 class="text-lg font-semibold mb-4">Edit opname barang</h2>
  <form action="{{ route('opname.update', $brg->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="grid grid-cols-4 gap-4">
            <div class="mb-6">
                <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                <h2 id="name" class="font-semibold">{{ $brg->barang->nama }}</h2>
            </div>
            <div class="mb-6">
                <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                <h2 id="kategori" class="font-semibold">{{ $brg->barang->kategori }}</h2>
            </div>
            <div class="mb-6">
                <label for="stok" class="block text-sm font-medium text-gray-700">Stok</label>
                <input type="text" id="stok" name="stok" class="block w-full text-sm bg-transparent border-b-2 border-gray-300 appearance-none focus:outline-none focus:border-blue-600" placeholder="Stok barang" required autofocus value="{{ $brg->stok }}">
            </div>
            <div class="">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
            </div>
        </div>
    </form>
  </div>
</div>
@empty

@endforelse

    <script>
        let currentStep = 1;

    function showModalEdit(id) {
        let id_opname = document.getElementById('edit' + id);
        if (id_opname) {
            id_opname.classList.remove('hidden');
        }
    }

    function showStep(idmodal) {
        let kodeopname = document.getElementById('kodeopname').value;
        let modal=document.getElementById(`${kodeopname}`);
        if (modal) {
            modal.classList.remove('hidden');
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
    <script>
        var input = document.getElementById("kodebarang");
        input.addEventListener("keypress", function(event) {
            if (event.key === "Enter") {
                // console.log(input.value);
                alert(input.value);
                showStep(1);
            }
        });
    </script>
</body>

</html>
