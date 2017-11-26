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
        return $this->hasOne(JobSeekerGeneralInfo::class, 'foreign_key');
    }

    public function jobseekerEducation()
    {
        return $this->hasOne(JobSeekerEducation::class, 'foreign_key');
    }

    public function jobseekerCertification()
    {
        return $this->hasOne(JobSeekerCertification::class, 'foreign_key');
    }
    public function jobseekerJobPreference()
    {
        return $this->hasOne(JobSeekerJobPreference::class, 'foreign_key');
    }
    public function jobseekerTeam()
    {
        return $this->hasOne(JobSeekerTeam::class, 'foreign_key');
    }
    public function jobseekerWorkExperience()
    {
        return $this->hasOne(JobSeekerWorkExperience::class, 'foreign_key');
    }
}
