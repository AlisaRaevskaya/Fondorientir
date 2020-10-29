
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
        </div>

    </div>
    @endforeach
    <p class="widget_divider"><a href="{{route('faq')}}" target="_self">Все вопросы</a></p>
</div>

