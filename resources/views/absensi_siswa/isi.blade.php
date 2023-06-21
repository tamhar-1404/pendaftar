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
    <div class=" flex justify-between  px-5 gap-2">
        <div class="mb-5 flex flex-wrap gap-1 mt-5 items-center">
            <button  class="bg-blue-400 flex outline-1 outline-offset-0 outline-blue-400 p-2 text-white font-semibold rounded-lg hover:bg-white hover:text-blue-400" @click="exportTable('pdf')">
                <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 ltr:mr-2 rtl:ml-2"
                >
                    <path
                        d="M15.3929 4.05365L14.8912 4.61112L15.3929 4.05365ZM19.3517 7.61654L18.85 8.17402L19.3517 7.61654ZM21.654 10.1541L20.9689 10.4592V10.4592L21.654 10.1541ZM3.17157 20.8284L3.7019 20.2981H3.7019L3.17157 20.8284ZM20.8284 20.8284L20.2981 20.2981L20.2981 20.2981L20.8284 20.8284ZM14 21.25H10V22.75H14V21.25ZM2.75 14V10H1.25V14H2.75ZM21.25 13.5629V14H22.75V13.5629H21.25ZM14.8912 4.61112L18.85 8.17402L19.8534 7.05907L15.8947 3.49618L14.8912 4.61112ZM22.75 13.5629C22.75 11.8745 22.7651 10.8055 22.3391 9.84897L20.9689 10.4592C21.2349 11.0565 21.25 11.742 21.25 13.5629H22.75ZM18.85 8.17402C20.2034 9.3921 20.7029 9.86199 20.9689 10.4592L22.3391 9.84897C21.9131 8.89241 21.1084 8.18853 19.8534 7.05907L18.85 8.17402ZM10.0298 2.75C11.6116 2.75 12.2085 2.76158 12.7405 2.96573L13.2779 1.5653C12.4261 1.23842 11.498 1.25 10.0298 1.25V2.75ZM15.8947 3.49618C14.8087 2.51878 14.1297 1.89214 13.2779 1.5653L12.7405 2.96573C13.2727 3.16993 13.7215 3.55836 14.8912 4.61112L15.8947 3.49618ZM10 21.25C8.09318 21.25 6.73851 21.2484 5.71085 21.1102C4.70476 20.975 4.12511 20.7213 3.7019 20.2981L2.64124 21.3588C3.38961 22.1071 4.33855 22.4392 5.51098 22.5969C6.66182 22.7516 8.13558 22.75 10 22.75V21.25ZM1.25 14C1.25 15.8644 1.24841 17.3382 1.40313 18.489C1.56076 19.6614 1.89288 20.6104 2.64124 21.3588L3.7019 20.2981C3.27869 19.8749 3.02502 19.2952 2.88976 18.2892C2.75159 17.2615 2.75 15.9068 2.75 14H1.25ZM14 22.75C15.8644 22.75 17.3382 22.7516 18.489 22.5969C19.6614 22.4392 20.6104 22.1071 21.3588 21.3588L20.2981 20.2981C19.8749 20.7213 19.2952 20.975 18.2892 21.1102C17.2615 21.2484 15.9068 21.25 14 21.25V22.75ZM21.25 14C21.25 15.9068 21.2484 17.2615 21.1102 18.2892C20.975 19.2952 20.7213 19.8749 20.2981 20.2981L21.3588 21.3588C22.1071 20.6104 22.4392 19.6614 22.5969 18.489C22.7516 17.3382 22.75 15.8644 22.75 14H21.25ZM2.75 10C2.75 8.09318 2.75159 6.73851 2.88976 5.71085C3.02502 4.70476 3.27869 4.12511 3.7019 3.7019L2.64124 2.64124C1.89288 3.38961 1.56076 4.33855 1.40313 5.51098C1.24841 6.66182 1.25 8.13558 1.25 10H2.75ZM10.0298 1.25C8.15538 1.25 6.67442 1.24842 5.51887 1.40307C4.34232 1.56054 3.39019 1.8923 2.64124 2.64124L3.7019 3.7019C4.12453 3.27928 4.70596 3.02525 5.71785 2.88982C6.75075 2.75158 8.11311 2.75 10.0298 2.75V1.25Z"
                        fill="currentColor"
                    />
                    <path
                        opacity="0.5"
                        d="M13 2.5V5C13 7.35702 13 8.53553 13.7322 9.26777C14.4645 10 15.643 10 18 10H22"
                        stroke="currentColor"
                        stroke-width="1.5"
                    />
                </svg>
                PDF
            </button>
            <button class="bg-blue-400 flex outline-1 outline-offset-0 outline-blue-400 p-2 text-white font-semibold rounded-lg hover:bg-white hover:text-blue-400" @click="printTable">
                <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 ltr:mr-2 rtl:ml-2"
                >
                    <path
                        d="M6 17.9827C4.44655 17.9359 3.51998 17.7626 2.87868 17.1213C2 16.2426 2 14.8284 2 12C2 9.17157 2 7.75736 2.87868 6.87868C3.75736 6 5.17157 6 8 6H16C18.8284 6 20.2426 6 21.1213 6.87868C22 7.75736 22 9.17157 22 12C22 14.8284 22 16.2426 21.1213 17.1213C20.48 17.7626 19.5535 17.9359 18 17.9827"
                        stroke="currentColor"
                        stroke-width="1.5"
                    />
                    <path opacity="0.5" d="M9 10H6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    <path d="M19 14L5 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    <path
                        d="M18 14V16C18 18.8284 18 20.2426 17.1213 21.1213C16.2426 22 14.8284 22 12 22C9.17157 22 7.75736 22 6.87868 21.1213C6 20.2426 6 18.8284 6 16V14"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                    />
                    <path
                        opacity="0.5"
                        d="M17.9827 6C17.9359 4.44655 17.7626 3.51998 17.1213 2.87868C16.2427 2 14.8284 2 12 2C9.17158 2 7.75737 2 6.87869 2.87868C6.23739 3.51998 6.06414 4.44655 6.01733 6"
                        stroke="currentColor"
                        stroke-width="1.5"
                    />
                    <circle opacity="0.5" cx="17" cy="10" r="1" fill="currentColor" />
                    <path opacity="0.5" d="M15 16.5H9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    <path opacity="0.5" d="M13 19H9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                </svg>
                PRINT
            </button>
            <button class="bg-blue-400 px-4 py-2 rounded-lg text-white font-semibold">Tambah</button>
            <button class="border border-green-500 px-3 py-2 rounded-lg text-green-500 hover:bg-green-500 hover:text-white font-bold">Absen</button>
        </div>

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
