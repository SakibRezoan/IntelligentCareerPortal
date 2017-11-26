<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSeekerCertification extends Model
{
    protected $table = 'job_seeker_certifications';

    protected $fillable = [
        'user_id', 'title', 'authority', 'license_no',
        'date','link', 'scanned_document',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'foreign_key');
    }
}
