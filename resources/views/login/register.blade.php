<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <!-- Meta tags  -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />



    <title>Register</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="/admin/assets/images/Logo.png" rel="shortcut icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        theme: {
            extend: {
                blur: {
                    xs: '3px',
                }
            },
        }
    </script>
    <style>
        .step:not(.active) {
            display: none;
        }
    </style>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
</head>

<body class="bg-black ">

    @if (session()->has('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: "{{ session('error') }}",
            })
        </script>
    @endif

    <!-- Page Wrapper -->
    <div class="h-screen   flex w-full  bg-slate-50 dark:bg-navy-900" id="wizardForm">
        <div class="fixed top-0 hidden p-6 lg:block lg:px-12">
            <a href="#" class="flex items-center space-x-2">
                <img class="h-8 w-100" src="{{ asset('lineone/images/hummasoft2.png') }}" alt="logo" />

            </a>
        </div>
        <div class=" w-full   items-center hidden md:flex" style="height: 100%">
            <div class="w-full bg-gray-50 flex justify-center pt-5 ">
                <div class="md:w-1/2 ">
                    @include('login.svg')
                </div>
            </div>
        </div>
        <main class="flex w-full flex-col  items-center bg-white dark:bg-navy-700 lg:max-w-md">
            <div class="w-full h-full flex-col p-5 gap-8   ">
                <div class="text-center">
                    <img class="mx-auto h-16 w-16 lg:hidden" src="{{ asset('admin/assets/images/Logo.png') }}"
                        alt="logo" />
                    <div class="mt-4">
                        <h2 class="text-2xl font-semibold text-slate-600 dark:text-navy-100">
                            Selamat Datang
                        </h2>
                        <p class="text-slate-400 dark:text-navy-300">
                            di Hummasoft Technology
                        </p>

                        @if (isset($alertMessage))
                            <div class="bg-red-200 text-red-700 p-4 mb-4">
                                <h1>
                                    {{ $alertMessage }}
                                </h1>
                            </div>
                        @endif


                    </div>
                </div>
                <div class="mt-[15%]">
                    <form action="{{ route('login.store') }}" class="relative" method="post"
                        enctype="multipart/form-data" id="fff">
                        @csrf
                        <!-- Step 1 -->
                        <div class="step active ">
                            <div class="mb-4">
                                <label for="name" class="block font-bold mb-1 text-sm">Nama :</label>
                                <input type="text" placeholder="Nama" id="name" name="name" value="{{old('name')}}"
                                    class="w-full px-4 py-1 text-sm border rounded" required>
                                <span id="nameError" class="text-red-500 text-xs mt-1"></span>
                            </div>
                            <div class="flex justify-between gap-0">
                                <div class="mb-4">
                                    <label for="name" class="block font-bold text-sm mb-1">Tempat :</label>
                                    <input type="text" id="tempat" name="tempat" placeholder="Tempat lahir" value="{{old('tempat')}}"
                                        class="w-full px-4 py-1 text-sm border rounded" required>
                                    <span id="tempatError" class="text-red-500 text-xs mt-1"></span>
                                </div>
                                <div class="mb-4">
                                    <label for="birthdate" class="block font-bold text-sm mb-1">Tanggal Lahir :</label>
                                    <input type="date" id="tanggallahir" name="tanggal" value="{{old('tanggal')}}"
                                        class="w-full px-4 py-1 text-sm border rounded" required>
                                    <div id="warning-tanggal-lahir" class="text-red-500 text-sm mt-1"></div>

                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="nisn" class="block font-bold mb-1 text-sm">NISN / NIM:</label>
                                <input type="number" id="nisn" name="nisn" placeholder="Masukkan nisn / nim" value="{{old('nisn')}}"
                                    class="w-full px-4 py-1 text-sm border rounded" min="0" required>
                            </div>

                            <div class="mb-4">
                                <label for="kelas" class="block font-bold mb-1 text-sm">Kelas:</label>
                                <select name="kelas" id="class"
                                    class="w-full px-4 py-1 text-sm border rounded @error('kelas') is-invalid @enderror"
                                    required>
                                    <option class="text-sm" value="" disabled selected>Pilih kelas</option>
                                    <option class="text-sm" value="10" {{ (old('kelas') == "10") ? "selected" : "" }}>10</option>
                                    <option class="text-sm" value="11" {{ (old('kelas') == "11") ? "selected" : "" }}>11</option>
                                    <option class="text-sm" value="12" {{ (old('kelas') == "12") ? "selected" : "" }}>12</option>
                                    <option class="text-sm" value="Mahasiswa" {{ (old('kelas') == "Mahasiswa") ? "selected" : "" }}>Mahasiswa</option>
                                </select>
                                <div id="kelas-warning" class="text-red-500 text-sm mt-1"></div>
                            </div>

                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    var tempatInput = document.getElementById("tempat");
                                    var tempatError = document.getElementById("tempatError");
                                    var nextButton = document.getElementById("nextStep1");

                                    tempatInput.addEventListener("input", function() {
                                        if (tempatInput.value.length > 225) {
                                            tempatError.textContent = "Tempat tidak boleh lebih dari 225 karakter.";
                                            nextButton.disabled = true;
                                        } else {
                                            tempatError.textContent = "";
                                            nextButton.disabled = false;
                                        }
                                    });

                                    nextButton.addEventListener("click", function() {
                                        if (tempatInput.value.length > 225) {
                                            tempatError.textContent = "Tempat tidak boleh lebih dari 225 karakter.";
                                            return false;
                                        }
                                    });
                                });
                            </script>

                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    var nameInput = document.getElementById("name");
                                    var nameError = document.getElementById("nameError");
                                    var nextButton = document.getElementById("nextStep1");

                                    nameInput.addEventListener("input", function() {
                                        if (nameInput.value.length > 225) {
                                            nameError.textContent = "Nama tidak boleh lebih dari 225 karakter.";
                                            nextButton.disabled = true; // Menonaktifkan tombol Next
                                        } else {
                                            nameError.textContent = "";
                                            nextButton.disabled = false; // Mengaktifkan tombol Next
                                        }
                                    });

                                    nextButton.addEventListener("click", function() {
                                        if (nameInput.value.length > 225) {
                                            nameError.textContent = "Nama tidak boleh lebih dari 225 karakter.";
                                            return false; // Menghentikan aksi tombol Next jika ada kesalahan
                                        }
                                    });
                                });
                            </script>
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    var nameInputTempat = document.getElementById("tempat");
                                    var nameErrorTempat = document.getElementById("tempatError");
                                    var nextButton = document.getElementById("nextStep1");

                                    nameInputTempat.addEventListener("input", function() {
                                        if (nameInputTempat.value.length > 225) {
                                            nameErrorTempat.textContent = "Nama tidak boleh lebih dari 225 karakter.";
                                            nextButton.disabled = true; // Menonaktifkan tombol Next
                                        } else {
                                            nameErrorTempat.textContent = "";
                                            nextButton.disabled = false; // Mengaktifkan tombol Next
                                        }
                                    });

                                    nextButton.addEventListener("click", function() {
                                        if (nameInputTempat.value.length > 225) {
                                            nameErrorTempat.textContent = "Nama tidak boleh lebih dari 225 karakter.";
                                            return false; // Menghentikan aksi tombol Next jika ada kesalahan
                                        }
                                    });
                                });
                            </script>


                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    const nextButton = document.getElementById("nextStep1");
                                    const selectElement = document.getElementById("class");
                                    const warningElement = document.getElementById("kelas-warning");

                                    nextButton.addEventListener("click", function() {
                                        const selectedValue = selectElement.value;

                                        if (selectedValue === "") {
                                            warningElement.textContent = "Pilih salah satu dari opsi ini.";
                                        } else {
                                            warningElement.textContent = ""; // Clear the warning if option is selected
                                            // Perform any other actions here to proceed to the next step if needed
                                        }
                                    });
                                });
                            </script>


                            <label for="class" class="block font-bold mb-1 text-sm">Jenis Kelamin :</label>
                            <div class=" flex justify-between">
                                <div class="flex gap-2">
                                    <input class="text-sm" type="radio" name="jeniskelamin" id="radio"
                                        value="laki-laki" {{(old('jeniskelamin') == 'laki-laki') ? "selected" : ""}}>
                                    <p>Laki-laki</p>
                                    <input class="text-sm" type="radio" name="jeniskelamin" id="radio"
                                        value="Perempuan" {{ (old('jeniskelamin') == 'Perempuan') ? "selected" : "" }}>
                                    <p>Perempuan </p>
                                    <span></span>
                                </div>
                            </div>
                            <div class="mt-19 "> <br>
                                <button type="button" id="nextStep1"
                                    class="py-2 px-4 bg-blue-500 text-white rounded w-full">Next</button>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="step">
                            <div class="mb-4">
                                <label for="address" class="block font-bold text-sm mb-1">Alamat :</label>
                                <textarea id="alamat" name="alamat" class=" px-2 border items-center text-sm w-full h-8 rounded" required>{{old('alamat')}}</textarea>
                                <span id="alamatError" class="text-red-500 text-xs mt-1"></span>
                            </div>
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    var alamatInput = document.getElementById("alamat");
                                    var alamatError = document.getElementById("alamatError");
                                    var nextButton = document.getElementById("nextStep2");

                                    alamatInput.addEventListener("input", function() {
                                        if (alamatInput.value.length > 225) {
                                            alamatError.textContent = "alamat tidak boleh lebih dari 225 karakter.";
                                            nextButton.disabled = true;
                                        } else {
                                            alamatError.textContent = "";
                                            nextButton.disabled = false;
                                        }
                                    });

                                    alamatInput.addEventListener("click", function() {
                                        if (alamatInput.value.length > 225) {
                                            alamatError.textContent = "alamat tidak boleh lebih dari 225 karakter.";
                                            return false;
                                        }
                                    });
                                });
                            </script>
                            <div class="mb-4">
                                <label for="school" class="block font-bold text-sm mb-1">Nomer tlp :</label>
                                <input type="number" id="nomor" name="no" min="0" value="{{old('no')}}"
                                    class="w-full px-4 py-1 border rounded" required>
                            </div>
                            <div class="mb-4">
                                <label for="major" class="block font-bold mb-1 text-sm">Jurusan :</label>
                                <select name="jurusan" class="w-full px-4 py-1 border rounded" id="jurusan"
                                    required>
                                    <option value="" disabled selected>Pilih jurusan</option>
                                    <option value="RPL" {{old("jurusan") == "RPL" ? "selected" : ""}}>RPL</option>
                                    <option value="Multimedia" {{old("jurusan") == "Multimedia" ? "selected" : ""}}>Multimedia</option>
                                    <option value="TI" {{old("jurusan") == "TI" ? "selected" : ""}}>TI</option>
                                </select>
                                <div id="kelas-warning2" class="text-red-500 text-sm mt-1"></div>
                            </div>

                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    const nextButton = document.getElementById("nextStep2");
                                    const selectElement = document.getElementById("jurusan");
                                    const warningElement = document.getElementById("kelas-warning2");

                                    nextButton.addEventListener("click", function() {
                                        const selectedValue = selectElement.value;

                                        if (selectedValue === "") {
                                            warningElement.textContent = "Pilih salah satu dari opsi ini.";
                                        } else {
                                            warningElement.textContent = ""; // Clear the warning if option is selected
                                            // Perform any other actions here to proceed to the next step if needed
                                        }
                                    });
                                });
                            </script>

                            <div class="mb-4">
                                <label for="school" class="block font-bold text-sm mb-1">Sekolah / Universitas
                                    :</label>
                                <input type="text" id="sekolah" name="sekolah" value="{{old('jurusan')}}"
                                    class="w-full px-4 py-1 text-sm border rounded" required>
                                <span id="sekolahError" class="text-red-500 text-xs mt-1"></span>
                            </div>
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    var sekolahInput = document.getElementById("sekolah");
                                    var sekolahError = document.getElementById("sekolahError");
                                    var nextButton = document.getElementById("nextStep2");

                                    sekolahInput.addEventListener("input", function() {
                                        if (sekolahInput.value.length > 225) {
                                            sekolahError.textContent = "sekolah tidak boleh lebih dari 225 karakter.";
                                            nextButton.disabled = true;
                                        } else {
                                            sekolahError.textContent = "";
                                            nextButton.disabled = false;
                                        }
                                    });

                                    sekolahInput.addEventListener("click", function() {
                                        if (sekolahInput.value.length > 225) {
                                            sekolahError.textContent = "sekolah tidak boleh lebih dari 225 karakter.";
                                            return false;
                                        }
                                    });
                                });
                            </script>
                            <div class="flex justify-between gap-2 mb-4 ">
                                <div class="">
                                    <label for="internship-start" class="block font-bold text-sm mb-1">Mulai Magang
                                        :</label>
                                    <input type="date" id="mulai-magang" name="magang_awal" value="{{old('magang_awal')}}"
                                        class="w-full px-4 text-sm py-1 border rounded" required>
                                    <div id="warning-tanggal-magang" class="text-red-500 text-sm mt-1"></div>
                                </div>
                                <div class="">
                                    <label for="internship-end" class="block font-bold text-sm mb-1">Selesai
                                        Magang:</label>
                                    <input type="date" id="akhir-magang" name="magang_akhir" value="{{old('magang_akhir')}}"
                                        class="w-full px-4 py-1 text-sm border rounded" required>
                                </div>
                            </div>
                            <div class="flex justify-between gap-2">
                                <button type="button" id="prevStep2"
                                    class="w-full mr-2 py-2 px-4 bg-blue-500 text-white rounded">Previous</button>
                                <button type="button" id="nextStep2"
                                    class="w-full py-2 px-4 bg-blue-500 text-white rounded">Next</button>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="step">
                            <div class="mb-4">
                                <label for="photo" class="block font-bold text-sm mb-1">Foto Siswa :</label>
                                <input type="file" id="photo" name="foto_siswa"
                                    class="w-full px-4 py-1 text-sm border rounded" required>
                                    <p class="text-sm font-light italic bg-red ">Foto siswa harus berformat "JPG,PNG"</p>
                                <div id="file-warning-siswa" class="text-red-500 text-sm mt-1"></div>
                            </div>
                            <div class="mb-4">
                                <label for="self-statement" class="block font-bold text-sm mb-1">Pernyataan Siswa
                                    :</label>
                                <input type="file" ty id="sp_diri" name="sp_diri"
                                    class="w-full text-sm px-4 py-1 border rounded" required>
                                    <p class="text-sm font-light italic bg-red ">Surat Pernyataan Siswa harus berformat "JPG,PNG"</p>

                                <div id="file-warning-diri" class="text-red-500 text-sm mt-1"></div>
                            </div>
                            <div class="mb-4">
                                <label for="outu-statement" class="block font-bold text-sm mb-1">Pernyataan Orang Tua
                                    :</label>
                                <input type="file" ty id="sp_ortu" name="sp_ortu"
                                    class="w-full text-sm px-4 py-1 border rounded" required>
                                    <p class="text-sm font-light italic bg-red ">Surat Pernyataan Orang Tua harus berformat "JPG,PNG"</p>

                                <div id="file-warning-ortu" class="text-red-500 text-sm mt-1"></div>
                            </div>
                            <div class="mb-4">
                                <label for="skck" class="block font-bold text-sm mb-1">SKCK <span
                                        class="font-light italic bg-red">(opsional)</span> :</label>
                                <input type="file" id="skck" name="skck"
                                    class="w-full text-sm px-4 py-1 border rounded">
                                    <p class="text-sm font-light italic bg-red ">Surat SKCK harus berformat "JPG,PNG"</p>

                                <div id="file-warning-skck" class="text-red-500 text-sm mt-1"></div>
                            </div>
                            <div class="mb-4">
                                <label for="cv" class="block font-bold text-sm mb-1">CV:</label>
                                <input type="file" id="cv" name="cv"
                                    class="w-full text-sm px-4 py-1 border rounded" required>
                                    <p class="text-sm font-light italic bg-red ">Surat CV harus berformat "JPG,PNG"</p>

                                <div id="file-warning-cv" class="text-red-500 text-sm mt-1"></div>
                            </div>
                            <div class="flex justify-between gap-2">
                                <button type="button" id="prevStep3"
                                    class="w-full mr-2 py-2 px-4 bg-blue-500 text-white rounded">Previous</button>
                                <button type="button" id="nextStep3"
                                    class="w-full py-2 px-4 bg-blue-500 text-white rounded">Next</button>
                            </div>
                        </div>
                        <!-- Step 4 -->
                        <div class="step">
                            <div class="mb-4">
                                <label for="email" class="block font-bold mb-1">Email:</label>
                                <input type="email" id="email" name="email" value="{{old('email')}}"
                                    class="w-full px-4 py-1 text-sm border rounded" required>
                                <span id="emailError" class="text-red-500 text-xs mt-1"></span>
                            </div>
                            <div class="mb-4">
                                <label for="password" class="block font-bold mb-1">Password:</label>
                                <input type="password" id="password" name="password"
                                    class="w-full px-4 py-1 text-sm border rounded" required>
                                <div id="file-warning-password" class="text-red-500 text-sm mt-1"></div>
                                <span id="passwordError" class="text-red-500 text-xs mt-1"></span>
                            </div>
                            <div class="mb-4">
                                <label for="confirm-password" class="block font-bold mb-1">Confirm Password:</label>
                                <input type="password" id="confirm-password" name="confirm-password"
                                    class="w-full px-4 py-1 text-sm border rounded">
                                <div id="file-warning-konfrim" class="text-red-500 text-sm mt-1"></div>
                                <span id="konfirmasiError" class="text-red-500 text-xs mt-1"></span>
                            </div>
                            <div class="flex justify-between gap-2">
                                <button type="button" id="prevStep4"
                                    class="w-full mr-2 py-2 px-4 bg-blue-500 text-white rounded">Previous</button>
                                <button type="submit" id="btnSubmit"
                                    class="w-full py-2 px-4 bg-blue-500 text-white rounded">Submit</button>
                            </div>
                        </div>
                    </form>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            var emailInput = document.getElementById("email");
                            var emailError = document.getElementById("emailError");
                            var nextButton = document.getElementById("btnSubmit");

                            emailInput.addEventListener("input", function() {
                                if (emailInput.value.length > 225) {
                                    emailError.textContent = "email tidak boleh lebih dari 225 karakter.";
                                    nextButton.disabled = true;
                                } else {
                                    emailError.textContent = "";
                                    nextButton.disabled = false;
                                }
                            });

                            emailInput.addEventListener("click", function() {
                                if (emailInput.value.length > 225) {
                                    emailError.textContent = "emmail tidak boleh lebih dari 225 karakter.";
                                    return false;
                                }
                            });
                        });

                        document.addEventListener("DOMContentLoaded", function() {
                            var passwordInput = document.getElementById("password");
                            var passwordError = document.getElementById("passwordError");
                            var nextButton = document.getElementById("btnSubmit");

                            passwordInput.addEventListener("input", function() {
                                if (passwordInput.value.length > 225) {
                                    passwordError.textContent = "password tidak boleh lebih dari 225 karakter.";
                                    nextButton.disabled = true;
                                } else {
                                    passwordError.textContent = "";
                                    nextButton.disabled = false;
                                }
                            });

                            passwordInput.addEventListener("click", function() {
                                if (passwordInput.value.length > 225) {
                                    passwordError.textContent = "password tidak boleh lebih dari 225 karakter.";
                                    return false;
                                }
                            });
                        });


                        document.addEventListener("DOMContentLoaded", function() {
                            var konfirmasiInput = document.getElementById("confirm-password");
                            var konfirmasiError = document.getElementById("konfirmasiError");
                            var nextButton = document.getElementById("btnSubmit");

                            konfirmasiInput.addEventListener("input", function() {
                                if (konfirmasiInput.value.length > 225) {
                                    konfirmasiError.textContent =
                                        "konfrimasi password tidak boleh lebih dari 225 karakter.";
                                    nextButton.disabled = true;
                                } else {
                                    konfirmasiError.textContent = "";
                                    nextButton.disabled = false;
                                }
                            });

                            konfirmasiInput.addEventListener("click", function() {
                                if (konfirmasiInput.value.length > 225) {
                                    konfirmasiError.textContent =
                                        "konfirmasi password tidak boleh lebih dari 225 karakter.";
                                    return false;
                                }
                            });
                        });
                    </script>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            const form = document.getElementById("fff");
                            const submitButton = document.getElementById("btnSubmit");

                            form.addEventListener("submit", function(event) {
                                event.preventDefault(); // Prevent the form from submitting by default
                                const password = document.getElementById("confirm-password")
                                const confirmpassword = document.getElementById("password");

                                if (password.value == confirmpassword.value) {
                                    if (password.value.trim().length >= 6) {
                                        form.submit();
                                    } else {
                                        const kurang = document.getElementById("file-warning-password");
                                        kurang.textContent = "password tidak sama";
                                        // alert("Password kurang dari 6")
                                    }
                                } else {
                                    const sama = document.getElementById("file-warning-konfrim");
                                    sama.textContent = "password tidak sama";
                                    // alert("Password tidak sama")
                                }

                            });
                        });
                    </script>
                    <script>
                        function cekpassword() {
                            const pw = document.getElementById("password").value;
                            const cpw = document.getElementById("confirm-password").value;

                            if (pw != cpw) {
                                document.getElementById("btnSubmit").disabled = true;
                                alert("Password tidak sama");
                            } else {
                                document.getElementById("btnSubmit").disabled = false;
                            }
                        }

                        const passwordInput = document.getElementById("password");
                        const confirmPasswordInput = document.getElementById("confirm-password");
                        const myForm = document.getElementById("myForm");
                        const fileWarningpass = document.getElementById("file-warning-password");
                        const fileWarningkonfrim = document.getElementById("file-warning-konfrim");
                    </script>
                    <script>
                        $(document).ready(function() {
                            $('btnSubmit').on('click', function(event) {
                                event.preventDefault();
                                alert(event);
                            })
                        });
                    </script>
                    <div class="mt-4 text-center text-xs+">
                        <p class="line-clamp-1">
                            <span>Sudah punya Akun?</span>
                            <a class="text-blue-400 transition-colors hover:text-info-focus dark:text-accent-light dark:hover:text-accent"
                                href="{{ route('auth-login') }}">Login</a>
                        </p>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const nextButton1 = document.getElementById("nextStep3");
            const fileInput1 = document.getElementById("sp_diri"); // Note: Changed 'fileInput' to 'photo'
            const fileWarning1 = document.getElementById("file-warning-diri");

            nextButton1.addEventListener("click", function() {
                if (fileInput1.files.length === 0) {
                    // File input is empty, no need to show the warning
                    fileWarning1.textContent = "";
                    return;
                }

                if (!validateFileType(fileInput1)) {
                    fileWarning1.textContent = "Masukkan gambar dengan ekstensi jpg, jpeg, atau png.";
                } else {
                    fileWarning1.textContent = ""; // Clear the warning if the file is valid
                    // Perform any other actions here to proceekd to the next step if needed
                }
            });

            function validateFileType(input) {
                const allowedExtensions = ["jpg", "jpeg", "png"]; // Allowed file extensions
                const fileName = input.value;
                const fileExtension = fileName.split('.').pop().toLowerCase(); // Get the file extension

                return allowedExtensions.includes(fileExtension);
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            const nextButton2 = document.getElementById("nextStep3");
            const fileInput2 = document.getElementById("sp_ortu"); // Note: Changed 'fileInput' to 'photo'
            const fileWarning2 = document.getElementById("file-warning-ortu");

            nextButton2.addEventListener("click", function() {
                if (fileInput2.files.length === 0) {
                    // File input is empty, no need to show the warning
                    fileWarning2.textContent = "";
                    return;
                }

                if (!validateFileType(fileInput2)) {
                    fileWarning2.textContent = "Masukkan gambar dengan ekstensi jpg, jpeg, atau png.";
                } else {
                    fileWarning2.textContent = ""; // Clear the warning if the file is valid
                    // Perform any other actions here to proceed to the next step if needed
                }
            });

            function validateFileType(input) {
                const allowedExtensions = ["jpg", "jpeg", "png"]; // Allowed file extensions
                const fileName = input.value;
                const fileExtension = fileName.split('.').pop().toLowerCase(); // Get the file extension

                return allowedExtensions.includes(fileExtension);
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            const nextButton3 = document.getElementById("nextStep3");
            const fileInput3 = document.getElementById("cv"); // Note: Changed 'fileInput' to 'photo'
            const fileWarning3 = document.getElementById("file-warning-cv");

            nextButton3.addEventListener("click", function() {
                if (fileInput3.files.length === 0) {
                    // File input is empty, no need to show the warning
                    fileWarning3.textContent = "";
                    return;
                }

                if (!validateFileType(fileInput3)) {
                    fileWarning3.textContent = "Masukkan gambar dengan ekstensi jpg, jpeg, atau png.";
                } else {
                    fileWarning3.textContent = ""; // Clear the warning if the file is valid
                    // Perform any other actions here to proceed to the next step if needed
                }
            });

            function validateFileType(input) {
                const allowedExtensions = ["jpg", "jpeg", "png"]; // Allowed file extensions
                const fileName = input.value;
                const fileExtension = fileName.split('.').pop().toLowerCase(); // Get the file extension

                return allowedExtensions.includes(fileExtension);
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            const nextButton4 = document.getElementById("nextStep3");
            const fileInput4 = document.getElementById("photo"); // Note: Changed 'fileInput' to 'photo'
            const fileWarning4 = document.getElementById("file-warning-siswa");

            nextButton4.addEventListener("click", function() {
                if (fileInput4.files.length === 0) {
                    // File input is empty, no need to show the warning
                    fileWarning4.textContent = "";
                    return;
                }

                if (!validateFileType(fileInput4)) {
                    fileWarning4.textContent = "Masukkan gambar dengan ekstensi jpg, jpeg, atau png.";
                } else {
                    fileWarning4.textContent = ""; // Clear the warning if the file is valid
                    // Perform any other actions here to proceed to the next step if needed
                }
            });

            function validateFileType(input) {
                const allowedExtensions = ["jpg", "jpeg", "png"]; // Allowed file extensions
                const fileName = input.value;
                const fileExtension = fileName.split('.').pop().toLowerCase(); // Get the file extension

                return allowedExtensions.includes(fileExtension);
            }
        });
        // document.addEventListener("DOMContentLoaded", function() {
        //     const nextButton5 = document.getElementById("nextStep3");
        //     const fileInput5 = document.getElementById("skck"); // Note: Changed 'fileInput' to 'photo'
        //     const fileWarning5 = document.getElementById("file-warning-skck");

        //     nextButton5.addEventListener("click", function() {
        //         // if (fileInput5.files.length === 0) {
        //         //     // File input is empty, no need to show the warning
        //         //     fileWarning5.textContent = "";
        //         //     return;
        //         // }

        //         if (!validateFileType(fileInput5)) {
        //             fileWarning5.textContent = "Masukkan gambar dengan ekstensi jpg, jpeg, atau png.";
        //         } else {
        //             fileWarning5.textContent = ""; // Clear the warning if the file is valid
        //             // Perform any other actions here to proceed to the next step if needed
        //         }
        //     });

        //     function validateFileType(input) {
        //         const allowedExtensions = ["jpg", "jpeg", "png"]; // Allowed file extensions
        //         const fileName = input.value;
        //         const fileExtension = fileName.split('.').pop().toLowerCase(); // Get the file extension
        //         if (allowedExtensions.includes(fileExtension)) {
        //         console.log("File extension is allowed.");
        //         } else {
        //         console.log("File extension is not allowed.");
        //         }
        //         return allowedExtensions.includes(fileExtension);
        //     }
        // });


        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById("wizardForm");
            const steps = Array.from(form.getElementsByClassName("step"));
            const nextButtons = Array.from(form.querySelectorAll("[id^=nextStep]"));
            const prevButtons = Array.from(form.querySelectorAll("[id^=prevStep]"));

            let currentStep = 0;

            function showStep(stepIndex) {
                steps.forEach(function(step, index) {
                    if (index === stepIndex) {
                        step.classList.add("active");
                    } else {
                        step.classList.remove("active");
                    }
                });
            }

            function validateStep(stepIndex) {
                const step = steps[stepIndex];
                const inputs = Array.from(step.getElementsByTagName("input"));
                const textareas = Array.from(step.getElementsByTagName("textarea"));
                var minValue = 5;
                var minValuenomor = 11;
                var maxValuenama = 225;
                var maxValuetempat = 225;
                const awalmagang = document.getElementById('mulai-magang').value;
                const akhirmagang = document.getElementById('akhir-magang').value;
                const tanggallahir = document.getElementById('tanggallahir').value;
                var isValid = true;
                const today = new Date();
                const day = String(today.getDate()).padStart(2, '0');
                const month = String(today.getMonth() + 1).padStart(2, '0');
                const year = today.getFullYear();

                const todayFormatted = `${year}-${month}-${day}`;

                var radio = {};

                inputs.forEach(function(input) {
                    if (!input.checkValidity() || (input.type === "number" && input.value.trim().length <
                            minValue && input.id === 'nisn')) {
                        var errorMessage = input.parentNode.querySelector(".error-message");

                        if (!errorMessage) {
                            errorMessage = document.createElement("span");
                            errorMessage.className = "error-message text-red-500 text-sm";
                            input.parentNode.appendChild(errorMessage);
                        }
                        if (input.type === "text") {
                            errorMessage.textContent = "Harap isi form ini dengan nilai maximal " +
                                maxValuetempat + ".";
                        } else {
                            errorMessage.textContent = "Harap isi form ini.";
                        }

                        if (input.type === "text") {
                            errorMessage.textContent = "Harap isi form ini dengan nilai maximal " +
                                maxValuenama + ".";
                        } else {
                            errorMessage.textContent = "Harap isi form ini.";
                        }

                        if (input.type === "number") {
                            errorMessage.textContent = "Harap isi form ini dengan nilai minimal " +
                                minValue + ".";
                        } else {
                            errorMessage.textContent = "Harap isi form ini.";
                        }

                        isValid = false;
                    } else if (input.value.trim().length < minValuenomor && input.id === 'nomor') {
                        var errorMessage = input.parentNode.querySelector(".error-message");

                        if (!errorMessage) {
                            errorMessage = document.createElement("span");
                            errorMessage.className = "error-message text-red-500 text-sm";
                            input.parentNode.appendChild(errorMessage);
                        }

                        if (input.type === "number") {
                            errorMessage.textContent = "Harap isi form ini dengan nilai minimal " +
                                minValuenomor + ".";
                        } else {
                            errorMessage.textContent = "Harap isi form ini.";
                        }

                        isValid = false;
                    } else {
                        input.classList.remove("border-red-500");
                        input.placeholder = "Isi form ini";
                        var errorMessage = input.parentNode.querySelector(".error-message");
                        if (errorMessage) {
                            errorMessage.remove();
                        }
                    }
                });


                var radioGroups = {};

                inputs.forEach(function(input) {
                    if (input.checkValidity()) {
                        if (input.type === "radio") {
                            var radioGroup = input.getAttribute("id");
                            if (!radioGroups.hasOwnProperty(radioGroup)) {
                                radioGroups[radioGroup] = [];
                            }
                            radioGroups[radioGroup].push(input);
                        } else {

                        }
                    } else {
                        input.classList.remove("border-red-500");
                        input.placeholder = "";
                    }
                });

                // Cek radio button yang tidak dipilih
                Object.keys(radioGroups).forEach(function(radioGroup) {
                    var radioInputs = radioGroups[radioGroup];
                    var isChecked = radioInputs.some(function(input) {
                        return input.checked;
                    });

                    if (!isChecked) {
                        var errorMessage = radioInputs[0].parentNode.querySelector(".error-message");

                        if (!errorMessage) {
                            errorMessage = document.createElement("span");
                            errorMessage.className = "error-message text-red-500 text-sm";
                            radioInputs[0].parentNode.appendChild(errorMessage);
                        }

                        errorMessage.textContent = "Pilih salah satu opsi.";
                        isValid = false;
                    }
                });



                textareas.forEach(function(textarea) {
                    if (!textarea.checkValidity()) {
                        var errorMessage = textarea.parentNode.querySelector(".error-message");

                        if (!errorMessage) {
                            errorMessage = document.createElement("span");
                            errorMessage.className = "error-message text-red-500 text-sm";
                            textarea.parentNode.appendChild(errorMessage);
                        }



                        errorMessage.textContent = "Harap isi form ini.";

                        isValid = false;
                    } else {
                        textarea.classList.remove("border-red-500");
                        textarea.placeholder = "";
                        var errorMessage = textarea.parentNode.querySelector(".error-message");
                        if (errorMessage) {
                            errorMessage.remove();
                        }

                    }
                });

                inputs.forEach(function(input) {
                    if (input.type === "file" && input.id !== "skck") {
                        if (input.files.length === 0) {
                            var errorMessage = input.parentNode.querySelector(".error-message");

                            if (!errorMessage) {
                                errorMessage = document.createElement("span");
                                errorMessage.className = "error-message text-red-500 text-sm";
                                input.parentNode.appendChild(errorMessage);
                            }

                            errorMessage.textContent = "Please select a file.";

                            isValid = false;
                        } else if (!validateFileType(input)) {
                            var errorMessage = input.parentNode.querySelector(".error-message");

                            if (!errorMessage) {
                                errorMessage = document.createElement("span");
                                errorMessage.className = "error-message text-red-500 text-sm";
                                input.parentNode.appendChild(errorMessage);
                            }

                            errorMessage.textContent = "";

                            isValid = false;
                        } else {
                            var errorMessage = input.parentNode.querySelector(".error-message");
                            if (errorMessage) {
                                errorMessage.remove();
                            }
                        }
                    }
                });
                inputs.forEach(function(input) {
                    if (input.type === "file" && input.id === "skck") {
                        if (input.files.length > 0) {
                            // File is selected, run mime type validation
                            if (!validateFileType(input)) {
                                var errorMessage = input.parentNode.querySelector(".error-message");

                                if (!errorMessage) {
                                    errorMessage = document.createElement("span");
                                    errorMessage.className = "error-message text-red-500 text-sm";
                                    input.parentNode.appendChild(errorMessage);
                                }
                                errorMessage.textContent =
                                    "Masukkan gambar dengan ekstensi jpg, jpeg, atau png.";

                                isValid = false;
                            } else {
                                var errorMessage = input.parentNode.querySelector(".error-message");
                                if (errorMessage) {
                                    errorMessage.remove();
                                }
                            }
                        }
                    }
                });
                inputs.forEach(function(input) {
                    if (awalmagang !== "" && akhirmagang !== "") {
                        if (awalmagang > akhirmagang) {
                            const tanggalwarning = document.getElementById("warning-tanggal-magang");
                            tanggalwarning.textContent = "Masukan tanggal magang yang valid";
                            isValid = false;
                        } else {

                        }
                    }
                });
                inputs.forEach(function(input) {
                    if (tanggallahir > todayFormatted) {
                        const tanggalerror = document.getElementById("warning-tanggal-lahir");
                        tanggalerror.textContent = "Masukan tanggal lahir yang valid";
                        isValid = false;
                    } else {

                    }
                });

                return isValid;
            }

            function validateFileType(input) {
                const allowedTypes = ["image/jpeg", "image/jpg", "image/png"];
                return allowedTypes.includes(input.files[0].type);
            }



            nextButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                    if (validateStep(currentStep)) {
                        currentStep++;
                        showStep(currentStep);
                    }
                });
            });

            prevButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                    currentStep--;
                    showStep(currentStep);
                });
            });



        });
    </script>

</body>
<!-- Mirrored from lineone.piniastudio.com/pages-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 May 2023 04:16:45 GMT -->

</html>
