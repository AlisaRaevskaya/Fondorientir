<?php

namespace App\Http\Controllers;
use App\Models\Page;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index(){
        return view('info.index');
    }

    public function vacancies(){
        $page= Page::where('laravel_name', 'vacancies')->first();
        return view('info.vacancies', compact('page'));
    }

    public function blanks(){
        $page= Page::where('laravel_name', 'blanks')->first();
        return view('info.blanks', compact('page'));
    }

    public function bankofdocuments(){
        $page= Page::where('laravel_name', 'bankofdocuments')->first();
        return view('info.bankofdocuments', compact('page'));
    }

    public function testmaterial(){
        $page= Page::where('laravel_name', 'testmaterial')->first();
        return view('info.testmaterial', compact('page'));
    }
    public function brochures(){
        $page= Page::where('laravel_name', 'brochures')->first();
        return view('info.brochures', compact('page'));
    }
    public function reminder(){
        $page= Page::where('laravel_name', 'reminder')->first();
        return view('info.reminder', compact('page'));
    }
}
