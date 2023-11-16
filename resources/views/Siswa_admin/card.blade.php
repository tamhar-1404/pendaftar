<!DOCTYPE html>
<html lang="en">

{{--  <!-- Mirrored from lineone.piniastudio.com/pages-card-user-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 May 2023 04:15:35 GMT -->  --}}
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Meta tags  -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <link rel="stylesheet" href="load/load.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Lineone - User Grid v1</title>
    <link rel="icon" type="image/png" href="{{ asset('lineone/images/app-logo.png') }}" />

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

</head>

<body x-data class="is-header-blur" x-bind="$store.global.documentBody">


    <!-- screen loader -->
    <div
        class="spin_load  screen_loader animate__animated fixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
        <div class="center">
            <div class="ring">
            </div>
            <img src="load/logo.png" alt="Deskripsi gambar" class="my-img">
        </div>
    </div>



    <!-- Page Wrapper -->
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak>
        <!-- Sidebar -->
     




        <!-- Main Content Wrapper -->
        <main class="main w-full px-5 pb-2">
            <div class="flex items-center justify-between py-5 lg:py-6">
                <div class="flex items-center space-x-1">
                    <h2 class="text-xl font-medium text-slate-700 line-clamp-1 dark:text-navy-50 lg:text-2xl">
                        Data Siswa
                    </h2>

                </div>

                <div class="flex items-center space-x-2">
                    <form action="">
                        <label class="relative hidden sm:flex">
                            <input
                                class="form-input peer h-9 w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 text-xs+ placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                placeholder="Search users..." type="text" name="cari"
                                value="{{ request('cari') }}" />
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
                        <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                            class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:h-9 sm:w-9">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M3 5.109C3 4.496 3.47 4 4.05 4h16.79c.58 0 1.049.496 1.049 1.109 0 .612-.47 1.108-1.05 1.108H4.05C3.47 6.217 3 5.721 3 5.11zM5.798 12.5c0-.612.47-1.109 1.05-1.109H18.04c.58 0 1.05.497 1.05 1.109s-.47 1.109-1.05 1.109H6.848c-.58 0-1.05-.497-1.05-1.109zM9.646 18.783c-.58 0-1.05.496-1.05 1.108 0 .613.47 1.109 1.05 1.109h5.597c.58 0 1.05-.496 1.05-1.109 0-.612-.47-1.108-1.05-1.108H9.646z" />
                            </svg>
                        </button>
                        <button
                            class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:h-9 sm:w-9">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6 xl:grid-cols-4">
                @forelse ($siswas as $siswa)
                    <div class="card ">
                        <div class="p-2 text-right">
                            <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="isShowPopper && (isShowPopper = false)"
                                class="inline-flex">
                                <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                    </svg>
                                </button>

                                <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                                    <div
                                        class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                        <ul>
                                            <li>
                                                <a href="{{ route('siswa_admin.edit', $siswa->id) }}"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Detail</a>
                                            </li>

                                            <li>
                                                <button ata-modal-target="defaultModal{{ $siswa->id }}"
                                                    data-modal-toggle="defaultModal{{ $siswa->id }}"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">SP
                                                </button>
                                            </li>
                                            <li>
                                                <button ata-modal-target="extendModal{{ $siswa->id }}"
                                                    data-modal-toggle="extendModal{{ $siswa->id }}"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Extend
                                                </button>
                                            </li>
                                            <li>
                                                <form action="{{ route('siswa.banned', ['id' => $siswa->id]) }}"
                                                    method="post" id="myForm" onsubmit="hapus(event)">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="alasan" id="alasanPenolakan">
                                                    <button
                                                        class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Hapus</button>
                                                </form>
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
                                <img class="rounded-full" src="{{ asset('storage/Siswa/' . $siswa->foto_siswa) }}"
                                    alt="avatar" />
                            </div>
                            <h3 class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100">
                                {{ $siswa->name }}
                            </h3>
                            <p class="text-xs+ mt-2">{{ $siswa->sekolah }}</p>
                            <p class="text-xs+ mt-2">{{ $siswa->jurusan }}</p>
                        </div>
                    </div>
                @empty
                    <div class="flex justify-center items-center col-span-3 mt-10">
                        <img src="/admin/noData.png" alt="" width="300px">
                    </div>
                @endforelse
            </div>
            {{ $siswas->appends(['cari' => request('cari')])->links() }}
            <div class="flex justify-center mt-10">

            </div>
        </main>
    </div>
    @forelse ($siswas as $modal)
        {{-- modal --}}
        <div id="defaultModal{{ $modal->id }}" tabindex="-1" aria-hidden="true"
            class="kamu-tak-diajak fixed top-0 left-0 right-0 z-[150] hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            SP
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="defaultModal{{ $modal->id }}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <form action="{{ route('sp.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="nama" value="{{ $modal->name }}">
                        <div class="w-full p-4">
                            <label class="text-md font-semibold ml-4 mt-4 ">Deskrisi :</label><br>
                            <textarea name="deskripsi" class="w-[70%] mx-20 border border-gray-200 rounded" id="" cols=""
                                rows="5"></textarea>
                        </div>
                        <div class="flex items-center mt-3">
                            <p class="text-md font-semibold ml-6 " for="">Jenis SP : </p>
                            <div class="flex gap-4 ml-10 ">
                                <div class="flex items-center gap-2">
                                    <input type="radio" name="keterangan" value="Sp1" id="">
                                    <p>Sp1</p> <br>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="radio" name="keterangan" value="Sp2" id="">
                                    <p>Sp2</p> <br>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 mt-3 mb-3">
                            <label class="text-md font-semibold ml-6 " for="">Bukti SP : </label> <br>
                            <input class="mr-10" type="file" name="buktisp" id="">

                        </div>



                        <!-- Modal footer -->
                        <div
                            class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button type="button"
                                class="border border-blue-400 px-2 py-1 hover:bg-blue-400 hover:text-white rounded"
                                data-modal-hide="defaultModal{{ $modal->id }}">Kembali</button>
                            <button type="submit"
                                class="border border-red-400 px-2 py-1 hover:bg-red-400 hover:text-white rounded">kirim</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div id="extendModal{{ $modal->id }}" tabindex="-1" aria-hidden="true"
            class="kamu-tak-diajak fixed top-0 left-0 right-0 z-[150] hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                          Extend
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="extendModal{{ $modal->id }}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <form action="{{ route('Extend',$modal->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="p-5">
                            <p class="font-semibold">
                                Siswa dengan nama {{$modal->name}} akan berakhir magang pada  {{$modal->magang_akhir}}
                            </p>
                            <p class="font-semibold mt-4">
                                Apakah anda ingin menambah tanggal akhir magang Siswa ini
                            </p>
                            <div class="mt-4">
                                <label class="font-semibold mb-1" for="TanggalAkhir">Tanggal Akhir</label>
                                <input class="border border-gray-600 border-solid w-full h-12 p-3 focus:border-blue-500 rounded" type="date" value="{{$modal->magang_akhir}}" name="TanggalAkhir" id="">
                            </div>

                        </div>
                        <!-- Modal footer -->
                        <div
                            class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button type="button"
                                class="border border-blue-400 px-2 py-1 hover:bg-blue-400 hover:text-white rounded"
                                data-modal-hide="extendModal{{ $modal->id }}">Kembali</button>
                            <button type="submit"
                                class="border border-red-400 px-2 py-1 hover:bg-red-400 hover:text-white rounded">kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @empty
    @endforelse
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script>
        $(window).on('load', function() {
            $('.spin_load').fadeOut();
        });
    </script>
    <script>
        window.addEventListener("DOMContentLoaded", () => Alpine.start());

        function hapus(event) {
            event.preventDefault();

            Swal.fire({
                title: 'Hapus',
                input: 'text',
                inputLabel: 'Masukkan alasan hapus:',
                showCancelButton: true,
                confirmButtonText: 'Kirim',
                cancelButtonText: 'Batal',
                confirmButtonColor: '#00B7FF',
                cancelButtonColor: '#FF0000',
                allowOutsideClick: false,
                inputValidator: (value) => {
                    if (!value || value.trim() === '') {
                        return 'Harap masukkan alasan.';
                    }
                },
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('alasanPenolakan').value = result.value;
                    // console.log(result.value)
                    document.getElementById('myForm').submit();

                }
            })
        }
    </script>
    @if (session()->has('sukses'))\
    <script>
        alert({{session('sukses')}})
    </script>

    @endif
</body>

<!-- Mirrored from lineone.piniastudio.com/pages-card-user-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 May 2023 04:15:45 GMT -->

</html>
