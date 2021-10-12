<?php

use Illuminate\Support\Facades\DB;

function getCountryName($country_id)
{

    $country = DB::table('countries')->where('id',$country_id)->first();
    return $country->name ;

}

function getStateName($state_id)
{

    $state = DB::table('states')->where('id',$state_id)->first();
    return $state->name ;

}

function getCityName($city_id)
{

    $city = DB::table('cities')->where('id',$city_id)->first();
    return $city->name ;

}


?>