@extends('layout',['seo' => $page->getSeo()])
@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">

                <div class="col-md-1"></div>

                <div class="col-md-10">
                    <div class="entity-wrapper">

                        <div class="entity_title">
                            <h1>{!! $item->title !!}</h1>
                        </div>
                        <!-- entity_title -->

                        <div class="entity_meta">
                            {{ $item->dateline }}
                        </div>
                        <!-- entity_meta -->

                        @if (isset($item->image))
                            <div class="entity_thumb">
                                <img class="img-responsive" src="{{ asset('storage/news/' . $item->image) }}"
                                    alt="{{ $item->image }}">
                            </div>
                        @endif

                        <div class="entity_content">
                            {!! $item->body !!}
                        </div>

                        @if ($item->source_name)
                            <div class="entity_thumb">
                                <span>
                                    <h6>Источник:{{ $item->source_name }}:</h6>
                                    @if ($item->source_link)
                                        <h6>Ccылка:<a href="{!!  $item->source_link !!}"></a></h6>
                                    @endif
                                </span>
                            </div>
                        @endif
                        <div class="m30"><a href="{{ url()->previous() }}" class="btn btn-default">
                                Назад </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
@endsection
