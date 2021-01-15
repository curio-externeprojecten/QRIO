<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instruction;
use App\Models\InstructionImage;

class InstructionImagesController extends Controller
{
    public function index() {

    }
    public function create($id) {
        $instruction = Instruction::findOrFail($id);
        $message = null;
        if (isset($_GET['message'])) {
            $message = $_GET['message'];
        }
        return view('instructions.images.create',[ 'instruction' => $instruction, 'message' => $message ]);
    }

    public function store($id, request $request) {
        $is_video = $request->is_video;
        if ($is_video == null) {
            $is_video = 0;
        }
        $instruction = InstructionImage::create([
            'instructie_id' => $id,
            'file_path' => $request->link,
            'code' => $request->code,
            'is_video' => $is_video
        ]);

        return redirect()->route('instructions.images.create',[ 'id' => $id, 'message' => "success"]);
    }
}
