@extends('layout')
@section('content')

<section id="feature_news_section" class="feature_news_section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="feature_article_wrapper">
                    <div class="feature_article_img">
                        <img class="img-responsive top_static_article_img" src="/assets/images/imm.jpg"
                             alt="feature-top">

                    </div>
                </div>
                <!-- feature_article_wrapper -->

            </div>
            <!-- col-md-7 -->

            <div class="col-md-4">
                     <div class="feature_static_wrapper">
                    <div class="feature_article_img">
                        <img class="img-responsive" src="/assets/images/banner.png" alt="feature-top">
                    </div>

                </div>
                <!-- feature_static_wrapper -->

            </div>
            <!-- col-md-5 -->


        </div>
        <!-- Row -->

    </div>
    <!-- container -->

</section>
<!-- Feature News Section -->

<section>
    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <div class="entity-wrapper">

                <div class="entity_title">
                <h1>Добро пожаловать!</h1>
                </div>

                <div class="entity_content">
                    @foreach($mainContent as $item)
                    <p>{!!$item->content!!}</p>
                    @endforeach
                </div>

                </div>
            </div>

            <div class="col-md-4">
            @include('blocks.feedback_block')
            @include('blocks.status')
            </div>

            </div>
        </div>
                <div class="container">
                    <div class="row">


                    <div class="col-md-8">
                    <div class="widget_title widget_black">
                    <h2><a href="{{route('news')}}">Новости</a></h2>
                    </div>
                    @foreach($news as $new)
                        <div class="col-md-6 col">
                            <div class="category_article_body">

                                <div class="top_article_img">
                                    <img class="img-fluid" src="/assets/images/news.jpg" alt="news">
                                </div>
                                <!-- top_article_img -->

                                <div class="category_article_title">
                                    <h5><a href="#" target="_blank">{!!$new->title!!}</a></h5>
                                </div>
                                <!-- category_article_title -->

                                <div class="article_date">
                                    {{$new->dateline}}
                                </div>
                                <!-- article_date -->

                                <div class="category_article_content">
                                {!!$new->intro!!}
                                </div>
                                <!-- category_article_content -->

                                <div class=""><a href ="{{route('news.category.id', [$category->name, $new->id])}}" class="btn btn-primary">Подробнее>></a></div>

                            </div>
                            <!-- category_article_body -->

                        </div>
                        <!-- col-md-6 -->
                        @endforeach
                        <div>
                        <h1 class="divider"><a href="{{route('news')}}">Все новости&nbsp;&raquo;</a></h1>
                        </div>
                        </div>

                        <div class="col-md-4">

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
                        </div>

                        </div>

                    </div>
                <!-- row -->
                </div>
            <!-- container -->

                @include('blocks.subscribe')
                </div>
                </div>

        </div>
    </div>
</section>

@endsection
