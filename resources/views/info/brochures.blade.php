@extends('layout', ['seo' => $page->getSeo()])
@section('content')

    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div>
                        <ol class="breadcrumb info_breadcrumb">
                            <li class="breadcrumb-item">Инфо-центр</li>
                            <li class="breadcrumb-item active">{{ $page->title }}
                            </li>
                        </ol>
                    </div>
                    <div class="entity_wrapper">

                        <div class="entity_title text-justify">
                            <h5> Фондом "ОРИЕНТИР" разработаны новые брошюры по миграционному и трудовому
                                законодательству в доступной и понятной мигрантам форме.</h5>
                        </div>
                        <div class="entity_content">

                            {!! $page->content !!}

                            <div class="brochures flex-row">

                                <div class="brochure-item col-md-4 col-sm-12">

                                    <h5><strong>Брошюра на таджикском</strong></h5>
                                    <a href="/storage/app/public/pdf/брошюра на таджикском языке_1.pdf" target="_blank"><img
                                            src="/storage/app/public/broch1.jpg" class="img-responsive"
                                            title="Брошюра на таджикском для мигрантов"></a>

                                    <div class="text-center brochure-button">
                                        <a href="/storage/app/public/pdf/брошюра на таджикском языке_1.pdf" target="_blank"
                                            type="button" class="btn btn-primary">Посмотреть</a>
                                    </div>
                                </div>

                                <div class="brochure-item col-md-4 col-sm-12">
                                    <h5><strong>Брошюра на узбекском</strong></h5>
                                    <a href="/storage/app/public/pdf/брошюра на узбекском языке_1.pdf" target="_blank">
                                        <img src="/storage/app/public/broch2.jpg" class="img-responsive"
                                            title="Брошюра на узбекском для мигрантов"></a>
                                    <div class="text-center brochure-button">
                                        <a href="/storage/app/public/pdf/брошюра на узбекском языке_1.pdf" target="_blank"
                                            type="button" class="btn btn-primary" target="_blank">Посмотреть</a>
                                    </div>
                                </div>

                                <div class="brochure-item col-md-4 col-sm-12">
                                    <h5><strong>Брошюра на русском</strong></h5>
                                    <a href="/storage/app/public/pdf/Брошюра на русском языке_1.pdf" target="_blank">
                                        <img src="/storage/app/public/broch3.jpg" class="img-responsive"
                                            title="Брошюра на русском для мигрантов"></a>
                                    <div class="text-center brochure-button">
                                        <a href="/storage/app/public/pdf/Брошюра на русском языке_1.pdf" target="_blank"
                                            type="button" class="btn btn-primary" target="_blank">Посмотреть</a>
                                    </div>
                                </div>
                            </div>
                            <div class="brochures flex-row m30">
                                <div class="brochure-item_2 col-md-4 col-sm-12">
                                    <h6 class="text-center">Полезная информация для трудовых мигрантов на русском языке</h6>
                                    <a href="/storage/app/public/pdf/Брошюра-1.pdf" target="_blank">
                                        <img src="/storage/app/public/broch-1-1.jpeg" class="img-responsive"
                                            title="Информация для трудовых мигрантов на русском языке"></a>
                                    </a>
                                    <div class="text-center brochure-button">
                                        <a href="/storage/app/public/pdf/Брошюра-1.pdf" type="button"
                                            class="btn btn-primary" target="_blank">Посмотреть</a>
                                    </div>
                                </div>
                                <div class="brochure-item_2 col-md-4 col-sm-12">
                                    <h6 class="text-center">Полезная информация для трудовых мигрантов на узбекском языке
                                    </h6>
                                    <a href="/storage/app/public/pdf/Брошюра-2.pdf" target="_blank">
                                        <img src="/storage/app/public/broch-3-3.jpeg" class="img-responsive"
                                            title="Информация для трудовых мигрантов на узбекском языке">
                                    </a>

                                    <div class="text-center brochure-button">
                                        <a href="/storage/app/public/pdf/Брошюра-2.pdf" type="button"
                                            class="btn btn-primary" target="_blank">Посмотреть</a>
                                    </div>
                                </div>
                                <div class="brochure-item_2 col-md-4 col-sm-12">
                                    <h6 class="text-center">Полезная информация для трудовых мигрантов на таджикском языке
                                    </h6>
                                    <a href="/storage/app/public/pdf/Брошюра-3.pdf" target="_blank">
                                        <img src="/storage/app/public/broch-2-2.jpeg" class="img-responsive"
                                            title="Информация для трудовых мигрантов на узбекском языке">
                                    </a>

                                    <div class="text-center brochure-button">
                                        <a href="/storage/app/public/pdf/Брошюра-3.pdf" type="button"
                                            class="btn btn-primary" target="_blank">Посмотреть</a>
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
