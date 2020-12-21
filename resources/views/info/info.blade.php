@extends('layout', ['seo' => $page->getSeo()])
@section('content')

    <section id="entity_section" class="entity_section m30">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h1 class="text-center"><strong>Полезная информация</strong></h1>
                    <div class="flex-row">
                        {{-- <div class="info_item">

                            <a href="{{ route('info-1') }}">Миграционная карта (поездки за границу): получение новой
                                миграционной карты
                            </a>
                        </div> --}}
                        <div class="info_item"><a href="{{ route('info-2') }}">Миграционный учет</a></div>

                        <div class="info_item"><a href="{{ route('info-3') }}">Приглашения для получения визы</a></div>
                        <div class="info_item"><a href="{{ route('info-4') }}">Трудовой патент</a></div>


                        <div class="info_item"><a href="{{ route('info-5') }}">Разрешение на работу</a>
                        </div>
                        <div class="info_item"><a href="{{ route('info-7') }}">Разрешение на временное проживание (РВП) в
                                РФ</a></div>
                        <div class="info_item"><a href="{{ route('info-8') }}">Гражданство РФ;</a></div>

                        <div class="info_item"><a href="{{ route('info-6') }}">Снятие запрета на въезд</a></div>
                    </div>
                    <div class="m30">
                        <h5 class="text-center">Список медицинских учреждений</h5>
                        <p><strong>Полномочные учреждения здравоохранения Санкт-Петербурга</strong></p>
                        <p>Полномочные учреждения здравоохранения СПб и Лен.области для прохождения медицинского осмотра для
                            получения разрешения на временное проживание&nbsp;</p>
                        <p>В ЧАСТИ ПРОВЕДЕНИЯ ОБСЛЕДОВАНИЯ НА ПРЕДМЕТ НАЛИЧИЯ ИНФЕКЦИОННЫХ ЗАБОЛЕВАНИЙ, ПРЕДСТАВЛЯЮЩИХ
                            ОПАСНОСТЬ ДЛЯ ОКРУЖАЮЩИХ И НАРКОТИЧЕСКОЙ ЗАВИСИМОСТИ И ЯВЛЯЮЩИХСЯ ОСНОВАНИЕМ ДЛЯ ОТКАЗА В ВЫДАЧЕ
                            ЛИБО АННУЛИРОВАНИЯ РАЗРЕШЕНИЯ НА ВРЕМЕННОЕ ПРОЖИВАНИЕ ИЛИ ВИДА НА ЖИТЕЛЬСТВО</p>
                        <p><strong>1.СПб ГУЗ &laquo;Детская инфекционная больница № 3&raquo;</strong></p>
                        <p>Большой пр. ВО, д. 77/17, Санкт-Петербург, 199026, тел. 321-53-93</p>
                        <p><strong>2.СПб ГУЗ &laquo;Городская инфекционная больница № 30 им. С.П. Боткина&raquo;</strong>
                        </p>
                        <p>Миргородская ул., д. 3, Санкт-Петербург, 191167, тел.: 717-28-48, ф. 277-44-24</p>
                        <ol start="3">
                            <li><strong> СПб ГУЗ ''Городской кожно-венерологический диспансер''</strong></li>
                        </ol>
                        <p>наб. р. Волковки, д. 3, Санкт-Петербург, 192102, тел/факс: 766-23-10</p>
                        <ol start="4">
                            <li><strong> ФГУЗ ''Клиническая больница №122 имени Л.Г. Соколова''</strong></li>
                        </ol>
                        <p>пр. Культуры, д. 4, Санкт-Петербург, 194291, тел. 558-05-08, ф.558-98-84</p>
                        <ol start="5">
                            <li><strong> ФГУН ''Северо-Западный научный центр гигиены и общественного здоровья''</strong>
                            </li>
                        </ol>
                        <p>ул. 2-я Советская, д. 4, Санкт-Петербург, 191036, тел. 717-97-83; факс 717-02-64</p>
                        <ol start="6">
                            <li><strong> ФГУ ''НМХЦ им. Н.И. Пирогова'' Минздравсоцразвития России</strong></li>
                        </ol>
                        <p>наб. р. Фонтанки, д. 154, Санкт-Петербург, 190103, тел. 251-23-24, факс 251-30-31</p>
                        <ol start="7">
                            <li><strong> ФГУЗ ''Медико-санитарная часть ГУВД по Санкт-Петербургу и Ленинградской
                                    области''</strong></li>
                        </ol>
                        <p>Малая Морская ул., д.10, Санкт-Петербург, 191065, тел. 710-38-71, 710-38-75, ф. 710-38-76</p>
                        <ol start="8">
                            <li><strong> ООО ''Медицинский центр ''Панацея''</strong></li>
                        </ol>
                        <p>пр. Испытателей, д. 10, лит.А, Санкт-Петербург, 197227, тел./факс 394-22-06; 393-87-76; 394-70-84
                        </p>
                        <ol start="9">
                            <li><strong> Некоммерческое медицинское учреждение Медико-оздоровительный центр
                                    ''ВЕНУС''</strong></li>
                        </ol>
                        <p>ул. Зверинская, д. 15, Санкт-Петербург, 197198, тел.: 233-70-12, факс 233-57-63</p>
                        <ol start="10">
                            <li><strong> ООО ''Поликлиника Александровского Завода''</strong></li>
                        </ol>
                        <p>ул. Дудко, д. 8, Санкт-Петербург, 192171, тел/факс 560-58-78</p>
                        <ol start="11">
                            <li><strong> ООО ''Международная клиника MEDEM''</strong></li>
                        </ol>
                        <p>ул. Марата, д.6, лит.А, Санкт-Петербург, 191025.</p>
                        <ol start="12">
                            <li><strong> ООО ''Городской медико-социальный центр''</strong></li>
                        </ol>
                        <p>Пулковская ул., д.8, к.3, Санкт-Петербург,196158 пр. Энгельса, д.27, Санкт-Петербург,194156.</p>
                        <ol start="13">
                            <li><strong> ООО ''МедКом''</strong></li>
                        </ol>
                        <p>ул. Подольская, д.17, лит.А, пом.2Н, Санкт-Петербург.</p>
                        <ol start="14">
                            <li><strong> ООО ''Медицинский центр ''Невский''</strong></li>
                        </ol>
                        <p>ул. Белоусова. д. 6/42, лит.А, пом.2Н, Санкт-Петербург.</p>
                        <ol start="15">
                            <li><strong> ООО ''Страховой холдинг ''ПИТЕР''</strong></li>
                        </ol>
                        <p>Народная ул., д. 1, лит. Б, ном.4Н, Санкт-Петербург, 193079, тел. 610-00-11</p>
                        <ol start="16">
                            <li><strong> ООО ''Морской медицинский центр "Осло Марин''</strong></li>
                        </ol>
                        <p>Межевой канал, д.5, лит. АХ, Санкт-Петербург, 198035, тел. 346-59-05, 703-45-26</p>
                        <p><strong>17.ООО "Единый медицинский центр"</strong></p>
                        <p>Адрес: СПб, ул.Красного Текстильщика д. 15, (вход со двора), тел.:318-05-70</p>
                        <ol start="18">
                            <li><strong> МУ ''Северо-Западный институт управления здравоохранением''</strong></li>
                        </ol>
                        <p>ул. Лётчика Пилютова, д.6, к.2, Санкт-Петербург, 198206, тел.: 744-05-97</p>
                        <ol start="19">
                            <li><strong> ООО &laquo;Центр медицинских комиссий&raquo;</strong></li>
                        </ol>
                        <p>Большая Пушкарская ул., д. 20, лит. А, Санкт-Петербург, 197198</p>
                        <ol start="20">
                            <li><strong> ООО "Миламед"</strong></li>
                        </ol>
                        <p>Ивановская ул., д.20, Санкт-Петербург, 192131, тел. 560-34-93</p>
                        <ol start="21">
                            <li><strong> ООО &laquo;Профосмотр&raquo;</strong></li>
                        </ol>
                        <p>аллея Поликарпова, д.2, лит.А, пом,70-Н, тел. 565-49-45</p>
                        <ol start="22">
                            <li><strong> ООО &laquo;МедПрофЭксперт&raquo;</strong></li>
                        </ol>
                        <p>наб. канала Грибоедова, д.100, лит.А, пом.8Н, Санкт-Петербург.</p>
                        <ol start="23">
                            <li><strong> ООО &laquo;Городская медицинская комиссия&raquo;</strong></li>
                        </ol>
                        <p>ул.Блохина, д.23, лит.А, пом.3Н, Санкт-Петербург</p>
                        <ol start="24">
                            <li><strong> ООО &laquo;Медицинский центр &laquo;Эксперт&raquo;</strong></li>
                        </ol>
                        <p>ул.Школьная, д.68, лит.А, пом.2Н, Санкт-Петербург.</p>
                        <ol start="25">
                            <li><strong> ООО "МедиКА"</strong> Большой Сампсониевский пр., д.44, лит.А, пом. 7-Н,
                                Санкт-Петербург, 194044,</li>
                        </ol>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection