<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\NewsRequest;
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
    *  @param  NewsRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $validatedData = $request->validated();

        $news= new News();

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(storage_path('/app/public/news'), $imageName);

        $news->image=$imageName;
        $news->category_id=1;

        $news=News::add($request->all());
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
        $news= News::where('id', $id)->first();
        return view('admin.news.single_edit', compact('news'));
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

        //   if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('/storage/news'), $imageName);
        // storage_path('/app/public/snews'
        //   }
        $news=News::where('id', $id)->first();

        $news->image=$imageName;
        $news->title=$request->title;
        $news->date_published=$request->date_published;
        $news->body=$request->body;
        $news->intro=$request->intro;
        $news->save();
        $message='Данные загружены';
        return redirect()->route('admin.news.edit', $id)->with('message', $message);
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
