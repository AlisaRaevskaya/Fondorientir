<div class="col-md-3 sidebar" style="float:right;">
    {{-- <div class="text-center item_center">
        <img class="img-responsive top_static_article_img" src="{{ asset('storage/banner.jpg') }}" alt="main.jpg">
    </div> --}}

    <div class="text-center item_center sidebar_fond_img">
        <img src="{{ asset('storage/fond.png') }}" alt="president-fond.jpg" class="img-responsive"
            title="Фонд президентских грантов">
    </div>
    <div class="text-center item_center">
        <h6>Решение трудовых споров</h6>
        <h4><a href="tel:+78126124817" class="link_color">+7 (812 ) 612-48-17</a></h4>
        <button class="btn btn-sm" id="btn_popup" data-toggle="modal" data-target="#lawyerQuestion"
            data-category="Решение трудовых споров">Спросить юриста
            бесплатно</button>
    </div>

    <div class="text-center m30">
        <h6>Миграционные вопросы</h6>
        <h4><a href="tel:+78123856989" class="link_color">+7(812) 385-69-89</a></h4>
        <button class="btn btn-sm" id="btn_popup" data-toggle="modal" data-target="#lawyerQuestion"
            data-category="Миграционные вопросы">Спросить юриста
            бесплатно</button>
    </div>

    <div class="text-center m30">
        <h6>Помощь в сложных жизненных ситуациях</h6>
        <h4><a href="tel:+78123856989" class="link_color">+7(812) 385 -69-89</a></h4>

        <button class="btn btn-sm" id="btn_popup" data-toggle="modal" data-target="#lawyerQuestion"
            data-category="Помощь в трудных ситуациях">Спросить юриста
            бесплатно</button>
    </div>

    <section>
        <div>
            <div class="background-img">
                <div class="box">
                    <div class="content">
                        <p>Свежие новости </p>
                        <p>по миграционным вопросам</p>
                        <h1><a href="{{ route('news') }}" style="color:#00ffe9;" target="_blank">Новости</a>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
