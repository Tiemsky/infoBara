@extends('layouts.candidate')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('content')
<div class="dashboard">
     
     

    <div class="container-fluid">
        <div class="row">
            <div class="dashboard-content">
                <div class="content-area5">
                    <div class="dashboard-header clearfix">
                        <div class="row">
                            <div class="col-lg-12 col-md-6"><h4>Edit Profile</h4></div>
                            <div class="col-lg-12 col-md-6">
                                <div class="breadcrumb-nav">
                                    <ul>
                                        <li>
                                            <a href="{{ route('welcome') }}">Index</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('candidate-dashboard') }}">Dashboard</a>
                                        </li>
                                        <li class="active">Edit Profile</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <!-- Main item start -->
                            <div class="main-item">
                               @if ($Candidate->profile->avatar == null)
                                    <div class="company-logo">
                                         <img src="{{ asset('uploads/profile/default.jpg') }}" alt="avatar">
                                     </div>
                               @else
                                    <div class="company-logo">
                                        <img src="{{ asset('uploads/profile/'.$Candidate->profile->avatar) }}" alt="avatar">
                                    </div>
                                   
                               @endif
                                <div class="description">
                                    <h5 class="title"><a href="#">{{ Auth::User()->firstname }} {{Auth::User()->lastname }}</a></h5>
                                    <div class="candidate-listing-footer">
                                        <ul>
                                            <li><i class="flaticon-work"></i> Graphic Designer</li>
                                            <li><i class="flaticon-pin"></i> {{ $Candidate->profile->country==null?'No Places/Location To Show' : $Candidate->profile->country  }}</li>
                                            <li><i class=""></i> {{ $Candidate->profile->state}}</li>
                                            <li><i class=""></i> {{ $Candidate->profile->city}}</li>
                                            <li><i class="flaticon-mail"></i> {{ Auth::User()->email }}</li>
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
            
                            <hr class="hr-boder clearfix">
                            <!-- about me start -->
                            <div class="about-me mb-40">
                                <h3 class="heading-2">About Me</h3>
                                <p>{!!$Candidate->profile->about_me==null? 'No information about you or carreer' :$Candidate->profile->about_me !!}</p>
                            </div>
                             <!-- about me ends -->

                            <!-- Education start-->
                            <div class="education mb-50">
                                    <h3 class="heading-2">Education</h3>
                                    @if (session('status'))
                                        <p class="alert-success flash-message"> {{ session('status') }}</p>
                                    @endif

                                    <!-- Checkin if the user has Education -->
                                    @if (!$education_exist)
                                        <div class="education-box">
                                            <div class="icon">
                                                <i class="flaticon-student"></i>
                                            </div>
                                            <div class="employer-info">
                                                <h5>No School/University to show</h5>
                                                <i class="fa fa-plus-circle" aria-hidden="true"> <a class="text-primary" data-toggle="modal" data-target="#addEducation">Add Now</a></i>
                                            </div>
                                        </div>
                                    @else
                                        @foreach ($Educations as $education)
                                            <div class="education-box">
                                                <div class="icon">
                                                    <i class="flaticon-student"></i>
                                                </div>
                                                <div class="employer-info">
                                                    <h5>{{ $education->degree }}</h5>
                                                    <h6>{{ $education->years }}</h6>
                                                    <p> <i><strong>Institute Name:</strong></i> {{ $education->university }}</p>
                                                    <p><i class="flaticon-pin"></i> {{ $education->country }} - {{ $education->state }} - {{ $education->city }}</p>
                                                    <span style ='float: left; padding: 5px;'><i class="fa fa-pencil" aria-hidden="true"> <a onclick="updateEducation({{$education->id}})"  class="text-success">Edit</a></i></span>
                                                    <span style ='float: left; padding: 5px;'><i class="fa fa-trash-o" aria-hidden="true"> <button onclick="deleteEducation({{ $education->id }})" class="delete-btn" ><a>Delete</a> </button></i></span>
                                            
                                                </div>
                                            @endforeach
                                             </div>
                                            <i class="fa fa-plus-circle" aria-hidden="true"> <a class="text-primary" data-toggle="modal" data-target="#addEducation">Add More</a></i>
                                        @endif 
                            </div>
                            <!-- Education box ends-->



                            <!-- Work experiance start-->
                            <div class="work-experiance mb-50">
                                <h3 class="heading-2">Work Experiance</h3>
                                <!-- if the user has no experience we display only icon -->
                               @if (!$experience_exist)
                                    <div class="education-box">
                                        <div class="icon">
                                            <i class="flaticon-work"></i>
                                        </div>
                                        <div class="employer-info">
                                            <h5>No Work/Experience To Show</h5>
                                                <i class="fa fa-plus-circle" aria-hidden="true"> <a class="text-primary" data-toggle="modal" data-target="#exampleModalLabel" >Add Now</a></i>
                                        </div>
                                    </div>
                                   
                               @else
                               <!-- when the database isn't then all the user data and pulling it here -->
                                    @foreach ($Experiences as $experience)
                                    
                                        <div id="test" class="education-box">
                                            <div class="icon">
                                                <i class="flaticon-work"></i>
                                            </div>
                                            <div class="employer-info">
                                                <h5>Company Name: {{$experience->company_name }}</h5>
                                                <h5>Job Name: {{$experience->job_title }}</h5>
                                                <h6>{{$experience->years }}</h6>
                                                <p><i class="flaticon-pin"></i> {{ $experience->country }} - {{ $experience->state }} - {{ $experience->city }}</p>
                                                <p><i>Job Description:</i>  {{ $experience->job_description }}.</p>
                                                <span style ='float: left; padding: 5px;'><i class="fa fa-pencil" aria-hidden="true"> <a onClick="updateData({{$experience->id}})" class="text-success">Edit</a></i></span>
                                                <span style ='float: left; padding: 5px;'><i class="fa fa-trash-o" aria-hidden="true"> <button class="delete-btn" onClick="deleteData({{$experience->id}})" ><a>Delete</a> </button></i></span>
                                            </div>
                                        @endforeach
                                    </div>
                                <i class="fa fa-plus-circle" aria-hidden="true"> <a class="text-primary" data-toggle="modal" data-target="#exampleModalLabel">Add More</a></i>
                                @endif
                            </div>
                            <!-- experience form ending over here -->

                            <!-- Skill form starting over here -->
                            @if(!$skill_exist)
                           <div class="progressbar-example mb-40">
                                <h3 class="heading-2">Professional Skills</h3>
                                 <!-- if the user has no skills we display only icon -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>No Skill To Be Shown</p>
                                    </div>

                                <i class="fa fa-plus-circle" aria-hidden="true"> <a class="text-primary" href="{{ route('create-resume') }}">Add Now</a></i>
                                </div>
                           </div>
                           @else
                                <!-- Progressbar example start -->
                                <div class="progressbar-example mb-40">
                                    <h3 class="heading-2">Professional Skills</h3>
                                    @foreach ($skills as $skill)
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="progress-box">
                                                    <p class="progress-title">{{ $skill->skill_name }}</p>
                                                    <p class="progress-size">{{ $skill->value }}%</p>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{ $skill->value }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $skill->value }}%"></div>
                                                    </div>
                                                    <span style ='float: left; padding: 5px;'><i class="fa fa-pencil" aria-hidden="true"> <a href="{{ route('show-skill',[$skill->id]) }}"  class="text-success">Edit</a></i></span>
                                                <span><form action="{{ route('delete-skill',[$skill->id]) }}" method="POST"  style ='float: left; padding: 5px;'>@csrf<i class="fa fa-trash-o" aria-hidden="true"><button class="delete-btn" type="submit"><a>Delete</a> </button></i></form></span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <i class="fa fa-plus-circle" aria-hidden="true"> <a class="text-primary" href="{{ route('create-resume') }}">Add More</a></i> 
                                </div>
                            @endif
                             <!-- Skill form ends over here -->


                        <!-- Main block first row ends here!!!!!! -->
                        </div>
                   

                    <!-- Profile box over here -->
                        <div class="col-md-4 col-md-12">
                            <div class="sidebar-right-2">
                                <div class="widget">
                                    <form method="GET">
                                        <div class="form-group mb-0">
                                            <button class="search-button button-theme">Download CV </button>
                                        </div>
                                    </form>
                                </div>
                                <!-- Job overview start -->
                                <div class="job-overview widget">
                                    <h3 class="sidebar-title">Seeker Resume Overview</h3>
                                    <div class="s-border"></div>
                                    <div class="m-border"></div>
                                    <ul>
                                        <li><i class="flaticon-money"></i><h5>Salary</h5><span>{{ $Candidate->profile->expected_salary_from==null?'No Salary Set Yet' : $Candidate->profile->expected_salary_from.'-'.$Candidate->profile->expected_salary_to   }}</span></li>
                                        <li><i class="flaticon-pin"></i><h5>Location</h5><span>{{ $Candidate->profile->country==null?'No Places/Location To Show' : $Candidate->profile->country  }}</span></li>
                                        <li><i class="flaticon-woman"></i><h5>Gender</h5><span>{{ $Candidate->profile->gender==null?'No Gender Set yet' : $Candidate->profile->gender  }}</span></li>
                                        <li><i class="flaticon-work"></i><h5>Job Type</h5><span>{{ $Candidate->profile->job_type_preferred==null?'No Job Type Set Yet' : $Candidate->profile->job_type_preferred  }}</span></li>
                                        <li><i class="flaticon-patent"></i><h5>Highest Qualification</h5><span>{{$education_exist==false ? 'NO Qualification' :$highest_degree->degree  }}</span></li>
                                        <li><i class="flaticon-notepad"></i><h5>Experience</h5><span>2 to 3 year</span></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                                <!-- Quick contact start -->
                                <div class="widget-5 contact-1 quick-contact">
                                        <div class="form-group mb-0">
                                            <a href="{{ route('create-resume', [Auth::User()->id]) }}" class="btn btn-md button-theme">Edit Profile</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- Profile box over here -->
                    
                </div>
        </div>
    </div>
</div>
</div>

 {{-- Adding New Education --}}
<div class="submit-address dashboard-list">
    <div class="modal fade" id="addEducation"  tabindex="-1" role="dialog" aria-labelledby="addEducation" aria-hidden="true">
        <div class="modal-dialog " role="document">
          <div class="modal-content" >
            <div class="modal-header">
              <h5 class="modal-title" id="addEducation"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                <form id="addEducationForm" action="{{ route('save-resume') }}" method="POST">
                    @csrf
                    <h2 class="bg-grea-3 heading">Education</h2>
                    {{-- Single-Education-Form --}}
                    <div class="education-initial">
                          
                            <div class="search-form">
                                <div class="row pad-20">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Degree</label>
                                            <input type="text" class="input-text" name="degree" placeholder="Degree Name">
                                        </div>
                                        <span class="" role="alert">
                                            <p id="degree_error" class="text-danger" ></p>
                                        </span>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Institute</label>
                                            <input type="text" class="input-text" name="university" placeholder="University">
                                        </div>
                                    
                                        <span class="" role="alert">
                                        <p id="university_error" class="text-danger" ></p>
                                        </span>
                                        
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Dates</label>
                                            <input  type="text" class="input-text datetimes " name="date" placeholder="22/08/2020 - 24/08/2020">
                                        </div>
                                    
                                        <span class="" role="alert">
                                        <p id="date_school_error" class="text-danger" ></p>
                                        </span>
                                    
                                    </div>
    
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <select id="country" class="input-text" name="country">
                                                    <option value="">--- Select Country ---</option>
                                                    @foreach ($countries as $key => $value)
                                                    <option value="{{ $key }}">{{ $value }}</option>
                                                    @endforeach
                                                
                                                </select>
                                            </div>
                                            
                                            <span class="" role="alert">
                                            <p id="school_country_error" class="text-danger" ></p>
                                            </span>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>State</label>
                                            <select id="state" class="input-text" name="state">
                                                <option value="">--- Select State ---</option>
                                            </select>
                                        
                                            <span class="" role="alert">
                                            <p id="school_state_error" class="text-danger" ></p>
                                            </span>
                                        
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>City</label>
                                            <select id="city" class="input-text" name="city">
                                                <option value="">--- Select City ---</option>
                                            </select>
                                        </div>
                                        
                                        <span class="" role="alert">
                                        <p id="school_city_error" class="text-danger" ></p>
                                        </span>
                                        
                                    </div>
                                
                                
                                </div>
                            </div>
                    </div>

                    {{-- Btn-Save --}}
                    
                        <div class="post-btn">
                            <button  id="education_submit_btn" class="btn btn-md button-theme" >Save</button>
                            <button type="button" class="btn btn-md btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                </form>  
            </div>
          </div>
        </div>
      </div>
    </div>

{{-- Updainig education --}}
    <div class="submit-address dashboard-list">
        <div class="modal fade" id="updateEducationModal"  tabindex="-1" role="dialog" aria-labelledby="addEducation" aria-hidden="true">
            <div class="modal-dialog " role="document">
              <div class="modal-content" >
                <div class="modal-header">
                  <h5 class="modal-title" id="addEducation"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
    
                    <form id="editEducationForm" action="" method="POST">
                        @csrf
                        <h2 class="bg-grea-3 heading">Education</h2>
                        {{-- Single-Education-Form --}}
                        <div class="education-initial">
                              
                                <div class="search-form">
                                    <div class="row pad-20">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Degree</label>
                                                <input type="text" id="update_degree" class="input-text" name="degree" placeholder="Degree Name">
                                            </div>
                                            <span class="" role="alert">
                                                <p id="update_degree_error" class="text-danger" ></p>
                                            </span>
                                        </div>
    
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Institute</label>
                                                <input type="text" id="update_university" class="input-text" name="university" placeholder="University">
                                            </div>
                                        
                                            <span class="" role="alert">
                                            <p id="update_university_error" class="text-danger" ></p>
                                            </span>
                                            
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Dates</label>
                                                <input  type="text" id="update_date" class="input-text datetimes " name="date" placeholder="22/08/2020 - 24/08/2020">
                                            </div>
                                        
                                            <span class="" role="alert">
                                            <p id="update_date_school_error" class="text-danger" ></p>
                                            </span>
                                        
                                        </div>
        
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <select id="country" class="input-text" name="country">
                                                        <option value="">--- Select Country ---</option>
                                                        @foreach ($countries as $key => $value)
                                                        <option value="{{ $key }}">{{ $value }}</option>
                                                        @endforeach
                                                    
                                                    </select>
                                                </div>
                                                
                                                <span class="" role="alert">
                                                <p id="update_school_country_error" class="text-danger" ></p>
                                                </span>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>State</label>
                                                <select id="state" class="input-text" name="state">
                                                    <option value="">--- Select State ---</option>
                                                </select>
                                            
                                                <span class="" role="alert">
                                                <p id="update_school_state_error" class="text-danger" ></p>
                                                </span>
                                            
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>City</label>
                                                <select id="city" class="input-text" name="city">
                                                    <option value="">--- Select City ---</option>
                                                </select>
                                            </div>
                                            
                                            <span class="" role="alert">
                                            <p id="update_school_city_error" class="text-danger" ></p>
                                            </span>
                                            
                                        </div>
                                    
                                    
                                    </div>
                                </div>
                        </div>
    
                        
                        {{-- Btn-Save --}}
                        
                            <div class="post-btn">
                                <button  id="update_education_submit_btn" class="btn btn-md button-theme" >Save</button>
                                <button type="button" class="btn btn-md btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        
                      
                    </form>
                    
                </div>
              </div>
            </div>
          </div>
        </div>
    





<!-- Modal form for experience -->
<!-- Adding Experiences to the resume-->
<div class="submit-address dashboard-list">
    <div class="modal fade" id="exampleModalLabel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form id="experience_modal" action="{{ route('save-experience') }}" method="POST">
                    @csrf
                    <h2 class="bg-grea-3 heading">Work Experience</h2>
                    <div class="search-form">
                        <div class="row pad-20">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Job Post</label>
                                    <input type="text" class="input-text" name="job_post" placeholder="Job Post" value="{{ old('job_post') }}" autofocus>
                                </div>
                                    <span class="" role="alert">
                                        <p id="job_post_error" class="text-danger" ></p>
                                    </span>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Company Name</label>
                                    <input type="text" class="input-text" name="company" placeholder="Company" value="{{ old('company') }}" autofocus>
                                </div>
                                    <span class="" role="alert">
                                        <p id="company_name_error" class="text-danger" ></p>
                                    </span>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Dates</label>
                                    <input type="text" class="input-text datetimes" name="dates" placeholder="22/08/2020 - 24/08/2020" value="{{ old('dates') }}" autofocus>
                                </div>
                                    <span class="" role="alert">
                                        <p id="date_error" class="text-danger" ></p>
                                    </span>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Country</label>
                                    <select id="country" class="input-text" name="Country"  autofocus>
                                        <option value="">--- Select Country ---</option>
                                        @foreach ($countries as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                    <span class="" role="alert">
                                        <p id="country_error" class="text-danger" ></p>
                                    </span>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>State</label>
                                    <select id="state" class="input-text" name="State" autofocus>
                                        <option value="">--- Select State ---</option>
                                    </select>
                                </div>
                                    <span class="" role="alert">
                                        <p id="state_error" class="text-danger" ></p>
                                    </span>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>City</label>
                                    <select id="city" class="input-text" name="City" autofocus>
                                        <option value="">--- Select City ---</option>
                                    </select>
                                </div>
                                    <span class="" role="alert">
                                        <p id="city_error" class="text-danger" ></p>
                                    </span>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="input-text" name="job_description" placeholder="Detailed Information" value="{{ old('job-description') }}" autofocus></textarea>
                                </div>
                                    <span class="" role="alert">
                                        <p id="description_error" class="text-danger" ></p>
                                    </span>
                            </div>
                            <div class="post-btn">
                                <button  id="submit_modal_experience" class="btn btn-md button-theme" >Save</button>
                                <button type="button" class="btn btn-md btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
</div>

    <!-- Editing Experience -->
    <div class="submit-address dashboard-list">
        <div class="modal fade" id="editExperience" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog " role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="editExperience"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form id="edit_experience_modal" action="{{ route('save-experience') }}" method="POST">
                        @csrf
                        <h2 class="bg-grea-3 heading">Work Experience</h2>
                        <div class="search-form">
                            <div class="row pad-20">
                                <input type="hidden" name="id" id="id">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Job Post</label>
                                        <input type="text" class="input-text" name="job_post" placeholder="Job Post" id="job_post" autofocus>
                                    </div>
                                        <span class="" role="alert">
                                            <p id="edit_job_post_error" class="text-danger" ></p>
                                        </span>
                                </div>
    
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Company Name</label>
                                        <input type="text" class="input-text" name="company" placeholder="Company" id="company" value="" autofocus>
                                    </div>
                                        <span class="" role="alert">
                                            <p id="edit_company_name_error" class="text-danger" ></p>
                                        </span>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Dates</label>
                                        <input type="text" class="input-text datetimes" name="dates"  id="date" placeholder="22/08/2020 - 24/08/2020" value="" autofocus>
                                    </div>
                                        <span class="" role="alert">
                                            <p id="edit_date_error" class="text-danger" ></p>
                                        </span>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select id="country" class="input-text" name="Country"  autofocus>
                                            <option id="country" value="">--- Select Country ---</option>
                                            @foreach ($countries as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                        <span class="" role="alert">
                                            <p id="edit_country_error" class="text-danger" ></p>
                                        </span>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>State</label>
                                        <select id="state" class="input-text" name="State" autofocus>
                                            <option value="">--- Select State ---</option>
                                        </select>
                                    </div>
                                        <span class="" role="alert">
                                            <p id="edit_state_error" class="text-danger" ></p>
                                        </span>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>City</label>
                                        <select id="city" class="input-text" name="City" autofocus>
                                            <option value="">--- Select City ---</option>
                                        </select>
                                    </div>
                                        <span class="" role="alert">
                                            <p id="edit_city_error" class="text-danger" ></p>
                                        </span>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="input-text" name="job_description" placeholder="Detailed Information" value="" id="job_description" autofocus></textarea>
                                    </div>
                                        <span class="" role="alert">
                                            <p id="edit_description_error" class="text-danger" ></p>
                                        </span>
                                </div>
                                <div class="post-btn">
                                    <button  id="submit_edit_experience" class="btn btn-md button-theme" >Save</button>
                                    <button type="button" class="btn btn-md btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    




    <!-- scripts -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script  src="{{asset('assets/js/jquery-2.2.0.min.js')}}"></script>
    <script type="text/javascript">




    function updateData(id)
    {
        
        var csrf_token=$('meta[name="csrf_token"]').attr('content');
        var id =id;
        $.ajax({
            url : "{{ url('candidate/dashboard/experience/edit')}}" + '/' + id,
            type : "GET",
            data : {_token:'{{ csrf_token() }}'},
            success:function(data)
            {
                console.log(data);
                $('#job_post').val(data.job_title);
                $('#company').val(data.company_name);
                $('#date').val(data.years);
                $('name[Country]').val(data.country);
                $('#state').val(data.state);
                $('#city').val(data.city);
                $('#job_description').val(data.job_description);
                $('#editExperience').modal('show');

              
            },
            error:function(data)
            {
                console.log(data);
            }
        });

        $('#editExperience').on('submit', function(e){
            e.preventDefault();
            var registerForm = $("#edit_experience_modal");
            var formData = registerForm.serialize();
            
            $.ajax({
                url:"{{ url('candidate/dashboard/experience/update/')}}" + '/' + id,
                type:'PUT',
                data:formData,
                success:function(response){
                    console.log(response);
                    $('#editExperience').modal('hide');
                    swal({
                            title: "Success!",
                            text: "Data updated successfully!",
                            icon:"success",
                            type: "success"
                        }).then(function() {
                            window.location.reload();
                        });


                },
                error:function(data){
                    console.log(data.responseJSON.errors.City[0]);
                    if(data.responseJSON.errors.job_post[0]){
                        $('#edit_job_post_error').html(data.responseJSON.errors.job_post[0]); 
                    }
                    if(data.responseJSON.errors.company){
                        $('#edit_company_name_error').html(data.responseJSON.errors.company[0]); 
                    }
                    if(data.responseJSON.errors.dates){
                        $('#edit_date_error').html(data.responseJSON.errors.dates); 
                    }
                    if(data.responseJSON.errors.Country){
                        $('#edit_country_error').html(data.responseJSON.errors.Country[0]); 
                    }
                    if(data.responseJSON.errors.State){
                        $('#edit_state_error').html(data.responseJSON.errors.State); 
                    }
                    if(data.responseJSON.errors.City){
                        $('#edit_city_error').html(data.responseJSON.errors.City); 
                    }
                    if(data.responseJSON.errors.job_description){
                        $('#edit_description_error').html(data.responseJSON.errors.job_description); 
                    }

                },
                complete:function(){

                }
            });
        });

    }




    function updateEducation(id)
    {
        
        var csrf_token=$('meta[name="csrf_token"]').attr('content');
        var id =id;
        $.ajax({
            url : "{{ url('candidate/dashboard/resume/edit')}}" + '/' + id,
            type : "GET",
            data : {_token:'{{ csrf_token() }}'},
            success:function(data)
            {
                console.log(data);
                $('#update_degree').val(data.degree);
                $('#update_university').val(data.university);
                $('#update_date').val(data.years);
                $('name[Country]').val(data.country);
                $('#state').val(data.state);
                $('#city').val(data.city);
                $('#updateEducationModal').modal('show');

              
            },
            error:function(data)
            {
                console.log(data);
            }
        });


        $("#editEducationForm").on('submit', function(e){
            e.preventDefault();
            var registerForm = $("#editEducationForm");
            var formData = registerForm.serialize();
        
            
            $.ajax({
                headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                url:"{{ url('candidate/dashboard/resume/update/')}}" + '/' + id,
                type:'PUT',
                data:formData,
                success:function(response){
                    console.log(response);
                    $('#editExperience').modal('hide');
                    swal({
                            title: "Success!",
                            text: "Data updated successfully!",
                            icon:"success",
                            type: "success"
                        }).then(function() {
                            window.location.reload();
                        });


                },
                error:function(response){
                    console.log(response);
                    // console.log(data.responseJSON.errors.City[0]);
                    // if(data.responseJSON.errors.job_post[0]){
                    //     $('#edit_job_post_error').html(data.responseJSON.errors.job_post[0]); 
                    // }
                    // if(data.responseJSON.errors.company){
                    //     $('#edit_company_name_error').html(data.responseJSON.errors.company[0]); 
                    // }
                    // if(data.responseJSON.errors.dates){
                    //     $('#edit_date_error').html(data.responseJSON.errors.dates); 
                    // }
                    // if(data.responseJSON.errors.Country){
                    //     $('#edit_country_error').html(data.responseJSON.errors.Country[0]); 
                    // }
                    // if(data.responseJSON.errors.State){
                    //     $('#edit_state_error').html(data.responseJSON.errors.State); 
                    // }
                    // if(data.responseJSON.errors.City){
                    //     $('#edit_city_error').html(data.responseJSON.errors.City); 
                    // }
                    // if(data.responseJSON.errors.job_description){
                    //     $('#edit_description_error').html(data.responseJSON.errors.job_description); 
                    // }

                },
                complete:function(){

                }
            });
        });

    }



    function deleteEducation(id)
    {
            var csrf_token=$('meta[name="csrf_token"]').attr('content');
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    
                })   
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url : "{{ url('candidate/dashboard/resume/delete/')}}" + '/' + id,
                            type : "POST",
                            data : {_token:'{{ csrf_token() }}'},
                            success: function(data){
                                swal({
                                    title:"Done!",
                                    text:"Experience deleted successfully!",
                                    icon:"success",
                                    type:"success"
                                    
                                }).then(function() {
                                window.location.reload();
                                });
                            },
                        
                            error :function(response){
                                console.log(response);
                                swal({
                                    title: 'Opps...',
                                    text : 'Something wrong try again later',
                                    type : 'error',
                                    timer : '1500'
                                })
                            }
                        })
                    } else {
                    swal({
                        title:'safe',
                        text:"Your data is still safe",
                        icon:"info",
                        type:"info"
                    });
                    }
                });
    }


     //deleting experience   
    function deleteData(id)
    {
            var csrf_token=$('meta[name="csrf_token"]').attr('content');
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url : "{{ url('candidate/dashboard/experience/delete')}}" + '/' + id,
                            type : "POST",
                            data : {_token:'{{ csrf_token() }}'},
                            success: function(data){
                                swal({
                                    title:"Done!",
                                    text:"Experience deleted successfully!",
                                    icon:"success",
                                    type:"success"
                                    
                                }).then(function() {
                                window.location.reload();
                                });
                            },
                        
                            error :function(response){
                                console.log(response);
                                swal({
                                    title: 'Opps...',
                                    text : 'Something wrong try again later',
                                    type : 'error',
                                    timer : '1500'
                                })
                            }
                        })
                    } else {
                    swal({
                        title:'safe',
                        text:"Your data is still safe",
                        icon:"info",
                        type:"info"
                    });
                    }
                });
    }



    
       $(document).ready(function(){

           //Adding Education
           $('#addEducationForm').on('submit', function(e){
                e.preventDefault();
                var formData = $('#addEducationForm').serialize();
                //var csrf_token=$('meta[name="csrf_token"]').attr('content');
                $.ajax({
                    headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                        url:"{{ route('save-resume') }}",
                        type:'POST',
                        data:(formData),
                        success:function(response) {
                            console.log(response);
                        // swal("Great!", "Work Experience added successfully!", "success");              
                            $('#exampleModalLabel').modal('hide');
                            $('#addEducationForm')[0].reset();
                            swal({
                                    title: "Great!",
                                    text: "Work Experience added successfully!",
                                    icon:"success",
                                    type: "success"
                                }).then(function() {
                                    window.location.reload();
                                });
                                
                        },
                        error:function(data){

                            console.log(data.responseJSON.errors);
                            if(data.responseJSON.errors.degree[0]){
                                $('#degree_error').html(data.responseJSON.errors.degree[0]); 
                            }
                            if(data.responseJSON.errors.university[0]){
                                $('#university_error').html(data.responseJSON.errors.university[0]); 
                            }
                            if(data.responseJSON.errors.date[0]){
                                $('#school_date_error').html(data.responseJSON.errors.date[0]); 
                            }
                            if(data.responseJSON.errors.country[0]){
                                $('#school_country_error').html(data.responseJSON.errors.country[0]); 
                            }
                            if(data.responseJSON.errors.state[0]){
                                $('#school_state_error').html(data.responseJSON.errors.state[0]); 
                            }
                            if(data.responseJSON.errors.city[0]){
                                $('#school_city_error').html(data.responseJSON.errors.city[0]); 
                            }
                           

                        },
                        complete:function(){
                            //$('#experience_modal')[0].reset();
                            
                        },
            
        
                });
            });



        //Adding Experiences
        $('#experience_modal').on('submit',function(e){
                e.preventDefault();
                
                var registerForm = $("#experience_modal");
                var formData = registerForm.serialize();

                $.ajax({
                        url:"{{ route('save-experience') }}",
                        type:'POST',
                        data:formData,
                        success:function(data) {
                            console.log(data);
                        // swal("Great!", "Work Experience added successfully!", "success");              
                            $('#exampleModalLabel').modal('hide');
                            $('#experience_modal')[0].reset();
                            swal({
                                    title: "Great!",
                                    text: "Work Experience added successfully!",
                                    icon:"success",
                                    type: "success"
                                }).then(function() {
                                    window.location.reload();
                                });
                                
                        },
                        error:function(data){
                            console.log(data.responseJSON.errors);
                            if(data.responseJSON.errors.job_post[0]){
                                $('#job_post_error').html(data.responseJSON.errors.job_post[0]); 
                            }
                            if(data.responseJSON.errors.company[0]){
                                $('#company_name_error').html(data.responseJSON.errors.company[0]); 
                            }
                            if(data.responseJSON.errors.dates[0]){
                                $('#date_error').html(data.responseJSON.errors.dates[0]); 
                            }
                            if(data.responseJSON.errors.Country[0]){
                                $('#country_error').html(data.responseJSON.errors.Country[0]); 
                            }
                            if(data.responseJSON.errors.State[0]){
                                $('#state_error').html(data.responseJSON.errors.State[0]); 
                            }
                            if(data.responseJSON.errors.City[0]){
                                $('#city_error').html(data.responseJSON.errors.City[0]); 
                            }
                            if(data.responseJSON.errors.job_description[0]){
                                $('#description_error').html(data.responseJSON.errors.job_description[0]); 
                            }

                        },
                        complete:function(){
                            $('#experience_modal')[0].reset();
                            
                        },
            
        
                });
       
        });

    });
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