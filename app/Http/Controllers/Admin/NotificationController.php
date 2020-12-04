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
    $cat=MessageCategory::where('category', $category);
    $id=$cat->pluck('id')->first();
    $messages=Message::where('message_category_id', $id)->get();
    return view('admin.messages.index', compact('messages','category'));
    }

    public function show($category, $id){;

    $message=Message::where('id', $id)->first();
    $cat=MessageCategory::where('category', $category)->pluck('category_name')->first();
    $message->is_read=true;
    $message->save();

    return view('admin.messages.show', compact('message','cat'));
    }

    //метод для отображения всех непрочитанных в верху страницы

    public function showAll(){;

    $notices= Message::where('is_read', false)->get();

   return view('admin.messages.showAll', compact('notices'));
    }

}
