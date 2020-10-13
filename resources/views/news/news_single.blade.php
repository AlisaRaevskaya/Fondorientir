@extends('layout')
@section('content')
<section id="entity_section" class="entity_section">
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="entity_wrapper">

@foreach($newsby as $item)
    <div class="entity_title">
        <h1><a href="/news/{category}/{id}</a>">{{$item->title}}</a></h1>
    </div>
    <!-- entity_title -->

    <div class="entity_meta">
    {{$item->dateline}}
    </div>
    <!-- entity_meta -->

    <div class="entity_rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-full"></i>
    </div>
    <!-- entity_rating -->

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
        <img class="img-responsive" src="assets/img/category_img_top.jpg" alt="feature-top">
    </div>
    <!-- entity_thumb -->

    <div class="entity_content">
        <p>
        {{$item->body}}
        </p>
    </div>

    <!-- entity_content -->

    <div class="entity_footer">
        <div class="entity_tag">
            <span class="blank"><a href="#">{{$category->ru_name}}</a></span>
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


@include('blocks.add_comment')

<div>
    <div class="media mt-3 shadow-textarea blue">

    <div class="row" style="padding-left:20pt">
    <img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="/assets/images/avatar-5.jpg"alt="Avatar">
    <h1>Задать вопрос юристу бесплатно</h1>
    </div>

    <form action="#" method="post"style="padding-left:20px">

    <div class="form-group">
    <input type="email" name="email" placeholder="Ваш email">
    </div>
    <div class="form-group">
    <input type="text" name="name" placeholder="Контактное лицо">
    </div>

    <div class="form-group shadow-textarea">
    <label for="exampleFormControlTextarea6"></label>
    <textarea class="form-control rounded-0" id="exampleFormControlTextarea6"rows="3" cols="5"
    placeholder="Задайте свой вопрос"></textarea>
    </div>

    <input type="submit" class="form-group black" value="Отправить">
    </form>

    </div>
  </div>


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

