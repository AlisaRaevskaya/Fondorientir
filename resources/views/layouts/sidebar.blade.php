<div class="col-md-3">
    <div class="text-center item_center">
        <img class="img-responsive" src="{{ asset('storage/banner.jpg') }}" alt="main.jpg">
    </div>

    <div class="text-center">
        <img src="{{ asset('storage/fond.png') }}" alt="president-fond.jpg" class="img-responsive">
        <h2>Решение трудовых споров</h2>
        <h4><a href="tel:+78126124817" class="link_color">+7 (812 ) 612-48-17</a></h4>
        <button class="btn btn-sm" id="btn_popup" data-toggle="modal" data-target="#lawyerQuestion"
            data-category="trud">Спросить юриста
            бесплатно</button>
    </div>

    <div class="text-center m30">
        <h2>Миграционные вопросы</h2>
        <h4><a href="tel:+78123856989" class="link_color">+7(812) 385-69-89</a></h4>
        <button class="btn btn-sm" id="btn_popup" data-toggle="modal" data-target="#lawyerQuestion"
            data-category="migration">Спросить юриста
            бесплатно</button>
    </div>

    <div class="text-center m30">
        <h2>Помощь в сложных жизненных ситуациях</h2>
        <h4><a href="tel:+78123856989" class="link_color">+7(812) 385-69-89</a></h4>
        <p>Квалифицированная юридическая помощь
            трудовым мигрантам и мигрантам-соотечественникам
            на безвозмездной основе в решении трудовых споров
            и помощи в сложных жизненных ситуациях:
        </p>
        <p><strong>потеря документов,
                невыплата заработной платы,
                отказ от оформления трудового договора,
                незаконное привлечение
                к дисциплинарной ответственности,
                незаконное привлечение к административной ответственности,
                невыплата социальных пособий,
                незаконное задержание под стражей,
                необоснованные выдворения, депортации,
                наложения запретов на въезд в РФ,
                необоснованное изъятие документов
                и др.</strong>
        </p>
        <button class="btn btn-sm" id="btn_popup" data-toggle="modal" data-target="#lawyerQuestion"
            data-category="pomosch">Спросить юриста
            бесплатно</button>
    </div>
    <div class="text-center m30" style="padding:10px; border:1px solid black;">
        <p>Свежие новости </p>
        <p>
            по мигарционным вопросам
        </p>
        <h6><a href="{{ route('news') }}">Новости</a></h6>
    </div>
</div>
