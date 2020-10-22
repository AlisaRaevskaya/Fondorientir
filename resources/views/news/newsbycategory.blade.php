@extends('layout')

@section('content')

<section id="entity_section" class="entity_section">
<div class="container">
<div class="row">
<div class="col-md-8">


<h1 style="text-decoration:underline">{{$category->ru_name}}</h1>



<div class="entity_wrapper">

@foreach($newsby as $item)

    <div class="entity_title">
        <h1><a href="{{route('news.category.id', [$category->name, $item->id])}}"
            target="_self">
        {{$item->title}}</a>
        </h1>
    </div>
    <!-- entity_title -->

    <div class="entity_meta">
        <a href="#">{{$item->dateline}}</a>
    </div>
    <!-- entity_meta -->


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

    <!-- entity_content -->
    <div class="entity_footer">
    <div class="entity_tag">
            <span class="blank">{{$category->ru_name}}</span>
        </div>
</div>

<h3><a href="{{route('news.category.id', [$category->name, $item->id])}}"> Подробнее>>></a></h3>

@endforeach

</div>
<!-- entity_wrapper -->

</div>
<!-- col-md-4 -->

</div>
<!-- row -->
<nav aria-label="Page navigation" class="pagination_section">
    <ul class="pagination">
        <li>{{$newsby->links()}}</li>
    </ul>
</nav>
</div>
<!-- container -->

</section>
<!-- entity_section -->

@endsection
<!-- Popular News -->
