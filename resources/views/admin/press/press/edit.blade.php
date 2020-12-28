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
                                    <li class="breadcrumb-item"><a href="{{ route('admin.press.index') }}">Новости</a>
                                    </li>
                                    <li class="breadcrumb-item active">СМИ о нас/{{ $news->id }}</li>
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
                                        Редактировать новость
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
                                                {{ Form::open(['route' => ['admin.press.update', $news->id], 'method' => 'PUT', 'files' => true]) }}
                                                <div class="form-group">
                                                    {{ Form::label('title', 'Название') }}
                                                    {{ Form::text('title', $news->title, ['class' => 'form-control required']) }}
                                                </div>

                                                <div class="form-group">
                                                    {{ Form::label('intro', 'Intro') }}
                                                    {{ Form::text('intro', $news->intro, ['class' => 'form-control summernote_news']) }}
                                                </div>

                                                <div class="form-group">
                                                    {{ Form::label('image', 'Картинка') }}
                                                    {{ Form::file('image') }}
                                                    @if (isset($news->image))
                                                        <p>
                                                            <img src="/storage/news/{{ $news->image }}"
                                                                {{-- <img class="image"
                                                                src="{{ $news->getImageMini() }}"
                                                                --}}
                                                                alt="{{ $news->laravel_name }}" title="{{ $news->title }}"
                                                                style="width: 200px">
                                                        </p>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('body', 'Текст 2') }}
                                                    {{ Form::textArea('body', $news->body, ['class' => 'form-control summernote_news']) }}
                                                </div>
                                                {{-- <div class="form-group">
                                                    {{ Form::label('source_name', 'Источник') }}
                                                    {{ Form::text('source_name', $news->source_name, ['class' => 'form-control required']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('source_link', 'Ссылка') }}
                                                    {{ Form::text('source_link', $news->source_link, ['class' => 'form-control required']) }}
                                                </div> --}}

                                                <div class="form-group">
                                                    {{ Form::label('dateline', 'Дата публикации') }}
                                                    {{ Form::text('dateline', $news->dateline, ['class' => 'form-control required']) }}
                                                </div>
                                                @if (session()->has('message'))
                                                    <div class="alert alert-success">
                                                        {{ session()->get('message') }}
                                                    </div>
                                                @endif
                                                <div class="box-footer">
                                                    <div class="">
                                                        <a href="{{ url()->previous() }}" class="btn btn-default">Назад</a>
                                                        <button class="btn btn-primary pull-right"
                                                            style="margin-left:20px;">Сохранить</button>

                                                        <a href="{{ route('admin.news.show', $news->id) }}"
                                                            class="btn btn-warning pull-right">Просмотр</a>
                                                    </div>
                                                </div>
                                                {{ Form::close() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col-->
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
@endsection
