@extends('layout')
@section('content')
<section id="entity_section" class="entity_section">
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="entity_wrapper">
    <!-- <div class="entity_title">
        <h1><a href="#">Chevrolet car-saving technology delivers 'superhuman' sight when you need it most</a></h1>
    </div> -->
    <!-- entity_title -->

    <div class="entity_thumb">
        <img class="img-responsive" src="assets/images/main.jpg" alt="feature-top">
    </div>
    <!-- entity_thumb -->



    <div class="entity_content">
    @foreach($mainContent as $item)
    {{$item->content}}
    @endforeach
    </div>



</div>
<!-- entity_wrapper -->

<div class="related_news">
    <div class="entity_inner__title header_purple">
        <h2><a href="/news">Новости</a></h2>
    </div>
    <!-- entity_title -->

    <div class="row">
    @foreach($news as $item)
        <div class="col-md-6">

            <div class="media">
                <div class="media-left">
                    <a href="#"><img class="media-object" src="assets/img/cat-mobi-sm1.jpg"
                                     alt="Generic placeholder image"></a>
                </div>
                <div class="media-body">
                    <span class="tag purple"><a href="category.html" target="_self">Категория</a></span>

                    <h3 class="media-heading"><a href="single.html" target="_self">{{$item->title}}</a></h3>
                    <span class="media-date"><a href="#">{{$item->dateline}}</a>,  by: <a href="#">Eric joan</a></span>

                    <div class="media_social">
                        <span><a href="#"><i class="fa fa-share-alt"></i>424</a> Shares</span>
                        <span><a href="#"><i class="fa fa-comments-o"></i>4</a> Comments</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- entity_content -->

<div class="entity_footer">
        <div class="entity_tag">
            <span class="blank"><a href="#">Миграционные новости</a></span>
            <span class="blank"><a href="#">СМИ о нас</a></span>
            <span class="blank"><a href="#">Наши новости</a></span>
        </div>
        <!-- entity_tag -->

        <div class="entity_social">
            <span><i class="fa fa-share-alt"></i>424 <a href="#">Shares</a> </span>
            <span><i class="fa fa-comments-o"></i>4 <a href="#">Comments</a> </span>
        </div>
        <!-- entity_social -->

    </div>
    <!-- entity_footer -->

  <!-- Advertisement -->

    <!-- <img class="img-responsive widget_img" src="assets/img/right_add5.jpg" alt="add_one"> -->
    @include('blocks.subscribe')
<!-- Advertisement -->
<!-- Related news -->

<div class="widget_advertisement">
    <img class="img-responsive" src="assets/img/category_advertisement.jpg" alt="feature-top">
</div>
<!--Advertisement-->

<div class="readers_comment">
    <div class="entity_inner__title header_purple">
        <h2>Readers Comment</h2>
    </div>
    <!-- entity_title -->

    <div class="media">
        <div class="media-left">
            <a href="#">
                <img alt="64x64" class="media-object" data-src="assets/img/reader_img1.jpg"
                     src="assets/img/reader_img1.jpg" data-holder-rendered="true">
            </a>
        </div>
        <div class="media-body">
            <h2 class="media-heading"><a href="#">Sr. Ryan</a></h2>
            But who has any right to find fault with a man who chooses to enjoy a pleasure that has
            no annoying consequences, or one who avoids a pain that produces no resultant pleasure?

            <div class="entity_vote">
                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a>
                <a href="#"><span class="reply_ic">Reply </span></a>
            </div>
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img alt="64x64" class="media-object" data-src="assets/img/reader_img2.jpg"
                             src="assets/img/reader_img2.jpg" data-holder-rendered="true">
                    </a>
                </div>
                <div class="media-body">
                    <h2 class="media-heading"><a href="#">Admin</a></h2>
                    But who has any right to find fault with a man who chooses to enjoy a pleasure
                    that has no annoying consequences, or one who avoids a pain that produces no
                    resultant pleasure?

                    <div class="entity_vote">
                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a>
                        <a href="#"><span class="reply_ic">Reply </span></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- media end -->

    <div class="media">
        <div class="media-left">
            <a href="#">
                <img alt="64x64" class="media-object" data-src="assets/img/reader_img3.jpg"
                     src="assets/img/reader_img3.jpg" data-holder-rendered="true">
            </a>
        </div>
        <div class="media-body">
            <h2 class="media-heading"><a href="#">S. Joshep</a></h2>
            But who has any right to find fault with a man who chooses to enjoy a pleasure that has
            no annoying consequences, or one who avoids a pain that produces no resultant pleasure?

            <div class="entity_vote">
                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a>
                <a href="#"><span class="reply_ic">Reply </span></a>
            </div>
        </div>
    </div>
    <!-- media end -->
</div>


</div>


<!--Left Section-->

<!-- Advertisement -->

<div class="widget hidden-xs m30">
    <!-- <img class="img-responsive widget_img" src="assets/img/right_add5.jpg" alt="add_one"> -->
    @include('blocks.receipt_block')
</div>


<div class="col-md-4">
<div class="widget">
    <div class="widget_title widget_black">
        <h2><a href="#">Новости</a></h2>
    </div>
    @foreach($news as $item)
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right1.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">{{$item->title}}</a>
            </h3>
            <span class="media-date"><a href="#">{{$item->dateline}}</a>,  by: <a href="#">Eric joan</a></span>

            <div class="widget_article_social">
                <span>
                    <a href="single.html" target="_self"> <i class="fa fa-share-alt"></i>424</a> Shares
                </span>
                <span>
                    <a href="single.html" target="_self"><i class="fa fa-comments-o"></i>4</a> Comments
                </span>
            </div>
        </div>
    </div>
    @endforeach

    <p class="widget_divider"><a href="#" target="_self">More News&nbsp;&raquo;</a></p>
</div>
<div class="widget hidden-xs m30">
    <!-- <img class="img-responsive widget_img" src="assets/img/right_add5.jpg" alt="add_one"> -->
    @include('blocks.checkstatus')
</div>
<div class="widget hidden-xs m30">
    <!-- <img class="img-responsive widget_img" src="assets/img/right_add5.jpg" alt="add_one"> -->
    @include('blocks.feedback_block')
</div>
<div class="widget hidden-xs m30">
    <img class="img-responsive adv_img" src="assets/img/right_add1.jpg" alt="add_one">
    <img class="img-responsive adv_img" src="assets/img/right_add2.jpg" alt="add_one">
    <img class="img-responsive adv_img" src="assets/img/right_add3.jpg" alt="add_one">
    <img class="img-responsive adv_img" src="assets/img/right_add4.jpg" alt="add_one">
</div>


<div class="widget reviews m30">
    <div class="widget_title widget_black">
        <h2><a href="{{route('faq')}}">Вопрос-ответ</a></h2>
    </div>
    @foreach($replies as $reply)
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right1.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="{{route('faq')}}">{{$reply->title}}</a>
            </h3>
        </div>
    </div>
    @endforeach
    <p class="widget_divider"><a href="#" target="_self">Все вопросы&nbsp;&raquo;</a></p>
</div>
<!-- Reviews News -->



<div class="widget m30">
    <div class="widget_title widget_black">
        <h2><a href="#">Обратная связь</a></h2>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right1.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">Отправить сообщение.</a>
            </h3>
        </div>
    </div>


    <p class="widget_divider"><a href="#" target="_self">More News&nbsp;&nbsp;&raquo; </a></p>
</div>
<!-- Most Commented News -->

<div class="widget m30">
    <div class="widget_title widget_black">
        <h2><a href="#">Editor Corner</a></h2>
    </div>
    <div class="widget_body"><img class="img-responsive left" src="assets/img/editor.jpg"
                                  alt="Generic placeholder image">

        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
            users after installed base benefits. Dramatically visualize customer directed convergence without</p>

        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
            users after installed base benefits. Dramatically visualize customer directed convergence without
            revolutionary ROI.</p>
        <button class="btn pink">Read more</button>
    </div>
</div>
<!-- Editor News -->

<div class="widget hidden-xs m30">
    <img class="img-responsive add_img" src="assets/img/right_add7.jpg" alt="add_one">
    <img class="img-responsive add_img" src="assets/img/right_add7.jpg" alt="add_one">
    <img class="img-responsive add_img" src="assets/img/right_add7.jpg" alt="add_one">
    <img class="img-responsive add_img" src="assets/img/right_add7.jpg" alt="add_one">
</div>
<!--Advertisement -->


<div class="widget hidden-xs m30">
    <img class="img-responsive widget_img" src="assets/img/podcast.jpg" alt="add_one">
</div>
<!--Advertisement-->
</div>
<!--Right Section-->

</div>
<!-- row -->

</div>
<!-- container -->

</section>
<!-- Entity Section Wrapper -->

<!-- Subscriber Section -->
@endsection
