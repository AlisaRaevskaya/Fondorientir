<?php

namespace App\Http\Controllers;
use App\Models\Page;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index(){
        return view('info.index');
    }

    public function usefulInfo(){
        $page= Page::where('laravel_name', 'useful-info')->IsPublished()->first();
        return view('info.info', compact('page'));
    }

    public function blanks(){
        $page= Page::where('laravel_name', 'blanks')->IsPublished()->first();
        return view('info.blanks', compact('page'));
    }

    public function bankofdocuments(){
        $page= Page::where('laravel_name', 'bankdocuments')->IsPublished()->first();
        return view('info.bankofdocuments', compact('page'));
    }

    public function testmaterial(){
        $page= Page::where('laravel_name', 'testmaterial')->IsPublished()->first();
        return view('info.testmaterial', compact('page'));
    }
    public function brochures(){
        $page= Page::where('laravel_name', 'brochures')->IsPublished()->first();
        return view('info.brochures', compact('page'));
    }
    public function usefulContacts(){
        $page= Page::where('laravel_name', 'useful_contacts')->IsPublished()->first();
        return view('info.useful_contacts', compact('page'));
    }



}