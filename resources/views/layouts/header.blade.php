<section id="header_section_wrapper" class="header_section_wrapper">
    <div class="container">
        <div class="header-section">
            <div class="row">
                @foreach ($contacts as $contact)
                    <div class="col-md-5">
                        <div class="left_section">
                            <div class="">
                                <a href="{{ route('main') }}" class="logo">
                                    <img src="/assets/images/{{ $contact->logo }}" alt="Logo"
                                        class="img-responsive"></a>
                            </div>
                            <!-- Top Social Section -->
                        </div>
                        <!-- Left Header Section -->
                    </div>

                    <div class="col-md-2">
                        <div class="social">
                            <a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                            <!--Twitter-->
                            <a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                            <!--Google +-->
                            <a class="icons-sm inst-ic"><i class="fa fa-instagram"> </i></a>
                            <!--Linkedin-->
                            <a class="icons-sm tmb-ic"><i class="fa fa-vk"> </i></a>
                        </div>
                        <div class="">
                            <p>{{ $contact->email }}</p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="col-md-6">
                            <h6>Правовая приемная</h6>
                            <p>Адрес:{{ $contact->index }} {{ $contact->city }} {{ $contact->street }}</p>
                            <a href="#" class="pop_map_link" data-toggle="modal" data-target=".bd-example-modal-lg"><i
                                    class="fa fa-map-o">
                                    Схема проезда (интерактивная карта)</i></a>
                        </div>
                        <div class="col-md-6">
                            <div class="right_section text-center">
                                <h6><i class="fa fa-phone"></i><a href='tel:+78123856989'>+7(812)-385-69-89</a></h6>
                                <!-- Right Header Section -->
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                    data-target="#exampleModalLong">
                                    Заказать обратный звонок</button>
                            </div>
                        </div>
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
                            data-target="#navbar-collapse-1"><span class="sr-only"></span> <span
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
                                                            <li><a
                                                                    href="{{ $children->laravel_name ? route($children->laravel_name) : $children->url }}">
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
                            <li style="width:350px;">
                                <form>
                                    <!-- Input Group -->
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Поиск"> <span
                                            class="input-group-btn">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </li>
                            <!-- Navbar-->
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
