@extends('layouts.admin')
@section('content')
<create-blog></create-blog>

{{-- <div class="dashboard">
    <div class="container-fluid">
        <div class="row">

    <div class="dashboard-content">
    <div class="dashboard-header clearfix">
        <div class="row">
            <div class="col-sm-12 col-md-6"><h4>Post a Job</h4></div>
            <div class="col-sm-12 col-md-6">
                <div class="breadcrumb-nav">
                    <ul>
                        <li>
                            <a href="{{ route('welcome') }}">Index</a>
                        </li>
                        <li>
                            <a href="{{ route('employer-dashboard') }}">Dashboard</a>
                        </li>
                        <li class="active">Post a Job</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="submit-address dashboard-list">
        <form method="POST" data-parsley-validate action="{{ route('post.store') }}">
            @csrf
            <h2 class="bg-grea-3 heading">Basic Information</h2>
            <div class="search-contents-sidebar">
                <div class="row pad-20">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Blog Title</label>
                            <input type="text" class="input-text" name="blog-title" placeholder="Blog Title" value="{{ old('blog-title') }}" required>
                        </div>
                        @error('job-title')
                            <span class="" role="alert">
                                <p class="text-danger" >{{$message}}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Blog Category</label>
                            <select class="input-text" name="job-type" value="{{ old('job-type') }}" required>
                                <option value="">Job Type</option>
                                <option value="Full-Time">Full time</option>
                                <option value="Part-Time">Part time</option>
                                <option value="Freelance">Freelance</option>
                                <option value="Temporary">Temporary</option>
                            </select>
                        </div>
                        @error('job-type')
                            <span class="" role="alert">
                                <p class="text-danger" >{{$message}}</p>
                            </span>
                        @enderror
                    </div>
               
                   
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Job Description</label>
                            <textarea class="input-text" name="blog-body" placeholder="Blog description" required> 
                                {{ old('blog-body') }}
                            </textarea>
                        </div>
                    </div>
                    @error('blog-body')
                        <span class="" role="alert">
                            <p class="text-danger" >{{$message}}</p>
                        </span>
                    @enderror
                    </div>
                    <div class="col-lg-6">
                        <div class="post-btn">
                            <input type="submit" class="btn btn-md button-theme" value="Post Now">
                                
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

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
$( "#datepicker" ).datepicker({ dateFormat: 'dd-mm-yy' }).val();
</script>
@endsection
@section('script')
<script>
    tinymce.init({
        selector: 'textarea',
        Plugins:'link code',
        menubar:'format',
    
      });
</script> --}}
    
@endsection