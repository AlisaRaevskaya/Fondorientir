<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(){
        return view('support.index');
    }

    public function feedback(){
        return view('support.feedback');
    }

    public function lawyer(){
        return view('support.lawyer');
    }

    public function hotline(){
        return view('support.hotline');
    }
    public function application(){
        return view('support.application');
    }
    public function claim(){
        return view('support.claim');
    }
    public function problem(){
        return view('support.problem');
    }
    public function fzakon(){
        return view('blocks.fzakon59-f3');
    }
}
