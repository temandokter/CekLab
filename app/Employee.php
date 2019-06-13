<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function DateSpesimen() {
    	return $this->hasOne(DateSpesimen::class);
    }
}
