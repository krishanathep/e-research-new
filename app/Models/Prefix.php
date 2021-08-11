<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prefix extends Model
{
    use HasFactory;

    protected $table = 'prefix';

    protected $primaryKey = 'prefix_id';

    public function member(){
        return $this->hasMany(Member::class);
    }
}
