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
        <img class="img-responsive" src="/assets/images/law.jpg" alt="feature-top">
    </div>

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
