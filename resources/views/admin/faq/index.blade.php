@extends('admin.layout')
@section('content')

    <div id="layoutSidenav_content">
        <main>
            <div class="content-wrapper admin-container" style="margin-bottom:50px;">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="padding-top:10px;">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div>
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item">Меню</a></li>
                                    <li class="breadcrumb-item active">Вопрос-ответ</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Редактировать статью
                                    </h3>
                                    <div class="text-center">
                                        <a href="{{ route('admin.faq.create') }}"
                                            class="btn btn-outline-primary pull-right"><i class="fa fa-plus"></i>
                                            Добавить</a>
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
                                                        <th></i>Вопрос</th>
                                                        <th></i>Intro</th>
                                                        <th><i class="fa fa-fw fa-sort"></i>Дата создания</th>
                                                        <th><i class="fa fa-fw fa-sort"></i>Дата изменения</th>
                                                        <th>Редактировать</th>
                                                        <th>Удалить</th>

                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Вопрос</th>
                                                        <th>Intro</th>
                                                        <th>Дата создания</th>
                                                        <th>Дата изменения</th>
                                                        <th>Редактировать</th>
                                                        <th>Удалить</th>

                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    @foreach ($topics as $topic)
                                                        <tr>
                                                            <td>{{ $topic->id }}</td>
                                                            <td>{!! $topic->title !!}</td>
                                                            <td>{!! $topic->intro !!}</td>
                                                            <td>{!! $topic->dateline !!}</td>
                                                            <td>{!! $topic->updated_at !!}</td>
                                                            <td>
                                                                <a href="{{ route('admin.fq.edit', $topic->id) }}"
                                                                    class="btn btn-primary"><i class="far fa-edit"></i>
                                                                    Редактировать</a>
                                                            </td>
                                                            <td>
                                                                <form action="{{ route('admin.fq.destroy', $topic->id) }}"
                                                                    method="post" class="text-center">
                                                                    @csrf
                                                                    {{ method_field('DELETE') }}
                                                                    <button type="submit" class="btn btn-warning "><i
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
                            <!-- entity_wrapper -->
                            <nav aria-label="Page navigation" class="pagination_section">
                                <ul class="pagination">
                                    <li>{{ $topics->links() }}</li>
                                </ul>
                            </nav>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
@endsection
