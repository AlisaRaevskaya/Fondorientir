@extends('layout')
@section('content')
    <div class="wrapper" style="padding: 0 20px;">
        <section id="feature_news_section" class="feature_news_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="feature_article_wrapper">
                            <div class="feature_article_img">
                                <img class="img-responsive top_static_article_img" src="/assets/images/immigrants.jpg"
                                    alt="feature-top">

                            </div>
                        </div>
                        <!-- feature_article_wrapper -->

                    </div>
                    <!-- col-md-7 -->

                    <div class="col-md-3">
                        <div class="feature_static_wrapper">
                            <div class="feature_article_img">
                                <a href="{{ route('feedback.reception') }}"><img class="img-responsive"
                                        src="/assets/images/banner.png" alt="banner"></a>
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
                    <div class="col-md-9">

                        <div class="entity-wrapper">

                            <div class="entity_title">
                                <h1>Добро пожаловать!</h1>
                            </div>

                            <div class="entity_content">
                                @foreach ($mainContent as $item)
                                    <p class="text-justify">{!! $item->content !!}</p>
                                @endforeach
                            </div>

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="side-block">
                            @include('blocks.feedback_block')
                        </div>
                        <div class="side-block">
                            @include('blocks.status')
                        </div>
                    </div>

                </div>
            </div>



            <section id="category_section" class="category_section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">

                            <div class="widget_title widget_black">
                                <h2><a href="{{ route('news') }}">Новости</a></h2>
                            </div>

                            <div class="category_article_wrapper">
                                <div class="row justify-content-between">
                                    @foreach ($news as $new)

                                        <div class="col-md-6">
                                            <div class="category_article_body">

                                                <div class="top_article_img">
                                                    <a href="{{route('news.category.id',
                                                     [$category->name, $new->id])}}" target="_self">
                                                        <img class="img-responsive"
                                                        src="/assets/images/news.jpg"
                                                            alt="news">
                                                    </a>
                                                </div>

                                                <div class="category_article_title">
                                                <h2><a href="{{ route('news.category.id',
                                                [$category->name, $new->id]) }}" target="_self">
                                                {!!$new->title!!}</a></h2>
                                                </div>


                                                <div class="category_article_date">
                                                    {{$new->dateline}}
                                                </div>

                                                @foreach($intros as $intro) @endforeach
                                                <div class="category_article_content"style="margin-bottom:10pt;">
                                                    {!!$new->intro!!}
                                                </div>


                                                <!-- media_social -->
                                                <h6> <a href="{{ route('news.category.id',
                                                [$category->name, $new->id]) }}">Подробнее>></a></h6>
                                            </div>
                                            <!-- category_article_body -->
                                        </div>

                                    @endforeach
                                    <!-- col-md-6 -->
                                    <p class="divider"><a href="{{ route('news') }}"> Все новости</a></p>
                                </div>
                                <!-- Design News Section -->
                            </div>
                        </div>

                        <div class="col-md-3">

                            <div class="widget reviews">
                                <div class="widget_title">
                                    <h2><a href="{{ route('faq') }}">Вопрос-ответ</a></h2>
                                </div>

                                @foreach ($replies as $reply)
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="{{ route('faq.id', $reply->id) }}"><img class="media-object"
                                                    src="/assets/images/faq3.png" alt="Generic placeholder image"></a>
                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading">
                                                <a href="{{ route('faq.id', $reply->id) }}">{!! $reply->title !!}</a>
                                            </h3>
                                        </div>

                                    </div>
                                @endforeach
                                <p class="widget_divider"><a href="{{ route('faq') }}" target="_self">Все
                                        вопросы</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @include('blocks.subscribe')
    </div>
    </div>

    </div>
    </div>
    </section>
    </div>
@endsection
