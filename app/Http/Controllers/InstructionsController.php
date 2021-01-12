<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instruction;

class InstructionsController extends Controller
{
    public function index() {
        return view('instructions.index');
    }
    public function show($id) {
        $instruction = Instruction::findOrFail($id);
        return view('instructions.show', [
            'instruction' => $instruction
        ]);
    }
}
