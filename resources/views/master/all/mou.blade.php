@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="d-flex justify-content-between mb-3">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Data MOU</h4>
            </div>
            <div class="">
                <button class="btn btn-info">Tambah</button>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100 datatable-buttons">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Logo</th>
                    <th>Email</th>
                    <th>No Telephone</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>


            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>button</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection