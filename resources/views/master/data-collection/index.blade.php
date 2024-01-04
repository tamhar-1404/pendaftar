@extends('layout.app')
@section('content')
    <style>
        .text-kegiatan {
            word-break: break-all;
        }

        .child {
            word-break: break-word;
        }

        .dtr-details {
            word-break: break-word;
        }

        .dtr-data {
            word-break: break-word;
        }

        .Text-kegiatan {
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;


            @supports (-webkit-line-clamp: 1) {
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: initial;
                display: -webkit-box;
                -webkit-line-clamp: 1;
                -webkit-box-orient: vertical;
            }
        }
    </style>
    <div class="card">
        <div class="card-body">
            <div class="float-end">
                <div class="dropdown">
                    <form action="" class="flex mt-6">
                        <div class="d-flex justify-content-end gap-2">
                            <div class="">
                                <input type="date" id="TanggalTunggal" name="TanggalTunggal"  class="form-control" value="{{$Tanggal}}" >
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-info">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M9.5 16q-2.725 0-4.612-1.888T3 9.5q0-2.725 1.888-4.612T9.5 3q2.725 0 4.613 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l5.6 5.6q.275.275.275.7t-.275.7q-.275.275-.7.275t-.7-.275l-5.6-5.6q-.75.6-1.725.95T9.5 16Zm0-2q1.875 0 3.188-1.312T14 9.5q0-1.875-1.312-3.187T9.5 5Q7.625 5 6.313 6.313T5 9.5q0 1.875 1.313 3.188T9.5 14Z"/></svg>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <h4 class="card-title mb-4">Data Jurnal</h4>

            <div class="crypto-buy-sell-nav">
                <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#buy" role="tab">
                            Mengisi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#sell" role="tab">
                            Tidak Mengisi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#all" role="tab">
                            Semua
                        </a>
                    </li>
                </ul>

                <div class="tab-content crypto-buy-sell-nav-content p-4">
                    {{-- mengisi --}}
                    <div class="tab-pane active" id="buy" role="tabpanel">

                        <div class="table-responsive">
                            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="background-color: #1B3061" class="text-white">No</th>
                                        <th style="background-color: #1B3061" class="text-white">Nama</th>
                                        <th style="background-color: #1B3061" class="text-white">Tanggal</th>
                                        <th style="background-color: #1B3061" class="text-white">Status</th>
                                        <th style="background-color: #1B3061" class="text-white">Kegiatan</th>
                                        <th style="background-color: #1B3061" class="text-white">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($mengisi as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->tanggal }}</td>
                                            <td>{{ $data->status }}</td>
                                            <td>
                                                <span class="text-kegiatan">
                                                    {{ Str::limit($data->kegiatan, 30) }}
                                                </span>
                                            </td>

                                            <td>
                                                <span>
                                                    <button class="border rounded bg-primary font-semibold text-white"
                                                        style="" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalScrollable{{ $data->id }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M12 16q1.875 0 3.188-1.312T16.5 11.5q0-1.875-1.312-3.187T12 7q-1.875 0-3.187 1.313T7.5 11.5q0 1.875 1.313 3.188T12 16m0-1.8q-1.125 0-1.912-.788T9.3 11.5q0-1.125.788-1.912T12 8.8q1.125 0 1.913.788T14.7 11.5q0 1.125-.787 1.913T12 14.2m0 4.8q-3.65 0-6.65-2.037T1 11.5q1.35-3.425 4.35-5.462T12 4q3.65 0 6.65 2.038T23 11.5q-1.35 3.425-4.35 5.463T12 19m0-2q2.825 0 5.188-1.487T20.8 11.5q-1.25-2.525-3.613-4.012T12 6Q9.175 6 6.813 7.488T3.2 11.5q1.25 2.525 3.613 4.013T12 17" />
                                                        </svg>
                                                    </button>
                                                </span>
                                            </td>
                                        </tr>
                                        <!-- Scrollable modal -->
                                        <div class="modal fade" id="exampleModalScrollable{{ $data->id }}"
                                            tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Jurnal
                                                            Siswa </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <span class="col-md-6 mb-1"> Nama : </span>
                                                            <span class="col-md-12 mb-3"> {{ $data->name }} </span>
                                                        </div>
                                                        <div class="row">
                                                            <span class="col-md-6 mb-1"> Sekolah : </span>
                                                            <span class="col-md-12 mb-3"> {{ $data->sekolah }} </span>
                                                        </div>
                                                        <div class="row">
                                                            <span class="col-md-6 mb-1"> Tanggal : </span>
                                                            <span class="col-md-12 mb-3"> {{ $data->tanggal }} </span>
                                                        </div>
                                                        <div class="row">
                                                            <span class="col-md-6 mb-1"> Jam : </span>
                                                            <span class="col-md-12 mb-3">
                                                                {{ $data->created_at->format('H:i:s') }}</span>
                                                        </div>
                                                        <div class="row">
                                                            <span class="col-md-6 mb-1"> Kegiatan : </span>
                                                            <span class="col-md-12 mb-3">{{ $data->kegiatan }} </span>
                                                        </div>
                                                        <div class="row">
                                                            <span class="col-md-6 mb-1"> Bukti : </span>
                                                            <span class="col-md-12 mb-3"> <img
                                                                    src="{{ asset('storage/image/' . $data->image) }}"
                                                                    width="100%" height="100%" alt=""> </span>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">

                                                        <button type="button" class="btn btn-primary"
                                                            data-bs-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                    @empty
                                    @endforelse

                                </tbody>

                            </table>
                        </div>

                    </div>

                    <div class="tab-pane" id="sell" role="tabpanel">
                        <div class="table-responsive">
                            <table id="TidakMengisi" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="background-color: #1B3061" class="text-white">No</th>
                                        <th style="background-color: #1B3061" class="text-white">Nama</th>
                                        <th style="background-color: #1B3061" class="text-white">Tanggal</th>
                                        <th style="background-color: #1B3061" class="text-white">Status</th>
                                        <th style="background-color: #1B3061" class="text-white">Kegiatan</th>
                                        <th style="background-color: #1B3061" class="text-white">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($tidakMengisi as  $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->tanggal }}</td>
                                            <td>{{ $data->sekolah }}</td>
                                        </tr>
                                    @empty
                                    @endforelse

                                </tbody>

                            </table>
                        </div>
                    </div>
                    <div class="tab-pane" id="all" role="tabpanel">
                        <div class="table-responsive">
                            <table id="Semua" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="background-color: #1B3061" class="text-white">No</th>
                                        <th style="background-color: #1B3061" class="text-white">Nama</th>
                                        <th style="background-color: #1B3061" class="text-white">Tanggal</th>
                                        <th style="background-color: #1B3061" class="text-white">Status</th>
                                        <th style="background-color: #1B3061" class="text-white">Kegiatan</th>
                                        <th style="background-color: #1B3061" class="text-white">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($semuaJurnal as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->tanggal }}</td>
                                            <td>{{ $data->status }}</td>
                                            <td style="word-break: break-word;">
                                                <span class="text-kegiatan">
                                                    {{ Str::limit($data->kegiatan, 30) }}
                                                </span>
                                            </td>
                                            <td>
                                                <span>
                                                    <button data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalScrollableAll{{ $data->id }}"
                                                        class="btn btn-info"
                                                        style="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M12 16q1.875 0 3.188-1.312T16.5 11.5q0-1.875-1.312-3.187T12 7q-1.875 0-3.187 1.313T7.5 11.5q0 1.875 1.313 3.188T12 16m0-1.8q-1.125 0-1.912-.788T9.3 11.5q0-1.125.788-1.912T12 8.8q1.125 0 1.913.788T14.7 11.5q0 1.125-.787 1.913T12 14.2m0 4.8q-3.65 0-6.65-2.037T1 11.5q1.35-3.425 4.35-5.462T12 4q3.65 0 6.65 2.038T23 11.5q-1.35 3.425-4.35 5.463T12 19m0-2q2.825 0 5.188-1.487T20.8 11.5q-1.25-2.525-3.613-4.012T12 6Q9.175 6 6.813 7.488T3.2 11.5q1.25 2.525 3.613 4.013T12 17" />
                                                        </svg>
                                                    </button>
                                                </span>
                                            </td>
                                        </tr>
                                        <!-- Scrollable modal -->
                                        <div class="modal fade" id="exampleModalScrollableAll{{ $data->id }}"
                                            tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Jurnal
                                                            Siswa </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <span class="col-md-6 mb-1"> Nama : </span>
                                                            <span class="col-md-12 mb-3"> {{ $data->name }} </span>
                                                        </div>
                                                        <div class="row">
                                                            <span class="col-md-6 mb-1"> Sekolah : </span>
                                                            <span class="col-md-12 mb-3"> {{ $data->sekolah }} </span>
                                                        </div>
                                                        <div class="row">
                                                            <span class="col-md-6 mb-1"> Tanggal : </span>
                                                            <span class="col-md-12 mb-3"> {{ $data->tanggal }} </span>
                                                        </div>
                                                        <div class="row">
                                                            <span class="col-md-6 mb-1"> Jam : </span>
                                                            <span class="col-md-12 mb-3">
                                                                {{ $data->created_at->format('H:i:s') }}</span>
                                                        </div>
                                                        <div class="row">
                                                            <span class="col-md-6 mb-1"> Kegiatan : </span>
                                                            <span class="col-md-12 mb-3">{{ $data->kegiatan }} </span>
                                                        </div>
                                                        <div class="row">
                                                            <span class="col-md-6 mb-1"> Bukti : </span>
                                                            <span class="col-md-12 mb-3"> <img
                                                                    src="{{ asset('storage/image/' . $data->image) }}"
                                                                    width="100%" height="100%" alt=""> </span>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">

                                                        <button type="button" class="btn btn-primary"
                                                            data-bs-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                    @empty
                                    @endforelse
                                </tbody>

                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
@endsection
@section('script')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

    <script>
        new DataTable('#example');
    </script>
    <script>
        new DataTable('#TidakMengisi');
    </script>
    <script>
        new DataTable('#Semua');
    </script>
@endsection
