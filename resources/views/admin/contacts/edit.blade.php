@extends('admin.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper container">
        <!-- Content Header (Page header) -->
        @foreach ($contact as $item)
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">

                        <div class="col-sm-12">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                                <li class="breadcrumb-item active">Инфо о компании</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-11 container">
                        <div class="card card-outline card-info">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Редактировать статью
                                </h3>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">

                                <div class="box">

                                    <div class="box-header with-border">
                                        {{-- @include('admin.errors')
                                        --}}
                                    </div>

                                    <div class="box-body">
                                        <div class="col-md-11">
                                            {{ Form::open(['route' => ['admin.contacts.update', $item->id], 'method' => 'PUT', 'files' => true]) }}

                                            @if (session()->has('message'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('message') }}
                                                </div>
                                            @endif
                                            <div class="box-footer">
                                                <div class="form-group">
                                                    {{ Form::label('name', 'Название') }}
                                                    {{ Form::text('name', $item->name, ['class' => 'form-control required']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('eng_name', 'Название на английском') }}
                                                    {{ Form::text('eng_name', $item->eng_name, ['class' => 'form-control required']) }}
                                                </div>

                                                <div class="form-group">
                                                    {{ Form::label('inn', 'ИНН') }}
                                                    {{ Form::number('inn', $item->inn, ['class' => 'form-control required']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('city', 'Город') }}
                                                    {{ Form::text('city', $item->city, ['class' => 'form-control required']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('street', 'Адрес') }}
                                                    {{ Form::text('street', $item->street, ['class' => 'form-control required']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('station', 'Остановка') }}
                                                    {{ Form::text('station', $item->station, ['class' => 'form-control required']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('bus', 'Автобус') }}
                                                    {{ Form::text('bus', $item->bus, ['class' => 'form-control required']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('routes', 'Маршрутка') }}
                                                    {{ Form::text('routes', $item->routes, ['class' => 'form-control required']) }}
                                                </div>

                                                <div class="form-group">
                                                    {{ Form::label('metro', 'Метро') }}
                                                    {{ Form::text('metro', $item->metro, ['class' => 'form-control required']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('email', 'Email') }}
                                                    {{ Form::text('email', $item->email, ['class' => 'form-control required']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('phone', 'Телефон') }}
                                                    {{ Form::text('phone', $item->phone, ['class' => 'form-control required']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('web', 'Сайт') }}
                                                    {{ Form::text('web', $item->web, ['class' => 'form-control required']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('hours', 'Часы работы') }}
                                                    {{ Form::text('hours', $item->hours, ['class' => 'form-control required']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('logo', 'Лого') }}
                                                    {{ Form::file('logo') }}
                                                    @if (isset($item->logo))
                                                    <br>
                                                        <p>
                                                            <img class="image" src="/assets/images/{{ $item->logo }}"
                                                                alt="{{ $item->logo }}" style="width: 200px">
                                                        </p>
                                                    @endif
                                                </div>
<div class="box-footer">
                                                    <div class="">
                                                        <a href="{{ url()->previous() }}" class="btn btn-default">Назад</a>

                                                        <button class="btn btn-primary pull-right"
                                                            style="margin-left:20px;">Сохранить</button>
                                                    </div>
                                                </div>

                                            {{ Form::close() }}
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col-->
                            </div>
                        </div>
                    </div>
            </section>
            <!-- /.content -->
        @endforeach
    </div>
    <!-- /.content-wrapper -->

@endsection
