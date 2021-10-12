
@extends('layouts.main')
@section('content')

<!-- Banner start -->
<div class="banner" id="banner">
    <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item banner-max-height active item-bg">
                <img class="d-block w-100 h-100" src="{{asset('assets/img/banner/banner-2.jpg')}}" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex text-center"></div>
            </div>
            <div class="carousel-item banner-max-height item-bg">
                <img class="d-block w-100 h-100" src="{{asset('assets/img/banner/banner-3.jpg')}}" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex text-center"></div>
            </div>
            <div class="carousel-item banner-max-height item-bg">
                <img class="d-block w-100 h-100" src="{{asset('assets/img/banner/banner-4.jpg')}}" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex text-center"></div>
            </div>
        </div>
    </div>
    <div class="banner-inner bi-2 text-left">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-10">
                    <div class="tc">
                        <h1>Find the Job That Fits Your Life</h1>
                        <p>We offer 12505 jobs vacation right now</p>
                        <form action="{{ route('search-job') }}" method="get">
                            
                            <div class="inline-search-area ml-auto mr-auto">
                                <div class="search-boxs">
                                    <div class="search-col">
                                        <input type="text" name="keyword" class="form-control has-icon b-radius" placeholder="Job title or Keywords" autocomplete="off">
                                    </div>
                                    <div class="search-col">
                                        <select class="search-fields form-control has-icon b-radius" name="location" autocomplete="off">
                                            <option value=" ">Location</option>
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country}}">{{ $country}}</option>
                                              
                                                @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="find">
                                        <button type="submit" class="btn button-theme btn-search btn-block b-radius">
                                            <i class="fa fa-search"></i><strong>Find Job</strong>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                       
                        <div class="clearfix"></div>
                        <div class="browse-jobs">
                            Browse job offers by <a href="#">Category</a>  <a href="#">Location</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner end -->
<!-- Button trigger modal -->

<!-- Popular categories strat -->
<div class="popular-categories content-area-7 bg-grea">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1>Popular Categories</h1>
        </div>
        <div class="row">

            @foreach ($Category as $category)
            <div class="col-lg-4 col-md-6">
                <div class="media categorie-box-2">
                    <a class="icon" href="{{route('job-by-category',[$category->category_name])}} ">
                        <i class="flaticon-money"></i>
                    </a>
                    <div class="media-body align-self-center">
                        <h5>{{ $category->category_name }}</h5>
                        <span>{{ $category->jobs->count() }}</span>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        
    </div>
</div>
<!-- Popular categories end -->

<!-- Counters strat -->
<div class="counters">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-user"></i>
                    <h1 class="counter">1967</h1>
                    <p>Members</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-work"></i>
                    <h1 class="counter">{{ $JobCount }}</h1>
                    <p>Jobs</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-portfolio"></i>
                    <h1 class="counter">475</h1>
                    <p>Resumes</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-branch"></i>
                    <h1 class="counter">475</h1>
                    <p>Companies</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counters end -->

<!-- Job section strat -->
<div class="job-section content-area-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title-2">
                    <h1>Recent Jobs</h1>
                    <a href="{{ route('job-list') }}" class="float-right baj">Browse All Jobs</a>
                </div>
            </div>
        </div>
        
        @foreach ($jobs as $job)
            
        
        <div class="row">
            <div class="col-lg-12">
                <div class="job-item media">
                 @if($job->company->logo == null)
                 <a class="icon" href="{{route('job-detail', [$job->country, $job->slug])}}">
                    <div class="company-logo">
                        <img src="{{ asset('uploads/logo/default-logo.png') }}" alt="logo">
                    </div>
                </a>
                     
                 @else
                    <a class="icon" href="{{route('job-detail', [$job->country, $job->slug])}}">
                        <div class="company-logo">
                            <img src="{{ asset('uploads/logo/'.$job->company->logo) }}" alt="logo">
                        </div>
                    </a>
                     
                 @endif
                    <div class="media-body align-self-center">
                        <h4><a href="{{route('job-detail', [$job->country, $job->slug])}}">{{ $job->title }}</a></h4>
                        <div class="job-ad-item">
                            <ul>
                                <li><i class="flaticon-work"></i>{{ $job->position }}</li>
                                <li><i class="flaticon-pin"></i>{{ $job->country }}</li>
                                <li><i class=""></i>{{ $job->state }}</li>
                                <li><i class=""></i> {{$job->city  }}</li>
                                <li><i class="flaticon-clock"></i>{{$job->type}}</li>
                                <li><i class="flaticon-discount"></i>{{ $job->min_salary }} - {{ $job->max_salary }}</li>
                                <li><i class=""></i>{{ $job->created_at->diffForHumans() }}</li>
                            </ul>
                        </div>
                        <div class="div-right">
                            <a href="{{route('job-detail', [$job->country, $job->slug])}}" class="apply-button">Apply Now</a>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
        @endforeach
       
        
    </div>
</div>
<!-- Job section end -->

<!-- Testimonial start -->
<div class="testimonial">
    <div class="container">
        <div class="main-title-3">
            <h1>Kind Words From Happy Candidates</h1>
        </div>
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="media">
                            <a href="#">
                                <img src="img/avatar/avatar-2.jpg" alt="testimonial-avatar" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    Eliane Perei
                                </h5>
                                <h6>Web Developer</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="media">
                            <a href="#">
                                <img src="{{ asset('assets/img/avatar/avatar-3.jpg') }}" alt="testimonial-avatar" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    Maria Blank
                                </h5>
                                <h6>Office Manager</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="media">
                            <a href="#">
                                <img src="img/avatar/avatar-4.jpg" alt="testimonial-avatar" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    Karen Paran
                                </h5>
                                <h6>Support Manager</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="media">
                            <a href="#">
                                <img src="img/avatar/avatar-1.jpg" alt="testimonial-avatar" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    John Pitarshon
                                </h5>
                                <h6>Creative Director</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial end -->

<!-- Blog start -->
<div class="blog content-area bg-grea">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Latest Blog</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-3">
                        <div class="blog-photo">
                            <img src="img/blog/blog-3.jpg" alt="blog" class="img-fluid">
                        </div>
                        <div class="detail">
                            <h3>
                                <a href="blog-details.html">Negotiate A Job Offer & Close The Deal</a>
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                            <div class="footer">
                                <div class="float-left">
                                    <p class="date"><i class="flaticon-calendar"></i> 24 Sep, 2019</p>
                                </div>
                                <div class="float-right">
                                    <a href="#">Read more..</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-3">
                        <div class="blog-photo">
                            <img src="img/blog/blog-2.jpg" alt="blog" class="img-fluid">
                        </div>
                        <div class="detail">
                            <h3>
                                <a href="blog-details.html">How To Get Out Of Stress At Work</a>
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                            <div class="footer">
                                <div class="float-left">
                                    <p class="date"><i class="flaticon-calendar"></i> 24 Sep, 2019</p>
                                </div>
                                <div class="float-right">
                                    <a href="#">Read more..</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 none-992">
                    <div class="blog-3">
                        <div class="blog-photo">
                            <img src="img/blog/blog-1.jpg" alt="blog" class="img-fluid">
                        </div>
                        <div class="detail">
                            <h3>
                                <a href="blog-details.html">How You Can Give Someone A Second Chance</a>
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                            <div class="footer">
                                <div class="float-left">
                                    <p class="date"><i class="flaticon-calendar"></i> 24 Sep, 2019</p>
                                </div>
                                <div class="float-right">
                                    <a href="#">Read more..</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog end -->

<!-- Intro section -->
<div class="intro-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="intro-text">
                    <h3>Download on App Store</h3>
                    <p>Searching for jobs never been that easy.</p>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="app-download-button">
                    <a href="#" class="android-app"><i class="flaticon-google-play"></i>Windows Store</a>
                    <a href="#" class="apple-app"><i class="flaticon-apple"></i>Apple Store</a>
                    <a href="#" class="android-app"><i class="flaticon-app-1"></i>Google Play</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Intro end -->


    
@endsection