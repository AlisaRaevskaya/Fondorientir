@extends('admin.layout')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid admin-container" style="margin-top:30px;">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item">Meню</a>
                    <li class="breadcrumb-item active">СМИ о нас</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-body">
                        В данном разделе Вы можете редактировать статьи из раздела "СМИ о нас"
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        CМИ о нас
                        <div class="text-center">
                            <a href="{{ route('admin.press.create') }}" class="btn btn-outline-primary pull-right"><i
                                    class="fa fa-plus"></i>
                                Добавить новость</a>
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
                                            <th>Редактировать</th>
                                            <th>Удалить</th>
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
                                                <td>{!! $new->date_published !!}</td>
                                                <td>{!! $new->updated_at !!}</td>
                                                <td>
                                                    <a href="{{ route('admin.press.edit', $new->id) }}"
                                                        class="btn btn-primary"> <i class="fa fa-edit"></i>
                                                        Редактировать</a>
                                                </td>
                                                <td>
                                                    <form action="{{ route('admin.press.destroy', $new->id) }}"
                                                        method="post" class="text-center">
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-danger"><i
                                                                class="fa fa-trash"></i> Удалить</button>
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
                        <li>{{ $pressnews->links() }}</li>
                    </ul>
                </nav>
            </div>
        </main>
    </div>
@endsection
