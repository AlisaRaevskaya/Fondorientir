@extends('layout')
@section('content')
    <div class="wrapper main_content">
        <section id="feature_news_section" class="feature_news_section">
            <div class="container">
                <div class="feature_article_wrapper">
                    <div class="feature_column_9">
                            <div class="feature_article_img">
                                <img class="img-responsive top_static_article_img" src="/assets/images/{{$main_image}}"
                                    alt="{{$main_image}}">

                            </div>

                    </div>
                    <!-- col-md-7 -->

                    <div class="feature_column_3">
                            <div class="float-right">
                                <a href="{{ route('second_main')}}"><img class="img-responsive"
                                        src="/assets/images/{{$banner}}" alt="{{$banner}}"></a>
                            </div>
                    </div>
                    <!-- col-md-5 -->


                </div>
                <!-- Row -->

            </div>
            <!-- container -->

        </section>
        <!-- Feature News Section -->

        <section class="main_info">
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
                        <div>
                            @include('blocks.feedback_block')
                        </div>
                        <div>
                            @include('blocks.status')
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="category_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">

                        <div class="widget_title widget_black">
                            <h2><a href="{{ route('news') }}">Новости</a></h2>
                        </div>

                        <div class="category_article_wrapper">
                            <div class="category_article_body">
                                @foreach ($news as $new)

                                    <div class="col-md-6 category_news_body">
                                        <div>

                                            <div class="category_article_img">
                                                <a href="{{ route('news.category.id', [$category->name, $new->id]) }}"
                                                    target="_self">
                                                    <img class="img-responsive" src="{{asset('storage/news/'.$new->image)}}" alt="{{$new->image}}">
                                                </a>
                                            </div>

                                            <div class="category_article_title">
                                                <h5><a href="{{ route('news.category.id', [$category->name, $new->id]) }}"
                                                        target="_self">
                                                        {!! $new->title !!}</a></h5>
                                            </div>


                                            <div>
                                                {!!$new->cutDateline()!!}
                                            </div>


                                            @if ($new->intro)
                                                <div class="category_article_content">
                                                    {!!$new->getMiniIntro()!!}
                                                </div>
                                            @endif

                                            <!-- media_social -->
                                            <div><h6><a href="{{ route('news.category.id', [$category->name, $new->id]) }}">Подробнее>></a>
                                                </h6>
                                            </div>
                                        </div>
                                        <!-- category_article_body -->
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


                    <div class="col-md-3">
                        <div class="widget reviews">
                            <div class="widget_title">
                                <h2 style="font-size:14pt;"><a href="{{ route('faq') }}">Вопрос-ответ</a></h2>
                            </div>

                            @foreach ($replies as $reply)
                                <div class="media">

                                    <div class="media-left">
                                        <a href="{{ route('faq.id', $reply->id) }}">
                                            <img class="media-object" src="/assets/images/faq4.png" alt="Generic placeholder image"></a>
                                    </div>
                                    <div class="media-body" style="padding-right:15px;">
                                        <h6 class="reply-title text-left">
                                            <a href="{{ route('faq.id', $reply->id)}}">{!!$reply->title!!}</a>
                                        </h6>
                                    </div>
                                </div>
                            @endforeach
                            <p class="widget_faq_divider">
                                <a href="{{ route('faq') }}" target="_self">Посмотреть все>>></a></p>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>


<div class="container footer_bottom_Section">
    <div class="row">

        <div class="col-md-1"></div>

        <div class="col-md-10">

            <div class="entity_title">
                <h1> Взаимодействуем:</h1>
            </div>

            <div class="d-flex flex-row justify-content-between align-items-center">

                <div class="partner_item col-md-2 ">
                    <p>Кадастровая палата</p><br>
                    <div class="part_img">
                        <img src="/assets/images/footer/kadastr.jpg" alt="kadastrovaya_palata">
                    </div>
                </div>

                <div class="partner_item col-md-2">
                    <p>Федеральная налоговая служба</p>
                    <div class="part_img">
                        <img src="/assets/images/footer/nalogovaya.jpg" alt="nalogovaya" class="rounded-circle">
                    </div>
                </div>

                <div class="partner_item col-md-2">
                    <p>Служба судебных приставов</p>
                    <div class="part_img">
                        <img src="/assets/images/footer/pristavy.jpg" alt="pristavy">
                    </div>
                </div>

                <div class="partner_item col-md-3">
                    <p> Федеральная служба защиты прав потребителей</p>
                    <div class="part_img">
                        <img src="/assets/images/footer/potrebitel.jpg" alt="potrebitel_service">
                    </div>
                </div>

                <div class="partner_item col-md-2">
                    <p>Россотрудничество</p><br>
                    <div>
                        <img src="/assets/images/footer/rossotrudnichestvo.png" alt="rossotrudnichestvo">
                    </div>
                </div>

                <div class="row justify-content-between margin-top">

                    <div class="partner_item_2 col-md-6 text-left">
                        <div class="text-center">
                            <p> Федеральное агентство по делам национальностей</p>
                        </div>
                        <div>
                            <img src="/assets/images/footer/fadn.jpg" alt="nation_agency" class="img-responsive" style="display: block;
      margin: 0 auto; ">
                        </div>
                    </div>

                    <div class="partner_item_3 col-md-6 margin-top">
                        <div class="text-center">
                            <p>Федеральная служба по экологическому,
                                технологическому и атомному надзору</p>
                        </div>
                        <div>
                            <img src="/assets/images/footer/rosteh.jpg" alt="rostehnadzor" class="img-responsive" style="display: block;
      margin: 0 auto; ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

@endsection
