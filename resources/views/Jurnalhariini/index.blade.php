<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <link rel="stylesheet" href="load/load.css">
    <link rel="icon" type="image/x-icon" href="admin/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets_guru/css/perfect-scrollbar.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets_guru/css/style.css" />
    <link defer rel="stylesheet" type="text/css" media="screen" href="assets_guru/css/animate.css" />
    <link rel="stylesheet" href="load/load.css">
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


        @include('jurnal_admin.nav')

        <div class="animate__animated p-6" :class="[$store.app.animation]">
            <!-- start main content section -->
            <div>
                <ul class="flex space-x-2 rtl:space-x-reverse">

                </ul>
                <div class="pt-5">
                    <div class="mb-5 flex items-center justify-between">
                        <h5 class="text-sm font-semibold dark:text-white-light">Absensi Hari ini </h5>
                    </div>
                    <div x-data="{ tab: 'home' }">
                        <ul
                            class="mb-5 overflow-y-auto whitespace-nowrap border-b border-[#ebedf2] font-semibold dark:border-[#191e3a] sm:flex">
                            <li class="inline-block">
                                <a href="javascript:;"
                                    class="flex gap-2 border-b border-transparent p-4 hover:border-primary hover:text-primary"
                                    :class="{ '!border-primary text-primary': tab == 'home' }"
                                    @click="tab='home'">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                      </svg>
                                    Tidak mengisi
                                </a>
                            </li>
                           
                        </ul>
                        <template x-if="tab === 'password'">
                            <div>
                                <form
                                    class="mb-5 rounded-md border border-[#ebedf2] bg-white p-4 dark:border-[#191e3a] dark:bg-[#0e1726]">
                                    <h6 class="mb-5 text-lg font-bold">Tanggal : </h6>
                                    <table class="min-w-full text-left text-sm ">
                                        <thead class="border-rounded bg-[#E2E8F0] dark:border-neutral-500">
                                            <tr>
                                                <th scope="col" class="px-6 py-2">#</th>
                                                <th scope="col" class="px-6 py-2">Nama</th>
                                                <th scope="col" class="px-6 py-2">Tanggal</th>
                                                <th scope="col" class="px-6 py-2">Keterangan</th>
                                                <th scope="col" class="px-6 py-2">Aksi</th>
                                            </tr>
                                        </thead>
                                </form>
                            </div>
                        </template>
                        <template x-if="tab === 'home'">
                            <div>


                                <div
                                    class="mb-5 rounded-md border border-[#ebedf2] bg-white p-4 dark:border-[#191e3a] dark:bg-[#0e1726]" enctype="multipart/form-data" method="POST">

                                    <input type="hidden" name="siswa_id" >
                                    <h6 class="mb-5 text-lg font-bold">Tanggal :</h6>
                                    <div class="flex flex-col sm:flex-row">
                                        <table class="min-w-full text-left text-sm ">
                                            <thead class="border-rounded bg-[#E2E8F0] dark:border-neutral-500">
                                                <tr>
                                                    <th scope="col" class="px-6 py-2">#</th>
                                                    <th scope="col" class="px-6 py-2">Nama</th>
                                                    <th scope="col" class="px-6 py-2">Tanggal</th>
                                                    <th scope="col" class="px-6 py-2">Keterangan</th>
                                                    <th scope="col" class="px-6 py-2">Aksi</th>
                                                </tr>
                                            </thead>
                                    </div>
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
</body>

</html>
