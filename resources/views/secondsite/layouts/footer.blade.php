<section id="footer_section" class="footer_section">
    <div class="container">
        <hr class="footer-top">
        <div class="row">
            <div class="col-md-4">
                <div class="second_footer_widget_title">
                    <h3><a href="{{ route('main') }}" target="_self">Центр поддержки</a></h3>
                </div>
                <div class="footer-row">
                    <div class="footer_row_logo flex-row">
                        <div class="text-center logo">
                            <a href="{{ route('second_main') }}">
                                <img src="/storage/{{ $contact->logo2 }}" alt="Logo" class="img-responsive"></a>
                        </div>
                        <div class="text-center">
                            <h3>Фонд "ОРИЕНТИР"</h3>
                            <p>Центр правовой поддержки и
                                образования трудовых мигрантов</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 footer_padding">
                <div class="footer_widget_title">
                    <h3 target="_self" style="color:black;">Карта сайта</h3>
                </div>

                <div class="row">

                    <div class="col-xs-7">
                        <ul class="list-unstyled left">
                            @foreach ($secondmenu as $item)
                                <li>
                                    <p><a
                                            href="{{ $item->laravel_name ? route('second.' . $item->laravel_name) : $item->url }}">
                                            {{ $item->title }}</a></p>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-xs-5">
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

            <div class="col-md-4">
                <div class="footer_widget_title">
                    <h3><a href="{{ route('contacts') }}" target="_self">Контакты</a></h3>
                </div>
                <div class="footer_contacts footer_padding">
                    <div class="footer_contacts_name">
                        <p class="text-left f-size15"><strong>{{ $contact->name }}</strong></p>
                    </div>
                    <div class="footer_contacts_address">
                        <p><strong>Адрес: </strong>{{ $contact->index }}, {{ $contact->city }},{{ $contact->street }}
                        </p>
                    </div>
                    <div class="footer_contacts_emal">
                        <p><strong>Электронный адрес: </strong>{{ $contact->email }}</p>
                    </div>
                    <div class="footer_contacts_web">
                        <p><strong>Cайт: </strong>{{ $contact->web }}</p>
                    </div>
                    <div class="d-flex footer_contacts_phones">
                        <div class="col-md-2 p0 footer_contacts_phones_item_name">
                            <p><strong>Телефоны:</strong></p>
                        </div>
                        <div class="col-md-9 ml3 footer_contacts_phones_item_numbers">
                            <div class="">
                                <p> Вся Россия: <a href='tel:{{ $contact->changePhoneRus() }}'
                                        class="link_color">{{ $contact->phone_rus }}</a></p>
                            </div>
                            <div class="">
                                <p> Санкт-Петербург: <a href='tel:{{ $contact->changePhoneForHref() }}'
                                        class="link_color">{{ $contact->phone }}</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div><strong>Социальные сети:</strong></div>
                        <div class="contacts_social">
                            <a class="icons-sm fb-ic" href="{{ $contact->fb_link }}" target="_blank"><i
                                    class="fa fa-facebook"></i></a>
                            <a class="icons-sm inst-ic" href="{{ $contact->inst_link }}" target="_blank"><i
                                    class="fa fa-instagram"> </i></a>

                            <a class="icons-sm tmb-ic" href="{{ $contact->vk_link }}" target="_blank"><i
                                    class="fa fa-vk">
                                </i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="footer_bottom_Section">
            <div class="container">
                <div class="row">
                    <div class="footer">
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-5">
                            <p>&copy;2011 - 2021 ФОНД «ОРИЕНТИР»
                            </p>
                            <div class="f-size10">Все права на сайт защищены и охраняются
                                законодательством Российской Федерации.</div>
                            <div class="f-size10">Визуальный контент (фотографии, иллюстрации и другие векторные
                                изображения) для сайта<br>предоставлены Фондом С Э С и Р С З и AP.</div>
                            <div class="f-size10">Фотоматериалы для раздела «Новости» предоставлены <a
                                    href="http://rdc-itgroup.ru/" class="link_color">RDC-ITgroup.</a></div>
                            <div class="f-size10"> При перепечатке материалов обязательно согласие Фонда «ОРИЕНТИР».
                            </div>
                        </div>
                        <div class="col-sm-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
