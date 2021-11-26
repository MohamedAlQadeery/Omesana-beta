@extends('layouts.dashboard_layouts.app')

@section('content')





    <!--begin::Content-->
    <div class="flex-lg-row-fluid ">
        <!--begin:::Tabs-->
        <ul class="mb-8 border-0 nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x fs-4 fw-bold">
            <!--begin:::Tab item-->
            <li class="nav-item">
                <a class="pb-4 nav-link text-active-primary active" data-bs-toggle="tab"
                    href="#kt_customer_view_overview_tab">إعدادات عامة</a>
            </li>
            <!--end:::Tab item-->
            <!--begin:::Tab item-->
            <li class="nav-item">
                <a class="pb-4 nav-link text-active-primary" data-bs-toggle="tab"
                    href="#kt_customer_view_overview_events_and_logs_tab">اعدادات مؤسسين الشركة</a>
            </li>
            <!--end:::Tab item-->
            <!--begin:::Tab item-->
            <li class="nav-item">
                <a class="pb-4 nav-link text-active-primary" data-kt-countup-tabs="true" data-bs-toggle="tab"
                    href="#kt_customer_view_overview_statements">معلومات التواصل</a>
            </li>
            <!--end:::Tab item-->

        </ul>
        <!--end:::Tabs-->
        <!--begin:::Tab content-->
        <div class="tab-content" id="myTabContent">
            <!--begin:::Tab pane-->
            <div class="tab-pane fade show active" id="kt_customer_view_overview_tab" role="tabpanel">
                <!--begin::Card-->
                <div class="pt-4 mb-6 card mb-xl-9">
                    <!--begin::Card header-->
                    <div class="border-0 card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>إعدادات عامة</h2>
                        </div>
                        <!--end::Card title-->

                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->

                    <form action="{{ route('dashboard.settings.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Input group-->



                            <div class="row g-9 mb-7">
                                <!--begin::Col-->

                                <div class="col-md-12 fv-row">
                                    <!--begin::Label-->
                                    <label class="mb-2 required fs-6 fw-bold"><strong>شعار الموقع</strong></label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" type="file" name="logo" />
                                    <!--end::Input-->
                                </div>

                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <!--begin::Label-->
                                    <label class="mb-2 required fs-6 fw-bold"><strong>عنوان الموقع (باللغة
                                            العربية)</strong></label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" type="text"
                                        value="{{ setting('title_ar') }}" name="title_ar" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <!--begin::Label-->
                                    <label class="mb-2 required fs-6 fw-bold"><strong>عنوان الموقع (باللغة
                                            الانجليزية)</strong></label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" type="text"
                                        value="{{ setting('title_en') }}" name="title_en" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->


                                <div class="col-md-12 fv-row">

                                    <label class="mb-2 required fs-6 fw-bold"><strong>وصف فريق العمل (باللغة
                                            العربية)</strong></label>

                                    <textarea class="form-control form-control-solid" data-kt-autosize="true"
                                        name="team_desc_ar">{{ setting('team_desc_ar') }}</textarea>

                                </div>


                                <div class="col-md-12 fv-row">

                                    <label class="mb-2 required fs-6 fw-bold"><strong>وصف فريق العمل (باللغة
                                            الانجليزية)</strong></label>

                                    <textarea class="form-control form-control-solid" data-kt-autosize="true"
                                        name="team_desc_en">{{ setting('team_desc_en') }}</textarea>

                                </div>

                                <div class="col-md-12 fv-row">

                                    <label class="mb-2 required fs-6 fw-bold"><strong>وصف خدمة التصميم الداخلي (باللغة
                                            العربية)</strong></label>

                                    <textarea class="form-control form-control-solid" data-kt-autosize="true"
                                        name="int_design_ar">{{ setting('int_design_ar') }}</textarea>

                                </div>


                                <div class="col-md-12 fv-row">

                                    <label class="mb-2 required fs-6 fw-bold"><strong>وصف خدمة التصميم الداخلي (باللغة
                                            الانجليزية)</strong></label>

                                    <textarea class="form-control form-control-solid" data-kt-autosize="true"
                                        name="int_design_en">{{ setting('int_design_en') }}</textarea>

                                </div>

                                <div class="col-md-12 fv-row">

                                    <label class="mb-2 required fs-6 fw-bold"><strong>وصف خدمة التصميم المعماري (باللغة
                                            العربية)</strong></label>

                                    <textarea class="form-control form-control-solid" data-kt-autosize="true"
                                        name="arc_design_ar">{{ setting('arc_design_ar') }}</textarea>

                                </div>


                                <div class="col-md-12 fv-row">

                                    <label class="mb-2 required fs-6 fw-bold"><strong>وصف خدمة التصميم المعماري (باللغة
                                            الانجليزية)</strong></label>

                                    <textarea class="form-control form-control-solid" data-kt-autosize="true"
                                        name="arc_design_en">{{ setting('arc_design_en') }}</textarea>

                                </div>


                            </div>


                        </div>
                        <!--end::Card body-->
                        <!--begin::Actions-->
                        <div class="py-6 card-footer d-flex justify-content-end px-9">
                            <button type="reset" id="cancel-opeartion"
                                class="btn btn-light btn-active-light-primary me-2">الغاء</button>
                            <button type="submit" class="btn btn-primary">
                                تحديث</button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Card body-->
                </div>

            </div>
            <!--end:::Tab pane-->
            <!--begin:::Tab pane-->
            <div class="tab-pane fade" id="kt_customer_view_overview_events_and_logs_tab" role="tabpanel">
                <div class="pt-4 mb-6 card mb-xl-9">
                    <!--begin::Card header-->
                    <div class="border-0 card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>إعدادات قسم مؤسسين الشركة</h2>
                        </div>
                        <!--end::Card title-->

                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->

                    <!--begin::Card body-->
                    <form action="{{ route('dashboard.settings.store') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <!--begin::Input group-->



                            <div class="row g-9 mb-7">
                                <!--begin::Col-->

                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <!--begin::Label-->
                                    <label class="mb-2 required fs-6 fw-bold"><strong>عدد سنين الخبرة</strong></label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" type="text"
                                        value="{{ setting('exp_years') }}" name="exp_years" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->

                                <div class="col-md-12 fv-row">

                                    <label class="mb-2 required fs-6 fw-bold"><strong>كلمة مؤسسة الشركة (باللغة
                                            العربية)</strong></label>

                                    <textarea class="form-control form-control-solid" data-kt-autosize="true"
                                        name="main_arc_words_ar">{{ setting('main_arc_words_ar') }}</textarea>

                                </div>


                                <div class="col-md-12 fv-row">

                                    <label class="mb-2 required fs-6 fw-bold"><strong>كلمة مؤسسة الشركة (باللغة
                                            الانجليزية)</strong></label>

                                    <textarea class="form-control form-control-solid" data-kt-autosize="true"
                                        name="main_arc_words_en">{{ setting('main_arc_words_en') }}</textarea>

                                </div>



                                <div class="col-md-12 fv-row">

                                    <label class="mb-2 required fs-6 fw-bold"><strong>كلمة مؤسس الشركة (باللغة
                                            العربية)</strong></label>

                                    <textarea class="form-control form-control-solid" data-kt-autosize="true"
                                        name="main_ceo_words_ar">{{ setting('main_ceo_words_ar') }}</textarea>

                                </div>

                                <div class="col-md-12 fv-row">

                                    <label class="mb-2 required fs-6 fw-bold"><strong>كلمة مؤسس الشركة (باللغة
                                            الانجليزية)</strong></label>

                                    <textarea class="form-control form-control-solid" data-kt-autosize="true"
                                        name="main_ceo_words_en">{{ setting('main_ceo_words_en') }}</textarea>

                                </div>





                            </div>


                        </div>


                        <!--end::Card body-->
                        <!--begin::Actions-->
                        <div class="py-6 card-footer d-flex justify-content-end px-9">
                            <button type="reset" id="cancel-opeartion"
                                class="btn btn-light btn-active-light-primary me-2">الغاء</button>
                            <button type="submit" class="btn btn-primary">
                                تحديث</button>
                        </div>

                    </form>
                    <!--end::Actions-->

                    <!--end::Card body-->
                </div>

            </div>
            <!--end:::Tab pane-->
            <!--begin:::Tab pane-->
            <div class="tab-pane fade" id="kt_customer_view_overview_statements" role="tabpanel">
                <div class="pt-4 mb-6 card mb-xl-9">
                    <!--begin::Card header-->
                    <div class="border-0 card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>معلومات التواصل</h2>
                        </div>
                        <!--end::Card title-->

                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <form action="{{ route('dashboard.settings.store') }}" method="post">
                        @csrf
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Input group-->



                            <div class="row g-9 mb-7">
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <!--begin::Label-->
                                    <label class="mb-2 required fs-6 fw-bold"><strong>البريد الالكتروني</strong></label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" type="text"
                                        value="{{ setting('email') }}" name="email" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->



                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <!--begin::Label-->
                                    <label class="mb-2 required fs-6 fw-bold"><strong>رقم الهاتف</strong></label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" type="text"
                                        value="{{ setting('mobile_number') }}" name="mobile_number" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <!--begin::Label-->
                                    <label class="mb-2 required fs-6 fw-bold"><strong>صفحة الفيسبوك</strong></label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" type="text"
                                        value="{{ setting('facebook') }}" name="facebook" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <!--begin::Label-->
                                    <label class="mb-2 required fs-6 fw-bold"><strong>صفحة الانستجرام</strong></label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" type="text"
                                        value="{{ setting('instagram') }}" name="instagram" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->


                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <!--begin::Label-->
                                    <label class="mb-2 required fs-6 fw-bold"><strong>صفحة التويتر</strong></label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" type="text"
                                        value="{{ setting('twitter') }}" name="twitter" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->


                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <!--begin::Label-->
                                    <label class="mb-2 required fs-6 fw-bold"><strong>موقع الشركة</strong></label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" type="text"
                                        value="{{ setting('address') }}" name="address" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->







                            </div>


                        </div>
                        <!--end::Card body-->
                        <!--begin::Actions-->
                        <div class="py-6 card-footer d-flex justify-content-end px-9">
                            <button type="reset" id="cancel-opeartion"
                                class="btn btn-light btn-active-light-primary me-2">الغاء</button>
                            <button type="submit" class="btn btn-primary">
                                تحديث</button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Card body-->
                </div>

            </div>
            <!--end:::Tab pane-->
        </div>
        <!--end:::Tab content-->
    </div>
    <!--end::Content-->



@endsection

@push('js')
    <script>
        //for cancel button
        const button = document.getElementById('cancel-opeartion');

        button.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                html: "هل أنت متأكد من الغاء العملية ؟",
                icon: "info",
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
                    window.location.href = "{{ route('dashboard.welcome') }}";
                }
            });
        });
    </script>
@endpush
