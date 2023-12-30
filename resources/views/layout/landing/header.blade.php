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
                <a href="#" class="header__mobile-brand">Menu</a>
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
                <li class="dropdown"><a href="blog-left-sidebar.html">Blog</a>
                    <ul class="dropdown-menu">
                        <li><a href="blog-left-sidebar.html">Single Post Left Sidebar</a></li>
                        <li><a href="blog-right-sidebar.html">Single Post Right Sidebar</a></li>
                        <li class="dropdown">
                            <a href="blog-grid-left-sidebar.html">Blog Grid</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-grid-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-grid-right-sidebar.html">Blog Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="blog-single-post-left-sidebar.html">Blog Listing</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-single-post-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-single-post-right-sidebar.html">Blog Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#">Dropdown Lavel</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Level 2</a></li>
                                <li><a href="#">Level 2</a></li>
                                <li><a href="#">Level 2</a></li>
                                <li class="dropdown">
                                    <a href="#">Dropdown 3</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Level 3</a></li>
                                        <li><a href="#">Level 3</a></li>
                                        <li><a href="#">Level 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="attributes">
                <li class="header__button"><a href="{{ route('login.index') }}"
                        class="btn btn-info btn-rounded btn-xs btn-header">Login</a></li>
            </ul>
        </nav>
    </header>
    <!-- End Header -->
