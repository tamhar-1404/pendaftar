<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=chrome">
    <title>Admin - Laporan Siswa</title>
    <link href="/admin/assets/images/Logo.png" rel="shortcut icon">
    <link rel="stylesheet" href="load/load.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"></script>
</head>

<body>
    @if (auth()->user()->role == 'Admin')
        <div
            class="spin_load  screen_loader animate__animated fixed inset-0 z-[999] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
            <div class="center">
                <div class="ring">
                </div>
                <img src="load/logo.png" alt="Deskripsi gambar" class="my-img">
            </div>
        </div>
        <!-- screen loader -->
        {{-- <div
        class="spin_load  screen_loader animate__animated fixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
        <div class="center">
            <div class="ring">
            </div>
            <img src="load/logo.png" alt="Deskripsi gambar" class="my-img">
        </div>
        <img src="load/logo.png" alt="Deskripsi gambar" class="my-img">
    </div> --}}

        @include('jurnal_admin.layout')

        <div class=" pl-[0px] " id="content">


            <!-- Navbar -->
            <nav id="main-navbar"
                class="kamu-tak-diajak sticky relative left-0  right-0 top-0 flex z-[20]  flex-nowrap items-center justify-between bg-white py-[0.6rem] text-gray-500 shadow-lg hover:text-gray-700 focus:text-gray-700 dark:bg-zinc-700 lg:flex-wrap lg:justify-start fixed"
                data-te-navbar-ref>
                <!-- Container wrapper -->

                <div class="flex w-full flex-wrap items-center justify-between px-4 ">
                    <div class="flex gap-4">
                        <!-- Toggler -->
                        <div class="flex items-center justify-between ltr:mr-2 rtl:ml-2 ">
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
                        <!-- Toggler -->

                        <!-- Search form -->


                    </div>

                    @error('bukti')
                        <script>
                            toastr.error("ekstensi anda salah")
                        </script>
                    @enderror

                    @error('success')
                        <script>
                            toastr.success("{{ session('success') }}")
                        </script>
                    @enderror

                    <!-- Right links -->
                    <ul class="relative flex items-center">
                        <!-- Notification dropdown -->


                        <!-- Avatar -->
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
                <!-- Container wrapper -->
            </nav>

            {{-- include --}}
            @include('laporansiswa.layout')
        </div>



        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        {{-- <script>
        $(window).on('load', function() {
            $('.spin_load').fadeOut();
        });
    </script> --}}
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
    @endif
</body>

</html>
