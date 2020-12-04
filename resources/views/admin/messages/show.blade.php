@extends('admin.layout')
@section('content')

    <div class="content-wrapper container">
        <!-- Content Header (Page header) -->

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>


        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-11 container">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                              Просмотр сообщения
                            </h3>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="card card-outline card-info">
                                <div class="card-body">
                                    <div class="col-md-12 justify-content-center">
                                        <table class="table table-bordered" id="dataTable" width="100%"
                                            cellspacing="0">
                                                {{-- <table class="table table-bordered"> --}}
                                                    <tbody>
                                                        <p> Категория:{{$cat}}</p>
                                                        <tr>
                                                            <td scope="col">ФИО</td>
                                                            <th>
                                                                <p>{{ $message->name }}</p>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <td scope="col">Email</td>
                                                            <th>
                                                                <p>{{ $message->email }}</p>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <td scope="col">Телефон</td>
                                                            <th>
                                                                <p>{{ $message->phone }}</p>
                                                            </th>
                                                        </tr>

                                                        <tr>
                                                            <td scope="col">Почтовый адрес: </td>
                                                            <th>
                                                                <p>{{ $message->address }}
                                                                </p>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <td scope="col">Место работы/учебы:</td>
                                                            <th>{{ $message->job }}</th>
                                                        </tr>

                                                        <tr>
                                                            <td scope="col">Сообщение</td>
                                                            <th>
                                                                <p>{{ $message->message }}</p>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <td scope="col">Email</td>
                                                            <th>
                                                                <p>{{ $message->email }}</p>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <td scope="col">Дата создания</td>
                                                            <th>
                                                                <p>{{ $message->created_at }}</p>
                                                            </th>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                                <div class="box-footer">
                                                    <div><a href="{{ url()->previous() }}"
                                                            class="btn btn-secondary">Назад</a></div>
                                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-->

                    </div>
        </section>

    </div>

@endsection
