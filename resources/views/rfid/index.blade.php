<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - RFID</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/admin/assets/images/Logo.png" rel="shortcut icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
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
</head>

<body>
    @if (session()->has('error'))
        <script>
            toastr.error("{{ session('error') }}")
        </script>
    @endif
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                toastr.error("{{ $error }}");
            </script>
        @endforeach
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

    <style>
        /* CSS untuk tampilan modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: auto;
            backdrop-filter: blur(2px);
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 500px;
            width: 100%;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 2rem;
        }
    </style>
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


        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
            <div class="main-content">
                {{-- @include('aproval.layout') --}}
                <div class="animate__animated p-6" :class="[$store.app.animation]">
                    <!-- start main content section -->

                    <div x-data="basic" class="">
                        {{-- judul --}}
                        <div class="mb-5 font-semibold text-base">
                            <span>Siswa / <span class="text-[#00B7FF]">RFID</span></span>
                        </div>
                        <div class="panel">
                            {{-- serch dan filter --}}
                            <div class="flex justify-end">
                                {{-- serch --}}
                                <div class="mr-3">
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
                                {{-- filter --}}
                                <ul class="relative flex items-center">
                                    <!-- Notification dropdown -->
                                    <div class="relative">
                                        <a class="mr-4 flex items-center text-gray-500 hover:text-gray-700 focus:text-gray-700"
                                            href="#" id="navbarDropdownMenuLink" role="button"
                                            onclick="openModal()">
                                            <span class="dark:black-gray-200 [&>svg]:w-3.5">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                    viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M3 5.109C3 4.496 3.47 4 4.05 4h16.79c.58 0 1.049.496 1.049 1.109 0 .612-.47 1.108-1.05 1.108H4.05C3.47 6.217 3 5.721 3 5.11zM5.798 12.5c0-.612.47-1.109 1.05-1.109H18.04c.58 0 1.05.497 1.05 1.109s-.47 1.109-1.05 1.109H6.848c-.58 0-1.05-.497-1.05-1.109zM9.646 18.783c-.58 0-1.05.496-1.05 1.108 0 .613.47 1.109 1.05 1.109h5.597c.58 0 1.05-.496 1.05-1.109 0-.612-.47-1.108-1.05-1.108H9.646z" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>

                                    <!-- Modal -->
                                    <div id="modal"
                                        class="fixed right-48 mt-32 flex items-center justify-center z-[100]  hidden">
                                        <div class="absolute w-96 bg-white rounded-lg p-6 shadow-lg">
                                            <div class="modal-header mb-4">
                                                <div class="flex items-center justify-between mb-4">
                                                    <h5 class="text-xl font-bold">Filter Approval Siswa</h5>
                                                    <button onclick="closeModal()"
                                                        class="text-gray-500 ml-auto focus:outline-none">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="modal-footer mt-4 flex justify-end gap-2">
                                                <button
                                                    class="bg-white py-1 px-3 rounded-lg border border-gray-200 text-gray-300">Atur
                                                    Ulang</button>
                                                <button
                                                    class="bg-blue-400 py-1 px-3 rounded-lg border border-gray-200 text-white">Pakai</button>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        function openModal() {
                                            document.getElementById("modal").classList.remove("hidden");
                                        }

                                        function closeModal() {
                                            document.getElementById("modal").classList.add("hidden");
                                        }

                                        function changeColor(checkbox) {
                                            var label = document.getElementById("checkboxLabel");
                                            if (checkbox.checked) {
                                                label.classList.add("bg-gray-900 text-white");
                                                label.classList.remove("bg-white");
                                            } else {
                                                label.classList.add("bg-white");
                                                label.classList.remove("bg-blue-500");
                                            }
                                        }
                                    </script>
                                </ul>
                            </div>
                            {{-- tabel --}}
                            <div class="flex flex-col">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                        <div class="overflow-hidden">
                                            <table class="min-w-full text-left text-sm ">
                                                <thead class="border-rounded bg-[#E2E8F0] dark:border-neutral-500">
                                                    <tr>
                                                        <th scope="col" class="px-6 py-2">#</th>
                                                        <th scope="col" class="px-6 py-2">Nama</th>
                                                        <th scope="col" class="px-6 py-2">Email</th>
                                                        <th scope="col" class="px-6 py-2">Sekolah</th>
                                                        <th scope="col" class="px-6 py-2">Aksi</th>
                                                    </tr>
                                                </thead>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @forelse ($users as $user)
                                                    <tbody>
                                                        <tr>
                                                            <td class="whitespace-nowrap px-6 py-2">
                                                                {{ $no++ }}
                                                            </td>
                                                            <td class="whitespace-nowrap px-6 py-2">
                                                                {{ $user->name }}
                                                            </td>
                                                            <td class="whitespace-nowrap px-6 py-2">
                                                                {{ $user->email }}
                                                            </td>
                                                            <td class="whitespace-nowrap px-6 py-2">
                                                                {{ $user->sekolah }}
                                                            </td>
                                                            <td class="whitespace-nowrap px-6 py-2">
                                                                <button type="button"
                                                                    id="tambah-rfid{{ $user->id }}"
                                                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                                                    onclick="tambahRFID(){{ $user->id }}">
                                                                    TAMBAH RFID
                                                                </button>
                                                                <form
                                                                    action="{{ route('siswa_admin.update', $user->id) }}"
                                                                    method="post">
                                                                    @method('PUT')
                                                                    @csrf
                                                                    <div id="modal-tambah-rfid{{ $user->id }}"
                                                                        class="modal fixed inset-0 flex items-center justify-center">
                                                                        <div class="modal-content bg-white p-6">
                                                                            <h2 class="text-2xl font-bold mb-4">Tambah
                                                                                RFID {{ $user->name }}</h2>
                                                                            <input id="inputrfid{{ $user->id }}"
                                                                                type="text" name="RFID"
                                                                                class="border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full">
                                                                            <div class="mt-6 flex justify-end">
                                                                                <!-- Your additional content here if needed -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                <!-- Import script JavaScript -->
                                                                <script>
                                                                    document.addEventListener("DOMContentLoaded", function() {
                                                                        // Mengaktifkan modal saat tombol diklik
                                                                        document.getElementById('tambah-rfid{{ $user->id }}').addEventListener('click', function() {
                                                                            document.getElementById('modal-tambah-rfid{{ $user->id }}').style.display = "flex";
                                                                            document.getElementById('inputrfid{{ $user->id }}').focus();
                                                                        });

                                                                        // Menutup modal saat tombol Batal diklik atau saat mengklik area luar modal
                                                                        document.getElementById('modal-tambah-rfid{{ $user->id }}').addEventListener('click', function(
                                                                            event) {
                                                                            if (event.target === this || event.target.classList.contains('bg-red-500')) {
                                                                                this.style.display = "none";
                                                                            }
                                                                        });
                                                                    });
                                                                </script>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                @empty
                                                    <tr>
                                                        <td>
                                                            <div class="flex justify-center items-center">
                                                                <img src="/admin/noData.png" alt=""
                                                                    class="m-auto" width="280">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforelse
                                            </table>
                                            {{ $users->appends(['cari' => request('cari')])->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



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
