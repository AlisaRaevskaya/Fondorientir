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
                                    <li class="breadcrumb-item"><a href="{{ route('admin.pages.index') }}">Страницы</a></li>
                                    <li class="breadcrumb-item active">{{ $page->title }}</li>
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
                                        Редактировать страницу
                                    </h3>
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">

                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#content">Содержание</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#seo">SEO</a>
                                        </li>
                                    </ul>

                                    <div class="box tab-content">

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

                                        <div class="box-body tab-pane active" id="content">
                                            <div class="pt10">
                                                <div class="col-md-11">
                                                    {{ Form::open(['route' => ['admin.useful-info.update', $page->id], 'method' => 'PUT', 'files' => true]) }}
                                                    <div class="form-group">
                                                        {{ Form::label('title', 'Название') }}
                                                        {{ Form::text('title', $page->title, ['class' => 'form-control required']) }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('content', 'Текст') }}
                                                        {{ Form::textArea('content', $page->content, ['class' => 'form-control summernote']) }}
                                                    </div>

                                                    <div class="form-group">
                                                        <p style="color: tomato;">В URL могут присутствовать только буквы и
                                                            цифры латинского алфавита. Пробелы замените на "_" нижнее
                                                            подчеркивание или
                                                            "-" тире.Знаки препинания должны отсутствовать.Пример:
                                                            while-we-put-off-life-it-passes
                                                        </p>
                                                        {{ Form::label('url', 'URL') }}
                                                        {{ Form::text('url', $page->url, ['class' => 'form-control']) }}
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                {{ Form::label('published', 'Опубликована') }}
                                                                {{ Form::select('published', [0 => 'Нет', 1 => 'Да'], $page->published) }}
                                                            </div>
                                                            <div class="form-group">
                                                                {{ Form::label('is_menu', 'Добавить в меню') }}
                                                                {{ Form::select('is_menu', [0 => 'Нет', 1 => 'Да'], $page->is_menu) }}
                                                            </div>
                                                            <div class="form-group">
                                                                {{ Form::label('parent_id', 'Добавить в категорию меню') }}
                                                                {{ Form::select('parent_id', ['0' => '', '2' => 'Фонд', '3' => 'Центр Поддержки', '4' => 'Новости', '5' => 'Пресса', '6' => 'Инфоцентр'], $page->parent_id) }}
                                                            </div>
                                                            <div class="form-group">
                                                                {{ Form::label('sort_order', 'Сортировка') }}
                                                                {{ Form::text('sort_order', 10, ['class' => 'form-control', 'style' => 'width:50px;margin-left:5px;'], $page->sort_order) }}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                {{ Form::label('is_second_menu', 'Добавить в меню "Центр Поддежки"') }}
                                                                {{ Form::select('is_second_menu', [0 => 'Нет', 1 => 'Да'], $page->is_second_menu) }}
                                                            </div>
                                                            <div class="form-group row">
                                                                {{ Form::label('SecondSort', 'Сортировка в меню "Центр Поддежки" ') }}
                                                                {{ Form::text('SecondSort', 10, ['class' => 'form-control', 'style' => 'width:50px;margin-left:1px;'], $page->SecondSort) }}
                                                            </div>
                                                        </div>
                                                    </div>

                                                    @if (session()->has('message'))
                                                        <div class="alert alert-success">
                                                            {{ session()->get('message') }}
                                                        </div>
                                                    @endif
                                                    <div class="box-footer">
                                                        <div class="buttons">
                                                            <a href="{{ route('admin.pages.index') }}"
                                                                class="btn btn-outline-secondary"><i
                                                                    class="fas fa-caret-left">
                                                                </i>Назад</a>

                                                            <button class="btn btn-primary pull-right"
                                                                style="margin-left:20px;"><i class="fas fa-save"></i>
                                                                Сохранить</button>

                                                            <a href="{{ route('admin.main.show', $page->id) }}"
                                                                class="btn btn-warning pull-right">
                                                                <i class="fas fa-folder">
                                                                </i> Просмотр</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="box-body tab-pane" id="seo">
                                            <div class="pt10">
                                                <div class="col-md-11">
                                                    <div class="form-group">
                                                        {{ Form::label('name', 'Название (для админки)') }}
                                                        {{ Form::text('name', $seo->name, ['class' => 'form-control required m30']) }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('title', 'Title') }}
                                                        {{ Form::text('seo_title', $seo->seo_title, ['class' => 'form-control required']) }}
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
