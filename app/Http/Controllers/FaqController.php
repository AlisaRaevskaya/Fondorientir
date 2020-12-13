<?php

namespace App\Http\Controllers;
use App\Models\Reply;
use App\Models\Topic;
use App\Models\Comment;
use App\Models\Page;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(){
        $page=Page::where('laravel_name', 'faq')->first();
        $replies = Topic::rightJoin('replies', 'topics.reply_id', '=', 'replies.id')
        ->select('topics.title','topics.dateline','replies.id', 'topics.intro')
        ->orderBy('dateline', 'desc')->paginate(5);

        return view('faq', compact('replies', 'page'));
    }

     //http://fondorientir/faq/25

    public function replyByid($id){
        $page=Page::where('laravel_name', 'faq')->first();
        $topics=Topic::rightJoin('replies', 'topics.reply_id', '=', 'replies.id')
        ->select('replies.body','topics.title','topics.dateline','replies.id', 'topics.image')
        ->where('replies.id', $id)->get();

        foreach($topics as $top){
            $body= htmlspecialchars_decode($top->body, ENT_HTML5);
         }

        return view('replies', compact('topics', 'body', 'page'));
    }


}
