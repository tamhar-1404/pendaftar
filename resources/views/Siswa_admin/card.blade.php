<div class="text-lg">
    <h1 class="font-bold">Data siswa</h1>
</div>


  <div class="flex items-center justify-end space-x-4">
    <div class="relative flex justify-end">
      <div class="relative flex justify-end">
        <input type="text" class="peer form-input w-52 h-8 sm:w-52 sm:h-8 bg-gray-100 placeholder:tracking-widest ltr:pl-9 ltr:pr-9 rtl:pr-9 rtl:pl-9 sm:bg-transparent ltr:sm:pr-4 rtl:sm:pl-4 rounded-full" placeholder="Search..." />
        <button type="button" class="absolute inset-0 h-8 w-8 appearance-none peer-focus:text-primary ltr:right-auto rtl:left-auto">
          <svg class="mx-auto" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="11.5" cy="11.5" r="9.5" stroke="currentColor" stroke-width="1.5" opacity="0.5" class="rounded-full" />
            <path d="M18.5 18.5L22 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
          </svg>
        </button>
        <button type="button" class="absolute top-1/2 right-2 block -translate-y-1/2 hover:opacity-80 sm:hidden" style="width: 92px; height: 30px;">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle opacity="0.5" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5" class="rounded-full" />
            <path d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
          </svg>
        </button>
      </div>
    </div>
    <div class="relative flex justify-end">
      <button type="button" class="btn btn-outline-success text-CBD5E1">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
          <circle cx="11.5" cy="11.5" r="9.5" stroke="currentColor" stroke-width="1.5" opacity="0.5" class="rounded-full" />
          <path d="M18.5 18.5L22 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
        </svg>
        <span class="text-sm px-2">Filter</span>
      </button>
    </div>
  </div>

  {{--  card  --}}

<div class="card-container flex justify-between">
    <div class="card relative bg-white mt-8 rounded-lg overflow-hidden dark:bg-black " style="width: 226px; height: 200px; box-shadow: 0px -2px 10px rgba(48, 46, 56, 0.1); top: -2px; margin-right: 4px;">
        <div class="flex flex-col items-center px-4 pb-5 sm:px-5">
          <div class="avatar h-20 w-20 rounded-full overflow-hidden" style="margin-top: 18px;">
            <img class="h-full w-full object-cover" src="admin/assets/images/avatar-5.jpg" alt="avatar">
          </div>
          <h3 class="pt-3 text-base font-medium text-slate-700 dark:text-navy-100 font-bold font-Poppins">Abdul Kader</h3>
          <p class="text-xs">RPL</p>
          <div class="inline-space mt-1 flex-grow flex-wrap items-start">
            <a href="#" class="tag rounded-full font-serif hover:bg-primary/20 focus:bg-success/20 active:bg-success/25 smkn-font">SMKN 1 KRAKSAAN</a>
          </div>
        </div>
        <div class="absolute top-0 right-0 flex">
          <button type="button" class="p-2 text-gray-400 hover:text-gray-600 focus:outline-none" onclick="toggleDropdown(event)">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
            </svg>
          </button>
          <div id="dropdown" class="absolute right-0 mt-8 w-40 bg-white shadow-md rounded-md z-10" style="display: none;">
            <ul class="py-2">
                <li class="px-4 py-2 hover:bg-gray-100 flex items-center">
                    <a href="http://127.0.0.1:8000/siswa_admin/show" class="text-gray-700 hover:text-gray-900 flex items-center">
                      <i class="fa fa-eye mr-2"></i>
                      <span>Detail</span>
                    </a>
                  </li>
                  <li class="px-4 py-2 hover:bg-gray-100 flex items-center">
                    <a href="{{ route('chat.index') }}" class="text-gray-700 hover:text-gray-900 flex items-center">
                      <i class="fa fa-comment mr-2"></i>
                      <span>Chat</span>
                    </a>
                  </li>
                  <li class="px-4 py-2 hover:bg-gray-100 flex items-center">
                    <a href="#" class="text-gray-700 hover:text-gray-900 flex items-center">
                      <i class="fa fa-trash mr-2"></i>
                      <span>Hapus</span>
                    </a>
                  </li>

            </ul>
          </div>
        </div>
      </div>

      <script>
        function toggleDropdown(event) {
          var dropdown = document.getElementById('dropdown');
          dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
          event.stopPropagation();
        }

        document.addEventListener('click', function(event) {
          var dropdown = document.getElementById('dropdown');
          dropdown.style.display = 'none';
        });
      </script>

      <div class="card relative bg-white mt-8 rounded-lg overflow-hidden dark:bg-black " style="width: 226px; height: 200px; box-shadow: 0px -2px 10px rgba(48, 46, 56, 0.1); top: -2px; margin-right: 4px;">
        <div class="flex flex-col items-center px-4 pb-5 sm:px-5">
          <div class="avatar h-20 w-20 rounded-full overflow-hidden" style="margin-top: 18px;">
            <img class="h-full w-full object-cover" src="admin/assets/images/avatar-5.jpg" alt="avatar">
          </div>
          <h3 class="pt-3 text-base font-medium text-slate-700 dark:text-navy-100 font-bold font-Poppins">Abdul Kader</h3>
          <p class="text-xs">RPL</p>
          <div class="inline-space mt-1 flex-grow flex-wrap items-start">
            <a href="#" class="tag rounded-full font-serif hover:bg-primary/20 focus:bg-success/20 active:bg-success/25 smkn-font">SMKN 1 KRAKSAAN</a>
          </div>
        </div>
        <div class="absolute top-0 right-0 flex">
          <button type="button" class="p-2 text-gray-400 hover:text-gray-600 focus:outline-none" onclick="toggleDropdown(event)">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
            </svg>
          </button>

        </div>
      </div>

      <div class="card relative bg-white mt-8 rounded-lg overflow-hidden dark:bg-black " style="width: 226px; height: 200px; box-shadow: 0px -2px 10px rgba(48, 46, 56, 0.1); top: -2px; margin-right: 4px;">
        <div class="flex flex-col items-center px-4 pb-5 sm:px-5">
          <div class="avatar h-20 w-20 rounded-full overflow-hidden" style="margin-top: 18px;">
            <img class="h-full w-full object-cover" src="admin/assets/images/avatar-5.jpg" alt="avatar">
          </div>
          <h3 class="pt-3 text-base font-medium text-slate-700 dark:text-navy-100 font-bold font-Poppins">Abdul Kader</h3>
          <p class="text-xs">RPL</p>
          <div class="inline-space mt-1 flex-grow flex-wrap items-start">
            <a href="#" class="tag rounded-full font-serif hover:bg-primary/20 focus:bg-success/20 active:bg-success/25 smkn-font">SMKN 1 KRAKSAAN</a>
          </div>
        </div>
        <div class="absolute top-0 right-0 flex">
          <button type="button" class="p-2 text-gray-400 hover:text-gray-600 focus:outline-none" onclick="toggleDropdown(event)">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
            </svg>
          </button>

        </div>
      </div>

    <div class="card relative bg-white mt-8 rounded-lg overflow-hidden dark:bg-black" style="width: 226px; height: 200px; box-shadow: 0px -2px 10px rgba(48, 46, 56, 0.1); top: -2px;">
        <div class="flex flex-col items-center px-4 pb-5 sm:px-5">
            <div class="avatar h-20 w-20 rounded-full overflow-hidden" style="margin-top: 18px;">
                <img class="h-full w-full object-cover" src="admin/assets/images/avatar-5.jpg" alt="avatar">
              </div>
            <h3 class="pt-3 text-base font-medium text-slate-700 dark:text-navy-100">Abdul Kader</h3>
            <p class="text-xs">RPL</p>
            <div class="inline-space mt-1 flex-grow flex-wrap items-start">
                <a href="#" class="tag rounded-full  hover:bg-primary/20 focus:bg-success/20 active:bg-success/25 smkn-font">SMKN 1 KRAKSAAN</a>
            </div>
            <div class="absolute top-0 right-0 flex">
                <button type="button" class="p-2 text-gray-400 hover:text-gray-600 focus:outline-none" onclick="toggleDropdown(event)">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                  </svg>
                </button>

              </div>
        </div>
    </div>
</div>
<div class="card-container flex justify-between">
    <div class="card relative bg-white mt-4 rounded-lg overflow-hidden dark:bg-black" style="width: 226px; height: 200px; box-shadow: 0px -2px 10px rgba(48, 46, 56, 0.1); top: -2px; margin-right: 4px;">
        <div class="flex flex-col items-center px-4 pb-5 sm:px-5">
            <div class="avatar h-20 w-20 rounded-full overflow-hidden" style="margin-top: 18px;">
                <img class="h-full w-full object-cover" src="admin/assets/images/avatar-5.jpg" alt="avatar">
              </div>
            <h3 class="pt-3 text-base font-medium text-slate-700 dark:text-navy-100">Abdul Kader</h3>
            <p class="text-xs">RPL</p>
            <div class="inline-space mt-1 flex-grow flex-wrap items-start">
                <a href="#" class="tag rounded-full  hover:bg-primary/20 focus:bg-success/20 active:bg-success/25 smkn-font">SMKN 1 KRAKSAAN</a>
            </div>
            <div class="absolute top-0 right-0 flex">
                <button type="button" class="p-2 text-gray-400 hover:text-gray-600 focus:outline-none" onclick="toggleDropdown(event)">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                  </svg>
                </button>

              </div>
        </div>
    </div>

    <div class="card relative bg-white mt-4 rounded-lg overflow-hidden dark:bg-black" style="width: 226px; height: 200px; box-shadow: 0px -2px 10px rgba(48, 46, 56, 0.1); top: -2px; margin-right: 4px;">
        <div class="flex flex-col items-center px-4 pb-5 sm:px-5">
            <div class="avatar h-20 w-20 rounded-full overflow-hidden" style="margin-top: 18px;">
                <img class="h-full w-full object-cover" src="admin/assets/images/avatar-5.jpg" alt="avatar">
              </div>
            <h3 class="pt-3  text-base font-medium text-slate-700 dark:text-navy-100">Abdul Kader</h3>
            <p class="text-xs">RPL</p>
            <div class="inline-space mt-1 flex-grow flex-wrap items-start">
                <a href="#" class="tag rounded-full  hover:bg-primary/20 focus:bg-success/20 active:bg-success/25 smkn-font">SMKN 1 KRAKSAAN</a>
            </div>
            <div class="absolute top-0 right-0 flex">
                <button type="button" class="p-2 text-gray-400 hover:text-gray-600 focus:outline-none" onclick="toggleDropdown(event)">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                  </svg>
                </button>

              </div>
        </div>
    </div>

    <div class="card relative bg-white mt-4 rounded-lg overflow-hidden dark:bg-black" style="width: 226px; height: 200px; box-shadow: 0px -2px 10px rgba(48, 46, 56, 0.1); top: -2px; margin-right: 4px;">
        <div class="flex flex-col items-center px-4 pb-5 sm:px-5">
            <div class="avatar h-20 w-20 rounded-full overflow-hidden" style="margin-top: 18px;">
                <img class="h-full w-full object-cover" src="admin/assets/images/avatar-5.jpg" alt="avatar">
              </div>
            <h3 class="pt-3  text-base font-medium text-slate-700 dark:text-navy-100">Abdul Kader</h3>
            <p class="text-xs">RPL</p>
            <div class="inline-space mt-1 flex-grow flex-wrap items-start">
                <a href="#" class="tag rounded-full  hover:bg-primary/20 focus:bg-success/20 active:bg-success/25 smkn-font">SMKN 1 KRAKSAAN</a>
            </div>
            <div class="absolute top-0 right-0 flex">
                <button type="button" class="p-2 text-gray-400 hover:text-gray-600 focus:outline-none" onclick="toggleDropdown(event)">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                  </svg>
                </button>

              </div>
        </div>
    </div>

    <div class="card relative bg-white mt-4 rounded-lg overflow-hidden dark:bg-black" style="width: 226px; height: 200px; box-shadow: 0px -2px 10px rgba(48, 46, 56, 0.1); top: -2px;">
        <div class="flex flex-col items-center px-4 pb-5 sm:px-5">
            <div class="avatar h-20 w-20 rounded-full overflow-hidden" style="margin-top: 18px;">
                <img class="h-full w-full object-cover" src="admin/assets/images/avatar-5.jpg" alt="avatar">
              </div>
            <h3 class="pt-3 text-base font-medium text-slate-700 dark:text-navy-100">Abdul Kader</h3>
            <p class="text-xs">RPL</p>
            <div class="inline-space mt-1 flex-grow flex-wrap items-start">
                <a href="#" class="tag rounded-full  hover:bg-primary/20 focus:bg-success/20 active:bg-success/25 smkn-font">SMKN 1 KRAKSAAN</a>
            </div>
            <div class="absolute top-0 right-0 flex">
                <button type="button" class="p-2 text-gray-400 hover:text-gray-600 focus:outline-none" onclick="toggleDropdown(event)">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                  </svg>
                </button>

              </div>
        </div>
    </div>
</div>
{{--  paginate  --}}

<div class="flex justify-between items-center mt-2 mb-4">
  <div class="flex items-center">
    <label for="entries-select" class="mr-2">Show Entries:</label>
    <select id="entries-select" onchange="changeEntriesPerPage(event)" class="px-2 py-1 border rounded-md dark:bg-black">
      <option value="10" selected>10</option>
      <option value="20">20</option>
      <option value="30">30</option>
      <option value="50">50</option>
    </select>
  </div>
  <div>
    <span class="text-sm text-gray-500">1 - 10 of 10 entries</span>
  </div>
</div>
<nav class="flex justify-center">
  <ol class="pagination flex items-center">
    <li class="rounded-l-lg bg-slate-150 dark:bg-navy-500 dark:bg-black">
      <a href="#" class="flex items-center justify-center h-8 w-8 rounded-lg text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:text-navy-200 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
      </a>
    </li>
    <li class="bg-slate-150 dark:bg-navy-500">
      <a href="#" class="flex items-center justify-center h-8 min-w-[2rem] rounded-lg bg-primary text-white px-3 leading-tight transition-colors hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">1</a>
    </li>
    <li class="bg-slate-150 dark:bg-navy-500">
      <a href="#" class="flex items-center justify-center h-8 min-w-[2rem] rounded-lg px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">2</a>
    </li>
    <li class="bg-slate-150 dark:bg-navy-500">
      <a href="#" class="flex items-center justify-center h-8 min-w-[2rem] rounded-lg px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">3</a>
    </li>
    <li class="bg-slate-150 dark:bg-navy-500">
      <a href="#" class="flex items-center justify-center h-8 min-w-[2rem] rounded-lg px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">4</a>
    </li>
    <li class="bg-slate-150 dark:bg-navy-500">
      <a href="#" class="flex items-center justify-center h-8 min-w-[2rem] rounded-lg px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">5</a>
    </li>
    <li class="rounded-r-lg bg-slate-150 dark:bg-navy-500">
      <a href="#" class="flex items-center justify-center h-8 w-8 rounded-lg text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:text-navy-200 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
      </a>
    </li>
  </ol>
</nav>
