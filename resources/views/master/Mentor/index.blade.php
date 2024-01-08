@extends('layout.app')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Mentor</h4>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-4">
                <div class="">
                    <h4 class="card-title">Mentor</h4>

                </div>
                <div class="">
                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#myModal">Tambah Menntor</button>
                </div>
            </div>
            <div id="myModal" class="modal fade"  aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">Buat Akun Mentor</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form id="form-create" method="post">
                            @csrf
                            @method('POST')
                            <div class="modal-body">
                                <label for="">Nama</label>
                                <input type="text" class="form-control mb-2" name="username">
                                <label for="">Email</label>
                                <input type="email" class="form-control mb-2" name="email">
                                <label for="">Divisi</label>
                                <select name="Divisi" class="form-control form-select select2" id="Divisi">
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect"
                                    data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
            <div class="d-flex justify-content-between">
                <div class="">
                </div>
            </div>
            <div class="tab-pane" id="all" role="tabpanel">
                <div class="table-responsive">
                    <table id="Mentor" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th style="background-color: #1B3061" class="text-white">No</th>
                                <th style="background-color: #1B3061" class="text-white">Nama</th>
                                <th style="background-color: #1B3061" class="text-white">Email</th>
                                <th style="background-color: #1B3061" class="text-white">Divisi</th>
                                <th style="background-color: #1B3061" class="text-white">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">1</td>
                                <td class="align-middle">Kader</td>
                                <td class="align-middle">Kader@gmail.com</td>
                                <td class="align-middle">Web Devlopment</td>
                                <td class="d-flex gap-2">
                                    <span>
                                        <button data-bs-toggle="modal"
                                            data-bs-target="#exampleModalScrollableEdit"
                                            class="btn btn-warning py-1"
                                            style="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 48 48"><g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="4"><path stroke-linecap="round" d="M42 26v14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h14"/><path fill="currentColor" d="M14 26.72V34h7.317L42 13.308L34.695 6z"/></g></svg>
                                        </button>
                                    </span>
                                    <span>
                                        <form action="" onsubmit="return confirmDelete(event)"  method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit"
                                                class="btn btn-danger py-1"
                                                style="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 48 48"><defs><mask id="ipSDelete0"><g fill="none" stroke-linejoin="round" stroke-width="4"><path fill="#fff" stroke="#fff" d="M9 10v34h30V10z"/><path stroke="#000" stroke-linecap="round" d="M20 20v13m8-13v13"/><path stroke="#fff" stroke-linecap="round" d="M4 10h40"/><path fill="#fff" stroke="#fff" d="m16 10l3.289-6h9.488L32 10z"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSDelete0)"/></svg>
                                            </button>
                                        </form>
                                    </span>
                                </td>
                            </tr>
                             <!-- Scrollable modal -->
                             <div class="modal fade" id="exampleModalScrollableEdit"
                                tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalScrollableTitle"> Edit Mentor </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="" method="post">
                                                @csrf
                                                <div class="modal-body">
                                                    <label for="">Nama</label>
                                                    <input type="text" class="form-control mb-2" name="name">
                                                    <label for="">Email</label>
                                                    <input type="email" class="form-control mb-2" name="Email">
                                                    <label for="">Divisi</label>
                                                    <input type="text" class="form-control" name="name">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect"
                                                        data-bs-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script>
          function confirmDelete(event) {
                event.preventDefault();
                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Anda tidak akan dapat mengembalikan ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus itu!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        event.target.submit();
                    }
                })
            }
    </script>

    <script>
        new DataTable('#Mentor');
    </script>
    <script>
        get(1)
         function get(page) {
            const token = localStorage.getItem('token')
            $.ajax({
                url: "https://hummatask.hummatech.com/api/division",
                type: 'GET',
                dataType: "JSON",
                data: {
                    pagination: $('#pagination-page').val(),
                    school_year: $('#search-name').val(),
                },
                headers: {
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + token,
                },
                success: function(response) {
                    // console.log(response)
                    $('#Divisi').html('')
                    if (response.divisis.length > 0) {
                        $.each(response.divisis, function(index, item) {
                            let row = `<option value="${item.id}"  >${item.name}</option>`;
                            $('#Divisi').append(row)
                        })
                    } else {
                        $('#loading').html(showNoData('Tahun ajaran Tidak Ada!'))
                    }
                }
            })
        }
    </script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });

        $('#js-example-basic-single').select2({
            dropdownParent: $('#myModal')
        });

        $('#form-create').submit(function(e) {
            $('.preloader').show();
            e.preventDefault();
            var $form = $(this);
            $.ajax({
                url: "https://hummatask.hummatech.com/api/tambah-mentor",
                type: "POST",
                data: $form.serialize(),
                success: function(response) {
                    $('.preloader').fadeOut();
                    get(1)
                    Swal.fire({
                        title: 'Berhasil!',
                        icon: 'success',
                        text: response.message
                    }).then(function() {
                        $form.trigger('reset'); // Menghapus isi formulir
                        $('#myModal').modal('hide'); // Menutup modal
                    });
                    get(1)
                },
                error: function(response) {
                    var errorData = response
                        .responseJSON; // Ini bergantung pada format respons dari server Anda

                    if (errorData && errorData.data && errorData.data.school_year) {
                        $('.preloader').fadeOut();
                        var errorMessage = errorData.data.school_year[0];
                        $('#modal-create').modal('hide')
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: errorMessage,
                            showConfirmButton: true,
                            timer: 2000
                        });
                    } else {
                        $('.preloader').fadeOut();
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: response,
                            confirmButtonText: 'OK'
                        })
                        // var response = response.responseJSON
                        // var status = response.meta.code
                        // if (status == 422) {
                        //     handleValidate(response.data, 'create')
                        // }
                    }
                }
            })
        })

    </script>
@endsection

