<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/admin/assets/images/Logo.png" rel="shortcut icon">
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
    <link rel="stylesheet" href="load/load.css">
    <link href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.css" rel="stylesheet">
    <link href="toastr.css" rel="stylesheet"/>
    <script src="toastr.js"></script>
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFz2uJRJw1++wJ/E=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
        <link href="/admin/assets/images/Logo.png" rel="shortcut icon">

    </head>
    <body>

        <div class="px-4 mt-2">

            @if (session('error'))
            <div id="alertDiv" class="bg-red-100 border border-red-400 text-red-700 px-2 py-2 rounded relative" role="alert">
                <strong class="font-bold">Peringatan</strong>
                <span class="block sm:inline">Limit tidak valid</span>
                <span id="closeBtn" class="absolute top-0 bottom-0 right-0 px-2 py-1">
                  <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>

            </div>
                @endif
        </div>
        <script>
            // Get references to the elements
            const alertDiv = document.getElementById('alertDiv');
            const closeBtn = document.getElementById('closeBtn');

            // Function to close the alert
            function closeAlert() {
              alertDiv.style.display = 'none';
            }

            // Attach a click event listener to the close button
            closeBtn.addEventListener('click', closeAlert);
          </script>

    <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
        <div class="main-content">
            {{-- @include('aproval.layout') --}}
            <div class="animate__animated p-6" :class="[$store.app.animation]">
                <!-- start main content section -->

                <div x-data="basic" class="">
                    {{-- judul --}}
                    <div class="mb-5 font-semibold text-base">
                        <span>Approval / <span class="text-[#00B7FF]">Pendaftaran</span></span>
                    </div>
                    <div class="panel">
                        {{-- serch dan filter --}}
                        <div class=" flex justify-between">
                            <div class="flex justify-start">
                                {{-- serch --}}
                                <div class="mr-3">
                                    <form action="" class="flex gap-2">
                                        <label class="relative hidden sm:flex">

                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">

                                            </span>
                                        </label>
                                        <div class="flex gap-5">
                                            <button type="button"
                                                id="tambah-rfid" style="background-color: rgb(29 78 216)"
                                                class=" text-white font-bold py-2 px-4 rounded"
                                                onclick="tambahRFID()">
                                            Edit Limit
                                            </button>
                                            <div class="limit">Jumlah limit {{$limit}} dan sisa limit saat ini {{$sisalimit}}</div>
                                        </div>
                                        <div id="modal-tambah-rfid"
                                            class="modal fixed inset-0 flex items-center justify-center">
                                            <div class="modal-content bg-white p-6">
                                                <h2 class="text-2xl font-bold mb-4">Limit Pendaftaran </h2>
                                                <input id="inputrfid"
                                                    type="number" name="limit"
                                                    class="border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full">
                                                <div class="mt-6 flex justify-end">
                                                    <!-- Your additional content here if needed -->
                                                </div>
                                            </div>
                                        </div>
                                    <!-- Import script JavaScript -->
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            document.getElementById('tambah-rfid').addEventListener('click', function() {
                                                document.getElementById('modal-tambah-rfid').style.display = "flex";
                                                document.getElementById('inputrfid').focus();
                                            });
                                            document.getElementById('modal-tambah-rfid').addEventListener('click', function(
                                                event) {
                                                if (event.target === this || event.target.classList.contains('bg-red-500')) {
                                                    this.style.display = "none";
                                                }
                                            });
                                        });
                                    </script>
                                    </form>
                                </div>


                            </div>
                            <div class="flex justify-end">
                                {{-- serch --}}
                                <div class="mr-3">
                                    <form action="">
                                        <label class="relative hidden sm:flex">
                                            <input id="search"
                                                class="form-input peer h-9 w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 text-xs+ placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Search users..." type="text" name="cari"
                                                value="{{ request('cari') }}" />
                                            <span
                                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">

                                            </span>
                                        </label>
                                    </form>
                                </div>
                                <!-- Letakkan script JavaScript di bawah form pencarian -->
                                <script>
                                    $(document).ready(function() {
                                        // Tangkap form pencarian ketika disubmit
                                        $("form").on("submit", function(e) {
                                            e.preventDefault(); // Hindari submit form biasa

                                            // Ambil nilai dari input pencarian
                                            var searchTerm = $("#search").val();

                                            // Lakukan permintaan AJAX ke server
                                            $.ajax({
                                                type: "GET",
                                                url: "{{ route('aproval.index') }}", // Ganti dengan endpoint server Anda untuk menghandle pencarian
                                                data: {
                                                    cari: searchTerm
                                                },
                                                dataType: "json",
                                                success: function(response) {
                                                    // Handle data yang diterima dari server dan perbarui tampilan hasil pencarian
                                                    // Misalnya, jika Anda memiliki elemen dengan ID 'search-results', Anda dapat memperbarui isinya dengan:
                                                    // $('#search-results').html(response);
                                                    console.log(
                                                    response); // Cetak data respons dari server ke konsol untuk di-debug
                                                },
                                                error: function(error) {
                                                    console.error(error); // Tangani kesalahan jika terjadi
                                                },
                                            });
                                        });
                                    });
                                </script>
                                {{-- filter --}}

                            </div>
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
                                                    <th scope="col" class="px-6 py-2">Jurusan</th>
                                                    <th scope="col" class="px-6 py-2">Kelas</th>
                                                    <th scope="col" class="px-6 py-2">Masa Magang</th>
                                                    <th scope="col" class="px-6 py-2">Sekolah</th>
                                                    <th scope="col" class="px-6 py-2">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @forelse ($aprovals as $aproval)
                                                    <tr class="text-sm">
                                                        <td class="whitespace-nowrap px-6 py-2">{{ $no++ }}</td>
                                                        <td class="whitespace-nowrap px-6 py-2">{{ $aproval->name }}</td>
                                                        <td class="whitespace-nowrap px-6 py-2">{{ $aproval->jurusan }}
                                                        </td>
                                                        <td class="whitespace-nowrap px-6 py-2">{{ $aproval->kelas }}</td>
                                                        <td class="whitespace-nowrap px-6 py-2">
                                                            {{ $aproval->magang_awal }}
                                                            -- {{ $aproval->magang_akhir }}</td>
                                                        <td class="whitespace-nowrap px-6 py-2">{{ $aproval->sekolah }}
                                                        </td>
                                                        <td class="whitespace-nowrap px-6 py-2">

                                                            <a href="{{ route('aproval.edit', $aproval->id) }}">
                                                                <button
                                                                    class="border border-solid border-[#00B7FF;] rounded-md text-sm  hover:bg-[#00B7FF;] text-[#00B7FF;] hover:text-white font-bold py-2 px-4 outline-none focus:outline-none">
                                                                    <i class="fa fa-eye"></i>
                                                                </button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="6" class="p-8 text-center">
                                                            <div class="flex justify-center items-center">
                                                                <img src="/admin/noData.png" alt=""
                                                                    width="280px">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                        {{ $aprovals->appends(['cari' => request('cari')])->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
</body>


</html>


