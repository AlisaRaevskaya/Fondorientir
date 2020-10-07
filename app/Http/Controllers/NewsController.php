<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $news = News::orderBy('created_at', 'asc')->paginate(3);

        $date=$this->parseUnix($news);
        return view('news', compact('news','date'));

    }

    public function parseUnix($array){
    foreach($array as $item){
        $date=$item->dateline;
    }
    return date("Ymd", $date);
    }

    public function showByCategory(){
        $newsby = Category::find(1)->news;

        return view('', compact('newsby','date'));

    }
    public function showById(){
    //$comments = App\Post::find(1)->comments()->where('title', 'foo')->first();;
    }
    public function showBySubCategory(){

    }


}
