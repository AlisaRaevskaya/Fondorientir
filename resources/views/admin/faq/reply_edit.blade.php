@extends('admin.layout')
@section('content')

    <div id="layoutSidenav_content">
        <main>
            <div class="content-wrapper admin-container" style="margin-bottom:50px;">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="padding-top:10px;">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div>
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-topic">Меню</a>
                                    </li>
                                    <li class="breadcrumb-topic active">Вопрос-ответ</li>
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
                                        Редактировать статью
                                    </h3>
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-topic">
                                            <a class="nav-link active" data-toggle="tab" href="#content">Содержание</a>
                                        </li>
                                        <li class="nav-topic">
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
                                                <div class="col-md-11">
                                                    {{ Form::open(['route' => ['admin.fq.update', $topic->id], 'method' => 'PUT', 'files' => true]) }}
                                                    <div class="form-group">
                                                        {{ Form::label('title', 'Название') }}
                                                        {{ Form::text('title', $topic->title, ['class' => 'form-control required']) }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('intro', 'Intro') }}
                                                        {{ Form::textArea('intro', $topic->intro, ['class' => 'form-control summernote']) }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('image', 'Картинка') }}
                                                        {{ Form::file('image') }}
                                                        @if (isset($topic->image))
                                                            <p>
                                                                <img src="/storage/pages/{{ $topic->image }}"
                                                                    alt="{{ $topic->image}}"
                                                                 style="width: 200px">
                                                            </p>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('body', 'Текст') }}
                                                        {{ Form::textArea('body', $topic->body, ['class' => 'form-control required summernote']) }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('dateline', 'Опубликована') }}
                                                        <p>{{ $topic->dateline }}</p>
                                                        {{ Form::date('dateline', $topic->dateline, ['class' => 'form-control']) }}

                                                    </div>
                                                    @if (session()->has('message'))
                                                        <div class="alert alert-success">
                                                            {{ session()->get('message') }}
                                                        </div>
                                                    @endif
                                                    <div class="box-footer">
                                                        <div class="">
                                                            <a href="{{ url()->previous() }}"
                                                                class="btn btn-secondary">Назад</a>

                                                            <button class="btn btn-primary pull-right"
                                                                style="margin-left:20px;">Сохранить</button>

                                                            <a href="{{ route('admin.fq.show', $topic->id) }}"
                                                                class="btn btn-warning pull-right">Просмотр</a>
                                                        </div>
                                                    </div>
                                                    {{-- {{ Form::close() }}
                                                    --}}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="box-body tab-pane" id="seo">
                                            <div class="" style="margin-top:15px;">
                                                <div class="col-md-11">
                                                    <div class="form-group">
                                                        {{ Form::label('name', 'Название (для админки)') }}
                                                        {{ Form::text('name', $seo->name, ['class' => 'form-control required m30']) }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('seo_title', 'Title') }}
                                                        {{ Form::text('seo_title', $seo->seo_title, ['class' => 'form-control']) }}
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
                                                        <i>заголовок страницы. Для него есть ограничение в 65 символов.
                                                            Напишите
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
                                                            "services/bukhgalterskiye-konsultatsii" без первого слеша /
                                                            просто
                                                            слеш актуален только для главной страницы</i>
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('og_site_name', 'og:Site_name') }}
                                                        {{ Form::text('og_site_name', $seo->og_site_name, ['class' => 'form-control']) }}
                                                        <i>название сайта.</i>
                                                    </div>
                                                    <div><a href="{{ url()->previous() }}"
                                                            class="btn btn-secondary">Назад</a></div>
                                                    {{ Form::close() }}
                                                </div>
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
