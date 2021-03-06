@extends('layouts.dashboard_layouts.app')



@section('content')



    <ol class="breadcrumb text-muted fs-6 fw-bold">
        <li class="breadcrumb-item pe-3"><a href="{{ route('dashboard.welcome') }}" class="pe-3">الرئيسية</a></li>
        <li class="px-3 breadcrumb-item text-muted">رسائل الموقع</li>
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
            <form action="{{ route('dashboard.contactus.index') }}" class="form" method="GET">
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    <div class="row g-9 mb-7">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <!--begin::Label-->
                            <label class="mb-2 required fs-6 fw-bold"><strong>البريد الالكتروني</strong></label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input class="form-control form-control-solid" type="text" value="{{ request()->email }}"
                                name="email" />
                            <!--end::Input-->
                        </div>

                        <!--end::Col-->



                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="mb-2 fs-6 fw-bold">
                                <span class="required"><strong>الحالة</strong></span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                    title="اختار حالة الرسالة "></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <select name="is_read" data-placeholder="اختر حالة الرسالة .."
                                class="form-select form-select-solid fw-bolder">
                                <option value="">اختار حالة الرسالة</option>

                                <option value="1" {{ request()->is_read == 1 ? 'selected' : '' }}>جديدة</option>
                                <option value="2" {{ request()->is_read == 2 ? 'selected' : '' }}>تم قرائتها</option>

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
                        <a href="{{ route('dashboard.contactus.index') }}" class="btn btn-light btn-danger "
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

    <!--begin::Billing History-->
    <div class="card">
        <!--begin::Card header-->
        <div class="border-gray-200 card-header card-header-stretch border-bottom">
            <!--begin::Title-->
            <div class="card-title">
                <h3 class="m-0 fw-bolder">رسائل الموقع</h3>

            </div>
            <!--end::Title-->

        </div>
        <!--end::Card header-->
        <!--begin::Tab Content-->
        <div class="tab-content">
            <!--begin::Tab panel-->
            <div id="kt_billing_months" class="p-0 card-body tab-pane fade show active" role="tabpanel"
                aria-labelledby="kt_billing_months">
                <!--begin::Table container-->
                <div class="table-responsive">
                    @if (!$messages->count() > 0)
                        <h1 class="text-center">لم يتم العثور على اي سجلات</h1>

                    @else
                        <!--begin::Table-->
                        <table class="table align-middle table-row-bordered gy-4 gs-9">
                            <thead
                                class="text-gray-600 bg-opacity-75 border-gray-200 border-bottom fs-6 fw-bolder bg-light">
                                <tr>
                                    <td>#</td>
                                    <td class="min-w-150px">العنوان</td>
                                    <td class="min-w-150px">البريد الالكتروني</td>
                                    <td class="min-w-150px">نوع الرسالة</td>
                                    <td class="min-w-150px">الحالة</td>
                                    <td class="min-w-150px">وقت استلام الرسالة</td>

                                    <td class="min-w-150px">العملية</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-bold">
                                <!--begin::Table row-->
                                @foreach ($messages as $index => $message)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td style="font-weight:{{ $message->is_read == 1 ? 'bold' : '' }}">
                                            <a
                                                href="{{ route('dashboard.contactus.show', $message) }}">{{ $message->title }}</a>
                                        </td>

                                        <td>
                                            {{ $message->email }}
                                        </td>

                                        <td>

                                            @if ($message->type == 1)
                                                <span class="btn btn-light-info btn-sm">
                                                    {{ $message->contact_type }}
                                                </span>
                                            @elseif ($message->type==2)
                                                <span class="btn btn-light-primary btn-sm">
                                                    {{ $message->contact_type }}
                                                </span>
                                            @else
                                                <span class="btn btn-light-warning btn-sm">
                                                    {{ $message->contact_type }}
                                                </span>
                                            @endif


                                        </td>

                                        <td>
                                            <span
                                                class="btn btn-light-{{ $message->is_read == 1 ? 'success' : 'danger' }} btn-sm">{{ $message->read_type }}</span>

                                        </td>

                                        <td>
                                            {{ $message->created_at->diffForHumans() }}
                                        </td>

                                        <td class="text-right">
                                            <a href="{{ route('dashboard.contactus.show', $message) }}"
                                                class="btn btn-bg-secondary">عرض</a>


                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <!--end::Table-->







                    @endif
                </div>
                <!--end::Table container-->

                {{ $messages->appends(request()->query())->links() }}


            </div>

        </div>
        <!--end::Tab Content-->
    </div>
    <!--end::Billing Address-->
@endsection


@push('js')


@endpush
