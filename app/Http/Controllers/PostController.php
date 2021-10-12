<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
   
    {
        return view ('blog.index');
    }
    public function create()

    {
        return view ('blog.create');
    }

    public function store(Request $request)
    {

        $data=$request->all();

        return $data;
    }


    public function show()
    {
        return view ('blog.show');
    }

    public function edit($id)
    {
        //
    }

 
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
