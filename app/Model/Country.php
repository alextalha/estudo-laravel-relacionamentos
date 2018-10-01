<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\Location;
use App\Model\State;

class Country extends Model
{
    protected $fillable = ['name'];

    public function location(){

        return $this->hasOne(Location::class);

    }

    public function states(){

        return $this->hasMany(State::class);
    }
}
