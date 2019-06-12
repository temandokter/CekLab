<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
