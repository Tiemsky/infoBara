<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LocationController extends Controller
{
     /*
    ---------------------------------------------------------------
    Function to include locations over here
    --------------------------------------------------------------
    */
 

    public function getState($id)
    {
            $states = DB::table("states")
            ->where("country_id",$id)
            ->pluck("name","id");
            return response()->json($states);

    }
    public function getCity($id)
    {
        $cities = DB::table("cities")
        ->where("state_id",$id)
        ->pluck("name","id");
        return response()->json($cities);

    }

  
      /*
    ---------------------------------------------------------------
    Function to include locations over here
    --------------------------------------------------------------
    */
}

