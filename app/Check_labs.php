<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Check_labs extends Model
{
    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }
}
