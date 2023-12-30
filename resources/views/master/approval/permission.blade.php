@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Approval / Izin & Sakit</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <h4 class="card-title">Permintaan Izin</h4>
    <div class="card">
        <div class="card-body">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <div class="bg-light p-3 d-flex mb-3 rounded">
                            <img src="{{ asset('assets-admin/images/users/avatar-4.jpg') }}" alt="" class="avatar-sm rounded me-3">
                            <div class="flex-grow-1">
                                <h5 class="font-size-15 mb-2"><a href="candidate-overview.html" class="text-body">Stephen Hadley</a> <span class="badge badge-soft-info">Izin</span></h5>
                                <p class="mb-0 text-muted"><i class="bx bx-map text-body align-middle"></i>Smkn 1 kraksaan</p>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-soft-primary" type="button" id="dropdownMenuButton11" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class='bx bx-dots-vertical-rounded'></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton11">
                                        <li><a class="dropdown-item" href="candidate-overview.html"> Detail</a></li>
                                        <li><a class="dropdown-item" href="#">Tolak</a></li>
                                        <li><a class="dropdown-item" href="#">Terima</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light p-3 d-flex">
                            <img src="{{ asset('assets-admin/images/users/avatar-2.jpg') }}" alt="" class="avatar-sm rounded me-3">
                            <div class="flex-grow-1">
                                <h5 class="font-size-15 mb-2"><a href="candidate-overview.html" class="text-body">Charles Brown</a> <span class="badge badge-soft-warning">Sakit</span></h5>
                                <p class="mb-0 text-muted"><i class="bx bx-map text-body align-middle"></i> Cambodia</p>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-soft-primary" type="button" id="dropdownMenuButton11" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class='bx bx-dots-vertical-rounded'></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton11">
                                        <li><a class="dropdown-item" href="candidate-overview.html"> Detail</a></li>
                                        <li><a class="dropdown-item" href="#">Tolak</a></li>
                                        <li><a class="dropdown-item" href="#">Terima</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="bg-light p-3 d-flex mb-3 rounded">
                            <img src="{{ asset('assets-admin/images/users/avatar-1.jpg') }}" alt="" class="avatar-sm rounded me-3">
                            <div class="flex-grow-1">
                                <h5 class="font-size-15 mb-2"><a href="candidate-overview.html" class="text-body">Adam Miller</a> <span class="badge badge-soft-warning">Sakit</span></h5>
                                <p class="mb-0 text-muted"><i class="bx bx-map text-body align-middle"></i> Australia</p>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-soft-primary" type="button" id="dropdownMenuButton11" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class='bx bx-dots-vertical-rounded'></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton11">
                                        <li><a class="dropdown-item" href="candidate-overview.html"> Detail</a></li>
                                        <li><a class="dropdown-item" href="#">Tolak</a></li>
                                        <li><a class="dropdown-item" href="#">Terima</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light p-3 d-flex">
                            <img src="{{ asset('assets-admin/images/users/avatar-3.jpg') }}" alt="" class="avatar-sm rounded me-3">
                            <div class="flex-grow-1">
                                <h5 class="font-size-15 mb-2"><a href="candidate-overview.html" class="text-body">Keith Gonzales</a> <span class="badge badge-soft-info">Izin</span></h5>
                                <p class="mb-0 text-muted"><i class="bx bx-map text-body align-middle"></i> Belgium</p>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-soft-primary" type="button" id="dropdownMenuButton11" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class='bx bx-dots-vertical-rounded'></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton11">
                                        <li><a class="dropdown-item" href="candidate-overview.html"> Detail</a></li>
                                        <li><a class="dropdown-item" href="#">Tolak</a></li>
                                        <li><a class="dropdown-item" href="#">Terima</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="bg-light p-3 d-flex mb-3 rounded">
                            <img src="{{ asset('assets-admin/images/users/avatar-4.jpg') }}" alt="" class="avatar-sm rounded me-3">
                            <div class="flex-grow-1">
                                <h5 class="font-size-15 mb-2"><a href="candidate-overview.html" class="text-body">Bonnie Harney</a> <span class="badge badge-soft-success">Full Timer</span></h5>
                                <p class="mb-0 text-muted"><i class="bx bx-map text-body align-middle"></i> Syria</p>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-soft-primary" type="button" id="dropdownMenuButton11" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class='bx bx-dots-vertical-rounded'></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton11">
                                        <li><a class="dropdown-item" href="candidate-overview.html"> Detail</a></li>
                                        <li><a class="dropdown-item" href="#">Tolak</a></li>
                                        <li><a class="dropdown-item" href="#">Terima</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light p-3 d-flex">
                            <img src="{{ asset('assets-admin/images/users/avatar-2.jpg') }}" alt="" class="avatar-sm rounded me-3">
                            <div class="flex-grow-1">
                                <h5 class="font-size-15 mb-2"><a href="candidate-overview.html" class="text-body">Dolores Minter</a> <span class="badge badge-soft-danger">Part Time</span></h5>
                                <p class="mb-0 text-muted"><i class="bx bx-map text-body align-middle"></i> San Marino</p>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-soft-primary" type="button" id="dropdownMenuButton16" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class='bx bx-dots-vertical-rounded'></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton16">
                                        <li><a class="dropdown-item" href="candidate-overview.html">View Details</a></li>
                                        <li><a class="dropdown-item" href="#">Download CV</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h4 class="card-title">Izin Diterima</h4>
            <div class="card">
                <div class="card-body">
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
                                        <th data-priority="3">Sekolah</th>
                                        <th data-priority="1">Dari Tanggal</th>
                                        <th data-priority="3">Sampai Tanggal</th>
                                        <th data-priority="3">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Abdul kader</td>
                                        <td>12</td>
                                        <td>12 januari 2023</td>
                                        <td>12 desember 2026</td>
                                        <td>Sakit</td>
                                    </tr>
                                    <tr>
                                        <th>1</th>
                                        <td>Abdul kader</td>
                                        <td>12</td>
                                        <td>12 januari 2023</td>
                                        <td>12 desember 2026</td>
                                        <td>Sakit</td>
                                    </tr>
                                    <tr>
                                        <th>1</th>
                                        <td>Abdul kader</td>
                                        <td>12</td>
                                        <td>12 januari 2023</td>
                                        <td>12 desember 2026</td>
                                        <td>Sakit</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
