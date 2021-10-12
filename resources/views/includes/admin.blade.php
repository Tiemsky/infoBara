<div class="page_loader"></div>

<!-- Main header start -->
<header class="main-header header-2 fixed-header">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logo pad-0" href="{{ route('welcome') }}">
                <img src="{{ asset('assets/img/logos/black-logo.png') }}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto d-lg-none d-xl-none">
                    <li class="nav-item dropdown">
                        <a href="{{ route('candidate-dashboard') }}" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a href="{{ route('create-edit') }}" class="nav-link">Profile</a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a href="" class="nav-link">Post a blog</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link">Edit blog</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link">Delete blog</a>
                    </li>
                  
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link">View users</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link">Delete users</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="{{ route('changePassword') }}" class="nav-link">Change Password</a>
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
                               
                                
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('candidate-dashboard') }}">Dashboard</a>
                                    <a class="dropdown-item" href="{{ route('create-edit') }}">Profile</a>
                                    <a class="dropdown-item" href="{{ route('candidate-view-profile') }}">Post a blog</a>
                                    <a class="dropdown-item" href="{{ route('bookmarked') }}">Edit blog</a>
                                    <a class="dropdown-item" href="{{ route('applied') }}">Edit blog</a>
                                    <a class="dropdown-item" href="{{ route('messages') }}">Delete blog</a>
                                    <a class="dropdown-item" href="{{ route('transaction') }}">Delete users</a>
                                    <a class="dropdown-item" href="{{ route('changePassword') }}">Change Password</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                                    <a class="dropdown-item" href=" " onclick="deleteAccount()">Delete Account</a>
                                </div>
                            </div>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->

<!-- Dashboard start -->
<div class="dashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="dashboard-nav">
                <div class="dashboard-inner" >
                    <h4>Main</h4>
                    <ul>
                        <li><a class="active" href="{{ route('candidate-dashboard') }}"><i class="flaticon-dashboard"></i>Dashboard</a></li>
                        <li><a href="{{ route('create-edit') }}"><i class="flaticon-user"></i>Profile</a></li>
                        <li><a href="{{ route('candidate-view-profile') }}"><i class="flaticon-portfolio"></i>Post a blog</a></li>
                        <li><a href="{{ route('bookmarked') }}"><i class="flaticon-heart"></i>Edit blog</a></li>
                        <li><a href="{{ route('applied') }}"><i class="flaticon-shield"></i>Delete blog</a></li>
                        <li><a href="{{ route('messages') }}"><i class="flaticon-mail"></i>View users</a></li>
                        <li><a href="{{ route('transaction') }}"><i class="flaticon-payment"></i>Delete users</a></li>
                        <li><a href="{{ route('changePassword') }}"><i class="flaticon-password"></i>Change Password</a></li>
                        <li><a href="{{ route('logout') }}"><i class="flaticon-logout"></i>Logout</a></li>
                    </ul>
                    <ul>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
