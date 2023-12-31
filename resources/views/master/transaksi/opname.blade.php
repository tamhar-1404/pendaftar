@extends('layout.app')
@section('content')
    <style>
        .form-group {
            position: relative;
        }

        .form-control {
            border: none;
            border-bottom: 1px solid black;
            padding: 8px 0;
            width: 100%;
        }

        .underline {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 1px;
            width: 100%;
            background-color: black;
        }
    </style>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Pemasukan Barang</h4>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-2">
                <div class="">
                    <h4 class="card-title">Data Opname</h4>
                </div>
                <div class="">
                </div>
            </div>
            <div class="d-flex justify-content-center mb-4">
                <div class="form-group col-3">
                    <input type="text" id="kodeBarang" class="form-control text-center" placeholder="Masukkan Kode barang" width="100" autofocus>
                    <div class="underline"></div>
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
                                <th data-priority="3">Tanggal</th>
                                <th data-priority="3">Stok</th>
                                <th data-priority="3" colspan="2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($opname as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->barang->nama }}</td>
                                <td>{{ $item->barang->foto }}</td>
                                <td>{{ $item->barang->kode }}</td>
                                <td>{{ $item->barang->harga }}</td>
                                <td>{{ $item->barang->kategori }}</td>
                                <td>{{ Carbon\Carbon::parse($item->tanggal)->locale('id_ID')->isoFormat('DD MMMM Y') }}</td>
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
