<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/skote/layouts/auth-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Dec 2023 01:39:50 GMT -->

<head>

    <meta charset="utf-8" />
    <title>PKL HUMMATECH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('image/logo.png') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ asset('assets-admin/libs/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/libs/owl.carousel/assets/owl.theme.default.min.css') }}">
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets-admin/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets-admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets-admin/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-admin/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets-admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets-admin/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <style>
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            opacity: 1;
            transition: opacity 0.5s ease-out;
        }

        #loader {
            border: 16px solid #f3f3f3;
            border-top: 16px solid #3498db;
            border-radius: 50%;
            width: 120px;
            height: 120px;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        body.loaded #preloader {
            display: none;
        }
    </style>
</head>

<body class="auth-body-bg">
    @if (session()->has('limitbang'))
        <script>
            toastr.error("{{ session('limitbang') }}");
        </script>
    @endif
    @if (session()->has('berhasil_daftar'))
        <script>
            Swal.fire({
                title: "Berhasil!",
                text: "{{ session('berhasil_daftar') }}",
                icon: "info",
                showCancelButton: false,
                confirmButtonColor: "#3085d6",
                confirmButtonText: "OK",
                timer: 3000
            });
        </script>
    @endif
    @if (session('berhasil_daftar'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('berhasil_daftar') }}',
            })
        </script>
    @endif
    @if (session()->has('error'))
        <script>
            Swal.fire(
                'Oops..!',
                "{{ session('error') }}",
                'error'
            )
        </script>
    @endif
    <div>
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xl-6">
                    <div class="auth-full-bg pt-lg-5 p-4">
                        <div class="w-100">
                            <div class="bg-overlay"></div>
                            <div class="d-flex h-100 flex-column">
                                <div class="mt-auto">
                                    <div class="d-flex justify-content-center px-5">
                                        <img class="w-full" x-show="!$store.global.isDarkModeEnabled"
                                            src="{{ asset('admin/assets/images/Logo.png') }}" width="100px"
                                            alt="image" />
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7">
                                            <div class="text-center">
                                                <h4 class="mb-3"><i
                                                        class="bx bxs-quote-alt-left text-primary h1 align-middle me-3"></i><span
                                                        class="text-primary">PKL HUMMATECH</span></h4>
                                                <div dir="ltr">
                                                    <div class="owl-carousel owl-theme auth-review-carousel"
                                                        id="auth-review-carousel">
                                                        <div class="item">
                                                            <div class="py-3">
                                                                <p class="font-size-16 mb-4">" Selamat datang di
                                                                    HUMMATECH Software House, tempat di mana inovasi
                                                                    bertemu dengan keahlian. Kami adalah perusahaan
                                                                    pengembangan perangkat lunak terkemuka yang
                                                                    berdedikasi untuk mengubah ide-ide Anda menjadi
                                                                    solusi terdepan. Dengan tim profesional yang
                                                                    terampil dan semangat dalam teknologi, kami berusaha
                                                                    memberikan produk perangkat lunak yang luar biasa
                                                                    dan disesuaikan untuk memenuhi kebutuhan Anda yang
                                                                    unik.. "</p>
                                                            </div>

                                                        </div>
                                                        <div class="item">
                                                            <div class="py-3">
                                                                <p class="font-size-16 mb-4">" Selamat datang di
                                                                    HUMMATECH Software House, tempat di mana ide-ide
                                                                    menjadi kenyataan yang kuat. Kami adalah perusahaan
                                                                    pengembangan perangkat lunak yang berdedikasi untuk
                                                                    memberikan solusi inovatif bagi Anda. Dengan tim
                                                                    ahli kami dan semangat dalam teknologi, kami
                                                                    berkomitmen untuk menghadirkan produk perangkat
                                                                    lunak yang luar biasa, mengubah cara Anda
                                                                    berbisnis.. "</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-6">
                    <div class="auth-full-page-content p-md-5 p-4">
                        <div class="w-100">

                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5">
                                    <a href="kavascript:void(0)" class="d-block card-logo">
                                        <img src="{{ asset('assets-landing/images/logolandingpng.png') }}"
                                            alt="" height="45" class="card-logo-dark">
                                        <img src="assets/images/logo-light.png" alt="" height="18"
                                            class="card-logo-light">
                                    </a>
                                </div>
                                <form action="{{ route('login.store') }}" method="post" id="form-create"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div id="basic-example" class="mt-5">
                                        <!-- Seller Details -->
                                        <h3>Tahap 1</h3>
                                        <section>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-firstname-input">Nama</label>
                                                        <input type="text" class="form-control"
                                                            id="basicpill-firstname-input" name="name" value="{{ old('name') }}"
                                                            placeholder="Nama">
                                                        @error('name')
                                                            <p class="text-danger">
                                                                {{ $message }}
                                                            </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-lastname-input">NISN / NIM</label>
                                                        <input type="text" class="form-control"
                                                            id="basicpill-lastname-input" name="nisn"  value="{{ old('nisn') }}"
                                                            placeholder="NISN">
                                                        @error('nisn')
                                                            <p class="text-danger">
                                                                {{ $message }}
                                                            </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-phoneno-input">Tempat</label>
                                                        <input type="text" class="form-control"
                                                            id="basicpill-phoneno-input" name="tempat" value="{{ old('tempat') }}"
                                                            placeholder="Tempat">
                                                        @error('tempat')
                                                            <p class="text-danger">
                                                                {{ $message }}
                                                            </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-email-input">Tanggal Lahir</label>
                                                        <input type="date" class="form-control" name="tanggal" value="{{ old('tanggal') }}"
                                                            id="basicpill-email-input">
                                                        @error('tanggal')
                                                            <p class="text-danger">
                                                                {{ $message }}
                                                            </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="basicpill-address-input">Kelas</label>
                                                        <select class="form-select" name="kelas">
                                                            <option  value="10"
                                                            {{ old('kelas') == '10' ? 'selected' : '' }}>10</option>
                                                            <option  value="11"
                                                            {{ old('kelas') == '11' ? 'selected' : '' }}>11</option>
                                                            <option  value="12"
                                                            {{ old('kelas') == '12' ? 'selected' : '' }}>12</option>
                                                            <option  value="13"
                                                            {{ old('kelas') == '13' ? 'selected' : '' }}>13</option>
                                                            <option  value="Mahasiswa"
                                                            {{ old('kelas') == 'Mahasiswa' ? 'selected' : '' }}>Mahasiswa</option>
                                                        </select>
                                                        @error('kelas')
                                                            <p class="text-danger">
                                                                {{ $message }}
                                                            </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="font-size-14 mb-2">Jenis Kelamin</h5>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" name="jeniskelamin" id="formRadios1" value="Perempuan" {{ old('jeniskelamin') == 'Perempuan' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="formRadios1">
                                                    Perempuan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input"  type="radio" name="jeniskelamin" id="formRadios2"
                                                value="laki-laki"
                                                {{ old('jeniskelamin') == 'laki-laki' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="formRadios2">
                                                    Laki laki
                                                </label>
                                            </div>
                                            @error('jeniskelamin')
                                                <p class="text-danger">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </section>

                                        <!-- Company Document -->
                                        <h3>Tahap 2</h3>
                                        <section>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-pancard-input">Alamat</label>
                                                        <input type="text" class="form-control"
                                                            id="basicpill-pancard-input" name="alamat" value="{{ old('alamat') }}">
                                                        @error('alamat')
                                                            <p class="text-danger">
                                                                {{ $message }}
                                                            </p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-vatno-input">Nomor</label>
                                                        <input type="number" class="form-control"
                                                            id="basicpill-vatno-input" name="no" value="{{ old('no') }}">
                                                        @error('no')
                                                            <p class="text-danger">
                                                                {{ $message }}
                                                            </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-address-input">Jurusan</label>
                                                        <select class="form-select" name="jurusan">
                                                            <option value="RPL" {{ old('jurusan') == 'RPL' ? 'selected' : '' }}>RPL
                                                            </option>
                                                            <option value="Multimedia" {{ old('jurusan') == 'Multimedia' ? 'selected' : '' }}>
                                                                Multimedia</option>
                                                            <option value="TI" {{ old('jurusan') == 'TI' ? 'selected' : '' }}>TI</option>
                                                        </select>
                                                        @error('jurusan')
                                                            <p class="text-danger">
                                                                {{ $message }}
                                                            </p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-servicetax-input">Sekolah /
                                                            Universitas</label>
                                                        <input type="text" class="form-control"
                                                            id="basicpill-servicetax-input" name="sekolah" value="{{ old('sekolah') }}" >
                                                        @error('sekolah')
                                                            <p class="text-danger">
                                                                {{ $message }}
                                                            </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-companyuin-input">Mulai PKL</label>
                                                        <input type="date" class="form-control" name="magang_awal" value="{{ old('magang_awal') }}"
                                                            id="basicpill-companyuin-input">
                                                        @error('magang_awal')
                                                            <p class="text-danger">
                                                                {{ $message }}
                                                            </p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="basicpill-declaration-input">Akhir PKL</label>
                                                        <input type="date" class="form-control"
                                                            name="magang_akhir" id="basicpill-Declaration-input" value="{{ old('magang_akhir') }}"
                                                            placeholder="Declaration Details">
                                                        @error('magang_akhir')
                                                            <p class="text-danger">
                                                                {{ $message }}
                                                            </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- Bank Details -->
                                        <h3>Tahap 3</h3>
                                        <section>
                                            <div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <div>
                                                                <label for="formFileSm" class="form-label">Foto
                                                                    siswa</label>
                                                                <input class="form-control form-control-sm"
                                                                    id="formFileSm" type="file" name="foto_siswa">
                                                                @error('foto_siswa')
                                                                    <p class="text-danger">
                                                                        {{ $message }}
                                                                    </p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <div>
                                                                <label for="formFileSm" class="form-label">Surat
                                                                    Pernyataan Diri (opsional)</label>
                                                                <input class="form-control form-control-sm"
                                                                    id="formFileSm" type="file" name="sp_diri">
                                                                    <p class="text-danger">
                                                                        Surat Pernyataan Diri Harus Berformat .jpg, .jpeg, atau .png
                                                                    </p>
                                                                @error('sp_diri')
                                                                    <p class="text-danger">
                                                                        {{ $message }}
                                                                    </p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <div>
                                                                <label for="formFileSm" class="form-label">Surat
                                                                    Pernyataan Orang Tua (opsional)</label>
                                                                <input class="form-control form-control-sm"
                                                                    id="formFileSm" type="file" name="sp_ortu">
                                                                    <p class="text-danger">
                                                                        Surat Pernyataan Orang Tua Harus Berformat .jpg, .jpeg, atau .png
                                                                    </p>
                                                                @error('sp_ortu')
                                                                    <p class="text-danger">
                                                                        {{ $message }}
                                                                    </p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <div>
                                                                <label for="formFileSm" class="form-label">SKCK
                                                                    (opsional)</label>
                                                                <input class="form-control form-control-sm"
                                                                    id="formFileSm" type="file" name="skck">
                                                                    <p class="text-danger">
                                                                        SKCK Harus Berformat .jpg, .jpeg, atau .png
                                                                    </p>
                                                                @error('skck')
                                                                    <p class="text-danger">
                                                                        {{ $message }}
                                                                    </p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <div>
                                                                <label for="formFileSm" class="form-label">CV</label>
                                                                <input class="form-control form-control-sm"
                                                                    id="formFileSm" type="file" name="cv">
                                                                    <p class="text-danger">
                                                                        CV  Harus Berformat .jpg, .jpeg, atau .png
                                                                    </p>
                                                                @error('cv')
                                                                    <p class="text-danger">
                                                                        {{ $message }}
                                                                    </p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </section>
                                        <h3>Tahap 4</h3>
                                        <section>
                                            <div>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <div>
                                                                <label for="basicpill-phoneno-input">Email</label>
                                                                <input type="email" class="form-control"
                                                                    id="basicpill-phoneno-input" name="email" value="{{ old('email') }}">
                                                                @error('email')
                                                                    <p class="text-danger">
                                                                        {{ $message }}
                                                                    </p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <div>
                                                                <label for="basicpill-phoneno-input">Password</label>
                                                                <input type="password" class="form-control"
                                                                    id="basicpill-phoneno-input" name="password">
                                                                @error('password')
                                                                    <p class="text-danger">
                                                                        {{ $message }}
                                                                    </p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <div>
                                                                <label for="basicpill-phoneno-input">Konfirmasi
                                                                    password</label>
                                                                <input type="password" class="form-control"
                                                                    id="basicpill-phoneno-input"
                                                                    name="confirm-password">
                                                                @error('confirm-password')
                                                                    <p class="text-danger">
                                                                        {{ $message }}
                                                                    </p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </form>
                                <div class="mt-4 text-center text-xs+">
                                    <p class="line-clamp-1">
                                        <span>Sudah punya Akun?</span>
                                        <a class="text-blue-400 transition-colors hover:text-info-focus dark:text-accent-light dark:hover:text-accent"
                                            href="{{ route('auth-login') }}">Login</a>
                                    </p>
                                </div>
                                <div class="mt-4 mt-md-5 text-center">
                                    <p class="mb-0">©
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script> <i class="mdi mdi-heart text-danger"></i> by Hummatech
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>
    <div id="preloader">
        <div id="loader"></div>
    </div>
    <!-- JAVASCRIPT -->
    <script>
        window.addEventListener('load', function() {
            const preloader = document.getElementById('preloader');
            preloader.style.animation = 'none';
            preloader.style.opacity = 0;
            document.body.classList.add('loaded');
        });
    </script>
    <script src="{{ asset('assets-admin/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/node-waves/waves.min.js') }}"></script>

    <!-- jquery step -->
    <script src="{{ asset('assets-admin/libs/jquery-steps/build/jquery.steps.min.js') }}"></script>

    <!-- form wizard init -->
    <script src="{{ asset('assets-admin/js/pages/form-wizard.init.js') }}"></script>
    <!-- owl.carousel js -->
    <script src="{{ asset('assets-admin/libs/owl.carousel/owl.carousel.min.js') }}"></script>

    <!-- auth-2-carousel init -->
    <script src="{{ asset('assets-admin/js/pages/auth-2-carousel.init.js') }}"></script>
</body>

<!-- Mirrored from themesbrand.com/skote/layouts/auth-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Dec 2023 01:39:50 GMT -->

</html>
