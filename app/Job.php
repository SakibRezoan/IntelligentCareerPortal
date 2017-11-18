<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';

    protected $fillable = [
        'company_id', 'job_title', 'description', 'feature_and_benifits', 'contract_type', 'skill_and_experience', 'apply_due_date',
        'job_location', 'salary_min','salary_max','vacancy','isAvailable',
    ];

    public function user(){
        return $this->belongsTo(Company::class, 'foreign_key');
    }

    public function jobRequirements()
    {
        return $this->hasOne(JobRequirements::class, 'foreign_key');
    }
}
