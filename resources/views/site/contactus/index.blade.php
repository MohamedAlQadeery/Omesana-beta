@extends('layouts.site_layouts.app')

@push('css')
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />

    <style>
        .marker {
            background-image: url({{ asset('images/mapbox-icon.png') }});
            background-size: cover;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
        }

        .mapboxgl-popup {
            max-width: 100px;
        }

        .mapboxgl-popup-content {
            text-align: center;
            font-family: Cairo, 'Open Sans';
        }

        #map h3 {
            font-family: Cairo, 'Open Sans';
            color: black;
            font-size: 14px
        }

        #map p {
            font-family: Cairo, 'Open Sans';
            color: black;
            font-size: 10px
        }

        #contactus_form input[type="text"] {
            color: white;
        }

        #contactus_form input[type="email"] {
            color: white;
        }


        #contactus_form textarea {
            color: white;
        }

        input[type="radio"]:checked+label::before {
            border-color: #d19d47;
            border-width: 5px;
        }

    </style>
@endpush

@section('content')


    <!-- inner page banner -->
    <div class="dlab-bnr-inr dlab-bnr-inr-lg overlay-black-middle bg-pt"
        style="background-image:url({{ asset('site-assets') }}/images/banner/bnr2.jpg);">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">{{ __('site.contact_us_header') }}</h1>
                <p>{{ __('site.contact_us_body') }}</p>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="{{ route('site.landing') }}"><i class="fa fa-home"></i>
                                {{ __('site.home') }}</a>
                        </li>

                        <li>{{ __('site.contact_us_header') }}</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <div class="content-block">


        <!-- About Me -->
        <div class="section-full content-inner-1">
            <div class="container-fluid">
                <div class="section-head text-center contact-title">
                    <h2 class="head-title">{{ __('site.contact_us_header') }}</h2>
                    <p>{{ __('site.contact_us_body2') }}</p>
                </div>
                <div class="banner-map">
                    <div id='map' style='width: 100%; height: 600px;'></div>
                </div>
            </div>
        </div>
        <div class="section-full content-inner-2 contact-box">
            <div class="container">
                <div class="row align-items-center m-b50">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="icon-bx-wraper m-b30 left">
                            <div class="icon-md m-b20 m-t5">
                                <a href="javascript:void(0)" class="icon-cell text-primary">
                                    <i class="ti-headphone-alt"></i>
                                </a>
                            </div>
                            <div class="icon-content">
                                <h4 class="dlab-tilte m-b5">{{ __('site.phone') }}</h4>
                                <p>{{ setting('mobile_number') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="icon-bx-wraper m-b30 left">
                            <div class="icon-md m-b20 m-t5">
                                <a href="javascript:void(0)" class="icon-cell text-primary">
                                    <i class="ti-location-pin"></i>
                                </a>
                            </div>
                            <div class="icon-content">
                                <h4 class="dlab-tilte m-b5">{{ __('site.address') }}</h4>
                                <p>{{ setting('address') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="icon-bx-wraper m-b30 left">
                            <div class="icon-md m-b20 m-t5">
                                <a href="javascript:void(0)" class="icon-cell text-primary">
                                    <i class="ti-email"></i>
                                </a>
                            </div>
                            <div class="icon-content">
                                <h4 class="dlab-tilte m-b5">{{ __('site.our_email') }}</h4>
                                <p>{{ setting('email') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-head text-center">
                    <h2 class="m-b5">{{ __('site.contact_us_body') }}</h2>

                </div>
                <div class="dzFormMsg">
                    @include('dashboard.partials._sessions')
                </div>

                <form id="contactus_form" method="post" action="{{ route('site.contactus.store') }}">
                    @csrf
                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 text-center" style="margin-bottom: 2%">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="inlineRadio1" value="1" />
                                <label class="form-check-label" for="inlineRadio1">{{ __('site.inquiry') }}</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="2" />
                                <label class="form-check-label" for="inlineRadio2">{{ __('site.suggestion') }}</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="inlineRadio3" value="3" />
                                <label class="form-check-label" for="inlineRadio3">{{ __('site.other') }}</label>
                            </div>

                            @error('type') <span
                                class="text-danger"><strong>{{ $message }}</strong></span>@enderror
                        </div>


                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <input name="name" type="text" required class="form-control"
                                    placeholder="{{ __('site.name') }}">
                                @error('name') <span
                                    class="text-danger"><strong>{{ $message }}</strong></span>@enderror
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" required
                                    placeholder="{{ __('site.our_email') }}">
                                @error('email') <span
                                    class="text-danger"><strong>{{ $message }}</strong></span>@enderror
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <input name="phone" type="text" required class="form-control"
                                    placeholder="{{ __('site.phone') }}">
                                @error('phone') <span
                                    class="text-danger"><strong>{{ $message }}</strong></span>@enderror
                            </div>

                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <textarea name="body" rows="4" class="form-control" required
                                    placeholder="{{ __('site.message_body') }}"></textarea>
                                @error('body') <span
                                    class="text-danger"><strong>{{ $message }}</strong></span>@enderror
                            </div>

                        </div>



                        <div class="col-md-12 col-sm-12 text-center">
                            <button name="submit" type="submit" value="Submit"
                                class="btn radius-xl btn-lg outline outline-2 black btn-aware"
                                style="background-color: #d19d47">{{ __('site.send') }}<span></span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- About Me End -->
    </div>
    <!-- contact area END -->

@endsection



@push('js')



    <!-- Mapbox scripts  -->

    <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-language/v1.0.0/mapbox-gl-language.js'></script>



    <script>
        mapboxgl.accessToken = "{{ config('services.mapbox.key') }}";


        const geojson = {
            type: 'FeatureCollection',
            features: [{
                    type: 'Feature',
                    geometry: {
                        type: 'Point',
                        coordinates: [54.37739446971429, 24.45402164086471]
                    },
                    properties: {
                        title: "{{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'أوميسانا ديزاين' : 'Omesana Design' }}",
                        description: "{{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'موقع شركة أوميسانا ابوظبي' : 'Omesana design company location abu dabi' }}"
                    }
                },

            ]
        };



        const map = new mapboxgl.Map({
            container: 'map', // container ID
            style: 'mapbox://styles/mapbox/streets-v11', // style URL
            center: [54.37739446971429, 24.45402164086471], // starting position [lng, lat]
            zoom: 12 // starting zoom
        });

        mapboxgl.setRTLTextPlugin(
            'https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-rtl-text/v0.2.3/mapbox-gl-rtl-text.js');
        map.addControl(new MapboxLanguage({
            defaultLanguage: '{{ LaravelLocalization::getCurrentLocale() }}'
        }));

        map.addControl(new mapboxgl.FullscreenControl());
        map.addControl(new mapboxgl.NavigationControl());
        // add markers to map
        for (const feature of geojson.features) {
            // create a HTML element for each feature
            const el = document.createElement('div');
            el.className = 'marker';

            // make a marker for each feature and add it to the map
            new mapboxgl.Marker(el)
                .setLngLat(feature.geometry.coordinates)
                .setPopup(
                    new mapboxgl.Popup({
                        offset: 25
                    }) // add popups
                    .setHTML(
                        `<h3>${feature.properties.title}</h3><p>${feature.properties.description}</p>`
                    )
                )
                .addTo(map);
        }
    </script>

    <!-- END Mapbox scripts  -->

    <!-- Google API For Recaptcha  -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- END Google API For Recaptcha  -->

@endpush
