<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
class SecondSiteController extends Controller
{
     public function index(){
        return view('secondsite.index');
    }

  public function hotline(){
        $page= Page::where('laravel_name', 'hotline')->get();
        return view('secondsite.hotline', compact('page'));
    }

    public function application(){
           $page= Page::where('laravel_name', 'application')->first();
        return view('secondsite.application',compact('page'));

    }
    public function claim(){
        $page= Page::where('laravel_name', 'claim')->first();
        return view('secondsite.claim', compact('page'));
    }
    public function problem(){
         $page= Page::where('laravel_name', 'problem')->first();
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
