@extends('admin.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper container">
        <!-- Content Header (Page header) -->
        @foreach ($contacts as $contact)
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">

                        <div class="col-sm-12">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                                <li class="breadcrumb-item active"></li>
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
                                            {{ Form::open(['route' => ['admin.history.update', $contact->id], 'method' => 'PUT', 'files' => true]) }}
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
                                                {{ Form::label('city', 'Название') }}
                                                {{ Form::text('city', $contact->city, ['class' => 'form-control required']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('street', 'Название') }}
                                                {{ Form::text('street', $contact->street, ['class' => 'form-control required']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('station', 'Название') }}
                                                {{ Form::text('station', $contact->station, ['class' => 'form-control required']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('bus', 'Название') }}
                                                {{ Form::text('bus', $contact->bus, ['class' => 'form-control required']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('routes', 'Название') }}
                                                {{ Form::text('routes', $contact->routes, ['class' => 'form-control required']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('metro', 'Название') }}
                                                {{ Form::text('metro', $contact->metro, ['class' => 'form-control required']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('email', 'Название') }}
                                                {{ Form::text('email', $contact->email, ['class' => 'form-control required']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('email', 'Название') }}
                                                {{ Form::text('email', $contact->phone, ['class' => 'form-control required']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('web', 'Название') }}
                                                {{ Form::text('web', $contact->web, ['class' => 'form-control required']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('hours', 'Название') }}
                                                {{ Form::text('hours', $contact->hours, ['class' => 'form-control required']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('logo', 'Текст') }}
                                                {{ Form::file('logo', $contact->logo, ['class' => 'form-control summernote']) }}
                                            </div>


                                            <div class="box-footer">
                                                <div class=""><a href="{{ url()->previous() }}"
                                                        class="btn btn-default">Назад</a></div>
                                                <div class=""><button class="btn btn-primary pull-right">Сохранить</button>
                                                </div>
                                                <div class=""><a href="{{ route('admin.contacts.show', $contact->id) }}"
                                                        class="btn btn-warning pull-right">Просмотр</a></div>

                                            </div>
                                            {{ Form::close() }}

                                            @if (session()->has('message'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('message') }}
                                                </div>
                                            @endif
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
