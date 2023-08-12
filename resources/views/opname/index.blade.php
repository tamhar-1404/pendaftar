<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
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
    <link href="/admin/assets/images/Logo.png" rel="shortcut icon">
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
                text: "{{ session('success') }}",
            });
        </script>
    @endif
    @if (session()->has('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: "{{ session('error') }}",
            })
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


        {{--  isi  --}}
        <br>
        <center>

            <h4 class="font-bold">Opname</h4>
        </center>
        &nbsp;
        &nbsp;&nbsp;
        <!-- Button to Trigger Wizard -->
        <center>

            <input type="text" id="kodeopname" name="nama" onchange="showStep(1)"
                class="block w-1/2 py-2.5 px-3 mt-1 text-sm text-gray-900 bg-transparent border-b-2 border-gray-300 appearance-none focus:outline-none focus:border-blue-600"
                placeholder="Kode barang" autofocus id="kodebarang">


        </center>
        <br>
        <form action="">
            <label class="relative hidden sm:flex me-2">
                <input id="search"
                    class="form-input peer h-9 ml-auto rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 text-xs+ placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Search barang..." type="text" name="cari" value="{{ request('cari') }}" />
            </label>
        </form>
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
                                        <td class="whitespace-nowrap px-6 py-2">
                                            {{ $no++ }}
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-2">
                                            {{ $oname->barang->nama }}
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-2">
                                            <img src="{{ asset('storage/pendataanbarang/' . $oname->barang->foto) }}"
                                                class="w-10" alt="" srcset="">
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-2">
                                            {{ $oname->barang->kode }}
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-2">
                                            Rp. {{ number_format($oname->barang->harga, 0, ',', '.') }}
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-2">
                                            {{ $oname->barang->kategori }}
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-2">
                                            {{ $oname->tanggal }}
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-2">
                                            {{ $oname->stok }}
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-2 flex">
                                            <a href="#"
                                                class="text-white mr-3 bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                onclick="showModalEdit({{ $oname->id }})"><i
                                                    class="fa fa-pencil-square-o"></i></a>
                                            <form action="{{ route('opname.destroy', $oname->id) }}" method="post"
                                                id="confirm-form-{{ $oname->id }}">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit"
                                                    class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                                                    onclick="confirmDelete(event)">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="p-8 text-center">
                                            <div class="flex justify-center items-center">
                                                <img src="/admin/noData.png" alt="" width="280px">
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $opname->appends(['cari' => request('cari')])->links() }}
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
                                        event.target.closest('form').submit();
                                    }
                                });
                            }
                        </script>
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
                                <input type="number" id="stok" name="stok"
                                    class="block w-full text-sm bg-transparent border-b-2 border-gray-300 appearance-none focus:outline-none focus:border-blue-600"
                                    placeholder="Stok barang" required autofocus min="1"
                                    oninvalid="this.setCustomValidity('Stok minimal 1')"
                                    oninput="setCustomValidity('')">
                            </div>
                            <div class="">
                                <button type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
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
                                <input type="number" id="stok" name="stok"
                                    class="block w-full text-sm bg-transparent border-b-2 border-gray-300 appearance-none focus:outline-none focus:border-blue-600"
                                    placeholder="Stok barang" required autofocus value="{{ $brg->stok }}"
                                    min="1" oninvalid="this.setCustomValidity('Stok minimal 1')"
                                    oninput="setCustomValidity('')">
                            </div>
                            <div class="">
                                <button type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
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
                let modal = document.getElementById(`${kodeopname}`);
                if (modal) {
                    modal.classList.remove('hidden');
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Kode barang tidak ditemukan!',
                    })
                    document.getElementById('kodeopname').value = "";
                    document.getElementById('kodeopname').focus();
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

                    if (nama.trim() === '' || foto.trim() === '' || harga.trim() === '' || kategori.trim() === '' || deskripsi
                        .trim() === '') {
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
