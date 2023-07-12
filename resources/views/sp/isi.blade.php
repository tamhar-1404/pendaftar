<div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">


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
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" mr-3 w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
                                </svg>
                            </div>
                            {{-- serch --}}
                            <div class="mr-4 ">
                                <input class=" p-1 border-2 border-gray-400 rounded-xl outline-1 outline-gray-400 dark:bg-transparent" type="text" placeholder="cari">
                            </div>
                        </div>


                        {{-- keterangan --}}
                        <div class="flex items-center gap-4">
                            <button class="bg-blue-400 py-1 px-2 text-white font-semibold rounded-lg">
                                Tambah
                            </button>
                            <div class="w-24 ">

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
                                    @forelse ($data as $datas )
                                    <tr
                                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:text-black-200 ">
                                    <td class="whitespace-nowrap px-4 py-4 font-medium">{{$loop->iteration}}</td>
                                    <td class="whitespace-nowrap px-4 py-4">{{$datas->nama}}</td>
                                    <td class="whitespace-nowrap px-4 py-4">{{  Carbon::parse($datas->created_at)->format('d M Y')}}</td>
                                    {{-- <td class="whitespace-nowrap px-4 py-4">SMKN 1 KEPANJEN</td> --}}
                                    @if ($datas->deskripsi_2)
                                    <td class="whitespace-nowrap px-4 py-4 max-w-sm overflow-hidden truncate " >{{$datas->deskripsi_2}}</td>
                                    @else
                                        <td class="whitespace-nowrap px-4 py-4 max-w-sm overflow-hidden truncate " >{{$datas->deskripsi_1}}</td>
                                    @endif
                                    @if ($datas->sp_2)
                                    <td class="whitespace-nowrap px-4 py-4">
                                        <div class="flex h-1.5 w-full rounded-full bg-[#ebedf2] dark:bg-dark/40 relative">
                                            <div class="w-full rounded-full" style="background-color: #FF0000;">
                                                <span class="absolute inset-0 flex items-end justify-end opacity-0 hover:opacity-100 transition-opacity mb-2">SP 2</span>
                                            </div>
                                        </div>
                                    </td>
                                    @elseif ($datas->sp_1)
                                    <td class="whitespace-nowrap px-4 py-4">
                                        <div class="flex h-1.5 w-full rounded-full bg-[#ebedf2] dark:bg-dark/40 relative">
                                            <div class="w-full rounded-full" style="background-color: #FFE500;">
                                                <span class="absolute inset-0 flex items-end justify-end opacity-0 hover:opacity-100 transition-opacity mb-2">SP 1</span>
                                            </div>
                                        </div>
                                    </td>
                                    @endif

                                    <td class="whitespace-nowrap px-4 py-4">
                                            <div class="w-16 flex h-8 bg-white rounded-md border-2 border-[#00B7FF] justify-center items-center text-[#00B7FF] hover:bg-[#00B7FF] hover:text-white dark:bg-transparent " data-te-toggle="modal"
                                            data-te-target="#exampleModalCenteredScrollable">
                                                <span class=" p-1  font-semibold dark:hover:text-black">Lihat</span>
                                            </div>
                                    </td>
                                  </tr>
                                    @empty

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
                                  class="pointer-events-none relative block rounded-full bg-transparent px-3 py-1.5 text-sm text-neutral-500 transition-all duration-300 dark:text-neutral-400"
                                  >Previous</a
                                >
                              </li>
                              <li>
                                <a
                                  class="relative block rounded-full bg-[#00B7FF] px-3 py-1.5 text-sm text-white transition-all duration-300   dark:text-white dark: dark:hover:text-white"
                                  href="#!"
                                  >1</a
                                >

                              </li>
                              <li aria-current="page">
                                <a
                                  class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm text-black transition-all duration-300 hover:bg-neutral-100  dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
                                  href="#!"
                                  >2

                                </a>
                              </li>
                              <li>
                                <a
                                  class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm text-black transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
                                  href="#!"
                                  >3</a
                                >
                              </li>
                              <li>
                                <a
                                  class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm text-black transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
                                  href="#!"
                                  >Next</a
                                >
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
        <div
            data-te-modal-init
            class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
            id="exampleModalCenteredScrollable"
            tabindex="-1"
            aria-labelledby="exampleModalCenteredScrollable"
            aria-modal="true"
            role="dialog">
            <div
                data-te-modal-dialog-ref
                class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
                <div
                class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <!--Modal title-->
                    <h5
                    class="text-xl font-medium leading-normal text-neutral-900 dark:text-neutral-200"
                    id="exampleModalCenteredScrollableLabel">
                    Detail SP
                    </h5>
                    <!--Close button-->
                    <button
                    type="button"
                    class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                    data-te-modal-dismiss
                    aria-label="Close">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-6 w-6">
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    </button>
                </div>

                <!--Modal body-->
                <div class="relative p-4">
                    <p class=" text-md">
                    Nama :
                    </p >

                    <p class="ml-5 mt-2 text-md text-gray-400">
                        Mark
                    </p>

                    <p class=" text-md mt-4">
                        Tanggal :
                    </p >

                    <p class="ml-5 mt-2 text-md text-gray-400">
                        03-04-2023
                    </p>

                    <p class=" text-md mt-4">
                        Sekolah :
                    </p >

                    <p class="ml-5 mt-2 text-md text-gray-400">
                        SMKN 1 KEPANJEN
                    </p>

                    <p class=" text-md mt-4">
                        Status :
                    </p >

                    <p class="ml-5 mt-2 text-md text-gray-400">
                        SP 1
                    </p>

                    <p class=" text-md mt-4">
                        Dokumen :
                    </p >

                    <p class="ml-5 mt-2 text-md text-gray-400">
                        Dokumen
                    </p>


                </div>

                <!--Modal footer-->
                <div
                    class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <button
                    type="button"
                    class="ml-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                    data-te-ripple-init
                    data-te-modal-dismiss
                    data-te-ripple-color="light">
                    Kembali
                    </button>
                </div>
                </div>
            </div>
            </div>
        {{-- end modal --}}
        {{-- modal tambah--}}
        <div
            data-te-modal-init
            class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
            id="exampleModalCenteredScrollable"
            tabindex="-1"
            aria-labelledby="exampleModalCenteredScrollable"
            aria-modal="true"
            role="dialog">
            <div
                data-te-modal-dialog-ref
                class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
                <div
                class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <!--Modal title-->
                    <h5
                    class="text-xl font-medium leading-normal text-neutral-900 dark:text-neutral-200"
                    id="exampleModalCenteredScrollableLabel">
                    Detail SP
                    </h5>
                    <!--Close button-->
                    <button
                    type="button"
                    class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                    data-te-modal-dismiss
                    aria-label="Close">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-6 w-6">
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    </button>
                </div>

                <!--Modal body-->
                <div class="relative p-4">
                    <p class=" text-md">
                    Nama :
                    </p >

                    <p class="ml-5 mt-2 text-md text-gray-400">
                        Mark
                    </p>

                    <p class=" text-md mt-4">
                        Tanggal :
                    </p >

                    <p class="ml-5 mt-2 text-md text-gray-400">
                        03-04-2023
                    </p>

                    <p class=" text-md mt-4">
                        Sekolah :
                    </p >

                    <p class="ml-5 mt-2 text-md text-gray-400">
                        SMKN 1 KEPANJEN
                    </p>

                    <p class=" text-md mt-4">
                        Status :
                    </p >

                    <p class="ml-5 mt-2 text-md text-gray-400">
                        SP 1
                    </p>

                    <p class=" text-md mt-4">
                        Dokumen :
                    </p >

                    <p class="ml-5 mt-2 text-md text-gray-400">
                        Dokumen
                    </p>


                </div>

                <!--Modal footer-->
                <div
                    class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <button
                    type="button"
                    class="ml-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                    data-te-ripple-init
                    data-te-modal-dismiss
                    data-te-ripple-color="light">
                    Kembali
                    </button>
                </div>
                </div>
            </div>
            </div>
        {{-- end modal --}}
