<?php

namespace App\Http\Controllers\Admin\Press;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        $pressnews = $category->news()->orderBy('id', 'desc')->paginate(5);
        return view('admin.press.press.index', compact('pressnews', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.press.press.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $news=new News();

        $imageName = time().'.'.$request->image->extension();
        // time().'.'.$request->image->extension();

        $request->image->move(storage_path('/app/public/news'), $imageName);

        $news->image=$imageName;
        $news->category_id=3;
        $news->intro=$request->intro;
        $news->body=$request->body;
        $news->title=$request->title;
        $news->dateline=$request->dateline;
        $news->source_link=$request->source_link;
        $news->source_name=$request->source_name;
        $news->save();
        $message='Данные загружены';
        return redirect()->route('admin.news.create')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news= News::where('id', $id)->get();
        $images= File::find(1)->where('page_id', $id)->get();
        return view('admin.press.press.edit', compact('news', 'images'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $news->edit($request->all());
        $message="Данные сохранены";
        return redirect()->route('admin.press.press.edit', $id)->with('message', $message);
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
