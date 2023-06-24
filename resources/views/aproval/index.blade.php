<div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
    <div class="main-content">
        {{-- @include('aproval.layout') --}}
        <div class="animate__animated p-6" :class="[$store.app.animation]">
            <!-- start main content section -->

            <div x-data="basic" class="mt-0">
                {{-- judul --}}
                <div class="mb-5 font-semibold">
                    <span>Approval / <span class="text-[#00B7FF]">Pendaftaran</span></span>
                </div>
                <div class="panel">
                    {{-- serch dan filter --}}
                    <div class="flex justify-end">
                        {{-- serch --}}
                        <div class="mr-4 ">
                            <input class=" p-1 border-2 border-gray-400 rounded-xl outline-1 outline-gray-400 dark:bg-transparent" type="text" placeholder="cari">
                        </div>
                        {{-- filter --}}
                        <div class="border-2 rounded-full border-gray-400 flex items-center mr-2 ">
                            <span class="mr-1 ml-3">
                                filter
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" mr-3 w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
                            </svg>
                        </div>
                    </div>
                    {{-- tabel --}}

                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                          <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                              <table class="min-w-full text-left text-sm font-light">
                                <thead class="border-b bg-gray-200 font-medium dark:border-neutral-500 ">
                                  <tr class="">
                                    <th scope="col" class="px-6 py-4">#</th>
                                    <th scope="col" class="px-6 py-4">Nama</th>
                                    <th scope="col" class="px-6 py-4">Jurusan</th>
                                    <th scope="col" class="px-6 py-4">Masa Magang</th>
                                    <th scope="col" class="px-6 py-4">Sekolah</th>
                                    <th scope="col" class="px-6 py-4">Kelas</th>
                                    <th scope="col" class="px-6 py-4">Aksi</th>

                                  </tr>
                                </thead>
                                <tbody>
                                  <tr
                                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:text-black-200 ">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">1</td>
                                    <td class="whitespace-nowrap px-6 py-4">Mark</td>
                                    <td class="whitespace-nowrap px-6 py-4">RPL</td>
                                    <td class="whitespace-nowrap px-6 py-4">03-04-2023 -> 03-10-2023</td>
                                    <td class="whitespace-nowrap px-6 py-4">SMKN 1 KEPANJEN</td>
                                    <td class="whitespace-nowrap px-6 py-4">12</td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        <a href="/detail_daftar">
                                            <div class="w-16 flex h-8 bg-white rounded-md border-2 border-[#00B7FF] justify-center items-center text-[#00B7FF] hover:bg-[#00B7FF] hover:text-white dark:bg-transparent ">
                                                <span class=" p-1  font-semibold dark:hover:text-black">Lihat</span>
                                            </div>
                                        </a>
                                    </td>
                                  </tr>
                                  <tr
                                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 ">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">2</td>
                                    <td class="whitespace-nowrap px-6 py-4">Mark</td>
                                    <td class="whitespace-nowrap px-6 py-4">RPL</td>
                                    <td class="whitespace-nowrap px-6 py-4">03-04-2023 -> 03-10-2023</td>
                                    <td class="whitespace-nowrap px-6 py-4">SMKN 1 KEPANJEN</td>
                                    <td class="whitespace-nowrap px-6 py-4">12</td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        <a href="#">
                                            <div class="w-16 flex h-8 bg-white rounded-md border-2 border-[#00B7FF] justify-center items-center text-[#00B7FF] hover:bg-[#00B7FF] hover:text-white dark:bg-transparent ">
                                                <span class=" p-1  font-semibold dark:hover:text-black">Lihat</span>
                                            </div>
                                        </a>
                                    </td>
                                  </tr>
                                  <tr
                                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 ">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">3</td>
                                    <td class="whitespace-nowrap px-6 py-4">Mark</td>
                                    <td class="whitespace-nowrap px-6 py-4">RPL</td>
                                    <td class="whitespace-nowrap px-6 py-4">03-04-2023 -> 03-10-2023</td>
                                    <td class="whitespace-nowrap px-6 py-4">SMKN 1 KEPANJEN</td>
                                    <td class="whitespace-nowrap px-6 py-4">12</td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        <a href="#">
                                            <div class="w-16 flex h-8 bg-white rounded-md border-2 border-[#00B7FF] justify-center items-center text-[#00B7FF] hover:bg-[#00B7FF] hover:text-white dark:bg-transparent ">
                                                <span class=" p-1  font-semibold dark:hover:text-black">Lihat</span>
                                            </div>
                                        </a>
                                    </td>
                                  </tr>
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
    </div>
</div>
