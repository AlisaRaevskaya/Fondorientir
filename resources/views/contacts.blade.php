@extends('layout', ['seo' => $page->getSeo()])
@section('content')

    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="entity-wrapper">
                        <div class="m30 text-center">
                            <p>Некоммерческая организация</p>
                            <h3><strong>ФОНД ПОДДЕРЖКИ ДОБРОВОЛЬНОГО ПЕРЕСЕЛЕНИЯ СООТЕЧЕСТВЕННИКОВ "ОРИЕНТИР"</strong></h3>

                            <div class="text-center m30">
                                <h4>ПРАВОВАЯ ПРИЁМНАЯ</h4>
                                <p>для мигрантов</p>
                                <p>Санкт-Петербург, пр. Римского-Корсакова 39 (во дворе)</p>
                                <h6><a href="#" class="pop_map_link" data-toggle="modal"
                                        data-target=".bd-example-modal-lg"><i class="fa fa-map-o">
                                            Схема проезда (интерактивная карта)</i></a></h6>
                                <p>Телефон: +7 (911) 253-85-01; +7 (812) 385 -69-89</p>
                                <p>Пн-Пт: 10:00 -18:00 СБ,ВС – выходной</p>
                                <div class="social">
                                    <a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                                    <!--Twitter-->
                                    <a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                                    <!--Google +-->
                                    <a class="icons-sm inst-ic"><i class="fa fa-instagram"> </i></a>
                                    <!--Linkedin-->
                                    <a class="icons-sm tmb-ic"><i class="fa fa-vk"> </i></a>
                                </div>
                            </div>

                            <div class="m30">
                                <h4>Фонд "ОРИЕНТИР"</h4>
                                <p>190068, Санкт-Петербург, улица Садовая, 53, офис 52</p>
                                <p>
                                    Телефон: 8 (812) 385 -69-89</p>
                                <p>Электронная почта:<span class="link_color">info@fondorientir.ru</span>
                                </p>
                                <p>
                                    Мессенджеры:</p>
                                <div class="contacts_social">
                                    <a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                                    <!--Twitter-->
                                    <a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                                    <!--Google +-->
                                    <a class="icons-sm inst-ic"><i class="fa fa-instagram"> </i></a>
                                    <!--Linkedin-->
                                    <a class="icons-sm tmb-ic"><i class="fa fa-vk"> </i></a>
                                </div>
                            </div>

                        </div>
                        <div class="m30">
                            <h2>Время работы специалистов по миграционным и трудовым вопросам:</h2>

                            <div class="">
                                <table class="table border-none">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Юрист по миграционному и гражданскому законодательству
                                            </th>
                                            <th>
                                            </th>
                                            <td>среда- пятница </td>
                                            <td><strong>с 12.00 до 18.00<strong></strong></strong></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Юрист по трудовому законодательству
                                            </th>
                                            <th>
                                            </th>
                                            <td>вторник - четверг</td>
                                            <td><strong>с 12.00 до 18.00<strong></strong></strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="m30">
                            <h6>Запись на прием – ежедневно с 09.00 до 19.00 по телефону: +7 (812) 385 -69-89</h6>
                            <h6>ПРАВОВАЯ ПРИЁМНАЯ работает ежедневно (кроме субботы и воскресенья) с 10.00 до 18.00 часов по
                                адресу:
                            </h6>
                            <h6>190068, Санкт-Петербург, пр. Римского-Корсакова, дом 39 (во дворе)</h6>

                            <p>Остановка Римского-Корсакова 30</p>
                            <p>Автобусы: 2,3, 27,50 (20метров)</p>
                            <p>Маршрутки: К19, К2 (20метров)</p>
                            <p>Метро: м.Садовая, м.Спасская, м. Сеннan площадь (800-1100 метров)</p>
                            <h6>info@fondorientir.ru</h6>
                        </div>

                        <div class="text-center m30">
                            <h6>Квалифицированная юридическая помощь</h6>
                            <p> трудовым мигрантам и мигрантам-соотечественникам
                                на безвозмездной основе в решении трудовых споров
                                и помощи в сложных жизненных ситуациях:
                            </p>
                            <p><strong>потеря документов,
                                    невыплата заработной платы,
                                    отказ от оформления трудового договора,
                                    незаконное привлечение
                                    к дисциплинарной ответственности,
                                    незаконное привлечение к административной ответственности,
                                    невыплата социальных пособий,
                                    незаконное задержание под стражей,
                                    необоснованные выдворения, депортации,
                                    наложения запретов на въезд в РФ,
                                    необоснованное изъятие документов
                                    и др.</strong>
                            </p>
                        </div>
                    </div>

                    <div class="">
                        <div class="text-center m30">
                            <h2 class="link_color">+7(812) 385 -69-89</h2>
                            <button class="btn btn-sm" id="btn_popup" data-toggle="modal" data-target="#lawyerQuestion"
                                data-category="Решение трудовых споров">Спросить юриста
                                бесплатно</button>
                        </div>
                    </div>

                    <div class="text-center m30">
                        <h2>Решение трудовых споров<a href="tel:+78126124817" class="link_color"> +7 (812 ) 612-48-17</a>
                        </h2>
                    </div>

                    <div class="text-center m30">
                        <h2>Миграционные вопросы <a href="tel:+78123856989" class="link_color">+7(812) 385 -69-89</a></h2>
                    </div>

                    <div class="text-center m30">
                        <h2>Помощь в сложных жизненных ситуациях <a href="tel:+78123856989" class="link_color">+7(812) 385
                                -69-89</a>
                        </h2>
                        <button class="btn btn-sm" id="btn_popup" data-toggle="modal" data-target="#lawyerQuestion"
                            data-category="Решение трудовых споров">Спросить юриста
                            бесплатно
                        </button>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
