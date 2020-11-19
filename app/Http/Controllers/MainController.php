<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;
use App\Models\News;
use App\Models\Reply;
use App\Models\Topic;
use App\Models\Image;
use App\Models\PreProject;
use App\Models\Projects;
use Illuminate\Support\Str;


class MainController extends Controller
{
    public function index(){
    $mainContent= Pages::where('title', 'Главная')->get();
    $main_image= Image::where('mode','main')->pluck('name')->first();
    $banner=Image::where('mode','banner')->pluck('name')->first();
    $news = News::orderBy('dateline', 'desc')->paginate(6);
    $new = News::find(1)->first();
    $category= $new->category;
    $replies = Topic::rightJoin('replies', 'topics.reply_id', '=', 'replies.id')
        ->select('topics.title','topics.dateline','replies.id', 'topics.intro')
        ->orderBy('dateline', 'desc')->paginate(5);

    return view('main.index', compact('mainContent', 'main_image', 'news', 'category','replies','banner'));
    }

    public function history(){
        $history= Pages::where('title', 'history')->get();
        return view('main.history', compact('history'));
    }
    public function mission(){
        $mission= Pages::where('title', 'mission')->get();
        return view('main.mission',compact('mission') );
    }

    public function structure(){
        $structure= Pages::where('title', 'structure')->get();
        return view('main.structure',compact('structure'));
    }

    public function projects(){
        $projects =Preproject::all();

        $pages=Pages::where('title', 'projects')->get();

        // foreach($pages as $page){
        //     $content= $page->content;
        // }
        return view('main.projects', compact('projects', 'pages'));
    }

    public function partners(){
        $partners= Pages::where('laravel_name', 'partners')->get();
        return view('main.partners', compact('partners'));
    }

    public function bankinfo(){
        $bankinfo= Pages::where('laravel_name', 'bankinfo')->get();
        return view('main.bankinfo', compact('bankinfo'));
    }
    public function reports(){
        $reports=Pages::where('laravel_name', 'reports')->get();
        return view('main.reports', compact('reports'));
    }
    public function map(){
        return view('blocks.map');
    }

    public function admin(){
        return view('admin');
    }

    public function fond(){
        $content= Pages::where('laravel_name', 'fond')->get();
        $projects=Projects::all();
        return view('main.fond', compact('content','projects' ));
    }
}
