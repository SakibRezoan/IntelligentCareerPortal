<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobRequirements extends Model
{
    protected $table = 'job_requirements';

    protected $fillable = [
        'job_id', 'required_skill', 'required_experience',
    ];

    public function job(){
        return $this->belongsTo(Job::class, 'foreign_key');
    }
}
