<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoppinglist extends Model
{
    protected $table = 'shopping_list';

    protected $primaryKey = 'shopping_list_id';

    protected $fillable = [
        'category_id',
        'category_branch_id',
        'user_id',
    ];

    public function categorys(){
        return $this->belongsTo(Categorys::class, 'category_id');
    }

    public function branch(){
        return $this->belongsTo(Branch::class, 'category_branch_id');
    }
}
