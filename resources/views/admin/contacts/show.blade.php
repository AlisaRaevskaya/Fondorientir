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
                                </div>
                                <div class="box-footer">
                                    <a href="{{ url()->previous() }}" class="btn btn-default">
                                        <i class="fas fa-caret-left"></i>
                                        Назад</a>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </section>
        @endforeach
    </div>
@endsection
