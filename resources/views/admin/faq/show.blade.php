@extends('admin.layout')
@section('content')

    <div class="content-wrapper container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid admin-container">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.pages.index')}}">Страницы</a></li>
                            <li class="breadcrumb-item active"></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h6 class="card-title">
                                Просмотр
                            </h6>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="box">
                                <div class="box-body">
                                    <div class="col-md-12">

                                    <div class="">{!! $topic->title !!}</div>
                                    <div class="entity_img">
                                        @if($topic->image)
                                        <img src="/storage/news/{{ $topic->image }}" alt="{{ $topic->title }}">
                                        @endif
                                    </div>
                                    <div class="">{!! $topic->dateline !!}</div>
                                    <div class="">{!! $topic->intro !!}</div>
                                    <div class="">{!! $topic->body !!}</div>
                                        <div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="box-footer">
            <div><a href="{{ url()->previous() }}" class="btn btn-secondary">Назад</a></div>
        </div>
        </section>
    </div>
@endsection
