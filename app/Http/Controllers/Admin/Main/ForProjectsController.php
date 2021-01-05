<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;

class ForProjectsController extends Controller
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
        return view('admin.fond.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    { $validatedData = $request->validated();
       $project = Project::add($request->all());
       $id=$project->id;
       $message="Проект добавлен";
       return redirect()->route('admin.projects.edit', 13)->with('project_message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projects=Project::all();
        return view('admin.fond.projects.show_projects', compact('projects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project=Project::findOrFail($id);

        return view('admin.fond.projects.single_edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProjectRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, $id)
    {$validatedData = $request->validated();
        $project=Project::findOrFail($id);
        $project->edit($request->all());
        $message="Данные сохранены";
        return redirect()->route('admin.forprojects.edit', $id)->with('project_message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        $project->delete();

        return redirect()->route('admin.projects.edit', $id);
    }
}