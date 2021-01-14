@extends('layout',['seo' => $page->getSeo()])
@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    @if (isset($topics))
                        @foreach ($topics as $top)

                            <div class="entity_title">
                                <h1>{!! $top->title !!}</h1>
                            </div>


                            <div class="entity_meta">
                                {{ $top->date_published }}
                            </div>
                            <!-- entity_meta -->

                            @if (isset($top->image))
                                <div class="entity_thumb">
                                    <img class="img-responsive" src="/assets/images/{{ $top->image }}" alt="feature-top">
                                </div>
                            @endif

                            <div>
                                {!! $top->body !!}
                            </div>
                        @endforeach
                    @endif
                    @include('forms.faq-form')
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
