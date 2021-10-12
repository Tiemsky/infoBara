<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use App\Logs;

class LoginController extends Controller
{
    public function index()
    {
        return view ('auth.login');
    }

    public function auth(Request $request)
    {
            $request->validate([

                'email'=>'required',
                'password'=>'required'
            ]);
    
            $email =  $request->input('email');
            $phone = $request->input('email');
            $password= $request->input('password');
            if(Auth::attempt(['email'=>$email, 'password'=>$password,'user_type'=>'seeker' ]) || Auth::attempt(['Phone' => $phone,
            'Password' => $password, 'user_type'=>'seeker' ]) )
                {
        
                        $user_id = Auth::User()->id;
                        Logs::where('user_id',$user_id)->update([
                        'last_login_date' => Carbon::now()->toDateTimeString(),
                        'user_agent'=>request()->server('HTTP_USER_AGENT'),
                        'ip_address' => $request->getClientIp()
                    ]);

                   // $user_name = Auth::User()->lastname;
                    
                    
                return redirect()->intended(route('candidate-dashboard'));
   
        
                }
            elseif (Auth::attempt(['email'=>$email, 'password'=>$password, 'user_type'=>'employer']) || Auth::attempt(['Phone' => $phone,
            'password' => $password, 'user_type'=>'employer']) )
                {
        
                        $user_id = Auth::User()->id;
                        Logs::where('user_id',$user_id)->update([
                        'last_login_date' => Carbon::now()->toDateTimeString(),
                        'user_agent'=>request()->server('HTTP_USER_AGENT'),
                        'ip_address' => $request->getClientIp()
                    ]);
        
                    return redirect()->intended(route('employer-dashboard'));
        
                }
            else
                {
                    return redirect()->back()->withInput($request->only('email', 'remember'), 'invalid','invalid credentials');
                    
                }
    
        }

        public function reset_password()
        {
            return view ('auth.reset-password');
        }



    }

    


  

   


