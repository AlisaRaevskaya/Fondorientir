@extends('admin.layout')
@section('content')

    <div class="content-wrapper container">
        <!-- Content Header (Page header) -->
        @foreach ($page as $item)
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">

                        <div class="col-sm-12">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">{{ $item->title }}</li>
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
                                <h6 class="card-title">
                                    Просмотр
                                </h6>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="box">

                                    {!! $item->content !!}
                                    <table class="table table-bordered">


                                        <thead>
                                            <tr style="color:black;font-weight:bold;">
                                                <th scope="col-1">№ п/п</th>
                                                <th scope="col-2">Сроки оказания услуг или выполнения работ</th>
                                                <th scope="col-3">Наименование и адрес заказчика</th>
                                                <th scope="col-6">Наименование услуг или работ, предмет контракта
                                                    (договора)</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @foreach ($projects as $project)
                                                <tr style="color:black;">
                                                    <th scope="row">{{ $project->id }}</th>
                                                    <td>
                                                        <div class="form-group">
                                                            {{ Form::text('name', $project->term, ['class' => 'form-control required']) }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            {{ Form::text('name', $project->name, ['class' => 'form-control required']) }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            {{ Form::textArea('results', $project->results, ['class' => 'form-control summernote']) }}
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <div class="box-footer">
                                    <div class=""><a href="{{ url()->previous() }}" class="btn btn-default">Назад</a></div>

                                </div>
                            </div>
                            <!-- /.col-->

                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    </div>

@endsection
