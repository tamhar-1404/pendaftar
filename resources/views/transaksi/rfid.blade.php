<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat</title>
  @vite('resources/css/app.css')
    <!-- Pastikan untuk menggunakan HTTPS ketika situs Anda berjalan di mode produksi -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body class="w-screen h-screen mt-100 bg-gray-100 ">
    <div class=" absolute top-0 hidden p-6 lg:block lg:px-12">
        <a href="#" class="flex items-center space-x-2">
            <img class="h-12 w-100" src="lineone/images/hummasoft2.png" alt="logo" />
            <p class="text-xl font-semibold uppercase text-slate-700 dark:text-navy-100">
            </p>
        </a>
    </div>
    <div class="flex justify-center items-center w-screen h-screen">
        <form class="bg-gray-900 opacity-75 w-3/4 shadow-lg px-12 rounded-lg" id="dataForm">
            @csrf
            <div class="mb-4 flex-col items-center">
                <div class="flex justify-center">
                    <h1 class="my-4 text-3xl md:text-5xl text-white opacity-75 font-bold leading-tight text-center md:text-left">
                        Scan RFID
                    </h1>
                </div>
                <input
                    class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:ring transform transition"
                    id="emailaddress"
                    type="text"
                    placeholder=""
                />
            </div>
        </form>
    </div>


<script>
    $(document).ready(function() {
        $('#dataForm').on('input', function() {
            // Ambil nilai dari input field
            var value = $('#emailaddress').val().trim();

            // Cek apakah input field tidak kosong
            if (value !== '') {
                // Kirim data ke kontroller menggunakan permintaan AJAX
                $.ajax({
                    type: 'GEt',
                    url: '/data', // Ganti dengan URL kontroller Anda
                    // data: { _token: '{{ csrf_token() }}' , emailaddress: value },
                    success: function(response) {
                        // Jika data berhasil diproses di kontroller,
                        // arahkan ke halaman lain setelah delay 1 detik
                        setTimeout(function() {
                            window.location.href = '/halaman-lain'; // Ganti dengan URL halaman tujuan Anda
                        }, 1000);
                    },
                    error: function(error) {
                        // Handle error jika diperlukan
                    }
                });
            }
        });
    });
</script>
</body>
</html>
