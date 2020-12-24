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
                            <li class="breadcrumb-item active">Внесение изменения в приглашение</li>
                        </ol>
                    </div>
                    <div class="info_item">
                        <div class="info_item_title">
                            <h5 class="underline">Внесение изменения в приглашение</h5>
                        </div>
                        <div class="info_item_content">
                            <p>Бывают ситуации, когда Вы приглашаете иностранного гражданина на
                                переговоры/встречу/обслуживание
                                оборудования, но
                                ситуация изменяется. Получается, что приглашение уже оформлено, но нужно внести изменения.
                                Возможно
                                ли
                                это?</p>
                            <p>Сделать это можно только, если приглашение выдано на формализованном бланке МВД (не
                                электронное).
                            </p>
                            <a href="tel:+78126124812"><img src="{{ asset('storage/button3.png') }}"
                                    alt=" consulation-button.jpg" class="green_btn img-responsive"
                                    title="Бесплатная консультация"></a>
                            <p>Какие данные можно изменить?</p>
                            <ul class="ul_padding">
                                <li class="li_padding">Данные паспорта иностранного гражданина.</li>
                                <li class="li_padding">Срок приглашения иностранного гражданина.&nbsp;</li>
                            </ul>
                            <h3>Cписок необходимых документов:</h3>
                            <ul class="ul_padding">
                                <li class="li_padding">Копия паспорта иностранного гражданина;</li>
                                <li class="li_padding">Копия и оригинал полученного приглашения;</li>
                                <li class="li_padding">Учредительные документы на компанию;</li>
                                <li class="li_padding">Чек об оплате госпошлины;</li>
                                <li class="li_padding">Заявление о внесении изменений.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
