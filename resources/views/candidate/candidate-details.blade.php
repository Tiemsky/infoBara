

@extends('layouts.main')
@section('content')
    


<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Candidates Detail</h1>
            <ul class="breadcrumbs">
                <li><a href="{{ route('welcome') }}">Home</a></li>
                <li class="active">Candidates Detail</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Candidate section start -->
<div class="candidate-section content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
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
                        <h5 class="title"><a href="#"></a></h5>
                        <div class="candidate-listing-footer">
                            <ul>
                                <li><i class="flaticon-work"></i> Graphic Designer</li>
                                <li><i class="flaticon-pin"></i> {{ $Candidate->profile->country }}</li>
                                <li><i class=""></i> {{ $Candidate->profile->state }}</li>
                                <li><i class=""></i> {{ $Candidate->profile->city }}</li>
                                <li><i class="flaticon-mail"></i>{{ substr(($Candidate->email),0,5) }}{{ strlen($Candidate->email)>5?'***@com':'' }}</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <hr class="hr-boder clearfix">
                <!-- about me start -->
                <div class="about-me mb-40">
                    <h3 class="heading-2">About {{ $Candidate->firstname }}</h3>
                    <p>{!! $Candidate->profile->about_me !!}</p>
                </div>
                <!-- Education start-->
                <div class="education mb-50">
                    <h3 class="heading-2">Education</h3>
            @if ($Educations == false)
                <div class="education-box">
                    <div class="icon">
                        <i class="flaticon-student"></i>
                    </div>
                    <div class="employer-info">
                        <h5>No education</h5>
                    </div>
                </div>
        
                  
            @else
                @foreach ($Candidate->educations as $education)
                
                    <div class="education-box">
                        <div class="icon">
                            <i class="flaticon-student"></i>
                        </div>
                        <div class="employer-info">
                            <h5>{{ $education->degree }}</h5>
                            <h6>{{ $education->years }}</h6>
                            <p> <i><strong>Institute Name:</strong></i> {{ $education->university }}</p>
                            <p><i class="flaticon-pin"></i> {{ $education->country }} - {{ $education->state }} - {{ $education->city }}</p>
                        </div>
                    </div>
                @endforeach
            @endif
                 
                </div>
                <!-- Work experiance start-->
                <div class="work-experiance mb-50">
                    <h3 class="heading-2">Work Experiance</h3>
                    @if (!$Experience)
                            <div class="education-box">
                                <div class="icon">
                                    <i class="flaticon-work"></i>
                                </div>
                                <div class="employer-info">
                                    <h5>No Experience</h5>
                                </div>
                            </div>
                        
                    @else
                    @foreach ($Candidate->experiences as $experience)
                        <div class="education-box">
                            <div class="icon">
                                <i class="flaticon-work"></i>
                            </div>
                            <div class="employer-info">
                                <h5>Company Name: {{$experience->company_name }}</h5>
                                <h5>Job Name: {{$experience->job_title }}</h5>
                                <h6>{{$experience->years }}</h6>
                                <p><i class="flaticon-pin"></i> {{ $experience->country }} - {{ $experience->state }} - {{ $experience->city }}</p>
                                <p><i>Job Description:</i>  {{ $experience->job_description }}.</p>
                            </div>
                        </div>
                        
                    @endforeach
                    @endif
             
                  
                </div>
                <!-- Progressbar example start -->
               
          
                <div class="progressbar-example mb-40">
                    <h3 class="heading-2">Professional Skills</h3>
                    <div class="row">

                        @if ($skill_exist == false)
                        <div class="col-lg-12">
                            <div class="progress-box">
                                <p class="progress-title">No skills</p>
                               
                            </div>
                        </div>
                        @else
                            @foreach ($skills as $skill)
                                <div class="col-lg-12">
                                    <div class="progress-box">
                                        <p class="progress-title">{{ $skill->skill_name }}</p>
                                        <p class="progress-size">{{ $skill->value }}%</p>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{ $skill->value }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $skill->value }}%"></div>
                                        </div>
                                    </div>
                                </div>
                                
                            @endforeach
                     
                        @endif
                    </div>
                    
                </div>
               
           
                <!-- Portfolio start -->
                <div class="portfolio">
                    <h3 class="heading-2">Portfolio</h3>
                    <div class="container">
                        <div class="slick-slider-area">
                            <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 3}}, {"breakpoint": 768,"settings":{"slidesToShow": 2}}]}'>
                                <div class="slick-slide-item">
                                    <div class="portfolio-item">
                                        <a href="{{ asset('assets/img/gallery/img-2.jpg') }}" title="Portfolio">
                                            <img src="{{ asset('assets/img/gallery/img-2.jpg') }}" alt="gallery" class="img-fluid">
                                        </a>
                                        <div class="portfolio-content">
                                            <div class="portfolio-content-inner">
                                                <p>Portfolio</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide-item">
                                    <div class="portfolio-item">
                                        <a href="{{ asset('assets/img/gallery/img-3.jpg') }}" title="Portfolio">
                                            <img src="{{ asset('asset/img/gallery/img-3.jpg') }}" alt="gallery" class="img-fluid">
                                        </a>
                                        <div class="portfolio-content">
                                            <div class="portfolio-content-inner">
                                                <p>Portfolio</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide-item">
                                    <div class="portfolio-item">
                                        <a href="{{ asset('assets/img/gallery/img-1.jpg') }}" title="Portfolio">
                                            <img src="{{ asset('assets/img/gallery/img-1.jpg') }}" alt="gallery" class="img-fluid">
                                        </a>
                                        <div class="portfolio-content">
                                            <div class="portfolio-content-inner">
                                                <p>Portfolio</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide-item clearfix">
                                    <div class="portfolio-item">
                                        <a href="{{ asset('assets/img/gallery/img-4.jpg') }}" title="Portfolio">
                                            <img src="{{ asset('assets/img/gallery/img-4.jpg') }}" alt="gallery" class="img-fluid">
                                        </a>
                                        <div class="portfolio-content">
                                            <div class="portfolio-content-inner">
                                                <p>Portfolio</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-prev slick-arrow-buton">
                                <i class="fa fa-angle-left"></i>
                            </div>
                            <div class="slick-next slick-arrow-buton">
                                <i class="fa fa-angle-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
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
                            <li><i class="flaticon-money"></i><h5>Salary</h5><span>{{ $Candidate->profile->expected_salary_from }} - {{ $Candidate->profile->expected_salary_to }}</span></li>
                            <li><i class="flaticon-pin"></i><h5>Location</h5><span>{{ $Candidate->profile->country }}</span></li>
                            <li><i class="flaticon-woman"></i><h5>Gender</h5><span>{{ $Candidate->profile->gender }}</span></li>
                            <li><i class="flaticon-work"></i><h5>Job Type</h5><span>{{$Candidate->profile->job_type_preferred }}</span></li>
                            <li><i class="flaticon-patent"></i><h5>Qualification</h5><span>{{$Educations == true? $Education->degree : 'No Education' }}</span></li>
                            <li><i class="flaticon-notepad"></i><h5>Experience</h5><span>2 to 3 year</span></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <!-- Quick contact start -->
                    <div class="widget-5 contact-1 quick-contact">
                        <h3 class="sidebar-title">Quick Contacts</h3>
                        <div class="s-border"></div>
                        <div class="m-border"></div>
                        <form action="#" method="GET" enctype="multipart/form-data">
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
@endsection
    


