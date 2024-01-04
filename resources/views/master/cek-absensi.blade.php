@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="">
                    <h4 class="card-title mb-3">Data Siswa</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12 col-xxl-3 mt-2 col-lg-4">
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
                </div>
                <div class="col-12 col-xxl-3 mt-2 col-lg-4">
                    <div class="">
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
                            <th style="background-color: #1B3061" class="text-white">Tanggal</th>
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
                            <td>{{ \Carbon\Carbon::parse(request()->date)->locale('id_ID')->isoFormat('DD MMMM Y') }}</td>
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
                                            @if (date('H:i:s', strtotime($detailAttendance->created_at)) <= \Carbon\Carbon::createFromFormat('H:i:s',  $attendanceRule?->checkin_ends ?? '08:00:00')->addMinutes(1)->format('H:i:s'))
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
                                                {{ date('H:i', strtotime($detailAttendance->created_at)) }}
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
                                            @if (date('H:i:s', strtotime($detailAttendance->created_at)) <= \Carbon\Carbon::createFromFormat('H:i:s',  $attendanceRule?->return_ends ?? '13:00:00')->addMinutes(1)->format('H:i:s'))
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
