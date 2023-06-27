<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Tata Tertib</title>
    <!-- CSS Assets -->
    <link rel="stylesheet" href="{{ asset('admin/css/app.css') }}" />

    <!-- Javascript Assets -->
    <script src="{{ asset('admin/js/app.js') }}" defer></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
</head>

<body>
    <main class=" w-full px-4 pb-8">
        <div class="flex justify-between space-y-4 py-5 sm:flex-row  lg:py-6">
            <div class="flex items-center text-sm space-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <h2 class="text-sm font-medium text-slate-700 line-clamp-1 dark:text-navy-50">
                    Tambah Tata Tertib
                </h2>
            </div>

        </div>
        <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
            <div class="col-span-12 lg:col-span-12">
                <div class="card">
                    <div class="tabs flex flex-col">
                        <div class="is-scrollbar-hidden overflow-x-auto">
                            <div class="border-b-2 border-slate-150 dark:border-navy-500">
                                <div class="tabs-list -mb-0.5 flex">
                                    <button
                                        class="btn h-14 shrink-0 space-x-2 rounded-none border-b-2 border-info px-4 font-medium text-info dark:border-accent dark:text-accent-light sm:px-5">
                                        <i class="fa-solid fa-layer-group text-base"></i>
                                        <span>Tata Tertib</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('tatatertib.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="tab-content p-4 sm:p-5">
                                <div class="space-y-5">
                                    <label class="block">
                                        <span class="font-medium text-slate-600 dark:text-navy-100">Judul</span>
                                        <input id="judul" name="judul"
                                            class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Masukkan Judul" type="text" />
                                    </label>
                                    @error('judul')
                                        <div
                                            class="alert flex space-x-2 rounded-lg border border-error px-4 py-2 text-error">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <p>{{ $message }}</p>
                                        </div>
                                    @enderror
                                    <div>
                                        <span class="font-medium text-slate-600 dark:text-navy-100">Deskripsi</span>
                                        <div class="mt-1.5 w-full">
                                            <div>
                                                <textarea name="deskripsi" id="summernote"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    @error('deskripsi')
                                        @error('judul')
                                            <div
                                                class="alert flex space-x-2 rounded-lg border border-error px-4 py-2 text-error">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <p>{{ $message }}</p>
                                            </div>
                                        @enderror
                                    @enderror
                                    <div class="flex justify-end space-x-2">
                                        <a href="{{ route('tatatertib.index') }}"
                                            class="btn min-w-[7rem] border border-slate-300 font-medium text-slate-700 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-100 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">Batal</a>
                                        <button type="submit"
                                            class="btn min-w-[7rem] bg-info font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script>
    $('#summernote').summernote({
        placeholder: 'Deskripsi..',
        tabsize: 2,
        height: 120,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
</script>

</html>
