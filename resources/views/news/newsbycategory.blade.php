@extends('layout')

@section('content')

<section id="entity_section" class="entity_section">
<div class="container">
<div class="row">
<div class="col-md-8">


<div class="entity_footer">

<div class="entity_tag">
<span class="blank"><a href="{{route('news.category', $category->name)}}"></a></span>
    </div>
    </div>


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

    <!-- entity_content -->
    <div class="entity_footer">
    <div class="entity_tag">
            <span class="blank"><a href="#">{{$category->name}}</a></span>
        <!-- @If($subcategory)
        <span class="blank"><a href="#">$subcategory->name</a></span>
        @endif -->
        </div>
</div>

<p><a href="{{route('news.category.id', [$category->name, $item->id])}}"> Подробнее>>></a></p>
@endforeach

</div>
<!-- entity_wrapper -->

</div>
<!-- col-md-4 -->

</div>
<!-- row -->
<nav aria-label="Page navigation" class="pagination_section">
    <ul class="pagination">
        <li>
            <a href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a>
        </li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li>
            <a href="#" aria-label="Next" class="active"> <span aria-hidden="true">&raquo;</span> </a>
        </li>
    </ul>
</nav>
</div>
<!-- container -->

</section>
<!-- entity_section -->

@endsection
<!-- Popular News -->
