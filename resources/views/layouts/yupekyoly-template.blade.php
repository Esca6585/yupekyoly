<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>yupekyoly.com | @yield('title')</title>
    <meta name="description" content="yupekyoly.com">
    <meta name="google-site-verification" content="3Omz1--xfp2OmP5DgKMTPXCr-F69HaNo_5w8JeuaKhU" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('baychay-template/img/logo/yupekyoly-logo.png') }}">
    <!-- All CSS Hear -->
    <link rel="stylesheet" href="{{ asset('baychay-template/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('baychay-template/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('baychay-template/css/icofont.css') }}">
    <link rel="stylesheet" href="{{ asset('baychay-template/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('baychay-template/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('baychay-template/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('baychay-template/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('baychay-template/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('baychay-template/css/mainmenu.css') }}">
    <!-- Style CSS Hear -->
    <link rel="stylesheet" href="{{ asset('baychay-template/style.css') }}">
    <link rel="stylesheet" href="{{ asset('baychay-template/css/responsive.css') }}">
    <script src="{{ asset('baychay-template/js/vendor/modernizr-2.8.3.min.js') }}"></script>


    <!-- Admin metronica template CSS Hear -->
    <link href="{{ asset('metronic-template/v7/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- Admin metronica template CSS Hear -->

    <!-- begin pagination -->
    <link rel="stylesheet" href="{{ asset('baychay-template/css/pagination.css') }}">
    <!-- end pagination  -->

</head>

<body>
    <div class="wrapper">

        <!-- header start-->
        @include('layouts.header')
        <!-- header end-->

        <!-- login start-->
        @yield('admin-login')
        <!-- login end-->

        <!-- contact-us start-->
        @yield('contact-us')
        <!-- contact-us end-->

        <!-- slider-main-area start-->
        @yield('slider')
        <!-- slider-main-area end-->

        <!-- product-area start -->
        @yield('product-area-1')
        <!-- product-area end -->

        <!-- provide-section start  -->
        @yield('provide-section')
        <!-- provide-section end -->

        <!-- single-product start -->
        @yield('single-product')
        <!-- single-product end -->

        <!-- product-area start -->
        @yield('product-area-2')
        <!-- product-area end -->

        <!-- weekly-flash-wrapper start -->
        @yield('weekly-flash-wrapper')
        <!-- weekly-flash-wrapper end -->

        <!-- our-blog-area-1 start -->
        @yield('our-blog-area-1')
        <!-- our-blog-area-1 end -->

        <!-- our-brand-area-2 start -->
        @yield('our-blog-area-2')
        <!-- our-brand-area-2 end -->

        <!-- blog start-->
        @yield('blog')
        <!-- blog end-->

        <!-- footer-area start -->
        @include('layouts.footer')
        <!-- footer-area end -->

    </div>

    @include('layouts.script')

</body>

</html>
