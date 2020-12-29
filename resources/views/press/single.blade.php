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
                        <!-- entity_title -->

                        <div class="entity_meta">
                            <p>{{ $item->cutDateline() }}</p>
                        </div>
                        <!-- entity_meta -->

                        <div class="entity_content">
                            {!! $item->body !!}
                        </div>


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
