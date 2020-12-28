@extends('admin.layout')
@section('content')

    <div class="content-wrapper container">
        <!-- Content Header (Page header) -->
        @foreach ($news as $item)
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">

                        <div class="col-sm-12">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Новости</a></li>
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
                                <h6 class="card-title">
                                    Просмотр
                                </h6>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="box">
                                    <div class="">{!! $item->title !!}</div>
                                    <div class="entity_img">
                                        <img src="/storage/news/{{ $item->image }}" alt="{{ $item->title }}">
                                    </div>
                                    <div class="">{!! $item->intro !!}</div>
                                    <div class="">{!! $item->intro !!}</div>
                                    <div class="">{!! $item->body !!}</div>
                                </div>
                                <div class="box-footer">
                                    <div class=""><a href="{{ url()->previous() }}" class="btn btn-default">Назад</a></div>
                                </div>
                            </div>
                        </div>
            </section>
        @endforeach
    </div>

@endsection
