<div id="kt_header" style="" class="header align-items-stretch">
    <!--begin::Container-->
    <div class=" container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Aside mobile toggle-->
        <div class=" d-flex align-items-center d-lg-none ms-n1 me-2" title="Show aside menu">
            <div class=" btn btn-icon btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                id="kt_aside_mobile_toggle">
                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                <span class="mt-1 svg-icon svg-icon-2x">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                            fill="black" />
                        <path opacity="0.3"
                            d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                            fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
        </div>
        <!--end::Aside mobile toggle-->
        <!--begin::Mobile logo-->
        <div class=" d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="../../demo6/dist/index.html" class="d-lg-none">
                <img alt="Logo" src="{{ asset('admin-dashboard') }}/media/logos/logo-demo6.svg"
                    class="h-30px" />
            </a>
        </div>
        <!--end::Mobile logo-->
        <!--begin::Wrapper-->
        <div class=" d-flex align-items-stretch justify-content-between flex-lg-grow-1">
            <!--begin::Navbar-->
            <div class="d-flex align-items-center" id="kt_header_nav">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_header_nav'}"
                    class="flex-wrap mb-5 page-title d-flex align-items-center me-3 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="my-1 d-flex align-items-center text-dark fw-bolder fs-3">
                        الرئيسية
                    </h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Navbar-->
            <!--begin::Topbar-->
            <div class="flex-shrink-0 d-flex align-items-stretch">
                <!--begin::Toolbar wrapper-->
                <div class="flex-shrink-0 d-flex align-items-stretch">


                    <!--end::Chat-->
                    <x-NotificationsMenu />
                    <!--begin::User-->
                    <div class=" d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                        <!--begin::Menu wrapper-->
                        <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click"
                            data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                            <img src="{{ asset('admin-dashboard') }}/media/avatars/150-26.jpg" alt="image" />
                        </div>
                        <!--begin::Menu-->
                        <div class="py-4 menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold fs-6 w-275px"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="px-3 menu-item">
                                <div class="px-3 menu-content d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class=" symbol symbol-50px me-5">
                                        <img alt="Logo"
                                            src="{{ asset('admin-dashboard') }}/media/avatars/150-26.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Username-->
                                    <div class=" d-flexflex-column">
                                        <div class=" fw-bolder d-flex align-items-center fs-5">
                                            {{ auth()->user()->name }}
                                            <span
                                                class="px-2 py-1 badge badge-light-success fw-bolder fs-8 ms-2">Admin</span>
                                        </div>
                                        <a
                                            class=" fw-bold text-muted text-hover-primary fs-7">{{ auth()->user()->email }}</a>
                                    </div>
                                    <!--end::Username-->
                                </div>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="my-2 separator"></div>
                            <!--end::Menu separator-->


                            <!--begin::Menu item-->
                            <div class="px-5 my-1 menu-item">
                                <a href="{{ route('dashboard.settings.index') }}" class="px-5 menu-link">الاعدادات</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="px-5 menu-item">
                                <a class="px-5 menu-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    تسجيل خروج
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="my-2 separator"></div>
                            <!--end::Menu separator-->

                        </div>
                        <!--end::Menu-->
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::User -->
                    <!--begin::Heaeder menu toggle-->
                    <!--end::Heaeder menu toggle-->
                </div>
                <!--end::Toolbar wrapper-->
            </div>
            <!--end::Topbar-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Container-->
</div>
