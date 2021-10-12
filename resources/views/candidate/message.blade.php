@extends('layouts.candidate')
@section('content')

<div class="dashboard">
    <div class="container-fluid">
        <div class="row">

<div class="dashboard-content">
    <div class="dashboard-header clearfix">
        <div class="row">
            <div class="col-sm-12 col-md-6"><h4>Messages</h4></div>
            <div class="col-sm-12 col-md-6">
                <div class="breadcrumb-nav">
                    <ul>
                        <li>
                            <a href="{{ route('welcome') }}">Home Page</a>
                        </li>
                        <li>
                            <a href="{{ route('candidate-dashboard') }}">Dashboard</a>
                        </li>
                        <li class="active">Messages</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="submit-address dashboard-list">
        <form method="GET">
            <h2 class="heading">Messages</h2>
            <div class="row pad-20">
                <div class="col-lg-12">
                    <div class="comment">
                        <div class="comment-author">
                            <a href="#">
                                <img src="{{ asset('assets/img/avatar/avatar-1.jpg') }}" alt="comments-user">
                            </a>
                        </div>
                        <div class="comment-content">
                            <div class="comment-meta">
                                <h5>
                                    Maikel Alisa
                                </h5>
                                <div class="comment-meta">
                                    8:42 PM 10/28/2019
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel, dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante.</p>
                        </div>
                    </div>
                 
                </div>
            </div>

        </form>
    </div>
    <p class="sub-banner-2 text-center">© 2020 Theme Vessel. All Rights Reserved.</p>
</div>
</div>
</div>
</div>

@endsection