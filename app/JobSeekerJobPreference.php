<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSeekerJobPreference extends Model
{
    protected $table = 'job_seeker_job_preferences';

    protected $fillable = [
        'user_id', 'contract_types', 'organizations', 'locations',
        'environment', 'minimum_compensation','skill_wishlist',
    ];

    protected $casts = [
        'contract_types' => 'array',
        'organizations' => 'array',
        'locations' => 'array',
        'skill_wishlist' => 'array',

    ];

    public function user(){
        return $this->belongsTo(User::class, 'foreign_key');
    }
}
