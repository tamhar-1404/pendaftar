@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Data Siswa</h4>
        </div>
    </div>
</div>

<div class="row">
    @forelse ($siswas as $siswa)
    <div class="col-xl-3 col-sm-6">
        <div class="card text-center">
            <div class="card-body">
                <div class="avatar-sm mx-auto mb-4">
                    <img class="avatar-title rounded-circle bg-primary-subtle text-primary" style="object-fit: cover" src="{{ asset('storage/Siswa/' . $siswa->foto_siswa) }}">
                </div>
                <h5 class="font-size-15 mb-1"><a href="javascript: void(0);" class="text-dark">{{ $siswa->name }}</a></h5>
                <p class="text-muted">{{ $siswa->sekolah }}</p>
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
<!-- end row -->
@endsection
