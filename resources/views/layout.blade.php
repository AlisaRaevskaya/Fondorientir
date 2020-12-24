<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
    @if (is_object($seo))
        <meta name="description" content="{{ $seo->description ? $seo->description : '__(E-Mail Address)' }}">
        <meta name="keywords" content="{{ $seo->keywords }}/">
        <meta property="og:title" content="{{ $seo->seo_title }}/" />
        <meta property="og:description" content="{{ $seo->description }}/">
        <meta property="og:image" content="{{ asset('storage/logo.png') }}" />
        <meta property="og:type" content="article" />
        {{--
        <meta property="og:url" content="{{ config('app.url') }}/" />
        <meta property="og:site_name" content="{{ config('app.name') }}/" /> --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ $seo->seo_title }}</title>
    @else
        <meta name="description" content="Фонд Ориентир">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="keywords" content="мигранты/">
        <title>Фонд "Ориентир"</title>
    @endif


    <link href="/assets/css/main.css" rel="stylesheet">
    <link href="/assets/css/fonts.css" rel="stylesheet">
    <link rel="shortcut icon" href="/assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="/assets/fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
    <!-- Mobile Menu Style -->

    <link href="/assets/css/mobile-menu.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">

    <link href="/assets/css/style.css" rel="stylesheet">

    <script src="/assets/js/jquery-3.5.1.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=a43ed7b6-cb6c-4d15-b403-9ba8685214e4&lang=ru_RU"
        type="text/javascript">
    </script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar">
    @include('blocks.call')

    @include('forms.popup')
    <div id="main-wrapper">
        <div class="uc-mobile-menu-pusher">
            <div class="content-wrapper">
                <div class="main_container">
                    @include('layouts.header')

                    @yield('content')

                    @include('blocks.pre_footer')
                    @include('layouts.footer')
                </div>
            </div>
        </div>

        <div class="uc-mobile-menu uc-mobile-menu-effect">
            @include('layouts.mobile')
        </div>
        @include('blocks.map')

    </div>

    <!-- Theme Menu -->
    <script src="/assets/js/mobile-menu.js"></script>

    <!-- Theme Script -->
    <script src="/assets/js/index.js"></script>
    <script src="/assets/js/script.js"></script>
    <script src="/assets/js/ajax/call-ajax.js"></script>
    <script src="/assets/js/ajax/problem-ajax.js"></script>
    <script src="/assets/js/ajax/reception-ajax.js"></script>
    <script src="/assets/js/ajax/sidebar-ajax.js"></script>
    <script src="/assets/js/ajax/claim-ajax.js"></script>
    <script src="/assets/js/ajax/application-ajax.js"></script>
    <script src="/assets/js/ajax/lawyer-ajax.js"></script>
    <script src="/assets/js/slider.js"></script>

</body>

</html>
