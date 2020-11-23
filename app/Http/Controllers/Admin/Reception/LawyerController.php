<?php

namespace App\Http\Controllers\Admin\Reception;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pages;
use App\Models\File;
use App\Models\Seo;

class LawyerController extends Controller
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
        $page = Pages::where('id', $id)->get();

        return view('admin.reception.lawyer.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pages= Pages::where('id', $id)->get();
    $seo=Seo::where('page_id', $id)->first();
        return view('admin.reception.lawyer.edit', compact('pages','seo'));
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

    $pages->edit($request->all());
    $message="Текст сохранен";
    return redirect()->route('admin.lawyer.edit', $id)->with('message', $message);

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
