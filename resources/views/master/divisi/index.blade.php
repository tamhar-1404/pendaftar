@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Divisi</h4>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-4">
                <div class="">
                    <h4 class="card-title">Divisi</h4>
                </div>
                <div class="">
                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#myModal">Tambah Data</button>
                </div>
            </div>
            <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">Default Modal Heading</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label for="">Divisi</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect"
                                data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary waves-effect waves-light">Simpan</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
            <div class="d-flex justify-content-between">
                <div class="">
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="card border">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-2">
                                    <div class="avatar-xs">
                                        <span class="avatar-title rounded-circle bg-success text-white font-size-16">

                                        </span>
                                    </div>
                                </div>
                                <div class="row overflow-hidden align-items-center">
                                    <h5 class="text-truncate font-size-15 m-0"><a href="javascript: void(0);"
                                            class="text-dark">WEB</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 border-top d-flex ">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item me-0">
                                    <i class= "bx bx-calendar me-0"></i> 15 jan, 2023
                                </li>
                            </ul>
                            <div class="d-flex ms-auto gap-2">
                                <span>
                                    <button data-bs-toggle="modal" class=" btn btn-sm btn-info" style="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 48 48">
                                            <g fill="none" stroke="currentColor" stroke-linejoin="round"
                                                stroke-width="4">
                                                <path stroke-linecap="round" d="M7 42h36" />
                                                <path fill="currentColor" d="M11 26.72V34h7.317L39 13.308L31.695 6z" />
                                            </g>
                                        </svg>
                                    </button>
                                </span>
                                <span>
                                    <button data-bs-toggle="modal" class=" btn btn-sm btn-danger" style="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 48 48">
                                            <defs>
                                                <mask id="ipSDelete0">
                                                    <g fill="none" stroke-linejoin="round" stroke-width="4">
                                                        <path fill="#fff" stroke="#fff" d="M9 10v34h30V10z" />
                                                        <path stroke="#000" stroke-linecap="round" d="M20 20v13m8-13v13" />
                                                        <path stroke="#fff" stroke-linecap="round" d="M4 10h40" />
                                                        <path fill="#fff" stroke="#fff"
                                                            d="m16 10l3.289-6h9.488L32 10z" />
                                                    </g>
                                                </mask>
                                            </defs>
                                            <path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSDelete0)" />
                                        </svg>
                                    </button>
                                </span>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="card border">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-2">
                                    <div class="avatar-xs">
                                        <span class="avatar-title rounded-circle bg-success text-white font-size-16">
                                            M
                                        </span>
                                    </div>
                                </div>
                                <div class="row overflow-hidden align-items-center">
                                    <h5 class="text-truncate font-size-15 m-0"><a href="javascript: void(0);"
                                            class="text-dark">Mobile</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 border-top d-flex ">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item me-0">
                                    <i class= "bx bx-calendar me-0"></i> 15 jan, 2023
                                </li>
                            </ul>
                            <div class="d-flex ms-auto gap-2">
                                <span>
                                    <button data-bs-toggle="modal" class=" btn btn-sm btn-info" style="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 48 48">
                                            <g fill="none" stroke="currentColor" stroke-linejoin="round"
                                                stroke-width="4">
                                                <path stroke-linecap="round" d="M7 42h36" />
                                                <path fill="currentColor" d="M11 26.72V34h7.317L39 13.308L31.695 6z" />
                                            </g>
                                        </svg>
                                    </button>
                                </span>
                                <span>
                                    <button data-bs-toggle="modal" class=" btn btn-sm btn-danger" style="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 48 48">
                                            <defs>
                                                <mask id="ipSDelete0">
                                                    <g fill="none" stroke-linejoin="round" stroke-width="4">
                                                        <path fill="#fff" stroke="#fff" d="M9 10v34h30V10z" />
                                                        <path stroke="#000" stroke-linecap="round"
                                                            d="M20 20v13m8-13v13" />
                                                        <path stroke="#fff" stroke-linecap="round" d="M4 10h40" />
                                                        <path fill="#fff" stroke="#fff"
                                                            d="m16 10l3.289-6h9.488L32 10z" />
                                                    </g>
                                                </mask>
                                            </defs>
                                            <path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSDelete0)" />
                                        </svg>
                                    </button>
                                </span>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="card border">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-2">
                                    <div class="avatar-xs">
                                        <span class="avatar-title rounded-circle bg-success text-white font-size-16">
                                            M
                                        </span>
                                    </div>
                                </div>
                                <div class="row overflow-hidden align-items-center">
                                    <h5 class="text-truncate font-size-15 m-0"><a href="javascript: void(0);"
                                            class="text-dark">Mobile</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 border-top d-flex ">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item me-0">
                                    <i class= "bx bx-calendar me-0"></i> 15 jan, 2023
                                </li>
                            </ul>
                            <div class="d-flex ms-auto gap-2">
                                <span>
                                    <button data-bs-toggle="modal" class=" btn btn-sm btn-info" style="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 48 48">
                                            <g fill="none" stroke="currentColor" stroke-linejoin="round"
                                                stroke-width="4">
                                                <path stroke-linecap="round" d="M7 42h36" />
                                                <path fill="currentColor" d="M11 26.72V34h7.317L39 13.308L31.695 6z" />
                                            </g>
                                        </svg>
                                    </button>
                                </span>
                                <span>
                                    <button data-bs-toggle="modal" class=" btn btn-sm btn-danger" style="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 48 48">
                                            <defs>
                                                <mask id="ipSDelete0">
                                                    <g fill="none" stroke-linejoin="round" stroke-width="4">
                                                        <path fill="#fff" stroke="#fff" d="M9 10v34h30V10z" />
                                                        <path stroke="#000" stroke-linecap="round"
                                                            d="M20 20v13m8-13v13" />
                                                        <path stroke="#fff" stroke-linecap="round" d="M4 10h40" />
                                                        <path fill="#fff" stroke="#fff"
                                                            d="m16 10l3.289-6h9.488L32 10z" />
                                                    </g>
                                                </mask>
                                            </defs>
                                            <path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSDelete0)" />
                                        </svg>
                                    </button>
                                </span>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="card border">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-2">
                                    <div class="avatar-xs">
                                        <span class="avatar-title rounded-circle bg-success text-white font-size-16">
                                            M
                                        </span>
                                    </div>
                                </div>
                                <div class="row overflow-hidden align-items-center">
                                    <h5 class="text-truncate font-size-15 m-0"><a href="javascript: void(0);"
                                            class="text-dark">Mobile</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 border-top d-flex ">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item me-0">
                                    <i class= "bx bx-calendar me-0"></i> 15 jan, 2023
                                </li>
                            </ul>
                            <div class="d-flex ms-auto gap-2">
                                <span>
                                    <button data-bs-toggle="modal" class=" btn btn-sm btn-info" style="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 48 48">
                                            <g fill="none" stroke="currentColor" stroke-linejoin="round"
                                                stroke-width="4">
                                                <path stroke-linecap="round" d="M7 42h36" />
                                                <path fill="currentColor" d="M11 26.72V34h7.317L39 13.308L31.695 6z" />
                                            </g>
                                        </svg>
                                    </button>
                                </span>
                                <span>
                                    <button data-bs-toggle="modal" class=" btn btn-sm btn-danger" style="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 48 48">
                                            <defs>
                                                <mask id="ipSDelete0">
                                                    <g fill="none" stroke-linejoin="round" stroke-width="4">
                                                        <path fill="#fff" stroke="#fff" d="M9 10v34h30V10z" />
                                                        <path stroke="#000" stroke-linecap="round"
                                                            d="M20 20v13m8-13v13" />
                                                        <path stroke="#fff" stroke-linecap="round" d="M4 10h40" />
                                                        <path fill="#fff" stroke="#fff"
                                                            d="m16 10l3.289-6h9.488L32 10z" />
                                                    </g>
                                                </mask>
                                            </defs>
                                            <path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSDelete0)" />
                                        </svg>
                                    </button>
                                </span>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script>
        get(1)
        document.addEventListener("DOMContentLoaded", function() {
            var avatarSpan = document.querySelector(".avatar-title");
            var titleLink = document.querySelector("h5 a");
            var initialText = titleLink.innerText.trim();
            avatarSpan.innerText = initialText.charAt(0);
        });

        function get(page) {
            const token = localStorage.getItem('token')
            $.ajax({
                url: "{{ config('app.api_url') }}/divisi",
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
                beforeSend: function() {
                    $('#data').html('')
                    $('#pagination').html('');
                },

                success: function(response) {
                    // console.log(response)
                    $('#data').html('')
                    $('#loading').html('');
                    if (response.data.data.length > 0) {
                        $.each(response.data.data, function(index, item) {
                            var row =
                                ` <div class="col-md-4 col-lg-3 note-has-grid">
                                    <div class="single-note-item note-social">
                                        <div class="card">
                                            <div class="card-body">
                                                <span class="side-stick"></span>
                                                <h6 class="note-title text-truncate w-100 mt-2" style="font-size: 14pt;" data-noteHeading="Book a Ticket for Movie">
                                                    ${item.school_year}
                                                </h6>
                                                <hr>
                                                <div class="d-flex justify-content-end gap-3">
                                                    <button
                                                        class="btn-edit btn btn-lg mb-1 waves-effect waves-light btn-sm btn-light-primary text-primary"
                                                        id="btn-edit-${item.id}"
                                                        data-id="${item.id}"
                                                        data-school_year="${item.school_year}"
                                                    >
                                                        Edit
                                                    </button>
                                                    <button
                                                        class="btn-delete btn btn-lg mb-1 waves-effect waves-light btn-sm btn-light-danger text-danger"
                                                        data-id="${item.id}"
                                                    >
                                                        Hapus
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                `
                            $('#data').append(row)
                        })

                        $('.btn-edit').click(function() {
                            var formData = getDataAttributes($(this).attr('id'))
                            setFormValues('form-update', formData)
                            $('#form-update').data('id', formData['id'])
                            $('#modal-edit').modal('show')
                        })
                        $('#pagination').html(handlePaginate(response.data.paginate))

                        $('.btn-delete').click(function() {
                            $('#form-delete').data('id', $(this).data('id'))
                            $('#modal-delete').modal('show')
                        })
                    } else {
                        $('#loading').html(showNoData('Tahun ajaran Tidak Ada!'))
                    }
                }
            })
        }
    </script>
@endsection
