<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    use HasFactory;

    protected $table = 'research_types';

    protected $primaryKey = 'Research_types_id';

    public function concepdevelopment(){
        return $this->hasMany(Concepdevelopment::class);
    }

    public function proposaldevelopment(){
        return $this->hasMany(Proposaldevelopment::class);
    }
}
