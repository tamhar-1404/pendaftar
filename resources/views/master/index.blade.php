@extends('layout.app')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Atur Jam Masuk Kantor</h4>
                    <ul class="nav nav-pills bg-light rounded" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#senin" role="tab">Senin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#selasa" role="tab">Selasa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#rabu" role="tab">Rabu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#kamis" role="tab">Kamis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#jumat" role="tab">Jumat</a>
                        </li>
                    </ul>
                    <div class="tab-content mt-4">
                        <div class="tab-pane active" id="senin" role="tabpanel">
                            <div class="table-responsive" data-simplebar style="max-height: 330px;">
                                <form action="{{ route('attendance.rule') }}" method="post">
                                    <input type="hidden" name="day" value="monday">
                                    @csrf
                                    @method('POST')
                                    <table class="table align-middle table-nowrap">
                                        <tbody>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Masuk</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkin_starts" class="form-control"
                                                            placeholder="Sampai" value="{{ $senin->checkin_starts ?? '' }}">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkin_ends" class="form-control"
                                                            placeholder="Sampai" value="{{ $senin->checkin_ends ?? '' }}">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Istirahat</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="break_starts" class="form-control"
                                                            placeholder="Sampai" value="{{ $senin->break_starts ?? '' }}">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="break_ends" class="form-control"
                                                            placeholder="Sampai" value="{{ $senin->break_ends ?? '' }}">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Balik Istirahat</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="return_starts" class="form-control"
                                                            placeholder="Sampai" value="{{ $senin->return_starts ?? '' }}">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="return_ends" class="form-control"
                                                            placeholder="Sampai" value="{{ $senin->return_ends ?? '' }}">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Pulang</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkout_starts" class="form-control"
                                                            placeholder="Sampai" value="{{ $senin->checkout_starts ?? '' }}">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkout_ends" class="form-control"
                                                            placeholder="Sampai" value="{{ $senin->checkout_ends ?? '' }}">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-info">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane" id="selasa" role="tabpanel">
                            <div class="table-responsive" data-simplebar style="max-height: 330px;">
                                <form action="{{ route('attendance.rule') }}" method="post">
                                    <input type="hidden" name="day" value="tuesday">
                                    @csrf
                                    @method('POST')
                                    <table class="table align-middle table-nowrap">
                                        <tbody>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Masuk</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkin_starts" class="form-control"
                                                            placeholder="Sampai" value="{{ $selasa->checkin_starts ?? '' }}">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkin_ends" class="form-control"
                                                            placeholder="Sampai" value="{{ $selasa->checkin_ends ?? '' }}">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Istirahat</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="break_starts" class="form-control"
                                                            placeholder="Sampai" value="{{ $selasa->break_starts ?? '' }}">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="break_ends" class="form-control"
                                                            placeholder="Sampai" value="{{ $selasa->break_ends ?? '' }}">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Balik Istirahat</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="return_starts" class="form-control"
                                                            placeholder="Sampai" value="{{ $selasa->return_starts ?? '' }}">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="return_ends" class="form-control"
                                                            placeholder="Sampai" value="{{ $selasa->return_ends ?? '' }}">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Pulang</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkout_starts" class="form-control"
                                                            placeholder="Sampai" value="{{ $selasa->checkout_starts ?? '' }}">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkout_ends" class="form-control"
                                                            placeholder="Sampai" value="{{ $selasa->checkout_ends ?? '' }}">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-info">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane" id="rabu" role="tabpanel">
                            <div class="table-responsive" data-simplebar style="max-height: 330px;">
                                <form action="{{ route('attendance.rule') }}" method="post">
                                    <input type="hidden" name="day" value="wednesday">
                                    @csrf
                                    @method('POST')
                                    <table class="table align-middle table-nowrap">
                                        <tbody>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Masuk</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkin_starts" class="form-control"
                                                            placeholder="Sampai" value="{{ $rabu->checkin_starts ?? '' }}">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkin_ends" class="form-control"
                                                            placeholder="Sampai" value="{{ $rabu->checkin_ends ?? '' }}">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Istirahat</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="break_starts" class="form-control"
                                                            placeholder="Sampai" value="{{ $rabu->break_starts ?? '' }}">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="break_ends" class="form-control"
                                                            placeholder="Sampai" value="{{ $rabu->break_ends ?? '' }}">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Balik Istirahat</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="return_starts" class="form-control"
                                                            placeholder="Sampai" value="{{ $rabu->return_starts ?? '' }}">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="return_ends" class="form-control"
                                                            placeholder="Sampai" value="{{ $rabu->return_ends ?? '' }}">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Pulang</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkout_starts" class="form-control"
                                                            placeholder="Sampai" value="{{ $rabu->checkout_starts ?? '' }}">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkout_ends" class="form-control"
                                                            placeholder="Sampai" value="{{ $rabu->checkout_ends ?? '' }}">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-info">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane" id="kamis" role="tabpanel">
                            <div class="table-responsive" data-simplebar style="max-height: 330px;">
                                <form action="{{ route('attendance.rule') }}" method="post">
                                    <input type="hidden" name="day" value="thursday">
                                    @csrf
                                    @method('POST')
                                    <table class="table align-middle table-nowrap">
                                        <tbody>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Masuk</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkin_starts" class="form-control"
                                                            placeholder="Sampai" value="{{ $kamis->checkin_starts ?? '' }}">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkin_ends" class="form-control"
                                                            placeholder="Sampai" value="{{ $kamis->checkin_ends ?? '' }}">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Istirahat</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="break_starts" class="form-control"
                                                            placeholder="Sampai" value="{{ $kamis->break_starts ?? '' }}">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="break_ends" class="form-control"
                                                            placeholder="Sampai" value="{{ $kamis->break_ends ?? '' }}">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Balik Istirahat</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="return_starts" class="form-control"
                                                            placeholder="Sampai" value="{{ $kamis->return_starts ?? '' }}">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="return_ends" class="form-control"
                                                            placeholder="Sampai" value="{{ $kamis->return_ends ?? '' }}">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Pulang</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkout_starts" class="form-control"
                                                            placeholder="Sampai" value="{{ $kamis->checkout_starts ?? '' }}">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkout_ends" class="form-control"
                                                            placeholder="Sampai" value="{{ $kamis->checkout_ends ?? '' }}">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-info">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane" id="jumat" role="tabpanel">
                            <div class="table-responsive" data-simplebar style="max-height: 330px;">
                                <form action="{{ route('attendance.rule') }}" method="post">
                                    <input type="hidden" name="day" value="friday">
                                    @csrf
                                    @method('POST')
                                    <table class="table align-middle table-nowrap">
                                        <tbody>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Masuk</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkin_starts" class="form-control"
                                                            placeholder="Sampai" value="{{ $jumat->checkin_starts ?? '' }}">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkin_ends" class="form-control"
                                                            placeholder="Sampai" value="{{ $jumat->checkin_ends ?? '' }}">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Istirahat</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="break_starts" class="form-control"
                                                            placeholder="Sampai" value="{{ $jumat->break_starts ?? '' }}">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="break_ends" class="form-control"
                                                            placeholder="Sampai" value="{{ $jumat->break_ends ?? '' }}">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Balik Istirahat</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="return_starts" class="form-control"
                                                            placeholder="Sampai" value="{{ $jumat->return_starts ?? '' }}">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="return_ends" class="form-control"
                                                            placeholder="Sampai" value="{{ $jumat->return_ends ?? '' }}">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-primary">
                                                        <i class="bx bx-time-five"></i>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Pulang</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">:</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkout_starts" class="form-control"
                                                            placeholder="Sampai" value="{{ $jumat->checkout_starts ?? '' }}">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        -
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="">
                                                        <input type="time" name="checkout_ends" class="form-control"
                                                            placeholder="Sampai" value="{{ $jumat->checkout_ends ?? '' }}">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-info">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-7">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-muted fw-medium">Orders</p>
                                    <h4 class="mb-0">1,235</h4>
                                </div>

                                <div class="flex-shrink-0 align-self-center">
                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                        <span class="avatar-title">
                                            <i class="bx bx-copy-alt font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-muted fw-medium">Revenue</p>
                                    <h4 class="mb-0">$35, 723</h4>
                                </div>

                                <div class="flex-shrink-0 align-self-center ">
                                    <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                        <span class="avatar-title rounded-circle bg-primary">
                                            <i class="bx bx-archive-in font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-muted fw-medium">Average Price</p>
                                    <h4 class="mb-0">$16.2</h4>
                                </div>

                                <div class="flex-shrink-0 align-self-center">
                                    <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                        <span class="avatar-title rounded-circle bg-primary">
                                            <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex flex-wrap">
                        <h4 class="card-title mb-4">Email Sent</h4>
                        <div class="ms-auto">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Week</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Month</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Year</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div id="stacked-column-chart" class="apex-charts"
                        data-colors='["--bs-primary", "--bs-warning", "--bs-success"]' dir="ltr"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
