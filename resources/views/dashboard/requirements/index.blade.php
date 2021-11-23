@extends('layouts.dashboard_layouts.app')

@push('css')

@endpush

@section('content')



    <ol class="breadcrumb text-muted fs-6 fw-bold">
        <li class="breadcrumb-item pe-3"><a href="{{ route('dashboard.welcome') }}" class="pe-3">الرئيسية</a></li>
        <li class="px-3 breadcrumb-item text-muted">المتطلبات</li>
    </ol><br>

    <!--begin::Basic info-->
    <div class="mb-5 card mb-xl-10">
        <!--begin::Card header-->
        <div class="border-0 cursor-pointer card-header" role="button" data-bs-toggle="collapse"
            data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="m-0 card-title">
                <h3 class="m-0 fw-bolder">البحث</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->
        <div id="kt_account_profile_details" class="collapse show">
            <!--begin::Form-->
            <form action="{{ route('dashboard.requirements.index') }}" class="form" method="GET">
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    <div class="row g-9 mb-7">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="mb-2 required fs-6 fw-bold"><strong>الاسم</strong></label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input class="form-control form-control-solid" type="text" value="{{ request()->search }}"
                                name="search" />
                            <!--end::Input-->
                        </div>

                        <!--end::Col-->

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
                                <option value="">اختار نوع المتطلب</option>
                                <option value="1" {{ request()->type == 1 ? 'selected' : '' }}>تصميم داخلي</option>
                                <option value="2" {{ request()->type == 2 ? 'selected' : '' }}>تصميم معماري</option>

                            </select>
                            <!--end::Input-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="mb-2 fs-6 fw-bold">
                                <span class="required"><strong>الحالة</strong></span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                    title="اختار حالة المتطلب "></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <select name="status" data-placeholder="اختر حالة المتطلب .."
                                class="form-select form-select-solid fw-bolder">
                                <option value="">اختار حالة المتطلب</option>

                                <option value="1" {{ request()->status == 1 ? 'selected' : '' }}>نشط</option>
                                <option value="2" {{ request()->status == 2 ? 'selected' : '' }}>غير نشط</option>

                            </select>
                            <!--end::Input-->
                        </div>
                        <!--end::Col-->


                    </div>
                </div>
                <!--end::Card body-->
                <!--begin::Actions-->
                <div class="py-6 card-footer d-flex justify-content-end px-9">
                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">البحث</button>
                    @if ($is_searched)
                        <a href="{{ route('dashboard.requirements.index') }}" class="btn btn-light btn-danger "
                            style="margin-right: 2px"><i class=" fas fa-arrow-right"></i>الغاء</a>

                    @endif
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Basic info-->

    {{-- begin::reqs --}}
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">
        @foreach ($reqs as $req)
            <!--begin::Col-->
            <div class="col-md-4">
                <!--begin::Card-->
                <div class="card card-flush h-md-100">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>{{ $req->name }}</h2>

                        </div>
                        <!--end::Card title-->
                        <div class="fa-pull-right">
                            <span class="btn-sm btn btn-{{ $req->type == 1 ? 'info' : 'warning' }}  "
                                style="margin-top: 11%">{{ $req->type_name }}</span>

                            <span class="btn-sm btn btn-{{ $req->status == 1 ? 'success' : 'danger' }}  "
                                style="margin-top: 11%">{{ $req->status_name }}</span>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-1">
                        <!--begin::Users-->
                        <div class="fw-bolder text-gray-600 mb-5">خيارات المتطلب</div>
                        <!--end::Users-->
                        <!--begin::Permissions-->
                        <div class="d-flex flex-column text-gray-600">
                            @foreach ($req->options as $option)

                                @if ($loop->iteration != 5)
                                    <div class="d-flex align-items-center py-2">
                                        <span class="bullet bg-primary me-3"></span>{{ $option->name }}
                                    </div>
                                @else
                                    <div class="d-flex align-items-center py-2">
                                        <span class="bullet bg-primary me-3 "></span> <span class="text-danger">لرؤية
                                            باقي الخيارات اضغط على زر التعديل ...</span>
                                    </div>
                                @break
                            @endif

        @endforeach

    </div>
    <!--end::reqs-->
    </div>
    <!--end::Card body-->
    <!--begin::Card footer-->
    <div class="card-footer flex-wrap pt-0">

        <form action="{{ route('dashboard.requirements.destroy', $req) }}" method="post">
            @csrf
            @method('delete')
            <a href="{{ route('dashboard.requirements.edit', $req) }}" class="btn btn-primary my-1">تعديل</a>

            <button type="submit" class="btn btn-danger my-1 me-2 delete">حذف</button>
        </form>

    </div>
    <!--end::Card footer-->
    </div>
    <!--end::Card-->
    </div>
    <!--end::Col md4-->

    @endforeach



    </div>

    {{ $reqs->appends(request()->query())->links() }}


@endsection


@push('js')


@endpush
