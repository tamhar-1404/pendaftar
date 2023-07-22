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
                                <a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center space-x-2">
            <form action="">
                <label class="relative hidden sm:flex">
                    <input
                        class="form-input peer h-9 w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 text-xs+ placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="Search users..." type="text" name="cari" value="{{ request('cari') }}" />
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

            <div class="flex">
                <button
                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:hidden sm:h-9 sm:w-9">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" stroke="currentColor" fill="none"
                        viewBox="0 0 24 24">
                        <circle cx="10.2" cy="10.2" r="7.2" stroke-width="1.5"></circle>
                        <path stroke-width="1.5" stroke-linecap="round" d="M21 21l-3.6-3.6" />
                    </svg>
                </button>
                <button
                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:h-9 sm:w-9">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M3 5.109C3 4.496 3.47 4 4.05 4h16.79c.58 0 1.049.496 1.049 1.109 0 .612-.47 1.108-1.05 1.108H4.05C3.47 6.217 3 5.721 3 5.11zM5.798 12.5c0-.612.47-1.109 1.05-1.109H18.04c.58 0 1.05.497 1.05 1.109s-.47 1.109-1.05 1.109H6.848c-.58 0-1.05-.497-1.05-1.109zM9.646 18.783c-.58 0-1.05.496-1.05 1.108 0 .613.47 1.109 1.05 1.109h5.597c.58 0 1.05-.496 1.05-1.109 0-.612-.47-1.108-1.05-1.108H9.646z" />
                    </svg>
                </button>
                <button
                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:h-9 sm:w-9">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    {{--  button tambah  --}}
    <div class="flex justify-start">
        <a href="{{ route('Berita.create') }}"
            class="outline outline-offset-2 outline-1 bg-[#24AEE4] hover:bg-blue-700 text-white text-sm py-2 px-4 rounded">Tambah
            Data</a>
    </div>
    {{--  end  --}}
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 mt-4 lg:grid-cols-3 lg:gap-6">
        @php
            $no = 1;
        @endphp
        @forelse ($blog as $row)
            <div class="card">
                <img class="h-72 w-full rounded-lg object-cover object-center max-w-xs transition duration-300 ease-in-out hover:scale-110"
                    src="{{ asset('storage/fotoberita/' . $row->foto) }}" alt="image" />
                <div class="absolute inset-0 flex h-full w-full flex-col justify-end">
                    <div class="absolute top-0 right-0 mt-2 mr-2">
                        <div x-data="{ isOpen: false }">
                            <button x-tooltip="'Favorite'" @click="isOpen = !isOpen"
                                class="btn h-7 w-7 rounded-full p-0 text-black-light hover:bg-secondary/20 focus:bg-secondary/20 active:bg-secondary/25 dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                </svg>
                            </button>
                            <div x-show="isOpen" @click.away="isOpen = false"
                                class="absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-md shadow-lg"
                                x-cloak>
                                <ul>
                                    <li>
                                        <a href="{{ route('Berita.edit', $row->id) }}"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            @click="editItem()">Edit</a>
                                    </li>
                                    <li>
                                        <form action="{{ route('Berita.destroy', $row->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit"
                                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Hapus</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <script>
                        function editItem() {
                            // Logika atau perintah yang akan dijalankan saat tombol "Edit" ditekan
                            console.log("Tombol Edit ditekan");
                        }

                        function deleteItem() {
                            // Logika atau perintah yang akan dijalankan saat tombol "Hapus" ditekan
                            console.log("Tombol Hapus ditekan");
                        }
                    </script>

                    <div
                        class="space-y-1.5 rounded-lg bg-gradient-to-t from-[#19213299] via-[#19213266] to-transparent px-4 pb-3 pt-12">
                        <div class="line-clamp-2">
                            <a href="{{ route('Berita.show', $row->id) }}" class="text-base font-medium text-white">
                                {{ $row->judul }}
                            </a>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center text-xs text-slate-200">
                                <p class="flex items-center space-x-1">
                                    <span class="line-clamp-1 uppercase">{{ $row->kategori }}</span>
                                </p>
                                <div class="mx-3 my-0.5 w-px self-stretch bg-white/20"></div>
                                <p class="shrink-0 text-tiny+">{{ $row->created_at->diffForHumans() }}</p>
                            </div>
                            <form action="{{ route('berita_siswa.update', $row->id) }}" method="post">
                                @method('PUT')
                                @csrf
                                <div class="mr-1.5 flex">
                                    <button type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            width="24" height="24">
                                            <path d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M11 2C6.029 2 2 6.029 2 11c0 4.97 4.029 9 9 9 4.97 0 9-4.03 9-9 0-4.971-4.03-9-9-9zm0 16l-4-4h8l-4 4z" />
                                        </svg>
                                    </button>
                            </form>

                            <button x-tooltip="'Save'"
                                class="btn h-7 w-7 rounded-full p-0 text-navy-100 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@empty
    <tr>
        <td colspan="6" class="p-8 text-center" style="margin-left: 200px;">
            <div class="flex justify-center items-center">
                <img src="/admin/noData.png" alt="" width="280px">
            </div>
        </td>
    </tr>
    @endforelse
    </div>
</main>
{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        var likeButtons = document.querySelectorAll('.like-button');

        likeButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var blogId = this.getAttribute('data-item-id');
                store(blogId, this);
            });
        });

        function store(blogId, button) {
            fetch('{{ route('Berita.like') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        blog_id: blogId
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.liked) {
                        button.textContent = 'Unlike';
                    } else {
                        button.textContent = 'Like';
                    }
                })
                .catch(error => console.error(error));
        }
    });
</script> --}}
