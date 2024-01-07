    @extends('layout.app')
    @section('content')
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Approval Pendaftaran</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

    @if (session('success'))
        <script>
            Swal.fire({
                title: "Berhasil",
                text: "{{ session('success') }}",
                icon: "success"
            });
        </script>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <h4 class="card-title">Data Pendaftar</h4>
                        </div>
                        <div class="">
                            <div class="d-flex justify-content-header gap-2">
                                <div class="">
                                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Edit Limit</button>
                                </div>
                                <div class="">
                                    <p class=" mt-2 text-dark">Jumlah limit {{ $limit }} dan sisa limit saat ini {{ $sisalimit }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <form action="">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Atur Limit</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input class="form-control" type="number" name="limit" min="1" placeholder="Masukkan Limit" value="{{ $limit }}" id="example-number-input">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="table-rep-plugin">
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="background-color: #1B3061" class="text-white">No</th>
                                        <th style="background-color: #1B3061" class="text-white" data-priority="1">Nama</th>
                                        <th style="background-color: #1B3061" class="text-white" data-priority="3">Jurusan</th>
                                        <th style="background-color: #1B3061" class="text-white" data-priority="1">Kelas</th>
                                        <th style="background-color: #1B3061" class="text-white" data-priority="3">Masa Magang</th>
                                        <th style="background-color: #1B3061" class="text-white" data-priority="3">Sekolah</th>
                                        <th style="background-color: #1B3061" class="text-white" data-priority="6">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($approvals as $approval)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $approval->name }}</td>
                                        <td>{{ $approval->jurusan }}</td>
                                        <td>{{ $approval->kelas }}</td>
                                        <td>{{ Carbon\Carbon::parse($approval->magang_awal)->locale('id_ID')->isoFormat('DD MMMM Y') }} - {{ Carbon\Carbon::parse($approval->magang_akhir)->locale('id_ID')->isoFormat('DD MMMM Y') }}</td>
                                        <td>{{ $approval->sekolah }}</td>
                                        <td>
                                            <a href="{{ route('aproval.edit', $approval->id) }}">
                                                <button class="btn btn-sm btn-outline-info">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path fill="currentColor" d="M12 16q1.875 0 3.188-1.313T16.5 11.5q0-1.875-1.313-3.188T12 7q-1.875 0-3.188 1.313T7.5 11.5q0 1.875 1.313 3.188T12 16Zm0-1.8q-1.125 0-1.913-.788T9.3 11.5q0-1.125.788-1.913T12 8.8q1.125 0 1.913.788T14.7 11.5q0 1.125-.787 1.913T12 14.2Zm0 4.8q-3.65 0-6.65-2.038T1 11.5q1.35-3.425 4.35-5.463T12 4q3.65 0 6.65 2.038T23 11.5q-1.35 3.425-4.35 5.463T12 19Zm0-7.5Zm0 5.5q2.825 0 5.188-1.488T20.8 11.5q-1.25-2.525-3.613-4.013T12 6Q9.175 6 6.812 7.488T3.2 11.5q1.25 2.525 3.613 4.013T12 17Z"/></svg>
                                            </button>
                                            </a>
                                        </td>
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
                            <div class="d-flex justify-content-right">
                                {{ $approvals->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    @endsection
