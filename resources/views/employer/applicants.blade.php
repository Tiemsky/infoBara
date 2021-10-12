@extends('layouts.employer')
@section('content')
<div class="dashboard">
    <div class="container-fluid">
        <div class="row">

            <div class="content-area5 dashboard-content">
                <div class="content-area5">
                    <div class="dashboard-header clearfix">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"><h4>{{ $job->title }}</h4></div>
                            <div class="col-sm-12 col-md-6">
                                <div class="breadcrumb-nav">
                                    <ul>
                                        <li>
                                            <a href="{{ route('welcome') }}">Index</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('employer-dashboard') }}">Dashboard</a>
                                        </li>
                                        <li class="active">Manage Candidate</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-list">
                        <div class="job-info">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th class="ds-none">Applicant Full Name</th>
                                    <th class="hdn">Application date</th>
                                    <th>Resume</th>
                                    <th>Approved</th>
                                    <th>Reject</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($applicants as $applicant)
                                        @foreach ($applicant->users as $user)
                                            <tr class="responsive-table">
                                                @if($user->profile->avatar==null)
                                                    <td class="image">
                                                        <a href="#"><img alt="user-photo" src="{{ asset('uploads/profile/default.jpg') }}" class="img-fluid"></a>
                                                    </td>
                                                @else
                                                    <td class="image">
                                                        <a href="#"><img alt="user-photo" src="{{ asset('uploads/profile/'.$user->profile->avatar) }}" class="img-fluid"></a>
                                                    </td>

                                                @endif
                                              
                                                <td>
                                                    <div class="inner">
                                                    <h5><a href="{{ route('candidate-details',[$user->id]) }}">{{$user->firstname }} {{$user->lastname }}</a></h5>
                                                        <ul>
                                                            
                                                            <li><i class="flaticon-pin"></i> {{ $user->profile->country }}</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="hdn">{{ $user->created_at }}</td>
                                                <td><button class="btn btn-info"><a href="#" download=""></a>Download</button></td>
                                                <td><button onclick="test({{$applicant->id}},{{ $user->id }})" class="btn btn-success">Approved</button></td>
                                                <td class="actions">
                                                    <button class="btn btn-danger">Reject</button>
                                                
                                                </td>
                                            </tr>
                                            
                                        @endforeach
                                      
                                        
                                    @endforeach
                                
                       
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <p class="sub-banner-2 text-center">© 2020 Theme Vessel. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>
<script>
    function test(jobId, userId) {
        var final = jobId+' '+ userId;
        //alert(final);
      }
</script>
@endsection