<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;

class FeedbackController extends Controller
{
    public function index(){
        return view('reception.index');
    }

    public function feedback(){
        return view('reception.feedback');
    }

    public function lawyer(){
        $pages= Pages::where('laravel_name', 'lawyer')->get();
        return view('reception.lawyer', compact('pages'));
    }

    public function hotline(){
        $page= Pages::where('laravel_name', 'hotline')->get();
        return view('reception.hotline', compact('page'));
    }
    public function application(){
         $page= Pages::where('laravel_name', 'application')->get();
        return view('reception.application',compact('page'));
    }
    public function claim(){
         $page= Pages::where('laravel_name', 'claim')->get();
        return view('reception.claim', compact('page'));
    }
    public function problem(){
         $page= Pages::where('laravel_name', 'problem')->get();
        return view('reception.problem', compact('page'));
    }
    public function fzakon(){
        return view('blocks.fzakon59-f3');
    }
}
