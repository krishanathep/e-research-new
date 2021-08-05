<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposaldevelopment extends Model
{
    protected $table = 'proposal_dev';

    protected $primaryKey = 'proposal_dev_id';

    protected $fillable = [
        'concept_dev_id',
        'proposal_dev_name',
        'proposal_dev_details',
        'proposal_ResearchType_id',
        'proposal_dev_type',
        'proposal_dev_status',
    ];
}
