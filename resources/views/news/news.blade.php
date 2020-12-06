<!-- Left Section -->
@extends('layout')

@section('content')

    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">

                <div class="col-md-1"></div>

                <div class="col-md-10">
                    <div class="entity-wrapper">

                        <div class="row justify-content-center">
                            <h1 style="text-decoration:underline">Новости</h1>
                        </div>

                        @foreach ($news as $item)
                            <div class="row justify-content-md-center m30">
                                <div class="col-md-6">
                                    <div class="entity_img">
                                        <img class="img-responsive"src="/storage/news/{{ $item->image }}" alt="{{ $item->title }}">
                                    </div>
                                </div>

                                <div class="col-md-6">

                                    <div class="entity_title">
                                        <h1><a href="{{ route('news.category.id', [$category->name, $item->id]) }}"
                                                target="_self">
                                                {{ $item->title }}</a>
                                        </h1>
                                    </div>

                                    <div class="entity_meta">
                                        <p>{{ $item->dateline }}</p>
                                    </div>

                                    <div class="entity_intro">
                                        {!!$item->intro!!}
                                    </div>

                                    <div>
                                        <a href="{{ route('news.category.id', [$category->name, $item->id]) }}"
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
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
@endsection
<!-- Popular News -->
