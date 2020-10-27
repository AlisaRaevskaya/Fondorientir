@extends('layout')
@section('content')

<section id="feature_news_section" class="feature_news_section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">

                <div class="feature_article_wrapper">
                    <div class="feature_article_img">
                        <!-- <img class="img-responsive top_static_article_img" src="assets/img/feature-top.jpg"
                             alt="feature-top"> -->
                             @include('blocks.carousel')
                    </div>

                </div>
                <!-- feature_article_wrapper -->

            </div>
            <!-- col-md-7 -->

            <div class="col-md-5">
                <div class="feature_static_wrapper">
                    <div class="feature_article_img">
                        <img class="img-responsive" src="/assets/images/ban.jpg" alt="feature-top">
                    </div>
                    <!-- feature_article_img -->

                    <div class="feature_article_inner">
                        <div class="tag_lg purple"><a href="category.html">Top Viewed</a></div>
                        <div class="feature_article_title">
                            <h1><a href="single.html" target="_self">Приемная </a></h1>
                        </div>
                        <!-- feature_article_title -->

                        <div class="feature_article_date"><a href="#" target="_self">Stive Clark</a>,<a href="#"
                                                                                                         target="_self">Aug
                            4, 2015</a></div>
                        <!-- feature_article_date -->

                        <div class="feature_article_content">
                            In a move to address mounting concerns about security on Android...
                        </div>
                        <!-- feature_article_content -->

                        <div class="article_social">
                            <span><i class="fa fa-share-alt"></i><a href="#">424</a>Shares</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a>Comments</span>
                        </div>
                        <!-- article_social -->

                    </div>
                    <!-- feature_article_inner -->

                </div>
                <!-- feature_static_wrapper -->

            </div>
            <!-- col-md-5 -->


        </div>
        <!-- Row -->

    </div>
    <!-- container -->

</section>
<!-- Feature News Section -->

<section class="container">

<div class="row justify-content-center">
<h1>Добро пожаловать!</h1>
</div>

<div class="entity_content">
    @foreach($mainContent as $item)
    <p>{!!$item->content!!}</p>
    @endforeach
    </div>

<div class="widget_title widget_black" style="overflow:hidden">
        <h2><a href="{{route('news')}}">Новости</a></h2>
</div>

<div class="container">
<div class="row">
@foreach($news as $new)
    <div class="col-md-6 col">
        <div class="category_article_body">
            <div class="top_article_img">
                <img class="img-fluid" src="/assets/images/news.jpg" alt="news">
            </div>
            <!-- top_article_img -->

            <div class="category_article_title">
                <h5><a href="#" target="_blank">{!!$new->title!!}</a></h5>
            </div>
            <!-- category_article_title -->

            <div class="article_date">
                {{$new->dateline}}
            </div>
            <!-- article_date -->

            <div class="category_article_content">
            {!!$new->intro!!}
            </div>
            <!-- category_article_content -->

        </div>
        <!-- category_article_body -->
    </div>
    <!-- col-md-6 -->
    @endforeach
</div>
<!-- row -->
</div>

<section class="container">

    @include('blocks.subscribe')
<!-- </div>
</div>
</div>
</div>
</section> -->

@endsection
