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
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #76a9fa;
            color: white;
        }
    </style>
</head>

<body>
    {{-- @require ('vendor/autoload.php'); --}}
    <div class="flex justify-center mt-3 mb-5">
        <h1 class=" text-2xl font-bold">Jurnal Siswa
            @if (Auth::user()->role == 'Siswa')
                {{ Auth::user()->name }}
            @endif
        </h1>
    </div>
    <div class="flex justify-center">
        <table class="table-auto bg-white" id="customers">
            <thead class="bg-gray-400">
                <tr class="">
                    <th scope="col" class="px-6 py-4">#</th>
                    <th scope="col" class="px-6 py-4">Nama</th>
                    <th scope="col" class="px-6 py-4">Tanggal</th>
                    <th scope="col" class="px-6 py-4">jam</th>
                    <th scope="col" class="px-6 py-4">keterangan</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $items)
                    <tr
                        class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:text-black-200 ">
                        <td class="whitespace-nowrap px-4 py-4 font-medium">{{ $loop->iteration }}</td>
                        <td class="whitespace-nowrap px-4 py-4">{{ $items->Siswa->name }}</td>
                        <td class="whitespace-nowrap px-4 py-4">{{ $items->tanggal }}</td>
                        <td class="whitespace-nowrap px-4 py-4">{{ $items->jam }}</td>
                        <td class="whitespace-nowrap px-4 py-4 max-w-sm overflow-hidden truncate ">
                            {{ $items->keterangan }}</td>

                    </tr>

                @empty
                @endforelse
            </tbody>
        </table>
    </div>

</body>

</html>
