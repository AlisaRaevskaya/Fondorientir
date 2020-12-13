@extends('admin.layout')
@section('content')

    <div id="layoutSidenav_content">
        <main>
            <div class="content-wrapper admin-container" style="margin-bottom:50px;">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="padding-top:10px;">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12 col-md-11">
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
                        <div class="col-md-11">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Редактировать проект
                                    </h3>
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">

                                    <div class="box-header with-border">
                                        {{-- @include('admin.errors')
                                        --}}
                                    </div>
                                    <div class="box-body col-md-10">
                                        {{ Form::open(['route' => ['admin.forprojects.update', $project->id], 'method' => 'PUT', 'files' => true]) }}
                                        @csrf
                                        <div class="form-group">
                                            {{ Form::label('term', 'Период выполнения') }}
                                            {{ Form::text('term', $project->term, ['class' => 'form-control required']) }}
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('name', 'Наименование проекта') }}
                                            {{ Form::textArea('name', $project->name, ['class' => 'form-control required summernote']) }}
                                        </div>

                                        @if (session()->has('project_message'))
                                            <div class="alert alert-success">
                                                {{ session()->get('project_message') }}
                                            </div>
                                        @endif
                                        <div class="box-footer">
                                            <div>
                                                <a href="{{ route('admin.projects.edit', 13) }}" class="btn btn-default"><i
                                                        class="fas fa-caret-left"></i> К проектам</a>

                                                <button class="btn btn-primary pull-right ml20" style="margin-left:20px;"><i
                                                        class="fa fa-save"></i>
                                                    Сохранить</button>

                                                <a href="{{ route('admin.forprojects.show', $project->id) }}"
                                                    class="btn btn-warning pull-right"> <i class="fas fa-folder"></i>
                                                    Просмотр</a>
                                            </div>
                                        </div>
                                        {{ Form::close() }}
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.col-->
                    </div>
                </section>
            </div>
        </main>
    </div>
@endsection
