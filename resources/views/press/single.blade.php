@extends('layout',['seo' => $page->getSeo()])
@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="entity-wrapper">

                        <div class="entity_title">
                            <h1>{!! $item->title !!}</h1>
                        </div>
                        <!-- entity_title -->

                        <div class="entity_meta">
                            {{ $item->dateline }}
                        </div>
                        <!-- entity_meta -->


                        <div class="entity_content">
                            {!! $item->body !!}
                        </div>

                        @if ($item->source_name)
                            <div class="entity_thumb">
                                <span>
                                    <h6>Источник:{{ $item->source_name }}</h6>
                                    @if ($item->source_link)
                                        <p><a href="{{ $item->source_link }}">Ccылка</a></p>
                                    @endif
                                </span>
                            </div>
                        @endif
                        <div class="m30">
                            <h6><a href="{{ url()->previous() }}" class="btn btn-default btn-sm" style="padding:10px;">
                                    <<< Назад </a>
                            </h6>
                        </div>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
