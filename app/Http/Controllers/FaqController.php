<?php

namespace App\Http\Controllers;
use App\Models\Reply;
use App\Models\Topic;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(){

        // $reply= Reply::find(1)->where('id', $reply_id)->first();
        $replies = Topic::rightJoin('replies', 'topics.reply_id', '=', 'replies.id')
        ->select('replies.body','topics.title','replies.dateline','replies.id')->limit(5)->get();
        return view('faq', compact('replies'));
    }

    public function byid($id){

      $topic=$this->getArray()->where('id', $id);
        return view('reply', compact('topic'));
    }

    public function getArray(){

        return Topic::rightJoin('replies', 'topics.reply_id', '=', 'replies.id')->get();

    }
}
