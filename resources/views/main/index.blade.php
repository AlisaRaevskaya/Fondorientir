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
                             <!-- <div>
                                    <div>  <img class="" src="/assets/images/imm.jpg" alt="First slide"> </div>
                                    <div>  <img class="" src="/assets/images/imm.jpg" alt="First slide"> </div>
                                    <div>  <img class="" src="/assets/images/imm.jpg" alt="First slide"> </div>
                                    <div>  <img class="" src="/assets/images/imm.jpg" alt="First slide"> </div>
                            </div> -->
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
                    <!-- feature_article_img -->

                    <!-- <div class="feature_article_inner">
                        <div class="feature_article_title">
                            <h2><a href="single.html" target="_self" style="color:#1414b8">Уважаемые посетители!</a></h2>
                        </div>
                        <!-- feature_article_title -->

                        <!-- <div class="feature_article_content">
                            <h5>В интернет приемной вы можете задать любой интересующий Вас вопрос в любое время.
                            Оставьте заявку и наши специалисты с Вами свяжутся.</h5>
                            <button type="button" class="btn btn-primary">
                            <a href="{{route('feedback.reception')}}">Задать Вопрос</a></button>
                        </div> -->


                        <!-- feature_article_content -->
<!--
                    </div> -->
                    <!-- feature_article_inner -->

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

                <div class="widget_title widget_black">
                        <h2><a href="{{route('news')}}">Новости</a></h2>
                </div>

                <div class="container">
                    <div class="row">

                    <div class="col-md-8">
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


                            </div>
                            <!-- category_article_body -->
                            <div class=""><a href ="" class="btn btn-primary">Подробнее>></a></div>
                        </div>
                        <!-- col-md-6 -->
                        @endforeach
                        <h1 class="divider"><a href="{{route('news')}}">Все новости&nbsp;&raquo;</a></h1>
                        </div>



                        <div class="col-md-4"></div>
                    </div>
                <!-- row -->


                </div>
            <!-- container -->

                @include('blocks.subscribe')
                </div>
                </div>


                <div class="col-md-4">@include('blocks.subscribe') </div>
        </div>
    </div>
</section>

@endsection
