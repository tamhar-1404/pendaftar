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
                <div class="flex justify-between text-blue-400">
                    <p class="text-xl mt-1 font-semibold text-slate-700 dark:text-navy-100">
                        {{$siswa}}
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"  viewBox="0 0 16 16">
                        <path fill="currentColor" d="M16 7.992C16 3.58 12.416 0 8 0S0 3.58 0 7.992c0 2.43 1.104 4.62 2.832 6.09c.016.016.032.016.032.032c.144.112.288.224.448.336c.08.048.144.111.224.175A7.98 7.98 0 0 0 8.016 16a7.98 7.98 0 0 0 4.48-1.375c.08-.048.144-.111.224-.16c.144-.111.304-.223.448-.335c.016-.016.032-.016.032-.032c1.696-1.487 2.8-3.676 2.8-6.106zm-8 7.001c-1.504 0-2.88-.48-4.016-1.279c.016-.128.048-.255.08-.383a4.17 4.17 0 0 1 .416-.991c.176-.304.384-.576.64-.816c.24-.24.528-.463.816-.639c.304-.176.624-.304.976-.4A4.15 4.15 0 0 1 8 10.342a4.185 4.185 0 0 1 2.928 1.166c.368.368.656.8.864 1.295c.112.288.192.592.24.911A7.03 7.03 0 0 1 8 14.993zm-2.448-7.4a2.49 2.49 0 0 1-.208-1.024c0-.351.064-.703.208-1.023c.144-.32.336-.607.576-.847c.24-.24.528-.431.848-.575c.32-.144.672-.208 1.024-.208c.368 0 .704.064 1.024.208c.32.144.608.336.848.575c.24.24.432.528.576.847c.144.32.208.672.208 1.023c0 .368-.064.704-.208 1.023a2.84 2.84 0 0 1-.576.848a2.84 2.84 0 0 1-.848.575a2.715 2.715 0 0 1-2.064 0a2.84 2.84 0 0 1-.848-.575a2.526 2.526 0 0 1-.56-.848zm7.424 5.306c0-.032-.016-.048-.016-.08a5.22 5.22 0 0 0-.688-1.406a4.883 4.883 0 0 0-1.088-1.135a5.207 5.207 0 0 0-1.04-.608a2.82 2.82 0 0 0 .464-.383a4.2 4.2 0 0 0 .624-.784a3.624 3.624 0 0 0 .528-1.934a3.71 3.71 0 0 0-.288-1.47a3.799 3.799 0 0 0-.816-1.199a3.845 3.845 0 0 0-1.2-.8a3.72 3.72 0 0 0-1.472-.287a3.72 3.72 0 0 0-1.472.288a3.631 3.631 0 0 0-1.2.815a3.84 3.84 0 0 0-.8 1.199a3.71 3.71 0 0 0-.288 1.47c0 .352.048.688.144 1.007c.096.336.224.64.4.927c.16.288.384.544.624.784c.144.144.304.271.48.383a5.12 5.12 0 0 0-1.04.624c-.416.32-.784.703-1.088 1.119a4.999 4.999 0 0 0-.688 1.406c-.016.032-.016.064-.016.08C1.776 11.636.992 9.91.992 7.992C.992 4.14 4.144.991 8 .991s7.008 3.149 7.008 7.001a6.96 6.96 0 0 1-2.032 4.907z"/>
                    </svg>

                </div>
                <p class="mt-1 text-xs">Anak magang</p>
            </div>
            <div class="rounded-lg bg-white p-5 dark:bg-navy-600 dark:bg-black"
                style="box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.25); border-radius: 8px;">

                <div class="flex justify-between text-blue-400">
                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                        {{$guru}}
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 0 0-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 0 1 5.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 0 1 9.288 0M15 7a3 3 0 1 1-6 0a3 3 0 0 1 6 0Zm6 3a2 2 0 1 1-4 0a2 2 0 0 1 4 0ZM7 10a2 2 0 1 1-4 0a2 2 0 0 1 4 0Z"/>
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
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z"/>
                        <rect width="2" height="7" x="11" y="6" fill="#888888" rx="1">
                            <animateTransform attributeName="transform" dur="7s" repeatCount="indefinite" type="rotate" values="0 12 12;360 12 12"/></rect>
                        <rect width="2" height="9" x="11" y="11" fill="#888888" rx="1">
                            <animateTransform attributeName="transform" dur="2s" repeatCount="indefinite" type="rotate" values="0 12 12;360 12 12"/></rect>
                    </svg>

                </div>
                <p class="mt-1 text-xs">Menunggu diterima</p>
            </div>
        </div>
        {{-- grafik --}}

                {{-- <div class="hidden space-x-2 sm:flex" x-data="{activeTab:'tabYearly'}">
                </div> --}}
            </div>

            <div class="ax-transparent-gridline mt-2 px-2 bg-white rounded-lg mx-4">
                <div id="grafik_admin" style="width: 100%; "></div>
            </div>




        {{-- caraousel --}}


           <!-- end main content section -->
            <section>
                <div class="swiper mySwiper container w-full">
                    <div class="swiper-wrapper content">
                        @forelse ($mou1 as $data )
                        <div class="swiper-slide card dark:bg-black">
                            <div class="card-content ">
                                <div class="image">
                                    <img src="{{ asset('storage/mou/' . $data->logo) }}" alt="" width="180">
                                </div>
                            </div>
                        </div>
                        @empty

                        @endforelse

                    </div>
                </div>
                {{-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> --}}
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
                        colors: ['#008ffbff', '#47EBB3', '#FFA726']
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
