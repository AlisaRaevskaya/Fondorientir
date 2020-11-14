@extends('admin.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper container">
        <!-- Content Header (Page header) -->
        @foreach ($pages as $page)
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Редактировать статью</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">{{$page->laravel_name}}</li>
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
                            <h3 class="card-title">
                                Summernote
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                                <textarea id="summernote">
                 {!!  $page->content !!}
                  </textarea>
                            @endforeach
                        </div>
                        <div class="card-footer">
                            Visit <a href="https://github.com/summernote/summernote/">Summernote</a> documentation for more
                            examples and information about the plugin.
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
