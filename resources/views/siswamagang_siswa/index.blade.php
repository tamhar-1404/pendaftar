<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <!-- CSS Assets -->
    <link rel="stylesheet" href="{{ asset('admin/css/app.css') }}" />
    <link rel="stylesheet" href="load/load.css">

    <!-- Javascript Assets -->
    <script src="{{ asset('admin/js/app.js') }}" defer></script>
    <script src="https://cdn.tailwindcss.com%22%3E/"></script>
    <script>
        theme: {
            extend: {
                blur: {
                    xs: '3px',
                }
            },
        },

    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>siswa - Dashboad</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="icon" type="image/x-icon" href="favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link rel="stylesheet" href="load/load.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" media="screen" href="siswa/css/perfect-scrollbar.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="siswa/css/style.css" />
    <link defer rel="stylesheet" type="text/css" media="screen" href="siswa/css/animate.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('admin/assets/css/style.css') }}" />
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    {{-- <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" /> --}}
    <script src="siswa/js/perfect-scrollbar.min.js"></script>
    <script defer src="siswa/js/popper.min.js"></script>
    <script defer src="siswa/js/tippy-bundle.umd.min.js"></script>
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <script defer src="siswa/js/sweetalert.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
</head>

<body x-data="main"
    class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased bg-[#F6F5FF]"
    :class="[$store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme, $store.app.menu, $store.app.layout, $store.app
        .rtlClass
    ]">
    <!-- sidebar menu overlay -->
    <div x-cloak class="fixed inset-0 z-50 bg-[black]/60 lg:hidden" :class="{ 'hidden': !$store.app.sidebar }"
        @click="$store.app.toggleSidebar()"></div>

    <!-- screen loader -->
    <div
        class="screen_loader animate__animated fixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
        <div class="center">
            <div class="ring">
            </div>
            <img src="load/logo.png" alt="Deskripsi gambar" class="my-img">
        </div>
    </div>


    @forelse ($siswas as $siswa)
        {{-- modal --}}
        <form action="{{ route('laporansiswa.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div id="staticModal{{ $siswa->id }}" tabindex="-1" aria-hidden="true"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Laporkan {{ $siswa->name }}
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="staticModal{{ $siswa->id }}">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <input type="hidden" name="nama" value="{{ $siswa->name }}">
                        <div class="p-6 space-y-6">
                            <div class="relative z-0 w-full mb-6 group">
                                <label for="message"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                                <textarea id="message" name="deskripsi" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="masukan detail laporan anda"></textarea>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="file" name="bukti" id="floating_email"
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
                            <button data-modal-hide="staticModal" type="submit"
                                class="text-gray-700  bg-white border border-gray-700 hover:text-white hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    @empty
    @endforelse






    <!-- start theme customizer section -->
    <div x-data="customizer">
        <div class="fixed inset-0 z-[51] hidden bg-[black]/60 px-4 transition-[display]"
            :class="{ '!block': showCustomizer }" @click="showCustomizer = false"></div>


        </div>
    </nav>
    </div>
    <!-- end theme customizer section -->

    <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
        <!-- start sidebar section -->
        <div :class="{ 'dark text-white-dark': $store.app.semidark }">

        </div>
        <!-- end sidebar section -->

        <div class="">
            @include('Siswamagang.nav_siswa')

            <div class="animate__animated p-6" :class="[$store.app.animation]">
                <!-- start main content section -->

                <div x-data="basic" class="mt-0">
                    {{-- judul --}}
                    <div class="mb-5 font-semibold kamu-tak-diajak">
                        <span>Jurnal /<span class="text-[#00B7FF]"> {{ Auth::user()->name }}</span></span>
                    </div>
                   @error('tanggal')
                        <div class="text-danger">Anda telah mengisi jurnal pada hari ini</div>
                   @enderror

                    <div class="panel">
                     {{-- <h2>{{ $e }}</h2> --}}
                     <div class="mr-4 flex justify-end " >
                        <form action="" style="width: 20%">
                            <label class=" hidden sm:flex">
                                <input
                                    class="form-input peer h-9 rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 text-xs+ placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="Search users..." type="text" name="cari"
                                    value="{{ request('cari') }}" />
                            </label>
                        </form>
                    </div>



                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6 xl:grid-cols-4">
                            @forelse ($siswas as $siswa)
                                <div class="card ">
                                    <div class="p-2 text-right">
                                        <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="isShowPopper && (isShowPopper = false)"
                                            class="inline-flex">


                                        </div>
                                    </div>
                                    <div class="flex grow flex-col items-center px-2 pb-3 sm:px-5">
                                        <div class="avatar h-20 w-20">
                                            <img class="rounded-full" src="{{ asset('storage/Siswa/'.$siswa->foto_siswa) }}"
                                                alt="avatar" />
                                        </div>
                                        <h3 class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100">
                                            {{ $siswa->name }}
                                        </h3>
                                        <div
                                            class="Link w-10 h-6 px-2 pt-[1.00px] pb-[6.33px]bg-emerald-500 bg-opacity-10 rounded-full justify-start items-start inline-flex">
                                            <div
                                                class="{{ $siswa->jurusan === 'RPL' ? 'text-green-500 text-[12px]' : 'text-blue-500 text-[12px]' }} flex items-center justify-center w-8 h-8 rounded-full font-medium leading-3 tracking-wide">
                                                {{ $siswa->jurusan }}</div>
                                        </div>

                                        <p class="text-xs+ mt-2">{{ $siswa->sekolah }}</p>
                                        <div class="flex items-center w-full">
                                            <div
                                                class="w-full h-[36px] pl-[6.50px] pr-[4.16px] justify-center items-start gap-[11.42px] inline-flex mt-8">
                                                <button data-modal-target="staticModal{{ $siswa->id }}"
                                                    data-modal-toggle="staticModal{{ $siswa->id }}"
                                                    class="Button w-[110px] self-stretch px-4    pl-[12.57px] pr-2 py-2 bg-red-500 rounded-lg justify-end items-center text-center gap-[5px] inline-flex">
                                                    <div
                                                        class="Laporkan text-center text-white text-[14px] font-medium leading-tight tracking-wide">
                                                        Laporkan</div>
                                                    <div
                                                        class="IconsaxBrokenWarning2 w- h- relative flex-col justify-start items-start flex text-white">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                                        </svg>
                                                    </div>
                                                </button>
                                                {{-- <button
                                                    class="Button w-[110px] self-stretch pl-[12.57px] pr-2 py-2 bg-gray-500 rounded-lg justify-center items-center gap-[5px] inline-flex">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6" color="white">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                                    </svg>
                                                    <div data-modal-target="staticModal" data-modal-toggle="staticModal"
                                                        class="Laporkan text-center text-white text-[14px] font-medium leading-tight tracking-wide">
                                                        Chat</div>
                                                </button> --}}

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>


            </div>


        </div>
    </div>

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
    <script src="siswa/js/alpine-collaspe.min.js"></script>
    <script src="siswa/js/alpine-persist.min.js"></script>
    <script defer src="siswa/js/alpine-ui.min.js"></script>
    <script defer src="siswa/js/alpine-focus.min.js"></script>
    <script defer src="siswa/js/alpine.min.js"></script>
    <script src="siswa/js/custom.js"></script>
    <script defer src="siswa/js/apexcharts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script> --}}
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                fontFamily: {
                    sans: ["Roboto", "sans-serif"],
                    body: ["Roboto", "sans-serif"],
                    mono: ["ui-monospace", "monospace"],
                },
            },
            corePlugins: {
                preflight: false,
            },
        };
    </script>


    <script>
        document.addEventListener('alpine:init', () => {
            //Carousel
            Alpine.data('carousel', () => ({
                items: ['carousel1.jpeg', 'carousel2.jpeg', 'carousel3.jpeg'],

                init() {
                    // basic
                    const swiper1 = new Swiper('#slider1', {
                        navigation: {
                            nextEl: '.swiper-button-next-ex1',
                            prevEl: '.swiper-button-prev-ex1',
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                    });
                    // Autoplay
                    const swiper2 = new Swiper('#slider2', {
                        navigation: {
                            nextEl: '.swiper-button-next-ex2',
                            prevEl: '.swiper-button-prev-ex2',
                        },
                        autoplay: {
                            delay: 2000,
                        },
                    });
                    // vertical
                    setTimeout(() => {
                        const swiper3 = new Swiper('#slider3', {
                            direction: 'vertical',
                            pagination: {
                                el: '.swiper-pagination',
                                clickable: true,
                            },
                            autoplay: {
                                delay: 2000,
                            },
                        });
                    });
                    // Loop
                    const swiper4 = new Swiper('#slider4', {
                        slidesPerView: 1,
                        spaceBetween: 30,
                        loop: true,
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                            type: 'fraction',
                        },
                        navigation: {
                            nextEl: '.swiper-button-next-ex4',
                            prevEl: '.swiper-button-prev-ex4',
                        },
                    });
                    // Multiple Slides
                    const swiper5 = new Swiper('#slider5', {
                        navigation: {
                            nextEl: '.swiper-button-next-ex5',
                            prevEl: '.swiper-button-prev-ex5',
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                        breakpoints: {
                            1024: {
                                slidesPerView: 3,
                                spaceBetween: 30,
                            },
                            768: {
                                slidesPerView: 2,
                                spaceBetween: 40,
                            },
                            320: {
                                slidesPerView: 1,
                                spaceBetween: 20,
                            },
                        },
                    });
                },
            }));
            // main section
            Alpine.data('scrollToTop', () => ({
                showTopButton: false,
                init() {
                    window.onscroll = () => {
                        this.scrollFunction();
                    };
                },

                scrollFunction() {
                    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                        this.showTopButton = true;
                    } else {
                        this.showTopButton = false;
                    }
                },

                goToTop() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                },
            }));

            // theme customization
            Alpine.data('customizer', () => ({
                showCustomizer: false,
            }));

            // sidebar section
            Alpine.data('sidebar', () => ({
                init() {
                    const selector = document.querySelector('.sidebar ul a[href="' + window.location
                        .pathname + '"]');
                    if (selector) {
                        selector.classList.add('active');
                        const ul = selector.closest('ul.sub-menu');
                        if (ul) {
                            let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                            if (ele) {
                                ele = ele[0];
                                setTimeout(() => {
                                    ele.click();
                                });
                            }
                        }
                    }
                },
            }));

            // header section
            Alpine.data('header', () => ({
                init() {
                    const selector = document.querySelector('ul.horizontal-menu a[href="' + window
                        .location.pathname + '"]');
                    if (selector) {
                        selector.classList.add('active');
                        const ul = selector.closest('ul.sub-menu');
                        if (ul) {
                            let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                            if (ele) {
                                ele = ele[0];
                                setTimeout(() => {
                                    ele.classList.add('active');
                                });
                            }
                        }
                    }
                },

                notifications: [{
                        id: 1,
                        profile: 'user-profile.jpeg',
                        message: '<strong class="text-sm mr-1">John Doe</strong>invite you to <strong>Prototyping</strong>',
                        time: '45 min ago',
                    },
                    {
                        id: 2,
                        profile: 'profile-34.jpeg',
                        message: '<strong class="text-sm mr-1">Adam Nolan</strong>mentioned you to <strong>UX Basics</strong>',
                        time: '9h Ago',
                    },
                    {
                        id: 3,
                        profile: 'profile-16.jpeg',
                        message: '<strong class="text-sm mr-1">Anna Morgan</strong>Upload a file',
                        time: '9h Ago',
                    },
                ],

                messages: [{
                        id: 1,
                        image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-success-light dark:bg-success text-success dark:text-success-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></span>',
                        title: 'Congratulations!',
                        message: 'Your OS has been updated.',
                        time: '1hr',
                    },
                    {
                        id: 2,
                        image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-info-light dark:bg-info text-info dark:text-info-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg></span>',
                        title: 'Did you know?',
                        message: 'You can switch between artboards.',
                        time: '2hr',
                    },
                    {
                        id: 3,
                        image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-danger-light dark:bg-danger text-danger dark:text-danger-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>',
                        title: 'Something went wrong!',
                        message: 'Send Reposrt',
                        time: '2days',
                    },
                    {
                        id: 4,
                        image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-warning-light dark:bg-warning text-warning dark:text-warning-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">    <circle cx="12" cy="12" r="10"></circle>    <line x1="12" y1="8" x2="12" y2="12"></line>    <line x1="12" y1="16" x2="12.01" y2="16"></line></svg></span>',
                        title: 'Warning',
                        message: 'Your password strength is low.',
                        time: '5days',
                    },
                ],

                languages: [{
                        id: 1,
                        key: 'Chinese',
                        value: 'zh',
                    },
                    {
                        id: 2,
                        key: 'Danish',
                        value: 'da',
                    },
                    {
                        id: 3,
                        key: 'English',
                        value: 'en',
                    },
                    {
                        id: 4,
                        key: 'French',
                        value: 'fr',
                    },
                    {
                        id: 5,
                        key: 'German',
                        value: 'de',
                    },
                    {
                        id: 6,
                        key: 'Greek',
                        value: 'el',
                    },
                    {
                        id: 7,
                        key: 'Hungarian',
                        value: 'hu',
                    },
                    {
                        id: 8,
                        key: 'Italian',
                        value: 'it',
                    },
                    {
                        id: 9,
                        key: 'Japanese',
                        value: 'ja',
                    },
                    {
                        id: 10,
                        key: 'Polish',
                        value: 'pl',
                    },
                    {
                        id: 11,
                        key: 'Portuguese',
                        value: 'pt',
                    },
                    {
                        id: 12,
                        key: 'Russian',
                        value: 'ru',
                    },
                    {
                        id: 13,
                        key: 'Spanish',
                        value: 'es',
                    },
                    {
                        id: 14,
                        key: 'Swedish',
                        value: 'sv',
                    },
                    {
                        id: 15,
                        key: 'Turkish',
                        value: 'tr',
                    },
                ],

                removeNotification(value) {
                    this.notifications = this.notifications.filter((d) => d.id !== value);
                },

                removeMessage(value) {
                    this.messages = this.messages.filter((d) => d.id !== value);
                },
            }));

            // content section
            Alpine.data('sales', () => ({
                init() {
                    isDark = this.$store.app.theme === 'dark' ? true : false;
                    isRtl = this.$store.app.rtlClass === 'rtl' ? true : false;

                    const revenueChart = null;
                    const salesByCategory = null;
                    const dailySales = null;
                    const totalOrders = null;

                    // revenue
                    setTimeout(() => {
                        this.revenueChart = new ApexCharts(this.$refs.revenueChart, this
                            .revenueChartOptions);
                        this.$refs.revenueChart.innerHTML = '';
                        this.revenueChart.render();

                        // sales by category
                        this.salesByCategory = new ApexCharts(this.$refs.salesByCategory, this
                            .salesByCategoryOptions);
                        this.$refs.salesByCategory.innerHTML = '';
                        this.salesByCategory.render();

                        // daily sales
                        this.dailySales = new ApexCharts(this.$refs.dailySales, this
                            .dailySalesOptions);
                        this.$refs.dailySales.innerHTML = '';
                        this.dailySales.render();

                        // total orders
                        this.totalOrders = new ApexCharts(this.$refs.totalOrders, this
                            .totalOrdersOptions);
                        this.$refs.totalOrders.innerHTML = '';
                        this.totalOrders.render();
                    }, 300);

                    this.$watch('$store.app.theme', () => {
                        isDark = this.$store.app.theme === 'dark' ? true : false;

                        this.revenueChart.updateOptions(this.revenueChartOptions);
                        this.salesByCategory.updateOptions(this.salesByCategoryOptions);
                        this.dailySales.updateOptions(this.dailySalesOptions);
                        this.totalOrders.updateOptions(this.totalOrdersOptions);
                    });

                    this.$watch('$store.app.rtlClass', () => {
                        isRtl = this.$store.app.rtlClass === 'rtl' ? true : false;
                        this.revenueChart.updateOptions(this.revenueChartOptions);
                    });
                },

                // revenue
                get revenueChartOptions() {
                    return {
                        series: [{
                                name: 'Income',
                                data: [16800, 16800, 15500, 17800, 15500, 17000, 19000, 16000,
                                    15000, 17000, 14000, 17000
                                ],
                            },
                            {
                                name: 'Expenses',
                                data: [16500, 17500, 16200, 17300, 16000, 19500, 16000, 17000,
                                    16000, 19000, 18000, 19000
                                ],
                            },
                        ],
                        chart: {
                            height: 325,
                            type: 'area',
                            fontFamily: 'Nunito, sans-serif',
                            zoom: {
                                enabled: false,
                            },
                            toolbar: {
                                show: false,
                            },
                        },
                        dataLabels: {
                            enabled: false,
                        },
                        stroke: {
                            show: true,
                            curve: 'smooth',
                            width: 2,
                            lineCap: 'square',
                        },
                        dropShadow: {
                            enabled: true,
                            opacity: 0.2,
                            blur: 10,
                            left: -7,
                            top: 22,
                        },
                        colors: isDark ? ['#2196f3', '#e7515a'] : ['#1b55e2', '#e7515a'],
                        markers: {
                            discrete: [{
                                    seriesIndex: 0,
                                    dataPointIndex: 6,
                                    fillColor: '#1b55e2',
                                    strokeColor: 'transparent',
                                    size: 7,
                                },
                                {
                                    seriesIndex: 1,
                                    dataPointIndex: 5,
                                    fillColor: '#e7515a',
                                    strokeColor: 'transparent',
                                    size: 7,
                                },
                            ],
                        },
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep',
                            'Oct', 'Nov', 'Dec'
                        ],
                        xaxis: {
                            axisBorder: {
                                show: false,
                            },
                            axisTicks: {
                                show: false,
                            },
                            crosshairs: {
                                show: true,
                            },
                            labels: {
                                offsetX: isRtl ? 2 : 0,
                                offsetY: 5,
                                style: {
                                    fontSize: '12px',
                                    cssClass: 'apexcharts-xaxis-title',
                                },
                            },
                        },
                        yaxis: {
                            tickAmount: 7,
                            labels: {
                                formatter: (value) => {
                                    return value / 1000 + 'K';
                                },
                                offsetX: isRtl ? -30 : -10,
                                offsetY: 0,
                                style: {
                                    fontSize: '12px',
                                    cssClass: 'apexcharts-yaxis-title',
                                },
                            },
                            opposite: isRtl ? true : false,
                        },
                        grid: {
                            borderColor: isDark ? '#191e3a' : '#e0e6ed',
                            strokeDashArray: 5,
                            xaxis: {
                                lines: {
                                    show: true,
                                },
                            },
                            yaxis: {
                                lines: {
                                    show: false,
                                },
                            },
                            padding: {
                                top: 0,
                                right: 0,
                                bottom: 0,
                                left: 0,
                            },
                        },
                        legend: {
                            position: 'top',
                            horizontalAlign: 'right',
                            fontSize: '16px',
                            markers: {
                                width: 10,
                                height: 10,
                                offsetX: -2,
                            },
                            itemMargin: {
                                horizontal: 10,
                                vertical: 5,
                            },
                        },
                        tooltip: {
                            marker: {
                                show: true,
                            },
                            x: {
                                show: false,
                            },
                        },
                        fill: {
                            type: 'gradient',
                            gradient: {
                                shadeIntensity: 1,
                                inverseColors: !1,
                                opacityFrom: isDark ? 0.19 : 0.28,
                                opacityTo: 0.05,
                                stops: isDark ? [100, 100] : [45, 100],
                            },
                        },
                    };
                },

                // sales by category
                get salesByCategoryOptions() {
                    return {
                        series: [985, 737, 270],
                        chart: {
                            type: 'donut',
                            height: 460,
                            fontFamily: 'Nunito, sans-serif',
                        },
                        dataLabels: {
                            enabled: false,
                        },
                        stroke: {
                            show: true,
                            width: 25,
                            colors: isDark ? '#0e1726' : '#fff',
                        },
                        colors: isDark ? ['#5c1ac3', '#e2a03f', '#e7515a', '#e2a03f'] : ['#e2a03f',
                            '#5c1ac3', '#e7515a'
                        ],
                        legend: {
                            position: 'bottom',
                            horizontalAlign: 'center',
                            fontSize: '14px',
                            markers: {
                                width: 10,
                                height: 10,
                                offsetX: -2,
                            },
                            height: 50,
                            offsetY: 20,
                        },
                        plotOptions: {
                            pie: {
                                donut: {
                                    size: '65%',
                                    background: 'transparent',
                                    labels: {
                                        show: true,
                                        name: {
                                            show: true,
                                            fontSize: '29px',
                                            offsetY: -10,
                                        },
                                        value: {
                                            show: true,
                                            fontSize: '26px',
                                            color: isDark ? '#bfc9d4' : undefined,
                                            offsetY: 16,
                                            formatter: (val) => {
                                                return val;
                                            },
                                        },
                                        total: {
                                            show: true,
                                            label: 'Total',
                                            color: '#888ea8',
                                            fontSize: '29px',
                                            formatter: (w) => {
                                                return w.globals.seriesTotals.reduce(function(a,
                                                    b) {
                                                    return a + b;
                                                }, 0);
                                            },
                                        },
                                    },
                                },
                            },
                        },
                        labels: ['Apparel', 'Sports', 'Others'],
                        states: {
                            hover: {
                                filter: {
                                    type: 'none',
                                    value: 0.15,
                                },
                            },
                            active: {
                                filter: {
                                    type: 'none',
                                    value: 0.15,
                                },
                            },
                        },
                    };
                },

                // daily sales
                get dailySalesOptions() {
                    return {
                        series: [{
                                name: 'Sales',
                                data: [44, 55, 41, 67, 22, 43, 21],
                            },
                            {
                                name: 'Last Week',
                                data: [13, 23, 20, 8, 13, 27, 33],
                            },
                        ],
                        chart: {
                            height: 160,
                            type: 'bar',
                            fontFamily: 'Nunito, sans-serif',
                            toolbar: {
                                show: false,
                            },
                            stacked: true,
                            stackType: '100%',
                        },
                        dataLabels: {
                            enabled: false,
                        },
                        stroke: {
                            show: true,
                            width: 1,
                        },
                        colors: ['#e2a03f', '#e0e6ed'],
                        responsive: [{
                            breakpoint: 480,
                            options: {
                                legend: {
                                    position: 'bottom',
                                    offsetX: -10,
                                    offsetY: 0,
                                },
                            },
                        }, ],
                        xaxis: {
                            labels: {
                                show: false,
                            },
                            categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat'],
                        },
                        yaxis: {
                            show: false,
                        },
                        fill: {
                            opacity: 1,
                        },
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                columnWidth: '25%',
                            },
                        },
                        legend: {
                            show: false,
                        },
                        grid: {
                            show: false,
                            xaxis: {
                                lines: {
                                    show: false,
                                },
                            },
                            padding: {
                                top: 10,
                                right: -20,
                                bottom: -20,
                                left: -20,
                            },
                        },
                    };
                },

                // total orders
                get totalOrdersOptions() {
                    return {
                        series: [{
                            name: 'Sales',
                            data: [28, 40, 36, 52, 38, 60, 38, 52, 36, 40],
                        }, ],
                        chart: {
                            height: 290,
                            type: 'area',
                            fontFamily: 'Nunito, sans-serif',
                            sparkline: {
                                enabled: true,
                            },
                        },
                        stroke: {
                            curve: 'smooth',
                            width: 2,
                        },
                        colors: isDark ? ['#00ab55'] : ['#00ab55'],
                        labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
                        yaxis: {
                            min: 0,
                            show: false,
                        },
                        grid: {
                            padding: {
                                top: 125,
                                right: 0,
                                bottom: 0,
                                left: 0,
                            },
                        },
                        fill: {
                            opacity: 1,
                            type: 'gradient',
                            gradient: {
                                type: 'vertical',
                                shadeIntensity: 1,
                                inverseColors: !1,
                                opacityFrom: 0.3,
                                opacityTo: 0.05,
                                stops: [100, 100],
                            },
                        },
                        tooltip: {
                            x: {
                                show: false,
                            },
                        },
                    };
                },
            }));
        });
    </script>
</body>

<!-- Mirrored from html.vristo.sbthemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 02:32:57 GMT -->

</html>
