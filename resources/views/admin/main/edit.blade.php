
 @extends('admin.layout')
@section('content')


    <div class="wrapper container" style="padding: 0 20px; ">


        @foreach ($pages as $page)
            <div class="container-fluid">
                <a href="{{ route('admin.edit', $page->id) }}" class="btn btn-primary">Редактировать</a>
            </div>


            <section id="feature_news_section" class="feature_news_section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="feature_article_wrapper">
                                <div class="feature_article_img">
                                    <img class="img-responsive top_static_article_img" src="/assets/images/immigrants.jpg"
                                        alt="feature-top">
                                </div>
                            </div>
                            <!-- feature_article_wrapper -->
                        </div>
                        <!-- col-md-7 -->
                        <div class="col-md-3">
                            <div class="feature_static_wrapper">
                                <div class="feature_article_img">
                                    <a href="{{ route('reception') }}"><img class="img-responsive"
                                            src="/assets/images/banner.png" alt="banner"></a>
                                </div>
                            </div>
                            <!-- feature_static_wrapper -->
                        </div>
                        <!-- col-md-5 -->
                    </div>
                    <!-- Row -->
                </div>
                <!-- container -->

            </section>
    </div>
    </div>
    <!-- Feature News Section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-9">

                    <div class="entity-wrapper">

                        <div class="entity_title">
                            <h1>Добро пожаловать!</h1>
                        </div>

                        <div class="entity_content">
                            <p class="text-justify">{!! $page->content !!}</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="side-block">
                        @include('blocks.feedback_block')
                    </div>
                    <div class="side-block">
                        @include('blocks.status')
                    </div>
                </div>

            </div>
        </div>


        </div>
        </div>
    </section>
    @endforeach
    </div>

@endsection




 {{-- @extends('admin.layout')
 @section('content')


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Редактирование страницы  {{$pages->ru_name}}
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
          {{Form::open(['route'=>['admin.update',$pages->id], 'method'=>'post', 'files' => true])}}
          <div class="col-md-6">
            {{Form::hidden ('pages_id', $pages->id)}}
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
          <button class="btn btn-default">Назад</button>
          <button class="btn btn-warning pull-right">Изменить</button>
        </div>
        <!-- /.box-footer-->
        {{Form::close()}}
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
@endsection --}}
