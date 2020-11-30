<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\News;
use App\Models\Reply;
use App\Models\Topic;
use App\Models\File;
use App\Models\PreProject;
use App\Models\Projects;
use Illuminate\Support\Str;


class MainController extends Controller
{
    public function index(){
    $mainContent= Page::where('title', 'Главная')->get();
    $main_image= File::where('mode','main')->pluck('name')->first();
    $banner=File::where('mode','banner')->pluck('name')->first();
    $news = News::orderBy('dateline', 'desc')->paginate(6);
    $new = News::find(1)->first();
    $category= $new->category;
    $replies = Topic::rightJoin('replies', 'topics.reply_id', '=', 'replies.id')
        ->select('topics.title','topics.dateline','replies.id', 'topics.intro')
        ->orderBy('dateline', 'desc')->paginate(5);

    return view('main.index', compact('mainContent', 'main_image', 'news', 'category','replies','banner'));
    }

    public function history(){
        $page= Page::where('title', 'history')->first();
        return view('main.history', compact('page'));
    }
    public function mission(){
        $mission= Page::where('title', 'mission')->first();
        return view('main.mission',compact('mission') );
    }

    public function structure(){
        $structure= Page::where('title', 'structure')->first();
        return view('main.structure',compact('structure'));
    }

    public function projects(){
        $projects =Preproject::all();

        $pages=Page::where('title', 'projects')->first();

        // foreach($pages as $page){
        //     $content= $page->content;
        // }
        return view('main.projects', compact('projects', 'pages'));
    }

    public function partners(){
        $page= Page::where('laravel_name', 'partners')->first();
        return view('main.partners', compact('page'));
    }

    public function bankinfo(){
        $bankinfo= Page::where('laravel_name', 'bankinfo')->first();
        return view('main.bankinfo', compact('bankinfo'));
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
        $content= Page::where('laravel_name', 'fond')->first();
        $projects=Projects::all();
        return view('main.fond', compact('content','projects' ));
    }
}
