<section id="footer_section" class="footer_section">
    <div class="container">
        <hr class="footer-top">
        <div class="row">
            <div class="col-md-3">
                <div class="footer_widget_title"><h3><a href="category.html" target="_self">О Фонде</a></h3></div>
                <div class="logo footer-logo">
                    <a title="fontanero" href="index.html">
                        <img src="/assets/images/logo.png" alt="technews" width:="95pt"height ="95pt">
                    </a>

                    <p>Фонд поддержки добровольного переселения соотечественников «ОРИЕНТИР»</p>
                    <p> (ОГРН: 1117800001912, ИНН: 7838030503)</p>
                    <p> “ORIENTEER" Fund Supporting Voluntary Resettlement of compatriots</p>
                    <p>Санкт-Петербург, 190068,пр. Римского-Корсакова, д 39</p>
                   <p> http://www.fondorentir.ru</p>
                </div>
            </div>

            <div class="col-md-3">

                <div class="footer_widget_title">
                    <h3><a href="category.html" target="_self">Карта сайта</a></h3>
                </div>
                <div class="row">

                    <div class="col-xs-4">
                    <ul class="list-unstyled left">
                            @foreach($menuitems as $item)
                            <li><a href="{{$item->laravel_name ? route($item->laravel_name) : $item->url }}">
                            {{$item->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-xs-8">
                        <ul class="list-unstyled">
                        @foreach($menuitems as $item)
                        @if(isset($item->children))
                        @foreach($item->children as $i)
                        <li><a href="{{$item->laravel_name ?route($item->laravel_name): $item->url }}">{{$i->title}}</a></li>
                        @endforeach
                        @endif
                        @endforeach
                        </ul>
                    </div>

                </div>
            </div>

            <div class="col-md-3">
                <div class="footer_widget_title">
                    <h3><a href="#" target="_self">Новости</a></h3>
                </div>

                <div class="media">
                @foreach($newsitems as $new)

                    <!-- <div class="media-left">
                        <a href="#"><img class="media-object" src="assets/img/editor_pic1.jpg"
                                         alt="Generic placeholder image"></a>
                    </div> -->
                    <div class="media-body">
                        <p class="media-heading">
                            <a href="{{$new->id}}">{{$new->title}}</a>
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_widget_title">
                    <h3><a href="category.html" target="_self">Контакты</a></h3>
                </div>
                <div class="widget_photos">
                    <div>
                        <p>Часы работы: с 9.00 до 18.00(кроме субботы и воскресенья)</p>
                        <p>Тел.: +7(812) 385 -69-89, +7(911)253-85-01</p>
                        <p>Е-mail: inlo®fondorientir.ru</p>
                    </div>
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

                <div class="row">
                <form action="/subscribe" method="post" >
                @csrf
                <div class="form-group ">
                <label class="" for="formGroupInputLarge">
                    <h3><span class="red-color">Подписка</span> на наши новости<h3>
                </label>
                <div class="form-group">
                    <input type="email" name="email" class="form-control input-lg"
                    placeholder="Ваш email">
                </div>
                <div id="sub_success"></div>
                <div class="form-group ">
                    <input type="submit" value="Подписаться" class="btn btn-large blue subscription_btn">
                </div>
                <!-- <div class="col-sm-2"></div> -->
                </div>
                </form>
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
                    <div class="col-sm-3">
                        <p>Technology News Magazine</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
