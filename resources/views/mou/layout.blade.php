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
                                        <form action="{{ route('mou.store') }}" method="post"
                                            enctype="multipart/form-data">
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
                                                <input type="number" placeholder="Masukkan no.telepon" id="notelepon"
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
                    <form action="">
                        <label class="relative hidden sm:flex">
                            <input
                                class="form-input peer h-9 w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 text-xs+ placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                placeholder="Search users..." type="text" name="cari"
                                value="{{ request('cari') }}" />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-colors duration-200"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M3.316 13.781l.73-.171-.73.171zm0-5.457l.73.171-.73-.171zm15.473 0l.73-.171-.73.171zm0 5.457l.73.171-.73-.171zm-5.008 5.008l-.171-.73.171.73zm-5.457 0l-.171.73.171-.73zm0-15.473l-.171-.73.171.73zm5.457 0l.171-.73-.171.73zM20.47 21.53a.75.75 0 101.06-1.06l-1.06 1.06zM4.046 13.61a11.198 11.198 0 010-5.115l-1.46-.342a12.698 12.698 0 000 5.8l1.46-.343zm14.013-5.115a11.196 11.196 0 010 5.115l1.46.342a12.698 12.698 0 000-5.8l-1.46.343zm-4.45 9.564a11.196 11.196 0 01-5.114 0l-.342 1.46c1.907.448 3.892.448 5.8 0l-.343-1.46zM8.496 4.046a11.198 11.198 0 015.115 0l.342-1.46a12.698 12.698 0 00-5.8 0l.343 1.46zm0 14.013a5.97 5.97 0 01-4.45-4.45l-1.46.343a7.47 7.47 0 005.568 5.568l.342-1.46zm5.457 1.46a7.47 7.47 0 005.568-5.567l-1.46-.342a5.97 5.97 0 01-4.45 4.45l.342 1.46zM13.61 4.046a5.97 5.97 0 014.45 4.45l1.46-.343a7.47 7.47 0 00-5.568-5.567l-.342 1.46zm-5.457-1.46a7.47 7.47 0 00-5.567 5.567l1.46.342a5.97 5.97 0 014.45-4.45l-.343-1.46zm8.652 15.28l3.665 3.664 1.06-1.06-3.665-3.665-1.06 1.06z" />
                                </svg>
                            </span>
                        </label>
                    </form>
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
                                            <img class="mask is-squircle"
                                                src="{{ asset('Storage/Mou/' . $mou->logo) }}" alt="avatar" />
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
                                            <button data-modal-target="defaultModal{{ $mou->id }}"
                                                data-modal-toggle="defaultModal{{ $mou->id }}">
                                                <div
                                                    class="w-16 flex h-8 bg-white rounded-md border-2 border-[#00B7FF] justify-center items-center text-[#00B7FF] hover:bg-[#00B7FF] hover:text-white dark:bg-transparent ">
                                                    <span class=" p-1  font-semibold dark:hover:text-black">Edit</span>
                                                </div>
                                            </button>


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
                                            <form action="{{ route('mou.destroy', $mou->id) }}" method="post"
                                                id="confirm-form">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" id="confirm-button">

                                                    <div
                                                        class="w-16 flex h-8 bg-white rounded-md border-2 border-red-500 justify-center items-center text-red-500 hover:bg-red-500 hover:text-white dark:bg-transparent ">
                                                        <span
                                                            class=" p-1  font-semibold dark:hover:text-black">Hapus</span>
                                                    </div>
                                                </button>
                                            </form>
                                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                                            <script>
                                                document.getElementById('confirm-button').addEventListener('click', function(e) {
                                                    e.preventDefault();


                                                    Swal.fire({
                                                        title: 'Apakah Anda yakin?',
                                                        text: 'Anda akan mengkonfirmasi izin ini.',
                                                        icon: 'warning',
                                                        showCancelButton: true,
                                                        confirmButtonColor: '#3085d6',
                                                        cancelButtonColor: '#d33',
                                                        confirmButtonText: 'Ya, konfirmasi!',
                                                        cancelButtonText: 'Batal'
                                                    }).then((result) => {
                                                        if (result.isConfirmed) {
                                                            document.getElementById('confirm-form').submit();
                                                        }
                                                    });
                                                });
                                            </script>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        @empty
                            <tr>
                                <td colspan="6" class="p-8 text-center">
                                    <div class="flex justify-center items-center">
                                        <img src="/admin/noData.png" alt="" width="280px">
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </table>
                    {{ $mous->appends(['cari' => request('cari')])->links() }}
                </div>


            </div>
        </div>
    </div>
</main>
@forelse ($mous as $mou)
    <div id="defaultModal{{ $mou->id }}" class="fixed  z-50 inset-0 overflow-y-auto hidden">
        <div class="flex justify-center min-h-screen w-[50%] pt-4 px-4 pb-20 text-center sm:block sm:p-0">
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
                            <form class="mt-4 form-class" action="{{ route('mou.update', $mou->id) }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mt-4">
                                    <label for="logo" class="block text-gray-700 font-medium mb-2">Logo</label>
                                    <div class="avatar flex h-10 w-10">
                                        <input type="hidden" name="oldimage" value="{{ $mou->logo }}">
                                        <input type="hidden" name="id" value="{{ $mou->id }}">
                                        <img class="mask is-squircle" src="{{ asset('Storage/Mou/' . $mou->logo) }}"
                                            alt="avatar" />
                                    </div>
                                    <input id="ctnFile" type="file" name="logo"
                                        class="block w-full h-9 rounded-md file:py-2 file:px-4 file:border-0 file:font-semibold p-0  bg-white border focus:outline-none focus:ring  focus:ring-indigo-200 focus:ring-opacity-50 file:bg-[#24AEE4] ltr:file:mr-5 rtl:file:ml-5 file:text-white file:hover:bg-[#24AEE4]" />
                                </div>
                                <div class="mt-4">
                                    <label for="nama" class="block text-gray-700 font-medium mb-2">Nama</label>
                                    <input type="text" id="nama" name="nama"
                                        placeholder="Masukkan nama sekolah" value="{{ $mou->nama }}"
                                        class="block w-full h-9 px-4 rounded-md bg-white border border-gray-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                </div>
                                <div class="mt-4">
                                    <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                                    <input type="email" placeholder="Masukkan email" id="email" name="email"
                                        value="{{ $mou->email }}"
                                        class="block w-full h-9 px-4 rounded-md bg-white border border-gray-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                </div>
                                <div class="mt-4">
                                    <label for="notelepon"
                                        class="block text-gray-700 font-medium mb-2">No.Telepon</label>
                                    <input type="number" placeholder="Masukkan no.telepon" id="notelepon"
                                        name="no" value="{{ $mou->no }}"
                                        class="block w-full h-9 px-4 rounded-md bg-white border border-gray-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                </div>
                                <div class="mt-4">
                                    <label for="alamat" class="block text-gray-700 font-medium mb-2">Alamat</label>
                                    <textarea name="alamat" id="alamat" placeholder="" name="alamat"
                                        class="block w-full h-14 px-4 rounded-md bg-white border border-gray-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50"> {{ $mou->alamat }}</textarea>
                                </div>
                                <div class="flex items-center justify-end mt-4">
                                    <div class="ml-auto">
                                        <button data-modal-hide="defaultModal{{ $mou->id }}" type="button"
                                            class="bg-transparent border border-gray-300 text-gray-800 hover:bg-gray-300 hover:text-gray-800 font-semibold py-2 px-4 rounded">
                                            Batal
                                        </button>
                                        <button type="submit" id="submitButton"
                                            class="bg-blue-500 text-white hover:bg-blue-700 font-semibold py-2 px-4 rounded">
                                            Simpan
                                        </button>



                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@empty
@endforelse


<!--
        This is a place for Alpine.js Teleport feature
        @see https://alpinejs.dev/directives/teleport
      -->
<div id="x-teleport-target"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>

<script>
    window.addEventListener("DOMContentLoaded", () => Alpine.start());
</script>
{{-- <script>
    document.getElementById('submitButton').addEventListener('click', showAlert);

    function showAlert(event) {
        event.preventDefault();

        Swal.fire({
            title: 'Berhasil',
            text: 'Data berhasil ditambahkan',
            icon: 'success',
            confirmButtonText: 'Oke'
        }).then((result) => {
            if (result.isConfirmed) {
                event.target.closest('.form-class').submit();
            }
        });
    }
</script> --}}
