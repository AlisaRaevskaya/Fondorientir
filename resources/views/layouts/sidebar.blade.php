<!--Left Section-->

<!-- Advertisement -->


<div class="widget hidden-xs m30">
    <!-- <img class="img-responsive widget_img" src="assets/img/right_add5.jpg" alt="add_one"> -->
    @include('blocks.receipt_block')
</div>


<div class="col-md-3">
<div class="widget">
    <div class="widget_title widget_black">
        <h2><a href="#">Новости</a></h2>
    </div>
    @foreach($news as $item)
    <div class="media">
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">{{$item->title}}</a>
            </h3>
            <span class="media-date"><a href="#">{{$item->dateline}}</a>,  by: <a href="#">Eric joan</a></span>

            <div class="widget_article_social">
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


<!-- Most Commented News -->


<div style="width:300pt;padding:10pt;background-color:lightblue;border-radius:5pt" class="hidden">
    @include('blocks.popup');
</div>
