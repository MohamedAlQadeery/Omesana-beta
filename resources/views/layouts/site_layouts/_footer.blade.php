<footer class="site-footer archi-footer">

    <div class="footer-top"
        style="background-image: url(images/background/bg5.png); background-size: cover; background-position: 0 -150px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-12 d-flex">
                    <div class="footer-logo align-self-center">
                        <img src="{{ asset('images/logo.png') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4">
                    <div class="widget widget-info">
                        <h6 class="title text-primary text-uppercase"
                            style="letter-spacing: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? '0px' : '3px' }}">
                            {{ __('site.call_us') }}</h6>
                        <p><span class="font-weight-600">Phone: +</span>{{ setting('mobile_number') }}</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4">
                    <div class="widget widget-info">
                        <h6 class="title text-primary text-uppercase"
                            style="letter-spacing: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? '0px' : '3px' }}">
                            {{ __('site.our_email') }}</h6>
                        <p>{{ setting('email') }}</p>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4">
                    <div class="widget widget-info">
                        <h6 class="title text-primary text-uppercase"
                            style="letter-spacing: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? '0px' : '3px' }}">
                            {{ __('site.our_address') }}</h6>
                        <p>{{ setting('address') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="text-center col-12">
                <p>{{ __('site.footer_body') }}</p>
            </div>
        </div>
    </div>
</footer>
<button class="scroltop fa fa-chevron-up"></button>