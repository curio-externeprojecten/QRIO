<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){
        $projects = [
            [
                'id' => 1,
                'admin_id' => 2,
                'name' => 'Project NR1',
                'createdate' => "2020-11-27"
            ],
            [
                'id' => 2,
                'admin_id' => 1,
                'name' => 'Project NR2',
                'createdate' => "2020-11-28"
            ],
            [
                'id' => 3,
                'admin_id' => 3,
                'name' => 'Project NR3',
                'createdate' => "2020-12-01"
            ]
        ];

        return view('projects.index',[
            'projects' => $projects
        ]);
        // To be added: connection with DB and fetching data
    }

    public function add(){
        // Redirect to form
        // Handle adding project
    }
}
