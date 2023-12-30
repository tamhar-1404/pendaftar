@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-4">Data Laporan Siswa</h4>
            <div class="crypto-buy-sell-nav">
                <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#buy" role="tab">
                            Laporan Masuk
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#sell" role="tab">
                            Laporan Diterima
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#all" role="tab">
                            Laporan Ditolak
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-content crypto-buy-sell-nav-content p-4">
                <div class="tab-pane active" id="buy" role="tabpanel">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="favorite-icon">
                                        <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                                    </div>
                                    <img src="{{ asset('assets-admin/images/companies/adobe.svg') }}" alt="" height="50" class="mb-3">
                                    <h5 class="fs-17 mb-2"><a href="javascript:void(0);" class="text-dark">Magento Developer</a>
                                        <small class="text-muted fw-normal">(0-2 Yrs Exp.)</small></h5>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <p class="text-muted fs-14 mb-1">Skote Technology Pvt.Ltd</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                        </li>
                                    </ul>
                                    <div class="mt-4 hstack gap-2">
                                        <a href="#!" data-bs-toggle="modal" class="btn btn-soft-success w-100">Terima</a>
                                        <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-primary w-100">Detail</a>
                                        <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-danger w-100">Tolak</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="favorite-icon">
                                        <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                                    </div>
                                    <img src="{{ asset('assets-admin/images/companies/adobe.svg') }}" alt="" height="50" class="mb-3">
                                    <h5 class="fs-17 mb-2"><a href="javascript:void(0);" class="text-dark">Magento Developer</a>
                                        <small class="text-muted fw-normal">(0-2 Yrs Exp.)</small></h5>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <p class="text-muted fs-14 mb-1">Skote Technology Pvt.Ltd</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                        </li>
                                    </ul>
                                    <div class="mt-4 hstack gap-2">
                                        <a href="#!" data-bs-toggle="modal" class="btn btn-soft-success w-100">Terima</a>
                                        <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-primary w-100">Detail</a>
                                        <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-danger w-100">Tolak</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="favorite-icon">
                                        <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                                    </div>
                                    <img src="{{ asset('assets-admin/images/companies/adobe.svg') }}" alt="" height="50" class="mb-3">
                                    <h5 class="fs-17 mb-2"><a href="javascript:void(0);" class="text-dark">Magento Developer</a>
                                        <small class="text-muted fw-normal">(0-2 Yrs Exp.)</small></h5>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <p class="text-muted fs-14 mb-1">Skote Technology Pvt.Ltd</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                        </li>
                                    </ul>
                                    <div class="mt-4 hstack gap-2">
                                        <a href="#!" data-bs-toggle="modal" class="btn btn-soft-success w-100">Terima</a>
                                        <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-primary w-100">Detail</a>
                                        <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-danger w-100">Tolak</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="favorite-icon">
                                        <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                                    </div>
                                    <img src="{{ asset('assets-admin/images/companies/adobe.svg') }}" alt="" height="50" class="mb-3">
                                    <h5 class="fs-17 mb-2"><a href="javascript:void(0);" class="text-dark">Magento Developer</a>
                                        <small class="text-muted fw-normal">(0-2 Yrs Exp.)</small></h5>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <p class="text-muted fs-14 mb-1">Skote Technology Pvt.Ltd</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                        </li>
                                    </ul>
                                    <div class="mt-4 hstack gap-2">
                                        <a href="#!" data-bs-toggle="modal" class="btn btn-soft-success w-100">Terima</a>
                                        <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-primary w-100">Detail</a>
                                        <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-danger w-100">Tolak</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="favorite-icon">
                                        <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                                    </div>
                                    <img src="{{ asset('assets-admin/images/companies/adobe.svg') }}" alt="" height="50" class="mb-3">
                                    <h5 class="fs-17 mb-2"><a href="javascript:void(0);" class="text-dark">Magento Developer</a>
                                        <small class="text-muted fw-normal">(0-2 Yrs Exp.)</small></h5>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <p class="text-muted fs-14 mb-1">Skote Technology Pvt.Ltd</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                        </li>
                                    </ul>
                                    <div class="mt-4 hstack gap-2">
                                        <a href="#!" data-bs-toggle="modal" class="btn btn-soft-success w-100">Terima</a>
                                        <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-primary w-100">Detail</a>
                                        <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-danger w-100">Tolak</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="favorite-icon">
                                        <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                                    </div>
                                    <img src="{{ asset('assets-admin/images/companies/adobe.svg') }}" alt="" height="50" class="mb-3">
                                    <h5 class="fs-17 mb-2"><a href="javascript:void(0);" class="text-dark">Magento Developer</a>
                                        <small class="text-muted fw-normal">(0-2 Yrs Exp.)</small></h5>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <p class="text-muted fs-14 mb-1">Skote Technology Pvt.Ltd</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                        </li>
                                    </ul>
                                    <div class="mt-4 hstack gap-2">
                                        <a href="#!" data-bs-toggle="modal" class="btn btn-soft-success w-100">Terima</a>
                                        <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-primary w-100">Detail</a>
                                        <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-danger w-100">Tolak</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="favorite-icon">
                                        <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                                    </div>
                                    <img src="{{ asset('assets-admin/images/companies/adobe.svg') }}" alt="" height="50" class="mb-3">
                                    <h5 class="fs-17 mb-2"><a href="javascript:void(0);" class="text-dark">Magento Developer</a>
                                        <small class="text-muted fw-normal">(0-2 Yrs Exp.)</small></h5>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <p class="text-muted fs-14 mb-1">Skote Technology Pvt.Ltd</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                        </li>
                                    </ul>
                                    <div class="mt-4 hstack gap-2">
                                        <a href="#!" data-bs-toggle="modal" class="btn btn-soft-success w-100">Terima</a>
                                        <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-primary w-100">Detail</a>
                                        <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-danger w-100">Tolak</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="favorite-icon">
                                        <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                                    </div>
                                    <img src="{{ asset('assets-admin/images/companies/adobe.svg') }}" alt="" height="50" class="mb-3">
                                    <h5 class="fs-17 mb-2"><a href="javascript:void(0);" class="text-dark">Magento Developer</a>
                                        <small class="text-muted fw-normal">(0-2 Yrs Exp.)</small></h5>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <p class="text-muted fs-14 mb-1">Skote Technology Pvt.Ltd</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                        </li>
                                    </ul>
                                    <div class="mt-4 hstack gap-2">
                                        <a href="#!" data-bs-toggle="modal" class="btn btn-soft-success w-100">Terima</a>
                                        <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-primary w-100">Detail</a>
                                        <a href="#applyJobs" data-bs-toggle="modal" class="btn btn-soft-danger w-100">Tolak</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="tab-pane" id="sell" role="tabpanel">
        
                </div>
                <div class="tab-pane" id="all" role="tabpanel">
        
                </div>
        
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
