@extends('layouts.candidate')
@section('content')
<div class="dashboard">
    <div class="container-fluid">
        <div class="row">

<div class="dashboard-content">
    <div class="dashboard-header clearfix">
        <div class="row">
            <div class="col-sm-12 col-md-6"><h4>Job Bookmarked</h4></div>
            <div class="col-sm-12 col-md-6">
                <div class="breadcrumb-nav">
                    <ul>
                        <li>
                            <a href="{{ route('welcome') }}">Home Page</a>
                        </li>
                        <li>
                            <a href="{{ route('candidate-dashboard') }}">Dashboard</a>
                        </li>
                        <li class="active">Job Bookmarked</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="submit-address dashboard-list">
        <h2 class="heading">Job Bookmarked</h2>
        <div class="row">
            <div class="col-lg-12">
                @foreach ($jobs as $job)
                    <div class="job-item ji-3 media">
                        <a class="icon" href="{{route('job-detail', [$job->id, $job->slug])}}">
                            <div class="company-logo">
                                <img src="{{ asset('assets/img/company-logo/logo-5.png') }}" alt="logo">
                            </div>
                        </a>
                        <div class="media-body align-self-center">
                            <h4><a href="{{route('job-detail', [$job->id, $job->slug])}}">{{ $job->title }}</a></h4>
                            <div class="job-ad-item">
                                <ul>
                                    <li><i class="flaticon-pin"></i>{{ $job->country }}</li>
                                    <li><i class=""></i>{{ $job->state }}</li>
                                    <li><i class=""></i>{{ $job->city }}</li>
                                    <li><i class="flaticon-clock"></i>{{ $job->type }}</li>
                                    <li><i class=""></i>Posted: {{$job->created_at->diffForHumans()}}</li>
                                
                                </ul>
                            </div>
                            <div class="div-right-2">
                                <a href="{{route('job-detail', [$job->id, $job->slug])}}" class="btn-1 btn-gray"><i class="fa fa-fw fa-check-circle-o"></i></a>
                                <a onClick="unsaved({{ $job->id }})"  class="btn-1 btn-gray"><i class="fa fa-fw fa-times-circle-o"></i></a>
                            </div>
                        </div>
                    </div> 
                @endforeach
        
            </div>
        </div>
    </div>
    <p class="sub-banner-2 text-center">© 2020 Theme Vessel. All Rights Reserved.</p>
</div>
        </div>
    </div>
</div>
<script  src="{{asset('assets/js/jquery-2.2.0.min.js')}}"></script>
<script>
    function unsaved(id) { 
        var csrf_token=$('meta[name="csrf_token"]').attr('content');
        var id =id;
        $.ajax({
            url : "{{ url('unsaved')}}" + '/' + id,
            type : "POST",
            data : {_token:'{{ csrf_token() }}'},
            success:function(data){
                console.log(data);
                window.location.reload();

            },
            error:function(data){
                console.log(data);

            }
        });
    }
   
</script>

@endsection