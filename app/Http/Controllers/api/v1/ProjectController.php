<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\v1\ProjectStoreRequest;
use App\Http\Requests\api\v1\ProjectUpdateRequest;

use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::orderBy('name','asc')->get();
        return response()->json(['data' => new $projects],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectStoreRequest $request)
    {
        $project = Project::create($request->all());
        return response()->json(['data' => new ProjectResource($project)],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return response()->json(['data' => new ProjectResource($project)],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectUpdateRequest $request, Project $project)
    {
        $project->update($request->all());
        return response()->json(['data' => new ProjectResource($project)],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return response()->json([],204);
    }
}
