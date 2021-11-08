<script>
    var hostUrl = "";
</script>
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{ asset('admin-dashboard') }}/plugins/global/plugins.bundle.js"></script>
<script src="{{ asset('admin-dashboard') }}/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="{{ asset('admin-dashboard') }}/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{ asset('admin-dashboard') }}/js/custom/widgets.js"></script>
<script src="{{ asset('admin-dashboard') }}/js/custom/apps/chat/chat.js"></script>
<script src="{{ asset('admin-dashboard') }}/js/custom/modals/create-app.js"></script>
<script src="{{ asset('admin-dashboard') }}/js/custom/modals/upgrade-plan.js"></script>
@stack('js')
