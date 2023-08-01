<!-- Main Content Wrapper -->
<main class="main w-full px-4 pb-8">
    <div class="flex items-center justify-between py-5 lg:py-6">

        <div class="flex items-center space-x-1">

            <h2 class=" text-xl font-medium text-slate-700 line-clamp-1 dark:text-navy-50 lg:text-2xl">
                Berita
            </h2>

            <div x-data="usePopper({ placement: 'bottom-start', offset: 4 })" @click.outside="isShowPopper && (isShowPopper = false)" class="inline-flex">


                <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                    <div
                        class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                        <ul>
                            <li>
                                <a href="#"
                                    class="flex h-8 items-center space-x-3 px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">

                            </li>
                            <li>
                                <a href="#"
                                    class="flex h-8 items-center space-x-3 px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mt-px h-4.5 w-4.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                    </svg>
                                    <span>Export Posts</span></a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex h-8 items-center space-x-3 px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mt-px h-4.5 w-4.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span>Setting</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center space-x-2">
            <label class="relative hidden sm:flex">
                <form action="">
                    <label class="relative hidden px-4 mt-1 sm:flex">
                        <input
                            class="form-input peer h-9 w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 text-xs+ placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="Search heree..." type="text" name="cari" value="{{ request('cari') }}" />
                    </label>
                </form>

            </label>


        </div>
    </div>
    {{--  button tambah  --}}

    {{--  end  --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @forelse ($blogs as $berita)
            <div class="bg-white shadow-md rounded-lg overflow-hidden dark:bg-black">
                <img src="{{ asset('storage/fotoberita/' . $berita->foto) }}" alt="Gambar Berita 1" class="w-full h-48 object-cover object-center">
                <div class="p-4">
                    <span class="text-sm text-gray-500">{{ $berita->kategori }}</span>
                    <h2 class="text-xl font-semibold mt-2"><a href="{{ route('berita_siswa.show', $berita->id) }}">{{ $berita->judul }}</a></h2>
                    <div class="flex items-center mt-2">
                        <form action="{{ route('Berita.like', $berita->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="flex items-center bg-gray-200 rounded-full px-3 py-1 mr-2">
                                <i class="fas fa-thumbs-up mr-1"></i>
                                Like
                            </button>
                        </form>
                        <span class="text-gray-500">{{ $berita->likes_count }} Likes</span>
                    </div>
                </div>
            </div>
        @empty
            <div class="flex justify-center items-center col-span-3">
                <img src="/admin/noData.png" alt="" width="300px">
            </div>
        @endforelse
    </div>

</main>
