@extends('admin.layout')
@section('content')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid admin-container" style="margin-top:30px;">

                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">

                            <div class="col-sm-12 col-md-11" style="margin-left:2rem;">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.notices.all') }}">Новые
                                            сообщения</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        Сообщение из категории: {{ $cat }}
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>


                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-11" style="margin-left:2rem;">
                            <div class="card card-outline card-info">
                                <div class="card-header ">
                                    <div class="card-title row">
                                        <div class="pull-left">
                                            <h3> Просмотр сообщения</h3>
                                        </div>
                                        <div class="pull-right">

                                        </div>
                                    </div>
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="card card-outline card-info">
                                        <div class="card-body">
                                            <div class="col-md-12 justify-content-center">
                                                <table class="table table-bordered" id="dataTable" width="100%"
                                                    cellspacing="0">
                                                    <tbody>
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
                                                <div>
                                                    <a href="{{ url()->previous() }}" class="btn btn-default "><i
                                                            class="fas fa-caret-left">
                                                        </i> Назад</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
@endsection
