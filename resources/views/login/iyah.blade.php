
<!DOCTYPE html>
<html lang="en">
{{--  <!-- Mirrored from lineone.piniastudio.com/pages-singup-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 May 2023 04:16:45 GMT -->  --}}
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Meta tags  -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

    <title>Daftar</title>
    <link rel="icon" type="image/png" href="lineone/images/favicon.png" />
    @vite('resources/css/app.css')


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/smartwizard/dist/css/smart_wizard.min.css"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet"> --}}
    <style>
      .step:not(.active) {
        display: none;
      }
    </style>
    {{-- <style>
        .step {
            display: none;
        }

        .step.active {
            display: block;
        }
    </style> --}}
</head>

<body class="bg-gray-100">
    <div class="max-w-xl mx-auto py-10">
      <div class="bg-white p-8 rounded shadow">
        <div class="flex justify-center items-center mb-8">
          <div class="w-16 h-16 bg-blue-500 rounded-full flex justify-center items-center text-white font-bold text-2xl">1</div>
          <div class="flex-grow h-2 bg-gray-300 mx-2"></div>
          <div class="w-16 h-16 bg-gray-300 rounded-full flex justify-center items-center text-gray-500 font-bold text-2xl">2</div>
          <div class="flex-grow h-2 bg-gray-300 mx-2"></div>
          <div class="w-16 h-16 bg-gray-300 rounded-full flex justify-center items-center text-gray-500 font-bold text-2xl">3</div>
          <div class="flex-grow h-2 bg-gray-300 mx-2"></div>
          <div class="w-16 h-16 bg-gray-300 rounded-full flex justify-center items-center text-gray-500 font-bold text-2xl">4</div>
        </div>
        <form id="wizardForm" action="" class="relative" enctype="multipart/form-data">
          <!-- Step 1 -->
          <div class="step active">
            <h2 class="text-2xl mb-4">Step 1: Personal Information</h2>
            <div class="mb-4">
              <label for="name" class="block font-bold mb-1">Name:</label>
              <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded" required>
            </div>
            <div class="mb-4">
              <label for="birthdate" class="block font-bold mb-1">Birthdate:</label>
              <input type="date" id="birthdate" name="birthdate" class="w-full px-4 py-2 border rounded" required>
            </div>
            <div class="mb-4">
              <label for="nisn" class="block font-bold mb-1">NISN:</label>
              <input type="text" id="nisn" name="nisn" class="w-full px-4 py-2 border rounded" required>
            </div>
            <div class="mb-4">
              <label for="class" class="block font-bold mb-1">Class:</label>
              <input type="text" id="class" name="class" class="w-full px-4 py-2 border rounded" required>
            </div>
            <div class="mb-4">
              <label for="gender" class="block font-bold mb-1">Gender:</label>
              <select id="gender" name="gender" class="w-full px-4 py-2 border rounded" required>
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </div>
            <button type="button" id="nextStep1" class="py-2 px-4 bg-blue-500 text-white rounded">Next</button>
          </div>

          <!-- Step 2 -->
          <div class="step">
            <h2 class="text-2xl mb-4">Step 2: Address & Education Information</h2>
            <div class="mb-4">
              <label for="address" class="block font-bold mb-1">Address:</label>
              <input type="text" id="address" name="address" class="w-full px-4 py-2 border rounded" required>
            </div>
            <div class="mb-4">
              <label for="major" class="block font-bold mb-1">Major:</label>
              <input type="text" id="major" name="major" class="w-full px-4 py-2 border rounded" required>
            </div>
            <div class="mb-4">
              <label for="school" class="block font-bold mb-1">School:</label>
              <input type="text" id="school" name="school" class="w-full px-4 py-2 border rounded" required>
            </div>
            <div class="mb-4">
              <label for="internship-start" class="block font-bold mb-1">Internship Start:</label>
              <input type="date" id="internship-start" name="internship-start" class="w-full px-4 py-2 border rounded" required>
            </div>
            <div class="mb-4">
              <label for="internship-end" class="block font-bold mb-1">Internship End:</label>
              <input type="date" id="internship-end" name="internship-end" class="w-full px-4 py-2 border rounded" required>
            </div>
            <button type="button" id="prevStep2" class="mr-2 py-2 px-4 bg-blue-500 text-white rounded">Previous</button>
            <button type="button" id="nextStep2" class="py-2 px-4 bg-blue-500 text-white rounded">Next</button>
          </div>

          <!-- Step 3 -->
          <div class="step">
            <h2 class="text-2xl mb-4">Step 3: Document Upload</h2>
            <div class="mb-4">
              <label for="photo" class="block font-bold mb-1">Student Photo:</label>
              <input type="file" id="photo" name="photo" class="w-full" required>
            </div>
            <div class="mb-4">
              <label for="self-statement" class="block font-bold mb-1">Self Statement:</label>
              <textarea id="self-statement" name="self-statement" class="w-full px-4 py-2 border rounded" required></textarea>
            </div>
            <div class="mb-4">
              <label for="outu-statement" class="block font-bold mb-1">OUTU Statement:</label>
              <textarea id="outu-statement" name="outu-statement" class="w-full px-4 py-2 border rounded" required></textarea>
            </div>
            <div class="mb-4">
              <label for="skck" class="block font-bold mb-1">SKCK:</label>
              <input type="file" id="skck" name="skck" class="w-full" required>
            </div>
            <div class="mb-4">
              <label for="cv" class="block font-bold mb-1">CV:</label>
              <input type="file" id="cv" name="cv" class="w-full" required>
            </div>
            <button type="button" id="prevStep3" class="mr-2 py-2 px-4 bg-blue-500 text-white rounded">Previous</button>
            <button type="button" id="nextStep3" class="py-2 px-4 bg-blue-500 text-white rounded">Next</button>
          </div>

          <!-- Step 4 -->
          <div class="step">
            <h2 class="text-2xl mb-4">Step 4: Account Information</h2>
            <div class="mb-4">
              <label for="email" class="block font-bold mb-1">Email:</label>
              <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded" required>
            </div>
            <div class="mb-4">
              <label for="password" class="block font-bold mb-1">Password:</label>
              <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded" required>
            </div>
            <div class="mb-4">
              <label for="confirm-password" class="block font-bold mb-1">Confirm Password:</label>
              <input type="password" id="confirm-password" name="confirm-password" class="w-full px-4 py-2 border rounded" required>
            </div>
            <button type="button" id="prevStep4" class="mr-2 py-2 px-4 bg-blue-500 text-white rounded">Previous</button>
            <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded">Submit</button>
          </div>
        </form>
      </div>
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

          let isValid = true;

          inputs.forEach(function(input) {
            if (!input.checkValidity()) {
              input.classList.add("border-red-500");
              isValid = false;
            } else {
              input.classList.remove("border-red-500");
            }
          });

          textareas.forEach(function(textarea) {
            if (!textarea.checkValidity()) {
              textarea.classList.add("border-red-500");
              isValid = false;
            } else {
              textarea.classList.remove("border-red-500");
            }
          });

          return isValid;
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

        form.addEventListener("submit", function(event) {
            event.preventDefault();
            if (validateStep(currentStep)) {
                // Menggunakan fetch API untuk mengirim data ke controller
                fetch("{{}}", {
                method: "POST",
                body: new FormData(form)
                })
                .then(function(response) {
                if (response.ok) {
                    // Redirect ke controller setelah selesai
                    window.location.href = "{{ route('login.index') }}";
                } else {
                    throw new Error("Error occurred while submitting the form.");
                }
                })
                .catch(function(error) {
                console.error(error);
                });
            }
            });

      });
    </script>
</html>
