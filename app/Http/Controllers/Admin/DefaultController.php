<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class DefaultController extends Controller
{
    public function index($page)
    {
        $url ='/'. $page;
        $page=$this->checkURL($url);
        if ($page->published ==true) {
            if ($page->is_second_menu == true) {
                return view('default.second', compact('page'));
            } else {
                return view('default.main', compact('page'));
            }
        }
    }


    public function checkURL($url)
    {
        $page=Page::where('url', $url)->IsPublished()->first();
        if ($page) {
            return $page;
        } else {
            abort(404);
        }
    }
}