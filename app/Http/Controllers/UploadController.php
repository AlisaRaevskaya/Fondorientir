<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;

class UploadController extends Controller

{
    public function newsadd(){
    $news = News::orderBy('dateline', 'desc')->paginate(7);
    $new = News::find(1)->first();
    $category= $new->category;
    return view('admin.news.edit', compact('news', 'category'));
    }

    public function imageUpload($id){

    return view('upload', compact('id'));
    }

    public function imageUploadPost(Request $request, $id){
    $news=News::where('id', $id)->first();

    $request->file->store('images','public');
    return "Файл загружен";
    }
}
