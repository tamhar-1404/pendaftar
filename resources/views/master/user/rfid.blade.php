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

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <h4 class="card-title">Data Siswa</h4>
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
                                        <td>{{ \Carbon\Carbon::parse($user->Siswa->magang_awal)->locale('id')->isoFormat('D MMMM Y ') }} - {{ \Carbon\Carbon::parse($user->Siswa->magang_akhir)->locale('id')->isoFormat('D MMMM Y ') }}</td>
                                        <td>{{ $user->sekolah }}</td>
                                        <td><button class="btn btn-sm btn-info">
                                            Daftarkan
                                        </button></td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="8"><center>Tidak ada data</center></td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
