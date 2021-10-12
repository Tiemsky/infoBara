
@extends('layouts.main')
@section('content')
<div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Job List</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Job List</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->
<div class="job-listing-section content-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-12">
                <div class="sidebar-right">
                    <!-- Advanced search start -->
                    <div class="widget-4 advanced-search">
                        <form method="GET" class="informeson">
                            
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="sr-only" for="textsearch2">Search Keywords</label>
                                    <input type="text" class="form-control" id="textsearch2" placeholder="Search Keywords">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12" style="padding-left:0px !important;">
                                <div class="form-group" >
                                    <div class="form-group" >
                                        <select id="location" class="input-text search-fields " name="" style="max-width: 213px;">
                                            <option value="">All Location</option>
                                            @foreach ($job_location as $location)
                                                <option id="country" value="{{$location->name }}">{{ $location->name }}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                    
                                </div>
                            </div>
                       
                            <div class="col-lg-6 col-md-6 col-sm-12" style="padding-left:0px !important;">
                                <div class="form-group">
                                    <select class="input-text search-fields " name="" style="width:213px;">
                                        <option>All Categories</option>
                                        @foreach ($job_category as $category)
                                        <option>{{ $category->category_name }}</option>
                                        @endforeach
                                        
                                     
                                    </select>
                                </div>
                                
                            
                            </div>
   
                            <br>

                            <a class="show-more-options" data-toggle="collapse" data-target="#options-content4">
                                <i class="fa fa-plus-circle"></i> Job Type
                            </a>
                            <div id="options-content4" class="collapse">
                                @foreach ($job_type as $job)
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox13" type="checkbox" id="job_type" class="product_filter">
                                    <label for="checkbox13">
                                        {{ $job->type }}
                                    </label>
                                </div>
                                    
                                @endforeach
                               
                           
                                <br>
                            </div>
                            <a class="show-more-options" data-toggle="collapse" data-target="#options-content5">
                                <i class="fa fa-plus-circle"></i> Date Posted
                            </a>
                            <div id="options-content5" class="collapse">
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox15" type="checkbox">
                                    <label for="checkbox15">
                                        Last Hour
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox16" type="checkbox">
                                    <label for="checkbox16">
                                        Last 24 Hours
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox17" type="checkbox">
                                    <label for="checkbox17">
                                        Last 7 Days
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox18" type="checkbox">
                                    <label for="checkbox18">
                                        Last 30 Days
                                    </label>
                                </div>
                                <br>
                            </div>

                            <a class="show-more-options" data-toggle="collapse" data-target="#options-content6">
                                <i class="fa fa-plus-circle"></i> Experience
                            </a>
                            <div id="options-content6" class="collapse">
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox19" type="checkbox" class="product_filter">
                                    <label for="checkbox19">
                                        0-2 year
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox20" type="checkbox">
                                    <label for="checkbox20">
                                        3-5 Year
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox21" type="checkbox">
                                    <label for="checkbox21">
                                        5-10 Year
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox21" type="checkbox">
                                    <label for="checkbox21">
                                        10+ Year
                                    </label>
                                </div>
                                <br>
                            </div>

                            <a class="show-more-options" data-toggle="collapse" data-target="#options-content">
                                <i class="fa fa-plus-circle"></i> Offerd Salary
                            </a>
                            <div id="options-content" class="collapse">
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox2" type="checkbox">
                                    <label for="checkbox2">
                                        10k - 20k
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox3" type="checkbox">
                                    <label for="checkbox3">
                                        20k - 30k
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox4" type="checkbox">
                                    <label for="checkbox4">
                                        30k - 40k
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1">
                                        40k - 50k
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox7" type="checkbox">
                                    <label for="checkbox7">
                                        50k - 60k
                                    </label>
                                </div>
                                <br>
                            </div>

                            <a class="show-more-options" data-toggle="collapse" data-target="#options-content3">
                                <i class="fa fa-plus-circle"></i> Qualification
                            </a>
                            <div id="options-content3" class="collapse">
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox11" type="checkbox">
                                    <label for="checkbox11">
                                        Intermidiate
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox12" type="checkbox">
                                    <label for="checkbox12">
                                        Gradute
                                    </label>
                                </div>
                                <br>
                            </div>

                            <a class="show-more-options" data-toggle="collapse" data-target="#options-content2">
                                <i class="fa fa-plus-circle"></i> Gender
                            </a>
                            <div id="options-content2" class="collapse">
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox8" name="gender" type="checkbox">
                                    <label for="checkbox8">
                                        Male
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox9" name="gender" type="checkbox">
                                    <label for="checkbox9">
                                        Female
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox10" name="gender" type="checkbox">
                                    <label for="checkbox10">
                                        Others
                                    </label>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
                <div class="contact-box">
                    <div class="quote-info">
                        <a href="index.html">
                            <img src="img/logos/logo.png" alt="logo" class="logo">
                        </a>
                        <p>Get Best Matched Jobs On your Email. Add Resume NOW!</p>
                        <a href="#" class="btn-md button-theme">Add Resume</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12">
                <!-- Option bar start -->
                <div class="option-bar">
                    <div class="row">
                        <div class="col-lg-6 col-md-7 col-sm-7">
                            <div class="sorting-options2">
                                <span class="sort">Sort by:</span>
                                <select class="selectpicker search-fields" name="default-order">
                                    <option>Relevance</option>
                                    <option>Newest</option>
                                    <option>Oldest</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 col-sm-5">
                            <div class="sorting-options">
                                <a href="#" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
                                <a href="#" class="change-view-btn"><i class="fa fa-th-large"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- job box start -->
                @foreach ($jobs as $job)
                <div class="job-item media">
                   @if ($job->company->logo == null)
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
                                <li><i class="flaticon-pin"></i>{{ $job->country }}</li>
                                <li><i class=""></i>{{ $job->state }}</li>
                                <li><i class=""></i>{{ $job->city }}</li>
                                <li><i class="flaticon-clock"></i>{{ $job->type }}</li>
                                <li><i class="flaticon-discount"></i> {{ $job->min_salary }} - {{ $job->max_salary }}</li>
                            </ul>
                        </div>
                        <div class="div-right">
                            <a href="{{route('job-detail', [$job->country, $job->slug])}}" class="apply-button">Apply Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
                  <!-- job box end -->

                <!-- Page navigation start -->
                <div class="pagination-box text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            {{ $jobs->links() }}                        
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection