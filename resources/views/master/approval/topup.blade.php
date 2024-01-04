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
                                        <th style="background-color: #1B3061" class="text-white">No</th>
                                        <th style="background-color: #1B3061" class="text-white" data-priority="1">Nama</th>
                                        <th style="background-color: #1B3061" class="text-white" data-priority="3">Email</th>
                                        <th style="background-color: #1B3061" class="text-white" data-priority="1">Rfid</th>
                                        <th style="background-color: #1B3061" class="text-white" data-priority="3">Sekolah</th>
                                        <th style="background-color: #1B3061" class="text-white" data-priority="3">Saldo</th>
                                        <th style="background-color: #1B3061" class="text-white" data-priority="3">Tanggal</th>
                                        <th style="background-color: #1B3061" class="text-white" data-priority="6">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($topUp as $item)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->user->email }}</td>
                                        <td>{{ $item->user->RFID }}</td>
                                        <td>{{ $item->user->sekolah }}</td>
                                        <td>{{ $item->saldo }}</td>
                                        <td>{{ Carbon\Carbon::parse($item->tanggal)->locale('id_ID')->isoFormat('DD MMMM Y') }}</td>
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
