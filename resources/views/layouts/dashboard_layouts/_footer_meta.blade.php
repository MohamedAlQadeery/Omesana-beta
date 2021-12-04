<!--begin::Javascript-->
<script>
    const adminId = '{{ auth()->user()->id }}';
</script>

<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{ asset('admin-dashboard') }}/plugins/global/plugins.bundle.js"></script>
<script src="{{ asset('admin-dashboard') }}/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="{{ asset('admin-dashboard') }}/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{ asset('js/app.js') }}"></script>


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






    });
</script>


@stack('js')
