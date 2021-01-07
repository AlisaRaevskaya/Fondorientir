<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;
use App\Models\File;
use App\Models\Page;

use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{

    public function summerUpload(Request $request, $id)
    {
        $image=new File();

        $mode=Page::where('id', $id)->pluck('laravel_name');
        $file= $request->file('image');
        $imageName=$file->getClientOriginalName();

        $extension=$file->extension();

        if ($extension=="jpeg"|$extension=="png"|$extension=="jpg"|$extension=="gif"|$extension=="svg") {
            $type="img";
            $path= public_path('/storage/pages');
            $store=$file->store('pages');

        } else {
            $type="no-img";
            $path= public_path('/storage/docs');
            $store=$file->store('docs');
        }

        $image->name=$store;
        $image->page_id=$id;
        $image->mode=$mode;
        $image->save();

        $url='/storage/' . $store;
        return response()->json(['url'=>$url,'type'=>$type]);
    }

    public function imageNewsStore(Request $request)
    {
        $file= $request->file('img');

        $filename=$file->getClientOriginalName();
        $imageName = time().'.'. $filename;

        // $extension=$file->extension();

        $path= public_path('/storage/news');
        $store=$file->store('news');

        $image=new File();
        $image->name=$store;
        $image->page_id=1;
        $image->mode='news';
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