<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Http\Requests\companyUpadteRequest;
use App\Http\Requests\companyUpdateRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function __construct()
    {
        return $this->middleware('Employer',['except'=>array('index','show')]);
    }

       
    public function index()
    {
        $companies=Company::paginate(10);
        return view ('company.index',compact('companies'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

 
    public function show($id, $company)
    {
        $company = Company::findOrFail($id);
        $companyCount = $company->count();
        $company_job_pagination = $company->jobs()->paginate(5);
        return view('company.company-detail', compact('company','companyCount','company_job_pagination'));
    }

 
    public function edit()
    {
        $user_id = Auth::User()->id;
        //$companies = Company::where('user_id', $user_id)->get();
        $company = Company::where('user_id',$user_id)->get()->first();

    
        $countries = DB::table("countries")->pluck("name","id");
        return view ('employer.my-company', compact('company','countries'));
    }


    public function update(companyUpdateRequest $request)
    {
            $user_id =Auth::User()->id;
             //if($request->hasFile('logo'))
            if($request->hasFile('logo'))
                {
                   
                $logo = request()->validate(['logo' => 'required|image|mimes:jpg,png,jpeg|max:2048']);
                //deleting the old picture from the folder
                $current_photo = Company::findOrFail($user_id);
                $current_photo_name = $current_photo->logo;
                $current_user_photo = public_path().'/uploads/logo/'.$current_photo_name;
                if(!$current_photo_name==null)
                {
                    unlink($current_user_photo);
                }
                //uploading the new picture to the folder
                $logo = request()->file('logo');
                $image_extension = $logo->getClientOriginalExtension();
                $new_image_name = time().'.'.$image_extension;
                $logo->move('uploads/logo',$new_image_name);
                Company::where('user_id', Auth::User()->id)->update([
                    'logo' => $new_image_name

            ]);

        }

        if(is_numeric($request->input('country')) || is_numeric($request->input('state')) || is_numeric($request->input('city')))
        {
            Company::where('user_id',Auth::User()->id)->update([
                'company_name'=>$request->input('company-name'),
                'phone'=>$request->input('contact'),
                'email'=>$request->input('email'),
                'country'=>getCountryName($request->input('country')),
                'state'=>getStateName($request->input('state')),
                'city'=>getCityName($request->input('city')),
                'description'=>$request->input('description'),
    
            ]);

        }else{
            Company::where('user_id',Auth::User()->id)->update([
                'company_name'=>$request->input('company-name'),
                'phone'=>$request->input('contact'),
                'email'=>$request->input('email'),
                'country'=>($request->input('country')),
                'State'=>($request->input('state')),
                'City'=>($request->input('city')),
                'description'=>$request->input('description'),
            ]);

        }

        return redirect()->back()->with('success','success');

        
    }


    public function destroy($id)
    {
        //
    }
}
