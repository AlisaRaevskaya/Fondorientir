@extends('layout', ['seo' => $page->getSeo()])
@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div>
                        <ol class="breadcrumb info_breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('useful-info') }}">Полезная
                                    информация</a></li>
                            <li class="breadcrumb-item active">Гражданство РФ</li>
                        </ol>
                    </div>
                    <div class="info_item">
                        <div class="info_item_title">
                            <h5 class="underline">Гражданство РФ</h5>
                        </div>
                        <div class="info_item_img">
                            <img src="/storage/info/pass3.jpg" alt="grazhdanstvo" title="Гражданство РФ">
                        </div>
                        <div class="info_item_content">
                            <p><strong>Гражданство РФ (Гражданство)</strong> &ndash; это правовой статус,
                                который
                                дает
                                человеку
                                определенные права в государстве, чьим гражданином он является.</p>
                            <p>Перед тем как получить гражданство, у иностранного гражданина должен быть оформлен вид на
                                жительство.
                            </p>
                            <p><strong>Иностранный гражданин может получить гражданство РФ в нескольких случаях:</strong>
                            </p>
                            <ol>
                                <li class="li_padding">В общем порядке;</li>
                                <li class="li_padding">В упрощенном порядке;</li>
                                <li class="li_padding">Вступив в государственную программу по переселению соотечественников.
                                </li>
                            </ol>
                            <p><strong>Какие существуют основания для получения гражданства РФ в общем порядке?</strong></p>
                            <ul class="ul_padding">
                                <li class="li_padding">Рождение на территории РФ;</li>
                                <li class="li_padding">Прием в гражданство Российской Федерации;</li>
                                <li class="li_padding">Восстановление в гражданстве Российской Федерации;</li>
                                <li class="li_padding">Иные основания, предусмотренные ФЗ №62 от 31.05.2002г. или иным
                                    международным договором.
                                </li>
                            </ul>
                            <a href="tel:+78126124812"><img src="{{ asset('storage/button3.png') }}"
                                    alt=" consulation-button.jpg" class="green_btn img-responsive"
                                    title="Бесплатная консультация"></a>
                            <p><strong>Что нужно чтобы получить гражданство в упрощенном порядке?</strong></p>
                            <ul class="ul_padding">
                                <li class="li_padding">Быть совершеннолетним и дееспособным;</li>
                                <li class="li_padding">Иметь родителя-гражданина РФ, проживающего на территории Российской
                                    Федерации;</li>
                                <li class="li_padding">Состоять в гражданстве бывшего СССР или проживать в этих
                                    государствах,
                                    при этом не получив
                                    гражданства;</li>
                                <li class="li_padding">Получить среднее профессиональное или высшее профессиональное
                                    образование
                                    после 1 июля 2002
                                    года
                                    в
                                    российских
                                    образовательных учреждениях и являться при этом гражданином бывшего СССР;</li>
                                <li class="li_padding">Родиться на территории РСФСР, и иметь гражданство бывшего СССР;</li>
                                <li class="li_padding">Проживать в России и состоять в браке с гражданином РФ не менее трех
                                    лет;
                                </li>
                                <li class="li_padding">Быть нетрудоспособным и иметь совершеннолетних дееспособных детей
                                    &mdash;
                                    граждан РФ;</li>
                                <li class="li_padding">Иметь ребенка, являющегося гражданином РФ;</li>
                                <li class="li_padding">Иметь ребенка, достигшего возраста восемнадцати лет, являющимся
                                    гражданином РФ и признанным
                                    недееспособными
                                    или
                                    ограниченными в дееспособности;</li>
                                <li class="li_padding">Быть нетрудоспособным, прибывшие в Россию из государств, входивших в
                                    состав СССР, и
                                    зарегистрированные по
                                    месту
                                    жительства в РФ по состоянию на 1 июля 2002 г.;</li>
                                <li class="li_padding">Быть ветераном Великой Отечественной войны;</li>
                                <li class="li_padding">Иметь близких недееспособных родственников;</li>
                                <li class="li_padding">Иметь регистрацию по месту жительства на территории субъекта РФ,
                                    выбранного ими для
                                    постоянного
                                    проживания в
                                    соответствии с Государственной программой по переселению соотечественников, проживающих
                                    за
                                    рубежом;
                                </li>
                                <li class="li_padding">Являться носителем русского языка.</li>
                            </ul>
                            <h3 class="underline">Документы для оформления гражданства РФ в общем порядке:</h3>
                            <p>Чтобы получить гражданство РФ в общем порядке, иностранный гражданин должен предоставить в
                                ГУВМ
                                МВД
                                следующий
                                пакет
                                документов:</p>
                            <ol>
                                <li class="li_padding">Вид на жительство</li>
                                <li class="li_padding">Нотариально удостоверенная копия паспорта с переводом</li>

                                <li class="li_padding">Нотариально удостоверенная копия свидетельства о рождении (либо
                                    справка
                                    об отсутствии в
                                    государстве
                                    прежнего
                                    проживания такового документа)</li>
                                <li class="li_padding">Нотариально удостоверенная копия свидетельства о заключении брака
                                    (при
                                    наличии брака),
                                    расторжении
                                    брака (при
                                    наличии)</li>
                                <li class="li_padding">Документ, подтверждающий обращение с заявлением об отказе от
                                    имеющегося
                                    гражданства (в) и
                                    квитанция
                                    о
                                    заказном
                                    почтовом отправлении (не требуется для граждан Туркменистана и Таджикистана)</li>
                                <li class="li_padding">Документ о наличии законного источника средств к существованию
                                    (справка
                                    формы 2НДФЛ или 3
                                    НДФЛ,
                                    или
                                    сведения о
                                    доходах лица, на иждивении которого находится)</li>
                                <li class="li_padding">Документ, подтверждающий владение русским языком (от предоставления
                                    данного документа
                                    освобождаются
                                    мужчины,
                                    достигшие возраста 65 лет, женщины, достигшие возраста 60 лет)</li>
                                <li class="li_padding">Квитанция об оплате государственной пошлины 3500 руб.</li>
                                <li class="li_padding">Нотариально удостоверенная копия ИНН</li>
                                <li class="li_padding">Копия трудовой книжки</li>
                                <li class="li_padding">Подробная автобиография</li>
                            </ol>

                            <a href="tel:+78126124812"><img src="{{ asset('storage/button3.png') }}"
                                    alt=" consulation-button.jpg" class="green_btn img-responsive"
                                    title="Бесплатная консультация"></a>
                        </div>
                    </div>
                    <div class="info_item">
                        <div class="info_item_title">
                            <h5 class="underline">Тестирование по русскому языку для гражданства</h5>
                        </div>
                        <div class="info_item_img">
                            <img src="/storage/info/test.jpg" alt="test" title="Сертификат тестирования по русскому языку">
                        </div>
                        <div class="info_item_content">
                            <p>С 1 января 2015 года, каждый иностранный гражданин, желающий получить трудовой патент,
                                разрешение
                                на
                                работу или
                                вид
                                на жительство, обязан пройти тестирование по русскому языку, истории и праву.</p>
                            <p>При подаче документов на оформление, заявитель обязан предоставить документ, подтверждающий
                                владение
                                русским
                                языком,
                                историей и правом.</p>
                            <p><strong>Какие это могут быть документы?</strong></p>
                            <ol>
                                <li class="li_padding">Сертификат о владении русским языком, знании истории России и основ
                                    законодательства Российской
                                    Федерации
                                    (срок
                                    действия - 5 лет);</li>
                                <li class="li_padding">Документ государственного образца об образовании (на уровне не ниже
                                    основного
                                    общего
                                    образования),
                                    выданным
                                    образовательным учреждением на территории государства, входившего в состав СССР, до 1
                                    сентября
                                    1991
                                    года;
                                </li>
                                <li class="li_padding">Документ об образовании и (или) о квалификации, выданным лицам,
                                    успешно
                                    прошедшим
                                    государственную
                                    итоговую
                                    аттестацию на территории Российской Федерации с 1 сентября 1991 года.</li>
                            </ol>
                            <p>Если Вы не обладаете документами об образовании, - необходимо пройти тестирование.</p>
                            <p>Сертификат выдается на срок действия 5 лет.</p>
                            <a href="tel:+78126124812"><img src="{{ asset('storage/button3.png') }}"
                                    alt=" consulation-button.jpg" class="green_btn img-responsive"
                                    title="Бесплатная консультация"></a>
                        </div>
                    </div>

                    <div class="info_item">
                        <div class="info_item_title">
                            <h5 class="underline">Медицинская комиссия для оформления РВП, ВНЖ, Гражданства РФ
                            </h5>
                        </div>
                        <div class="info_item_img">

                            <div style="flex">
                                <img src="{{ asset('storage/info/zakl.jpg') }}" alt="zakluchenie"
                                    title="Медицинское заключение">
                                <img src="{{ asset('storage/info/zakl2.jpg') }}" alt="zakluchenie"
                                    title="Медицинское заключение">
                            </div>
                        </div>
                        <div class="info_item_content">
                            <p>Согласно российскому законодательству каждый иностранный гражданин при оформлении:</p>
                            <ul class="ul_padding">
                                <li class="li_padding">разрешения на временное проживание,</li>
                                <li class="li_padding">вида на жительство,</li>
                                <li class="li_padding">гражданства РФ</li>
                            </ul>
                            <h3>обязан предоставить в ФМС документы об отсутствии у него инфекционных заболеваний,
                                ВИЧ-инфекции и
                                заболевания
                                наркоманией.</h3>
                            <p>Данные документы можно получить, пройдя медицинскую комиссию. Обращаем ваше внимание, что
                                сделать
                                это
                                можно
                                только в
                                специализированных медицинских организациях, перечень которых устанавливается правительством
                                РФ
                                в
                                каждом
                                регионе
                                отдельно.</p>
                            <a href="tel:+78126124812"><img src="{{ asset('storage/button3.png') }}"
                                    alt=" consulation-button.jpg" class="green_btn img-responsive"
                                    title="Бесплатная консультация"></a>
                            <p>Со списком медицинский учреждений Санкт-Петербурга и Ленинградской области, в которых можно
                                пройти
                                медицинский
                                осмотр
                                для получения РВП, ВНЖ и гражданства, вы можете ознакомиться<strong><a
                                        href="/storage/info/med-phones.docx"> здесь</strong></a>.
                            </p>
                        </div>
                    </div>
                    <div class="info_item">
                        <div class="info_item_title">
                            <h5 class="underline">Статус носителя русского языка</h5>

                            <img src="/storage/info/status.jpg" alt="sertifikat_status">
                            <p><span class="f-size15"><strong>Носитель русского языка</strong> </span>&ndash;
                                иностранный
                                гражданин, который свободно
                                владеет
                                русским языком, может легко на нем общаться и использует его в повседневной жизни.
                                Данный
                                статус
                                иностранцу присваивается специальной государственной комиссией после прохождения им
                                собеседования.
                            </p>
                            <p><strong>Для чего иностранному гражданину получать данный статус?</strong></p>
                            <p>Согласно статье 14 ФЗ № 62 &laquo;О гражданстве Российской Федерации&raquo;, статус
                                носителя
                                русского
                                языка дает право иностранцу оформить себе российское гражданство по упрощенной системе.
                            </p>
                            <p>Другими словами, если иностранный гражданин получит данный статус, то он сможет сразу
                                оформить
                                себе
                                вид на жительство и после оформить гражданство РФ.</p>
                            <p>Тем же иностранцам, кто уже оформил себе ВНЖ, статус носителя русского языка позволит не
                                ждать
                                пока
                                пройдет 5 лет с даты получения вида на жительство, а подать документы на гражданство на
                                много
                                раньше.</p>
                            <p><strong>Кто может получить статус русского языка?</strong></p>
                            <p>Статус носителя русского языка могут получить только совершеннолетние иностранные
                                граждане,
                                которые
                                имеют прямых родственников по восходящей линии (мама, дедушка, прабабушка и т.д.),
                                которые
                                проживают
                                или ранее проживали в России. Также, данный иностранный гражданин должен хорошо владеть
                                русским
                                языком.</p>
                            <p><strong>Как получить статус носителя русского языка?</strong></p>
                            <ol>
                                <li class="li_padding">Необходимо собрать пакет документов;</li>
                                <li class="li_padding">Пройти собеседование;</li>
                                <li class="li_padding">Получить статус носителя русского языка.</li>
                            </ol>
                            <a href="tel:+78126124812"><img src="{{ asset('storage/button3.png') }}"
                                    alt=" consulation-button.jpg" class="green_btn img-responsive"
                                    title="Бесплатная консультация"></a>

                            <h3 class="underline">Перечень необходимых документов:</h3>
                            <ol>
                                <li class="li_padding">Заявление, установленной формы
                                    <a href="/storage/blanks/blank-7.doc"><strong>(скачать бланк здесь)</strong></a>
                                </li>
                                <li class="li_padding">Документ, удостоверяющий личность (паспорт);</li>
                                <li class="li_padding">Документы, подтверждающие, что иностранный гражданин
                                    находится в
                                    России законно. К таким
                                    документам относятся:
                                    <ul class="ul_padding">
                                        <li class="li_padding">Миграционная карта;</li>
                                        <li class="li_padding">Миграционный учет (временная регистрация);</li>
                                        <li class="li_padding">Виза;</li>
                                        <li class="li_padding">Разрешение на временное проживание;</li>
                                        <li class="li_padding">Вид на жительство.</li>
                                    </ul>
                                </li>
                                <li class="li_padding">Документ, доказывающий родственные связи с родственниками,
                                    которые
                                    живут или ранее жили
                                    в России;</li>
                                <li class="li_padding">Документ, который подтверждает факт проживания родственников
                                    заявителя в России.</li>
                            </ol>
                        </div>
                    </div>
                    <div class="info_item">
                        <div class="info_item_title">
                            <h5 class="underline">СНИЛС (страховое пенсионное свидетельство): оформление СНИЛС
                                иностранному
                                гражданину
                            </h5>
                        </div>
                        <div class="info_item_img">
                            <img src="/storage/info/snils.jpg" alt="snils" title="Снилс">
                        </div>
                        <div class="info_item_content">
                            <p><strong>СНИЛС работника</strong> - это страховой номер индивидуального&nbsp;лицевого
                                счета,
                                который
                                указывается в страховом свидетельстве сотрудника.&nbsp;</p>
                            <p>Временно пребывающие на территории России иностранные граждане или лица без
                                гражданства,
                                которые
                                работают по трудовому договору обязаны иметь СНИЛС (ФЗ №167, ст.7, п.1). Для такой
                                категории
                                граждан
                                необходимо будет представлять документы в ПФР, оформлять страховые свидетельства и
                                уплачивать
                                страховые взносы.&nbsp;</p>
                            <h3 class="underline">Список необходимых документов:</h3>
                            <p>Для того, чтобы оформить СНИЛС сотруднику, необходимо предоставить следующие
                                документы:</p>
                            <p>От работодателя:</p>
                            <ul class="ul_padding">
                                <li class="li_padding">Реквизиты компании;</li>
                                <li class="li_padding">Номер свидетельства и постановке на учет в ПФР.</li>
                            </ul>
                            <p>От иностранного гражданина:</p>
                            <ul class="ul_padding">
                                <li class="li_padding">Копия паспорта;</li>
                                <li class="li_padding">Копия миграционной карты;</li>
                                <li class="li_padding">Копия регистрации (уведомление о месте временного
                                    пребывания);</li>
                                <li class="li_padding">Дата приема на работу;</li>
                                <li class="li_padding">Профессия.</li>
                            </ul>
                            <a href="tel:+78126124812"><img src="{{ asset('storage/button3.png') }}"
                                    alt=" consulation-button.jpg" class="green_btn img-responsive"
                                    title="Бесплатная консультация"></a>
                        </div>
                        <div class="info_item">
                            <div class="info_item_title">
                                <h5 class="underline">ИНН: оформление ИНН иностранному гражданину</h5>
                                <img src="/storage/info/inn.jpg" alt="inn" title="INN">

                                <p>Согласно п. 7 статьи 83 Налогового Кодекса РФ и с 2014 года согласно п. 7 статьи
                                    13
                                    Федерального
                                    закона №115 от 25 июля 2002 года "О правовом положении иностранных граждан в
                                    Российской
                                    Федерации"
                                    (в ред. 248-ФЗ от 23.07.2013 г.), иностранцам требуется <strong>получить
                                        ИНН</strong>
                                    (идентификационный номер налогоплательщика), если они:</p>
                                <ul class="ul_padding">
                                    <li class="li_padding">хотят оформить разрешение на работу и трудовой патент;
                                    </li>
                                    <li class="li_padding">владеют имуществом, подлежащим налогообложению
                                        (автомобили,
                                        недвижимость
                                        и
                                        пр.);</li>
                                    <li class="li_padding">совершают действия или операции, подлежащие
                                        налогообложению.</li>
                                </ul>
                                <p><span class="f-size15"><strong>Внимание работодателям!</strong></span> Если Вы
                                    приняли на
                                    работу высококвалифицированного
                                    иностранного гражданина, то Вам обязательно нужно оформить ИНН для нового
                                    сотрудника и
                                    предоставить
                                    уведомление о постановке его на налоговой учёт в течение 30 дней со дня
                                    заключения трудового
                                    договора в&nbsp; ГУВМ МВД (бывший УФМС) РФ.</p>
                                <a href="tel:+78126124812"><img src="{{ asset('storage/button3.png') }}"
                                        alt=" consulation-button.jpg" class="green_btn img-responsive"
                                        title="Бесплатная консультация"></a>
                                <h6 class="underline">Документы для ИНН иностранному гражданину</h6>
                                <ul class="ul_padding">
                                    <li class="li_padding">Документ, удостоверяющий личность (копия)</li>
                                    <li class="li_padding">Временную регистрацию по месту пребывания (копия)</li>
                                    <li class="li_padding">Нотариально заверенный перевод паспорта</li>
                                </ul>
                            </div>
                        </div>
                        <div class="info_item">
                            <div class="info_item_title">
                                <h5 class="underline">Полис медицинского страхования для иностранных граждан
                                    (ДМС);</h5>
                            </div>
                            <div class="info_item_img">
                                <img src="/storage/info/polis.jpg" alt="polic" title="ДМС полис">
                            </div>
                            <div class="info_item_content">
                                <p>Согласно п.5 ст.27 ФЗ № 114 от 15.08.1996 г. "О порядке выезда и въезда в
                                    РФ":</p>
                                <p>въезд в Россию иностранному гражданину или лицу без гражданства не
                                    разрешается, если они не
                                    представили полис медицинского страхования, действительный на территории
                                    России, - до его
                                    представления.</p>
                                <p>Соответственно <strong>медицинский полис является одним из документов,
                                        подтверждающих право
                                        на
                                        пребывание в Российской Федерации</strong>.</p>
                                <p>И если медицинский полис у иностранного гражданина отсутствует или утерян, а
                                    заявления о его
                                    утрате
                                    не подано, то законом установлена административная ответственность в виде
                                    штрафа (ст. 18.8
                                    КоАП
                                    РФ):
                                </p>
                                <ul class="ul_padding">
                                    <li class="li_padding">в размере от 5 до 7 тысяч рублей в Санкт-Петербурге и
                                        Ленинградской
                                        области
                                        (п. 3 ст. 18.8 КоАП
                                        РФ).</li>
                                    <li class="li_padding">в размере от 2 до 5 тысяч в регионах (п.1.1 ст. 18.8
                                        КоАП РФ).</li>
                                </ul>
                                <p><strong>Обратите внимание</strong>: полис медицинского страхования должен
                                    быть оформлен даже
                                    у
                                    тех,
                                    кто приезжает в Россию в рамках частной поездки на срок менее 90 дней!</p>
                                <a href="tel:+78126124812"><img src="{{ asset('storage/button3.png') }}"
                                        alt=" consulation-button.jpg" class="green_btn img-responsive"
                                        title="Бесплатная консультация"></a>
                                <h3 class="underline">Документы для оформления разрешения на работу
                                    в Санкт-Петербурге и ЛО:</h3>
                                <p>Документы, необходимые от <strong>иностранного гражданина</strong> для
                                    оформления медицинской
                                    страховки:</p>
                                <ul class="ul_padding">
                                    <li class="li_padding">Паспорт (копия);</li>
                                    <li class="li_padding">Миграционная карта (Копия);</li>
                                </ul>
                            </div>
                        </div>
                        <div class="info_item">
                            <div class="info_item_title">
                                <h5 class="underline">Дактилоскопическая экспертиза</h5>
                            </div>
                            <div class="info_item_img">
                                <img src="/storage/info/daktiloskipiya.jpg" alt="daktiloskipiya"
                                    title="Дактилоскопическая экспертиза">
                            </div>
                            <div class="info_item_content">
                                <p><strong>Дактилоскопическая экспертиза
                                        (дактилоскопия) &ndash;</strong>
                                    это
                                    процедура по снятию отпечатков пальцев и их последующая регистрация в
                                    базе данных.&nbsp;
                                </p>
                                <p>Согласно законодательству дактилоскопия обязательна для иностранных
                                    граждан в следующих
                                    случаях:&nbsp;</p>
                                <ul class="ul_padding">
                                    <li class="li_padding">&nbsp;Получение патента на работу (часть 4.6
                                        статьи 8 ФЗ №115
                                        &laquo;О
                                        правовом положении
                                        иностранных граждан&raquo;);</li>
                                    <li class="li_padding">&nbsp;Получение разрешения на временное
                                        проживание (ФЗ № 128-ФЗ
                                        от
                                        25.07.1998 года);</li>
                                    <li class="li_padding">&nbsp;Получение вида на жительство для лиц без
                                        гражданства (часть
                                        4.1
                                        статьи 8 ФЗ №115
                                        &laquo;О правовом положении иностранных граждан&raquo;);&nbsp;</li>
                                    <li class="li_padding">При выдворении (депортации) за пределы территории
                                        Российской
                                        Федерации
                                        (ФЗ № 128-ФЗ от
                                        25.07.1998 года).</li>
                                    <li class="li_padding">В данных случаях <strong>дактилоскопия
                                            иностранных граждан в
                                            России</strong> проводится
                                        органами&nbsp;ГУВМ МВД (бывший ФМС).</li>
                                </ul>
                                <p><strong>ВАЖНО:</strong> в связи с принятыми изменениями, которые уже
                                    стали известны как
                                    &laquo;правило 90 из 180&raquo;, у иностранных граждан уже нет
                                    возможности продлевать
                                    себе
                                    пребывание в РФ с помощью въезда и выезда, а значит, им требуется
                                    оформлять разрешение
                                    на
                                    работу
                                    или трудовой патент для продления своего пребывания. И, соответственно,
                                    проходить
                                    дактилоскопическую экспертизу.</p>
                                <a href="tel:+78126124812"><img src="{{ asset('storage/button3.png') }}"
                                        alt=" consulation-button.jpg" class="green_btn img-responsive"
                                        title="Бесплатная консультация"></a>
                                <p>Таким образом, поддельные паспорта, смена фамилии и другие подобные
                                    ухищрения не помогут
                                    легализовать пребывание иностранного гражданина, которому запрещен въезд
                                    на территорию
                                    РФ
                                    или
                                    который находится здесь нелегально.</p>
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
