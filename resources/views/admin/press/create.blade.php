@extends('admin.layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Добавление новой Статьи
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          @include('admin.errors')
        </div>
        <div class="box-body">
          {{Form::open(['route'=>'articles.store', 'files' => true])}}
          <div class="col-md-6">
            {{Form::hidden ('user_id', Auth()->user()->id)}}
            <div class="form-group">
              {{Form::label('name', 'Название')}}
              {{Form::text('name','', ['class'=>'form-control required'])}}
            </div>
            <div class="form-group">
              {{Form::label('preview', 'Превью')}}
              {{Form::text('preview','', ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
              {{Form::label('quote', 'Цитата')}}
              {{Form::text('quote','', ['class'=>'form-control required'])}}
            </div>
            <div class="form-group">
              {{Form::label('images', 'Картинка')}}
              {{Form::file('images')}}
            </div>
            <div class="form-group">
              {{Form::label('text_top', 'Текст 1')}}
              {{Form::textArea('text_top','', ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
              {{Form::label('text_center', 'Текст 2')}}
              {{Form::textArea('text_center','', ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
              {{Form::label('text_botton', 'Текст 3')}}
              {{Form::textArea('text_botton','', ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
              {{Form::label('activ', 'Активен')}}
              {{Form::select('activ', [0 => 'No', 1 =>'Yes'], 1 )}}
            </div>
            <div class="form-group">
              {{Form::label('sort', 'Сортировка')}}
              {{Form::text('sort',10, ['class'=>'form-control'])}}
            </div>
          </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button class="btn btn-default">Назад</button>
          <button class="btn btn-warning pull-right">Создать</button>
        </div>
        <!-- /.box-footer-->
        {{Form::close()}}
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection