<?php

namespace App\Http\Controllers\Admin\FAQ;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reply;
use App\Models\Topic;
use App\Models\Seo;

class ForFaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $topics = Topic::paginate(5);

        return view('admin.faq.index', compact('topics'));
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
        $topic=Topic::find($id);

        return view('admin.faq.show' , compact('topic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $topic=Topic::find($id);

        $seo = Seo::where('page_id', 6)->first();

        return view('admin.faq.reply_edit', compact('topic', 'seo'));
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
        $topic =Topic::find($id);
        $topic->edit($request->all());

        // $seo = Seo::where('page_id', $id)->first();
        // $seo->seo_title =$request->seo_title;
        // $seo->name=$request->name;
        // $seo->description=$request->description;
        // $seo->keywords=$request->keywords;
        // $seo->og_title=$request->og_title;
        // $seo->og_description=$request->og_description;
        // $seo->og_url=$request->og_url;
        // $seo->og_type=$request->og_type;
        // $seo->og_site_name=$request->og_site_name;
        // $seo->save();
       $message="Данные сохранены";
       return view('admin.faq.reply_edit')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $topic=Topic::find($id);

       $topic->delete();
    return redirect()->route('admin.fq.edit');
    }
}
