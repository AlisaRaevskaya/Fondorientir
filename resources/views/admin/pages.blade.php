@extends('admin.layout')
@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid container">
            <h1 class="mt-4">Страницы сайта</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">Meню</a>
                <li class="breadcrumb-item active">Страницы</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                  В данном разделе Вы можете редактировать страницы.
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                   Cтраницы
                </div>
                <div class="card-body">
                    <div class="col-md-12 justify-content-center">
                        <table class="table table-bordered table-responsive" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th><i class="fa fa-fw fa-sort"></i>№</th>
                                    <th><i class="fa fa-fw fa-sort"></i>Название</th>
                                    <th><i class="fa fa-fw fa-sort"></i>Ссылка</th>
                                      <th><i class="fa fa-fw fa-sort"></i>Meta описание</th>
                                      <th><i class="fa fa-fw fa-sort"></i>Meta ключи</th>
                                    <th><i class="fa fa-fw fa-sort"></i>Дата создания</th>
                                    <th><i class="fa fa-fw fa-sort"></i>Дата изменения</th>
                                    <th><i class="fa fa-fw fa-sort"></i>Редактировать</th>
                                    <th><i class="fa fa-fw fa-sort"></i>Удалить</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>№</th>
                                    <th>Название</th>
                                    <th>Сcылка</th>
                                    <th>Meta описание</th>
                                    <th>Meta ключи</th>
                                    <th>Дата создания</th>
                                    <th>Дата изменения</th>
                                    <th>Редактировать</th>
                                    <th>Удалить</th>
                                </tr>
                            </tfoot>

                            <tbody>
                                @foreach ($pages as $page)
                                <tr>
                                    <td>{{$page->id}}</td>
                                    <td>{{$page->title}}</td>
                                    <td>{{$page->url}}</td>

                                    <td>{{$page->keywords}}</td>
                                     <td>{{$page->description}}</td>

                                    <td>{{$page->created_at}}</td>
                                    <td>{{$page->updated_at}}</td>
                                    <td>
                                        <a href= "{{ $page->laravel_name ? route('admin.' . \Str::slug($page->laravel_name) . '.edit', $page->id)
                                 : route('admin.edit', $page->id)}}"
                                            class="btn btn-primary">Редактировать</a>

                                       </td>
                                       <td>
                                          <form action="{{ $page->laravel_name ? route('admin.' . \Str::slug($page->laravel_name) . '.destroy', $page->id)
                                 : route('admin.destroy', $page->id)}}"
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
     {{-- <nav aria-label="Page navigation" class="pagination_section">
                    <ul class="pagination">
                        <li>{{$pages->links()}}</li>
                    </ul>
                </nav> --}}
            </div>
        </div>
    </main>
</div>
@endsection

{{--  --}}
