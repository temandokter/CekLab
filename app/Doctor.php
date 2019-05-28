<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function patient()
    {
        return $this->belongsToMany(Patient::class);
    }
    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }
}
