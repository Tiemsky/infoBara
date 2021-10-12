@extends('layouts.employer')
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
                                            <a href="{{ route('employer-dashboard') }}">Dashboard</a>
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
                                    <form action="{{ route('employer-update') }}" method="POST" enctype="multipart/form-data" >
                                    <!-- Edit profile photo -->
                                    @csrf
                                    
                                    @if($recruiter->photo == null)
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
                                        <img src="{{ asset('uploads/profile/'.$recruiter->photo) }}" alt="profile-photo" class="img-fluid">
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
                                                    <input type="text" name="first-name" class="form-control" placeholder="Your First Name" value="{{$employer->firstname }}">
                                                </div>
                                                @error('first-name')
                                                <span class="" role="alert">
                                                <p class="text-danger" >{{$message}}</p>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group name">
                                                    <label>Last Name</label>
                                                    <input type="text" name="last-name" class="form-control" placeholder="Your Last Name" value="{{ $employer->lastname }}">
                                                </div>
                                                @error('last-name')
                                                <span class="" role="alert">
                                                <p class="text-danger" >{{$message}}</p>
                                                </span>
                                                @enderror
                                            </div>


                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group number">
                                                    <label>Position</label>
                                                    <input type="text" name="position" class="form-control" placeholder="Position" value="{{$recruiter->position == null ? old('position'): $recruiter->position}}" >
                                                </div>
                                                @error('position')
                                                <span class="" role="alert">
                                                <p class="text-danger" >{{$message}}</p>
                                                </span>
                                                @enderror
                                            </div>


                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group subject">
                                                    <label>Phone</label>
                                                    <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $employer->phone }}">
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
                                                    <input type="email"  id="email" name="email" class="form-control" placeholder="Email" value="{{ $employer->email }}" >
                                                </div>
                                            </div>


                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <select id="country" class="input-text" name="country"  autofocus>
                                                        <option value="{{$recruiter->country}}">{{$recruiter->country}}</option>
                                                        @foreach ($countries as $key => $value)
                                                            <option value="{{ $key }}">{{ $value }}</option>
                                                        @endforeach
                                                      
                                                    </select>
                                                </div>
                                                @error('country')
                                                    <span class="" role="alert">
                                                        <p class="text-danger" >{{$message}}</p>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <select id="state" class="input-text" name="state" autofocus>
                                                        <option value="{{$recruiter->state}}">{{$recruiter->state}}</option>
                                                    </select>
                                                </div>
                                                @error('state')
                                                <span class="" role="alert">
                                                <p class="text-danger" >{{$message}}</p>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <select id="city" class="input-text" name="city" autofocus>
                                                        <option value="{{$recruiter->city}}">{{$recruiter->city}}</option>
                                                    </select>
                                                </div>
                                                @error('city')
                                                <span class="" role="alert">
                                                <p class="text-danger" >{{$message}}</p>
                                                </span>
                                                @enderror
                                            </div>  
                                            
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group mb-0 message">
                                                    <label>Skill you are hiring for:</label>
                                                    <textarea class="form-control" name="key-skill" placeholder="Ex: Javascript, Mysql, Laravel, Management, Finance">
                                                        {{$recruiter->key_skill == null ? old('key-skill'): $recruiter->key_skill}}
                                                    </textarea>
                                                </div>

                                                @error('key-skill')
                                                <span class="" role="alert">
                                                <p class="text-danger" >{{$message}}</p>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group mb-0 message">
                                                    <label>personal-experience</label>
                                                    <textarea class="form-control" name="personal-experience" placeholder="Your personal experience">
                                                        {{$recruiter->personal_experience == null ? old('personal-experience'): $recruiter->personal_experience}}
                                                    </textarea>
                                                </div>

                                                @error('personal-experience')
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