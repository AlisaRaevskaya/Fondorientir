@extends('admin.layout')
@section('content')

    <div id="layoutSidenav_content">
        <main>
            <div class="content-wrapper admin-container" style="margin-bottom:50px;">
                <section class="content-header" style="padding-top:10px;">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12 col-md-10">
                                <ol class="breadcrumb float-sm-right ">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.pages.index') }}">Страницы</a></li>
                                    <li class="breadcrumb-item active"><a href="{{ route('admin.projects.edit', 13) }}">К
                                            проектам</a></li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Добавить проект</h3>
                                </div>
                                <div class="card-body">

                                    <div class="box-body">
                                        <div class="">
                                            {{ Form::open(['route' => ['admin.forprojects.store'], 'method' => 'post', 'files' => false]) }}
                                            @csrf
                                            <div class="form-group">
                                                {{ Form::label('term', 'Сроки оказания услуг или выполнения работ') }}
                                                {{ Form::text('term', '', ['class' => 'form-control required']) }}
                                            </div>

                                            <div class="form-group">
                                                {{ Form::label('name', 'Наименование и адрес заказчика') }}
                                                {{ Form::textArea('name', '', ['class' => 'form-control summernote required']) }}
                                            </div>

                                            @if (session()->has('project_message'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('project_message') }}
                                                </div>
                                            @endif
                                            <div class="box-footer">
                                                <div><a href="{{ url()->previous() }}" class="btn btn-default "><i
                                                            class="fas fa-caret-left"></i> Назад</a>
                                                </div>

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
                </section>
            </div>
        </main>
    </div>
@endsection
