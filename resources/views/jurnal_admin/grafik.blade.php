<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Jurnal</title>
    @vite('resources/css/app.css')
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
    rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="admin/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('admin/assets/css/perfect-scrollbar.min.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('admin/assets/css/style.css') }}" />
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    {{--  <link defer rel="stylesheet" type="text/css" media="screen" href="{{ asset('admin/assets/css/animate.css') }}" />  --}}
    <script src="{{ asset('admin/assets/js/perfect-scrollbar.min.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/tippy-bundle.umd.min.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/sweetalert.min.js') }}"></script>
    {{--  <!-- Javascript Assets -->  --}}
    <script src="admin/js/app.js" defer></script>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
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
      <style>
        /* Menyembunyikan tombol cetak saat mencetak */
        @media print {
            .kamu-tak-diajak {
                display: none;
            }
            .print-container {
            position: absolute;
            top: 20px;
            left: 0;
            }
        }
    </style>
</head>
<body>

    <div>

    </div>
    @include('jurnal_admin.layout')

    <div class="pl-[px] " id="content">

     <!-- Navbar -->
     <nav id="main-navbar"
     class=" relative left-0  right-0 top-0 flex  flex-nowrap items-center justify-between bg-white py-[0.6rem] text-gray-500 shadow-lg hover:text-gray-700 focus:text-gray-700 dark:bg-zinc-700 lg:flex-wrap lg:justify-start fixed"
     data-te-navbar-ref>
     <!-- Container wrapper -->

     <div class="flex w-full flex-wrap items-center justify-between px-4 ">
         <div class="flex gap-4">
             <!-- Toggler -->
             <div class="flex items-center justify-between ltr:mr-2 rtl:ml-2 ">
                 <a href="index-2.html" class="main-logo flex shrink-9 items-center">
                     <img class="inline w-40 ltr:-ml-1 rtl:-mr-1 hidden"
                         src="{{ asset('admin/assets/images/humma.png') }}" alt="image" />
                 </a>
             </div>
             <button
                 class=" mt-0.5 inline-block rounded bg-info px-3 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
                 data-te-sidenav-toggle-ref data-te-target="#sidenav-2" aria-controls="#sidenav-2"
                 aria-haspopup="true">
                 <span class="block [&>svg]:h-5 [&>svg]:w-5 ">
                     <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                         <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->

                         <path fill="currentColor"
                             d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                     </svg>
                 </span>
             </button>
             <!-- Toggler -->

             <!-- Search form -->
             <form class="relative  mr-auto flex flex-wrap items-stretch xl:mx-0">
                 <input autocomplete="off" type="search"
                     class="relative m-0 inline-block w-[1%] min-w-[225px] flex-auto rounded border border-solid border-gray-300 bg-transparent bg-clip-padding px-3 py-1.5 text-base font-normal text-gray-700 transition duration-300 ease-in-out focus:border-primary-600 focus:text-gray-700 focus:shadow-te-primary focus:outline-none dark:text-gray-200 dark:placeholder:text-gray-200"
                     placeholder='Cari...' />
                 <span
                     class="flex items-center whitespace-nowrap rounded px-3 py-1.5 text-center text-base font-normal text-gray-700 dark:text-gray-200 [&>svg]:w-4"
                     id="basic-addon2">
                     <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search"
                         role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                         <path fill="currentColor"
                             d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                         </path>
                     </svg>
                 </span>
             </form>

         </div>

         <!-- Right links -->
         <ul class="relative flex items-center">
             <!-- Notification dropdown -->
             <li class="relative" data-te-dropdown-ref>
                 <a class="mr-4 flex items-center text-gray-500 hover:text-gray-700 focus:text-gray-700"
                     href="#" id="navbarDropdownMenuLink" role="button" data-te-dropdown-toggle-ref
                     aria-expanded="false">
                     <span class="dark:text-gray-200 [&>svg]:w-3.5">
                         <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bell"
                             role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                             <path fill="currentColor"
                                 d="M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z">
                             </path>
                         </svg>
                     </span>
                     <span
                         class="absolute -mt-2.5 ml-2 rounded-full bg-red-600 px-1.5 py-[1px] text-[0.6rem] text-white">1</span>
                 </a>
                 <ul class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-[10rem] list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-zinc-700 [&[data-te-dropdown-show]]:block"
                     aria-labelledby="navbarDropdownMenuLink" data-te-dropdown-menu-ref>
                     <li>
                         <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                             href="#" data-te-dropdown-item-ref>Some news</a>
                     </li>
                     <li>
                         <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                             href="#" data-te-dropdown-item-ref>Another news</a>
                     </li>
                     <li>
                         <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                             href="#" data-te-dropdown-item-ref>Something else here</a>
                     </li>
                 </ul>
             </li>






             <!-- Avatar -->
             <li class="relative" data-te-dropdown-ref>
                 <a class="hidden-arrow flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none"
                     href="#" id="navbarDropdownMenuLink" role="button" data-te-dropdown-toggle-ref
                     aria-expanded="false">
                     <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-full"
                         style="height: 22px; width: 22px" alt="Avatar" loading="lazy" />
                 </a>
                 <ul class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-[10rem] list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-zinc-700 [&[data-te-dropdown-show]]:block"
                     aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
                     <li>
                         <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                             href="#" data-te-dropdown-item-ref>My profile</a>
                     </li>
                     <li>
                         <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                             href="#" data-te-dropdown-item-ref>Settings</a>
                     </li>
                     <li>
                         <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                             href="#" data-te-dropdown-item-ref>Logout</a>
                     </li>
                 </ul>
             </li>
         </ul>
     </div>
     <!-- Container wrapper -->
 </nav>
    <div class="animate__animated p-6" :class="[$store.app.animation]">
        <!-- start main content section -->
        <div x-data="basic" class="">
            {{-- judul --}}
            <div class="kamu-tak-diajak mb-5 font-semibold">
                <span> jurnal / siswa    <span class="text-[#00B7FF]"></span></span>
            </div>
            <div class="panel kamu-tak-diajak">
                <div class=" flex justify-between">
                     {{-- serch dan filter --}}
                    <div class="flex justify-start items-center">
                        {{-- filter --}}
                        <div class="border-2 rounded-full border-gray-400 flex items-center mr-2 ">
                            <span class="mr-1 ml-3">
                                filter
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" mr-3 w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
                            </svg>
                        </div>
                        {{-- serch --}}
                        <div class="mr-4 ">
                            <input class=" p-1 border-2 border-gray-400 rounded-xl outline-1 outline-gray-400 dark:bg-transparent" type="text" placeholder="cari">
                        </div>
                    </div>
                    <div class="mb-5 flex justify-between grid-cols-3  mt-5 items-center">
                        <form class="flex md:w-8/12 sm:5/12" action="{{route('grafik_pdf')}}" method="get">
                            @csrf
                            <input class="" type="hidden" name="nama" value="{{$siswa}}">
                            <button type="submit" class="flex w-full gap-2  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5  py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" >
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
                                PDF
                            </button>
                        </form>
                        <form class="flex md:w-8/12 sm:5/12" action="{{route('grafik_docx')}}" method="get">
                            @csrf
                            <input class="" type="hidden" name="nama" value="{{$siswa}}">
                            <button type="submit" class="flex w-full gap-2  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5  py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" >
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
                                DOCX
                            </button>
                        </form>
                        <button id="printButton" onclick="printPage()"  type="button" class="flex gap-2 md:w-8/12 sm:5/12 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" @click="printTable">
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
                <div id="grafik_admin" class=" w-90% h-35 mx-4 bg-white rounded-lg dark:bg-black mt-4 "style="box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.25); border-radius: 8px; " >
                    <div class="w-full px-4 mt-6">
                       <div class="w-80%  bg-white h-35 pt-5 text-same font-semibold dark:bg-transparent">
                           Grafik Absensi
                       </div>
                    </div>
                </div>
             </div>

            {{-- tabel --}}

            <div class="print-container flex flex-col">
                <div class="overflow-x-auto pt-12 sm:-mx-6 lg:-mx-8">
                  <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <div class="w-80%  bg-white h-35 pb-5 text-same font-semibold dark:bg-transparent">
                            tabel jurnal
                        </div>
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
                            @forelse ( $item  as $items)
                                <tr
                                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:text-black-200 ">
                                <td class="whitespace-nowrap px-4 py-4 font-medium">{{ $loop->iteration }} </td>
                                <td class="whitespace-nowrap px-4 py-4">{{$items ->nama}}</td>
                                <td class="whitespace-nowrap px-4 py-4">{{$items ->tanggal}}</td>
                                <td class="whitespace-nowrap px-4 py-4">{{$items ->sekolah}}</td>
                                <td class="whitespace-nowrap px-4 py-4 max-w-sm overflow-hidden truncate " >{{$items ->kegiatan}}</td>
                                <td class="whitespace-nowrap px-6 pl-17 py-4"><img
                                    src="{{ asset('storage/image/' . $items->image) }}"
                                    width="100px" alt="">
                                </td>
                                <td class="whitespace-nowrap px-4 py-4">
                                    <a href="#">
                                        <div class="w-16 flex h-8 bg-white rounded-md border-2 border-[#00B7FF] justify-center items-center text-[#00B7FF] hover:bg-[#00B7FF] hover:text-white dark:bg-transparent" data-te-toggle="modal"
                                        data-modal-target="staticModal{{$items->id}}" data-modal-toggle="staticModal{{$items->id}}" ">
                                            <span class=" p-1  font-semibold dark:hover:text-black">Lihat</span>
                                        </div>
                                    </a>
                                </td>
                              </tr>

                            {{-- end tabel --}}
                            @empty

                            @endforelse


                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            {{-- end tabel --}}

            </div>
        </div>
        <!-- end main content section -->
           <!-- start footer section -->
           <p class="kamu-tak-diajak pt-6 text-center dark:text-white-dark ltr:sm:text-left rtl:sm:text-right">
            © <span id="footer-year">2022</span>. Vristo All rights reserved.
        </p>
        <!-- end footer section -->

    </div>
    @forelse ( $item  as $items)
     {{-- modal --}}
    <div id="staticModal{{$items->id}}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="kamu-tak-diajak fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Detail Jurnal
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal{{$items->id}}">
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
                            {{$items->nama}}
                        </p>
                    </div>
                    <div>
                        <p class="text-base leading-relaxed font-bold text-gray-800 dark:text-gray-400">
                            Tanggal
                        </p>
                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            {{$items->tanggal}}
                        </p>
                    </div>
                    <div>
                        <p class="text-base leading-relaxed font-bold text-gray-800 dark:text-gray-400">
                            Sekolah
                        </p>
                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            {{$items->sekolah}}
                        </p>
                    </div>
                    <div>
                        <p class="text-base leading-relaxed font-bold text-gray-800 dark:text-gray-400">
                            Kegiatan
                        </p>
                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            {{$items->kegiatan}}
                        </p>
                    </div>
                    <div>
                        <p class="text-base leading-relaxed font-bold text-gray-800 dark:text-gray-400">
                            Bukti
                        </p>
                        <img src="{{ asset('storage/image/' . $items->image) }}" alt="">
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="staticModal{{$items->id}}" type="button" class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kembali</button>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal --}}
    @empty

    @endforelse



    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script>
        // Initialization for ES Users
       var options = {
      series: [{
      name: 'Mengisi',
      data: [{{$mengisi_jan}},{{$mengisi_feb}},{{$mengisi_mar}},{{$mengisi_apr}},{{$mengisi_mei}},
        {{$mengisi_jun}},{{$mengisi_jul}},{{$mengisi_aug}},{{$mengisi_sep}},{{$mengisi_okt}},{{$mengisi_nov}},{{$mengisi_des}}
      ]
    }, {
      name: 'Tidak Mengisi',
      data: [
        {{$tdk_mengisi_jan}},{{$tdk_mengisi_feb}},{{$tdk_mengisi_mar}},{{$tdk_mengisi_apr}},{{$tdk_mengisi_mei}},
        {{$tdk_mengisi_jun}},{{$tdk_mengisi_jul}},{{$tdk_mengisi_aug}},{{$tdk_mengisi_sep}},{{$tdk_mengisi_okt}},{{$tdk_mengisi_nov}},{{$tdk_mengisi_des}}
      ]
    }],
      chart: {
      type: 'bar',
      height: 350
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: '55%',
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

    },
    yaxis: {
      title: {
        text: ''
      }
    },
    fill: {
      opacity: 2,
      colors: [ '#47EBB3', '#FFA726']
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

    <script>
       const instanceMode = te.Sidenav.getInstance(
        document.getElementById("sidenav-2")
        );
        const modes = ["side"];

        modes.forEach((mode) => {
        const modeSwitch = document.getElementById(mode);
        modeSwitch.addEventListener("click", () => {
            const instance = te.Sidenav.getInstance(
            document.getElementById("sidenav-2")
            );
            instance.changeMode(mode);
            modes.forEach((el) => {
            if (el === mode) {
                ["text-primary-600", "border-primary-600"].forEach((item) =>
                modeSwitch.classList.remove(item)
                );
                modeSwitch.className +=
                " bg-primary text-white hover:bg-primary-700 active:bg-primary-800 focus:bg-primary-700 border-transparent";
            } else {
                const node = document.getElementById(el);
                node.className += " text-primary-600 border-primary-600";
                [

                ].forEach((item) => node.classList.remove(item));
            }
            });
        });
        });
    </script>
    <script>
                // Initialization for ES Users
        import {
        sidenav-2,
        initTE,
        } from "tw-elements";

        initTE({ sidenav-2 });
    </script>
     <script>
        // Fungsi untuk mencetak halaman
        function printPage() {
            window.print();
        }
    </script>
</body>

</html>

