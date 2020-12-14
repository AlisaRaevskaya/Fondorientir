<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\Page;
use App\Models\Category;
use Illuminate\Http\Request;
use Carbon\Carbon;

class NewsController extends Controller
{
    public function index(){

    $news = News::orderBy('dateline', 'desc')->paginate(7);
    $new = News::find(1)->first();
    $page=Page::where('laravel_name', 'news')->first();
    $category= $new->category;
    return view('news.news', compact('news', 'category', 'page'));

    }

    public function showByCategoryId($id){
        $category = Category::where('name', 'migration-news')->first();
        $item = $category->news->where('id', $id)->first();
        $page=Page::where('laravel_name', 'news')->first();
        return view('news.news_single', compact('item', 'category', 'page'));
    }


}
