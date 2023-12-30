@extends('layout.landing.app')
@section('content')
<!-- Start Masthead -->
<section class="masthead js-masthead-height pb-0">
    <div class="masthead__style-overlay"></div>
    <div class="masthead__style-watter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="masthead__content masthead__content-mtop">
                        <h1 class="masthead__content-title">PT HUMMATECH DIGITAL INDONESIA</h1>
                        <p class="masthead__content-subtitle">Perusahaan Software terbaik se jawa timur</p>
                    </div>
                </div> 
                <div class="col-lg-6 text-center">
                    <div class="masthead__style-watter--image">
                        <div class="masthead__style-watter--icon flyIn">
                            <img src="{{ asset('assets-landing/tes.png') }}" class="img-fluid" alt="Icon" />
                        </div>
                        <img src="{{ asset('assets-landing/images/businessman-meditating.png') }}" class="img-fluid" alt="Business Man" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Masthead -->

<!-- Start Section -->
<section class="section pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <h2 class="section__heading section__heading-center">Bidang Apa Saja Yang Tersedia di hummatech ?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center mb-40">
                <p>di bawah adalah contoh beberapa bidang pekerjaan di hummatech</p>
            </div>
        </div>

    </div>
</section>
<!-- End Section -->

<div class="section__divider section__divider-right d-none d-lg-block"></div>

<!-- Start Section -->
<section class="section pt-40 pb-0 sm-clear-pt">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-40">
                <img src="{{ asset('assets-landing/images/businessman-with-laptop.png') }}" class="img-fluid" alt="Business Man with Laptop" />
            </div>
            <div class="col-lg-4 align-self-center mb-40">
                <h2>WEB DEVLOPER</h2>
                <p>
                    Tim web developer kami memiliki pengalaman luas dalam mengembangkan situs web yang dioptimalkan untuk pengalaman pengguna yang terbaik. Kami berkomitmen untuk menciptakan situs yang tidak hanya indah, tetapi juga mudah digunakan dan berkinerja tinggi.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End Section -->

<div class="section__divider section__divider-left"></div>

<!-- Start Section -->
<section class="section pt-0 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 order-lg-4 mb-40">
                <img src="{{ asset('assets-landing/images/lady-with-handphone.png') }}" class="img-fluid" alt="Lady with handphone" />
            </div>
            <div class="col-lg-4 align-self-center mb-40">
                <h2>MOBILE DEVLOPER</h2>
                <p>
                    Kami memahami bahwa pengembangan aplikasi mobile adalah tentang menciptakan pengalaman yang mulus dan intuitif. Dengan kombinasi desain yang menarik dan pengkodean yang kuat, kami menciptakan aplikasi mobile yang memikat dan mudah digunakan.                </p>
            </div>
        </div>
    </div>
</section>
<!-- End Section -->

<div class="section__divider section__divider-right"></div>

<!-- Start Section -->
<section class="section pt-0 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-40">
                <img src="{{ asset('assets-landing/images/using-software.png') }}" class="img-fluid" alt="Using Software" />
            </div>
            <div class="col-lg-4 align-self-center mb-40">
                <h2>DESAINER</h2>
                <p>
                    Kami menciptakan desain yang memikat dan berarti. Dari tipografi yang indah hingga tata letak yang inovatif, kami menghadirkan desain yang menonjol dan memberikan pesan yang jelas kepada audiens Anda.                </p>
            </div>
        </div>
    </div>
</section>
<!-- End Section -->


<!-- Start Section -->
<section class="section section__gray-watter--bottom">
    <div class="container">
        <div class="row mt-100">
            <div class="col-lg-6 offset-lg-3">
                <h2 class="section__heading section__heading-center">User testimoni</h2>
            </div>
        </div> 
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center mb-20">
                <div class="owl-carousel js-owl-testimoni">
                    <!-- Start testimoni 01 -->
                    <div class="item">
                        <div class="testimoni">
                            <blockquote>Mei ne audire fabulas. Ea mea quas putent, sit an lucilius <strong>repudiandae</strong>, mei ut appetere electram maluisset.</blockquote>
                            <p class="testimoni__author"><a href="#">Alexandro Oddol</a></p>
                            <a href="#" class="testimoni__avatar"><img src="assets/images/testimoni-avatar01.png" class="testimoni__avatar-image" alt="Alexandro Oddol" /></a>
                        </div>
                    </div>
                    <!-- End testimoni 01 -->

                    <!-- Start testimoni 02 -->
                    <div class="item">
                        <div class="testimoni">
                            <blockquote>Ea est molestie tincidunt, eam partem facete at. <strong>Mea in modo</strong> dolores concludaturque, euismod liberavisse</blockquote>
                            <p class="testimoni__author"><a href="#">Alexandro Oddol</a></p>
                            <a href="#" class="testimoni__avatar"><img src="assets/images/testimoni-avatar02.png" class="testimoni__avatar-image" alt="Alexandro Oddol" /></a>
                        </div>
                    </div>
                    <!-- End testimoni 02 -->

                    <!-- Start testimoni 03 -->
                    <div class="item">
                        <div class="testimoni">
                            <blockquote>Homero sapientem per id, id sonet veniam commune vis, <strong>ei nam nonumy</strong> fuisset pro primis consequat.</blockquote>
                            <p class="testimoni__author"><a href="#">Alexandro Oddol</a></p>
                            <a href="#" class="testimoni__avatar"><img src="assets/images/testimoni-avatar03.png" class="testimoni__avatar-image" alt="Alexandro Oddol" /></a>
                        </div>
                    </div>
                    <!-- End testimoni 03 -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="divider"></div>
                <div class="owl-active-nav">
                    <div class="owl-carousel js-owl-clients">
                        <!-- Start client 01 -->
                        <div class="item">
                            <a href="#" class="client">
                                    <img src="assets/images/clients/client_01-hover.png" class="client_logo-hover" alt="Client name" />
                                <img src="assets/images/clients/client_01.png" class="client_logo" alt="Client name" />
                            </a>
                        </div>
                        <!-- End client 01 -->

                        <!-- Start client 02 -->
                        <div class="item">
                            <a href="#" class="client">
                                <img src="assets/images/clients/client_02-hover.png" class="client_logo-hover" alt="Client name" />
                                <img src="assets/images/clients/client_02.png" class="client_logo" alt="Client name" />
                            </a>
                        </div>
                        <!-- End client 02 -->

                        <!-- Start client 03 -->
                        <div class="item">
                            <a href="#" class="client">
                                <img src="assets/images/clients/client_03-hover.png" class="client_logo-hover" alt="Client name" />
                                <img src="assets/images/clients/client_03.png" class="client_logo" alt="Client name" />
                            </a>
                        </div>
                        <!-- End client 03 -->

                        <!-- Start client 04 -->
                        <div class="item">
                            <a href="#" class="client">
                                <img src="assets/images/clients/client_04-hover.png" class="client_logo-hover" alt="Client name" />
                                <img src="assets/images/clients/client_04.png" class="client_logo" alt="Client name" />
                            </a>
                        </div>
                        <!-- End client 04 -->

                        <!-- Start client 05 -->
                        <div class="item">
                            <a href="#" class="client">
                                <img src="assets/images/clients/client_06-hover.png" class="client_logo-hover" alt="Client name" />
                                <img src="assets/images/clients/client_06.png" class="client_logo" alt="Client name" />
                            </a>
                        </div>
                        <!-- End client 05 -->

                        <!-- Start client 06 -->
                        <div class="item">
                            <a href="#" class="client">
                                <img src="assets/images/clients/client_05-hover.png" class="client_logo-hover" alt="Client name" />
                                <img src="assets/images/clients/client_05.png" class="client_logo" alt="Client name" />
                            </a>
                        </div>
                        <!-- End client 06 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 <!-- End Section -->

<!-- Start Section -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <h2 class="section__heading section__heading-center">Recommended reading</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="owl-carousel js-owl-article">
                    <!-- Start testimoni 01 -->
                    <div class="item">
                        <div class="article__card">
                            <div class="article__card-heading">
                                <a href="#" class="article__card-label">News & Article</a>
                                <a href="#" class="article__card-comment"><i class="fa fa-comments"></i> 23</a>
                                <h4 class="article__card-title"><a href="#">Sit in pertinax petentium est ne mucius</a></h4>
                            </div>
                            <div class="article__card-image">
                                <img src="assets/images/blog/thumbnail/img-blog-thumbnail-01.jpg" class="img-fluid" alt="Image article" />
                            </div>
                            <div class="article__card-footer">
                                <div class="article__card-author">
                                    <img src="assets/images/avatar-man.jpg" class="article__card-avatar" alt="Author Avatar" />
                                    <p><strong>Posted by :</strong> <i class="fa fa-user"></i> <a href="#">Ence iif</a></p>
                                    <a href="#">29 Des 2018</a>
                                </div>
                                <a href="#" class="article__card-action btn-link">Read more</a>
                            </div>         
                        </div>
                    </div>
                    <!-- End testimoni 01 -->

                    <!-- Start testimoni 02 -->
                    <div class="item">
                        <div class="article__card">
                            <div class="article__card-heading">
                                <a href="#" class="article__card-label">News & Article</a>
                                <a href="#" class="article__card-comment"><i class="fa fa-comments"></i> 10</a>
                                <h4 class="article__card-title"><a href="#">Mei ne audire fabulas ea mea quas putent</a></h4>
                            </div>
                            <div class="article__card-image">
                                <img src="assets/images/blog/thumbnail/img-blog-thumbnail-02.jpg" class="img-fluid" alt="Image article" />
                            </div>
                            <div class="article__card-footer">
                                <div class="article__card-author">
                                    <img src="assets/images/avatar-women.jpg" class="article__card-avatar" alt="Author Avatar" />
                                    <p><strong>Posted by :</strong> <i class="fa fa-user"></i> <a href="#">Rinna noor</a></p>
                                    <a href="#">29 Des 2018</a>
                                </div>
                                <a href="#" class="article__card-action btn-link">Read more</a>
                            </div>         
                        </div>
                    </div>
                    <!-- End testimoni 02 -->

                    <!-- Start testimoni 03 -->
                    <div class="item">
                        <div class="article__card">
                            <div class="article__card-heading">
                                <a href="#" class="article__card-label">News & Article</a>
                                <a href="#" class="article__card-comment"><i class="fa fa-comments"></i> 23</a>
                                <h4 class="article__card-title"><a href="#">Sit in pertinax petentium est ne mucius</a></h4>
                            </div>
                            <div class="article__card-image">
                                <img src="assets/images/blog/thumbnail/img-blog-thumbnail-03.jpg" class="img-fluid" alt="Image article" />
                            </div>
                            <div class="article__card-footer">
                                <div class="article__card-author">
                                    <img src="assets/images/avatar-man.jpg" class="article__card-avatar" alt="Author Avatar" />
                                    <p><strong>Posted by :</strong> <i class="fa fa-user"></i> <a href="#">Ence iif</a></p>
                                    <a href="#">29 Des 2018</a>
                                </div>
                                <a href="#" class="article__card-action btn-link">Read more</a>
                            </div>         
                        </div>
                    </div>
                    <!-- End testimoni 03 -->

                    <!-- Start testimoni 01 -->
                    <div class="item">
                        <div class="article__card">
                            <div class="article__card-heading">
                                <a href="#" class="article__card-label">News & Article</a>
                                <a href="#" class="article__card-comment"><i class="fa fa-comments"></i> 23</a>
                                <h4 class="article__card-title"><a href="#">Sit in pertinax petentium est ne mucius</a></h4>
                            </div>
                            <div class="article__card-image">
                                <img src="assets/images/blog/thumbnail/img-blog-thumbnail-01.jpg" class="img-fluid" alt="Image article" />
                            </div>
                            <div class="article__card-footer">
                                <div class="article__card-author">
                                    <img src="assets/images/avatar-man.jpg" class="article__card-avatar" alt="Author Avatar" />
                                    <p><strong>Posted by :</strong> <i class="fa fa-user"></i> <a href="#">Ence iif</a></p>
                                    <a href="#">29 Des 2018</a>
                                </div>
                                <a href="#" class="article__card-action btn-link">Read more</a>
                            </div>         
                        </div>
                    </div>
                    <!-- End testimoni 01 -->

                    <!-- Start testimoni 02 -->
                    <div class="item">
                        <div class="article__card">
                            <div class="article__card-heading">
                                <a href="#" class="article__card-label">News & Article</a>
                                <a href="#" class="article__card-comment"><i class="fa fa-comments"></i> 10</a>
                                <h4 class="article__card-title"><a href="#">Mei ne audire fabulas ea mea quas putent</a></h4>
                            </div>
                            <div class="article__card-image">
                                <img src="assets/images/blog/thumbnail/img-blog-thumbnail-02.jpg" class="img-fluid" alt="Image article" />
                            </div>
                            <div class="article__card-footer">
                                <div class="article__card-author">
                                    <img src="assets/images/avatar-women.jpg" class="article__card-avatar" alt="Author Avatar" />
                                    <p><strong>Posted by :</strong> <i class="fa fa-user"></i> <a href="#">Rinna noor</a></p>
                                    <a href="#">29 Des 2018</a>
                                </div>
                                <a href="#" class="article__card-action btn-link">Read more</a>
                            </div>         
                        </div>
                    </div>
                    <!-- End testimoni 02 -->

                    <!-- Start testimoni 03 -->
                    <div class="item">
                        <div class="article__card">
                            <div class="article__card-heading">
                                <a href="#" class="article__card-label">News & Article</a>
                                <a href="#" class="article__card-comment"><i class="fa fa-comments"></i> 23</a>
                                <h4 class="article__card-title"><a href="#">Sit in pertinax petentium est ne mucius</a></h4>
                            </div>
                            <div class="article__card-image">
                                <img src="assets/images/blog/thumbnail/img-blog-thumbnail-03.jpg" class="img-fluid" alt="Image article" />
                            </div>
                            <div class="article__card-footer">
                                <div class="article__card-author">
                                    <img src="assets/images/avatar-man.jpg" class="article__card-avatar" alt="Author Avatar" />
                                    <p><strong>Posted by :</strong> <i class="fa fa-user"></i> <a href="#">Ence iif</a></p>
                                    <a href="#">29 Des 2018</a>
                                </div>
                                <a href="#" class="article__card-action btn-link">Read more</a>
                            </div>         
                        </div>
                    </div>
                    <!-- End testimoni 03 -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section -->

<!-- Start Section -->
<section class="section section__cta pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="column__boxed">
                    <span class="icon icon-help column__boxed-icon"></span>
                    <h5 class="column__boxed-title">Get Support</h5>
                    <p>
                    Homero sapientem per id, id sonet veniam commune vis, ei nam non
                    </p>
                    <a href="#" class="btn-link">Go to support</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="column__boxed">
                    <span class="icon icon-users column__boxed-icon"></span>
                    <h5 class="column__boxed-title">Our comumnity</h5>
                    <p>
                    Homero sapientem per id, id sonet veniam commune vis, ei nam non
                    </p>
                    <a href="#" class="btn-link">Go to comumnity</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="column__boxed">
                    <span class="icon icon-question column__boxed-icon"></span>
                    <h5 class="column__boxed-title">F.A.Q</h5>
                    <p>
                    Homero sapientem per id, id sonet veniam commune vis, ei nam non
                    </p>
                    <a href="#" class="btn-link">Go to FAQ</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section -->

<!-- Start Back to top -->
<div class="back-to-top js-back-to-top">
    <span class="fa fa-angle-double-up back-to-top__icon"></span>
    <span class="back-to-top__text">TOP</span>
</div>
<!-- End Back to top -->

@endsection