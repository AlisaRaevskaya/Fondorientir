<?php

namespace App\Http\Controllers\Admin\Press;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pages;
use App\Models\Seo;
use App\Models\Category;
use App\Models\News;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $category = Category::find(1)->where('name', 'interview')->first();
    $interviews = $category->news()->orderBy('id', 'desc')->paginate(5);
    return view('admin.press.interview.index', compact('interviews', 'category'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    return view('admin.press.interview.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $page= Pages::where('laravel_name', 'interview')->get();
    $seo=Seo::where('page_id', 2);
    $category = Category::find(1)->where('name', 'interview')->first();
    $news = $category->news->where('id', $id);
    return view('admin.press.interview.edit', compact('news', 'category', 'page'));
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
    return redirect()->route('admin.press.interview.edit', $id)->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
