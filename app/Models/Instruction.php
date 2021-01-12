<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instruction extends Model
{
    use HasFactory;
    protected $table = 'project';

    public function images() {
        return $this->hasMany('\App\Models\InstructionImage','instructie_id');
    }
}
