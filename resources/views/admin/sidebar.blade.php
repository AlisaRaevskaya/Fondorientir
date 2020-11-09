 <div id="layoutSidenav">
     <div id="layoutSidenav_nav">
         <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
             <div class="sb-sidenav-menu">
                 <div class="nav">

                     <div class="sb-sidenav-menu-heading">Меню</div>
                     <a class="nav-link" href='/static'>
                         <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                         Админ.панель
                     </a>
                     <div class="sb-sidenav-menu-heading">Interface</div>
                     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                         aria-expanded="false" aria-controls="collapseLayouts">
                         <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                         Управление
                         <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                     </a>
                     <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                         data-parent="#sidenavAccordion">
                         <nav class="sb-sidenav-menu-nested nav">
                             <a class="nav-link" href="/static">Менеджер меню</a>
                             <a class="nav-link" href="/inbox">Менеджер пользователей</a>
                         </nav>
                     </div>

                     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                         aria-expanded="false" aria-controls="collapsePages">
                         <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                         Меню
                         <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                     </a>


                     <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                         data-parent="#sidenavAccordion">
                         <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                             @foreach ($menuitems as $item)

                             <a class="nav-link collapsed" href="{{$item->url}}" data-toggle="collapse"
                             data-target="#page_{{$item->id}}"
                                     aria-expanded="false" aria-controls="page_{{$item->id}}">
                                         <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                         {{ $item->title }}
                                         @if($item->children)
                                         <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                             </a>
                             @foreach ($item->children as $child1)@endforeach
                                 <div class="collapse" id="page_{{$child1->parent_id}}">
                                    <nav class="sb-sidenav-menu-nested nav">
                                     @foreach ($item->children as $child)
                                         <a class="nav-link collapse" href="charts.html">
                                             <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                             {{ $child->title }}
                                         </a>
                                         @endforeach
                                     </nav>
                                 </div>
                            @endif
                        @endforeach
                         </nav>
                     </div>

                     {{-- <div class="collapse" id="pagesCollapseAuth"
                         aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                         <nav class="sb-sidenav-menu-nested nav">
                             <a class="nav-link" href="login.html"></a>
                             <a class="nav-link" href="register.html">О Фонде</a>
                             <a class="nav-link" href="password.html">Пресс-центр</a>
                             <a class="nav-link" href="password.html">Вопрос-ответ</a>
                             <a class="nav-link" href="password.html">Инфо центр</a>
                             <a class="nav-link" href="password.html">Контакты</a>
                         </nav>
                     </div> --}}


                     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEmail"
                         aria-expanded="false" aria-controls="collapseEmail">
                         <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                         Уведомления
                         <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                     </a>
                     <div class="collapse" id="collapseEmail" aria-labelledby="headingOne"
                         data-parent="#sidenavAccordion">
                         <nav class="sb-sidenav-menu-nested nav">
                             <a class="nav-link" href="/inbox">Вопрос юристу</a>
                             <a class="nav-link" href="/inbox">Обращение</a>
                             <a class="nav-link" href="/compose">Заявление</a>
                             <a class="nav-link" href="/inbox">Жалобы</a>
                             <a class="nav-link" href="/inbox">Сообщения о проблеме</a>
                             <a class="nav-link" href="/inbox">Обратный звонок</a>
                             <a class="nav-link" href="/compose">Создать сообщение</a>
                         </nav>
                     </div>



                     <div class="sb-sidenav-menu-heading">Данные</div>
                     <a class="nav-link" href="charts.html">
                         <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Импорт данных
                     </a>
                     <a class="nav-link" href="charts.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                       Экспорт данных
                    </a>
                     <a class="nav-link" href="tables.html">
                         <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                         Статистика
                     </a>
                 </div>
             </div>
             <div class="sb-sidenav-footer">
                 <div class="small">Logged in as:</div>
                 Start Bootstrap
             </div>
         </nav>
     </div>

 </div>
