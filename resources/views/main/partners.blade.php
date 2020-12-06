@extends('layout')
@section('content')

    <section id="entity_section" class="entity_section">
        <div class="container">
            `<div class="row">
                <div class="picture_padding">
                    <img src="/assets/images/partners.jpg" alt="partners" class="img-responsive">
                </div>
                <div class="col-md-1"></div>

                <div class="col-md-10">

                    <div class="entity-wrapper">

                        <div class="entity_title">
                            <h1 style="margin-left: 18pt; text-align: center;">Партнеры ФОНДА "ОРИЕНТИР"</h1>
                        </div>

                        <div class="entity_content partners">
                            {!! $page->content !!}
                        </div>
                    </div>
                </div>
                <!-- row -->`
                <div class="col-md-1"></div>
            </div>
            <!-- container -->
        </div>
    </section>
@endsection
