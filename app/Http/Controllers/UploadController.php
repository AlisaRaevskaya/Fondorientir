<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function imageUpload(){
        return view('upload');
    }
     public function imageUploadPost(){
        return view('upload');
    }
}
