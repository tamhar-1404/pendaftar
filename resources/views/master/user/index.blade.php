@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Data Siswa</h4>
            </div>
        </div>
    </div>

    <div class="row">
        @forelse ($siswas as $siswa)
            <div class="col-xl-3 col-sm-6">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            <div class="dropdown">
                                <p id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <span class="fa fa-ellipsis-v"></span>
                                </p>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <form id="deleteForm{{ $siswa->id }}" action="{{ route('student.delete', $siswa->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="showConfirm(event, {{ $siswa->id }})" type="submit" class="dropdown-item">Hapus</button>
                                    </form>
                                    <form id="resetForm" action="{{ route('reset-admin-password/', $siswa->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" id="resetButton" class="dropdown-item">Reset
                                            Password</button>
                                    </form>
                                    <a class="dropdown-item" href="#">Banned</a>
                                </div>
                            </div>
                        </div>
                        <div class="avatar-sm mx-auto mb-4">
                            <img class="avatar-title rounded-circle bg-primary-subtle text-primary"
                                style="object-fit: cover" src="{{ asset('storage/Siswa/' . $siswa->foto_siswa) }}">
                        </div>
                        <h5 class="font-size-15 mb-1"><a href="javascript: void(0);"
                                class="text-dark">{{ $siswa->name }}</a></h5>
                        <p class="text-muted">{{ $siswa->sekolah }}</p>
                    </div>
                    <div class="card-footer bg-transparent border-top">
                        <div class="contact-links d-flex font-size-20">
                            <div class="flex-fill">
                                <a href="student-detail/{{ $siswa->id }}"><i class="bx bx-user-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="d-flex justify-content-center">
                <div class="">
                    <img src="{{ asset('nodata.png') }}" width="300px" height="300px" alt="" srcset="">
                    <p class="fs-5 text-center mt-4 text-dark" style="font-weight: 500">
                        Data Tidak Tersedia
                    </p>
                </div>
            </div>
        @endforelse
        <div class="d-flex justify-content-center">
            {{ $siswas->links() }}
        </div>
    </div>
    <!-- end row -->
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function showConfirm(e, id) {
            e.preventDefault();
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus itu!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm' + id).submit();
                }
            })
        }
        document.getElementById('deleteButton').addEventListener('click', function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus itu!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm').submit();
                }
            })
        });
        document.getElementById('resetButton').addEventListener('click', function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Password Akan Ke Reset Menjadi 'Password'",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, reset!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('resetForm').submit();
                }
            })
        });
    </script>
@endsection
