<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lr_tract extends Model
{
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
