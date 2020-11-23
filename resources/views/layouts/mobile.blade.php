
    <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas"
        id="uc-mobile-menu-close-btn">&times;</button>
    <div>
        <div>
            <ul id="menu">
                @foreach ($menuitems as $item)
                    @if (!!$item->children)
                        <li class="dropdown m-menu-fw">
                            <a href="{{ $item->laravel_name ? route($item->laravel_name) : $item->url }}"
                                data-toggle="dropdown" class="dropdown-toggle">
                                {{$item->title}}
                                <span><i class="fa fa-angle-down"></i></span>
                            </a>
                            <ul class="dropdown-menu m-menu-fw">
                                <li>
                                    <div class="m-menu-content" >
                                        @foreach ($item->children as $children)
                                            <a href="{{ $children->laravel_name ? route($children->laravel_name)
                                             : $children->url }}"style="color:black" >{{$children->title }}</a>
                                        @endforeach
                                    </div>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="dropdown m-menu-fw">
                            <a href="{{ $item->laravel_name ? route($item->laravel_name) : $item->url }}">{{ $item->title }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>

<!-- .uc-mobile-menu -->





