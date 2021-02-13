@extends('secondsite.layout',['seo' => $page->getSeo()])

@section('content')

    <section class="entity_section">
        <div class="container">
            <div class="row">

                <div class="col-md-9 hotline_box">
                    <div>
                        <img src="/storage/app/public/hotline.jpg" alt="hotline.jpg" class="img-responsive">
                    </div>

                    <div class="entity_title m30">
                        <h1><strong>Горячая линия</strong></h1>
                    </div>
                    <div class="entity_wrapper">
                        {!! $page->content !!}
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
