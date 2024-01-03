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
                            <img src="{{ asset('storage/Siswa/' . $item->Siswa->foto_siswa) }}" style="object-fit: cover" alt=""
                                class="avatar-sm rounded me-3">
                            <div class="flex-grow-1">
                                <h5 class="font-size-15 mb-2"><a href="candidate-overview.html"
                                        class="text-body">{{ $item->Siswa->name }}y</a> <span
                                        class="badge badge-soft-info">{{ $item->keterangan }}</span></h5>
                                <p class="mb-0 text-muted"><i
                                        class="bx bx-map text-body align-middle"></i>{{ $item->Siswa->sekolah }}</p>
                            </div>
                            <div>
                            </div>
                            <div class="d-flex justify-content-header gap-2">
                                <div class="">
                                    <button type="button" class="btn btn-secondary"  data-bs-toggle="modal" data-bs-target=".dvorak{{ $item->id }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path fill="currentColor" d="M2 6V1h5v2H4v3H2Zm18 0V3h-3V1h5v5h-2ZM2 23v-5h2v3h3v2H2Zm15 0v-2h3v-3h2v5h-5ZM7 18h10V6H7v12Zm0 2q-.825 0-1.413-.588T5 18V6q0-.825.588-1.413T7 4h10q.825 0 1.413.588T19 6v12q0 .825-.588 1.413T17 20H7Zm2-10h6V8H9v2Zm0 3h6v-2H9v2Zm0 3h6v-2H9v2Zm-2 2V6v12Z"/></svg>
                                    </button>


                                </div>
                                <div class="">
                                    <form action="{{ route('approvalizin.update', $item->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="email" value="{{ $item->Siswa->email }}">
                                        <input type="hidden" name="keterangan" value="tolak">
                                        <button class="btn btn-danger" type="submit">Tolak</button>
                                    </form>
                                </div>
                                <div class="">
                                    <form action="{{ route('approvalizin.update', $item->id) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="keterangan" value="terima">
                                        <input type="hidden" name="email" value="{{ $item->Siswa->email }}">
                                        <button class="btn btn-success" type="submit">Terima</button>
                                    </form>
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
                    @foreach ($menunggu as $item)
                    <div class="modal fade bs-example-modal-xl dvorak{{ $item->id }}" id="dvorak" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myExtraLargeModalLabel">Bukti</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('storage/bukti_izin/' . $item->bukti) }}" alt="">
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    @endforeach

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
