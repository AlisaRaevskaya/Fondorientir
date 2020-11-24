@extends('admin.layout')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid container">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item">Meню</a>
                    <li class="breadcrumb-item active">Новости</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-body">
                        В данном разделе Вы можете редактировать статьи из раздела "Новости".
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Новости
                        <div class="text-center">
                            <a href="{{ route('admin.news.create') }}" class="btn btn-default pull-right">Добавить
                                новость</a>
                        </div>
                    </div>

                    <div class="card card-outline card-info">
                        <div class="card-body">
                            <div class="col-md-12 justify-content-center">
                                <table class="table table-bordered table-responsive" id="dataTable" width="100%"
                                    cellspacing="0">
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
                                        @foreach ($interviews as $new)
                                            <tr>
                                                <td>{{ $new->id }}</td>
                                                <td>{!! $new->title !!}</td>
                                                <td>{!! $new->intro !!}</td>
                                                <td>{!! $new->dateline !!}</td>
                                                <td>{!! $new->updated_at !!}</td>
                                                <td>
                                                    {{-- <a
                                                        href="{{ route('image.upload', $new->id) }}"
                                                        class="btn btn-primary">Добавить
                                                        картинку</a> --}}
                                                    <a href="{{ route('admin.interviews.edit', $new->id) }}"
                                                        class="btn btn-primary">Редактировать</a>
                                                </td>
                                                <td>
                                                    <form action="{{ route('admin.interviews.destroy', $new->id) }}"
                                                        method="post" class="text-center">
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-warning ">Удалить</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation" class="pagination_section">
                    <ul class="pagination">
                        <li>{{ $interviews->links() }}</li>
                    </ul>
                </nav>
            </div>
        </main>
    </div>
@endsection
