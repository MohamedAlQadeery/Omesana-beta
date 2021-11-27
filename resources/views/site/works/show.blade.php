@extends('layouts.site_layouts.app')

@section('content')

    <!-- Content -->

    <!-- inner page banner -->
    <div class="dlab-bnr-inr dlab-bnr-inr-lg overlay-black-middle bg-pt"
        style="background-image:url({{ $work->getMedia()[0]->getUrl('bnr') }})">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">{{ $work->name }}</h1>
                <p>{{ $work->small_description }}</p>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="{{ route('site.landing') }}"><i class="fa fa-home"></i>{{ __('site.home') }}</a>
                        </li>
                        <li><a href="{{ route('site.work.index') }}">{{ __('site.work_list') }}</a></li>
                        <li>{{ $work->name }}</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- Info Img -->
    <div class="section-full content-inner-1 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
        <div class="container-fluid">
            <div class="project-carousel owl-btn-center-lr owl-carousel mfp-gallery">
                @foreach ($work->getMedia() as $media)
                    <div class="item">
                        <div class="dlab-box portfolio-bx style2 project-media">
                            <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
                                <a href="javascript:void(0);"> <img src="{{ $media->getUrl() }}" alt="">
                                </a>
                                <div class="overlay-bx">
                                    <a href="{{ $media->getUrl() }}" class="mfp-link" title="Title Come Here"><i
                                            class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Info End -->
    <!-- Project Info -->
    <div class="section-full content-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-b30 max-w800">
                    <div class="section-head style1 mb-0">
                        <span class="pre-title">2021</span>
                        <h2 class="m-b0">
                            {{ $work->name }}
                        </h2>
                    </div>
                </div>
            </div>
            <p>{{ $work->description }}</p>
            <div class="row m-b30 widget widget_getintuch widget_getintuch-pro-details pro-details-col-5 m-lr0">
                <div class="col p-lr0">
                    <div class="pro-details">
                        <i class="ti ti-user"></i>
                        <strong>{{ __('site.client_name') }}</strong> {{ $work->client_name }}
                    </div>
                </div>
                <div class="col p-lr0">
                    <div class="pro-details">
                        <i class="ti ti-user"></i>
                        <strong>{{ __('site.arc_name') }}</strong>{{ $work->arc_name }}
                    </div>
                </div>
                <div class="col p-lr0">
                    <div class="pro-details">
                        <i class="ti ti-location-pin"></i>
                        <strong>{{ __('site.address') }}</strong>{{ $work->address }}
                    </div>
                </div>
                <div class="col p-lr0">
                    <div class="pro-details">
                        <i class="ti ti-ruler-alt-2"></i>
                        <strong>{{ __('site.size') }}</strong>{{ $work->size }}m<sup>2</sup>
                    </div>
                </div>
                <div class="col p-lr0">
                    <div class="pro-details">
                        <i class="ti ti-home"></i>
                        <strong>{{ __('site.type') }}</strong>{{ $work->lang_type }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Info End -->

    <!-- Content END-->
@endsection
