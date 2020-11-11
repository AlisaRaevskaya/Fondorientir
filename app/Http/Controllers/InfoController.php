<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index(){
        return view('info.index');
    }

    public function vacancies(){
        return view('info.vacancies');
    }

    public function blanks(){
        return view('info.blanks');
    }

    public function bankofdocuments(){
        return view('info.bankofdocuments');
    }

    public function testmaterial(){
        return view('info.testmaterial');
    }
    public function brochures(){
        return view('info.brochures');
    }
    public function reminder(){
        return view('info.reminder');
    }
}
