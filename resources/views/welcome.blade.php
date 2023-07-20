<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

{{--  <!-- Mirrored from shreethemes.in/ovaxo/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2023 01:19:36 GMT -->  --}}

<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hummasoft | Halaman Utama</title>
    <meta name="description" content="Responsive Tailwind CSS Template">
    <meta name="keywords" content="Onepage, creative, modern, Tailwind CSS, multipurpose, clean">
    <meta name="author" content="Shreethemes">
    <meta name="website" content="https://shreethemes.in/">
    <meta name="email" content="support@shreethemes.in">
    <meta name="version" content="1.1.0">

    @vite('resources/css/app.css')




</head>
<body class="flex justify-center items-center">

    <div class="">
        <div class="w-full flex justify-center ">
            <img class="w-[100px] h-[100px] rounded-full" src="{{asset("admin/assets/images/humma.png")}}" alt="" srcset="">
        </div>
        <div class="flex flex-col items-center gap-2 ">
            <div class="flex justify-between w-full ">
                <p class="font-bold w-full">nama : </p>
                <div class="w-full text-start">
                    <p class=" text-start">${response.nama}</p>
                </div>
            </div>
            <div class="flex justify-between w-full">
                <p class="font-bold">email : </p>
                <p>${response.email}</p>
            </div>
            <div class="flex justify-between w-full">
                <p class="font-bold">sekolah : </p>
                <p>${response.sekolah}</p>
            </div>
            <div class="flex justify-between w-full">
                <p class="font-bold">saldo : </p>
                <p>Rp.${response.saldo}</p>
            </div>
        </div>
    </div>
</body>



<!-- Mirrored from shreethemes.in/ovaxo/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2023 01:19:43 GMT -->

</html>
