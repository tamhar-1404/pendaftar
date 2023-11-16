<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        theme: {
            extend: {
                blur: {
                    xs: '3px',
                }
            },
        },
    </script>
    <link rel="stylesheet" href="{{asset('css/cssprint.css')}}" >

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
</head>

<body class="body">
    <div class="">
        <div class="flex justify-center">
            <h1 class="text-2xl font-extrabold mt-10 mb-8">Jurnal Siswa</h1>
        </div>
        <div class="flex justify-between">
            <div class=" px-8 mb-4">
                <p class=" font-semibold text-gray-600">Nama: {{$dataSiswa->Siswa->name}}</p>
                <p class=" font-semibold text-gray-600">Jurusan: {{$dataSiswa->SIswa->jurusan}}</p>
            </div>
            <div class=" px-8 mb-4">
                <p class=" font-semibold text-gray-600">Jurnal Awal: {{ \Carbon\Carbon::parse($jurnalAwal->created_at)->locale('id')->isoFormat('D MMMM Y ') }}</p>
                <p class=" font-semibold text-gray-600">Jurnal Akhir: {{ \Carbon\Carbon::parse($jurnalAkhir->created_at)->locale('id')->isoFormat('D MMMM Y ') }}</p>
            </div>

        </div>
        <div class="flex justify-center w-full">
            <div class="relative  w-full mr-0 overflow-x-auto shadow-md sm:rounded-lg ">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 gray1 dark:bg-gray-800">
                                #
                            </th>
                            <th scope="col" class="px-6 py-3 gray2">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3 gray1 dark:bg-gray-800">
                                TANGGAL
                            </th>
                            <th scope="col" class="px-6 py-3 gray2">
                                SEKOLAH
                            </th>
                            <th scope="col" class="px-6 py-3 gray1 dark:bg-gray-800">
                                KEGIATAN
                            </th>
                            <th scope="col" class="px-6 py-3 gray2">
                                BUKTI
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $item )
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-6 py-4">
                               {{$item->Siswa->name}}
                            </td>
                            <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                {{ \Carbon\Carbon::parse($item->created_at)->locale('id')->isoFormat('D MMMM Y ') }}
                            </td>
                            <td class="px-6 py-4">
                                {{$item->Siswa->sekolah}}
                            </td>
                            <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                               {{$item->kegiatan}}
                            </td>
                            <td class="px-6 py-4 " >
                                @if ($item->kegiatan != 'Tidak mengisi' && $item->kegiatan != 'Kosong')
                                <img src="{{ asset('storage/image/' . $item->image) }}"
                                    width="50px" height="50px"
                                    alt="{{ $item->image }}">
                            @else
                                tidak ada gambar
                            @endif
                            </td>
                        </tr>
                        @empty

                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            window.print();
        })
    </script>
</body>

</html>
