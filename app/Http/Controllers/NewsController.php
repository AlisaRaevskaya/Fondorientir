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

    public function showByCategory($category, $subcategory=false){
        $category = Category::find(1)->where('name', $category)->first();
        $newsby = $category->news()->paginate(5);
        $subcategory = Category::where('parent_id', 2)->get();
        return view('news.newsbycategory', compact('newsby', 'category', 'subcategory'));
    }

    public function showPressNews(){
    $category = Category::find(1)->where('name', 'press')->first();
    $pressnews = $category->news()->orderBy('id', 'desc')->paginate(5);
    return view('press.pressnews', compact('pressnews', 'category'));
    }

    public function showByCategoryId($category, $id=false){
        $category = Category::find(1)->where('name', $category)->first();
        $item = $category->news->where('id', $id)->first();
        $page=Page::where('laravel_name', 'news')->first();
        return view('news.news_single', compact('item', 'category', 'page'));
    }





}
