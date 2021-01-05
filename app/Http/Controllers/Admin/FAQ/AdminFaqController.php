<?php

namespace App\Http\Controllers\Admin\FAQ;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reply;
use App\Models\Topic;
use App\Models\Page;
use App\Models\Seo;
use App\Http\Requests\PageRequest;

class AdminFaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $page= Page::findOrFail($id);
        $seo = $page->seo;
        $replies=Topic::orderBy('date_published', 'asc')->paginate(5);

        return view('admin.faq.page_edit', compact('page', 'seo', 'replies'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PageRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PageRequest $request, $id)
    {
  $validatedData = $request->validated();
    $page = Page::findOrFail($id);
       $page->edit($request->all());


        $seo = Seo::where('page_id', $id)->first();
        $seo->seo_title =$request->seo_title;
        $seo->name=$request->name;
        $seo->description=$request->description;
        $seo->keywords=$request->keywords;
        $seo->og_title=$request->og_title;
        $seo->og_description=$request->og_description;
        $seo->save();
        $message="Данные сохранены";
        return redirect()->route('admin.faq.edit', $id)->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::findOrFail($id);
        $seo=Seo::where('page_id', $id)->first();

        $seo->delete();
        $page->delete();
        return redirect()->route('admin.pages.index');
    }
}