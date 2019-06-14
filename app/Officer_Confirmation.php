<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Officer_Confirmation extends Model
{
    public function patient() {
    	return $this->hasMany(Patient::class);
    }
}
