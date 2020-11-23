<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;
use App\Models\File;
use App\Models\Pages;

use Illuminate\Support\Facades\Storage;

class UploadController extends Controller

{
    public function newsadd(){
    $news = News::orderBy('id', 'desc')->paginate(7);
    $new = News::find(1)->first();
    $category= $new->category;
    return view('admin.news.news_edit', compact('news', 'category'));
    }

    public function imageUpload($id){
    $news_id=$id;
    return view('upload', compact('news_id'));
    }

    public function imageStorePost(Request $request, $id){

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        // time().'.'.$request->image->extension();

        $request->image->move(storage_path('/app/public/news'), $imageName);

        // $news=new News();
        $news=News::where('id', $id)->first();
        $news->image= $imageName;
        $news->save();
        $message='Картинка загружена';
        return redirect()->route('newsadd')->with('message', $message);

    }

public function summerUpload(Request $request, $id){

    $file= $request->file('image');

    $filename=$file->getClientOriginalName();
    $imageName = time().'.'. $filename;

    // $path=storage_path('/app/public/news');

    $path= public_path('/storage/pages');
    $store=$file->store('pages');

  $image=new File();
    $mode=Pages::where('id', $id)->pluck('laravel_name');
    $image->name=$store;
    $image->page_id=$id;
    $image->mode=$mode;
    $image->save();

    $url='/storage/' . $store;
    return response($url);

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




// resize the file, optional (intervention/image package)
            // $image = Image::make(public_path('storage/pages' . $store));
            // if($image->width() > 600) {
            //     $image->resize(600, null, function ($constraint) {
            //         $constraint->aspectRatio();
            //     });
            // }
