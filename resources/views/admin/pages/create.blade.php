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
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active">Страницы</li>
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
                                        Добавить страницу
                                    </h3>
                                </div>
                                <!-- Main content -->

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
                                            <div style="margin-top:15px;">
                                                <div class="col-md-11">
                                                    {{ Form::open(['route' => 'admin.pages.store', 'files' => true]) }}
                                                    <div class="col-md-11 justify-content-center">

                                                        <div class="form-group">
                                                            {{ Form::label('title', 'Название') }}
                                                            {{ Form::text('title', '', ['class' => 'form-control required']) }}
                                                        </div>
                                                        <div class="form-group">
                                                            {{ Form::label('content', 'Текст') }}
                                                            {{ Form::textArea('content', '', ['class' => 'form-control summernote']) }}
                                                        </div>
                                                        <div class="form-group">
                                                            <p style="color: tomato;">В URL могут присутствовать только
                                                                буквы и
                                                                цифры латинского алфавита.Пробелы заменяются на "_" или "-"
                                                                тире. Знаки препинания должны отсутствовать.
                                                                Пример:while-we-put-off-life-it-passes
                                                            </p>
                                                            {{ Form::label('url', 'URL') }}
                                                            {{ Form::text('url', '', ['class' => 'form-control']) }}
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    {{ Form::label('published', 'Опубликовать') }}
                                                                    {{ Form::select('published', [0 => 'Нет', 1 => 'Да'], 1) }}
                                                                </div>
                                                                <div class="form-group">
                                                                    {{ Form::label('is_menu', 'Добавить в меню основной страницы') }}
                                                                    {{ Form::select('is_menu', [0 => 'Нет', 1 => 'Да'], 0) }}
                                                                </div>
                                                                <div class="form-group">
                                                                    {{ Form::label('parent_id', 'Добавить в категорию меню') }}
                                                                    {{ Form::select('parent_id', ['0' => '', '2' => 'Фонд', '3' => 'Центр Поддержки', '4' => 'Новости', '5' => 'Пресса', '6' => 'Инфоцентр'], null) }}
                                                                </div>
                                                                <div class="form-group">
                                                                    {{ Form::label('sort_order', 'Сортировка') }}
                                                                    {{ Form::text('sort_order', 10, ['class' => 'form-control', 'style' => 'width:200px;']) }}
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    {{ Form::label('is_second_menu', 'Добавить в меню "Центр Поддежки"') }}
                                                                    {{ Form::select('is_second_menu', [0 => 'Нет', 1 => 'Да'], 0) }}
                                                                </div>
                                                                <div class="form-group">
                                                                    {{ Form::label('SecondSort', 'Сортировка в меню "Центр Поддежки"') }}
                                                                    {{ Form::text('SecondSort', 10, ['class' => 'form-control', 'style' => 'width:200px;']) }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @if (session()->has('message'))
                                                            <div class="alert alert-success">
                                                                {{ session()->get('message') }}
                                                            </div>
                                                        @endif
                                                        <div class="box-footer">
                                                            <a href="{{ url()->previous() }}" class="btn btn-default "><i
                                                                    class="fas fa-caret-left"></i> Назад</a>

                                                            <button class="btn btn-primary pull-right"
                                                                style="margin-left:20px;">Сохранить</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="box-body tab-pane" id="seo">
                                            <div style="margin-top:15px;">
                                                <div class="col-md-11">
                                                    <div class="form-group">
                                                        {{ Form::label('name', 'Название (для админки)') }}
                                                        {{ Form::text('name', '', ['class' => 'form-control required m30']) }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('seo_title', 'Title') }}
                                                        {{ Form::text('seo_title', '', ['class' => 'form-control required']) }}
                                                        <i>Заголовок конкретной страницы</i>
                                                    </div>
                                                    <div class="form-group required">
                                                        {{ Form::label('description', 'Description') }}
                                                        {{ Form::text('description', '', ['class' => 'form-control']) }}
                                                        <i>Описание конкретной страницы</i>
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('keywords', 'Keywords') }}
                                                        {{ Form::text('keywords', '', ['class' => 'form-control required']) }}
                                                        <i>Ключевые слова</i>
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('og_title', 'og:Title') }}
                                                        {{ Form::text('og_title', '', ['class' => 'form-control']) }}
                                                        <i>заголовок страницы. Для него есть ограничение в 65 символов.
                                                            Напишите
                                                            что-то длиннее – текст будет обрезан.</i>
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('og_description', 'og:Description') }}
                                                        {{ Form::text('og_description', '', ['class' => 'form-control']) }}
                                                        <i>краткое описание страницы длиной не более 300 символов.</i>
                                                        <i></i>
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
