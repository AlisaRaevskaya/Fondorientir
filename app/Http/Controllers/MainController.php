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
    $news = News::orderBy('dateline', 'desc')->paginate(4);

    return view('main.index', compact('mainContent', 'images', 'news'));
    }

    public function history(){
        return view('main.history');
    }
    public function mission(){
        return view('main.mission');
    }
    public function structure(){
        return view('main.structure');
    }

    public function projects(){
        $newProjects =Projects::all();
        $projects=PreProject::all();
        return view('main.projects', compact('projects' ,'newProjects'));
    }

    public function partners(){
        return view('main.partners');
    }

    public function bankinfo(){
        return view('main.bankinfo');
    }
    public function reports(){
        return view('main.reports');
    }

}
