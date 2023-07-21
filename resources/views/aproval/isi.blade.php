<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('admin/favicon.png') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" media="screen"
        href="{{ asset('admin/assets/css/perfect-scrollbar.min.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('admin/assets/css/style.css') }}" />
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <link defer rel="stylesheet" type="text/css" media="screen" href="{{ asset('admin/assets/css/animate.css') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

    <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
        <div class="">
            {{-- @include('.sidebar.layout') --}}
            <div class="animate__animated p-6" :class="[$store.app.animation]">
                <!-- start main content section -->

                <div x-data="basic" class="mt-0">
                    {{-- judul --}}
                    <div class="mb-5 font-semibold">
                        <span>Approval / <span class="text-[#00B7FF]">Pendaftaran</span></span>
                    </div>

                    <div class="main">
                        <div class="flex justify-end mb-5 gap-3">
                            <form id="reject-form-{{ $aproval->id }}"
                                action="{{ route('aproval.tolak', $aproval->id) }}" method="POST"
                                onsubmit="return confirmReject(event)">
                                @csrf
                                <input type="hidden" name="alasan" id="alasan-input-{{ $aproval->id }}">
                                <button type="submit"
                                    class="border border-red-500 hover:bg-red-500 hover:text-white text-red-500 hover:border-red-700 text-sm font-semibold py-1 px-4 rounded-md outline-none focus:outline-none">
                                    Tolak
                                </button>
                            </form>

                            <script>
                                function confirmReject(event) {
                                    event.preventDefault();

                                    Swal.fire({
                                        title: 'Penolakan',
                                        input: 'text',
                                        inputLabel: 'Masukkan alasan penolakan:',
                                        showCancelButton: true,
                                        confirmButtonText: 'Kirim',
                                        cancelButtonText: 'Batal',
                                        confirmButtonColor: '#00B7FF',
                                        cancelButtonColor: '#FF0000',
                                        allowOutsideClick: false,
                                        inputValidator: (value) => {
                                            if (!value || value.trim() === '') {
                                                return 'Harap masukkan alasan penolakan.';
                                            }
                                        },
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            document.getElementById("alasan-input-{{ $aproval->id }}").value = result.value;

                                            Swal.fire({
                                                title: 'Data berhasil ditolak',
                                                icon: 'success',
                                            }).then(() => {
                                                event.target.submit();
                                            });
                                        }
                                    });
                                }
                            </script>
                            <form id="confirm-form-{{ $aproval->id }}"
                                action="{{ route('aproval.confirm', $aproval->id) }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="border border-blue-500 hover:bg-blue-500 hover:text-white text-blue-500 hover:border-blue-700 text-sm font-semibold py-1 px-4 rounded-md outline-none focus:outline-none">
                                    Terima
                                </button>
                            </form>

                            <script>
                                document.getElementById('confirm-form-{{ $aproval->id }}').addEventListener('submit', function(event) {
                                    event.preventDefault();
                                    Swal.fire({
                                        title: 'Konfirmasi',
                                        text: 'Apakah Anda yakin ingin menerima siswa ini?',
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Ya, terima!',
                                        cancelButtonText: 'Batal',
                                        background: '#f5f5f5',
                                        customClass: {
                                            icon: 'swal-icon',
                                            confirmButton: 'swal-button swal-button--confirm',
                                            cancelButton: 'swal-button swal-button--cancel'
                                        },
                                        animation: false
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            Swal.fire({
                                                title: 'Sukses',
                                                text: 'Siswa berhasil diterima',
                                                icon: 'success',
                                                timer: 2000,
                                                showConfirmButton: false,
                                                background: '#f5f5f5',
                                                customClass: {
                                                    icon: 'swal-icon',
                                                    popup: 'swal-popup',
                                                    title: 'swal-title',
                                                    confirmButton: 'swal-button swal-button--confirm'
                                                },
                                                animation: false
                                            });
                                            setTimeout(() => {
                                                this.submit();
                                            }, 2000);
                                        }
                                    });
                                });
                            </script>

                            {{--  <form id="confirm-form-{{ $aproval->id }}" action="{{ route('aproval.confirm', $aproval->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="border border-blue-500 hover:bg-blue-500 hover:text-white text-blue-500 hover:border-blue-700 text-sm font-semibold py-1 px-4 rounded-md outline-none focus:outline-none">
                              Terima
                            </button>
                          </form>

                          <script>
                            document.getElementById('confirm-form-{{ $aproval->id }}').addEventListener('submit', function(event) {
                              event.preventDefault();
                              Swal.fire({
                                title: 'Konfirmasi',
                                text: 'Apakah Anda yakin ingin menerima siswa ini?',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Ya, terima!',
                                cancelButtonText: 'Batal'
                              }).then((result) => {
                                if (result.isConfirmed) {
                                  Swal.fire({
                                    title: 'Sukses',
                                    text: 'Siswa berhasil diterima',
                                    icon: 'success',
                                    timer: 2000,
                                    showConfirmButton: false
                                  });
                                  setTimeout(() => {
                                    this.submit();
                                  }, 2000);
                                }
                              });
                            });
                          </script>  --}}
                        </div>
                        <div class="flex gap-5">
                            <div class="panel w-1/3 ">
                                <div class="flex justify-center">
                                    <img src="{{ asset('storage/pendaftaran/' . $aproval->foto_siswa) }}"
                                        class="rounded-full w-16" alt="" srcset="">
                                </div>
                                <div class="flex justify-center mt-8">
                                    <p class="text-lg">{{ $aproval->name }}</p>
                                </div>
                                <div class="flex justify-center mt-4">
                                    <p class="text-sm">{{ $aproval->email }}</p>
                                </div>
                                <div class="flex justify-center mt-4">
                                    <p class="text-md">{{ $aproval->sekolah }} </p>
                                </div>
                            </div>
                            <div class="panel w-2/3">
                                <div class="font-bold w-full border-b-2">Data Diri</div>
                                <div class="mt-3 flex w-full justify-between ">
                                    <span class="w-1/2"> jenis kelamin </span> <span
                                        class="text-gray-400 w-full flex justify-start "> :
                                        {{ $aproval->jeniskelamin }}</span>
                                </div>
                                <div class="mt-3 flex w-full justify-between">
                                    <span class="w-1/2"> NISN </span> <span
                                        class="text-gray-400 w-full flex justify-start">: {{ $aproval->nisn }}</span>
                                </div>
                                <div class="mt-3 flex w-full justify-between">
                                    <span class="w-1/2"> Kelas / Jurusan </span> <span
                                        class="text-gray-400 w-full flex justify-start">:
                                        {{ $aproval->kelas }}/{{ $aproval->jurusan }}</span>
                                </div>
                                <div class="mt-3 flex w-full justify-between">
                                    <span class="w-1/2">Tempat, tanggal lahir </span> <span
                                        class="text-gray-400 w-full flex justify-start">: {{ $aproval->tempat }},
                                        {{ $aproval->tanggal }}</span>
                                </div>
                                <div class="mt-3 flex w-full justify-between">
                                    <span class="w-1/2">Alamat </span> <span
                                        class="text-gray-400 w-full flex justify-start">: {{ $aproval->alamat }}</span>
                                </div>
                                <div class="mt-3 flex w-full justify-between">
                                    <span class="w-1/2"> Masa Magang </span> <span
                                        class="text-gray-400 w-full flex justify-start">: {{ $aproval->magang_awal }}
                                        -> {{ $aproval->magang_akhir }} </span>
                                </div>
                            </div>
                        </div>
                        <div class="panel mt-5">
                            <div class="font-bold w-full border-b-2">Berkas - Berkas</div>
                            <div class="flex justify-around mt-2">
                                <div>
                                    <p class="">Pernyataan Diri Sendiri:</p>
                                    <img class="hover:scale-125 w-11 transition-all duration-200 mt-4 hover:opacity-80 cursor-pointer"
                                        src="{{ asset('storage/pendaftaran/' . $aproval->sp_diri) }}"
                                        alt="pernyataan diri sendiri" onclick="openModal(this)">
                                </div>

                                <div id="imageModal" class="modal hidden">
                                    <div class="modal-overlay"></div>
                                    <div class="modal-content">
                                        <span class="close absolute top-2 right-2 text-gray-600 cursor-pointer"
                                            onclick="closeModal()">&times;</span>
                                        <h3 class="modal-title" id="modalTitle"></h3>
                                        <div class="modal-image-container">
                                            <img class="modal-image" id="modalImage">
                                            <div class="modal-button-container">
                                                <a id="downloadLink" class="download-link hidden" href="#"
                                                    download>
                                                    <button class="download-button">Download</button>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="caption"></div>
                                    </div>
                                </div>
                                <div>
                                    <p>Pernyataan orang tua :</p>
                                    <img class="hover:scale-125 w-11 transition-all duration-200 mt-4 hover:opacity-80 cursor-pointer"
                                        src="{{ asset('storage/pendaftaran/' . $aproval->sp_ortu) }}" alt=""
                                        onclick="openModal(this)">
                                </div>
                                <div id="imageModal" class="modal hidden">
                                    <div class="modal-overlay"></div>
                                    <div class="modal-content">
                                        <span class="close absolute top-2 right-2 text-gray-600 cursor-pointer"
                                            onclick="closeModal()">&times;</span>
                                        <h3 class="modal-title" id="modalTitle"></h3>
                                        <div class="modal-image-container">
                                            <img class="modal-image" id="modalImage">
                                            <div class="modal-button-container">
                                                <a id="downloadLink" class="download-link hidden" href="#"
                                                    download>
                                                    <button class="download-button">Download</button>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="caption"></div>
                                    </div>
                                </div>
                                <div>
                                    <p>SKCK :</p>
                                    <img class="hover:scale-125 w-11 transition-all duration-200 mt-4 hover:opacity-80 cursor-pointer"
                                        src="{{ asset('storage/pendaftaran/' . $aproval->skck) }}" alt=""
                                        onclick="openModal(this)">
                                </div>
                                <div>
                                    <p>CV :</p>
                                    <img class="hover:scale-125 w-11 transition-all duration-200 mt-4 hover:opacity-80 cursor-pointer"
                                        src="{{ asset('storage/pendaftaran/' . $aproval->cv) }}" alt=""
                                        onclick="openModal(this)">
                                </div>
                                <div id="imageModal" class="modal hidden">
                                    <div class="modal-overlay"></div>
                                    <div class="modal-content">
                                        <span class="close absolute top-2 right-2 text-gray-600 cursor-pointer"
                                            onclick="closeModal()">&times;</span>
                                        <h3 class="modal-title" id="modalTitle"></h3>
                                        <div class="modal-image-container">
                                            <img class="modal-image" id="modalImage">
                                            <div class="modal-button-container">
                                                <a id="downloadLink" class="download-link hidden" href="#"
                                                    download>
                                                    <button class="download-button">Download</button>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="caption"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
            <!-- end main content section -->

            <!-- start footer section -->
            {{-- <p class="pt-6 text-center dark:text-white-dark ltr:sm:text-left rtl:sm:text-right">
                    © <span id="footer-year">2022</span>. Vristo All rights reserved.
                </p> --}}
            <!-- end footer section -->
        </div>
    </div>
    </div>
    <!--Verically centered scrollable modal-->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script>
        document.getElementById("simpan").addEventListener("click", function() {
            // Tampilkan Sweet Alert
            swal("Data berhasil disimpan!", {
                icon: "success",
            }).then(function() {
                // Redirect ke halaman lain
                window.location.href = "{{ route('absensi_admin.create') }}";
            });
        });
    </script>

    <!-- Main modal -->

    {{--  pernyataan diri sendiri  --}}
    <style>
        .modal-overlay {
            z-index: 50;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
        }

        .modal-content {
            z-index: 60;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 90%;
            max-height: 90%;
            border-radius: 8px;
            background: #FFF;
            box-shadow: 0px 0px 2px -1px rgba(0, 0, 0, 0.10);
            overflow-y: auto;
            padding: 20px;
        }

        .modal-title {
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 10px;
        }

        .modal-image-container {
            text-align: center;
            position: relative;
        }

        .modal-image {
            max-width: 100%;
            max-height: 100%;
        }

        .modal-button-container {
            margin-top: 10px;
            text-align: center;
        }

        .download-link {
            display: inline-block;
        }

        .download-button {
            padding: 10px 20px;
            background-color: #11ace9;
            color: #FFF;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .close {
            top: 10px;
            right: 10px;
        }
    </style>

    <script>
        function openModal(element) {
            var modal = document.getElementById("imageModal");
            var modalTitle = document.getElementById("modalTitle");
            var modalImg = document.getElementById("modalImage");
            var downloadLink = document.getElementById("downloadLink");
            var captionText = document.getElementById("caption");

            modal.classList.remove("hidden");
            modalTitle.innerText = "Pernyataan Diri Sendiri";
            modalImg.src = element.src;
            downloadLink.href = element.src;

            downloadLink.classList.remove("hidden");

            document.body.style.overflow = "hidden";
        }

        function closeModal() {
            var modal = document.getElementById("imageModal");
            modal.classList.add("hidden");

            document.body.style.overflow = "auto";
        }
    </script>
    {{--  end pernyataan diri sendiri  --}}



</body>

</html>
