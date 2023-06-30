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
                        <div class="border-2 rounded-full border-gray-200 flex items-center mr-2 ">
                            <span class="mr-1 ml-3 text-gray-320 text-sm">
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
                              <table class="min-w-full text-left text-sm">
                                <thead class="border-rounded bg-gray-200 dark:border-neutral-500">
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
                                      <form id="confirm-form-{{ $aproval->id }}" action="{{ route('aproval.confirm', $aproval->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-primary">KONFIRMASI</button>
                                      </form>
                                      <a href="{{route('aproval.show', $aproval->id)}}">
                                        <button>lihat</button>
                                      </a>
                                      <form id="reject-form-{{ $aproval->id }}" action="{{ route('aproval.reject', $aproval->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">TOLAK</button>
                                      </form>
                                    </td>
                                  </tr>
                                  @empty
                                  </tbody>
                              </table>
                              <div class="bg-red-100 border mb-2  border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
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
