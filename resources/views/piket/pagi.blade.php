<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/admin/assets/images/Logo.png" rel="shortcut icon">
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" media="screen"
        href="{{ asset('admin/assets/css/perfect-scrollbar.min.css') }}" />
        
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('admin/assets/css/style.css') }}" />
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link defer rel="stylesheet" type="text/css" media="screen" href="{{ asset('admin/assets/css/animate.css') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .step:not(.active) {
            display: none;
        }
    </style>
</head>

<body>
    @if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            toastr.error("{{ $error }}");
        </script>
    @endforeach
@endif

    <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
        <div class="">
            {{-- @include('.sidebar.layout') --}}
            <div class="animate__animated p-6" :class="[$store.app.animation]">
                <!-- start main content section -->

                <div x-data="basic" class="mt-0">
                    {{-- judul --}}


                    <div class="main">
                        <div class="panel">
                            <div class="mb-5 font-semibold">
                                <span>Lainnya / <span class="text-[#00B7FF]">Jadwal Piket Harian</span></span>
                            </div>



                            @php
                                $currentDateTime = new DateTime();
                                $day = $currentDateTime->format('l');
                            @endphp
                            {{-- {{$day}} --}}
                            <div class="flex gap-4 mb-3 justify-between">
                                <div class="flex gap-4 mb-3">
                                    <button type="button" id="buttonPagi" onclick="toggleContent('content1')"
                                        class=" outline outline-[#24AEE4] px-4 py-1 mb-2 rounded-md font-semibold hover:bg-[#24AEE4] hover:text-white ">
                                        Pagi
                                    </button>

                                    <button type="button" id="buttonSore" onclick="toggleContent('content2')"
                                        class=" outline outline-[#24AEE4] px-4 py-1 mb-2 rounded-md font-semibold hover:bg-[#24AEE4] hover:text-white ">
                                        Sore
                                    </button>

                                    <button type="button" id="buttonLaporan" onclick="toggleContent('content3')"
                                        class=" outline outline-[#24AEE4] px-4 py-1 mb-2 rounded-md font-semibold hover:bg-[#24AEE4] hover:text-white ">
                                        Laporan
                                    </button>
                                </div>
                                <div>
                                    <button data-modal-target="authentication-modal"
                                        data-modal-toggle="authentication-modal"
                                        class="outline outline-[#24AEE4] px-4 py-1 mb-2 rounded-md font-semibold hover:bg-[#24AEE4] hover:text-white">
                                        Tambah
                                    </button>
                                    <!-- Main modal -->
                                    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative w-full max-w-md max-h-full">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button"
                                                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                    data-modal-hide="authentication-modal">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="px-6 py-6 lg:px-8">
                                                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
                                                        Tambah Jadwal Piket</h3>
                                                    <form class="space-y-6" action="{{ route('piket.store') }}"
                                                        method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <label for="">Pilih waktu piket</label>
                                                        <div class="flex gap-4">
                                                            <div class="flex gap-2 items-center">
                                                                <input type="radio" name="waktu" value="pagi"
                                                                    class="border border-2" id="">
                                                                <p>pagi</p>
                                                            </div>
                                                            <div class="flex gap-2 items-center">
                                                                <input type="radio" name="waktu" value="sore"
                                                                    class="border border-2" id="">
                                                                <p>sore</p>
                                                            </div>
                                                        </div>
                                                        <label for="">Pilih hari</label>
                                                        <div class="w-full">
                                                            <select name="hari" id="" class="w-full">
                                                                <option value="senin">senin</option>
                                                                <option value="selasa">selasa</option>
                                                                <option value="rabu">rabu</option>
                                                                <option value="kamis">kamis</option>
                                                                <option value="jumat">jumat</option>
                                                            </select>
                                                        </div>
                                                        <label class="mb-0" for="">Pilih siswa</label>
                                                        {{-- <input class="border border-1 w-full h-3 rounded" type="text" id="cari_siswa" placeholder="cari nama siswa" type="search"
                                                            name="nama_siswa" > --}}
                                                        <div class="overflow-x-hidden overflow-y-auto max-h-[400px]">

                                                            <div class=" truncate">
                                                                <div class="grid grid-cols-2 listSiswa" id="listSiswa"></div>
                                                                <div class="grid grid-cols-2 listSiswaSelengkapnya" id="listSiswaSelengkapnya"></div>
                                                                {{-- @foreach ($siswa as $data)
                                                                        <div class="flex gap-3 items-center t">
                                                                            <input type="checkbox" name="nama_siswa[]"
                                                                                value="{{ $data->id }}"
                                                                                id="">
                                                                            <p>{{ $data->name }}</p>
                                                                        </div>
                                                                    @endforeach --}}
                                                            </div>
                                                        </div>
                                                        @if ($siswa->count() > 10)
                                                        <p class="text-blue-300 cursor-pointer " id="lihataselengkapnya"
                                                            onclick="lihatsemua()">lihat lainya </p>
                                                        <p id="lihatSedikit" class="hidden" onclick="lihatsedikit()">
                                                        </p>
                                                        @endif

                                                        <button
                                                            class="py-1 px-3 border font-semibold border-blue-400 bg-white text-blue-400 hover:bg-blue-400 hover:text-white"
                                                            type="submit">kirim</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end modal --}}
                                </div>
                            </div>
                            @if (session('error'))
                                <div class="bg-red-500 text-white font-semibold rounded-md p-2 mb-4">
                                    <strong>Error:</strong> {{ session('error') }}
                                </div>
                            @elseif (session('sukses'))
                                <div class="bg-green-500 text-white font-semibold rounded-md p-2 mb-4">
                                    <strong>sukses:</strong> {{ session('sukses') }}
                                </div>
                            @endif
                            <div id="content1" class="card-content" style="display: none">
                                <div class="flex grid-cols-1 mb:grid-cols-3 lg:grid-cols-5 gap-4  w-lg "
                                    id="#pagi">
                                    {{-- senin --}}
                                    <div
                                        class=" w-full h-full  rounded-md {{ strtolower($day) === 'monday' ? 'bg-blue-300' : 'bg-[#EAF1FF]' }}">
                                        {{-- button edit --}}
                                        <div class="flex justify-end" data-modal-target="authentication-modal1"
                                            data-modal-toggle="authentication-modal1">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 pt-2 pr-2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </div>
                                        {{-- hari --}}
                                        <div class="text-center font-bold mt-3">
                                            Senin
                                        </div>
                                        {{-- nama --}}
                                        @forelse ( $senin as $item)
                                            <div class="text-sm font-medium text-center mt-5">{{ $item->siswa->name }}
                                            </div>
                                            <!-- Main modal -->
                                            <div id="authentication-modal1" tabindex="-1" aria-hidden="true"
                                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative w-full max-w-md max-h-full">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <button type="button"
                                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                            data-modal-hide="authentication-modal1">
                                                            <svg aria-hidden="true" class="w-5 h-5"
                                                                fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="px-6 py-6 lg:px-8">
                                                            <h3
                                                                class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
                                                                Tambah Jadwal Piket</h3>
                                                            <form class="space-y-6" action="{{ route('rubah') }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf

                                                                <h4>Centang yang ingin di hapus</h4>
                                                                <input type="hidden" name="waktu"
                                                                    value="{{ $item->waktu }}">
                                                                <input type="hidden" name="hari"
                                                                    value="{{ $item->hari }}">
                                                                <div class="grid grid-cols-2 w-full">
                                                                    @foreach ($senin as $item)
                                                                        <div class="flex gap-3 items-center">
                                                                            <input type="checkbox"
                                                                                name="nama_siswa_rubah[]"
                                                                                value="{{ $item->id }}"
                                                                                id="">
                                                                            <p>{{ $item->siswa->name }}</p>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                                <h4>Centang yang ingin di tambahkan</h4>
                                                                <div class="overflow-x-hidden overflow-y-auto max-h-[400px]">

                                                                    <div class=" truncate">
                                                                        <div class="grid grid-cols-2 listSiswa" id="listSiswa"></div>
                                                                        <div class="grid grid-cols-2 listSiswaSelengkapnya" id="listSiswaSelengkapnya"></div>
                                                                    </div>

                                                                </div>
                                                                @if ($siswa->count() > 10)
                                                                <p class="text-blue-300 cursor-pointer " id="lihataselengkapnya"
                                                                    onclick="lihatsemua()">lihat lainya </p>
                                                                <p id="lihatSedikit" class="hidden" onclick="lihatsedikit()">
                                                                </p>
                                                                @endif

                                                                <button
                                                                    class="py-1 px-3 border font-semibold border-blue-400 bg-white text-blue-400 hover:bg-blue-400 hover:text-white"
                                                                    type="submit">kirim</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end modal --}}
                                        @empty

                                        @endforelse
                                        {{-- inspectur --}}
                                        <div class="w-full flex justify-center mb-6">

                                        </div>


                                    </div>
                                    {{-- selasa --}}
                                    <div
                                        class=" w-full h-full {{ strtolower($day) === 'tuesday' ? 'bg-blue-300' : 'bg-[#EAF1FF]' }} rounded-md">
                                        {{-- button edit --}}
                                        <div class="flex justify-end" data-modal-target="authentication-modal2"
                                            data-modal-toggle="authentication-modal2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 pt-2 pr-2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </div>
                                        {{-- hari --}}
                                        <div class="text-center font-bold mt-3">
                                            Selasa
                                        </div>
                                        {{-- nama --}}
                                        @forelse ( $selasa as $item)
                                            <div class="text-sm font-medium text-center mt-5">{{ $item->siswa->name }}
                                            </div>
                                            <!-- Main modal -->
                                            <div id="authentication-modal2" tabindex="-1" aria-hidden="true"
                                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative w-full max-w-md max-h-full">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <button type="button"
                                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                            data-modal-hide="authentication-modal2">
                                                            <svg aria-hidden="true" class="w-5 h-5"
                                                                fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="px-6 py-6 lg:px-8">
                                                            <h3
                                                                class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
                                                                Tambah Jadwal Piket</h3>
                                                            <form class="space-y-6" action="{{ route('rubah') }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf

                                                                <h4>Centang yang ingin di hapus</h4>
                                                                <input type="hidden" name="waktu"
                                                                    value="{{ $item->waktu }}">
                                                                <input type="hidden" name="hari"
                                                                    value="{{ $item->hari }}">
                                                                @foreach ($selasa as $item)
                                                                    <div class="flex gap-3 items-center">
                                                                        <input type="checkbox"
                                                                            name="nama_siswa_rubah[]"
                                                                            value="{{ $item->id }}"
                                                                            id="">
                                                                        <p>{{ $item->siswa->name }}</p>
                                                                    </div>
                                                                @endforeach
                                                                <h4>Centang yang ingin di tambahkan</h4>
                                                                <div class="overflow-x-hidden overflow-y-auto max-h-[400px]">

                                                                    <div class=" truncate">
                                                                        <div class="grid grid-cols-2 listSiswa" id="listSiswa"></div>
                                                                        <div class="grid grid-cols-2 listSiswaSelengkapnya" id="listSiswaSelengkapnya"></div>
                                                                    </div>

                                                                </div>
                                                                @if ($siswa->count() > 10)
                                                                <p class="text-blue-300 cursor-pointer " id="lihataselengkapnya"
                                                                    onclick="lihatsemua()">lihat lainya </p>
                                                                <p id="lihatSedikit" class="hidden" onclick="lihatsedikit()">
                                                                </p>
                                                                @endif
                                                                <button
                                                                    class="py-1 px-3 border font-semibold border-blue-400 bg-white text-blue-400 hover:bg-blue-400 hover:text-white"
                                                                    type="submit">kirim</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end modal --}}
                                        @empty

                                        @endforelse
                                        {{-- inspectur --}}
                                        <div class="w-full flex justify-center mb-6">

                                        </div>
                                    </div>
                                    {{-- rabu --}}
                                    <div
                                        class=" w-full h-full {{ strtolower($day) === 'wednesday' ? 'bg-blue-300' : 'bg-[#EAF1FF]' }} rounded-md">
                                        {{-- button edit --}}
                                        <div class="flex justify-end" data-modal-target="authentication-modal3"
                                            data-modal-toggle="authentication-modal3">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 pt-2 pr-2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </div>
                                        {{-- hari --}}
                                        <div class="text-center font-bold mt-3">
                                            Rabu
                                        </div>
                                        {{-- nama --}}
                                        @forelse ( $rabu as $item)
                                            <div class="text-sm font-medium text-center mt-5">{{ $item->siswa->name }}
                                            </div>
                                            <!-- Main modal -->
                                            <div id="authentication-modal3" tabindex="-1" aria-hidden="true"
                                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative w-full max-w-md max-h-full">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <button type="button"
                                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                            data-modal-hide="authentication-modal3">
                                                            <svg aria-hidden="true" class="w-5 h-5"
                                                                fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="px-6 py-6 lg:px-8">
                                                            <h3
                                                                class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
                                                                Tambah Jadwal Piket</h3>
                                                            <form class="space-y-6" action="{{ route('rubah') }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf

                                                                <h4>Centang yang ingin di hapus</h4>
                                                                <input type="hidden" name="waktu"
                                                                    value="{{ $item->waktu }}">
                                                                <input type="hidden" name="hari"
                                                                    value="{{ $item->hari }}">
                                                                @foreach ($rabu as $item)
                                                                    <div class="flex gap-3 items-center">
                                                                        <input type="checkbox"
                                                                            name="nama_siswa_rubah[]"
                                                                            value="{{ $item->id }}"
                                                                            id="">
                                                                        <p>{{ $item->siswa->name }}</p>
                                                                    </div>
                                                                @endforeach
                                                                <h4>Centang yang ingin di tambahkan</h4>
                                                                <div class="overflow-x-hidden overflow-y-auto max-h-[400px]">

                                                                    <div class=" truncate">
                                                                        <div class="grid grid-cols-2 listSiswa" id="listSiswa"></div>
                                                                        <div class="grid grid-cols-2 listSiswaSelengkapnya" id="listSiswaSelengkapnya"></div>
                                                                    </div>

                                                                </div>
                                                                @if ($siswa->count() > 10)
                                                                <p class="text-blue-300 cursor-pointer " id="lihataselengkapnya"
                                                                    onclick="lihatsemua()">lihat lainya </p>
                                                                <p id="lihatSedikit" class="hidden" onclick="lihatsedikit()">
                                                                </p>
                                                                @endif
                                                                <button
                                                                    class="py-1 px-3 border font-semibold border-blue-400 bg-white text-blue-400 hover:bg-blue-400 hover:text-white"
                                                                    type="submit">kirim</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end modal --}}
                                        @empty

                                        @endforelse

                                        {{-- inspectur --}}
                                        <div class="w-full flex justify-center mb-6">

                                        </div>
                                    </div>
                                    {{-- kamis --}}
                                    <div
                                        class=" w-full h-full {{ strtolower($day) === 'thursday' ? 'bg-blue-300' : 'bg-[#EAF1FF]' }} rounded-md ">
                                        {{-- button edit --}}
                                        <div class="flex justify-end" data-modal-target="authentication-modal4"
                                            data-modal-toggle="authentication-modal4">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 pt-2 pr-2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </div>
                                        {{-- hari --}}
                                        <div class="text-center font-bold mt-3">
                                            Kamis
                                        </div>
                                        {{-- nama --}}
                                        @forelse ( $kamis as $item)
                                            <div class="text-sm font-medium text-center mt-5">{{ $item->siswa->name }}
                                            </div>
                                            <!-- Main modal -->
                                            <div id="authentication-modal4" tabindex="-1" aria-hidden="true"
                                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative w-full max-w-md max-h-full">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <button type="button"
                                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                            data-modal-hide="authentication-modal4">
                                                            <svg aria-hidden="true" class="w-5 h-5"
                                                                fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="px-6 py-6 lg:px-8">
                                                            <h3
                                                                class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
                                                                Tambah Jadwal Piket</h3>
                                                            <form class="space-y-6" action="{{ route('rubah') }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf

                                                                <h4>Centang yang ingin di hapus</h4>
                                                                <input type="hidden" name="waktu"
                                                                    value="{{ $item->waktu }}">
                                                                <input type="hidden" name="hari"
                                                                    value="{{ $item->hari }}">
                                                                @foreach ($kamis as $item)
                                                                    <div class="flex gap-3 items-center">
                                                                        <input type="checkbox"
                                                                            name="nama_siswa_rubah[]"
                                                                            value="{{ $item->id }}"
                                                                            id="">
                                                                        <p>{{ $item->siswa->name }}</p>
                                                                    </div>
                                                                @endforeach
                                                                <h4>Centang yang ingin di tambahkan</h4>
                                                                <div class="overflow-x-hidden overflow-y-auto max-h-[400px]">

                                                                    <div class=" truncate">
                                                                        <div class="grid grid-cols-2 listSiswa" id="listSiswa"></div>
                                                                        <div class="grid grid-cols-2 listSiswaSelengkapnya" id="listSiswaSelengkapnya"></div>
                                                                    </div>

                                                                </div>
                                                                @if ($siswa->count() > 10)
                                                                <p class="text-blue-300 cursor-pointer " id="lihataselengkapnya"
                                                                    onclick="lihatsemua()">lihat lainya </p>
                                                                <p id="lihatSedikit" class="hidden" onclick="lihatsedikit()">
                                                                </p>
                                                                @endif
                                                                <button
                                                                    class="py-1 px-3 border font-semibold border-blue-400 bg-white text-blue-400 hover:bg-blue-400 hover:text-white"
                                                                    type="submit">kirim</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end modal --}}
                                        @empty

                                        @endforelse

                                        {{-- inspectur --}}
                                        <div class="w-full flex justify-center mb-6">

                                        </div>
                                    </div>
                                    {{-- jumat --}}
                                    <div
                                        class=" w-full h-full {{ strtolower($day) === 'friday' ? 'bg-blue-300' : 'bg-[#EAF1FF]' }} rounded-md">
                                        {{-- button edit --}}
                                        <div class="flex justify-end" data-modal-target="authentication-modal5"
                                            data-modal-toggle="authentication-modal5">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 pt-2 pr-2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </div>
                                        {{-- hari --}}
                                        <div class="text-center font-bold mt-3">
                                            Jumat
                                        </div>
                                        {{-- nama --}}
                                        @forelse ( $jumat as $item)
                                            <div class="text-sm font-medium text-center mt-5">{{ $item->siswa->name }}
                                            </div>
                                            <!-- Main modal -->
                                            <div id="authentication-modal5" tabindex="-1" aria-hidden="true"
                                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative w-full max-w-md max-h-full">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <button type="button"
                                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                            data-modal-hide="authentication-modal5">
                                                            <svg aria-hidden="true" class="w-5 h-5"
                                                                fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="px-6 py-6 lg:px-8">
                                                            <h3
                                                                class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
                                                                Tambah Jadwal Piket</h3>
                                                            <form class="space-y-6" action="{{ route('rubah') }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf

                                                                <h4>Centang yang ingin di hapus</h4>
                                                                <input type="hidden" name="waktu"
                                                                    value="{{ $item->waktu }}">
                                                                <input type="hidden" name="hari"
                                                                    value="{{ $item->hari }}">
                                                                @foreach ($jumat as $item)
                                                                    <div class="flex gap-3 items-center">
                                                                        <input type="checkbox"
                                                                            name="nama_siswa_rubah[]"
                                                                            value="{{ $item->id }}"
                                                                            id="">
                                                                        <p>{{ $item->siswa->name }}</p>
                                                                    </div>
                                                                @endforeach
                                                                <h4>Centang yang ingin di tambahkan</h4>
                                                                <div class="overflow-x-hidden overflow-y-auto max-h-[400px]">

                                                                    <div class=" truncate">
                                                                        <div class="grid grid-cols-2 listSiswa" id="listSiswa"></div>
                                                                        <div class="grid grid-cols-2 listSiswaSelengkapnya" id="listSiswaSelengkapnya"></div>
                                                                    </div>

                                                                </div>
                                                                @if ($siswa->count() > 10)
                                                                <p class="text-blue-300 cursor-pointer " id="lihataselengkapnya"
                                                                    onclick="lihatsemua()">lihat lainya </p>
                                                                <p id="lihatSedikit" class="hidden" onclick="lihatsedikit()">
                                                                </p>
                                                                @endif
                                                                <button
                                                                    class="py-1 px-3 border font-semibold border-blue-400 bg-white text-blue-400 hover:bg-blue-400 hover:text-white"
                                                                    type="submit">kirim</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end modal --}}
                                        @empty

                                        @endforelse
                                        {{-- inspectur --}}
                                        <div class=" w-full flex justify-center mb-6">

                                        </div>
                                    </div>
                                </div>
                                <div class="flex grid-cols-1 mb:grid-cols-3 gap-1 w-lg mt-5" id="#pagi">
                                    {{-- catatan --}}
                                    <div class=" w-full h-30 bg-[#EAF1FF] rounded-md">

                                        {{-- button edit --}}
                                        <div class="flex justify-between pt-1">
                                            {{-- hari --}}
                                            <div class="text-left font-bold mt-0 ml-5">
                                                Catatan
                                            </div>
                                            <button data-modal-target="authentication-modalcatat"
                                                data-modal-toggle="authentication-modalcatat"
                                                class=" mr-1 text-sm py-1 px-2 border border-blue-400 bg-white font-medium text-blue-400 rounded-md">Tambah</button>
                                            {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 pt-2 pr-2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg> --}}
                                        </div>
                                        <!-- Main modal -->
                                        <div id="authentication-modalcatat" tabindex="-1" aria-hidden="true"
                                            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative w-full max-w-md max-h-full">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <button type="button"
                                                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                        data-modal-hide="authentication-modalcatat">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                    <div class="px-6 py-6 lg:px-8">
                                                        <h3
                                                            class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
                                                            Tambah Catatan</h3>
                                                        <form class="space-y-6" action="{{ route('tambahCatatan') }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <textarea name="catatan" id="" cols="40" rows="5"></textarea>
                                                            <button
                                                                class="py-1 px-3 border font-semibold border-blue-400 bg-white text-blue-400 hover:bg-blue-400 hover:text-white"
                                                                type="submit">kirim</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- end modal --


                                        {{-- nama --}}
                                        @foreach ($catatan as $data)
                                            <div
                                                class="flex text-sm font-medium text-left ml-5 mt-5 mb-3 items-center justify-between">
                                                <span>{{ $data->catatan }}</span>
                                                <div class="flex items-center">
                                                    <button type="submit"
                                                        data-modal-target="authentication-modaledit{{ $data->id }}"
                                                        data-modal-toggle="authentication-modaledit{{ $data->id }}"
                                                        class="text-blue-400 hover:text-blue-600 cursor-pointer">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>


                                                    <form action="{{ route('piket.destroy', $data->id) }}"
                                                        method="post" id="confirm-form-{{ $data->id }}"
                                                        class="flex items-center">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" onclick="confirmDelete(event)"
                                                            class="text-red-500 hover:text-red-700 cursor-pointer"
                                                            style="margin-right: 10px; margin-left: 10px;">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                            <!-- Main modal -->
                                            <div id="authentication-modaledit{{ $data->id }}" tabindex="-1"
                                                aria-hidden="true"
                                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative w-full max-w-md max-h-full">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <button type="button"
                                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                            data-modal-hide="authentication-modaledit">
                                                            <svg aria-hidden="true" class="w-5 h-5"
                                                                fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="px-6 py-6 lg:px-8">
                                                            <h3
                                                                class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
                                                                Edit Catatan</h3>
                                                            <form class="space-y-6"
                                                                action="{{ route('piket.update', $data->id) }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')

                                                                <textarea name="catatan" id="" cols="40" rows="5">{{ $data->catatan }}</textarea>
                                                                <button
                                                                    class="py-1 px-3 border font-semibold border-blue-400 bg-white text-blue-400 hover:bg-blue-400 hover:text-white"
                                                                    type="submit">kirim</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end modal --}}
                                        @endforeach




                                    </div>

                                </div>
                            </div>
                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            <script>
                                function confirmDelete(event) {
                                    event.preventDefault();

                                    Swal.fire({
                                        title: 'Konfirmasi',
                                        text: 'Apakah Anda yakin ingin menghapus data ini?',
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Ya, terima!',
                                        cancelButtonText: 'Batal',
                                        background: '#f5f5f5',
                                        customClass: {
                                            icon: 'swal-icon',
                                            confirmButton: 'swal-button swal-button--confirm',
                                            cancelButton: 'swal-button swal-button--cancel'
                                        },
                                        animation: false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            event.target.closest('form').submit();
                                        }
                                    });
                                }
                            </script>
                            {{-- sterp 2 --}}
                            <div id="content2" class="card-content hidden" >
                                <div class="flex grid-cols-1 mb:grid-cols-3 lg:grid-cols-5 gap-4  w-lg "
                                    id="#pagi">
                                    {{-- senin --}}
                                    <div
                                        class=" w-full h-full  rounded-md {{ strtolower($day) === 'monday' ? 'bg-blue-300' : 'bg-[#EAF1FF]' }}">
                                        {{-- button edit --}}
                                        <div class="flex justify-end" data-modal-target="authentication-modal1"
                                            data-modal-toggle="authentication-modal1">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 pt-2 pr-2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </div>
                                        {{-- hari --}}
                                        <div class="text-center font-bold mt-3">
                                            Senin
                                        </div>
                                        {{-- nama --}}
                                        @forelse ( $senin_sore as $item)
                                            <div class="text-sm font-medium text-center mt-5">{{ $item->siswa->name }}
                                            </div>
                                            <!-- Main modal -->
                                            <div id="authentication-modal1" tabindex="-1" aria-hidden="true"
                                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative w-full max-w-md max-h-full">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <button type="button"
                                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                            data-modal-hide="authentication-modal1">
                                                            <svg aria-hidden="true" class="w-5 h-5"
                                                                fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="px-6 py-6 lg:px-8">
                                                            <h3
                                                                class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
                                                                Tambah Jadwal Piket</h3>
                                                            <form class="space-y-6" action="{{ route('rubah') }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf

                                                                <h4>Centang yang ingin di hapus</h4>
                                                                <input type="hidden" name="waktu"
                                                                    value="{{ $item->waktu }}">
                                                                <input type="hidden" name="hari"
                                                                    value="{{ $item->hari }}">
                                                                <div class="grid grid-cols-2 w-full">
                                                                    @foreach ($senin as $item)
                                                                        <div class="flex gap-3 items-center">
                                                                            <input type="checkbox"
                                                                                name="nama_siswa_rubah[]"
                                                                                value="{{ $item->id }}"
                                                                                id="">
                                                                            <p>{{ $item->siswa->name }}</p>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                                <h4>Centang yang ingin di tambahkan</h4>
                                                                <div class="overflow-x-hidden overflow-y-auto max-h-[400px]">

                                                                    <div class=" truncate">
                                                                        <div class="grid grid-cols-2 listSiswa" id="listSiswa"></div>
                                                                        <div class="grid grid-cols-2 listSiswaSelengkapnya" id="listSiswaSelengkapnya"></div>
                                                                    </div>

                                                                </div>
                                                                @if ($siswa->count() > 10)
                                                                <p class="text-blue-300 cursor-pointer " id="lihataselengkapnya"
                                                                    onclick="lihatsemua()">lihat lainya </p>
                                                                <p id="lihatSedikit" class="hidden" onclick="lihatsedikit()">
                                                                </p>
                                                                @endif
                                                                <button
                                                                    class="py-1 px-3 border font-semibold border-blue-400 bg-white text-blue-400 hover:bg-blue-400 hover:text-white"
                                                                    type="submit">kirim</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end modal --}}
                                        @empty

                                        @endforelse
                                        {{-- inspectur --}}
                                        <div class="w-full flex justify-center mb-6">

                                        </div>


                                    </div>
                                    {{-- selasa --}}
                                    <div
                                        class=" w-full h-full {{ strtolower($day) === 'tuesday' ? 'bg-blue-300' : 'bg-[#EAF1FF]' }} rounded-md">
                                        {{-- button edit --}}
                                        <div class="flex justify-end" data-modal-target="authentication-modal2"
                                            data-modal-toggle="authentication-modal2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 pt-2 pr-2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </div>
                                        {{-- hari --}}
                                        <div class="text-center font-bold mt-3">
                                            Selasa
                                        </div>
                                        {{-- nama --}}
                                        @forelse ( $selasa_sore as $item)
                                            <div class="text-sm font-medium text-center mt-5">{{ $item->siswa->name }}
                                            </div>
                                            <!-- Main modal -->
                                            <div id="authentication-modal2" tabindex="-1" aria-hidden="true"
                                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative w-full max-w-md max-h-full">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <button type="button"
                                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                            data-modal-hide="authentication-modal2">
                                                            <svg aria-hidden="true" class="w-5 h-5"
                                                                fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="px-6 py-6 lg:px-8">
                                                            <h3
                                                                class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
                                                                Tambah Jadwal Piket</h3>
                                                            <form class="space-y-6" action="{{ route('rubah') }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf

                                                                <h4>Centang yang ingin di hapus</h4>
                                                                <input type="hidden" name="waktu"
                                                                    value="{{ $item->waktu }}">
                                                                <input type="hidden" name="hari"
                                                                    value="{{ $item->hari }}">
                                                                @foreach ($selasa as $item)
                                                                    <div class="flex gap-3 items-center">
                                                                        <input type="checkbox"
                                                                            name="nama_siswa_rubah[]"
                                                                            value="{{ $item->id }}"
                                                                            id="">
                                                                        <p>{{ $item->siswa->name }}</p>
                                                                    </div>
                                                                @endforeach
                                                                <h4>Centang yang ingin di tambahkan</h4>
                                                                <div class="overflow-x-hidden overflow-y-auto max-h-[400px]">

                                                                    <div class=" truncate">
                                                                        <div class="grid grid-cols-2 listSiswa" id="listSiswa"></div>
                                                                        <div class="grid grid-cols-2 listSiswaSelengkapnya" id="listSiswaSelengkapnya"></div>
                                                                    </div>

                                                                </div>
                                                                @if ($siswa->count() > 10)
                                                                <p class="text-blue-300 cursor-pointer " id="lihataselengkapnya"
                                                                    onclick="lihatsemua()">lihat lainya </p>
                                                                <p id="lihatSedikit" class="hidden" onclick="lihatsedikit()">
                                                                </p>
                                                                @endif
                                                                <button
                                                                    class="py-1 px-3 border font-semibold border-blue-400 bg-white text-blue-400 hover:bg-blue-400 hover:text-white"
                                                                    type="submit">kirim</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end modal --}}
                                        @empty

                                        @endforelse
                                        {{-- inspectur --}}
                                        <div class="w-full flex justify-center mb-6">

                                        </div>
                                    </div>
                                    {{-- rabu --}}
                                    <div
                                        class=" w-full h-full {{ strtolower($day) === 'wednesday' ? 'bg-blue-300' : 'bg-[#EAF1FF]' }} rounded-md">
                                        {{-- button edit --}}
                                        <div class="flex justify-end" data-modal-target="authentication-modal3"
                                            data-modal-toggle="authentication-modal3">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 pt-2 pr-2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </div>
                                        {{-- hari --}}
                                        <div class="text-center font-bold mt-3">
                                            Rabu
                                        </div>
                                        {{-- nama --}}
                                        @forelse ( $rabu_sore as $item)
                                            <div class="text-sm font-medium text-center mt-5">{{ $item->siswa->name }}
                                            </div>
                                            <!-- Main modal -->
                                            <div id="authentication-modal3" tabindex="-1" aria-hidden="true"
                                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative w-full max-w-md max-h-full">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <button type="button"
                                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                            data-modal-hide="authentication-modal3">
                                                            <svg aria-hidden="true" class="w-5 h-5"
                                                                fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="px-6 py-6 lg:px-8">
                                                            <h3
                                                                class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
                                                                Tambah Jadwal Piket</h3>
                                                            <form class="space-y-6" action="{{ route('rubah') }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf

                                                                <h4>Centang yang ingin di hapus</h4>
                                                                <input type="hidden" name="waktu"
                                                                    value="{{ $item->waktu }}">
                                                                <input type="hidden" name="hari"
                                                                    value="{{ $item->hari }}">
                                                                @foreach ($rabu as $item)
                                                                    <div class="flex gap-3 items-center">
                                                                        <input type="checkbox"
                                                                            name="nama_siswa_rubah[]"
                                                                            value="{{ $item->id }}"
                                                                            id="">
                                                                        <p>{{ $item->siswa->name }}</p>
                                                                    </div>
                                                                @endforeach
                                                                <h4>Centang yang ingin di tambahkan</h4>
                                                                <div class="overflow-x-hidden overflow-y-auto max-h-[400px]">

                                                                    <div class=" truncate">
                                                                        <div class="grid grid-cols-2 listSiswa" id="listSiswa"></div>
                                                                        <div class="grid grid-cols-2 listSiswaSelengkapnya" id="listSiswaSelengkapnya"></div>
                                                                    </div>

                                                                </div>
                                                                @if ($siswa->count() > 10)
                                                                <p class="text-blue-300 cursor-pointer " id="lihataselengkapnya"
                                                                    onclick="lihatsemua()">lihat lainya </p>
                                                                <p id="lihatSedikit" class="hidden" onclick="lihatsedikit()">
                                                                </p>
                                                                @endif

                                                                <button
                                                                    class="py-1 px-3 border font-semibold border-blue-400 bg-white text-blue-400 hover:bg-blue-400 hover:text-white"
                                                                    type="submit">kirim</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end modal --}}
                                        @empty

                                        @endforelse

                                        {{-- inspectur --}}
                                        <div class="w-full flex justify-center mb-6">

                                        </div>
                                    </div>
                                    {{-- kamis --}}
                                    <div
                                        class=" w-full h-full {{ strtolower($day) === 'thursday' ? 'bg-blue-300' : 'bg-[#EAF1FF]' }} rounded-md ">
                                        {{-- button edit --}}
                                        <div class="flex justify-end" data-modal-target="authentication-modal4"
                                            data-modal-toggle="authentication-modal4">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 pt-2 pr-2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </div>
                                        {{-- hari --}}
                                        <div class="text-center font-bold mt-3">
                                            Kamis
                                        </div>
                                        {{-- nama --}}
                                        @forelse ( $kamis_sore as $item)
                                            <div class="text-sm font-medium text-center mt-5">{{ $item->siswa->name }}
                                            </div>
                                            <!-- Main modal -->
                                            <div id="authentication-modal4" tabindex="-1" aria-hidden="true"
                                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative w-full max-w-md max-h-full">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <button type="button"
                                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                            data-modal-hide="authentication-modal4">
                                                            <svg aria-hidden="true" class="w-5 h-5"
                                                                fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="px-6 py-6 lg:px-8">
                                                            <h3
                                                                class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
                                                                Tambah Jadwal Piket</h3>
                                                            <form class="space-y-6" action="{{ route('rubah') }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf

                                                                <h4>Centang yang ingin di hapus</h4>
                                                                <input type="hidden" name="waktu"
                                                                    value="{{ $item->waktu }}">
                                                                <input type="hidden" name="hari"
                                                                    value="{{ $item->hari }}">
                                                                @foreach ($kamis as $item)
                                                                    <div class="flex gap-3 items-center">
                                                                        <input type="checkbox"
                                                                            name="nama_siswa_rubah[]"
                                                                            value="{{ $item->id }}"
                                                                            id="">
                                                                        <p>{{ $item->siswa->name }}</p>
                                                                    </div>
                                                                @endforeach
                                                                <h4>Centang yang ingin di tambahkan</h4>
                                                                <div class="overflow-x-hidden overflow-y-auto max-h-[400px]">

                                                                    <div class=" truncate">
                                                                        <div class="grid grid-cols-2 listSiswa" id="listSiswa"></div>
                                                                        <div class="grid grid-cols-2 listSiswaSelengkapnya" id="listSiswaSelengkapnya"></div>
                                                                    </div>

                                                                </div>
                                                                @if ($siswa->count() > 10)
                                                                <p class="text-blue-300 cursor-pointer " id="lihataselengkapnya"
                                                                    onclick="lihatsemua()">lihat lainya </p>
                                                                <p id="lihatSedikit" class="hidden" onclick="lihatsedikit()">
                                                                </p>
                                                                @endif
                                                                <button
                                                                    class="py-1 px-3 border font-semibold border-blue-400 bg-white text-blue-400 hover:bg-blue-400 hover:text-white"
                                                                    type="submit">kirim</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end modal --}}
                                        @empty

                                        @endforelse

                                        {{-- inspectur --}}
                                        <div class="w-full flex justify-center mb-6">

                                        </div>
                                    </div>
                                    {{-- jumat --}}
                                    <div
                                        class=" w-full h-full {{ strtolower($day) === 'friday' ? 'bg-blue-300' : 'bg-[#EAF1FF]' }} rounded-md">
                                        {{-- button edit --}}
                                        <div class="flex justify-end" data-modal-target="authentication-modal5"
                                            data-modal-toggle="authentication-modal5">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 pt-2 pr-2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </div>
                                        {{-- hari --}}
                                        <div class="text-center font-bold mt-3">
                                            Jumat
                                        </div>
                                        {{-- nama --}}
                                        @forelse ( $jumat_sore as $item)
                                            <div class="text-sm font-medium text-center mt-5">
                                                {{ $item->siswa->name }}
                                            </div>
                                            <!-- Main modal -->
                                            <div id="authentication-modal5" tabindex="-1" aria-hidden="true"
                                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative w-full max-w-md max-h-full">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <button type="button"
                                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                            data-modal-hide="authentication-modal5">
                                                            <svg aria-hidden="true" class="w-5 h-5"
                                                                fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="px-6 py-6 lg:px-8">
                                                            <h3
                                                                class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
                                                                Tambah Jadwal Piket</h3>
                                                            <form class="space-y-6" action="{{ route('rubah') }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf

                                                                <h4>Centang yang ingin di hapus</h4>
                                                                <input type="hidden" name="waktu"
                                                                    value="{{ $item->waktu }}">
                                                                <input type="hidden" name="hari"
                                                                    value="{{ $item->hari }}">
                                                                @foreach ($jumat as $item)
                                                                    <div class="flex gap-3 items-center">
                                                                        <input type="checkbox"
                                                                            name="nama_siswa_rubah[]"
                                                                            value="{{ $item->id }}"
                                                                            id="">
                                                                        <p>{{ $item->siswa->name }}</p>
                                                                    </div>
                                                                @endforeach
                                                                <h4>Centang yang ingin di tambahkan</h4>
                                                                <div class="overflow-x-hidden overflow-y-auto max-h-[400px]">

                                                                    <div class=" truncate">
                                                                        <div class="grid grid-cols-2 listSiswa" id="listSiswa"></div>
                                                                        <div class="grid grid-cols-2 listSiswaSelengkapnya" id="listSiswaSelengkapnya"></div>
                                                                    </div>

                                                                </div>
                                                                @if ($siswa->count() > 10)
                                                                <p class="text-blue-300 cursor-pointer " id="lihataselengkapnya"
                                                                    onclick="lihatsemua()">lihat lainya </p>
                                                                <p id="lihatSedikit" class="hidden" onclick="lihatsedikit()">
                                                                </p>
                                                                @endif
                                                                <button
                                                                    class="py-1 px-3 border font-semibold border-blue-400 bg-white text-blue-400 hover:bg-blue-400 hover:text-white"
                                                                    type="submit">kirim</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end modal --}}
                                        @empty

                                        @endforelse
                                        {{-- inspectur --}}
                                        <div class=" w-full flex justify-center mb-6">

                                        </div>
                                    </div>
                                </div>
                                <div class="flex grid-cols-1 mb:grid-cols-3 gap-1 w-lg mt-5" id="#pagi">
                                    {{-- catatan --}}
                                    <div class=" w-full h-30 bg-[#EAF1FF] rounded-md">

                                        {{-- button edit --}}
                                        <div class="flex justify-between pt-1">
                                            {{-- hari --}}
                                            <div class="text-left font-bold mt-0 ml-5">
                                                Catatan
                                            </div>
                                            <button data-modal-target="authentication-modalcatatt"
                                                data-modal-toggle="authentication-modalcatatt"
                                                class=" mr-1 text-sm py-1 px-2 border border-blue-400 bg-white font-medium text-blue-400 rounded-md">Tambah</button>
                                            {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 pt-2 pr-2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg> --}}
                                        </div>
                                        <!-- Main modal -->
                                        <div id="authentication-modalcatatt" tabindex="-1" aria-hidden="true"
                                            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative w-full max-w-md max-h-full">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <button type="button"
                                                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                        data-modal-hide="authentication-modalcatatt">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                    <div class="px-6 py-6 lg:px-8">
                                                        <h3
                                                            class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
                                                            Tambah Catatan</h3>
                                                        <form class="space-y-6"
                                                            action="{{ route('tambahCatatan') }}" method="post"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <textarea name="catatan" id="" cols="40" rows="5"></textarea>
                                                            <button
                                                                class="py-1 px-3 border font-semibold border-blue-400 bg-white text-blue-400 hover:bg-blue-400 hover:text-white"
                                                                type="submit">kirim</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- end modal --


                                        {{-- nama --}}
                                        @foreach ($catatan as $data)
                                            <div
                                                class="flex text-sm font-medium text-left ml-5 mt-5 mb-3 items-center justify-between">
                                                <span>{{ $data->catatan }}</span>
                                                <div class="flex items-center">
                                                    <button type="submit"
                                                        data-modal-target="authentication-modaleditt{{ $data->id }}"
                                                        data-modal-toggle="authentication-modaleditt{{ $data->id }}"
                                                        class="text-blue-400 hover:text-blue-600 cursor-pointer">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>


                                                    <form action="{{ route('piket.destroy', $data->id) }}"
                                                        method="post" id="confirm-form-{{ $data->id }}"
                                                        class="flex items-center">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" onclick="confirmDelete(event)"
                                                            class="text-red-500 hover:text-red-700 cursor-pointer"
                                                            style="margin-right: 10px; margin-left: 10px;">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                            <!-- Main modal -->
                                            <div id="authentication-modaleditt{{ $data->id }}" tabindex="-1"
                                                aria-hidden="true"
                                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative w-full max-w-md max-h-full">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <button type="button"
                                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                            data-modal-hide="authentication-modaledittt">
                                                            <svg aria-hidden="true" class="w-5 h-5"
                                                                fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="px-6 py-6 lg:px-8">
                                                            <h3
                                                                class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
                                                                Edit Catatan</h3>
                                                            <form class="space-y-6"
                                                                action="{{ route('piket.update', $data->id) }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')

                                                                <textarea name="catatan" id="" cols="40" rows="5">{{ $data->catatan }}</textarea>
                                                                <button
                                                                    class="py-1 px-3 border font-semibold border-blue-400 bg-white text-blue-400 hover:bg-blue-400 hover:text-white"
                                                                    type="submit">kirim</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end modal --}}
                                        @endforeach




                                    </div>

                                </div>
                            </div>
                            {{-- step 3 --}}
                            <div id="content3" class="card-content hidden">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4">
                                    @forelse ($laporan_piket as $data)
                                        <div class="w-full md:w-1/3 bg-white shadow-md rounded-lg">
                                            <div class="flex items-center p-4">
                                                @foreach ($siswa as $sis)
                                                    @if ($sis->name == $data->name)
                                                        <img src="{{ asset('storage/Siswa/' . $sis->foto_siswa) }}"
                                                            class="w-14 h-14 rounded-full"
                                                            alt="{{ $sis->name }}">
                                                    @endif
                                                @endforeach
                                                <div class="ml-3">
                                                    <div class="font-bold">{{ $data->name }}</div>
                                                    <div>{{ $data->created_at }}</div>
                                                </div>
                                            </div>
                                            <div class="p-4">
                                                <div class="font-bold">{{ $data->waktu }}</div>
                                                <div class="truncate mt-2">{{ $data->deskripsi }}</div>
                                                <div class="flex justify-between mt-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor"
                                                        class="w-6 h-6 text-blue-500 cursor-pointer"
                                                        data-modal-target="authentication-modal{{ $data->id }}"
                                                        data-modal-toggle="authentication-modal{{ $data->id }}">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    </svg>

                                                    <form action="{{ route('hapus/laporan/piket', $data->id) }}"
                                                        method="post" id="confirm-form-{{ $data->id }}">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" onclick="confirmDeletee(event)"
                                                            class="w-6 h-6 text-red-500 cursor-pointer">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                        <script>
                                            function confirmDeletee(event) {
                                                event.preventDefault();

                                                Swal.fire({
                                                    title: 'Konfirmasi',
                                                    text: 'Apakah Anda yakin ingin menghapus data ini?',
                                                    icon: 'warning',
                                                    showCancelButton: true,
                                                    confirmButtonColor: '#3085d6',
                                                    cancelButtonColor: '#d33',
                                                    confirmButtonText: 'Ya, terima!',
                                                    cancelButtonText: 'Batal',
                                                    background: '#f5f5f5',
                                                    customClass: {
                                                        icon: 'swal-icon',
                                                        confirmButton: 'swal-button swal-button--confirm',
                                                        cancelButton: 'swal-button swal-button--cancel'
                                                    },
                                                    animation: false
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        event.target.closest('form').submit();
                                                    }
                                                });
                                            }
                                        </script>
                                        <!-- Main modal -->
                                        <div id="authentication-modal{{ $data->id }}" tabindex="-1"
                                            aria-hidden="true"
                                            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto inset-0 md:h-auto">
                                            <div class="relative  max-w-md mx-auto">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow-md dark:bg-gray-700">
                                                    <button type="button"
                                                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                        data-modal-hide="authentication-modal{{ $data->id }}">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                    <div class="px-6 py-6 lg:px-8">
                                                        <h3
                                                            class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
                                                            Laporan Piket</h3>
                                                        <div class="text-md font-normal max-h-[60vh] overflow-auto">
                                                            <p class="font-semibold">Bukti</p>
                                                            <img src="{{ asset('storage/image/' . $data->bukti) }}"
                                                                alt="Image" class="w-full h-full">
                                                            <p class="font-semibold">Deskripsi : </p>
                                                            {{ $data->deskripsi }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>


                            <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
                            <!-- Main modal -->
                            <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-md max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button type="button"
                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                            data-modal-hide="authentication-modal">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="px-6 py-6 lg:px-8">
                                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit
                                                Piket</h3>
                                            <form class="space-y-6 mt-4" action="#">
                                                <label class="relative inline-flex items-center mb-1 cursor-pointer">
                                                    <input type="checkbox" value="" class="sr-only peer ">
                                                    <div
                                                        class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                                    </div>
                                                    <span
                                                        class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">pagi</span>
                                                </label>
                                                <div>
                                                    <label for="countries"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                                                        your
                                                        country</label>
                                                    <select id="countries"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        <option>Senin</option>
                                                        <option>Selasa</option>
                                                        <option>Rabu</option>
                                                        <option>Kamis</option>
                                                        <option>Jumat</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="password"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">inspektur
                                                    </label>
                                                    <input type="text" name="inspektur" id="password"
                                                        placeholder="inspektur"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                        required>
                                                </div>
                                                <div class="flex justify-around">
                                                    <div class="flex items-start">
                                                        <div class="flex items-center h-5">
                                                            <input id="remember" type="checkbox" value=""
                                                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                                                                required>
                                                        </div>
                                                        <label for="remember"
                                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember
                                                            me</label>
                                                    </div>
                                                    <div class="flex items-start">
                                                        <div class="flex items-center h-5">
                                                            <input id="remember" type="checkbox" value=""
                                                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                                                                required>
                                                        </div>
                                                        <label for="remember"
                                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember
                                                            me</label>
                                                    </div>

                                                </div>
                                                <div class="flex justify-around">
                                                    <div class="flex items-start">
                                                        <div class="flex items-center h-5">
                                                            <input id="remember" type="checkbox" value=""
                                                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                                                                required>
                                                        </div>
                                                        <label for="remember"
                                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember
                                                            me</label>
                                                    </div>
                                                    <div class="flex items-start">
                                                        <div class="flex items-center h-5">
                                                            <input id="remember" type="checkbox" value=""
                                                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                                                                required>
                                                        </div>
                                                        <label for="remember"
                                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember
                                                            me</label>
                                                    </div>

                                                </div>


                                                <!-- Modal footer -->
                                                <div
                                                    class="flex items-end justify-end p-1 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                    <button data-modal-hide="defaultModal" type="button"
                                                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                                                    <button data-modal-hide="defaultModal" type="button"
                                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">submit</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>



                            <script>
                                // JavaScript
                                document.addEventListener("DOMContentLoaded", function() {
                                    const buttons = document.querySelectorAll('#button');
                                    const cardContents = document.querySelectorAll('.card-content');

                                    // Semua konten disembunyikan
                                    cardContents.forEach(content => {
                                        content.style.display = 'none';
                                    });

                                    // Konten pertama ditampilkan
                                    cardContents[0].style.display = 'block';

                                    buttons.forEach((button, index) => {
                                        button.addEventListener('click', () => {
                                            // Semua konten disembunyikan
                                            cardContents.forEach(content => {
                                                content.style.display = 'none';
                                            });

                                            // Konten yang sesuai ditampilkan
                                            cardContents[index].style.display = 'block';
                                        });
                                    });
                                });
                            </script>
                            <script>
                                function lihatsemua() {
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                    $.ajax({
                                        url: "{{ route('cari_siswa') }}",
                                        method: 'GET',
                                        success: function(response) {
                                            // alert(response);
                                            console.log(response);
                                            $('#listSiswaSelengkapnya').empty();
                                            $.each(response.siswa, function(index, item) {
                                                // alert(item.id);
                                                let elemen =
                                                    `    <div class="flex gap-3 items-center t">
                                                                            <input type="checkbox" name="nama_siswa[]"
                                                                                value="${item.id}"
                                                                                id="">
                                                                            <p class="truncate">${item.name}</p>
                                                                        </div>`
                                                $('#listSiswaSelengkapnya').append(elemen);

                                                // console.log("Harga : ", el.harga);
                                            });
                                        }
                                    })
                                }
                            </script>
                            <script>
                                $(document).ready(function() {
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                    $.ajax({
                                        url: "{{ route('List/Siswa') }}",
                                        method: 'get',
                                        success: function(response) {
                                            // alert(response);
                                            console.log(response);
                                            $('.listSiswa').empty();
                                            $.each(response.siswa, function(index, item) {
                                                // alert(item.id);
                                                let elemen =
                                                    `    <div class="flex gap-3 items-center t">
                                                                            <input type="checkbox" name="nama_siswa[]"
                                                                                value="${item.id}"
                                                                                id="">
                                                                            <p class="truncate">${item.name}</p>
                                                                        </div>`
                                                $('.listSiswa').append(elemen);
                                                // console.log("Harga : ", el.harga);
                                            });
                                        }
                                    })
                                })
                            </script>
                            <script>
                                $(document).ready(function () {
                                    $('#lihataselengkapnya').click(function () {
                                        // Hide the element with ID lihataselengkapnya
                                        $(this).addClass('hidden');
                                        // Show the element with ID lihatSedikit
                                        console.log($('#lihatSedikit'));
                                        $('#lihatSedikit').removeClass('hidden');
                                    });

                                    $('#lihatSedikit').click(function () {
                                        // Hide the element with ID lihatSedikit
                                        $(this).addClass('hidden');
                                        // Show the element with ID lihataselengkapnya
                                        $('#lihataselengkapnya').removeClass('hidden');
                                    });
                                });
                            </script>



</body>

</html>
