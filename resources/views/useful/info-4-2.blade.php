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
                            <li class="breadcrumb-item active">Тестирование по русскому языку, истории и законодательству РФ
                                для
                                оформления
                                патента</li>
                        </ol>
                    </div>
                    <div class="info_item">
                        <div class="info_item_title">
                            <h5 class="underline">Тестирование по русскому языку, истории и законодательству РФ для
                                оформления
                                патента</h5>
                        </div>
                        <div class="info_item_img">
                            <img src="{{ asset('storage/info/sertifikat.jpg') }}" alt="patent.jpg" class="img-responsive"
                                title="Сертификат">
                        </div>
                        <div class="info_item_content">
                            <p>С 1 января 2015 года, каждый иностранный гражданин, желающий получить трудовой патент,
                                разрешение
                                на работу или вид на жительство, обязан пройти тестирование по русскому языку, истории и
                                праву.
                            </p>
                            <p>При подаче документов на оформление, заявитель обязан предоставить документ, подтверждающий
                                владение русским языком, историей и правом.</p>
                            <p>Какие это могут быть документы?</p>
                            <ol>
                                <li class="li_padding">Сертификат о владении русским языком, знании истории России и основ
                                    законодательства
                                    Российской Федерации (срок действия - 5 лет);</li>
                                <li class="li_padding">Документ государственного образца об образовании (на уровне не ниже
                                    основного общего
                                    образования), выданным образовательным учреждением на территории государства,
                                    входившего в
                                    состав СССР, до 1 сентября 1991 года;</li>
                                <li class="li_padding">Документ об образовании и (или) о квалификации, выданным лицам,
                                    успешно
                                    прошедшим
                                    государственную итоговую аттестацию на территории Российской Федерации с 1 сентября
                                    1991
                                    года.
                                </li>
                            </ol>
                            <p>Если Вы не обладаете документами об образовании, - необходимо пройти тестирование.</p>
                            <p>Сертификат выдается на срок действия 5 лет.</p>
                            <p>Для прохождения тестирования необходимы следующие документы:</p>
                            <ul class="ul_padding">
                                <li class="li_padding">Копия заграничного паспорта (первая страница и страница со штампами
                                    о
                                    пересечении
                                    границы);
                                </li>
                                <li class="li_padding">Копия миграционного учета;</li>
                                <li class="li_padding">Копия миграционной карты.</li>
                            </ul>
                            <a href="tel:+78126124812"><img src="{{ asset('storage/button3.png') }}"
                                    alt=" consulation-button.jpg" class="green_btn img-responsive"
                                    title="Бесплатная консультация"></a>
                        </div>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
