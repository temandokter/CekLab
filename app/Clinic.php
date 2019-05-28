<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    public function doctor()
    {
        return $this->belongsToMany(Doctor::class);
    }
    public function check_lab()
    {
        return $this->belongsTo(Check_labs::class);
    }
}
