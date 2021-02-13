<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
    @if (is_object($seo))
        <meta name="description" content="{!!  $seo->description ? $seo->description : 'Фонд " ОРИЕНТИР"-приемная по
            вопросам миграции и трудовым спорам' !!}">
        <meta name="keywords" content="{!!  $seo->keywords !!}/">
        <meta property="og:title" content="{!!  $seo->seo_title !!}/" />
        <meta property="og:description" content="{!!  $seo->description !!}/">
        <meta property="og:image" content="{{ asset('storage/logo.png') }}" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="{!!  config('app.url') !!}/" />
        <meta property="og:site_name" content="{!!  config('app.name') !!}/" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{!! $seo->seo_title !!}</title>
    @else
        <meta name="description" content="Фонд Ориентир">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="keywords" content="Фонд Ориентир/">
        <meta property="og:type" content="article" />
        <title>Фонд "Ориентир"</title>
    @endif
<link rel="shortcut icon" href="/public/assets/images/favicon.ico" type="image/x-icon">
   <link href="/public/assets/css/fonts.css" rel="stylesheet">
    <link href="/public/assets/css/main.css" rel="stylesheet">
 
    <link href="/public/assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="/public/assets/fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
    <!-- Mobile Menu Style -->

    <link href="/public/assets/css/mobile-menu.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/public/assets/css/owl.theme.default.min.css">

    <link href="/public/assets/css/style.css" rel="stylesheet">

    <script src="/public/assets/js/jquery-3.5.1.min.js"></script>
    <script src="/public/assets/js/bootstrap.min.js"></script>
    @if (is_object($page))
        @if ($page->id = 1)
            <script src="/public/assets/js/owl.carousel.min.js"></script>
        @endif
    @endif
    <script src="https://api-maps.yandex.ru/2.1/?apikey=a43ed7b6-cb6c-4d15-b403-9ba8685214e4&lang=ru_RU"
        type="text/javascript">
    </script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar">
    @include('forms.call')

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
    <script src="/public/assets/js/mobile-menu.js"></script>

    <!-- All Scripts -->
    <script src="/public/assets/js/index.js"></script>
    <script src="/public/assets/js/script.js"></script>
    <script src="/public/assets/js/ajax/call-ajax.js"></script>
    <script src="/public/assets/js/ajax/reception-ajax.js"></script>
    <script src="/public/assets/js/ajax/sidebar-ajax.js"></script>
    <script src="/public/assets/js/ajax/lawyer-ajax.js"></script>
    <script src="/public/assets/js/ajax/faq-ajax.js"></script>
    <script src="/public/assets/js/slider.js"></script>
</body>

</html>
