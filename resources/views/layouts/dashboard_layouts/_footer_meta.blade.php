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

<script>
    $(document).ready(function() {

        //for delete button
        $(document).on('click', '.delete', function(e) {

            e.preventDefault();
            var that = $(this);
            Swal.fire({
                html: "هل أنت متأكد من حذف البيانات ؟",
                icon: "error",
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
                    that.closest('form').submit()

                }
            });

        })



        //for cancel button
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
                    window.location.href = "{{ route('dashboard.works.index') }}";
                }
            });
        });


    });
</script>
@stack('js')
