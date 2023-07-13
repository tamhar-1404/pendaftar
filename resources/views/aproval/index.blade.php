<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                                    href="#" id="navbarDropdownMenuLink" role="button" onclick="openModal()">
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
                                class="fixed right-48 mt-32 flex items-center justify-center z-50 hidden">
                                <div class="absolute w-96 bg-white rounded-lg p-6 shadow-lg">
                                    <div class="modal-header mb-4">
                                        <div class="flex items-center justify-between mb-4">
                                            <h5 class="text-xl font-bold">Filter Approval Siswa</h5>
                                            <button onclick="closeModal()"
                                                class="text-gray-500 ml-auto focus:outline-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>

                                    </div>
                                    <div class="modal-body mt-5">
                                        <label class="flex flex-col mb-2">
                                            <p class="text-base mb-3">Asal Sekolah</p>
                                            <div class="w-full flex grid-cols-2">
                                                @foreach ($aprovals as $aproval)
                                                <div class="mt-2 w-full bg-black">
                                                    <input type="checkbox" class="hidden" onclick="changeColor(this)" />
                                                    <span id="checkboxLabel"
                                                        class="border w-full border-gray-300 rounded px-2 py-1 bg-gray-100 text-gray-700 max-w-xs p-3"
                                                       >{{ $aproval->sekolah }}</span>
                                                </div>
                                                @endforeach
                                            </div>
                                        </label>
                                    </div>

                                    <div class="modal-footer mt-4 flex justify-end">

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
                                        label.classList.add("bg-blue-500");
                                        label.classList.remove("bg-gray-100");

                                    } else {
                                        label.classList.add("bg-gray-100");
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
                                                    <td class="whitespace-nowrap px-6 py-2">{{ $aproval->magang_awal }}
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
                                                <div class="flex justify-center items-center">
                                                    <img src="/admin/noData.png" alt="" width="280px">
                                                </div>
                                                @endforelse
                                            </tbody>
                                        </table>
                                        <nav>
                                            <ul class="inline-flex -space-x-px text-sm">
                                                <!-- Previous Page Link -->
                                                @if ($aprovals->onFirstPage())
                                                    <li>
                                                        <a href="#"
                                                            class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                                                    </li>
                                                @else
                                                    <li>
                                                        <a href="{{ $aprovals->previousPageUrl() }}"
                                                            class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                                                    </li>
                                                @endif

                                                <!-- Pagination Elements -->
                                                @foreach ($aprovals as $page => $url)
                                                    @if (is_int($page))
                                                        @if ($page == $aprovals->currentPage())
                                                            <li>
                                                                <a href="#" aria-current="page"
                                                                    class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">{{ $page }}</a>
                                                            </li>
                                                        @else
                                                            <li>
                                                                <a href="{{ $url }}"
                                                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ $page }}</a>
                                                            </li>
                                                        @endif
                                                    @endif
                                                @endforeach

                                                <!-- Next Page Link -->
                                                @if ($aprovals->hasMorePages())
                                                    <li>
                                                        <a href="{{ $aprovals->nextPageUrl() }}"
                                                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                                                    </li>
                                                @else
                                                    <li>
                                                        <a href="#"
                                                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                                                    </li>
                                                @endif
                                            </ul>
                                        </nav>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


</div>
