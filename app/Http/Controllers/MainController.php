<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\News;
use App\Models\Reply;
use App\Models\Topic;
use App\Models\File;
use App\Models\Project;
use Illuminate\Support\Str;


class MainController extends Controller
{
    public function index(){
    $page= Page::where('title', 'Главная')->first();
    $news = News::orderBy('dateline', 'desc')->paginate(6);
    $new = News::find(1)->first();
    $category= $new->category;
    $replies = Topic::rightJoin('replies', 'topics.reply_id', '=', 'replies.id')
        ->select('topics.title','topics.dateline','replies.id', 'topics.intro')
        ->orderBy('dateline', 'desc')->paginate(5);
    return view('main.index', compact('page', 'news', 'category','replies',));
    }

    public function about(){
        $projects=Project::all();
        $page= Page::where('laravel_name', 'about')->first();
        return view('main.about', compact('page', 'projects'));
    }

     public function history(){
        $page= Page::where('laravel_name', 'history')->first();
        return view('main.history', compact('page'));
    }

    public function mission(){
        $page= Page::where('laravel_name', 'mission')->first();
        return view('main.mission',compact('page') );
    }

    public function structure(){
        $page= Page::where('laravel_name', 'structure')->first();
        return view('main.structure',compact('page'));
    }

    public function projects(){
        $projects =Project::all();
        $page=Page::where('laravel_name', 'projects')->first();

        // foreach($pages as $page){
        //     $content= $page->content;
        // }
        return view('main.projects', compact('projects', 'page'));
    }

    public function partners(){
        $page= Page::where('laravel_name', 'partners')->first();
        return view('main.partners', compact('page'));
    }

    public function bankinfo(){
        $page= Page::where('laravel_name', 'bankinfo')->first();
        return view('main.bankinfo', compact('page'));
    }
    public function reports(){
        $page=Page::where('laravel_name', 'reports')->first();
        return view('main.reports', compact('page'));
    }
    public function map(){
        return view('blocks.map');
    }

    public function admin(){
        return view('admin');
    }

    public function fond(){
        $page= Page::where('laravel_name', 'fond')->first();
        $projects=Project::all();
        return view('main.fond', compact('page','projects' ));
    }
}
