@extends('layout')
@section('content')
<section id="entity_section" class="entity_section">
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="entity_wrapper">

@foreach($newsby as $item)
    <div class="entity_title">
        <h1>{{$item->title}}</a></h1>
    </div>
    <!-- entity_title -->

    <div class="entity_meta">
    {{$item->dateline}}
    </div>
    <!-- entity_meta -->



    <div class="entity_social">
        <a href="#" class="icons-sm sh-ic">
            <i class="fa fa-share-alt"></i>
            <b>424</b> <span class="share_ic">Shares</span>
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
    </div>
    <!-- entity_social -->

    <div class="entity_thumb">
        <img class="img-responsive" src="/assets/images/{{$item->image}}" alt="feature-top">
    </div>
    <!-- entity_thumb -->

    <div class="entity_content">
        <p>
        {!!$item->body!!}
        </p>
    </div>

    <!-- entity_content -->

    <div class="entity_footer">
        <div class="entity_tag">
            <span class="blank"><a href="route({{'news.category', $category->name}})">{{$category->ru_name}}</a></span>
            <!-- <span class="blank"><a href="#">$subcategory? $subcategory->name: ''</a></span>-->
        </div>
        <!-- entity_tag -->

        <div class="entity_social">
            <span><i class="fa fa-share-alt"></i>424 <a href="#">Shares</a> </span>
            <span><i class="fa fa-comments-o"></i>4 <a href="#">Comments</a> </span>
        </div>
        <!-- entity_social -->
    </div>
    <!-- entity_footer -->

</div>
<!-- entity_wrapper -->

@endforeach

<div class="widget_advertisement">
    <img class="img-responsive" src="/assets/img/category_advertisement.jpg" alt="feature-top">
</div>
<!--Advertisement-->

@include('blocks.lawyer_form')



</div>


<!--Advertisement-->
</div>
<!--Right Section-->

<!-- row -->



</div>


</div>
<!-- container -->

</section>
<!-- Entity Section Wrapper -->


@endsection

