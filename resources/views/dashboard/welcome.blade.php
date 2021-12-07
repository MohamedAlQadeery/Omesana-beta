@extends('layouts.dashboard_layouts.app')


@section('content')


    <ol class="breadcrumb text-muted fs-6 fw-bold">
        <li class="px-3 breadcrumb-item text-muted">الرئيسية</li>
    </ol><br>


    <!--begin::Row-->
    <div class="row g-5 g-xl-8">
        <div class="col-xl-3">
            <!--begin::Statistics Widget 5-->
            <a href="#" class="card bg-body hoverable card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                    <span class="svg-icon svg-icon-primary svg-icon-3x ms-n1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
                            <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
                            <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
                            <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <div class="mt-5 mb-2 text-gray-900 fw-bolder fs-2" data-kt-countup="true"
                        data-kt-countup-value="{{ $works_count }}">0</div>
                    <div class="text-gray-400 fw-bold">عدد أعمال الشركة</div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::Statistics Widget 5-->
        </div>
        <div class="col-xl-3">
            <!--begin::Statistics Widget 5-->
            <a href="#" class="card bg-dark hoverable card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm008.svg-->
                    <span class="svg-icon svg-icon-gray-100 svg-icon-3x ms-n1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3"
                                d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z"
                                fill="black" />
                            <path
                                d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z"
                                fill="black" />
                            <path
                                d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z"
                                fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <div class="mt-5 mb-2 text-gray-100 fw-bolder fs-2" data-kt-countup="true"
                        data-kt-countup-value="{{ $arc_works_count }}">0</div>
                    <div class="text-gray-100 fw-bold">عدد أعمال التصميم المعماري</div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::Statistics Widget 5-->
        </div>
        <div class="col-xl-3">
            <!--begin::Statistics Widget 5-->
            <a href="#" class="card bg-warning hoverable card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                    <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3"
                                d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                fill="black" />
                            <path
                                d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <div class="mt-5 mb-2 text-white fw-bolder fs-2" data-kt-countup="true"
                        data-kt-countup-value="{{ $int_works_count }}">0</div>
                    <div class="text-white fw-bold">عددأعمال التصميم الداخلي</div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::Statistics Widget 5-->
        </div>
        <div class="col-xl-3">
            <!--begin::Statistics Widget 5-->
            <a href="#" class="mb-5 card bg-info hoverable card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Svg Icon | path: icons/duotune/graphs/gra007.svg-->
                    <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3"
                                d="M10.9607 12.9128H18.8607C19.4607 12.9128 19.9607 13.4128 19.8607 14.0128C19.2607 19.0128 14.4607 22.7128 9.26068 21.7128C5.66068 21.0128 2.86071 18.2128 2.16071 14.6128C1.16071 9.31284 4.96069 4.61281 9.86069 4.01281C10.4607 3.91281 10.9607 4.41281 10.9607 5.01281V12.9128Z"
                                fill="black" />
                            <path
                                d="M12.9607 10.9128V3.01281C12.9607 2.41281 13.4607 1.91281 14.0607 2.01281C16.0607 2.21281 17.8607 3.11284 19.2607 4.61284C20.6607 6.01284 21.5607 7.91285 21.8607 9.81285C21.9607 10.4129 21.4607 10.9128 20.8607 10.9128H12.9607Z"
                                fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <div class="mt-5 mb-2 text-white fw-bolder fs-2" data-kt-countup="true"
                        data-kt-countup-value="{{ $unread_messages_count }}">0</div>
                    <div class="text-white fw-bold">الرسائل الجديدة</div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::Statistics Widget 5-->
        </div>
    </div>
    <!--end::Row-->

    {{-- <!--begin::Row-->
    <div class="row g-5 g-xl-8">
        <div class="col-xl-4">
            <!--begin::Statistics Widget 4-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="p-0 card-body">
                    <div class="d-flex flex-stack card-p flex-grow-1">
                        <span class="symbol symbol-50px me-2">
                            <span class="symbol-label bg-light-info">
                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                <span class="svg-icon svg-icon-2x svg-icon-info">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                                            fill="black" />
                                        <path opacity="0.3"
                                            d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                                            fill="black" />
                                        <path opacity="0.3"
                                            d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                        </span>
                        <div class="d-flex flex-column text-end">
                            <span class="text-dark fw-bolder fs-2">+256</span>
                            <span class="mt-1 text-muted fw-bold">Sales Change</span>
                        </div>
                    </div>
                    <div class="statistics-widget-4-chart card-rounded-bottom" data-kt-chart-color="info"
                        style="height: 150px"></div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Statistics Widget 4-->
        </div>
        <div class="col-xl-4">
            <!--begin::Statistics Widget 4-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="p-0 card-body">
                    <div class="d-flex flex-stack card-p flex-grow-1">
                        <span class="symbol symbol-50px me-2">
                            <span class="symbol-label bg-light-success">
                                <!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
                                <span class="svg-icon svg-icon-2x svg-icon-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z"
                                            fill="black" />
                                        <path opacity="0.3"
                                            d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                        </span>
                        <div class="d-flex flex-column text-end">
                            <span class="text-dark fw-bolder fs-2">750$</span>
                            <span class="mt-1 text-muted fw-bold">Weekly Income</span>
                        </div>
                    </div>
                    <div class="statistics-widget-4-chart card-rounded-bottom" data-kt-chart-color="success"
                        style="height: 150px"></div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Statistics Widget 4-->
        </div>
        <div class="col-xl-4">
            <!--begin::Statistics Widget 4-->
            <div class="mb-5 card card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="p-0 card-body">
                    <div class="d-flex flex-stack card-p flex-grow-1">
                        <span class="symbol symbol-50px me-2">
                            <span class="symbol-label bg-light-primary">
                                <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                <span class="svg-icon svg-icon-2x svg-icon-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path opacity="0.3"
                                            d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                            fill="black" />
                                        <path
                                            d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                        </span>
                        <div class="d-flex flex-column text-end">
                            <span class="text-dark fw-bolder fs-2">+6.6K</span>
                            <span class="mt-1 text-muted fw-bold">New Users</span>
                        </div>
                    </div>
                    <div class="statistics-widget-4-chart card-rounded-bottom" data-kt-chart-color="primary"
                        style="height: 150px"></div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Statistics Widget 4-->
        </div>
    </div>
    <!--end::Row--> --}}


    <div class="g-5 gx-xxl-8">
        <!--begin::Tables Widget 10-->
        <div class="card">
            <!--begin::Header-->
            <div class="pt-5 border-0 card-header">
                <h3 class="card-title align-items-start flex-column">
                    <span class="mb-1 card-label fw-bolder fs-3">أكثر الاعمال مشاهدة</span>
                    <span class="mt-1 text-muted fw-bold fs-7">اشهر اعمال الموقع تجدها هنا</span>
                </h3>

            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="pt-3 card-body">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed table-row-gray-300 gs-0 gy-4">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="border-0">
                                <th class="p-0"></th>
                                <th class="p-0 min-w-150px"></th>
                                <th class="p-0 min-w-150px"></th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            @foreach ($most_viewd_works as $work)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-45px me-5">
                                                <img alt="Pic" src="{{ $work->getMedia()[0]->getUrl() }}">
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Name-->
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="{{ route('dashboard.works.show', $work) }}"
                                                    class="mb-1 text-dark fw-bolder text-hover-primary fs-6">{{ $work->name }}</a>
                                                <a class="text-muted text-hover-primary fw-bold d-block fs-7">
                                                    {{ $work->small_description }}</a>
                                            </div>
                                            <!--end::Name-->
                                        </div>
                                    </td>

                                    <td class="text fw-bold text-end">{{ $work->type_name }}</td>
                                    <td class="text-end">
                                        <span class="badge badge-success">{{ $work->view_count }}</span>
                                    </td>

                                </tr>
                            @endforeach


                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->
        </div>
        <!--end::Tables Widget 10-->
    </div>
@endsection


@push('js')
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('admin-dashboard') }}/js/custom/widgets.js"></script>
    <!--end::Page Custom Javascript-->
@endpush
