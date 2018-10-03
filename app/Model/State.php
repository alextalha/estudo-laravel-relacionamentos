<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\City;


class State extends Model
{

    protected $fillable = ['name','initials'];
    
    public function cities()
    {
        return $this->hasMany(City::class)       ;
        
    }

}
