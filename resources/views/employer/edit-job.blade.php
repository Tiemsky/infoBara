@extends('layouts.employer')
@section('content')

<div class="dashboard">
    <div class="container-fluid">
        <div class="row">

<div class="dashboard-content">
    <div class="dashboard-header clearfix">
        <div class="row">
            <div class="col-sm-12 col-md-6"><h4>Post a Job</h4></div>
            <div class="col-sm-12 col-md-6">
                <div class="breadcrumb-nav">
                    <ul>
                        <li>
                            <a href="{{ route('welcome') }}">Index</a>
                        </li>
                        <li>
                            <a href="{{ route('employer-dashboard') }}">Dashboard</a>
                        </li>
                        <li class="active">Post a Job</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="submit-address dashboard-list">
        <form method="POST" action="">
            @csrf
            <h2 class="bg-grea-3 heading">Basic Information</h2>
            <div class="search-contents-sidebar">
                <div class="row pad-20">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Job Title</label>
                            <input type="text" class="input-text" name="job-title" placeholder="Job Title" value="{{ $job->title }}">
                        </div>
                        @error('job-title')
                            <span class="" role="alert">
                                <p class="text-danger" >{{$message}}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Job Type</label>
                            <select class="input-text" name="job-type" value="{{ old('job-type') }}">
                                <option value="{{ $job->type }}" selected>{{ $job->type }}</option>
                                <option value="Full-Time">Full time</option>
                                <option value="Part-Time">Part time</option>
                                <option value="Freelance">Freelance</option>
                                <option value="Temporary">Temporary</option>
                            </select>
                        </div>
                        @error('job-type')
                            <span class="" role="alert">
                                <p class="text-danger" >{{$message}}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Job Category</label>
                            <select class="input-text" name="job-category">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id==$job->category_id ?'selected':''}}>{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                            @error('job-category')
                                <span class="" role="alert">
                                    <p class="text-danger" >{{$message}}</p>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Position</label>
                            <input type="text" class="input-text" name="position" placeholder="Position (Ex: Senior Developper)" value="{{ $job->position }}">
                        </div>
                        @error('position')
                            <span class="" role="alert">
                                <p class="text-danger" >{{$message}}</p>
                            </span>
                        @enderror
                    </div>
                  
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Minimum Salary</label>
                            <select class="input-text" name="MinSalary">
                                <option value="{{ $job->min_salary }}" selected>{{ $job->min_salary }}</option>
                                <option value="10K">10K</option>
                                <option value="20K">20K</option>
                                <option value="30K">30K</option>
                                <option value="40K">40K</option>
                                <option value="50K">50K</option>
                                <option value="60K">60K</option>
                                <option value="70K">70K</option>
                                <option value="80K">80K</option>
                                <option value="90K">90K</option>
                                <option value="100K">100K</option>
                                <option value="150K">150K</option>
                                <option value="200K">200K</option>
                                <option value="250K">250K</option>
                                <option value="300K">300K</option>
                                <option value="350K">350K</option>
                                <option value="400K">400K</option>
                                <option value="450K">450K</option>
                                <option value="500K">500K</option>
                                <option value="600K">600K</option>
                                <option value="700K">700K</option>
                                <option value="800K">800K</option>
                                <option value="900K">900K</option>
                                <option value="1000K">1000K</option>
                                <option value="1000K+">1000K+</option>
                                
                            </select>
                        </div>
                        @error('MinSalary')
                            <span class="" role="alert">
                                <p class="text-danger" >{{$message}}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Maximum Salary</label>
                            <select class="input-text" name="MaxSalary">
                                <option value="{{ $job->max_salary }}" selected>{{ $job->max_salary }}</option>
                                <option value="10K">10K</option>
                                <option value="20K">20K</option>
                                <option value="30K">30K</option>
                                <option value="40K">40K</option>
                                <option value="50K">50K</option>
                                <option value="60K">60K</option>
                                <option value="70K">70K</option>
                                <option value="80K">80K</option>
                                <option value="90K">90K</option>
                                <option value="100K">100K</option>
                                <option value="150K">150K</option>
                                <option value="200K">200K</option>
                                <option value="250K">250K</option>
                                <option value="300K">300K</option>
                                <option value="350K">350K</option>
                                <option value="400K">400K</option>
                                <option value="450K">450K</option>
                                <option value="500K">500K</option>
                                <option value="600K">600K</option>
                                <option value="700K">700K</option>
                                <option value="800K">800K</option>
                                <option value="900K">900K</option>
                                <option value="1000K">1000K</option>
                                <option value="1000K+">1000K+</option>
                            </select>
                        </div>
                        @error('MaxSalary')
                            <span class="" role="alert">
                                <p class="text-danger" >{{$message}}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Prefered Gender</label>
                            <select class="input-text" name="Gender">
                                <option value="{{ $job->preferred_gender }}" selected>{{ $job->preferred_gender }}</option>
                                <option value="Male" >Male</option>
                                <option value="Female">Female</option>
                                <option value="Male/Female">Any</option>
                            </select>
                            @error('Gender')
                                <span class="" role="alert">
                                    <p class="text-danger" >{{$message}}</p>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Qualification</label>
                            <select class="input-text" name="Qualification">
                                <option value="{{ $job->education }}" selected>{{ $job->education }}</option>
                                <option value="CEP">CEP</option>
                                <option value="BEPC">BEPC</option>
                                <option value="BAC">BAC</option>
                                <option value="BAC+1">BAC+1</option>
                                <option value="BAC+2">BAC+2</option>
                                <option value="BAC+3">BAC+3</option>
                                <option value="BAC+4">BAC+4</option>
                                <option value="BAC+5">BAC+5</option>
                                <option  value="Autre">Autre</option>

                            </select>
                        </div>
                        @error('Qualification')
                            <span class="" role="alert">
                                <p class="text-danger" >{{$message}}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Country</label>
                                <select id="country" class="input-text" name="country">
                                    <option value="{{ $job->country }}">{{ $job->country }}</option>
                                    @foreach ($countries as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                  
                                </select>
                            </div>
                        </div>
                        @error('country')
                            <span class="" role="alert">
                                <p class="text-danger" >{{$message}}</p>
                            </span>
                        @enderror
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <div class="form-group">
                                <label>State</label>
                                <select id="state" class="input-text" name="state">
                                    <option value="{{ $job->state }}">{{ $job->state }}</option>
                                   
                                </select>
                            </div>
                        </div>
                        @error('state')
                            <span class="" role="alert">
                                <p class="text-danger" >{{$message}}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <div class="form-group">
                                <label>City</label>
                                <select id="city" class="input-text" name="city">
            
                                    <option value="{{ $job->city }}">{{ $job->city }}</option>
                                    
                                </select>
                            </div>
                        </div>
                        @error('city')
                            <span class="" role="alert">
                                <p class="text-danger" >{{$message}}</p>
                            </span>
                        @enderror
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Apply Before</label>
                           <input class="input-text" type="text" name="deadline" id="datepicker" value="{{ $job->deadline }}">
                        </div>
                        @error('deadline')
                            <span class="" role="alert">
                                <p class="text-danger" >{{$message}}</p>
                            </span>
                        @enderror
                    </div>
                  
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Min-Experience</label>
                            <select class="input-text" name="MinExperience">
                                <option value="{{ $job->min_experience }}" selected>{{ $job->min_experience }} Year</option>
                                <option value="1">1 Year</option>
                                <option value="2">2 Year</option>
                                <option value="3">3 Year</option>
                                <option value="4">4 Year</option>
                                <option value="5">5 Year</option>
                                <option value="6">6 Year</option>
                                <option value="7">7 Year</option>
                                <option value="8">8 Year</option>
                                <option value="9">9 Year</option>
                                <option value="10">10 Year</option>
                                <option value="10+">10+ Year</option>
                            </select>
                        </div>
                        @error('MinExperience')
                            <span class="" role="alert">
                                <p class="text-danger" >{{$message}}</p>
                            </span>
                        @enderror
                    </div>

                  

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Max-Experience</label>
                            <select class="input-text" name="MaxExperience">
                                <option value="{{ $job->max_experience }}" selected>{{ $job->max_experience }} Year</option>
                                <option value="1">1 Year</option>
                                <option value="2">2 Year</option>
                                <option value="3">3 Year</option>
                                <option value="4">4 Year</option>
                                <option value="5">5 Year</option>
                                <option value="6">6 Year</option>
                                <option value="7">7 Year</option>
                                <option value="8">8 Year</option>
                                <option value="9">9 Year</option>
                                <option value="10">10 Year</option>
                                <option value="10+">10+ Year</option>
                            </select>
                        </div>
                    </div>
                    @error('MaxExperience')
                        <span class="" role="alert">
                            <p class="text-danger" >{{$message}}</p>
                        </span>
                    @enderror
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Role</label>
                            <textarea class="input-text" name="role" >{{ $job->role }}</textarea>
                        </div>
                        @error('role')
                        <span class="" role="alert">
                            <p class="text-danger" >{{$message}}</p>
                        </span>
                    @enderror
                    </div>
                   
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Job Description</label>
                            <textarea class="input-text" name="job_description" >{{ $job->description }}</textarea>
                        </div>
                    </div>
                    @error('job_description')
                        <span class="" role="alert">
                            <p class="text-danger" >{{$message}}</p>
                        </span>
                    @enderror
                    </div>
                    <div class="col-lg-6">
                        <div class="post-btn">
                            <input type="submit" class="btn btn-md button-theme" value="Update">
                                
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <p class="sub-banner-2 text-center">© 2020 Theme Vessel. All Rights Reserved.</p>
</div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
$( "#datepicker" ).datepicker({ dateFormat: 'dd-mm-yy' }).val();
</script>
@endsection
@section('script')
<script>
    tinymce.init({
        selector: 'textarea',
        Plugins:'link code',
        menubar:'format',
    
      });
</script>
    
@endsection