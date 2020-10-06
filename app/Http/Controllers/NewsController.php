<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $news = News::orderBy('created_at', 'asc')->paginate(4);

        $date=$this->parseUnix($news);
        return view('news', compact('news','date'));

    }

    public function parseUnix($array){
    foreach($array as $item){
        $date=$item->dateline;
    }
    return date("Ymd", $date);
    }
}
