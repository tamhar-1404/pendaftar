<div class="main-container min-h-screen text-black dark:text-white-dark mt-20" :class="[$store.app.navbar]">
    <div class="">
        {{-- @include('.sidebar.layout') --}}
        <div class="animate__animated p-6" :class="[$store.app.animation]">
            <!-- start main content section -->

            <div x-data="basic" class="mt-0">
                {{-- judul --}}


                <div class="main">
                <div class="panel">
                    <div class="mb-5 font-semibold">
                        <span >Lainnya / <span class="text-[#00B7FF]">Jadwal Piket Harian</span></span>
                    </div>
                    <div class="flex gap-4 mb-3" >
                        <a href="{{route('piket_siswa.index')}}">
                        <button class=" outline outline-[#24AEE4] px-4 py-1 mb-2 rounded-md font-semibold hover:bg-[#24AEE4] hover:text-white {{request()->routeIs('piket.index') ? 'bg-[#24AEE4] text-white' : ''}}">
                            Pagi
                        </button>
                        </a>
                        <a href="/sore">
                        <button class=" outline outline-[#24AEE4] px-4 py-1 mb-2 rounded-md font-semibold hover:bg-[#24AEE4] hover:text-white ">
                            Sore
                        </button>
                        </a>
                        <button class=" outline outline-[#24AEE4] px-4 py-1 mb-2 rounded-md font-semibold hover:bg-[#24AEE4] hover:text-white " data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" >
                            Laporan
                        </button>
                    </div>
                    <div class="flex grid-cols-5 gap-2 w-lg " id="#pagi">
                        {{-- senin --}}
                        <div class=" w-full h-full rounded-lg bg-[#EAF1FF]" >

                            {{-- hari --}}
                            <div class="text-center font-bold mt-3">
                                Senin
                            </div>
                            {{-- nama --}}
                            <div class="text-sm font-medium text-center mt-5">Toni</div>
                            <div class="text-sm font-medium text-center mt-1">Toni</div>
                            <div class="text-sm font-medium text-center mt-1">Toni</div>
                            <div class="text-sm font-medium text-center mt-1 mb-4">Toni</div>
                            {{-- inspectur --}}
                            <div class="w-full flex justify-center mb-6">
                            <div class="w-1/2 bg-[#24AEE4] rounded-lg flex justify-center">
                                <div class=" bg-transparent text-white">Santoso</div>
                            </div>
                            </div>
                        </div>
                        {{-- selasa --}}
                        <div class=" w-full h-full rounded-lg bg-[#EAF1FF]" >

                            {{-- hari --}}
                            <div class="text-center font-bold mt-3">
                                Selasa
                            </div>
                            {{-- nama --}}
                            <div class="text-sm font-medium text-center mt-5">Toni</div>
                            <div class="text-sm font-medium text-center mt-1">Toni</div>
                            <div class="text-sm font-medium text-center mt-1">Toni</div>
                            <div class="text-sm font-medium text-center mt-1 mb-4">Toni</div>
                            {{-- inspectur --}}
                            <div class="w-full flex justify-center mb-6">
                            <div class="w-1/2 bg-[#24AEE4] rounded-lg flex justify-center">
                                <div class=" bg-transparent text-white">Santoso</div>
                            </div>
                            </div>
                        </div>
                         {{-- rabu --}}
                         <div class=" w-full h-full rounded-lg bg-[#EAF1FF]" >

                            {{-- hari --}}
                            <div class="text-center font-bold mt-3">
                                Rabu
                            </div>
                            {{-- nama --}}
                            <div class="text-sm font-medium text-center mt-5">Toni</div>
                            <div class="text-sm font-medium text-center mt-1">Toni</div>
                            <div class="text-sm font-medium text-center mt-1">Toni</div>
                            <div class="text-sm font-medium text-center mt-1 mb-4">Toni</div>

                            {{-- inspectur --}}
                            <div class="w-full flex justify-center mb-6">
                            <div class="w-1/2 bg-[#24AEE4] rounded-lg flex justify-center">
                                <div class=" bg-transparent text-white">Santoso</div>
                            </div>
                            </div>
                        </div>
                         {{-- kamis --}}
                         <div class=" w-full h-full rounded-lg bg-[#EAF1FF]" >

                            {{-- hari --}}
                            <div class="text-center font-bold mt-3">
                                Kamis
                            </div>
                            {{-- nama --}}
                            <div class="text-sm font-medium text-center mt-5">Toni</div>
                            <div class="text-sm font-medium text-center mt-1">Toni</div>
                            <div class="text-sm font-medium text-center mt-1">Toni</div>
                            <div class="text-sm font-medium text-center mt-1 mb-4">Toni</div>

                            {{-- inspectur --}}
                            <div class="w-full flex justify-center mb-6">
                            <div class="w-1/2 bg-[#24AEE4] rounded-lg flex justify-center">
                                <div class=" bg-transparent text-white">Santoso</div>
                            </div>
                            </div>
                        </div>
                         {{-- jumat --}}
                         <div class=" w-full h-full rounded-lg bg-[#EAF1FF]" >

                            {{-- hari --}}
                            <div class="text-center font-bold mt-3">
                                Jumat
                            </div>
                            {{-- nama --}}
                            <div class="text-sm font-medium text-center mt-5">Toni</div>
                            <div class="text-sm font-medium text-center mt-1">Toni</div>
                            <div class="text-sm font-medium text-center mt-1">Toni</div>
                            <div class="text-sm font-medium text-center mt-1 mb-4">Toni</div>

                            {{-- inspectur --}}
                            <div class=" w-full flex justify-center mb-6">
                            <div class="w-1/2 bg-[#24AEE4] rounded-lg flex justify-center">
                                <div class=" bg-transparent text-white">Santoso</div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex grid-cols-2 gap-2 w-lg mt-5" id="#pagi">
                        {{-- senin --}}
                        <div class=" w-1/5 h-full rounded-lg bg-[#EAF1FF]" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" >

                            {{-- hari --}}
                            <div class="text-center font-bold mt-3">
                                Senin
                            </div>
                            {{-- nama --}}
                            <div class="text-sm font-medium text-center mt-5">Toni</div>
                            <div class="text-sm font-medium text-center mt-1">Toni</div>
                            <div class="text-sm font-medium text-center mt-1">Toni</div>
                            <div class="text-sm font-medium text-center mt-1 mb-4">Toni</div>
                            {{-- inspectur --}}
                            <div class="w-full flex justify-center mb-6">
                            <div class="w-1/2 bg-[#24AEE4] rounded-lg flex justify-center">
                                <div class=" bg-transparent text-white">Santoso</div>
                            </div>
                            </div>
                        </div>
                        {{-- selasa --}}
                        <div class=" w-4/5 h-full rounded-lg bg-[#EAF1FF] px-5 py-3" >

                            {{-- judul --}}
                            <div class="text-left font-bold mt-3">
                                Catatan
                            </div>
                            {{-- isi --}}
                            <div class="text-sm font-medium text-left mt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores atque voluptas excepturi nobis dignissimos, corrupti mollitia non unde saepe rerum iure suscipit. Perspiciatis totam possimus consequatur voluptates, eius tempora molestias.</div>

                            </div>
                        </div>

                    </div>

                </div>
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
<!--Verically centered scrollable modal-->
