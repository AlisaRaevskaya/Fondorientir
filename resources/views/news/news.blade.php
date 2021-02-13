<!-- Left Section -->
@extends('layout',['seo' => $page->getSeo()])

@section('content')

    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    <div class="entity-wrapper">

                        <div class="row justify-content-center">
                            <h1 style="text-decoration:underline">Новости</h1>
                        </div>

                        @foreach ($news as $item)
                            <div class="row justify-content-md-center m30">
                                <div class="col-md-6">
                                    <div class="entity_img news_entity_img">
                                        <img class="img-responsive"
                                            src="{{ asset('storage/app/public/news/' . $item->image) }}"
                                            alt="{{ $item->image }}">
                                    </div>
                                </div>

                                <div class="col-md-6">

                                    <div class="entity_title">
                                        <h5><a href="{{ route('news_category.id', $item->id) }}">
                                                {{ $item->title }}</a>
                                        </h5>
                                    </div>

                                    <div class="entity_meta">
                                        <p>{{ $item->cutDateline() }}</p>
                                    </div>

                                    @if (isset($item->intro))
                                        <div class="entity_intro">
                                            {!! $item->intro !!}
                                        </div>
                                    @endif

                                    <div class="mt10">
                                        <a href="{{ route('news_category.id', $item->id) }}"
                                            class="btn btn-outline-primary btn-lg active btn_news" role="button"
                                            aria-pressed="true">
                                            Подробнее>>></a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        @endforeach

                        <nav aria-label="Page navigation" class="pagination_section">
                            <ul class="pagination">
                                <li>{{ $news->links() }}</li>
                            </ul>
                        </nav>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
<!-- Popular News -->
