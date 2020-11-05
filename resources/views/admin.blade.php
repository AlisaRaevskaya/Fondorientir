@extends('admin.layout')
@section('content')

<div class="container">
    <div class="col-md-8 justify-content-center">
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link btn btn_primary" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            {{-- @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link btn btn_primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif --}}
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{-- {{ Auth::user()->name }} --}}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                {{-- <a href="{{route('admin.user.index')}}" class="dropdown-item">User-Management</a> --}}

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </div>
            </li>
        @endguest
    </ul>
</div>
</div>
@endsection
