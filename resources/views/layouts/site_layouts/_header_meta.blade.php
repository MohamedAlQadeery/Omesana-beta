<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="robots" content="" />
<meta name="description" content="Omesana Design - Architecture & Interior Design Comapny " />
<meta property="og:title" content="Omesana Design" />
<meta property="og:description" content="Omesana Design - Architecture & Interior Design Comapny" />
<meta property="og:image" content="{{ asset('images/logo_300_120.png') }}" />
<meta name="format-detection" content="telephone=no">

<!-- FAVICONS ICON -->
<link rel="icon" href="{{ asset('images/logo_98_67.png') }}" type="image/x-icon" />
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo_98_67.png') }}" />

<!-- PAGE TITLE HERE -->
<title>{{ setting('title_' . LaravelLocalization::getCurrentLocale()) }}</title>

<!-- MOBILE SPECIFIC -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--[if lt IE 9]>
<script src="js/html5shiv.min.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

<!-- STYLESHEETS -->
<link rel="stylesheet" type="text/css" href="{{ asset('site-assets') }}/css/plugins.css">
<link rel="stylesheet" type="text/css" href="{{ asset('site-assets') }}/css/style.css">
<link rel="stylesheet" type="text/css" href="{{ asset('site-assets') }}/css/templete.css">
<!--begin::Fonts-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap" rel="stylesheet">


<!--end::Fonts-->
@if (LaravelLocalization::getCurrentLocale() == 'ar')
    <link rel="stylesheet" type="text/css" href="{{ asset('site-assets') }}/css/rtl.css">

@endif



<link rel="stylesheet" type="text/css" href="{{ asset('site-assets') }}/css/dark.css">
<link class="skin" rel="stylesheet" type="text/css"
    href="{{ asset('site-assets') }}/css/skin/color/skin-4.css">
<!-- REVOLUTION SLIDER CSS -->
<link rel="stylesheet" type="text/css"
    href="{{ asset('site-assets') }}/plugins/revolution/revolution/css/settings.css">
<link rel="stylesheet" type="text/css"
    href="{{ asset('site-assets') }}/plugins/revolution/revolution/css/navigation.css">


<style>
    .link_style {}

</style>

@stack('css')
