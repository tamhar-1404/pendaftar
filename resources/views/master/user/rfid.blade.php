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
                                    <tr>
                                        <th>1</th>
                                        <td>Abdul kader</td>
                                        <td>kader@gmail.com</td>
                                        <td>12</td>
                                        <td>12</td>
                                        <td>12 januari 2023 - 12 desember 2026</td>
                                        <td>smkn 1 kraksaan</td>
                                        <td><button class="btn btn-sm btn-info">
                                            Daftarkan
                                        </button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
