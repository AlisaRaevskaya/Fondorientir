@extends('admin.layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Статьи
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <div class="form-group">
            <a href="{{route('articles.create')}}" class="btn btn-success">Добавить</a>
          </div>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>ID</th>
              <th>Название</th>
              <th>Активен</th>
              <th>Сортировка</th>
              <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($articles as $article)
              <tr>
                <td>{{$article->id}}</td>
                <td><a href="{{ route('articles.show',$article->id) }}">{{$article->name}}</a> </td>
                <td>{{$article->activ ? 'Да' : 'Нет'}}</td>
                <td>{{$article->sort}}</td>
                <td><a href="{{route('articles.edit', $article->id)}}" class="fa fa-pencil"></a>

                  {{Form::open(['route'=>['articles.destroy', $article->id], 'method'=>'delete'])}}
                  <button onclick="return confirm('Вы уверены?')" type="submit" class="delete">
                    <i class="fa fa-remove"></i>
                  </button>

                  {{Form::close()}}

                </td>
              </tr>
            @endforeach

            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection