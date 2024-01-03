@extends('layout.app')
@section('content')
<style>
 .image-container {
    position: relative;
    height: 160px;
    object-fit: cover;
}

.hover-image {
    width: 100%;
    height: 100%;
    transition: .5s ease;
}

.overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100%;
    width: 100%;
    opacity: 0;
    transition: .5s ease;
    background-color: rgba(128, 128, 128, 0);
    backdrop-filter: blur(8px);
    border-radius: 0%;
    cursor: pointer;
}

.image-container:hover .overlay {
    opacity: 1;
}

.image-container:hover .hover-image {
    transform: scale(0.8);
}

.icon {
    color: rgb(255, 255, 255);
    font-size: 20px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    text-align: center;
    border: 2px solid rgb(75, 75, 75);
    border-radius: 50%;
    background-color: rgb(75, 75, 75);
    padding: 5px;
}

</style>
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Detail Pendaftar</h4>

                    {{-- <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                            <li class="breadcrumb-item active">Product Detail</li>
                        </ol>
                    </div> --}}

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="product-detai-imgs">
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="tab-content" id="v-pills-tabContent">
                                                <div class="tab-pane fade show active" id="product-1" role="tabpanel" aria-labelledby="product-1-tab">
                                                    <div class="rounded-circle " style="">
                                                        <img src="{{ asset('storage/pendaftaran/' . $aproval->foto_siswa) }}" alt=""  class=" mx-auto d-block  rounded-circle" style="min-width:250px; min-height: 250px; max-width:250px; max-height: 250px; object-fit: cover">
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="text-center">
                                                <button type="button" class="btn btn-danger waves-effect waves-light mt-2 me-1">
                                                    <i class="bx bx-cart me-2"></i> Tolak
                                                </button>
                                                <button type="button" class="btn btn-success waves-effect  mt-2 waves-light">
                                                    <i class="bx bx-shopping-bag me-2"></i>Terima
                                                </button>
                                            </div> --}}

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-8">
                                <div class="mt-4 mt-xl-3">
                                    <div class="row">
                                        <div class="col-6">
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="">
                                                <h4 class="mt-1 mb-1">{{ $aproval->name }}</h4>
                                            </div>
                                            <div class="d-flex justify-between">
                                                <div class="">
                                                    <form id="delete-form-{{ $aproval->id }}" class="ms-auto"
                                                        action="{{ route('approval.delete', $aproval->id) }}" method="POST"
                                                        onsubmit="return confirmDelete(event)">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger waves-effect waves-light mt-2 me-1">
                                                             Hapus
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="">
                                                    <form id="reject-form-{{ $aproval->id }}" class="ms-auto"
                                                        action="{{ route('aproval.tolak', $aproval->id) }}" method="POST"
                                                        onsubmit="return confirmReject(event)">
                                                        @csrf
                                                        <input type="hidden" name="alasan" id="alasan-input-{{ $aproval->id }}">
                                                        <button type="submit" class="btn btn-warning waves-effect waves-light mt-2 me-1">
                                                             Tolak
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="">
                                                    <form id="confirm-form-{{ $aproval->id }}"
                                                        action="{{ route('aproval.confirm', $aproval->id) }}" method="POST">@csrf
                                                        <button type="submit" class="btn btn-success waves-effect  mt-2 waves-light">
                                                            </i>Terima
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <p class="text-muted mb-2">{{ $aproval->email }}</p>
                                    <p class="text-muted mb-4">{{ $aproval->alamat }}</p>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div>
                                                <p class="text-muted"><i class=" font-size-16 align-middle text-primary me-1"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 640 512"><path fill="#556ee5" d="M337.8 5.4c-10.8-7.2-24.8-7.2-35.6 0L166.3 96H48c-26.5 0-48 21.5-48 48v320c0 26.5 21.5 48 48 48h208v-96c0-35.3 28.7-64 64-64s64 28.7 64 64v96h208c26.5 0 48-21.5 48-48V144c0-26.5-21.5-48-48-48H473.7zM96 192h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16v-64c0-8.8 7.2-16 16-16m400 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16h-32c-8.8 0-16-7.2-16-16zM96 320h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16v-64c0-8.8 7.2-16 16-16m400 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16h-32c-8.8 0-16-7.2-16-16zM232 176a88 88 0 1 1 176 0a88 88 0 1 1-176 0m88-48c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16h-16v-16c0-8.8-7.2-16-16-16"/></svg>
                                                     {{ $aproval->kelas }}, {{ $aproval->jurusan }} / {{$aproval->sekolah}}</p>
                                                <p class="text-muted"><i class="bx bx-shape-triangle font-size-16 align-middle text-primary me-1"></i> {{ $aproval->tempat }}, {{$aproval->tanggal}}</p>
                                                <p class="text-muted"><i class="bx bx-battery font-size-16 align-middle text-primary me-1"></i> {{ $aproval->jeniskelamin }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div>
                                                <p class="text-muted"><i class="bx bx-user-voice font-size-16 align-middle text-primary me-1"></i> {{ $aproval->nisn }}</p>
                                                <p class="text-muted"><i class="bx bx-cog font-size-16 align-middle text-primary me-1"></i> {{ $aproval->magang_awal }}</p>
                                                <p class="text-muted"><i class="bx bx-cog font-size-16 align-middle text-primary me-1"></i> {{ $aproval->magang_akhir }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        {{-- <div class="mt-5">
                            <h5 class="mb-3">Specifications :</h5>

                            <div class="table-responsive">
                                <table class="table mb-0 table-bordered">
                                    <tbody>
                                        <tr>
                                            <th scope="row" style="width: 400px;">Category</th>
                                            <td>Headphone</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Brand</th>
                                            <td>JBL</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Color</th>
                                            <td>Black</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Connectivity</th>
                                            <td>Bluetooth</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Warranty Summary</th>
                                            <td>1 Year</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> --}}
                        <!-- end Specifications -->
                    </div>
                </div>
                <!-- end card -->
            </div>
        </div>
        <!-- end row -->

        <div class="row mt-3">
            <div class="col-lg-12">
                <div>
                    <h5 class="mb-3">Berkas - berkas :</h5>

                    <div class="row">
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-12">
                                            <h6 class="mb-1">Pernyataan Diri Sendiri :</h6>
                                            @if (  $aproval->sp_diri != null)
                                            <div class="image-container">
                                                <img src="{{ asset('storage/pendaftaran/'. $aproval->sp_diri) }}" alt="" class="hover-image">
                                                <div class="overlay" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center-sp-diri">
                                                    <div class="icon">
                                                        <i class="fa fa-eye"></i>
                                                    </div>
                                                </div>
                                                <div class="modal fade bs-example-modal-center-sp-diri" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Pernyataan Diri Sendiri</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="{{ asset('storage/pendaftaran/'. $aproval->sp_diri) }}" alt="" class="hover-image">
                                                                <button type="button" class="btn btn-primary waves-effect waves-light mt-2 me-1">
                                                                    Download
                                                                </button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            </div>
                                            @else
                                            <div class="image-container">
                                                <img src="{{ asset('nodata.png') }}" alt="" class="hover-image">
                                                {{-- <div class="overlay">
                                                    <div class="icon">
                                                        <i class="fa fa-eye"></i>
                                                    </div>
                                                </div> --}}
                                            </div>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-12">
                                            <h6 class="mb-1">Pernyataan Orang Tua :</h6>
                                            @if (  $aproval->sp_ortu != null)
                                            <div class="image-container">
                                                <img src="{{ asset('storage/pendaftaran/'. $aproval->sp_ortu) }}" style="object-fit: cover" alt="" class="hover-image">
                                                <div class="overlay " data-bs-toggle="modal" data-bs-target=".bs-example-modal-center-sp-ortu">
                                                    <div class="icon">
                                                        <i class="fa fa-eye"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade bs-example-modal-center-sp-ortu" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Pernyataan Orang Tua</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <img src="{{ asset('storage/pendaftaran/'. $aproval->sp_ortu) }}" alt="" class="hover-image">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light mt-2 me-1">
                                                                Download
                                                            </button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                            @else
                                            <div class="image-container">
                                                <img src="{{ asset('nodata.png') }}" alt="" class="hover-image">
                                                {{-- <div class="overlay">
                                                    <div class="icon">
                                                        <i class="fa fa-eye"></i>
                                                    </div>
                                                </div> --}}
                                            </div>
                                            @endif

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-12">
                                            <h6 class="mb-1">CV :</h6>
                                            <div class="image-container">
                                                <img src="{{ asset('storage/pendaftaran/'. $aproval->cv) }}" style="object-fit: cover" alt="" class="hover-image">
                                                <div class="overlay" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center-cv">
                                                    <div class="icon">
                                                        <i class="fa fa-eye"></i>
                                                    </div>
                                                </div>
                                                <div class="modal fade bs-example-modal-center-cv" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">CV</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="{{ asset('storage/pendaftaran/'. $aproval->cv) }}" alt="" class="hover-image">
                                                                <button type="button" class="btn btn-primary waves-effect waves-light mt-2 me-1">
                                                                    Download
                                                                </button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-12">
                                            <h6 class="mb-1">SKCK :</h6>
                                            @if (  $aproval->skck != null)
                                            <div class="image-container">
                                                <img src="{{ asset('storage/pendaftaran/'. $aproval->skck) }}" alt="" style="object-fit: cover" class="hover-image">
                                                <div class="overlay" data-bs-toggle="modal" data-bs-target=".skck">
                                                    <div class="icon">
                                                        <i class="fa fa-eye"></i>
                                                    </div>
                                                </div>
                                                <div class="modal fade skck" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">SKCK</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <img src="{{ asset('storage/pendaftaran/'. $aproval->skck) }}" alt="" class="hover-image">
                                                                <a id="downloadLink" class="download-link hidden" href="#"
                                                                download>>
                                                                <button type="button" class="btn btn-primary waves-effect waves-light mt-2 me-1 download-button">
                                                                    Download
                                                                </button>
                                                                </a>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            </div>
                                            @else
                                            <div class="image-container">
                                                <img src="{{ asset('nodata.png') }}" alt="" class="hover-image">
                                                {{-- <div class="overlay">
                                                    <div class="icon">
                                                        <i class="fa fa-eye"></i>
                                                    </div>
                                                </div> --}}
                                            </div>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>
        <!-- end row -->
        <script>
            document.getElementById('confirm-form-{{ $aproval->id }}').addEventListener('submit', function(event) {
                event.preventDefault();
                Swal.fire({
                    title: 'Konfirmasi',
                    text: 'Apakah Anda yakin ingin menerima siswa ini?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, terima!',
                    cancelButtonText: 'Batal',
                    background: '#f5f5f5',
                    customClass: {
                        icon: 'swal-icon',
                        confirmButton: 'swal-button swal-button--confirm',
                        cancelButton: 'swal-button swal-button--cancel'
                    },
                    animation: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: 'Sukses',
                            text: 'Siswa berhasil diterima',
                            icon: 'success',
                            timer: 2000,
                            showConfirmButton: false,
                            background: '#f5f5f5',
                            customClass: {
                                icon: 'swal-icon',
                                popup: 'swal-popup',
                                title: 'swal-title',
                                confirmButton: 'swal-button swal-button--confirm'
                            },
                            animation: false
                        });
                        setTimeout(() => {
                            this.submit();
                        }, 2000);
                    }
                });
            });
        </script>
           <script>
            function confirmReject(event) {
                event.preventDefault();

                Swal.fire({
                    title: 'Penolakan',
                    input: 'text',
                    inputLabel: 'Masukkan alasan penolakan:',
                    showCancelButton: true,
                    confirmButtonText: 'Kirim',
                    cancelButtonText: 'Batal',
                    confirmButtonColor: '#00B7FF',
                    cancelButtonColor: '#FF0000',
                    allowOutsideClick: false,
                    inputValidator: (value) => {
                        if (!value || value.trim() === '') {
                            return 'Harap masukkan alasan penolakan.';
                        }
                    },
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById("alasan-input-{{ $aproval->id }}").value = result.value;

                        Swal.fire({
                            title: 'Data berhasil ditolak',
                            icon: 'success',
                        }).then(() => {
                            event.target.submit();
                        });
                    }
                });
            }
            function confirmDelete(event) {
                event.preventDefault();

                Swal.fire({
                    title: 'Hapus',
                    confirmButtonText: 'Hapus',
                    cancelButtonText: 'Batal',
                    allowOutsideClick: true,
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: 'Data berhasil dihapus',
                            icon: 'success',
                        }).then(() => {
                            event.target.submit();
                        });
                    }
                });
            }
        </script>
@endsection
