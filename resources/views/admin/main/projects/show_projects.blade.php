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
                                    <li class="breadcrumb-item active">Наши проекты</li>
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

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="box">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr style="color:black;font-weight:bold;">
                                                    <th>№ п/п</th>
                                                    <th>Сроки оказания услуг или выполнения работ</th>
                                                    <th>Наименование и адрес заказчика</th>
                                                    <th>Наименование услуг или работ, предмет контракта
                                                        (договора)</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($projects as $project)
                                                    <tr style="color:black;">
                                                        <th scope="row">{{ $project->id }}</th>
                                                        <td>
                                                            {{ $project->term }}
                                                        </td>
                                                        <td>
                                                            {!! $project->name !!}
                                                        </td>
                                                        <td>
                                                            {!! $project->results !!}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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
