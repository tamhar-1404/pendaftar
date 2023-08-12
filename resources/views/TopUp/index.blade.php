<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Approval Topup</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    @if (session()->has('success'))
        <script>
            Swal.fire(
                'Berhasil',
                "{{ session('success') }}",
                'success'
            )
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
        <h3 class="text-center mt-7 mb-2">Approval TopUp</h3>
        <hr>
        <div class="flex flex-col px-4 mt-2">
            <label class="relative hidden sm:flex items-center justify-end">
                <form action="">
                    <label class="relative hidden sm:flex">
                        <input
                            class="form-input peer h-9 w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 text-xs+ placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="Search users..." type="text" name="cari" value="{{ request('cari') }}" />
                    </label>
                </form>
            </label>
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-left text-sm ">
                            <thead class="border-rounded bg-[#E2E8F0] dark:border-neutral-500">
                                <tr>
                                    <th scope="col" class="px-6 py-2">#</th>
                                    <th scope="col" class="px-6 py-2">Nama</th>
                                    <th scope="col" class="px-6 py-2">Email</th>
                                    <th scope="col" class="px-6 py-2">Rfid</th>
                                    <th scope="col" class="px-6 py-2">Sekolah</th>
                                    <th scope="col" class="px-6 py-2">Saldo</th>
                                    <th scope="col" class="px-6 py-2">Tanggal</th>
                                    <th scope="col" class="px-6 py-2">Aksi</th>
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            <tbody>
                                @forelse ($TopUp as $topup)
                                    <form action="{{ route('TopUp.update', $topup->id) }}" method="post"
                                        id="submit-btn-terima-{{ $topup->id }}"
                                        onsubmit="tambah(event, {{ $topup->id }})">
                                        @method('PUT')
                                        @csrf

                                        <tr>
                                            <td class="whitespace-nowrap px-6 py-2">
                                                {{ $no++ }}
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-2">
                                                {{ $topup->user->name }}
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-2">
                                                {{ $topup->user->email }}
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-2">
                                                {{ $topup->user->RFID }}
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-2">
                                                {{ $topup->user->sekolah }}
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-2">
                                                {{ $topup->saldo }}
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-2">
                                                {{ $topup->tanggal }}
                                            </td>
                                            <input type="hidden" value="Terima" name="status" id="">
                                            <td class="whitespace-nowrap px-6 py-2">
                                                <div class="flex justify-between">
                                                    <input type="hidden" name="saldo" placeholder="Saldo"
                                                        value="{{ old('saldo', $topup->saldo) }}" required>
                                                    <button type="submit" id="submit-btn-terima-{{ $topup->id }}"
                                                        class="border border-blue-400 px-4 py-1 rounded hover:bg-blue-500 hover:text-white"
                                                        onclick="">
                                                        <i class="fa fa-check-square-o"
                                                            style="color:rgb(0, 204, 255);"></i>

                                                    </button>
                                    </form>
                                    <form action="{{ route('aproval.update', $topup->id) }}" method="post"
                                        id="confirm-form-{{ $topup->id }}"
                                        onsubmit="confirmDelete(event, {{ $topup->id }})">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="status" value="Ditolak">
                                        <div style="display: inline-block;">
                                            <button type="submit"
                                                class="border border-red-400 px-4 py-1 rounded hover:bg-red-500 hover:text-white">
                                                <i class="fa fa-close"></i>
                                            </button>
                                        </div>
                                    </form>
                    </div>
                    </td>
                    </tr>
                @empty

                    <td colspan="6" class="p-8 text-center">
                        <div class="flex justify-center items-center">
                            <img src="/admin/noData.png" alt="" width="280px">
                        </div>
                    </td>
                    @endforelse
                    </tbody>
                    </table>
                    {{ $TopUp->appends(['cari' => request('cari')])->links() }}
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                    <script>
                        function tambah(event, id) {
                            event.preventDefault();

                            Swal.fire({
                                title: 'Konfirmasi',
                                text: 'Apakah Anda yakin ingin menerima topup ini?',
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
                                    document.getElementById('submit-btn-terima-' + id).submit();
                                }
                            });
                        }
                    </script>
                    <script>
                        function confirmDelete(event, id) {
                            event.preventDefault();

                            Swal.fire({
                                title: 'Konfirmasi',
                                text: 'Apakah Anda yakin ingin menghapus ini?',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Ya, Tolak!',
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
                                    document.getElementById('confirm-form-' + id).submit();
                                }
                            });
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
    {{--  isi  --}}
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

</body>

</html>
