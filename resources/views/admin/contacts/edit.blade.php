@extends('admin.layout')
@section('content')

    <div id="layoutSidenav_content">
        <main>
            <div class="content-wrapper admin-container mb50">
                <!-- Content Header (Page header) -->
                <section class="content-header pt10">
                    <div class="container-fluid">
                        <div class="row mb-2">

                            <div class="col-sm-12 col-md-11 ml1">
                                <ol class="breadcrumb float-sm-right ">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.pages.index') }}">Страницы</a></li>
                                    <li class="breadcrumb-item active">Редактировать информацию о компании</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-11 ml1">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Редактировать информацию
                                    </h3>
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">

                                    <div class="box">

                                        <div class="box-header with-border">
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>

                                        <div class="box-body">
                                            <div class="col-md-11">
                                                {{ Form::open(['route' => ['admin.company-info.update', $contact->id], 'method' => 'PUT', 'files' => true]) }}
                                                @csrf
                                                <div style="margin: 0 15px;">
                                                    <div class="form-group">
                                                        {{ Form::label('name', 'Название') }}
                                                        {{ Form::text('name', $contact->name, ['class' => 'form-control required']) }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('eng_name', 'Название на английском') }}
                                                        {{ Form::text('eng_name', $contact->eng_name, ['class' => 'form-control required']) }}
                                                    </div>

                                                    <div class="form-group">
                                                        {{ Form::label('inn', 'ИНН') }}
                                                        {{ Form::number('inn', $contact->inn, ['class' => 'form-control required']) }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('city', 'Город') }}
                                                        {{ Form::text('city', $contact->city, ['class' => 'form-control required']) }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('street', 'Адрес') }}
                                                        {{ Form::text('street', $contact->street, ['class' => 'form-control required']) }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('station', 'Остановка') }}
                                                        {{ Form::text('station', $contact->station, ['class' => 'form-control required']) }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('bus', 'Автобус') }}
                                                        {{ Form::text('bus', $contact->bus, ['class' => 'form-control required']) }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('routes', 'Маршрутка') }}
                                                        {{ Form::text('routes', $contact->routes, ['class' => 'form-control required']) }}
                                                    </div>

                                                    <div class="form-group">
                                                        {{ Form::label('metro', 'Метро') }}
                                                        {{ Form::text('metro', $contact->metro, ['class' => 'form-control required']) }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('email', 'Email') }}
                                                        {{ Form::text('email', $contact->email, ['class' => 'form-control required']) }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('phone', 'Телефон №1') }}
                                                        {{ Form::text('phone', $contact->phone, ['class' => 'form-control required']) }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('phone2', 'Телефон №2') }}
                                                        {{ Form::text('phone2', $contact->phone2, ['class' => 'form-control required']) }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('phone_rus', 'Телефон "Вся Россия"') }}
                                                        {{ Form::text('phone_rus', $contact->phone_rus, ['class' => 'form-control required']) }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('web', 'Сайт') }}
                                                        {{ Form::text('web', $contact->web, ['class' => 'form-control required']) }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('hours', 'Часы работы') }}
                                                        {{ Form::text('hours', $contact->hours, ['class' => 'form-control required']) }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('fb_link', 'Фейсбук') }}
                                                        {{ Form::text('fb_link', $contact->fb_link, ['class' => 'form-control required']) }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('vk_link', 'Вконтакте') }}
                                                        {{ Form::text('vk_link', $contact->fb_link, ['class' => 'form-control required']) }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('inst_link', 'Instagram') }}
                                                        {{ Form::text('inst_link', $contact->inst_link, ['class' => 'form-control required']) }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('logo', 'Основной Лого') }}
                                                        {{ Form::file('logo') }}
                                                        @if (isset($contact->logo))
                                                            <br>
                                                            <p>
                                                                <img class="image" src="/storage/{{ $contact->logo }}"
                                                                    alt="{{ $contact->logo }}" style="width: 100px">
                                                            </p>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('logo', 'Лого "Центр поддержки"') }}
                                                        {{ Form::file('logo') }}
                                                        @if (isset($contact->logo2))
                                                            <br>
                                                            <p>
                                                                <img class="image" src="/storage/{{ $contact->logo2 }}"
                                                                    alt="{{ $contact->logo2 }}" style="width: 100px">
                                                            </p>
                                                        @endif
                                                    </div>
                                                </div>
                                                @if (session()->has('message'))
                                                    <div class="alert alert-success">
                                                        {{ session()->get('message') }}
                                                    </div>
                                                @endif
                                                <div>
                                                    <div class="buttons">
                                                        <a href="{{ route('admin.company-info.index') }}"
                                                            class="btn btn-default">
                                                            <i class="fas fa-caret-left"></i>
                                                            Назад</a>

                                                        <button class="btn btn-primary pull-right"
                                                            style="margin-left:20px;"><i class='fa fa-save'></i>
                                                            Сохранить</button>
                                                    </div>
                                                </div>
                                            </div>
                                            {{ Form::close() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
@endsection
