@extends('layout.app')
@section('content')
<h4 class="mb-3">
    Halaman Absensi Hari ini
</h4>
<div class="card">
    <div class="card-body">

        <h4 class="card-title">Keterangan</h4>
        <div class="row mt-3">
            <div class="col">
                <div class="text-center alert alert-danger fs-6" role="alert">
                    belum Hadir
                </div>
            </div>
            <div class="col">
                <div class="alert text-center alert-warning fs-6" role="alert">
                    izin, sakit, telat,
                </div>
            </div>
            <div class="col">
                <div class="alert text-center alert-success fs-6" role="alert">
                     Sudah Absen
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="card">
        <div class="card-body">
            <div class="col-md-3">
                <div class="mb-3">
                    <form action="">
                        <label for="formrow-email-input" class="form-label">Cari siswa</label>
                        <input class="form-control" type="search" value="{{ request()->name }}" placeholder="Cari nama disini..." name="name" id="example-search-input">
                    </form>
                </div>
            </div>
            <div class="table-responsive">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Siswa</th>
                            <th>Sekolah</th>
                            <th>Keterangan</th>
                            <th>Masuk</th>
                            <th>Istirahat</th>
                            <th>Kembali</th>
                            <th>Pulang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($students as $student)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->sekolah }}</td>
                            <td>
                                @if (isset($student->attendances[0]))
                                    @if ($student->attendances[0]->status == 'masuk')
                                    <div class="btn btn-soft-success waves-effect waves-light">
                                        {{ $student->attendances[0]->status }}
                                    </div>
                                    @endif
                                    @if ($student->attendances[0]->status == 'izin')
                                    <div class="btn btn-soft-warning waves-effect waves-light">
                                        {{ $student->attendances[0]->status }}
                                    </div>
                                    @endif
                                    @if ($student->attendances[0]->status == 'sakit')
                                    <div class="btn btn-soft-warning waves-effect waves-light">
                                        {{ $student->attendances[0]->status }}
                                    </div>
                                    @endif
                                    @if ($student->attendances[0]->status == 'alpha')
                                    <div class="btn btn-soft-danger non-active waves-effect waves-light">
                                        {{ $student->attendances[0]->status }}
                                    </div>
                                    @endif
                                @else
                                <div class="btn btn-soft-danger waves-effect waves-light">
                                    Belum Hadir
                                </div>
                                @endif
                            </td>
                            <td>
                                @if (isset($student->attendances[0]))
                                    @foreach ($student->attendances[0]->detailAttendances as $detailAttendance)
                                        @if ($detailAttendance->status == 'present')
                                        <div class="btn btn-soft-success waves-effect waves-light">
                                            {{date('H:i', strtotime($detailAttendance->created_at))}}
                                        </div>
                                        @else
                                        <div class="btn btn-soft-danger waves-effect waves-light">
                                            Belum Hadir
                                        </div>
                                        @endif
                                    @endforeach
                                @else
                                <div class="btn btn-soft-danger waves-effect waves-light">
                                    Belum Hadir
                                </div>
                                @endif
                            </td>
                            <td>
                                @if (isset($student->attendances[0]))
                                    @foreach ($student->attendances[0]->detailAttendances as $detailAttendance)
                                        @if ($detailAttendance->status == 'break')
                                        <div class="btn btn-soft-success waves-effect waves-light">
                                            {{date('H:i', strtotime($detailAttendance->created_at))}}
                                        </div>
                                        @else
                                        <div class="btn btn-soft-danger waves-effect waves-light">
                                            Belum Hadir
                                        </div>
                                        @endif
                                    @endforeach
                                @else
                                <div class="btn btn-soft-danger waves-effect waves-light">
                                    Belum Hadir
                                </div>
                                @endif
                            </td>
                            <td>
                                @if (isset($student->attendances[0]))
                                    @foreach ($student->attendances[0]->detailAttendances as $detailAttendance)
                                        @if ($detailAttendance->status == 'return_break')
                                            @if (date('H:i:s', strtotime($detailAttendance->created_at)) <= $attendanceRule?->return_ends ?? '13:00:00')
                                            <div class="btn btn-soft-success waves-effect waves-light">
                                                {{ date('H:i', strtotime($detailAttendance->created_at)) }}
                                            </div>
                                            @else
                                            <div class="btn btn-soft-warning waves-effect waves-light">
                                                {{ date('H:i', strtotime($detailAttendance->created_at)) }}
                                            </div>
                                            @endif
                                            @else
                                            <div class="btn btn-soft-danger waves-effect waves-light">
                                                Belum Hadir
                                            </div>
                                            @endif
                                    @endforeach
                                @else
                                <div class="btn btn-soft-danger waves-effect waves-light">
                                    Belum Hadir
                                </div>
                                @endif
                            </td>
                            <td>
                                @if (isset($student->attendances[0]))
                                    @foreach ($student->attendances[0]->detailAttendances as $detailAttendance)
                                        @if ($detailAttendance->status == 'return')
                                        <div class="btn btn-soft-success waves-effect waves-light">
                                            {{ date('H:i', strtotime($detailAttendance->created_at)) }}
                                        </div>
                                        @else
                                        <div class="btn btn-soft-danger waves-effect waves-light">
                                            Belum Hadir
                                        </div>
                                        @endif
                                    @endforeach
                                @else
                                <div class="btn btn-soft-danger waves-effect waves-light">
                                    Belum Hadir
                                </div>
                                @endif
                            </td>

                        </tr>
                        @empty
                        <tr>
                            <td colspan="9">
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
@endsection
@section('script')
@endsection
