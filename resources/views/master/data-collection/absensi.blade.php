@extends('layout.app')
@section('content')
    <h4 class="mb-3">
        Halaman Absensi Hari ini
    </h4>
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Informasi</h4>
            <div class="row mt-3">
                <div class="col">
                    <div class="text-center alert alert-danger fs-6" role="alert">
                        Belum Hadir
                    </div>
                </div>
                <div class="col">
                    <div class="alert text-center alert-warning fs-6" role="alert">
                        Izin, Sakit, Telat,
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
            </div>
            <div class="table-responsive">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th style="background-color: #1B3061" class="text-white">No</th>
                            <th style="background-color: #1B3061" class="text-white">Siswa</th>
                            <th style="background-color: #1B3061" class="text-white">Sekolah</th>
                            {{-- <th style="background-color: #1B3061" class="text-white">Tanggal</th> --}}
                            <th style="background-color: #1B3061" class="text-white">Keterangan</th>
                            <th style="background-color: #1B3061" class="text-white">Masuk</th>
                            <th style="background-color: #1B3061" class="text-white">Istirahat</th>
                            <th style="background-color: #1B3061" class="text-white">Kembali</th>
                            <th style="background-color: #1B3061" class="text-white">Pulang</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($students as $student)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->sekolah }}</td>
                                {{-- <td>{{ \Carbon\Carbon::parse($student->created_at)->format('d F Y') }}</td> --}}
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
                                                @if (date('H:i:s', strtotime($detailAttendance->created_at)) <= Carbon::createFromFormat('H:i:s',  $attendanceRule?->checkin_ends ?? '08:00:00')->addSeconds(59)->format('H:i:s'))
                                                <div class="btn btn-soft-success waves-effect waves-light">
                                                    {{ date('H:i', strtotime($detailAttendance->created_at)) }}
                                                </div>
                                                @else
                                                <div class="btn btn-soft-warning waves-effect waves-light">
                                                    {{ date('H:i', strtotime($detailAttendance->created_at)) }}
                                                </div>
                                                @endif
                                            @endif
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    @if (isset($student->attendances[0]))
                                        @foreach ($student->attendances[0]->detailAttendances as $detailAttendance)
                                            @if ($detailAttendance->status == 'break')
                                                <div class="btn btn-soft-success waves-effect waves-light">
                                                    {{ date('H:i', strtotime($detailAttendance->created_at)) }}
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    @if (isset($student->attendances[0]))
                                        @foreach ($student->attendances[0]->detailAttendances as $detailAttendance)
                                            @if ($detailAttendance->status == 'return_break')
                                                @if (date('H:i:s', strtotime($detailAttendance->created_at)) <= Carbon::createFromFormat('H:i:s',  $attendanceRule?->return_ends ?? '13:01:00')->addSeconds(59)->format('H:i:s'))
                                                    <div class="btn btn-soft-success waves-effect waves-light">
                                                        {{ date('H:i', strtotime($detailAttendance->created_at)) }}
                                                    </div>
                                                @else
                                                    <div class="btn btn-soft-warning waves-effect waves-light">
                                                        {{ date('H:i', strtotime($detailAttendance->created_at)) }}
                                                    </div>
                                                @endif
                                            @endif
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    @if (isset($student->attendances[0]))
                                        @foreach ($student->attendances[0]->detailAttendances as $detailAttendance)
                                            @if ($detailAttendance->status == 'return')
                                                <div class="btn btn-soft-success waves-effect waves-light">
                                                    {{ date('H:i', strtotime($detailAttendance->created_at)) }}
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9">
                                    <div class="d-flex justify-content-center">
                                        <div class="">
                                            <img src="{{ asset('nodata.png') }}" width="300px" height="300px"
                                                alt="" srcset="">
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
