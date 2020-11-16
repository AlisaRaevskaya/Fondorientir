<section id="header_section_wrapper" class="header_section_wrapper">
    <div class="container">
        <div class="header-section">
            <div class="row">
                @foreach ($contacts as $contact)
                    <div class="col-md-5">
                        <div class="left_section">
                            <div class="row justify-content-between">
                                <a href="{{route('main')}}" class="logo">
                                <img src="/assets/images/logo.png" alt="Logo"></a>
                                <div style="position:absolute;top:5%;
                                left:30%;float:right;" class="text-center" id="logo-name">
                                    <h5>Фонд поддержки</h5>
                                    <h5>добровольного переселения</h5>
                                    <h5>соотечественников «ОРИЕНТИР»</h5>
                                </div>
                            </div>


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
                            <!-- Top Social Section -->
                        </div>
                        <!-- Left Header Section -->
                    </div>

                    <div class="col-md-3"></div>

                    <div class="col-md-4">
                        <div class="right_section">
                            <ul class="nav navbar-nav">
                                <li><h6><a>Часы работы:{{ $contact->hours }}</a></h6></li>
                                <li><a>Е-mail:{{ $contact->email }}</a></li>
                                <li><a>Адрес:{{ $contact->index }} {{ $contact->city }} {{ $contact->street }}</a></li>
                                <li><a href="#" class="pop_map_link" data-toggle="modal"
                                        data-target=".bd-example-modal-lg">Схема проезда (интерактивная карта)</a></li>
                                <li><h3><a href='#'>{{ $contact->phone }}</a></h3></li>

                            </ul>
                            <!-- Language Section -->
                        </div>
                        <!-- Right Header Section -->
                         <div style="margin: 0 auto;"><button type="button"class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModalLong">
                                    Заказать обратный звонок</button></div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Header Section -->


        <div class="navigation-section">
            <nav class="navbar m-menu navbar-default">
                <div>
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="#navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav">
                            @foreach ($menuitems as $item)
                                @if (!!$item->children)
                                    <li class="dropdown m-menu-fw">
                                        <a href="{{ $item->laravel_name ? route($item->laravel_name) : $item->url }}"
                                            data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true">
                                            {{ $item->title }}
                                            <span><i class="fa fa-angle-down"></i></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="m-menu-content">
                                                    <ul class="col-sm-3">
                                                        @foreach ($item->children as $children)
                                                        <li><a href="{{ $children->laravel_name ?
                                                        route($children->laravel_name) : $children->url }}">
                                                        {{ $children->title }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                @else
                                    <li class="dropdown m-menu-fw">
                                        <a
                                            href="{{ $item->laravel_name ? route($item->laravel_name) : $item->url }}">{{ $item->title }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>

                    <!-- .navbar-collapse -->
                </div>
                <!-- .container -->
            </nav>
            <!-- .nav -->
        </div>
        <!-- .navigation-section -->

    </div>
    <!-- .container -->
</section>
<!-- header_section_wrapper -->

