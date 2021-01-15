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
                                    <p><a href="{{ $item->laravel_name ? route('second.'. $item->laravel_name) : $item->url }}">
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

            <div class="col-md-4" >
                <div class="footer_widget_title">
                    <h3><a href="{{ route('contacts') }}" target="_self">Контакты</a></h3>
                </div>
                <div class="footer_contacts footer_padding">
                       <p class="text-left" style="font-size:15px;"><strong>{{ $contact->name }}</strong></p>
                        <p><strong>Адрес: </strong>{{ $contact->index }}, {{ $contact->city }}{{ $contact->street }}</p>
                        <p><strong>Электронный адрес: </strong>{{ $contact->email }}</p>
                        <p><strong>Cайт: </strong>{{ $contact->web }}</p>
                         <p><strong>Телефон:<strong><a href='tel:{{ $contact->changePhoneForHref() }}'
                        class="link_color">{{ $contact->phone }}</a></p>
                        <div class="d-flex">
                        <div>Социальные сети:</div>
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
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-3">
                            <p>&copy;2021 "ОРИЕНТИР"</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
