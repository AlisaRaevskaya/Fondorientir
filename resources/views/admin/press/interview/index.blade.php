@extends('admin.layout')
@section('content')
    <section>
        <div class="container">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">

                        <div class="col-sm-12">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">{{$category->ru_name}}</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <div class="card card-outline card-info">

                <div class="card-header">
                    <div class="">
                        <h5 class="card-title">
                            Сортировать по</h5>
                        {{Form::open(['route' => ['admin.index'], 'method'=>'post', 'files' => false])}}
                        <div class="form-group">
                        {{Form::select('sort', ['id' => 'id', 'dateline' => 'Дата публикации','created_at' => 'Дата cоздания' ])}}
                        </div>
                        {{ Form::close()}}
                    </div>
                <div class="text-center">
                <a href="{{ route('admin.interview.create') }}" class="btn btn-primary pull-right">Добавить интервью</a>
                </div>
                </div>


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
                                @foreach ($interviews as $interview)
                                    <tr>
                                        <td>{{ $interview->id }}</td>
                                        <td>{{ $interview->title }}</td>
                                        <td>{{ $interview->intro }}</td>
                                        <td>{{ $interview->dateline }}</td>
                                        <td>{{ $interview->updated_at }}</td>
                                        <td>
                                            {{-- <a
                                                href="{{ route('image.upload', $interview->id) }}"
                                                class="btn btn-primary">Добавить
                                                картинку</a> --}}
                                            <a href="{{ route('admin.interview.edit', $interview->id) }}"
                                                class="btn btn-primary">Редактировать</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.interview.destroy', $interview->id) }}"
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
                        <li>{{ $interviews->links() }}</li>
                    </ul>
                </nav>
            </div>
    </section>
@endsection
