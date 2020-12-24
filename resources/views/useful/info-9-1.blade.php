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
                            <li class="breadcrumb-item active">СНИЛС</li>
                        </ol>
                    </div>
                    <div class="info_item">
                        <div class="info_item_title">
                            <h5 class="underline">ИНН: оформление ИНН иностранному гражданину</h5>
                        </div>
                        <div class="info_item_img">
                            <img src="/storage/info/inn.jpg" alt="inn" title="ИНН">
                        </div>
                        <div class="info_item_content">
                            <p>Согласно п. 7 статьи 83 Налогового Кодекса РФ и с 2014 года согласно п. 7 статьи
                                13
                                Федерального
                                закона №115 от 25 июля 2002 года "О правовом положении иностранных граждан в
                                Российской
                                Федерации"
                                (в ред. 248-ФЗ от 23.07.2013 г.), иностранцам требуется <strong>получить
                                    ИНН</strong>
                                (идентификационный номер налогоплательщика), если они:</p>
                            <ul class="ul_padding">
                                <li class="li_padding">хотят оформить разрешение на работу и трудовой патент;
                                </li>
                                <li class="li_padding">владеют имуществом, подлежащим налогообложению
                                    (автомобили,
                                    недвижимость
                                    и
                                    пр.);</li>
                                <li class="li_padding">совершают действия или операции, подлежащие
                                    налогообложению.</li>
                            </ul>
                            <p><span class="f-size15"><strong>Внимание работодателям!</strong></span> Если Вы
                                приняли на
                                работу высококвалифицированного
                                иностранного гражданина, то Вам обязательно нужно оформить ИНН для нового
                                сотрудника и
                                предоставить
                                уведомление о постановке его на налоговой учёт в течение 30 дней со дня
                                заключения трудового
                                договора в&nbsp; ГУВМ МВД (бывший УФМС) РФ.</p>
                            <a href="tel:+78126124812"><img src="{{ asset('storage/button3.png') }}"
                                    alt=" consulation-button.jpg" class="green_btn img-responsive"
                                    title="Бесплатная консультация"></a>
                            <h6 class="underline">Документы для ИНН иностранному гражданину</h6>
                            <ul class="ul_padding">
                                <li class="li_padding">Документ, удостоверяющий личность (копия)</li>
                                <li class="li_padding">Временную регистрацию по месту пребывания (копия)</li>
                                <li class="li_padding">Нотариально заверенный перевод паспорта</li>
                            </ul>

                        </div>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
