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
                            <a href="{{ route('welcome') }}">
                                <img src="img/black-logo.png" class="cm-logo" alt="black-logo">
                            </a>
                            <!-- Name -->
                            <h3>Recover your password</h3>
                            <!-- Form start -->
                            <form action="" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="email" class="input-text" placeholder="Email Address">
                                </div>
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn-md button-theme btn-block">Send Me Email</button>
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
                            <span>Already a member? <a href="{{ route('login') }}">Login here</a></span>
                        </div>
                    </div>
                    <!-- Form content box end -->
                </div>
            </div>
        </div>
    </div>
 
    </body>

@endsection