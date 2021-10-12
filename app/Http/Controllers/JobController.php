<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Category;
use App\Company;
use Illuminate\Support\Str;
use App\Http\Requests\jobValidation;
use App\Http\Requests\jobValidationRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Applied_job;


class JobController extends Controller
{

    public function __construct()
    {
        return $this->middleware('Employer',['except'=>array('search','index','show','applicationCancellation','apply')]);
        
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $location = $request->input('location');

        if($keyword && $location)
        {
             $jobs = Job::latest()
                        ->where('title' ,'LIKE', "%{$keyword}%")
                        ->orWhere('description', 'LIKE', "%{$keyword}%")
                        ->where('country', $location)
                        ->paginate(10);
                 
                        return view('job.job-by-category' ,compact('jobs'));
        }elseif ($location) 
            {
                $jobs = Job::latest()
                ->where('country', $location)
                ->paginate(10);
                
                return view('job.job-by-category' ,compact('jobs'));
        
            }else{
            $jobs = Job::latest()
            ->paginate(10);
            return view('job.job-by-category' ,compact('jobs'));
            
        }
    }


    private function uniqueSlug($value)
    {
        
        $slug = Str::slug(strtolower($value), '-');
        $count = Job::where('slug', 'LIKE', "{$slug}%")->count();
        $newCount = $count > 0 ? ++$count : '';
        return $newCount > 0 ? "$slug-$newCount" : $slug;

    }

    public function index()
    {

        $jobs = Job::latest()->paginate(10);
        $job_location = DB::table('countries')->get();
        $job_type = Job::distinct()->get('type');
        $job_category = Category::distinct()->get('category_name');
        return view ('job.index',compact('jobs','job_type','job_location','job_category'));
       
    }


    public function create()

    {
            $countries = DB::table("countries")->pluck("name","id");
            $categories = Category::all();
           
            return view ('employer.post-job', compact('countries','categories'));
         
    }


    public function store(jobValidationRequest $request ){
        
        $user_id = Auth::User()->id;
        $company = Company::where('user_id', $user_id)->first();
        $company_id = $company->id;

        $job = Job::create([
            'user_id'=>$user_id,
            'company_id'=>$company_id,
            'category_id'=>$request->input('job-category'),
            'title'=>$request->input('job-title'),
            'slug'=>$this->uniqueSlug($request->input('job-title')),
            'description'=>$request->input('job_description'),
            'role'=>$request->input('role'),
            'type'=>$request->input('job-type'),
            'position'=>$request->input('position'),
            'preferred_gender'=>$request->input('Gender'),
            'min_salary'=>$request->input('MinSalary'),
            'max_salary'=>$request->input('MaxSalary'),
            'education'=>$request->input('Qualification'),
            'min_experience'=>$request->input('MinExperience'),
            'max_experience'=>$request->input('MaxExperience'),
            'country'=>getCountryName($request->input('country')),
            'State'=>getStateName($request->input('state')),
            'City'=>getCityName($request->input('city')),
            'status'=>1,
            'deadline'=>$request->input('deadline')


        ]);

        return redirect()->back()->with('success','success');
        
    }

    public function show($country, $slug)
    {
        $job = Job::where('slug', $slug)->get()->first();
        $similar_job = Job::latest()->where('category_id',$job->category_id)
                            ->where('id','!=',$job->id)
                            ->inRandomOrder()
                            ->limit(3)
                            ->get();
                            
      
        return view('job.job-detail', compact('job','similar_job'));
        
        
    }


    public function edit($id)
    {
        $categories = Category::all();
        $job = Job::findOrFail($id);
        $countries = DB::table("countries")->pluck("name","id");
        return view ('employer.edit-job', compact('job', 'categories', 'countries'));
    }



    public function update($id, jobValidationRequest $request)
    {

        if(is_numeric($request->input('country'))==1 || is_numeric($request->input('state')) || is_numeric($request->input('city')))
        {
            $job = Job::findOrFail($id)
            ->update([
                'category_id'=>$request->input('job-category'),
                'title'=>$request->input('job-title'),
                'slug'=>$request->input('job-title'),
                'description'=>$request->input('job_description'),
                'role'=>$request->input('role'),
                'type'=>$request->input('job-type'),
                'position'=>$request->input('position'),
                'preferred_gender'=>$request->input('Gender'),
                'min_salary'=>$request->input('MinSalary'),
                'max_salary'=>$request->input('MaxSalary'),
                'education'=>$request->input('Qualification'),
                'min_experience'=>$request->input('MinExperience'),
                'max_experience'=>$request->input('MaxExperience'),
                'country'=>getCountryName($request->input('country')),
                'State'=>getStateName($request->input('state')),
                'City'=>getCityName($request->input('city')),
                'status'=>1,
                'deadline'=>$request->input('deadline')
            ]);

        }else{
            $job = Job::findOrFail($id)
            ->update([
                'category_id'=>$request->input('job-category'),
                'title'=>$request->input('job-title'),
                'slug'=>$request->input('job-title'),
                'description'=>$request->input('job_description'),
                'role'=>$request->input('role'),
                'type'=>$request->input('job-type'),
                'position'=>$request->input('position'),
                'preferred_gender'=>$request->input('Gender'),
                'min_salary'=>$request->input('MinSalary'),
                'max_salary'=>$request->input('MaxSalary'),
                'education'=>$request->input('Qualification'),
                'min_experience'=>$request->input('MinExperience'),
                'max_experience'=>$request->input('MaxExperience'),
                'country'=>$request->input('country'),
                'State'=>$request->input('state'),
                'City'=>$request->input('city'),
                'status'=>1,
                'deadline'=>$request->input('deadline')
            ]);

        }
        return redirect()->back()->with('success');
    }


    public function myJob(){
        return view ('job.my-job');
    }

 

    public function apply($id)
    {
        $jobId = Job::findOrFail($id);
        $jobId->users()->attach((Auth::User()->id));
        return redirect()->back()->with('success','application sent successfully');
    } 


    public function applicationCancellation($id)
    {
        $jobId = Job::findOrFail($id);
        $jobId->users()->detach((Auth::User()->id));
        return redirect()->back()->with('success','application sent successfully');
    } 


    public function applicants($id)
    {
        $job = Job::findOrFail($id);
        $applicants = Job::has('users')
                    ->where('user_id', Auth::User()->id)
                    ->where('id',$id)
                    ->get();
                
            
       return view ('employer.applicants', compact('job', 'applicants'));
        
        
    }

    public function destroy($id)
    {
        Job::findOrFail($id)->delete();
        return redirect()->back()->with('');
    }
}
