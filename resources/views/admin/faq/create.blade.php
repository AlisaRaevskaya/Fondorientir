@extends('admin.layout')

@section('content')
    <div class="content-wrapper container">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.pages.index') }}">Страницы</a></li>
                            <li class="breadcrumb-item active">Вопросы и ответы</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-11 container">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                Добавить ответ
                            </h3>
                        </div>
                        <!-- Main content -->

                        <div class="card-body">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#content">Содержание</a>
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
                                            {{ Form::open(['route' => 'admin.faq-page.store', 'files' => true]) }}
                                            <div class="col-md-11 justify-content-center">

                                                <div class="form-group">
                                                    {{ Form::label('title', 'Вопрос') }}
                                                    {{ Form::text('title', '', ['class' => 'form-control required']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('intro', 'Intro') }}
                                                    {{ Form::textArea('intro', '', ['class' => 'form-control summernote']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('body', 'Ответ') }}
                                                    {{ Form::textArea('body', '', ['class' => 'form-control summernote']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('dateline', 'Дата публикации') }}
                                                    {{ Form::date('dateline', '', ['class' => 'form-control required']) }}
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

                                                    <button class="btn btn-primary pull-right" style="margin-left:20px;"><i
                                                            class="fas fa-save"></i> Сохранить</button>
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
@endsection
