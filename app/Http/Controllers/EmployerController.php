<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Company;
use App\Logs;
use App\Category;
use App\Employer;
use App\Http\Requests\employerValidationRequest;
use App\Job;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class EmployerController extends Controller
{

    public function __construct()
    {
        return $this->middleware('Employer',['except'=>array('registration', 'store')]);
    }

    public function registration()
    {
        
        return view ('auth.employer');
    }

    public function store(employerValidationRequest $request)
    {

        // $password = Hash::make($request->input('password'));
        $user= User::create([
        'firstname'=>request('firstname'),
        'lastname'=>request('lastname'),
        'email'=>request('email'),
        'password'=>bcrypt((request('password'))),
        'phone'=>request('phone'),
        'user_type'=>'employer'

       ]);

        Company::create([
        'user_id'=>$user->id,
        'company_name'=>request('company'),
        'slug' => Str::slug(strtolower($request->input('company')), '-'),

       ]);
       Logs::create(['user_id'=>$user->id]);
       Employer::create(['user_id'=>$user->id]);
       return redirect ('login')->with('success','Registration done successfully');

    }


    public function edit()
    {
        $user_id = Auth::User()->id;
        $employer = User::findOrFail($user_id);
        $recruiter = Employer::where('user_id',$user_id)->get()->first();
        $countries = DB::table("countries")->pluck("name","id");
        return view ('employer.edit-profile', compact('employer','countries','recruiter'));
    }

    public function update()
    {
        $user_id = Auth::User()->id;
        $data = request()->validate([
            'first-name'=> 'required|string|min:1',
            'last-name'=>'required|string',
            'phone'=>'required',
            'position'=>'required',
            'country'=>'required',
            'state'=>'required',
            'city'=>'required',
            'key-skill'=>'required',
            'personal-experience'=>'required',
        ]);
        if(request()->hasFile('profile_pic'))
        {
            $photo = request()->validate([
                'profile_pic' => 'required|image|mimes:jpg,png,jpeg|max:2048',

            ]);
            //deleting the old picture from the folder
            $current_photo = Employer::where('user_id',$user_id)->get()->first();
            $current_photo_name = $current_photo->photo;
            $current_user_photo = public_path().'/uploads/profile/'.$current_photo_name;
            if(!($current_photo_name)== null){
            unlink($current_user_photo);
            }
            //uploading the new picture to the folder
            $photo = request()->file('profile_pic');
            $image_extension = $photo->getClientOriginalExtension();
            $new_image_name = time().'.'.$image_extension;
            $photo->move('uploads/profile',$new_image_name);
            Employer::where('user_id',$user_id)->update([
                'photo' => $new_image_name

            ]);
        }
        User::findOrFail($user_id)->update([
            'firstname'=>$data['first-name'],
            'lastname'=>$data['last-name'],
            'phone'=>$data['phone'],

        ]);

        if(is_numeric($data['country']) || is_numeric($data['state']) || is_numeric($data['city']))
        {
            Employer::where('user_id', $user_id)->update([

                'position'=>$data['position'],
                'key_skill'=>$data['key-skill'],
                'personal_experience'=>$data['personal-experience'],
                'country'=>getCountryName($data['country']),
                'state'=>getStateName($data['state']),
                'city'=>getCityName($data['city']),
            ]); 

        }
        else{
            Employer::where('user_id', $user_id)->update([
                'position'=>$data['position'],
                'key_skill'=>$data['key-skill'],
                'personal_experience'=>$data['personal-experience'],
                'country'=>($data['country']),
                'state'=>($data['state']),
                'city'=>($data['city']),
            ]);
                
        }
        return redirect()->back()->with('success','success');
        
    }


    public function dashboard()
    {
        $candidates= User::orderBy('id','DESC')->where('user_type','seeker')->take(5);

        return view ('employer.dashboard');
    }



  

    public function view_candidate()
    {
        $candidates= User::orderBy('id','DESC')->where('user_type','seeker')->inRandomOrder()->paginate(10);
        return view ('employer.view-candidate',compact('candidates'));
    }

    public function manage_job()
    {
        $myjobs = Job::where('user_id', Auth::User()->id)->get(); 
        return view ('employer.manage-job', compact('myjobs'));
    }

    public function message()
    {
        return view ('employer.message');
    }

    public function transaction()
    {
        return view ('employer.transaction');
    }

    public function change_password()
    {
        return view ('employer.change-password');

    }
    
   
    public function create()
    {

    }

 
 



    

 
  
}
