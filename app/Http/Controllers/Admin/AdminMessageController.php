<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\MessageCategory;
use Illuminate\Support\Facades\DB;

class AdminMessageController extends Controller
{
    public function showByCategory($category)
    {
        $cat=MessageCategory::where('category', $category);
        $categoryName=$cat->pluck('category_name')->first();
        $id=$cat->pluck('id');
        $messages=Message::where('message_category_id', $id)->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.messages.showByCat', compact('messages', 'categoryName'));
    }

    public function showById($category, $id)
    {
        $message=Message::findOrFail($id);
        $cat=MessageCategory::where('category', $category)->pluck('category_name')->first();
        $message->is_read=true;
        $message->save();
        return view('admin.messages.showById', compact('message', 'cat'));
    }

    public function showAllNotRead()
    {
        $messages=Message::where('is_read', false)->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.messages.showAllNotRead', compact('messages'));
    }

    public function showAll()
    {
        $messages=Message::orderBy('created_at', 'desc')->paginate(10);
  return view('admin.messages.showAll', compact('messages'));

    }
}