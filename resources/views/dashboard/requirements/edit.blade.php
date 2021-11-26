@extends('layouts.dashboard_layouts.app')

@section('content')

    <ol class="breadcrumb text-muted fs-6 fw-bold">
        <li class="breadcrumb-item pe-3"><a href="{{ route('dashboard.welcome') }}" class="pe-3">الرئيسية</a></li>
        <li class="breadcrumb-item pe-3"><a href="{{ route('dashboard.requirements.index') }}"
                class="pe-3">المتطلبات</a>
        </li>

        <li class="px-3 breadcrumb-item text-muted">تعديل متطلب</li>
    </ol><br>

    @include('dashboard.partials._errors')

    <div class="mb-5 card mb-xl-10">
        <div class="card-header">
            <h3 class="card-title">اضافة متطلب</h3>

        </div>
        <form method="post" action="{{ route('dashboard.requirements.update', $requirement) }}">
            @csrf
            @method('PATCH')
            <div class="card-body">
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row g-9 mb-7">
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="mb-2 fs-6 fw-bold">
                            <span class="required"><strong>نوع المتطلب</strong></span>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                title="اختار نوع المتطلب "></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select name="type" data-placeholder="اختر نوع المتطلب .."
                            class="form-select form-select-solid fw-bolder">
                            <option value="1" {{ old('type', $requirement->type) == 1 ? 'selected' : '' }}>تصميم داخلي
                            </option>
                            <option value="2" {{ old('type', $requirement->type) == 2 ? 'selected' : '' }}>تصميم معماري
                            </option>

                        </select>
                        <!--end::Input-->
                    </div>
                    <!--end::Col-->

                    <div class="col-md-6 fv-row">
                        <label class="mb-2 fs-6 fw-bold">
                            <span class="required"><strong>حالة المتطلب</strong></span>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                title="اختار حالة المتطلب "></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select name="status" data-placeholder="اختر حالة المتطلب .."
                            class="form-select form-select-solid fw-bolder">
                            <option value="1" {{ old('type', $requirement->status) == 1 ? 'selected' : '' }}>نشط
                            </option>
                            <option value="2" {{ old('type', $requirement->status) == 2 ? 'selected' : '' }}>غير نشط
                            </option>

                        </select>
                        <!--end::Input-->
                    </div>

                    <!--begin::Col-->
                    <div class="col-md-12 fv-row">
                        <!--begin::Label-->
                        <label class="mb-2 required fs-6 fw-bold"><strong>الاسم</strong></label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input class="form-control form-control-solid" type="text"
                            value="{{ old('name', $requirement->name) }}" name="name" />
                        <!--end::Input-->
                    </div>
                    <!--end::Col-->

                    <!--begin::Repeater-->

                    <div id="kt_docs_repeater_basic">
                        <div class="form-group">
                            <div data-repeater-list="options">
                                <div data-repeater-item class="form-group row">
                                    <div class="col-md-3">
                                        <label class="mb-2 required fs-6 fw-bold">اسم الخيار</label>
                                        <input type="text" name="option_name" class="form-control form-control-solid"
                                            placeholder="ادخل اسم الخيار" />
                                    </div>

                                    <div class="col-md-4">
                                        <a href="javascript:;" data-repeater-delete class="btn  btn-danger mt-3 mt-md-8">
                                            <i class="la la-trash-o"></i>حذف الخيار
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group mt-5">
                            <a href="javascript:;" data-repeater-create class="btn btn-primary">
                                <i class="la la-plus"></i>اضافة خيار
                            </a>
                        </div>
                        <!--end::Form group-->
                    </div>
                    <!--end::Repeater-->
                </div>





            </div>


            <div class="py-6 card-footer d-flex justify-content-end px-9">
                <button type="reset" id="cancel-opeartion"
                    class="btn btn-light btn-active-light-primary me-2">الغاء</button>
                <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">
                    تحديث</button>
            </div>

        </form>
    </div>

    <div class="shadow-sm card">

        <div class="card-header">
            <h3 class="card-title">الخيارات</h3>

        </div>

        <div class="card-body">

            <!--begin::Form group-->
            <h1>الخيارات</h1>
            @foreach ($requirement->options as $option)
                <div class="row">

                    <div class="col-md-6">
                        <!--begin::Input-->
                        <input class="form-control form-control-solid disabled " type="text" value="{{ $option->name }}"
                            name="name" disabled />
                        <!--end::Input-->
                    </div>

                    <div class="col-md-2">
                        <form action="{{ route('dashboard.options.destroy', $option) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn  btn-danger delete ">
                                <i class="la la-trash-o"></i>حذف الخيار
                            </button>
                        </form>
                    </div>


                </div>
                <br>
            @endforeach

        </div>
    </div>

@endsection


@push('js')


    <script src="{{ asset('admin-dashboard/plugins/custom/formrepeater/jquery.repeater.js') }}"></script>


    <script>
        $('#kt_docs_repeater_basic').repeater({
            initEmpty: true,

            defaultValues: {
                'text-input': 'foo'
            },
            isFirstItemUndeletable: true,
            show: function() {
                $(this).slideDown();
            },

            hide: function(deleteElement) {
                $(this).slideUp(deleteElement);
            }
        });
    </script>



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
                    window.location.href = "{{ route('dashboard.requirements.index') }}";
                }
            });
        });
    </script>
@endpush
