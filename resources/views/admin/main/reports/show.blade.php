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
 <section id="feature_news_section" class="feature_news_section">
            <div class="container">
                <div class="feature_article_wrapper">
                    <div class="feature_column_9">
                            <div class="feature_article_img">
                                <img class="img-responsive top_static_article_img" src="/assets/images/{{$main_image}}"
                                    alt="{{$main_image}}">

                            </div>

                    </div>
                    <!-- col-md-7 -->

                    <div class="feature_column_3">
                            <div class="float-right">
                                <a href="{{ route('second_main')}}"><img class="img-responsive"
                                        src="/assets/images/{{$banner}}" alt="{{$banner}}"></a>
                            </div>
                    </div>
                    <!-- col-md-5 -->


                </div>
                <!-- Row -->

            </div>
            <!-- container -->

        </section>
        <!-- Feature News Section -->

                                <div class="box">


    {!!$item->content!!}

</div>
<div class="box-footer">
                        <div class=""><a href="{{url()->previous()}}" class="btn btn-default">Назад</a></div>

                                            </div>
                            </div>
                            <!-- /.col-->

                        </div>
            </section>
            @endforeach
</div>

@endsection
