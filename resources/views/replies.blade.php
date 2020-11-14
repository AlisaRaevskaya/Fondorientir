@extends('layout')
@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">

                <div class="col-md-10">
                    <div class="container">
                        @if (isset($topics))
                            @foreach ($topics as $top)

                                <div class="entity_title">
                                    <h1>{!! $top->title !!}</h1>
                                </div>
                                <!-- entity_title -->

                                <div class="entity_meta">
                                    {{ $top->dateline }}
                                </div>
                                <!-- entity_meta -->

                                @if (isset($top->image))
                                    <div class="entity_thumb">
                                        <img class="img-responsive" src="/assets/images/{{ $top->image }}"
                                            alt="feature-top">
                                    </div>
                                @endif
                                <div class="">
                                    {!! $top->body !!}
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script src="/assets/js/com-ajax.js"></script>
    <script src="/assets/js/law-ajax.js"></script>
@endsection
