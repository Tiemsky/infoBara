@extends('layouts.employer')
@section('content')

<div class="dashboard">
    <div class="container-fluid">
        <div class="row">

<div class="dashboard-content">
    <div class="dashboard-inner">
        <div class="dashboard-header clearfix">
            <div class="row">
                <div class="col-sm-12 col-md-6"><h4>Dashboard</h4></div>
                <div class="col-sm-12 col-md-6">
                    <div class="breadcrumb-nav">
                        <ul>
                            <li>
                                <a href="{{ route('welcome') }}">Home Page</a>
                            </li>
                            <li>
                                <a href="{{ route('employer-dashboard') }}" class="active">Dashboard</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="ui-item">
                    <i class="fa fa-map-marker color-green"></i>
                    <h4 class="color-green">242</h4>
                    <p>Active Listings</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="ui-item">
                    <i class="fa fa-eye color-red"></i>
                    <h4 class="color-red">1242</h4>
                    <p>Listing Views</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="ui-item">
                    <i class="fa fa-comments-o color-yellow"></i>
                    <h4 class="color-yellow">786</h4>
                    <p>Reviews</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="ui-item">
                    <i class="fa fa-heart-o color-blue"></i>
                    <h4 class="color-blue">42</h4>
                    <p>Bookmarked</p>
                </div>
            </div>
        </div>
 
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="dashboard-list">
                    <div class="dashboard-message bdr clearfix ">
                        <div class="tab-box-2">
                            <div class="clearfix mb-30 comments-tr">
                                <span>Top 5 Latest Users</span>
                                <ul class="nav nav-pills float-right" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active show" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Today</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="true">Month</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="new-user-box">
                                        <div class="user-author">
                                            <a href="#">
                                                <img src="img/avatar/avatar-3.jpg" alt="avatar-user">
                                            </a>
                                        </div>
                                        <div class="user-content">
                                            <div class="f-left">
                                                <h5>John Antony</h5>
                                                <p>Product Designer, Apple Inc</p>
                                            </div>
                                            <div class="f-right">
                                                <a href="#" class="follow">view</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade active show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="new-user-box">
                                        <div class="user-author">
                                            <a href="#">
                                                <img src="img/avatar/avatar-2.jpg" alt="avatar-user">
                                            </a>
                                        </div>
                                        <div class="user-content">
                                            <div class="f-left">
                                                <h5>Emma Connor</h5>
                                                <p>Visual Designer,Google Inc</p>
                                            </div>
                                            <div class="f-right">
                                                <a href="#" class="follow">view</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>

        
    </div>
    <p class="sub-banner-2 text-center">© 2020 <a href="#">Theme Vessel.</a> All Rights Reserved.</p>
</div>
        </div>
    </div>
</div>

@endsection