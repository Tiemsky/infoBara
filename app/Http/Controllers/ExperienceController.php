<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Education;
use App\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store()
    {
        $data = request()->validate([
            'job_post'=>'required',
            'company'=>'required',
            'dates'=>'required',
            'Country'=>'required',
            'State'=>'required',
            'City'=>'required',
            'job_description'=>'required',
        ]);
     

        Experience::create([
            'user_id'=>Auth::User()->id,
            'company_name'=>$data['company'],
            'job_title'=>$data['job_post'],
            'job_description'=>$data['job_description'],
            'years'=>$data['dates'],
            'country'=>getCountryName($data['Country']),
            'state'=>getStateName($data['State']),
            'city'=>getCityName($data['City']) 
        ]);
        
       

        // return redirect()->back()->with('status','Experience added successfully');
        
    }

   
    public function show($id)
    {
        $countries = DB::table("countries")->pluck("name","id");
        $experience = Experience::where('id',$id)->first();
        //return view ('candidate.candidate-edit-experience', compact('countries','experience'));
        return response($experience);
    }



  
    public function update($id)
    {
        $data = request()->validate([
            'job_post'=>'required',
            'company'=>'required',
            'dates'=>'required',
            'Country'=>'required',
            'State'=>'required',
            'City'=>'required',
            'job_description'=>'required',
        ]);
        
        Experience::findOrFail($id)->update([
            'company_name'=>$data['company'],
            'job_title'=>$data['job_post'],
            'job_description'=>$data['job_description'],
            'years'=>$data['dates'],
            'country'=>getCountryName($data['Country']),
            'state'=>getStateName($data['State']),
            'city'=>getCityName($data['City']) 

        ]);

        //return redirect()->back()->with('status','Experience updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Experience::findOrFail($id)->delete();
        //return redirect()->back()->with('status','Experience deleted successfully');
        
    }
}
