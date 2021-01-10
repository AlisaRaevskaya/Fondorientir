<?php

namespace App\Http\Controllers;
use App\Models\Page;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index(){
        $page= Page::where('laravel_name', 'info')->IsPublished()->first();
        $id=$page->id;
        $items=Page::where('parent_id', $id)->OfSort(['sort_order' => 'asc'])->IsPublished()->get();
        return view('info.index', compact('page','items'));
    }

    public function usefulInfo(){
        $page= Page::where('id', '25')->IsPublished()->first();
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