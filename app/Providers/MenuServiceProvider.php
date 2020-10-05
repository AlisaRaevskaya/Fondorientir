<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\NavigationComposer;
use Illuminate\Support\Facades\View;
use App\Models\Menu;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.partials.nav', function($view) {
            $view->with('menuitems', Menu::IsPublished()->OfSort(['parent_id' => 'asc', 'sort_order' => 'asc'])->get());
        });
    }




    //with('переменная', значение переменной)
    //Построители (view composers) — функции обратного вызова или методы класса, 4
    //которые вызываются, когда представление отрисовано. Если у вас есть данные, которые вы хотите привязать
    //к представлению при каждой его отрисовке,
    // то построители помогут вам выделить такую логику в отдельном месте.
}
