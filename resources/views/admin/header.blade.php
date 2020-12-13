<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Brand Logo -->
    <span class="brand-text font-weight-light"></span>
    <p class="navbar-brand"><a href="/home" class="brand-link">
            <img src="{{ asset('storage/logo.png') }}" alt="Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8;width:20pt"></a> Фонд "Ориентир"</p>
    {{--
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
            class="fas fa-bars"></i></button> --}}

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0" style="margin-right:70pt;">
        <li class="nav-item">
            <a href="{{ route('admin.notices.all') }}">
                @if ($not_read_message !== 0)
                    <i class="fa fa-envelope-square" aria-hidden="true"></i>
                    {{ $not_read_message }}
                    <span class="label label-success"></span>
                @endif
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user fa-fw"></i>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('admin.user.index') }}">Менеджер пользователей</a>

                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                    Выйти
                </a>

                <div class="dropdown-divider"></div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>
