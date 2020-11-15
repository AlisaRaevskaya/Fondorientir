<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;
class SecondSiteController extends Controller
{
     public function index(){
        return view('secondsite.index');
    }

  public function hotline(){
        $page= Pages::where('laravel_name', 'hotline')->get();
        return view('secondsite.hotline', compact('page'));
    }

    public function application(){
        return view('secondsite.application');
    }
    public function claim(){
        return view('secondsite.claim');
    }
    public function problem(){
        return view('secondsite.problem');
    }
     public function reception(){
        return view('secondsite.reception');
    }
}
