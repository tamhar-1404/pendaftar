<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    <div class="mt-3 ml-4 font-bold">Data Absensi</div>
    <div class=" flex justify-center gap-2">
        <button class="bg-[#24AEE4] p-2 px-3 rounded-lg text-white font-bold flex gap-1 items-center" >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
            </svg>
            <p>Tambah</p>
        </button>
        <button class=" outline font-bold outline-offset-0 rounded-lg outline-green-500 p-2 text-green-500 px-3 hover:bg-green-500 hover:text-white hover:outline-0">
            Absen
        </button>
        {{-- serch dan filter --}}
        <div class="flex justify-end items-center ">
            {{-- serch --}}
            <div class="mr-4 ">
                <input class=" p-1 border-2 border-gray-400 rounded-xl outline-1 outline-gray-400 dark:bg-transparent" type="text" placeholder="cari">
            </div>
            {{-- filter --}}
            <div class="border-2 rounded-full border-gray-400 flex items-center mr-2 ">
                <span class="mr-1 ml-3">
                    filter
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" mr-3 w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
                </svg>
            </div>
        </div>
    </div>
    <div class=" mt-3 col-span-2 p-2 flex gap-2">
        <div class="w-3/4 panel ">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>

                            <th scope="col" class="px-6 py-3">
                               Id
                            </th>
                            <th scope="col" class="px-6 py-3">
                               Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                               Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jam
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Keterangan
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               1
                            </th>
                            <td class="px-6 py-4">
                                Tom
                            </td>
                            <td class="px-6 py-4">
                                21-3-2023
                            </td>
                            <td class="px-6 py-4">
                                07:35
                            </td>
                            <td class="px-6 py-4 text-red-500">
                                Sakit
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               2
                            </th>
                            <td class="px-6 py-4">
                                Tom
                            </td>
                            <td class="px-6 py-4">
                                21-3-2023
                            </td>
                            <td class="px-6 py-4">
                                07:35
                            </td>
                            <td class="px-6 py-4 text-green-500">
                                Hadir
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               3
                            </th>
                            <td class="px-6 py-4">
                                Tom
                            </td>
                            <td class="px-6 py-4">
                                21-3-2023
                            </td>
                            <td class="px-6 py-4">
                                07:35
                            </td>
                            <td class="px-6 py-4 text-yellow-500">
                                izin
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               4
                            </th>
                            <td class="px-6 py-4">
                                Tom
                            </td>
                            <td class="px-6 py-4">
                                21-3-2023
                            </td>
                            <td class="px-6 py-4">
                                07:35
                            </td>
                            <td class="px-6 py-4 text-yellow-500">
                                izin
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               5
                            </th>
                            <td class="px-6 py-4">
                                Tom
                            </td>
                            <td class="px-6 py-4">
                                21-3-2023
                            </td>
                            <td class="px-6 py-4">
                                07:35
                            </td>
                            <td class="px-6 py-4 text-yellow-500">
                                izin
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               6
                            </th>
                            <td class="px-6 py-4">
                                Tom
                            </td>
                            <td class="px-6 py-4">
                                21-3-2023
                            </td>
                            <td class="px-6 py-4">
                                07:35
                            </td>
                            <td class="px-6 py-4 text-yellow-500">
                                izin
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               7
                            </th>
                            <td class="px-6 py-4">
                                Tom
                            </td>
                            <td class="px-6 py-4">
                                21-3-2023
                            </td>
                            <td class="px-6 py-4">
                                07:35
                            </td>
                            <td class="px-6 py-4 text-yellow-500">
                                izin
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               8
                            </th>
                            <td class="px-6 py-4">
                                Tom
                            </td>
                            <td class="px-6 py-4">
                                21-3-2023
                            </td>
                            <td class="px-6 py-4">
                                07:35
                            </td>
                            <td class="px-6 py-4 text-yellow-500">
                                izin
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               9
                            </th>
                            <td class="px-6 py-4">
                                Tom
                            </td>
                            <td class="px-6 py-4">
                                21-3-2023
                            </td>
                            <td class="px-6 py-4">
                                07:35
                            </td>
                            <td class="px-6 py-4 text-yellow-500">
                                izin
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               10
                            </th>
                            <td class="px-6 py-4">
                                Tom
                            </td>
                            <td class="px-6 py-4">
                                21-3-2023
                            </td>
                            <td class="px-6 py-4">
                                07:35
                            </td>
                            <td class="px-6 py-4 text-yellow-500">
                                izin
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="mt-5 flex justify-between">
                    <p>lihat 1 sampai 10 dari 15 siswa</p>
                    <nav aria-label="Page navigation example">
                        <ul class="list-style-none flex">
                          <li>
                            <a
                              class="pointer-events-none relative block rounded-full bg-transparent px-3 py-1.5 text-sm text-neutral-500 transition-all duration-300 dark:text-neutral-400"
                              >Previous</a
                            >
                          </li>
                          <li>
                            <a
                              class="relative block rounded-full bg-[#00B7FF] px-3 py-1.5 text-sm text-white transition-all duration-300   dark:text-white dark: dark:hover:text-white"
                              href="#!"
                              >1</a
                            >

                          </li>
                          <li aria-current="page">
                            <a
                              class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm text-black transition-all duration-300 hover:bg-neutral-100  dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
                              href="#!"
                              >2

                            </a>
                          </li>
                          <li>
                            <a
                              class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm text-black transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
                              href="#!"
                              >3</a
                            >
                          </li>
                          <li>
                            <a
                              class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm text-black transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
                              href="#!"
                              >Next</a
                            >
                          </li>
                        </ul>
                      </nav>
                </div>
            </div>

        </div>
        <div class="w-1/4 panel ">
            <div class="w-full p-2 flex justify-center">
                <div class="panel w-10/12">
                    <span class="font-bold flex justify-between" >
                        <p>100</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                        </svg>
                    </span>
                    <span>total</span>
                </div>
            </div>
            <div class="w-full p-2 flex justify-center">
                <div class="panel w-10/12">
                    <span class="font-bold flex justify-between" >
                        <p>100</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                        </svg>
                    </span>
                    <span>total</span>
                </div>
            </div>
            <div class="w-full p-2 flex justify-center">
                <div class="panel w-10/12">
                    <span class="font-bold flex justify-between" >
                        <p>100</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                        </svg>
                    </span>
                    <span>total</span>
                </div>
            </div>
            <div class="w-full p-2 flex justify-center">
                <div class="panel w-10/12">
                    <span class="font-bold flex justify-between" >
                        <p>100</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                        </svg>
                    </span>
                    <span>total</span>
                </div>
            </div>
            <div class="w-full p-2 flex justify-center">
                <div class="panel w-10/12">
                    <span class="font-bold flex justify-between" >
                        <p>100</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                        </svg>
                    </span>
                    <span>total</span>
                </div>
            </div>
            <div class="w-full p-2 flex justify-center">
                <div class="panel w-10/12">
                    <span class="font-bold flex justify-between" >
                        <p>100</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                        </svg>
                    </span>
                    <span>total</span>
                </div>
            </div>


        </div>
    </div>

</body>
</html>
