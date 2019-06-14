<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function doctor()
    {
        return $this->hasMany(Doctor::class);
    }
    public function clinical_infos()
    {
        return $this->hasMany(Clinical_infos::class);
    }
    public function officer_confirmation()
    {
    	return $this->hasMany(Officer_Confirmation::class);
    }
}
