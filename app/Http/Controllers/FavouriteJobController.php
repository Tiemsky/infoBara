<?php

namespace App\Http\Controllers;
use App\Job;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class FavouriteJobController extends Controller
{
    public function save($id)
    {
        $jobId = Job::findOrFail($id);
        $jobId->favourites()->attach(Auth::User()->id);
        return redirect()->back()->with('success','job saved');
       

    }

    public function unsaved($id)
        {
            $jobId = Job::findOrFail($id);
            $jobId->favourites()->detach(Auth::User()->id);
            return redirect()->back()->with('success','job unsaved successfully');
            

        }
}
