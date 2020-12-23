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
                            <li class="breadcrumb-item active">Приглашения для получения визы</li>
                        </ol>
                    </div>
                    <div class="info_item">
                        <div class="info_item_title">
                            <h5 class="underline">Приглашения для получения визы</h5>
                        </div>
                        <div class="info_item_img">
                            <img src="/storage/info/priglashenie.jpg" alt="priglashenie.jpg"
                                title=">Приглашения для получения визы">
                        </div>
                        <div class="info_item_content">
                            <p><span class="f-size15"><strong>
                                        Приглашение на въезд в РФ иностранному гражданину</strong> </span>- это официальный
                                документ,
                                который
                                выдается
                                <strong>ГУ МВД </strong>физическому или юридическому лицу для того, чтобы иностранный
                                гражданин
                                смог
                                оформить
                                визу и
                                приехать в Россию.
                            </p>
                            <p>Цели визита могут быть абсолютно разные.</p>
                            <p>В свою очередь и сами приглашения различаются между собой, как раз на основании целей
                                приезда.
                            </p>
                            <h5>Рассмотрим основные виды приглашений в Россию:</h5>
                            <ul class="ul_padding">
                                <li class="li_padding"><strong>Частное</strong> &ndash; выдается только физическому лицу с
                                    пропиской или
                                    регистрацией в
                                    регионе,
                                    где
                                    оформляется приглашение;</li>
                                <li class="li_padding"><strong>Коммерческое</strong> &ndash; выдается компании для
                                    приглашения
                                    иностранных
                                    специалистов
                                    именно в
                                    коммерческих целях (заключение контракта с иностранным партнером);</li>
                                <li class="li_padding"><strong>Деловое</strong> &ndash; выдается организации для приглашения
                                    иностранных
                                    специалистов в
                                    деловых
                                    целях
                                    (переговоры);</li>
                                <li class="li_padding"><strong>Рабочее</strong> &ndash; выдается работодателю для
                                    приглашения
                                    иностранных
                                    специалистов
                                    для
                                    работы в
                                    РФ.
                                </li>
                            </ul>
                            <p><strong>ВАЖНО:</strong> Рабочее приглашение всегда оформляется одновременно с
                                разрешением на
                                работу.
                            </p>
                            <img src="{{ asset('storage/button3.png') }}" alt="consulation-button.jpg"
                                class="green_btn img-responsive" title="Бесплатная консультация">
                            <p>Приглашения на въезд в Россию оформляется в течение 20 календарных дней со дня предоставления
                                документов.
                                Данное
                                приглашение Вы отправляете иностранному гражданину на родину. Далее он получает визу в
                                Консульстве
                                РФ у
                                себя на
                                родине.</p>
                            <p>Весь процесс оформления такого документа, как приглашение в Россию лежит на плечах
                                приглашающей
                                стороны.
                                Но мы
                                всегда
                                готовы Вам помочь в оформлении данного документа.</p>
                            <h3 class="underline">Cписок необходимых документов:</h3>
                            <p class="f-size15"><strong>Документы для оформления частного приглашения физическому лицу
                                </strong>
                            </p>
                            <p>Для оформления частного приглашения физическому лицу необходимо собрать следующий пакет
                                документов:
                            </p>
                            <ul class="ul_padding">
                                <li class="li_padding">Копию паспорта;</li>
                                <li class="li_padding">Справку о его уровне дохода и членов его семьи (2-НДФЛ);</li>
                                <li class="li_padding">Подтверждение оплаты госпошлины;</li>
                                <li class="li_padding">Копию паспорта иностранца.</li>
                            </ul>

                            <p class="f-size15"><strong>Документы для оформления коммерческого/делового приглашения
                                    юридическому
                                    лицу </strong>
                            </p>
                            <p>Для оформления коммерческого/делового приглашения юридическое лицо должно:</p>
                            <ul class="ul_padding">
                                <li class="li_padding">Получить учетную карту в ГУ МВД;</li>
                                <li class="li_padding">Предоставить подтверждение об оплате госпошлины;</li>
                                <li class="li_padding">Собрать необходимые документы:
                                    <ul class="ul_padding">
                                        <li class="li_padding">Ходатайство на въезд в РФ;</li>
                                        <li class="li_padding">Копия паспорта иностранца;</li>
                                        <li class="li_padding">Данные о месте работы заграницей.</li>
                                    </ul>
                                </li>
                                <li class="li_padding">Подать собранные документы в главное управление МВД.</li>
                            </ul>
                        </div>
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
                            <img src="{{ asset('storage/button3.png') }}" alt="consulation-button.jpg"
                                class=" img-responsive" title="Бесплатная консультация">
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
