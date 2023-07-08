
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Chat</title>
    @vite('resources/css/app.css')
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
    rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="admin/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/perfect-scrollbar.min.css" />
    <link rel="stylesheet" href="load/load.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" />
    <link defer rel="stylesheet" type="text/css" media="screen" href="assets/css/animate.css" />
    <script src="assets/js/perfect-scrollbar.min.js"></script>
    <script defer src="assets/js/popper.min.js"></script>
    <script defer src="assets/js/tippy-bundle.umd.min.js"></script>
    <script defer src="assets/js/sweetalert.min.js"></script>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
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

    @include('chat_admin.asset')
    </div>


    <script src="assets/js/alpine-collaspe.min.js"></script>
    <script src="assets/js/alpine-persist.min.js"></script>
    <script defer src="assets/js/alpine-ui.min.js"></script>
    <script defer src="assets/js/alpine-focus.min.js"></script>
    <script defer src="assets/js/alpine.min.js"></script>
    <script src="assets/js/custom.js"></script>
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
            //chat
            Alpine.data('chat', () => ({
                isShowUserChat: false,
                isShowChatMenu: false,
                loginUser: {
                    id: 0,
                    name: 'Alon Smith',
                    path: 'profile-34.jpeg',
                    designation: 'Software Developer',
                },
                contactList: [{
                        userId: 1,
                        name: 'Abdul kader',
                        path: 'profile-16.jpeg',
                        time: '2:09 PM',
                        preview: 'Apa kabar ?',
                        messages: [{
                                fromUserId: 0,
                                toUserId: 1,
                                text: 'Hi, I am back from vacation',
                            },
                            {
                                fromUserId: 0,
                                toUserId: 1,
                                text: 'How are you?',
                            },
                            {
                                fromUserId: 1,
                                toUserId: 0,
                                text: 'Welcom Back',
                            },
                            {
                                fromUserId: 1,
                                toUserId: 0,
                                text: 'I am all well',
                            },
                            {
                                fromUserId: 0,
                                toUserId: 1,
                                text: 'Coffee?',
                            },
                        ],
                        active: true,
                    },
                    {
                        userId: 2,
                        name: 'Sean Freeman',
                        path: 'profile-1.jpeg',
                        time: '12:09 PM',
                        preview: 'I was wondering...',
                        messages: [{
                                fromUserId: 0,
                                toUserId: 2,
                                text: 'Hello',
                            },
                            {
                                fromUserId: 0,
                                toUserId: 2,
                                text: "It's me",
                            },
                            {
                                fromUserId: 0,
                                toUserId: 2,
                                text: 'I have a question regarding project.',
                            },
                        ],
                        active: false,
                    },
                    {
                        userId: 3,
                        name: 'Alma Clarke',
                        path: 'profile-2.jpeg',
                        time: '1:44 PM',
                        preview: 'I’ve forgotten how it felt before',
                        messages: [{
                                fromUserId: 0,
                                toUserId: 3,
                                text: 'Hey Buddy.',
                            },
                            {
                                fromUserId: 0,
                                toUserId: 3,
                                text: "What's up",
                            },
                            {
                                fromUserId: 3,
                                toUserId: 0,
                                text: 'I am sick',
                            },
                            {
                                fromUserId: 0,
                                toUserId: 3,
                                text: 'Not comming to office today.',
                            },
                        ],
                        active: true,
                    },
                    {
                        userId: 4,
                        name: 'Alan Green',
                        path: 'profile-3.jpeg',
                        time: '2:06 PM',
                        preview: 'But we’re probably gonna need a new carpet.',
                        messages: [{
                                fromUserId: 0,
                                toUserId: 4,
                                text: 'Hi, collect your check',
                            },
                            {
                                fromUserId: 4,
                                toUserId: 0,
                                text: 'Ok, I will be there in 10 mins',
                            },
                        ],
                        active: true,
                    },
                    {
                        userId: 5,
                        name: 'Shaun Park',
                        path: 'profile-4.jpeg',
                        time: '2:05 PM',
                        preview: 'It’s not that bad...',
                        messages: [{
                                fromUserId: 0,
                                toUserId: 3,
                                text: 'Hi, I am back from vacation',
                            },
                            {
                                fromUserId: 0,
                                toUserId: 3,
                                text: 'How are you?',
                            },
                            {
                                fromUserId: 0,
                                toUserId: 5,
                                text: 'Welcom Back',
                            },
                            {
                                fromUserId: 0,
                                toUserId: 5,
                                text: 'I am all well',
                            },
                            {
                                fromUserId: 5,
                                toUserId: 0,
                                text: 'Coffee?',
                            },
                        ],
                        active: false,
                    },
                    {
                        userId: 6,
                        name: 'Roxanne',
                        path: 'profile-5.jpeg',
                        time: '2:00 PM',
                        preview: 'Wasup for the third time like is you bling bitch',
                        messages: [{
                                fromUserId: 0,
                                toUserId: 6,
                                text: 'Hi',
                            },
                            {
                                fromUserId: 0,
                                toUserId: 6,
                                text: 'Uploaded files to server.',
                            },
                        ],
                        active: false,
                    },
                    {
                        userId: 7,
                        name: 'Ernest Reeves',
                        path: 'profile-6.jpeg',
                        time: '2:09 PM',
                        preview: 'Wasup for the third time like is you bling bitch',
                        messages: [],
                        active: true,
                    },
                    {
                        userId: 8,
                        name: 'Laurie Fox',
                        path: 'profile-7.jpeg',
                        time: '12:09 PM',
                        preview: 'Wasup for the third time like is you bling bitch',
                        messages: [],
                        active: true,
                    },
                    {
                        userId: 9,
                        name: 'Xavier',
                        path: 'profile-8.jpeg',
                        time: '4:09 PM',
                        preview: 'Wasup for the third time like is you bling bitch',
                        messages: [],
                        active: false,
                    },
                    {
                        userId: 10,
                        name: 'Susan Phillips',
                        path: 'profile-9.jpeg',
                        time: '9:00 PM',
                        preview: 'Wasup for the third time like is you bling bitch',
                        messages: [],
                        active: true,
                    },
                    {
                        userId: 11,
                        name: 'Dale Butler',
                        path: 'profile-10.jpeg',
                        time: '5:09 PM',
                        preview: 'Wasup for the third time like is you bling bitch',
                        messages: [],
                        active: false,
                    },
                    {
                        userId: 12,
                        name: 'Grace Roberts',
                        path: 'user-profile.jpeg',
                        time: '8:01 PM',
                        preview: 'Wasup for the third time like is you bling bitch',
                        messages: [],
                        active: true,
                    },
                ],
                searchUser: '',
                textMessage: '',
                selectedUser: '',

                get searchUsers() {
                    setTimeout(() => {
                        const element = document.querySelector('.chat-users');
                        element.scrollTop = 0;
                        element.behavior = 'smooth';
                    });
                    return this.contactList.filter((d) => {
                        return d.name.toLowerCase().includes(this.searchUser);
                    });
                },

                selectUser(user) {
                    this.selectedUser = user;
                    this.isShowUserChat = true;
                    this.scrollToBottom;
                    this.isShowChatMenu = false;
                },

                sendMessage() {
                    if (this.textMessage.trim()) {
                        const user = this.contactList.find((d) => d.userId === this.selectedUser
                        .userId);
                        user.messages.push({
                            fromUserId: this.selectedUser.userId,
                            toUserId: 0,
                            text: this.textMessage,
                            time: 'Just now',
                        });
                        this.textMessage = '';
                        this.scrollToBottom;
                    }
                },

                get scrollToBottom() {
                    if (this.isShowUserChat) {
                        setTimeout(() => {
                            const element = document.querySelector(
                            '.chat-conversation-box');
                            element.scrollIntoView({
                                behavior: 'smooth',
                                block: 'end',
                            });
                        });
                    }
                },
            }));
        });
    </script>
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
        sidenav-2,
        initTE,
        } from "tw-elements";

        initTE({ sidenav-2 });
    </script>
</body>

</html>

