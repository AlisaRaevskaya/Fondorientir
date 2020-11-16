<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;

class UploadController extends Controller

{
    public function newsadd(){
    $news = News::orderBy('id', 'desc')->paginate(7);
    $new = News::find(1)->first();
    $category= $new->category;
    return view('admin.news.edit', compact('news', 'category'));
    }

    public function imageUpload($id){
    $news_id=$id;
    return view('upload', compact('news_id'));
    }

    public function imageStorePost(Request $request, $id){

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName =$request->image->getClientOriginalName();
        // time().'.'.$request->image->extension();

        $request->image->move(public_path('/storage/news'), $imageName);
        // $news=new News();
        $news=News::where('id', $id)->first();
        $news->image= $imageName;
        $news->save();
        $message='Картинка загружена';
        return redirect()->back()->with('message', $message);

    }
}

//    $path=$request->file('image')->store('uploads', 'public');
//    return view('upload', compact('path'));



                //
                // $request->image->storeAs('/public', $validated['name'].".".$extension);
                // $url = Storage::url($validated['name'].".".$extension);
                // $file = File::create([
                //    'name' => $validated['name'],
                //     'url' => $url,
                // ]);
                // Session::flash('success', "Success!");
                // return \Redirect::back();
        //     }
        // }
        // abort(500, 'Could not upload image :(');


