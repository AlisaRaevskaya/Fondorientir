<section id="header_section_wrapper" class="header_section_wrapper">
    <div class="container">
        <div class="header-section">
            <div class="row">
                <div class="left_section col-md-5" style="padding:0;">
                    <div style="display:flex;justify-content:center">
                        <div class="text-center logo" style="position:relative;">
                            <a href="{{ route('second_main') }}"><img src="/storage/app/public/{{ $contact->logo2 }}"
                                    alt="Logo" class="img-responsive"></a>
                        </div>
                        <div class="text-center" id="second_logo_name">
                            <p class="turquoise">Центр правовой поддержки<br>
                                и образования<br>
                                трудовых мигрантов</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 text-center">
                    <div class="social">
                        <a class="icons-sm fb-ic" href="{{ $contact->fb_link }}" target="_blank"><i
                                class="fa fa-facebook"></i></a>
                        <a class="icons-sm inst-ic" href="{{ $contact->inst_link }}" target="_blank"><i
                                class="fa fa-instagram"> </i></a>

                        <a class="icons-sm tmb-ic" href="{{ $contact->vk_link }}" target="_blank"><i class="fa fa-vk">
                            </i></a>
                    </div>
                </div>
                <div class="col-md-3 text-center mt1-7">
                    <p style="font-size:15px;"><strong>Правовая приемная</strong></p>
                    <p>{{ $contact->city }},</p>
                    <p>{{ $contact->street }}</p>
                    <a href="#" class="pop_map_link schema" data-toggle="modal" data-target=".bd-example-modal-lg"><i
                            class="fa fa-map-o">
                        </i> Схема проезда (интерактивная карта)</a>
                </div>

                <div class="col-md-2 text-center align-center">
                    <div>
                        <h6>Вся Россия:</h6>
                        <p class="header_phone"><a href='tel:{{ $contact->changePhoneRus() }}' style="color:red"><i
                                    class="fa fa-phone"></i> {{ $contact->phone_rus }}</a>
                        </p>
                        <h6>Санкт-Петербург:</h6>
                        <p class="header_phone"><a href='tel:{{ $contact->changePhoneForHref() }}'><i
                                    class="fa fa-phone"></i>{{ $contact->phone }}</a>
                        </p>
                        <p class="header_phone"><a href='tel:{{ $contact->changeSecondPhoneForHref() }}'><i
                                    class="fa fa-phone"></i>{{ $contact->phone2 }}</a></p>
                    </div>
                    <div>
                        <a href="#" type="button" class="btn btn-feedback-call text-center turquoise-back"
                            data-toggle="modal" data-target="#callModalLong">
                            <strong> Заказать обратный звонок</strong></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Section -->


        <div class="navigation-section">
            <nav class="navbar m-menu navbar-default">
                <div>
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar-collapse-1"><span class="sr-only"></span> <span
                                class="icon-bar"></span>
                            <span class="icon-bar"></span> <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu-flex" id="#navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav" class="d-flex justify-around">
                            @foreach ($secondmenu as $item)
                                @if (!!$item->children)
                                    <li class="dropdown m-menu-fw menu_item">
                                        <a href="{{ $item->laravel_name ? route($item->laravel_name) : $item->url }}"
                                            data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true">
                                            {{ $item->title }}
                                            <span><i class="fa fa-angle-down"></i></span>
                                        </a>
                                        <ul class="dropdown-menu" style="right:0">
                                            <li>
                                                <div class="m-menu-content">
                                                    <ul class="col-sm-3">
                                                        @foreach ($item->children as $children)
                                                            <li><a
                                                                    href="{{ 'second.' . $children->laravel_name ? route($children->laravel_name) : $children->url }}">
                                                                    {{ $children->title }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                @else
                                    <li class="dropdown m-menu-fw menu_item">
                                        <a
                                            href="{{ $item->laravel_name ? route('second.' . $item->laravel_name) : $item->url }}">{{ $item->title }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</section>
