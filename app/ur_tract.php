<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ur_tract extends Model
{
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
