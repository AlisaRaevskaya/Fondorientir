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
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.pages.index') }}">Страницы</a></li>
                                    <li class="breadcrumb-item active"><a href="{{ route('admin.projects.edit', 13) }}">К
                                            проектам</a></li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <section class="content">
                    <div class="row">
                        <div class="col-md-11 ml1">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Добавить проект
                                    </h3>
                                </div>
                                <!-- Main content -->

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
                                                {{ Form::open(['route' => ['admin.forprojects.store'], 'method' => 'post', 'files' => false]) }}
                                                @csrf
                                                <div class="form-group">
                                                    {{ Form::label('term', 'Сроки оказания услуг или выполнения работ') }}
                                                    {{ Form::text('term', '', ['class' => 'form-control required']) }}
                                                </div>

                                                <div class="form-group">
                                                    {{ Form::label('name', 'Наименование и адрес заказчика') }}
                                                    {{ Form::textArea('name', '', ['class' => 'required form-control summernote']) }}
                                                </div>

                                                @if (session()->has('project_message'))
                                                    <div class="alert alert-success">
                                                        {{ session()->get('project_message') }}
                                                    </div>
                                                @endif
                                                <div>
                                                    <a href="{{ url()->previous() }}" class="btn btn-default "><i
                                                            class="fas fa-caret-left"></i> Назад</a>


                                                    <button class="btn btn-primary pull-right"><i class="fa fa-save"></i>
                                                        Сохранить</button>
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
        </main>
    </div>
@endsection
