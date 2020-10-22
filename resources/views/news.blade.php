<!-- Left Section -->
@extends('layout')

@section('content')

<section id="entity_section" class="entity_section">
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="entity_wrapper">

@foreach($news as $item)
    <div class="entity_title">
        <h1><a href="{{route('news.category.id', [$category->name, $item->id])}}" target="_self">
        {{$item->title}}</a>
        </h1>
    </div>
    <!-- entity_title -->

    <div class="entity_meta">
        <p>{{$item->dateline}}</p>
    </div>
    <!-- entity_meta -->

    <div class="entity_social">

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

    <!-- <div class="entity_thumb">
        <img class="img-responsive" src="/assets/img/{{$item->image}}" alt="feature-top">
    </div> -->
    <!-- entity_thumb -->

<div class="entity_footer">
    <div class="entity_tag">
            <span class="blank">{{$category->ru_name}}</span>
    </div>
</div>
<div>
    <a href="{{route('news.category.id', [$category->name, $item->id])}}" class="btn btn-outline-primary btn-lg active" role="button" aria-pressed="true">
        Подробнее>>></a>
</div>


@endforeach


    <nav aria-label="Page navigation" class="pagination_section">
    <ul class="pagination">
        <li>{{$news->links()}}</li>
    </ul>
</nav>



</div>
<!-- entity_wrapper -->


<!--Advertisement-->
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
