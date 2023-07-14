<!-- Navbar -->
<nav id="main-navbar"
    class="kamu-tak-diajak sticky relative left-0  right-0 top-0 flex  flex-nowrap items-center justify-between bg-white py-[0.6rem] text-gray-500 shadow-lg hover:text-gray-700 focus:text-gray-700 dark:bg-zinc-700 lg:flex-wrap lg:justify-start fixed"
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
            <li class="relative" data-te-dropdown-ref>
                <a class="mr-4 flex items-center text-gray-500 hover:text-gray-700 focus:text-gray-700" href="#"
                    id="navbarDropdownMenuLink" role="button" data-te-dropdown-toggle-ref aria-expanded="false">
                    <span class="dark:text-gray-200 [&>svg]:w-3.5">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bell" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor"
                                d="M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z">
                            </path>
                        </svg>
                    </span>
                    <span
                        class="absolute -mt-2.5 ml-2 rounded-full bg-red-600 px-1.5 py-[1px] text-[0.6rem] text-white">1</span>
                </a>
                <ul class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-[10rem] list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-zinc-700 [&[data-te-dropdown-show]]:block"
                    aria-labelledby="navbarDropdownMenuLink" data-te-dropdown-menu-ref>
                    <li>
                        <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                            href="#" data-te-dropdown-item-ref>Some news</a>
                    </li>
                    <li>
                        <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                            href="#" data-te-dropdown-item-ref>Another news</a>
                    </li>
                    <li>
                        <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                            href="#" data-te-dropdown-item-ref>Something else here</a>
                    </li>
                </ul>
            </li>






            <!-- Avatar -->
            <li class="relative" data-te-dropdown-ref>
                <a class="hidden-arrow flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none"
                    href="#" id="navbarDropdownMenuLink" role="button" data-te-dropdown-toggle-ref
                    aria-expanded="false">
                    <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-full"
                        style="height: 22px; width: 22px" alt="Avatar" loading="lazy" />
                </a>
                <ul class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-[10rem] list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-zinc-700 [&[data-te-dropdown-show]]:block"
                    aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
                    <li>
                        <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                            href="#" data-te-dropdown-item-ref>My profile</a>
                    </li>
                    <li>
                        <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                            href="#" data-te-dropdown-item-ref>Settings</a>
                    </li>
                    <li>
                        <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
                            href="{{ route('logout') }}" data-te-dropdown-item-ref>Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- Container wrapper -->
</nav>
