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
    <div class="flex justify-center">
        <table class="table-auto bg-white ">
            <thead class="bg-gray-400">
                <tr class="">
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
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:text-black-200 ">
                <td class="whitespace-nowrap px-4 py-4 font-medium">{{ $loop->iteration }}</td>
                <td class="whitespace-nowrap px-4 py-4">{{$items->nama}}</td>
                <td class="whitespace-nowrap px-4 py-4">{{$items->tanggal}}</td>
                <td class="whitespace-nowrap px-4 py-4">{{$items->sekolah}}</td>
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
    <div class="flex justify-center">
        <button class="print-button border mt-5 border-blue-400 py-1.5 px-3 text-lg text-blue-400 rounded-md" onclick="printPage()">Print</button>
    </div>
</body>
</html>
