<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/admin/assets/images/Logo.png" rel="shortcut icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.33/moment-timezone-with-data.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"
        crossorigin="anonymous"></script>


    <style>
        /* Menyembunyikan tombol cetak saat mencetak */
        @media print {
            .kamu-tak-diajak {
                display: none;
            }

            .print-container {
                position: absolute;
                overflow: hidden;
                top: 20px;
                left: 0;
            }
        }


        .button_pdf:hover {
            background-color: red;
        }

        .button_print:hover {
            background-color: blue;
        }

        .button_izin:hover {
            background-color: #f5e50c;
        }

        .button_absen:hover {
            background-color: #02e802;
            color: white;
        }
    </style>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body onload="disableButtonIfFar()"> @php
    use Carbon\Carbon;
@endphp
    <div class="mt-3 ml-4 font-bold">Data Absensi</div>
    <div class="kamu-tak-diajak flex justify-between  px-5 gap-2">
        <div class="mb-5 flex flex-wrap gap-1 mt-5 items-center">
            <a href="/absensi_pdf">
                <button class="button_pdf bg-blue-400 flex border  p-2 text-white font-semibold rounded-lg ">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ltr:mr-2 rtl:ml-2">
                        <path
                            d="M15.3929 4.05365L14.8912 4.61112L15.3929 4.05365ZM19.3517 7.61654L18.85 8.17402L19.3517 7.61654ZM21.654 10.1541L20.9689 10.4592V10.4592L21.654 10.1541ZM3.17157 20.8284L3.7019 20.2981H3.7019L3.17157 20.8284ZM20.8284 20.8284L20.2981 20.2981L20.2981 20.2981L20.8284 20.8284ZM14 21.25H10V22.75H14V21.25ZM2.75 14V10H1.25V14H2.75ZM21.25 13.5629V14H22.75V13.5629H21.25ZM14.8912 4.61112L18.85 8.17402L19.8534 7.05907L15.8947 3.49618L14.8912 4.61112ZM22.75 13.5629C22.75 11.8745 22.7651 10.8055 22.3391 9.84897L20.9689 10.4592C21.2349 11.0565 21.25 11.742 21.25 13.5629H22.75ZM18.85 8.17402C20.2034 9.3921 20.7029 9.86199 20.9689 10.4592L22.3391 9.84897C21.9131 8.89241 21.1084 8.18853 19.8534 7.05907L18.85 8.17402ZM10.0298 2.75C11.6116 2.75 12.2085 2.76158 12.7405 2.96573L13.2779 1.5653C12.4261 1.23842 11.498 1.25 10.0298 1.25V2.75ZM15.8947 3.49618C14.8087 2.51878 14.1297 1.89214 13.2779 1.5653L12.7405 2.96573C13.2727 3.16993 13.7215 3.55836 14.8912 4.61112L15.8947 3.49618ZM10 21.25C8.09318 21.25 6.73851 21.2484 5.71085 21.1102C4.70476 20.975 4.12511 20.7213 3.7019 20.2981L2.64124 21.3588C3.38961 22.1071 4.33855 22.4392 5.51098 22.5969C6.66182 22.7516 8.13558 22.75 10 22.75V21.25ZM1.25 14C1.25 15.8644 1.24841 17.3382 1.40313 18.489C1.56076 19.6614 1.89288 20.6104 2.64124 21.3588L3.7019 20.2981C3.27869 19.8749 3.02502 19.2952 2.88976 18.2892C2.75159 17.2615 2.75 15.9068 2.75 14H1.25ZM14 22.75C15.8644 22.75 17.3382 22.7516 18.489 22.5969C19.6614 22.4392 20.6104 22.1071 21.3588 21.3588L20.2981 20.2981C19.8749 20.7213 19.2952 20.975 18.2892 21.1102C17.2615 21.2484 15.9068 21.25 14 21.25V22.75ZM21.25 14C21.25 15.9068 21.2484 17.2615 21.1102 18.2892C20.975 19.2952 20.7213 19.8749 20.2981 20.2981L21.3588 21.3588C22.1071 20.6104 22.4392 19.6614 22.5969 18.489C22.7516 17.3382 22.75 15.8644 22.75 14H21.25ZM2.75 10C2.75 8.09318 2.75159 6.73851 2.88976 5.71085C3.02502 4.70476 3.27869 4.12511 3.7019 3.7019L2.64124 2.64124C1.89288 3.38961 1.56076 4.33855 1.40313 5.51098C1.24841 6.66182 1.25 8.13558 1.25 10H2.75ZM10.0298 1.25C8.15538 1.25 6.67442 1.24842 5.51887 1.40307C4.34232 1.56054 3.39019 1.8923 2.64124 2.64124L3.7019 3.7019C4.12453 3.27928 4.70596 3.02525 5.71785 2.88982C6.75075 2.75158 8.11311 2.75 10.0298 2.75V1.25Z"
                            fill="currentColor" />
                        <path opacity="0.5"
                            d="M13 2.5V5C13 7.35702 13 8.53553 13.7322 9.26777C14.4645 10 15.643 10 18 10H22"
                            stroke="currentColor" stroke-width="1.5" />
                    </svg>
                    PDF
                </button>
            </a>
            <button id="printButton" onclick="printPage()"
                class="button_print bg-blue-400 flex border  p-2 text-white font-semibold rounded-lg "
                @click="printTable">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 ltr:mr-2 rtl:ml-2">
                    <path
                        d="M6 17.9827C4.44655 17.9359 3.51998 17.7626 2.87868 17.1213C2 16.2426 2 14.8284 2 12C2 9.17157 2 7.75736 2.87868 6.87868C3.75736 6 5.17157 6 8 6H16C18.8284 6 20.2426 6 21.1213 6.87868C22 7.75736 22 9.17157 22 12C22 14.8284 22 16.2426 21.1213 17.1213C20.48 17.7626 19.5535 17.9359 18 17.9827"
                        stroke="currentColor" stroke-width="1.5" />
                    <path opacity="0.5" d="M9 10H6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    <path d="M19 14L5 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    <path
                        d="M18 14V16C18 18.8284 18 20.2426 17.1213 21.1213C16.2426 22 14.8284 22 12 22C9.17157 22 7.75736 22 6.87868 21.1213C6 20.2426 6 18.8284 6 16V14"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    <path opacity="0.5"
                        d="M17.9827 6C17.9359 4.44655 17.7626 3.51998 17.1213 2.87868C16.2427 2 14.8284 2 12 2C9.17158 2 7.75737 2 6.87869 2.87868C6.23739 3.51998 6.06414 4.44655 6.01733 6"
                        stroke="currentColor" stroke-width="1.5" />
                    <circle opacity="0.5" cx="17" cy="10" r="1" fill="currentColor" />
                    <path opacity="0.5" d="M15 16.5H9" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" />
                    <path opacity="0.5" d="M13 19H9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                </svg>
                PRINT
            </button>
            @if (auth()->user()->Siswa->role == 'siswa')
                <button data-modal-target="staticModal" data-modal-toggle="staticModal"
                    class="button_izin bg-blue-400 flex border hover:border-blue-400 p-2 text-white font-semibold rounded-lg ">Tambah
                    Izin</button>
                    <form action="{{ route('absensi_siswa.store') }}" method="post" id="absenform">
                        @csrf
                        <button type="button" class="button_absen border border-green-500 px-3 py-2 rounded-lg text-green-500 font-bold" id="btnabsen">Absen</button>
                    </form>
                    
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
                    <script>
                        document.getElementById("btnabsen").addEventListener("click", function(event) {
                            event.preventDefault(); // Mencegah perilaku default tombol submit
                    
                            // Mendapatkan lokasi pengguna
                            navigator.geolocation.getCurrentPosition(function(position) {
                                var userLatitude = position.coords.latitude;
                                var userLongitude = position.coords.longitude;
                    
                                // Lokasi yang ditentukan
                                var targetLatitude = -7.8489484;
                                var targetLongitude = 113.3768192;
                    
                                // Menghitung jarak antara lokasi pengguna dan lokasi yang ditentukan (dalam meter)
                                var distance = getDistance(userLatitude, userLongitude, targetLatitude, targetLongitude);
                    
                                // Jarak maksimal (dalam meter) di mana sweet alert akan muncul
                                var maxDistance = 5000;
                    
                                // Menampilkan sweet alert jika jarak melebihi batas maksimal
                                if (distance > maxDistance) {
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'Absensi Diluar Area Kantor',
                                        text: 'Silahkan melakukan absensi di area sekitar kantor.',
                                        confirmButtonText: 'OK'
                                    });
                                } else {
                                    // Jika jarak dalam batas maksimal, kirim form absensi
                                    document.getElementById("absenform").submit();
                                }
                            });
                        });
                    
                        // Menghitung jarak antara dua titik koordinat menggunakan Haversine formula
                        function getDistance(lat1, lon1, lat2, lon2) {
                            var R = 6371; // Radius bumi dalam kilometer
                            var dLat = toRadians(lat2 - lat1);
                            var dLon = toRadians(lon2 - lon1);
                            var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                                Math.cos(toRadians(lat1)) * Math.cos(toRadians(lat2)) *
                                Math.sin(dLon / 2) * Math.sin(dLon / 2);
                            var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
                            var distance = R * c * 1000; // Mengonversi ke meter
                            return distance;
                        }
                    
                        // Mengonversi sudut dalam derajat menjadi radian
                        function toRadians(degrees) {
                            return degrees * (Math.PI / 180);
                        }
                    </script>
            @endif
        </div>
        <div>
            @if (session()->has('error'))
                <script>
                    toastr.error("{{ session('error') }}")
                </script>
            @endif
        </div>
        {{-- serch dan filter --}}
        <div class="flex justify-end items-center ">
            {{-- serch --}}
            <div class="mr-4 ">

            </div>
            {{-- filter --}}
            {{--  <div class="border-2 rounded-full border-gray-400 flex items-center mr-2 ">
                <span class="mr-1 ml-3">
                    filter
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class=" mr-3 w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
                </svg>
            </div>  --}}
        </div>
    </div>
    <style>
        @media (min-width: 780px) {
            .box {
                display: flex;
            }

            .w-penuh {
                width: 20%;
            }

            .w-penuh-1 {
                width: 80%;
            }
        }
    </style>

    <div class="box mt-3 grid-col-2 p-2  gap-2">
        <div class="w-penuh-1  panel ">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>

                            <th scope="col" class="px-6 py-3">
                                #
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Izin
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Hadir
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Sakit
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Telat
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Alfa
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @forelse ($terima as $absen)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $no++ }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $absen->Siswa->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ Carbon::parse($absen->tanggal)->format('d F Y') }}
                                </td>
                                <td class="px-6 py-4">
                                    @if ($absen->keterangan === 'izin')
                                        <i class="fa fa-check px-1" style="font-size:20px"></i>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    @if ($absen->keterangan === 'Hadir')
                                        <i class="fa fa-check px-1" style="font-size:20px"></i>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    @if ($absen->keterangan === 'sakit')
                                        <i class="fa fa-check px-1" style="font-size:20px"></i>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    @if ($absen->keterangan === 'telat')
                                        <i class="fa fa-check px-1" style="font-size:20px"></i>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    @if ($absen->keterangan === 'Alfa')
                                        <i class="fa fa-check px-1" style="font-size:20px"></i>
                                    @endif
                                </td>
                                <td>
                                    @if ($absen->keterangan === 'Sakit' or $absen->keterangan === 'izin')
                                        <button data-modal-target="staticModal3{{ $absen->id }}"
                                            data-modal-toggle="staticModal3{{ $absen->id }}"
                                            class="btn btn-outline-info px-4"><i class="fa fa-eye"></i></button>
                                    @else
                                        <button data-modal-target="staticModal1{{ $absen->id }}"
                                            data-modal-toggle="staticModal1{{ $absen->id }}"
                                            class="btn btn-outline-info px-4"><i class="fa fa-eye"></i></button>
                                    @endif

                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="p-8 text-center">
                                    <div class="flex justify-center items-center">
                                        <img src="/admin/noData.png" alt="" width="280px">
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="kamu-tak-diajak mt-3">{{ $terima->onEachSide(0)->links() }}</div>
            </div>

        </div>

        <div class="grid  panel w-penuh mb:w-1/4 kamu-tak-diajak">
            <div class="w-full p-2 flex justify-center">
                <div class="panel w-10/12">
                    <span class="font-bold flex justify-between">
                        <p>{{ $all }}</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                        </svg>
                    </span>
                    <span>total</span>
                </div>
            </div>
            <div class="w-full p-2 flex justify-center">
                <div class="panel w-10/12">
                    <span class="font-bold flex justify-between">
                        <p>{{ $hadir }}</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                        </svg>
                    </span>
                    <span>Hadir</span>
                </div>
            </div>
            <div class="w-full p-2 flex justify-center">
                <div class="panel w-10/12">
                    <span class="font-bold flex justify-between">
                        <p>{{ $izinsakit }}</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                        </svg>
                    </span>
                    <span>Sakit & Izin</span>
                </div>
            </div>

            <div class="w-full p-2 flex justify-center">
                <div class="panel w-10/12">
                    <span class="font-bold flex justify-between">
                        <p>{{ $telat }}</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                        </svg>
                    </span>
                    <span>Telat</span>
                </div>
            </div>
            <div class="w-full p-2 flex justify-center">
                <div class="panel w-10/12">
                    <span class="font-bold flex justify-between">
                        <p>{{ $alfa }}</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                        </svg>
                    </span>
                    <span>Alfa</span>
                </div>
            </div>


        </div>
    </div>
    {{-- modal --}}
    <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="kamu-tak-diajak fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Tambah Izin
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="staticModal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('approvalizin.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="p-6 space-y-6">
                        <input type="hidden" name="nama" value="{{ Auth::user()->name }}">
                        <input type="hidden" name="sekolah" value="{{ Auth::user()->sekolah }}">
                        <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                        <input type="hidden" name="foto" value="{{ Auth::user()->id }}">
                        <div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="date" name="dari" id="floating_email"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " required />
                                <label for="floating_email"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Dari</label>
                            </div>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="date" name="sampai" id="floating_email"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="floating_email"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Sampai</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="deskripsi" id="floating_email"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="floating_email"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Deskripsi</label>
                        </div>
                        <div class="mt-4">
                            <label for="sekolah" class="block text-gray-700 font-medium mb-2">keterangan</label>
                            <div class="flex items-center mb-4">
                                <input id="disabled-radio-1" type="radio" value="izin" name="keterangan"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="disabled-radio-1"
                                    class="ml-2 text-sm font-medium text-gray-400 dark:text-gray-500">Izin</label>
                            </div>
                            <div class="flex items-center">
                                <input id="disabled-radio-2" type="radio" value="sakit" name="keterangan"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="disabled-radio-2"
                                    class="ml-2 text-sm font-medium text-gray-400 dark:text-gray-500">Sakit</label>
                            </div>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="file" required name="bukti" id="floating_email"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="floating_email"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Bukti</label>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div
                        class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="staticModal" type="button"
                            class="text-gray-700  bg-white border border-gray-700 hover:text-white hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kembali</button>
                        <button type="submit"
                            class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @forelse ($terima as  $absen)
        <div id="staticModal1{{ $absen->id }}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="kamu-tak-diajak fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Detail Absen
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="staticModal1{{ $absen->id }}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <p
                                class="py-2.5 px-0 w-full text-sm text-gray-900 border-0 border-gray-300 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 uppercase">
                                {{ $absen->Siswa->name }}</p>
                            <label for="floating_email"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] capitalize">Nama</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <p
                                class="py-2.5 px-0 w-full text-sm text-gray-900 border-0 border-gray-300 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 uppercase">
                                {{ $absen->Siswa->sekolah }}</p>
                            <label for="floating_email"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] capitalize">sekolah</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <p
                                class="py-2.5 px-0 w-full text-sm text-gray-900 border-0 border-gray-300 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 uppercase">
                                {{ $absen->keterangan }}</p>
                            <label for="floating_email"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] capitalize">keterangan</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <p
                                class="py-2.5 px-0 w-full text-sm text-gray-900 border-0 border-gray-300 dark:text-white dark:border-gray-600 dark:focus:border-blue-500  uppercase">
                                {{ Carbon::parse($absen->tanggal)->format('d F Y') }}</p>
                            <label for="floating_email"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] capitalize">tanggal</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <p
                                class="py-2.5 px-0 w-full text-sm text-gray-900 border-0 border-gray-300 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 uppercase">
                                {{ $absen->jam }}</p>
                            <label for="floating_email"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] capitalize">jam</label>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    {{--  <div
                        class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <a href="{{ route('absensi_siswa.index') }}" data-modal-hide="staticModal"
                            class="text-gray-700  bg-white border border-gray-700 hover:text-white hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kembali</a>
                    </div>  --}}
                </div>
            </div>
        </div>
    @empty
    @endforelse

    {{--  modal2  --}}
    @forelse ($terima as  $absen)
        <div id="staticModal3{{ $absen->id }}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="kamu-tak-diajak fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Detail Absen sakit
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="staticModal3{{ $absen->id }}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form action="{{ route('izin_update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="p-6 space-y-6">
                            <svg class="fill-black dark:fill-white" xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 512 512">
                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"
                                    id="btneditizin" onclick="editizin({{ $absen->id }})"
                                    data-id="{{ $absen->izin }}">
                            </svg>
                            <div class="relative z-0 w-full mb-6 group">
                                <p
                                    class="py-2.5 px-0 w-full text-sm text-gray-900 border-0 border-gray-300 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 uppercase">
                                    {{ $absen->Siswa->name }}</p>
                                <label for="floating_email"
                                    class="absolute text-sm text-gray-500 dark:text-gray-400 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] capitalize">Nama</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <p
                                    class="py-2.5 px-0 w-full text-sm text-gray-900 border-0 border-gray-300 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 uppercase">
                                    {{ $absen->Siswa->sekolah }}</p>
                                <label for="floating_email"
                                    class="absolute text-sm text-gray-500 dark:text-gray-400 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] capitalize">sekolah</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <p
                                    class="py-2.5 px-0 w-full text-sm text-gray-900 border-0 border-gray-300 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 uppercase">
                                    {{ $absen->dari }}</p>
                                <label for="floating_email"
                                    class="absolute text-sm text-gray-500 dark:text-gray-400 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] capitalize">dari</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <p
                                    class="py-2.5 px-0 w-full text-sm text-gray-900 border-0 border-gray-300 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 uppercase">
                                    {{ $absen->sampai }}</p>
                                <label for="floating_email"
                                    class="absolute text-sm text-gray-500 dark:text-gray-400 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] capitalize">sampai</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <p
                                    class="py-2.5 px-0 w-full text-sm text-gray-900 border-0 border-gray-300 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 uppercase">
                                    {{ $absen->keterangan }}</p>
                                <label for="floating_email"
                                    class="absolute text-sm text-gray-500 dark:text-gray-400 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] capitalize">keterangan</label>
                            </div>
                            <div id="inputdeskripsi{{ $absen->id }}" class="hidden">
                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="text" name="deskripsi" id="floating_email"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " required value="{{ $absen->deskripsi }}" />
                                    <label for="floating_email"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Deskripsi</label>
                                </div>
                            </div>
                            <div id="inputdeskripsiold{{ $absen->id }}" class="relative z-0 w-full mb-6 group">
                                <p
                                    class="py-2.5 px-0 w-full text-sm text-gray-900 border-0 border-gray-300 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 uppercase">
                                    {{ $absen->deskripsi }}</p>
                                <label for="floating_email"
                                    class="absolute text-sm text-gray-500 dark:text-gray-400 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] capitalize">deskripsi</label>
                            </div>
                            <div id="inputbukti{{ $absen->id }}" class="hidden">
                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="file" name="bukti" id="floating_email"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
                                    <label for="floating_email"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Edit
                                        bukti</label>
                                </div>
                            </div>
                            <div id="inputbuktiold{{ $absen->id }}" class="relative z-0 w-full mb-6 group">
                                <img src="{{ asset('storage/bukti_izin/' . $absen->bukti) }}" alt=""
                                    srcset="" class="w-full">
                                <label for="floating_email"
                                    class="absolute text-sm text-gray-500 dark:text-gray-400 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] capitalize">Bukti</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <p
                                    class="py-2.5 px-0 w-full text-sm text-gray-900 border-0 border-gray-300 dark:text-white dark:border-gray-600 dark:focus:border-blue-500  uppercase">
                                    {{ Carbon::parse($absen->tanggal)->format('d M Y') }}</p>
                                <label for="floating_email"
                                    class="absolute text-sm text-gray-500 dark:text-gray-400 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] capitalize">tanggal</label>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div
                            class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">

                            <button data-modal-hide="" id="btnsimpan{{ $absen->id }}" type="submit"
                                class="hidden text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @empty
    @endforelse

    @forelse ($terima as $absen)
        <div id="staticModal{{ $absen->id }}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="kamu-tak-diajak fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full shadow">
            <div class="relative w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Edit izin
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="staticModal{{ $absen->id }}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form action="{{ route('izin_update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="nama" value="{{ $absen->Siswa->name }}">
                        <input type="hidden" name="sekolah" value="{{ $absen->Siswa->sekolah }}">
                        <input type="hidden" name="email" value="{{ $absen->Siswa->email }}">
                        <input type="hidden" name="dari" value="{{ $absen->dari }}">
                        <input type="hidden" name="sampai" value="{{ $absen->sampai }}">
                        <input type="hidden" name="keterangan" value="{{ $absen->keterangan }}">
                        <div class="p-6 space-y-6">
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="deskripsi" id="floating_email"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " required value="{{ $absen->deskripsi }}" />
                                <label for="floating_email"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Deskripsi</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="file" name="bukti" id="floating_email"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
                                <label for="floating_email"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Bukti</label>
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div
                            class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="staticModal66"
                                class="dark:text-white text-gray-700  bg-white border border-gray-700 hover:text-white hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kembali</button>
                            <button data-modal-hide="staticModal66" type="submit"
                                class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @empty
    @endforelse
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        document.getElementById('confirm-button').addEventListener('click', function(e) {
            e.preventDefault();


            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: 'tunggu konfirmasi izin anda dari admin',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, konfirmasi!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('confirm-form').submit();
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            console.log("Absen");
            console.log("Absen : {{ $cek_sudah_absen }}")
            if ('{{ $cek_sudah_absen }}' == 1) {
                // alert('Anis')
                $('#absenform').removeAttr('action');
                $('#btnabsen').attr('type', 'button');
                $('#btnabsen').click(function() {
                    toastr.error('Anda sudah absen');
                })
            }
            $('#waktu').datetimepicker({
                format: 'HH:mm',
                timeZone: 'Asia/Jakarta',
                useCurrent: false
            });
        });
    </script>
    <script>
        // Fungsi untuk mencetak halaman
        function printPage() {
            window.print();
        }

        function editizin(id) {
            $('#inputbukti' + id).removeClass('hidden');
            $('#inputdeskripsi' + id).removeClass('hidden');
            $('#btnsimpan' + id).removeClass('hidden');
            $('#btnbatal' + id).removeClass('hidden');
            $('#inputdeskripsiold' + id).addClass('hidden');
            // $('#inputbuktiold' + id).addClass('hidden');
        }
    </script>
    <script></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</body>

</html>
