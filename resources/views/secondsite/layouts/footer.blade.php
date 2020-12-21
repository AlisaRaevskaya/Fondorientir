<section id="footer_section" class="footer_section">
    <div class="container">
        <hr class="footer-top">
        <div class="row">
            <div class="col-md-3">
                <div class="footer_widget_title">
                    <h3><a href="{{ route('main') }}" target="_self">О Фонде</a></h3>
                </div>
                 <div class="row">
                    <div class="text-center logo">
                        <a href="{{ route('second_main') }}">
                            <img src="/storage/logo2.png" alt="Logo" class="img-responsive"></a>
                    </div>
                </div>
                <div class="text-justify">
                    <p>Интернет-приемная по вопросам миграции и трудовым спорам реализована в рамках
                        социально-значимого проекта «Цивилизованная миграция - Санкт-Петербург и
                        Ленинградская область».Фонд осуществляет прием иностранных граждан и лиц без гражданства
                        с обращениями, заявлениями и просьбами,
                        связанными с юридической, социальной поддержкой, натурализацией и адаптацией в
                        российское общество.</p>
                </div>
            </div>


            <div class="col-md-3 footer_padding">
                <div class="footer_widget_title">
                    <h3 target="_self" style="color:black;">Карта сайта</h3>
                </div>

                <div class="row">

                    <div class="col-xs-7">
                        <ul class="list-unstyled left">
                            @foreach ($secondmenu as $item)
                                <li>
                                    <p><a href="{{ $item->laravel_name ? route($item->laravel_name) : $item->url }}">
                                            {{ $item->title }}</a></p>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-xs-5">
                        <ul class="list-unstyled">
                            @foreach ($footermenu as $s_item)
                                <li>
                                    <p><a href="{{ $s_item->laravel_name ? route($s_item->laravel_name) : $s_item->url }}">{{ $s_item->title }}</a>
                                    </p>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>

            <div class="col-md-3">

                <div class="footer_widget_title">
                    <h3><a href="{{ route('news') }}" target="_self">Новости</a></h3>
                </div>

                <div class="row">
                    @foreach ($newsitems as $new)
                        <div style="line-height:1.8" class="text-justify">
                            <li><a href="{{ route('news_category.id', $new->id) }}">
                                    {{ $new->title }}</a>
                            </li>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-3" >
                <div class="footer_widget_title">
                    <h3><a href="{{ route('contacts') }}" target="_self">Контакты</a></h3>
                </div>
                <div class="footer_contacts" style="padding-left:10px;">
                       <p><strong> {{ $contact->name}}</strong></p>
                                <p><strong>Адрес: </strong>{{ $contact->index }}, {{ $contact->city }}{{ $contact->street }}</p>
                                <p><strong>Остановка:</strong> {{ $contact->station }}</p>
                                <p><strong>Автобусы:</strong> {{ $contact->bus }}</p>
                                <p><strong>Маршрутки:</strong> {{ $contact->routes }}</p>
                                <p><strong>Метро:</strong> {{ $contact->metro }}</p>
                                <p><strong>Электроный адрес: </strong>{{ $contact->email }}</p>
                                <p><strong>Cайт: </strong>{{ $contact->web }}</p>
                                <p><strong>Телефоны:<strong> {{ $contact->phone }}</p>
                    <div>
                        <h3>Мы в социальных сетях:</h3>
                        <!--Twitter-->
                        <a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                        <!--Google +-->
                        <a class="icons-sm inst-ic"><i class="fa fa-instagram"> </i></a>
                        <!--Linkedin-->
                        <a class="icons-sm tmb-ic"><i class="fa fa-tumblr"> </i></a>
                        <!--Pinterest-->
                        <a class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
                        <a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                    </div>


                </div>

            </div>
        </div>


        <div class="footer_bottom_Section">
            <div class="container">
                <div class="row">
                    <div class="footer">
                        <div class="col-sm-4">
                            <div class="social">
                                <a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                                <!--Twitter-->
                                <a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                                <!--Google +-->
                                <a class="icons-sm inst-ic"><i class="fa fa-instagram"> </i></a>
                                <!--Linkedin-->
                                <a class="icons-sm tmb-ic"><i class="fa fa-tumblr"> </i></a>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <p>&copy;2016 "ОРИЕНТИР"</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
