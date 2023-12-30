@extends('layout.app')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Detail Berita</h4>

            <div class="page-title-right">
                <a href="/news" class="btn btn-secondary">Kembali</a>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="pt-3">
                    <div class="row justify-content-center">
                        <div class="col-xl-8">
                            <div>
                                <div class="text-center">
                                    <div class="mb-4">
                                        <a href="javascript: void(0);" class="badge bg-light font-size-12">
                                            <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> Project
                                        </a>
                                    </div>
                                    <h4>Beautiful Day with Friends</h4>
                                    <p class="text-muted mb-4"><i class="mdi mdi-calendar me-1"></i> 10 Apr, 2020</p>
                                </div>

                                <hr>
                                <div class="text-center">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div>
                                                <p class="text-muted mb-2">Categories</p>
                                                <h5 class="font-size-15">Project</h5>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mt-4 mt-sm-0">
                                                <p class="text-muted mb-2">Date</p>
                                                <h5 class="font-size-15">10 Apr, 2020</h5>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mt-4 mt-sm-0">
                                                <p class="text-muted mb-2">Post by</p>
                                                <h5 class="font-size-15">Gilbert Smith</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <div class="my-5">
                                    <img src="{{ asset('assets-admin/images/small/img-2.jpg') }}" alt="" class="img-thumbnail mx-auto d-block">
                                </div>

                                <hr>

                                <div class="mt-4">
                                    <div class="text-muted font-size-14">
                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam enim ad minima veniam quis</p>
                                    
                                        <p class="mb-4">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea  reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt</p>
                                    
                                        <blockquote class="p-4 border-light border rounded mb-4">
                                            <div class="d-flex">
                                                <div class="me-3">
                                                    <i class="bx bxs-quote-alt-left text-dark font-size-24"></i>
                                                </div>
                                                <div>
                                                    <p class="mb-0"> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium deleniti atque corrupti quos dolores et quas molestias excepturi sint quidem rerum facilis est</p>
                                                </div>
                                            </div>
                                            
                                        </blockquote>

                                        <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Sed ut perspiciatis unde omnis iste natus error sit</p>
                                    

                                        <div class="mt-4">
                                            <h5 class="mb-3">Title: </h5>

                                            <div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-6">
                                                        <div>
                                                            <ul class="ps-4">
                                                                <li class="py-1">Donec sodales sagittis</li>
                                                                <li class="py-1">Sed consequat leo eget</li>
                                                                <li class="py-1">Aliquam lorem ante</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-6">
                                                        <div>
                                                            <ul class="ps-4">
                                                                <li class="py-1">Aenean ligula eget</li>
                                                                <li class="py-1">Cum sociis natoque</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection