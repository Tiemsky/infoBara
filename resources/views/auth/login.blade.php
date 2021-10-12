@extends('layouts.auth')

@section('content')

<body class="bg-grea">
    <div class="page_loader"></div>
    
    <!-- Contact section start -->
    <div class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form content box start -->
                    <div class="form-content-box">
                        <!-- details -->
                        <div class="details">
                            <!-- Logo -->
                            <a href="index.html">
                                <img src="img/black-logo.png" class="cm-logo" alt="black-logo">
                            </a>
                            <!-- Name -->
                            <h3>Sign into your account</h3>
                            @if (session('status'))
                                <p class="alert-success flash-message"> {{ session('status') }}</p>
                            @endif
                            @if (session('invalid'))
                                <div class="alert-danger" role="alert">
                                    {{ session('invalid') }}
                                </div>
                            @endif
                            <!-- Form start -->
                            <form action="{{ route('login-Authentication') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="email" class="input-text" placeholder="Email Address" value="{{old('email')}}" autofocus>
                                    @error('email')
                                    <span class="" role="alert">
                                    <p class="text-danger" >{{$message}}</p>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="input-text" placeholder="Password" autofocus >
                                    @error('password')
                                    <span class="" role="alert">
                                    <p class="text-danger" >{{$message}}</p>
                                    </span>
                                    @enderror
                                </div>
                                <div class="checkbox">
                                    <div class="ez-checkbox pull-left">
                                        <label>
                                            <input type="checkbox" class="ez-hide">
                                            Remember me
                                        </label>
                                    </div>
                                    <a href="{{ route('reset-password') }}" class="link-not-important pull-right">Forgot Password</a>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn-md button-theme btn-block">login</button>
                                </div>
                            </form>
                            <!-- Social List -->
                            <ul class="social-list clearfix">
                                <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <!-- Footer -->
                        <div class="footer">
                            <span>Don't have an account? <a href="signup.html">Register here</a></span>
                        </div>
                    </div>
                    <!-- Form content box end -->
                </div>
            </div>
        </div>
    </div>

@endsection
