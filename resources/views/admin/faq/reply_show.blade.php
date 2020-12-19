@extends('admin.layout')
@section('content')

    <div id="layoutSidenav_content">
        <main>
            <div class="content-wrapper admin-container" style="margin-bottom:50px;">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="padding-top:10px;">
                    <div class="container-fluid">
                        <div class="row mb-2">

                            <div class="col-sm-12 col-md-11 container">
                                <ol class="breadcrumb float-sm-right ">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.pages.index') }}">Страницы</a></li>
                                    <li class="breadcrumb-item active"></li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <section class="content">
                    <div class="row">
                        <div class="col-md-11 container">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <h5 class="card-title">
                                        Просмотр страницы
                                    </h5>
                                </div>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td scope="col">Вопрос</td>
                                            <th>
                                                <p>{!! $topic->title !!}</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td scope="col">Дата публикации</td>
                                            <th>
                                                <p>{!! $topic->dateline !!}</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td scope="col">Ответ</td>
                                            <th>
                                                {!! $reply->body !!}
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="box-footer" style="padding-top:10px;">
                                <div class=""><a href="{{ url()->previous() }}" class="btn btn-default"><i
                                            class="fas fa-caret-left"></i> Назад</a></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
@endsection
