<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class FeedbackController extends Controller
{
    public function index(){
        return view('reception.index');
    }

    public function reception(){
        $page= Page::where('laravel_name', 'reception')->first();
        return view('reception.reception', compact('page'));
    }

    public function lawyer(){
        $page= Page::where('laravel_name', 'lawyer')->first();
        return view('reception.lawyer', compact('page'));
    }

    public function hotline(){
        $page= Page::where('laravel_name', 'hotline')->get();
        return view('reception.hotline', compact('page'));
    }
    public function application(){
         $page= Page::where('laravel_name', 'application')->get();
        return view('reception.application',compact('page'));
    }
    public function claim(){
         $page= Page::where('laravel_name', 'claim')->get();
        return view('reception.claim', compact('page'));
    }
    public function problem(){
         $page= Page::where('laravel_name', 'problem')->get();
        return view('reception.problem', compact('page'));
    }
    public function fzakon(){
        return view('blocks.fzakon59-f3');
    }
}
