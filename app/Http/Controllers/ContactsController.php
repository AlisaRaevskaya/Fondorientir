<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Contact;

class ContactsController extends Controller
{
    public function index(){
        $page= Page::where('laravel_name', 'contacts')->IsPublished()->first();
        $info=Contact::all();
        return view('contacts', compact('page', 'info'));
    }


}