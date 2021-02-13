@extends('layout',['seo' => $page->getSeo()])
@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="entity-wrapper">

                        <div class="entity_title">
                            <h1 class="text-justify">{!! $item->title !!}</h1>
                        </div>

                        <div class="entity_meta">
                            <p>{{ $item->cutDateline() }}</p>
                        </div>

                        <div class="entity_content">
                            @if (isset($item->image))
                                <div class="entity_thumb news_single">
                                    <img class="img-responsive" src="{{ asset('storage/app/public/news/' . $item->image) }}"
                                        alt="{{ $item->image }}">
                                </div>
                            @endif
                            {!! $item->body !!}
                        </div>

                        <div class="m30">
                            <a href="{{ url()->previous() }}" class="previous">
                                « Назад </a>
                        </div>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
