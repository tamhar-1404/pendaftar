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
                            <div>
                                <select class="form-select" name="" id="filter" onchange="Filter(this)">
                                    <option value="Mingguan">Mingguan</option>
                                    <option value="Bulanan">Bulanan</option>
                                </select>
                            </div>
                            <div class="" id="inputan">
                                <input class="form-control" type="week" value="" name="Mingguan" id="example-week-input">
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-info">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M9.5 16q-2.725 0-4.612-1.888T3 9.5q0-2.725 1.888-4.612T9.5 3q2.725 0 4.613 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l5.6 5.6q.275.275.275.7t-.275.7q-.275.275-.7.275t-.7-.275l-5.6-5.6q-.75.6-1.725.95T9.5 16Zm0-2q1.875 0 3.188-1.312T14 9.5q0-1.875-1.312-3.187T9.5 5Q7.625 5 6.313 6.313T5 9.5q0 1.875 1.313 3.188T9.5 14Z"/></svg>
                                </button>
                            </div>
                        </div>
                    </form>
                    @if (request()->has('Mingguan') || request()->has('Bulanan'))
                    <div class="d-flex " style="justify-content: end;">
                        <a href="/menu-persentasi">
                            <button class="btn btn-danger p-1 mt-1" >
                                Reset FIlter
                            </button>
                        </a>
                    </div>
                    @else

                    @endif
                </div>
            </div>
            <h4 class="card-title mb-4">Data Persentasi</h4>

            <div class="crypto-buy-sell-nav">
                <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#buy" role="tab">
                            Sudah Persentasi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#sell" role="tab">
                            Sedang Persentasi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#all" role="tab">
                            Belum Persentasi
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
                                        <th style="background-color: #1B3061" class="text-white">Nama Team</th>
                                        <th style="background-color: #1B3061" class="text-white">Nama Project</th>
                                        <th style="background-color: #1B3061" class="text-white">Divisi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Rizqi</td>
                                        <td>Sumber Rejeki</td>
                                        <td>Pemeliharaan Kebun</td>
                                        <td>Web Devlopment</td>
                                    </tr>
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
                                        <th style="background-color: #1B3061" class="text-white">Nama Team</th>
                                        <th style="background-color: #1B3061" class="text-white">Nama Project</th>
                                        <th style="background-color: #1B3061" class="text-white">Divisi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Rizqi</td>
                                        <td>Sumber Rejeki</td>
                                        <td>Pemeliharaan Kebun</td>
                                        <td>Web Devlopment</td>
                                    </tr>

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
                                        <th style="background-color: #1B3061" class="text-white">Nama Team</th>
                                        <th style="background-color: #1B3061" class="text-white">Nama Project</th>
                                        <th style="background-color: #1B3061" class="text-white">Divisi</th>
                                        @if (request()->has('Mingguan') || request()->has('Bulanan'))
                                        <th style="background-color: #1B3061" class="text-white">Jumlah</th>
                                        @else

                                        @endif


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Rizqi</td>
                                        <td>Sumber Rejeki</td>
                                        <td>Pemeliharaan Kebun</td>
                                        <td>Web Devlopment</td>
                                        @if (request()->has('Mingguan') || request()->has('Bulanan'))
                                        <td>999</td>
                                        @else

                                        @endif
                                    </tr>
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
    <script>
        function Filter(){
            var filter = document.getElementById("filter").value;
            var inputan = document.getElementById("inputan");
            inputan.innerHTML = '';
            if(filter === 'Mingguan'){
                inputan.innerHTML = ' <input class="form-control" type="week" value="" name="Mingguan" id="example-week-input">';
            }else if( filter === 'Bulanan'){
                inputan.innerHTML = ' <input class="form-control" type="month" value="" name="Bulanan" id="example-month-input">';
            }
        }
    </script>
@endsection
