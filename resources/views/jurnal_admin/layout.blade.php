   <!-- Sidenav -->
   <nav id="sidenav-2"
   class=" kamu-tak-diajak fixed z-[50] left-0 top-0 h-screen w-60 -translate-x-full overflow-hidden bg-white shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] data-[te-sidenav-hidden='false']:translate-x-0 dark:bg-zinc-800"
   data-te-sidenav-init data-te-sidenav-hidden="false" data-te-sidenav-mode="side" data-te-sidenav-accordion="true"
   data-te-sidenav-content="#content">

   <ul class="relative m-0 list-none px-[0.2rem]" data-te-sidenav-menu-ref>
       <li class="relative mt-2">
           <a class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 hover:bg-blue-500 hover:text-white"
               data-te-sidenav-link-ref>
               <span class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                   <img src="{{ asset('admin/assets/images/humma.png') }}" alt="">
               </span>

           </a>
       </li>
       {{-- dashboard --}}
       <li class="relative mt-5">
           <a href="{{route('dudi.index')}}"
               class="flex h-12 cursor-pointer items-center {{ request()->routeIs('dudi.index') ? 'bg-blue-500 text-white' : '' }}   rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ebg-blue-400ark:text-gray-300 hover:bg-blue-500 hover:text-white ">
               <span class="mr-4 [&>svg]:h-4 [&>svg]:w-4  ">
                   <svg class="" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                       <path
                            fill="currentColor"
                           d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                   </svg>
               </span>
               <span>Dashboard</span>

           </a>
       </li>
       {{-- approval --}}
       <li class="relative">
           <a href="" class="flex h-12  cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ebg-blue-400 dark:text-gray-300 hover:bg-blue-500 hover:text-white"
               data-te-sidenav-link-ref>
               <span class="mr-4 [&>svg]:h-4 [&>svg]:w-4 ">
                   <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                       <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                       <style>
                           svg {
                               fill: #8d94a0
                           }
                       </style>
                       <path
                       fill="currentColor"

                           d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                   </svg>
               </span>
               <span>Approval</span>
               <span
                   class="absolute  right-0 ml-auto mr-[0.8rem] transition-transform duration-300 ease-linear motion-reduce:transition-none "
                   data-te-sidenav-rotate-icon-ref>
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                       class="h-5 w-5 ">
                       <path fill-rule="evenodd"  fill="currentColor"
                           d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                           clip-rule="evenodd" />
                   </svg>
               </span>
           </a>
           <ul class="show visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
               data-te-sidenav-collapse-ref>
               <li class="relative">
                   <a href="{{ route('aproval.index') }}"
                       class="flex {{ request()->routeIs('aproval.index') ? 'bg-blue-500 text-white' : '' }}  h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-blue-500 hover:text-white"
                       data-te-sidenav-link-ref>pendaftaran</a>
               </li>
               <li class="relative">
                   <a href="{{ route('approvalizin.index') }}"
                       class="flex h-6 cursor-pointer {{ request()->routeIs('approvalizin.index') ? 'bg-blue-500 text-white' : '' }}  items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-blue-500 hover:text-white"
                       data-te-sidenav-link-ref>izin & sakit</a>
               </li>

           </ul>
       </li>
       {{-- user --}}
       <li class="relative">
           <a class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 bg-white hover:bg-blue-500 hover:text-white "
               data-te-sidenav-link-ref>
               <span class="mr-4 [&>svg]:h-5 [&>svg]:w-5 ">
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                       stroke="currentColor" class="w-6 h-6">
                       <path stroke-linecap="round" stroke-linejoin="round"
                           d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                   </svg>
               </span>
               <span>User</span>
               <span
                   class="absolute right-0 ml-auto mr-[0.8rem] transition-transform duration-300 ease-linear motion-reduce:transition-none "
                   data-te-sidenav-rotate-icon-ref>
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"  class="h-5 w-5">
                       <path fill-rule="evenodd" fill="currentColor"
                           d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                           clip-rule="evenodd" />
                   </svg>
               </span>
           </a>
           <ul class="show visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
               data-te-sidenav-collapse-ref>
               <li class="relative">
                   <a href="{{ route('siswa_admin.index') }}"
                       class="flex {{ request()->routeIs('siswa_admin.index') ? 'bg-blue-500 text-white' : '' }}  h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-blue-500 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300  hover:text-white"
                       data-te-sidenav-link-ref>Siswa</a>
               </li>
               <li class="relative">
                   <a href="{{ route('alumni_admin.index') }}"
                       class="flex h-6 {{ request()->routeIs('alumni_admin.index') ? 'bg-blue-500 text-white' : '' }}  cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-blue-500 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300  hover:text-white"
                       data-te-sidenav-link-ref>Alumni</a>
               </li>
               <li class="relative">
                   <a href="{{ route('guru_admin.index') }}"
                       class="flex h-6 cursor-pointer {{ request()->routeIs('guru_admin.index') ? 'bg-blue-500 text-white' : '' }}  items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-blue-500 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 hover:bg-blue-500 hover:text-white"
                       data-te-sidenav-link-ref>Penanggung jawab</a>
               </li>

           </ul>
       </li>
       {{-- jurnal --}}
       <li class="relative">
           <a href="{{route('jurnal_admin.index')}}"
               class="flex h-12 cursor-pointer items-center {{ request()->routeIs('jurnal_admin.index') ? 'bg-blue-500 text-white' : '' }} {{ request()->routeIs('jurnal_admin.create') ? 'bg-blue-500 text-white' : '' }} rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 bg-blue-400ark:text-gray-300 hover:bg-blue-500 hover:text-white">
               <span class="mr-4 [&>svg]:h-4 [&>svg]:w-5 ">
                   <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                       <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                       <style>
                           svg {
                               fill: #8e98a9
                           }
                       </style>
                       <path
                       fill="currentColor"
                           d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                   </svg>
               </span>
               <span>Jurnal</span>

           </a>
       </li>
       {{-- absensi --}}
       <li class="relative">
           <a href="{{ route('absensi_admin.index') }}"
               class="flex h-12 cursor-pointer items-center {{ request()->routeIs('absensi_admin.index') ? 'bg-blue-500 text-white' : '' }}   rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 bg-blue-400ark:text-gray-300 hover:bg-blue-500 hover:text-white">
               <span class="mr-4 [&>svg]:h-4 [&>svg]:w-5 ">
                   <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                       <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                       <style>
                           svg {
                               fill: #828997
                           }
                       </style>
                       <path
                       fill="currentColor"
                           d="M64 464c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16H224v80c0 17.7 14.3 32 32 32h80V448c0 8.8-7.2 16-16 16H64zM64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V154.5c0-17-6.7-33.3-18.7-45.3L274.7 18.7C262.7 6.7 246.5 0 229.5 0H64zm56 256c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H120z" />
                   </svg>
               </span>
               <span>Absensi</span>

           </a>
       </li>
       {{-- peraturan --}}
       <li class="relative">
           <a class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300  dark:text-gray-300 hover:bg-blue-500 hover:text-white"
               data-te-sidenav-link-ref>
               <span class="mr-4 [&>svg]:h-4 [&>svg]:w-5 ">
                   <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                       <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                       <style>
                           svg {
                               fill: #787c82
                           }
                       </style>
                       <path fill="currentColor"
                           d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z" />
                   </svg>
               </span>
               <span>Peraturan</span>
               <span
                   class="absolute right-0 ml-auto mr-[0.8rem] transition-transform duration-300 ease-linear motion-reduce:transition-none [&>svg]:text-gray-600 dark:[&>svg]:text-gray-300"
                   data-te-sidenav-rotate-icon-ref>
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                       class="h-5 w-5">
                       <path fill-rule="evenodd" fill="currentColor"
                           d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                           clip-rule="evenodd" />
                   </svg>
               </span>
           </a>
           <ul class="show visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
               data-te-sidenav-collapse-ref>
               <li class="relative">
                   <a href="{{ route('tatatertib.index') }}"
                       class="flex h-6 {{ request()->routeIs('tatatertib.index') ? 'bg-blue-500 text-white' : '' }}  cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-blue-500 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 hover:bg-blue-500 hover:text-white"
                       data-te-sidenav-link-ref>Tata tertib</a>
               </li>
               <li class="relative">
                   <a href="{{ route('laporansiswa.index') }}"
                       class="flex h-6 {{ request()->routeIs('laporansiswa.index') ? 'bg-blue-500 text-white' : '' }} cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-blue-500 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 hover:bg-blue-500 hover:text-white"
                       data-te-sidenav-link-ref>Laporan Siswa</a>
               </li>
               {{-- <li class="relative">
                   <a href="{{ route('laporan_piket.index') }}"
                       class="flex h-6 {{ request()->routeIs('laporan_piket.index') ? 'bg-blue-500 text-white' : '' }} cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-blue-500 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 hover:bg-blue-500 hover:text-white"
                       data-te-sidenav-link-ref>Laporan PIket</a>
               </li> --}}
               <li class="relative">
                   <a href="{{ route('sp.index') }}"
                       class="flex h-6 {{ request()->routeIs('sp.index') ? 'bg-blue-500 text-white' : '' }} cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-blue-500 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 hover:bg-blue-500 hover:text-white"
                       data-te-sidenav-link-ref>Laporan SP</a>
               </li>

           </ul>
       </li>
       {{-- lainnya --}}
       <li class="relative">
           <a class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300  dark:text-gray-300 hover:bg-blue-500 hover:text-white"
               data-te-sidenav-link-ref>
               <span class="mr-4 [&>svg]:h-5 [&>svg]:w-6 ">
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                       stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                       <path stroke-linecap="round" stroke-linejoin="round" fill="currentColor"
                           d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                   </svg>

               </span>
               <span>Lainnya</span>
               <span
                   class="absolute right-0 ml-auto mr-[0.8rem] transition-transform duration-300 ease-linear motion-reduce:transition-none [&>svg]:text-gray-600 dark:[&>svg]:text-gray-300"
                   data-te-sidenav-rotate-icon-ref>
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                       class="h-5 w-5">
                       <path fill-rule="evenodd" fill="currentColor"
                           d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                           clip-rule="evenodd" />
                   </svg>
               </span>
           </a>
           <ul class="show visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
               data-te-sidenav-collapse-ref>
               <li class="relative">
                   <a href="{{ route('Berita.index') }}"
                       class="flex h-6 {{ request()->routeIs('Berita.index') ? 'bg-blue-500 text-white' : '' }}  cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-blue-500 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 hover:bg-blue-500 hover:text-white"
                       data-te-sidenav-link-ref>Berita</a>
               </li>
               <li class="relative">
                   <a href="{{ route('chat.index') }}"
                       class="flex h-6 cursor-pointer {{ request()->routeIs('chat.index') ? 'bg-blue-500 text-white' : '' }}  items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-blue-500 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 hover:bg-blue-500 hover:text-white"
                       data-te-sidenav-link-ref>Chat</a>
               </li>
               <li class="relative">
                   <a href="{{ route('piket.index') }}"
                       class="flex h-6 cursor-pointer {{ request()->routeIs('piket.index') ? 'bg-blue-500 text-white' : '' }}  items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-blue-500 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 hover:bg-blue-500 hover:text-white"
                       data-te-sidenav-link-ref>Jadwal Piket</a>
               </li>
               <li class="relative">
                   <a href="{{ route('mou.index') }}"
                       class="flex h-6 cursor-pointer {{ request()->routeIs('mou.index') ? 'bg-blue-500 text-white' : '' }}  items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-blue-500 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 hover:bg-blue-500 hover:text-white"
                       data-te-sidenav-link-ref>MOU</a>
               <li class="relative">
                   <a href="{{ route('tolak.index') }}"
                       class="flex h-6 cursor-pointer {{ request()->routeIs('tolak.index') ? 'bg-blue-500 text-white' : '' }} items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-blue-500 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 hover:bg-blue-500 hover:text-white"
                       data-te-sidenav-link-ref>Di Tolak</a>

           </ul>
       </li>
   </ul>
</nav>
<!-- Sidenav -->
