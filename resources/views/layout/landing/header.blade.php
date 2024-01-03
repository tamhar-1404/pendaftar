    <!-- Start Header -->
    <header class="header js-header-scroll">
        <nav hidden>
            <div class="nav-header">
                <a href="#" class="brand">
                    <img src="{{ asset('assets-landing/images/logolandingpng.png') }}" class="logo" height="35"
                        alt="Smooth" />
                </a>
                <button class="toggle-bar">
                    <span class="fa fa-bars"></span>
                </button>
            </div>
            <!-- Start Header menu for mobile -->
            <div class="header__mobile js-header-menu">
                <img src="{{ asset('assets-landing/images/logolandingpng.png') }}" class="header__mobile-brand">
                <button class="toggle-bar header__mobile-toggle">
                    <span class="fa fa-remove"></span>
                </button>
            </div>
            <!-- End Header menu for mobile -->
            <ul class="menu">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="javascript:void(0)">Galery</a></li>
                <li><a href="javascript:void(0)">FAQ</a></li>
                <li><a href="javascript:void(0)">Testimoni</a></li>
                <li>
                    <div class="d-flex justify-content-header">
                        <div class="">
                            <button onclick="window.location.href='{{ route('login.create') }}'" class="btn btn-warning text-white btn-sm mt-4">Daftar</button>
                        </div>
                        <div class="px-4">
                            <button onclick="window.location.href='{{ route('auth-login') }}'" class="btn btn-info btn-sm mt-4">Login</button>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <!-- End Header -->
