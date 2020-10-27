<!--Left Section-->

<!-- Advertisement -->

<section>
<div class="widget hidden-xs m30">
    <!-- <img class="img-responsive widget_img" src="assets/img/right_add5.jpg" alt="add_one"> -->

</div>


<div class="col-md-3">
<div class="widget">
@include('blocks.receipt_block')

    <div class="widget_title widget_black" style="overflow:hidden">
        <h2><a href="{{route('news')}}">Новости</a></h2>
    </div>
    @foreach($news as $item)
    <div class="media">
        <div class="media-body">
            <h3 class="media-heading">
                <a href="{{route('news.category.id',[$category->name, $item->id])}}" target="_self">{{$item->title}}</a>
            </h3>
            <span class="media-date">{{$item->dateline}}</span>
            @if($item->intro)
            <div>{!!$item->intro!!}</div>
            @endif
        </div>
    </div>
    @endforeach

    <p class="widget_divider"><a href="{{route('news')}}" target="_self">Больше новостей>>></a></p>
</div>

<div class="widget hidden-xs m30">
<h2>Проверить статус заявления </h2>
<p style="text-decoration: underline"><a href="{{route('status')}}">Просмотреть статус заявления по входящему номеру</a></p>
</div>
<div class="widget hidden-xs m30">
    <!-- <img class="img-responsive widget_img" src="assets/img/right_add5.jpg" alt="add_one"> -->
    @include('blocks.feedback_block')
</div>
<!-- <div class="widget hidden-xs m30">
    <img class="img-responsive adv_img" src="assets/img/right_add1.jpg" alt="add_one">
    <img class="img-responsive adv_img" src="assets/img/right_add2.jpg" alt="add_one">
    <img class="img-responsive adv_img" src="assets/img/right_add3.jpg" alt="add_one">
    <img class="img-responsive adv_img" src="assets/img/right_add4.jpg" alt="add_one">
</div> -->


<div class="widget reviews m30">
    <div class="widget_title widget_black">
        <h2><a href="{{route('faq')}}">Вопрос-ответ</a></h2>
    </div>
    @foreach($replies as $reply)
    <div class="media">
        <div class="media-left">
            <a href="{{route('faq.id', $reply->id)}}"><img class="media-object" src="/assets/images/faq3.png" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="{{route('faq.id', $reply->id)}}">{!!$reply->title!!}</a>
            </h3>
            <div class="widget_article_social">
                <span>
                    <a href="single.html" target="_self"><i class="fa fa-comments-o"></i>4</a> Comments
                </span>
            </div>
        </div>

    </div>
    @endforeach
    <p class="widget_divider"><a href="{{route('faq')}}" target="_self">Все вопросы</a></p>
</div>
<!-- Reviews News -->


<!-- Most Commented News -->
</section>


