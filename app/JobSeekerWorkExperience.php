<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSeekerWorkExperience extends Model
{
    protected $fillable = [
        'user_id', 'company', 'designation','location',
        'skill', 'experience',
    ];

    protected $casts = [
        'skill' => 'array',
        'experience' => 'array',
    ];

    public function user(){
        return $this->belongsTo(User::class );
    }
}
