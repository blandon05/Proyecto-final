<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('user:id,name')->paginate(6);
        return inertia('Projects/Index', [
            'projects' => $projects
        ]);
    }

    public function create()
    {
        return inertia('Projects/Create');
    }

    public function store(ProjectRequest $request)
    {
        $project = Project::create($request->all());
        return redirect()->route('projects.show', $project);
    }

    public function show(Project $project)
    {
        return inertia('Projects/Detail', [
            'project' => $project->load('user:id,name')
        ]);
    }

    public function edit(Project $project)
    {
        return inertia('Projects/Edit', [
            'project' => $project,
        ]);
    }

    public function update(ProjectRequest $request, Project $project)
    {
        $project->update($request->validated());
        return redirect()->route('projects.show', $project);
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index');
    }
}
