@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Data Penanggung Jawab</h4>
        </div>
    </div>
</div>

<div class="row">
    @foreach ($teachers as $teacher)
    <div class="col-xl-3 col-sm-6">
        <div class="card text-center">
            <div class="card-body">
                <div class="avatar-sm mx-auto mb-4">
                    <div class="avatar-sm mx-auto mb-4">
                        <img class="avatar-title rounded-circle bg-primary-subtle text-primary " src="{{ asset('storage/guru_image/' . $teacher->foto_siswa) }}">
                    </div>
                </div>
                <h5 class="font-size-15 mb-1"><a href="javascript: void(0);" class="text-dark">{{ $teacher->name }}</a></h5>
                <p class="text-muted">{{ $teacher->sekolah }}</p>
                <div>
                    <a href="javascript: void(0);" class="badge bg-warning font-size-11 m-1">Penanggung Jawab</a>
                </div>
            </div>
            <div class="card-footer bg-transparent border-top">
                <div class="contact-links d-flex font-size-20">
                    <div class="flex-fill">
                        <a href="javascript: void(0);"><i class="bx bx-user-circle"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<!-- end row -->

<div class="row">
    <div class="col-12">
        <div class="text-center my-3">
            <a href="javascript:void(0);" class="text-success"><i class="bx bx-hourglass bx-spin me-2"></i> Load more </a>
        </div>
    </div> <!-- end col-->
</div>
<!-- end row -->

@endsection
