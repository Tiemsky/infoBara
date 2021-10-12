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
                            <form action="{{ route('update-company') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <!-- Edit profile photo -->
                                        @if($company->logo==null)
                                            <div class="edit-profile-photo">
                                                <img src="{{ asset('uploads/logo/default-logo.png') }}" alt="logo" class="img-fluid">
                                                <div class="change-photo-btn">
                                                    <div class="photoUpload">
                                                        <span><i class="fa fa-upload"></i></span>
                                                        <input type="file" name="logo" class="upload">
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="edit-profile-photo">
                                                <img src="{{ asset('uploads/logo/'.$company->logo) }}" alt="logo" class="img-fluid">
                                                <div class="change-photo-btn">
                                                    <div class="photoUpload">
                                                        <span><i class="fa fa-upload"></i></span>
                                                        <input type="file" name="logo" class="upload">
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-lg-9 col-md-9">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group name">
                                                    <label>Company Name</label>
                                                    <input type="text" name="company-name" class="form-control" placeholder="Company Name" value="{{ $company->company_name }}">
                                                </div>
                                                @error('company-name')
                                                    <span class="" role="alert">
                                                        <p class="text-danger" >{{$message}}</p>
                                                    </span>
                                                @enderror
                                            </div>
                                             <div class="col-lg-6 col-md-6">
                                                <div class="form-group name">
                                                    <label>Website</label>
                                                    <input type="text" name="website" class="form-control" placeholder="Website (Ex:https://www.google.com)" value="{{$company->website == null ? $company->website : old('website') }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group name">
                                                    <label>Tel/Fax</label>
                                                    <input type="text" name="contact" class="form-control" placeholder="Tel/Fax" value="{{$company->phone !==null ? $company->phone : old('contact')  }}">
                                                </div>
                                                @error('contact')
                                                    <span class="" role="alert">
                                                        <p class="text-danger" >{{$message}}</p>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="input-text">
                                                    <label>Email</label>
                                                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $company->email }}">
                                                </div>
                                                @error('email')
                                                    <span class="" role="alert">
                                                        <p class="text-danger" >{{$message}}</p>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <select id="country" class="input-text" name="country"  autofocus>
                                                        <option value="{{ $company->country }}">{{ $company->country }}</option>
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
                                                            <option value="{{ $company->state }}">{{ $company->state }}</option>
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
                                                            <option value="{{ $company->city }}">{{ $company->city }}</option>
                                                        </select>
                                                    </div>
                                                    @error('city')
                                                        <span class="" role="alert">
                                                            <p class="text-danger" >{{$message}}</p>
                                                        </span>
                                                    @enderror
                                                </div>
                                                    
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group email">
                                                        <label>Home Address</label>
                                                        <input type="text" name="address" class="form-control" placeholder="Address" value="{{$company->address == null ? $company->address : old('address')}}">
                                                    </div>
                                                    @error('address')
                                                        <span class="" role="alert">
                                                            <p class="text-danger" >{{$message}}</p>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group mb-0 message">
                                                        <label>Company Description</label>
                                                        <textarea class="form-control" name="description" placeholder="Write">{{$company->description }}</textarea>
                                                    </div>
                                                    @error('description')
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
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Social Media Links starting over here!! -->
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