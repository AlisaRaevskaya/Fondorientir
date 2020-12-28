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
    *  @param  NewsRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
       $validatedData = $request->validated();

        $news=new News();

        $imageName = time().'.'.$request->image->extension();
        // time().'.'.$request->image->extension();

        $request->image->move(storage_path('/app/public/news'), $imageName);

        $news->image=$imageName;

        $news->category_id=1;

        $news=$request->all();
        $news->save();
        $message='Данные загружены';
        return redirect()->route('admin.press.create')->with('message', $message);
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
        $news= News::where('id', $id)->first();
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

        $news=News::where('id', $id)->first();

  if ($request->hasFile('image')) {
      $imageName = time().'.'.$request->image->extension();
      // time().'.'.$request->image->extension();
      $request->image->move(public_path('/storage/news'), $imageName);

      // storage_path('/app/public/news'
        $news->image= $imageName;
  }
        $news->edit($request->all());
        $message='Данные загружены';
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