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
        $page= Page::where('laravel_name', 'useful-info')->first();
        return view('info.info', compact('page'));
    }

    public function blanks(){
        $page= Page::where('laravel_name', 'blanks')->first();
        return view('info.blanks', compact('page'));
    }

    public function bankofdocuments(){
        $page= Page::where('laravel_name', 'bankdocuments')->first();
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

    public function useful_info(){
        $page= Page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-1', compact('page'));
    }

     public function useful_uchet(){
 $page= Page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-2', compact('page'));
     }
public function daktiloskopiya(){
 $page= Page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-3', compact('page'));
}
public function patent(){
 $page= Page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-4', compact('page'));
}

 public function medpatent(){
 $page= Page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-14', compact('page'));
 }
public function rvp(){
 $page= Page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-7', compact('page'));
}
 public function visaInvitation(){
 $page= Page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-3', compact('page'));
 }

 public function razreshenie(){
     $page= Page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-5', compact('page'));
    }
 public function grazhdanstvo(){
     $page= Page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-8', compact('page'));
}
 public function snyatiye(){
      $page= Page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-6', compact('page'));
}
 public function snyatie(){
      $page= Page::where('laravel_name', 'useful-info')->first();
        return view('useful.info-13', compact('page'));
}

}
