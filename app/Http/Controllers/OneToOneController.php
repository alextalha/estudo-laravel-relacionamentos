<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Country;
use App\Model\Location;


class OneToOneController extends Controller
{
    public function oneToOne(){


    $country = Country::find(1);

    $location = $country->location; #trazemos todos os dados de localização para o pais setado.

    echo $location->latitude;
    echo "<hr>";
    echo $location->longitude;

    }

    public function oneToOneInverse(){

        $location = Location::where('latitude',300)->where('longitude',400)->get()->first();

        $country = $location->country;

        echo $country->name;

    }


    public function oneToOneInsert(){

        $dataForm = [
            'name' => 'Alemanha',
            'latitude' => '400',
            'longitude' => '500'
        ];

        $country = Country::create($dataForm);

        $dataForm['country_id'] = $country->id;

        $location = $country->location()->create($dataForm);

    }


    public function oneToManyInsert(){

        echo 'asdasddsds';
        
    }
}
