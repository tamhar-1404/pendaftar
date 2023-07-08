    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" media="screen"
        href="{{ asset('admin/assets/css/perfect-scrollbar.min.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('admin/assets/css/style.css') }}" />
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    {{--  <link defer rel="stylesheet" type="text/css" media="screen" href="{{ asset('admin/assets/css/animate.css') }}" />  --}}
    <script src="{{ asset('admin/assets/js/perfect-scrollbar.min.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/tippy-bundle.umd.min.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/sweetalert.min.js') }}"></script>
    {{--  <!-- Javascript Assets -->  --}}
    <script src="admin/js/app.js" defer></script>
</head>

<body>
    <div class="">
        {{--  <!-- start header section -->  --}}

        {{--  <!-- end header section -->  --}}
        <div class="grid grid-cols-1 px-4 gap-2 sm:mt-10 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-5">
            <div class="rounded-lg bg-white p-5 dark:bg-navy-600 dark:bg-black"
                style="box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.25); border-radius: 8px; ">
                <div class="flex justify-between">
                    <p class="text-xl mt-1 font-semibold text-slate-700 dark:text-navy-100">
                        {{$siswa}}
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"
                            color="#1AB5F2" />
                    </svg>

                </div>
                <p class="mt-1 text-xs">Anak magang</p>
            </div>
            <div class="rounded-lg bg-white p-5 dark:bg-navy-600 dark:bg-black"
                style="box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.25); border-radius: 8px;">

                <div class="flex justify-between">
                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                        {{$guru}}
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"
                            color="#1AB5F2" />
                    </svg>

                </div>
                <p class="mt-1 text-xs">Pembimbing</p>
            </div>
            <div class="rounded-lg bg-white p-5 dark:bg-navy-600 dark:bg-black"
                style="box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.25); border-radius: 8px;">

                <div class="flex justify-between">
                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                        {{$mou}}
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819"
                            color="#1AB5F2" />
                    </svg>

                </div>
                <p class="mt-1 text-xs">MOU</p>
            </div>
            <div class="rounded-lg bg-white p-5 dark:bg-navy-600 dark:bg-black"
                style="box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.25); border-radius: 8px;">

                <div class="flex justify-between">
                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                        {{$tolak}}
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z"
                            color="#1AB5F2" />
                    </svg>

                </div>
                <p class="mt-1 text-xs">Ditolak</p>
            </div>
            <div class="rounded-lg bg-white p-5 dark:bg-navy-600 dark:bg-black"
                style="box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.25); border-radius: 8px;">

                <div class="flex justify-between">
                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                        {{$menunggu}}
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" color="#1AB5F2" />
                    </svg>

                </div>
                <p class="mt-1 text-xs">Menunggu diterima</p>
            </div>
        </div>
        {{-- grafik --}}

                <div class="hidden space-x-2 sm:flex" x-data="{activeTab:'tabYearly'}">
                </div>
            </div>

            <div class="ax-transparent-gridline mt-2 px-2">
                <div id="grafik_admin" style="width: 100%; "></div>
            </div>
        </div>
         </main>


        {{-- caraousel --}}


        <section>
            <div class="swiper mySwiper container w-full">
                <div class="swiper-wrapper content">
                    @foreach ($blog as $row)

                    <div class="swiper-slide card dark:bg-black">
                        <div class="card-content ">

                            <div class="card">
                                <img class="h-72 w-full rounded-lg object-cover object-center max-w-xs transition duration-300 ease-in-out hover:scale-110"
                                    src="{{ asset('storage/fotoberita/' . $row->foto) }}" alt="image" />
                                <div class="absolute inset-0 flex h-full w-full flex-col justify-end">
                                    <div class="absolute top-0 right-0 mt-2 mr-2">
                                        <div x-data="{ isOpen: false }">
                                            <button  @click="isOpen = !isOpen"
                                                class="btn h-7 w-7 rounded-full p-0 text-black-light hover:bg-secondary/20 focus:bg-secondary/20 active:bg-secondary/25 dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                                </svg>
                                            </button>
                                            <div x-show="isOpen" @click.away="isOpen = false"
                                                class="absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-md shadow-lg"
                                                x-cloak>
                                                <ul>
                                                    <li>
                                                        <a href="{{ route('Berita.edit', $row->id) }}"
                                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                                            @click="editItem()">Edit</a>
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('Berita.destroy', $row->id) }}" method="POST"
                                                            enctype="multipart/form-data">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit"
                                                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Hapus</button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        function editItem() {
                                            // Logika atau perintah yang akan dijalankan saat tombol "Edit" ditekan
                                            console.log("Tombol Edit ditekan");
                                        }

                                        function deleteItem() {
                                            // Logika atau perintah yang akan dijalankan saat tombol "Hapus" ditekan
                                            console.log("Tombol Hapus ditekan");
                                        }
                                    </script>

                                    <div
                                        class="space-y-1.5 rounded-lg bg-gradient-to-t from-[#19213299] via-[#19213266] to-transparent px-4 pb-3 pt-12">
                                        <div class="line-clamp-2">
                                            <a href="http://127.0.0.1:8000/Berita/detail" class="text-base font-medium text-white">
                                                {{ $row->judul }}
                                            </a>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center text-xs text-slate-200">
                                                <p class="flex items-center space-x-1">
                                                    <span class="line-clamp-1 uppercase">{{ $row->kategori }}</span>
                                                </p>
                                                <div class="mx-3 my-0.5 w-px self-stretch bg-white/20"></div>
                                                <p class="shrink-0 text-tiny+">{{ $row->created_at->diffForHumans() }}</p>
                                            </div>
                                            <div class="mr-1.5 flex">
                                                {{-- @if ($blog->isLikedByUser())
                                                    <form action="{{ route('Berita.unlike', $blog) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                fill="red" width="24" height="24">
                                                                <path d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M11 2C6.029 2 2 6.029 2 11c0 4.97 4.029 9 9 9 4.97 0 9-4.03 9-9 0-4.971-4.03-9-9-9zm3 13H8v-2h6v2zm0-4H8V7h6v4z" />
                                                            </svg>
                                                        </button>
                                                    </form>
                                                @else
                                                    <form action="{{ route('Berita.like', $blog) }}" method="POST">
                                                        @csrf
                                                        <button type="submit">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                fill="none" width="24" height="24">
                                                                <path d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M11 2C6.029 2 2 6.029 2 11c0 4.97 4.029 9 9 9 4.97 0 9-4.03 9-9 0-4.971-4.03-9-9-9zm0 16l-4-4h8l-4 4z" />
                                                            </svg>
                                                        </button>
                                                    </form>
                                                @endif --}}

                                                <button x-tooltip="'Save'"
                                                    class="btn h-7 w-7 rounded-full p-0 text-navy-100 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
            {{--  <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>  --}}
            <div class="swiper-pagination"></div>
        </section>
        {{--  <!-- Swiper JS -->  --}}
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        {{--  <!-- Initialize Swiper -->  --}}
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 3,
                spaceBetween: 30,
                slidesPerGroup: 3,
                loop: true,
                loopFillGroupWithBlank: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        </script>
        <style>
            /* === Google Font Import - Poppins === */
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');



            section {
                position: relative;
                display: flex;
                align-items: center;
                padding: 20px;
            }

            .swiper {
                flex: 1;
            }

            .card {
                position: ;
                background: #fff;
                border-radius: 20px;
                margin: 20px 0;
                box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.1);
            }



            .card .card-content {
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 30px;
                position: relative;
                z-index: 100;
            }



            .card .media-icons i:hover {
                opacity: 1;
            }

            .card .name-profession {
                display: flex;
                flex-direction: column;
                align-items: center;
                margin-top: 10px;
                color: black;
            }

            .name-profession .name {
                font-size: 20px;
                font-weight: 600;
            }

            .name-profession .profession {
                font-size: 15px;
                font-weight: 500;
            }


            .card .button {
                width: 100%;
                display: flex;
                justify-content: space-around;
                margin-top: 20px;
            }

            .card .button button {
                background: #278be1;
                outline: none;
                border: none;
                color: #000000;
                padding: 8px 22px;
                border-radius: 20px;
                font-size: 14px;
                transition: all 0.3s ease;
                cursor: pointer;
            }

            .card .button button:hover {
                background: #278be1;
            }

            .swiper-pagination {
                position: absolute;
            }

            .swiper-pagination-bullet {
                height: 7px;
                width: 26px;
                border-radius: 25px;
                background: #278be1;
            }

            .swiper-button-next,
            .swiper-button-prev {
                opacity: 0.7;
                color: #278be1;
                transition: all 0.3s ease;
            }

            .swiper-button-next:hover,
            .swiper-button-prev:hover {
                opacity: 1;
                color: #278be1;
            }

            @media (max-width: 768px) {
                section {
                    flex-direction: column;
                }

                .swiper {
                    width: 100%;
                    max-width: 400px;
                    margin: 0 auto;
                }

                .card {
                    width: 100%;
                }

                .card::before {
                    border-radius: 20px;
                }
            }
        </style>

        {{--  <!-- Include necessary scripts, e.g., Font Awesome -->  --}}
        <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
        {{-- end carousel --}}

        <script src="assets/js/swiper-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script src="{{ asset('admin/assets/js/alpine-collaspe.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/alpine-persist.min.js') }}"></script>
        <script defer src="{{ asset('admin/assets/js/alpine-ui.min.js') }}"></script>
        <script defer src="{{ asset('admin/assets/js/alpine-focus.min.js') }}"></script>
        <script defer src="{{ asset('admin/assets/js/alpine.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/custom.js') }}"></script>
        <script defer src="{{ asset('admin/assets/js/apexcharts.js') }}"></script>
        <script>
            var options = {
            series: [{
            name: 'Menunggu',
            data: [{{$menunggu_jan}},{{$menunggu_feb}},{{$menunggu_mar}},{{$menunggu_apr}},{{$menunggu_mei}},
                {{$menunggu_jun}},{{$menunggu_jul}},{{$menunggu_aug}},{{$menunggu_sep}},{{$menunggu_okt}},{{$menunggu_nov}},{{$menunggu_des}}]
            }, {
            name: 'Terima',
            data: [{{$terima_jan}},{{$terima_feb}},{{$terima_mar}},{{$terima_apr}},{{$terima_mei}},
                {{$terima_jun}},{{$terima_jul}},{{$terima_aug}},{{$terima_sep}},{{$terima_okt}},{{$terima_nov}},{{$terima_des}}]
            }, {
            name: 'Tolak',
            data: [{{$Tolak_jan}},{{$Tolak_feb}},{{$Tolak_mar}},{{$Tolak_apr}},{{$Tolak_mei}},
                {{$Tolak_jun}},{{$Tolak_jul}},{{$Tolak_aug}},{{$Tolak_sep}},{{$Tolak_okt}},{{$Tolak_nov}},{{$Tolak_des}}]
            }],
            chart: {
            type: 'bar',
            height: 400,
            width:1150



            },
            plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '30%',
                endingShape: 'rounded',
                borderRadius: 7,

            },
            },
            dataLabels: {
            enabled: false,
            },
            animations: {
                enabled: true,
                easing: 'easeinout',
                speed: 1200,
                animateGradually: {
                    enabled: true,
                    delay: 200
                },
                dynamicAnimation: {
                    enabled: true,
                    speed: 450
                }
            },
            stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
            },
            xaxis: {
            categories: ['Jan','Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Des'],
            labels: {
                style: {
                fontSize: '12px',
                margin: '1px'
                }}
            },
                    yaxis: {
                        title: {
                            text: 'jumlah'
                        }
                    },
                    fill: {
                        opacity: 2,
                        colors: ['#6769EB', '#47EBB3', '#FFA726']
                    },
                    tooltip: {
                        y: {
                            // formatter: function (val) {
                            //   return "$ " + val + " thousands"
                            // }
                        }
                    }
                };

                var chart = new ApexCharts(document.querySelector("#grafik_admin"), options);
                chart.render();
        </script>
</body>

</html>
