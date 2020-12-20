@extends('secondsite.layout',['seo' => $page->getSeo()])
@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="entity_wrapper">

                        <div class="entity_title text-center">
                            <h1>Правовая приемная</h1>
                        </div>

                        <div class="entity_body" style="font-size:15px;">

                            <p>С целью наиболее продуктивного и эффективного информирования мигрантов
                                (в том числе предупреждения нарушений миграционного и трудового законодательства,
                                удаления «очагов социальной напряженности» на территории Санкт-Петербурга и Ленинградской
                                области)
                                организована и открыта приемная правовой поддержки в устной и письменной форме для оказания
                                юридической
                                помощи на безвозмездной основе трудящимся-мигрантам.</p>
                            <div class="text-center m30">
                                <h3>
                                    Информационно-консультативная и юридическая помощь предоставляется по следующим
                                    направлениям:
                                </h3>
                            </div>

                            <ul class="list-group">
                                <li class="list-group-item">правила пребывания на территории Российской Федерации;</li>

                                <li class="list-group-item">вопросы миграционного учета;</li>

                                <li class="list-group-item">процедура восстановления документов граждан стран СНГ;</li>

                                <li class="list-group-item">помощь при получении разрешения на временное проживание, вида на
                                    жительство,
                                    воссоединение с семьей;</li>

                                <li class="list-group-item">защита по гражданским, административным и уголовным делам;</li>

                                <li class="list-group-item">помощь при решении вопроса о регистрации в Санкт-Петербурге и
                                    Ленинградской области;
                                </li>

                                <li class="list-group-item">информация о порядке оформления медицинского страхования;</li>

                                <li class="list-group-item">другие вопросы, связанные с проблемами миграции;</li>

                                <li class="list-group-item">предоставление консультаций по вопросам трудоустройства;</li>

                                <li class="list-group-item">решение трудовых споров – взыскание заработной платы,
                                    компенсация морального
                                    и физического вреда при производственной травме и т.п.;</li>

                                <li class="list-group-item">доступ к медицинским, социальным услугам и жилью,
                                    возможностям получения образования и профессионального обучения мигрантов и членов их
                                    семей.</li>
                            </ul>
                            <h6 class="text-center">Для того чтобы получить консультацию нашего миграционного юриста онлайн
                                — напишите ему ваш вопрос в форме на нашем сайте:</h6>
                        </div>

                        <div class="shadow-textarea">
                            <div>
                                <div class="row justify-content-center" style="padding:5pt 10pt">
                                    <h1>
                                        <img class="d-flex img-circle avatar z-depth-1-half mr-3 img-responsive"
                                            src="/assets/images/avatar-5.jpg" alt="Avatar">
                                        Задать вопрос юристу бесплатно
                                    </h1>
                                </div>
                                @include('forms.lawyerForm')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.sidebar')
        </div>
    </section>
@endsection
