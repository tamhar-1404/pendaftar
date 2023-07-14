<div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

    <div class="main-content">
        {{-- @include('sp.layout') --}}
        <div class="animate__animated p-6" :class="[$store.app.animation]">
            <!-- start main content section -->

            <div x-data="basic" class="mt-">
                {{-- judul --}}
                <div class="mb-5 font-semibold">
                    <span>Peraturan / <span class="text-[#00B7FF]">Laporan SP</span></span>
                </div>
                <div class="panel">
                    <div class="flex justify-between">
                        {{-- serch dan filter --}}
                        <div class="flex justify-start items-center">
                            {{-- filter --}}
                            <div class="border-2 rounded-full border-gray-400 flex items-center mr-2 ">
                                <span class="mr-1 ml-3">
                                    filter
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class=" mr-3 w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
                                </svg>
                            </div>
                            {{-- serch --}}
                            <div class="mr-4 ">
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
                        </div>


                        {{-- keterangan --}}
                        <div class="flex items-center gap-4">
                            <button data-modal-target="staticModal1" data-modal-toggle="staticModal1"
                                class="bg-blue-200 flex border hover:border-blue-400 p-2 text-white font-semibold rounded-lg hover:bg-white hover:text-blue-400">Tambah
                            </button>

                            <div class="w-24 ">

                                <div id="staticModal1" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                                    class="kamu-tak-diajak fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative w-full max-w-2xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div
                                                class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Tambah SP
                                                </h3>
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="staticModal1">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <form action="{{ route('sp.store') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="p-6 space-y-6">
                                                    <div class="relative z-0 w-full mb-6 group">
                                                        <input type="text" name="nama" id="nm"
                                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                            placeholder=" " required />
                                                        <label for="nm"
                                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
                                                    </div>
                                                    <div class="relative z-0 w-full mb-6 group">
                                                        <input type="text" name="deskripsi" id="dskr"
                                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                            placeholder=" " required />
                                                        <label for="dskr"
                                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Deskripsi</label>
                                                    </div>
                                                    <div class="mt-4">
                                                        <label for="sekolah"
                                                            class="block text-gray-700 font-medium mb-2">Keterangan</label>
                                                        <div class="flex items-center mb-4">
                                                            <input id="disabled-radio-1" type="radio"
                                                                name="keterangan" value="Sp1"
                                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                            <label for="disabled-radio-1"
                                                                class="ml-2 text-sm font-medium text-gray-400 dark:text-gray-500">SP
                                                                1</label>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <input id="disabled-radio-2" type="radio"
                                                                name="keterangan" value="Sp2"
                                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                            <label for="disabled-radio-2"
                                                                class="ml-2 text-sm font-medium text-gray-400 dark:text-gray-500">SP
                                                                2</label>
                                                        </div>
                                                    </div>

                                                    <div class="relative z-0 w-full mb-6 group">
                                                        <input type="file" name="buktisp" id="floating_email"
                                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                            placeholder=" " required />
                                                        <label for="floating_email"
                                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Bukti</label>
                                                    </div>
                                                </div>

                                                <!-- Modal footer -->
                                                <div
                                                    class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                    <button data-modal-hide="staticModal" type="button"
                                                        class="text-gray-700  bg-white border border-gray-700 hover:text-white hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kembali</button>
                                                    <button data-modal-hide="staticModal" type="submit"
                                                        class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex  w-full ">
                                    <div class=" w-14 mr-1  mt-2 mb-2 rounded-full border-2 border-[#FFE500]"></div>
                                    <span class="w-8 text-xs"> = Sp1</span>
                                </div>
                                <div class="flex  w-full ">
                                    <div class=" w-14 mr-1  mt-2 mb-2 rounded-full border-2 border-[#FF0000]"></div>
                                    <span class="w-8 text-xs"> = Sp2</span>
                                </div>


                            </div>
                        </div>
                    </div>

                    {{-- tabel --}}

                    <div class="flex flex-col mt-4">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full text-left text-sm font-light">
                                        <thead class="border-b bg-gray-200 font-medium dark:border-neutral-500 ">
                                            <tr class="">
                                                <th scope="col" class="px-6 py-4">#</th>
                                                <th scope="col" class="px-6 py-4">Nama</th>
                                                <th scope="col" class="px-6 py-4">Tanggal</th>
                                                {{-- <th scope="col" class="px-6 py-4">Sekolah</th> --}}
                                                <th scope="col" class="px-6 py-4">Deskripsi</th>
                                                <th scope="col" class="px-6 py-4">keterangan</th>
                                                <th scope="col" class="px-6 py-4">Aksi</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                use Carbon\Carbon;
                                            @endphp
                                            @forelse ($data as $datas)
                                                <tr
                                                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:text-black-200 ">
                                                    <td class="whitespace-nowrap px-4 py-4 font-medium">
                                                        {{ $loop->iteration }}</td>
                                                    <td class="whitespace-nowrap px-4 py-4">{{ $datas->nama }}</td>
                                                    <td class="whitespace-nowrap px-4 py-4">
                                                        {{ Carbon::parse($datas->created_at)->format('d M Y') }}</td>
                                                    {{-- <td class="whitespace-nowrap px-4 py-4">SMKN 1 KEPANJEN</td> --}}
                                                    @if ($datas->deskripsi_2)
                                                        <td
                                                            class="whitespace-nowrap px-4 py-4 max-w-sm overflow-hidden truncate ">
                                                            {{ $datas->deskripsi_2 }}</td>
                                                    @else
                                                        <td
                                                            class="whitespace-nowrap px-4 py-4 max-w-sm overflow-hidden truncate ">
                                                            {{ $datas->deskripsi_1 }}</td>
                                                    @endif
                                                    @if ($datas->sp_2)
                                                        <td class="whitespace-nowrap px-4 py-4">
                                                            <div
                                                                class="flex h-1.5 w-full rounded-full bg-[#ebedf2] dark:bg-dark/40 relative">
                                                                <div class="w-full rounded-full"
                                                                    style="background-color: #FF0000;">
                                                                    <span
                                                                        class="absolute inset-0 flex items-end justify-end opacity-0 hover:opacity-100 transition-opacity mb-2">SP
                                                                        2</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    @elseif ($datas->sp_1)
                                                        <td class="whitespace-nowrap px-4 py-4">
                                                            <div
                                                                class="flex h-1.5 w-full rounded-full bg-[#ebedf2] dark:bg-dark/40 relative">
                                                                <div class="w-full rounded-full"
                                                                    style="background-color: #FFE500;">
                                                                    <span
                                                                        class="absolute inset-0 flex items-end justify-end opacity-0 hover:opacity-100 transition-opacity mb-2">SP
                                                                        1</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    @endif

                                                    <td class="whitespace-nowrap px-4 py-4">
                                                        <div class="w-16 flex h-8 bg-white rounded-md border-2 border-[#00B7FF] justify-center items-center text-[#00B7FF] hover:bg-[#00B7FF] hover:text-white dark:bg-transparent "
                                                            data-te-toggle="modal"
                                                            data-te-target="#exampleModalCenteredScrollable">
                                                            <span
                                                                class=" p-1  font-semibold dark:hover:text-black">Lihat</span>
                                                        </div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end tabel --}}
                    {{-- paginate --}}
                    <div class="flex justify-between">
                        <p>
                            menampilkan 1 sampai 10 dari 15 data
                        </p>
                        <nav aria-label="Page navigation example">
                            <ul class="list-style-none flex">
                                <li>
                                    <a
                                        class="pointer-events-none relative block rounded-full bg-transparent px-3 py-1.5 text-sm text-neutral-500 transition-all duration-300 dark:text-neutral-400">Previous</a>
                                </li>
                                <li>
                                    <a class="relative block rounded-full bg-[#00B7FF] px-3 py-1.5 text-sm text-white transition-all duration-300   dark:text-white dark: dark:hover:text-white"
                                        href="#!">1</a>

                                </li>
                                <li aria-current="page">
                                    <a class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm text-black transition-all duration-300 hover:bg-neutral-100  dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
                                        href="#!">2

                                    </a>
                                </li>
                                <li>
                                    <a class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm text-black transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
                                        href="#!">3</a>
                                </li>
                                <li>
                                    <a class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm text-black transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
                                        href="#!">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- end main content section -->

            <!-- start footer section -->
            <p class="pt-6 text-center dark:text-white-dark ltr:sm:text-left rtl:sm:text-right">
                © <span id="footer-year">2022</span>. Vristo All rights reserved.
            </p>
            <!-- end footer section -->

        </div>
        {{-- modal --}}
        <div data-te-modal-init
            class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
            id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollable"
            aria-modal="true" role="dialog">
            <div data-te-modal-dialog-ref
                class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
                <div
                    class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                    <div
                        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                        <!--Modal title-->
                        <h5 class="text-xl font-medium leading-normal text-neutral-900 dark:text-neutral-200"
                            id="exampleModalCenteredScrollableLabel">
                            Detail SP
                        </h5>
                        <!--Close button-->
                        <button type="button"
                            class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                            data-te-modal-dismiss aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!--Modal body-->
                    <div class="relative p-4">
                        <p class=" text-md">
                            Nama :
                        </p>

                        <p class="ml-5 mt-2 text-md text-gray-400">
                            Mark
                        </p>

                        <p class=" text-md mt-4">
                            Tanggal :
                        </p>

                        <p class="ml-5 mt-2 text-md text-gray-400">
                            03-04-2023
                        </p>

                        <p class=" text-md mt-4">
                            Sekolah :
                        </p>

                        <p class="ml-5 mt-2 text-md text-gray-400">
                            SMKN 1 KEPANJEN
                        </p>

                        <p class=" text-md mt-4">
                            Status :
                        </p>

                        <p class="ml-5 mt-2 text-md text-gray-400">
                            SP 1
                        </p>

                        <p class=" text-md mt-4">
                            Dokumen :
                        </p>

                        <p class="ml-5 mt-2 text-md text-gray-400">
                            Dokumen
                        </p>


                    </div>

                    <!--Modal footer-->
                    <div
                        class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                        <button type="button"
                            class="ml-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            data-te-ripple-init data-te-modal-dismiss data-te-ripple-color="light">
                            Kembali
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{-- end modal --}}
        {{-- modal tambah --}}
        <div data-te-modal-init
            class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
            id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollable"
            aria-modal="true" role="dialog">
            <div data-te-modal-dialog-ref
                class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
                <div
                    class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                    <div
                        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                        <!--Modal title-->
                        <h5 class="text-xl font-medium leading-normal text-neutral-900 dark:text-neutral-200"
                            id="exampleModalCenteredScrollableLabel">
                            Detail SP
                        </h5>
                        <!--Close button-->
                        <button type="button"
                            class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                            data-te-modal-dismiss aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!--Modal body-->
                    <div class="relative p-4">
                        <p class=" text-md">
                            Nama :
                        </p>

                        <p class="ml-5 mt-2 text-md text-gray-400">
                            Mark
                        </p>

                        <p class=" text-md mt-4">
                            Tanggal :
                        </p>

                        <p class="ml-5 mt-2 text-md text-gray-400">
                            03-04-2023
                        </p>

                        <p class=" text-md mt-4">
                            Sekolah :
                        </p>

                        <p class="ml-5 mt-2 text-md text-gray-400">
                            SMKN 1 KEPANJEN
                        </p>

                        <p class=" text-md mt-4">
                            Status :
                        </p>

                        <p class="ml-5 mt-2 text-md text-gray-400">
                            SP 1
                        </p>

                        <p class=" text-md mt-4">
                            Dokumen :
                        </p>

                        <p class="ml-5 mt-2 text-md text-gray-400">
                            Dokumen
                        </p>


                    </div>

                    <!--Modal footer-->
                    <div
                        class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                        <button type="button"
                            class="ml-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            data-te-ripple-init data-te-modal-dismiss data-te-ripple-color="light">
                            Kembali
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{-- end modal --}}
