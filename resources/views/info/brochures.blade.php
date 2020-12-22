@extends('layout', ['seo' => $page->getSeo()])
@section('content')

    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    {{-- {!! $page->content !!} --}}
                    <div class="entity_wrapper">

                        <div class="entity_title text-justify">
                            <h5> Фондом "ОРИЕНТИР" разработаны новые брошюры по миграционному и трудовому
                                законодательству в доступной и понятной мигрантам форме.</h5>
                        </div>
                        <div class="entity_content text-justify">

                            {!! $page->content !!}

                            <div class="brochures flex-row">

                                <div class="brochure-item col-md-4 col-sm-12">

                                    <h5>Брошюра на таджикском</h5>
                                    <a href="/storage/pdf/брошюра на таджикском языке_1.pdf"><img
                                            src="/assets/images/broch1.jpg" class="img-responsive"
                                            title="Брошюра на таджикском"></a>

                                    <div class="text-center brochure-button">
                                        <a href="/storage/pdf/брошюра на таджикском языке_1.pdf" type="button"
                                            class="btn btn-primary">Посмотреть</a>
                                    </div>
                                </div>

                                <div class="brochure-item col-md-4 col-sm-12">
                                    <h5>Брошюра на узбекском</h5>
                                    <a href="/storage/pdf/брошюра на узбекском языке_1.pdf">
                                        <img src="/assets/images/broch2.jpg" class="img-responsive"
                                            title="Брошюра на узбекском"></a>
                                    <div class="text-center brochure-button">
                                        <a href="/storage/pdf/брошюра на узбекском языке_1.pdf" type="button"
                                            class="btn btn-primary">Посмотреть</a>
                                    </div>
                                </div>

                                <div class="brochure-item col-md-4 col-sm-12">
                                    <h5>Брошюра на русском</h5>
                                    <a href="/storage/pdf/Брошюра на русском языке_1.pdf"><img
                                            src="/assets/images/broch3.jpg" class="img-responsive"
                                            title="Брошюра на русском"></a>
                                    <div class="text-center brochure-button">
                                        <a href="/storage/pdf/Брошюра на русском языке_1.pdf" type="button"
                                            class="btn btn-primary">Посмотреть</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
