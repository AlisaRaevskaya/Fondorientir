<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\MessageCategory;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    public function index($category){
    $id=MessageCategory::where('category', $category)->pluck('id')->first();
    $messages=Message::where('message_category_id', $id)->get();
    return view('admin.messages.index', compact('messages','category'));
    }

    public function show($category, $id){;

    $messages=Message::where('id', $id)->get();

    return view('admin.messages.show', compact('messages','category'));
    }

    public function showAll(){;

   $notices= Message::where('is_read', 0)->get();

   return view('admin.messages.showAll', compact('notices'));
    }

}
