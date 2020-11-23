<section id="footer_section" class="footer_section">
    <div class="container">
        <hr class="footer-top">
        <div class="row">
            <div class="col-md-3">
                <div class="footer_widget_title">
                    <h3><a href="/" target="_self">О Фонде</a></h3>
                </div>
                <div class="logo">
                    @foreach ($contacts as $contact)
                        <div>
                            <div class="row justify-content-between footer-logo">
                                <a title="fontanero" href="{{ route('main') }}">
                                    <img src="/assets/images/{{ $contact->logo }}" alt="technews" width:="95pt"
                                        height="95pt">
                                    <div class="footer_main text-center">
                                        <h5>Фонд<br>"ОРИЕНТИР"</h5>
                                    </div>
                                </a>
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
                    @endforeach
                </div>
            </div>

            <div class="col-md-3">
                <div class="footer_widget_title">
                    <h3 target="_self" style="color:black;">Карта сайта</h3>
                </div>

                <div class="row">

                    <div class="col-xs-5">
                        <ul class="list-unstyled left">
                            @foreach ($menuitems as $item)
                                <li>
                                    <p><a href="{{ $item->laravel_name ? route($item->laravel_name) : $item->url }}">
                                            {{ $item->title }}</a></p>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-xs-7">
                        <ul class="list-unstyled">
                            @foreach ($footermenu as $s_item)
                                <li>
                                    <p><a
                                            href="{{ $s_item->laravel_name ? route($s_item->laravel_name) : $s_item->url }}">{{ $s_item->title }}</a>
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
                            <li><a href="{{ route('news.category.id', [$category->name, $new->id]) }}">
                                    {{ $new->title }}</a>
                            </li>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-3">
                <div class="footer_widget_title">
                    <h3><a href="{{ route('contacts') }}" target="_self">Контакты</a></h3>
                </div>
                <div class="footer_contacts">
                    @foreach ($contacts as $contact)
                        <p>{{ $contact->name }}</p>
                        <p> {{ $contact->inn }}</p>
                        <p> {{ $contact->eng_name }}</p>
                        <p>{{ $contact->index }}, {{ $contact->city }},{{ $contact->street }}</p>
                        <p> {{ $contact->email }}</p>
                        <p> {{ $contact->phone }}</p>
                        <p> {{ $contact->web }}</p>
                    @endforeach
                    {{--
                    <div>
                        <p>Часы работы: с 9.00 до 18.00(кроме субботы и воскресенья)</p>
                        <p>Тел.: +7(812) 385 -69-89, +7(911)253-85-01</p>
                        <p>Е-mail: inlo®fondorientir.ru</p>
                    </div> --}}
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
                        <div class="col-sm-3">
                            <div class="social">
                                <a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                                <!--Twitter-->
                                <a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                                <!--Google +-->
                                <a class="icons-sm inst-ic"><i class="fa fa-instagram"> </i></a>
                                <!--Linkedin-->
                                <a class="icons-sm tmb-ic"><i class="fa fa-tumblr"> </i></a>
                                <!--Pinterest-->
                                <a class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <p>&copy;2016 "ОРИЕНТИР"</a> </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</section>
