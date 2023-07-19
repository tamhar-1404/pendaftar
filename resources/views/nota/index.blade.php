<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Sinp- Single Product Ecommerce HTML Template</title>
    <!-- <meta name="robots" content="noindex, follow" /> -->
    <meta name="AdsBot-Google" content="noindex follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    <style>
        .w-full {
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
      </style>
      
    <div class="offcanvas-overlay hidden fixed inset-0 bg-black opacity-50 z-50"></div>
    <div class="py-9 bg-gray-light">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-4">
                <div class="col-span-12">
                    <nav>
                        <ul class="flex flex-wrap items-center justify-center">
                              
                <img src="{{ asset('admin/images/hummashitam.png') }}" class="flex w-48 justify-center mt-2" alt=""
                srcset="">
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
   
        <div class=" text-center px-5 font-semibold mt-6 text-base text-green-500">Transaksi berhasil</div>

    <div class="flex justify-center items-start h-full mt-60 px-20">
        <div class="w-full px-10 rounded overflow-hidden shadow-xl bg-white transform -translate-y-1/2">
            {{--  <div class="flex w-48 justify-center" >
                
                <img src="{{ asset('admin/images/hummashitam.png') }}" class="flex w-48 justify-center mt-2" alt=""
                srcset="">
            </div>  --}}
          <div class="px-6 py-4 ">
            <div class="font-bold text-xl mb-2">Card Title</div>
            <p class="text-gray-700 text-base">
              Some example text. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <div class="px-6 py-4">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">Tag 1</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">Tag 2</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">Tag 3</span>
          </div>
          <div class="px-6 py-4">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">Tag 1</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">Tag 2</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">Tag 3</span>
          </div>
          <div class="px-6 py-4">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">Tag 1</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">Tag 2</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">Tag 3</span>
          </div>
          <div class="px-6 py-4">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">Tag 1</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">Tag 2</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">Tag 3</span>
          </div>
          <div class="px-6 py-4">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">Tag 1</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">Tag 2</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">Tag 3</span>
          </div>
          
        </div>
      </div>
      
                  
    <script src={{asset("transaksi/js/main.js")}}></script>


<!-- Tambahkan id "kodebarang" pada input untuk memperbaiki script -->
{{--  
<script>
    let currentStep = 1;
    let total_semua = 0;

    var closeButtons = document.querySelectorAll('.close');

    closeButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var kode = this.getAttribute('data-kode');
            var element = document.getElementById(kode);
            if (element) {
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
        });
    });

    document.getElementById('jumlah_semua').innerHTML = total_semua;
    document.getElementById('form_total_semua').value = total_semua.toString();
    function showStep() {
        document.getElementById('btn-bayar').classList.remove('hidden')
        let kodebarang = document.getElementById('kodebarang').value;
        $('#form-kode-' + kodebarang).attr('name', 'kode[]');
        $('#quantity_' + kodebarang).attr('name', 'quantity[]');
        console.log('kodebarang:', kodebarang);
        let databarang = document.getElementById(`${kodebarang}`);
        console.log('databarang:', databarang);

        if (databarang && databarang.classList.contains('1')) {
            let kode = 'quantity_' + kodebarang;
            let value_old = document.getElementById(kode).valueAsNumber;
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
</script>  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script>
    $(window).on('load', function() {
        $('.spin_load').fadeOut();
    });
</script>

</body>
</html>
