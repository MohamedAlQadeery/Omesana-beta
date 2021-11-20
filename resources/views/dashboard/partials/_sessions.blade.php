@if (session('success'))
    <script>
        Swal.fire({
            title: "تمت العمليه !",
            text: "تم اضافة البيانات بنجاح !",
            icon: "success",
            button: "حسنا !!",
        });
    </script>
@endif


@if (session('success_edit'))
    <script>
        Swal.fire({
            title: "تمت العمليه !",
            text: "تم تحديث البيانات بنجاح !",
            icon: "success",
            button: "حسنا !!",
        });
    </script>
@endif



@if (session('success_delete'))
    <script>
        Swal.fire({
            title: "تمت العمليه !",
            text: "تم حذف البيانات بنجاح !",
            icon: "success",
            button: "حسنا !!",
        });
    </script>
@endif



@if (session('error_session'))
    <script>
        Swal.fire({
            title: " وقع خطأ !",
            text: "حدث خطأ في العمليه",
            icon: "error",
            button: "حسنا !!",
        });
    </script>
@endif
