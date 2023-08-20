<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Berita</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com%22%3E/"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        theme: {
            extend: {
                blur: {
                    xs: '3px',
                }
            },
        }
    </script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('load/load.css') }}">
    <link href="/admin/assets/images/Logo.png" rel="shortcut icon">
    <!- - CSS Assets -->
        <link rel="stylesheet" href="{{ asset('admin/css/app.css') }}" />
        <!-- Javascript Assets -->
        <script src="{{ asset('admin/js/app.js') }}" defer></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

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
        <style>
            .like-button {
                border: none;
                cursor: pointer;
            }

            .like-button.liked {
                color: red;
            }
        </style>
</head>

<body>
    @if (session()->has('success'))
        <script>
            Swal.fire(
                'Berhasil!',
                "{{ session('success') }}",
                'success'
            )
        </script>
    @endif
    @if (session()->has('error'))
        <script>
            Swal.fire(
                'Oops..!',
                "{{ session('error') }}",
                'error'
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

        <!-- Main Content Wrapper -->
        <style>
            /* Tambahkan animasi untuk muncul */
            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(-10px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            /* Tambahkan animasi untuk menghilang */
            @keyframes fadeOut {
                from {
                    opacity: 1;
                    transform: translateY(0);
                }

                to {
                    opacity: 0;
                    transform: translateY(-10px);
                }
            }

            /* Atur transisi untuk menu dropdown */
            .dropdown-menu {
                animation-duration: 0.3s;
                animation-timing-function: ease-in-out;
            }

            /* Atur transisi untuk muncul */
            .dropdown-menu.fade-in {
                animation-name: fadeIn;
            }

            /* Atur transisi untuk menghilang */
            .dropdown-menu.fade-out {
                animation-name: fadeOut;
            }
        </style>
        <main class="main w-full px-4 pb-8">
            <div class="flex items-center justify-between py-5 lg:py-6">

                <div class="flex items-center space-x-1">

                    <h2 class="px-4 text-xl font-medium text-slate-700 line-clamp-1 dark:text-navy-50 lg:text-2xl">
                        Berita
                    </h2>


                </div>

                <div class="flex items-center space-x-2">
                    <form action="">
                        <label class="relative hidden sm:flex">
                            <input
                                class="form-input peer h-9 w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 text-xs+ placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                placeholder="Search users..." type="text" name="cari" value="{{ request('cari') }}" />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-colors duration-200"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M3.316 13.781l.73-.171-.73.171zm0-5.457l.73.171-.73-.171zm15.473 0l.73-.171-.73.171zm0 5.457l.73.171-.73-.171zm-5.008 5.008l-.171-.73.171.73zm-5.457 0l-.171.73.171-.73zm0-15.473l-.171-.73.171.73zm5.457 0l.171-.73-.171.73zM20.47 21.53a.75.75 0 101.06-1.06l-1.06 1.06zM4.046 13.61a11.198 11.198 0 010-5.115l-1.46-.342a12.698 12.698 0 000 5.8l1.46-.343zm14.013-5.115a11.196 11.196 0 010 5.115l1.46.342a12.698 12.698 0 000-5.8l-1.46.343zm-4.45 9.564a11.196 11.196 0 01-5.114 0l-.342 1.46c1.907.448 3.892.448 5.8 0l-.343-1.46zM8.496 4.046a11.198 11.198 0 015.115 0l.342-1.46a12.698 12.698 0 00-5.8 0l.343 1.46zm0 14.013a5.97 5.97 0 01-4.45-4.45l-1.46.343a7.47 7.47 0 005.568 5.568l.342-1.46zm5.457 1.46a7.47 7.47 0 005.568-5.567l-1.46-.342a5.97 5.97 0 01-4.45 4.45l.342 1.46zM13.61 4.046a5.97 5.97 0 014.45 4.45l1.46-.343a7.47 7.47 0 00-5.568-5.567l-.342 1.46zm-5.457-1.46a7.47 7.47 0 00-5.567 5.567l1.46.342a5.97 5.97 0 014.45-4.45l-.343-1.46zm8.652 15.28l3.665 3.664 1.06-1.06-3.665-3.665-1.06 1.06z" />
                                </svg>
                            </span>
                        </label>
                    </form>


                </div>
            </div>
            {{--  button tambah  --}}
            <div class="flex justify-start mb-4 px-4">
                <a href="{{ route('Berita.create') }}"
                    class="outline outline-offset-2 outline-1 bg-[#24AEE4] hover:bg-blue-700 text-white text-sm py-2 px-4 rounded">Tambah
                    Berita</a>
            </div>
            {{--  end  --}}
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mx-4">
                @forelse ($blog as $berita)
                    <div class="bg-white shadow-md rounded-lg overflow-hidden relative" style="width: 100%; height: 100%;">
                        <img src="{{ asset('storage/fotoberita/' . $berita->foto) }}" alt="Gambar Berita 1"
                            class="w-full h-48 object-cover object-center">
                        <div class="p-4">
                            <span class="text-sm text-gray-500">{{ $berita->kategori }}</span>
                            <h2 class="text-xl font-semibold mt-2">
                                <a href="{{ route('Berita.show', $berita->id) }}">{{ Str::limit($berita->judul, 15) }}</a>
                            </h2>
                            <div class="flex items-center mt-2">

                                    <button type="button" onclick="likeBerita({{ $berita->id }})" id="buttonLike{{$berita->id}}" class="flex items-center  bg-gray-200 rounded-full px-3 py-1 mr-2">
                                        <i class="fas fa-thumbs-up mr-1"></i>
                                        Like
                                    </button>

                                <!-- Jumlah like, misalnya dari data berita -->
                                <div class="flex gap-1">
                                    <span id="JumlahLike{{$berita->id}}" class="text-gray-500">{{ $berita->likes_count }} </span>
                                    <span>Likes</span>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="id" id="id" value="{{ $berita->id }}">
                        <div class="dropdown-wrapper" data-berita-id="{{ $berita->id }}">
                            <div class="absolute top-0 right-0 p-2 cursor-pointer options-dropdown"
                                id="optionsDropdown{{ $berita->id }}">
                                <i class="fas fa-ellipsis-v"></i>
                            </div>

                            <div class="hidden absolute top-8 right-0 bg-white shadow-md rounded-lg py-2 z-10 dropdown-menu"
                                id="dropdownMenu{{ $berita->id }}">
                                <a href="{{ route('Berita.edit', $berita->id) }}"
                                    class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Edit</a>
                                <!-- Tambahkan id ke elemen form hapus untuk mengidentifikasinya -->
                                <form id="delete-form-{{ $berita->id }}" action="{{ route('Berita.destroy', $berita->id) }}"
                                    method="post" onsubmit="confirmDelete(event, {{ $berita->id }})">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" onclick=""
                                        class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <!-- Tempatkan di bawah halaman HTML sebelum tag penutup </body> -->
                    <script>
                        // Fungsi untuk menampilkan SweetAlert konfirmasi hapus
                        function confirmDelete(event, beritaId) {
                            event.preventDefault();
                            Swal.fire({
                                title: 'Konfirmasi Hapus',
                                text: 'Apakah Anda yakin ingin menghapus berita ini?',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#d33',
                                cancelButtonColor: '#3085d6',
                                confirmButtonText: 'Ya, Hapus',
                                cancelButtonText: 'Batal'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // Jika pengguna mengonfirmasi untuk menghapus, kirimkan permintaan hapus ke server
                                    document.getElementById('delete-form-' + beritaId).submit();
                                }
                            });
                        }
                    </script>


                    <script>
                        // Dapatkan semua elemen pembungkus dropdown
                        var dropdownWrappers = document.querySelectorAll('.dropdown-wrapper');

                        // Fungsi untuk menyembunyikan semua dropdown terbuka
                        function hideAllDropdowns() {
                            dropdownWrappers.forEach(function(wrapper) {
                                var dropdownMenu = wrapper.querySelector('.dropdown-menu');
                                dropdownMenu.classList.add('hidden');
                            });
                        }

                        // Tambahkan event listener pada setiap elemen pembungkus dropdown
                        dropdownWrappers.forEach(function(wrapper) {
                            var beritaId = wrapper.dataset.beritaId;
                            var dropdownIcon = wrapper.querySelector('.options-dropdown');
                            var dropdownMenu = wrapper.querySelector('.dropdown-menu');

                            dropdownIcon.addEventListener('click', function(event) {
                                event.stopPropagation(); // Mencegah klik menyebar ke jendela

                                // Sembunyikan semua dropdown terbuka
                                hideAllDropdowns();

                                // Toggle kelas 'hidden' pada dropdownMenu berdasarkan $berita->id
                                dropdownMenu.classList.toggle('hidden');
                            });
                        });

                        // Tutup dropdown ketika pengguna mengklik di luar setiap elemen pembungkus dropdown
                        window.addEventListener('click', function(event) {
                            hideAllDropdowns();
                        });
                    </script>
                @empty
                    <div class="flex justify-center items-center col-span-3">
                        <img src="/admin/noData.png" alt="" width="300px">
                    </div>
                @endforelse

            </div>
            <div class="mt-3">
                {{ $blog->appends(['cari' => request('cari')])->links() }}
            </div>
        </main>
        {{-- <script>
            document.addEventListener('DOMContentLoaded', function() {
                var likeButtons = document.querySelectorAll('.like-button');

                likeButtons.forEach(function(button) {
                    button.addEventListener('click', function() {
                        var blogId = this.getAttribute('data-item-id');
                        store(blogId, this);
                    });
                });

                function store(blogId, button) {
                    fetch('{{ route('Berita.like') }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                blog_id: blogId
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.liked) {
                                button.textContent = 'Unlike';
                            } else {
                                button.textContent = 'Like';
                            }
                        })
                        .catch(error => console.error(error));
                }
            });
        </script> --}}

    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script> --}}
    <script>

        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
        function likeBerita(beritaId) {
            if (beritaId.value == "") {
                console.log("Kosong")
                return;
            } else {
                console.log(beritaId);
                $.ajax({
                    url: "{{ route('Berita.like') }}",
                    method: 'POST',
                    data: {
                        id : beritaId,
                    },
                    success: function(response) {
                        if(response.action === 'tambah'){
                            const jumlah = document.getElementById("JumlahLike"+beritaId).innerHTML;
                            var penambahan = parseInt(jumlah) + 1;
                            document.getElementById("JumlahLike"+beritaId).innerHTML = penambahan.toString();
                            const button = document.getElementById("buttonLike" + beritaId);
                            button.classList.add("bg-blue-300");
                            button.classList.add("text-white");

                            console.log(jumlah);
                            console.log("awokawok");
                        }
                        else if(response.action === 'hapus'){
                            const jumlah = document.getElementById("JumlahLike"+beritaId).innerHTML;
                            var penambahan = parseInt(jumlah) - 1;
                            document.getElementById("JumlahLike"+beritaId).innerHTML = penambahan.toString();
                            const button = document.getElementById("buttonLike" + beritaId);
                            button.classList.remove("bg-blue-300")
                            button.classList.remove("text-white")
                            console.log("anjay");
                        }
                         console.log(beritaId);
                         console.log(response);

                    },
                    error: function(error) {
                        console.log('Terjadi kesalahan saat mengirim permintaan.');
                        console.error(error);
                        // Lakukan tindakan yang sesuai jika terjadi kesalahan.
                    }

                })
            }
        }





    </script>
    <script>
        $(window).on('load', function() {
            $('.spin_load').fadeOut();
            $.ajax({
                url: '/get-users',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    data.forEach(function(item) {
                        const beritaId = item.berita_id;
                        const button = document.getElementById("buttonLike" + beritaId);
                        button.classList.add("bg-blue-300");
                        button.classList.add("text-white");
                        console.log(button);
                        console.log(beritaId);
                    });
                },
                error: function(error) {
                    console.log('Error:', error);
                }
            });
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
</body>

</html>
