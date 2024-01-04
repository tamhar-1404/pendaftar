@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Daftarkan RFID</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    @if (session('success'))
        <script>
            alert("Berhasil")
        </script>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <h4 class="card-title">Data Siswa Belum Mempunyai RFID</h4>
                        </div>
                    </div>
                    <div class="table-rep-plugin">
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th data-priority="1">Nama</th>
                                        <th data-priority="3">Email</th>
                                        <th data-priority="3">Jurusan</th>
                                        <th data-priority="1">Kelas</th>
                                        <th data-priority="3">Masa Magang</th>
                                        <th data-priority="3">Sekolah</th>
                                        <th data-priority="6">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($users as $user)
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->Siswa->jurusan }}</td>
                                            <td>{{ $user->Siswa->kelas }}</td>
                                            <td>{{ \Carbon\Carbon::parse($user->Siswa->magang_awal)->locale('id')->isoFormat('D MMMM Y ') }}
                                                -
                                                {{ \Carbon\Carbon::parse($user->Siswa->magang_akhir)->locale('id')->isoFormat('D MMMM Y ') }}
                                            </td>
                                            <td>{{ $user->sekolah }}</td>
                                            <td>
                                                <button id="daftarkan" id="{{ $user->id }}"
                                                    data-id="{{ $user->id }}" class="btn daftarkan btn-sm btn-info">
                                                    Daftarkan
                                                </button>
                                            </td>
                                        </tr>
                                    @empty
                                    <tr>
                                        <td colspan="8" class="text-center">
                                            <div class="d-flex justify-content-center">
                                                <div class="">
                                                    <img src="{{ asset('nodata.png') }}" width="300px" height="300px" alt="" srcset="">
                                                    <p class="fs-5 text-center mt-4 text-dark" style="font-weight: 500">
                                                        Data Tidak Tersedia
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <h4 class="card-title">Data Siswa</h4>
                        </div>
                    </div>
                    <div class="col-12 col-xxl-3 mt-2 col-lg-4">
                        <div class="">
                            <form action="">
                                <div class="input-group">
                                    <input name="name" type="text" value="{{ request()->name }}" class="form-control"
                                        placeholder="Search">
                                    <div class="input-group-append">
                                        <button class="btn text-white"
                                            style="background-color: #1B3061; border-radius: 0 5px 5px 0;" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="table-rep-plugin">
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th data-priority="1">Nama</th>
                                        <th data-priority="3">Email</th>
                                        <th data-priority="3">Jurusan</th>
                                        <th data-priority="1">Kelas</th>
                                        <th data-priority="3">Masa Magang</th>
                                        <th data-priority="3">Sekolah</th>
                                        <th data-priority="3">RFID</th>
                                        <th data-priority="6">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($siswas as $user)
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->Siswa->jurusan }}</td>
                                            <td>{{ $user->Siswa->kelas }}</td>
                                            <td>{{ \Carbon\Carbon::parse($user->Siswa->magang_awal)->locale('id')->isoFormat('D MMMM Y ') }}
                                                -
                                                {{ \Carbon\Carbon::parse($user->Siswa->magang_akhir)->locale('id')->isoFormat('D MMMM Y ') }}
                                            </td>
                                            <td>{{ $user->sekolah }}</td>
                                            <td>{{ $user->RFID }}</td>
                                            <td>
                                                <button id="daftarkan" id="{{ $user->id }}"
                                                    data-id="{{ $user->id }}" class="btn daftarkan btn-sm btn-warning">
                                                    Ganti RFID
                                                </button>
                                            </td>
                                        </tr>
                                    @empty
                                    <tr>
                                        <td colspan="8" class="text-center">
                                            <div class="d-flex justify-content-center">
                                                <div class="">
                                                    <img src="{{ asset('nodata.png') }}" width="300px" height="300px" alt="" srcset="">
                                                    <p class="fs-5 text-center mt-4 text-dark" style="font-weight: 500">
                                                        Data Tidak Tersedia
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $siswas->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>

    {{-- modal  --}}
    <div id="modal-create" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Tambah RFID </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <form id="form-update" method="post">
                <div class="modal-body">
                        @csrf
                        @method('PUT')
                        <label for="">RFID</label>
                        <input type="text" autofocus name="RFID" class="form-control" placeholder="Masukkan RFID">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                    </div>
            </form>
            </div>
        </div>
    </div>
    {{-- end modal  --}}
@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('.daftarkan').click(function() {
            const formData = $(this).data();
            var actionUrl = `/rfid/${formData['id']}`;
            $('#form-update').attr('action', actionUrl);
            $('#form-update').data('id', formData['id']);
            $('#modal-create').modal('show');
        });
    </script>
@endsection
