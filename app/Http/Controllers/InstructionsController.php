<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instruction;

class InstructionsController extends Controller
{
    public function index() {
        $instructions = \DB::table('instructions')
        ->join('project', 'project.id', '=', 'instructions.project_id')
        ->select('project.name', 'project.created_at', 'project.id')
        ->get();

        //dd($instruction);

        return view('instructions.index',[
            'instructions' => $instructions
        ]);
    }

    public function add(){
        // Redirect to form
        // Handle adding project
    }
    
    public function show($id){
        $instruction = Instruction::findOrFail($id)
        ->join('instructions', 'instructions.id', '=', 'project.id')
        ->select('*')
        ->find($id); // if you use ->get(); you will get a collection which gives error

        //dd($project);

        return view('instructions.show',[
            'instruction' => $instruction
        ]);
    }
}
