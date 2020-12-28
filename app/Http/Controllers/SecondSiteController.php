<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Topic;

class SecondSiteController extends Controller
{
     public function index(){
        $page= Page::where('id', 3)->IsPublished()->first();
        return view('secondsite.index', compact('page'));
    }

  public function hotline(){
        $page= Page::where('laravel_name', 'hotline')->IsPublished()->first();
        return view('secondsite.hotline', compact('page'));
    }

    public function lawyer(){
        $page= Page::where('laravel_name', 'lawyer')->IsPublished()->first();
        return view('secondsite.lawyer',compact('page'));

    }
    public function faq(){
      $page=Page::where('laravel_name', 'faq')->IsPublished()->first();
        $replies = Topic::orderBy('dateline', 'desc')->paginate(5);

        return view('secondsite.faq', compact('replies', 'page'));
    }

     public function faqSingle($id){
        $page=Page::where('laravel_name', 'faq')->IsPublished()->first();
        $topics=Topic::where('id', $id)->get();

        foreach($topics as $top){
            $body= htmlspecialchars_decode($top->body, ENT_HTML5);
         }
        return view('secondsite.faq_single', compact('topics', 'body', 'page'));
    }
     public function reception(){
        $page= Page::where('laravel_name', 'reception')->IsPublished()->first();
        return view('secondsite.reception', compact('page'));
    }


}