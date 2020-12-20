<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SecondMenu;
use App\Models\Page;
use App\Models\Reply;
use App\Models\Topic;
use App\Models\Comment;

class SecondSiteController extends Controller
{
     public function index(){
        $page= Page::where('id', 3)->first();
        return view('secondsite.index', compact('page'));
    }

  public function hotline(){
        $page= Page::where('laravel_name', 'hotline')->first();
        return view('secondsite.hotline', compact('page'));
    }

    public function lawyer(){
        $page= Page::where('laravel_name', 'lawyer')->first();
        return view('secondsite.lawyer',compact('page'));

    }
    public function faq(){
      $page=Page::where('laravel_name', 'faq')->first();
        $replies = Topic::rightJoin('replies', 'topics.reply_id', '=', 'replies.id')
        ->select('topics.title','topics.dateline','replies.id', 'topics.intro')
        ->orderBy('dateline', 'desc')->paginate(5);

        return view('secondsite.faq', compact('replies', 'page'));
    }

     public function faqSingle($id){
        $page=Page::where('laravel_name', 'faq')->first();
        $topics=Topic::rightJoin('replies', 'topics.reply_id', '=', 'replies.id')
        ->select('replies.body','topics.title','topics.dateline','replies.id', 'topics.image')
        ->where('replies.id', $id)->get();

        foreach($topics as $top){
            $body= htmlspecialchars_decode($top->body, ENT_HTML5);
         }
        return view('secondsite.faq_single', compact('topics', 'body', 'page'));
    }

    public function problem(){
        $page= SecondMenu::where('laravel_name', 'second_problem')->first();
        return view('secondsite.problem', compact('page'));
    }
     public function reception(){
        $page= Page::where('laravel_name', 'reception')->first();
        return view('secondsite.reception', compact('page'));
    }
     public function migration(){
        return view('secondsite.migration');
    }
}