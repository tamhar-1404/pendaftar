<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFz2uJRJw1++wJ/E=" crossorigin="anonymous"></script>
    <link href="/admin/assets/images/Logo.png" rel="shortcut icon">
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
                                        <input id="search"
                                            class="form-input peer h-9 w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 text-xs+ placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="berikan limit" type="number" name="limit" />
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
                                    <button class="px-1 py-1 bg-blue-300 rounded text-white font-semibold">Tambah</button>
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
