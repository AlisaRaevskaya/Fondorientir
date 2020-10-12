<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;
use App\Models\News;
use App\Models\Reply;
use App\Models\Topic;

class MainController extends Controller
{
    public function index(){

    $mainContent= Pages::where('laravel_name', 'main')->get();


    return view('main', compact('mainContent'));
    }

}
