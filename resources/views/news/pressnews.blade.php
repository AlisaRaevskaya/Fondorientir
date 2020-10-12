@extends('layout')

@section('content')

<section id="entity_section" class="entity_section">
<div class="container">
<div class="row">
<div class="col-md-8">

<div class="entity_wrapper">

<h1>{{$category->ru_name}}</h1>
@foreach($pressnews as $item)

    <div class="entity_title">
        <h1><a href="{{route('news.category.id', [$category->name, $item->id])}}" target="_self">
        {{$item->title}}</a>
        </h1>
    </div>
    <!-- entity_title -->

    <div class="entity_meta">
        {{$item->dateline}}
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
        <img class="img-responsive" src="/assets/images/{{$item->image}}" alt="feature-top">
    </div>
    <!-- entity_thumb -->

    <div class="entity_content">
        <p>{{$item->title}}</p>
    </div>

    <div class="entity_content">
        <p>{{$item->intro}}</p>
    </div>


    <!-- entity_content -->
<p><a href="{{route('news.category.id', [$category->name, $item->id])}}"> Подробнее>>></a></p>
@endforeach
</div>
<!-- entity_wrapper -->

</div>
<!-- col-md-4 -->

</div>
<!-- row -->
<h2><a href="{{route('news.category', $chosen_category->name)}}">{{$chosen_category->ru_name}}</a></h2>

<div class="col-md-4">
<div class="widget">
    <div class="widget_title widget_black">
@foreach($chosen as $choice)

    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="/assets/images/{{$choice->image}}" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="{{route('news.category.id', [$category->name, $choice->id])}}" target="_blank">
                {{$choice->title}}</a>
            </h3>
            <span class="media-date">
            <a href="#">{{$choice->dateline}}</a></span>

            <div class="widget_article_social">
                <span>
                    <a href="single.html" target="_blank"> <i class="fa fa-share-alt"></i>424</a> Shares
                </span>
                <span>
                    <a href="single.html" target="_blank"><i class="fa fa-comments-o"></i>4</a> Comments
                </span>
            </div>
@endforeach
        </div>
    </div>

 <p class="widget_divider"><a href="#" target="_blank">Больше новостей</a></p>
</div>


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
<!-- entity_section -->

</section>

@endsection



