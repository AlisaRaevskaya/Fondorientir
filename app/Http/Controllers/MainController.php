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



class MainController extends Controller
{
    public function index(){

    $mainContent= Pages::where('laravel_name', 'main')->get();
    $images= Image::find(1)->where('page_id', '1')->get();
    $news = News::orderBy('dateline', 'desc')->paginate(6);
    $new = News::find(1)->first();
    $category= $new->category;
    $replies = Topic::rightJoin('replies', 'topics.reply_id', '=', 'replies.id')
        ->select('topics.title','topics.dateline','replies.id', 'topics.intro')
        ->orderBy('dateline', 'desc')->paginate(5);

    $int = $news->pluck('intro');
    $intros= $this->changeIntro($int);

    return view('main.index', compact('mainContent', 'images', 'news', 'category','replies', 'intros'));
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
        $history= Pages::where('title', 'structure')->get();
        return view('main.structure', compact('structure') );
    }

    public function projects(){
        $newProjects =Projects::all();
        $projects=PreProject::all();
        $pages=Pages::where('title', 'projects')->get();

        foreach($pages as $page){
            $content= $page->content;
        }
        return view('main.projects', compact('projects' ,'newProjects', 'content'));
    }

    public function partners(){
        $partners= Pages::where('title', 'partners')->get();
        return view('main.partners', compact('partners'));
    }

    public function bankinfo(){
        $bankinfo= Pages::where('title', 'bankinfo')->get();
        return view('main.bankinfo', compact('bankinfo'));
    }
    public function reports(){
        $reports=Pages::where('title', 'reports')->get();
        return view('main.reports', compact('reports'));
    }
    public function map(){
        return view('blocks.map');
    }

    public function changeIntro($arr){
        $result = [];
        foreach($arr as $in){
        array_push($result, substr($in, 0, 150) . '...');
        }
        return $result;
    }

    public function home(){
        return view('admin');
    }

}
