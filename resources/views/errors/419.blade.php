@extends('layouts.site_layouts.app')


@section('content')


    <!-- inner page banner -->
    <div class="dlab-bnr-inr dlab-bnr-inr-lg overlay-black-middle bg-pt"
        style="background-image:url({{ asset('site-assets') }}/images/banner/bnr2.jpg);">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">{{ __('site.error') }}</h1>
                <p>{{ __('site.error_page') }}</p>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="{{ route('site.landing') }}"><i class="fa fa-home"></i>
                                {{ __('site.home') }}</a>
                        </li>

                        <li>{{ __('site.error_page') }}</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- Content -->


    <!-- inner page banner END -->
    <div class="content-block">
        <div class="section-full content-inner-2">
            <div class="container">
                <div class="error-page text-center">
                    <div class="dz_error">{{ __('site.error') }}</div>
                    <h2 class="error-head">
                        {{ __('site.error_message_403') }}
                    </h2><br><br>

                    <a href="{{ route('site.landing') }}" class="btn radius-xl btn-lg">{{ __('site.back_to_home') }}</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Content END-->
@endsection
