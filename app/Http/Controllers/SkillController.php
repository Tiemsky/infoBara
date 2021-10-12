<?php

namespace App\Http\Controllers;

use App\Skills;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class SkillController extends Controller
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

   
    public function store(Request $request)
    {

    if(count($request->skill )>0)
    {
        
        foreach($request->skill as $skill => $v)
        {

            $data=[
                'user_id'=>Auth::User()->id,
                'skill_name'=>$request->skill[$skill],
                'value'=>$request->percentage[$skill]
    
            ];
           Skills::create([
               'user_id'=>$data['user_id'],
               'skill_name'=>$data['skill_name'],
               'value'=>$data['value'],
           ]);
         
            
        }

       
    }

          return redirect()->route('candidate-view-profile')->with('success','New skills added successfully');

        
    }


    public function show($id)
    {
        $skill = Skills::where('id',$id)->first();
        return view ('candidate.candidate-edit-skill', compact('skill'));
    }

  
    public function edit($id)
    {
        //
    }

    public function update($id)
    {
        $data = request()->validate([
            'skill'=>'required',
            'percentage'=>'required',

        ]);
        
        Skills::where('id',$id)->update([
            'skill_name'=>$data['skill'],
            'value'=>$data['percentage']

        ]);

        return redirect()->back()->with('status','skill updated successfully');
        
    }

  
    public function destroy($id)
    {
        // Skills::findOrFail('id')->delete();
        $id = Skills::findOrFail($id)->delete();
        return redirect()->back()->with('status','skill deleted successfully');
        
        
    }
}
