<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $table = 'shopping_category_branch';

    protected $primaryKey = 'running_no';

    public function shoppinglist(){
        return $this->hasMany(Shoppinglist::class);
    }
}

