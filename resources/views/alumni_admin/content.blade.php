<!DOCTYPE html>
<html lang="en">

{{--  <!-- Mirrored from lineone.piniastudio.com/pages-card-user-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 May 2023 04:15:35 GMT -->  --}}
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Meta tags  -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

    <title>Lineone - User Grid v1</title>
    <link href="/admin/assets/images/Logo.png" rel="shortcut icon">

    <!-- CSS Assets -->
    <link rel="stylesheet" href="{{ asset('admin/css/app.css') }}" />

    <!-- Javascript Assets -->
    <script src="{{ asset('admin/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <script>
        /**
         * THIS SCRIPT REQUIRED FOR PREVENT FLICKERING IN SOME BROWSERS
         */
        localStorage.getItem("_x_darkMode_on") === "true" &&
            document.documentElement.classList.add("dark");
    </script>
</head>

<body x-data class="is-header-blur" x-bind="$store.global.documentBody">


    <!-- Page Wrapper -->
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak>


        <!-- Main Content Wrapper -->
        <main class="main w-full px-5 pb-8">
            <div class="flex items-center justify-between py-5 lg:py-6">
                <div class="flex items-center space-x-1">
                    <ul class="flex space-x-2 rtl:space-x-reverse">
                        <li>
                            <a href="javascript:;" class="text-primary hover:underline">User</a>
                        </li>
                        <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
                            <span>Siswa Alumni</span>
                        </li>
                    </ul>
                    
                </div>

                <div class="flex items-center space-x-2">
                    <form action="">
                        <label class="relative hidden sm:flex">
                            <input
                                class="form-input peer h-9 w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 text-xs+ placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                placeholder="Search users..." type="text" name="cari"
                                value="{{ request('cari') }}" />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 transition-colors duration-200" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M3.316 13.781l.73-.171-.73.171zm0-5.457l.73.171-.73-.171zm15.473 0l.73-.171-.73.171zm0 5.457l.73.171-.73-.171zm-5.008 5.008l-.171-.73.171.73zm-5.457 0l-.171.73.171-.73zm0-15.473l-.171-.73.171.73zm5.457 0l.171-.73-.171.73zM20.47 21.53a.75.75 0 101.06-1.06l-1.06 1.06zM4.046 13.61a11.198 11.198 0 010-5.115l-1.46-.342a12.698 12.698 0 000 5.8l1.46-.343zm14.013-5.115a11.196 11.196 0 010 5.115l1.46.342a12.698 12.698 0 000-5.8l-1.46.343zm-4.45 9.564a11.196 11.196 0 01-5.114 0l-.342 1.46c1.907.448 3.892.448 5.8 0l-.343-1.46zM8.496 4.046a11.198 11.198 0 015.115 0l.342-1.46a12.698 12.698 0 00-5.8 0l.343 1.46zm0 14.013a5.97 5.97 0 01-4.45-4.45l-1.46.343a7.47 7.47 0 005.568 5.568l.342-1.46zm5.457 1.46a7.47 7.47 0 005.568-5.567l-1.46-.342a5.97 5.97 0 01-4.45 4.45l.342 1.46zM13.61 4.046a5.97 5.97 0 014.45 4.45l1.46-.343a7.47 7.47 0 00-5.568-5.567l-.342 1.46zm-5.457-1.46a7.47 7.47 0 00-5.567 5.567l1.46.342a5.97 5.97 0 014.45-4.45l-.343-1.46zm8.652 15.28l3.665 3.664 1.06-1.06-3.665-3.665-1.06 1.06z" />
                                </svg>
                            </span>
                        </label>
                    </form>

                    <div class="flex">
                        <button
                            class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:hidden sm:h-9 sm:w-9">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" stroke="currentColor"
                                fill="none" viewBox="0 0 24 24">
                                <circle cx="10.2" cy="10.2" r="7.2" stroke-width="1.5">
                                </circle>
                                <path stroke-width="1.5" stroke-linecap="round" d="M21 21l-3.6-3.6" />
                            </svg>
                        </button>
                        <button
                            class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:h-9 sm:w-9">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M3 5.109C3 4.496 3.47 4 4.05 4h16.79c.58 0 1.049.496 1.049 1.109 0 .612-.47 1.108-1.05 1.108H4.05C3.47 6.217 3 5.721 3 5.11zM5.798 12.5c0-.612.47-1.109 1.05-1.109H18.04c.58 0 1.05.497 1.05 1.109s-.47 1.109-1.05 1.109H6.848c-.58 0-1.05-.497-1.05-1.109zM9.646 18.783c-.58 0-1.05.496-1.05 1.108 0 .613.47 1.109 1.05 1.109h5.597c.58 0 1.05-.496 1.05-1.109 0-.612-.47-1.108-1.05-1.108H9.646z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6 xl:grid-cols-4">
                @forelse ($alumni as $alumni)
                    <div class="card">
                        <div class="p-2 text-right">
                            <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="isShowPopper && (isShowPopper = false)"
                                class="inline-flex">
                            </div>
                            <div class="flex grow flex-col items-center px-4 pb-5 sm:px-5">
                                <div class="avatar h-20 w-20">
                                    <img class="rounded-full"
                                        src="{{ asset('storage/Siswa/' . $alumni->foto_siswa) }}" alt="avatar" />
                                </div>
                                <h3 class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100">
                                    {{ $alumni->name }}
                                </h3>
                                <p class="text-xs+ mt-1">{{ $alumni->sekolah }}</p>
                                <p class="text-xs+ mt-1">{{ $alumni->status }}</p>

                                <div class="mt-6 grid w-full grid-cols-1 gap-2">
                                    <a href="{{ route('alumni_admin.edit', $alumni->id) }}"
                                        class="btn space-x-2 bg-info px-0 font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 shrink-0"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-width="2"
                                                d="M5 19.111c0-2.413 1.697-4.468 4.004-4.848l.208-.035a17.134 17.134 0 015.576 0l.208.035c2.307.38 4.004 2.435 4.004 4.848C19 20.154 18.181 21 17.172 21H6.828C5.818 21 5 20.154 5 19.111zM16.083 6.938c0 2.174-1.828 3.937-4.083 3.937S7.917 9.112 7.917 6.937C7.917 4.764 9.745 3 12 3s4.083 1.763 4.083 3.938z" />
                                        </svg>
                                        <span>Profile</span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="flex justify-center items-center col-span-3">
                        <img src="/admin/noData.png" alt="" width="300px">
                    </div>
                @endforelse

                {{-- {{ $alumni->appends(['cari' => request('cari')])->links() }} --}}
            </div>
        </main>
    </div>
    @foreach ($list_alumni as $a)
        <div id="sertifikat{{ $a->id }}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="kamu-tak-diajak fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full shadow">
            <div class="relative w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Sertifikat
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="sertifikat{{ $a->id }}s">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form action="{{ route('alumni_admin.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="p-6 space-y-6">
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
                            <button data-modal-hide="sertifikat{{ $a->id }}"
                                class="dark:text-white text-gray-700  bg-white border border-gray-700 hover:text-white hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kembali</button>
                            <button data-modal-hide="sertifikat{{ $a->id }}" type="submit"
                                class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    <!--
        This is a place for Alpine.js Teleport feature
        @see https://alpinejs.dev/directives/teleport
      -->
    <div id="x-teleport-target"></div>
    <script>
        window.addEventListener("DOMContentLoaded", () => Alpine.start());
        $('#card').click(function() {
            console.log($(this).attr('data-email'));
            $('#modalSertifikat').modal('show');
        })
        $('#openmodal').click(function() {
            let id = $(this).data('id').toString();
            console.log(id);
            console.log($('#sertifikat' + id));
            $('#sertifikat' + id).modal('show');
        })
    </script>
</body>

<!-- Mirrored from lineone.piniastudio.com/pages-card-user-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 May 2023 04:15:45 GMT -->

</html>
