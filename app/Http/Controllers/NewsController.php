<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){

    $news = News::orderBy('dateline', 'desc')->limit(4)->get();
    $new = News::find(1)->first();
    // $cta= Category::find('name')->where('id', $cta_id);

    // $cta_id = News::find('category_id');
    $category= $new->category;
    return view('news', compact('news', 'category'));

    }

    public function showByCategory($category, $subcategory=false){
        $category = Category::find(1)->where('name', $category)->first();
        $newsby = $category->news;
        $subcategory = Category::where('parent_id', 2)->get();
        return view('news.newsbycategory', compact('newsby', 'category', 'subcategory'));
    }

    public function showByCategoryId($category, $id=false){

        $category = Category::find(1)->where('name', $category)->first();
        $newsby = $category->news->where('id', $id);
        return view('news.news_single', compact('newsby', 'category'));
    }

    public function showBySubCategory($category, $subcategory){
        $category = Category::find(1)->where('name', $category)->first();
        $subcategory = Category::where('name', $subcategory)->get();
        $newsby = $subcategory->news;
        return view('news.migration_news', compact('newsby', 'subcategory', 'category'));
    }

    public function showBySubCategoryId($subcategory, $id=false){
        $category= Category::find($id)->where('name', $subcategory)->get();
        $newsby = $category->news->find();
        return view('news.news_single', compact('newsby', 'category'));
    }

    public function showPressNews(){
        $category = Category::find(1)->where('name', 'press-news')->first();
        $pressnews = $category->news;
        $chosen_category=Category::find(1)->where('name', 'chosen')->first();
        $chosen = $chosen_category->news;
    return view('news.pressnews', compact('pressnews', 'category','chosen', 'chosen_category'));
    }
}
