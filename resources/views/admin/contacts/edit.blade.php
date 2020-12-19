@extends('admin.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper container">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-md-1"></div>
                    <div class="col-sm-10">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.contacts.index') }}">Меню</a></li>
                            <li class="breadcrumb-item active">Инфо о компании</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                Редактировать данные о компании
                            </h3>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body" style="margin-bottom:15px;">

                            <div class="box">
                                <div class="box-header with-border">
                                    {{-- @include('admin.errors')
                                    --}}
                                </div>

                                <div class="box-body">
                                    <div class="col-md-10">

                                        {{ Form::open(['route' => ['admin.company-info.update', $contact->id], 'method' => 'PUT', 'files' => true]) }}

                                        @if (session()->has('message'))
                                            <div class="alert alert-success">
                                                {{ session()->get('message') }}
                                            </div>
                                        @endif
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
                                                {{ Form::label('phone', 'Телефон') }}
                                                {{ Form::text('phone', $contact->phone, ['class' => 'form-control required']) }}
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
                                                {{ Form::label('logo', 'Лого') }}
                                                {{ Form::file('logo') }}
                                                @if (isset($contact->logo))
                                                    <br>
                                                    <p>
                                                        <img class="image" src="/assets/images/{{ $contact->logo }}"
                                                            alt="{{ $contact->logo }}" style="width: 200px">
                                                    </p>
                                                @endif
                                            </div>
                                            <div class="box-footer">
                                                <div class="">
                                                    <a href="{{ route('admin.company-info.index') }}"
                                                        class="btn btn-default">
                                                        <i class="fas fa-caret-left"></i>
                                                        Назад</a>


                                                    <button class="btn btn-primary pull-right" style="margin-left:20px;"><i
                                                            class='fa fa-save'></i>
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
            </div>
        </section>

    </div>
@endsection
