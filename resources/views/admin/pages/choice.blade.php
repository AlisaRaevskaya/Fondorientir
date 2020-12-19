@extends('admin.layout')

@section('content')
    <div class="content-wrapper container">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Страницы</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-11 container">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <div class="card-title">Страницы</div>

                            <div class="row m30">
                                <div class="col-md-6">
                                    <div class="card bg-primary text-white mb-4">
                                        <div class="card-body">Страницы</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-white stretched-link"
                                                href="{{ route('admin.pages.index') }}">Страницы основного сайта</a>
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card bg-warning text-white mb-4">
                                        <div class="card-body">Страницы</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-white stretched-link"
                                                href="{{ route('admin.secondmenu.index') }}">Центр Поддержки</a>
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>

                                {{-- <a class="nav-link"
                                    href="{{ route('admin.secondmenu.index') }}">Jvyjdyst c</a>
                                --}}
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection
