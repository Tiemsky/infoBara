<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class Job extends Model
{

    protected $guarded = [];


    public function getCountryAttribute($value)
    {
        return Str::slug($value, '-');
    }


    public function company()
    {
        return $this->belongsTo('App\Company');
    }
    public function users()
    {
        return $this->belongsToMany(User::class,'applied_jobs','job_id','user_id')->withTimestamps();
    }

    public function ApplicationChecker()
    {
        return DB::table('applied_jobs')->where('user_id',Auth::User()->id)->where('job_id',$this->id)->exists();
    }

    public function favourites()
    {
        return $this->belongsToMany(User::class,'favourite_jobs','job_id','user_id')->withTimestamps();
    }
    public function isJobSavedChecker()
    {
        return DB::table('favourite_jobs')->where('user_id',Auth::User()->id)->where('job_id',$this->id)->exists();
    }
}
