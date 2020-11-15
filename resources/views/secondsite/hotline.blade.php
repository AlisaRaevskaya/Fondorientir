@extends('secondsite.layout')
@section('content')

    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">

                <div class="hotline_img">
                    <img src="/assets/images/hotline.jpg" alt="hotline" class="img-responsive">
                </div>

                <div class="col-md-1"></div>

                <div class="col-md-10 container m30">
                    @foreach ($page as $item)
                        <div class="entity_title m30">
                            <h1>{!! $item->title !!}</h1>
                        </div>

                        <div class="entity_wrapper">
                            <h5>
                                Для приема устных обращений иностранных граждан и лиц без гражданства работает телефон
                                "горячей линии":</h5>
                            <div class="d-flex">
                                <h1 class="phone-text"><img src="/assets/images/phone.png" alt=""><a
                                        href="tel:+78126124812">8(812)385-69-89</a>
                                </h1>
                            </div>

                        </div>

                        <div class="m30">
                           <ul>
                        <li>
                            <h2>Миграционные вопросы</h2>
                            <h6>патент, РВП, ВНЖ, гражданство, регистрация, запрет, выдворение, депортация и др.</h6>
                        </li>
                        <div class="d-flex">
                            <h1 class="phone-text"><img src="/assets/images/phone.png" alt=""><a href="tel:+78126124812"> +7 (812 ) 612-48-12</a>
                            </h1>
                        </div>

                        <h6 class="widget_divider"></h6>

                        <li>
                            <h2>Трудовые споры</h2>
                            <h6>обманули, не заплатили, договор не дают и др.</h6>
                        </li>
                        <div class="d-flex">
                            <h1 class="phone-text"><img src="/assets/images/phone.png" alt=""><a href="tel:+78126124817"> +7 (812 ) 612-48-17</a>
                            </h1>
                        </div>
                        <h6 class="widget_divider"></h6>

                        <li>
                            <h2>Гражданско-правовые споры</h2>
                            <h6>Есть проблема, сложная ситуация
                                (жильё, семья, квартира, дом, земля, наследство, пенсия и др.)</h6>
                        </li>
                        <div class="d-flex">
                            <h1 class="phone-text"><img src="/assets/images/phone.png" alt=""><a href="tel:+78123856989">+7 (812) 385-69-89</a>
                            </h1>
                        </div>

                        <h6 class="widget_divider"></h6>

                           <li>
                            <h2>Гражданско-правовые споры</h2>
                            <h6>Есть проблема, сложная ситуация
                                (жильё, семья, квартира, дом, земля, наследство, пенсия и др.)</h6>
                        </li>
                        <div class="d-flex">
                            <h1 class="phone-text"><img src="/assets/images/phone.png" alt=""><a href="tel:+78123856989">+7 (812) 385-69-89</a>
                            </h1>
                        </div>

                        <h6 class="widget_divider"></h6>
                    </ul>
                    @endforeach
                </div>

            </div>

            <div class="col-md-1"></div>

        </div>
        <!-- row -->

        </div>
        <!-- container -->
    </section>
@endsection


