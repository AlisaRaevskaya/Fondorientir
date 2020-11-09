@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               Просмотр Статей
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Value</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">id</th>
                            <td>{{$articles->id}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Автор</th>
                            <td>{{$articles->user->name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Превью</th>
                            <td>{{ $articles->preview}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Цитата</th>
                            <td>{{$articles->quote}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Картинка</th>
                            <td>
                                @if($articles->images)
                                    <img class="image" src="{{$articles->getImage()}}" alt="{{$articles->name}}" title="{{$articles->name}}" style="width: 300px">
                                @else
                                    нет
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Текст 1</th>
                            <td>{{$articles->text_top}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Текст 2</th>
                            <td>{{$articles->text_center }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Текст 3</th>
                            <td>{{ $articles->text_botton }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Активность</th>
                            <td>{{$articles->activ ? 'Да' : 'Нет'}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Сортировка</th>
                            <td>{{$articles->sort}}</td>
                        </tr>
                        <tr>
                            <th scope="row">URL</th>
                            <td>{{$articles->url}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Дата создания</th>
                            <td>{{$articles->getFormatDateCreate()}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Дата обновления</th>
                            <td>{{$articles->getFormatDateUpdate()}}</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="box-footer">
                        <a href="{{route('articles.index')}}" class="btn btn-default">Назад</a>
                        <a href="{{route('articles.edit', $articles->id)}}" class="btn btn-warning pull-right">Изменить</a>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection