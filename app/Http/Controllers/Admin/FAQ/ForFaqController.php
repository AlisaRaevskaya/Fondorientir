<?php

namespace App\Http\Controllers\Admin\FAQ;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests\FaqRequest;
use App\Models\Topic;
use App\Models\Seo;
use App\Models\Page;

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
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  FaqRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FaqRequest $request)
    {
        $validatedData = $request->validated();
        $topic =Topic::add($request->all());
        $message="Данные успешно добавлены";
        return redirect()->route('admin.faq.edit', 6)->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $topic=Topic::findOrFail($id);

        return view('admin.faq.reply_show' , compact('topic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $topic=Topic::findOrFail($id);
        return view('admin.faq.reply_edit', compact('topic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  FaqRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FaqRequest $request, $id)
    {
        $validatedData = $request->validated();
        $topic= Topic::findOrFail($id);
        $topic->edit($request->all());
        $message="Данные успешно сохранены";
       return redirect()->route('admin.faq-page.edit', $topic->id)->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $topic = Topic::findOrFail($id);
    $topic->delete();
    $message="Вопрос удален";
    return redirect()->route('admin.faq.edit', 6)->with('message', $message);;
    }
}