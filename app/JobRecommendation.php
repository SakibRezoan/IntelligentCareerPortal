<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobRecommendation extends Model
{
    protected $fillable = [
        'rank',
    ];

    public function job(){
        return $this->belongsTo(Job::class);
    }

    public function user(){
        return $this->belongsTo(JobRecommendation::class );
    }
}
