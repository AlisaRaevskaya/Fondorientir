<?php

namespace App\Http\ViewComposers;
use App\Models\News;
use App\Models\Reply;
use App\Models\Topic;
use Illuminate\View\View;


//В этом классе будем доставать данные из базы и
//передавать в соответствующее представление (например, resources/layouts/partials/_nav.blade.php)

class SidebarComposer
{
    public function compose(View $view)
    {
        $replies = Topic::rightJoin('replies', 'topics.reply_id', '=', 'replies.id')
        ->select('replies.body','topics.title','replies.dateline','replies.id')->limit(4)->get();

        $news = News::orderBy('dateline', 'desc')->limit(4)->get();

        return $view->with(compact('replies', 'news'));
    }
}
