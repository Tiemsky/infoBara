<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Job;

class CategoryController extends Controller
{
    public function JobCategory($name)
    {
        //fetching the category id which match with name passed in the parameter from the category table
        $category = Category::where('category_name', $name)->first();
        //once we get the name we select now the id based on the name from category table!
        $jobs = Job::where('category_id',$category->id)->paginate(10);
        return view ('job.job-by-category', compact('jobs'));
        
        

    }
}
