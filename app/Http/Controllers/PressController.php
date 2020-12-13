<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\Page;
use App\Models\Category;
use Illuminate\Http\Request;

class PressController extends Controller
{
     public function interview(){
        $page=Page::where('laravel_name', 'interview')->first();
        return view('press.interview', compact('page'));
    }
    public function showFoto(){
         $page=Page::where('laravel_name', 'foto')->first();
        return view('press.foto',compact('page'));
    }
    public function forPress(){
         $page=Page::where('laravel_name', 'for-press')->first();

        return view('press.forpress',compact('page'));
    }
    public function notForPress(){
         $page=Page::where('laravel_name', 'not-for-press')->first();
        return view('press.notforpress',compact('page'));
    }
    public function pressnews(){
         $page=Page::where('laravel_name', 'press')->first();
        return view('press.index', compact('page'));
    }

 public function showPressNews(){
      $page=Page::where('laravel_name', 'press')->first();
    $category = Category::find(1)->where('name', 'press')->first();
    $pressnews = $category->news()->orderBy('id', 'desc')->paginate(5);
    return view('press.pressnews', compact('pressnews', 'category','page'));
    }

}
