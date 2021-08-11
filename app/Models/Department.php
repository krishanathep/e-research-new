<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = 'department';

    protected $primaryKey = 'department_id';

    public function member(){
        return $this->hasMany(Member::class);
    }
}
