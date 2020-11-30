@extends('admin.layout')
@section('content')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">

                            <div class="content-wrapper">
                                <!-- Content Header (Page header) -->
                                <section class="content-header">

                                    <h1>
                                        <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown">
                                            Dear, {{ Auth::user()->name }}
                                        </a>
                                    </h1>
                                    <h2>{{ __('You are logged in!') }}</h2>
                                </section>


                                <!-- Main content -->
                                <section class="content">
                                    <!-- Default box -->
                                    <div class="box">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Главная страница</h3>
                                        </div>
                                        <div class="box-body">
                                            Текст инструкции по пользованию админкой
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-footer">
                                            и здесь есть место для какого-нибудь текста
                                        </div>
                                        <!-- /.box-footer-->
                                    </div>
                                    <!-- /.box -->
                                </section>
                                <!-- /.content -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
