@extends('layouts.dashboard_layouts.app')



@section('content')



    <ol class="breadcrumb text-muted fs-6 fw-bold">
        <li class="breadcrumb-item pe-3"><a href="{{ route('dashboard.welcome') }}" class="pe-3">الرئيسية</a></li>
        <li class="px-3 breadcrumb-item text-muted"><a href="{{ route('dashboard.contactus.index') }}"
                class="pe-3">الرسائل</a></li>
        <li class="px-3 breadcrumb-item text-muted">{{ $message->title }}</li>

    </ol><br>


    @error('body')

        <div class="alert alert-danger">
            <strong>{{ $message }}</strong>
        </div>

    @enderror

    <!--begin::Card-->
    <div class="card">
        <!--begin::Card body-->
        <div class="card-body">
            <!--begin::Layout-->
            <div class="d-flex flex-column flex-xl-row p-7">
                <!--begin::Content-->
                <div class="flex-lg-row-fluid me-xl-15 mb-20 mb-xl-0">
                    <!--begin::Ticket view-->
                    <div class="mb-0">
                        <!--begin::Heading-->
                        <div class="d-flex align-items-center mb-12">
                            <!--begin::Icon-->
                            <!--begin::Svg Icon | path: icons/duotune/files/fil008.svg-->

                            <!--end::Icon-->
                            <!--begin::Content-->
                            <div class="d-flex flex-column">
                                <!--begin::Title-->
                                <h1 class="text-gray-800 fw-bold">{{ $message->title }}</h1>
                                <!--end::Title-->
                                <!--begin::Info-->
                                <div class="">
                                    <!--begin::Label-->
                                    <span class="fw-bold text-muted me-6">النوع:
                                        <a class="text-muted text-hover-primary">{{ $message->contact_type }}</a></span>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <span class="fw-bold text-muted me-6">اسم المرسل:
                                        <a class="text-muted text-hover-primary">{{ $message->name }}</a></span>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <span class="fw-bold text-muted me-6">رقم هاتف المرسل:
                                        <a class="text-muted text-hover-primary">{{ $message->phone }}</a></span>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <span class="fw-bold text-muted">وقت الانشاء:
                                        <span
                                            class="fw-bolder text-gray-600 me-1">{{ $message->created_at->diffForHumans() }}</span>
                                    </span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Details-->
                        <div class="mb-15">
                            <!--begin::Description-->
                            <div class="mb-15 fs-5 fw-normal text-gray-800">
                                <!--begin::Text-->
                                <!--end::Text-->
                                <!--begin::Text-->
                                <div class="mb-10">{{ $message->body }}</div>
                                <!--end::Text-->


                            </div>
                            <!--end::Description-->

                            <!--begin::Input group-->
                            <form action="{{ route('dashboard.contactus.replay', $message->id) }}" method="post">
                                @csrf
                                <div class="mb-0">
                                    <textarea
                                        class="form-control form-control-solid placeholder-gray-600 fw-bolder fs-4 ps-9 pt-7"
                                        rows="6" name="body" placeholder="الرد على الرسالة"></textarea>
                                    <!--begin::Submit-->
                                    <button type="submit"
                                        class="btn btn-primary mt-n20 mb-20 position-relative float-end me-7">ارسال</button>
                                    <!--end::Submit-->

                                </div>
                            </form>
                            <!--end::Input group-->
                        </div>
                        <!--end::Details-->

                        @if ($message->replies->count() > 0)
                            @foreach ($message->replies as $reply)
                                <!--begin::Comments-->
                                <div class="mb-15">

                                    <!--begin::Comment-->
                                    <div class="overflow-hidden position-relative card-rounded">
                                        <!--begin::Ribbon-->
                                        <div class="ribbon ribbon-triangle ribbon-top-start border-success">
                                            <!--begin::Ribbon icon-->
                                            <div class="ribbon-icon mt-n5 ms-n6">
                                                <i class="bi bi-check2 fs-2 text-white"></i>
                                            </div>
                                            <!--end::Ribbon icon-->
                                        </div>
                                        <!--end::Ribbon-->
                                        <!--begin::Card-->
                                        <div class="card card-bordered w-100">
                                            <!--begin::Body-->
                                            <div class="card-body">
                                                <!--begin::Wrapper-->
                                                <div class="w-100 d-flex flex-stack mb-8">
                                                    <!--begin::Container-->
                                                    <div class="d-flex align-items-center f">
                                                        <!--begin::Author-->
                                                        <div class="symbol symbol-50px me-5">
                                                            <div
                                                                class="symbol-label fs-1 fw-bolder bg-light-primary text-primary">
                                                                A
                                                            </div>
                                                        </div>
                                                        <!--end::Author-->
                                                        <!--begin::Info-->
                                                        <div
                                                            class="d-flex flex-column fw-bold fs-5 text-gray-600 text-dark">
                                                            <!--begin::Text-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Username-->
                                                                <a href="../../demo6/dist/pages/profile/overview.html"
                                                                    class="text-gray-800 fw-bolder text-hover-primary fs-5 me-3">ادارة
                                                                    الموقع</a>
                                                                <!--end::Username-->
                                                                <span class="m-0"></span>
                                                            </div>
                                                            <!--end::Text-->
                                                            <!--begin::Date-->
                                                            <span
                                                                class="text-muted fw-bold fs-6">{{ $reply->created_at->diffForHumans() }}</span>
                                                            <!--end::Date-->
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Container-->

                                                </div>
                                                <!--end::Wrapper-->
                                                <!--begin::Desc-->
                                                <p class="fw-normal fs-5 text-gray-700 m-0">
                                                    {{ $reply->body }}
                                                </p>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Comment-->
                                </div>
                                <!--end::Comments-->
                            @endforeach
                        @endif
                    </div>
                    <!--end::Ticket view-->
                </div>
                <!--end::Content-->

            </div>
            <!--end::Layout-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->


@endsection
