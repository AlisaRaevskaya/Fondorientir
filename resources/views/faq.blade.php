@extends('layout')
@section('content')
<section id="entity_section" class="entity_section">
<div class="container">
<div class="row">
<div class="col-md-8">

    <h1>Вопрос-ответ</h1>

    @foreach($replies as $reply)
<div class="entity_wrapper ">

    <div class="entity_title">
        <h2><a href="/faq/{{$reply->id}}" target="_self">
           {{$reply->title}}</a>
        </h2>
    </div>
    <!-- entity_title -->

    <div class="entity_meta">
        <a href="#">{{$reply->dateline}}</a>, by: <a href="#">{{$reply->title}}</a>
    </div>
    <!-- entity_meta -->

    <!-- <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-full"></i>
    </div> -->
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
    <p><a href="/faq/{{$reply->id}}" target="_self">
          Подробнее>></a></p>

    <!-- entity_content -->

</div>
<!-- entity_wrapper -->
@endforeach
<button class="btn blue">Посмотреть все</button>



<!--  -->

</div>
</div>
</div>
</section>
@endsection
