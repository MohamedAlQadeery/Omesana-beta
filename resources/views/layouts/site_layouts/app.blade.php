<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}"
    dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

<head>
    @include('layouts.site_layouts._header_meta')




</head>

<body id="bg" class="dark-3">
    <div class="page-wraper">
        <div id="loading-area" class="loading-4">
            <h1 class="loader4"
                style="letter-spacing: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? '0px;' : '10px;' }}">
                <span class="text-wrapper">
                    <span class="letters">{{ __('site.loading') }}</span>
                </span>
            </h1>
        </div>
        <!-- header -->
        @include('layouts.site_layouts._header')
        <!-- header END -->
        <!-- Content -->
        <div class="bg-black page-content">
            @yield('content')
        </div>
        <!-- Content END-->
        <!-- Footer -->
        @include('layouts.site_layouts._footer')
        <!-- Footer END-->
    </div>

    @include('layouts.site_layouts._footer_meta')
</body>

</html>
