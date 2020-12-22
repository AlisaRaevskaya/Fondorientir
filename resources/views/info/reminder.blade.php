@extends('layout',['seo' => $page->getSeo()])
@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h1>Полезные контакты</h1>
                    <div class="useful_contacts_links">
                        <h5>Ссылки на сайты органов государственной власти:</h5>
                        <div>
                            <table class="table table-bordered table-responsive "
                                style="background-color:#fff;max-width: 100%; overflow: auto;">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="useful_contacts_links_item text-center">
                                                <a href="https://дгск.мвд.рф/" target="_blank">ДГСК МВД России</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="useful_contacts_links_item">
                                                <a href="https://ос.мвд.рф/" target="_blank">Общественный совет при МВД
                                                    России</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="useful_contacts_links_item">
                                                <a href="https://гибдд.рф/" target="_blank">Сайт ГИБДД</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="useful_contacts_links_item">
                                                <a href="https://мвд.рф/" target="_blank">Сайт МВД России
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="useful_contacts_links_item">
                                                <a href="https://ветеран.мвд.рф/" target="_blank">Сайт Совета ветеранов
                                                    МВД</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="useful_contacts_links_item">
                                                <a href="https://гут.мвд.рф/" target="_blank">ГУТ МВД России</a>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="useful_contacts_links_item">
                                                <a href="http://pravo.gov.ru/" target="_blank">Порталы правовой
                                                    информации</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="useful_contacts_links_item">
                                                <a href="http://www.kremtdn.ru/" target="_blank">Сайт Президента РФ
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="useful_contacts_links_item">
                                                <a href="https://www.gosuslugi.ru/" target="_blank">Госуслуги</a>
                                            </div>
                                        </td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="useful_contacts_phones_psp">
                        <img src="/storage/psp-fond.jpg" alt="psp-fond.jpg" title="ПСП-фонд">
                        <h6>Координатор портала</h6>
                        <h3>БФ &laquo;ПСП-фонд&raquo;&nbsp;
                            <a href="https://psp-f.org/kontakty.html" class="link_color">https://psp-f.org/kontakty.html</a>
                        </h3>
                        <p><strong>Информационный портал для мигрантов и работающих с ними
                                специалистов</strong>:<br /><a
                                href="http://www.migrussia.ru"><strong>www.migrussia.ru</strong></a></p>

                    </div>
                    <hr>
                    <div class="useful_contacts_phones text-center">
                        {!! $page->content !!}
                    </div>

                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
{{-- <h3><a href="http://www.migrussia.ru/sovety-migrantam/11-o-portale/154-pomoshch"
        class="link_color">http://www.migrussia.ru/sovety-migrantam/11-o-portale/154-pomoshch</a></strong>
</h3>
<h6 class="m30">Полезные телефоны</h6>
<h6>Экстренная помощь</h6>
<strong>С мобильного телефона</strong> при возникновении
чрезвычайной ситуации, угрозе жизни и здоровью (скорая помощь, пожарная, полиция, спасатели)
&ndash;
единый номер 112 (можно звонить даже без сим-карты, без денег на счете и с заблокированной
клавиатурой телефона)<br /><strong>Со стационарного телефона</strong>:<br />Служба спасения
&ndash;
01<br />Полиция &ndash; 02<br />Скорая помощь &ndash; 03<br />При утечке газа &ndash; 04</p>
<p><strong>&nbsp;МВД России</strong> - 02 со стационарного телефона, 02 или 112 &ndash; с
    мобильного
    телефона</p>
<p>&nbsp;</p>
<h6>Всероссийские информационные сервисы</h6>
<p><a href="https://гувм.мвд.рф/" class="link_color">https://гувм.мвд.рф/</a> &ndash;
    официальный сайт Главного
    управления
    по вопросам миграции МВД России.</p>
<p><a href="http://www.aiss.gov.ru" class="link_color">www.aiss.gov.ru</a> &ndash; портал
    &laquo;Соотечественники&raquo;:
    сайт государственной программы переселения соотечественников в РФ.</p>
<p><a href="http://www.trudvsem.ru" class="link_color">www.trudvsem.ru</a> &ndash; Работа в
    России:
    общероссийская
    база
    вакансий Министерства труда РФ</p>
<p><a href="http://www.онлайнинспекция.рф" class="link_color">www.онлайнинспекция.рф</a> &ndash;
    Электронный
    сервис
    Федеральной службы по труду и занятости (с возможностью направить заявление о нарушении
    трудовых
    прав).</p>
<p>Горячая линия Федерального агентства по делам национальностей (в случае дискриминации по
    признаку
    национальной, этнической и религиозной принадлежности): <a href="mailto:monitoring@fadn.gov.ru"
        class="link_color">monitoring@fadn.gov.ru</a></p>
<p>&nbsp;</p>
<h6>Государственные органы власти города Москвы</h6>
<p><strong>Правительство Москвы</strong><br />сайт: <a href="http://mosopen.ru/goverment"
        class="link_color">mosopen.ru/goverment</a></p>
<p><strong>Департамент труда и занятости города Москвы</strong><br />107078, г.Москва,
    Докучаев
    переулок, дом 12<br />тел.: 8-495 - 679-47-23<br />сайт: <a href="http://mosopen.ru/goverment/284"
        class="link_color">mosopen.ru/goverment/284</a>
</p>
<p><strong>Государственная инспекция труда в Москве</strong> (в случае нарушения трудовых
    прав)<br />Горячая линия: 8-499 - 704-19-23<br />Сайт: <a href="https://git77.rostrud.ru/"
        class="link_color">https://git77.rostrud.ru/</a></p>
<p><strong>Уполномоченный по правам человека в Москве </strong>(контроль соблюдения прав
    иностранных
    граждан сотрудниками государственных органов)<br />Москва, Успенский пер., д. 14, стр.
    1<br />тел.:
    8-495 - 957-05-85<br />сайт: <a href="http://ombudsman.mos.ru/" class="link_color">ombudsman.mos.ru</a></p>
<p><strong>Департамент здравоохранения города Москвы</strong> (сложности с
    получением<br />медицинской
    помощи)<br />127006 Москва, Оружейный пер., дом 43<br />тел.: 8-495 -
    318-47-71<br />сайт:
    <a href="http://new.mosgorzdrav.ru/" class="link_color">new.mosgorzdrav.ru</a>
</p>
<p><strong>Департамент образования города Москвы</strong> (проблемы с устройством ребенка в
    школу,
    записью в детский сад)<br />129090 Москва, ул.Большая Спасская, д.15, стр. 1,
    4<br />тел.:
    8-495
    -
    777-77-77</p>
<p>&nbsp;</p>
<h6>Защита прав мигрантов</h6>
<p><strong>Главное управление по вопросам миграции МВД РФ</strong>&nbsp;</p>
<p><a href="https://гувм.мвд.рф/" class="link_color">гувм.мвд.рф</a><a href="https://xn--b1ab2a0a.xn--b1aew.xn--p1ai/"
        class="link_color"><br /></a></p>
<p><strong>Уполномоченный по правам человека в РФ</strong>&nbsp;</p>
<p><a href="http://ombudsmanrf.org/" class="link_color">ombudsmanrf.org</a></p>
<p><strong>Комиссия при Совете по правам человека при Президенте РФ</strong><br /><a
        href="http://president-sovet.ru/about/comissions/permanent/read/16/"
        class="link_color">president-sovet.ru/about/comissions/permanent/read/16/</a>
</p>
<p><strong>Федеральная служба по труду и занятост</strong>и<br />тел.:
    8800-707-88-41<br />сайт:
    <a href="http://www.rostrud.ru/" class="link_color">rostrud.ru</a>
</p>
<p><strong>Федеральное агентство&nbsp;по делам национальностей</strong></p>
<p>сайт:&nbsp;<a href="http://fadn.gov.ru/" class="link_color">fadn.gov.ru</a></p>
<p><strong>Генеральная прокуратура Российской Федерации</strong> (защита прав иностранных
    граждан,
    обжалование незаконных решений и действий официальных лиц)<br />125993 Москва, ул. Б.
    Дмитровка,
    15а<br />тел.: 8-495 - 987-56-56<br />сайт: <a href="http://genproc.gov.ru/" class="link_color">genproc.gov.ru</a>
</p>
<p><strong>Уполномоченный при президенте РФ по правам ребёнка</strong> (при нарушении прав
    детей
    иностранных граждан)<br />Москва, Миусская пл., д.7 стр. 1<br />тел.: 8-499 -
    251-41-40<br />сайт:&nbsp;<a href="http://deti.gov.ru/" class="link_color">deti.gov.ru</a>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h6>Посольства и консульские учреждения</h6>
<p><strong>Посольство Кыргызской Республики в РФ</strong><br />119017 Москва, ул. Большая
    Ордынка,
    д.
    64<br />тел.: 8-499 - 237-44-52; факс: 8-495 - 951-60-62<br />e-mail: <a href="mailto:info@kyrgyzembassy.ru"
        class="link_color">info@kyrgyzembassy.ru</a><br />сайт: <a href="http://kyrgyzembassy.ru/"
        class="link_color">kyrgyzembassy.ru</a></p>
<p><strong>Посольство Республики Узбекистан в РФ</strong></p>
<p>119017, Москва, Погорельский переулок, д.12</p>
<p>тел.:&nbsp;8-499 230-00-76, 8-499 238-36-20</p>
<p>e-mail.:&nbsp;<a href="mailto:info@uzembassy.ru" class="link_color">info@uzembassy.ru</a></p>
<p>сайт:&nbsp;<a href="http://www.uzembassy.ru/" class="link_color">http://www.uzembassy.ru/</a>
</p>
<p><strong>Посольство Республики Таджикистан в РФ</strong><br />123001 Москва, Гранатный
    пер.
    13<br />тел.: 8-495 - 690-38-46, 690-41-86, 690-61-02; факс: 8-495 -
    691-89-98<br />e-mail:
    <a href="mailto:info@tajembassy.ru" class="link_color">info@tajembassy.ru</a><br />сайт: <a
        href="http://tajembassy.ru/ru" class="link_color">tajembassy.ru/ru</a>
</p>
<p><strong>Посольство Украины в РФ</strong><br />125009 Москва, Леонтьевский переулок,
    18<br />тел.:
    8-495 - 629-19-88, 629-34-22, 629-28-04; факс: 8-495 - 629-46-81<br />e-mail: <a
        href="mailto:emb_ru@mfa.gov.ua">emb_ru@mfa.gov.ua</a></p>
<p>сайт:&nbsp;<a href="http://russia.mfa.gov.ua/ru" class="link_color">russia.mfa.gov.ua/ru</a>
</p>
<p><strong>Посольство Республики Беларусь в РФ</strong></p>
<p>101990 Москва, ул. Маросейка, д.17/6<br />тел.: 8-495 - 777-66-44; факс: 8-495 -
    777-66-33<br />e-mail: <a href="mailto:russia@mfa.gov.by" class="link_color">russia@mfa.gov.by</a><br />сайт:
    <a href="http://embassybel.ru/" class="link_color">embassybel.ru</a>
</p>
<p><strong>Посольство Азербайджанской Республики в РФ</strong><br />125009 Москва,
    Леонтьевский
    переулок, д. 16 <br />тел.: 8-495 - 629-43-32, 8-495 - 629-16-49; факс: 8-495 -
    695-50-72
    <br />e-mail: <a href="mailto:embassy@azembassy.msk.ru" class="link_color">embassy@azembassy.msk.ru</a><br />сайт:
    <a href="http://azembassy.ru/" class="link_color">azembassy.ru</a>
</p>
<p><strong>Посольство Республики Казахстан в РФ</strong><br />101000 Москва, Чистопрудный
    бульвар
    дом 3
    корп.3, вход с Гусятникова переулка <br />тел.: 8-495 - 627-18-09, 8-495 - 627-18-12;
    факс:
    8-495 -
    608-26-50<br />e-mail: <a href="mailto:moscow@mfa.kz" class="link_color">moscow@mfa.kz</a><br />сайт: <a
        href="http://kazembassy.ru/" class="link_color">kazembassy.ru</a></p>
<p><strong>Посольство Армении в РФ</strong><br />101990 Москва, Армянский переулок, д.
    2<br />тел:
    8-495
    - 624-12-69, 624-14-41; факс: 8-495 - 624-45-35<br />e-mail: <a href="mailto:incom@armem.ru"
        class="link_color">incom@armem.ru</a>, <a href="mailto:info@armem.ru">info@armem.ru</a><br />сайт: <a
        href="http://russia.mfa.am/ru" class="link_color">russia.mfa.am/ru</a></p>
<p>&nbsp;</p>
<h6>Общественные организации</h6>
<p><strong>Благотворительный фонд поддержки и развития </strong></p>
<p><strong>просветительских и социальных проектов "ПСП-фонд"</strong> (консультирование
    мигрантов и
    специалистов)</p>
<p>тел.: +7&nbsp;(812) 337 57 85,&nbsp;тел. "горячей линии": +7 (953) 141 31 09,
    сайт:&nbsp;<a href="https://psp-f.org/" class="link_color">https://psp-f.org/</a></p>
<p>Группа "Вконтакте":<a href="https://vk.com/pspfond" class="link_color">vk.com/pspfond</a>Женский клуб:<a
        href="https://vk.com/zhensowet" class="link_color">vk.com/zhensowet</a></p>
<p><strong>Комитет &laquo;Гражданское содействие&raquo;</strong> (помощь беженцам и
    мигрантам)
</p>
<p>тел: 8-495 - 681-18-23, 8-495 - 681-15-32, 8-495 - 681-09-54, 8-495 - 681-05-27</p>
<p>сайт:<a href="https://refugee.ru/" class="link_color">refugee.ru</a></p>
<p><strong>В случае нападения на почве ненависти</strong><br />тел.:
    8903-577-55-87<br />сайт:
    <a href="http://hatecrimes.ru/" class="link_color">hatecrimes.ru</a>
</p>
<p><strong>Российский Красный Крест</strong><br />тел.: 8-499 - 126-75-71,
    126-01-90<br />сайт:
    <a href="http://redcross.ru/" class="link_color">redcross.ru</a>
</p>
<p><strong>Благотворительный центр помощи пережившим сексуальное насилие</strong>
    <br />телефон
    доверия:
    8-499 - 901-02-01<br />сайт: <a href="http://sisters-help.ru/" class="link_color">sisters-help.ru</a>
</p>
<p><strong>Юридическая сеть "Миграция и право"</strong>&nbsp;</p>
<p>сайт:&nbsp;<a href="https://migrant.ru/spisok-punktov-priema-po-gorodam/"
        class="link_color">migrant.ru/spisok-punktov-priema-po-gorodam/&nbsp;</a>
</p>
<p><strong>Форум переселенческих организаций</strong></p>
<p>сайт: <a href="https://migrant.ru/" class="link_color">migrant.ru</a></p> --}}
