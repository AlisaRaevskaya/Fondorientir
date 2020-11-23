<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\File;
use App\Models\Pages;
use App\Models\Seo;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newProjects =Projects::all();
        $projects=PreProject::all();
        $pages=Pages::where('title', 'projects')->get();

        foreach($pages as $page){
            $content= $page->content;
        }
        return view('admin.about.projects', compact('projects' ,'newProjects', 'content'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.main.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $promos = Projects::add($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
    $page = Pages::where('id', $id)->get();
    $projects=Projects::all();
    return view('admin.main.projects.show', compact('projects','page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seo=Seo::where('page_id', $id)->first();
        $pages= Pages::where('id', $id)->get();
        $projects=Projects::all();
        $images= File::find(1)->where('page_id', $id)->get();
        return view('admin.main.projects.edit', compact('pages', 'images','projects','seo'));
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
    $pages = Pages::findOrFail($id);

    $pages->name= $request->name;
    $pages->content=$request->content;
    $pages->url=$request->url;

    $message="Текст сохранен";

    return redirect()->route('admin.reports.edit',$id)->with('message', $message);
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

