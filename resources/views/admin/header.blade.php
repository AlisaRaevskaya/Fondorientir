<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <span class="brand-text font-weight-light"></span>
    <p class="navbar-brand"><a href="/admin-panel" class="brand-link">
            <img src="{{ asset('storage/app/public/logo.png') }}" alt="Logo" class="brand-image img-circle elevation-3"
                style="opacity: 0.8;width:20pt"></a> Фонд "Ориентир"</p>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <div class="row">
                <a href="{{ route('admin.messages.all.not-read') }}" class="block">
                    @if ($not_read_message !== 0)
                        <i class="fa fa-envelope-square" aria-hidden="true"></i>
                        {{ $not_read_message }}
                        <span class="label label-success"></span>
                    @endif
                </a>
                <a class="nav-link dropdown-toggle block" id="userDropdown" href="#" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                        class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="{{ route('admin.user.index') }}">Пользователи</a>

                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">Выйти
                    </a>
                    <div class="dropdown-divider"></div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </li>
    </ul>
</nav>
