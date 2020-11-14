<section id="footer_section" class="footer_section">
    <div class="container">


        <div class="container footer_bottom_Section">
            <div class="row">

                <div class="col-md-1"></div>

                <div class="col-md-10">

                    <div class="entity_title">
                        <h1> Взаимодействуем:</h1>
                    </div>

                    <div class="d-flex flex-row justify-content-between align-items-center">

                        <div class="partner_item col-md-2 ">
                            <p>Кадастровая палата</p><br>
                            <div class="part_img">
                                <img src="/assets/images/footer/kadastr.jpg" alt="kadastrovaya_palata">
                            </div>
                        </div>

                        <div class="partner_item col-md-2">
                            <p>Федеральная налоговая служба</p>
                            <div class="part_img">
                                <img src="/assets/images/footer/nalogovaya.jpg" alt="nalogovaya" class="rounded-circle">
                            </div>
                        </div>

                        <div class="partner_item col-md-2">
                            <p>Служба судебных приставов</p>
                            <div class="part_img">
                                <img src="/assets/images/footer/pristavy.jpg" alt="pristavy">
                            </div>
                        </div>

                        <div class="partner_item col-md-3">
                            <p> Федеральная служба защиты прав потребителей</p>
                            <div class="part_img">
                                <img src="/assets/images/footer/potrebitel.jpg" alt="potrebitel_service">
                            </div>
                        </div>

                        <div class="partner_item col-md-2">
                            <p>Россотрудничество</p><br>
                            <div>
                                <img src="/assets/images/footer/rossotrudnichestvo.png" alt="rossotrudnichestvo">
                            </div>
                        </div>

                        <div class="row justify-content-between margin-top">

                            <div class="partner_item_2 col-md-5  d-flex flex-column justify-content-between">
                                <div>
                                    <p>Федеральное агентство по делам национальностей</p>
                                </div>
                                <div><img src="/assets/images/footer/fadn.jpg" alt="nation_agency"></div>
                            </div>

                            <div class="partner_item_3 col-md-7 margin-top d-flex flex-column justify-content-between">
                                <div>
                                    <p>Федеральная служба по экологическому, технологическому и атомному надзору
                                        (Ростехнадзор)
                                    </p>
                                </div>
                                <div><img src="/assets/images/footer/rosteh.jpg" alt="rostehnadzor"></div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>

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
                                Ленинградская область»</p>
                            <p>Основные цели и предмет деятельности интернет-приемной - осуществление
                                приема иностранных граждан и лиц без гражданства с обращениями,
                                заявлениями и просьбами, связанными с юридической, социальной поддержкой,
                                натурализацией и адаптацией в российское общество.</p>
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
                                    <p><a href="{{$item->laravel_name ? route($item->laravel_name) : $item->url }}">
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
                    {{--
                    <div class="row">
                        <form action="/subscribe" method="post" class="subForm">
                            @csrf
                            <div class="form-group ">

                                <label class="control-label">
                                    <h2><span class="red-color">Подпишитесь </span> на наши новости<h2>
                                </label>

                                <div class="form-group">
                                    <input type="email" name="email" class="form-control input-lg"
                                        placeholder="Ваш email">
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="Подписаться"
                                        class="btn btn-large blue subscription_btn">
                                </div>

                                <div class="sub_success"></div>

                                <div class="col-sm-2"></div>
                            </div>
                        </form>
                    </div> --}}

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
