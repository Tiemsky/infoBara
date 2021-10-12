<div class="page_loader"></div>

<!-- Main header start -->
<header class="main-header header-2 fixed-header">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logo pad-0" href="index.html">
                <img src="{{ asset('assets/img/logos/black-logo.png') }}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto d-lg-none d-xl-none">
                    <li class="nav-item dropdown">
                        <a href="{{ route('employer-dashboard') }}" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="{{ route('view-profile') }}" class="nav-link">view profile</a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a href="{{ route('post-a-job') }}" class="nav-link">Post a Job</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="{{ route('edit-profile') }}" class="nav-link">My Company</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="{{ route('manage-candidate') }}" class="nav-link">Manage Candidate</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="{{ route('manage-job') }}" class="nav-link">Manage Jobs</a>
                    </li>
                  
                    <li class="nav-item dropdown">
                        <a href="{{ route('transaction') }}" class="nav-link">Transaction</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="{{ route('change-password') }}" class="nav-link">Change Password</a>
                    </li>
                   
                    <li class="nav-item dropdown">
                        <a href="{{ route('logout') }}" class="nav-link">Logout</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link">Delete Account</a>
                    </li>
                </ul>
                <div class="navbar-buttons ml-auto d-none d-xl-block d-lg-block">
                    <ul>
                        <li>
                            <div class="dropdown btns">
                               @if (Auth::User()->avatar == null )
                                    <a class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{ asset('uploads/profile/default.jpg') }}" alt="avatar">
                                        {{ Auth::User()->lastname }}
                                    </a>
                                   
                               @else<?php $user= Auth::User()->id; ?>
                                    <a class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{ asset('uploads/profile/'.$user->avatar) }}" alt="avatar">
                                        {{ Auth::User()->lastname }}
                                </a>
                              
                           
                                   
                               @endif
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('employer-dashboard') }}">Dashboard</a>
                                    <a class="dropdown-item" href="{{ route('view-profile') }}">Profile</a>
                                    <a class="dropdown-item" href="{{ route('edit-profile') }}">Company</a>
                                    <a class="dropdown-item" href="{{ route('post-a-job') }}">Post New Job</a>
                                    <a class="dropdown-item" href="{{ route('manage-candidate') }}">Manage Candidates</a>
                                    <a class="dropdown-item" href="{{ route('manage-job') }}">Managge Jobs</a>
                                    <a class="dropdown-item" href="{{ route('transaction') }}">Transactions</a>
                                    <a class="dropdown-item" href="{{ route('change-password') }}">Change Password</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>   
                                    <a class="dropdown-item" href="">Delete Account</a>                    
                                   
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="route('post-a-job'')" class="btn btn-theme btn-md"><i class="flaticon-plus"></i> Post a Job</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->

<!-- Dashbord start -->
<div class="dashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="dashboard-nav">
                <div class="dashboard-inner">
                    <h4>Main</h4>
                    <ul>
                        <li class="active"><a href="{{ route('employer-dashboard') }}"><i class="flaticon-dashboard"></i>Dashboard</a></li>
                        <li><a href="{{ route('view-profile') }}"><i class="fa fa-eye "></i>view profile</a></li>
                        <li><a href="{{ route('edit-profile') }}"><i class="lnr lnr-apartment"></i>My Company</a></li>
                        <li><a href="{{ route('post-a-job') }}"><i class="flaticon-plus"></i>Post a New Job</a></li>
                        <li><a href="{{ route('manage-candidate') }}"><i class="flaticon-hr"></i>Manage Candidate</a></li>
                        <li><a href="{{ route('manage-job') }}"><i class="flaticon-work"></i>Manage Jobs</a></li>
                        <li><a href="{{ route('transaction') }}"><i class="flaticon-payment"></i>Transaction</a></li>
                        <li><a href="{{ route('change-password') }}"><i class="flaticon-password"></i>Change Password</a></li>
                        <li><a href="{{ route('logout') }}"><i class="flaticon-logout"></i>Logout</a></li>
                        <li><a href=""><i class="fa fa-power-off "></i>Delete Account</a></li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</div>