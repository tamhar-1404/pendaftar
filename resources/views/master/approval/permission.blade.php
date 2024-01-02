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
                        @forelse ($menunggu as $key => $item)
                            @if (($key + 1) % 2 === 0 && $key !== count($menunggu) - 1)
                    </div>
                    <div class="carousel-item active" data-bs-interval="3000">
                        @endif
                        <div class="bg-light p-3 d-flex mb-3 rounded">
                            <img src="{{ asset('assets-admin/images/users/avatar-4.jpg') }}" alt=""
                                class="avatar-sm rounded me-3">
                            <div class="flex-grow-1">
                                <h5 class="font-size-15 mb-2"><a href="candidate-overview.html"
                                        class="text-body">{{ $item->Siswa->name }}y</a> <span
                                        class="badge badge-soft-info">Izin</span></h5>
                                <p class="mb-0 text-muted"><i
                                        class="bx bx-map text-body align-middle"></i>{{ $item->Siswa->sekolah }}</p>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-soft-primary" type="button" id="dropdownMenuButton11"
                                        data-bs-toggle="dropdown" aria-expanded="false">
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
                    @empty
                    <div class="d-flex justify-content-center">
                        <div class="">
                            <img src="{{ asset('nodata.png') }}" width="300px" height="300px" alt="" srcset="">
                            <p class="fs-5 text-center mt-4 text-dark" style="font-weight: 500">
                                Data Tidak Tersedia
                            </p>
                        </div>
                    </div>
                    @endforelse

                    </div>
                    {{-- Tutup div e --}}
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
                                    @forelse ($terima as $item)
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <td>{{ $item->Siswa->name }}</td>
                                            <td>{{ $item->Siswa->sekolah }}</td>
                                            <td>{{ $item->dari }}</td>
                                            <td>{{ $item->sampai }}</td>
                                            <td>{{ $item->keterangan }}</td>
                                        </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7" class="text-center">
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
