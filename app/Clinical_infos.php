<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinical_infos extends Model
{
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
