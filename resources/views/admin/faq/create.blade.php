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
                                    <li class="breadcrumb-item"><a href="{{ route('admin.pages.index') }}">Страницы</a></li>
                                    <li class="breadcrumb-item active"><a
                                            href="{{ route('admin.faq.edit', 6) }}">Вопросы-ответы</a> / Добавить вопрос
                                    </li>
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
                                        Добавить вопрос-ответ
                                    </h3>
                                </div>

                                <div class="card-body">
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

                                        <div class="box-body" id="content">
                                            <div style="margin-top:15px;">
                                                <div class="col-md-11">
                                                    {{ Form::open(['route' => 'admin.faq-page.store', 'files' => true]) }}
                                                    <div class="col-md-11 justify-content-center">

                                                        <div class="form-group">
                                                            {{ Form::label('title', 'Вопрос') }}
                                                            {{ Form::text('title', '', ['class' => 'form-control required']) }}
                                                        </div>
                                                        <div class="form-group">
                                                            {{ Form::label('intro', 'Intro(краткое содержание)') }}
                                                            {{ Form::textArea('intro', '', ['class' => 'form-control summernote']) }}
                                                        </div>
                                                        <div class="form-group">
                                                            {{ Form::label('body', 'Ответ') }}
                                                            {{ Form::textArea('body', '', ['class' => 'form-control summernote']) }}
                                                        </div>
                                                        <div class="form-group">
                                                            {{ Form::label('date_published', 'Дата публикации') }}
                                                            {{ Form::datetimeLocal('date_published', '', ['class' => 'form-control required']) }}
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
                                                                style="margin-left:20px;"><i class="fas fa-save"></i>
                                                                Добавить</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{ Form::close() }}
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
