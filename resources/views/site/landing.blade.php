@extends('layouts.site_layouts.app')

@section('content')
    <!-- Main Slider -->
    <div class="rev-slider slide3 revolution-slider">
        <div id="rev_slider_1164_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="exploration-header"
            data-source="gallery" style="background-color:#1c1f23;padding:0px;">
            <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
            <div id="rev_slider_1164_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                <ul>
                    <li data-index="rs-100" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default"
                        data-thumb="{{ asset('site-assets') }}/images/main-slider/dark/slide5.jpg" data-rotate="0"
                        data-fstransition="fade" data-fsmasterspeed="2000" data-fsslotamount="7" data-saveperformance="off"
                        data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                        data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('site-assets') }}/images/main-slider/dark/slide5.jpg" alt=""
                            data-lazyload="images/main-slider/dark/slide5.jpg" data-bgposition="center center"
                            data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="6" class="rev-fadebg"
                            data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-shape tp-shapewrapper" id="slide-100-layer-1"
                            data-x="['left','left','left','left']" data-hoffset="['-300','-150','-120','-80']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['70','90','70','70']"
                            data-width="['1100','800','600','360']" data-height="['400','400','400','360']"
                            data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="on"
                            data-responsive="off"
                            data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1500,"frame":"999","to":"opacity:0;","ease":"Power4.easeIn"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 5;font-family:Cairo,Open Sans; background-color:rgba(0,0,0,0.0); background-size:100%; background-repeat:no-repeat; background-position:bottom;">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper" id="slide-100-layer-2"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape"
                                data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                                data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1500,"frame":"999","to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 5;font-family:Cairo,Open Sans; background-color:rgba(0,0,0,0.0); background-size:100%; background-repeat:no-repeat; background-position:bottom;">
                            </div>

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption layers3" id="slide-100-layer-3" data-x="['right','right','right','right']"
                                data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                data-voffset="['0','50','40','35']" data-fontsize="['14','14','14','12']"
                                data-lineheight="['200','45','35','24']" data-width="['1000','1000','600','280']"
                                data-height="none" data-whitespace="normal" data-type="text" data-basealign="slide"
                                data-responsive_offset="off" data-responsive="off"
                                data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['right','right','right','right']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; text-transform:uppercase; font-weight:700; white-space: normal; color:#fff; font-family: 'Open Sans',Cairo, cursive; border-width:0px; letter-spacing:{{ LaravelLocalization::getCurrentLocale() == 'ar' ? '0px;' : '20px' }}">
                                {{ __('site.slider_body') }}
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption" id="slide-100-layer-4" data-x="['right','right','right','right']"
                                data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                data-voffset="['-70','0','0','0']" data-width="['700','600','600','260']"
                                data-fontsize="['85','60','40','30']" data-lineheight="['65','45','35','30']"
                                data-height="none" data-whitespace="normal" data-type="text" data-basealign="slide"
                                data-responsive_offset="off" data-responsive="off"
                                data-textAlign="['right','right','right','right']"
                                data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":650,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 7; white-space: normal; color:#fff; font-family: Cairo,Poppins; border-width:0px; text-transform:uppercase;">
                                <span style="font-weight:700;">{{ __('site.slider_header_sec_word') }}</span> <span
                                    style="font-weight:200;">{{ __('site.slider_header_first_word') }}</span>
                            </div>
                            <div class="tp-caption " id="slide-100-layer-5" data-x="['right','right','right','right']"
                                data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                data-voffset="['130','0','80','65']" data-width="['700','600','400','260']"
                                data-fontsize="['18','16','16','13']" data-lineheight="['30','28','26','24']"
                                data-height="none" data-whitespace="normal" data-type="text" data-basealign="slide"
                                data-visibility="['on','on','on','on']" data-responsive_offset="off" data-responsive="off"
                                data-frames='[{"from":"y:50px;opacity:0;","speed":2000,"to":"o:1;","delay":750,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['right','right','right','right']" data-paddingtop="[0,100,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 7; white-space: normal; color:#fff; font-family:'Poppins',Cairo, sans-serif; border-width:0px; font-weight:400;">
                                {{ __('site.slider_welcome') }}
                            </div>
                            <!-- LAYER NR. 5 -->
                            <a class="tp-caption tp-resizeme" href="carousel-showcase.html" target="_blank"
                                id="slide-100-layer-6" data-x="['right','right','right','right']"
                                data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                data-voffset="['230','180','180','180']" data-width="none" data-height="none"
                                data-whitespace="['nowrap','nowrap','nowrap','nowrap']" data-type="button" data-actions=''
                                data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                                data-frames='[{"delay":"+690","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);"}]'
                                data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[5,0,0,0]" data-paddingright="[50,35,35,35]" data-paddingbottom="[5,0,0,0]"
                                data-paddingleft="[50,35,35,35]"
                                style="z-index: 13; white-space: normal; font-size: 17px; line-height: 50px; font-weight: 400; color:#252525; display: inline-block;font-family:Cairo,Poppins;background-color:#d19d47; border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">
                                {{ __('site.slider_button') }}
                            </a>
                        </div>
                    </li>

                    {{-- you have to increase data-index by 100 when adding another slider --}}
                    <li data-index="rs-200" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default"
                        data-thumb="{{ asset('site-assets') }}/images/main-slider/dark/slide3.jpg" data-rotate="0"
                        data-fstransition="fade" data-fsmasterspeed="2000" data-fsslotamount="7" data-saveperformance="off"
                        data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                        data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('site-assets') }}/images/main-slider/dark/slide3.jpg" alt=""
                            data-lazyload="images/main-slider/dark/slide5.jpg" data-bgposition="center center"
                            data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="6" class="rev-fadebg"
                            data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-shape tp-shapewrapper" id="slide-100-layer-1"
                            data-x="['left','left','left','left']" data-hoffset="['-300','-150','-120','-80']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['70','90','70','70']"
                            data-width="['1100','800','600','360']" data-height="['400','400','400','360']"
                            data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="on"
                            data-responsive="off"
                            data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1500,"frame":"999","to":"opacity:0;","ease":"Power4.easeIn"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 5;font-family:Cairo,Open Sans; background-color:rgba(0,0,0,0.0); background-size:100%; background-repeat:no-repeat; background-position:bottom;">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper" id="slide-100-layer-2"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape"
                                data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                                data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1500,"frame":"999","to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 5;font-family:Cairo,Open Sans; background-color:rgba(0,0,0,0.0); background-size:100%; background-repeat:no-repeat; background-position:bottom;">
                            </div>

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption layers3" id="slide-100-layer-3"
                                data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                                data-y="['top','top','top','top']" data-voffset="['0','50','40','35']"
                                data-fontsize="['14','14','14','12']" data-lineheight="['200','45','35','24']"
                                data-width="['1000','1000','600','280']" data-height="none" data-whitespace="normal"
                                data-type="text" data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                                data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['right','right','right','right']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; text-transform:uppercase; font-weight:700; white-space: normal; color:#fff; font-family: 'Open Sans',Cairo, cursive; border-width:0px; letter-spacing:{{ LaravelLocalization::getCurrentLocale() == 'ar' ? '0px;' : '20px' }}">
                                {{ __('site.slider_body') }}
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption" id="slide-100-layer-4" data-x="['right','right','right','right']"
                                data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                data-voffset="['-70','0','0','0']" data-width="['700','600','600','260']"
                                data-fontsize="['85','60','40','30']" data-lineheight="['65','45','35','30']"
                                data-height="none" data-whitespace="normal" data-type="text" data-basealign="slide"
                                data-responsive_offset="off" data-responsive="off"
                                data-textAlign="['right','right','right','right']"
                                data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":650,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 7; white-space: normal; color:#fff; font-family: Cairo,Poppins; border-width:0px; text-transform:uppercase;">
                                <span style="font-weight:700;">{{ __('site.slider_header_sec_word') }}</span> <span
                                    style="font-weight:200;">{{ __('site.slider_header_first_word') }}</span>
                            </div>
                            <div class="tp-caption " id="slide-100-layer-5" data-x="['right','right','right','right']"
                                data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                data-voffset="['130','0','80','65']" data-width="['700','600','400','260']"
                                data-fontsize="['18','16','16','13']" data-lineheight="['30','28','26','24']"
                                data-height="none" data-whitespace="normal" data-type="text" data-basealign="slide"
                                data-visibility="['on','on','on','on']" data-responsive_offset="off" data-responsive="off"
                                data-frames='[{"from":"y:50px;opacity:0;","speed":2000,"to":"o:1;","delay":750,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['right','right','right','right']" data-paddingtop="[0,100,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 7; white-space: normal; color:#fff; font-family:'Poppins',Cairo, sans-serif; border-width:0px; font-weight:400;">
                                {{ __('site.slider_welcome') }}
                            </div>
                            <!-- LAYER NR. 5 -->
                            <a class="tp-caption tp-resizeme" href="carousel-showcase.html" target="_blank"
                                id="slide-100-layer-6" data-x="['right','right','right','right']"
                                data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                data-voffset="['230','180','180','180']" data-width="none" data-height="none"
                                data-whitespace="['nowrap','nowrap','nowrap','nowrap']" data-type="button" data-actions=''
                                data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                                data-frames='[{"delay":"+690","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);"}]'
                                data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[5,0,0,0]" data-paddingright="[50,35,35,35]" data-paddingbottom="[5,0,0,0]"
                                data-paddingleft="[50,35,35,35]"
                                style="z-index: 13; white-space: normal; font-size: 17px; line-height: 50px; font-weight: 400; color:#252525; display: inline-block;font-family:Cairo,Poppins;background-color:#d19d47; border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">
                                {{ __('site.slider_button') }}
                            </a>
                        </div>
                    </li>
                    <!-- SLIDE  -->

                </ul>

                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div><!-- END REVOLUTION SLIDER -->

    </div>
    <!-- Main Slider -->
    <div class="content-block">


        <!-- About Me -->
        <div class="section-full content-inner-1 exhibition-bx">
            <div class="container">
                <h2 class="exhibition-name">{{ setting('title_' . LaravelLocalization::getCurrentLocale()) }}</h2>
                <div class="row align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="exhibition-carousel owl-carousel owl-none m-b30">
                            <div class="item"><img
                                    src="{{ asset('site-assets') }}/images/gallery/gallery-6/pic1.jpg" alt="">
                            </div>
                            <div class="item"><img
                                    src="{{ asset('site-assets') }}/images/gallery/gallery-6/pic2.jpg" alt="">
                            </div>
                            <div class="item"><img
                                    src="{{ asset('site-assets') }}/images/gallery/gallery-6/pic3.jpg" alt="">
                            </div>
                            <div class="item"><img
                                    src="{{ asset('site-assets') }}/images/gallery/gallery-6/pic4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 m-b30">
                        <p class="title">{{ setting('team_desc_' . LaravelLocalization::getCurrentLocale()) }}
                        </p>
                        <a href="contact-us-1.html"
                            class="btn outline outline-4 button-lg black btn-lg radius-xl btn-aware m-r10 m-b10"
                            style="background-color: #d19d47">{{ __('site.contact us') }}<span></span></a>
                        <a href="split-slider.html"
                            class="btn outline outline-4 button-lg black btn-lg radius-xl btn-aware m-b10"
                            style="background-color: #d19d47">{{ __('site.view portfolio') }}<span></span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Me End -->

        {{-- about offic creator --}}
        <div class="bg-white section-full content-inner-1">
            <div class="container">
                <div class="text-center section-head">
                    <h2 class="head-title m-b10">{{ __('site.office_creators') }}</h2>
                    <p>+{{ setting('exp_years') }} {{ __('site.years_experince') }}</p>
                </div>
                <div class="row">
                    <div class="col-lg-12 wow fadeIn" data-wow-delay="0.2s" data-wow-duration="2s">
                        <div class="client-box-full owl-carousel owl-btn-center-lr">
                            <div class="item">
                                <div class="testimonial-1">
                                    <div class="testimonial-pic radius">
                                        <img src="{{ asset('site-assets') }}/images/testimonials/pic1.jpg" width="100"
                                            height="100" alt="">
                                    </div>
                                    <div class="testimonial-text">
                                        <p>
                                            {{ setting('main_arc_words_' . LaravelLocalization::getCurrentLocale()) }}
                                        </p>
                                    </div>
                                    <div class="testimonial-detail">
                                        <strong class="testimonial-name">{{ __('site.main_arc') }}</strong>
                                        <span class="testimonial-position">{{ __('site.female_ceo') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-1">
                                    <div class="testimonial-pic radius">
                                        <img src="{{ asset('site-assets') }}/images/testimonials/pic4.png" width="100"
                                            height="100" alt="">
                                    </div>
                                    <div class="testimonial-text">
                                        <p>
                                            {{ setting('main_ceo_words_' . LaravelLocalization::getCurrentLocale()) }}
                                        </p>
                                    </div>
                                    <div class="testimonial-detail">
                                        <strong class="testimonial-name">{{ __('site.main_ceo') }}</strong>
                                        <span class="testimonial-position">{{ __('site.male_ceo') }}</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end about office creators --}}
        <!-- About Us -->
        <div class="bg-white section-full content-inner-1">
            <div class="text-center section-head">
                <h2 class="head-title m-b10">{{ __('site.services') }}</h2>

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 wow fadeIn" data-wow-delay="0.2s" data-wow-duration="2s">
                        <div class="icon-bx-wraper sr-iconbox m-b30">
                            <div class="icon-lg m-b20">
                                <a href="javascript:void(0)" class="icon-cell"><img
                                        src="{{ asset('site-assets') }}/images/icon/color-3/icon1.png" alt="" /></a>
                            </div>
                            <div class="icon-content">
                                <h4 class="dlab-tilte letter-spacing text-uppercase">
                                    {{ __('site.interior_design') }}
                                </h4>
                                <p> {{ setting('int_design_' . LaravelLocalization::getCurrentLocale()) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 wow fadeIn" data-wow-delay="0.4s" data-wow-duration="2s">
                        <div class="icon-bx-wraper sr-iconbox m-b30">
                            <div class="icon-lg m-b20">
                                <a href="javascript:void(0)" class="icon-cell"><img
                                        src="{{ asset('site-assets') }}/images/icon/color-3/icon2.png" alt="" /></a>
                            </div>
                            <div class="icon-content">
                                <h4 class="dlab-tilte letter-spacing text-uppercase">{{ __('site.Architecture_design') }}
                                </h4>
                                <p> {{ setting('arc_design_' . LaravelLocalization::getCurrentLocale()) }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- About Us End -->
        <!-- Latest Project -->
        <div class="bg-white section-full content-inner-1">
            <div class="container-fluid">
                <div class="text-center section-head">
                    <h2 class="head-title m-b10">{{ __('site.latest_works') }}</h2>
                </div>
                <div class="row">
                    <div class="text-center col-lg-12">
                        <div class="clearfix site-filters filter-style1 m-b20">
                            <ul class="filters" data-toggle="buttons">
                                <li data-filter="" class="btn active"><input type="radio"><a
                                        href="#"><span>{{ __('site.all') }}</span></a></li>
                                <li data-filter="architecture_design" class="btn"><input type="radio"><a
                                        href="#"><span>{{ __('site.Architecture_design') }}</span></a></li>
                                <li data-filter="interior_design" class="btn"><input type="radio"><a
                                        href="#"><span>{{ __('site.interior_design') }}</span></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                    <ul id="masonry" class="text-center dlab-gallery-listing gallery mfp-gallery row p-l0 sp10">

                        @foreach ($works as $work)
                            <li class="card-container col-lg-3 col-md-4 col-sm-4 abstract wow {{ $work->type == 1 ? 'interior_design' : 'architecture_design' }} fadeInUp"
                                data-wow-delay="0.4s" data-wow-duration="2s">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect portbox1 style1">
                                    <img src="{{ $work->getMedia()[0]->getUrl('thumb') }}" alt="" />
                                    <div class="overlay-bx">
                                        <div class="portinner">
                                            <h3 class="port-title"><a
                                                    href="project-detail-1.html">{{ $work->name }}</a></h3>
                                            <span class="text-primary"
                                                style="letter-spacing: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? '0px;' : '5px;' }}">{{ $work->lang_type }}</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <!-- Latest Project End -->
        <!-- Our Partners -->
        <div class="bg-white section-full content-inner-2 ">
            <div class="container text-center link_style">
                <a href="#">
                    <span style="font-size: 40px">{{ __('site.request_design_link') }}</span>
                </a>
            </div>
        </div>
        <!-- Our Partners END -->
        <!-- Our Project and Gallery -->
        {{-- <div class="section-full">
            <div class="row m-lr0">
                <div class="col-xl-6 col-lg-12 p-lr0">
                    <div class="row m-a0 mfp-gallery">
                        <div class="col-lg-12 col-md-12 col-sm-12 p-lr0">
                            <div class="dlab-box dlab-gallery-box overlay-gallery-bx1 wow fadeIn" data-wow-duration="2s"
                                data-wow-delay="0.2s">
                                <div class="dlab-thum dlab-img-overlay1 primary">
                                    <a href="javascript:void(0);"> <img class="img-cover"
                                            src="{{ asset('site-assets') }}/images/portfolio/portfolio/pic1.jpg" alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="javascript:void(0);"> <i class="fa fa-play icon-bx-xs"></i> </a>
                                            <a href="images/portfolio/portfolio/pic1.jpg" class="mfp-link"
                                                title="Title Come Here"> <i class="fa fa-search icon-bx-xs"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-lr0">
                            <div class="dlab-box dlab-gallery-box overlay-gallery-bx1 wow fadeIn" data-wow-duration="2s"
                                data-wow-delay="0.2s">
                                <div class="dlab-thum dlab-img-overlay1 primary">
                                    <a href="javascript:void(0);"> <img class="img-cover"
                                            src="{{ asset('site-assets') }}/images/portfolio/portfolio/pic2.jpg" alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="javascript:void(0);"> <i class="fa fa-play icon-bx-xs"></i> </a>
                                            <a href="images/portfolio/portfolio/pic2.jpg" class="mfp-link"
                                                title="Title Come Here"> <i class="fa fa-search icon-bx-xs"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-lr0">
                            <div class="dlab-box dlab-gallery-box overlay-gallery-bx1 wow fadeIn" data-wow-duration="2s"
                                data-wow-delay="0.2s">
                                <div class="dlab-thum dlab-img-overlay1 primary">
                                    <a href="javascript:void(0);"> <img class="img-cover"
                                            src="{{ asset('site-assets') }}/images/portfolio/portfolio/pic3.jpg" alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="javascript:void(0);"> <i class="fa fa-play icon-bx-xs"></i> </a>
                                            <a href="images/portfolio/portfolio/pic3.jpg" class="mfp-link"
                                                title="Title Come Here"> <i class="fa fa-search icon-bx-xs"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 p-lr0 d-flex dis-tbl latest-project-info">
                    <div class="text-white align-self-center ">
                        <h2>Latest Project Industrial style Apartment</h2>
                        <p>Praesent pharetra orci odio, ut mattis tellus ullamcorper ornare. Suspendisse
                            ullamcorper <span class="text-white">metus in erat viverra</span>, vehicula
                            pharetra dolor accumsan. In arcu ex, rutrum finibus malesuada vel. Praesent pharetra
                            orci odio, ut mattis tellus ullamcorper ornare. Suspendisse ullamcorper <span
                                class="text-white">metus in erat viverra</span>, vehicula pharetra dolor
                            accumsan. In arcu ex, rutrum finibus malesuada vel.</p>
                        <a href="project-detail-1.html"
                            class="btn outline outline-2 button-lg white radius-xl btn-aware">View
                            Project<span></span></a>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Our Project and Gallery End -->
        <!-- Testimonials -->
        {{-- <div class="bg-white section-full content-inner-1">
            <div class="container">
                <div class="testimonial-two owl-carousel owl-none">
                    <div class="item">
                        <div class="client-says">
                            <div class="testimonial-pic radius">
                                <img src="{{ asset('site-assets') }}/images/testimonials/pic1.jpg" alt="" width="100"
                                    height="100">
                            </div>
                            <div class="testimonial-text">
                                <p>Fusce et justo iaculis, facilisis orci sed, fringilla erat. Integer tincidunt
                                    aliquet purus quis tempor. In non est a augue maximus faucibus. Vestibulum
                                    arcu eros, tincidunt id porttitor in, pharetra sit amet leo. </p>
                            </div>
                            <div class="testimonial-detail">
                                <strong class="testimonial-name">Jonathan Parker</strong>
                                <span class="testimonial-position">In habitasse platea dictumst</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-says">
                            <div class="testimonial-pic radius">
                                <img src="{{ asset('site-assets') }}/images/testimonials/pic2.jpg" alt="" width="100"
                                    height="100">
                            </div>
                            <div class="testimonial-text">
                                <p>Fusce et justo iaculis, facilisis orci sed, fringilla erat. Integer tincidunt
                                    aliquet purus quis tempor. In non est a augue maximus faucibus. Vestibulum
                                    arcu eros, tincidunt id porttitor in, pharetra sit amet leo. </p>
                            </div>
                            <div class="testimonial-detail">
                                <strong class="testimonial-name">David Matin</strong>
                                <span class="testimonial-position">Client Form IBM</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-says">
                            <div class="testimonial-pic radius">
                                <img src="{{ asset('site-assets') }}/images/testimonials/pic3.jpg" alt="" width="100"
                                    height="100">
                            </div>
                            <div class="testimonial-text">
                                <p>Fusce et justo iaculis, facilisis orci sed, fringilla erat. Integer tincidunt
                                    aliquet purus quis tempor. In non est a augue maximus faucibus. Vestibulum
                                    arcu eros, tincidunt id porttitor in, pharetra sit amet leo. </p>
                            </div>
                            <div class="testimonial-detail">
                                <strong class="testimonial-name">Jonathan Parker</strong>
                                <span class="testimonial-position">In habitasse platea dictumst</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}


        <!-- Testimonials End -->
        <!-- Blog -->
        <div class="bg-white section-full content-inner">
            <div class="container">
                <div class="text-center section-head">

                    <h2 class="head-title m-b10">{{ __('site.plans_analysis') }}</h2>
                </div>
                <div class="blog-carousel owl-carousel owl-none wow fadeIn" data-wow-delay="0.2s" data-wow-duration="2s">
                    <div class="item">
                        <div class="blog-post blog-grid style1">
                            <div class="blog-media">
                                <img src="{{ asset('site-assets') }}/images/blog/card/pic1.jpg" alt="">
                            </div>
                            <div class="dlab-post-text">
                                <div class="dlab-post-title">
                                    <h4 class="post-title font-weight-600"><a href="blog-details.html">الفيديو الاول</a>
                                    </h4>
                                </div>
                                {{-- <p>United Nations, change-makers Kony 2012 storytelling meaningful, gun control
                                    making </p>
                                <div class="dlab-post-meta">
                                    <ul>
                                        <li class="post-date"><i class="fa fa-clock-o"></i> July 3, 2016
                                            in Personal life</li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-post blog-grid style1">
                            <div class="blog-media">
                                <img src="{{ asset('site-assets') }}/images/blog/card/pic2.jpg" alt="">
                            </div>
                            <div class="dlab-post-text">
                                <div class="dlab-post-title">
                                    <h4 class="post-title font-weight-600"><a href="blog-details.html">الفيديو الثاني</a>
                                    </h4>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-post blog-grid style1">
                            <div class="blog-media">
                                <img src="{{ asset('site-assets') }}/images/blog/card/pic3.jpg" alt="">
                            </div>
                            <div class="dlab-post-text">
                                <div class="dlab-post-title">
                                    <h4 class="post-title font-weight-600"><a href="blog-details.html">الفيديو الثالث</a>
                                    </h4>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->
    </div>
    <!-- contact area END -->
@endsection
