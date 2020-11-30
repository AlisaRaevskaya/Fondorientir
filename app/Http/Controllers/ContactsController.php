<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Contact;

class ContactsController extends Controller
{
    public function index(){
        $contacts= Page::where('laravel_name', 'contacts')->get();
        $info=Contact::all();
        return view('contacts', compact('contacts', 'info'));
    }


}
