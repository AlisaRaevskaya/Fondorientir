<?php

namespace App\Http\ViewComposers;
use Illuminate\View\View;
use App\Models\Message;
use App\Models\MessageCategory;

//В этом классе будем доставать данные из базы и
//передавать в соответствующее представление (например, resources/layouts/partials/_nav.blade.php)

class SidebarComposer
{
    public function compose(View $view){

    $messageCategories= MessageCategory::all();

    return $view->with(compact('messageCategories'));
    }
}