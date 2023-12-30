@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Jurnal Siswa</h4>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="d-sm-flex flex-wrap">
            <h4 class="card-title mb-4">Grafik Jurnal Siswa</h4>
            <div class="ms-auto">
                <ul class="nav nav-pills gap-2">
                    <li class="nav-item">
                        <button class="btn btn-danger">PDF</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-info">DOCX</button>
                    </li>
                </ul>
            </div>
        </div>
        
        <div id="stacked-column-chart" class="apex-charts" data-colors='["--bs-primary", "--bs-warning", "--bs-success"]' dir="ltr"></div>
    </div>
</div>
<h4 class="card-title mb-4 mt-3">Data Jurnal Siswa</h4>
<div class="card">
    <div class="card-body">
        <div class="table-rep-plugin">
            <div class="table-responsive mb-0" data-pattern="priority-columns">
                <table id="tech-companies-1" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th data-priority="1">Nama</th>
                            <th data-priority="3">Sekolah</th>
                            <th data-priority="1">Tanggal</th>
                            <th data-priority="3">Jam</th>
                            <th data-priority="6">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection