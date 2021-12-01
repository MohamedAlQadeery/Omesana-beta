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


@if (session('contact_success'))
    <script>
        Swal.fire({
            title: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'تم ارسال الرسالة بنجاح !' : 'Message Sent successfully!' }},
            text: {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'ستصلك رسالة في بريدك الالكتروني خلال 24 ساعة نشكرك على تواصلك معنا' : 'You will receive a message in your email in 24 hours thanks for your support' }},
            icon: "success",
            button: "حسنا !!",
        });
    </script>

    <div class="alert alert-success">
        {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'تم ارسال الرسالة بنجاح !' : 'Message Sent successfully!' }},
        {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'ستصلك رسالة في بريدك الالكتروني خلال 24 ساعة نشكرك على تواصلك معنا' : 'You will receive a message in your email in 24 hours thanks for your support' }},

    </div>
@endif


@if (session('success_reply'))
    <script>
        Swal.fire({
            title: "تم الرد على الرسالة بنجاح !",
            text: "سيستلم المرسل الرد في بريده الالكتروني خلال 24 ساعة",
            icon: "success",
            button: "حسنا !!",
        });
    </script>
@endif
