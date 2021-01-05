@extends('admin.layout')
@section('content')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid admin-container" style="margin-top:30px;">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item">Meню</a>
                    <li class="breadcrumb-item active">Страницы</li>
                </ol>

                <div class="card mb-4">
                    <div class="card-body">
                        В данном разделе Вы можете редактировать статьи из раздела "Страницы".
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Страницы
                        <div class="text-center">
                            <a href="{{ route('admin.pages.create') }}" class="btn btn-outline-primary pull-right"><i
                                    class="fa fa-plus"></i> Добавить страницу</a>
                        </div>
                    </div>
                </div>

                <div class="card card-outline card-info ">
                    <div class="card-body col-md-12">
                        <table class="table table-bordered table-responsive" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Название</th>
                                    <th>Ссылка</th>
                                    <th>Опубликована</th>
                                    <th>Меню</th>

                                    <th>Дата изменения</th>
                                    <th>Редактировать</th>
                                    <th>Удалить</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>№</th>
                                    <th>Название</th>
                                    <th>Сcылка</th>
                                    <th>Опубликана</th>
                                    <th>Меню</th>
                                    <th>Дата изменения</th>
                                    <th>Редактировать</th>
                                    <th>Удалить</th>
                                </tr>
                            </tfoot>

                            <tbody>
                                @foreach ($pages as $page)
                                    <tr>
                                        <td class="col-md-1">{{ $page->id }}</td>
                                        <td class="col-md-3">{{ $page->title }}</td>
                                        <td class="col-md-3">{{ $page->url }}</td>
                                        <td class="col-md-1">
                                            @if ($page->published == 1) да
                                            @else нет
                                            @endif
                                        </td>
                                        <td class="col-md-1">
                                            @if ($page->is_menu == 1) да
                                            @else нет
                                            @endif
                                        </td>

                                        <td class="col-md-1">{{ $page->updated_at }}</td>

                                        <td class="project-actions text-left col-md-1">

                                            <a href="{{ route($page->getAdminUrlEdit(), $page->id) }}"
                                                class="btn btn-primary"><i class="fas fa-pencil-alt"></i>
                                                Редактировать</a>
                                        </td>
                                        <td class="col-md-1 text-left">
                                            <form action="{{ route($page->getAdminUrlEdit(), $page->id) }}" method="post"
                                                class="text-center deleteForm">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-danger pull-right" type="button">
                                                    <i class="fas fa-trash">
                                                    </i> Удалить</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                <nav aria-label="Page navigation" class="pagination_section">
                    <ul class="pagination">
                        <li>{{ $pages->links() }}</li>
                    </ul>
                </nav>
            </div>
        </main>
    </div>

@endsection
