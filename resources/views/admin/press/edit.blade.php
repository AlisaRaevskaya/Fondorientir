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
                                    <li class="breadcrumb-item"><a href="{{ route('admin.press.index') }}">Новости СМИ о
                                            нас</a></li>
                                    <li class="breadcrumb-item active">Редактировать новость / {{ $news->id }}</li>
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
                                                @csrf
                                                <div class="form-group">
                                                    {{ Form::label('title', 'Название') }}
                                                    {{ Form::text('title', $news->title, ['class' => 'form-control required']) }}
                                                </div>

                                                <div class="form-group">
                                                    {{ Form::label('intro', 'Intro(краткое содержание новости)') }}
                                                    {{ Form::textArea('intro', $news->intro, ['class' => 'form-control summernote_news']) }}
                                                </div>

                                                <div class="form-group">
                                                    {{ Form::label('image', 'Добавить картинку (рекомендуемый размер:400x250px).') }}
                                                    {{ Form::file('image') }}
                                                    @if (isset($news->image))
                                                        <p>
                                                            <img src="{{ asset('storage/news/' . $news->image) }}"
                                                                title="{{ $news->title }}" style="width: 200px">
                                                        </p>
                                                    @endif
                                                </div>

                                                <div class="form-group">
                                                    {{ Form::label('body', 'Текст') }}
                                                    {{ Form::textArea('body', $news->body, ['class' => 'form-control summernote_news']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('date_published', 'Дата публикации') }}
                                                    {{ Form::datetime('date_published', $news->date_published, ['class' => 'form-control required']) }}
                                                </div>
                                                {{ Form::hidden('category_id', 3) }}
                                                @if (session()->has('message'))
                                                    <div class="alert alert-success">
                                                        {{ session()->get('message') }}
                                                    </div>
                                                @endif
                                                <div class="box-footer">
                                                    <div class="">
                                                        <a href="{{ url()->previous() }}"
                                                            class="btn btn-outline-secondary"><i class="fas fa-caret-left">
                                                            </i> Назад</a>

                                                        <button class="btn btn-primary pull-right"
                                                            style="margin-left:20px;"><i class="fas fa-save"></i>
                                                            Сохранить</button>

                                                        <a href="{{ route('admin.press.show', $news->id) }}"
                                                            class="btn btn-warning pull-right"><i class="fas fa-folder">
                                                            </i> Просмотр</a>
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
        </main>
    </div>
@endsection
