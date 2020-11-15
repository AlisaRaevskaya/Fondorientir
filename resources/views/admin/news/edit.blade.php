@extends('layout')
@section('content')

   <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Название</th>
                        <th>Intro</th>
                        <th>Дата создания</th>
                        <th>Дата изменения</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Название</th>
                        <th>Intro</th>
                        <th>Дата создания</th>
                        <th>Дата изменения</th>
                        <th>Действия</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($news as $new)
                        <tr>
                            <td>{{ $new->id }}</td>
                            <td>{{ $new->title }}</td>
                            <td>{{ $new->intro }}</td>
                            <td>{{ $new->dateline }}</td>
                            <td>{{ $new->updated_at }}</td>
                            <td>

                                <a href="{{ route('admin.news.edit', $new->id) }}" class="btn btn-primary">Редактировать</a>
                                <a href="{{ route('admin.news.destroy', $new->id) }}" class="btn btn-warning">Удалить</a>
                                <a href="{{ route('image.upload', $new->id) }}" class="btn">Добавить картинку</a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
