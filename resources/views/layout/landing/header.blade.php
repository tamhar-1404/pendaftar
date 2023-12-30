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
                <li><a href="about-us.html">Galery</a></li>
                <li><a href="services.html">FAQ</a></li>
                <li><a href="pricing.html">Testimoni</a></li>
            </ul>
            <ul class="attributes">
                <li class="header__button"><a href="{{ route('login.index') }}"
                        class="btn btn-info btn-rounded btn-xs btn-header">Login</a></li>
            </ul>
        </nav>
    </header>
    <!-- End Header -->
