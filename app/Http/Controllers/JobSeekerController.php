<?php

namespace App\Http\Controllers;

use App\Applied_job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\User;
use App\Profile;
use App\Logs;
use App\Education;
use App\Experience;
use App\Http\Requests\passwordChangeRequest;
use App\Http\Requests\seekerStoreRequest;
use App\Http\Requests\seekerUpdateRequest;
use App\Skills;
use App\Job;


function country()
{
    $countries = DB::table("countries")->pluck("name","id");
    return $countries;
}

class JobSeekerController extends Controller
{

    public function __construct()
    {
        return $this->middleware('Seeker',['except'=>array('index','candidate','candidate_detail','store','loadCandidates')]);
    }


    public function index()
    {
       
        return view('auth.seeker');
    }


    public function candidate()
    {
        
        return view ('candidate.index');

    }

    public function loadCandidates(){
        $candidates= User::with('profile')->orderBy('id','DESC')->where('user_type','seeker')->inRandomOrder()->paginate(10);
        return response()->json($candidates);
    }


        public function dashboard()
    {
       
       // toast('success','welcome '.$user_name)->autoClose(5000)->position('bottom-end');
        //toast('welcome '.$user_name,'success')->position('bottom-end');
     
        return view ('candidate.dashboard');
    }

    public function create_resume()
    {
        $countries = DB::table("countries")->pluck("name","id");
        return view ('candidate.add-skill', compact('countries'));
    
    }

    public function create_edit()
    {
        $countries = DB::table("countries")->pluck("name","id");
        $Candidate = Auth::User();
       
         return view ('candidate.edit-profile', compact('countries','Candidate'));
    }

    public function view_my_profile()
    {
       
        $Candidate = Auth::User();
        $Educations = Education::where('user_id',Auth::User()->id)->get();
        $Experiences = Experience::where('user_id', Auth::User()->id)->get();
        $education_exist = Education::where('user_id',Auth::User()->id)->exists();
        $experience_exist = Experience::where('user_id', Auth::User()->id)->exists();
        $skills = Skills::where('user_id', Auth::User()->id)->get();
        $skill_exist = Skills::where('user_id', Auth::User()->id)->exists();
        $highest_degree = Education::orderBy('id','DESC')->where('user_id', $Candidate->id)->get()->first();
        $countries= country();
    // return $highest_degree;
        return view ('candidate.candidate-profile', compact('Candidate','countries','Educations','education_exist','experience_exist','Experiences','skills','skill_exist','highest_degree'));

    }


    public function candidate_detail($id)
    {

        $Candidate = User::findOrFail($id);
        $Educations =  Education::where('user_id', $Candidate->id)->exists();
        $Education = Education::where('user_id', $Candidate->id)->latest()->first();
        $Experience = Experience::where('user_id', $Candidate->id)->exists();
        $skill_exist = Skills::where('user_id', $Candidate->id)->exists();
        $skills = Skills::where('user_id', $Candidate->id)->get();
        return view ('candidate.candidate-details', compact('Candidate','Education','Experience','Educations','skills','skill_exist'));

    }


    public function change_password()
    {
        return view ('candidate.change-password');
    }

    public function passwordChanged(passwordChangeRequest $request)
    {

        $user =  User::where('id', Auth::User()->id)->first();
        $current_password = $user->password;
        $input_password =((request('current-password')));   
        
      if(Hash::check($input_password, $current_password))
      {
         User::where('id', $user->id)->update(['password'=>bcrypt($input_password)]);
         return redirect()->back()->with('successMsg', 'Password has been updated successfully!');
      }else{
          return redirect()->back()->with('errorMsg','Password entered did not match ');
      }
        
    }



    public function applied()
    {
  
        $jobs = Auth::User()->applied;
        return view ('candidate.applied', compact('jobs'));

       
    }



    public function bookmarked()
    {
        $jobs = Auth::User()->favourites;
        return view ('candidate.bookmarked',compact('jobs'));
        
    } 



    public function messages()
    {
        return view ('candidate.message');
    }



    public function transaction()
    {
        return view ('candidate.transaction');
    }

   

    //Registration over!!!
    public function store(seekerStoreRequest $request)
    {

    //    dd(request()->server('HTTP_USER_AGENT')) ;
        $user= User::create([
            'firstname'=>$request->input('firstname'),
            'lastname'=>$request->input('lastname'),
            'email'=>$request->input('email'),
            'password'=>bcrypt(($request->input('password'))),
            'phone'=>$request->input('phone'),
            'user_type'=>'seeker'

       ]);

        //user profile creation
        Profile::create([

            'user_id'=>$user->id,
            'gender'=>request('gender')
       ]);
       Logs::create([
        'user_id'=>$user->id
    ]);

    return redirect('login')->with('success','Account created successfully!');
    }
   



    public function update(seekerUpdateRequest $request)
    {
      
        if(request()->hasFile('profile_pic'))
        {

                $photo = request()->validate([
                    'profile_pic' => 'required|image|mimes:jpg,png,jpeg|max:2048',
                ]);

              
                // deleting the old picture from the folder
                $current_photo = Profile::where('user_id',Auth::User()->id)->first();
                $current_photo_name = $current_photo->avatar;
                $current_user_photo = public_path().'/uploads/profile/'.$current_photo_name;
                if(!$current_photo_name == null)
                {
                    unlink($current_user_photo);
                }
                //uploading the new picture to the folder
                $photo = request()->file('profile_pic');
                $image_extension = $photo->getClientOriginalExtension();
                $new_image_name = time().'.'.$image_extension;
                $photo->move('uploads/profile',$new_image_name);
                profile::where('user_id', Auth::User()->id)->update([
                    'avatar' => $new_image_name
                ]);

                

        }
       

        User::where('id',Auth::User()->id)->update([
            'firstname'=>$request->input('firstname'),
            'lastname'=>$request->input('lastname'),
            'phone'=>$request->input('phone'),

        ]);

        if(is_numeric($request->input('Country'))==1 || is_numeric($request->input('State')) || is_numeric($request->input('City')))
        {
            Profile::where('user_id',Auth::User()->id)->update([

                'country'=>getCountryName($request->input('Country')),
                'State'=>getStateName($request->input('State')),
                'City'=>getCityName($request->input('City')),
                'address'=>$request->input('address'),
                'job_type_preferred'=>$request->input('preferred-job'),
                'expected_salary_from'=>$request->input('salary-range-from'),
                'expected_salary_to'=>$request->input('salary-range-to'),
                'about_me'=>$request->input('about-me'),
                'date_of_birth'=>$request->input('date_of_birth'),
                
    
            ]);    

        }
        else{
            Profile::where('user_id',Auth::User()->id)->update([

                'country'=>$request->input('Country'),
                'State'=>$request->input('State'),
                'City'=>$request->input('City'),
                'address'=>$request->input('address'),
                'job_type_preferred'=>$request->input('preferred-job'),
                'expected_salary_from'=>$request->input('salary-range-from'),
                'expected_salary_to'=>$request->input('salary-range-to'),
                'about_me'=>$request->input('about-me'),
                'date_of_birth'=>$request->input('date_of_birth'),
            ]);
                
        }

        return redirect()->back()->with('success','success'); 
      
        
    }

  


    public function destroy($id)
    {
        User::findOrFail($id)->delete();

    }
}
