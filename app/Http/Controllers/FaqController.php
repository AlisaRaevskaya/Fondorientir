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
        $page=Page::where('laravel_name', 'faq')->IsPublished()->first();
        $replies =Topic::orderBy('date_published', 'desc')->paginate(5);

        return view('faq', compact('replies', 'page'));

    }


    public function replyByid($id){
        $page=Page::where('laravel_name', 'faq')->IsPublished()->first();
        $topics=Topic::where('id', $id)->get();

        foreach($topics as $top){
            $body= htmlspecialchars_decode($top->body, ENT_HTML5);
         }

        return view('faq_single', compact('topics', 'body', 'page'));
    }

}