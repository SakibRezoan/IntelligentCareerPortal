<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    protected $table = 'company_info';

    protected $fillable = [
        'company_id', 'logo', 'company_name', 'address', 'date_of_establishment', 'contact_no',
    ];

    public function company(){
        return $this->belongsTo(Company::class, 'foreign_key');
    }
}
