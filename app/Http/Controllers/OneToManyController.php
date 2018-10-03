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

    public function manyToOne(){
        
        $stateName = 'Xangai';

        $state = State::where('name',$stateName)->get()->first();

        $country = $state->country;

        echo $country->name;

    }



    public function oneToManyTwo(){

        $country = Country::where('name',"Brasil")->get()->first();


        $estado = $country->states;

        foreach($estado as $state){

            echo "{$state->name} - {$state->id} : " ;

            foreach($state->cities as $city){
                echo "| " . $city->name ;
            }
            

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

    public function oneToManyInsert(){

        $dataForm = [
            'name' => 'Piaui',
            'initials' => 'PI'
        ];

        $country = Country::find(1);

        $insertState = $country->states()->create($dataForm);
        

        
    }
    




}
