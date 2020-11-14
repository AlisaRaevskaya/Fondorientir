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
        return view('reception.lawyer');
    }

    public function hotline(){
        $page= Pages::where('laravel_name', 'hotline')->get();
        return view('reception.hotline', compact('page'));
    }
    public function application(){
        return view('reception.application');
    }
    public function claim(){
        return view('reception.claim');
    }
    public function problem(){
        return view('reception.problem');
    }
    public function fzakon(){
        return view('blocks.fzakon59-f3');
    }
}
