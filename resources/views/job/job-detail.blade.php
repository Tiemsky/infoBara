@extends('layouts.main')
@section('content')
<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Job Detail</h1>
            <ul class="breadcrumbs">
                <li><a href="{{ route('welcome') }}">Home</a></li>
                <li class="active">Job Detail</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->
<!-- Job details page start -->
<div class="job-details-page content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <!-- Main item start -->
                <div class="main-item">
                    @if ($job->company->logo == null) 
                        <div class="company-logo">
                            <a href="">
                            <img src="{{ asset('uploads/logo/default-logo.png') }}" alt="avatar">
                            </a>
                        </div>
                    @else
                        <div class="company-logo">
                            <a href="">
                            <img src="{{ asset('uploads/logo/'.$job->company->logo) }}" alt="avatar">
                            </a>
                        </div>                      
                  @endif
                    <div class="description">
                        <h5 class="title"><a href="">{{ $job->title }}</a></h5>
                        <div class="candidate-listing-footer">
                            <ul>
                                <li><i class="flaticon-work"></i>{{ $job->position }}</li>
                                <li><i class="flaticon-pin"></i> {{ $job->country }}</li>
                                <li><i class=""></i> {{ $job->state }}</li>
                                <li><i class=""></i> {{ $job->city }}</li>
                                <li><i class="flaticon-clock"></i> {{ $job->type }}</li>
                                <li><i class="flaticon-discount"></i>{{ $job->min_salary }} - {{$job->max_salary }}</li>
                                <li><i class=""></i>Posted: {{$job->created_at->diffForHumans()}}</li>
                                <li><i class=""></i>Apply before: {{date('j F, Y', strtotime($job->deadline)) }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="hr-boder">
                <!-- job description start -->
                <div class="job-description mb-40">
                    <h3 class="heading-2">Job Description</h3>
                    <p>{!!$job->description!!}</p>
                </div>
             
                <!-- Responsibilities start-->
                <div class="responsibilities amenities mb-40">
                    <h3 class="heading-2">Responsibilities</h3>
                    <ul>
                    {!! $job->role !!}
                    </ul>
                </div>
                   <!-- Education + experience start-->
                   <div class="education-experience amenities mb-40">
                    <h3 class="heading-2">Education + Experience</h3>
                    <ul>
                        <li>
                            <i class="fa fa-check"></i>{{ $job->education }}.
                        </li>
                        <li>
                            <i class="fa fa-check"></i>{{ $job->min_experience }} - {{$job->max_experience }} Year Experience
                        </li>  
                    </ul>
                </div>
  
                <!-- Social list 2 start -->
                <div class="social-list-2 sl-3 float-left mb-40">
                    <span>Share</span>
                    <a href="#" class="facebook-bg">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="#" class="twitter-bg">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" class="google-bg">
                        <i class="fa fa-google"></i>
                    </a>
                    <a href="#" class="linkedin-bg">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a href="#" class="pinterest-bg">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
                <div class="clearfix"></div>
                <!-- Related jobs start -->
                
                <div class="related-Jobs clearfix">
                    <h3 class="heading-2">Related Jobs</h3>
                    @foreach ($similar_job as $similar)
                    <div class="job-item media">
                      @if ($similar->company->logo == null)
                        <a class="icon" href="{{route('company-detail', [$similar->company->id, $similar->company->slug])}}">
                            <div class="company-logo">
                                <img src="{{ asset('uploads/logo/default-logo.png')}}" alt="logo">
                            </div>
                        </a>
                      @else
                        <a class="icon" href="{{route('company-detail', [$similar->company->id, $similar->company->slug])}}">
                            <div class="company-logo">
                                <img src="{{ asset('uploads/logo/'.$similar->company->logo) }}" alt="logo">
                            </div>
                        </a>
                          
                      @endif
                        <div class="media-body align-self-center">
                            <h4><a href="{{route('job-detail', [$similar->country, $similar->slug])}}">{{ $similar->title }}</a></h4>
                            <div class="job-ad-item">
                                <ul>
                                    <li><i class="flaticon-pin"></i>{{ $similar->country }}</li>
                                    <li><i class="flaticon-clock"></i>{{ $similar->type }}</li>
                                    <li><i class="flaticon-discount"></i>{{ $similar->min_salary }} - {{ $similar->max_salary }}</li>
                                </ul>
                            </div>
                            @if( Auth::check() && Auth::User()->user_type=='seeker')
                                <div class="div-right">
                                    <a href="{{route('job-detail', [$similar->country, $similar->slug])}}" class="apply-button">Apply Now</a>
                                </div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                   
                </div>
                    
                
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-right-2">
                    <!-- Search box start -->
                    @if( Auth::check() && Auth::User()->user_type=='seeker')
                        <div class="widget search-box">
                            
                                <favourites-job :jobid={{$job->id}} :favourited={{$job->isJobSavedChecker()?'true':'false'}}></favourites-job>
                           
                            
                        @if(!$job->ApplicationChecker())
                            
                                <apply-component :jobid={{$job->id }}></apply-component>
                            
                        @else
                            <div class="form-group mb-0">
                                <h5 class="alert alert-success text-center">Application Sent Successfully</h5>
                            </div>
                                
                        @endif
                        
                    @elseif(!Auth::check())
                        <div class="form-group mb-0">
                            <a href="{{route('job-detail', [$job->country, $job->slug])}}">
                                <button class="search-button button-theme">Login To Apply</button>
                            </a> 
                        </div>

                        </div>
                        {{-- onclick="location.href='{{ route('login') }}'"  --}}
                   
                    @endif
                    <!-- Job overview start -->
                    <div class="job-overview widget">
                        <h3 class="sidebar-title">Job Overview</h3>
                        <div class="s-border"></div>
                        <div class="m-border"></div>
                        <ul>
                            <li><i class="flaticon-money"></i><h5>Salary</h5><span>{{ $job->min_salary }} - {{ $job->max_salary }}</span></li>
                            <li><i class="flaticon-pin"></i><h5>Location</h5><span>{{ $job->country }}</span><span>{{ $job->state }}</span><span>{{ $job->city }}</span></li>
                            <li><i class="flaticon-woman"></i><h5>Gender</h5><span>{{ $job->preferred_gender }}</span></li>
                            <li><i class="flaticon-work"></i><h5>Job Type</h5><span>{{ $job->type }}</span></li>
                            <li><i class="flaticon-patent"></i><h5>Qualification</h5><span>{{ $job->education }}</span></li>
                            <li><i class="flaticon-notepad"></i><h5>Experience</h5><span>{{ $job->min_experience }} - {{ $job->max_experience }} Year(s)</span></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <!-- Quick contact start -->
                    <div class="widget-5 contact-1 quick-contact">
                        <h3 class="sidebar-title">Quick Contacts</h3>
                        <div class="s-border"></div>
                        <div class="m-border"></div>
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <div class="form-group name">
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group email">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group message">
                                <textarea class="form-control" name="message" placeholder="Write message"></textarea>
                            </div>
                            <div class="send-btn">
                                <button type="submit" class="btn btn-md button-theme">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Job details page end -->

@endsection