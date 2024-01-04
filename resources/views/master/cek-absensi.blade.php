@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="">
                    <h4 class="card-title mb-4">Data Siswa</h4>
                </div>
                <div class="">
                    <h4 class="card-title mb-4">Tanggal : {{ \Carbon\Carbon::now()->locale('id_ID')->isoFormat('DD MMMM Y') }}</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                </div>
            </div>
            <div class="d-flex justify-content-between mb-3">
                <div class="">
                    <form action="">
                        <div class="input-group">
                            <input name="name" type="text" value="{{ request()->name }}" class="form-control"
                                placeholder="Search">
                            <div class="input-group-append">
                                <button class="btn text-white"
                                    style="background-color: #1B3061; border-radius: 0 5px 5px 0;" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="">
                    <div class="d-flex justify-content-header">
                        <form action="">
                            <div class="input-group">
                                <input name="date" type="date" value="{{ request()->date }}" class="form-control"
                                    placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn text-white"
                                        style="background-color: #1B3061; border-radius: 0 5px 5px 0;" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th style="background-color: #1B3061" class="text-white">No</th>
                            <th style="background-color: #1B3061" class="text-white">Siswa</th>
                            <th style="background-color: #1B3061" class="text-white">Sekolah</th>
                            {{-- <th>Tanggal</th> --}}
                            <th style="background-color: #1B3061" class="text-white">Keterangan</th>
                            <th style="background-color: #1B3061" class="text-white">Masuk</th>
                            <th style="background-color: #1B3061" class="text-white">Istirahat</th>
                            <th style="background-color: #1B3061" class="text-white">Kembali</th>
                            <th style="background-color: #1B3061" class="text-white">Pulang</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
