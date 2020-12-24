<section id="footer_section" class="footer_section">
    <div class="container">
        <hr class="footer-top">
        <div class="row">
            <div class="left_section col-md-4">
                <div class="footer_widget_title">
                    <h3><a href="{{ route('main') }}" target="_self">Фонд</a></h3>
                </div>
                <div class="footer-row">
                    <div class="footer_row_logo flex-row">
                        <div class="text-center logo">
                            <a href="{{ route('main') }}">
                                <img src="/storage/logo.png" alt="Logo" class="img-responsive"></a>
                        </div>
                        <div class="text-center">
                            <h3>
                                Фонд поддержки<br>
                                добровольного переселения<br>
                                соотечественников «ОРИЕНТИР»</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 footer_padding">
                <div class="footer_widget_title">
                    <h3 target="_self" style="color:black;">Карта сайта</h3>
                </div>

                <div class="row">
                    <div class="col-xs-6">
                        <ul class="list-unstyled left">
                            @foreach ($menuitems as $item)
                                <li>
                                    <p><a href="{{ $item->laravel_name ? route($item->laravel_name) : $item->url }}">
                                            {{ $item->title }}</a></p>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-xs-6">
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
                    <p class="text-left" style="font-size:15px;"><strong>{{ $contact->name }}</strong></p>
                    <p><strong>Адрес: </strong>{{ $contact->index }}, {{ $contact->city }},{{ $contact->street }}
                    </p>
                    <p><strong>Электроный адрес: </strong>{{ $contact->email }}</p>
                    <p><strong>Cайт: </strong>{{ $contact->web }}</p>
                    <p><strong>Телефоны:<strong> {{ $contact->phone }}</p>
                    {{-- <div>
                        <h3>Мы в социальных сетях:</h3>
                        {{-- <div class="social">
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
                    </div> --}}
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
