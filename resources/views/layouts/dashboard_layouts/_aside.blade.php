<div id="kt_aside" class="pt-5 pb-5 aside pt-lg-0" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'80px', '300px': '100px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Brand-->
    <div class="py-8 aside-logo" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="{{ route('dashboard.welcome') }}" class="d-flex align-items-center">
            <img alt="Logo" src="{{ asset('admin-dashboard') }}/media/logos/logo-demo6.svg" class="h-45px logo" />
        </a>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid" id="kt_aside_menu">
        <!--begin::Aside Menu-->
        <div class="my-2 hover-scroll-overlay-y my-lg-5 pe-lg-n1" id="kt_aside_menu_wrapper" data-kt-scroll="true"
            data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
            data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="5px">
            <!--begin::Menu-->
            <div class=" menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold"
                id="#kt_aside_menu" data-kt-menu="true">
                <div class="py-2 menu-item">
                    <a class="menu-link menu-center" href="{{ route('dashboard.welcome') }}" data-bs-trigger="hover"
                        data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon me-0">
                            <i class="bi bi-house fs-2"></i>
                        </span>
                        <span class="menu-title">الرئيسية</span>
                    </a>
                </div>
                <div data-kt-menu-trigger="click" data-kt-menu-placement="left-start" class="py-2 menu-item">
                    <span class="menu-link menu-center" data-bs-trigger="hover" data-bs-dismiss="click"
                        data-bs-placement="right">
                        <span class="menu-icon me-0">
                            <i class="bi bi-people fs-2"></i>
                        </span>
                        <span class="menu-title">أعمال الشركة</span>
                    </span>
                    <div class="px-1 py-4 menu-sub menu-sub-dropdown w-225px">
                        <div class="menu-item">
                            <div class="menu-content">
                                <span class="py-1 menu-section fs-5 fw-bolder ps-1">أعمال الشركة</span>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('dashboard.works.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">قائمة الاعمال</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('dashboard.works.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">اضافة عمل</span>
                            </a>
                        </div>

                    </div>
                </div>

                <div data-kt-menu-trigger="click" data-kt-menu-placement="left-start" class="py-2 menu-item">
                    <span class="menu-link menu-center" data-bs-trigger="hover" data-bs-dismiss="click"
                        data-bs-placement="right">
                        <span class="menu-icon me-0">
                            <i class="bi bi-people fs-2"></i>
                        </span>
                        <span class="menu-title">المتطلبات</span>
                    </span>
                    <div class="px-1 py-4 menu-sub menu-sub-dropdown w-225px">
                        <div class="menu-item">
                            <div class="menu-content">
                                <span class="py-1 menu-section fs-5 fw-bolder ps-1">المتطلبات</span>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('dashboard.requirements.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">قائمة المتطلبات</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('dashboard.requirements.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">اضافة متطلب</span>
                            </a>
                        </div>

                    </div>
                </div>


                <div class="py-2 menu-item">
                    <a class="menu-link menu-center" href="{{ route('dashboard.contactus.index') }}"
                        data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon me-0">
                            <i class="bi bi-house fs-2"></i>
                        </span>
                        <span class="menu-title">الرسائل</span>
                    </a>
                </div>


                <div class="py-2 menu-item">
                    <a class="menu-link menu-center" href="{{ route('dashboard.settings.index') }}"
                        data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon me-0">
                            <i class="bi bi-house fs-2"></i>
                        </span>
                        <span class="menu-title">إعدادات الموقع</span>
                    </a>
                </div>


            </div>
        </div>
    </div>
    <!--end::Menu-->
</div>
<!--end::Aside Menu-->
</div>
<!--end::Aside menu-->
<!--begin::Footer-->

<!--end::Footer-->
</div>
