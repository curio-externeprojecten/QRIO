<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instruction extends Model
{
    use HasFactory;
    protected $table = 'instructions';
    protected $guarded = [];
    public $timestamps = false;


    public function images() {
        return $this->hasMany('\App\Models\InstructionImage','instructie_id');
    }

    public function project() {
        return $this->belongsTo('\App\Models\Project','project_id');
    }
}
