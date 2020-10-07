<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(){
        return view('feedback');
    }

    public function lawyer(){
        return view('lawyer');
    }

    public function fzakon(){
        return view('fzakon59-f3');
    }

    public function info(){
        return view('info');
    }

    public function brochures(){
        return view('brochures');
    }

}
