@extends('layout', ['seo' => $page->getSeo()])
@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div>
                        <ol class="breadcrumb info_breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('useful-info') }}">Полезная
                                    информация</a></li>
                            <li class="breadcrumb-item active"> Миграционный учет</li>
                        </ol>
                    </div>

                    <div class="info_item">
                        <div class="info_item_title">
                            <h5 class="underline">
                                Миграционный учет
                            </h5>
                        </div>

                        <div class="info_item_img"><img src="{{ asset('storage/info/uchet.png') }}" alt="migration.jpg"
                                class="img-responsive" title="Миграционный учет"></div>
                        <div class="info_item_content">
                            <p>Постановка на миграционный учет граждан СНГ на 3 месяца (временная регистрация на 90 дней)
                            </p>
                            <p>Миграционный учет иностранных граждан в РФ - это уведомление территориального органа
                                Миграционной
                                службы
                                о
                                прибытии
                                иностранца на территорию страны.</p>
                            <p>В общем порядке в течение 7 рабочих дней после пересечения границы иностранцем, Принимающая
                                его
                                сторона
                                должна
                                уведомить миграционную службу о прибытии гражданина другой страны.</p>
                            <a href="tel:+78126124812"><img src="{{ asset('storage/button3.png') }}"
                                    alt=" consulation-button.jpg" class="green_btn img-responsive"
                                    title="Бесплатная консультация"></a>
                            <p>Для граждан некоторых государств установлены иные сроки, в течение которых нужно встать на
                                миграционный
                                учет
                                (оформить временную регистрацию):</p>
                            <p>Для граждан Белоруссии, Казахстана, Армении и Киргизии - 30 дней;</p>
                            <p>&nbsp;Для граждан Таджикистана &ndash; 15 дней.</p>
                            <p>Принимающей стороной могут выступать: Гражданин РФ; Иностранный гражданин, постоянно
                                проживающий
                                на
                                территории
                                РФ;
                                Юридическое лицо.</p>
                            <h3><a class="link_color" href="{{ asset('/storage/blanks/blank-1.xls') }}">
                                    <strong>Скачать бланк
                                    </strong>
                                </a></h3>

                            <p><strong>ВАЖНО:</strong> иностранец не может сам встать на миграционный учет или выступать
                                Принимающей
                                стороной
                                для
                                самого
                                себя!
                            </p>
                        </div>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
