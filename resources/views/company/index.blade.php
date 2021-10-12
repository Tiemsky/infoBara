@extends('layouts.main')
@section('content')

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Companies List</h1>
            <ul class="breadcrumbs">
                <li><a href="{{ route('welcome') }}">Home Page</a></li>
                <li class="active">Companies List</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Employer section start -->
<div class="employer-section content-area-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="sidebar-right">
                    <!-- Advanced search start -->
                    <div class="widget-4 advanced-search">
                        <form method="POST" class="informeson">
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="sr-only" for="textsearch2">Search Keywords</label>
                                    <input type="text" class="form-control" id="textsearch2" placeholder="Search Keywords">
                                </div>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="Location">
                                    <option>All Location</option>
                                    <option>New York City</option>
                                    <option>Australia</option>
                                    <option>Brazil</option>
                                    <option>Canada</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="categories">
                                    <option>All Categories</option>
                                    <option>Accounting / Finance</option>
                                    <option>Industrial Engineer</option>
                                    <option>hospital / Health Care</option>
                                    <option>Design & Creative</option>
                                </select>
                            </div>
                            <br>

                            <a class="show-more-options" data-toggle="collapse" data-target="#options-content4">
                                <i class="fa fa-plus-circle"></i> Job Type
                            </a>
                            <div id="options-content4" class="collapse">
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox13" type="checkbox">
                                    <label for="checkbox13">
                                        Full Time
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox14" type="checkbox">
                                    <label for="checkbox14">
                                        Part Time
                                    </label>
                                </div>
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
                                    <input id="checkbox19" type="checkbox">
                                    <label for="checkbox19">
                                        1 Year
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox20" type="checkbox">
                                    <label for="checkbox20">
                                        2 Year
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox21" type="checkbox">
                                    <label for="checkbox21">
                                        3 Year
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
                                    <input id="checkbox8" type="checkbox">
                                    <label for="checkbox8">
                                        Male
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox9" type="checkbox">
                                    <label for="checkbox9">
                                        Female
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox10" type="checkbox">
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
                        <a href="{{ route('welcome') }}">
                            <img src="{{ asset('assets/img/logos/logo.png') }}" alt="logo" class="logo">
                        </a>
                        <p>Get Best Matched Jobs On your Email. Add Resume NOW!</p>
                        <a href="#" class="btn-md button-theme">Add Resume</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
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
                                    <option>Random</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 col-sm-5">
                            <div class="sorting-options">
                                <a href="list-sidebar.html" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
                                <a href="grid-sidebar.html" class="change-view-btn"><i class="fa fa-th-large"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Company listing start -->
                @foreach ($companies as $company)
                <div class="employer-item media">
                   @if ($company->logo == null)
                        <a class="icon" href="#">
                            <div class="employer-logo">
                                <img src="{{ asset('uploads/logo/default-logo.png') }}" alt="logo">
                            </div>
                        </a>
                   @else
                   <a class="icon" href="#">
                    <div class="employer-logo">
                        <img src="{{ asset('uploads/logo/'.$company->logo) }}" alt="logo">
                    </div>
                </a>
                       
                   @endif
                    <div class="media-body align-self-center">
                        <h4><a href="{{route('company-detail', [$company->id, $company->slug])}}">{{ $company->company_name }}</a></h4>
                        <div class="employer-meta">
                            <ul>
                                <li><i class="flaticon-pin"></i>{{ $company->country }} {{ $company->state }} {{ $company->city }}</li>
                                <li><a href="#" class="open-position">4 Open Position</a></li>
                            </ul>
                            <p>{{ $company->description }}.</p>
                        </div>
                    </div>
                </div>
                    
                @endforeach
                
                <!-- Company listing end -->
              
                <!-- Page navigation start -->
   
                <div class="pagination-box text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            {{ $companies->links() }}
                       
                                                 
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Employer section end -->
@endsection