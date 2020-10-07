<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;
use App\Models\News;
use App\Models\Reply;
use App\Models\Topic;

class MainController extends Controller
{
    public function index(){
    $mainContent= Pages::all();
    $faq=Reply::find(1)->topics();
    $news = News::orderBy('dateline', 'desc')->paginate(4);
    return view('main', compact('mainContent', 'faq', 'news'));
    }

}
