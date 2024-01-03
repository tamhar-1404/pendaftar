@extends('layout.app')
@section('content')
<h4 class="mb-3">
    Halaman Absensi Siswa
</h4>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Siswa</th>
                            <th>Sekolah</th>
                            <th>Masuk</th>
                            <th>Istirahat</th>
                            <th>Kembali</th>
                            <th>Pulang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Abdul Kader</td>
                            <td>Smkn 1 kraksaan</td>
                            <td>
                                <div class="bg-danger col-6 rounded">
                                    <p class="badge text-center badge-danger mb-0">Belum Hadir</p>
                                </div>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection