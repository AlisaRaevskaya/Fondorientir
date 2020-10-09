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

    $replies = Topic::rightJoin('replies', 'topics.reply_id', '=', 'replies.id')
    ->select('replies.body','topics.title','replies.dateline','replies.id')->limit(6)->get();

    $news = News::orderBy('dateline', 'desc')->limit(4)->get();

    return view('main', compact('mainContent', 'replies', 'news'));
    }

}
