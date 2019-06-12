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
        return $this->belongsToMany(Clinic::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
