@extends('layout', ['seo' => $page->getSeo()])
@section('content')
    <div class="wrapper main_content">
        <section id="feature_news_section" class="feature_news_section">
            <div class="container">
                <div class="feature_article_wrapper">
                    <div class="col-md-12">
                        <div class="sl text-center">
                            <div class="slider">
                                <a href="{{ route('second_main') }}"><img class="img-responsive"
                                        src="{{ asset('storage/ban.png') }}" alt="main.jpg"></a>
                            </div>
                            <div class="slider">
                                <a href="{{ route('second_main') }}"><img class="img-responsive"
                                        src="{{ asset('storage/ban.png') }}" alt="main.jpg"></a>
                            </div>
                            <div class="slider">
                                <a href="{{ route('second_main') }}"> <img class="img-responsive"
                                        src="{{ asset('storage/ban.png') }}" alt="main.jpg"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Feature News Section -->
        <section class="main_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="main_entity-wrapper">

                            <div class="main_entity_content">
                                {{-- <p class="text-justify">{!! $page->content !!}</p>
                                --}}
                                <h6>БЕСПЛАТНАЯ ИНФОРМАЦИОННАЯ И ЮРИДИЧЕСКАЯ ПОМОЩЬ МИГРАНТАМ</h6>
                                <h6>FREE INFORMATION AND LEGAL ASSISTANCE TO MIGRANTS</h6>
                                <h6>КУМАКИ РОЙГОНИ ИТТИЛООТИ ВА ХУКУКИ БА МУХОЧИРОН</h6>
                                <h6>(ДАР ХАЛЛИ БАХСУ ТАЛОШХОИ МЕХНАТИ ВА КУМАК ДАР ВАЗЪИЯТИ МУРАККАБ)</h6>
                                <h6>БЕЗКОШТОВНА ІНФОРМАЦІЙНА ТА ЮРИДИЧНА ДОПОМОГА МІГРАНТАМ</h6>
                                <h6>МУХОЖИРЛАРГА БЕПУЛ МАЪЛУМОТ БЕРИШ ВА ХУҚУҚИЙ ЁРДАМ КУРСАТИШ (МЕҲНАТ БАХСЛАРИНИ
                                    ҲАЛ ҚИЛИШ
                                    ВА ОҒИР ВАЗИЯТЛАРДА ЁРДАМ КУРСАТИШ)</h6>
                                <h6>向移徙者提供援助</h6>

                                <h4 class="text-right">تقديم المساعدة إلى المهاجرين</h4>

                                <div style="display:flex; flex-direction:column;justify-content:center;align-items:center;">
                                    <div class="">
                                        <h4><a href="tel">+7(812)-385-69-89</a></h4>
                                    </div>
                                    <button class="btn btn-sm" id="btn_popup" data-toggle="modal"
                                        data-target="#lawyerQuestion" data-category="Решение трудовых споров">Спросить
                                        юриста
                                        бесплатно</button>
                                    <div><img class="img-responsive" src="{{ asset('storage/fond-2.png') }}"
                                            alt="fond-2.jpg"></div>
                                </div>
                            </div>
                        </div>

                        <div class="category_article">
                            <div class="widget_title widget_black">
                                <h2><a href="{{ route('news') }}">Новости</a></h2>
                            </div>

                            <div class="category_article_wrapper">
                                <div class="category_article_body">
                                    @foreach ($news as $new)
                                        <div class="col-md-6 col-sm-6 category_news_body">
                                            <div>
                                                <div class="category_article_img">
                                                    <a href="{{ route('news_category.id', [$category->name, $new->id]) }}"
                                                        target="_self">
                                                        <img class="img-responsive"
                                                            src="{{ asset('storage/news/' . $new->image) }}"
                                                            alt="{{ $new->image }}"></a>
                                                </div>
                                                <div class="category_article_title">
                                                    <h5>
                                                        <a href="{{ route('news_category.id', [$category->name, $new->id]) }}"
                                                            target="_self">
                                                            {!! $new->title !!}</a>
                                                    </h5>
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
                                        </div>
                                    @endforeach
                                    <!-- col-md-6 -->
                                </div>
                            </div>

                            <!-- Design News Section -->
                            <div class="news_divider">
                                <p class="divider"><a href="{{ route('news') }}"> Все новости>>></a></p>
                            </div>
                        </div>
                    </div>
                    @include('layouts.main_sidebar')
                </div>
            </div>
        </section>
    </div>
@endsection
