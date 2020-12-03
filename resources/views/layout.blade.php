<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
    <meta name="keywords" content="№" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Фонд поддержки добровольного переселения соотечественников</title>

    <!-- favicon -->
    <!-- <link href="/assets/images/favicon.ico" rel=icon> -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">

    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">


    <!-- font-awesome -->
    <link href="/assets/fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
    <!-- Mobile Menu Style -->
    <link href="/assets/css/mobile-menu.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">

    <!-- Owl carousel -->
    <link href="/assets/css/owl.carousel.css" rel="stylesheet">
    <link href="/assets/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- Theme Style -->
    <link href="/assets/css/style.css" rel="stylesheet">

    <script src="/assets/js/jquery-3.5.1.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>

    <script src="https://api-maps.yandex.ru/2.1/?apikey=a43ed7b6-cb6c-4d15-b403-9ba8685214e4&lang=ru_RU"
        type="text/javascript">
    </script>

    {{-- <script
        src="https://www.google.com/recaptcha/api.js?render=6LedE94ZAAAAAOf6iuTtMNxzWxMKX18zub2NWPUg"></script>
    --}}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar">
    <div id="main-wrapper">
        <div class="uc-mobile-menu-pusher">
            <div class="content-wrapper">
                @include('layouts.header')

                @yield('content')

                @include('layouts.footer')

            </div>
        </div>

        <div class="uc-mobile-menu uc-mobile-menu-effect">
            @include('layouts.mobile')
        </div>
        @include('blocks.map')
        @include('blocks.call')

    </div>

    <!-- Theme Menu -->
    <script src="/assets/js/mobile-menu.js"></script>

    <!-- Owl carousel -->
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/summernote.js"></script>



    <!-- Theme Script -->
    <script src="/assets/js/index.js"></script>
    <script src="/assets/js/script.js"></script>
    <script src="/assets/js/ajax/call-ajax.js"></script>
    <script src="/assets/js/ajax/problem-ajax.js"></script>
    <script src="/assets/js/ajax/reception-ajax.js"></script>
    <script src="/assets/js/ajax/claim-ajax.js"></script>
    <script src="/assets/js/ajax/application-ajax.js"></script>
    <script src="/assets/js/ajax/lawyer-ajax.js"></script>
</body>

</html>
