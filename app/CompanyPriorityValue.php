<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyPriorityValue extends Model
{
    public function user(){
        return $this->belongsTo(Company::class );
    }
}
