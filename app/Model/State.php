<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\Country;

class State extends Model
{
    
    public function country(){

        return $this->belongsTo(Country::class);

    }

    
}
