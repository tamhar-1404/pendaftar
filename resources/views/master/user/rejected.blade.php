@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Data Siswa Di Tolak</h4>
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
                                    @forelse ($tolaks as $siswa)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $siswa->name }}</td>
                                        <td>{{ $siswa->email }}</td>
                                        <td>{{ $siswa->jurusan }}</td>
                                        <td>{{ $siswa->kelas }}</td>
                                        <td>{{ \Carbon\Carbon::parse($siswa->magang_awal)->format('d F Y') }} - {{ \Carbon\Carbon::parse($siswa->magang_akhir)->format('d F Y') }}</td>
                                        <td>{{ $siswa->sekolah }}</td>
                                        <td>
                                            <div class="d-flex justify-content-header gap-2">
                                                <div class="">
                                                    <button class="btn btn-sm btn-info">
                                                        Detail
                                                    </button>
                                                </div>
                                                <div class="">
                                                    <form action="{{ route('reject.change-to-student', $siswa->id) }}" method="post">
                                                        @csrf
                                                        @method('POST')
                                                        <button class="btn btn-sm btn-success">
                                                            Terima
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
