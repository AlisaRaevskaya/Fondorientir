@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper container">
        <!-- Content Header (Page header) -->

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Новости/</li>
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
                        <!-- Main content -->

                        <div class="card-body">

                            <!-- Default box -->
                            <div class="box">
                                {{-- <div class="box-header with-border">
                                    @include('admin.errors')
                                </div> --}}
                                <div class="box-body">
                                    {{ Form::open(['route' => 'admin.news.store', 'files' => true]) }}
                                    <div class="col-md-8">
                                        {{ Form::hidden('user_id', Auth()->user()->id) }}
                                        <div class="form-group">
                                            {{ Form::label('name', 'Название') }}
                                            {{ Form::text('name', '', ['class' => 'form-control required']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('intro', 'Intro') }}
                                            {{ Form::text('intro', '', ['class' => 'form-control required']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('images', 'Картинка') }}
                                            {{ Form::file('images') }}
                                        </div>
                                        {{-- <div class="form-group">
                                            {{ Form::label('text_top', 'Текст 1') }}
                                            {{ Form::textArea('text_top', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('text_center', 'Текст 2') }}
                                            {{ Form::textArea('text_center', '', ['class' => 'form-control']) }}
                                        </div> --}}
                                        <div class="form-group">
                                            {{ Form::label('text_botton', 'Текст 3') }}
                                            {{ Form::textArea('body', '', ['class' => 'form-control summernote']) }}
                                        </div>
                                         <div class="form-group">
                                                {{ Form::label('source_name', 'Источник') }}
                                                {{ Form::text('source_name', '', ['class' => 'form-control required']) }}
                                            </div>
                                             <div class="form-group">
                                                {{ Form::label('source_link', 'Ссылка') }}
                                                {{ Form::text('source_link', '', ['class' => 'form-control required']) }}
                                            </div>

                                        <div class="form-group">
                                            {{ Form::label('activ', 'Активен') }}
                                            {{ Form::select('activ', [0 => 'No', 1 => 'Yes'], 1) }}
                                        </div>
                                        <div class="box-footer row">
                                            <div class=""><a href="{{ url()->previous() }}"
                                                    class="btn btn-default">Назад</a></div>
                                            <div class=""> <a href="{{ route('admin.news.store') }}"
                                                    class="btn btn-primary pull-right">Сохранить</a></div>

                                    </div>

                                </div>

                                {{ Form::close() }}
                            </div>
                            <!-- /.box -->
                        </div>


                    </div>

                    <!-- /.content -->

                </div>

                <!-- /.content -->
            </div>
        </div>
            <!-- /.content-wrapper -->
        @endsection
