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

                                    <h5><strong>Брошюра на таджикском</strong></h5>
                                    <a href="/storage/pdf/брошюра на таджикском языке_1.pdf"><img src="/storage/broch1.jpg"
                                            class="img-responsive" title="Брошюра на таджикском для мигрантов"></a>

                                    <div class="text-center brochure-button">
                                        <a href="/storage/pdf/брошюра на таджикском языке_1.pdf" type="button"
                                            class="btn btn-primary">Посмотреть</a>
                                    </div>
                                </div>

                                <div class="brochure-item col-md-4 col-sm-12">
                                    <h5><strong>Брошюра на узбекском</strong></h5>
                                    <a href="/storage/pdf/брошюра на узбекском языке_1.pdf">
                                        <img src="/storage/broch2.jpg" class="img-responsive"
                                            title="Брошюра на узбекском для мигрантов"></a>
                                    <div class="text-center brochure-button">
                                        <a href="/storage/pdf/брошюра на узбекском языке_1.pdf" type="button"
                                            class="btn btn-primary">Посмотреть</a>
                                    </div>
                                </div>

                                <div class="brochure-item col-md-4 col-sm-12">
                                    <h5><strong>Брошюра на русском</strong></h5>
                                    <a href="/storage/pdf/Брошюра на русском языке_1.pdf">
                                        <img src="/storage/broch3.jpg" class="img-responsive"
                                            title="Брошюра на русском для мигрантов"></a>
                                    <div class="text-center brochure-button">
                                        <a href="/storage/pdf/Брошюра на русском языке_1.pdf" type="button"
                                            class="btn btn-primary">Посмотреть</a>
                                    </div>
                                </div>
                            </div>
                            <div class="brochures flex-row m30 text-justify">
                                <div class="brochure-item_2 col-md-4 col-sm-12">
                                    <h6>Полезная информация для трудовых мигрантов на русском языке</h6>
                                    <a href="/storage/pdf/Брошюра-1.pdf">
                                        <img src="/storage/broch1-1.jpg" class="img-responsive"
                                            title="Информация для трудовых мигрантов на русском языке"></a>
                                    </a>
                                    <div class="text-center brochure-button">
                                        <a href="/storage/pdf/Брошюра-1.pdf" type="button"
                                            class="btn btn-primary">Посмотреть</a>
                                    </div>
                                </div>
                                <div class="brochure-item_2 col-md-4 col-sm-12">
                                    <h6>Полезная информация для трудовых мигрантов на узбекском языке</h6>
                                    <a href="/storage/pdf/Брошюра-2.pdf">
                                        <img src="/storage/broch3-3.jpg" class="img-responsive"
                                            title="Информация для трудовых мигрантов на узбекском языке">
                                    </a>

                                    <div class="text-center brochure-button">
                                        <a href="/storage/pdf/Брошюра-2.pdf" type="button"
                                            class="btn btn-primary">Посмотреть</a>
                                    </div>
                                </div>
                                <div class="brochure-item_2 col-md-4 col-sm-12">
                                    <h6>Полезная информация для трудовых мигрантов на таджикском языке</h6>
                                    <a href="/storage/pdf/Брошюра-3.pdf">
                                        <img src="/storage/broch2-2.jpg" class="img-responsive"
                                            title="Информация для трудовых мигрантов на узбекском языке">
                                    </a>

                                    <div class="text-center brochure-button">
                                        <a href="/storage/pdf/Брошюра-3.pdf" type="button"
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
