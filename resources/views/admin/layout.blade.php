<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="#">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Административный кабинет</title>

    <link href="/assets/css/admin-styles.css" rel="stylesheet" />

    <link href="/assets/summernote/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="/assets/js/jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous">
    </script>

</head>

<body class="sb-nav-fixed">

    @include('admin.header')

    <div id="layoutSidenav">
        @include('admin.sidebar')
        @yield('content')
    </div>

    {{-- //style="margin-top:50pt" --}}

    {{-- @include('admin.footer') --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    {{-- <script src="/assets/js/admin-scripts.js"></script>

    <script src="/assets/demo/js/chart-area-demo.js"></script>
    <script src="/assets/demo/js/chart-bar-demo.js"></script> --}}
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    {{-- <script src="/assets/demo/js/datatables-demo.js"></script>
    --}}

    <script src="/assets/summernote/summernote.min.js"></script>
    <script src="/assets/summernote/lang/summernote-ru-RU.js"></script>
    <script src="/assets/js/summernote.js"></script>
</body>

</html>
