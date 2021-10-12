@extends('layouts.employer')
@section('content')
<div class="dashboard">
    <div class="container-fluid">
        <div class="row">

            <div class="dashboard-content">
                <div class="content-area5">
                    <div class="dashboard-header clearfix">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"><h4>Manage Jobs</h4></div>
                            <div class="col-sm-12 col-md-6">
                                <div class="breadcrumb-nav">
                                    <ul>
                                        <li>
                                            <a href="{{ route('welcome') }}">Index</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('employer-dashboard') }}">Dashboard</a>
                                        </li>
                                        <li class="active">Manage Jobs</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-list">
                        <div class="job-info job-info-2">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Job Title</th>
                                    <th class="ds-none"></th>
                                    <th class="hdn">Date</th>
                                    <th>Applications</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                @foreach ($myjobs as $myjob)
                                    <tbody>
                                        <tr class="responsive-table">
                                            <td class="image">
                                                <a href="#"><img alt="my-properties-3" src="img/avatar/avatar-3.jpg" class="img-fluid"></a>
                                            </td>
                                            <td class="p-left-20">
                                                <div class="inner">
                                                    <h5><a href="{{route('job-detail', [$myjob->country, $myjob->slug])}}">{{ $myjob->title }}</a></h5>
                                                    <ul>
                                                        <li><i class="flaticon-work"></i>{{ $myjob->position }}</li>
                                                        <li><i class="flaticon-pin"></i> {{ $myjob->country }}</li>
                                                        <li><i class="flaticon-clock"></i>{{ $myjob->type }}</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="hdn">{{ $myjob->deadline }}</td>
                                            <td><button onclick="applicants({{ $myjob->id  }})" class="btn btn-info">7+ Applied</button></td>
                                           
                                            <td>{{ $myjob->status == 1? 'Active' : 'Inactive'}}</td>
                                            <td class="actions">
                                                <a href="{{ route('edit-job',[$myjob->id]) }}"><i class="fa fa-pencil"></i></a>
                                                <a onclick="deleteJob({{ $myjob->id }})"><i class="delete fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                
                                    </tbody>
                                    
                                @endforeach
                               
                            </table>
                        </div>
                    </div>
                </div>
                <p class="sub-banner-2 text-center">© 2020 Theme Vessel. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>
<script  src="{{asset('assets/js/jquery-2.2.0.min.js')}}" ></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>

function deleteJob(id)
    {
            var csrf_token=$('meta[name="csrf_token"]').attr('content');
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    
                })   
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url : "{{ url('employer/delete-job/')}}" + '/' + id,
                            type : "POST",
                            data : {_token:'{{ csrf_token() }}'},
                            success: function(data){
                                swal({
                                    title:"Done!",
                                    text:"Experience deleted successfully!",
                                    icon:"success",
                                    type:"success"
                                    
                                }).then(function() {
                                window.location.reload();
                                });
                            },
                        
                            error :function(response){
                                console.log(response);
                                swal({
                                    title: 'Opps...',
                                    text : 'Something wrong try again later',
                                    type : 'error',
                                    timer : '1500'
                                })
                            }
                        })
                    } else {
                    swal({
                        title:'safe',
                        text:"Your data is still safe",
                        icon:"info",
                        type:"info"
                    });
                    }
                });
    }

    function applicants(id)
    {
        window.location.href="job/applicants" + '/' + id;

    }
</script>
@endsection