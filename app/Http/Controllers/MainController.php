<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;
use App\Models\News;
use App\Models\Reply;
use App\Models\Topic;
use App\Models\Image;

class MainController extends Controller
{
    public function index(){

    $mainContent= Pages::where('laravel_name', 'main')->get();
    $images= Image::find(1)->where('page_id', '1')->get();

    return view('main', compact('mainContent', 'images'));
    }

}
