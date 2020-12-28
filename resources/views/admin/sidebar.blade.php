<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Меню</div>
                <a class="nav-link" href='/admin-panel'>
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Админ.панель
                </a>
                <div class="sb-sidenav-menu-heading">Интерфейс</div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Управление
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/static">Менеджер меню</a>
                        <a class="nav-link" href="{{ route('admin.user.index') }}">Менеджер пользователей</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                    Новости
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                        <a class="nav-link" href="{{ route('admin.news.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                            Новости
                        </a>
                        <a class="nav-link" href="{{ route('admin.press.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            СМИ о нас
                        </a>
                    </nav>
                </div>


                <a class="nav-link" href="{{ route('admin.pages.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Страницы
                </a>


                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEmail"
                    aria-expanded="false" aria-controls="collapseEmail">
                    <div class="sb-nav-link-icon"><i class="fas fa-comments"></i></div>
                    Сообщения
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseEmail" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        @foreach ($messageCategories as $notice)
                            <a class="nav-link" href="{{ route('admin.notice', $notice->category) }}">
                                {{ $notice->category_name }}
                                @if ($notice->countNotRead() != 0)<i
                                        class="fa fa-envelope-square" aria-hidden="true" style="margin:0 3px;"></i>
                                    <span class="label label-success">{{ $notice->countNotRead() }}</span>
                                @endif
                            </a>
                        @endforeach
                    </nav>

                </div>

                <a class="nav-link" href="{{ route('admin.company-info.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-star"></i></div>
                    Информация о компании
                </a>
            </div>
        </div>
    </nav>
</div>
