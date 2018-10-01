<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\State;
use App\Model\City;
use App\Model\Country;



class OneToManyController extends Controller
{
    public function oneToMany(){

        $country = Country::where('name','Brasil')->get()->first();
        $states = $country->states;

        foreach($states as $state){

            echo "{$state->name} - {$state->id}" ;
            echo "<hr>";

        }

        echo "<br />";


        $countries = Country::distinct()->get();

        foreach($countries as $ct){

            echo "<hr>";
            echo "<h2>{$ct->name}</h2>";
            foreach($ct->states as $state)
            {
                echo "{$state->initials} - {$state->name}";
                echo "<br />";
            }
            
            echo "<hr>";
        
        }

    }
}
