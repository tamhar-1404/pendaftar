<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <!-- Meta tags  -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />



    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" type="image/png" href="lineone/images/favicon.png" />
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

</head>

<body class="bg-black " >

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
    <div  class="h-screen   flex w-full  bg-slate-50 dark:bg-navy-900" id="wizardForm" >
        <div class="fixed top-0 hidden p-6 lg:block lg:px-12">
            <a href="#" class="flex items-center space-x-2">
                <img class="h-8 w-100" src="{{asset('lineone/images/hummasoft2.png')}}" alt="logo" />

            </a>
        </div>
        <div class=" w-full  flex items-center" style="height: 100%">
            <div class="w-full bg-gray-50 flex justify-center pt-5 ">
                <div class="lg:w-1/2">
                     @include('login.svg')
                </div>
            </div>
        </div>
        <main class="flex w-full flex-col  items-center bg-white dark:bg-navy-700 lg:max-w-md">
            <div class="w-full h-full flex-col p-5 gap-8   ">
                <div class="text-center">
                    <img class="mx-auto h-16 w-16 lg:hidden" src="lineone/images/app-logo.svg" alt="logo" />
                    <div class="mt-4">
                        <h2 class="text-2xl font-semibold text-slate-600 dark:text-navy-100">
                            Selamat Datang
                        </h2>
                        <p class="text-slate-400 dark:text-navy-300">
                            di Hummasoft Technology
                        </p>
                    </div>
                </div>
                <div class="mt-[15%]">
                    <form  action="{{ route('login.store') }}" class="relative"  method="post" enctype="multipart/form-data">
                        @csrf
                          <!-- Step 1 -->
                          <div class="step active ">
                            <div class="mb-4">
                              <label for="name" class="block font-bold mb-1 text-sm">Nama :</label>
                              <input type="text" placeholder="Nama" id="name" name="name" class="w-full px-4 py-1 text-sm border rounded" required>
                            </div>
                            <div class="flex justify-between gap-0">
                                <div class="mb-4">
                                  <label for="name" class="block font-bold text-sm mb-1">Tempat :</label>
                                  <input type="text" id="name" name="tempat" placeholder="Tempat lahir" class="w-full px-4 py-1 text-sm border rounded" required>
                                </div>
                                <div class="mb-4">
                                  <label for="birthdate" class="block font-bold text-sm mb-1">Tanggal Lahir :</label>
                                  <input type="date" id="birthdate" name="tanggal" class="w-full px-4 py-1 text-sm border rounded" required>
                                </div>
                            </div>
                            <div class="mb-4">
                              <label for="nisn" class="block font-bold mb-1 text-sm">NISN / NIM:</label>
                              <input type="number" id="nisn" name="nisn"  placeholder="Masukkan nisn / nim" class="w-full px-4 py-1 text-sm border rounded" required>
                            </div>
                            <div class="mb-4">
                              <label for="kelas" class="block font-bold mb-1 text-sm">Kelas:</label>
                              <select name="kelas" id="class"  class="w-full px-4 py-1 text-sm border rounded" required>
                                <option class="text-sm" value="" disabled selected>Pilih kelas</option>
                                <option class="text-sm" value="10">10</option>
                                <option class="text-sm" value="11">11</option>
                                <option class="text-sm" value="12">12</option>
                                <option class="text-sm" value="Mahasiswa">Mahasiswa</option>
                              </select>
                            </div>
                            <label for="class" class="block font-bold mb-1 text-sm">Jenis Kelamin :</label>
                            <div class=" flex justify-between">
                              <div class="flex gap-2">
                                <input class="text-sm" type="radio" name="jeniskelamin" id="radio" value="laki-laki"> <p>Laki-laki</p>
                                <input class="text-sm" type="radio" name="jeniskelamin" id="radio" value="Perempuan"> <p>Perempuan </p>
                                <span></span>
                              </div>
                            </div>
                            <div class="mt-19 "> <br>
                                <button type="button" id="nextStep1" class="py-2 px-4 bg-blue-500 text-white rounded w-full">Next</button>
                            </div>
                          </div>

                          <!-- Step 2 -->
                          <div class="step">
                            <div class="mb-4">
                              <label for="address" class="block font-bold text-sm mb-1">Alamat :</label>
                              <textarea id="address" name="alamat" class=" px-2 border items-center text-sm w-full h-8 rounded"  required></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="school" class="block font-bold text-sm mb-1">Nomer tlp :</label>
                                <input type="number" id="nomor" name="no" class="w-full px-4 py-1 border rounded" required>
                            </div>
                            <div class="mb-4">
                              <label for="major" class="block font-bold mb-1 text-sm">Jurusan :</label>
                             <select name="jurusan" class="w-full px-4 py-1 border rounded"  id="" required>
                                <option value="" disabled selected>Pilih jurusan</option>
                                <option value="RPL">RPL</option>
                                <option value="Multimedia">Multimedia</option>
                             </select>
                            </div>
                            <div class="mb-4">
                              <label for="school" class="block font-bold text-sm mb-1">Sekolah :</label>
                              <input type="text" id="school" name="sekolah" class="w-full px-4 py-1 text-sm border rounded" required>
                            </div>
                            <div class="flex justify-between gap-2 mb-4 ">
                                <div class="">
                                    <label for="internship-start" class="block font-bold text-sm mb-1">Mulai Magang :</label>
                                    <input type="date" id="internship-start" name="magang_awal" class="w-full px-4 text-sm py-1 border rounded" required>
                                  </div>
                                  <div class="">
                                    <label for="internship-end" class="block font-bold text-sm mb-1">Selesai MAgang:</label>
                                    <input type="date" id="internship-end" name="magang_akhir" class="w-full px-4 py-1 text-sm border rounded" required>
                                  </div>
                            </div>
                            <div class="flex justify-between gap-2">
                                <button type="button" id="prevStep2" class="w-full mr-2 py-2 px-4 bg-blue-500 text-white rounded">Previous</button>
                                <button type="button" id="nextStep2" class="w-full py-2 px-4 bg-blue-500 text-white rounded">Next</button>
                            </div>
                          </div>

                          <!-- Step 3 -->
                          <div class="step">
                            <div class="mb-4">
                              <label for="photo" class="block font-bold text-sm mb-1">Foto Siswa :</label>
                              <input type="file" id="photo" name="foto_siswa" class="w-full px-4 py-1 text-sm border rounded"  required>
                            </div>
                            <div class="mb-4">
                              <label for="self-statement" class="block font-bold text-sm mb-1">Pernyataan Siswa :</label>
                              <input type="file" ty id="self-statement"  name="sp_diri" class="w-full text-sm px-4 py-1 border rounded" required>
                            </div>
                            <div class="mb-4">
                              <label for="outu-statement" class="block font-bold text-sm mb-1">Pernyataan Orang Tua :</label>
                              <input type="file" ty id="outu-statement" name="sp_ortu" class="w-full text-sm px-4 py-1 border rounded" required>
                            </div>
                            <div class="mb-4">
                              <label for="skck" class="block font-bold text-sm mb-1">SKCK:</label>
                              <input type="file" id="skck" name="skck" class="w-full text-sm px-4 py-1 border rounded" >
                            </div>
                            <div class="mb-4">
                              <label for="cv" class="block font-bold text-sm mb-1">CV:</label>
                              <input type="file" id="cv" name="cv" class="w-full text-sm px-4 py-1 border rounded" required>
                            </div>
                            <div class="flex justify-between gap-2">
                                <button type="button" id="prevStep3" class="w-full mr-2 py-2 px-4 bg-blue-500 text-white rounded">Previous</button>
                                <button type="button" id="nextStep3" class="w-full py-2 px-4 bg-blue-500 text-white rounded">Next</button>
                            </div>
                          </div>

                          <!-- Step 4 -->
                          <div class="step">
                            <div class="mb-4">
                              <label for="email" class="block font-bold mb-1">Email:</label>
                              <input type="email" id="email" name="email" class="w-full px-4 py-1 text-sm border rounded" required>
                            </div>
                            <div class="mb-4">
                              <label for="password" class="block font-bold mb-1">Password:</label>
                              <input type="password" id="password" name="password" class="w-full px-4 py-1 text-sm border rounded" required>
                            </div>
                            <div class="mb-4">
                              <label for="confirm-password" class="block font-bold mb-1">Confirm Password:</label>
                              <input type="password" id="confirm-password" name="confirm-password" class="w-full px-4 py-1 text-sm border rounded" required>
                            </div>
                            <div class="flex justify-between gap-2">
                            <button type="button" id="prevStep4" class="w-full mr-2 py-2 px-4 bg-blue-500 text-white rounded">Previous</button>
                            <button type="submit" class="w-full py-2 px-4 bg-blue-500 text-white rounded">Submit</button>


                            </div>
                          </div>
                    </form>
                    <div class="mt-4 text-center text-xs+">
                        <p class="line-clamp-1">
                            <span>Sudah punya Akun?</span>
                            <a class="text-blue-400 transition-colors hover:text-info-focus dark:text-accent-light dark:hover:text-accent"
                                href="{{ route('login.index') }}">Login</a>
                        </p>
                    </div>
                </div>
            </div>
        </main>
    </div>

     <script>
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

            var isValid = true;

            var radio = {};

            inputs.forEach(function(input) {
            if (!input.checkValidity()) {
                var errorMessage = input.parentNode.querySelector(".error-message");

                if (!errorMessage) {
                errorMessage = document.createElement("span");
                errorMessage.className = "error-message text-red-500 text-sm";
                input.parentNode.appendChild(errorMessage);
                }

                errorMessage.textContent = "Harap isi form ini.";


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
