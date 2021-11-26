@extends('layouts.dashboard_layouts.app')


@section('content')



    <ol class="breadcrumb text-muted fs-6 fw-bold">
        <li class="breadcrumb-item pe-3"><a href="{{ route('dashboard.welcome') }}" class="pe-3">الرئيسية</a></li>
        <li class="breadcrumb-item pe-3"><a href="{{ route('dashboard.works.index') }}" class="pe-3">أعمال
                الموقع</a></li>
        <li class="px-3 breadcrumb-item text-muted">{{ $work->name }}</li>
    </ol><br>



    <div class="d-flex flex-column flex-xl-row">
        <!--begin::Sidebar-->
        <div class="mb-10 flex-column flex-lg-row-auto w-100 w-xl-350px">
            <!--begin::Card-->
            <div class="mb-5 card mb-xl-8">
                <!--begin::Card body-->
                <div class="card-body pt-15">
                    <!--begin::Summary-->
                    <div class="mb-5 d-flex flex-center flex-column">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-150px symbol-2by3 mb-7">
                            <img src="{{ $work->getFirstMediaUrl() }}" alt="image" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Name-->
                        <a href="#" class="mb-1 text-gray-800 fs-3 text-hover-primary fw-bolder">{{ $work->name }}</a>
                        <!--end::Name-->
                        <!--begin::Position-->
                        {{-- <div class="mb-6 fs-5 fw-bold text-muted">Software Enginer</div> --}}
                        <!--end::Position-->
                        <!--begin::Info-->
                        <div class="flex-wrap d-flex flex-center">
                            <!--begin::Stats-->
                            <div class="px-3 py-3 mb-3 border border-gray-300 border-dashed rounded">
                                <div class="text-gray-700 fs-4 fw-bolder">
                                    <span class="w-75px">6,900</span>
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                    <span class="svg-icon svg-icon-3 svg-icon-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                                                transform="rotate(90 13 6)" fill="black" />
                                            <path
                                                d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <div class="fw-bold text-muted">عدد الزوار</div>
                            </div>
                            <!--end::Stats-->

                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Summary-->
                    <!--begin::Details toggle-->
                    <div class="py-3 d-flex flex-stack fs-4">
                        <div class="fw-bolder rotate collapsible" data-bs-toggle="collapse" href="#kt_customer_view_details"
                            role="button" aria-expanded="false" aria-controls="kt_customer_view_details">التفاصيل
                            <span class="rotate-180 ms-2">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                        </div>

                    </div>
                    <!--end::Details toggle-->
                    <div class="my-3 separator separator-dashed"></div>
                    <!--begin::Details content-->
                    <div id="kt_customer_view_details" class="collapse show">
                        <div class="py-5 fs-6">

                            <!--begin::Details item-->
                            <div class="mt-5 fw-bolder">اسم المهندس/ة</div>
                            <div class="text-gray-600">{{ $work->arc_name }}</div>
                            <!--begin::Details item-->
                            <!--begin::Details item-->
                            <div class="mt-5 fw-bolder">اسم العميل</div>
                            <div class="text-gray-600">
                                <a href="#" class="text-gray-600 text-hover-primary">{{ $work->client_name }}</a>
                            </div>
                            <!--begin::Details item-->
                            <!--begin::Details item-->
                            <div class="mt-5 fw-bolder">نوع العمل</div>
                            <div class="text-gray-600">
                                <span
                                    class="text-{{ $work->type == 1 ? 'info' : 'warning' }}">{{ $work->type_name }}</span>
                            </div>
                            <!--begin::Details item-->
                            <!--begin::Details item-->
                            <div class="mt-5 fw-bolder">موقع العمل</div>
                            <div class="text-gray-600">{{ $work->address }}</div>
                            <!--begin::Details item-->
                            <!--begin::Details item-->
                            <div class="mt-5 fw-bolder">مساحة العمل</div>
                            <div class="text-gray-600">{{ $work->size }} متر مربع</div>
                            <!--begin::Details item-->
                            <!--begin::Details item-->
                            <div class="mt-5 fw-bolder">حالة العمل</div>
                            <div class="text-gray-600">
                                <span
                                    class="text-{{ $work->status == 1 ? 'success' : 'danger' }}">{{ $work->status_name }}</span>
                            </div>
                            <!--begin::Details item-->
                        </div>
                    </div>
                    <!--end::Details content-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->

        </div>
        <!--end::Sidebar-->
        <!--begin::Content-->
        <div class="flex-lg-row-fluid ms-lg-15">
            <!--begin:::Tab content-->
            <div class="tab-content" id="myTabContent">

                <!--begin:::Tab pane-->
                <div class="tab-pane active" id="kt_customer_view_overview_statements" role="tabpanel">
                    <!--begin::Earnings-->
                    <div class="mb-6 card mb-xl-9">
                        <!--begin::Header-->
                        <div class="border-0 card-header">
                            <div class="card-title">
                                <h2>الوصف</h2>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="py-0 card-body">
                            <div class="mb-4 text-gray-500 fs-5 fw-bold">{{ $work->description }}</div>

                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Earnings-->
                    <!--begin::Statements-->
                    <div class="mb-6 card mb-xl-9">
                        <!--begin::Header-->
                        <div class="card-header">
                            <!--begin::Title-->
                            <div class="card-title">
                                <h2>ملفات العمل</h2>
                            </div>
                            <!--end::Title-->

                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="pb-5 card-body">
                            <!--begin::Tab Content-->


                            <div id="kt_customer_view_statement_tab_content" class="tab-content">

                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                    @foreach ($work->getMedia() as $media)

                                        <div class="col">
                                            <div class="shadow-sm card">


                                                <!--begin::Overlay-->
                                                <a class="d-block overlay" data-fslightbox="lightbox-basic"
                                                    href="{{ $media->getUrl() }}">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                        style="background-image:url('{{ $media->getUrl() }}')">
                                                    </div>
                                                    <!--end::Image-->

                                                    <!--begin::Action-->
                                                    <div class="bg-opacity-25 shadow overlay-layer card-rounded bg-dark">
                                                        <i class="text-white bi bi-eye-fill fs-3x"></i>
                                                    </div>
                                                    <!--end::Action-->

                                                </a>

                                                <div class="card-body">

                                                    <div class="text-center">

                                                        @if ($work->getMedia()->count() > 1)
                                                            <div class="btn-group">
                                                                <form method="post"
                                                                    action="{{ route('dashboard.media_delete', $media) }}"
                                                                    style="display: inline-block;">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="submit"
                                                                        class="btn btn-danger btn-sm delete"><i
                                                                            class="fa fa-trash"></i>حذف</button>
                                                                </form><!-- end of form -->


                                                            </div>
                                                        @else
                                                            <a href="#" class="btn btn-danger btn-sm disabled "><i
                                                                    class="fa fa-trash"></i>حذف</a>
                                                        @endif

                                                    </div>
                                                </div>
                                                <!--end::Overlay-->


                                            </div>
                                        </div>


                                    @endforeach

                                </div>
                            </div>



                            <!--end::Tab Content-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Statements-->
                </div>
                <!--end:::Tab pane-->
            </div>
            <!--end:::Tab content-->
        </div>
        <!--end::Content-->
    </div>

@endsection

@push('js')

    {{-- Begin page level js --}}
    <script src="{{ asset('admin-dashboard') }}/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
    {{-- End page level js --}}



@endpush
