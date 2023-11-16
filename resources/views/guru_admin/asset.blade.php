<!DOCTYPE html>
<html lang="en">

{{--  <!-- Mirrored from lineone.piniastudio.com/pages-card-user-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 May 2023 04:15:35 GMT -->  --}}
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Meta tags  -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <title>Lineone - User Grid v1</title>
    <link href="/admin/assets/images/Logo.png" rel="shortcut icon">
    <!-- CSS Assets -->
    <link rel="stylesheet" href="{{ asset('admin/css/app.css') }}" />
    <!-- Javascript Assets -->
    <script src="{{ asset('admin/js/app.js') }}" defer></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script defer src="{{ asset('admin/assets/js/sweetalert.min.js') }}"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <script>
        /**
         * THIS SCRIPT REQUIRED FOR PREVENT FLICKERING IN SOME BROWSERS
         */
        localStorage.getItem("_x_darkMode_on") === "true" &&
            document.documentElement.classList.add("dark");
    </script>
    <script src="https://cdn.tailwindcss.com%22%3E/"></script>
    <script>
        theme: {
            extend: {
                blur: {
                    xs: '3px',
                }
            },
        },
    </script>
</head>

<body x-data class="is-header-blur" x-bind="$store.global.documentBody">
    <!-- App preloader-->

    <!-- Page Wrapper -->
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak>


        <!-- Main Content Wrapper -->
        <main class="main w-full px-5 pb-8">
            <div class="flex items-center justify-between py-5 lg:py-6">
                <div class="flex items-center space-x-1">
                    <h2 class="text-xl font-medium text-slate-700 line-clamp-1 dark:text-navy-50 lg:text-2xl">
                        Data guru
                    </h2>
                   
                </div>

                <div class="flex items-center space-x-2">
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

                    <div class="flex">
                        <ul class="relative flex items-center">
                            <!-- Notification dropdown -->
                            <li class="relative" data-te-dropdown-ref>
                                <a class="mr-4 flex items-center text-gray-500 hover:text-gray-700 focus:text-gray-700"
                                    href="#" id="navbarDropdownMenuLink" role="button"
                                    data-te-dropdown-toggle-ref aria-expanded="false">
                                    <span class="dark:black-gray-200 [&>svg]:w-3.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M3 5.109C3 4.496 3.47 4 4.05 4h16.79c.58 0 1.049.496 1.049 1.109 0 .612-.47 1.108-1.05 1.108H4.05C3.47 6.217 3 5.721 3 5.11zM5.798 12.5c0-.612.47-1.109 1.05-1.109H18.04c.58 0 1.05.497 1.05 1.109s-.47 1.109-1.05 1.109H6.848c-.58 0-1.05-.497-1.05-1.109zM9.646 18.783c-.58 0-1.05.496-1.05 1.108 0 .613.47 1.109 1.05 1.109h5.597c.58 0 1.05-.496 1.05-1.109 0-.612-.47-1.108-1.05-1.108H9.646z" />
                                        </svg>
                                </a>
                                <ul class="absolute left-auto right-0 z-[1000] mt-3 hidden min-w-[12rem] list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-zinc-700 [&[data-te-dropdown-show]]:block"
                                    aria-labelledby="navbarDropdownMenuLink" data-te-dropdown-menu-ref>
                                    <li class="flex p-2 gap-2 mt-2 pb-2">
                                        <p>Filter</p>
                                    </li>
                                    <li class="flex p-2 gap-2">
                                        <input type="text" class="border border-gray-300 rounded"
                                            placeholder="Alamat">
                                        <input type="text" class="border border-gray-300 rounded"
                                            placeholder="Alamat">
                                    </li>
                                    <li class="flex p-2 gap-2">
                                        <input type="text" class="border border-gray-300 rounded"
                                            placeholder="Alamat">
                                        <input type="text" class="border border-gray-300 rounded"
                                            placeholder="Alamat">
                                    </li>
                                    <li class="flex p-2 gap-2         ">
                                        <input type="text" class="border border-gray-300 rounded"
                                            placeholder="Alamat">
                                        <input type="text" class="border border-gray-300 rounded"
                                            placeholder="Alamat">
                                    </li>
                                </ul>
                            </li>






                            <!-- Avatar -->

                            <ul class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-[10rem] list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-zinc-700 [&[data-te-dropdown-show]]:block"
                                aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
                                <li>
                                    <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                                        href="#" data-te-dropdown-item-ref>My profile</a>
                                </li>
                                <li>
                                    <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                                        href="#" data-te-dropdown-item-ref>Settings</a>
                                </li>
                                <li>
                                    <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                                        href="#" data-te-dropdown-item-ref>Logout</a>
                                </li>
                            </ul>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <button id="addButton"
                class="outline outline-offset-2 outline-1 bg-[#24AEE4] hover:bg-blue-400 text-white text-sm py-2 px-4 rounded">
                Tambah data
            </button>
            <div id="registerModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
                <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                    <div class="fixed inset-0 transition-opacity">
                        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                    </div>
                    <div
                        class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4 w-30">
                            <div class="max-w-7xl mx-auto">
                                <div class="flex flex-col">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                        Form Tambah Guru
                                    </h3>
                                    <form action="{{ route('guru_admin.store') }}" class="mt-4" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="mt-4">
                                            <label for="Nama"
                                                class="block text-gray-700 font-medium mb-2">Foto</label>
                                            <input type="file" name="image"
                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                id="file_input" type="file">
                                        </div>
                                        <div class="mt-4">
                                            <label for="Nama"
                                                class="block text-gray-700 font-medium mb-2">Nama</label>
                                            <input type="text" placeholder="Masukkan nama" id="sekolah"
                                                name="name"
                                                class="block w-full h-9 px-4 rounded-md bg-white border border-gray-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        </div>
                                        <div class="mt-4">
                                            <label for="Nama"
                                                class="block text-gray-700 font-medium mb-2">Sekolah</label>
                                            <input type="text" placeholder="Masukkan nama" id="sekolah"
                                                name="sekolah"
                                                class="block w-full h-9 px-4 rounded-md bg-white border border-gray-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        </div>
                                        <div class="mt-4">
                                            <label for="sekolah"
                                                class="block text-gray-700 font-medium mb-2">Email</label>
                                            <input type="email" placeholder="Masukkan nama sekolah"
                                                id="sekolah" name="email"
                                                class="block w-full h-9 px-4 rounded-md bg-white border border-gray-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        </div>
                                        <div class="mt-4">
                                            <label for="sekolah"
                                                class="block text-gray-700 font-medium mb-2">Alamat</label>
                                            <textarea name="alamat" id="" cols="65" rows="5"
                                                class="border border-1 block w-full px-4 rounded" placeholder="Masukkan alamat anda"></textarea>
                                        </div>
                                        <div class="mt-4">
                                            <label for="tanggal_lahir"
                                                class="block text-gray-700 font-medium mb-2">No telephone</label>
                                            <input type="number" id="tanggal_lahir"
                                                placeholder="Masukkan no telephone anda" name="no"
                                                class="block w-full h-9 px-4 rounded-md bg-white border border-gray-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        </div>
                                        @error('no')
                                            <div class="text-sm text-red-500 font-medium">{{ $message }}</div>
                                            <script>
                                                toastr.error("{{ $message }}");
                                            </script>
                                        @enderror
                                        <div class="mt-4">
                                            <label for="email"
                                                class="block text-gray-700 font-medium mb-2">Password</label>
                                            <input type="password" placeholder="Masukkan password" id="email"
                                                name="password"
                                                class="block w-full h-9 px-4 rounded-md bg-white border border-gray-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        </div>
                                        <div class="flex items-center justify-end mt-4">
                                            <div class="ml-auto">
                                                <button type="button"
                                                    class="bg-transparent border border-gray-300 text-gray-800 hover:bg-gray-300 hover:text-gray-800 font-bold py-2 px-4 rounded">Batal</button>
                                                <button type="submit" class="bg-transparent border border-gray-300 text-gray-800 hover:bg-gray-300 hover:text-gray-800 font-bold py-2 px-4 rounded border border-1">Tambah</button>
                                                <script>
                                                    async function showAlert() {
                                                        new window.Swal({
                                                            title: "Berhasil",
                                                            text: "Data berhasil ditambahkan",
                                                            icon: "success",
                                                            button: "OK",
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
            </div>



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

            <div class="grid grid-cols-1 gap-4 mt-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6 xl:grid-cols-4">
                @forelse ($guru_admin as $guru)
                    <div class="card">
                        <div class="p-2 text-right">
                            <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="isShowPopper && (isShowPopper = false)"
                                class="inline-flex">


                                <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                                    <div
                                        class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                        <ul>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another
                                                    Action</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something
                                                    else</a>
                                            </li>
                                        </ul>
                                        <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                        <ul>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated
                                                    Link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex grow flex-col items-center px-4 pb-5 sm:px-5">
                            <div class="avatar h-20 w-20">
                                <img class="rounded-full" src="{{ asset('storage/guru_image/' . $guru->image) }}"
                                    alt="avatar" />
                            </div>
                            <h3 class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100">
                                {{ $guru->nama }}
                            </h3>
                            <p class="text-xs+">{{ $guru->sekolah }}</p>

                            <div class="mt-6 grid w-full grid-cols-2 gap-2" style="margin-right: -115px;">
                                <button
                                    class="btn space-x-2 bg-[#24AEE4] px-0 font-medium text-white hover:bg-blue-400 focus:bg-blue-400 active:bg-blue-400 dark:bg-accent dark:hover:bg-blue-400 dark:focus:bg-blue-400 dark:active:bg-accent/90">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 shrink-0"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M5 19.111c0-2.413 1.697-4.468 4.004-4.848l.208-.035a17.134 17.134 0 015.576 0l.208.035c2.307.38 4.004 2.435 4.004 4.848C19 20.154 18.181 21 17.172 21H6.828C5.818 21 5 20.154 5 19.111zM16.083 6.938c0 2.174-1.828 3.937-4.083 3.937S7.917 9.112 7.917 6.937C7.917 4.764 9.745 3 12 3s4.083 1.763 4.083 3.938z" />
                                    </svg>
                                    <a href="{{ route('guru_admin.edit', $guru->id) }}">Profile</a>
                                </button>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="flex justify-center items-center col-span-3">
                        <img src="/admin/noData.png" alt="" width="300px">
                    </div>
                @endforelse
            </div>
            {{ $guru_admin->appends(['cari' => request('cari')])->links() }}
        </main>
    </div>
    <!--
        This is a place for Alpine.js Teleport feature
        @see https://alpinejs.dev/directives/teleport
      -->
    <div id="x-teleport-target"></div>
    <script>
        window.addEventListener("DOMContentLoaded", () => Alpine.start());
    </script>
</body>

<!-- Mirrored from lineone.piniastudio.com/pages-card-user-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 May 2023 04:15:45 GMT -->

</html>
