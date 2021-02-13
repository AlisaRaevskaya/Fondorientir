<button type="button" class="close" aria-hidden="true" data-toggle="offcanvas"
    id="uc-mobile-menu-close-btn">&times;</button>
<div class="mobile_box hidden">
    <div>
        <ul id="menu">
            @foreach ($menuitems as $item)
                @if (!!$item->children)
                    <li class="dropdown m-menu-fw">
                        <a href="{{ $item->laravel_name ? route($item->laravel_name) : $item->url }}"
                            data-toggle="dropdown" class="dropdown-toggle">
                            {{ $item->title }}
                            <span><i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="m-menu-content">
                                    <ul class="col-sm-3">
                                        @foreach ($item->children as $children)
                                            <li style="list-style:none"> <a
                                                    href="{{ $children->laravel_name ? route($children->laravel_name) : $children->url }}"
                                                    style="color:black">{{ $children->title }}</a></li>
                                        @endforeach
                                </div>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="">
                        <a
                            href="{{ $item->laravel_name ? route($item->laravel_name) : $item->url }}">{{ $item->title }}</a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</div>

<script>
    $(window).on("load", function() {
        $(".mobile_box").removeClass('hidden');
    });
</script>
