@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Pendataan Barang</h4>
        </div>
    </div>
</div>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-4">
                <div class="">
                    <h4 class="card-title">Data Pendaftar</h4>
                </div>
                <div class="">
                    <button class="btn btn-info">Tambah Data</button>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="">
                </div>
            </div>
            <div class="table-rep-plugin">
                <div class="table-responsive mb-0" data-pattern="priority-columns">
                    <table id="tech-companies-1" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th data-priority="1">Nama</th>
                                <th data-priority="3">Foto</th>
                                <th data-priority="1">Kode</th>
                                <th data-priority="3">Harga</th>
                                <th data-priority="3">Kategori</th>
                                <th data-priority="3">Deskripsi</th>
                                <th data-priority="3">Stok</th>
                                <th data-priority="3" colspan="2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($barangs as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td><div class="avatar-sm mx-auto">
                                    <img class="avatar-title rounded-circle bg-primary-subtle text-primary " src="{{ asset('storage/pendataanbarang/' . $item->foto) }}">
                                </div></td>
                                <td>{{ $item->kode }}</td>
                                <td>{{ $item->harga }}</td>
                                <td>{{ $item->kategori }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td>{{ $item->stok }}</td>
                                <td><button class="btn btn-info">Edit</button></td>
                                <td><button class="btn btn-danger">Hapus</button></td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="9" class="text-center">
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
@endsection
