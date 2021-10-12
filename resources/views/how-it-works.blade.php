@extends('layouts.main')
@section('content')

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>How it work</h1>
            <ul class="breadcrumbs">
                <li><a href="{{ route('welcome') }}">Home</a></li>
                <li class="active">How it work</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- How it work section start -->
<div class="how-it-work-section content-area-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="how-it-work media">
                    <div class="photo mr-70">
                        <img src="{{ asset('assets/img/work/work-2.png') }}" alt="work" class="img-fluid">
                        <div class="number nmr">01</div>
                    </div>
                    <div class="media-body align-self-center">
                        <h2>Create Account</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 clearfix mb-768-30">
                <div class="how-it-work media">
                    <div class="media-body align-self-center hediin-mb-30">
                        <h2>Search Your Job</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="photo ml-70">
                        <img src="{{ asset('assets/img/work/work-2.png') }}" alt="work" class="img-fluid">
                        <div class="number nmr-2">02</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="how-it-work media mb-0">
                    <div class="photo mr-70">
                        <img src="{{ asset('assets/img/work/work-3.png') }}" alt="work" class="img-fluid">
                        <div class="number nmr">03</div>
                    </div>
                    <div class="media-body align-self-center">
                        <h2>Apply For Job</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- How it work section end -->
    
@endsection