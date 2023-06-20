<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('admin/assets/css/perfect-scrollbar.min.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('admin/assets/css/style.css') }}" />
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <link defer rel="stylesheet" type="text/css" media="screen" href="{{ asset('admin/assets/css/animate.css') }}" />
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="{{ asset('admin/assets/js/perfect-scrollbar.min.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/tippy-bundle.umd.min.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/sweetalert.min.js') }}"></script>
</head>
<body>

    <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
        <div class="">
            {{-- @include('.sidebar.layout') --}}
            <div class="animate__animated p-6" :class="[$store.app.animation]">
                <!-- start main content section -->

                <div x-data="basic" class="mt-16">
                    {{-- judul --}}
                    <div class="mb-5 font-semibold">
                        <span >Approval / <span class="text-[#00B7FF]">Pendaftaran</span></span>
                    </div>
                    <div class="flex gap-4" >
                        <button class=" outline outline-[#24AEE4] px-4 py-1 mb-2 rounded-md font-semibold hover:bg-[#24AEE4] hover:text-white {{request()->routeIs('piket.index') ? 'bg-[#24AEE4] text-white' : ''}}">
                            Pagi
                        </button>
                        <button class=" outline outline-[#24AEE4] px-4 py-1 mb-2 rounded-md font-semibold hover:bg-[#24AEE4] hover:text-white ">
                            Sore
                        </button>
                        <button class=" outline outline-[#24AEE4] px-4 py-1 mb-2 rounded-md font-semibold hover:bg-[#24AEE4] hover:text-white ">
                            Laporan
                        </button>
                    </div>

                    <div class="main">
                    <div class="panel">
                        <div class="flex grid-cols-5 gap-1 w-lg" id="#pagi">
                            {{-- senin --}}
                            <div class=" w-full aspect-[3/4] bg-[#EAF1FF]" >
                                {{-- button edit --}}
                                <div class="flex justify-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 pt-2 pr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </div>
                                {{-- hari --}}
                                div
                            </div>
                            <div class=" w-full aspect-[3/4] bg-[#EAF1FF]" ></div>
                            <div class=" w-full aspect-[3/4] bg-[#EAF1FF]" ></div>
                            <div class=" w-full aspect-[3/4] bg-[#EAF1FF]" ></div>
                            <div class=" w-full aspect-[3/4] bg-[#EAF1FF]" ></div>
                        </div>
                    </div>
                    </div>


                    </div>
                </div>
                <!-- end main content section -->

                <!-- start footer section -->
                <p class="pt-6 text-center dark:text-white-dark ltr:sm:text-left rtl:sm:text-right">
                    © <span id="footer-year">2022</span>. Vristo All rights reserved.
                </p>
                <!-- end footer section -->
            </div>
        </div>
    </div>

    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('admin/assets/js/alpine-collaspe.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/alpine-persist.min.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/alpine-ui.min.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/alpine-focus.min.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/alpine.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/apexcharts.js') }}"></script>
    <script src="{{ asset('admin/assets/js/simple-datatables.js')}}"></script>



    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('basic', () => ({
                datatable: null,
                init() {
                    this.datatable = new simpleDatatables.DataTable('#myTable', {
                        data: {
                            headings: ['ID', 'Nama', 'Jurusan', 'Lama Magang', 'Sekolah', 'Kelas', 'Aksi'],
                            data: [
                                [1, 'Caroline', 'RPL', '03-04-2023 -> 03-04-2023', 'SMKN 1 KEPANJEN', '12', ''],
                                [2, 'Celeste', 'RPL', '03-04-2023 -> 03-04-2023', 'SMKN 1 KEPANJEN', '12', ''],
                                [3, 'Tillman', 'RPL', '03-04-2023 -> 03-04-2023', 'SMKN 1 KEPANJEN', '12', ''],
                                [4, 'Daisy', 'RPL', '03-04-2023 -> 03-04-2023', 'SMKN 1 KEPANJEN', '12', ''],
                                [5, 'Weber', 'RPL', '03-04-2023 -> 03-04-2023', 'SMKN 1 KEPANJEN', '12', ''],
                                [6, 'Buckley', 'RPL', '03-04-2023 -> 03-04-2023', 'SMKN 1 KEPANJEN', '12', ''],
                                [7, 'Latoya', 'RPL', '03-04-2023 -> 03-04-2023', 'SMKN 1 KEPANJEN', '12', ''],
                                [8, 'Kate', 'RPL', '03-04-2023 -> 03-04-2023', 'SMKN 1 KEPANJEN', '12', ''],
                                [9, 'Marva', 'RPL', '03-04-2023 -> 03-04-2023', 'SMKN 1 KEPANJEN', '12', ''],
                                [10, 'Decker', 'RPL', '03-04-2023 -> 03-04-2023', 'SMKN 1 KEPANJEN', '12', ''],
                                [11, 'Odom', 'RPL', '03-04-2023 -> 03-04-2023', 'SMKN 1 KEPANJEN', '12', ''],
                                [12, 'Sellers', 'RPL', '03-04-2023 -> 03-04-2023', 'SMKN 1 KEPANJEN', '12', ''],
                                [13, 'Wendi', 'RPL', '03-04-2023 -> 03-04-2023', 'SMKN 1 MALANG', '12', ''],
                                [14, 'Sophie', 'RPL', '03-04-2023 -> 03-04-2023', 'SMKN 1 MALANG', '11', ''],
                                [15, 'Levine', 'RPL', '03-04-2023 -> 03-04-2023', 'SMKN 1 MALANG', '11', ''],

                            ],
                        },
                        sortable: true,
                        searchable: true,
                        perPage: 10,
                        perPageSelect: [10, 20, 30, 50, 100],

                        firstLast: true,
                        firstText:
                            '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M13 19L7 12L13 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path opacity="0.5" d="M16.9998 19L10.9998 12L16.9998 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
                        lastText:
                            '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M11 19L17 12L11 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path opacity="0.5" d="M6.99976 19L12.9998 12L6.99976 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
                        prevText:
                            '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
                        nextText:
                            '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
                        labels: {
                            perPage: '{select}',
                        },
                        layout: {
                            top: '{search}',
                            bottom: '{info}{select}{pager}',
                        },
                        columns: [
                            {
                                select: 6,
                                render: (data, cell, row) => {
                                    return `

                                    `;
                                },
                                sortable: false,
                            },
                        ],
                    });
                },
            }));
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
                    const selector = document.querySelector('.sidebar ul a[href="' + window.location.pathname + '"]');
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
                    const selector = document.querySelector('ul.horizontal-menu a[href="' + window.location.pathname + '"]');
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

                notifications: [
                    {
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

                messages: [
                    {
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

                languages: [
                    {
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

            // content section
            Alpine.data('sales', () => ({
                init() {
                    isDark = this.$store.app.theme === 'dark' ? true : false;
                    isRtl = this.$store.app.rtlClass === 'rtl' ? true : false;

                    const revenueChart = null;
                    const salesByCategory = null;
                    const dailySales = null;
                    const totalOrders = null;

                    // revenue
                    setTimeout(() => {
                        this.revenueChart = new ApexCharts(this.$refs.revenueChart, this.revenueChartOptions);
                        this.$refs.revenueChart.innerHTML = '';
                        this.revenueChart.render();

                        // sales by category
                        this.salesByCategory = new ApexCharts(this.$refs.salesByCategory, this.salesByCategoryOptions);
                        this.$refs.salesByCategory.innerHTML = '';
                        this.salesByCategory.render();

                        // daily sales
                        this.dailySales = new ApexCharts(this.$refs.dailySales, this.dailySalesOptions);
                        this.$refs.dailySales.innerHTML = '';
                        this.dailySales.render();

                        // total orders
                        this.totalOrders = new ApexCharts(this.$refs.totalOrders, this.totalOrdersOptions);
                        this.$refs.totalOrders.innerHTML = '';
                        this.totalOrders.render();
                    }, 300);

                    this.$watch('$store.app.theme', () => {
                        isDark = this.$store.app.theme === 'dark' ? true : false;

                        this.revenueChart.updateOptions(this.revenueChartOptions);
                        this.salesByCategory.updateOptions(this.salesByCategoryOptions);
                        this.dailySales.updateOptions(this.dailySalesOptions);
                        this.totalOrders.updateOptions(this.totalOrdersOptions);
                    });

                    this.$watch('$store.app.rtlClass', () => {
                        isRtl = this.$store.app.rtlClass === 'rtl' ? true : false;
                        this.revenueChart.updateOptions(this.revenueChartOptions);
                    });
                },

                // revenue
                get revenueChartOptions() {
                    return {
                        series: [
                            {
                                name: 'Income',
                                data: [16800, 16800, 15500, 17800, 15500, 17000, 19000, 16000, 15000, 17000, 14000, 17000],
                            },
                            {
                                name: 'Expenses',
                                data: [16500, 17500, 16200, 17300, 16000, 19500, 16000, 17000, 16000, 19000, 18000, 19000],
                            },
                        ],
                        chart: {
                            height: 325,
                            type: 'area',
                            fontFamily: 'Nunito, sans-serif',
                            zoom: {
                                enabled: false,
                            },
                            toolbar: {
                                show: false,
                            },
                        },
                        dataLabels: {
                            enabled: false,
                        },
                        stroke: {
                            show: true,
                            curve: 'smooth',
                            width: 2,
                            lineCap: 'square',
                        },
                        dropShadow: {
                            enabled: true,
                            opacity: 0.2,
                            blur: 10,
                            left: -7,
                            top: 22,
                        },
                        colors: isDark ? ['#2196f3', '#e7515a'] : ['#1b55e2', '#e7515a'],
                        markers: {
                            discrete: [
                                {
                                    seriesIndex: 0,
                                    dataPointIndex: 6,
                                    fillColor: '#1b55e2',
                                    strokeColor: 'transparent',
                                    size: 7,
                                },
                                {
                                    seriesIndex: 1,
                                    dataPointIndex: 5,
                                    fillColor: '#e7515a',
                                    strokeColor: 'transparent',
                                    size: 7,
                                },
                            ],
                        },
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                        xaxis: {
                            axisBorder: {
                                show: false,
                            },
                            axisTicks: {
                                show: false,
                            },
                            crosshairs: {
                                show: true,
                            },
                            labels: {
                                offsetX: isRtl ? 2 : 0,
                                offsetY: 5,
                                style: {
                                    fontSize: '12px',
                                    cssClass: 'apexcharts-xaxis-title',
                                },
                            },
                        },
                        yaxis: {
                            tickAmount: 7,
                            labels: {
                                formatter: (value) => {
                                    return value / 1000 + 'K';
                                },
                                offsetX: isRtl ? -30 : -10,
                                offsetY: 0,
                                style: {
                                    fontSize: '12px',
                                    cssClass: 'apexcharts-yaxis-title',
                                },
                            },
                            opposite: isRtl ? true : false,
                        },
                        grid: {
                            borderColor: isDark ? '#191e3a' : '#e0e6ed',
                            strokeDashArray: 5,
                            xaxis: {
                                lines: {
                                    show: true,
                                },
                            },
                            yaxis: {
                                lines: {
                                    show: false,
                                },
                            },
                            padding: {
                                top: 0,
                                right: 0,
                                bottom: 0,
                                left: 0,
                            },
                        },
                        legend: {
                            position: 'top',
                            horizontalAlign: 'right',
                            fontSize: '16px',
                            markers: {
                                width: 10,
                                height: 10,
                                offsetX: -2,
                            },
                            itemMargin: {
                                horizontal: 10,
                                vertical: 5,
                            },
                        },
                        tooltip: {
                            marker: {
                                show: true,
                            },
                            x: {
                                show: false,
                            },
                        },
                        fill: {
                            type: 'gradient',
                            gradient: {
                                shadeIntensity: 1,
                                inverseColors: !1,
                                opacityFrom: isDark ? 0.19 : 0.28,
                                opacityTo: 0.05,
                                stops: isDark ? [100, 100] : [45, 100],
                            },
                        },
                    };
                },

                // sales by category
                get salesByCategoryOptions() {
                    return {
                        series: [985, 737, 270],
                        chart: {
                            type: 'donut',
                            height: 460,
                            fontFamily: 'Nunito, sans-serif',
                        },
                        dataLabels: {
                            enabled: false,
                        },
                        stroke: {
                            show: true,
                            width: 25,
                            colors: isDark ? '#0e1726' : '#fff',
                        },
                        colors: isDark ? ['#5c1ac3', '#e2a03f', '#e7515a', '#e2a03f'] : ['#e2a03f', '#5c1ac3', '#e7515a'],
                        legend: {
                            position: 'bottom',
                            horizontalAlign: 'center',
                            fontSize: '14px',
                            markers: {
                                width: 10,
                                height: 10,
                                offsetX: -2,
                            },
                            height: 50,
                            offsetY: 20,
                        },
                        plotOptions: {
                            pie: {
                                donut: {
                                    size: '65%',
                                    background: 'transparent',
                                    labels: {
                                        show: true,
                                        name: {
                                            show: true,
                                            fontSize: '29px',
                                            offsetY: -10,
                                        },
                                        value: {
                                            show: true,
                                            fontSize: '26px',
                                            color: isDark ? '#bfc9d4' : undefined,
                                            offsetY: 16,
                                            formatter: (val) => {
                                                return val;
                                            },
                                        },
                                        total: {
                                            show: true,
                                            label: 'Total',
                                            color: '#888ea8',
                                            fontSize: '29px',
                                            formatter: (w) => {
                                                return w.globals.seriesTotals.reduce(function (a, b) {
                                                    return a + b;
                                                }, 0);
                                            },
                                        },
                                    },
                                },
                            },
                        },
                        labels: ['Apparel', 'Sports', 'Others'],
                        states: {
                            hover: {
                                filter: {
                                    type: 'none',
                                    value: 0.15,
                                },
                            },
                            active: {
                                filter: {
                                    type: 'none',
                                    value: 0.15,
                                },
                            },
                        },
                    };
                },

                // daily sales
                get dailySalesOptions() {
                    return {
                        series: [
                            {
                                name: 'Sales',
                                data: [44, 55, 41, 67, 22, 43, 21],
                            },
                            {
                                name: 'Last Week',
                                data: [13, 23, 20, 8, 13, 27, 33],
                            },
                        ],
                        chart: {
                            height: 160,
                            type: 'bar',
                            fontFamily: 'Nunito, sans-serif',
                            toolbar: {
                                show: false,
                            },
                            stacked: true,
                            stackType: '100%',
                        },
                        dataLabels: {
                            enabled: false,
                        },
                        stroke: {
                            show: true,
                            width: 1,
                        },
                        colors: ['#e2a03f', '#e0e6ed'],
                        responsive: [
                            {
                                breakpoint: 480,
                                options: {
                                    legend: {
                                        position: 'bottom',
                                        offsetX: -10,
                                        offsetY: 0,
                                    },
                                },
                            },
                        ],
                        xaxis: {
                            labels: {
                                show: false,
                            },
                            categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat'],
                        },
                        yaxis: {
                            show: false,
                        },
                        fill: {
                            opacity: 1,
                        },
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                columnWidth: '25%',
                            },
                        },
                        legend: {
                            show: false,
                        },
                        grid: {
                            show: false,
                            xaxis: {
                                lines: {
                                    show: false,
                                },
                            },
                            padding: {
                                top: 10,
                                right: -20,
                                bottom: -20,
                                left: -20,
                            },
                        },
                    };
                },

                // total orders
                get totalOrdersOptions() {
                    return {
                        series: [
                            {
                                name: 'Sales',
                                data: [28, 40, 36, 52, 38, 60, 38, 52, 36, 40],
                            },
                        ],
                        chart: {
                            height: 290,
                            type: 'area',
                            fontFamily: 'Nunito, sans-serif',
                            sparkline: {
                                enabled: true,
                            },
                        },
                        stroke: {
                            curve: 'smooth',
                            width: 2,
                        },
                        colors: isDark ? ['#00ab55'] : ['#00ab55'],
                        labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
                        yaxis: {
                            min: 0,
                            show: false,
                        },
                        grid: {
                            padding: {
                                top: 125,
                                right: 0,
                                bottom: 0,
                                left: 0,
                            },
                        },
                        fill: {
                            opacity: 1,
                            type: 'gradient',
                            gradient: {
                                type: 'vertical',
                                shadeIntensity: 1,
                                inverseColors: !1,
                                opacityFrom: 0.3,
                                opacityTo: 0.05,
                                stops: [100, 100],
                            },
                        },
                        tooltip: {
                            x: {
                                show: false,
                            },
                        },
                    };
                },
            }));
        });
    </script>
</body>
</html>
