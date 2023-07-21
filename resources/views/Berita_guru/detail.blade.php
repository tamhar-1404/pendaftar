<html>
    <head>
        <title>Berita | {{ $berita->judul }}</title>
    </head>
    <body>
        <script src="https://cdn.tailwindcss.com"></script>
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
                                            <p class="shrink-0">8 min</p>
                                        </div>
                                    </div>
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
            <img class="w-8 h-8 rounded-full mr-2" src="{{ asset('storage/Siswa/' . $comment->user->Siswa?->foto_siswa) }}" alt="Profil Picture">
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
    </body>
</html>
