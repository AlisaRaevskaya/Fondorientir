@extends('layout', ['seo' => $page->getSeo()])
@section('content')

    <div class="wrapper">
        <section id="entity_section" class="entity_section">
            <div class="container">
                <div class="row">
                    <div class="owl-carousel owl-theme">
                        <div class="slide">
                            <a href="{{ route('second_main') }}"><img src="/storage/ban3.png" class="img-responsive"
                                    alt="main.jpg"></a>
                        </div>
                        <div class="slide">
                            <a href="{{ route('second_main') }}"><img src="/storage/banner2.png" class="img-responsive"
                                    alt="main.jpg"></a>
                        </div>
                        <div class="slide">
                            <a href="{{ route('second_main') }}"> <img src="/storage/banner3.png" class="img-responsive"
                                    alt="main.jpg"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Feature News Section -->
        <section class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="main_entity-wrapper">
                            <div class="main_entity_content">
                                {!! $page->content !!}
                            </div>
                        </div>

                        <div class="category_article">
                            <div class="widget_title widget_black">
                                <h2><a href="{{ route('news') }}">Новости</a></h2>
                            </div>
                            <div class="flex-row">
                                @foreach ($news as $new)
                                    <div class="category_news_body" style="padding-left:10px;">
                                        <div class="category_article_img">
                                            <a href="{{ route('news_category.id', $new->id) }}" target="_self">
                                                <img class="img-responsive" style="max-width:400px;max-height:250px;"
                                                    src="{{ asset('storage/news/' . $new->image) }}"
                                                    alt="{{ $new->image }}"></a>
                                        </div>
                                        <div class="category_article_title">
                                            <h3>
                                                <a href="{{ route('news_category.id', $new->id) }}" target="_self">
                                                    {!! $new->title !!}</a>
                                            </h3>
                                        </div>
                                        <div>
                                            {!! $new->cutDateline() !!}
                                        </div>

                                        @if ($new->intro)
                                            <div class="">
                                                {!! $new->getMiniIntro() !!}
                                            </div>
                                        @endif

                                        <div>
                                            <h6><a
                                                    href="{{ route('news_category.id', [$category->name, $new->id]) }}">Подробнее>></a>
                                            </h6>
                                        </div>

                                    </div>
                                @endforeach
                            </div>
                            <!-- Design News Section -->
                            <div class="news_divider">
                                <p class="divider"><a href="{{ route('news') }}"> Все новости>>></a></p>
                            </div>
                        </div>
                    </div>
                    @include('layouts.main_sidebar')
                </div>
        </section>
    </div>
@endsection
