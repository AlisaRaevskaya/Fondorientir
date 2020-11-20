@extends('admin.layout')
@section('content')
    <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid container">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">Meню</a>
                <li class="breadcrumb-item active">{{$category->ru_name}}</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                  В данном разделе Вы можете редактировать статьи из раздела "{{$category->ru_name}}".
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    {{$category->ru_name}}
                    <div class="text-center">
                <a href="{{ route('admin.news.create') }}" class="btn btn-default pull-right">Добавить новость</a>
                </div>
                </div>
            <div class="card card-outline card-info">

                <div class="card-header">

                </div>

                <div class="card-body">
                    <div class="col-md-12">
                        <table class="table table-bordered table-responsive" id="dataTable" width="100%" cellspacing="0">

                            <thead>
                                <tr>
                                    <th><i class="fa fa-fw fa-sort"></i>ID</th>
                                    <th><i class="fa fa-fw fa-sort"></i>Название</th>
                                    <th><i class="fa fa-fw fa-sort"></i>Intro</th>
                                    <th><i class="fa fa-fw fa-sort"></i>Дата создания</th>
                                    <th><i class="fa fa-fw fa-sort"></i>Дата изменения</th>
                                    <th><i class="fa fa-fw fa-sort"></i>Редактировать</th>
                                    <th><i class="fa fa-fw fa-sort"></i>Удалить</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Название</th>
                                    <th>Intro</th>
                                    <th>Дата создания</th>
                                    <th>Дата изменения</th>
                                    <th>Редактировать</th>
                                    <th>Удалить</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($pressnews as $new)
                                    <tr>
                                        <td>{{ $new->id }}</td>
                                        <td>{!! $new->title !!}</td>
                                        <td>{!! $new->intro !!}</td>
                                        <td>{!! $new->dateline!!}</td>
                                        <td>{!!$new->updated_at!!}</td>
                                        <td>
                                            {{-- <a
                                                href="{{ route('image.upload', $new->id) }}"
                                                class="btn btn-primary">Добавить
                                                картинку</a> --}}
                                            <a href="{{ route('admin.press.edit', $new->id) }}"
                                                class="btn btn-primary">Редактировать</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.press.destroy', $new->id) }}"
                                                class="btn btn-warning">Удалить</a>
                                        </td>

                                    </tr>

                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>

                <nav aria-label="Page navigation" class="pagination_section">
                    <ul class="pagination">
                        <li>{{ $pressnews->links() }}</li>
                    </ul>
                </nav>
            </div>
        </div>
@endsection
