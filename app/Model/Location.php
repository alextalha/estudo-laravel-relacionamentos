<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\Country;

class Location extends Model
{

    protected $fillable = ['latitude','longitude'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

}
