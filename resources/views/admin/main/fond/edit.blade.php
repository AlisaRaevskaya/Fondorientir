@extends('admin.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper container">
        <!-- Content Header (Page header) -->
        @foreach ($pages as $page)
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">

                        <div class="col-sm-12">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">{{ $page->title }}</li>
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

                                        <div class="col-md-10">
                                            {{ Form::open(['route' => ['admin.fond.update', $page->id], 'method' => 'PUT', 'files' => true]) }}
                                            <div class="form-group">
                                                {{ Form::label('name', 'Название') }}
                                                {{ Form::text('name', $page->title, ['class' => 'form-control required']) }}
                                            </div>

                                            <div class="form-group">
                                                {{ Form::label('quote', 'Metakeys') }}
                                                {{ Form::text('quote', $page->metakey, ['class' => 'form-control required']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('metadesc', 'Metadesc') }}
                                                {{ Form::text('metadesc', $page->metadesc, ['class' => 'form-control required']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('images', 'Картинка') }}
                                                {{ Form::file('images') }}

                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('text_center', 'Текст') }}
                                                {{ Form::textArea('text_center', $page->content, ['class' => 'form-control summernote']) }}
                                            </div>
                                            {{-- <div class="form-group">
                                                {{ Form::label('activ', 'Опубликован') }}
                                                {{ Form::select('activ', [0 => 'No', 1 => 'Yes'], $page->published) }}
                                            </div>--}}

                                            <div class="form-group">
                                                <p style="color: tomato;">В URL могут присутствовать только буквы и цифры
                                                    латинского алфавита пробелы замените на "_" нижнее подчеркивание или "-"
                                                    тире.
                                                    <br>Знаки припенания должны отсутствовать.
                                                    <br>пример: while-we-put-off-life-it-passes
                                                </p>
                                                {{ Form::label('url', 'URL') }}
                                                {{ Form::text('url', $page->url, ['class' => 'form-control']) }}
                                            </div>
                                            <div class="box-footer">
                                                <div class=""><a href="{{ url()->previous() }}"
                                                        class="btn btn-default">Назад</a></div>
                                                <div class=""><button class="btn btn-primary pull-right">Сохранить</button>
                                                </div>
                                                <div class=""><a href="{{ route('admin.history.show', $page->id) }}"
                                                        class="btn btn-warning pull-right">Просмотр</a></div>

                                            </div>
                                            {{ Form::close() }}

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /.col-->
                        </div>
            </section>
            <!-- /.content -->
        @endforeach
    </div>
    <!-- /.content-wrapper -->

@endsection



