@extends('admin.layout')
@section('content')

    <!-- Content Wrapper. Contains item content -->
    <div class="content-wrapper container">
        <!-- Content Header (item header) -->
        @foreach ($pressnews as $item)
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">

                        <div class="col-sm-12">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">СМИ о нас{{ $item->id }}</li>
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
                                <div class="box">
                                    <div class="box-header with-border">
                                        {{--
                                        @include('admin.errors')--}}
                                    </div>

                                    <div class="box-body">
                                        <div class="col-md-11">
                                            {{ Form::open(['route' => ['admin.press.update', $item->id], 'method' => 'PUT', 'files' => true]) }}
                                            <div class="form-group">
                                                {{ Form::label('title', 'Название') }}
                                                {{ Form::text('title', $item->title, ['class' => 'form-control required']) }}
                                            </div>

                                            <div class="form-group">
                                                {{ Form::label('intro', 'Intro') }}
                                                {{ Form::text('intro', $item->intro, ['class' => 'form-control summernote']) }}
                                            </div>

                                            <div class="form-group">
                                                {{ Form::label('image', 'Картинка') }}
                                                {{ Form::file('image') }}
                                                @if (isset($item->image))
                                                    <p>
                                                        <img src="/storage/news/{{ $item->image }}"
                                                            {{-- <img class="image"
                                                            src="{{ $item->getImageMini() }}"
                                                            --}} alt="{{ $item->laravel_name }}"
                                                            title="{{ $item->title }}" style="width: 200px">
                                                    </p>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('body', 'Текст 2') }}
                                                {{ Form::textArea('body', $item->body, ['class' => 'form-control summernote']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('source_name', 'Источник') }}
                                                {{ Form::text('source_name', $item->source_name, ['class' => 'form-control required']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('source_link', 'Ссылка') }}
                                                {{ Form::text('source_link', $item->source_link, ['class' => 'form-control required']) }}
                                            </div>

                                            <div class="form-group">
                                                {{ Form::label('dateline', 'Дата публикации') }}
                                                {{ Form::datetime('dateline', $item->dateline, ['class' => 'form-control required']) }}
                                            </div>
                                            @if (session()->has('message'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('message') }}
                                                </div>
                                            @endif
                                            <div class="box-footer">
                                                <div class="">
                                                    <a href="{{ url()->previous() }}" class="btn btn-default">Назад</a>
                                                    <button class="btn btn-primary pull-right" style="margin-left:20px;"><i
                                                            class='fa fa-save'></i> Сохранить</button>

                                                    <a href="{{ route('admin.press.show', $item->id) }}"
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
        @endforeach
    </div>
@endsection
