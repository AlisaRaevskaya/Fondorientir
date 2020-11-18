@extends('admin.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper container">
        <!-- Content Header (Page header) -->
        @foreach ($news as $page)
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">

                        <div class="col-sm-12">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Новости/{{$page->id}}</li>
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
                                        {{-- @include('admin.errors')
                                        --}}
                                    </div>

                                    <div class="box-body">

                                        <div class="col-md-10">
                                            {{Form::open(['route'=>['admin.history.update',$page->id], 'method'=>'post', 'files' => true])}}
                                            <div class="form-group">
                                                {{ Form::label('name', 'Название') }}
                                                {{ Form::text('name', $page->title, ['class' => 'form-control required']) }}
                                            </div>

                                            {{-- <div class="form-group">
                                                {{ Form::label('preview', 'Превью') }}
                                                {{ Form::text('preview', $articles->preview, ['class' => 'form-control']) }}
                                            </div> --}}

                                             <div class="form-group">
                                                {{ Form::label('text_center', 'Intro') }}
                                                {{ Form::textArea('intro', $page->intro, ['class' => 'form-control', 'id' => 'summernote']) }}
                                            </div>

                                            <div class="form-group">
                                                {{ Form::label('images', 'Картинка') }}
                                                {{ Form::file('images') }}
                                                @if (isset($page->image))
                                                    <p>
                                                        <img class="image" src="{{ $page->image }}"
                                                        {{-- <img class="image" src="{{ $page->getImageMini() }}" --}}
                                                            alt="{{ $page->laravel_name }}" title="{{ $page->title }}"
                                                            style="width: 200px">
                                                    </p>
                                                @endif
                                            </div>
                                             <div class="form-group">
                                                {{ Form::label('source_name', 'Источник') }}
                                                {{ Form::text('source_name', $page->source_name, ['class' => 'form-control required']) }}
                                            </div>
                                             <div class="form-group">
                                                {{ Form::label('source_link', 'Ссылка') }}
                                                {{ Form::text('source_link', $page->source_link, ['class' => 'form-control required']) }}
                                            </div>
                                              <div class="form-group">
                                                {{ Form::label('quote', 'Дата создания') }}
                                                {{ Form::text('created_at', $page->created_at, ['class' => 'form-control required']) }}
                                            </div>
                                                <div class="form-group">
                                                {{ Form::label('quote', 'Дата публикации') }}
                                                {{ Form::text('dateline', $page->dateline, ['class' => 'form-control required']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('text_center', 'Текст 2') }}
                                                {{ Form::textArea('body', $page->body, ['class' => 'form-control', 'id' => 'summernote']) }}
                                            </div>

                                            {{-- <div class="form-group">
                                                {{ Form::label('text_top', 'Текст 1') }}
                                                {{ Form::textArea('text_top', htmlspecialchars_decode($articles->text_top), ['class' => 'form-control']) }}
                                            </div> --}}


                                               <div class="form-group">
                                                {{ Form::label('quote', 'Source_link') }}
                                                {{ Form::text('source_link', $page->source_link, ['class' => 'form-control required']) }}
                                            </div>
                                            {{-- <div class="form-group">
                                                {{ Form::label('activ', 'Опубликован') }}
                                                {{ Form::select('activ', [0 => 'No', 1 => 'Yes'], $page->published) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('sort', 'Сортировка') }}
                                                {{ Form::text('sort', $page->sort, ['class' => 'form-control']) }}
                                            </div> --}}

                                            <div class="box-footer">
                                            <a class="btn btn-default" href="{{url()->previous()}}">Назад</a>
                                                <button class="btn btn-warning pull-right">Изменить</button>
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
            <!-- /.content -->
        @endforeach
    </div>
    <!-- /.content-wrapper -->

@endsection
