@extends('admin.layout')
@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid container">
            <h1 class="mt-4">Страницы сайта</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables</li>
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
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th><i class="fa fa-fw fa-sort"></i>ID</th>
                                    <th><i class="fa fa-fw fa-sort"></i>Название</th>
                                    <th><i class="fa fa-fw fa-sort"></i>Meta-key</th>
                                    <th><i class="fa fa-fw fa-sort"></i>Meta-description</th>
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
                                    <th>Meta-key</th>
                                    <th>Meta-description</th>
                                    <th>Дата создания</th>
                                    <th>Дата изменения</th>
                                    <th>Действия</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($pages as $page)
                                <tr>
                                    <td>{{$page->id}}</td>
                                    <td>{{$page->title}}</td>
                                    <td>{{$page->metakey}}</td>
                                    <td>{{$page->metadesc}}</td>
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
            </div>
        </div>
    </main>
</div>
@endsection

{{--  --}}
