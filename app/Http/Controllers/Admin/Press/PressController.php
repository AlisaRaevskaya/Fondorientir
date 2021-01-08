<?php

namespace App\Http\Controllers\Admin\Press;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use App\Models\File;
use App\Models\Category;

class PressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::where('name', 'press')->first();
        $pressnews = $category->news()->orderBy('date_published', 'desc')->paginate(7);
        return view('admin.press.index', compact('pressnews', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.press.create');
    }
    /**
       * Store a newly created resource in storage.
       *
      *  @param  NewsRequest $request
       * @return \Illuminate\Http\Response
       */
    public function store(NewsRequest $request)
    {
        $validatedData = $request->validated();

        $news= new News();
if ($request->hasFile('image')) {
    $imageName = $request->image->getClientOriginalName();
    $request->image->move(storage_path('/app/public/news'), $imageName);
    $news->image=$imageName;
}
        $news->title=$request->title;
        $news->date_published=$request->date_published;
        $news->body=$request->body;
        $news->intro=$request->intro;
        $news->category_id=3;
        $news->save();
        $message='Данные загружены';
        return redirect()->route('admin.press.index');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news= News::where('id', $id)->first();
        return view('admin.press.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news= News::where('id', $id)->first();
        $images= File::find(1)->where('page_id', $id)->get();
        return view('admin.press.edit', compact('news', 'images'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  NewsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, $id)
    {
        $validatedData = $request->validated();
        $news=News::findOrFail($id);

        if ($request->hasFile('image')) {
            $oldFileName = $news->image;
            if ($oldFileName !== null) {
                $news->deleteImage($oldFileName);
            }
            $imageName = $request->image->getClientOriginalName();
            $request->image->move(storage_path('/app/public/news'), $imageName);
            $news->image=$imageName;
        }


        $news->title=$request->title;
        $news->date_published=$request->date_published;
        $news->body=$request->body;
        $news->intro=$request->intro;
        $news->save();
        $message='Новость отредактирована';
        return redirect()->route('admin.press.edit', $id)->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);

        $news->deleteImage($news->image);

        // $articles->deleteMiniImages($articles->images);

        $news->delete();

        return redirect()->route('admin.press.index');
    }
}