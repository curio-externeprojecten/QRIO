<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instruction;
use App\Models\Project;

class InstructionsController extends Controller
{
    public function index() {
        $instructions = Instruction::where('visible', '=', 1)->get();

        return view('instructions.index',[
            'instructions' => $instructions
        ]);
    }

    public function create(){
        $projects = Project::all();
        return view('instructions.create', [
            'projects' => $projects
        ]);
    }
    
    public function show($id){
        $instruction = Instruction::findOrFail($id);
        if ($instruction->visible == 1) {
            return view('instructions.show',[
                'instruction' => $instruction
            ]);
        }
        else {
            return redirect()->route('instructions');
        }
        
    }

    public function store(Request $request) {
        $instruction = Instruction::create([
            'text' => $request->text,
            'user_id' => 1,
            'visible' => 1,
            'project_id' => $request->project,
            'created_at' => date("Y-m-d H-i-s")
        ]);

        return redirect()->route('instructions.images.create',[ 'id' => $instruction->id]);
    }
}
