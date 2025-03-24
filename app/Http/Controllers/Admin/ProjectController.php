<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view("projects.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("projects.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newProject = new Project();

        $newProject = new Project();
        $newProject->project_name = $data['project_name'];
        $newProject->description = $data['description'];
        $newProject->technologies = $data['technologies'];
        $newProject->launch_date = $data['launch_date'];
        $newProject->git_link = $data['git_link'];
        $newProject->role = $data['role'];
        $newProject->image_url = $data['image_url'];
        $newProject->status = $data['status'];


        $newProject->save();

        return redirect()->route("projects.show", $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view("projects.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view("projects.edit", compact("project"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();
        $project->project_name = $data['project_name'];
        $project->description = $data['description'];
        $project->technologies = $data['technologies'];
        $project->launch_date = $data['launch_date'];
        $project->git_link = $data['git_link'];
        $project->role = $data['role'];
        $project->image_url = $data['image_url'];
        $project->status = $data['status'];

        $project->update();

        return redirect()->route("projects.show", $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route("projects.index");
    }
}
