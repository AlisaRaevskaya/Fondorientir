<?php

namespace App\Http\Controllers;
use App\Models\Reply;
use App\Models\Topic;
use App\Models\Comment;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(){

        // $reply= Reply::find(1)->where('id', $reply_id)->first();
        $replies = Topic::rightJoin('replies', 'topics.reply_id', '=', 'replies.id')
        ->select('topics.title','topics.dateline','replies.id', 'topics.intro')
        ->orderBy('dateline', 'desc')->paginate(5);

        return view('faq', compact('replies'));
    }

     //http://fondorientir/faq/25

    public function replyByid($id){

        $topics=Topic::rightJoin('replies', 'topics.reply_id', '=', 'replies.id')
        ->select('replies.body','topics.title','topics.dateline','replies.id', 'topics.image')
        ->where('replies.id', $id)->get();

        foreach($topics as $top){
            $body= htmlspecialchars_decode($top->body, ENT_HTML5);
         }

        $comments=Comment::where('topic_reply_id', $id)->get();

        return view('replies', compact('topics', 'comments', 'body'));
    }


}
