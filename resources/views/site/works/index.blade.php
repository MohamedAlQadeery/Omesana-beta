@extends('layouts.site_layouts.app')

@section('content')



    <div class="dlab-bnr-inr dlab-bnr-inr-lg overlay-black-middle bg-pt"
        style="background-image:url({{ asset('site-assets') }}/images/banner/bnr3.jpg);">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">{{ __('site.work_list') }}</h1>
                <p class="work_list_p">{{ __('site.work_list_desc') }}!</p>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="{{ route('site.landing') }}"><i class="fa fa-home"></i>
                                {{ __('site.home') }}</a>
                        </li>

                        <li>{{ __('site.work_list') }}</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <div class="content-block">
        <!-- blog grid -->
        <div class="section-full content-inner">
            <div class="container">

                <div class="row">
                    <div class="text-center col-lg-12">
                        <div class="clearfix site-filters filter-style1 m-b20">
                            <ul>
                                <li class="btn {{ request()->type == '' ? 'active' : '' }}"><a
                                        href="{{ route('site.work.index') }}"><span>{{ __('site.all') }}</span></a>
                                </li>
                                <li class="btn {{ request()->type == 2 ? 'active' : '' }}"><a
                                        href="{{ route('site.work.index', ['type' => 2]) }}"><span>{{ __('site.Architecture_design') }}</span></a>
                                </li>
                                <li class="btn {{ request()->type == 1 ? 'active' : '' }} "><a
                                        href="{{ route('site.work.index', ['type' => 1]) }}"><span>{{ __('site.interior_design') }}</span></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="dlab-blog-grid-3 row" id="masonry">
                    @foreach ($works as $work)
                        <div class="post card-container col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInUp"
                            data-wow-duration="2s" data-wow-delay="0.2s">

                            <div class="blog-post blog-grid blog-rounded radius-sm shadow">
                                <div class="dlab-post-media dlab-img-effect">
                                    <a href="{{ route('site.work.show', $work->slug) }}"><img
                                            src="{{ $work->getMedia()[0]->getUrl() }}" alt=""></a>
                                </div>
                                <div class="dlab-info p-lr50 p-tb40">
                                    <div class="dlab-post-meta">
                                        <ul class="d-flex align-items-center">
                                            <li class="post-date"> {{ $work->created_at->year }} </li>

                                            <li class="post-comment"><i class="ti ti-eye"
                                                    style="margin-top: 3px;"></i> <a
                                                    href="javascript:void(0);">{{ $work->view_count }}</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dlab-post-title">
                                        <h4 class="post-title"><a
                                                href="{{ route('site.work.show', $work->slug) }}">{{ $work->name }}</a>
                                        </h4>
                                    </div>
                                    <div class="dlab-post-text">
                                        <p>{{ $work->small_description }}</p>
                                    </div>
                                    <div class="dlab-post-name">
                                        {{ __('site.type') }} <a
                                            href="{{ route('site.work.index', ['type' => $work->type]) }}"
                                            class="site-button-link">{{ $work->lang_type }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <!-- Pagination -->

                {{ $works->appends(request()->query())->links('pagination::site_pagination') }}

                <!-- Pagination END -->
            </div>
        </div>
        <!-- blog grid END -->
    </div>


@endsection
