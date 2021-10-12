@extends('layouts.auth')

@section('content')
<div class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Form content box start -->
                <div class="form-content-box">
                    <!-- details -->
                    <div class="details">
                        <!-- Logo-->
                        <a href="index.html">
                            <img src="img/black-logo.png" class="cm-logo" alt="black-logo">
                        </a>
                        <!-- Name -->
                        <h3>Create an account</h3>
                        <!-- Form start-->
                        <form action="{{ route('employer-registered') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="company" class="input-text" placeholder="Company Name" value="{{ old('company') }}" autofocus>
                                @error('company')
                                <span class="" role="alert">
                                <p class="text-danger" >{{$message}}</p>
                                </span>
                                @enderror
                            </div>
                           
                            <div class="form-group">
                                <input type="text" name="firstname" class="input-text" placeholder="First Name" value="{{ old('firstname') }}" autofocus>
                                @error('firstname')
                                <span class="" role="alert">
                                <p class="text-danger" >{{$message}}</p>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="lastname" class="input-text" placeholder="Last Name" value="{{ old('lastname') }}" autofocus >
                                @error('lastname')
                                <span class="" role="alert">
                                <p class="text-danger" >{{$message}}</p>
                                </span>
                                @enderror
                            </div>
    
                            <div  class="form-group">
                                <div  class="form-check form-check-inline">
                                    <label  style="padding-right:30px !important;"  class="form-check-label" for="inlineRadio1">Gender</label>
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
                                    <label  style="padding-right:20px !important;" class="form-check-label" for="inlineRadio1">Male</label>
                                
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
                                    <label style="padding-right:10px !important;" class="form-check-label" for="inlineRadio2">Female</label>
                                   
                                </div>
                                @error('gender')
                                <span class="" role="alert">
                                <p class="text-danger" >{{$message}}</p>
                                </span>
                                @enderror
                                    
                            </div>
                             
                            <div class="form-group">
                                <input type="text" name="email" class="input-text" placeholder="Email Address" value="{{ old('email') }}" autofocus>
                                @error('email')
                                <span class="" role="alert">
                                <p class="text-danger" >{{$message}}</p>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <span><small><i>Phone number with country code; ie:+225</i></small></span>
                                <input type="text" name="phone" class="input-text" placeholder="Phone Number" value="{{ old('phone') }}" autofocus>
                                @error('phone')
                                <span class="" role="alert">
                                <p class="text-danger" >{{$message}}</p>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="input-text" placeholder="Password" autofocus>
                                @error('password')
                                <span class="" role="alert">
                                <p class="text-danger" >{{$message}}</p>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" name="confirm-password" class="input-text" placeholder="Confirm Password" autofocus>
                                @error('confirm-password')
                                <span class="" role="alert">
                                <p class="text-danger" >{{$message}}</p>
                                </span>
                                @enderror
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="terms" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">I agree with <a href="" target="_blank" rel="noopener noreferrer"> terms and conditions</a></label>
                                @error('terms')
                                <span class="" role="alert">
                                <p class="text-danger" >{{$message}}</p>
                                </span>
                                @enderror
                              </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn-md button-theme btn-block">Signup</button>
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
@endsection
