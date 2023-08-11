<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        theme: {
            extend: {
                blur: {
                    xs: '3px',
                  }
            },
          },

    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <link rel="stylesheet" href="load/load.css">
    <link href="/admin/assets/images/Logo.png" rel="shortcut icon">
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" type="text/css" media="screen" href="assets_guru/css/perfect-scrollbar.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets_guru/css/style.css" />
    <link defer rel="stylesheet" type="text/css" media="screen" href="assets_guru/css/animate.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="load/load.css">
    <style>
        /* CSS for the backdrop */
        [data-modal-backdrop] {
          backdrop-filter: blur(8px);
          -webkit-backdrop-filter: blur(8px);
          background-color: rgba(0, 0, 0, 0.5); /* Add the desired background color for the backdrop */
          display: flex;
          justify-content: center;
          align-items: center;
        }

        /* Center the modal and apply styles for the blurred backdrop */
        [data-modal-backdrop] + div {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          z-index: 999;

        }
      </style>

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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

        <!-- CSS Assets -->
        <link rel="stylesheet" href="admin/css/app.css" />

        <!-- Javascript Assets -->
        <script src="admin/js/app.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" integrity="sha384-gdQbyN9LczCIf57N+9C6Ljo9M7WtY1fcaBUPMaFRPYALMcKjbT4a84XGtEDlO80O" crossorigin="anonymous"></script>
</head>

<body>
      <!-- screen loader -->
      <div  class="spin_load  screen_loader animate__animated fixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
        <div class="center">
            <div class="ring">
            </div>
            <img src="load/logo.png" alt="Deskripsi gambar" class="my-img">
        </div>
    </div>
    @include('jurnal_admin.layout')

    <div class=" pl-[px] " id="content">


       <!-- Navbar -->
        <nav id="main-navbar"
        class="kamu-tak-diajak sticky left-0  right-0 top-0 flex z-10  flex-nowrap items-center justify-between bg-white py-[0.6rem] text-gray-500 shadow-lg hover:text-gray-700 focus:text-gray-700 dark:bg-zinc-700 lg:flex-wrap lg:justify-start fixed"
        data-te-navbar-ref>
        <!-- Container wrapper -->

        <div class="flex w-full flex-wrap items-center justify-between px-4 ">
            <div class="flex gap-4">
                <!-- Toggler -->
                <div class="flex items-center justify-between ltr:mr-2 rtl:ml-2 ">
                    <a href="index-2.html" class="main-logo flex shrink-9 items-center">
                        <img class="inline w-40 ltr:-ml-1 rtl:-mr-1 hidden" src="{{ asset('admin/assets/images/humma.png') }}"
                            alt="image" />
                    </a>
                </div>
                <button
                    class="mt-0.5 inline-block rounded bg-info px-3 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-200 hover:shadow-lg "
                    data-te-sidenav-toggle-ref data-te-target="#sidenav-2" aria-controls="#sidenav-2" aria-haspopup="true">
                    <span class="block [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->

                            <path fill="currentColor"
                                d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                        </svg>
                    </span>
                </button>
                <!-- Toggler -->

                <!-- Search form -->


            </div>

            <!-- Right links -->
            <ul class="relative flex items-center">
                <!-- Notification dropdown -->







                <!-- Avatar -->
                <li class="relative" data-te-dropdown-ref>
                    <a class="hidden-arrow flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none"
                        href="#" id="navbarDropdownMenuLink" role="button" data-te-dropdown-toggle-ref
                        aria-expanded="false">
                        <img src="{{ asset('admin/assets/images/Logo.png') }}" class="rounded-full"
                            style="height: 32px; width: 32px" alt="Avatar" loading="lazy" />
                    </a>
                    <ul class="absolute left-auto right-0 z-[1000] float-left m-0 mt-5 hidden min-w-[10rem] list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-zinc-700 [&[data-te-dropdown-show]]:block"
                        aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>

                        <li>
                            <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                                href="{{ route('keluar') }}" data-te-dropdown-item-ref>Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Container wrapper -->
        </nav>

        <div class="animate__animated p-6" :class="[$store.app.animation]">
            <!-- start main content section -->
            <div>
                <ul class="flex space-x-2 rtl:space-x-reverse">

                </ul>
                <div class="pt-0">
                    <div class="mb-5 flex items-center justify-between">
                        <h5 class="text-sm font-semibold dark:text-white-light">Absensi Hari ini </h5>
                        <!-- Date Range -->
                        <div class=" pb-0 sm:px-5">

                            <div class="mt-2 font-semibold max-w-xl">
                                Filter Tanggal
                            <div class="mt-2">
                                <form action="" id="tanggal">
                                    <label class="relative flex">
                                        <input x-init="$el._x_flatpickr = flatpickr($el, { mode: 'range', dateFormat: 'Y-m-d'})"
                                            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Choose date..." type="text" name="cari"
                                            value="{{ $hari }}" onchange="filterTanggal(this.value)" />
                                        <button type="submit" class="hidden">Submit</button>
                                </form>


                                    <script>
                                        let clickCounter = 0;

                                        function filterTanggal(data) {
                                            const str = data;
                                            const keyword = "to";
                                            const regex = new RegExp(`\\b${keyword}\\b`, "i");

                                            const result = str.match(regex);
                                            const selectedDate = parseDate(str);

                                            if (result || (!result && clickCounter === 1)) {
                                                document.getElementById('tanggal').submit();
                                            } else {
                                                clickCounter = 0; // Reset click counter if "to" keyword is not present and not auto-submitting
                                                clickCounter++;
                                            }
                                        }

                                        function parseDate(dateStr) {
                                            const dates = dateStr.split(" to ");
                                            return dates.length === 2 ? dates[0] : null;
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
                                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                                >
                                    <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 transition-colors duration-200"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="1.5"
                                    >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                                    />
                                    </svg>
                                </span>
                                </label>
                            </div>
                            </div>

                        </div>
                    </div>
                    <div x-data="{ tab: 'semua' }">
                        <ul
                            class="mb-5 overflow-y-auto whitespace-nowrap border-b border-[#ebedf2] font-semibold dark:border-[#191e3a] sm:flex">
                            <li class="inline-block">
                                <a href="javascript:;"
                                    class="flex gap-2 border-b border-transparent p-4 hover:border-primary hover:text-primary"
                                    :class="{ '!border-primary text-primary': tab == 'home' }"
                                    @click="tab='home'">

                                    Hadir
                                </a>
                            </li>
                            <li class="inline-block">
                                <a href="javascript:;"
                                    class="flex gap-2 border-b border-transparent p-4 hover:border-primary hover:text-primary"
                                    :class="{ '!border-primary text-primary': tab == 'izin&sakit' }"
                                    @click="tab='izin&sakit'">

                                    Izin & Sakit
                                </a>
                            </li>
                            <li class="inline-block">
                                <a href="javascript:;"
                                    class="flex gap-2 border-b border-transparent p-4 hover:border-primary hover:text-primary"
                                    :class="{ '!border-primary text-primary': tab == 'telat' }"
                                    @click="tab='telat'">

                                    Telat
                                </a>
                            </li>
                            <li class="inline-block">
                                <a href="javascript:;"
                                    class="flex gap-2 border-b border-transparent p-4 hover:border-primary hover:text-primary"
                                    :class="{ '!border-primary text-primary': tab == 'alfa' }"
                                    @click="tab='alfa'">

                                    Alfa
                                </a>
                            </li>
                            <li class="inline-block">
                                <a href="javascript:;"
                                    class="flex gap-2 border-b border-transparent p-4 hover:border-primary hover:text-primary"
                                    :class="{ '!border-primary text-primary': tab == 'tidak_mengisi_absen' }"
                                    @click="tab='tidak_mengisi_absen'">

                                    Pengecekan Admin
                                </a>
                            </li>
                            <li class="inline-block active">
                                <a href="javascript:;"
                                    class="flex gap-2 border-b border-transparent p-4 hover:border-primary hover:text-primary "
                                    :class="{ '!border-primary text-primary': tab == 'semua' }"
                                    @click="tab='semua'" >

                                    semua
                                </a>
                            </li>
                            <li>



                            </li>
                        </ul>

                        <template x-if="tab === 'home'">
                            <div>


                                <div
                                    class="mb-5 rounded-md border border-[#ebedf2] bg-white p-4 dark:border-[#191e3a] dark:bg-[#0e1726]" enctype="multipart/form-data" method="POST">

                                    <input type="hidden" name="siswa_id" >
                                    <h6 class="mb-5 text-lg font-bold">Tanggal : {{$hari}}</h6>
                                    <div class="flex flex-col sm:flex-row">

                                        <div class="w-full">
                                            <div class="w-full">
                                              <div class="">
                                                <div x-data="dataTable()"
                                                  x-init="
                                                  initData()
                                                  $watch('searchInput', value => {
                                                    search(value)
                                                  })" class="">
                                                  <div class="flex justify-between items-center">
                                                    <div class="flex space-x-2 items-center">
                                                      <p>Tampilkan</p>
                                                      <select class="border border-1" x-model="view" @change="changeView()">
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
                                                            <th @click="sort('keterangan', sorted.rule === 'asc' ? 'desc' : 'asc')">Keterangan</th>
                                                            <th @click="sort('jam', sorted.rule === 'asc' ? 'desc' : 'asc')">jam</th>
                                                          </tr>
                                                    </thead>
                                                    <tbody>
                                                      <template x-for="(item, index) in items" :key="index">

                                                        <tr x-show="checkView(index + 1)" class="hover:bg-gray-200 text-gray-900 text-xs">
                                                          <td class="py-3">
                                                            <span x-text="index+1"></span>
                                                          </td>
                                                          <td class="py-3">
                                                            <span x-text="item.user_name"></span>
                                                          </td>
                                                          <td class="py-3">
                                                            <span x-text="item.tanggal"></span>
                                                          </td>
                                                          <td class="py-3">
                                                            <span x-text="item.keterangan"></span>
                                                          </td>
                                                          <td class="py-3">
                                                            <span x-text="item.jam">

                                                            </span>

                                                          </td>

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
                                                      <div @click="changePage(item)" class="border px-2 cursor-pointer"
                                                        x-bind:class="{ 'bg-gray-300': currentPage === item }">
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

                                        <script>
                                            let hadir = @json($hadir);
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
                                                    total: hadir.length,
                                                    lastPage: Math.ceil(hadir.length / 5),
                                                    perPage: 5,
                                                    currentPage: 1,
                                                    from: 1,
                                                    to: 1 * 5
                                                },
                                                currentPage: 1,
                                                sorted: {
                                                    field: 'user_name',
                                                    rule: 'asc'
                                                },
                                                initData() {
                                                    this.items = hadir.sort(this.compareOnKey('user_name', 'asc'))
                                                    this.showPages()
                                                },
                                                compareOnKey(key, rule) {
                                                    return function(a, b) {
                                                    if (key === 'user_name' || key === 'tanggal' || key === 'keterangan' || key === 'jam')  {
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
                                                        keys: ['user_name'],
                                                        threshold: 0
                                                    }
                                                    const fuse = new Fuse(hadir, options)
                                                    this.items = fuse.search(value).map(elem => elem.item)
                                                    } else {
                                                    this.items = hadir
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
                            </div>
                        </template>
                        <template x-if="tab === 'izin&sakit'">


                                <div>
                                    <div class="mb-5 rounded-md border border-[#ebedf2] bg-white p-4 dark:border-[#191e3a] dark:bg-[#0e1726]" enctype="multipart/form-data" method="POST">
                                        <input type="hidden" name="siswa_id">
                                        <h6 class="mb-5 text-lg font-bold">Tanggal: {{$hari}}</h6>
                                        <div class="flex flex-col sm:flex-row">
                                            <div class="w-full">
                                                <div class="w-full">
                                                    <div class="">
                                                        <div x-data="tasikan()" x-init="initData()" class="">
                                                            <div class="flex justify-between items-center">
                                                                <div class="flex space-x-2 items-center">
                                                                  <p>Tampilkan</p>
                                                                  <select class="border border-1" x-model="view" @change="changeView()">
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
                                                                <th @click="sort('keterangan', sorted.rule === 'asc' ? 'desc' : 'asc')">Keterangan</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <template x-for="(item, index) in items" :key="index">
                                                                <tr x-show="checkView(index + 1)" class="hover:bg-gray-200 text-gray-900 text-xs">
                                                                <td class="py-3">
                                                                    <span x-text="index + 1"></span>
                                                                </td>
                                                                <td class="py-3">
                                                                    <span x-text="item.user_name"></span>
                                                                </td>
                                                                <td class="py-3">
                                                                    <span x-text="item.tanggal"></span>
                                                                </td>
                                                                <td class="py-3">
                                                                    <span x-text="item.keterangan"></span>
                                                                </td>

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
                                            // Mengambil data untuk tabel ketiga dari server/database
                                            const dataTasikan = @json($sakit); // Gantilah dengan cara mengambil data dari server

                                            window.tasikan = function () {
                                            return {
                                                items: [],
                                                view: 5,
                                                searchInput: '',
                                                pages: [],
                                                offset: 5,
                                                pagination: {
                                                total: dataTasikan.length,
                                                lastPage: Math.ceil(dataTasikan.length / 5),
                                                perPage: 5,
                                                currentPage: 1,
                                                from: 1,
                                                to: 1 * 5
                                                },
                                                currentPage: 1,
                                                sorted: {
                                                field: 'user_name',
                                                rule: 'asc'
                                                },
                                                initData() {
                                                this.items = dataTasikan.sort(this.compareOnKey('user_name', 'asc'));
                                                this.showPages();
                                                },
                                                compareOnKey(key, rule) {
                                                return function(a, b) {
                                                    if (key === 'user_name' || key === 'tanggal' || key === 'keterangan' ) {
                                                    let comparison = 0;
                                                    const fieldA = a[key].toUpperCase();
                                                    const fieldB = b[key].toUpperCase();
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
                                                    return comparison;
                                                    } else {
                                                    if (rule === 'asc') {
                                                        return a.year - b.year;
                                                    } else {
                                                        return b.year - a.year;
                                                    }
                                                    }
                                                }
                                                },
                                                checkView(index) {
                                                return index > this.pagination.to || index < this.pagination.from ? false : true;
                                                },
                                                checkPage(item) {
                                                if (item <= this.currentPage + 5) {
                                                    return true;
                                                }
                                                return false;
                                                },
                                                search(value) {
                                                if (value.length > 1) {
                                                    const options = {
                                                    shouldSort: true,
                                                    keys: ['user_name'],
                                                    threshold: 0
                                                    }
                                                    const fuse = new Fuse(dataTasikan, options);
                                                    this.items = fuse.search(value).map(elem => elem.item);
                                                } else {
                                                    this.items = dataTasikan;
                                                }
                                                this.changePage(1);
                                                this.showPages();
                                                },
                                                sort(field, rule) {
                                                this.items = this.items.sort(this.compareOnKey(field, rule));
                                                this.sorted.field = field;
                                                this.sorted.rule = rule;
                                                },
                                                changePage(page) {
                                                if (page >= 1 && page <= this.pagination.lastPage) {
                                                    this.currentPage = page;
                                                    const total = this.items.length;
                                                    const lastPage = Math.ceil(total / this.view) || 1;
                                                    const from = (page - 1) * this.view + 1;
                                                    let to = page * this.view;
                                                    if (page === lastPage) {
                                                    to = total;
                                                    }
                                                    this.pagination.total = total;
                                                    this.pagination.lastPage = lastPage;
                                                    this.pagination.perPage = this.view;
                                                    this.pagination.currentPage = page;
                                                    this.pagination.from = from;
                                                    this.pagination.to = to;
                                                    this.showPages();
                                                }
                                                },
                                                showPages() {
                                                const pages = [];
                                                let from = this.pagination.currentPage - Math.ceil(this.offset / 2);
                                                if (from < 1) {
                                                    from = 1;
                                                }
                                                let to = from + this.offset - 1;
                                                if (to > this.pagination.lastPage) {
                                                    to = this.pagination.lastPage;
                                                }
                                                while (from <= to) {
                                                    pages.push(from);
                                                    from++;
                                                }
                                                this.pages = pages;
                                                },
                                                changeView() {
                                                this.changePage(1);
                                                this.showPages();
                                                },
                                                isEmpty() {
                                                return this.pagination.total ? false : true;
                                                }
                                            }
                                            }
                                        </script>
                                    </div>
                                </div>
                        </template>
                        <template x-if="tab === 'telat'">
                            <!-- Tabel Kedua -->

                            <div>
                                <div class="mb-5 rounded-md border border-[#ebedf2] bg-white p-4 dark:border-[#191e3a] dark:bg-[#0e1726]" enctype="multipart/form-data" method="POST">
                                    <input type="hidden" name="siswa_id">
                                    <h6 class="mb-5 text-lg font-bold">Tanggal: {{$hari}}</h6>
                                    <div class="flex flex-col sm:flex-row">
                                        <div class="w-full">
                                            <div class="w-full">
                                                <div class="">
                                                    <div x-data="dataTable1()"
                                                        x-init="
                                                        initData()
                                                        $watch('searchInput', value => {
                                                            search(value)
                                                        })" class="">
                                                        <div class="flex justify-between items-center">
                                                            <div class="flex space-x-2 items-center">
                                                                <p>Tampilkan</p>
                                                                <select class="border border-1" x-model="view" @change="changeView()">
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
                                                                    <th @click="sort('keterangan', sorted.rule === 'asc' ? 'desc' : 'asc')">Keterangan</th>
                                                                    <th @click="sort('jam', sorted.rule === 'asc' ? 'desc' : 'asc')">Jam</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <template x-for="(item, index) in items" :key="index">
                                                                    <tr x-show="checkView(index + 1)" class="hover:bg-gray-200 text-gray-900 text-xs">
                                                                        <td class="py-3">
                                                                            <span x-text="index + 1"></span>
                                                                        </td>
                                                                        <td class="py-3">
                                                                            <span x-text="item.user_name"></span>
                                                                        </td>
                                                                        <td class="py-3">
                                                                            <span x-text="item.tanggal"></span>
                                                                        </td>
                                                                        <td class="py-3">
                                                                            <span x-text="item.keterangan"></span>
                                                                        </td>
                                                                        <td class="py-3">
                                                                            <span x-text="item.jam"></span>
                                                                        </td>
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
                                        let datatelat = @json($telat);
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
                                                    total: datatelat.length,
                                                    lastPage: Math.ceil(datatelat.length / 5),
                                                    perPage: 5,
                                                    currentPage: 1,
                                                    from: 1,
                                                    to: 1 * 5
                                                },
                                                currentPage: 1,
                                                sorted: {
                                                    field: 'user_name',
                                                    rule: 'asc'
                                                },
                                                initData() {
                                                    this.items = datatelat.sort(this.compareOnKey('user_name', 'asc'))
                                                    this.showPages()
                                                },
                                                compareOnKey(key, rule) {
                                                    return function (a, b) {
                                                        if (key === 'user_name' || key === 'tanggal' || key === 'keterangan' || key === 'jam') {
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
                                                            keys: ['user_name'],
                                                            threshold: 0
                                                        }
                                                        const fuse = new Fuse(datatelat, options)
                                                        this.items = fuse.search(value).map(elem => elem.item)
                                                    } else {
                                                        this.items = datatelat
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
                        <template x-if="tab === 'alfa'">

                            <div>
                                <div class="mb-5 rounded-md border border-[#ebedf2] bg-white p-4 dark:border-[#191e3a] dark:bg-[#0e1726]" enctype="multipart/form-data" method="POST">
                                    <input type="hidden" name="siswa_id">
                                    <h6 class="mb-5 text-lg font-bold">Tanggal: {{$hari}}</h6>
                                    <div class="flex flex-col sm:flex-row">
                                        <div class="w-full">
                                            <div class="w-full">
                                                <div class="">
                                                    <div x-data="dataTable2()"
                                                        x-init="
                                                        initData()
                                                        $watch('searchInput', value => {
                                                            search(value)
                                                        })" class="">
                                                        <div class="flex justify-between items-center">
                                                            <div class="flex space-x-2 items-center">
                                                                <p>Tampilkan</p>
                                                                <select class="border border-1" x-model="view" @change="changeView()">
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
                                                                    <th @click="sort('keterangan', sorted.rule === 'asc' ? 'desc' : 'asc')">Keterangan</th>
                                                                    {{-- <th @click="sort('jam', sorted.rule === 'asc' ? 'desc' : 'asc')">Jam</th> --}}
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <template x-for="(item, index) in items" :key="index">
                                                                    <tr x-show="checkView(index + 1)" class="hover:bg-gray-200 text-gray-900 text-xs">
                                                                        <td class="py-3">
                                                                            <span x-text="index + 1"></span>
                                                                        </td>
                                                                        <td class="py-3">
                                                                            <span x-text="item.user_name"></span>
                                                                        </td>
                                                                        <td class="py-3">
                                                                            <span x-text="item.tanggal"></span>
                                                                        </td>
                                                                        <td class="py-3">
                                                                            <span x-text="item.keterangan"></span>
                                                                        </td>
                                                                        {{-- <td class="py-3">
                                                                            <span x-text="item.jam"></span>
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
                                        let dataalfa = @json($alfa);
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
                                                    total: dataalfa.length,
                                                    lastPage: Math.ceil(dataalfa.length / 5),
                                                    perPage: 5,
                                                    currentPage: 1,
                                                    from: 1,
                                                    to: 1 * 5
                                                },
                                                currentPage: 1,
                                                sorted: {
                                                    field: 'user_name',
                                                    rule: 'asc'
                                                },
                                                initData() {
                                                    this.items = dataalfa.sort(this.compareOnKey('user_name', 'asc'))
                                                    this.showPages()
                                                },
                                                compareOnKey(key, rule) {
                                                    return function (a, b) {
                                                        if (key === 'user_name' || key === 'tanggal' || key === 'keterangan' || key === 'jam') {
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
                                                            keys: ['user_name'],
                                                            threshold: 0
                                                        }
                                                        const fuse = new Fuse(dataalfa, options)
                                                        this.items = fuse.search(value).map(elem => elem.item)
                                                    } else {
                                                        this.items = dataalfa
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
                        <template x-if="tab === 'tidak_mengisi_absen'">
                            <div>
                                <div class="mb-5 rounded-md border border-[#ebedf2] bg-white p-4 dark:border-[#191e3a] dark:bg-[#0e1726]" enctype="multipart/form-data" method="POST">
                                    <input type="hidden" name="siswa_id">
                                    <h6 class="mb-5 text-lg font-bold">Tanggal: {{$today}}</h6>
                                    <div class="flex flex-col sm:flex-row">
                                        <div class="w-full">
                                            <div class="w-full">
                                                <div class="">
                                                    <div x-data="dataTable3()"
                                                        x-init="
                                                        initData()
                                                        $watch('searchInput', value => {
                                                            search(value)
                                                        })" class="">
                                                        <div class="flex justify-between items-center">
                                                            <div class="flex space-x-2 items-center">
                                                                <p>Tampilkan</p>
                                                                <select class="border border-1" x-model="view" @change="changeView()">
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
                                                                    <th @click="sort('name', sorted.rule === 'asc' ? 'desc' : 'asc')">Nama</th>
                                                                    <th @click="sort('sekolah', sorted.rule === 'asc' ? 'desc' : 'asc')">sekolah</th>
                                                                    <th @click="sort('Aksi', sorted.rule === 'asc' ? 'desc' : 'asc')">Aksi</th>
                                                                    {{-- <th @click="sort('keterangan', sorted.rule === 'asc' ? 'desc' : 'asc')">Keterangan</th>
                                                                    <th @click="sort('jam', sorted.rule === 'asc' ? 'desc' : 'asc')">Jam</th> --}}
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
                                                                        <td>
                                                                        <button type="submit" class="border border-blue-400 px-2 py-1 hover:bg-blue-400 hover:text-white rounded" @click="openModal(item.id, 'Hadir')">Hadir</button>
                                                                        <button type="submit" class="border border-yellow-400 px-2 py-1 hover:bg-yellow-400 hover:text-white  rounded" @click="openModal(item.id, 'izin')">Izin</button>
                                                                        <button type="submit" class="border border-red-400 px-2 py-1 hover:bg-red-400 hover:text-white rounded" @click="openModal(item.id, 'alfa')">Alfa</button>
                                                                        <button type="submit" class="border border-yellow-400 px-2 py-1 hover:bg-yellow-400 hover:text-white rounded" @click="openModal(item.id, 'sakit')">Sakit</button>
                                                                        </td>
                                                                        {{-- <td class="py-3">
                                                                            <span x-text="item.keterangan"></span>
                                                                        </td>
                                                                        <td class="py-3">
                                                                            <span x-text="item.jam"></span>
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
                                        let datasiswa = @json($siswa);
                                    </script>
                                    <script>
                                        window.dataTable3 = function () {
                                            return {
                                                items: [],
                                                view: 5,
                                                searchInput: '',
                                                pages: [],
                                                offset: 5,
                                                pagination: {
                                                    total: datasiswa.length,
                                                    lastPage: Math.ceil(datasiswa.length / 5),
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
                                                    this.items = datasiswa.sort(this.compareOnKey('nama', 'asc'))
                                                    this.showPages()
                                                },
                                                compareOnKey(key, rule) {
                                                    return function (a, b) {
                                                        if (key === 'name' || key === 'sekolah' ) {
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
                                                        const fuse = new Fuse(datasiswa, options)
                                                        this.items = fuse.search(value).map(elem => elem.item)
                                                    } else {
                                                        this.items = datasiswa
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
                        <template x-if="tab === 'semua'">
                            <div>
                                <div class="mb-5 rounded-md border border-[#ebedf2] bg-white p-4 dark:border-[#191e3a] dark:bg-[#0e1726]" enctype="multipart/form-data" method="POST">
                                    <input type="hidden" name="siswa_id">
                                    <h6 class="mb-5 text-lg font-bold">Tanggal: {{$hari}}</h6>
                                    <div class="flex flex-col sm:flex-row">
                                        <div class="w-full">
                                            <div class="w-full">
                                                <div class="">
                                                    <div x-data="dataTable4()"
                                                        x-init="
                                                        initData()
                                                        $watch('searchInput', value => {
                                                            search(value)
                                                        })" class="">
                                                        <div class="flex justify-between items-center">
                                                            <div class="flex space-x-2 items-center">
                                                                <p>Tampilkan</p>
                                                                <select class="border border-1" x-model="view" @change="changeView()">
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
                                                                    <th @click="sort('keterangan', sorted.rule === 'asc' ? 'desc' : 'asc')">Keterangan</th>
                                                                    {{-- <th @click="sort('jam', sorted.rule === 'asc' ? 'desc' : 'asc')">Jam</th> --}}
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <template x-for="(item, index) in items" :key="index">
                                                                    <tr x-show="checkView(index + 1)" class="hover:bg-gray-200 text-gray-900 text-xs">
                                                                        <td class="py-3">
                                                                            <span x-text="index + 1"></span>
                                                                        </td>
                                                                        <td class="py-3">
                                                                            <span x-text="item.user_name"></span>
                                                                        </td>
                                                                        <td class="py-3">
                                                                            <span x-text="item.tanggal"></span>
                                                                        </td>
                                                                        <td class="py-3">
                                                                            <span x-text="item.keterangan"></span>
                                                                        </td>
                                                                            {{-- <td class="py-3">
                                                                                <span x-text="item.jam"></span>
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
                                        let datasemua = @json($semua);
                                    </script>
                                    <script>
                                        window.dataTable4 = function () {
                                            return {
                                                items: [],
                                                view: 5,
                                                searchInput: '',
                                                pages: [],
                                                offset: 5,
                                                pagination: {
                                                    total: datasemua.length,
                                                    lastPage: Math.ceil(datasemua.length / 5),
                                                    perPage: 5,
                                                    currentPage: 1,
                                                    from: 1,
                                                    to: 1 * 5
                                                },
                                                currentPage: 1,
                                                sorted: {
                                                    field: 'user_name',
                                                    rule: 'asc'
                                                },
                                                initData() {
                                                    this.items = datasemua.sort(this.compareOnKey('user_name', 'asc'))
                                                    this.showPages()
                                                },
                                                compareOnKey(key, rule) {
                                                    return function (a, b) {
                                                        if (key === 'user_name' || key === 'tanggal' || key === 'keterangan' || key === 'jam') {
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
                                                            keys: ['user_name'],
                                                            threshold: 0
                                                        }
                                                        const fuse = new Fuse(datasemua, options)
                                                        this.items = fuse.search(value).map(elem => elem.item)
                                                    } else {
                                                        this.items = datasemua
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
                    </div>
                </div>

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
        $(window).on('load', function() {
            $('.spin_load').fadeOut();
        });
    </script>


    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"></script>

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
        function openModal(id, keterangan) {
            if (id.value == "") {
                console.log("Kosong");
                $('#listmenu').empty();
                $('#wadah').removeClass('hidden');
                return;
            } else {
                // Mengganti pesan log dengan SweetAlert
                Swal.fire({
                    title: 'Apakah Anda yakin menerima ini?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Ya',
                    cancelButtonText: 'Tidak'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $(document).ready(function() {
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                        });

                        $.ajax({
                            url: "{{route('Hadir.index')}}",
                            method: 'POST',
                            data: {
                                id: id,
                                keterangan: keterangan,
                            },
                            success: function(response) {
                                reload();
                                console.log(response);
                                toastr.success("berhasil memberikan keterangan hadir");
                                // Lakukan tindakan lain setelah berhasil, seperti menampilkan pesan atau mereload halaman
                            },
                            error: function(xhr, ajaxOptions, throwError) {
                                Swal.fire({
                                    title: 'Error!',
                                    text: 'Terjadi kesalahan saat melakukan permintaan.',
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                });
                                console.log(xhr);
                                console.log(throwError);
                            }
                        });
                    }
                });
            }
        }

        function closeModal(id) {
            $(`#staticModal${id}`).hide();
        }
    </script>
    <script>
            $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        function cari(data) {
            if (data.value == "") {
                console.log("Kosong")
                $('#listmenu').empty();
                $('#wadah').removeClass('hidden');
                return;
            } else {
                $.ajax({
                    url: "{{ route('cari_barang') }}",
                    method: 'POST',
                    data: {
                        value: data.value,
                    },
                    success: function(response) {
                        $('#wadah').addClass('hidden');
                        $('#listmenu').empty();
                        $.each(response, function(index, el) {
                            let elemen = `<div class="w-[95%] mx-auto bg-white rounded shadow-md overflow-hidden mt-4 mb-5">
                            <div class="flex justify-between px-5">
                                <div id="makanan" class="font-bold text-">${el.nama}</div>
                                <p class="text-gray-700">${el.harga}</p>
                            </div>
                        </div>`
                            $('#listmenu').append(elemen);

                            console.log("Nama : ", el.nama);
                            console.log("Harga : ", el.harga);
                        });
                    }
                })
            }
        }

    </script>
</body>

</html>
