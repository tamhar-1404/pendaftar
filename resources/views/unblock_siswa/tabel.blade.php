<div class="container">
    {{-- <button class="border px-4 py-1 rounded bg-blue-450">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M11 14.2V6q0-.425.288-.713T12 5q.425 0 .713.288T13 6v8.2l2.9-2.9q.275-.275.7-.275t.7.275q.275.275.275.7t-.275.7l-4.6 4.6q-.3.3-.7.3t-.7-.3l-4.6-4.6q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l2.9 2.9Z"/></svg>Export
    </button> --}}
    <div class="print-container flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table id="data-table" class="min-w-full text-left text-sm font-light print-container">
                        <thead class="border-b font-medium dark:border-neutral-500 ">
                            <tr class="">
                                <th scope="col" class="px-6 py-2">#</th>
                                <th scope="col" class="px-6 py-2">NAMA</th>
                                <th scope="col" class="px-6 py-2">Sekolah</th>
                                <th scope="col" class="px-6 py-2">Jurusan</th>

                                <th scope="col" class="px-6 py-2 kamu-tak-diajak">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($students as $index => $student)
                                <tr>
                                    <td scope="col" class="px-6 py-2">
                                        {{ $index + 1 }}
                                    </td>
                                    <td scope="col" class="px-6 py-2">
                                        {{ $student->name }}
                                    </td>
                                    <td scope="col" class="px-6 py-2">
                                        {{ $student->sekolah }}
                                    </td>
                                    <td scope="col" class="px-6 py-2">
                                        {{ $student->jurusan }}
                                    </td>
                                    <td scope="col" class="px-6 py-2">
                                        <form id="myForm" action="{{ route('siswa.unban',$student->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="border py-1 px-4 bg-blue-400 text-white rounded" onclick="showConfirmation(event)">Buka block</button>                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <div class="border border-red-400 bg-red-400 py-2 rounded text-white">
                                    <p class="mb-0 px-5">
                                        Data tidak tersedia
                                    </p>
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  function showConfirmation(event) {
    event.preventDefault(); // Menghentikan aksi submit form yang bawaan

    Swal.fire({
      title: 'Apakah Anda yakin ingin membuka blokir?',
      text: 'Blokir akan terbuka',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Buka!',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        document.getElementById('myForm').submit(); 
      }
    });
  }
</script>
@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: '{{ session('success') }}',
    });
</script>
@endif
