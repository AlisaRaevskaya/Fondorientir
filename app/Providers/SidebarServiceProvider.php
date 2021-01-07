<?php

namespace App\Providers;
use App\Http\ViewComposers\SidebarComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class SidebarServiceProvider extends ServiceProvider
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
        view()->composer(['layout', 'admin.layout', 'layouts.mobile','layouts.sidebar'], SidebarComposer::class);
    }
}

