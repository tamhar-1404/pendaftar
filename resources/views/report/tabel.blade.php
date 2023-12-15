<div class="container">
    {{-- <button class="border px-4 py-1 rounded bg-blue-450">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M11 14.2V6q0-.425.288-.713T12 5q.425 0 .713.288T13 6v8.2l2.9-2.9q.275-.275.7-.275t.7.275q.275.275.275.7t-.275.7l-4.6 4.6q-.3.3-.7.3t-.7-.3l-4.6-4.6q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l2.9 2.9Z"/></svg>Export
    </button> --}}
    <div class="w-full flex justify-between pr-10">
        <form action="" class="flex items-center">
            <input type="month" name="month" value="{{$MonthYear}}"  class="border rounded-l">
            <button class="bg-blue-500 rounded-r text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path fill="currentColor" d="M9.5 16q-2.725 0-4.612-1.888T3 9.5q0-2.725 1.888-4.612T9.5 3q2.725 0 4.613 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l5.6 5.6q.275.275.275.7t-.275.7q-.275.275-.7.275t-.7-.275l-5.6-5.6q-.75.6-1.725.95T9.5 16m0-2q1.875 0 3.188-1.312T14 9.5q0-1.875-1.312-3.187T9.5 5Q7.625 5 6.313 6.313T5 9.5q0 1.875 1.313 3.188T9.5 14"/></svg>
            </button>
        </form>
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
                            <tr class="border-b-2">
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
                            <td colspan="6" class="p-8 text-center">
                                <div class="flex justify-center items-center">
                                    <img src="/admin/noData.png" alt=""
                                        width="280px">
                                </div>
                            </td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $data->appends(['cari' => request('cari')])->onEachSide(0)->links() }}
            </div>
        </div>
    </div>
</div>
