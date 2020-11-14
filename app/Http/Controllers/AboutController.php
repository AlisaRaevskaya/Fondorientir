<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PreProject;
use App\Models\Projects;

class AboutController extends Controller
{
    public function index(){
        $mission= Pages::where('title', 'fond')->get();
        return view('main.about', compact('content'));
    }

    public function projects(){
        $projects=PreProject::all();
        return view('about-projects', compact('projects'));
    }

    public function testmaterial(){
        return view('testmaterial');
    }

    public function reports(){
        return view('reports');
    }
    public function partners(){
        return view('partners');
    }
}
