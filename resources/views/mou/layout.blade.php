<main class=" w-full px-6 pb-8">
    <div class="flex items-center space-x-4 py-5 lg:py-6">
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Lainnya</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
                <span>MOU</span>
            </li>
        </ul>
    </div>
    <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
        <!-- Users Table -->
        <div>
            <div class="flex items-center justify-between">
                <button id="addButton"
                    class="outline outline-offset-2 outline-1 bg-[#24AEE4] hover:bg-blue-500 text-white text-sm py-2 px-4 rounded">
                    Tambah data
                </button>
                <div id="tambahmodal" class="fixed z-10 inset-0 overflow-y-auto hidden">
                    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                        <div class="fixed inset-0 transition-opacity">
                            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>
                        <div
                            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                <div class="max-w-7xl mx-auto">
                                    <div class="flex flex-col">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                            Tambah Data MOU
                                        </h3>
                                       <form action="{{ route('mou.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                            <div class="mt-4">
                                                <label for="logo"
                                                    class="block text-gray-700 font-medium mb-2">Logo</label>
                                                <input id="ctnFile" type="file" name="logo"
                                                    class="block w-full h-9 rounded-md file:py-2 file:px-4 file:border-0 file:font-semibold p-0  bg-white border focus:outline-none focus:ring  focus:ring-indigo-200 focus:ring-opacity-50 file:bg-[#24AEE4] ltr:file:mr-5 rtl:file:ml-5 file:text-white file:hover:bg-[#24AEE4]"
                                                    required />
                                            </div>
                                            <div class="mt-4">
                                                <label for="nama"
                                                    class="block text-gray-700 font-medium mb-2">Nama</label>
                                                <input type="text" id="nama" name="nama"
                                                    placeholder="Masukkan nama sekolah"
                                                    class="block w-full h-9 px-4 rounded-md bg-white border border-gray-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                            </div>
                                            <div class="mt-4">
                                                <label for="email"
                                                    class="block text-gray-700 font-medium mb-2">Email</label>
                                                <input type="email" placeholder="Masukkan email" id="email"
                                                    name="email"
                                                    class="block w-full h-9 px-4 rounded-md bg-white border border-gray-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                            </div>
                                            <div class="mt-4">
                                                <label for="notelepon"
                                                    class="block text-gray-700 font-medium mb-2">No.Telepon</label>
                                                <input type="number"  placeholder="Masukkan no.telepon" id="notelepon"
                                                    name="no"
                                                    class="block w-full h-9 px-4 rounded-md bg-white border border-gray-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                            </div>
                                            <div class="mt-4">
                                                <label for="alamat"
                                                    class="block text-gray-700 font-medium mb-2">Alamat</label>
                                                <textarea name="alamat" id="alamat" placeholder="Masukkan alamat" id="alamat" name="alamat"
                                                    class="block w-full h-14 px-4 rounded-md bg-white border border-gray-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                                            </div>
                                            <div class="flex items-center justify-end mt-4">
                                                <div class="ml-auto">
                                                    <button type="button"
                                                        class="bg-transparent border border-gray-300 text-gray-800 hover:bg-gray-300 hover:text-gray-800 font-semibold py-2 px-4 rounded">
                                                        Batal
                                                    </button>
                                                    <button type="submit"
                                                        class="bg-blue-500 text-white hover:bg-blue-700 font-semibold py-2 px-4 rounded"
                                                        @click="showAlert()">
                                                        Simpan
                                                    </button>
                                                    <script>
                                                        async function showAlert() {
                                                            new window.Swal({
                                                                title: "Berhasil",
                                                                text: "Data berhasil di tambahkan",
                                                                icon: "success",
                                                                button: "oke",
                                                            });
                                                        }
                                                    </script>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <script>
                    const addButton = document.querySelector("#addButton");
                    const tambahmodal = document.querySelector("#tambahmodal");
                    const cancelButton = document.querySelector(".ml-auto button");

                    addButton.addEventListener("click", () => {
                        tambahmodal.classList.remove("hidden");
                    });

                    cancelButton.addEventListener("click", () => {
                        tambahmodal.classList.add("hidden");
                    });
                </script>
                <div class="flex">
                    <div class="flex items-center" x-data="{ isInputActive: false }">
                        <label class="block">
                            <input x-effect="isInputActive === true && $nextTick(() => { $el.focus()});"
                                :class="isInputActive ? 'w-32 lg:w-48' : 'w-0'"
                                class="form-input bg-transparent px-1 text-right transition-all duration-100 placeholder:text-slate-500 dark:placeholder:text-navy-200"
                                placeholder="Search here..." type="text" />
                        </label>
                        <button @click="isInputActive = !isInputActive"
                            class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </div>
                    <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="isShowPopper && (isShowPopper = false)"
                        class="inline-flex">
                        <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                            class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M3 5.109C3 4.496 3.47 4 4.05 4h16.79c.58 0 1.049.496 1.049 1.109 0 .612-.47 1.108-1.05 1.108H4.05C3.47 6.217 3 5.721 3 5.11zM5.798 12.5c0-.612.47-1.109 1.05-1.109H18.04c.58 0 1.05.497 1.05 1.109s-.47 1.109-1.05 1.109H6.848c-.58 0-1.05-.497-1.05-1.109zM9.646 18.783c-.58 0-1.05.496-1.05 1.108 0 .613.47 1.109 1.05 1.109h5.597c.58 0 1.05-.496 1.05-1.109 0-.612-.47-1.108-1.05-1.108H9.646z" />
                            </svg>
                        </button>
                        {{-- <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                            <div
                                class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                <ul>
                                    <li>
                                        <a href="#"
                                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another
                                            Action</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something
                                            else</a>
                                    </li>
                                </ul>
                                <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                <ul>
                                    <li>
                                        <a href="#"
                                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated
                                            Link</a>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="is-scrollbar-hidden min-w-full overflow-x-auto" x-data="pages.tables.initExample1">
                    <table class="is-hoverable w-full text-left">
                        <thead>
                            <tr>
                                <th
                                    class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                    #
                                </th>
                                <th
                                    class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                    Logo
                                </th>
                                <th
                                    class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                    Nama
                                </th>
                                <th
                                    class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                    Email
                                </th>
                                <th
                                    class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                    Telepon
                                </th>
                                <th
                                    class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                    Alamat
                                </th>
                                <th
                                    class="whitespace-nowrap rounded-tr-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        @forelse ($mous as $mou)
                        <?php
                            $no = 1;
                        ?>
                        <tbody>
                            <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">{{ $no++ }}</td>
                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                    <div class="avatar flex h-10 w-10">
                                        <img class="mask is-squircle" src="{{ asset('storage/mou/' . $mou->logo) }}"
                                            alt="avatar" />
                                    </div>
                                </td>
                                <td
                                    class="whitespace-nowrap px-3 py-3 font-medium text-slate-700 dark:text-navy-100 lg:px-5">
                                    {{ $mou->nama }}</td>
                                <td
                                    class="whitespace-nowrap px-3 py-3 font-medium text-slate-700 dark:text-navy-100 lg:px-5">
                                    {{ $mou->email }}
                                </td>
                                <td
                                    class="whitespace-nowrap px-3 py-3 font-medium text-slate-700 dark:text-navy-100 lg:px-5">
                                {{ $mou->no }}
                                </td>
                                <td
                                    class="whitespace-nowrap px-3 py-3 font-medium text-slate-700 dark:text-navy-100 lg:px-5">
                                {{ $mou->alamat }}
                                </td>
                                <td class="whitespace-nowrap px-3 py-3">
                                    <div class="flex items-center space-x-2">
                                        <button data-modal-target="defaultModal" data-modal-toggle="defaultModal">
                                            <div
                                                class="w-16 flex h-8 bg-white rounded-md border-2 border-[#00B7FF] justify-center items-center text-[#00B7FF] hover:bg-[#00B7FF] hover:text-white dark:bg-transparent ">
                                                <span class=" p-1  font-semibold dark:hover:text-black">Edit</span>
                                            </div>
                                        </button>
                                        <div id="editmodal" class="fixed z-10 inset-0 overflow-y-auto hidden">
                                            <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                                <div class="fixed inset-0 transition-opacity">
                                                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                                </div>
                                                <div
                                                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                        <div class="max-w-7xl mx-auto">
                                                            <div class="flex flex-col">
                                                                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                                                    Edit Data MOU
                                                                </h3>
                                                                <form class="mt-4">
                                                                    <div class="mt-4">
                                                                        <label for="logo"
                                                                            class="block text-gray-700 font-medium mb-2">Logo</label>
                                                                        <input id="ctnFile" type="file"
                                                                            class="block w-full h-9 rounded-md file:py-2 file:px-4 file:border-0 file:font-semibold p-0  bg-white border focus:outline-none focus:ring  focus:ring-indigo-200 focus:ring-opacity-50 file:bg-[#24AEE4] ltr:file:mr-5 rtl:file:ml-5 file:text-white file:hover:bg-[#24AEE4]"
                                                                            required />
                                                                    </div>
                                                                    <div class="mt-4">
                                                                        <label for="nama"
                                                                            class="block text-gray-700 font-medium mb-2">Nama</label>
                                                                        <input type="text" id="nama" name="nama"
                                                                            placeholder="Masukkan nama sekolah"
                                                                            class="block w-full h-9 px-4 rounded-md bg-white border border-gray-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                                                    </div>
                                                                    <div class="mt-4">
                                                                        <label for="email"
                                                                            class="block text-gray-700 font-medium mb-2">Email</label>
                                                                        <input type="email" placeholder="Masukkan email" id="email"
                                                                            name="email"
                                                                            class="block w-full h-9 px-4 rounded-md bg-white border border-gray-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                                                    </div>
                                                                    <div class="mt-4">
                                                                        <label for="notelepon"
                                                                            class="block text-gray-700 font-medium mb-2">No.Telepon</label>
                                                                        <input type="number" placeholder="Masukkan no.telepon" id="notelepon"
                                                                            name="notelepon"
                                                                            class="block w-full h-9 px-4 rounded-md bg-white border border-gray-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                                                    </div>
                                                                    <div class="mt-4">
                                                                        <label for="alamat"
                                                                            class="block text-gray-700 font-medium mb-2">Alamat</label>
                                                                        <textarea name="alamat" id="alamat" placeholder="Masukkan alamat" id="alamat" name="alamat"
                                                                            class="block w-full h-14 px-4 rounded-md bg-white border border-gray-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                                                                    </div>
                                                                    <div class="flex items-center justify-end mt-4">
                                                                        <div class="ml-auto">
                                                                            <button type="button"
                                                                                class="bg-transparent border border-gray-300 text-gray-800 hover:bg-gray-300 hover:text-gray-800 font-semibold py-2 px-4 rounded">
                                                                                Batal
                                                                            </button>
                                                                            <button
                                                                                class="bg-blue-500 text-white hover:bg-blue-700 font-semibold py-2 px-4 rounded"
                                                                                @click="showAlert()">
                                                                                Simpan
                                                                            </button>
                                                                            <script>
                                                                                async function showAlert() {
                                                                                    new window.Swal({
                                                                                        title: "Berhasil",
                                                                                        text: "Data berhasil di tambahkan",
                                                                                        icon: "success",
                                                                                        button: "oke",
                                                                                    });
                                                                                }
                                                                            </script>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <script>
                                            const editbutton = document.querySelector("#editbutton");
                                            const editmodal = document.querySelector("#editmodal");
                                            const cancelButton = document.querySelector(".ml-auto button");

                                            editbutton.addEventListener("click", () => {
                                                editmodal.classList.remove("hidden");
                                            });

                                            cancelButton.addEventListener("click", () => {
                                                editmodal.classList.add("hidden");
                                            });
                                        </script>
                                        <form action="{{ route('mou.destroy',$mou->id) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit">

                                                <div
                                                    class="w-16 flex h-8 bg-white rounded-md border-2 border-red-500 justify-center items-center text-red-500 hover:bg-red-500 hover:text-white dark:bg-transparent ">
                                                    <span class=" p-1  font-semibold dark:hover:text-black">Hapus</span>
                                                </div>
                                            </button>
                                        </form>


                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        @empty

                        @endforelse
                    </table>
                </div>

                <div
                    class="flex flex-col justify-between space-y-4 px-4 py-4 sm:flex-row sm:items-center sm:space-y-0 sm:px-5">
                    <div class="flex items-center space-x-2 text-xs+">
                        <span>Show</span>
                        <label class="block">
                            <select
                                class="form-select rounded-full border border-slate-300 bg-white px-2 py-1 pr-6 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent">
                                <option>10</option>
                                <option>30</option>
                                <option>50</option>
                            </select>
                        </label>
                        <span>entries</span>
                    </div>

                    <ol class="pagination">
                        <li class="rounded-l-lg bg-slate-150 dark:bg-navy-500">
                            <a href="#"
                                class="flex h-8 w-8 items-center justify-center rounded-lg text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:text-navy-200 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                                </svg>
                            </a>
                        </li>
                        <li class="bg-slate-150 dark:bg-navy-500">
                            <a href="#"
                                class="flex h-8 min-w-[2rem] items-center justify-center rounded-lg px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">1</a>
                        </li>
                        <li class="bg-slate-150 dark:bg-navy-500">
                            <a href="#"
                                class="flex h-8 min-w-[2rem] items-center justify-center rounded-lg bg-primary px-3 leading-tight text-white transition-colors hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">2</a>
                        </li>
                        <li class="bg-slate-150 dark:bg-navy-500">
                            <a href="#"
                                class="flex h-8 min-w-[2rem] items-center justify-center rounded-lg px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">3</a>
                        </li>
                        <li class="bg-slate-150 dark:bg-navy-500">
                            <a href="#"
                                class="flex h-8 min-w-[2rem] items-center justify-center rounded-lg px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">4</a>
                        </li>
                        <li class="bg-slate-150 dark:bg-navy-500">
                            <a href="#"
                                class="flex h-8 min-w-[2rem] items-center justify-center rounded-lg px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">5</a>
                        </li>
                        <li class="rounded-r-lg bg-slate-150 dark:bg-navy-500">
                            <a href="#"
                                class="flex h-8 w-8 items-center justify-center rounded-lg text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:text-navy-200 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </li>
                    </ol>
                    <div class="text-xs+">1 - 10 of 10 entries</div>
                </div>
            </div>
        </div>
    </div>
</main>
<!--
        This is a place for Alpine.js Teleport feature
        @see https://alpinejs.dev/directives/teleport
      -->
<div id="x-teleport-target"></div>
<script>
    window.addEventListener("DOMContentLoaded", () => Alpine.start());
</script>
