<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $table = 'user';

    protected $primaryKey = 'user_id';

    public function shoppinglist(){
        return $this->hasMany(Shoppinglist::class);
    }
}
