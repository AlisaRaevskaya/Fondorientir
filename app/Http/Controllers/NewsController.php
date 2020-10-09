<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
     $news = News::orderBy('dateline', 'desc')->limit(4)->get();
     $category = Category::find(1)->where('name', $category)->first();
        // $date=$this->parseUnix($news->dateline);
        return view('news', compact('news', 'category'));

    }

    public function parseUnix($array){
    foreach($array as $item){
        $date=$item->dateline;
    }
    return date("Ymd", $date);
    }

    //Schema::table('news', function (Blueprint $table) {
        // $table->unsignedBigInteger('category_id')->default(1);
        // $table->foreign('category_id')->references('id')->on('categories');
    //});

    public function showByCategory($category){

        $category = Category::find(1)->where('name', $category)->first();
        $newsby = $category->news;

        return view('newsbycategory', compact('newsby', 'category'));
    }
    public function showById($id){
    //$comments = App\Post::find(1)->comments()->where('title', 'foo')->first();;
    $category = $this->allnews->find($id);
    }

    public function showBySubCategory(){

    }


}
