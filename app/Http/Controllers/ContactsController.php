<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;
use App\Models\Contact;

class ContactsController extends Controller
{
    public function index(){
        $contacts= Pages::where('laravel_name', 'contacts')->get();
        $info=Contact::all();
        return view('contacts', compact('contacts', 'info'));
    }

    public function testmaterial(){
        return view('testmaterial');
    }
}
