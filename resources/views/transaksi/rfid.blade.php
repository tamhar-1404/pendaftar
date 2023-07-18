<!DOCTYPE html>
<html class="no-js" lang="en">
{{--  <!-- Mirrored from template.hasthemes.com/sinp/sinp/shop-grid-4-column.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2023 02:22:46 GMT -->  --}}

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Hummastore | Transaksi</title>
    <!-- <meta name="robots" content="noindex, follow" /> -->
    <meta name="AdsBot-Google" content="noindex follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    @vite('resources/css/app.css')

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="kode/images/favicon.webp" />

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <link rel="stylesheet" href="kode/css/vendor/icofont.min.css" />
    <link rel="stylesheet" href="kode/css/vendor/line-awesome.min.css" />
    <link rel="stylesheet" href="kode/css/vendor/simple-line-icons.css" />
    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS (Bootstrap & Icon Font) -->

    <!-- Plugins CSS (All Plugins Files) -->

    <link rel="stylesheet" href="kode/css/plugins/swiper-bundle.min.css" />

    <link rel="stylesheet" href="kode/css/plugins/magnific-popup.css" />


    <!-- Style CSS -->
    <link rel="stylesheet" href="kode/css/style.css" />

</head>


<body class="font-poppins text-dark text-sm leading-loose">
    <!-- Header start -->

    <!-- Header end -->


    <!-- Hero section start -->
    <div class="py-5 bg-gray-light">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-4">
                <div class="col-span-12">
                    <nav>
                        <ul class="flex items-start justify-start">
                            <img src="{{ asset('admin/images/hummashitam.png') }}" class="w-48" alt=""
                                srcset="">
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <!-- Hero section end -->



    <!-- blog grid section start -->

    <div class="py-24">
        <div class="container">
            <div class="flex flex-wrap flex-col lg:flex-row">
                <div id="shoptab" class="flex-1">
                    <p class="text-center mb-10 font-bold text-xl">SCAN RFID</p>
                    <div
                        class="flex flex-wrap justify-center items-center px-4 relative text-center md:max-w-xl mx-auto mb-10">
                        <form action="{{ route('transaksi.create') }}" method="get"
                            class="flex items-center justify-center border border-gray-400">
                            @csrf
                            <input id="mc-email" type="text" placeholder="Scan RFID anda"
                                class="border border-solid border-primary mb-10  h-14 sm:h-16 rounded-full bg-transparent placeholder-primary placeholder-opacity-50 text-sm sm:text-base focus:outline-none py-1 pl-8 pr-14 sm:pr-36"
                                name="rfid" style="height: 50px" />
                        </form>

                    </div>
                    <div>
                        <ul class="shop-tab-nav flex flex-wrap">
                            <li class="active"><a href="#grid"
                                    class="text-base hover:text-orange inline-block py-2 px-2"><i
                                        class="icon-grid"></i></a></li>
                        </ul>
                    </div>

                    <div class="mt-10">
                        <div id="grid" class="shop-tab-content active">
                            <div class="flex flex-wrap -my-4 -px-4">
                                @foreach ($barangs as $item)
                                    <div class="w-full md:w-1/2 lg:w-1/3 2xl:w-1/4 px-4 my-4">
                                        <div
                                            class="border border-solid border-gray-300 transition-all hover:shadow-product group relative">
                                            <div class="relative overflow-hidden">
                                                <img class="w-full h-full"
                                                    src="{{ asset('storage/pendataanbarang/' . $item->foto) }}"
                                                    alt="product image" loading="lazy" />

                                                <div
                                                    class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                    <ul
                                                        class="flex items-center justify-center bg-white shadow opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all ease-linear transform translate-y-4 group-hover:-translate-y-0">
                                                        <li>
                                                            <a href="#modal-cart{{ $item->id }}"
                                                                class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle px-4 py-4"
                                                                aria-label="quick veiw" data-tippy-content="Quick View">
                                                                <i class="icon-magnifier-add"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- actions start -->



                                                <!-- actions end -->


                                                <!-- variants start -->


                                                <!-- variants end -->
                                            </div>

                                            <div class="py-5 px-4">
                                                <h4><a class="block text-base hover:text-orange transition-all"
                                                        href="#">{{ $item->nama }}</a></h4>
                                                <h5 class="font-bold text-md leading-none text-orange mt-3">
                                                    {{ $item->harga }}
                                                </h5>
                                            </div>
                                        </div>

                                    </div>
                                @endforeach
                            </div>
                        </div>

                        @foreach ($barangs as $item)
                            <div id="modal-cart{{ $item->id }}"
                                class="modal fixed opacity-0 transition-opacity duration-300 ease-linear md:w-11/12 md:max-w-1000 hidden z-40 left-8 right-8 md:left-1/2 top-1/2 transform -translate-y-1/2 md:-translate-x-1/2 p-7 bg-white">
                                <div class="grid md:grid-cols-2 gap-4">
                                    <div class="w-full">
                                        <img class="w-full h-full"
                                            src="{{ asset('storage/pendataanbarang/' . $item->foto) }}"
                                            alt="product image" loading="lazy" width="50px" height="50px" />
                                    </div>
                                    <div>
                                        <button class="text-black text-lg absolute top-7 right-7 modal-close"><i
                                                class="icon-close"></i></button>

                                        <h3 class="text-dark font-medium text-md lg:text-lg leading-none mb-4">
                                            {{ $item->nama }}</h3>
                                        <h5 class="font-bold text-md leading-none text-orange mb-8">
                                            {{ $item->harga }}
                                        </h5>

                                        <p class="mb-5 text-sm">{{ $item->deskripsi }}</p>
                                    </div>
                                </div>

                            </div>
                        @endforeach

                        <div id="list" class="shop-tab-content">
                            <div class="flex flex-wrap -mb-7 -px-4">

                                <div class="w-full px-4 mb-7">
                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative flex flex-wrap flex-col md:flex-row">
                                        <div class="relative overflow-hidden md:w-1/3">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="md:absolute w-full md:h-full md:object-cover"
                                                src="kode/images/products/drone/product1.webp" alt="product image"
                                                loading="lazy" width="432" height="480" />
                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul
                                                    class="flex items-center justify-center bg-white shadow opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all ease-linear transform translate-y-4 group-hover:-translate-y-0">
                                                    <li>
                                                        <a href="#modal-cart"
                                                            class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle px-4 py-4"
                                                            aria-label="quick veiw" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier-add"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- actions end -->


                                            <!-- variants start -->

                                            <div
                                                class="p-2 bg-gray-200 shadow absolute left-2 right-2 -bottom-40 group-hover:bottom-2 z-20 transition-all duration-500 ease-linear">
                                                <ul class="flex flex-wrap items-center justify-center mb-3">
                                                    <li class="mx-1 leading-none"><button class="text-sm">sm</button>
                                                    </li>
                                                    <li class="mx-1 leading-none"><button class="text-sm">l</button>
                                                    </li>
                                                    <li class="mx-1 leading-none"><button class="text-sm">m</button>
                                                    </li>
                                                    <li class="mx-1 leading-none"><button class="text-sm">xl</button>
                                                    </li>
                                                    <li class="mx-1 leading-none"><button class="text-sm">xxl</button>
                                                    </li>
                                                </ul>
                                                <ul class="flex flex-wrap items-center justify-center">
                                                    <li class="mx-1 leading-none"><button
                                                            class="w-4 h-4 rounded-full bg-orange"
                                                            aria-label="colors"></button></li>
                                                    <li class="mx-1 leading-none"><button
                                                            class="w-4 h-4 rounded-full bg-primary"
                                                            aria-label="variants"></button></li>
                                                    <li class="mx-1 leading-none"><button
                                                            class="w-4 h-4 rounded-full bg-indigo-600"
                                                            aria-label="variants"></button></li>
                                                    <li class="mx-1 leading-none"><button
                                                            class="w-4 h-4 rounded-full bg-dark"
                                                            aria-label="variants"></button></li>
                                                </ul>
                                            </div>

                                            <!-- variants end -->
                                        </div>

                                        <div class="py-5 px-4 flex-1">
                                            <h4><a class="block text-md hover:text-orange transition-all mb-2"
                                                    href="#">Batin crofessor pampden</a></h4>
                                            <p class="text-sm">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered alteration in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>

                                            <h5 class="font-bold text-md leading-none text-orange mt-4 mb-4"><del
                                                    class="font-normal text-sm mr-1 inline-block">$110.00</del>$130.00
                                            </h5>

                                            <ul class="flex items-center">
                                                <li class="mr-2">
                                                    <a href="whishlist.html"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                        aria-label="Add to wishlist"
                                                        data-tippy-content="Add to wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="#modal-addto-cart"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange modal-toggle"
                                                        aria-label="Add to cart" data-tippy-content="Add to cart">
                                                        <i class="icon-basket-loaded"></i>
                                                        <span class="text-sm ml-2">Add to cart</span>

                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="compare.html"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                        aria-label="Compare" data-tippy-content="Compare">
                                                        <i class="icon-refresh"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="w-full px-4 mb-7">
                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative flex flex-wrap flex-col md:flex-row">
                                        <div class="relative overflow-hidden md:w-1/3">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">New</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="md:absolute w-full md:h-full md:object-cover"
                                                src="kode/images/products/drone/product2.webp" alt="product image"
                                                loading="lazy" width="432" height="480" />

                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul
                                                    class="flex items-center justify-center bg-white shadow opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all ease-linear transform translate-y-4 group-hover:-translate-y-0">
                                                    <li>
                                                        <a href="#modal-cart"
                                                            class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle px-4 py-4"
                                                            aria-label="quick veiw" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier-add"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- actions end -->
                                        </div>

                                        <div class="py-5 px-4 flex-1">
                                            <h4><a class="block text-md hover:text-orange transition-all mb-2"
                                                    href="#">Esse quam nihil molestiae</a></h4>
                                            <p class="text-sm">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered alteration in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>
                                            <h5 class="font-bold text-md leading-none text-orange mt-4 mb-4"><del
                                                    class="font-normal text-sm mr-1 inline-block">$110.00</del>$130.00
                                            </h5>
                                            <ul class="flex items-center">
                                                <li class="mr-2">
                                                    <a href="whishlist.html"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                        aria-label="Add to wishlist"
                                                        data-tippy-content="Add to wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="#modal-addto-cart"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange modal-toggle"
                                                        aria-label="Add to cart" data-tippy-content="Add to cart">
                                                        <i class="icon-basket-loaded"></i>
                                                        <span class="text-sm ml-2">Add to cart</span>

                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="compare.html"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                        aria-label="Compare" data-tippy-content="Compare">
                                                        <i class="icon-refresh"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="w-full px-4 mb-7">

                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative flex flex-wrap flex-col md:flex-row">
                                        <div class="relative overflow-hidden md:w-1/3">
                                            <img class="md:absolute w-full md:h-full md:object-cover"
                                                src="kode/images/products/drone/product3.webp" alt="product image"
                                                loading="lazy" width="432" height="480" />
                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul
                                                    class="flex items-center justify-center bg-white shadow opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all ease-linear transform translate-y-4 group-hover:-translate-y-0">
                                                    <li>
                                                        <a href="#modal-cart"
                                                            class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle px-4 py-4"
                                                            aria-label="quick veiw" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier-add"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- actions end -->

                                        </div>

                                        <div class="py-5 px-4 flex-1">
                                            <h4><a class="block text-md hover:text-orange transition-all mb-2"
                                                    href="#">Inisd deofessor smpden</a></h4>
                                            <p class="text-sm">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered alteration in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>

                                            <h5 class="font-bold text-md leading-none text-orange mt-4 mb-4"><del
                                                    class="font-normal text-sm mr-1 inline-block">$110.00</del>$130.00
                                            </h5>
                                            <ul class="flex items-center">
                                                <li class="mr-2">
                                                    <a href="whishlist.html"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                        aria-label="Add to wishlist"
                                                        data-tippy-content="Add to wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="#modal-addto-cart"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange modal-toggle"
                                                        aria-label="Add to cart" data-tippy-content="Add to cart">
                                                        <i class="icon-basket-loaded"></i>
                                                        <span class="text-sm ml-2">Add to cart</span>

                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="compare.html"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                        aria-label="Compare" data-tippy-content="Compare">
                                                        <i class="icon-refresh"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full px-4 mb-7">


                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative flex flex-wrap flex-col md:flex-row">
                                        <div class="relative overflow-hidden md:w-1/3">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">New</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="md:absolute w-full md:h-full md:object-cover"
                                                src="kode/images/products/drone/product4.webp" alt="product image"
                                                loading="lazy" width="432" height="480" />
                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul
                                                    class="flex items-center justify-center bg-white shadow opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all ease-linear transform translate-y-4 group-hover:-translate-y-0">
                                                    <li>
                                                        <a href="#modal-cart"
                                                            class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle px-4 py-4"
                                                            aria-label="quick veiw" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier-add"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- actions end -->


                                            <!-- variants start -->

                                            <div
                                                class="p-2 bg-gray-200 shadow absolute left-2 right-2 -bottom-40 group-hover:bottom-2 z-20 transition-all duration-500 ease-linear">
                                                <ul class="flex flex-wrap items-center justify-center mb-3">
                                                    <li class="mx-1 leading-none"><button class="text-sm">sm</button>
                                                    </li>
                                                    <li class="mx-1 leading-none"><button class="text-sm">l</button>
                                                    </li>
                                                    <li class="mx-1 leading-none"><button class="text-sm">m</button>
                                                    </li>
                                                    <li class="mx-1 leading-none"><button class="text-sm">xl</button>
                                                    </li>
                                                    <li class="mx-1 leading-none"><button class="text-sm">xxl</button>
                                                    </li>
                                                </ul>
                                                <ul class="flex flex-wrap items-center justify-center">
                                                    <li class="mx-1 leading-none"><button
                                                            class="w-4 h-4 rounded-full bg-orange"
                                                            aria-label="colors"></button></li>
                                                    <li class="mx-1 leading-none"><button
                                                            class="w-4 h-4 rounded-full bg-primary"
                                                            aria-label="variants"></button></li>
                                                    <li class="mx-1 leading-none"><button
                                                            class="w-4 h-4 rounded-full bg-indigo-600"
                                                            aria-label="variants"></button></li>
                                                    <li class="mx-1 leading-none"><button
                                                            class="w-4 h-4 rounded-full bg-dark"
                                                            aria-label="variants"></button></li>
                                                </ul>
                                            </div>

                                            <!-- variants end -->
                                        </div>

                                        <div class="py-5 px-4 flex-1">
                                            <h4><a class="block text-md hover:text-orange transition-all mb-2"
                                                    href="#">Nam libero tempore,</a></h4>
                                            <p class="text-sm">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered alteration in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>
                                            <h5 class="font-bold text-md leading-none text-orange mt-4 mb-4"><del
                                                    class="font-normal text-sm mr-1 inline-block">$110.00</del>$130.00
                                            </h5>
                                            <ul class="flex items-center">
                                                <li class="mr-2">
                                                    <a href="whishlist.html"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                        aria-label="Add to wishlist"
                                                        data-tippy-content="Add to wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="#modal-addto-cart"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange modal-toggle"
                                                        aria-label="Add to cart" data-tippy-content="Add to cart">
                                                        <i class="icon-basket-loaded"></i>
                                                        <span class="text-sm ml-2">Add to cart</span>

                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="compare.html"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                        aria-label="Compare" data-tippy-content="Compare">
                                                        <i class="icon-refresh"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <div class="w-full px-4 mb-7">

                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative flex flex-wrap flex-col md:flex-row">
                                        <div class="relative overflow-hidden md:w-1/3">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">New</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="md:absolute w-full md:h-full md:object-cover"
                                                src="kode/images/products/drone/product5.webp" alt="product image"
                                                loading="lazy" width="432" height="480" />
                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul
                                                    class="flex items-center justify-center bg-white shadow opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all ease-linear transform translate-y-4 group-hover:-translate-y-0">
                                                    <li>
                                                        <a href="#modal-cart"
                                                            class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle px-4 py-4"
                                                            aria-label="quick veiw" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier-add"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- actions end -->


                                            <!-- variants start -->

                                            <div
                                                class="p-2 bg-gray-200 shadow absolute left-2 right-2 -bottom-40 group-hover:bottom-2 z-20 transition-all duration-500 ease-linear">
                                                <ul class="flex flex-wrap items-center justify-center mb-3">
                                                    <li class="mx-1 leading-none"><button class="text-sm">sm</button>
                                                    </li>
                                                    <li class="mx-1 leading-none"><button class="text-sm">l</button>
                                                    </li>
                                                    <li class="mx-1 leading-none"><button class="text-sm">m</button>
                                                    </li>
                                                    <li class="mx-1 leading-none"><button class="text-sm">xl</button>
                                                    </li>
                                                    <li class="mx-1 leading-none"><button class="text-sm">xxl</button>
                                                    </li>
                                                </ul>
                                                <ul class="flex flex-wrap items-center justify-center">
                                                    <li class="mx-1 leading-none"><button
                                                            class="w-4 h-4 rounded-full bg-orange"
                                                            aria-label="colors"></button></li>
                                                    <li class="mx-1 leading-none"><button
                                                            class="w-4 h-4 rounded-full bg-primary"
                                                            aria-label="variants"></button></li>
                                                    <li class="mx-1 leading-none"><button
                                                            class="w-4 h-4 rounded-full bg-indigo-600"
                                                            aria-label="variants"></button></li>
                                                    <li class="mx-1 leading-none"><button
                                                            class="w-4 h-4 rounded-full bg-dark"
                                                            aria-label="variants"></button></li>
                                                </ul>
                                            </div>

                                            <!-- variants end -->


                                            <!-- countdown start -->

                                            <div
                                                class="absolute w-full bottom-0 group-hover:opacity-0 group-hover:invisible transition-all">
                                                <div class="countdown bg-dark item-1 flex flex-wrap justify-evenly p-2"
                                                    data-countdown="2022/11/20" data-format="short">
                                                    <div
                                                        class="countdown__item flex flex-wrap items-baseline flex-col">
                                                        <span
                                                            class="countdown__time mr-1 text-base text-white font-500 daysLeft"></span>
                                                        <span
                                                            class="countdown__text capitalize text-sm text-white font-light daysText"></span>
                                                    </div>
                                                    <div
                                                        class="countdown__item flex flex-wrap items-baseline flex-col">
                                                        <span
                                                            class="countdown__time mr-1 text-base text-white font-500 hoursLeft"></span>
                                                        <span
                                                            class="countdown__text capitalize text-sm text-white font-light hoursText"></span>
                                                    </div>
                                                    <div
                                                        class="countdown__item flex flex-wrap items-baseline flex-col">
                                                        <span
                                                            class="countdown__time mr-1 text-base text-white font-500 minsLeft"></span>
                                                        <span
                                                            class="countdown__text capitalize text-sm text-white font-light minsText"></span>
                                                    </div>
                                                    <div
                                                        class="countdown__item flex flex-wrap items-baseline flex-col">
                                                        <span
                                                            class="countdown__time mr-1 text-base text-white font-500 secsLeft"></span>
                                                        <span
                                                            class="countdown__text capitalize text-sm text-white font-light secsText"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- countdown end -->
                                        </div>

                                        <div class="py-5 px-4 flex-1">
                                            <h4><a class="block text-md hover:text-orange transition-all mb-2"
                                                    href="#">Catin uofessor eampden</a></h4>
                                            <p class="text-sm">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered alteration in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>
                                            <h5 class="font-bold text-md leading-none text-orange mt-4 mb-4"><del
                                                    class="font-normal text-sm mr-1 inline-block">$110.00</del>$130.00
                                            </h5>
                                            <ul class="flex items-center">
                                                <li class="mr-2">
                                                    <a href="whishlist.html"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                        aria-label="Add to wishlist"
                                                        data-tippy-content="Add to wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="#modal-addto-cart"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange modal-toggle"
                                                        aria-label="Add to cart" data-tippy-content="Add to cart">
                                                        <i class="icon-basket-loaded"></i>
                                                        <span class="text-sm ml-2">Add to cart</span>

                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="compare.html"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                        aria-label="Compare" data-tippy-content="Compare">
                                                        <i class="icon-refresh"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="w-full px-4 mb-7">

                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative flex flex-wrap flex-col md:flex-row">
                                        <div class="relative overflow-hidden md:w-1/3">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="md:absolute w-full md:h-full md:object-cover"
                                                src="kode/images/products/bags/product1.webp" alt="product image"
                                                loading="lazy" width="432" height="480" />
                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul
                                                    class="flex items-center justify-center bg-white shadow opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all ease-linear transform translate-y-4 group-hover:-translate-y-0">
                                                    <li>
                                                        <a href="#modal-cart"
                                                            class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle px-4 py-4"
                                                            aria-label="quick veiw" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier-add"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- actions end -->


                                            <!-- variants start -->

                                            <div
                                                class="p-2 bg-gray-200 shadow absolute left-2 right-2 -bottom-40 group-hover:bottom-2 z-20 transition-all duration-500 ease-linear">
                                                <ul class="flex flex-wrap items-center justify-center mb-3">
                                                    <li class="mx-1 leading-none"><button class="text-sm">sm</button>
                                                    </li>
                                                    <li class="mx-1 leading-none"><button class="text-sm">l</button>
                                                    </li>
                                                    <li class="mx-1 leading-none"><button class="text-sm">m</button>
                                                    </li>
                                                    <li class="mx-1 leading-none"><button class="text-sm">xl</button>
                                                    </li>
                                                    <li class="mx-1 leading-none"><button class="text-sm">xxl</button>
                                                    </li>
                                                </ul>
                                                <ul class="flex flex-wrap items-center justify-center">
                                                    <li class="mx-1 leading-none"><button
                                                            class="w-4 h-4 rounded-full bg-orange"
                                                            aria-label="colors"></button></li>
                                                    <li class="mx-1 leading-none"><button
                                                            class="w-4 h-4 rounded-full bg-primary"
                                                            aria-label="variants"></button></li>
                                                    <li class="mx-1 leading-none"><button
                                                            class="w-4 h-4 rounded-full bg-indigo-600"
                                                            aria-label="variants"></button></li>
                                                    <li class="mx-1 leading-none"><button
                                                            class="w-4 h-4 rounded-full bg-dark"
                                                            aria-label="variants"></button></li>
                                                </ul>
                                            </div>

                                            <!-- variants end -->
                                        </div>

                                        <div class="py-5 px-4 flex-1">
                                            <h4><a class="block text-md hover:text-orange transition-all mb-2"
                                                    href="#">Every pleasure is to be</a></h4>
                                            <p class="text-sm">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered alteration in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>
                                            <h5 class="font-bold text-md leading-none text-orange mt-4 mb-4"><del
                                                    class="font-normal text-sm mr-1 inline-block">$110.00</del>$130.00
                                            </h5>
                                            <ul class="flex items-center">
                                                <li class="mr-2">
                                                    <a href="whishlist.html"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                        aria-label="Add to wishlist"
                                                        data-tippy-content="Add to wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="#modal-addto-cart"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange modal-toggle"
                                                        aria-label="Add to cart" data-tippy-content="Add to cart">
                                                        <i class="icon-basket-loaded"></i>
                                                        <span class="text-sm ml-2">Add to cart</span>

                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="compare.html"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                        aria-label="Compare" data-tippy-content="Compare">
                                                        <i class="icon-refresh"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="w-full px-4 mb-7">

                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative flex flex-wrap flex-col md:flex-row">
                                        <div class="relative overflow-hidden md:w-1/3">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">New</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="md:absolute w-full md:h-full md:object-cover"
                                                src="kode/images/products/bags/product2.webp" alt="product image"
                                                loading="lazy" width="432" height="480" />
                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul
                                                    class="flex items-center justify-center bg-white shadow opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all ease-linear transform translate-y-4 group-hover:-translate-y-0">
                                                    <li>
                                                        <a href="#modal-cart"
                                                            class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle px-4 py-4"
                                                            aria-label="quick veiw" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier-add"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- actions end -->
                                        </div>


                                        <div class="py-5 px-4 flex-1">
                                            <h4><a class="block text-md hover:text-orange transition-all mb-2"
                                                    href="#">Simple and repellendus</a></h4>
                                            <p class="text-sm">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered alteration in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>
                                            <h5 class="font-bold text-md leading-none text-orange mt-4 mb-4"><del
                                                    class="font-normal text-sm mr-1 inline-block">$110.00</del>$130.00
                                            </h5>
                                            <ul class="flex items-center">
                                                <li class="mr-2">
                                                    <a href="whishlist.html"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                        aria-label="Add to wishlist"
                                                        data-tippy-content="Add to wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="#modal-addto-cart"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange modal-toggle"
                                                        aria-label="Add to cart" data-tippy-content="Add to cart">
                                                        <i class="icon-basket-loaded"></i>
                                                        <span class="text-sm ml-2">Add to cart</span>

                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="compare.html"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                        aria-label="Compare" data-tippy-content="Compare">
                                                        <i class="icon-refresh"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                    </div>

                                </div>
                                <div class="w-full px-4 mb-7">

                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative flex flex-wrap flex-col md:flex-row">
                                        <div class="relative overflow-hidden md:w-1/3">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">New</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="md:absolute w-full md:h-full md:object-cover"
                                                src="kode/images/products/bags/product5.webp" alt="product image"
                                                loading="lazy" width="432" height="480" />
                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul
                                                    class="flex items-center justify-center bg-white shadow opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all ease-linear transform translate-y-4 group-hover:-translate-y-0">
                                                    <li>
                                                        <a href="#modal-cart"
                                                            class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle px-4 py-4"
                                                            aria-label="quick veiw" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier-add"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- actions end -->


                                            <!-- variants start -->

                                            <div
                                                class="p-2 bg-gray-200 shadow absolute left-2 right-2 -bottom-40 group-hover:bottom-2 z-20 transition-all duration-500 ease-linear">
                                                <ul class="flex flex-wrap items-center justify-center mb-3">
                                                    <li class="mx-1 leading-none"><button class="text-sm">sm</button>
                                                    </li>
                                                    <li class="mx-1 leading-none"><button class="text-sm">l</button>
                                                    </li>
                                                    <li class="mx-1 leading-none"><button class="text-sm">m</button>
                                                    </li>
                                                    <li class="mx-1 leading-none"><button class="text-sm">xl</button>
                                                    </li>
                                                    <li class="mx-1 leading-none"><button class="text-sm">xxl</button>
                                                    </li>
                                                </ul>
                                                <ul class="flex flex-wrap items-center justify-center">
                                                    <li class="mx-1 leading-none"><button
                                                            class="w-4 h-4 rounded-full bg-orange"
                                                            aria-label="colors"></button></li>
                                                    <li class="mx-1 leading-none"><button
                                                            class="w-4 h-4 rounded-full bg-primary"
                                                            aria-label="variants"></button></li>
                                                    <li class="mx-1 leading-none"><button
                                                            class="w-4 h-4 rounded-full bg-indigo-600"
                                                            aria-label="variants"></button></li>
                                                    <li class="mx-1 leading-none"><button
                                                            class="w-4 h-4 rounded-full bg-dark"
                                                            aria-label="variants"></button></li>
                                                </ul>
                                            </div>

                                            <!-- variants end -->
                                        </div>

                                        <div class="py-5 px-4 flex-1">
                                            <h4><a class="block text-md hover:text-orange transition-all mb-2"
                                                    href="#">Architecto non provident</a></h4>
                                            <p class="text-sm">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered alteration in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>
                                            <h5 class="font-bold text-md leading-none text-orange mt-4 mb-4"><del
                                                    class="font-normal text-sm mr-1 inline-block">$110.00</del>$130.00
                                            </h5>
                                            <ul class="flex items-center">
                                                <li class="mr-2">
                                                    <a href="whishlist.html"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                        aria-label="Add to wishlist"
                                                        data-tippy-content="Add to wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="#modal-addto-cart"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange modal-toggle"
                                                        aria-label="Add to cart" data-tippy-content="Add to cart">
                                                        <i class="icon-basket-loaded"></i>
                                                        <span class="text-sm ml-2">Add to cart</span>

                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="compare.html"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                        aria-label="Compare" data-tippy-content="Compare">
                                                        <i class="icon-refresh"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full px-4 mb-7">

                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative flex flex-wrap flex-col md:flex-row">
                                        <div class="relative overflow-hidden md:w-1/3">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">New</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="md:absolute w-full md:h-full md:object-cover"
                                                src="kode/images/products/bags/product3.webp" alt="product image"
                                                loading="lazy" width="432" height="480" />
                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul
                                                    class="flex items-center justify-center bg-white shadow opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all ease-linear transform translate-y-4 group-hover:-translate-y-0">
                                                    <li>
                                                        <a href="#modal-cart"
                                                            class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle px-4 py-4"
                                                            aria-label="quick veiw" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier-add"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- actions end -->
                                        </div>

                                        <div class="py-5 px-4 flex-1">
                                            <h4><a class="block text-md hover:text-orange transition-all mb-2"
                                                    href="#">Simple and easy</a></h4>
                                            <p class="text-sm">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered alteration in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>
                                            <h5 class="font-bold text-md leading-none text-orange mt-4 mb-4"><del
                                                    class="font-normal text-sm mr-1 inline-block">$110.00</del>$130.00
                                            </h5>
                                            <ul class="flex items-center">
                                                <li class="mr-2">
                                                    <a href="whishlist.html"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                        aria-label="Add to wishlist"
                                                        data-tippy-content="Add to wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="#modal-addto-cart"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange modal-toggle"
                                                        aria-label="Add to cart" data-tippy-content="Add to cart">
                                                        <i class="icon-basket-loaded"></i>
                                                        <span class="text-sm ml-2">Add to cart</span>

                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="compare.html"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                        aria-label="Compare" data-tippy-content="Compare">
                                                        <i class="icon-refresh"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="w-full px-4 mb-7">

                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative flex flex-wrap flex-col md:flex-row">
                                        <div class="relative overflow-hidden md:w-1/3">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">New</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="md:absolute w-full md:h-full md:object-cover"
                                                src="kode/images/products/bags/product4.webp" alt="product image"
                                                loading="lazy" width="432" height="480" />
                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul
                                                    class="flex items-center justify-center bg-white shadow opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all ease-linear transform translate-y-4 group-hover:-translate-y-0">
                                                    <li>
                                                        <a href="#modal-cart"
                                                            class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle px-4 py-4"
                                                            aria-label="quick veiw" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier-add"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- actions end -->


                                            <!-- variants start -->

                                            <div
                                                class="p-2 bg-gray-200 shadow absolute left-2 right-2 -bottom-40 group-hover:bottom-2 z-20 transition-all duration-500 ease-linear">
                                                <ul class="flex flex-wrap items-center justify-center mb-3">
                                                    <li class="mx-1 leading-none"><button class="text-sm">sm</button>
                                                    </li>
                                                    <li class="mx-1 leading-none"><button class="text-sm">l</button>
                                                    </li>
                                                    <li class="mx-1 leading-none"><button class="text-sm">m</button>
                                                    </li>
                                                    <li class="mx-1 leading-none"><button class="text-sm">xl</button>
                                                    </li>
                                                    <li class="mx-1 leading-none"><button class="text-sm">xxl</button>
                                                    </li>
                                                </ul>
                                                <ul class="flex flex-wrap items-center justify-center">
                                                    <li class="mx-1 leading-none"><button
                                                            class="w-4 h-4 rounded-full bg-orange"
                                                            aria-label="colors"></button></li>
                                                    <li class="mx-1 leading-none"><button
                                                            class="w-4 h-4 rounded-full bg-primary"
                                                            aria-label="variants"></button></li>
                                                    <li class="mx-1 leading-none"><button
                                                            class="w-4 h-4 rounded-full bg-indigo-600"
                                                            aria-label="variants"></button></li>
                                                    <li class="mx-1 leading-none"><button
                                                            class="w-4 h-4 rounded-full bg-dark"
                                                            aria-label="variants"></button></li>
                                                </ul>
                                            </div>

                                            <!-- variants end -->
                                        </div>

                                        <div class="py-5 px-4 flex-1">
                                            <h4><a class="block text-md hover:text-orange transition-all mb-2"
                                                    href="#">Cupiditate non provident</a></h4>
                                            <p class="text-sm">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered alteration in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>
                                            <h5 class="font-bold text-md leading-none text-orange mt-4 mb-4"><del
                                                    class="font-normal text-sm mr-1 inline-block">$110.00</del>$130.00
                                            </h5>
                                            <ul class="flex items-center">
                                                <li class="mr-2">
                                                    <a href="whishlist.html"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                        aria-label="Add to wishlist"
                                                        data-tippy-content="Add to wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="#modal-addto-cart"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange modal-toggle"
                                                        aria-label="Add to cart" data-tippy-content="Add to cart">
                                                        <i class="icon-basket-loaded"></i>
                                                        <span class="text-sm ml-2">Add to cart</span>

                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="compare.html"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                        aria-label="Compare" data-tippy-content="Compare">
                                                        <i class="icon-refresh"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full px-4 mb-7">

                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative flex flex-wrap flex-col md:flex-row">
                                        <div class="relative overflow-hidden md:w-1/3">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="md:absolute w-full md:h-full md:object-cover"
                                                src="kode/images/products/drone/product1.webp" alt="product image"
                                                loading="lazy" width="432" height="480" />
                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul
                                                    class="flex items-center justify-center bg-white shadow opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all ease-linear transform translate-y-4 group-hover:-translate-y-0">
                                                    <li>
                                                        <a href="#modal-cart"
                                                            class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle px-4 py-4"
                                                            aria-label="quick veiw" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier-add"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- actions end -->


                                            <!-- variants start -->

                                            <div
                                                class="p-2 bg-gray-200 shadow absolute left-2 right-2 -bottom-40 group-hover:bottom-2 z-20 transition-all duration-500 ease-linear">
                                                <ul class="flex flex-wrap items-center justify-center mb-3">
                                                    <li class="mx-1 leading-none"><button class="text-sm">sm</button>
                                                    </li>
                                                    <li class="mx-1 leading-none"><button class="text-sm">l</button>
                                                    </li>
                                                    <li class="mx-1 leading-none"><button class="text-sm">m</button>
                                                    </li>
                                                    <li class="mx-1 leading-none"><button class="text-sm">xl</button>
                                                    </li>
                                                    <li class="mx-1 leading-none"><button class="text-sm">xxl</button>
                                                    </li>
                                                </ul>
                                                <ul class="flex flex-wrap items-center justify-center">
                                                    <li class="mx-1 leading-none"><button
                                                            class="w-4 h-4 rounded-full bg-orange"
                                                            aria-label="colors"></button></li>
                                                    <li class="mx-1 leading-none"><button
                                                            class="w-4 h-4 rounded-full bg-primary"
                                                            aria-label="variants"></button></li>
                                                    <li class="mx-1 leading-none"><button
                                                            class="w-4 h-4 rounded-full bg-indigo-600"
                                                            aria-label="variants"></button></li>
                                                    <li class="mx-1 leading-none"><button
                                                            class="w-4 h-4 rounded-full bg-dark"
                                                            aria-label="variants"></button></li>
                                                </ul>
                                            </div>

                                            <!-- variants end -->
                                        </div>

                                        <div class="py-5 px-4 flex-1">
                                            <h4><a class="block text-md hover:text-orange transition-all mb-2"
                                                    href="#">Batin crofessor pampden</a></h4>
                                            <p class="text-sm">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered alteration in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>
                                            <h5 class="font-bold text-md leading-none text-orange mt-4 mb-4"><del
                                                    class="font-normal text-sm mr-1 inline-block">$110.00</del>$130.00
                                            </h5>
                                            <ul class="flex items-center">
                                                <li class="mr-2">
                                                    <a href="whishlist.html"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                        aria-label="Add to wishlist"
                                                        data-tippy-content="Add to wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="#modal-addto-cart"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange modal-toggle"
                                                        aria-label="Add to cart" data-tippy-content="Add to cart">
                                                        <i class="icon-basket-loaded"></i>
                                                        <span class="text-sm ml-2">Add to cart</span>

                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="compare.html"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                        aria-label="Compare" data-tippy-content="Compare">
                                                        <i class="icon-refresh"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="w-full px-4 mb-7">

                                    <div
                                        class="border border-solid border-gray-300 transition-all hover:shadow-product group relative flex flex-wrap flex-col md:flex-row">
                                        <div class="relative overflow-hidden md:w-1/3">
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 left-3">New</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-3 right-3">Sale</span>
                                            <span
                                                class="font-medium uppercase text-sm text-black inline-block py-1 px-2 leading-none absolute top-10 right-3">-11%</span>
                                            <img class="md:absolute w-full md:h-full md:object-cover"
                                                src="kode/images/products/drone/product2.webp" alt="product image"
                                                loading="lazy" width="432" height="480" />

                                            <!-- actions start -->

                                            <div
                                                class="absolute left-2/4 top-2/4 transform -translate-x-2/4 -translate-y-2/4 z-10">
                                                <ul
                                                    class="flex items-center justify-center bg-white shadow opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all ease-linear transform translate-y-4 group-hover:-translate-y-0">
                                                    <li>
                                                        <a href="#modal-cart"
                                                            class="text-dark flex items-center justify-center text-md hover:text-orange modal-toggle px-4 py-4"
                                                            aria-label="quick veiw" data-tippy-content="Quick View">
                                                            <i class="icon-magnifier-add"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- actions end -->
                                        </div>

                                        <div class="py-5 px-4 flex-1">
                                            <h4><a class="block text-md hover:text-orange transition-all mb-2"
                                                    href="#">Esse quam nihil molestiae</a></h4>
                                            <p class="text-sm">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered alteration in some form, by
                                                injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>
                                            <h5 class="font-bold text-md leading-none text-orange mt-4 mb-4"><del
                                                    class="font-normal text-sm mr-1 inline-block">$110.00</del>$130.00
                                            </h5>
                                            <ul class="flex items-center">
                                                <li class="mr-2">
                                                    <a href="whishlist.html"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                        aria-label="Add to wishlist"
                                                        data-tippy-content="Add to wishlist">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="#modal-addto-cart"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange modal-toggle"
                                                        aria-label="Add to cart" data-tippy-content="Add to cart">
                                                        <i class="icon-basket-loaded"></i>
                                                        <span class="text-sm ml-2">Add to cart</span>

                                                    </a>
                                                </li>
                                                <li class="mr-2">
                                                    <a href="compare.html"
                                                        class="text-dark flex items-center justify-center text-md hover:text-white border border-solid border-dark hover:bg-orange transition-all px-4 md:px-5 py-3 leading-none hover:border-orange"
                                                        aria-label="Compare" data-tippy-content="Compare">
                                                        <i class="icon-refresh"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                    </div>

                                </div>

                            </div>




                        </div>
                    </div>

                    <div class="mt-12">
                        <ul class="pagination flex flex-wrap items-center justify-center">
                            <li class="mx-2">
                                <a class="flex flex-wrap items-center justify-center  w-11 h-11 bg-white shadow text-orange leading-none transition-all hover:bg-orange hover:text-white"
                                    href="#">
                                    <i class="icon-arrow-left"></i>
                                </a>
                            </li>

                            <li class="mx-2">
                                <a class="flex flex-wrap items-center justify-center  w-11 h-11 bg-white shadow text-orange leading-none transition-all hover:bg-orange hover:text-white active"
                                    href="#">1</a>
                            </li>
                            <li class="mx-2">
                                <a class="flex flex-wrap items-center justify-center  w-11 h-11 bg-white shadow text-orange leading-none transition-all hover:bg-orange hover:text-white"
                                    href="#">2</a>
                            </li>
                            <li class="mx-2">
                                <a class="flex flex-wrap items-center justify-center  w-11 h-11 bg-white shadow text-orange leading-none transition-all hover:bg-orange hover:text-white"
                                    href="#">3</a>
                            </li>
                            <li class="mx-2">
                                <a class="flex flex-wrap items-center justify-center  w-11 h-11 bg-white shadow text-orange leading-none transition-all hover:bg-orange hover:text-white"
                                    href="#">
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </li>
                        </ul>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- blog grid section end -->




    <!-- Footer section start -->
    <footer>

        <!-- News Letter section start -->

        <!-- News Letter section end -->

        <!-- Footer Bottom Section start -->
        <div class="footer-bottom-section py-5 bg-gray-500 justify-center">
            <div class="container">
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="flex order-last md:order-first flex-wrap items-center justify-center md:justify-start">
                        <p class="text-white flex flex-wrap items-center text-sm lg:text-base">&copy; 2023. Made
                            with <i class="icon-heart mx-2 text-orange"></i> by<a href="#"
                                class="ml-1 transition hover:text-orange">Team Yowis iki</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom Section end -->

    </footer>
    <!-- Footer section end -->

    <a id="scrollUp"
        class="w-12 h-12 rounded-full bg-orange text-white fixed right-5 bottom-16 flex flex-wrap items-center justify-center transition-all duration-300 z-10"
        href="#" aria-label="scroll up"><i class="icon-arrow-up"></i></a>

    <!-- Modals -->
    <!-- modal-overlay start -->
    <div class="modal-overlay hidden fixed inset-0 bg-black opacity-50 z-10"></div>
    <!-- modal-overlay end -->
    <!-- modal-mobile-menu start -->

    <!-- modal-mobile-menu end -->


    <!-- modal-overlay start -->
    <div class="modal-overlay hidden fixed inset-0 bg-black opacity-50 z-30"></div>
    <!-- modal-overlay end -->
    <!-- modal-mobile-menu start -->
    <div id="modal-addto-cart"
        class="modal fixed opacity-0 transition-opacity duration-300 ease-linear md:w-11/12 md:max-w-1000 hidden z-50 left-8 right-8 md:left-1/2 top-1/2 transform -translate-y-1/2 md:-translate-x-1/2 p-7 bg-white mx-auto">


        <div class="md:flex md:flex-wrap">
            <div class="md:mr-5 md:flex-30 mb-5 md:mb-0">
                <img class="w-full" src="kode/images/products/lg/product1.webp" alt="product image" loading="lazy"
                    width="432" height="480">
            </div>
            <div class="md:flex-auto">
                <button class="text-black text-lg absolute top-7 right-7 modal-close"><i
                        class="icon-close"></i></button>
                <h3 class="text-dark font-medium text-md sm:text-lg mb-4">Airpod product kiebd</h3>
                <p class="text-dark text-sm flex flex-wrap items-center"><i class="icon-check text-lg mr-5"></i>
                    Added to cart successfully!</p>
                <div class="mt-8">
                    <a href="#"
                        class="bg-black leading-none py-2 px-5 font-normal text-sm text-white transition-all hover:bg-orange mr-5">View
                        Cart</a>
                    <a href="#"
                        class="bg-black leading-none py-2 px-5 font-normal text-sm text-white transition-all hover:bg-orange">Checkout</a>
                </div>
            </div>
        </div>

    </div>
    <!-- modal-mobile-menu end -->



    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="kode/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="kode/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="kode/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <!-- Plugins JS -->
    <script src="kode/js/plugins/swiper-bundle.min.js"></script>
    <script src="kode/js/plugins/popper.min.js"></script>
    <script src="kode/js/plugins/tippy-bundle.umd.min.js"></script>
    <script src="kode/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="kode/js/plugins/jquery.ajaxchimp.min.js"></script>

    <!-- Activation JS -->
    <script src="kode/js/main.js"></script>



</body>


<!-- Mirrored from template.hasthemes.com/sinp/sinp/shop-grid-4-column.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2023 02:23:01 GMT -->

</html>
