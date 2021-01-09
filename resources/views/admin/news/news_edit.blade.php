@extends('layout')
@section('content')
    <section>
        <div class="container">

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
                                        <a href="{{ route('image.upload', $new->id) }}" class="btn btn-primary">Добавить
                                            картинку</a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <nav aria-label="Page navigation" class="pagination_section">
                <ul class="pagination">
                    <li>{{ $news->links() }}</li>
                </ul>
            </nav>
        </div>
    </section>
@endsection
