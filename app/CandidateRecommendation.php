<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CandidateRecommendation extends Model
{
    protected $fillable = [
        'rank',
    ];

    public function job(){
        return $this->belongsTo(Job::class);
    }

    public function user(){
        return $this->belongsTo(User::class );
    }
}
