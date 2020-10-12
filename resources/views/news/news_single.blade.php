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
    {{$item->created_at}}, by: <a href="#" target="_self">Eric joan</a>
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

<h5><a href="#"><<< Назад</a></h5>

</div>
<!-- entity_wrapper -->

@endforeach
<div class="related_news">
    <div class="entity_inner__title header_purple">
        <h2><a href="#">Related News</a></h2>
    </div>
    <!-- entity_title -->

    <div class="row">
        <div class="col-md-6">
            <div class="media">
                <div class="media-left">
                    <a href="#"><img class="media-object" src="assets/img/cat-mobi-sm1.jpg"
                                     alt="Generic placeholder image"></a>
                </div>
                <div class="media-body">
                    <span class="tag purple"><a href="category.html" target="_self">Mobile</a></span>

                    <h3 class="media-heading"><a href="single.html" target="_self">Apple launches photo-centric wrist
                        watch for Android</a></h3>
                    <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>

                    <div class="media_social">
                        <span><a href="#"><i class="fa fa-share-alt"></i>424</a> Shares</span>
                        <span><a href="#"><i class="fa fa-comments-o"></i>4</a> Comments</span>
                    </div>
                </div>
            </div>
            <div class="media">
                <div class="media-left">
                    <a href="#"><img class="media-object" src="assets/img/cat-mobi-sm3.jpg"
                                     alt="Generic placeholder image"></a>
                </div>
                <div class="media-body">
                    <span class="tag purple"><a href="category.html" target="_self">Mobile</a></span>

                    <h3 class="media-heading"><a href="single.html" target="_self">The Portable Charger or data
                        cable</a></h3>
                    <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>

                    <div class="media_social">
                        <span><a href="#"><i class="fa fa-share-alt"></i>424</a> Shares</span>
                        <span><a href="#"><i class="fa fa-comments-o"></i>4</a> Comments</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="media">
                <div class="media-left">
                    <a href="#"><img class="media-object" src="assets/img/cat-mobi-sm2.jpg"
                                     alt="Generic placeholder image"></a>
                </div>
                <div class="media-body">
                    <span class="tag purple"><a href="category.html" target="_self">Mobile</a></span>

                    <h3 class="media-heading"><a href="single.html" target="_self">Iphone 6 launches white & Grey
                        colors handset</a></h3>
                    <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>

                    <div class="media_social">
                        <span><a href="#"><i class="fa fa-share-alt"></i>424</a> Shares</span>
                        <span><a href="#"><i class="fa fa-comments-o"></i>4</a> Comments</span>
                    </div>
                </div>
            </div>
            <div class="media">
                <div class="media-left">
                    <a href="#"><img class="media-object" src="assets/img/cat-mobi-sm4.jpg"
                                     alt="Generic placeholder image"></a>
                </div>
                <div class="media-body">
                    <span class="tag purple"><a href="category.html" target="_self">Mobile</a></span>
                    <a href="single.html" target="_self"><h3 class="media-heading">Fully new look slim handset
                        like</h3></a>
                    <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>

                    <div class="media_social">
                        <span><a href="#"><i class="fa fa-share-alt"></i>424</a> Shares</span>
                        <span><a href="#"><i class="fa fa-comments-o"></i>4</a> Comments</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Related news -->

<div class="widget_advertisement">
    <img class="img-responsive" src="assets/img/category_advertisement.jpg" alt="feature-top">
</div>
<!--Advertisement-->


@include('blocks.add_comment')
</div>


<!--Advertisement-->
</div>
<!--Right Section-->

<!-- row -->
<form action="#" method="post">
 <div class="media">
    <div class="media mt-3 shadow-textarea blue">
    <img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg"alt="Avatar">
    <h1>Задать вопрос юристу бесплатно</h1>
<div class="form-group">
    <input type="email" name="email" placeholder="Ваш email">
</div>
    <div class="form-group shadow-textarea">
    <label for="exampleFormControlTextarea6"></label>
    <textarea class="form-control rounded-0" id="exampleFormControlTextarea6" rows="3"
    placeholder="Задайте свой вопрос."></textarea>
    </div>
    </div>
  </div>
</div>
</form>
</div>
<!-- container -->

</section>
<!-- Entity Section Wrapper -->


@endsection

