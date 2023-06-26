<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css"  rel="stylesheet" />
    <!-- CSS Assets -->
    <link rel="stylesheet" href="{{asset('admin/css/app.css')}}" />
    <link rel="stylesheet" href="load/load.css">

    <!-- Javascript Assets -->
    <script src="{{asset('admin/js/app.js')}}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
      rel="stylesheet"
    />
    <script>
      /**
       * THIS SCRIPT REQUIRED FOR PREVENT FLICKERING IN SOME BROWSERS
       */
      localStorage.getItem("_x_darkMode_on") === "true" &&
        document.documentElement.classList.add("dark");
    </script>

</head>
<body>
  <div  class="spin_load  screen_loader animate__animated fixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
    <div class="center">
        <div class="ring">
        </div>
        <img src="load/logo.png" alt="Deskripsi gambar" class="my-img">
    </div>
</div>  
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

    <main class="main w-full px-5 pb-8 ">
        <div class="flex items-center justify-between py-5 lg:py-6">
          <div class="flex items-center  mt-20">
            <h2
              class="text-xl font-medium text-slate-700 line-clamp-1 dark:text-navy-50 lg:text-1xl mt-14 pl-8"
            >
              Data Siswa
            </h2>
            <div
              x-data="usePopper({placement:'bottom-start',offset:4})"
              @click.outside="isShowPopper && (isShowPopper = false)"
              class="inline-flex"
            >


              <div
                x-ref="popperRoot"
                class="popper-root"
                :class="isShowPopper && 'show'"
              >
                <div
                  class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700"
                >
                  <ul>
                    <li>
                      <a
                        href="#"
                        class="flex h-8 items-center space-x-3 px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="mt-px h-4.5 w-4.5"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                          stroke-width="2"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 4v16m8-8H4"
                          />
                        </svg>
                        <span> New User</span></a
                      >
                    </li>
                    <li>
                      <a
                        href="#"
                        class="flex h-8 items-center space-x-3 px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="mt-px h-4.5 w-4.5"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                          stroke-width="2"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"
                          />
                        </svg>
                        <span>Export Users</span></a
                      >
                    </li>
                    <li>
                      <a
                        href="#"
                        class="flex h-8 items-center space-x-3 px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="mt-px h-4.5 w-4.5"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                          stroke-width="2"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                          />
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                          />
                        </svg>
                        <span>Setting</span></a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="flex items-center space-x-2">
            <label class="relative hidden sm:flex">
              <input
                class="form-input peer h-9 w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 text-xs+ placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                placeholder="Search users..."
                type="text"
              />
              <span
                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-4 w-4 transition-colors duration-200"
                  fill="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M3.316 13.781l.73-.171-.73.171zm0-5.457l.73.171-.73-.171zm15.473 0l.73-.171-.73.171zm0 5.457l.73.171-.73-.171zm-5.008 5.008l-.171-.73.171.73zm-5.457 0l-.171.73.171-.73zm0-15.473l-.171-.73.171.73zm5.457 0l.171-.73-.171.73zM20.47 21.53a.75.75 0 101.06-1.06l-1.06 1.06zM4.046 13.61a11.198 11.198 0 010-5.115l-1.46-.342a12.698 12.698 0 000 5.8l1.46-.343zm14.013-5.115a11.196 11.196 0 010 5.115l1.46.342a12.698 12.698 0 000-5.8l-1.46.343zm-4.45 9.564a11.196 11.196 0 01-5.114 0l-.342 1.46c1.907.448 3.892.448 5.8 0l-.343-1.46zM8.496 4.046a11.198 11.198 0 015.115 0l.342-1.46a12.698 12.698 0 00-5.8 0l.343 1.46zm0 14.013a5.97 5.97 0 01-4.45-4.45l-1.46.343a7.47 7.47 0 005.568 5.568l.342-1.46zm5.457 1.46a7.47 7.47 0 005.568-5.567l-1.46-.342a5.97 5.97 0 01-4.45 4.45l.342 1.46zM13.61 4.046a5.97 5.97 0 014.45 4.45l1.46-.343a7.47 7.47 0 00-5.568-5.567l-.342 1.46zm-5.457-1.46a7.47 7.47 0 00-5.567 5.567l1.46.342a5.97 5.97 0 014.45-4.45l-.343-1.46zm8.652 15.28l3.665 3.664 1.06-1.06-3.665-3.665-1.06 1.06z"
                  />
                </svg>.
              </span>
            </label>

            <div class="flex">
              <button
                class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:hidden sm:h-9 sm:w-9"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5"
                  stroke="currentColor"
                  fill="none"
                  viewBox="0 0 24 24"
                >
                  <circle
                    cx="10.2"
                    cy="10.2"
                    r="7.2"
                    stroke-width="1.5"
                  ></circle>
                  <path
                    stroke-width="1.5"
                    stroke-linecap="round"
                    d="M21 21l-3.6-3.6"
                  />
                </svg>
              </button>
              <button
                class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:h-9 sm:w-9"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5"
                  fill="none"
                  viewBox="0 0 24 24"
                >
                  <path
                    fill="currentColor"
                    d="M3 5.109C3 4.496 3.47 4 4.05 4h16.79c.58 0 1.049.496 1.049 1.109 0 .612-.47 1.108-1.05 1.108H4.05C3.47 6.217 3 5.721 3 5.11zM5.798 12.5c0-.612.47-1.109 1.05-1.109H18.04c.58 0 1.05.497 1.05 1.109s-.47 1.109-1.05 1.109H6.848c-.58 0-1.05-.497-1.05-1.109zM9.646 18.783c-.58 0-1.05.496-1.05 1.108 0 .613.47 1.109 1.05 1.109h5.597c.58 0 1.05-.496 1.05-1.109 0-.612-.47-1.108-1.05-1.108H9.646z"
                  />
                </svg>
              </button>
              <button
                class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:h-9 sm:w-9"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                  />
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                  />
                </svg>
              </button>
            </div>
          </div>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6 xl:grid-cols-4">
          <div class="card pb-2">
            <div class="p-2 text-right">
              <div
                x-data="usePopper({placement:'bottom-end',offset:4})"
                @click.outside="isShowPopper && (isShowPopper = false)"
                class="inline-flex"
              >
                <button
                  x-ref="popperRef"
                  @click="isShowPopper = !isShowPopper"
                  class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                    />
                  </svg>
                </button>

                <div
                  x-ref="popperRoot"
                  class="popper-root"
                  :class="isShowPopper && 'show'"
                >
                  <div
                  class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700"
                  >
                    <ul>
                      <li>
                        <a
                          href="http://127.0.0.1:8000/siswa_admin/detail"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Detail</a
                        >
                      </li>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Chat</a
                        >
                      </li>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Hapus</a
                        >
                      </li>
                    </ul>

                    <ul>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex grow flex-col items-center px-4 pb-5 sm:px-5">
              <div class="avatar h-20 w-20">
                <img
                  class="rounded-full"
                  src="{{ asset('admin/images/avatar/avatar-20.jpg') }}"
                  alt="avatar"
                />
              </div>
              <h3
                class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100"
              >
                Konnor Guzman
              </h3>
              <div class="Link w-10 h-6 px-2 pt-[5.67px] pb-[6.33px] bg-emerald-500 bg-opacity-10 rounded-full justify-start items-start inline-flex">
                <div class="Rpl text-emerald-500 text-[12px] font-medium leading-3 tracking-wide">RPL</div>
              </div>
              <p class="text-xs+ mt-2">Smkn 1 kraksaan</p>
              <div class="DivMt6 h-[36px] pl-[6.50px] pr-[4.16px] justify-center items-start gap-[11.42px] inline-flex mt-8">
                <button class="Button w-[110px] self-stretch pl-[12.57px] pr-2 py-2 bg-rose-500 rounded-lg justify-end items-center gap-[5px] inline-flex" data-modal-target="staticModal" data-modal-toggle="staticModal">
                  <div class="IconsaxBrokenWarning2 w- h- relative flex-col justify-start items-start flex text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                    </svg>                    
                  </div>
                  <div class="Laporkan text-center text-white text-[14px] font-medium leading-tight tracking-wide">Laporkan</div>
                </button>
                <button class="Button w-[98.92px] self-stretch pl-[19.44px] pr-[22.48px] py-2 bg-slate-200 rounded-lg justify-center items-center gap-[5px] inline-flex">
                  <div class="Svg w-20 h-20 p-[0px] justify-center items-center inline-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                    </svg>
                    <div class="Frame w-4 h-4 relative flex-col justify-start items-start flex"></div>
                  </div>
                  <div class="Chat text-center text-slate-800 text-[14px] font-medium leading-tight tracking-wide">Chat</div>
                </button>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="p-2 text-right">
              <div
                x-data="usePopper({placement:'bottom-end',offset:4})"
                @click.outside="isShowPopper && (isShowPopper = false)"
                class="inline-flex"
              >
                <button
                  x-ref="popperRef"
                  @click="isShowPopper = !isShowPopper"
                  class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                    />
                  </svg>
                </button>

                <div
                  x-ref="popperRoot"
                  class="popper-root"
                  :class="isShowPopper && 'show'"
                >
                  <div
                    class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700"
                  >
                    <ul>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Action</a
                        >
                      </li>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Another Action</a
                        >
                      </li>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Something else</a
                        >
                      </li>
                    </ul>
                    <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                    <ul>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Separated Link</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex grow flex-col items-center px-4 pb-5 sm:px-5">
              <div class="avatar h-20 w-20">
                <img
                  class="rounded-full"
                  src="{{ asset('admin/images/avatar/avatar-20.jpg') }}"
                  alt="avatar"
                />
              </div>
              <h3
                class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100"
              >
                Konnor Guzman
              </h3>
              <div class="Link w-10 h-6 px-2 pt-[5.67px] pb-[6.33px] bg-emerald-500 bg-opacity-10 rounded-full justify-start items-start inline-flex">
                <div class="Rpl text-emerald-500 text-[12px] font-medium leading-3 tracking-wide">RPL</div>
              </div>
              <p class="text-xs+ mt-2">Smkn 1 kraksaan</p>
              <div class="DivMt6 h-[36px] pl-[6.50px] pr-[4.16px] justify-center items-start gap-[11.42px] inline-flex mt-8">
                <button class="Button w-[110px] self-stretch pl-[12.57px] pr-2 py-2 bg-rose-500 rounded-lg justify-end items-center gap-[5px] inline-flex" >
                  <div class="IconsaxBrokenWarning2 w- h- relative flex-col justify-start items-start flex text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                    </svg>                    
                  </div>
                  <div class="Laporkan text-center text-white text-[14px] font-medium leading-tight tracking-wide" >Laporkan</div>
                </button>
                <button class="Button w-[98.92px] self-stretch pl-[19.44px] pr-[22.48px] py-2 bg-slate-200 rounded-lg justify-center items-center gap-[5px] inline-flex">
                  <div class="Svg w-20 h-20 p-[0px] justify-center items-center inline-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                    </svg>
                    <div class="Frame w-4 h-4 relative flex-col justify-start items-start flex"></div>
                  </div>
                  <div class="Chat text-center text-slate-800 text-[14px] font-medium leading-tight tracking-wide">Chat</div>
                </button>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="p-2 text-right">
              <div
                x-data="usePopper({placement:'bottom-end',offset:4})"
                @click.outside="isShowPopper && (isShowPopper = false)"
                class="inline-flex"
              >
                <button
                  x-ref="popperRef"
                  @click="isShowPopper = !isShowPopper"
                  class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                    />
                  </svg>
                </button>

                <div
                  x-ref="popperRoot"
                  class="popper-root"
                  :class="isShowPopper && 'show'"
                >
                  <div
                    class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700"
                  >
                    <ul>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Action</a
                        >
                      </li>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Another Action</a
                        >
                      </li>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Something else</a
                        >
                      </li>
                    </ul>
                    <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                    <ul>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Separated Link</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex grow flex-col items-center px-4 pb-5 sm:px-5">
              <div class="avatar h-20 w-20">
                <img
                  class="rounded-full"
                  src="{{ asset('admin/images/avatar/avatar-20.jpg') }}"
                  alt="avatar"
                />
              </div>
              <h3
                class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100"
              >
                Konnor Guzman
              </h3>
              <div class="Link w-10 h-6 px-2 pt-[5.67px] pb-[6.33px] bg-emerald-500 bg-opacity-10 rounded-full justify-start items-start inline-flex">
                <div class="Rpl text-emerald-500 text-[12px] font-medium leading-3 tracking-wide">RPL</div>
              </div>
              <p class="text-xs+ mt-2">Smkn 1 kraksaan</p>
              <div class="DivMt6 h-[36px] pl-[6.50px] pr-[4.16px] justify-center items-start gap-[11.42px] inline-flex mt-8">
                <button class="Button w-[110px] self-stretch pl-[12.57px] pr-2 py-2 bg-rose-500 rounded-lg justify-end items-center gap-[5px] inline-flex">
                  <div class="IconsaxBrokenWarning2 w- h- relative flex-col justify-start items-start flex text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                    </svg>                    
                  </div>
                  <div class="Laporkan text-center text-white text-[14px] font-medium leading-tight tracking-wide">Laporkan</div>
                </button>
                <button class="Button w-[98.92px] self-stretch pl-[19.44px] pr-[22.48px] py-2 bg-slate-200 rounded-lg justify-center items-center gap-[5px] inline-flex">
                  <div class="Svg w-20 h-20 p-[0px] justify-center items-center inline-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                    </svg>
                    <div class="Frame w-4 h-4 relative flex-col justify-start items-start flex"></div>
                  </div>
                  <div class="Chat text-center text-slate-800 text-[14px] font-medium leading-tight tracking-wide">Chat</div>
                </button>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="p-2 text-right">
              <div
                x-data="usePopper({placement:'bottom-end',offset:4})"
                @click.outside="isShowPopper && (isShowPopper = false)"
                class="inline-flex"
              >
                <button
                  x-ref="popperRef"
                  @click="isShowPopper = !isShowPopper"
                  class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                    />
                  </svg>
                </button>

                <div
                  x-ref="popperRoot"
                  class="popper-root"
                  :class="isShowPopper && 'show'"
                >
                  <div
                    class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700"
                  >
                    <ul>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Action</a
                        >
                      </li>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Another Action</a
                        >
                      </li>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Something else</a
                        >
                      </li>
                    </ul>
                    <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                    <ul>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Separated Link</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex grow flex-col items-center px-4 pb-5 sm:px-5">
              <div class="avatar h-20 w-20">
                <img
                  class="rounded-full"
                  src="{{ asset('admin/images/avatar/avatar-20.jpg') }}"
                  alt="avatar"
                />
              </div>
              <h3
                class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100"
              >
                Konnor Guzman
              </h3>
              <div class="Link w-10 h-6 px-2 pt-[5.67px] pb-[6.33px] bg-emerald-500 bg-opacity-10 rounded-full justify-start items-start inline-flex">
                <div class="Rpl text-emerald-500 text-[12px] font-medium leading-3 tracking-wide">RPL</div>
              </div>
              <p class="text-xs+ mt-2">Smkn 1 kraksaan</p>
              <div class="DivMt6 h-[36px] pl-[6.50px] pr-[4.16px] justify-center items-start gap-[11.42px] inline-flex mt-8">
                <button class="Button w-[110px] self-stretch pl-[12.57px] pr-2 py-2 bg-rose-500 rounded-lg justify-end items-center gap-[5px] inline-flex">
                  <div class="IconsaxBrokenWarning2 w- h- relative flex-col justify-start items-start flex text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                    </svg>                    
                  </div>
                  <div class="Laporkan text-center text-white text-[14px] font-medium leading-tight tracking-wide">Laporkan</div>
                </button>
                <button class="Button w-[98.92px] self-stretch pl-[19.44px] pr-[22.48px] py-2 bg-slate-200 rounded-lg justify-center items-center gap-[5px] inline-flex">
                  <div class="Svg w-20 h-20 p-[0px] justify-center items-center inline-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                    </svg>
                    <div class="Frame w-4 h-4 relative flex-col justify-start items-start flex"></div>
                  </div>
                  <div class="Chat text-center text-slate-800 text-[14px] font-medium leading-tight tracking-wide">Chat</div>
                </button>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="p-2 text-right">
              <div
                x-data="usePopper({placement:'bottom-end',offset:4})"
                @click.outside="isShowPopper && (isShowPopper = false)"
                class="inline-flex"
              >
                <button
                  x-ref="popperRef"
                  @click="isShowPopper = !isShowPopper"
                  class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                    />
                  </svg>
                </button>

                <div
                  x-ref="popperRoot"
                  class="popper-root"
                  :class="isShowPopper && 'show'"
                >
                  <div
                    class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700"
                  >
                    <ul>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Action</a
                        >
                      </li>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Another Action</a
                        >
                      </li>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Something else</a
                        >
                      </li>
                    </ul>
                    <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                    <ul>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Separated Link</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex grow flex-col items-center px-4 pb-5 sm:px-5">
              <div class="avatar h-20 w-20">
                <img
                  class="rounded-full"
                  src="{{ asset('admin/images/avatar/avatar-20.jpg') }}"
                  alt="avatar"
                />
              </div>
              <h3
                class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100"
              >
                Konnor Guzman
              </h3>
              <div class="Link w-10 h-6 px-2 pt-[5.67px] pb-[6.33px] bg-emerald-500 bg-opacity-10 rounded-full justify-start items-start inline-flex">
                <div class="Rpl text-emerald-500 text-[12px] font-medium leading-3 tracking-wide">RPL</div>
              </div>
              <p class="text-xs+ mt-2">Smkn 1 kraksaan</p>
              <div class="DivMt6 h-[36px] pl-[6.50px] pr-[4.16px] justify-center items-start gap-[11.42px] inline-flex mt-8">
                <button class="Button w-[110px] self-stretch pl-[12.57px] pr-2 py-2 bg-rose-500 rounded-lg justify-end items-center gap-[5px] inline-flex">
                  <div class="IconsaxBrokenWarning2 w- h- relative flex-col justify-start items-start flex text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                    </svg>                    
                  </div>
                  <div class="Laporkan text-center text-white text-[14px] font-medium leading-tight tracking-wide">Laporkan</div>
                </button>
                <button class="Button w-[98.92px] self-stretch pl-[19.44px] pr-[22.48px] py-2 bg-slate-200 rounded-lg justify-center items-center gap-[5px] inline-flex">
                  <div class="Svg w-20 h-20 p-[0px] justify-center items-center inline-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                    </svg>
                    <div class="Frame w-4 h-4 relative flex-col justify-start items-start flex"></div>
                  </div>
                  <div class="Chat text-center text-slate-800 text-[14px] font-medium leading-tight tracking-wide">Chat</div>
                </button>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="p-2 text-right">
              <div
                x-data="usePopper({placement:'bottom-end',offset:4})"
                @click.outside="isShowPopper && (isShowPopper = false)"
                class="inline-flex"
              >
                <button
                  x-ref="popperRef"
                  @click="isShowPopper = !isShowPopper"
                  class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                    />
                  </svg>
                </button>

                <div
                  x-ref="popperRoot"
                  class="popper-root"
                  :class="isShowPopper && 'show'"
                >
                  <div
                    class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700"
                  >
                    <ul>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Action</a
                        >
                      </li>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Another Action</a
                        >
                      </li>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Something else</a
                        >
                      </li>
                    </ul>
                    <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                    <ul>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Separated Link</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex grow flex-col items-center px-4 pb-5 sm:px-5">
              <div class="avatar h-20 w-20">
                <img
                  class="rounded-full"
                  src="{{ asset('admin/images/avatar/avatar-20.jpg') }}"
                  alt="avatar"
                />
              </div>
              <h3
                class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100"
              >
                Konnor Guzman
              </h3>
              <div class="Link w-10 h-6 px-2 pt-[5.67px] pb-[6.33px] bg-emerald-500 bg-opacity-10 rounded-full justify-start items-start inline-flex">
                <div class="Rpl text-emerald-500 text-[12px] font-medium leading-3 tracking-wide">RPL</div>
              </div>
              <p class="text-xs+ mt-2">Smkn 1 kraksaan</p>
              <div class="DivMt6 h-[36px] pl-[6.50px] pr-[4.16px] justify-center items-start gap-[11.42px] inline-flex mt-8">
                <button class="Button w-[110px] self-stretch pl-[12.57px] pr-2 py-2 bg-rose-500 rounded-lg justify-end items-center gap-[5px] inline-flex">
                  <div class="IconsaxBrokenWarning2 w- h- relative flex-col justify-start items-start flex text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                    </svg>                    
                  </div>
                  <div class="Laporkan text-center text-white text-[14px] font-medium leading-tight tracking-wide">Laporkan</div>
                </button>
                <button class="Button w-[98.92px] self-stretch pl-[19.44px] pr-[22.48px] py-2 bg-slate-200 rounded-lg justify-center items-center gap-[5px] inline-flex">
                  <div class="Svg w-20 h-20 p-[0px] justify-center items-center inline-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                    </svg>
                    <div class="Frame w-4 h-4 relative flex-col justify-start items-start flex"></div>
                  </div>
                  <div class="Chat text-center text-slate-800 text-[14px] font-medium leading-tight tracking-wide">Chat</div>
                </button>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="p-2 text-right">
              <div
                x-data="usePopper({placement:'bottom-end',offset:4})"
                @click.outside="isShowPopper && (isShowPopper = false)"
                class="inline-flex"
              >
                <button
                  x-ref="popperRef"
                  @click="isShowPopper = !isShowPopper"
                  class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                    />
                  </svg>
                </button>

                <div
                  x-ref="popperRoot"
                  class="popper-root"
                  :class="isShowPopper && 'show'"
                >
                  <div
                    class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700"
                  >
                    <ul>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Action</a
                        >
                      </li>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Another Action</a
                        >
                      </li>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Something else</a
                        >
                      </li>
                    </ul>
                    <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                    <ul>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Separated Link</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex grow flex-col items-center px-4 pb-5 sm:px-5">
              <div class="avatar h-20 w-20">
                <img
                  class="rounded-full"
                  src="{{ asset('admin/images/avatar/avatar-20.jpg') }}"
                  alt="avatar"
                />
              </div>
              <h3
                class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100"
              >
                Konnor Guzman
              </h3>
              <div class="Link w-10 h-6 px-2 pt-[5.67px] pb-[6.33px] bg-emerald-500 bg-opacity-10 rounded-full justify-start items-start inline-flex">
                <div class="Rpl text-emerald-500 text-[12px] font-medium leading-3 tracking-wide">RPL</div>
              </div>
              <p class="text-xs+ mt-2">Smkn 1 kraksaan</p>
              <div class="DivMt6 h-[36px] pl-[6.50px] pr-[4.16px] justify-center items-start gap-[11.42px] inline-flex mt-8">
                <button class="Button w-[110px] self-stretch pl-[12.57px] pr-2 py-2 bg-rose-500 rounded-lg justify-end items-center gap-[5px] inline-flex">
                  <div class="IconsaxBrokenWarning2 w- h- relative flex-col justify-start items-start flex text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                    </svg>                    
                  </div>
                  <div class="Laporkan text-center text-white text-[14px] font-medium leading-tight tracking-wide">Laporkan</div>
                </button>
                <button class="Button w-[98.92px] self-stretch pl-[19.44px] pr-[22.48px] py-2 bg-slate-200 rounded-lg justify-center items-center gap-[5px] inline-flex">
                  <div class="Svg w-20 h-20 p-[0px] justify-center items-center inline-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                    </svg>
                    <div class="Frame w-4 h-4 relative flex-col justify-start items-start flex"></div>
                  </div>
                  <div class="Chat text-center text-slate-800 text-[14px] font-medium leading-tight tracking-wide">Chat</div>
                </button>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="p-2 text-right">
              <div
                x-data="usePopper({placement:'bottom-end',offset:4})"
                @click.outside="isShowPopper && (isShowPopper = false)"
                class="inline-flex"
              >
                <button
                  x-ref="popperRef"
                  @click="isShowPopper = !isShowPopper"
                  class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                    />
                  </svg>
                </button>

                <div
                  x-ref="popperRoot"
                  class="popper-root"
                  :class="isShowPopper && 'show'"
                >
                  <div
                    class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700"
                  >
                    <ul>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Action</a
                        >
                      </li>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Another Action</a
                        >
                      </li>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Something else</a
                        >
                      </li>
                    </ul>
                    <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                    <ul>
                      <li>
                        <a
                          href="#"
                          class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                          >Separated Link</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex grow flex-col items-center px-4 pb-5 sm:px-5">
              <div class="avatar h-20 w-20">
                <img
                  class="rounded-full"
                  src="{{ asset('admin/images/avatar/avatar-20.jpg') }}"
                  alt="avatar"
                />
              </div>
              <h3
                class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100"
              >
                Konnor Guzman
              </h3>
              <div class="Link w-10 h-6 px-2 pt-[5.67px] pb-[6.33px] bg-emerald-500 bg-opacity-10 rounded-full justify-start items-start inline-flex">
                <div class="Rpl text-emerald-500 text-[12px] font-medium leading-3 tracking-wide">RPL</div>
              </div>
              <p class="text-xs+ mt-2">Smkn 1 kraksaan</p>
              <div class="DivMt6 h-[36px] pl-[6.50px] pr-[4.16px] justify-center items-start gap-[11.42px] inline-flex mt-8">
                <button class="Button w-[110px] self-stretch pl-[12.57px] pr-2 py-2 bg-rose-500 rounded-lg justify-end items-center gap-[5px] inline-flex">
                  <div class="IconsaxBrokenWarning2 w- h- relative flex-col justify-start items-start flex text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                    </svg>                    
                  </div>
                  <div class="Laporkan text-center text-white text-[14px] font-medium leading-tight tracking-wide">Laporkan</div>
                </button>
                <button class="Button w-[98.92px] self-stretch pl-[19.44px] pr-[22.48px] py-2 bg-slate-200 rounded-lg justify-center items-center gap-[5px] inline-flex">
                  <div class="Svg w-20 h-20 p-[0px] justify-center items-center inline-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                    </svg>
                    <div class="Frame w-4 h-4 relative flex-col justify-start items-start flex"></div>
                  </div>
                  <div class="Chat text-center text-slate-800 text-[14px] font-medium leading-tight tracking-wide">Chat</div>
                </button>
              </div>
            </div> 
          </div>
        </div>
           


      </main>
      <div class="flex justify-center ">
        <nav aria-label="Page navigation example">
          <ul class="inline-flex items-center -space-x-px  ">
            <li>
              <a href="#" class="block px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                <span class="sr-only">Previous</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
              </a>
            </li>
            <li>
              <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
            </li>
            <li>
              <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
            </li>
            <li>
              <a href="#" aria-current="page" class="z-10 px-3 py-2 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
            </li>
            <li>
              <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
            </li>
            <li>
              <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
            </li>
            <li>
              <a href="#" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                <span class="sr-only">Next</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
              </a>
            </li>
          </ul>
        </nav>  
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
          <form action="">
          <div class="p-6 space-y-6">
              <div class="relative z-0 w-full mb-6 group">   
                  <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                  <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="masukan detail laporan anda"></textarea>
              </div>
                <div class="relative z-0 w-full mb-6 group">
                  <input type="file" name="dari" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                  <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Bukti</label>
              </div>
          </div>
          </form>
          <!-- Modal footer -->
          <div class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
              <button data-modal-hide="staticModal" type="button" class="text-gray-700  bg-white border border-gray-700 hover:text-white hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kembali</button>
              <button data-modal-hide="staticModal" type="button" class="text-gray-700  bg-white border border-gray-700 hover:text-white hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
          </div>
      </form>
      </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script>
  $(window).on('load', function() {
      $('.spin_load').fadeOut();
  });
</script>
</body>
</html>
