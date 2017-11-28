<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';

    protected $fillable = [
        'company_id', 'job_title', 'position','description', 'feature_and_benifits', 'contract_type', 'apply_due_date',
        'job_location', 'salary_min','salary_max','vacancy','skill','experience','max_age','isAvailable',
    ];

    protected $casts = [
        'skill' => 'array',
        'experience' => 'array',
    ];

    public function user(){
        return $this->belongsTo(Company::class, 'foreign_key');
    }
}
