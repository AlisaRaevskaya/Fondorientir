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

    //Schema::table('news', function (Blueprint $table) {
        // $table->unsignedBigInteger('category_id')->default(1);
        // $table->foreign('category_id')->references('id')->on('categories');
    //});

    public function showByCategory($category){

        $category = Category::find(1)->where('name', $category)->first();
        $newsby = $category->news;
        // $categories = Categorie::where(['published'=> true, 'url' => $category])->firstOrFail();

        // $products = Product::where('categorie_id', $categories->id)->orderBy('sort')->paginate(12);

        // return view('page.catalog.catalog_one', compact('categories','products'));

        // $category = Category::;
        // $category_id = $category->id;

        // // $posts_collection = $category->news()->get();

        // $newsby = Category::find(1)->news->where('id', $category_id)->get();

        return view('categories', compact('newsby', 'category'));

    }
    public function showById($id){
    //$comments = App\Post::find(1)->comments()->where('title', 'foo')->first();;
    $category = $this->allnews->find($id);
    }
    public function showBySubCategory(){

    }


}
