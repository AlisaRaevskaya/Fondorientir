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
                             <li class="breadcrumb-item active">СНИЛС</li>
                         </ol>
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
                 </div>
                 @include('layouts.sidebar')
             </div>
         </div>
     </section>
 @endsection
