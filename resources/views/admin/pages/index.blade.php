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
                            <a href="{{ route('admin.pages.create') }}" class="btn btn-default pull-right"><i
                                    class="fa fa-plus"></i> Добавить страницу</a>
                        </div>
                    </div>
                </div>

                <div class="card card-outline card-info ">
                    <div class="card-body col-md-12">
                        <table class="table table-bordered table-responsive" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th><i class="fa fa-fw fa-sort"></i>№</th>
                                    <th>Название</th>
                                    <th>Ссылка</th>
                                    <th>Опубликован</th>
                                    <th>Meta ключи</th>
                                    <th><i class="fa fa-fw fa-sort"></i>Дата изменения</th>
                                    <th>Редактировать</th>
                                    <th>Удалить</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>№</th>
                                    <th>Название</th>
                                    <th>Сcылка</th>
                                    <th>Опубликан</th>
                                    <th>Meta ключи</th>
                                    <th>Дата изменения</th>
                                    <th>Редактировать</th>
                                    <th>Удалить</th>
                                </tr>
                            </tfoot>

                            <tbody>
                                @foreach ($pages as $page)
                                    <tr>
                                        <td>{{ $page->id }}</td>
                                        <td>{{ $page->title }}</td>
                                        <td>{{ $page->url }}</td>
                                        <td>
                                            @if ($page->published = true)да
                                            @else нет
                                            @endif
                                        </td>
                                        <td>{{ $page->keywords }}</td>
                                        <td>{{ $page->updated_at }}</td>

                                        <td class="project-actions text-right ">

                                            <a href="{{ $page->laravel_name ? route('admin.' . \Str::slug($page->laravel_name) . '.edit', $page->id) : route('admin.main.edit', $page->id) }}"
                                                class="btn btn-primary btn-sm">
                                                <i class="fas fa-pencil-alt"></i> Редактировать</a>
                                        </td>
                                        <td>
                                            <form
                                                action="{{ $page->laravel_name ? route('admin.' . \Str::slug($page->laravel_name) . '.destroy', $page->id) : route('admin.main.destroy', $page->id) }}"
                                                method="post" class="text-center">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-danger btn-sm pull-right">
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
