<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\News;
use App\Models\Reply;
use App\Models\Topic;
use App\Models\File;
use App\Models\Project;
use App\Models\Category;

use Illuminate\Support\Str;


class MainController extends Controller
{
    public function index(){
    $page= Page::where('title', 'Главная')->IsPublished()->first();
    $news = News::orderBy('dateline', 'desc')->paginate(6);
    $new = News::find(1)->first();
    $category= $new->category;
    $replies = Topic::orderBy('dateline', 'desc')->paginate(5);
    return view('main.index', compact('page', 'news', 'category','replies',));
    }

    public function about(){
        $projects=Project::all();
        $page= Page::where('laravel_name', 'about')->IsPublished()->first();
        return view('main.about', compact('page', 'projects'));
    }

     public function history(){
        $page= Page::where('laravel_name', 'history')->IsPublished()->first();
        return view('main.history', compact('page'));
    }

    public function mission(){
        $page= Page::where('laravel_name', 'mission')->IsPublished()->first();
        return view('main.mission',compact('page') );
    }

    public function structure(){
        $page= Page::where('laravel_name', 'structure')->IsPublished()->first();
        return view('main.structure',compact('page'));
    }

    public function projects(){
        $projects =Project::all();
        $page=Page::where('laravel_name', 'projects')->IsPublished()->first();

        return view('main.projects', compact('projects', 'page'));
    }

    public function partners(){
        $page= Page::where('laravel_name', 'partners')->IsPublished()->first();
        return view('main.partners', compact('page'));
    }

    public function bankinfo(){
        $page= Page::where('laravel_name', 'bankinfo')->IsPublished()->first();
        return view('main.bankinfo', compact('page'));
    }
    public function reports(){
        $page=Page::where('laravel_name', 'reports')->IsPublished()->first();
        return view('main.reports', compact('page'));
    }
    public function map(){
        return view('blocks.map');
    }

    public function admin(){
        return view('admin');
    }

  public function pressnews(){
    $page=Page::where('laravel_name', 'press')->IsPublished()->first();
    return view('press.index', compact('page'));
    }

 public function showPressNews(){
    $page=Page::where('laravel_name', 'press')->IsPublished()->first();
    $category = Category::find(1)->where('name', 'press')->first();
    $pressnews = $category->news()->orderBy('id', 'desc')->paginate(5);
    return view('press.pressnews', compact('pressnews', 'category','page'));
    }

    public function showByCategoryId($id){
        $category = Category::where('name', 'press')->first();
        $item = $category->news->where('id', $id)->first();
        $page=Page::where('laravel_name', 'press')->IsPublished()->first();
        return view('press.single', compact('item', 'category', 'page'));
    }

}