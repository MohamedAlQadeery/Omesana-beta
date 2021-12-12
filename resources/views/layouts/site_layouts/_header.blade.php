<header class="site-header mo-left header-full header style1 bgimg-scale">
    <!-- main header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="clearfix main-bar ">
            <div class="container-fluid">
                <div class="header-content-bx">
                    <!-- website logo -->
                    <div class="logo-header">
                        {{-- <a href="index.html"><img src="{{ asset('site-assets') }}/images/logo-white.png" alt="" /></a> --}}
                        <a href="{{ route('site.landing') }}"><img src="{{ asset('images/logo_300_120.png') }}"
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
                                        <li><a
                                                href="{{ route('site.contactus') }}">{{ __('site.contact_us_header') }}</a>
                                        </li>
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
            <a href="{{ route('site.landing') }}"><img src="{{ asset('images/logo_300_82.png') }}" alt="" /></a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ route('site.contactus') }}">{{ __('site.contact_us_header') }}</a>

                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li>
                <a rel="alternate" hreflang="{{ $localeCode }}"
                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    {{ $properties['native'] }}
                </a>
            </li>


            @endforeach
            </li>
        </ul>
        <div class="social-menu">
            <ul>
                <li><a href="{{ setting('facebook') }}"><i class="fa fa-facebook"></i></a></li>
                <li><a href="{{ setting('twitter') }}"><i class="fa fa-twitter"></i></a>
                </li>
                <li><a href="{{ setting('email') }}"><i class="fa fa-google-plus"></i></a>
                </li>
                <li><a href="{{ setting('instagram') }}"><i class="fa fa-instagram"></i></a>
                </li>
            </ul>
            <p class="copyright-head">© 2021 Omesana Design</p>
        </div>
    </div>
    <div class="menu-close">
        <i class="ti-close"></i>
    </div>
    <!-- main header END -->
</header>
