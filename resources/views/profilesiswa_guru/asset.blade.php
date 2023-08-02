<div class="animate__animated " :class="[$store.app.animation]">
    <!-- start main content section -->
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline"></a>
            </li>
            <li class="before:content-[''] ltr:before:mr-1 rtl:before:ml-1">
                <span>Profile</span>
            </li>
        </ul>
        <div class="pt-4">
            <div class="mb-5 grid grid-cols-1 gap-5 lg:grid-cols-3 xl:grid-cols-4">
                <div class="panel">
                    <div class="mb-5 flex items-center justify-between">
                        <h5 class="text-lg font-semibold dark:text-white-light">Profile</h5>

                    </div>

                    <div class="mb-5">
                        <div class="flex flex-col items-center justify-center">
                            <img src="{{ asset('storage/Siswa/' . $Siswa->foto_siswa) }}" alt="image"
                                class="mb-5 h-24 w-24 rounded-full object-cover" />
                            <p class="text-xl font-semibold text-info">{{ $Siswa->name }}</p>
                        </div>
                        <ul class="m-auto mt-5 flex max-w-[160px] flex-col space-y-4 font-semibold text-white-dark">
                            <li class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                                </svg>
                                {{ $Siswa->sekolah }}
                            </li>
                            <li class="flex items-center gap-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                                    <path opacity="0.5"
                                        d="M4 10.1433C4 5.64588 7.58172 2 12 2C16.4183 2 20 5.64588 20 10.1433C20 14.6055 17.4467 19.8124 13.4629 21.6744C12.5343 22.1085 11.4657 22.1085 10.5371 21.6744C6.55332 19.8124 4 14.6055 4 10.1433Z"
                                        stroke="currentColor" stroke-width="1.5" />
                                    <circle cx="12" cy="10" r="3" stroke="currentColor"
                                        stroke-width="1.5" />
                                </svg>
                                {{ $Siswa->alamat }}
                            </li>
                            <li>
                                <a href="javascript:;" class="flex items-center gap-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                                        <path opacity="0.5"
                                            d="M2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12C22 15.7712 22 17.6569 20.8284 18.8284C19.6569 20 17.7712 20 14 20H10C6.22876 20 4.34315 20 3.17157 18.8284C2 17.6569 2 15.7712 2 12Z"
                                            stroke="currentColor" stroke-width="1.5" />
                                        <path
                                            d="M6 8L8.1589 9.79908C9.99553 11.3296 10.9139 12.0949 12 12.0949C13.0861 12.0949 14.0045 11.3296 15.8411 9.79908L18 8"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                    <span class="">{{ $Siswa->email }}</span></a>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                                    <path
                                        d="M16.1007 13.359L16.5562 12.9062C17.1858 12.2801 18.1672 12.1515 18.9728 12.5894L20.8833 13.628C22.1102 14.2949 22.3806 15.9295 21.4217 16.883L20.0011 18.2954C19.6399 18.6546 19.1917 18.9171 18.6763 18.9651M4.00289 5.74561C3.96765 5.12559 4.25823 4.56668 4.69185 4.13552L6.26145 2.57483C7.13596 1.70529 8.61028 1.83992 9.37326 2.85908L10.6342 4.54348C11.2507 5.36691 11.1841 6.49484 10.4775 7.19738L10.1907 7.48257"
                                        stroke="currentColor" stroke-width="1.5" />
                                    <path opacity="0.5"
                                        d="M18.6763 18.9651C17.0469 19.117 13.0622 18.9492 8.8154 14.7266C4.81076 10.7447 4.09308 7.33182 4.00293 5.74561"
                                        stroke="currentColor" stroke-width="1.5" />
                                    <path opacity="0.5"
                                        d="M16.1007 13.3589C16.1007 13.3589 15.0181 14.4353 12.0631 11.4971C9.10807 8.55886 10.1907 7.48242 10.1907 7.48242"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                                <span class="whitespace-nowrap" dir="ltr">{{ $Siswa->no }}</span>
                            </li>
                            @if ($sp == 'Sp1')
                                <ul class="mt-7  justify-center gap-2">
                                    <li class="font-bold">Status</li>
                                    <li>
                                        <div
                                            class="flex h-1.5 w-full rounded-full bg-[#ebedf2] dark:bg-dark/40 relative">
                                            <div class="w-full rounded-full" style="background-color: #DAFE00;">
                                                <span
                                                    class="absolute inset-0 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">SP
                                                    1</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            @endif
                            @if ($sp == 'Sp2')
                                <ul class="mt-7  justify-center gap-2">
                                    <li class="font-bold">Status</li>
                                    <li>
                                        <div
                                            class="flex h-1.5 w-full rounded-full bg-[#ebedf2] dark:bg-dark/40 relative">
                                            <div class="w-full rounded-full" style="background-color: #fe0000;">
                                                <span
                                                    class="absolute inset-0 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">SP
                                                    2</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            @endif
                        </ul>
                    </div>

                </div>
                <div class="panel lg:col-span-2 xl:col-span-3">
                    <div class="mb-5">
                        <h5 class="text-lg font-semibold dark:text-white-light">Siswa</h5>
                    </div>
                    <div class="mb-5">
                        <div class="table-responsive font-semibold text-[#515365] dark:text-white-light">

                            <table class="whitespace-nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tanggal</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="dark:text-white-dark">
                                    @forelse ($pelanggaran as $pelangaran)
                                        <tr class="text-sm bg-[#E2E8F0] col-span-4">
                                            <td class="px-6 py-4">{{ $loop->iteration }}</td>
                                            <td class="px-6 py-4">{{ $pelangaran->tanggal }}</td>
                                            <td class="px-6 py-4">{{ $pelangaran->deskripsi }}</td>

                                            <td class="px-6 py-4">
                                                <button type="button" class="btn btn-outline-info"
                                                    data-te-toggle="modal"
                                                    data-modal-target="staticModal{{ $pelangaran->id }}"
                                                    data-modal-toggle="staticModal{{ $pelangaran->id }}">
                                                    Lihat
                                                </button>
                                            </td>
                                            {{-- <td><img src="{{asset('storage/laporansiswa/'. $pelangaran->bukti)}}" style="width: 10%; height:10%;" alt="" srcset=""></td> --}}
                                        </tr>
                                    @empty
                                    @endforelse

                                    @forelse ($pelanggaran as $pelangaran)
                                        <div class="w-full h-screen pt-[100px]" style="overflow: auto;">
                                            <div id="staticModal{{ $pelangaran->id }}" tabindex="-1"
                                                aria-hidden="true" style="backdrop-filter: blur(4px);"
                                                class="kamu-tak-diajak fixed top-3 left-0 right-0 z-[999] hidden w-120 p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative w-full max-w-xl max-h-full">
                                                    <!-- Modal content -->
                                                    <div
                                                        class="relative bg-white rounded-lg shadow dark:bg-gray-700 bg-blue-500">
                                                        <!-- Modal header -->
                                                        <div
                                                            class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                            <h3
                                                                class="text-xl font-semibold text-gray-900 dark:text-white">
                                                                Detail laporan
                                                            </h3>
                                                            <button type="button"
                                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                data-modal-hide="staticModal{{ $pelangaran->id }}">
                                                                <svg class="w-5 h-5" fill="currentColor"
                                                                    viewBox="0 0 20 20"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <!-- Modal body -->
                                                        <div class="p-6 space-y-6">
                                                            <div>
                                                                <p
                                                                    class="text-base leading-relaxed font-semibold  text-gray-800 dark:text-gray-400">
                                                                    Tanggal Pelanggaran :
                                                                </p>
                                                                <span>{{ $pelangaran->tanggal }}</span>
                                                                <p
                                                                    class="text-base leading-relaxed text-gray-500 dark:text-gray-400">

                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p
                                                                    class="text-base leading-relaxed font-semibold text-gray-800 dark:text-gray-400">
                                                                    Deskripsi Pelanggaran :
                                                                </p>
                                                                <span>{{ $pelangaran->deskripsi }}</span>
                                                                <p
                                                                    class="text-base leading-relaxed text-gray-500 dark:text-gray-400">

                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p
                                                                    class="text-base leading-relaxed font-bold text-gray-800 dark:text-gray-400">

                                                                    Bukti Pelanggaran : <span></p><img
                                                                    src="{{ asset('storage/laporansiswa/' . $pelangaran->bukti) }}" /></span>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                    @endforelse

                                </tbody>
                            </table>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
                        </div>
                    </div>
                    {{-- paginate --}}

                </div>
            </div>
        </div>
    </div>
    <!-- end main content section -->

    <!-- start footer section -->
    <!-- end footer section -->
</div>
