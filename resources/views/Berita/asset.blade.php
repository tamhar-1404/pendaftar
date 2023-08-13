<!DOCTYPE html>
<html lang="en">

{{--  <!-- Mirrored from lineone.piniastudio.com/pages-blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 May 2023 04:16:41 GMT -->  --}}
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Meta tags  -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lineone - Blog Details</title>
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <!- - CSS Assets -->
        <link rel="stylesheet" href="{{ asset('admin/css/app.css') }}" />
        <!-- Javascript Assets -->
        <script src="{{ asset('admin/js/app.js') }}" defer></script>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com/" />
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
            rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
            /**
             * THIS SCRIPT REQUIRED FOR PREVENT FLICKERING IN SOME BROWSERS
             */
            localStorage.getItem("_x_darkMode_on") === "true" &&
                document.documentElement.classList.add("dark");
        </script>
        <script src="https://cdn.tailwindcss.com%22%3E/"></script>
        <script>
            theme: {
                extend: {
                    blur: {
                        xs: '3px',
                    }
                },
            }
        </script>
</head>

<body x-data class="is-header-blur" x-bind="$store.global.documentBody">
    <!-- App preloader-->
    {{-- <div
      class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900"
    >
      <div class="app-preloader-inner relative inline-block h-48 w-48"></div>
    </div> --}}
    <!-- Page Wrapper -->
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak>
        <!-- Sidebar -->
        <!-- App Header Wrapper-->
        <!-- Mobile Searchbar -->

        <!-- Main Content Wrapper -->
        <main class="main mt-9 px-7 w-full pb-9  ">
            <div class="">
                <div class="">
                    <div class="card lg:p-6">
                        <!-- Author -->
                        <div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <div x-data="usePopper({
                                        offset: 12,
                                        placement: 'bottom',
                                        modifiers: [
                                            { name: 'preventOverflow', options: { padding: 10 } }
                                        ]
                                    })" class="flex" @mouseleave="isShowPopper = false"
                                        @mouseenter="isShowPopper = true">
                                        <div x-ref="popperRef" class="avatar h-12 w-12">
                                            <img class="mask is-squircle"
                                                src="{{ asset('image/logo.png') }}"
                                                alt="avatar" />
                                        </div>
                                        <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">

                                        </div>
                                    </div>
                                    <div>
                                        <a href="#"
                                            class="font-medium text-slate-700 line-clamp-1 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">
                                            Hummasoft technology
                                        </a>
                                        @php
                                            use Carbon\Carbon;
                                        @endphp
                                        <div class="mt-1.5 flex items-center text-xs">
                                            <span class="line-clamp-1">{{ Carbon::parse($berita->tanggal)->format('d M') }}</span>
                                            <div class="mx-2 my-0.5 w-px self-stretch bg-white/20"></div>
                                            <p class="shrink-0">{{ $berita->created_at->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex space-x-3">

                                </div>
                            </div>

                        </div>

                        <!-- Blog Post -->
                        <div class="mt-6 font-inter text-base text-slate-600 dark:text-navy-200">
                            <h1 class="text-xl font-medium text-slate-900 dark:text-navy-50 lg:text-2xl">
                                {{ $berita->judul }}
                            </h1>
                            <h3 class="mt-1">
                                {{ $berita->keterangan }}
                            </h3>
                            <img class="mt-5 h-80 w-full rounded-lg object-cover object-center"
                                src="{{ asset('storage/fotoberita/' . $berita->foto) }}" alt="image" />
                            <p class="mt-1 text-center text-xs+ text-slate-400 dark:text-navy-300">
                                <span> Photo by </span>
                                <a href="#" class="underline">{{ $berita->name }}</a>
                            </p>
                            <br />
                            <p>
                                {!! $berita->deskripsi !!}
                            </p>
                        </div>

                        <!-- Footer Blog Post -->
                        <div class="mt-5 flex space-x-3">


                            <button onclick="likeBerita({{ $berita->id }})" id="ButtonLike{{$berita->id}}"
                                class="btn space-x-2 rounded-full border border-slate-300 px-4 text-xs+ font-medium text-slate-700 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-100 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4.5 w-4.5 text-slate-400 dark:text-navy-300"  fill="currentColor"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" fill="currentColor"
                                        d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                                </svg>

                                <span id="JumlahLike{{$berita->id}}"> {{ $berita->likes_count }}</span>
                            </button>

                            <button
                                class="btn space-x-2 rounded-full border border-slate-300 px-4 text-xs+ font-medium text-slate-700 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-100 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4.5 w-4.5 text-slate-400 dark:text-navy-300" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z" />
                                </svg>
                                <span> {{ count($berita->comments) }}</span>
                            </button>
                        </div>
                    </div>

                </div>
                @foreach ($berita->comments as $comment)
                <div class="bg-white p-4 mb-0 rounded shadow">
            <div class="flex items-center mb-2">
                <img class="w-8 h-8 rounded-full mr-2" src="{{ asset('storage/Siswa/' . $comment->user->Siswa?->foto_siswa) }}" alt="Profil Picture">
                <div class="flex flex-col">
                    <h4 class="text-lg font-bold">{{ $comment->user->name }}</h4>
                    <p class="text-sm font-light">{{ Carbon::parse($comment->created_at)->format('d M Y') }}</p>
                </div>
            </div>
        <p class="text-gray-700 mb-2">{{ $comment->comment }}</p>
        <span class="text-blue-500 reply-button">Balas</span>

        <div class="reply-form hidden mt-2">
            <div class="bg-white shadow-md border border-slate-200 rounded-md ">
                <form action="{{ route('comment.reply') }}" method="POST">
                @csrf
                <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                <div class="flex w-full">
                    <textarea class="w-full p-2 border-none rounded-t-md focus:outline-none mb-2" placeholder="Tulis balas" name="comment" id="txarea"></textarea>
                </div>
                <div class="flex flex-row-reverse mx-2 mb-2">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg ml-2">Balas</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    @if(count($comment->reply_comments) != 0)
    @foreach ($comment->reply_comments as $reply)
    <div class="bg-white p-4 ml-8 mt-2 shadow">
        <div class="flex items-center mb-2">
            @if ($reply->user->role == 'Admin')
                <img class="w-8 h-8 rounded-full mr-2" src="{{ asset('admin/assets/images/Logo.png') }}" alt="Profil Picture">
            @else
                <img class="w-8 h-8 rounded-full mr-2" src="{{ asset('storage/Siswa/' . $reply->user->Siswa?->foto_siswa) }}" alt="Profil Picture">
            @endif
            <div class="flex flex-col">
                <h4 class="text-lg font-bold">{{ $reply->user->name }}</h4>
                <p class="text-sm font-light">{{ Carbon::parse($reply->created_at)->format('d M Y') }}</p>
            </div>
        </div>
        <p class="text-gray-700 mb-2"><i class="fa-solid fa-reply text-gray-500"></i> <span class="text-blue-500">{{ $reply->komentar->user->name }}</span> {{ $reply->comment }}</p>
    </div>
    @endforeach
    @endif
    <div class="mb-5"></div>
    @endforeach
            </div>
    </div>
    </main>
    </div>
    <!--
        This is a place for Alpine.js Teleport feature
        @see https://alpinejs.dev/directives/teleport
      -->
    <div id="x-teleport-target"></div>
    <script>
        window.addEventListener("DOMContentLoaded", () => Alpine.start());
    </script>
    <script>
        // Ambil semua elemen tombol balas
        var replyButtons = document.getElementsByClassName('reply-button');

        // Loop melalui setiap tombol balas
        for (var i = 0; i < replyButtons.length; i++) {
          // Tambahkan event listener pada setiap tombol balas
          replyButtons[i].addEventListener('click', function() {
            // Cari elemen form balasan terkait
            var replyForm = this.nextElementSibling;

            // Ubah visibilitas form balasan
            replyForm.classList.toggle('hidden');
          });
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
        function likeBerita(beritaId) {
            if (beritaId.value == "") {
                console.log("Kosong")
                return;
            } else {
                console.log(beritaId);
                $.ajax({
                    url: "{{ route('Berita.like') }}",
                    method: 'POST',
                    data: {
                        id : beritaId,
                    },
                    success: function(response) {
                        if(response.action === 'tambah'){
                            const jumlah = document.getElementById("JumlahLike"+beritaId).innerHTML;
                            var penambahan = parseInt(jumlah) + 1;
                            document.getElementById("JumlahLike"+beritaId).innerHTML = penambahan.toString();
                            const button = document.getElementById("ButtonLike" + beritaId);
                            button.classList.add("bg-blue-300");
                            button.classList.add("text-white");

                            console.log(jumlah);
                            console.log(button);
                            console.log("awokawok");
                        }
                        else if(response.action === 'hapus'){
                            const jumlah = document.getElementById("JumlahLike"+beritaId).innerHTML;
                            var penambahan = parseInt(jumlah) - 1;
                            document.getElementById("JumlahLike"+beritaId).innerHTML = penambahan.toString();
                            const button = document.getElementById("ButtonLike" + beritaId);
                            button.classList.remove("bg-blue-300")
                            button.classList.remove("text-white")
                            console.log("anjay");
                        }
                         console.log(beritaId);
                         console.log(response);

                    },
                    error: function(error) {
                        console.log('Terjadi kesalahan saat mengirim permintaan.');
                        console.error(error);
                        // Lakukan tindakan yang sesuai jika terjadi kesalahan.
                    }

                })
            }
        }





    </script>
        <script>
           $(document).ready(function() {
                $.ajax({
                    url: '/get-users',
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        data.forEach(function(dataItem) {
                            const beritaId = dataItem.berita_id;
                            const button = document.getElementById("ButtonLike" + beritaId);
                            if(button === null){
                                console.log("kosong");
                            }else{
                                button.classList.add("bg-blue-300");
                                button.classList.add("text-white");
                                console.log("Button: ", button); // Log the button element
                                console.log("Berita ID: ", beritaId); // Log the extracted beritaId
                            }
                        });
                    },
                         error: function(error) {
                        console.log('Error:', error);
                    }
                });
            });
        </script>
</body>

<!-- Mirrored from lineone.piniastudio.com/pages-blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 May 2023 04:16:41 GMT -->

</html>
