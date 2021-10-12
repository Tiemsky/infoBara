@extends('layouts.candidate')
@section('content')

<div class="dashboard">
    <div class="container-fluid">
        <div class="row">
<div class="dashboard-content">
    <div class="content-area5">
        <div class="dashboard-header clearfix">
            <div class="row">
                <div class="col-sm-12 col-md-6"><h4>Change Password</h4></div>
                <div class="col-sm-12 col-md-6">
                    <div class="breadcrumb-nav">
                        <ul>
                            <li>
                                <a href="{{ route('welcome') }}">Index</a>
                            </li>
                            <li>
                                <a href="{{ route('candidate-dashboard') }}">Dashboard</a>
                            </li>
                            <li class="active">Change Password</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-list">
                    <h3 class="heading">Change Password</h3>
                    <div class="dashboard-message contact-1">
                        <form action="{{ route('passwordChanged') }}" method="POST">
                            @csrf
                            <div class="row">
                                @if (session('successMsg'))
                                    <div class="col-lg-12">
                                        <p class="alert alert-success flash-message">{{ session('successMsg') }}</p>
                                    </div>   
                                @endif
                                @if (session('errorMsg'))
                                    <div class="col-lg-12">
                                        <p class="alert alert-danger flash-message">{{ session('errorMsg') }}</p>
                                    </div>   
                                @endif
                 
                                <div class="col-lg-12">
                                    <div class="form-group name">
                                        <label>Current Password</label>
                                        <input type="password" name="current-password" class="form-control" placeholder="Current Password">
                                    </div>
                                    @error('current-password')
                                        <span class="" role="alert">
                                            <p class="text-danger" >{{$message}}</p>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group email">
                                        <label>New Password</label>
                                        <input type="password" name="new-password" class="form-control" placeholder="New Password">
                                    </div>
                                    @error('new-password')
                                        <span class="" role="alert">
                                            <p class="text-danger" >{{$message}}</p>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group subject">
                                        <label>Confirm New Password</label>
                                        <input type="password" name="confirm-new-password" class="form-control" placeholder="Confirm New Password">
                                    </div>
                                    @error('confirm-new-password')
                                        <span class="" role="alert">
                                            <p class="text-danger" >{{$message}}</p>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-lg-12">
                                    <div class="send-btn">
                                        <button type="submit" class="btn btn-md button-theme">Change Password</button>
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
