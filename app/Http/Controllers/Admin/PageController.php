<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\PageRequest;
use App\Http\Requests\PageStoreRequest;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Seo;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages=Page::orderBy('pages.id', 'asc')->paginate(15);
        return view('admin.pages.index', compact('pages'));
    }
   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     *  @param  PageStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageStoreRequest $request)
    {
        $validatedData = $request->validated();
        $page = Page::add($request->all());
        $id=$page->id;

        $seo= new Seo;
        $seo->seo_title =$request->seo_title;
        $seo->name=$request->name;
        $seo->description=$request->description;
        $seo->keywords=$request->keywords;
        $seo->og_title=$request->og_title;
        $seo->og_description=$request->og_description;

        $seo->page_id=$id;
        $seo->save();
        $message="Данные сохранены";
        return redirect()->route('admin.pages.create')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
   $page = Page::findOrFail($id);

    return view('admin.fond.main.show', compact('page'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
        public function edit( $id)
    {   $page = Page::find($id);
        $seo = $page->seo;
        return view('admin.pages.edit', compact('page', 'seo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PageRequest  $request
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
return redirect()->route('admin.pages.edit', $id)->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $page = Page::findOrFail($id);
        // $seo=Seo::where('page_id', $id)->first();
        // $seo->delete();
        // $page->delete();
        return redirect()->route('admin.news.index');
    }

    /**
     *
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hide($id)
    {
         $page = Page::findOrFail($id);
         $page->published = 0;
         $page->save();
        return redirect()->route('admin.pages.index');
    }

}