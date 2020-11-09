<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <div>
        <!-- Brand Logo -->
        <a href="№" class="brand-link">
            <img src="/assets/images/logo.png" alt="Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8;width:20pt"></a>
        <span class="brand-text font-weight-light"></span>
    <p class="navbar-brand" href="index.html">Фонд "Ориентир"</p>
</div>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
            class="fas fa-bars"></i></button>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>


    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0" style="margin-right:70pt;">

        <li class="dropdown messages-menu nav-item">
        <li class="dropdown messages-menu open">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                <i class="fa fa-envelope-square" aria-hidden="true"></i>
                <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
                <li class="header">You have 4 messages</li>
                <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                        <li>
                            <!-- start message -->
                            <a href="#">
                                <h4>
                                    Support Team
                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                </h4>
                                <p>Why not buy a new awesome theme?</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
        </li>
        </li>
        <li class="nav-item">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user fa-fw"></i>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('admin.user.index') }}">User-Management</a>

                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <div class="dropdown-divider"></div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>
