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
                        <a href="{{ route('candidate-view-profile')}}" class="nav-link">Build Resume</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="{{ route('bookmarked') }}" class="nav-link">Bookmarked</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="{{ route('applied') }}" class="nav-link">Applied</a>
                    </li>
                  
                    <li class="nav-item dropdown">
                        <a href="{{ route('messages') }}" class="nav-link">Messages</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="{{ route('transaction') }}" class="nav-link">Transaction</a>
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
                                <?php use App\User;
                                 $users = User::where('id',Auth::User()->id)->get();
                                ?>
                                @foreach ($users as $user)
                                 
                                    @if($user->profile->avatar==null)
                                    <a class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{ asset('uploads/profile/default.jpg') }}" alt="avatar">
                                        Hi, {{ Auth::User()->lastname }}
                                    </a>
                                    @else
                                    <a class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{ asset('uploads/profile/'.$user->profile->avatar) }}" alt="avatar">
                                        Hi, {{ Auth::User()->lastname }}
                                    </a>
                                    @endif
                               
                                    
                                @endforeach
                                
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('candidate-dashboard') }}">Dashboard</a>
                                    <a class="dropdown-item" href="{{ route('create-edit') }}">Profile</a>
                                    <a class="dropdown-item" href="{{ route('candidate-view-profile') }}">Build Resume</a>
                                    <a class="dropdown-item" href="{{ route('bookmarked') }}">Bookmarked</a>
                                    <a class="dropdown-item" href="{{ route('applied') }}">Applied</a>
                                    <a class="dropdown-item" href="{{ route('messages') }}">Messages</a>
                                    <a class="dropdown-item" href="{{ route('transaction') }}">Transaction</a>
                                    <a class="dropdown-item" href="{{ route('changePassword') }}">Change Password</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                                    <a class="dropdown-item" href=" " onclick="deleteAccount({{ Auth::User()->id }})">Delete Account</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('job-list') }}" class="btn btn-theme btn-md"><i class="flaticon-plus"></i> Apply For a Job</a>
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
                        <li><a href="{{ route('candidate-view-profile') }}"><i class="flaticon-portfolio"></i>Build Resume</a></li>
                        <li><a href="{{ route('bookmarked') }}"><i class="flaticon-heart"></i>Bookmark</a></li>
                        <li><a href="{{ route('applied') }}"><i class="flaticon-shield"></i>Applied</a></li>
                        <li><a href="{{ route('messages') }}"><i class="flaticon-mail"></i>Messages<span class="nav-tag">6</span></a></li>
                        <li><a href="{{ route('transaction') }}"><i class="flaticon-payment"></i>Transaction</a></li>
                        <li><a href="{{ route('changePassword') }}"><i class="flaticon-password"></i>Change Password</a></li>
                        <li><a href="{{ route('logout') }}"><i class="flaticon-logout"></i>Logout</a></li>
                    </ul>
                    <ul>
                        <li><a href=" " onclick="deleteAccount({{ Auth::User()->id }})"><i class="fa fa-power-off "></i>Delete Account</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function deleteAccount(id)
    {
        alert(id);
    }
</script>