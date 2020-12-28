@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->

    <div id="layoutSidenav_content">
        <main>
            <div class="content-wrapper container mb50">
                <section class="content-header pt10">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12 col-md-11" style="margin-left:1rem;">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.news.index') }}">Новости</a></li>
                                    <li class="breadcrumb-item active">Добавить новость</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->

                <section class="content">
                    <div class="row">
                        <div class="col-md-11" style="margin-left:1rem;">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Добавить новость
                                    </h3>
                                </div>
                                <!-- Main content -->

                                <div class="card-body">

                                    <!-- Default box -->
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

                                    </div>
                                    <div class="box-body">
                                        {{ Form::open(['route' => 'admin.news.store', 'files' => true]) }}
                                        <div class="col-md-11 justify-content-center">
                                            <div class="form-group">
                                                {{ Form::label('title', 'Заголовок') }}
                                                {{ Form::text('title', '', ['class' => 'form-control required']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('intro', 'Intro') }}
                                                {{ Form::text('intro', '', ['class' => 'form-control']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('image', '') }}
                                                {{ Form::file('image') }}
                                                @if (isset($item->image))
                                                    <p>
                                                        <img src="/storage/news/{{ $item->image }}"
                                                            alt="{{ $item->laravel_name }}" title="{{ $item->title }}"
                                                            style="width: 200px">
                                                    </p>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('body', 'Текст') }}
                                                {{ Form::textArea('body', '', ['class' => 'form-control summernote_news']) }}
                                            </div>
                                            {{-- <div class="form-group">
                                                {{ Form::label('source_name', 'Источник') }}
                                                {{ Form::text('source_name', '', ['class' => 'form-control required']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('source_link', 'Ссылка') }}
                                                {{ Form::text('source_link', '', ['class' => 'form-control required']) }}
                                            </div> --}}

                                            <div class="form-group">
                                                {{ Form::label('dateline', 'Дата публикации') }}
                                                {{ Form::date('dateline', '', ['class' => 'form-control required']) }}
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
