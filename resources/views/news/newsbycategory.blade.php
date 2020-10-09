@extends('layout')

@section('content')

<section id="entity_section" class="entity_section">
<div class="container">
<div class="row">
<div class="col-md-8">

<div class="entity_wrapper">

<h1>{{$category->name}}</h1>
@foreach($newsby as $item)
@if($item->children)

<div class="entity_footer">
    <div class="entity_tag">
            <span class="blank"><a href="#">Миграционные новости</a></span>
            <span class="blank"><a href="#">СМИ о нас</a></span>
            <span class="blank"><a href="#">Наши новости</a></span>
        </div>
</div>
@endif
    <div class="entity_title">
        <h1><a href="#" target="_self">
        {{$item->title}}</a>
        </h1>
    </div>
    <!-- entity_title -->

    <div class="entity_meta">
        <a href="#">{{$item->dateline}}</a>, by: <a href="#">Eric joan</a>
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

    <div class="entity_thumb">
        <img class="img-responsive" src="/assets/img/category_img_top.jpg" alt="feature-top">
    </div>
    <!-- entity_thumb -->

    <div class="entity_content">
        <p>{{$item->title}}</p>
    </div>
    <!-- entity_content -->



@endforeach
</div>
<!-- entity_wrapper -->

</div>
<!-- col-md-4 -->

</div>
<!-- row -->

</div>
<!-- container -->

</section>
<!-- entity_section -->

@endsection
<!-- Popular News -->
