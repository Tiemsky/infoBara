<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogCategory;
use Illuminate\Support\Str;
use App\Job;

class BlogCategoryController extends Controller
{
    private function uniqueSlug($value)
    {
        
        $slug = Str::slug(strtolower($value), '-');
        $count = BlogCategory::where('slug', 'LIKE', "{$slug}%")->count();
        $newCount = $count > 0 ? ++$count : '';
        return $newCount > 0 ? "$slug-$newCount" : $slug;

    }
    public function index()
    {
        return view ('blog.blog-categories');
    }
    public function loader()
    {
        $categories =  BlogCategory::all();
        return response()->json($categories);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data= $request->validate(['name'=>'required|min:3']);
       BlogCategory::create([
           'name'=>$data['name'],
           'slug'=>$this->uniqueSlug($data['name'])
       ]);

       

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = BlogCategory::findOrFail($id);
        return response()->json($category);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data= $request->validate(['name'=>'required|min:3']);
         BlogCategory::findOrFail($id)->update([
            'name' => $data['name']
        ]);
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BlogCategory::findOrFail($id)->delete();
    }
}
