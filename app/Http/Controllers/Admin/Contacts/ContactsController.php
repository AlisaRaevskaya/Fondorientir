<?php

namespace App\Http\Controllers\Admin\Contacts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Contact;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts=Contact::all();
        return view('admin.contacts.index', compact('contacts'));
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
        $page= Page::find($id);
        $seo = $page->seo;
        return view('admin.contacts.page_edit', compact('page', 'seo'));
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
        $page = Page::findOrFail($id);

        $page->title=$request->title;
        $page->content=$request->content;
        $page->url=$request->url;
        $page->published=$request->published;
        $page->is_menu=$request->is_menu;
        $page->save();

        $seo = Seo::where('page_id', $id)->first();
        $seo->seo_title =$request->seo_title;
        $seo->name=$request->name;
        $seo->description=$request->description;
        $seo->keywords=$request->keywords;
        $seo->og_title=$request->og_title;
        $seo->og_description=$request->og_description;
        $seo->og_url=$request->og_url;
        $seo->og_type=$request->og_type;
        $seo->og_site_name=$request->og_site_name;
        $seo->save();
        $message="Данные сохранены";
        return redirect()->route('admin.contacts.page_edit', $id)->with('message', $message);
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
