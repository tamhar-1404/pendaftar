
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>404</title>
    <!--Google font-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300&amp;display=swap" rel="stylesheet">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('errorAssets/css/bootstrap.css')}}">
    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{asset('errorAssets/css/error-page.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('errorAssets/css/error-page-responsive.css')}}">
</head>
<body>

    <!-- 02 Main page -->
    <section class="page-section">
        <div class="full-width-screen">
            <div class="container-fluid p-0">
            <div class="particles-bg" id="particles-js">
                <div class="content-detail">
                    <h1 class="global-title"><span>4</span><span>0</span><span>4</span></h1>

                    <h4 class="sub-title">Not Found</h4>

                    <p class="detail-text"><br> Halaman yang anda cari tidak di temukan</p>

                    <div class="back-btn">
                        <a href="{{ route('/') }}" class="btn">Kembali ke halaman</a>
                    </div>
                </div></div>
            </div>
        </div>
    </section>
    <!-- latest jquery-->
    <script src="{{asset('errorAssets/js/jquery-3.5.1.min.js')}}"></script>
    <!-- theme particles script -->
    <script src="{{asset('errorAssets/js/particles.min.js')}}"></script>
    <script src="{{asset('errorAssets/js/app.js')}}"></script>
    <!-- Theme js-->
    <script src="{{asset('errorAssets/js/script.js')}}"></script>
</body>

</html>



