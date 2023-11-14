<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Project;
use App\Models\Tecnology;
//use App\Http\Requests\StoreProjectRequest;
//use App\Http\Requests\UpdateProjectRequest;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Storage;


class ProjectController extends Controller
{

    /*  Display a listing of the resource.*/
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /* Show the form for creating a new resource. */
    public function create()
    {
        $project = Project::onlyTrashed()->where('id');
        /* if ($project) {
           $project->restore();
           return $project;
        } */


        $types = Type::all();

        $technologies = Tecnology::all();

        return view('admin.projects.create', compact('types', 'technologies'));
    }

    /* Store a newly created resource in storage. */
    public function store(Request $request)
    {
        $project = new Project();
        $project->title = $request->title;
        $project->thumb = $request->thumb;
        $project->description = $request->description;
        $project->authors = $request->authors;
        $project->slug = $request->slug;
        $project->tech = $request->tech;
        $project->link = $request->link;
        $project->github_link = $request->github_link;
        $project->type_id = $request->type_id;
        $project->save();
        return to_route('project.index');
    }

    /* Display the specified resource.*/
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /* Show the form for editing the specified resource. */
    public function edit(Project $project)
    {
        $types = Type::all();
        return view('admin.projects.edit', compact('project', 'types'));
    }

    /* Update the specified resource in storage. */
    public function update(Request $request, Project $project)
    {

        $valitaded = $request->validate([
            'title' => 'require|unique|max 50|min 10',
        ]);

        $data = $request->all();
        $project->update($data);
        return redirect()->route('project.show', $project->id);
    }

    /**
     *
     *Remove the specified resource from storage.*/
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('project.index')->with('messaggio', 'hai cancellato il progetto con successo!');
    }
}
