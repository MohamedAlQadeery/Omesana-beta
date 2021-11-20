@extends('layouts.dashboard_layouts.app')


@section('content')



    <ol class="breadcrumb text-muted fs-6 fw-bold">
        <li class="breadcrumb-item pe-3"><a href="#" class="pe-3">الرئيسية</a></li>
        <li class="breadcrumb-item pe-3"><a href="{{ route('dashboard.works.index') }}" class="pe-3">أعمال
                الموقع</a></li>
        <li class="px-3 breadcrumb-item text-muted">{{ $work->name }}</li>
    </ol><br>



    <div class="d-flex flex-column flex-xl-row">
        <!--begin::Sidebar-->
        <div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
            <!--begin::Card-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Card body-->
                <div class="card-body pt-15">
                    <!--begin::Summary-->
                    <div class="d-flex flex-center flex-column mb-5">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-150px symbol-2by3 mb-7">
                            <img src="{{ $work->getFirstMediaUrl() }}" alt="image" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Name-->
                        <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-1">{{ $work->name }}</a>
                        <!--end::Name-->
                        <!--begin::Position-->
                        {{-- <div class="fs-5 fw-bold text-muted mb-6">Software Enginer</div> --}}
                        <!--end::Position-->
                        <!--begin::Info-->
                        <div class="d-flex flex-wrap flex-center">
                            <!--begin::Stats-->
                            <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                                <div class="fs-4 fw-bolder text-gray-700">
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
                    <div class="d-flex flex-stack fs-4 py-3">
                        <div class="fw-bolder rotate collapsible" data-bs-toggle="collapse" href="#kt_customer_view_details"
                            role="button" aria-expanded="false" aria-controls="kt_customer_view_details">التفاصيل
                            <span class="ms-2 rotate-180">
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
                    <div class="separator separator-dashed my-3"></div>
                    <!--begin::Details content-->
                    <div id="kt_customer_view_details" class="collapse show">
                        <div class="py-5 fs-6">

                            <!--begin::Details item-->
                            <div class="fw-bolder mt-5">اسم المهندس/ة</div>
                            <div class="text-gray-600">{{ $work->arc_name }}</div>
                            <!--begin::Details item-->
                            <!--begin::Details item-->
                            <div class="fw-bolder mt-5">اسم العميل</div>
                            <div class="text-gray-600">
                                <a href="#" class="text-gray-600 text-hover-primary">{{ $work->client_name }}</a>
                            </div>
                            <!--begin::Details item-->
                            <!--begin::Details item-->
                            <div class="fw-bolder mt-5">نوع العمل</div>
                            <div class="text-gray-600">
                                <span
                                    class="text-{{ $work->type == 1 ? 'info' : 'warning' }}">{{ $work->type_name }}</span>
                            </div>
                            <!--begin::Details item-->
                            <!--begin::Details item-->
                            <div class="fw-bolder mt-5">موقع العمل</div>
                            <div class="text-gray-600">{{ $work->address }}</div>
                            <!--begin::Details item-->
                            <!--begin::Details item-->
                            <div class="fw-bolder mt-5">مساحة العمل</div>
                            <div class="text-gray-600">{{ $work->size }} متر مربع</div>
                            <!--begin::Details item-->
                            <!--begin::Details item-->
                            <div class="fw-bolder mt-5">حالة العمل</div>
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
                    <div class="card mb-6 mb-xl-9">
                        <!--begin::Header-->
                        <div class="card-header border-0">
                            <div class="card-title">
                                <h2>الوصف</h2>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-0">
                            <div class="fs-5 fw-bold text-gray-500 mb-4">{{ $work->description }}</div>

                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Earnings-->
                    <!--begin::Statements-->
                    <div class="card mb-6 mb-xl-9">
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
                        <div class="card-body pb-5">
                            <!--begin::Tab Content-->


                            <div id="kt_customer_view_statement_tab_content" class="tab-content">

                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                    @foreach ($work->getMedia() as $media)

                                        <div class="col">
                                            <div class="card shadow-sm">


                                                <!--begin::Overlay-->
                                                <a class="d-block overlay" data-fslightbox="lightbox-basic"
                                                    href="{{ $media->getUrl('thumb') }}">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                        style="background-image:url('{{ $media->getUrl() }}')">
                                                    </div>
                                                    <!--end::Image-->

                                                    <!--begin::Action-->
                                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25 shadow">
                                                        <i class="bi bi-eye-fill text-white fs-3x"></i>
                                                    </div>
                                                    <!--end::Action-->

                                                </a>

                                                <div class="card-body">

                                                    <div class="text-center">
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


    <script>
        $(document).ready(function() {

            $(document).on('click', '.delete', function(e) {

                e.preventDefault();
                var that = $(this);
                Swal.fire({
                    html: "هل أنت متأكد من حذف الصورة ؟",
                    icon: "error",
                    buttonsStyling: false,
                    showCancelButton: true,
                    confirmButtonText: "نعم,متأكد",
                    cancelButtonText: 'لا',
                    customClass: {
                        confirmButton: "btn btn-primary",
                        cancelButton: 'btn btn-danger'
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        that.closest('form').submit()

                    }
                });

            })



        });
    </script>
@endpush
