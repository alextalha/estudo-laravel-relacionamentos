<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\State;


class City extends Model
{
    public function states(){

        return $this->belongsTo(State::class);
        
    }
}
