<section id="footer_section" class="footer_section">
    <div class="container">
        <hr class="footer-top">
        <div class="row">
            <div class="col-md-3">
                <div class="footer_widget_title"><h3><a href="category.html" target="_self">О Фонде</a></h3></div>
                <div class="logo footer-logo">
                    <a title="fontanero" href="index.html">
                        <img src="/assets/images/logo.png" alt="technews">
                    </a>

                    <p>Фонд поддержки добровольного переселения соотечественников «ОРИЕНТИР»</p>
                    <p> (ОГРН: 1117800001912, ИНН: 7838030503)</p>
                    <p> “ORIENTEER" Fund Supporting Voluntary Resettlement of compatriots</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_widget_title">
                    <h3><a href="category.html" target="_self">Discover</a></h3>
                </div>
                <div class="row">
                    <!-- <div class="col-xs-4">
                        <ul class="list-unstyled left">
                            <li><a href="#">Mobile</a></li>
                            <li><a href="#">Tablet</a></li>
                            <li><a href="#">Gadgets</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Camera</a></li>
                            <li><a href="#">Apps</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Membership</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Job</a></li>
                            <li><a href="#">SiteMap</a></li>
                        </ul>
                    </div> -->
                    <div class="col-xs-">
                        <ul class="list-unstyled">
                        @foreach($menuitems as $item)
                            <li><a href="{{$item->laravel_name ? route($item->laravel_name) : $item->url }}">
                            {{$item->title}}</a></li>

                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_widget_title">
                    <h3><a href="#" target="_self">Editor Picks</a></h3>
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
                        <span class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-full"></i>
                        </span>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_widget_title">
                    <h3><a href="category.html" target="_self">Tech Photos</a></h3>
                </div>
                <div class="widget_photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo1.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo2.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo3.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo4.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo5.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo6.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo7.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo8.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo9.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo10.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo11.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="assets/img/tech_photo12.jpg" alt="Tech Photos">
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
                        <p>&copy; Copyright 2016-Tech News . Design by: <a href="https://uicookies.com">uiCookies</a> </p>
                    </div>
                    <div class="col-sm-3">
                        <p>Technology News Magazine</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
