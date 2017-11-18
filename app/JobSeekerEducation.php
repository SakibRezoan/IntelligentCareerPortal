<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSeekerEducation extends Model
{
    protected $table = 'job_seeker_educations';

    protected $fillable = [
        'user_id', 'degree', 'group', 'institute',
        'year_of_passing', 'scanned_document',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'foreign_key');
    }
}
