@extends('layout.app')
@section('content')
<h4 class="mb-3">
    Halaman Absensi Hari ini
</h4>
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
                            <th>Masuk</th>
                            <th>Istirahat</th>
                            <th>Kembali</th>
                            <th>Pulang</th>
                            <th>Aksi</th>
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
                                    @if (date('H:i:s', strtotime($student->attendances[0]->created_at)) >= $attendanceRule?->checkin_ends ?? "08:00:00")
                                    <div class="btn btn-soft-warning waves-effect waves-light">
                                        Telat
                                    </div>
                                    @else
                                    <div class="btn btn-soft-success waves-effect waves-light">
                                        Hadir
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
                                        @if ($detailAttendance->status == 'break')
                                        <div class="btn btn-soft-success waves-effect waves-light">
                                            Hadir
                                        </div>
                                        @endif
                                    @endforeach
                                @endif
                            </td>
                            <td>
                                @if (isset($student->attendances[0]))
                                    @foreach ($student->attendances[0]->detailAttendances as $detailAttendance)
                                        @if ($detailAttendance->status == 'return_break')
                                            @if (date('H:i:s', strtotime($detailAttendance->created_at)) <= $attendanceRule?->return_ends ?? '13:00:00')
                                            <div class="btn btn-soft-success waves-effect waves-light">
                                                Hadir
                                            </div>
                                            @else
                                            <div class="btn btn-soft-warning waves-effect waves-light">
                                                Terlambat
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
                                            Hadir
                                        </div>
                                        @endif
                                    @endforeach
                                @endif
                            </td>
                            <td>
                                @if (isset($student->attendances[0]))
                                <a href="{{ route('attendance.detail', $student->attendances[0]->id) }}" class="btn btn-primary waves-effect waves-light">Detail</a>
                                @endif
                            </td>
                        </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
