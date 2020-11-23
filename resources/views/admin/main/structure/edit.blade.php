@extends('admin.layout')
@section('content')

    <div class="content-wrapper container">
        <!-- Content Header (Page header) -->
        @foreach ($pages as $page)
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">

                        <div class="col-sm-12">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/home">Home</a></li>
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
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#content">Контент</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#seo">SEO</a>
                                    </li>
                                </ul>

                                <div class="box tab-content">

                                    <div class="box-header with-border">
                                        {{-- @include('admin.errors')
                                        --}}
                                    </div>

                                    <div class="box-body tab-pane active" id="content">
                                        <div class="" style="margin-top:15px;">
                                            <div class="col-md-12">
                                                {{ Form::open(['route' => ['admin.structure.update', $page->id], 'method' => 'PUT', 'files' => true]) }}
                                                <div class="form-group">
                                                    {{ Form::label('title', 'Название') }}
                                                    {{ Form::text('title', $page->title, ['class' => 'form-control required']) }}
                                                </div>

                                                <div class="form-group">
                                                    {{ Form::label('content', 'Текст') }}
                                                    {{ Form::textArea('content', $page->content, ['class' => 'form-control summernote']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('published', 'Опубликован') }}
                                                    {{ Form::select('published', [0 => 'No', 1 => 'Yes'], $page->published) }}
                                                </div>

                                                <div class="form-group">
                                                    <p style="color: tomato;">В URL могут присутствовать только буквы и
                                                        цифры
                                                        латинского алфавита пробелы замените на "_" нижнее подчеркивание или
                                                        "-"
                                                        тире.
                                                        <br>Знаки препинания должны отсутствовать.Пример:
                                                        while-we-put-off-life-it-passes
                                                    </p>
                                                    {{ Form::label('url', 'URL') }}
                                                    {{ Form::text('url', $page->url, ['class' => 'form-control']) }}
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

                                                        <a href="{{ route('admin.structure.show', $page->id) }}"
                                                            class="btn btn-warning pull-right">Просмотр</a>
                                                    </div>
                                                </div>
                                                {{ Form::close() }}

                                            </div>
                                        </div>
                                    </div>


                                    <div class="box-body tab-pane" id="seo">
                                        <div class="" style="margin-top:15px;">
                                            <div class="col-md-12">
                                                {{ Form::open(['route' => ['admin.seo.update', $page->id], 'method' => 'put', 'files' => true]) }}
                                                <div class="form-group">
                                                    {{ Form::label('name', 'Название (для для админки)') }}
                                                    {{ Form::text('name', $seo->name, ['class' => 'form-control required m30']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('title', 'Title') }}
                                                    {{ Form::text('title', $seo->title, ['class' => 'form-control required']) }}
                                                    <i>Заголовок конкретной страницы</i>
                                                </div>
                                                <div class="form-group required">
                                                    {{ Form::label('description', 'Description') }}
                                                    {{ Form::textArea('description', htmlspecialchars_decode($seo->description, ENT_QUOTES), ['class' => 'form-control']) }}
                                                    <i>Описание конкретной страницы</i>
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('keywords', 'Keywords') }}
                                                    {{ Form::textArea('keywords', htmlspecialchars_decode($seo->keywords, ENT_QUOTES), ['class' => 'form-control required']) }}
                                                    <i>Ключевые слова</i>
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('og_title', 'og:Title') }}
                                                    {{ Form::text('og_title', $seo->og_title, ['class' => 'form-control']) }}
                                                    <i>заголовок страницы. Для него есть ограничение в 65 символов. Напишите
                                                        что-то длиннее – текст будет обрезан.</i>
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('og_description', 'og:Description') }}
                                                    {{ Form::textArea('og_description', htmlspecialchars_decode($seo->og_description, ENT_QUOTES), ['class' => 'form-control']) }}
                                                    <i>краткое описание страницы длиной не более 300 символов.</i>
                                                    <i></i>
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('og_type', 'og:Type') }}
                                                    {{ Form::text('og_type', $seo->og_type, ['class' => 'form-control']) }}
                                                    <i>описывает тип объекта на странице (веб-сайт, блог, книга, фильм и
                                                        т.д.).</i>
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('og_url', 'og:Url') }}
                                                    {{ Form::text('og_url', $seo->og_url, ['class' => 'form-control']) }}
                                                    <i>Uri страницы , без доменного имени пример:
                                                        "services/bukhgalterskiye-konsultatsii" без первого слеша / просто
                                                        слеш актуален только для главной страницы</i>
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('og_site_name', 'og:Site_name') }}
                                                    {{ Form::text('og_site_name', $seo->og_site_name, ['class' => 'form-control']) }}
                                                    <i>название сайта.</i>
                                                </div>
                                                @if (session()->has('seo_message'))
                                                    <div class="alert alert-success">
                                                        {{ session()->get('seo_message') }}
                                                    </div>
                                                @endif
                                                <div class="box-footer">
                                                    <div>
                                                        <button class="btn btn-primary pull-right">Сохранить</button>
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
                </div>
            </section>
            <!-- /.content -->
        @endforeach
    </div>

    <!-- /.content-wrapper -->

@endsection
