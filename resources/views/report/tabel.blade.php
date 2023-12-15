<div class="container">
    {{-- <button class="border px-4 py-1 rounded bg-blue-450">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M11 14.2V6q0-.425.288-.713T12 5q.425 0 .713.288T13 6v8.2l2.9-2.9q.275-.275.7-.275t.7.275q.275.275.275.7t-.275.7l-4.6 4.6q-.3.3-.7.3t-.7-.3l-4.6-4.6q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l2.9 2.9Z"/></svg>Export
    </button> --}}
    <div class="w-full flex justify-between pr-10">
        <input type="month" class="border rounded">
        <button class="border border-green-700 px-2 py-1 rounded font-bold text-white bg-green-700 ">export</button>
    </div>
    <div class="print-container flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table id="data-table" class="min-w-full text-left text-sm font-light print-container">
                        <thead class="border-b font-medium dark:border-neutral-500 ">
                            <tr class="">

                                <th scope="col" class="px-6 py-2">#</th>
                                <th scope="col" class="px-6 py-2">NAMA</th>
                                <th scope="col" class="px-6 py-2">SEKOLAH</th>
                                <th scope="col" class="px-6 py-2">JUMLAH JURNAL</th>
                                <th scope="col" class="px-6 py-2">JUMLAH ABSEN</th>
                                {{-- <th scope="col" class="px-6 py-2 "></th> --}}
                                {{-- <th scope="col" class="px-6 py-2 kamu-tak-diajak">AKSI</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                            <tr>
                                <th scope="col" class="px-6 py-2">{{$loop->iteration}}</th>
                                <th scope="col" class="px-6 py-2">{{$item->name}}</th>
                                <th scope="col" class="px-6 py-2">{{$item->sekolah}}</th>
                                <th scope="col" class="px-6 py-2">{{$item->jurnals->count()}}</th>
                                <th scope="col" class="px-6 py-2">{{$item->absens->count()}}</th>
                                {{-- <th scope="col" class="px-6 py-2 "></th> --}}
                                {{-- <th scope="col" class="px-6 py-2 kamu-tak-diajak">
                                    <button class="p-2 bg-blue-500 rounded-lg text-white">Lihat</button>
                                </th> --}}
                            </tr>
                            @empty

                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
