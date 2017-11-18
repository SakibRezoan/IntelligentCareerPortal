<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSeekerGeneralInfo extends Model
{
    protected $table = 'jobseeker_general_info';

    protected $fillable = [
        'user_id', 'avatar', 'first_name', 'last_name', 'date_of_birth',
        'city', 'gender', 'contact_no', 'hidden_status', 'address',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'foreign_key');
    }
}
