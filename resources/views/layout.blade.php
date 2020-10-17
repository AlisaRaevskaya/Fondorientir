<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="№" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Фонд поддержки добровольного переселения соотечественников</title>

    <!-- favicon -->
    <link href="/assets/img/favicon.png" rel=icon>

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


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" class="container" data-target=".navbar">

    @include('preloader')

    @include('layouts.header')
<div class="container">
    @include('blocks.popup')
</div>

<div class="container">
<div class="row">
<div class="col-4">
        @include('layouts.sidebar')
        </div>

    <div class="col-8">
        @yield('content')
    </div>
</div>
</div>




    @include('layouts.footer')


<!-- #main-wrapper -->

<!-- jquery Core-->
<script src="/assets/js/jquery-2.1.4.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>

<!-- Theme Menu -->
<script src="/assets/js/mobile-menu.js"></script>

<!-- Owl carousel -->
<script src="/assets/js/owl.carousel.min.js"></script>

<!-- Theme Script -->
<script src="/assets/js/script.js"></script>
<script src="/assets/js/new.js"></script>
<script src="/assets/js/ajax.js"></script>
</body>
</html>
