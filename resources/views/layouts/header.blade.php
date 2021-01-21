<section id="header_section_wrapper" class="header_section_wrapper">
    <div class="container">
        <div class="header-section">
            <div class="row">
                <div class="left_section col-md-5" style="padding:0;">
                    <div style="display:flex;justify-content:center;">
                        <div class="text-center logo">
                            <a href="{{ route('main') }}">
                                <img src="/storage/{{ $contact->logo }}" alt="Logo" class="img-responsive"></a>
                        </div>
                        <div class="text-center" id="logo_name">
                            <p>Фонд поддержки<br>
                                добровольного переселения<br>
                                соотечественников «ОРИЕНТИР»</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 text-center mt1-7">
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
                        <h5>Вся Россия:</h5>
                        <p class="header_phone"><a href='tel:{{ $contact->changePhoneRus() }}' style="color:red"><i
                                    class="fa fa-phone"></i> {{ $contact->phone_rus }}</a>
                        </p>
                        <h5>Санкт-Петербург:</h5>
                        <p class="header_phone"><a href='tel:{{ $contact->changePhoneForHref() }}'><i
                                    class="fa fa-phone"></i>{{ $contact->phone }}</a>
                        </p>
                    </div>
                    <div>
                        <a href="#" type="button" class="btn btn-feedback-call text-center btn-primary "
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
                    <div class="collapse navbar-collapse" id="#navbar-collapse-1"
                        style="display:flex;justify-content:space-around;align-items:center">
                        <ul class="nav navbar-nav main-nav" style="display:flex;justify-content:space-around;">
                            @foreach ($menuitems as $item)
                                @if (!!$item->children)
                                    <li class="dropdown m-menu-fw menu_item ">
                                        <a href="{{ $item->laravel_name ? route($item->laravel_name) : $item->url }}"
                                            data-toggle="dropdown" class="dropdown-toggle">
                                            {{ $item->title }}
                                            <span><i class="fa fa-angle-down"></i></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="m-menu-content">
                                                    <ul class="col-sm-3">
                                                        @foreach ($item->children as $children)
                                                            <li><a
                                                                    href="{{ $children->laravel_name ? route($children->laravel_name) : $children->url }}">
                                                                    {{ $children->title }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                @else
                                    <li class="dropdown m-menu-fw menu_item">
                                        <a
                                            href="{{ $item->laravel_name ? route($item->laravel_name) : $item->url }}">{{ $item->title }}</a>
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
