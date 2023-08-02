<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Detail Siswa Magang</title>
    <link href="/admin/assets/images/Logo.png" rel="shortcut icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        theme: {
            extend: {
                blur: {
                    xs: '3px',
                  }
            },
          },

    </script>
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
</head>
<body>
    <style>
        /* CSS untuk tampilan modal */
        .modal {
          display: none;
          position: fixed;
          z-index: 1;
          left: 0;
          top: 0;
          right: 0;
          bottom: 0;
          overflow: auto;
          backdrop-filter: blur(2px);
          background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
          position: fixed;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          max-width: 500px;
          width: 100%;
          background-color: #fff;
          border-radius: 10px;
          box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
          padding: 2rem;
        }
      </style>
    <!-- Sidenav -->
      @include('jurnal_admin.layout')
    <div class=" pl-[px] " id="content">


        @include('jurnal_admin.nav')
    <!-- Navbar -->
    <div class="animate__animated p-6" :class="[$store.app.animation]">
        <!-- start main content section -->
        <div>
            <ul class="flex space-x-2 rtl:space-x-reverse">
                <li>
                    <a href="javascript:;" class="text-primary hover:underline">Users</a>
                </li>
                <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
                    <span>Profile</span>
                </li>
            </ul>
            <div class="pt-5">
                <div class="mb-5 grid grid-cols-1 text-sm gap-5 lg:grid-cols-3 xl:grid-cols-4">
                    <div class="panel">
                        <div class="mb-5 flex items-center justify-between">
                            <h5 class="text-lg font-semibold dark:text-white-light">Profile</h5>

                        </div>
                        <div class="mb-5">
                            <div class="flex flex-col items-center justify-center">
                                <img src="{{ asset('storage/Siswa/' . $siswa->foto_siswa) }}" alt="image" class="mb-5 h-24 w-24 rounded-full object-cover" />
                                <p class="text-xl font-semibold text-info">{{ $siswa->name }}</p>
                            </div>
                            <ul class="m-auto mt-5 flex max-w-[160px] flex-col space-y-4 font-semibold text-white-dark">
                                <li class="flex items-center gap-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                                        <path
                                            d="M2.3153 12.6978C2.26536 12.2706 2.2404 12.057 2.2509 11.8809C2.30599 10.9577 2.98677 10.1928 3.89725 10.0309C4.07094 10 4.286 10 4.71612 10H15.2838C15.7139 10 15.929 10 16.1027 10.0309C17.0132 10.1928 17.694 10.9577 17.749 11.8809C17.7595 12.057 17.7346 12.2706 17.6846 12.6978L17.284 16.1258C17.1031 17.6729 16.2764 19.0714 15.0081 19.9757C14.0736 20.6419 12.9546 21 11.8069 21H8.19303C7.04537 21 5.9263 20.6419 4.99182 19.9757C3.72352 19.0714 2.89681 17.6729 2.71598 16.1258L2.3153 12.6978Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        />
                                        <path
                                            opacity="0.5"
                                            d="M17 17H19C20.6569 17 22 15.6569 22 14C22 12.3431 20.6569 11 19 11H17.5"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        />
                                        <path
                                            opacity="0.5"
                                            d="M10.0002 2C9.44787 2.55228 9.44787 3.44772 10.0002 4C10.5524 4.55228 10.5524 5.44772 10.0002 6"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path
                                            d="M4.99994 7.5L5.11605 7.38388C5.62322 6.87671 5.68028 6.0738 5.24994 5.5C4.81959 4.9262 4.87665 4.12329 5.38382 3.61612L5.49994 3.5"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path
                                            d="M14.4999 7.5L14.6161 7.38388C15.1232 6.87671 15.1803 6.0738 14.7499 5.5C14.3196 4.9262 14.3767 4.12329 14.8838 3.61612L14.9999 3.5"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                    {{ $siswa->sekolah }}
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                                        <path
                                            d="M2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12V14C22 17.7712 22 19.6569 20.8284 20.8284C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V12Z"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        />
                                        <path opacity="0.5" d="M7 4V2.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        <path opacity="0.5" d="M17 4V2.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        <path opacity="0.5" d="M2 9H22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                    {{ $siswa->tanggal }}
                                </li>
                                <li>
                                    <a href="javascript:;" class="flex items-center gap-2">
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5"
                                        >
                                            <path
                                                opacity="0.5"
                                                d="M2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12C22 15.7712 22 17.6569 20.8284 18.8284C19.6569 20 17.7712 20 14 20H10C6.22876 20 4.34315 20 3.17157 18.8284C2 17.6569 2 15.7712 2 12Z"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                            />
                                            <path
                                                d="M6 8L8.1589 9.79908C9.99553 11.3296 10.9139 12.0949 12 12.0949C13.0861 12.0949 14.0045 11.3296 15.8411 9.79908L18 8"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                            />
                                        </svg>
                                        <span class="text-info">{{ $siswa->email }}</span></a
                                    >
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                                        <path
                                            d="M16.1007 13.359L16.5562 12.9062C17.1858 12.2801 18.1672 12.1515 18.9728 12.5894L20.8833 13.628C22.1102 14.2949 22.3806 15.9295 21.4217 16.883L20.0011 18.2954C19.6399 18.6546 19.1917 18.9171 18.6763 18.9651M4.00289 5.74561C3.96765 5.12559 4.25823 4.56668 4.69185 4.13552L6.26145 2.57483C7.13596 1.70529 8.61028 1.83992 9.37326 2.85908L10.6342 4.54348C11.2507 5.36691 11.1841 6.49484 10.4775 7.19738L10.1907 7.48257"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        />
                                        <path
                                            opacity="0.5"
                                            d="M18.6763 18.9651C17.0469 19.117 13.0622 18.9492 8.8154 14.7266C4.81076 10.7447 4.09308 7.33182 4.00293 5.74561"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                        />
                                        <path
                                            opacity="0.5"
                                            d="M16.1007 13.3589C16.1007 13.3589 15.0181 14.4353 12.0631 11.4971C9.10807 8.55886 10.1907 7.48242 10.1907 7.48242"
                                            stroke="currentColor"
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                        />
                                    </svg>
                                    <span class="whitespace-nowrap" dir="ltr">{{ $siswa->no }}</span>
                                </li>
                            </ul>
                            <ul class="mt-7  justify-center gap-2">
                               <li class="font-bold">Status</li>
                                @if ($siswa->status_sp != null)
                                @if ($siswa->status_sp == 'SP 1')
                               <li>
                                <div class="flex h-1.5 w-full rounded-full bg-[#ebedf2] dark:bg-dark/40 relative">
                                    <div class="w-full rounded-full" style="background-color: #c7fe00;">
                                        <span class="absolute inset-0 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">{{ $siswa->status_sp }}</span>
                                    </div>
                                </div>
                                </li>
                                @else
                               <li>
                                <div class="flex h-1.5 w-full rounded-full bg-[#ebedf2] dark:bg-dark/40 relative">
                                    <div class="w-full rounded-full" style="background-color: #fe0000;">
                                        <span class="absolute inset-0 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">{{ $siswa->status_sp }}</span>
                                    </div>
                                </div>
                                </li>

                                @endif
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="panel lg:col-span-3 xl:col-span-3">
                        <div class="flex items-center justify-between mb-5">
                          <h5 class="text-lg font-semibold dark:text-white-light">Pelanggaran</h5>
                          <div class="flex items-center space-x-2">
                            <a href="{{ route('siswa_admin.index') }}" class="btn btn-outline-danger w-73 h-27">Kembali</a>
                          </div>
                        </div>

                        <div class="table-responsive font-semibold text-[#515365] dark:text-white-light">
                         <table>
                            <tr class="text-sm bg-[#E2E8F0]">
                                <td>No</td>
                                <td>Tanggal pelanggaran</td>
                                <td>Judul pelanggaran</td>
                                <td>Deskripsi</td>
                            </tr>
                            <tr class="text-sm">


                            </tr>
                        </table>
                        <div class="bg-red-100 mt-2 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Data!</strong>
                            <span class="block sm:inline">Pelanggaran masih kosong</span>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                              <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                            </span>
                          </div>

                        </div>
                      </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end main content section -->
    </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
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
</body>

</html>

