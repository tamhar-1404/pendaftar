<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Approval Izin</title>
    @vite('resources/css/app.css')
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
                                    <form action="{{ route('TopUp.update', $topup->id) }}" method="post">
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
                                                    <<<<<<< HEAD <form
                                                        action="{{ route('aproval.update', $topup->id) }}"
                                                        method="post" id="confirm-form-{{ $topup->id }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="hidden" name="saldo" placeholder="Saldo"
                                                            value="{{ old('saldo', $topup->saldo) }}" required>
                                                        <button type="submit" onclick="confirmSetuju(event)"
                                                            class="border border-blue-400 px-4 py-1 rounded hover:bg-blue-500 hover:text-white">
                                                            <i class="fa fa-check-square-o"
                                                                style="color:rgb(0, 204, 255);"></i>
                                                            =======
                                                            <form id="confirmation-form-{{ $topup->id }}"
                                                                action="{{ route('aproval.update', $topup->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('PUT')
                                                                <input type="hidden" name="saldo" placeholder="Saldo"
                                                                    value="{{ old('saldo', $topup->saldo) }}" required>
                                                                <button type="submit"
                                                                    id="submit-btn-{{ $topup->id }}"
                                                                    class="border border-blue-400 px-4 py-1 rounded hover:bg-blue-500 hover:text-white"
                                                                    onclick="tambah(event, {{ $topup->id }})">
                                                                    <i class="fa fa-check-square-o"
                                                                        style="color:rgb(0, 204, 255);"></i>
                                                                    >>>>>>> 235c594be4a5634671aeb3d6df670455c060c48a
                                                                </button>
                                                            </form>
                                                            <form action="{{ route('aproval.update', $topup->id) }}"
                                                                method="post" id="confirm-form-{{ $topup->id }}">
                                                                @csrf
                                                                @method('PUT')
                                                                <input type="hidden" name="status" value="Ditolak">
                                                                <div style="display: inline-block;">
                                                                    <button type="submit"
                                                                        onclick="confirmDelete(event)"
                                                                        class="border border-red-400 px-4 py-1 rounded hover:bg-red-500 hover:text-white">
                                                                        <i class="fa fa-close"></i>
                                                                    </button>
                                                                </div>
                                                            </form>
                                                </div>
                                            </td>

                                        </tr>
                                    @empty
                                @endforelse
                            </tbody>

                        </table>
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                        <script>
                            function tambah(event, id) {
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
                                        Swal.fire({
                                            title: 'Sukses',
                                            text: 'Berhasil diterima!',
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
                                            document.getElementById('confirm-form').submit();
                                        }, 2000);
                                    }
                                });
                                x

                            }
                        </script>
                        <script>
                            function confirmSetuju(event) {
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
                                        Swal.fire({
                                            title: 'Sukses',
                                            text: 'Berhasil diterima!',
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
                                            document.getElementById('confirm-form').submit();
                                        }, 2000);
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
