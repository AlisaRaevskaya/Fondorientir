<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SecondMenu;
use App\Models\Page;

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
    public function claim(){
        $page= Page::where('laravel_name', 'claim')->first();
        return view('secondsite.claim', compact('page'));
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
