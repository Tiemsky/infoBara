@extends('layouts.employer')
@section('content')
<div class="dashboard">
    <div class="container-fluid">
        <div class="row">

            <div class="content-area5 dashboard-content">
                <div class="content-area5">
                    <div class="dashboard-header clearfix">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"><h4>Manage Candidate</h4></div>
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
                                    <th>Job Titel</th>
                                    <th class="ds-none"></th>
                                    <th class="hdn">Date</th>
                                    <th>Views</th>
                                    <th>Status</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                              @foreach ($candidates as $candidate)
                              <tr class="responsive-table">
                                @if ($candidate->profile->avatar == null)
                                <td class="image">
                                    <a href="#"><img alt="user-photo" src="{{ asset('uploads/profile/default.jpg') }}" class="img-fluid"></a>
                                </td>
                                    
                                @else
                                <td class="image">
                                    <a href="#"><img alt="user-photo" src="{{ asset('uploads/profile/'.$candidate->profile->avatar) }}" class="img-fluid"></a>
                                </td>
                                    
                                @endif
                                <td>
                                    <div class="inner">
                                        <h5><a href="#">{{ $candidate->firstname }}</a></h5>
                                        <ul>
                                            <li><i class="flaticon-work"></i> Content Writer</li>
                                            <li><i class="flaticon-pin"></i>{{ $candidate->profile->country }}</li>
                                        </ul>
                                    </div>
                                </td>
                                <td class="hdn">Jan 7, 2019</td>
                                <td>27</td>
                                <td>Active</td>
                             
                            </tr>
                                  
                              @endforeach
                          
                                </tbody>
                            </table>
                        </div>
                    </div>
                       <!-- Page navigation start -->
                <div class="pagination-box text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            {{ $candidates->links() }}                      
                        </ul>
                    </nav>
                </div>
                   
                </div>
                <p class="sub-banner-2 text-center">© 2020 Theme Vessel. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>
@endsection