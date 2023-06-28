<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="{{ asset('admin/favicon.png') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('admin/assets/css/perfect-scrollbar.min.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('admin/assets/css/style.css') }}" />
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <link defer rel="stylesheet" type="text/css" media="screen" href="{{ asset('admin/assets/css/animate.css') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css"  rel="stylesheet" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                        <span >Approval / <span class="text-[#00B7FF]">Pendaftaran</span></span>
                    </div>

                    <div class="main">
                    <div class="flex justify-end mb-5 gap-3">
                        <button class=" w-1/12 h-6 outline outline-1 outline-red-400 text-red-400 rounded-md flex gap-2" onclick="tolak()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-1 w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                            Tolak</button>
                        <button class=" w-1/12 h-6 outline outline-1 outline-green-400 text-green-400 rounded-md flex gap-2 " id="simpan">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" ml-1 w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>

                            Terima</button>

                    </div>
                    <div class="flex gap-5">
                        <div class="panel w-1/3 ">
                            <div class="flex justify-center">
                                <img src="{{asset('admin/assets/images/profile-1.jpeg')}}" class=" rounded-full" alt="" srcset="">
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
                            <div class="mt-3 flex w-full justify-between ">
                               <span class="w-1/2"> jenis kelamin  </span> <span class="text-gray-400 w-full flex justify-start "> : laki - laki</span>
                            </div>
                            <div class="mt-3 flex w-full justify-between">
                                <span class="w-1/2"> NISN </span> <span class="text-gray-400 w-full flex justify-start">: 974934838439</span>
                            </div>
                            <div class="mt-3 flex w-full justify-between">
                               <span class="w-1/2"> Kelas / Jurusan </span>  <span class="text-gray-400 w-full flex justify-start">: 11/RPL</span>
                            </div>
                            <div class="mt-3 flex w-full justify-between">
                              <span class="w-1/2">Tempat, tanggal lahir </span>   <span class="text-gray-400 w-full flex justify-start">: Malang, 12 juli 2005</span>
                            </div>
                            <div class="mt-3 flex w-full justify-between">
                                <span class="w-1/2">Alamat </span>   <span class="text-gray-400 w-full flex justify-start">: Malang Jawa Timur</span>
                            </div>
                            <div class="mt-3 flex w-full justify-between">
                                <span class="w-1/2">  Masa Magang </span> <span class="text-gray-400 w-full flex justify-start">: 28 juni 2023 -> 28 Desember 2023</span>
                            </div>
                        </div>
                    </div>
                    <div class="panel mt-5">
                        <div class="font-bold w-full border-b-2">Berkas - Berkas</div>
                        <div class="flex justify-around">
                            <div>
                                <p class="">Pernyataan Diri Sendiri : </p>
                                <img  class="hover:scale-125  transition-all duration-200 mt-4 hover:opacity-80"  " src="{{asset('admin/assets/images/profile-2.jpeg')}}" alt="pernyataan diri sendiri">
                            </div>
                            <div>
                                <p>Pernyataan Diri Sendiri : </p>
                                <img class="hover:scale-125 transition-all duration-200 mt-4 hover:opacity-80" src="{{asset('admin/assets/images/profile-2.jpeg')}}" alt="">
                            </div>
                            <div>
                                <p>Pernyataan Diri Sendiri : </p>
                                <img class="hover:scale-125 transition-all duration-200 mt-4 hover:opacity-80"  src="{{asset('admin/assets/images/profile-2.jpeg')}}" alt="">
                            </div>
                            <div>
                                <p>Pernyataan Diri Sendiri : </p>
                                <img class="hover:scale-125 transition-all duration-200 mt-4 hover:opacity-80" src="{{asset('admin/assets/images/profile-2.jpeg')}}" alt="">
                            </div>
                        </div>

                    </div>
                    </div>


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
    <!--Verically centered scrollable modal-->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script>
        document.getElementById("simpan").addEventListener("click", function() {
          // Tampilkan Sweet Alert
          swal("Data berhasil disimpan!", {
            icon: "success",
          }).then(function() {
            // Redirect ke halaman lain
            window.location.href = "{{route('absensi_admin.create')}}";
          });
        });
      </script>

        <!-- Main modal -->
</body>

</html>
