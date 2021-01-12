<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instruction;
use App\Models\InstructionImage;
use App\Models\Project;
use App\Models\Qrcode;

class InstructionsController extends Controller
{
    public function index() {
        $instructions = Instruction::all();
        //$instructions = Instruction::where('visible', '=', 1)->get();

        return view('instructions.index',[
            'instructions' => $instructions
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

    public function create(){
        $projects = Project::all();
        return view('instructions.create', [
            'projects' => $projects
        ]);
    }

    public function store(Request $request) {
        $is_visible = $request->is_visible;
        if ($is_visible == null) {
            $is_visible = 0;
        }
        $instruction = Instruction::create([
            'text' => $request->text,
            'user_id' => 1,
            'visible' => $is_visible,
            'project_id' => $request->project,
            'created_at' => date("Y-m-d H-i-s")
        ]);

        return redirect()->route('instructions.images.create',[ 'id' => $instruction->id]);
    }
    

    public function edit($id){
        $projects = Project::all();
        $instruction = Instruction::findOrFail($id);
        return view('instructions.edit', [
            'instruction' => $instruction,
            'projects' => $projects
        ]);
    }

    public function update(Request $request, $id) {
        $is_visible = $request->is_visible;
        if ($is_visible == null) {
            $is_visible = 0;
        }
        $instruction = Instruction::findOrFail($id);
        $instruction->text = $request->text;
        $instruction->project_id = $request->project;
        $instruction->visible = $is_visible;
        $instruction->save();
        return redirect()->route('instructions.show',[ 'id' => $id]);
    }

    public function delete($id) {
        InstructionImage::where('instructie_id','=',$id)->delete();
        Qrcode::where('instructie_id','=',$id)->delete();
        Instruction::where('id','=',$id)->delete();

        return redirect()->route('instructions');
    }
}
