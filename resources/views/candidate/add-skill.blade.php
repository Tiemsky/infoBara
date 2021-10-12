@extends('layouts.candidate')
@section('content')

<div class="dashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="dashboard-content">
                <div class="dashboard-header clearfix">
                    <div class="row">
                        <div class="col-sm-12 col-md-6"><h4>Build My Resume</h4></div>
                        <div class="col-sm-12 col-md-6">
                            <div class="breadcrumb-nav">
                                <ul>
                                    <li>
                                        <a href="{{ route('welcome') }}">Home Page</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('candidate-dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="active">Add Resume</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="submit-address dashboard-list">

                    <form id="skill" action="{{ route('save-skill') }}" method="POST">
                        @csrf
                        <h2 class="bg-grea-3 heading">Skills & Portfolio</h2>
                   
                        <div class="search-form initial-skill">
                            <div class="show"></div>
                            @if (session('validation'))
                            <p class="alert-success flash-message"> {{ session('validation') }}</p>
                        @endif
                            <div class="row pad-20 ">
                                
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Skills</label>
                                        <input type="text" class="input-text" name="skill[]" placeholder="Skills" required >
                                    </div>
                                    @error('skill')
                                    <span class="" role="alert">
                                    <p class="text-danger" >{{$message}}</p>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Percentage</label>
                                        <select id="percentage" class="input-text" name="percentage[]" required>
                                            <option value="">--percentage--</option>
                                            <option value="20">20%</option>
                                            <option value="40">40%</option>
                                            <option value="60">60%</option>
                                            <option value="80">80%</option>
                                            <option value="100">100%</option>
                                        </select>
                                    </div>
                                    @error('percentage')
                                    <span class="" role="alert">
                                    <p class="text-danger" >{{$message}}</p>
                                    </span>
                                    @enderror
                                </div>
                                <i class="fa fa-plus-circle" aria-hidden="true"> <a class="text-primary add-me">Add More</a></i>
                            </div>
                        </div>

                       
                        <div class="col-lg-6">
                            <div class="post-btn">
                                <button  class="btn btn-md button-theme" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                                <div class="col-lg-12">
                                    
                                    <h2 class="bg-grea-3 heading">Upload your Resume</h2>
                                    <div id="myDropZone" class="dropzone dropzone-design dz-clickable form-group">
                                        <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="post-btn">
                                        <button type="submit" class="btn btn-md button-theme">Upload Here</button>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
 
        $(document).ready(function(e){


        });


       $(document).ready(function(){

                var max_fields = 5; //maximum input boxes allowed
                var wrapper = $(".initial-skill"); //Fields wrapper
                var add_button = $(".add-me"); //Add button ID
                var x = 1; //initlal text box count
                var new_input =' <div class="search-form " >'+
                                '            <div class="row pad-20 ">'+
                                '                <div class="col-lg-6 col-md-6 col-sm-12">'+
                                '                    <div class="form-group">'+
                                '                        <label>Skills</label>'+
                                '                        <input type="text" class="input-text" name="skill[]" placeholder="Skills" required>'+

                                '                    </div>'+
                                '                </div>'+
                                '                <div class="col-lg-6 col-md-6 col-sm-12">'+
                                '                    <div class="form-group">'+
                                '                        <label>Percentage</label>'+
                                '                       <select id="percentage" class="input-text" name="percentage[]" required>'+
                                '                            <option value="">--percentage--</option>'  +
                                '                            <option value="20">20%</option>'            +                
                                '                            <option value="40">40%</option>'+
                                '                            <option value="60">60%</option>'+
                                '                            <option value="80">80%</option>'+
                                '                            <option value="100">100%</option>'+
                                '                        </select>'+
                                '                    </div>'+
                                '                </div>'+
                                '                <i class="fa fa-trash-o" aria-hidden="true"> <a class="delete-btn">Remove</a></i>'+
                                '            </div>'+
                            
                                '</div>';
                                
                $(add_button).click(function(e){ //on add input button click
                    e.preventDefault();
                    if(x < max_fields){ //max input box allowed
                        x++; //text box increment
                        // $(wrapper).append(new_input); //add input box
                        $('.initial-skill').after(new_input);
                     }

                });
                $('body').on('click', '.delete-btn', function(){
            $(this).parent().parent().remove();
            x--;

        });

             

       });





  
</script>




