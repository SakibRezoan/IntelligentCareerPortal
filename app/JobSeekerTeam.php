<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSeekerTeam extends Model
{
    protected $table = 'job_seeker_teams';

    protected $fillable = [
        'user_id', 'company', 'type', 'client',
        'client_industry', 'description','product', 'product_url',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'foreign_key');
    }
}