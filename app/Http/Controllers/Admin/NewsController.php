<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::where('category_id', 1)->orderBy('id', 'desc')->paginate(7);
        $new = News::find(1)->first();
        $category= $new->category;
        return view('admin.news.index', compact('news', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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
        $news->category_id=1;
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
        $news= News::where('id', $id)->get();
        return view('admin.news.show', compact('news'));
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
        return view('admin.news.single_edit', compact('news'));
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
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        // time().'.'.$request->image->extension();

        $request->image->move(storage_path('/app/public/news'), $imageName);

        // $news=new News();
        $news=News::where('id', $id)->first();
        $news->image= $imageName;
        $news->edit($request->all());
        $message='Данные загружены';
        return redirect()->route('admin.news.single_edit')->with('message', $message);
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

        return redirect()->route('admin.news.index');
    }
}
