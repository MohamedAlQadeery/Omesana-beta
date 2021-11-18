@extends('layouts.dashboard_layouts.app')

@section('content')


    <div class="shadow-sm card">
        <div class="card-header">
            <h3 class="card-title">اضافة متطلب</h3>

        </div>

        <div class="card-body">
            <form>

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
                            <option value="1">تصميم داخلي</option>
                            <option value="2">تصميم معماري</option>

                        </select>
                        <!--end::Input-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="mb-2 required fs-6 fw-bold"><strong>الاسم</strong></label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input class="form-control form-control-solid" type="text" placeholder="" name="postcode" />
                        <!--end::Input-->
                    </div>
                    <!--end::Col-->

                </div>


            </form>

        </div>


        <div class="py-6 card-footer d-flex justify-content-end px-9">
            <button type="reset" id="cancel-opeartion" class="btn btn-light btn-active-light-primary me-2">الغاء</button>
            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">
                اضافة</button>
        </div>
    </div>


@endsection

@push('js')
    <script>
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
                    window.location.href = "{{ route('dashboard.requirement.index') }}";
                }
            });
        });
    </script>
@endpush
