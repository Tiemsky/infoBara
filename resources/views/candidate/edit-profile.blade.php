@extends('layouts.candidate')
@section('content')
<div class="dashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="dashboard-content">
                <div class="content-area5">
                    <div class="dashboard-header clearfix">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"><h4>Edit Profile</h4></div>
                            <div class="col-sm-12 col-md-6">
                                <div class="breadcrumb-nav">
                                    <ul>
                                        <li>
                                            <a href="{{ route('welcome') }}">Index</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('candidate-dashboard') }}">Dashboard</a>
                                        </li>
                                        <li class="active">Edit Profile</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="dashboard-list">
                        <h3 class="heading">Edit Profile</h3>
                        <div class="dashboard-message contact-1 bdr clearfix">
                            <div class="row">
                                <div class="col-lg-3 col-md-3">
                                    <form action="{{ route('update-profile')}}" method="POST" enctype="multipart/form-data" >
                                    <!-- Edit profile photo -->
                                    @csrf
                                    
                                    @if($Candidate->profile->avatar==null)
                                    <div class="edit-profile-photo">
                                        <img src="{{ asset('uploads/profile/default.jpg') }}" alt="profile-photo" class="img-fluid">
                                        <div class="change-photo-btn">
                                            <div class="photoUpload">
                                                <span><i class="fa fa-upload"></i></span>
                                                <input type="file" name="profile_pic" class="upload">
                                            </div>
                                        </div>
                                      
                                    </div>
                                    @else
                                    <div class="edit-profile-photo">
                                        <img src="{{ asset('uploads/profile/'.$Candidate->profile->avatar) }}" alt="profile-photo" class="img-fluid">
                                        <div class="change-photo-btn">
                                            <div class="photoUpload">
                                                <span><i class="fa fa-upload"></i></span>
                                                <input type="file" name="profile_pic" class="upload">
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                      

                                        @error('profile_pic')
                                        <br>
                                        <span class="" role="alert">
                                        <p class="text-danger" >{{$message}}</p>
                                        </span>
                                        @enderror
                                       
                                        {{-- <input type="submit"  class="btn btn-md button-theme btn-photo" value="upload" style="margin-left: px;"> --}}
                                    

                                </div>
                                <div class="col-lg-9 col-md-9">
                                    
                                       
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group name">
                                                    <label>First Name</label>
                                                    <input type="text" name="firstname" class="form-control" placeholder="Your First Name" value="{{$Candidate->firstname}}">
                                                </div>
                                                @error('firstname')
                                                <span class="" role="alert">
                                                <p class="text-danger" >{{$message}}</p>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group name">
                                                    <label>Last Name</label>
                                                    <input type="text" name="lastname" class="form-control" placeholder="Your Last Name" value="{{$Candidate->lastname}}">
                                                </div>
                                                @error('lastname')
                                                <span class="" role="alert">
                                                <p class="text-danger" >{{$message}}</p>
                                                </span>
                                                @enderror
                                            </div>


                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group subject">
                                                    <label>Phone</label>
                                                    <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{$Candidate->phone }}">
                                                </div>
                                                @error('phone')
                                                <span class="" role="alert">
                                                <p class="text-danger" >{{$message}}</p>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group number">
                                                    <label>Email</label>
                                                    <input type="email"  id="email" name="email" class="form-control" placeholder="Email" value="{{$Candidate->email }}" >
                                                </div>
                                            </div>


                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <select id="country" class="input-text" name="Country"  autofocus>
                                                        <option value="{{$Candidate->profile->country}}">{{$Candidate->profile->country}}</option>
                                                        @foreach ($countries as $key => $value)
                                                            <option value="{{ $key }}">{{ $value }}</option>
                                                        @endforeach
                                                      
                                                    </select>
                                                </div>
                                                @error('Country')
                                                    <span class="" role="alert">
                                                        <p class="text-danger" >{{$message}}</p>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <select id="state" class="input-text" name="State" autofocus>
                                                        <option value="{{$Candidate->profile->state}}">{{$Candidate->profile->state}}</option>
                                                    </select>
                                                </div>
                                                @error('State')
                                                <span class="" role="alert">
                                                <p class="text-danger" >{{$message}}</p>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <select id="city" class="input-text" name="City" autofocus>
                                                        <option value="{{$Candidate->profile->city}}">{{$Candidate->profile->city}}</option>
                                                    </select>
                                                </div>
                                                @error('City')
                                                    <span class="" role="alert">
                                                        <p class="text-danger" >{{$message}}</p>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Prefered Job Type</label>
                                                    <select id="preferred-job" class="input-text" name="preferred-job" autofocus>
                                                        <option value="{{$Candidate->profile->job_type_preferred}}">{{$Candidate->profile->job_type_preferred}}</option>
                                                        <option value="Remote">Remote</option>
                                                        <option value="Freelance">Freelance</option>
                                                        <option value="Part-Time">Part-Time</option>
                                                        <option value="Full-Time">Full-Time</option>
                                                        <option value="Internship">Internship</option>
                                                    </select>
                                                </div>
                                                @error('preferred-job')
                                                <span class="" role="alert">
                                                <p class="text-danger" >{{$message}}</p>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group number">
                                                    <label>Address</label>
                                                    <input type="text" name="address" class="form-control" placeholder="Address" value="{{$Candidate->profile->address}}" >
                                                </div>
                                                @error('address')
                                                <span class="" role="alert">
                                                <p class="text-danger" >{{$message}}</p>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group number">
                                                    <label>Date of Birth</label>
                                                    <input type="text"  name="date_of_birth" class="form-control" id="datepicker" placeholder="22/08/2000" value="{{$Candidate->profile->date_of_birth}}">
                                                </div>
                                                  @error('date_of_birth')
                                                <span class="" role="alert">
                                                <p class="text-danger" >{{$message}}</p>
                                                </span>
                                                @enderror
                                            </div>


                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Salary Range From</label>
                                                    <select id="" class="input-text" name="salary-range-from" autofocus>
                                                        <option value="{{$Candidate->profile->expected_salary_from}}">{{$Candidate->profile->expected_salary_from}}</option>
                                                        <option value="1000k">1000K</option>
                                                        <option value="2000k">2000K</option>
                                                        <option value="3000k">3000K</option>
                                                        <option value="4000k">4000K</option>
                                                        <option value="5000k">5000k</option>
                                                        <option value="6000k">6000K</option>
                                                        <option value="7000k">7000K</option>
                                                        <option value="8000k">8000K</option>
                                                        <option value="9000k">9000K</option>
                                                        <option value="10000k">10000k</option>
                                                    </select>
                                                </div>
                                                @error('salary-range-from')
                                                <span class="" role="alert">
                                                <p class="text-danger" >{{$message}}</p>
                                                </span>
                                                @enderror
                                            </div>


                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Salary Range To</label>
                                                    <select id="" class="input-text" name="salary-range-to" autofocus>
                                                        <option value="{{$Candidate->profile->expected_salary_to}}">{{$Candidate->profile->expected_salary_to}}</option>
                                                        <option value="1000k">1000K</option>
                                                        <option value="2000k">2000K</option>
                                                        <option value="3000k">3000K</option>
                                                        <option value="4000k">4000K</option>
                                                        <option value="5000k">5000k</option>
                                                        <option value="6000k">6000K</option>
                                                        <option value="7000k">7000K</option>
                                                        <option value="8000k">8000K</option>
                                                        <option value="9000k">9000K</option>
                                                        <option value="10000k">10000k</option>
                                                        <option value="10000k">10000k+</option>
                                                    </select>
                                                </div>
                                                @error('salary-range-to')
                                                <span class="" role="alert">
                                                <p class="text-danger" >{{$message}}</p>
                                                </span>
                                                @enderror
                                            </div>
                                            

                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group mb-0 message">
                                                    <label>Your Profile</label>
                                                    <textarea class="form-control" name="about-me" placeholder="Make your profile attractive">
                                                        {{$Candidate->profile->about_me  }}
                                                    </textarea>
                                                </div>

                                                @error('about-me')
                                                <span class="" role="alert">
                                                <p class="text-danger" >{{$message}}</p>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="send-btn">
                                                    <button type="submit" class="btn btn-md button-theme btn-block">Send Changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                       
                        <div class="col-md-12">
                            <div class="dashboard-list">
                                <h3 class="heading">Socials</h3>
                                <div class="dashboard-message contact-1">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group name">
                                                    <label>Facebook</label>
                                                    <input type="text" name="facebook" class="form-control" placeholder="https://www.facebook.com">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group email">
                                                    <label>Twitter</label>
                                                    <input type="text" name="twitter" class="form-control" placeholder="https://twitter.com">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group subject">
                                                    <label>Vkontakte</label>
                                                    <input type="text" name="vkontakte" class="form-control" placeholder="vk.com">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group number">
                                                    <label>Whatsapp</label>
                                                    <input type="email" name="whatsapp" class="form-control" placeholder="https://www.whatsapp.com">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="send-btn">
                                                    <button type="submit" class="btn btn-md button-theme btn-block">Send Changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="sub-banner-2 text-center">© 2020 Theme Vessel. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
$( "#datepicker" ).datepicker({ dateFormat: 'dd-mm-yy' }).val();
$(document).ready(function(){
    $('#email').on('click',function(){
        swal("Alert!", "the email field cannot be changed!", "error");
        $( "#email" ).prop( "disabled", true );
      
    });
    
});

</script>

<!-- Dashbord end -->
@endsection
@section('script')
<script>
    tinymce.init({
        selector: 'textarea',
        Plugins:'link code',
        menubar:'format',
    
      });
</script>
    
@endsection