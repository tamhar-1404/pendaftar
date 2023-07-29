<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Jurnal Hari Ini</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script>
        theme: {
            extend: {
                blur: {
                    xs: '3px',
                }
            },
        },
    </script>
    <link href="/admin/assets/images/Logo.png" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <link rel="stylesheet" href="load/load.css">
    <link href="/admin/assets/images/logo.png" rel="shortcut icon">
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets_guru/css/perfect-scrollbar.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets_guru/css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <link defer rel="stylesheet" type="text/css" media="screen" href="assets_guru/css/animate.css" />
    {{--  <link defer rel="stylesheet" type="text/css" media="screen" href="{{ asset('admin/assets/css/animate.css') }}" />  --}}
    <script src="{{ asset('admin/assets/js/perfect-scrollbar.min.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('admin/assets/css/style.css') }}" />
    <script defer src="{{ asset('admin/assets/js/tippy-bundle.umd.min.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/sweetalert.min.js') }}"></script>
    <link rel="stylesheet" href="load/load.css">
    <!-- CSS Assets -->
    <link rel="stylesheet" href="admin/css/app.css" />

    <!-- Javascript Assets -->
    <script src="admin/js/app.js" defer></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                fontFamily: {
                    sans: ["Roboto", "sans-serif"],
                    body: ["Roboto", "sans-serif"],
                    mono: ["ui-monospace", "monospace"],
                },
            },
            corePlugins: {
                preflight: false,
            },
        };
    </script>
    <script src="assets_guru/js/perfect-scrollbar.min.js"></script>
    <script defer src="assets_guru/js/popper.min.js"></script>
    <script defer src="assets_guru/js/tippy-bundle.umd.min.js"></script>
    <script defer src="assets_guru/js/sweetalert.min.js"></script>
    <style>
        /* Gaya untuk overlay popup */
        .popup-overlay {
          display: none;
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background-color: rgba(0, 0, 0, 0.5);
          z-index: 9999;
        }

        /* Gaya untuk konten popup */
        .popup-content {
          display: none;
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          background-color: #fff;
          padding: 20px;
          border-radius: 5px;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
      </style>
</head>

<body>
    <style>
        .modal-backdrop {
          background-color: rgba(0, 0, 255, 0.5); /* Blue color with 50% opacity */
        }
      </style>
    <!-- screen loader -->
    <div
        class="spin_load  screen_loader animate__animated fixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
        <div class="center">
            <div class="ring">
            </div>
            <img src="load/logo.png" alt="Deskripsi gambar" class="my-img">
        </div>
    </div>
    @include('jurnal_admin.layout')

    <div class=" pl-[px] " id="content">


        @include('jurnal_admin.nav')

        <div class="animate__animated p-6" :class="[$store.app.animation]">
            <!-- start main content section -->
            <div>
                <ul class="flex space-x-2 rtl:space-x-reverse">

                </ul>
                <div class="pt-5">
                    <div class="mb-5 flex items-center justify-between">
                        <h5 class="text-sm font-semibold dark:text-white-light">Jurnal Hari ini </h5>
                        <!-- Date Range -->
                        <div class="card px-4 pb-4 sm:px-5">

                            <div class="max-w-xl">

                                <div class="mt-5">
                                    <form action="" id="tanggal">
                                        <label class="relative flex">
                                            <input x-init="$el._x_flatpickr = flatpickr($el, { mode: 'range', dateFormat: 'Y-m-d', defaultDate: [getCurrentDate(), getCurrentDate()] })"
                                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                placeholder="Choose date..." type="text" name="cari"
                                                value="{{ request('cari') }}" onchange="filterTanggal(this.value)" />
                                            <button type="submit" class="hidden">Submit</button>
                                    </form>
                                    <script>
                                        function filterTanggal(data) {
                                            const str = data;
                                            const keyword = "to";
                                            const regex = new RegExp(`\\b${keyword}\\b`, "i");

                                            const result = str.match(regex);

                                            if (result) {
                                                document.getElementById('tanggal').submit();
                                            }
                                        }
                                    </script>

                                    <script>
                                        function getCurrentDate() {
                                            const now = new Date();
                                            const year = now.getFullYear();
                                            const month = String(now.getMonth() + 1).padStart(2, '0');
                                            const day = String(now.getDate()).padStart(2, '0');
                                            return `${year}-${month}-${day}`;
                                        }
                                    </script>
                                    <span
                                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 transition-colors duration-200" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </span>
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div x-data="{ tab: 'home' }">
                        <ul
                            class="mb-5 overflow-y-auto whitespace-nowrap border-b border-[#ebedf2] font-semibold dark:border-[#191e3a] sm:flex">
                            <li class="inline-block">
                                <a href="javascript:;"
                                    class="flex gap-2 border-b border-transparent p-4 hover:border-primary hover:text-primary"
                                    :class="{ '!border-primary text-primary': tab == 'home' }" @click="tab='home'">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                                        <path opacity="0.5"
                                            d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                                            stroke="currentColor" stroke-width="1.5" />
                                        <path d="M12 15L12 18" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" />
                                    </svg>
                                    Mengisi
                                </a>
                            </li>
                            <li class="inline-block">
                                <a href="javascript:;"
                                    class="flex gap-2 border-b border-transparent p-4 hover:border-primary hover:text-primary"
                                    :class="{ '!border-primary text-primary': tab == 'password' }"
                                    @click="tab='password'">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                    Tidak mengisi
                                </a>
                            </li>
                            <li class="inline-block">
                                <a href="javascript:;"
                                    class="flex gap-2 border-b border-transparent p-4 hover:border-primary hover:text-primary"
                                    :class="{ '!border-primary text-primary': tab == 'semua' }"
                                    @click="tab='semua'">
                                    Semua
                                </a>
                            </li>

                        </ul>
                        <script>
                            let mycheckbox = document.getElementById('tampil');
                            let tabelsemua = document.getElementById('tabelsemua');

                            function cekCheckbox() {
                                let tabelsemua = document.getElementById('tabelsemua');
                                let mycheckbox = document.getElementById('tampil');
                                if (mycheckbox.checked) {
                                    tabelsemua.classList.remove('hidden');
                                } else {
                                    tabelsemua.classList.add('hidden');
                                }
                            }
                            mycheckbox.addEventListener('checked', function() {
                                if (mycheckbox.checked) {
                                    tabelsemua.classList.remove('hidden');
                                } else {
                                    tabelsemua.classList.add('hidden');
                                }
                            })
                        </script>
                        <template x-if="tab === 'home'">
                            <div id="tabelsemua" class="hidden">
                                <form
                                    class="mb-5 rounded-md border border-[#ebedf2] bg-white p-4 dark:border-[#191e3a] dark:bg-[#0e1726]">

                                    <h6 class="mb-5 text-lg font-bold">Tanggal : {{ $hari }}</h6>
                                    <table class="min-w-full text-left text-sm ">
                                        <thead class="border-rounded bg-[#E2E8F0] dark:border-neutral-500">
                                            <tr>
                                                <th scope="col" class="px-6 py-2">#</th>
                                                <th scope="col" class="px-6 py-2">Nama</th>
                                                <th scope="col" class="px-6 py-2">Sekolah</th>
                                                <th scope="col" class="px-6 py-2">Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($semuaJurnal as $key => $user)
                                                <tr>
                                                    <td class="whitespace-nowrap px-6 py-2">{{ ++$key }}</td>
                                                    <td class="whitespace-nowrap px-6 py-2">{{ $user->nama }}</td>
                                                    <td class="whitespace-nowrap px-6 py-2">{{ $user->sekolah }}</td>
                                                    <td class="whitespace-nowrap px-6 py-2">{{ $user->status }}</td>
                                                </tr>

                                            @empty
                                            @endforelse
                                        </tbody>
                                </form>
                            </div>
                    </template>
                    <template x-if="tab === 'semua'">
                        <div>
                            <div class="mb-5 rounded-md border border-[#ebedf2] bg-white p-4 dark:border-[#191e3a] dark:bg-[#0e1726]" enctype="multipart/form-data" method="POST">
                                <input type="hidden" name="siswa_id">
                                <input type="hidden" name="siswa_id">

                                <h6 class="mb-5 text-lg font-bold">Tanggal : {{ $hari }}</h6>
                                <div class="flex flex-col sm:flex-row">
                                    <div class="w-full">
                                        <div class="w-full">
                                            <div class="max-w-screen-lg mx-auto w-full h-full flex flex-col items-center justify-center">
                                                <div x-data="dataTable2()"
                                                    x-init="
                                                    initData()
                                                    $watch('searchInput', value => {
                                                        search(value)
                                                    })" class="bg-white p-5 shadow-md w-full flex flex-col">
                                                    <div class="flex justify-between items-center">
                                                        <div class="flex space-x-2 items-center">
                                                            <p>Tampilkan</p>
                                                            <select x-model="view" @change="changeView()">
                                                                <option value="5">5</option>
                                                                <option value="10">10</option>
                                                                <option value="25">25</option>
                                                                <option value="50">50</option>
                                                                <option value="100">100</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <table class="mt-5">
                                                        <thead class="border-b-2">
                                                            <tr>
                                                                <th>#</th>
                                                                <th @click="sort('name', sorted.rule === 'asc' ? 'desc' : 'asc')">Name</th>
                                                                <th @click="sort('sekolah', sorted.rule === 'asc' ? 'desc' : 'asc')">Sekolah</th>
                                                                <th @click="sort('status', sorted.rule === 'asc' ? 'desc' : 'asc')">Status</th>
                                                                {{-- <th @click="sort('kegiatan', sorted.rule === 'asc' ? 'desc' : 'asc')">Keterangan</th>
                                                                <th @click="sort('image', sorted.rule === 'asc' ? 'desc' : 'asc')">image</th> --}}
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <template x-for="(item, index) in items" :key="index">
                                                                <tr x-show="checkView(index + 1)" class="hover:bg-gray-200 text-gray-900 text-xs">
                                                                    <td class="py-3">
                                                                        <span x-text="index + 1"></span>
                                                                    </td>
                                                                    <td class="py-3">
                                                                        <span x-text="item.nama"></span>
                                                                    </td>
                                                                    <td class="py-3">
                                                                        <span x-text="item.sekolah"></span>
                                                                    </td>
                                                                    <td class="py-3">
                                                                        <span x-text="item.status"></span>
                                                                    </td>
                                                                    {{-- <td class="py-3">
                                                                        <span x-text="item.kegiatan"></span>
                                                                    </td>
                                                                    <td class="py-3">
                                                                        <span x-text="item.image"></span>
                                                                    </td> --}}
                                                                </tr>
                                                            </template>
                                                            <tr x-show="isEmpty()">
                                                                <td colspan="5" class="text-center py-3 text-gray-900 text-sm">Tidak ada data yang cocok.</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="flex mt-5">
                                                        <div class="border px-2 cursor-pointer" @click.prevent="changePage(1)">
                                                            <span class="text-gray-700">Pertama</span>
                                                        </div>
                                                        <div class="border px-2 cursor-pointer" @click="changePage(currentPage - 1)">
                                                            <span class="text-gray-700"><</span>
                                                        </div>
                                                        <template x-for="item in pages">
                                                            <div @click="changePage(item)" class="border px-2 cursor-pointer" x-bind:class="{ 'bg-gray-300': currentPage === item }">
                                                                <span class="text-gray-700" x-text="item"></span>
                                                            </div>
                                                        </template>
                                                        <div class="border px-2 cursor-pointer" @click="changePage(currentPage + 1)">
                                                            <span class="text-gray-700">></span>
                                                        </div>
                                                        <div class="border px-2 cursor-pointer" @click.prevent="changePage(pagination.lastPage)">
                                                            <span class="text-gray-700">Terakhir</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    let datauser2 = @json($semuaJurnal);
                                </script>
                                <script>
                                    window.dataTable2 = function () {
                                        return {
                                            items: [],
                                            view: 5,
                                            searchInput: '',
                                            pages: [],
                                            offset: 5,
                                            pagination: {
                                                total: datauser2.length,
                                                lastPage: Math.ceil(datauser2.length / 5),
                                                perPage: 5,
                                                currentPage: 1,
                                                from: 1,
                                                to: 1 * 5
                                            },
                                            currentPage: 1,
                                            sorted: {
                                                field: 'nama',
                                                rule: 'asc'
                                            },
                                            initData() {
                                                this.items = datauser2.sort(this.compareOnKey('nama', 'asc'))
                                                this.showPages()
                                            },
                                            compareOnKey(key, rule) {
                                                return function (a, b) {
                                                    if (key === 'nama' || key === 'status') {
                                                        let comparison = 0
                                                        const fieldA = a[key].toUpperCase()
                                                        const fieldB = b[key].toUpperCase()
                                                        if (rule === 'asc') {
                                                            if (fieldA > fieldB) {
                                                                comparison = 1;
                                                            } else if (fieldA < fieldB) {
                                                                comparison = -1;
                                                            }
                                                        } else {
                                                            if (fieldA < fieldB) {
                                                                comparison = 1;
                                                            } else if (fieldA > fieldB) {
                                                                comparison = -1;
                                                            }
                                                        }
                                                        return comparison
                                                    } else {
                                                        if (rule === 'asc') {
                                                            return a.year - b.year
                                                        } else {
                                                            return b.year - a.year
                                                        }
                                                    }
                                                }
                                            },
                                            checkView(index) {
                                                return index > this.pagination.to || index < this.pagination.from ? false : true
                                            },
                                            checkPage(item) {
                                                if (item <= this.currentPage + 5) {
                                                    return true
                                                }
                                                return false
                                            },
                                            search(value) {
                                                if (value.length > 1) {
                                                    const options = {
                                                        shouldSort: true,
                                                        keys: ['name'],
                                                        threshold: 0
                                                    }
                                                    const fuse = new Fuse(datauser2, options)
                                                    this.items = fuse.search(value).map(elem => elem.item)
                                                } else {
                                                    this.items = datauser
                                                }
                                                this.changePage(1)
                                                this.showPages()
                                            },
                                            sort(field, rule) {
                                                this.items = this.items.sort(this.compareOnKey(field, rule))
                                                this.sorted.field = field
                                                this.sorted.rule = rule
                                            },
                                            changePage(page) {
                                                if (page >= 1 && page <= this.pagination.lastPage) {
                                                    this.currentPage = page
                                                    const total = this.items.length
                                                    const lastPage = Math.ceil(total / this.view) || 1
                                                    const from = (page - 1) * this.view + 1
                                                    let to = page * this.view
                                                    if (page === lastPage) {
                                                        to = total
                                                    }
                                                    this.pagination.total = total
                                                    this.pagination.lastPage = lastPage
                                                    this.pagination.perPage = this.view
                                                    this.pagination.currentPage = page
                                                    this.pagination.from = from
                                                    this.pagination.to = to
                                                    this.showPages()
                                                }
                                            },
                                            showPages() {
                                                const pages = []
                                                let from = this.pagination.currentPage - Math.ceil(this.offset / 2)
                                                if (from < 1) {
                                                    from = 1
                                                }
                                                let to = from + this.offset - 1
                                                if (to > this.pagination.lastPage) {
                                                    to = this.pagination.lastPage
                                                }
                                                while (from <= to) {
                                                    pages.push(from)
                                                    from++
                                                }
                                                this.pages = pages
                                            },
                                            changeView() {
                                                this.changePage(1)
                                                this.showPages()
                                            },
                                            isEmpty() {
                                                return this.pagination.total ? false : true
                                            }
                                        }
                                    }
                                </script>
                            </div>
                        </div>
                </template>
                    <template x-if="tab === 'password'">
                        <div id="tabelsemua" class="hidden">
                            <form
                                class="mb-5 rounded-md border border-[#ebedf2] bg-white p-4 dark:border-[#191e3a] dark:bg-[#0e1726]">
                                <h6 class="mb-5 text-lg font-bold">Tanggal : {{ $hari }}</h6>
                                <table class="min-w-full text-left text-sm ">
                                    <thead class="border-rounded bg-[#E2E8F0] dark:border-neutral-500">
                                        <tr>
                                            <th scope="col" class="px-6 py-2">#</th>
                                            <th scope="col" class="px-6 py-2">Nama</th>
                                            <th scope="col" class="px-6 py-2">Sekolah</th>
                                            <th scope="col" class="px-6 py-2">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($semuaJurnal as $key => $user)
                                            <tr>
                                                <td class="whitespace-nowrap px-6 py-2">{{ ++$key }}</td>
                                                <td class="whitespace-nowrap px-6 py-2">{{ $user->nama }}</td>
                                                <td class="whitespace-nowrap px-6 py-2">{{ $user->sekolah }}</td>
                                                <td class="whitespace-nowrap px-6 py-2">{{ $user->status }}</td>
                                        </tr>
                                </tbody>

                            @empty
                                @endforelse

                            </form>
                        </div>
                </template>
                <template x-if="tab === 'password'">
                    {{-- <div>
                        <form
                            class="mb-5 rounded-md border border-[#ebedf2] bg-white p-4 dark:border-[#191e3a] dark:bg-[#0e1726]">
                            @php
                                $hari = date('N');
                                $daftarHari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                            @endphp

                            <h6 class="mb-5 text-lg font-bold">Tanggal : {{ $daftarHari[$hari] }},
                                {{ date('d F Y') }}</h6>
                            <table class="min-w-full text-left text-sm ">
                                <thead class="border-rounded bg-[#E2E8F0] dark:border-neutral-500">
                                    <tr>
                                        <th scope="col" class="px-6 py-2">#</th>
                                        <th scope="col" class="px-6 py-2">Nama</th>
                                        <th scope="col" class="px-6 py-2">Sekolah</th>


                                    </tr>
                                </thead>
                                @forelse ($users as $key => $item)
                                    <tbody>
                                        <tr>
                                            <td class="whitespace-nowrap px-6 py-2">
                                                {{ ($users->currentPage() - 1) * $users->perPage() + $key + 1 }}
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-2">{{ $item->name }}</td>
                                            <td class="whitespace-nowrap px-6 py-2">{{ $item->sekolah }}</td>
                                        </tr>
                                    </tbody>

                                @empty
                                @endforelse

                        </form>
                    </div>
                    <div id="paginateUsers" class="mb-4">{{ $users->links() }}</div> --}}
                    <div>
                        <div class="mb-5 rounded-md border border-[#ebedf2] bg-white p-4 dark:border-[#191e3a] dark:bg-[#0e1726]" enctype="multipart/form-data" method="POST">
                            <input type="hidden" name="siswa_id">
                            <input type="hidden" name="siswa_id">

                            <h6 class="mb-5 text-lg font-bold">Tanggal : {{ $hari }}</h6>
                            <div class="flex flex-col sm:flex-row">
                                <div class="w-full">
                                    <div class="w-full">
                                        <div class="max-w-screen-lg mx-auto w-full h-full flex flex-col items-center justify-center">
                                            <div x-data="dataTable1()"
                                                x-init="
                                                initData()
                                                $watch('searchInput', value => {
                                                    search(value)
                                                })" class="bg-white p-5 shadow-md w-full flex flex-col">
                                                <div class="flex justify-between items-center">
                                                    <div class="flex space-x-2 items-center">
                                                        <p>Tampilkan</p>
                                                        <select x-model="view" @change="changeView()">
                                                            <option value="5">5</option>
                                                            <option value="10">10</option>
                                                            <option value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="100">100</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <table class="mt-5">
                                                    <thead class="border-b-2">
                                                        <tr>
                                                            <th>#</th>
                                                            <th @click="sort('name', sorted.rule === 'asc' ? 'desc' : 'asc')">Name</th>
                                                            <th @click="sort('sekolah', sorted.rule === 'asc' ? 'desc' : 'asc')">Sekolah</th>
                                                            {{-- <th @click="sort('kegiatan', sorted.rule === 'asc' ? 'desc' : 'asc')">Keterangan</th>
                                                            <th @click="sort('image', sorted.rule === 'asc' ? 'desc' : 'asc')">image</th> --}}
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <template x-for="(item, index) in items" :key="index">
                                                            <tr x-show="checkView(index + 1)" class="hover:bg-gray-200 text-gray-900 text-xs">
                                                                <td class="py-3">
                                                                    <span x-text="index + 1"></span>
                                                                </td>
                                                                <td class="py-3">
                                                                    <span x-text="item.name"></span>
                                                                </td>
                                                                <td class="py-3">
                                                                    <span x-text="item.sekolah"></span>
                                                                </td>
                                                                {{-- <td class="py-3">
                                                                    <span x-text="item.kegiatan"></span>
                                                                </td>
                                                                <td class="py-3">
                                                                    <span x-text="item.image"></span>
                                                                </td> --}}
                                                            </tr>
                                                        </template>
                                                        <tr x-show="isEmpty()">
                                                            <td colspan="5" class="text-center py-3 text-gray-900 text-sm">Tidak ada data yang cocok.</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="flex mt-5">
                                                    <div class="border px-2 cursor-pointer" @click.prevent="changePage(1)">
                                                        <span class="text-gray-700">Pertama</span>
                                                    </div>
                                                    <div class="border px-2 cursor-pointer" @click="changePage(currentPage - 1)">
                                                        <span class="text-gray-700"><</span>
                                                    </div>
                                                    <template x-for="item in pages">
                                                        <div @click="changePage(item)" class="border px-2 cursor-pointer" x-bind:class="{ 'bg-gray-300': currentPage === item }">
                                                            <span class="text-gray-700" x-text="item"></span>
                                                        </div>
                                                    </template>
                                                    <div class="border px-2 cursor-pointer" @click="changePage(currentPage + 1)">
                                                        <span class="text-gray-700">></span>
                                                    </div>
                                                    <div class="border px-2 cursor-pointer" @click.prevent="changePage(pagination.lastPage)">
                                                        <span class="text-gray-700">Terakhir</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                let datauser = @json($users);
                            </script>
                            <script>
                                window.dataTable1 = function () {
                                    return {
                                        items: [],
                                        view: 5,
                                        searchInput: '',
                                        pages: [],
                                        offset: 5,
                                        pagination: {
                                            total: datauser.length,
                                            lastPage: Math.ceil(datauser.length / 5),
                                            perPage: 5,
                                            currentPage: 1,
                                            from: 1,
                                            to: 1 * 5
                                        },
                                        currentPage: 1,
                                        sorted: {
                                            field: 'name',
                                            rule: 'asc'
                                        },
                                        initData() {
                                            this.items = datauser.sort(this.compareOnKey('name', 'asc'))
                                            this.showPages()
                                        },
                                        compareOnKey(key, rule) {
                                            return function (a, b) {
                                                if (key === 'name' || key === 'sekolah') {
                                                    let comparison = 0
                                                    const fieldA = a[key].toUpperCase()
                                                    const fieldB = b[key].toUpperCase()
                                                    if (rule === 'asc') {
                                                        if (fieldA > fieldB) {
                                                            comparison = 1;
                                                        } else if (fieldA < fieldB) {
                                                            comparison = -1;
                                                        }
                                                    } else {
                                                        if (fieldA < fieldB) {
                                                            comparison = 1;
                                                        } else if (fieldA > fieldB) {
                                                            comparison = -1;
                                                        }
                                                    }
                                                    return comparison
                                                } else {
                                                    if (rule === 'asc') {
                                                        return a.year - b.year
                                                    } else {
                                                        return b.year - a.year
                                                    }
                                                }
                                            }
                                        },
                                        checkView(index) {
                                            return index > this.pagination.to || index < this.pagination.from ? false : true
                                        },
                                        checkPage(item) {
                                            if (item <= this.currentPage + 5) {
                                                return true
                                            }
                                            return false
                                        },
                                        search(value) {
                                            if (value.length > 1) {
                                                const options = {
                                                    shouldSort: true,
                                                    keys: ['name'],
                                                    threshold: 0
                                                }
                                                const fuse = new Fuse(datauser, options)
                                                this.items = fuse.search(value).map(elem => elem.item)
                                            } else {
                                                this.items = datauser
                                            }
                                            this.changePage(1)
                                            this.showPages()
                                        },
                                        sort(field, rule) {
                                            this.items = this.items.sort(this.compareOnKey(field, rule))
                                            this.sorted.field = field
                                            this.sorted.rule = rule
                                        },
                                        changePage(page) {
                                            if (page >= 1 && page <= this.pagination.lastPage) {
                                                this.currentPage = page
                                                const total = this.items.length
                                                const lastPage = Math.ceil(total / this.view) || 1
                                                const from = (page - 1) * this.view + 1
                                                let to = page * this.view
                                                if (page === lastPage) {
                                                    to = total
                                                }
                                                this.pagination.total = total
                                                this.pagination.lastPage = lastPage
                                                this.pagination.perPage = this.view
                                                this.pagination.currentPage = page
                                                this.pagination.from = from
                                                this.pagination.to = to
                                                this.showPages()
                                            }
                                        },
                                        showPages() {
                                            const pages = []
                                            let from = this.pagination.currentPage - Math.ceil(this.offset / 2)
                                            if (from < 1) {
                                                from = 1
                                            }
                                            let to = from + this.offset - 1
                                            if (to > this.pagination.lastPage) {
                                                to = this.pagination.lastPage
                                            }
                                            while (from <= to) {
                                                pages.push(from)
                                                from++
                                            }
                                            this.pages = pages
                                        },
                                        changeView() {
                                            this.changePage(1)
                                            this.showPages()
                                        },
                                        isEmpty() {
                                            return this.pagination.total ? false : true
                                        }
                                    }
                                }
                            </script>
                        </div>
                    </div>
                </template>
                <template x-if="tab === 'home'">
                    {{-- <div>


                        <div class="mb-5 rounded-md border border-[#ebedf2] bg-white p-4 dark:border-[#191e3a] dark:bg-[#0e1726]"
                            enctype="multipart/form-data" method="POST">

                            <input type="hidden" name="siswa_id">
                            @php
                                $hari = date('N');
                                $daftarHari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                            @endphp

                            <h6 class="mb-5 text-lg font-bold">Tanggal : {{ $daftarHari[$hari] }},
                                {{ date('d F Y') }}</h6>
                            <div class="flex flex-col sm:flex-row">
                                <table class="min-w-full text-left text-sm ">
                                    <thead class="border-rounded bg-[#E2E8F0] dark:border-neutral-500">
                                        <tr>
                                            <th scope="col" class="px-6 py-2">#</th>
                                            <th scope="col" class="px-6 py-2">Nama</th>

                                            <th scope="col" class="px-6 py-2">Deskripsi</th>
                                            <th scope="col" class="px-6 py-2">Aksi</th>
                                        </tr>
                                    </thead>
                                    @forelse ($jurnalSudahKirim as $key => $item)
                                        <tbody>
                                            <tr>
                                                <td class="whitespace-nowrap px-6 py-2">
                                                    {{ ($jurnalSudahKirim->currentPage() - 1) * $jurnalSudahKirim->perPage() + $key + 1 }}
                                                </td>
                                                <td class="whitespace-nowrap px-6 py-2">{{ $item->nama }}
                                                </td>

                                                <td class="whitespace-nowrap px-6 py-2">
                                                    {{ Str::limit($item->kegiatan, 17) }}
                                                </td>
                                                <td class="whitespace-nowrap px-4 py-4 kamu-tak-diajak">
                                                    <button type="button"
                                                        class="w-16 flex h-8 bg-white rounded-md border-2 border-[#00B7FF] justify-center items-center text-[#00B7FF] hover:bg-[#00B7FF] hover:text-white dark:bg-transparent"
                                                        data-te-toggle="modal"
                                                        data-modal-target="staticModal{{ $item->id }}"
                                                        data-modal-toggle="staticModal{{ $item->id }}">
                                                        <span
                                                            class=" p-1  font-semibold dark:hover:text-black">Lihat</span>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>

                                    @empty
                                    @endforelse
                            </div>
                        </div>
                        <div class="" class="mb-2">{{ $jurnalSudahKirim->links() }}</div>
                    </div> --}}
                    <div>
                        <div class="mb-5 rounded-md border border-[#ebedf2] bg-white p-4 dark:border-[#191e3a] dark:bg-[#0e1726]" enctype="multipart/form-data" method="POST">
                            <input type="hidden" name="siswa_id">
                            <input type="hidden" name="siswa_id">
                            <h6 class="mb-5 text-lg font-bold">Tanggal : {{ $hari }}</h6>
                            <div class="flex flex-col sm:flex-row">
                                <div class="w-full">
                                    <div class="w-full">
                                        <div >
                                            <div x-data="dataTable()"
                                                x-init="
                                                initData()
                                                $watch('searchInput', value => {
                                                    search(value)
                                                })" >
                                                <div class="flex justify-between items-center">
                                                    <div class="flex space-x-2 items-center">
                                                        <p>Tampilkan</p>
                                                        <select x-model="view" @change="changeView()">
                                                            <option value="5">5</option>
                                                            <option value="10">10</option>
                                                            <option value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="100">100</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <table class="mt-5">
                                                    <thead class="border-b-2">
                                                        <tr>
                                                            <th>#</th>
                                                            <th @click="sort('nama', sorted.rule === 'asc' ? 'desc' : 'asc')">Nama</th>
                                                            <th @click="sort('tanggal', sorted.rule === 'asc' ? 'desc' : 'asc')">Tanggal</th>
                                                            <th @click="sort('kegiatan', sorted.rule === 'asc' ? 'desc' : 'asc')">Keterangan</th>
                                                            <th @click="sort('aksi', sorted.rule === 'asc' ? 'desc' : 'asc')">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <template x-for="(item, index) in items" :key="index">
                                                            <tr x-data="{ showPopup: false }" x-show="checkView(index + 1)" class="hover:bg-gray-200 text-gray-900 text-xs">
                                                                <td class="py-3">
                                                                    <span x-text="index + 1"></span>
                                                                </td>
                                                                <td class="py-3">
                                                                    <span x-text="item.nama"></span>
                                                                </td>
                                                                <td class="py-3">
                                                                    <span x-text="item.tanggal"></span>
                                                                </td>
                                                                <td class="py-3">
                                                                    <span x-text="item.kegiatan"></span>
                                                                </td>
                                                                <td class="py-3">
                                                                    <span>
                                                                        <button onclick="openModal(document.getElementById('id').innerText)">Detail</button>
                                                                        <span x-text="item.id" id="id" class="hidden"></span>
                                                                    </span>
                                                                </td>

                                                            </tr>
                                                            <tr x-show="showPopup" class="text-gray-900 text-xs">
                                                                <td class="py-3" colspan="5">
                                                                    <div class="popup-content">
                                                                        <p>Name: <span x-text="item.nama"></span></p>
                                                                        <p>Date: <span x-text="item.tanggal"></span></p>
                                                                        <p>Activity: <span x-text="item.kegiatan"></span></p>
                                                                        <!-- Add other data fields as needed -->
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </template>
                                                        <tr x-show="isEmpty()">
                                                            <td colspan="5" class="text-center py-3 text-gray-900 text-sm">Tidak ada data yang cocok.</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div id="modal-tambah-rfid" class="modal fixed inset-0 flex items-center justify-center" style="display: none;">
                                                    <div class="modal-content bg-white p-6">
                                                        <h2 class="text-2xl font-bold mb-4">Tambah RFID</h2>
                                                        <input id="inputrfid" type="text" name="RFID"
                                                               class="border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full">
                                                        <div class="mt-6 flex justify-end">

                                                        </div>
                                                    </div>
                                                </div>
                                                <script>
                                                    document.addEventListener("DOMContentLoaded", function() {
                                                        // Mengaktifkan modal saat tombol diklik
                                                        document.getElementById('tambah-rfid').addEventListener('click', function() {
                                                            document.getElementById('modal-tambah-rfid').style.display = "flex";
                                                            document.getElementById('inputrfid').focus();
                                                        });

                                                        // Menutup modal saat tombol Batal diklik atau saat mengklik area luar modal
                                                        document.getElementById('modal-tambah-rfid').addEventListener('click', function(event) {
                                                            if (event.target === this || event.target.classList.contains('bg-red-500')) {
                                                                this.style.display = "none";
                                                            }
                                                        });
                                                    });
                                                </script>
                                                <div class="flex mt-5">
                                                    <div class="border px-2 cursor-pointer" @click.prevent="changePage(1)">
                                                        <span class="text-gray-700">Pertama</span>
                                                    </div>
                                                    <div class="border px-2 cursor-pointer" @click="changePage(currentPage - 1)">
                                                        <span class="text-gray-700"><</span>
                                                    </div>
                                                    <template x-for="item in pages">
                                                        <div @click="changePage(item)" class="border px-2 cursor-pointer" x-bind:class="{ 'bg-gray-300': currentPage === item }">
                                                            <span class="text-gray-700" x-text="item"></span>
                                                        </div>
                                                    </template>
                                                    <div class="border px-2 cursor-pointer" @click="changePage(currentPage + 1)">
                                                        <span class="text-gray-700">></span>
                                                    </div>
                                                    <div class="border px-2 cursor-pointer" @click.prevent="changePage(pagination.lastPage)">
                                                        <span class="text-gray-700">Terakhir</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                let datamengisi = @json($mengisi);
                            </script>
                            <script>
                                window.dataTable = function () {
                                    return {
                                        items: [],
                                        view: 5,
                                        searchInput: '',
                                        pages: [],
                                        offset: 5,
                                        pagination: {
                                            total: datamengisi.length,
                                            lastPage: Math.ceil(datamengisi.length / 5),
                                            perPage: 5,
                                            currentPage: 1,
                                            from: 1,
                                            to: 1 * 5
                                        },
                                        currentPage: 1,
                                        sorted: {
                                            field: 'nama',
                                            rule: 'asc'
                                        },
                                        initData() {
                                            this.items = datamengisi.sort(this.compareOnKey('nama', 'asc'))
                                            this.showPages()
                                        },
                                        compareOnKey(key, rule) {
                                            return function (a, b) {
                                                if (key === 'nama' || key === 'tanggal' || key === 'kegiatan' || key === 'image') {
                                                    let comparison = 0
                                                    const fieldA = a[key].toUpperCase()
                                                    const fieldB = b[key].toUpperCase()
                                                    if (rule === 'asc') {
                                                        if (fieldA > fieldB) {
                                                            comparison = 1;
                                                        } else if (fieldA < fieldB) {
                                                            comparison = -1;
                                                        }
                                                    } else {
                                                        if (fieldA < fieldB) {
                                                            comparison = 1;
                                                        } else if (fieldA > fieldB) {
                                                            comparison = -1;
                                                        }
                                                    }
                                                    return comparison
                                                } else {
                                                    if (rule === 'asc') {
                                                        return a.year - b.year
                                                    } else {
                                                        return b.year - a.year
                                                    }
                                                }
                                            }
                                        },
                                        checkView(index) {
                                            return index > this.pagination.to || index < this.pagination.from ? false : true
                                        },
                                        checkPage(item) {
                                            if (item <= this.currentPage + 5) {
                                                return true
                                            }
                                            return false
                                        },
                                        search(value) {
                                            if (value.length > 1) {
                                                const options = {
                                                    shouldSort: true,
                                                    keys: ['nama'],
                                                    threshold: 0
                                                }
                                                const fuse = new Fuse(datamengisi, options)
                                                this.items = fuse.search(value).map(elem => elem.item)
                                            } else {
                                                this.items = datamengisi
                                            }
                                            this.changePage(1)
                                            this.showPages()
                                        },
                                        sort(field, rule) {
                                            this.items = this.items.sort(this.compareOnKey(field, rule))
                                            this.sorted.field = field
                                            this.sorted.rule = rule
                                        },
                                        changePage(page) {
                                            if (page >= 1 && page <= this.pagination.lastPage) {
                                                this.currentPage = page
                                                const total = this.items.length
                                                const lastPage = Math.ceil(total / this.view) || 1
                                                const from = (page - 1) * this.view + 1
                                                let to = page * this.view
                                                if (page === lastPage) {
                                                    to = total
                                                }
                                                this.pagination.total = total
                                                this.pagination.lastPage = lastPage
                                                this.pagination.perPage = this.view
                                                this.pagination.currentPage = page
                                                this.pagination.from = from
                                                this.pagination.to = to
                                                this.showPages()
                                            }
                                        },
                                        showPages() {
                                            const pages = []
                                            let from = this.pagination.currentPage - Math.ceil(this.offset / 2)
                                            if (from < 1) {
                                                from = 1
                                            }
                                            let to = from + this.offset - 1
                                            if (to > this.pagination.lastPage) {
                                                to = this.pagination.lastPage
                                            }
                                            while (from <= to) {
                                                pages.push(from)
                                                from++
                                            }
                                            this.pages = pages
                                        },
                                        changeView() {
                                            this.changePage(1)
                                            this.showPages()
                                        },
                                        isEmpty() {
                                            return this.pagination.total ? false : true
                                        }
                                    }
                                }
                            </script>
                            <!-- Pastikan Anda menggunakan alpine.js versi 2 -->

                            <script>
                                window.alpineModal = function () {
                                    return {
                                        showModal: false,
                                        modalItemId: null,
                                        openModal(itemId) {
                                            this.showModal = true;
                                            this.modalItemId = itemId;
                                        },
                                    };
                                }
                            </script>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>

    <div>
        @forelse ($jurnalSudahKirim as $modal)
        <div id="staticModal{{ $modal->id }}" tabindex="-1" aria-hidden="true"
            class="kamu-tak-diajak fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full"
            x-data="{ showModal: true }"> <!-- Tambahkan atribut x-data dan variabel showModal -->
            <div class="relative w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700" x-show="showModal"> <!-- Tambahkan atribut x-show -->
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Detail Jurnal
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            onclick="closeModal('{{$modal->id}}')"> <!-- Tambahkan atribut x-on:click -->
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <!-- ... (isi konten modal lainnya sesuai dengan contoh yang diberikan sebelumnya) ... -->
                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="button" onclick="closeModal('{{ $modal->id }}')"
                            class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
        @empty
        @endforelse
    </div>


    <!-- end main content section -->

    <!-- start footer section -->
    <!-- end footer section -->
</div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
<script src="assets_guru/js/alpine-collaspe.min.js"></script>
<script src="assets_guru/js/alpine-persist.min.js"></script>
<script defer src="assets_guru/js/alpine-ui.min.js"></script>
<script defer src="assets_guru/js/alpine-focus.min.js"></script>
<script defer src="assets_guru/js/alpine.min.js"></script>
<script src="assets_guru/js/custom.js"></script>


<script>
    document.addEventListener('alpine:init', () => {
        // main section
        Alpine.data('scrollToTop', () => ({
            showTopButton: false,
            init() {
                window.onscroll = () => {
                    this.scrollFunction();
                };
            },

            scrollFunction() {
                if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                    this.showTopButton = true;
                } else {
                    this.showTopButton = false;
                }
            },

            goToTop() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            },
        }));

        // theme customization
        Alpine.data('customizer', () => ({
            showCustomizer: false,
        }));

        // sidebar section
        Alpine.data('sidebar', () => ({
            init() {
                const selector = document.querySelector('.sidebar ul a[href="' + window.location
                    .pathname + '"]');
                if (selector) {
                    selector.classList.add('active');
                    const ul = selector.closest('ul.sub-menu');
                    if (ul) {
                        let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                        if (ele) {
                            ele = ele[0];
                            setTimeout(() => {
                                ele.click();
                            });
                        }
                    }
                }
            },
        }));

        // header section
        Alpine.data('header', () => ({
            init() {
                const selector = document.querySelector('ul.horizontal-menu a[href="' + window
                    .location.pathname + '"]');
                if (selector) {
                    selector.classList.add('active');
                    const ul = selector.closest('ul.sub-menu');
                    if (ul) {
                        let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                        if (ele) {
                            ele = ele[0];
                            setTimeout(() => {
                                ele.classList.add('active');
                            });
                        }
                    }
                }
            },

            notifications: [{
                    id: 1,
                    profile: 'user-profile.jpeg',
                    message: '<strong class="text-sm mr-1">John Doe</strong>invite you to <strong>Prototyping</strong>',
                    time: '45 min ago',
                },
                {
                    id: 2,
                    profile: 'profile-34.jpeg',
                    message: '<strong class="text-sm mr-1">Adam Nolan</strong>mentioned you to <strong>UX Basics</strong>',
                    time: '9h Ago',
                },
                {
                    id: 3,
                    profile: 'profile-16.jpeg',
                    message: '<strong class="text-sm mr-1">Anna Morgan</strong>Upload a file',
                    time: '9h Ago',
                },
            ],

            messages: [{
                    id: 1,
                    image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-success-light dark:bg-success text-success dark:text-success-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></span>',
                    title: 'Congratulations!',
                    message: 'Your OS has been updated.',
                    time: '1hr',
                },
                {
                    id: 2,
                    image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-info-light dark:bg-info text-info dark:text-info-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg></span>',
                    title: 'Did you know?',
                    message: 'You can switch between artboards.',
                    time: '2hr',
                },
                {
                    id: 3,
                    image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-danger-light dark:bg-danger text-danger dark:text-danger-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>',
                    title: 'Something went wrong!',
                    message: 'Send Reposrt',
                    time: '2days',
                },
                {
                    id: 4,
                    image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-warning-light dark:bg-warning text-warning dark:text-warning-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">    <circle cx="12" cy="12" r="10"></circle>    <line x1="12" y1="8" x2="12" y2="12"></line>    <line x1="12" y1="16" x2="12.01" y2="16"></line></svg></span>',
                    title: 'Warning',
                    message: 'Your password strength is low.',
                    time: '5days',
                },
            ],

            languages: [{
                    id: 1,
                    key: 'Chinese',
                    value: 'zh',
                },
                {
                    id: 2,
                    key: 'Danish',
                    value: 'da',
                },
                {
                    id: 3,
                    key: 'English',
                    value: 'en',
                },
                {
                    id: 4,
                    key: 'French',
                    value: 'fr',
                },
                {
                    id: 5,
                    key: 'German',
                    value: 'de',
                },
                {
                    id: 6,
                    key: 'Greek',
                    value: 'el',
                },
                {
                    id: 7,
                    key: 'Hungarian',
                    value: 'hu',
                },
                {
                    id: 8,
                    key: 'Italian',
                    value: 'it',
                },
                {
                    id: 9,
                    key: 'Japanese',
                    value: 'ja',
                },
                {
                    id: 10,
                    key: 'Polish',
                    value: 'pl',
                },
                {
                    id: 11,
                    key: 'Portuguese',
                    value: 'pt',
                },
                {
                    id: 12,
                    key: 'Russian',
                    value: 'ru',
                },
                {
                    id: 13,
                    key: 'Spanish',
                    value: 'es',
                },
                {
                    id: 14,
                    key: 'Swedish',
                    value: 'sv',
                },
                {
                    id: 15,
                    key: 'Turkish',
                    value: 'tr',
                },
            ],

            removeNotification(value) {
                this.notifications = this.notifications.filter((d) => d.id !== value);
            },

            removeMessage(value) {
                this.messages = this.messages.filter((d) => d.id !== value);
            },
        }));
    });
</script>
<script>
    $(window).on('load', function() {
        $('.spin_load').fadeOut();
    });
</script>


</div>



<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script>
    $(window).on('load', function() {
        $('.spin_load').fadeOut();
    });
</script>
<script>
    const instanceMode = te.Sidenav.getInstance(
        document.getElementById("sidenav-2")
    );
    const modes = ["side"];

    modes.forEach((mode) => {
        const modeSwitch = document.getElementById(mode);
        modeSwitch.addEventListener("click", () => {
            const instance = te.Sidenav.getInstance(
                document.getElementById("sidenav-2")
            );
            instance.changeMode(mode);
            modes.forEach((el) => {
                if (el === mode) {
                    ["text-primary-600", "border-primary-600"].forEach((item) =>
                        modeSwitch.classList.remove(item)
                    );
                    modeSwitch.className +=
                        " bg-primary text-white hover:bg-primary-700 active:bg-primary-800 focus:bg-primary-700 border-transparent";
                } else {
                    const node = document.getElementById(el);
                    node.className += " text-primary-600 border-primary-600";
                    [

                    ].forEach((item) => node.classList.remove(item));
                }
            });
        });
    });
</script>
<script>
    // Initialization for ES Users
    import {
        sidenav - 2,
        initTE,
    } from "tw-elements";

    initTE({
        sidenav - 2
    });
</script>
<script>
    function openModal(id) {
        $(`#staticModal${id}`).show();
    }

    function closeModal(id) {
        $(`#staticModal${id}`).hide();
    }
</script>

</body>

</html>
