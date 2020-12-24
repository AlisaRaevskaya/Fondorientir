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
                  @include('layouts.sidebar')
              </div>
          </div>
      </section>
  @endsection
