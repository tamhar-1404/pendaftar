<!-- Main Content Wrapper -->
    <style>
        /* Tambahkan animasi untuk muncul */
        @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
        }

        /* Tambahkan animasi untuk menghilang */
        @keyframes fadeOut {
        from { opacity: 1; transform: translateY(0); }
        to { opacity: 0; transform: translateY(-10px); }
        }

        /* Atur transisi untuk menu dropdown */
        .dropdown-menu {
        animation-duration: 0.3s;
        animation-timing-function: ease-in-out;
        }

        /* Atur transisi untuk muncul */
        .dropdown-menu.fade-in {
        animation-name: fadeIn;
        }

        /* Atur transisi untuk menghilang */
        .dropdown-menu.fade-out {
        animation-name: fadeOut;
        }
    </style>
<main class="main w-full px-4 pb-8">
    <div class="flex items-center justify-between py-5 lg:py-6">

        <div class="flex items-center space-x-1">

            <h2 class=" text-xl font-medium text-slate-700 line-clamp-1 dark:text-navy-50 lg:text-2xl">
                Berita
            </h2>


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
    <div class="flex justify-start mb-4">
        <a href="{{ route('Berita.create') }}"
            class="outline outline-offset-2 outline-1 bg-[#24AEE4] hover:bg-blue-700 text-white text-sm py-2 px-4 rounded">Tambah
            Berita</a>
    </div>
    {{--  end  --}}
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mx-4">
        @forelse ($blog as $berita)
        <div class="bg-white shadow-md rounded-lg overflow-hidden relative" style="width: 100%; height: 100%;">
            <img src="{{ asset('storage/fotoberita/' . $berita->foto) }}" alt="Gambar Berita 1" class="w-full h-48 object-cover object-center">
            <div class="p-4">
              <span class="text-sm text-gray-500">{{ $berita->kategori }}</span>
            <h2 class="text-xl font-semibold mt-2"><a href="{{ route('Berita.show', $berita->id) }}">{{ Str::limit($berita->judul, 15) }}</a></h2>
            </div>
            <input type="hidden" name="id" id="id" value="{{$berita->id}}">
            <div class="dropdown-wrapper" data-berita-id="{{ $berita->id }}">
                <div class="absolute top-0 right-0 p-2 cursor-pointer options-dropdown" id="optionsDropdown{{$berita->id}}">
                  <i class="fas fa-ellipsis-v"></i>
                </div>

                <div class="hidden absolute top-8 right-0 bg-white shadow-md rounded-lg py-2 z-10 dropdown-menu" id="dropdownMenu{{$berita->id}}">
                  <a href="{{ route('Berita.edit', $berita->id) }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Edit</a>
                  <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Hapus</a>
                </div>
            </div>
          </div>
          <script>
            // Dapatkan semua elemen pembungkus dropdown
            var dropdownWrappers = document.querySelectorAll('.dropdown-wrapper');

            // Fungsi untuk menyembunyikan semua dropdown terbuka
            function hideAllDropdowns() {
              dropdownWrappers.forEach(function (wrapper) {
                var dropdownMenu = wrapper.querySelector('.dropdown-menu');
                dropdownMenu.classList.add('hidden');
              });
            }

            // Tambahkan event listener pada setiap elemen pembungkus dropdown
            dropdownWrappers.forEach(function (wrapper) {
              var beritaId = wrapper.dataset.beritaId;
              var dropdownIcon = wrapper.querySelector('.options-dropdown');
              var dropdownMenu = wrapper.querySelector('.dropdown-menu');

              dropdownIcon.addEventListener('click', function (event) {
                event.stopPropagation(); // Mencegah klik menyebar ke jendela

                // Sembunyikan semua dropdown terbuka
                hideAllDropdowns();

                // Toggle kelas 'hidden' pada dropdownMenu berdasarkan $berita->id
                dropdownMenu.classList.toggle('hidden');
              });
            });

            // Tutup dropdown ketika pengguna mengklik di luar setiap elemen pembungkus dropdown
            window.addEventListener('click', function (event) {
              hideAllDropdowns();
            });
          </script>
          @empty
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
