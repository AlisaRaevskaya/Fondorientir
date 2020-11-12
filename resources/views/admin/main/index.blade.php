@extends('admin.layout')
@section('content')


    <div class="wrapper container" style="padding: 0 20px; ">


        @foreach ($pages as $page)
            <div class="container-fluid">
                <a href="{{ route('admin.edit', $page->id) }}" class="btn btn-primary">Редактировать</a>
            </div>


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
                                    <a href="{{ route('reception') }}"><img class="img-responsive"
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
    </div>
    </div>
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
                            <p class="text-justify">{!! $page->content !!}</p>
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


        </div>
        </div>
    </section>
    @endforeach
    </div>

@endsection
