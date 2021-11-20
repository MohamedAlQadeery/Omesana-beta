@extends('layouts.dashboard_layouts.app')
@push('css')
    {{-- begin page css --}}

    <link href="{{ asset('admin-dashboard/plugins/filepond/filepond.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-dashboard/plugins/filepond/filepond-plugin-image-preview.css') }}" rel="stylesheet">
    {{-- end page css --}}

@endpush

@section('content')



    <ol class="breadcrumb text-muted fs-6 fw-bold">
        <li class="breadcrumb-item pe-3"><a href="#" class="pe-3">الرئيسية</a></li>
        <li class="breadcrumb-item pe-3"><a href="#" class="pe-3">أعمال الموقع</a></li>
        <li class="px-3 breadcrumb-item text-muted">اضافة عمل</li>
    </ol><br>



    <div class="shadow-sm card">
        <div class="card-header">
            <h3 class="card-title">بيانات العمل</h3>

        </div>

        <form method="post" action="{{ route('dashboard.works.store') }}">
            <div class="card-body">
                @csrf
                <input type="hidden" name="tmp_folder" value="{{ $tmp_folder }}">
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row g-9 mb-7">
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="mb-2 fs-6 fw-bold">
                            <span class="required"><strong>نوع العمل</strong></span>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                title="اختار نوع العمل "></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select name="type" name="type" data-placeholder="اختر نوع العمل .."
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
                        <label class="mb-2 required fs-6 fw-bold"><strong>اسم العمل</strong></label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input class="form-control form-control-solid" type="text" placeholder="" name="name" />
                        <!--end::Input-->
                    </div>
                    <!--end::Col-->


                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="mb-2 required fs-6 fw-bold"><strong>اسم العميل</strong></label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input class="form-control form-control-solid" type="text" placeholder="" name="client_name" />
                        <!--end::Input-->
                    </div>


                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="mb-2 required fs-6 fw-bold"><strong>اسم المهندس/ة</strong></label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input class="form-control form-control-solid" type="text" placeholder="" name="arc_name" />
                        <!--end::Input-->
                    </div>



                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="mb-2 required fs-6 fw-bold"><strong>موقع العمل</strong></label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input class="form-control form-control-solid" type="text" placeholder="" name="address" />
                        <!--end::Input-->
                    </div>


                    <div class="col-md-6 fv-row">
                        <!--begin::Label-->
                        <label class="mb-2 required fs-6 fw-bold"><strong>المساحة (متر مربع)</strong></label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input class="form-control form-control-solid" type="text" name="size" />
                        <!--end::Input-->
                    </div>



                    <div class="col-md-12 fv-row">

                        <label class="mb-2 required fs-6 fw-bold"><strong>الوصف</strong></label>

                        <textarea class="form-control form-control-solid" data-kt-autosize="true"
                            name="description"></textarea>

                    </div>


                    <div class="col-md-12 fv-row">

                        <label class="mb-2 required fs-6 fw-bold"><strong>ملفات العمل</strong></label>

                        <input type="file" name="files[]" multiple>


                    </div>


                </div>




            </div>


            <div class="py-6 card-footer d-flex justify-content-end px-9">
                <button type="reset" id="cancel-opeartion"
                    class="btn btn-light btn-active-light-primary me-2">الغاء</button>
                <button type="submit" class="btn btn-primary" id="sub_btn" style="display: none">
                    اضافة</button>
            </div>
        </form>
    </div>


@endsection

@push('js')


    <script src="{{ asset('admin-dashboard/plugins/filepond/filepond-plugin-image-preview.js') }}"></script>
    <script src="{{ asset('admin-dashboard/plugins/filepond/filepond-plugin-file-validate-type.js') }}"></script>

    <script src="{{ asset('admin-dashboard/plugins/filepond/filepond.js') }}"></script>


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


    <script>
        FilePond.registerPlugin(FilePondPluginImagePreview, FilePondPluginFileValidateType);
        const inputElement = document.querySelector('input[type="file"]');
        const pond = FilePond.create(inputElement);


        pond.onprocessfiles = () => {
            $('#sub_btn').css('display', 'block');

        }

        FilePond.setOptions({
            acceptedFileTypes: ['image/*'],
            server: {
                process: "{{ route('dashboard.file_upload_multi', $tmp_folder) }}",



                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }

            }
        });
    </script>

@endpush
