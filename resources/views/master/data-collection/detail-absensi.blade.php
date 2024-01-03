@extends('layout.app')
@section('content')
    <h2>Detail Absensi</h2>
        <div class="card">
            <div class="card-body">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <h3>{{ $attendance->student->name }}</h3>
                            <span class="badge bg-success">{{ $attendance->status }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 my-3">
                    <strong>Absensi</strong>
                    <ul class="timeline mt-2 mb-0">
                        @foreach ($attendance->detailAttendances as $item)
                        <li class="timeline-item">
                            <strong style="display: block;">{{ $item->status }}</strong>
                            <span class="float-end text-muted text-sm">Pukul {{ \Carbon\Carbon::parse($item->created_at)->format('H:i') }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
@endsection
