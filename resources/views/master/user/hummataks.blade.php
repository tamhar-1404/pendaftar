@extends('layout.app')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Pengguna Hummataks</h4>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-4">
                <div class="">
                    <h4 class="card-title">Pengguna</h4>

                </div>

            </div>

            <div class="d-flex justify-content-between">
                <div class="">
                </div>
            </div>
            <div class="tab-pane" id="all" role="tabpanel">
                <div class="table-responsive">
                    <table id="Mentor" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th style="background-color: #1B3061" class="text-white">No</th>
                                <th style="background-color: #1B3061" class="text-white">Avatar</th>
                                <th style="background-color: #1B3061" class="text-white">Username</th>
                                <th style="background-color: #1B3061" class="text-white">Email</th>
                                <th style="background-color: #1B3061" class="text-white">Sekolah</th>
                                <th style="background-color: #1B3061" class="text-white">Divisi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">1</td>
                                <td class="align-middle">
                                    <img src="{{asset('admin/assets/images/coming-soon.svg')}}" style="width: 45px; height:45px" alt="">
                                </td>
                                <td class="align-middle">Kader</td>
                                <td class="align-middle">Kader@gmail.com</td>
                                <td class="align-middle">SMKN 1 KRAKSAAN</td>
                                <td class="align-middle">Web Devlopment</td>
                            </tr>
                             <!-- Scrollable modal -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

    <script>
        new DataTable('#Mentor');
    </script>

@endsection

