<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com%22%3E/"></script>
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
        /* Menyembunyikan tombol cetak saat mencetak */
        @media print {
            .print-button {
                display: none;
            }
        }
    </style>

</head>
<body>
    {{-- @require ('vendor/autoload.php'); --}}
    <div class="flex justify-center mt-3 mb-5">
        <h1 class=" text-2xl font-bold">Jurnal Siswa {{Auth::user()->name}}</h1>
    </div>
    <div class="flex justify-center" >
        <table class=" bg-white ">
            <thead class="bg-gray-400" style="background-color: gray">
                <tr class="" style="background-color: gray; color:white;">
                    <th scope="col" class="px-6 py-4">#</th>
                    <th scope="col" class="px-6 py-4">Nama</th>
                    <th scope="col" class="px-6 py-4">Tanggal</th>
                    <th scope="col" class="px-6 py-4">Sekolah</th>
                    <th scope="col" class="px-6 py-4">kegiatan</th>
                    <th scope="col" class="px-6 py-4 ">bukti</th>
                </tr>
            </thead>
            <tbody>
                @forelse ( $data as $items )
                <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:text-black-200 " style="border: 1px; ">
                <td class="whitespace-nowrap px-4 py-4 font-medium">{{ $loop->iteration }}</td>
                <td class="whitespace-nowrap px-4 py-4">{{$items->Siswa->name}}</td>
                <td class="whitespace-nowrap px-4 py-4">{{$items->tanggal}}</td>
                <td class="whitespace-nowrap px-4 py-4">{{$items->Siswa->sekolah}}</td>
                <td class="whitespace-nowrap px-4 py-4 max-w-sm overflow-hidden truncate " >{{$items->kegiatan}}</td>
                <td class="whitespace-nowrap px-6 pl-17 py-4"><img
                    src="{{ asset('storage/image/' . $items->image) }}"
                    width="100px" alt="">
                </td>

              </tr>

                @empty

                @endforelse
            </tbody>
        </table>
    </div>
    <script>
        // Fungsi untuk mencetak halaman
        function printPage() {
            window.print();
        }
    </script>

</body>
</html>
