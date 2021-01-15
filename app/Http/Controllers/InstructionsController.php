<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Instruction;
use App\Models\InstructionImage;
use App\Models\Project;
use App\Models\Qrcode;

class InstructionsController extends Controller
{
    public function index() {
        
        $user_id = Auth::id();
        $userInstructions = Instruction::where('user_id', '=', $user_id)->get();
        $visibleInstructions = Instruction::where('user_id', '!=', $user_id)->where('visible', '=', 1)->get();
        $instructions = $userInstructions;
        foreach ($visibleInstructions as $visibleInstruction) {
            $instructions[count($userInstructions)] = $visibleInstruction;
        }

        return view('instructions.index',[
            'instructions' => $instructions
        ]);
    }
    
    public function show($id){
        $instruction = Instruction::findOrFail($id);
        if ($instruction->visible == 1 || $instruction->user_id == Auth::id()) {
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
            'user_id' => Auth::id(),
            'visible' => $is_visible,
            'project_id' => $request->project,
            'created_at' => date("Y-m-d H-i-s")
        ]);

        return redirect()->route('instructions.images.create',[ 'id' => $instruction->id]);
    }
    

    public function edit($id){
        $projects = Project::all();
        $instruction = Instruction::findOrFail($id);
        if ($instruction->user_id == Auth::id()) {
            return view('instructions.edit', [
                'instruction' => $instruction,
                'projects' => $projects
            ]);
        }
        else {
        return redirect()->route('instructions');
        }
    }

    public function update(Request $request, $id) {
        $is_visible = $request->is_visible;
        if ($is_visible == null) {
            $is_visible = 0;
        }
        $instruction = Instruction::findOrFail($id);
        if (Auth::id() == $instruction->user_id) {
            $instruction->text = $request->text;
            $instruction->project_id = $request->project;
            $instruction->visible = $is_visible;
            $instruction->save();
        }
        return redirect()->route('instructions.show',[ 'id' => $id]);
    }

    public function delete($id) {
        $instruction = Instruction::findOrFail($id);
        if (Auth::id() == $instruction->user_id) {
            InstructionImage::where('instructie_id','=',$id)->delete();
            Qrcode::where('instructie_id','=',$id)->delete();
            Instruction::where('id','=',$id)->delete();
        }
        return redirect()->route('instructions');
    }
}
