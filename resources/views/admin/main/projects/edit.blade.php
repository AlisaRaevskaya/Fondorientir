@extends('admin.layout')
@section('content')

    <div class="content-wrapper container">
        <!-- Content Header (Page header) -->
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
                                    <a class="nav-link active" data-toggle="tab" href="#content">Содержание</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#seo">SEO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#projects">Проекты</a>
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
                                            {{ Form::open(['route' => ['admin.projects.update', $page->id], 'method' => 'PUT', 'files' => true]) }}
                                            <div class="form-group">
                                                {{ Form::label('title', 'Название') }}
                                                {{ Form::text('title', $page->title, ['class' => 'form-control required']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('content', 'Текст') }}
                                                {{ Form::textArea('content', $page->content, ['class' => 'form-control summernote']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('published', 'Опубликована') }}
                                                {{ Form::select('published', [0 => 'Нет', 1 => 'Да'], $page->published) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('is_menu', 'Добавить в меню') }}
                                                {{ Form::select('is_menu', [0 => 'Нет', 1 => 'Да'], $page->is_menu) }}
                                            </div>

                                            <div class="form-group">
                                                <p style="color: tomato;">В URL могут присутствовать только буквы и
                                                    цифры
                                                    латинского алфавита пробелы замените на "_" нижнее подчеркивание
                                                    или
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
                                                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Назад</a>

                                                    <button class="btn btn-primary pull-right"
                                                        style="margin-left:20px;">Сохранить</button>

                                                    <a href="{{ route('admin.projects.show', $page->id) }}"
                                                        class="btn btn-warning pull-right">Просмотр</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="box-body tab-pane" id="seo">
                                    <div style="margin-top:15px;">
                                        <div class="col-md-11">
                                            <div class="form-group">
                                                {{ Form::label('name', 'Название (для для админки)') }}
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

                                            @if (session()->has('seo_message'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('seo_message') }}
                                                </div>
                                            @endif
                                            <div><a href="{{ url()->previous() }}" class="btn btn-secondary">Назад</a>
                                            </div>
                                            {{ Form::close() }}
                                        </div>
                                    </div>
                                </div>

                                <div class="box-body tab-pane" id="projects">
                                    <div style="margin-top:15px;">
                                        <div class="col-md-12">
                                            <table class="table table-bordered border-top">
                                                <thead>
                                                    <tr style="color:black;font-weight:bold;">
                                                        <th scope="col">№</th>
                                                        <th scope="col">Сроки оказания услуг или выполнения работ
                                                        </th>
                                                        <th scope="col">Наименование и адрес заказчика</th>
                                                        <th scope="col">Наименование услуг или работ, предмет
                                                            контракта
                                                            (договора)</th>
                                                        <th scope="col">Удалить</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($projects as $project)
                                                        {{ Form::open(['route' => ['admin.forprojects.update', $project->id], 'method' => 'PUT', 'files' => true]) }}

                                                        <tr style="color:black;">
                                                            <th scope="row">{{ $project->id }}</th>

                                                            <td class="col-md-3">
                                                                <div class="form-group">
                                                                    {{ Form::text('term', $project->term, ['class' => 'form-control required']) }}
                                                                </div>
                                                            </td>
                                                            <td class="col-md-4">
                                                                <div class="form-group">
                                                                    {{ Form::textArea('name', $project->name, ['class' => 'form-control required summernote']) }}
                                                                </div>
                                                            </td>
                                                            <td class="col-md-5">
                                                                <div class="form-group">
                                                                    {{ Form::textArea('results', $project->results, ['class' => 'form-control summernote']) }}
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <form
                                                                    action="{{ route('admin.forprojects.destroy', $project->id) }}"
                                                                    method="post" class="text-center ull-right">
                                                                    @csrf
                                                                    {{ method_field('DELETE') }}
                                                                    <button type="submit" class="btn btn-warning"><i
                                                                            class="fa fa-trash"></i> Удалить</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            @if (session()->has('message'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('message') }}
                                                </div>
                                            @endif
                                            <div class="box-footer">
                                                <div class="">
                                                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Назад</a>

                                                    <button class="btn btn-primary pull-right"
                                                        style="margin-left:20px;">Сохранить</button>

                                                    <a href="{{ route('admin.forprojects.create') }}"
                                                        class="btn btn-info pull-right">Добавить</a>

                                                    <a href="{{ route('admin.forprojects.show', $project->id) }}"
                                                        class="btn btn-warning pull-right">Просмотр</a>
                                                </div>
                                            </div>
                                            {{ Form::close() }}
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- /.col-->
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- /.content -->
    </div> <!-- /.content-wrapper -->
@endsection
