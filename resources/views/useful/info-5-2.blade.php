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
                            <li class="breadcrumb-item active">Вид на жительство для высококвалифицированного сотрудника
                                (ВКС)</li>
                        </ol>
                    </div>
                    <div class="info_item">
                        <div class="info_item_title">
                            <h5 class="underline">Вид на жительство для высококвалифицированного сотрудника (ВКС)
                            </h5>
                        </div>
                        <div class="info_item_content">
                            <p>У высококвалифицированного специалиста много плюсов для работы в
                                Санкт-Петербурге.
                                Это высокая заработная плата, возможность привезти с собой семью,
                                довольно
                                простой
                                процесс оформления документов, постановка на миграционный учет в
                                течение
                                90
                                суток.
                                Но есть еще один плюс - это возможность оформления вида на
                                жительство в
                                РФ.,
                                который
                                дает еще больше преимуществ.</p>
                            <p><span class="color_red"><strong>&nbsp;ВАЖНО:</strong></span>
                                &nbsp;данный вид ВНЖ не способствует получению гражданства РФ в упрощенном
                                порядке.&nbsp;</p>
                            <p><strong>Зачем ВКС ВНЖ?</strong>&nbsp;</p>
                            <p>Если ВКС постоянно находится в командировках, ВНЖ - выход для
                                упрощения
                                постановки
                                его на миграционный учет. Так же, как и его семьи, детей. Например,
                                если
                                у ВКС
                                постоянно меняется миграционный учет, то дети (если им въезд и
                                регистрации
                                оформлены
                                на основании родителя-ВКС), тоже должны постоянно менять учет.&nbsp;
                            </p>
                            <p>Оформить ВНЖ для ВКС проще, чем по основаниям. ВНЖ выдается на срок
                                действия
                                разрешения на работу.</p>
                            <a href="tel:+78126124812"><img src="{{ asset('storage/button3.png') }}"
                                    alt=" consulation-button.jpg" class="green_btn img-responsive"
                                    title="Бесплатная консультация"></a>

                            <h3 class="underline">Cписок необходимых документов:</h3>
                            <p>Для высококвалифицированного сотрудника (ВКС):</p>
                            <ul class="ul_padding">
                                <ol>
                                    <li class="li_padding">Нотариально-заверенный перевод паспорта всех страниц</li>
                                    <li class="li_padding">Чек об оплате госпошлины;</li>
                                    <li class="li_padding">Заявление о выдаче вида на жительство;</li>
                                    <li class="li_padding">Фото 4 шт 3.5*4.5 ;</li>
                                    <li class="li_padding">Разрешение на работу ВКС;</li>
                                    <li class="li_padding">Трудовой договор.</li>
                                </ol>
                            </ul>
                            <p>Для семьи ВКС:</p>
                            <ul class="ul_padding">
                                <ol>
                                    <li class="li_padding">Свидетельство о браке/рождении, нотариально-заверенный
                                        перевод
                                        (апостиль/консульское
                                        заверение);
                                    </li>
                                    <li class="li_padding">Нотариально-заверенный перевод паспорта всех страниц;
                                    </li>
                                    <li class="li_padding">Чек об оплате госпошлины.</li>
                                </ol>
                            </ul>
                        </div>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
