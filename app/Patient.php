<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function clinical_infos()
    {
        return $this->belongsTo(Clinical_infos::class);
    }
}
