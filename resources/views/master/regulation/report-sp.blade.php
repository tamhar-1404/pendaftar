@extends('layout.app')
@section('content')
    <div class="row mb-2">
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Peraturan Laporan Sp</h4>
                </div>
                <div class="">
                    <button class="btn btn-info">Tambah data</button>
                </div>
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
                        <h4 class="card-title">Data Sp</h4>
                    </div>
                </div>
                <div class="table-rep-plugin">
                    <div class="table-responsive mb-0" data-pattern="priority-columns">
                        <table id="tech-companies-1" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th data-priority="1">Nama</th>
                                    <th data-priority="3">Tanggal</th>
                                    <th data-priority="1">Deskripsi</th>
                                    <th data-priority="3">Keterangan</th>
                                    <th data-priority="6">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
