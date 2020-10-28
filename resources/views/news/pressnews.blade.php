@extends('layout')

@section('content')

<section id="entity_section" class="entity_section">
<div class="container">
<div class="row">
<div class="col-md-8">

<div class="entity_wrapper">

<div class="row justify-content-center">
<h1 style="text-decoration:underline">{{$category->ru_name}}</h1>
</div>

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


    <div class="entity_thumb">
        <img class="img-responsive" src="/assets/images/{{$item->image}}" alt="feature-top">
    </div>
    <!-- entity_thumb -->

    <div class="entity_content">
        <p>{!!$item->intro!!}</p>
    </div>

    <div class="entity_footer">
    <div class="entity_tag">
<span class="blank"><a href="{{route('news.category.id', [$category->name, $item->id])}}"> Подробнее>>></a></span>
</div>
</div>

@endforeach

<nav aria-label="Page navigation" class="pagination_section">
    <ul class="pagination">
        <li>{{$pressnews->links()}}</li>
    </ul>
</nav>
</div>


<div class="col-md-4">
<!-- row -->
<h2><a href="{{route('news.category', $chosen_category->name)}}">{{$chosen_category->ru_name}}</a></h2>

<div class="widget">
    <div class="widget_title widget_black">
@foreach($chosen as $choice)

    </div>
    <div class="media">
        <div class="media-left">
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

</div>


</div>
<!-- container -->
<!-- entity_section -->
</div>
<!-- entity_wrapper -->

</div>
<!-- col-md-4 -->

</div>
</section>

@endsection



