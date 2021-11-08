<div id="kt_aside" class="aside pb-5 pt-5 pt-lg-0" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'80px', '300px': '100px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Brand-->
    <div class="aside-logo py-8" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="../../demo6/dist/index.html" class="d-flex align-items-center">
            <img alt="Logo" src="{{ asset('admin-dashboard') }}/media/logos/logo-demo6.svg" class="h-45px logo" />
        </a>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid" id="kt_aside_menu">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y my-2 my-lg-5 pe-lg-n1" id="kt_aside_menu_wrapper" data-kt-scroll="true"
            data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
            data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="5px">
            <!--begin::Menu-->
            <div class="
                                    menu
                                    menu-column
                                    menu-title-gray-700
                                    menu-state-title-primary
                                    menu-state-icon-primary
                                    menu-state-bullet-primary
                                    menu-arrow-gray-500
                                    fw-bold
                                "
                id="#kt_aside_menu" data-kt-menu="true">
                <div class="menu-item py-2">
                    <a class="menu-link menu-center" href="../../demo6/dist/index.html" data-bs-trigger="hover"
                        data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon me-0">
                            <i class="bi bi-house fs-2"></i>
                        </span>
                        <span class="menu-title">الرئيسية</span>
                    </a>
                </div>
                <div data-kt-menu-trigger="click" data-kt-menu-placement="left-start" class="menu-item py-2">
                    <span class="menu-link menu-center" data-bs-trigger="hover" data-bs-dismiss="click"
                        data-bs-placement="right">
                        <span class="menu-icon me-0">
                            <i
                                class="
                                                    bi bi-file-earmark-lock
                                                    fs-2
                                                "></i>
                        </span>
                        <span class="menu-title">Auth</span>
                    </span>
                    <div
                        class="
                                            menu-sub menu-sub-dropdown
                                            w-225px
                                            px-1
                                            py-4
                                        ">
                        <div class="menu-item">
                            <div class="menu-content">
                                <span
                                    class="
                                                        menu-section
                                                        fs-5
                                                        fw-bolder
                                                        ps-1
                                                        py-1
                                                    ">Authentication</span>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span
                                        class="
                                                            bullet bullet-dot
                                                        "></span>
                                </span>
                                <span class="menu-title">Basic</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div
                                class="
                                                    menu-sub menu-sub-accordion
                                                ">
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo6/dist/authentication/flows/basic/sign-in.html">
                                        <span class="menu-bullet">
                                            <span
                                                class="
                                                                    bullet
                                                                    bullet-dot
                                                                "></span>
                                        </span>
                                        <span class="menu-title">Sign-in</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo6/dist/authentication/flows/basic/sign-up.html">
                                        <span class="menu-bullet">
                                            <span
                                                class="
                                                                    bullet
                                                                    bullet-dot
                                                                "></span>
                                        </span>
                                        <span class="menu-title">Sign-up</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo6/dist/authentication/flows/basic/two-steps.html">
                                        <span class="menu-bullet">
                                            <span
                                                class="
                                                                    bullet
                                                                    bullet-dot
                                                                "></span>
                                        </span>
                                        <span class="menu-title">Two-steps</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo6/dist/authentication/flows/basic/password-reset.html">
                                        <span class="menu-bullet">
                                            <span
                                                class="
                                                                    bullet
                                                                    bullet-dot
                                                                "></span>
                                        </span>
                                        <span class="menu-title">Password
                                            Reset</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo6/dist/authentication/flows/basic/new-password.html">
                                        <span class="menu-bullet">
                                            <span
                                                class="
                                                                    bullet
                                                                    bullet-dot
                                                                "></span>
                                        </span>
                                        <span class="menu-title">New Password</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span
                                        class="
                                                            bullet bullet-dot
                                                        "></span>
                                </span>
                                <span class="menu-title">Extended</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div
                                class="
                                                    menu-sub menu-sub-accordion
                                                ">
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo6/dist/authentication/extended/multi-steps-sign-up.html">
                                        <span class="menu-bullet">
                                            <span
                                                class="
                                                                    bullet
                                                                    bullet-dot
                                                                "></span>
                                        </span>
                                        <span class="menu-title">Multi-steps
                                            Sign-up</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo6/dist/authentication/extended/free-trial-sign-up.html">
                                        <span class="menu-bullet">
                                            <span
                                                class="
                                                                    bullet
                                                                    bullet-dot
                                                                "></span>
                                        </span>
                                        <span class="menu-title">Free Trial
                                            Sign-up</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo6/dist/authentication/extended/coming-soon.html">
                                        <span class="menu-bullet">
                                            <span
                                                class="
                                                                    bullet
                                                                    bullet-dot
                                                                "></span>
                                        </span>
                                        <span class="menu-title">Coming Soon</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo6/dist/authentication/general/verify-email.html">
                                        <span class="menu-bullet">
                                            <span
                                                class="
                                                                    bullet
                                                                    bullet-dot
                                                                "></span>
                                        </span>
                                        <span class="menu-title">Verify Email</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo6/dist/authentication/general/password-confirmation.html">
                                        <span class="menu-bullet">
                                            <span
                                                class="
                                                                    bullet
                                                                    bullet-dot
                                                                "></span>
                                        </span>
                                        <span class="menu-title">Password
                                            Confirmation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start"
                            data-kt-menu-flip="false" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span
                                        class="
                                                            bullet bullet-dot
                                                        "></span>
                                </span>
                                <span class="menu-title">General</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div
                                class="
                                                    menu-sub
                                                    menu-sub-accordion
                                                    menu-sub-lg-dropdown
                                                    w-lg-225px
                                                    px-lg-1
                                                    py-lg-4
                                                ">
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo6/dist/authentication/general/welcome.html">
                                        <span class="menu-bullet">
                                            <span
                                                class="
                                                                    bullet
                                                                    bullet-dot
                                                                "></span>
                                        </span>
                                        <span class="menu-title">Welcome</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo6/dist/authentication/general/verify-email.html">
                                        <span class="menu-bullet">
                                            <span
                                                class="
                                                                    bullet
                                                                    bullet-dot
                                                                "></span>
                                        </span>
                                        <span class="menu-title">Verify Email</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo6/dist/authentication/general/password-confirmation.html">
                                        <span class="menu-bullet">
                                            <span
                                                class="
                                                                    bullet
                                                                    bullet-dot
                                                                "></span>
                                        </span>
                                        <span class="menu-title">Password
                                            Confirmation</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo6/dist/authentication/general/close-account.html">
                                        <span class="menu-bullet">
                                            <span
                                                class="
                                                                    bullet
                                                                    bullet-dot
                                                                "></span>
                                        </span>
                                        <span class="menu-title">Close Account</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo6/dist/authentication/general/error-404.html">
                                        <span class="menu-bullet">
                                            <span
                                                class="
                                                                    bullet
                                                                    bullet-dot
                                                                "></span>
                                        </span>
                                        <span class="menu-title">Error 404</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo6/dist/authentication/general/error-500.html">
                                        <span class="menu-bullet">
                                            <span
                                                class="
                                                                    bullet
                                                                    bullet-dot
                                                                "></span>
                                        </span>
                                        <span class="menu-title">Error 500</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start"
                            data-kt-menu-flip="false" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span
                                        class="
                                                            bullet bullet-dot
                                                        "></span>
                                </span>
                                <span class="menu-title">Email</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div
                                class="
                                                    menu-sub
                                                    menu-sub-accordion
                                                    menu-sub-lg-dropdown
                                                    w-lg-225px
                                                    px-lg-1
                                                    py-lg-4
                                                ">
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo6/dist/authentication/email/verify-email.html" target="blank">
                                        <span class="menu-bullet">
                                            <span
                                                class="
                                                                    bullet
                                                                    bullet-dot
                                                                "></span>
                                        </span>
                                        <span class="menu-title">Verify Email</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo6/dist/authentication/email/password-reset.html" target="blank">
                                        <span class="menu-bullet">
                                            <span
                                                class="
                                                                    bullet
                                                                    bullet-dot
                                                                "></span>
                                        </span>
                                        <span class="menu-title">Password
                                            Reset</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link"
                                        href="../../demo6/dist/authentication/email/password-change.html"
                                        target="blank">
                                        <span class="menu-bullet">
                                            <span
                                                class="
                                                                    bullet
                                                                    bullet-dot
                                                                "></span>
                                        </span>
                                        <span class="menu-title">Password
                                            Change</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
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
