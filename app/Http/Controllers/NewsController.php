<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;
use Carbon\Carbon;

class NewsController extends Controller
{
    public function index(){

    $news = News::orderBy('dateline', 'desc')->paginate(7);
    $new = News::find(1)->first();
    $category= $new->category;
    return view('news', compact('news', 'category'));

    }
    public function interview(){
        return view('press.interview');
    }
    public function showFoto(){
        return view('press.foto');
    }
    public function forPress(){
        return view('press.forpress');
    }
    public function notForPress(){
        return view('press.notforpress');
    }
    public function pressnews(){
        return view('press.index');
    }

    public function showPressNews(){
        $category = Category::find(1)->where('name', 'press')->first();
        $pressnews = $category->news()->paginate(5);
    return view('press.pressnews', compact('pressnews', 'category'));
    }


    public function showByCategory($category, $subcategory=false){
        $category = Category::find(1)->where('name', $category)->first();
        $newsby = $category->news()->paginate(5);
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



}
