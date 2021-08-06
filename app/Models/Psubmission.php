<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psubmission extends Model
{
    protected $table = 'proposal_sub';

    protected $primaryKey = 'proposal_sub_id';

    protected $fillable = [
        'proposal_dev_approve_id',
        'proposal_ResearchType_id',
        'proposal_sub_state',
    ];
}
