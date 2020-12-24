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
                                               <li class="breadcrumb-item active">Снятие с миграционного учета</li>
                                           </ol>
                                       </div>
                                       <div class="info_item">
                                           <div class="info_item_title">
                                               <h5 class="underline">
                                                   Снятие с миграционного учета
                                               </h5>
                                           </div>
                                           <div class="info_item_content">
                                               <p>С 10 августа 2018 года принимающая сторона обязана не только
                                                   регистрировать иностранца по
                                                   месту
                                                   пребывания, но и
                                                   снимать его с миграционного учета, согласно закону ФЗ-257 от 29.07.2018.
                                               </p>
                                               <p>Напомним, что принимающей стороной могут выступать:</p>
                                               <ol>
                                                   <li>Граждане РФ, у которых иностранцы находятся в гостях или снимают
                                                       жилье;</li>
                                                   <li>Постоянно-проживающие иностранные граждане и лица без гражданства;
                                                   </li>
                                                   <li>Юридические лица, которые предоставляют иностранцу жилое помещение
                                                       для проживания
                                                       (например,
                                                       комнату,
                                                       квартиру,
                                                       вагончик на территории компании и т.д.)*.</li>
                                               </ol>
                                               <p>Согласно законодательству принимающая сторона обязана снимать иностранных
                                                   граждан с учета,
                                                   если
                                                   иностранец
                                                   выселился
                                                   из квартиры (для граждан РФ) или уволился (для работодателей).</p>
                                               <p>Снятие с миграционного учета может осуществляться через МВД, МФЦ и почту
                                                   России.</p>
                                               <p>Сразу заметим, что неисполнение данного обязательства влечет за собой
                                                   штраф (согласно ст.
                                                   18.9
                                                   КоАП):
                                               </p>
                                               <ul class="ul_padding">
                                                   <li class="li_padding">От 2000 до 4000 рублей для граждан РФ;</li>
                                                   <li class="li_padding">От 400 тыс. до 500 тыс. руб. для юридических лиц.
                                                   </li class="li_padding">
                                               </ul>

                                               <h3><a class="link_color"
                                                       href="{{ asset('/storage/blanks/blank-2.doc') }}"><strong>
                                                           Скачать бланк уведомления</strong></a></h3>
                                               <a href="tel:+78126124812"><img src="{{ asset('storage/button3.png') }}"
                                                       alt=" consulation-button.jpg" class="green_btn img-responsive"
                                                       title="Бесплатная консультация"></a>
                                           </div>
                                       </div>
                                   </div>
                                   @include('layouts.sidebar')
                               </div>
                           </div>
                       </section>
                   @endsection
