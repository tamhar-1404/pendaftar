<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css"  rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('admin/assets/css/perfect-scrollbar.min.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('admin/assets/css/style.css') }}" />
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <link defer rel="stylesheet" type="text/css" media="screen" href="{{ asset('admin/assets/css/animate.css') }}" />

    <script src="{{ asset('admin/assets/js/perfect-scrollbar.min.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/tippy-bundle.umd.min.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/sweetalert.min.js') }}"></script>

</head>
<body>
    <header class="shadow-sm w-full h-12 z-10 fixed">
        <nav class=" w-full bg-white flex  justify-between p-4">
            {{-- logo --}}
            <div class="flex items-start ">
                <img src="admin/assets/images/humma.png" class="w-1/12 " alt="logo" srcset="">
            </div>
            {{-- profil --}}
            <div class="flex items-end justify-end gap-5 ">
                <div class=" ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
                    </svg>
                </div>
                <div class="bg-balck rounded-full ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                    </svg>
                </div>
                <div class="w-6 h-6 rounded-full">
                    <img src="admin/assets/images/profile-1.jpeg" class=" rounded-full" alt="" srcset="">
                </div>
            </div>

        </nav>
        <nav class=" w-full  bg-white flex items-center gap-10  p-4">
            {{-- dashboard --}}
            <button class=" active flex gap-1 items-center text-gray-900 bg-white focus:outline-none hover:bg-[#24AEE4] hover:text-white focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2 mr-2  my-2 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                <span class="font-semibold text-sm">Beranda</span>
            </button>
            {{-- jurnal --}}
            <button class="flex gap-1 items-center text-gray-900 bg-white focus:outline-none hover:bg-[#24AEE4] hover:text-white focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2 mr-2  my-2 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0120.25 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6A2.25 2.25 0 016 3.75h1.5m9 0h-9" />
                </svg>
                <span class="font-semibold text-sm">Jurnal</span>
            </button>
            {{-- absensi --}}
            <button class="flex gap-1 items-center text-gray-900 bg-white focus:outline-none hover:bg-[#24AEE4] hover:text-white focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2 mr-2  my-2 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                </svg>
                <span class="font-semibold text-sm">Absensi</span>
            </button>
            {{-- berita --}}
            <button class="flex gap-1 items-center text-gray-900 bg-white focus:outline-none hover:bg-[#24AEE4] hover:text-white focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2 mr-2  my-2 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                </svg>
                <span class="font-semibold text-sm">Berita</span>
            </button>
            {{-- lainya --}}
            <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="flex gap-1 items-center text-gray-900 bg-white focus:outline-none hover:bg-[#24AEE4] hover:text-white  focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2 mr-2  my-2 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z" />
                </svg>
                <span class="font-semibold text-sm">Lainya</span>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tata tertib</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Jadwal Piket</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Chat</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Siswa</a>
                </li>
                </ul>
            </div>



        </nav>
    </header>

    <div class="animate__animated p-6" :class="[$store.app.animation]">
        <!-- start main content section -->

        <div x-data="basic" class="mt-40">
            {{-- judul --}}
            <div class="mb-5 font-semibold">
                <span>Jurnal / <span class="text-[#00B7FF]"></span></span>
            </div>
            <div class="panel">

                <div class="flex justify-between items-center">
                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="flex gap-2 h-10 items-center  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" @click="exportTable('json')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                          </svg>

                        Tambah
                    </button>

                    {{-- modal --}}
                    <form action="{{route('jurnalsiswa.store')}}" method="post">
                        @csrf
                    <!-- Main modal -->
                    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="px-6 py-6 lg:px-8">
                                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Jurnal</h3>
                                    <form class="space-y-6" action="#">
                                        <div>
                                            <label for="kegiatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kegiatan</label>
                                            <textarea name="kegiatan" class=" rounded-md" placeholder="kegiatan yang kamu lakukan" id="" cols="45" rows="5"></textarea>
                                        </div>
                                        <div>
                                            <label for="bukti" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bukti</label>
                                            <input type="file" name="bukti" id="" placeholder="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                        </div>
                                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-extrabold rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end modal --}}
                  </form>
                    <div class="mb-5 flex flex-wrap  mt-5 items-center">
                         {{-- serch dan filter --}}
                    <div class="flex justify-start items-center">
                        {{-- serch --}}
                        <div class="mr-4 ">
                            <input class=" w-24 p-1 border-2 border-gray-400 rounded-xl outline-1 outline-gray-400 dark:bg-transparent" type="text" placeholder="cari">
                        </div>
                         {{-- filter --}}
                         <div class="border-2 rounded-full border-gray-400 flex items-center p-1 mr-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="  w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
                            </svg>
                        </div>
                    </div>
                        <button  class="flex gap-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" @click="exportTable('csv')">
                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 ltr:mr-2 rtl:ml-2"
                            >
                                <path
                                    d="M15.3929 4.05365L14.8912 4.61112L15.3929 4.05365ZM19.3517 7.61654L18.85 8.17402L19.3517 7.61654ZM21.654 10.1541L20.9689 10.4592V10.4592L21.654 10.1541ZM3.17157 20.8284L3.7019 20.2981H3.7019L3.17157 20.8284ZM20.8284 20.8284L20.2981 20.2981L20.2981 20.2981L20.8284 20.8284ZM14 21.25H10V22.75H14V21.25ZM2.75 14V10H1.25V14H2.75ZM21.25 13.5629V14H22.75V13.5629H21.25ZM14.8912 4.61112L18.85 8.17402L19.8534 7.05907L15.8947 3.49618L14.8912 4.61112ZM22.75 13.5629C22.75 11.8745 22.7651 10.8055 22.3391 9.84897L20.9689 10.4592C21.2349 11.0565 21.25 11.742 21.25 13.5629H22.75ZM18.85 8.17402C20.2034 9.3921 20.7029 9.86199 20.9689 10.4592L22.3391 9.84897C21.9131 8.89241 21.1084 8.18853 19.8534 7.05907L18.85 8.17402ZM10.0298 2.75C11.6116 2.75 12.2085 2.76158 12.7405 2.96573L13.2779 1.5653C12.4261 1.23842 11.498 1.25 10.0298 1.25V2.75ZM15.8947 3.49618C14.8087 2.51878 14.1297 1.89214 13.2779 1.5653L12.7405 2.96573C13.2727 3.16993 13.7215 3.55836 14.8912 4.61112L15.8947 3.49618ZM10 21.25C8.09318 21.25 6.73851 21.2484 5.71085 21.1102C4.70476 20.975 4.12511 20.7213 3.7019 20.2981L2.64124 21.3588C3.38961 22.1071 4.33855 22.4392 5.51098 22.5969C6.66182 22.7516 8.13558 22.75 10 22.75V21.25ZM1.25 14C1.25 15.8644 1.24841 17.3382 1.40313 18.489C1.56076 19.6614 1.89288 20.6104 2.64124 21.3588L3.7019 20.2981C3.27869 19.8749 3.02502 19.2952 2.88976 18.2892C2.75159 17.2615 2.75 15.9068 2.75 14H1.25ZM14 22.75C15.8644 22.75 17.3382 22.7516 18.489 22.5969C19.6614 22.4392 20.6104 22.1071 21.3588 21.3588L20.2981 20.2981C19.8749 20.7213 19.2952 20.975 18.2892 21.1102C17.2615 21.2484 15.9068 21.25 14 21.25V22.75ZM21.25 14C21.25 15.9068 21.2484 17.2615 21.1102 18.2892C20.975 19.2952 20.7213 19.8749 20.2981 20.2981L21.3588 21.3588C22.1071 20.6104 22.4392 19.6614 22.5969 18.489C22.7516 17.3382 22.75 15.8644 22.75 14H21.25ZM2.75 10C2.75 8.09318 2.75159 6.73851 2.88976 5.71085C3.02502 4.70476 3.27869 4.12511 3.7019 3.7019L2.64124 2.64124C1.89288 3.38961 1.56076 4.33855 1.40313 5.51098C1.24841 6.66182 1.25 8.13558 1.25 10H2.75ZM10.0298 1.25C8.15538 1.25 6.67442 1.24842 5.51887 1.40307C4.34232 1.56054 3.39019 1.8923 2.64124 2.64124L3.7019 3.7019C4.12453 3.27928 4.70596 3.02525 5.71785 2.88982C6.75075 2.75158 8.11311 2.75 10.0298 2.75V1.25Z"
                                    fill="currentColor"
                                />
                                <path
                                    opacity="0.5"
                                    d="M13 2.5V5C13 7.35702 13 8.53553 13.7322 9.26777C14.4645 10 15.643 10 18 10H22"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                />
                            </svg>
                            CSV
                        </button>
                        <button  class="flex gap-2  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" @click="exportTable('json')" @click="exportTable('txt')">
                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 ltr:mr-2 rtl:ml-2"
                            >
                                <path
                                    d="M15.3929 4.05365L14.8912 4.61112L15.3929 4.05365ZM19.3517 7.61654L18.85 8.17402L19.3517 7.61654ZM21.654 10.1541L20.9689 10.4592V10.4592L21.654 10.1541ZM3.17157 20.8284L3.7019 20.2981H3.7019L3.17157 20.8284ZM20.8284 20.8284L20.2981 20.2981L20.2981 20.2981L20.8284 20.8284ZM14 21.25H10V22.75H14V21.25ZM2.75 14V10H1.25V14H2.75ZM21.25 13.5629V14H22.75V13.5629H21.25ZM14.8912 4.61112L18.85 8.17402L19.8534 7.05907L15.8947 3.49618L14.8912 4.61112ZM22.75 13.5629C22.75 11.8745 22.7651 10.8055 22.3391 9.84897L20.9689 10.4592C21.2349 11.0565 21.25 11.742 21.25 13.5629H22.75ZM18.85 8.17402C20.2034 9.3921 20.7029 9.86199 20.9689 10.4592L22.3391 9.84897C21.9131 8.89241 21.1084 8.18853 19.8534 7.05907L18.85 8.17402ZM10.0298 2.75C11.6116 2.75 12.2085 2.76158 12.7405 2.96573L13.2779 1.5653C12.4261 1.23842 11.498 1.25 10.0298 1.25V2.75ZM15.8947 3.49618C14.8087 2.51878 14.1297 1.89214 13.2779 1.5653L12.7405 2.96573C13.2727 3.16993 13.7215 3.55836 14.8912 4.61112L15.8947 3.49618ZM10 21.25C8.09318 21.25 6.73851 21.2484 5.71085 21.1102C4.70476 20.975 4.12511 20.7213 3.7019 20.2981L2.64124 21.3588C3.38961 22.1071 4.33855 22.4392 5.51098 22.5969C6.66182 22.7516 8.13558 22.75 10 22.75V21.25ZM1.25 14C1.25 15.8644 1.24841 17.3382 1.40313 18.489C1.56076 19.6614 1.89288 20.6104 2.64124 21.3588L3.7019 20.2981C3.27869 19.8749 3.02502 19.2952 2.88976 18.2892C2.75159 17.2615 2.75 15.9068 2.75 14H1.25ZM14 22.75C15.8644 22.75 17.3382 22.7516 18.489 22.5969C19.6614 22.4392 20.6104 22.1071 21.3588 21.3588L20.2981 20.2981C19.8749 20.7213 19.2952 20.975 18.2892 21.1102C17.2615 21.2484 15.9068 21.25 14 21.25V22.75ZM21.25 14C21.25 15.9068 21.2484 17.2615 21.1102 18.2892C20.975 19.2952 20.7213 19.8749 20.2981 20.2981L21.3588 21.3588C22.1071 20.6104 22.4392 19.6614 22.5969 18.489C22.7516 17.3382 22.75 15.8644 22.75 14H21.25ZM2.75 10C2.75 8.09318 2.75159 6.73851 2.88976 5.71085C3.02502 4.70476 3.27869 4.12511 3.7019 3.7019L2.64124 2.64124C1.89288 3.38961 1.56076 4.33855 1.40313 5.51098C1.24841 6.66182 1.25 8.13558 1.25 10H2.75ZM10.0298 1.25C8.15538 1.25 6.67442 1.24842 5.51887 1.40307C4.34232 1.56054 3.39019 1.8923 2.64124 2.64124L3.7019 3.7019C4.12453 3.27928 4.70596 3.02525 5.71785 2.88982C6.75075 2.75158 8.11311 2.75 10.0298 2.75V1.25Z"
                                    fill="currentColor"
                                />
                                <path opacity="0.5" d="M6 14.5H14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <path opacity="0.5" d="M6 18H11.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <path
                                    opacity="0.5"
                                    d="M13 2.5V5C13 7.35702 13 8.53553 13.7322 9.26777C14.4645 10 15.643 10 18 10H22"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                />
                            </svg>
                            TXT
                        </button>
                        <button  class="flex gap-2  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" @click="exportTable('json')" @click="printTable">
                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 ltr:mr-2 rtl:ml-2"
                            >
                                <path
                                    d="M6 17.9827C4.44655 17.9359 3.51998 17.7626 2.87868 17.1213C2 16.2426 2 14.8284 2 12C2 9.17157 2 7.75736 2.87868 6.87868C3.75736 6 5.17157 6 8 6H16C18.8284 6 20.2426 6 21.1213 6.87868C22 7.75736 22 9.17157 22 12C22 14.8284 22 16.2426 21.1213 17.1213C20.48 17.7626 19.5535 17.9359 18 17.9827"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                />
                                <path opacity="0.5" d="M9 10H6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <path d="M19 14L5 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <path
                                    d="M18 14V16C18 18.8284 18 20.2426 17.1213 21.1213C16.2426 22 14.8284 22 12 22C9.17157 22 7.75736 22 6.87868 21.1213C6 20.2426 6 18.8284 6 16V14"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                />
                                <path
                                    opacity="0.5"
                                    d="M17.9827 6C17.9359 4.44655 17.7626 3.51998 17.1213 2.87868C16.2427 2 14.8284 2 12 2C9.17158 2 7.75737 2 6.87869 2.87868C6.23739 3.51998 6.06414 4.44655 6.01733 6"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                />
                                <circle opacity="0.5" cx="17" cy="10" r="1" fill="currentColor" />
                                <path opacity="0.5" d="M15 16.5H9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <path opacity="0.5" d="M13 19H9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                            PRINT
                        </button>

                    </div>
                </div>

                {{-- tabel --}}

                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                          <table class="min-w-full text-left text-sm font-light">
                            <thead class="border-b font-medium dark:border-neutral-500 ">
                              <tr class="">
                                <th scope="col" class="px-6 py-4">#</th>
                                <th scope="col" class="px-6 py-4">Nama</th>
                                <th scope="col" class="px-6 py-4">Tanggal</th>
                                <th scope="col" class="px-6 py-4">Sekolah</th>
                                <th scope="col" class="px-6 py-4">kegiatan</th>
                                <th scope="col" class="px-6 py-4 ">bukti</th>
                                <th scope="col" class="px-6 py-4">Aksi</th>

                              </tr>
                            </thead>
                            <tbody>
                              <tr
                                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:text-black-200 ">
                                <td class="whitespace-nowrap px-4 py-4 font-medium">1</td>
                                <td class="whitespace-nowrap px-4 py-4">Mark</td>
                                <td class="whitespace-nowrap px-4 py-4">03-04-2023</td>
                                <td class="whitespace-nowrap px-4 py-4">SMKN 1 KEPANJEN</td>
                                <td class="whitespace-nowrap px-4 py-4 max-w-sm overflow-hidden truncate " >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic unde excepturi velit quibusdam consequuntur et facilis, labore veritatis debitis vitae enim libero odio soluta at cumque asperiores ea. Autem, incidunt?</td>
                                <td class="whitespace-nowrap px-6 pl-17 py-4"><img
                                    src="{{ asset('admin/assets/images/carousel2.jpeg') }}"
                                    width="100px" alt="">
                                </td>
                                <td class="whitespace-nowrap px-4 py-4">
                                    <a href="#">
                                        <div class="w-16 flex h-8 bg-white rounded-md border-2 border-[#00B7FF] justify-center items-center text-[#00B7FF] hover:bg-[#00B7FF] hover:text-white dark:bg-transparent" data-te-toggle="modal"
                                        data-modal-target="staticModal" data-modal-toggle="staticModal" ">
                                            <span class=" p-1  font-semibold dark:hover:text-black">Lihat</span>
                                        </div>
                                    </a>
                                </td>
                              </tr>
                              <tr
                                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:text-black-200 ">
                                <td class="whitespace-nowrap px-4 py-4 font-medium">2</td>
                                <td class="whitespace-nowrap px-4 py-4">Mark</td>
                                <td class="whitespace-nowrap px-4 py-4">03-04-2023</td>
                                <td class="whitespace-nowrap px-4 py-4">SMKN 1 KEPANJEN</td>
                                <td class="whitespace-nowrap px-4 py-4 max-w-sm overflow-hidden truncate " >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic unde excepturi velit quibusdam consequuntur et facilis, labore veritatis debitis vitae enim libero odio soluta at cumque asperiores ea. Autem, incidunt?</td>
                                <td class="whitespace-nowrap px-6 pl-17 py-4"><img
                                    src="{{ asset('admin/assets/images/carousel2.jpeg') }}"
                                    width="100px" alt="">
                                </td>
                                <td class="whitespace-nowrap px-4 py-4">
                                    <a href="#">
                                        <div class="w-16 flex h-8 bg-white rounded-md border-2 border-[#00B7FF] justify-center items-center text-[#00B7FF] hover:bg-[#00B7FF] hover:text-white dark:bg-transparent" data-te-toggle="modal"
                                        data-modal-target="staticModal" data-modal-toggle="staticModal" ">
                                            <span class=" p-1  font-semibold dark:hover:text-black">Lihat</span>
                                        </div>
                                    </a>
                                </td>
                              </tr>
                              <tr
                                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:text-black-200 ">
                                <td class="whitespace-nowrap px-4 py-4 font-medium">3</td>
                                <td class="whitespace-nowrap px-4 py-4">Mark</td>
                                <td class="whitespace-nowrap px-4 py-4">03-04-2023</td>
                                <td class="whitespace-nowrap px-4 py-4">SMKN 1 KEPANJEN</td>
                                <td class="whitespace-nowrap px-4 py-4 max-w-sm overflow-hidden truncate " >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic unde excepturi velit quibusdam consequuntur et facilis, labore veritatis debitis vitae enim libero odio soluta at cumque asperiores ea. Autem, incidunt?</td>
                                <td class="whitespace-nowrap px-6 pl-17 py-4"><img
                                    src="{{ asset('admin/assets/images/carousel2.jpeg') }}"
                                    width="100px" alt="">
                                </td>
                                <td class="whitespace-nowrap px-4 py-4">
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
    {{-- modal --}}
    <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                       Detail Jurnal
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <div>
                        <p class="text-base leading-relaxed font-bold  text-gray-800 dark:text-gray-400">
                            Nama
                        </p>
                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            mark
                        </p>
                    </div>
                    <div>
                        <p class="text-base leading-relaxed font-bold text-gray-800 dark:text-gray-400">
                            Tanggal
                        </p>
                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            03-04-2023
                        </p>
                    </div>
                    <div>
                        <p class="text-base leading-relaxed font-bold text-gray-800 dark:text-gray-400">
                            Sekolah
                        </p>
                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            SMKN 1 Kepanjen
                        </p>
                    </div>
                    <div>
                        <p class="text-base leading-relaxed font-bold text-gray-800 dark:text-gray-400">
                            Kegiatan
                        </p>
                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint harum optio officiis provident eos amet, eius vel corporis nam delectus fuga eligendi fugit repellendus veniam repellat illo ipsam corrupti suscipit.
                        </p>
                    </div>
                    <div>
                        <p class="text-base leading-relaxed font-bold text-gray-800 dark:text-gray-400">
                            Bukti
                        </p>
                        <img src="siswa/images/carousel2.jpeg" alt="">
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="staticModal" type="button" class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kembali</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('admin/assets/js/alpine-collaspe.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/alpine-persist.min.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/alpine-ui.min.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/alpine-focus.min.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/alpine.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/apexcharts.js') }}"></script>
    <script src="{{ asset('admin/assets/js/simple-datatables.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>

</body>
</html>
