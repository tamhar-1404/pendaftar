<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('admin/assets/css/perfect-scrollbar.min.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('admin/assets/css/style.css') }}" />
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <link defer rel="stylesheet" type="text/css" media="screen" href="{{ asset('admin/assets/css/animate.css') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css"  rel="stylesheet" />
</head>
<body>

    <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
        <div class="">
            {{-- @include('.sidebar.layout') --}}
            <div class="animate__animated p-6" :class="[$store.app.animation]">
                <!-- start main content section -->

                <div x-data="basic" class="mt-0">
                    {{-- judul --}}
                    <div class="mb-5 font-semibold">
                        <span >approval / <span class="text-[#00B7FF]">Pendaftaran</span></span>
                    </div>

                    <div class="main">
                    <div class="flex justify-end mb-5 gap-3">
                        <button class=" w-1/12 h-6 outline outline-1 outline-red-400 text-red-400 rounded-md flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                            Tolak</button>
                        <button class=" w-1/12 h-6 outline outline-1 outline-green-400 text-green-400 rounded-md flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>

                            Terima</button>
                    </div>
                    <div class="flex gap-5">
                        <div class="panel w-1/3 ">
                            <div class="flex justify-center">
                                <img src="admin/assets/images/profile-1.jpeg" class=" rounded-full" alt="" srcset="">
                            </div>
                            <div class="flex justify-center mt-8">
                                <p class="text-lg">ferdinan alex sandro</p>
                            </div>
                            <div class="flex justify-center mt-4">
                                <p class="text-sm">ferdinan@gmail.com</p>
                            </div>
                            <div class="flex justify-center mt-4">
                                <p class="text-md">SMKN 1 KEPANJEN </p>
                            </div>
                        </div>
                        <div class="panel w-2/3">
                            <div class="font-bold w-full border-b-2">Data Diri</div>
                            <div class="mt-3">
                                jenis kelamin : <span class="text-gray-400">laki - laki</span>
                            </div>
                            <div class="mt-3">
                                NISN : <span class="text-gray-400">974934838439</span>
                            </div>
                            <div class="mt-3">
                                Kelas / Jurusan : <span class="text-gray-400">11/RPL</span>
                            </div>
                            <div class="mt-3">
                                Tempat, tanggal lahir : <span class="text-gray-400">Malang, 12 juli 2005</span>
                            </div>
                            <div class="mt-3">
                                Alamat : <span class="text-gray-400">Malang Jawa Timur</span>
                            </div>
                            <div class="mt-3">
                                Masa Magang : <span class="text-gray-400">28 juni 2023 -> 28 Desember 2023</span>
                            </div>
                        </div>
                    </div>
                    <div class="panel mt-5">
                        <div class="font-bold w-full border-b-2">Berkas - Berkas</div>
                        <div class="flex justify-around">
                            <div>
                                <p>Pernyataan Diri Sendiri : </p>
                                <img src="admin/assets/images/profile-2.jpeg" alt="">
                            </div>
                            <div>
                                <p>Pernyataan Diri Sendiri : </p>
                                <img src="admin/assets/images/profile-2.jpeg" alt="">
                            </div>
                            <div>
                                <p>Pernyataan Diri Sendiri : </p>
                                <img src="admin/assets/images/profile-2.jpeg" alt="">
                            </div>
                            <div>
                                <p>Pernyataan Diri Sendiri : </p>
                                <img src="admin/assets/images/profile-2.jpeg" alt="">
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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
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
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit Piket</h3>
                        <form class="space-y-6 mt-4" action="#">
                            <label class="relative inline-flex items-center mb-1 cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer ">
                                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">pagi</span>
                            </label>
                            <div>
                                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select your country</label>
                                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                  <option>Senin</option>
                                  <option>Selasa</option>
                                  <option>Rabu</option>
                                  <option>Kamis</option>
                                  <option>Jumat</option>
                                </select>
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">inspektur    </label>
                                <input type="text" name="inspektur" id="password" placeholder="inspektur" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            </div>
                            <div class="flex justify-around">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                                    </div>
                                    <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                                    </div>
                                    <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                                </div>

                            </div>
                            <div class="flex justify-around">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                                    </div>
                                    <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                                </div>
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                                    </div>
                                    <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                                </div>

                            </div>


                            <!-- Modal footer -->
                            <div class="flex items-end justify-end p-1 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                <button data-modal-hide="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                                <button data-modal-hide="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>






</body>
</html>
