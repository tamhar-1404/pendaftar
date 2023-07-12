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
                        <div class="mr-3 ">
                            <input class="border-2 border-gray-200 rounded-xl outline-1 outline-gray-300 dark:bg-transparent text-sm px-2 py-1 tracking-wide" type="text" placeholder="Cari...">

                        </div>
                        {{-- filter --}}
                        <ul class="relative flex items-center">
                            <!-- Notification dropdown -->
                            <li class="relative" data-te-dropdown-ref>
                            <a
                                class="mr-4 flex items-center text-gray-500 hover:text-gray-700 focus:text-gray-700"
                                href="#"
                                id="navbarDropdownMenuLink"
                                role="button"
                                data-te-dropdown-toggle-ref
                                aria-expanded="false">
                                <span class="dark:black-gray-200 [&>svg]:w-3.5">
                                    <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                  >
                                    <path
                                      fill="currentColor"
                                      d="M3 5.109C3 4.496 3.47 4 4.05 4h16.79c.58 0 1.049.496 1.049 1.109 0 .612-.47 1.108-1.05 1.108H4.05C3.47 6.217 3 5.721 3 5.11zM5.798 12.5c0-.612.47-1.109 1.05-1.109H18.04c.58 0 1.05.497 1.05 1.109s-.47 1.109-1.05 1.109H6.848c-.58 0-1.05-.497-1.05-1.109zM9.646 18.783c-.58 0-1.05.496-1.05 1.108 0 .613.47 1.109 1.05 1.109h5.597c.58 0 1.05-.496 1.05-1.109 0-.612-.47-1.108-1.05-1.108H9.646z"
                                    />
                                  </svg>
                            </a>
                            <ul class="absolute left-auto right-0 z-[1000] mt-3 hidden min-w-[12rem] list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-zinc-700 [&[data-te-dropdown-show]]:block"
                            aria-labelledby="navbarDropdownMenuLink"
                            data-te-dropdown-menu-ref>
                            <li class="flex p-2 gap-2 mt-2 pb-2">
                                <p>Filter</p>
                            </li>
                            <li class="flex p-2 gap-2">
                                <input type="text" class="border border-gray-300 rounded"  placeholder="Alamat">
                                <input type="text" class="border border-gray-300 rounded"  placeholder="Alamat">
                            </li>
                            <li class="flex p-2 gap-2">
                                <input type="text" class="border border-gray-300 rounded"   placeholder="Alamat">
                                <input type="text" class="border border-gray-300 rounded" placeholder="Alamat">
                            </li>
                            <li class="flex p-2 gap-2         ">
                                <input type="text" class="border border-gray-300 rounded"  placeholder="Alamat">
                                <input type="text" class="border border-gray-300 rounded" placeholder="Alamat">
                            </li>
                        </ul>
                    </div>
                    {{-- tabel --}}

                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                          <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                              <table class="min-w-full text-left text-sm">
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
                                  $no=1;
                                  @endphp
                                  @forelse ($aprovals as $aproval)
                                  <tr class="text-sm">
                                    <td class="whitespace-nowrap px-6 py-2">{{ $no++ }}</td>
                                    <td class="whitespace-nowrap px-6 py-2">{{ $aproval->name }}</td>
                                    <td class="whitespace-nowrap px-6 py-2">{{ $aproval->jurusan }}</td>
                                    <td class="whitespace-nowrap px-6 py-2">{{ $aproval->kelas }}</td>
                                    <td class="whitespace-nowrap px-6 py-2">{{ $aproval->magang_awal }} -- {{ $aproval->magang_akhir }}</td>
                                    <td class="whitespace-nowrap px-6 py-2">{{ $aproval->sekolah }}</td>
                                    <td class="whitespace-nowrap px-6 py-2">

                                        <a href="{{ route('aproval.edit', $aproval->id) }}">
                                            <button class="border border-solid border-[#00B7FF;] rounded-md text-sm  hover:bg-[#00B7FF;] text-[#00B7FF;] hover:text-white font-bold py-2 px-4 outline-none focus:outline-none">
                                              <i class="fa fa-eye"></i>
                                            </button>
                                          </a>
                                    </td>
                                  </tr>
                                  @empty
                                  </tbody>
                              </table>
                              <div class="bg-red-100 border mb-2 mt-2 border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                <strong class="font-bold">Data </strong>
                                <span class="block sm:inline">Tidak tersedia.</span>
                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3"></span>
                              </div>
                              @endforelse
                            </div>
                          </div>
                        </div>
                      </div>
                          {{-- end tabel --}}
                    {{-- paginate --}}
                    {{--  <div class="flex justify-between mt-4">
                        <p class="text-sm">
                            Showing 1 to 10 of 15 entries
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
                    </div>  --}}
                </div>
            </div>
            <!-- end main content section -->

            <!-- start footer section -->
            {{-- <p class="pt-6 text-center dark:text-white-dark ltr:sm:text-left rtl:sm:text-right">
                © <span id="footer-year">2022</span>. Vristo All rights reserved.
            </p> --}}
            <!-- end footer section -->
        </div>
    </div>
</div>
