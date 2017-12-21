<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function jobseekerGeneralInfo()
    {
        return $this->hasMany(JobSeekerGeneralInfo::class);
    }

    public function jobseekerEducation()
    {
        return $this->hasMany(JobSeekerEducation::class);
    }

    public function jobseekerCertification()
    {
        return $this->hasMany(JobSeekerCertification::class);
    }
    public function jobseekerJobPreference()
    {
        return $this->hasMany(JobSeekerJobPreference::class);
    }
    public function jobseekerTeam()
    {
        return $this->hasMany(JobSeekerTeam::class);
    }
    public function jobseekerWorkExperience()
    {
        return $this->hasMane(JobSeekerWorkExperience::class);
    }

    public function recommendedJobs()
    {
        return $this->hasMany(Job::class);
    }
}
