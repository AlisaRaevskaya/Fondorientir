<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Menu;
use App\Http\ViewComposers\NavigationComposer;

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
        view()->composer(['layouts.header','layouts.footer', 'admin.sidebar', 'layouts.mobile','secondsite.layouts.header'], NavigationComposer::class);
    }
    }



    //with('переменная', значение переменной)
    //Построители (view composers) — функции обратного вызова или методы класса, 4
    //которые вызываются, когда представление отрисовано. Если у вас есть данные, которые вы хотите привязать
    //к представлению при каждой его отрисовке,
    // то построители помогут вам выделить такую логику в отдельном месте.
