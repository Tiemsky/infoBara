<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Education;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\LocationController;

class EducationController extends Controller
{


    public function save_education()
    {

        $data = request()->validate([
            'degree'=>'required',
            'university'=>'required',
            'date'=>'required',
            'country'=>'required',
            'state'=>'required',
            'city'=>'required'
            
        ]);

    

        Education::create([
            'user_id'=>Auth::User()->id,
            'degree'=>request('degree'),
            'university'=>request('university'),
            'years'=>request('date'),
            'country'=> getCountryName($data['country']),
            'state'=>getStateName($data['state']),
            'city'=>getCityName($data['city'])
        ]);

        //return redirect()->back()->with('status','Education created successfully');
        //return response();
    }
    public function edit($id)
    {
        
        $educations = Education::where('id',$id)->first();
        return $educations;
    }


    public function update($id)
    {
        $data = request()->validate([
            'degree'=>'required',
            'university'=>'required',
            'date'=>'required',
            'country'=>'required',
            'state'=>'required',
            'city'=>'required'
            
        ]);

        Education::where('id',$id)->update([
            
            'degree'=>request('degree'),
            'university'=>request('university'),
            'years'=>request('date'),
            'country'=> getCountryName($data['country']),
            'state'=>getStateName($data['state']),
            'city'=>getCityName($data['city'])
        ]);

        //return response();


    }

    public function delete_education($id)
    {
        Education::findOrFail($id)->delete();
        return redirect()->back();
    }

  
    
}
