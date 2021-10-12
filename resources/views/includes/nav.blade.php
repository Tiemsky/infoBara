<body>
    <div class="page_loader"></div>
    
    <!-- Main header start -->
    <header class="main-header header-transparent sticky-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand logo" href="index.html">
                    <img src="img/logos/logo.png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav header-ml">
                        <li class="nav-item ni-2"><a class="nav-link manual-setting" href=" {{route('welcome')}}" >Home</a></li>
                        <li class="nav-item ni-2"><a class="nav-link manual-setting" href="{{ route('candidate-list') }}" >Candidates</a></li>
                        <li class="nav-item ni-2"><a class="nav-link manual-setting" href="{{ route('company-list') }}" >Companies</a></li>
                        <li class="nav-item ni-2"><a class="nav-link manual-setting" href="{{ route('job-list') }}" >Jobs</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Recuiter
                            </a>
                            <ul class="dropdown-menu dm-2" aria-labelledby="navbarDropdownMenuLink7">
                                <li><a class="dropdown-item" href="">Search CV</a></li>
                               
                            </ul>
                        </li>
                        <li class="nav-item ni-2"><a class="nav-link manual-setting" href="{{ route('services') }}" >Services</a></li>
                        <li class="nav-item ni-2"><a class="nav-link manual-setting" href="{{ route('how-it-works') }}" >How it works</a></li>
                       
                    </ul>
                    {{-- checking if the user has logged in before displaying the navigation bar --}}
                    @if ((Auth::check() && Auth::User()->user_type=='seeker'))

                    <ul class="navbar-nav ml-auto">
                        {{-- <li class="nav-item ni-2">
                            <a class="nav-link">
                                {{ Auth::User()->lastname }}
                            </a>
                        </li> --}}
                       
                        <li class="nav-item ni-2">
                            <a class="nav-link  deffold" href="">
                                |
                            </a>
                        </li>
                        <li class="nav-item ni-2">
                            <a class="nav-link " href="{{ route('logout') }}">
                                Logout
                            </a>
                        </li>
                        <li class="nav-item ni-2">
                            <a class="nav-link  deffold" href="">
                                |
                            </a>
                        </li>
                   
                        <li class="nav-item ">
                            <a  href="{{ route('candidate-dashboard') }}" class="nav-link  link-color alert sucess-alert"><i class=""></i>Dashboard</a>
                        </li>
                    </ul>
                        
                    @elseif((Auth::check() && Auth::User()->user_type=='employer'))
                    <ul class="navbar-nav ml-auto">
                        {{-- <li class="nav-item ni-2">
                            <a class="nav-link">
                                {{ Auth::User()->lastname }}
                            </a>
                        </li> --}}
                       
                        <li class="nav-item ni-2">
                            <a class="nav-link  deffold" href="">
                                |
                            </a>
                        </li>
                        <li class="nav-item ni-2">
                            <a class="nav-link " href="{{ route('logout') }}">
                                Logout
                            </a>
                        </li>
                        <li class="nav-item ni-2">
                            <a class="nav-link  deffold" href="">
                                |
                            </a>
                        </li>
                   
                        <li class="nav-item ">
                            <a  href="{{ route('employer-dashboard') }}" class="nav-link  link-color alert sucess-alert"><i class=""></i>Dashboard</a>
                        </li>
                    </ul>
                        
                    @else

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ni-2">
                            <a class="nav-link " href=" {{route('login')}} ">
                                Login
                            </a>
                        </li>
                       
                        <li class="nav-item ni-2">
                            <a class="nav-link  deffold" href="">
                                /
                            </a>
                        </li>
                        <li class="nav-item ni-2">
                            <a class="nav-link " data-toggle="modal" data-target=".bd-example-modal-sm">
                                Register
                            </a>
                        </li>
                   
                        <li class="nav-item ">
                            <a  href="" class="nav-link text-center link-color"><i class="flaticon-plus"></i> Post a Jobs</a>
                        </li>
                    </ul>
                        
                    @endif


                </div>
            </nav>
        </div>
    </header>
    <!-- Main header end -->

      <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModal">Registration</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <button type="button" class="btn btn-primary" >
                    <a href="{{ route('employer-registration') }}">Employer</a>
                    </button>
                    <button type="button" class="btn btn-secondary" >
                        <a href="{{ route('seeker-registration') }}">JobSeeker</a>
                    </button>
                    
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    
                </div>

            </div>
            </div>
      </div>