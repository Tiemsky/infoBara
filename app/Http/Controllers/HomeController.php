<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use Illuminate\Support\Facades\DB;
use App\Category;

use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
    }
  

    
    public function index()
    {
        $jobs = Job::orderBy('id','DESC')->limit(10)->where('status', 1)->get();
        $JobCount = Job::count();
        $Category= Category::with('jobs')->limit(9)->get();
        $countries = DB::table("countries")->pluck("name","id");
       
        return view('welcome', compact('jobs','JobCount','Category','countries'));
    }

    public function work()
    {
        return view ('how-it-works');
    }

    public function terms()
    {

        return view ('terms-policy');

    }

    
}
