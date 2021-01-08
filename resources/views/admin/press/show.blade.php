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
                                    <li class="breadcrumb-item"><a href="{{ route('admin.press.index') }}">Новости "СМИ о
                                            нас"</a></li>
                                    <li class="breadcrumb-item active">Просмотр</li>
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
                                        Просмотр новости
                                    </h5>
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="box">
                                        <div class="card-body">
                                            <div class="box">
                                                <div class="entity_title">
                                                    <h1 class="text-justify">{!! $news->title !!}</h1>
                                                </div>
                                                <!-- entity_title -->

                                                <div class="entity_meta">
                                                    <p>{{ $news->date_published }}</p>
                                                </div>

                                                <div class="entity_content text-justify">
                                                    <!-- entity_meta -->
                                                    @if (isset($news->image))
                                                        <div class="entity_thumb"
                                                            style="max-width:330px; border-radius:8px;float:left;margin: 5px 10px 5px 0px ">
                                                            <img class="img-responsive"
                                                                src="{{ asset('storage/news/' . $news->image) }}"
                                                                alt="{{ $news->image }}">
                                                        </div>
                                                    @endif
                                                    {!! $news->body !!}
                                                </div>
                                            </div>
                                            <div class="box-footer" style="padding-top:10px;">
                                                <div class=""><a href="{{ url()->previous() }}" class="btn btn-default"><i
                                                            class="fas fa-caret-left"></i> Назад</a></div>
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
