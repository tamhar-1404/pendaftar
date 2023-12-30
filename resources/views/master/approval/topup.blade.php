@extends('layout.app')
@section('content')

    <h4 class="mb-4 font-size-18">Approval TopUp</h4>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <h4 class="card-title">Data User</h4>
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
                                        <th data-priority="1">Rfid</th>
                                        <th data-priority="3">Sekolah</th>
                                        <th data-priority="3">Saldo</th>
                                        <th data-priority="3">Tanggal</th>
                                        <th data-priority="6">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Abdul kader</td>
                                        <td>12</td>
                                        <td>12</td>
                                        <td>12.000</td>
                                        <td>12 januari 2023 - 12 desember 2026</td>
                                        <td>smkn 1 kraksaan</td>
                                        <td>
                                            <div class="d-flex justify-content-header  gap-2">
                                                <div class="">
                                                    <button class="btn btn-sm btn-danger">
                                                    Tolak
                                                    </button>
                                                </div>
                                                <div class="">
                                                    <button class="btn btn-sm btn-info">
                                                        Terima
                                                        </button>
                                                </div>
                                            </div>
                                    </td>
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
