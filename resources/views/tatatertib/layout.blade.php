<main class=" w-full px-6 pb-8">
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
    <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
        <!-- Users Table -->
        <div>
            <div class="flex items-center justify-between">
                <a href="{{ route('tatatertib.create') }}"
                    class="outline outline-offset-2 outline-1 bg-[#24AEE4] hover:bg-blue-400 text-white text-sm py-2 px-4 rounded">
                    Tambah data
                </a>
                <div class="flex">
                    <div class="flex items-center" x-data="{ isInputActive: false }">

                    </div>
                    <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="isShowPopper && (isShowPopper = false)"
                        class="inline-flex">
                        <form action="">
                            <label class="relative hidden sm:flex">
                                <input
                                    class="form-input peer h-9 w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 text-xs+ placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="Search users..." type="text" name="cari"
                                    value="{{ request('cari') }}" />
                                <span
                                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4 transition-colors duration-200" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M3.316 13.781l.73-.171-.73.171zm0-5.457l.73.171-.73-.171zm15.473 0l.73-.171-.73.171zm0 5.457l.73.171-.73-.171zm-5.008 5.008l-.171-.73.171.73zm-5.457 0l-.171.73.171-.73zm0-15.473l-.171-.73.171.73zm5.457 0l.171-.73-.171.73zM20.47 21.53a.75.75 0 101.06-1.06l-1.06 1.06zM4.046 13.61a11.198 11.198 0 010-5.115l-1.46-.342a12.698 12.698 0 000 5.8l1.46-.343zm14.013-5.115a11.196 11.196 0 010 5.115l1.46.342a12.698 12.698 0 000-5.8l-1.46.343zm-4.45 9.564a11.196 11.196 0 01-5.114 0l-.342 1.46c1.907.448 3.892.448 5.8 0l-.343-1.46zM8.496 4.046a11.198 11.198 0 015.115 0l.342-1.46a12.698 12.698 0 00-5.8 0l.343 1.46zm0 14.013a5.97 5.97 0 01-4.45-4.45l-1.46.343a7.47 7.47 0 005.568 5.568l.342-1.46zm5.457 1.46a7.47 7.47 0 005.568-5.567l-1.46-.342a5.97 5.97 0 01-4.45 4.45l.342 1.46zM13.61 4.046a5.97 5.97 0 014.45 4.45l1.46-.343a7.47 7.47 0 00-5.568-5.567l-.342 1.46zm-5.457-1.46a7.47 7.47 0 00-5.567 5.567l1.46.342a5.97 5.97 0 014.45-4.45l-.343-1.46zm8.652 15.28l3.665 3.664 1.06-1.06-3.665-3.665-1.06 1.06z" />
                                    </svg>
                                </span>
                            </label>
                        </form>
                        <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                            class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M3 5.109C3 4.496 3.47 4 4.05 4h16.79c.58 0 1.049.496 1.049 1.109 0 .612-.47 1.108-1.05 1.108H4.05C3.47 6.217 3 5.721 3 5.11zM5.798 12.5c0-.612.47-1.109 1.05-1.109H18.04c.58 0 1.05.497 1.05 1.109s-.47 1.109-1.05 1.109H6.848c-.58 0-1.05-.497-1.05-1.109zM9.646 18.783c-.58 0-1.05.496-1.05 1.108 0 .613.47 1.109 1.05 1.109h5.597c.58 0 1.05-.496 1.05-1.109 0-.612-.47-1.108-1.05-1.108H9.646z" />
                            </svg>
                        </button>
                        {{-- <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                            <div
                                class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                <ul>
                                    <li>
                                        <a href="#"
                                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another
                                            Action</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something
                                            else</a>
                                    </li>
                                </ul>
                                <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                <ul>
                                    <li>
                                        <a href="#"
                                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated
                                            Link</a>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="is-scrollbar-hidden min-w-full overflow-x-auto" x-data="pages.tables.initExample1">
                    <table class="is-hoverable w-full text-left">
                        <thead class="">
                            <tr class="">
                                <th
                                    class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-2 font-bold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                    #
                                </th>
                                <th
                                    class="whitespace-nowrap bg-slate-200 px-4 py-2 font-bold  uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                    Judul
                                </th>
                                <th
                                    class="whitespace-nowrap bg-slate-200 px-4 py-2 font-bold  uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                    Deskripsi
                                </th>
                                <th
                                    class="whitespace-nowrap rounded-tr-lg bg-slate-200 px-4 py-2 font-bold  uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @forelse ($tatatertib as $row)
                                <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                                    <td
                                        class="whitespace-nowrap px-3 py-2 font-medium text-slate-700 dark:text-navy-100 lg:px-5">
                                        {{ $no++ }}</td>
                                    <td
                                        class="whitespace-nowrap px-3 py-2 font-medium text-slate-700 dark:text-navy-100 lg:px-5">
                                        {{ $row->judul }}</td>
                                    <td class="whitespace-nowrap px-3 py-2 font-medium text-slate-700 dark:text-navy-100 lg:px-5"
                                        style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                        {!! Str::limit($row->deskripsi, 40) !!}
                                    </td>


                                    <td class="whitespace-nowrap px-3 py-2">
                                        <div class="flex items-center space-x-2">
                                            <a href="{{ route('tatatertib.edit', $row->id) }}">
                                                <div
                                                    class="w-16 flex h-8 bg-white rounded-md border-2 border-[#00B7FF] justify-center items-center text-[#00B7FF] hover:bg-[#00B7FF] hover:text-white dark:bg-transparent ">
                                                    <span class=" p-1  font-semibold dark:hover:text-black">Edit</span>
                                                </div>
                                            </a>
                                            <a href="{{ route('tatatertib.show', $row->id) }}">
                                                <div
                                                    class="w-16 flex h-8 bg-white rounded-md border-2 border-[#00B7FF] justify-center items-center text-[#00B7FF] hover:bg-[#00B7FF] hover:text-white dark:bg-transparent ">
                                                    <span class=" p-1  font-semibold dark:hover:text-black">Show</span>
                                                </div>
                                            </a>
                                            <form action="{{ route('tatatertib.destroy', $row->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" data-nama="judul"
                                                    class="deletetatib w-16 flex h-8 bg-white rounded-md border-2 border-red-500 justify-center items-center text-red-500 hover:bg-red-500 hover:text-white dark:bg-transparent ">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="p-8 text-center">
                                        <div class="flex justify-center items-center">
                                            <img src="/admin/noData.png" alt="" width="280px">
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $tatatertib->appends(['cari' => request('cari')])->links() }}
                </div>


            </div>
        </div>
    </div>
    </div>
</main>
<!--
        This is a place for Alpine.js Teleport feature
        @see https://alpinejs.dev/directives/teleport
      -->
<div id="x-teleport-target"></div>
<script>
    window.addEventListener("DOMContentLoaded", () => Alpine.start());
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
    $('.deletetatib').click(function() {
        var tatibid = $(this).attr('data-id');
        var judul = $(this).attr('data-nama');
        swal({
                title: "Anda yakin?!",
                text: "Ingin menghapus data dengan nama " + judul + " ",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/deletetatib/" + tatibid + ""
                    swal("Data berhasil dihapus!", {
                        icon: "success",
                    });
                } else {
                    swal("Batal menghapus Data!");
                }
            });
    });
</script>
