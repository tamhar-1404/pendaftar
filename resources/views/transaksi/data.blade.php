<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Sinp- Single Product Ecommerce HTML Template</title>
    <!-- <meta name="robots" content="noindex, follow" /> -->
    <meta name="AdsBot-Google" content="noindex follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" type="image/x-icon" href="transaksi/images/favicon.webp" />
    <link rel="stylesheet" href="transaksi/css/vendor/icofont.min.css" />
    <link rel="stylesheet" href="transaksi/css/vendor/line-awesome.min.css" />
    <link rel="stylesheet" href="transaksi/css/vendor/simple-line-icons.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="transaksi/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="transaksi/css/plugins/magnific-popup.css" />
    <link rel="stylesheet" href="transaksi/css/style.css" />
</head>
<body class="font-poppins text-dark text-sm leading-loose">

    <div class="search-form fixed top-0 left-0 w-full bg-black opacity-95 min-h-screen items-center justify-center py-8 px-10 transform  transition-transform translate-x-full ease-in-out duration-500 hidden lg:flex z-50">
        <button class="search-close absolute left-1/2 text-white text-xl top-12 translate-y-1/2" aria-label="close icon"><span class="icon-close"></span></button>
        <form class="relative xl:w-1/3 lg:w-1/2" action="#" method="get">
            <input class="text-md font-normal border-b border-solid border-gray-600 bg-transparent h-14 w-full focus:outline-none pr-14 text-white" type="search" name="search" placeholder="Search our store" />
            <button class="absolute right-0 top-3 text-white text-md font-normal" type="submit" aria-label="submit button"><i class="icon-magnifier"></i></button>
        </form>
    </div>
    <div class="offcanvas-overlay hidden fixed inset-0 bg-black opacity-50 z-50"></div>
    <div class="py-9 bg-gray-light">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-4">
                <div class="col-span-12">
                    <nav>
                        <ul class="flex flex-wrap items-center justify-center">
                            <li class="mr-5"><a href="index.html" class="text-dark font-medium text-base uppercase transition-all hover:text-orange relative before:w-5 before:h-1px before:empty before:absolute before:top-3 before:bg-dark before:transform before:rotate-115 before:-right-5">Halaman</a></li>
                            <li class="text-dark font-medium text-base uppercase mr-5">pembelian</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="py-24">
        <div class="container">
            <div class="grid grid-cols-1 gap-x-5">
                <div class="w-full  h-7 mb-8 flex-col justify-center ">
                    <p class="text-center">scan kode barang</p>
                    <form action="" class="flex w-full justify-center">
                        <input class="border border-gray-300 w-[70%]" type="text" name="" id="">
                    </form>
                </div><br>
                <div class="overflow-x-auto">
                    <table class="w-full min-w-max">
                        <thead>
                            <tr>
                                <th class="bg-gray-300 p-3  text-center font-medium text-sm capitalize">Image</th>
                                <th class="bg-gray-300 p-3  text-center font-medium text-sm capitalize">Product</th>
                                <th class="bg-gray-300 p-3  text-center font-medium text-sm capitalize">Price</th>
                                <th class="bg-gray-300 p-3  text-center font-medium text-sm capitalize">Quantity</th>
                                <th class="bg-gray-300 p-3  text-center font-medium text-sm capitalize">Total</th>
                                <th class="bg-gray-300 p-3  text-center font-medium text-sm capitalize">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="w-32 p-3  text-center">
                                    <a href="#">
                                        <img src="transaksi/images/single-product/sm/product1.webp" alt="product image"></a>
                                </td>
                                <td class="p-3  text-center">
                                    <a href="#" class="transition-all hover:text-orange">Birpod product unsde</a><span>m / gold</span>
                                </td>
                                <td class="p-3  text-center"><span><span>$80.00</span></span></td>
                                <td class="p-3  text-center">
                                    <div class="flex count border border-solid border-gray-300 p-2 h-11">
                                        <button class="decrement flex-auto w-5 leading-none" aria-label="button">-</button>
                                        <input type="number" min="1" max="100" step="1" value="1" class="quantity__input flex-auto w-8 text-center focus:outline-none input-appearance-none">
                                        <button class="increment flex-auto w-5 leading-none" aria-label="button">+</button>
                                    </div>
                                </td>
                                <td class="p-3  text-center"><span>$80.00</span></td>
                                <td class="p-3  text-center">
                                    <a href="#" class="inline-block mx-1 hover:text-orange transition-all"><i class="icon-close"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="transaksi/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="transaksi/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="transaksi/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="transaksi/js/plugins/swiper-bundle.min.js"></script>
    <script src="transaksi/js/plugins/popper.min.js"></script>
    <script src="transaksi/js/plugins/tippy-bundle.umd.min.js"></script>
    <script src="transaksi/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="transaksi/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="transaksi/js/main.js"></script>
</body>
</html>
