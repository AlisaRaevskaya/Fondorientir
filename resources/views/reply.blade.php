@extends('layout')
@section('content')
<section id="entity_section" class="entity_section">
<div class="container">
<div class="row">
<div class="col-md-8">

<div class="category_article_wrapper conatiner">
@foreach($topic as $top)
    <div class="entity_title">
        <h1>{{$top->title}}</h1>
    </div>
    <!-- entity_title -->

    <div class="entity_meta">
       {{$top->dateline}}
    </div>
    <!-- entity_meta -->
    <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-full"></i>
    </div>
    <!-- rating -->

    <div class="entity_social">
        <a href="#" class="icons-sm sh-ic"><i class="fa fa-share-alt"></i><b>424</b>
            <span class="share_ic">Shares</span>
        </a>
        <a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
        <!--Twitter-->
        <a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
        <!--Google +-->
        <a href="#" class="icons-sm inst-ic"><i class="fa fa-google-plus"> </i></a>
        <!--Linkedin-->
        <a href="#" class="icons-sm tmb-ic"><i class="fa fa-ge"> </i></a>
        <!--Pinterest-->
        <a href="#" class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
        <span class="arrow">&raquo;</span>
    </div>
    <!-- entity_social -->

    <div class="row">
        <div class="col-md-7">
            <div id="featured-news-carousal" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img class="img-responsive" src="/assets/img/category_img9.jpg" alt="Chania">
                    </div>
                    <!--feature_news_item-->
                    <div class="item">
                        <img class="img-responsive" src="/assets/img/category_img13.jpg" alt="Chania">
                    </div>
                    <!--feature_news_item-->
                    <div class="item">
                        <img class="img-responsive" src="/assets/img/category_img14.jpg" alt="Chania">
                    </div>
                    <!--feature_news_item-->
                    <div class="item">
                        <img class="img-responsive" src="/assets/img/category_img15.jpg" alt="Chania">
                    </div>
                    <!--feature_news_item-->

                    <!-- Left and right controls -->
                    <div class="control-wrapper">
                        <a class="left carousel-control" href="#featured-news-carousal" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i> </a>
                        <a class="right carousel-control" href="#featured-news-carousal" role="button"
                           data-slide="next"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                    </div>

                </div>
                <!--carousel-inner-->

            </div>
            <!--carousel-->

        </div>
        <!-- col-md-7 -->

        <div class="col-md-5">
            <div class="right_category_image">
                <img class="img-responsive" src="/assets/img/category_img10.jpg" alt="feature-top">
            </div>
            <!--carousel-->

            <div class="right_category_image">
                <img class="img-responsive" src="/assets/img/category_img11.jpg" alt="feature-top">
            </div>
            <!--carousel-->

        </div>
        <!-- col-md-5 -->

    </div>
    <!-- row -->

    <div class="entity_content">
        <p>{{$top->body}} </p>
    </div>
    <!--entity_content-->

</div>

@endforeach

</div>
</div>
</div>
</section>
@endsection
