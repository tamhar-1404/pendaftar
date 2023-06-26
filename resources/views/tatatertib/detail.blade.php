<main class="w-full px-6 pb-8">
    <div class="flex items-center space-x-4 py-5 lg:py-6">
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Peraturan</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
                <span>Tata Tertib</span>
            </li>
        </ul>
    </div>
    @foreach ($data as $row)
    <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
        <div class="card px-4 py-4 sm:px-5">
            <div class="card-header w-full flex justify-center border-b-2 px-5">
                <h2 class="text-lg font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                    TATA TERTIB SISWA MAGANG
                </h2>
            </div>
            <div class="pt-2">
                <p>
                    {!! $row->deskripsi !!}
                </p>
            </div>
        </div>
    </div>
    @endforeach
</main>
