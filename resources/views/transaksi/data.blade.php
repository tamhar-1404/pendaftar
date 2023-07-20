<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Hummasoft  | Pembelian</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <meta name="robots" content="noindex, follow" /> -->
    <meta name="AdsBot-Google" content="noindex follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href={{asset("transaksi/images/favicon.webp")}} />

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <link rel="stylesheet" href={{asset("transaksi/css/vendor/icofont.min.css" )}}/>
    <link rel="stylesheet" href={{asset("transaksi/css/vendor/line-awesome.min.css" )}}/>
    <link rel="stylesheet" href={{asset("transaksi/css/vendor/simple-line-icons.css")}} />
    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet" />

    <!-- Vendor CSS (Bootstrap & Icon Font) -->

    <!-- Plugins CSS (All Plugins Files) -->

    <link rel="stylesheet" href={{asset("transaksi/css/plugins/swiper-bundle.min.css")}} />

    <link rel="stylesheet" href={{asset("transaksi/css/plugins/magnific-popup.css")}} />


    <!-- Style CSS -->
    <link rel="stylesheet" href={{asset("transaksi/css/style.css")}} />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('load/load.css')}}">

</head>
<body class="font-poppins text-dark text-sm leading-loose">
    @if(session()->has('error'))
    <script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: "{{ session('error')}}",
    });
    </script>
    @endif
    @if(session()->has('success'))
        <script>
        </script>
    @endif
    <div  class="spin_load  screen_loader animate__animated fixed inset-1 z-[30] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
        <div class="center">
            <div class="ring">
            </div>
            <img src="{{asset('load/logo.png')}}" alt="Deskripsi gambar" class="my-img">
        </div>
    </div>
    <div class="search-form fixed top-0 left-0 w-full bg-black opacity-95 min-h-screen items-center justify-center py-8 px-10 transform  transition-transform translate-x-full ease-in-out duration-500 hidden lg:flex z-50">
        <button class="search-close absolute left-1/2 text-white text-xl top-12 translate-y-1/2" aria-label="close icon"><span class="icon-close"></span></button>
        <form class="relative xl:w-1/3 lg:w-1/2" action="#" method="get">
            <input class="text-md font-normal border-b border-solid border-gray-600 bg-transparent h-14 w-full focus:outline-none pr-14 text-white" type="search" name="search" placeholder="Search our store" />
            <button class="absolute right-0 top-3 text-white text-md font-normal" type="submit" aria-label="submit button"><i class="icon-magnifier"></i></button>
        </form>
    </div>
    <div class="offcanvas-overlay hidden fixed inset-0 bg-black opacity-50 z-50"></div>
    <div class="py-9 bg-gray-light">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-4">
                <div class="col-span-12">
                    <nav>
                        <ul class="flex flex-wrap items-center justify-center">
                            <img src="{{ asset('admin/images/hummashitam.png') }}" class="w-48" alt=""
                            srcset="">
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-row ">
        <div class=" top-0 h-[700px] left-0  w-1/4 bg-gray-light mt-4 ml-4">
            <div class="h-full flex flex-col  gap-5">
              <div class="flex justify-center items-center">
                <p class="text-lg font-semibold text-dark mt-2 ml-2">Menu</p>
              </div>
              <div class="  h-7 mb-8 flex-col justify-center items-center">
                <center>

                    <input class="border px-2 border-gray-300 w-[95%] placeholder:text-gray-600" id="searchInput" type="text" name="kodebarang" placeholder="cari menu" onchange="cari(this)">
                </cesnter>
                <div class="mt-1">Makanan</div>
                <div class="w-full max-h-[270px] mt-1  overflow-y-scroll">
                    @forelse ($barang as $data )
                    <div class="w-[95%] mx-auto bg-white rounded shadow-md overflow-hidden mt-4 mb-5">
                        <div class="flex justify-between px-5">
                            <div id="makanan" class="font-bold text-">{{$data->nama}}</div>
                            <p class="text-gray-700">{{$data->harga}}</p>
                        </div>
                    </div>
                    @empty

                    @endforelse


                </div>
                <div class="mt-2">minuman</div>
                <div class="w-full max-h-[260px] mt-1  overflow-y-scroll">
                    @forelse ($minuman as $data )
                    <div class="w-[95%] mx-auto bg-white rounded shadow-md overflow-hidden mt-4 mb-5">
                        <div class="flex justify-between px-5">
                            <div id="makanan" class="font-bold text-">{{$data->nama}}</div>
                            <p class="text-gray-700">{{$data->harga}}</p>
                        </div>
                    </div>
                    @empty

                    @endforelse



                </div>

            </div><br>
            </div>
          </div>
        <div class="container">
            <div class="grid grid-cols-1 gap-5">
                <div class="flex w-full justify-between  md:w-max-[50%]" >
                    <div class="flex w-full justify-end mt-2 font-semibold items-center  px-4 py-1 rounded">
                        <div class=" flex text-white items-center py-1 rounded bg-blue-500 px-3">
                            <p class="text-sm">Saldo anda sekarang : {{$user}}</p>
                        </div>
                    </div>
                </div>
                <div class="w-full  h-7 mb-8 flex-col ">
                    <p class="text-center">scan kode barang</p>
                    <div class="flex justify-center ">
                        <input placeholder="Masukan kode barang"  autofocus onchange="showStep(0)" class="border px-2 border-gray-300 rounded w-[30%] text-black placeholder:text-gray-600 " type="text" name="kodebarang" id="kodebarang">
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full min-w-max">
                        <thead>
                            <tr>
                                <th class="bg-gray-300 p-3  text-center font-medium text-sm capitalize">Foto</th>
                                <th class="bg-gray-300 p-3  text-center font-medium text-sm capitalize">Nama Barang</th>
                                <th class="bg-gray-300 p-3  text-center font-medium text-sm capitalize">Harga</th>
                                <th class="bg-gray-300 p-3  text-center font-medium text-sm capitalize">Stok</th>
                                <th class="bg-gray-300 p-3  text-center font-medium text-sm capitalize">Total</th>
                                <th class="bg-gray-300 p-3  text-center font-medium text-sm capitalize">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="{{ route('History_Admin.store') }}" method="POST" onsubmit="return konfirmasirfid(event)">
                            @csrf
                            @forelse ( $barang as $data)
                            <tr id="{{$data->kode}}" class=" hidden" data-max-stok={{ $data->stok }}>
                                <input type="hidden" id="form-kode-{{ $data->kode }}" value="{{ $data->kode }}">
                                <td class="w-32 p-3  text-center">
                                    <img src="{{ asset('storage/pendataanbarang/' . $data->foto) }}" class="w-10" alt="" srcset="">
                                </td>
                                <td class="p-3 text-center">
                                    <a href="#" class="transition-all hover:text-orange">{{$data->nama}}</a>
                                </td>
                                <td class="p-3  text-center"><span><span id="harga{{$data->kode}}" data-harga="{{$data->harga}}">{{$data->harga}}</span></span></td>
                                <td class="p-3  text-center">
                                    <div class="flex count border border-solid border-gray-300 p-2 h-11">

                                        <input id="quantity_{{$data->kode}}" type="number" data-sebelumnya="1" value="1" class="quantity__input flex-auto w-8 text-center focus:outline-none " onchange="inputquantity({{ $data->kode }})" min="1" oninvalid="this.setCustomValidity('Stok minimal 1')" oninput="setCustomValidity('')">

                                    </div>
                                </td>
                                <td class="p-3  text-center" id="total_semua">
                                    <input type="hidden" name="total_harga" id="form_total_{{ $data->kode }}">
                                    <input type="hidden" name="harga" id="form_total_{{ $data->harga }}" value="{{ $data->harga }}">
                                    <span><p class=" text-center bg-white" id="total_harga_{{$data->kode}}">{{$data->harga}}</p></span>
                                </td>
                                  <td class="p-3  text-center">
                                    <a id="cancel" data-kode="{{$data->kode}}" class="close"><i class="icon-close"></i></a>
                                </td>
                            </tr>


                            @empty

                            @endforelse




                        </tbody>
                    </table>
                        <input type="hidden" name="rfid_user" id="rfid-user">
                        <div class="flex justify-end px-8 mt-2">
                            <p id="total_keseluruhan" class="hidden text-base font-semibold text-gray-700">Rp. <span id="jumlah_semua" class="text-base font-semibold text-blue-400">0</span></p>
                            <input type="hidden" id="form_total_semua" value="0">
                        </div>
                        <div class="flex justify-end px-8">
                            <button type="submit" class="hidden bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded" id="btn-bayar">Bayar</button>
                        </div>

                    </form>

                    <script>
                        function konfirmasirfid(event) {
                            event.preventDefault();
                            Swal.fire({
                                title: 'Konfirmasi RFID',
                                input: 'text',
                                inputLabel: 'Masukkan RFID anda:',
                                showCancelButton: true,
                                confirmButtonText: 'Submit',
                                cancelButtonText: 'Batal',
                                confirmButtonColor: '#00B7FF',
                                cancelButtonColor: '#FF0000',
                                allowOutsideClick: false,
                                inputValidator: (value) => {
                                    if (!value || value.trim() === '') {
                                        return 'Harap masukkan password.';
                                    }
                                },
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    document.getElementById("rfid-user").value = result.value;
                                    var params = new URLSearchParams(window.location.href);
                                    console.log(params.get('rfid'));
                                    if (params.get('rfid') == result.value) {
                                        event.target.submit();
                                    } else {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Oops...',
                                            text: 'RFID tidak sama',
                                        });
                                    }
                                }
                            });
                            return false;
                        }
                    </script>
                        </div>



                </div>

            </div>
        </div>
    </div>






    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->

    <!-- Activation JS -->
    <script src={{asset("transaksi/js/main.js")}}></script>


<!-- Tambahkan id "kodebarang" pada input untuk memperbaiki script -->

<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

    function cari(data) {
        $.ajax({
            url: "{{ route('cari_barang') }}",
            method: 'POST',
            data: {
                value: data.value,
            },
            success: function (response) {
                $.each(response, function (index, el) {
                    console.log("Nama : ",el.nama);
                    console.log("Harga : ",el.harga);
                })
            }
        })
    }

    let currentStep = 1;
    let total_semua = 0;

    var closeButtons = document.querySelectorAll('.close');
    closeButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var kode = this.getAttribute('data-kode');
            var element = document.getElementById(kode);
            if (element) {
                Swal.fire({
                title: 'kamu yakin?',
                text: "kamu bisa scan kode lagi untuk membelinya",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus'
                }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                    'Terhapus',
                    'list barang kamu sudah di hapus.',
                    'success'
                    )
                    var hargaValue = parseFloat($('#harga' + kode).data('harga'));
                    total_semua -= parseInt(document.getElementById('total_harga_' + kode).innerText);
                    document.getElementById('jumlah_semua').innerHTML = total_semua;
                    document.getElementById('form_total_semua').value = total_semua.toString();

                    element.classList.add('hidden');
                    element.classList.remove('1');
                    document.getElementById('quantity_' + kode).value = 1;
                    document.getElementById('total_harga_' + kode).innerText = hargaValue;
                    document.getElementById('form_total_' + kode).value = hargaValue;

                    $('#form-kode-' + kode).removeAttr('name');
                    $('#quantity_' + kode).removeAttr('name');
                    document.getElementById('kodebarang').focus();
                    console.log(document.getElementById('jumlah_semua').innerText);
                    if (total_semua == 0 && document.getElementById('jumlah_semua').innerText == "0") {
                        document.getElementById('btn-bayar').classList.add('hidden')
                    }
                }
                })

            }
        });
    });

    function inputquantity(kode) {
        let quantity = document.getElementById('quantity_' + kode).valueAsNumber;
        let harga = parseInt(document.getElementById('harga' + kode).innerText) * quantity;
        total_semua += parseInt(document.getElementById('harga' + kode).innerText);
        total_semua = harga;
        document.getElementById('jumlah_semua').innerHTML = total_semua;
        document.getElementById('total_harga_' + kode).innerHTML = harga.toString();
        document.getElementById('quantity_' + kode).setAttribute('data-sebelumnya', data_sekarang.toString());
    }
    document.getElementById('jumlah_semua').innerHTML = total_semua;
    document.getElementById('form_total_semua').value = total_semua.toString();
    function showStep() {
        let kodebarang = document.getElementById('kodebarang').value;
        $('#form-kode-' + kodebarang).attr('name', 'kode[]');
        $('#quantity_' + kodebarang).attr('name', 'quantity[]');
        console.log('kodebarang:', kodebarang);
        let databarang = document.getElementById(`${kodebarang}`);
        console.log('databarang:', databarang);
        document.getElementById('total_keseluruhan').classList.remove('hidden');
        if (databarang && databarang.classList.contains('1')) {

            document.getElementById('total_keseluruhan')
            let kode = 'quantity_' + kodebarang;
            let value_old = document.getElementById(kode).valueAsNumber;
            console.log('Value old : ',value_old);
            let maxStok = parseInt(databarang.getAttribute('data-max-stok'));
            if (value_old > maxStok - 1) {
                alert("Stok habis");
                document.getElementById('kodebarang').value = null;
                document.getElementById('kodebarang').focus();
                return;
            }
            let value_new = value_old + 1;
            document.getElementById(kode).value = value_new;

            // Ubah cara mendapatkan harga menggunakan jQuery
            var hargaValue = parseFloat($('#harga'+kodebarang).data('harga'));
            console.log('Nilai harga:', hargaValue);

            let total = hargaValue * value_new;
            console.log('harga total: ', total.toString());

            // Perbarui elemen "total_harga" dengan nilai total baru
            document.getElementById('total_harga_' + kodebarang).innerText = total;
            document.getElementById('form_total_' + kodebarang).value = hargaValue;
            total_semua += hargaValue;
            console.log("Total semua : ", total_semua);

            document.getElementById('kodebarang').value = null;
            document.getElementById('kodebarang').focus();
            document.getElementById('jumlah_semua').innerHTML = total_semua;
            document.getElementById('form_total_semua').value = total_semua.toString();
        } else if (databarang) {
            let maxStok = parseInt(databarang.getAttribute('data-max-stok'));
            console.log('Max stok : ',maxStok);
            if (maxStok <= 0) {
                alert("Stok habis");
                document.getElementById('kodebarang').value = null;
                document.getElementById('kodebarang').focus();
                return;
            }
            document.getElementById('btn-bayar').classList.remove('hidden')
            databarang.classList.remove('hidden');
            databarang.classList.add('1');
            let hargaAwal = parseInt(document.getElementById('total_harga_' + kodebarang).innerText);
            total_semua += hargaAwal;
            console.log("Total semua : ", total_semua);

            document.getElementById('kodebarang').value = null;
            document.getElementById('kodebarang').focus();
            document.getElementById('jumlah_semua').innerHTML = total_semua;
            document.getElementById('form_total_semua').value = total_semua.toString();
        } else {
            document.getElementById('kodebarang').value = null;
            document.getElementById('kodebarang').focus();
            alert('barang yang anda scan belum di data pada admin');
        }
    }
    function inputserch(serch){

    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script>
    $(window).on('load', function() {
        $('.spin_load').fadeOut();
    });
</script>

</body>

