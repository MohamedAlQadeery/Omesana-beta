<header class="site-header mo-left header-full header style1 bgimg-scale">
    <!-- main header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="clearfix main-bar ">
            <div class="container-fluid">
                <div class="header-content-bx">
                    <!-- website logo -->
                    <div class="logo-header">
                        {{-- <a href="index.html"><img src="{{ asset('site-assets') }}/images/logo-white.png" alt="" /></a> --}}
                        <a href="{{ route('site.landing') }}"><img src="{{ asset('images/logo.png') }}"
                                alt="logo" /></a>

                    </div>
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <ul>
                                <li class="header-social">
                                    <ul>
                                        <li><a href="{{ setting('facebook') }}"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="{{ setting('twitter') }}"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li><a href="{{ setting('email') }}"><i class="fa fa-google-plus"></i></a>
                                        </li>
                                        <li><a href="{{ setting('instagram') }}"><i class="fa fa-instagram"></i></a>
                                        </li>
                                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <li>
                                                <a rel="alternate" hreflang="{{ $localeCode }}"
                                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                    {{ $properties['native'] }}
                                                </a>
                                            </li>


                                        @endforeach
                                    </ul>
                                </li>
                                <li class="contact-no"><span>{{ setting('mobile_number') }}+</span></li>
                                <li class="search-btn">
                                    <a href="javascript:;" class="btn radius-xl white menu-icon">
                                        <div class="menu-icon-in">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav navbar-collapse collapse full-sidenav content-scroll">
        <div class="logo-header">
            <a href="index.html"><img src="images/logo-white.png" alt="" /></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Layouts <i class="fa fa-chevron-down"></i></a>
                <ul class="sub-menu">
                    <li><a href="index.html" class="dez-page">Home 01</a></li>
                    <li><a href="index-dark.html" class="dez-page">Home Dark 01</a></li>
                    <li><a href="index-2.html" class="dez-page">Home 02</a></li>
                    <li><a href="index-dark-2.html" class="dez-page">Home Dark 02</a></li>
                    <li><a href="index-3.html" class="dez-page">Home 03</a></li>
                    <li><a href="index-dark-3.html" class="dez-page">Home Dark 03</a></li>
                    <li><a href="index-4.html" class="dez-page">Home 04</a></li>
                    <li><a href="index-dark-4.html" class="dez-page">Home Dark 04</a></li>
                    <li><a href="index-5.html" class="dez-page">Home 05</a></li>
                    <li><a href="index-dark-5.html" class="dez-page">Home Dark 05</a></li>
                </ul>
            </li>
            <li><a href="#">Pages <i class="fa fa-chevron-down"></i></a>
                <ul class="sub-menu">
                    <li><a href="about-me.html" class="dez-page">About Me</a></li>
                    <li><a href="about-us-1.html" class="dez-page">About Us 01</a></li>
                    <li><a href="about-us-2.html" class="dez-page">About Us 02</a></li>
                    <li><a href="services.html" class="dez-page">Services</a></li>
                    <li><a href="company-exhibition.html" class="dez-page">Company Exhibition</a></li>
                    <li><a href="company-history.html" class="dez-page">Company History</a></li>
                    <li><a href="price-table.html" class="dez-page">Price Table</a></li>
                    <li><a href="coming-soon.html" class="dez-page">Coming Soon</a></li>
                    <li><a href="404-page.html" class="dez-page">404 Page</a></li>
                </ul>
            </li>
            <li><a href="#">Blog <i class="fa fa-chevron-down"></i></a>
                <ul class="sub-menu">
                    <li><a href="blog-grid.html" class="dez-page">Blog Grid</a></li>
                    <li><a href="blog-list.html" class="dez-page">Blog Listing</a></li>
                    <li><a href="blog-masonry.html" class="dez-page">Blog Masonry</a></li>
                    <li><a href="blog-details.html" class="dez-page">Blog Details</a></li>
                </ul>
            </li>
            <li><a href="#">Portfolio <i class="fa fa-chevron-down"></i></a>
                <ul class="sub-menu">
                    <li><a href="portfolio-1.html" class="dez-page">Portfolio Masonary</a></li>
                    <li><a href="portfolio-2.html" class="dez-page">Portfolio Tiles Filter</a></li>
                    <li><a href="carousel-showcase.html" class="dez-page">Portfolio Owl Showcase</a></li>
                    <li><a href="film-strip.html" class="dez-page">Portfolio Flim Strip</a></li>
                    <li><a href="split-slider.html" class="dez-page">Portfolio Split Slider</a></li>
                    <li><a href="split-slider-dark.html" class="dez-page">Portfolio Split Slider Dark</a>
                    </li>
                    <li><a href="project-detail-1.html" class="dez-page">Project Detail 01</a></li>
                    <li><a href="project-detail-2.html" class="dez-page">Project Detail 02</a></li>
                    <li><a href="project-detail-3.html" class="dez-page">Project Detail 03</a></li>
                    <li><a href="project-detail-4.html" class="dez-page">Project Detail 04</a></li>
                </ul>
            </li>
            <li><a href="#">Contact Us <i class="fa fa-chevron-down"></i></a>
                <ul class="sub-menu">
                    <li><a href="contact-us-1.html" class="dez-page">Contact Us 01</a></li>
                    <li><a href="contact-us-2.html" class="dez-page">Contact Us 02</a></li>
                </ul>
            </li>
        </ul>
        <div class="social-menu">
            <ul>
                <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                <li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
            </ul>
            <p class="copyright-head">© 2020 Archia</p>
        </div>
    </div>
    <div class="menu-close">
        <i class="ti-close"></i>
    </div>
    <!-- main header END -->
</header>
