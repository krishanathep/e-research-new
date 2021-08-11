<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $table = 'user';

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'User_prefix_id',
        'User_FName',
        'User_LName',
        'User_DepartmentID',
        'User_Position_id',
        'User_Email', 
        'User_Mobile',
    ];

    public function shoppinglist(){
        return $this->hasMany(Shoppinglist::class);
    }

    public function department(){
        return $this->belongsTo(Department::class, 'User_DepartmentID');
    }

    public function prefix(){
        return $this->belongsTo(Prefix::class, 'User_prefix_id');
    }

    public function position(){
        return $this->belongsTo(Position::class, 'User_Position_id');
    }

    public function addtional(){
        return $this->hasMany(Addtional::class);
    }
}
