@extends('layouts.candidate')
@section('content')

<div class="dashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="dashboard-content">
                <div class="dashboard-header clearfix">
                    <div class="row">
                        <div class="col-sm-12 col-md-6"><h4>Build My Resume</h4></div>
                        <div class="col-sm-12 col-md-6">
                            <div class="breadcrumb-nav">
                                <ul>
                                    <li>
                                        <a href="{{ route('welcome') }}">Home Page</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('candidate-dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="active">Update My Skill</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="submit-address dashboard-list">

                    <form id="skill" action="{{ route('update-skill',[$skill->id]) }}" method="POST">
                        @csrf
                        <h2 class="bg-grea-3 heading">Skills & Portfolio</h2>
                   
                        <div class="search-form initial-skill">
                            <div class="show"></div>
                            @if (session('status'))
                                <p class="alert alert-success flash-message"> {{ session('status') }}</p>
                             @endif
                            <div class="row pad-20 ">                                                                                                
                                
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Skills</label>
                                        <input type="text" class="input-text" name="skill" value="{{ $skill->skill_name }}" required >
                                    </div>
                                    @error('skill')
                                    <span class="" role="alert">
                                    <p class="text-danger" >{{$message}}</p>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Percentage</label>
                                        <select id="percentage" class="input-text" name="percentage" required>
                                            <option value="{{ $skill->value }}">{{ $skill->value }}%</option>
                        
                                            <option value="40">40%</option>
                                            <option value="60">60%</option>
                                            <option value="80">80%</option>
                                            <option value="100">100%</option>
                                        </select>
                                    </div>
                                    @error('percentage')
                                    <span class="" role="alert">
                                    <p class="text-danger" >{{$message}}</p>
                                    </span>
                                    @enderror
                                
                                </div>
                            </div>
                        </div>

                       
                        <div class="col-lg-6">
                            <div class="post-btn">
                                <button  class="btn btn-md button-theme" type="submit">Update</button>
                            </div>
                        </div>
                    </form>
                 

                  


                 
                
                </div>
                <p class="sub-banner-2 text-center">© 2020 Theme Vessel. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>

@endsection


