@extends('admin.layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Редактирование Статьи  &laquo;{{$articles->name}}&raquo;
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
          {{Form::open(['route'=>['articles.update',$articles->id], 'method'=>'post', 'files' => true])}}
          <div class="col-md-6">
            {{Form::hidden ('articles_id', $articles->id)}}
            <div class="form-group">
              {{Form::label('name', 'Название')}}
              {{Form::text('name',$articles->name, ['class'=>'form-control required'])}}
            </div>
            <div class="form-group">
              {{Form::label('preview', 'Превью')}}
              {{Form::text('preview',$articles->preview, ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
              {{Form::label('quote', 'Цитата')}}
              {{Form::text('quote',$articles->quote, ['class'=>'form-control required'])}}
            </div>
            <div class="form-group">
              {{Form::label('images', 'Картинка')}}
              {{Form::file('images')}}
              @if(isset($articles->images))
                <p>
                  <img class="image" src="{{$articles->getImageMini()}}" alt="{{$articles->name}}" title="{{$articles->name}}" style="width: 200px">
                </p>
              @endif
            </div>
            <div class="form-group">
              {{Form::label('text_top', 'Текст 1')}}
              {{Form::textArea('text_top',htmlspecialchars_decode($articles->text_top), ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
              {{Form::label('text_center', 'Текст 2')}}
              {{Form::textArea('text_center',$articles->text_center, ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
              {{Form::label('text_botton', 'Текст 3')}}
              {{Form::textArea('text_botton',$articles->text_botton, ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
              {{Form::label('activ', 'Активен')}}
              {{Form::select('activ', [0 => 'No', 1 =>'Yes'], $articles->activ )}}
            </div>
            <div class="form-group">
              {{Form::label('sort', 'Сортировка')}}
              {{Form::text('sort',$articles->sort, ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
              <p style="color: tomato;">В URL могут присутствовать только буквы и цифры латинского алфавита пробелы замените на "_" нижнее подчеркивание или "-" тире.
              <br>Знаки припенания должны отсутствовать.
                <br>пример: while-we-put-off-life-it-passes
              </p>
              {{Form::label('url', 'URL')}}
              {{Form::text('url',$articles->url, ['class'=>'form-control'])}}
            </div>
          </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <div class=""><a href="{{url()->previous()}}" class="btn btn-default">Назад</a></div>
          <button type="submit"class="btn btn-warning pull-right">Сохранить</button>
          <div class=""><a href="{{route('admin.press.show',$page->id)}}"class="btn btn-warning pull-right">Просмотр</button></div>
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