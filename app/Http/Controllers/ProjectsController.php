<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function index(){
        $projects = \DB::table('instructions')
        ->join('project', 'project.id', '=', 'instructions.project_id')
        ->select('project.name', 'project.created_at')
        ->get();

        //dd($projects);

        return view('projects.index',[
            'projects' => $projects
        ]);
    }

    public function add(){
        // Redirect to form
        // Handle adding project
    }

    public function show($id){
        $project = Project::findOrFail($id);

        return view('projects.show',[
            'project' => $project
        ]);
    }
}
