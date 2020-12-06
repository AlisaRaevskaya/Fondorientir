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
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Страницы</li>
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

                            <!-- Default box -->
                            <div class="box tab-content">
                                {{-- <div class="box-header with-border">
                                    @include('admin.errors')
                                </div> --}}
                                <div class="box-body">
                                    <div class="box-body tab-pane active" id="content">
                                        <div class="" style="margin-top:15px;">
                                            <div class="col-md-11">
                                                {{ Form::open(['route' => 'admin.news.store', 'files' => true]) }}
                                                <div class="col-md-11 justify-content-center">

                                                    <div class="form-group">
                                                        {{ Form::label('title', 'Название') }}
                                                        {{ Form::text('title', '', ['class' => 'form-control required']) }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('text_top', 'Текст 1') }}
                                                        {{ Form::textArea('text_top', '', ['class' => 'form-control summernote']) }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('text_center', 'Текст 2') }}
                                                        {{ Form::textArea('text_center', '', ['class' => 'form-control summernote']) }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('content', 'Текст') }}
                                                        {{ Form::textArea('content', '', ['class' => 'form-control summernote']) }}
                                                    </div>

                                                    <div class="form-group">
                                                        {{ Form::label('published', 'Опубликована') }}
                                                        {{ Form::select('published', [0 => 'No', 1 => 'Yes'], 1) }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('is_menu', 'Добавить в меню') }}
                                                        {{ Form::select('is_menu', [0 => 'No', 1 => 'Yes'], 1) }}
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label('parent_id', 'Категрия меню') }}
                                                        {{ Form::select('parent_id', ['2' => 'Фонд', '3' => 'Центр Поддержки', '4' => 'Новости', '5' => 'Пресса', '6' => 'Инфоцентр'], null, ['placeholder' => 'Выберите категорию']) }}
                                                    </div>
                                                    @if (session()->has('message'))
                                                        <div class="alert alert-success">
                                                            {{ session()->get('message') }}
                                                        </div>
                                                    @endif
                                                    <div class="box-footer">
                                                        <div class="">
                                                            <a href="{{ url()->previous() }}"
                                                                class="btn btn-default">Назад</a>

                                                            <button class="btn btn-primary pull-right"
                                                                style="margin-left:20px;">Сохранить</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-body tab-pane" id="seo">
                                        <div class="" style="margin-top:15px;">
                                            <div class="col-md-11">
                                                <div class="form-group">
                                                    {{ Form::label('name', 'Название (для для админки)') }}
                                                    {{ Form::text('name',['class' => 'form-control required m30']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('title', 'Title') }}
                                                    {{ Form::text('title',  ['class' => 'form-control required']) }}
                                                    <i>Заголовок конкретной страницы</i>
                                                </div>
                                                <div class="form-group required">
                                                    {{ Form::label('description', 'Description') }}
                                                    {{ Form::text('description',['class' => 'form-control']) }}
                                                    <i>Описание конкретной страницы</i>
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('keywords', 'Keywords') }}
                                                    {{ Form::text('keywords', ['class' => 'form-control required']) }}
                                                    <i>Ключевые слова</i>
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('og_title', 'og:Title') }}
                                                    {{ Form::text('og_title',['class' => 'form-control']) }}
                                                    <i>заголовок страницы. Для него есть ограничение в 65 символов.
                                                        Напишите
                                                        что-то длиннее – текст будет обрезан.</i>
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('og_description', 'og:Description') }}
                                                    {{ Form::text('og_description', ['class' => 'form-control']) }}
                                                    <i>краткое описание страницы длиной не более 300 символов.</i>
                                                    <i></i>
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('og_type', 'og:Type') }}
                                                    {{ Form::text('og_type',['class' => 'form-control']) }}
                                                    <i>описывает тип объекта на странице (веб-сайт, блог, книга, фильм и
                                                        т.д.).</i>
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('og_url', 'og:Url') }}
                                                    {{ Form::text('og_url',  ['class' => 'form-control']) }}
                                                    <i>Uri страницы , без доменного имени пример:
                                                        "services/bukhgalterskiye-konsultatsii" без первого слеша /
                                                        просто
                                                        слеш актуален только для главной страницы</i>
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('og_site_name', 'og:Site_name') }}
                                                    {{ Form::text('og_site_name', ['class' => 'form-control']) }}
                                                    <i>название сайта.</i>
                                                </div>
                                                <div><a href="{{ url()->previous() }}" class="btn btn-secondary">Назад</a>
                                                </div>
                                                {{ Form::close() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box -->
                            </div>
                        </div>
                    </div>
                    <!-- /.content -->
                </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
@endsection
