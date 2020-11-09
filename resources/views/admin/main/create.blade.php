
 <!-- Main content -->
 <section class="content">
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">

      </div>

<div class="box-body">
    {{Form::open(['route'=>['admin.update',$pages->id], 'method'=>'post', 'files' => true])}}
    <div class="col-md-6">

      {{Form::hidden ('pages_id', $pages->id)}}


      <div class="form-group"> //slider
        {{Form::label('images', 'Картинка')}}
        {{Form::file('images')}}
        @if(isset($pages->images))
          <p>
            <img class="image" src="{{$articles->getImageMini()}}" alt="{{$articles->name}}"
             title="{{$articles->name}}" style="width: 200px">
          </p>
        @endif
      </div>

      <div class="form-group">
        {{Form::label('text_top', 'Текст 1')}}
        {{Form::textArea('text_top', htmlspecialchars_decode($articles->text_top), ['class'=>'form-control'])}}
      </div>
      <div class="form-group">
        {{Form::label('text_center', 'Текст 2')}}
        {{Form::textArea('text_center', $pages->content, ['class'=>'form-control'])}}
      </div>

      <div class="form-group">
        <p style="color: tomato;">В URL могут присутствовать только буквы и цифры латинского алфавита пробелы замените на "_" нижнее подчеркивание или "-" тире.
        <br>Знаки препинания должны отсутствовать.
          <br>пример: while-we-put-off-life-it-passes
        </p>
        {{Form::label('url', 'URL')}}
        {{Form::text('url',$menu->url, ['class'=>'form-control'])}}
      </div>
    </div>

  </div>
