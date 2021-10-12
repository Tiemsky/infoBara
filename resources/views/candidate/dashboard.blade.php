
@extends('layouts.candidate')
@section('content')


<div class="dashboard">
    <div class="container-fluid">
        <div class="row">
           
            <div class="dashboard-content">
                <div class="dashboard-inner">
                    <div class="dashboard-header clearfix">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"><h4>Dashboard</h4></div>
                            <div class="col-sm-12 col-md-6">
                                <div class="breadcrumb-nav">
                                    <ul>
                                        <li>
                                            <a href="{{ route('welcome') }}">Home Page</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('candidate-dashboard') }}" class="active">Dashboard</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="ui-item">
                                <i class="fa fa-map-marker color-green"></i>
                                <h4 class="color-green">242</h4>
                                <p>Active Listings</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="ui-item">
                                <i class="fa fa-eye color-red"></i>
                                <h4 class="color-red">1242</h4>
                                <p>Listing Views</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="ui-item">
                                <i class="fa fa-comments-o color-yellow"></i>
                                <h4 class="color-yellow">786</h4>
                                <p>Reviews</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="ui-item">
                                <i class="fa fa-heart-o color-blue"></i>
                                <h4 class="color-blue">42</h4>
                                <p>Bookmarked</p>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row ui-item-2">
                            <div class="col-md-3 col-sm-6 col-pad">
                                <div class="item bg-red">
                                    <a href="#"><i class="fa fa-ils"></i></a>
                                    <h3><a href="#">Web Designing</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consec tetur adipis cing  emper tinci dunt. Aenean ligula suada quis sem id, ollic.</p>
                                    <a href="#" class="btn ">Download</a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-pad">
                                <div class="item bg-white">
                                    <a href="#"><i class="fa fa-heart color-red"></i></a>
                                    <h3><a href="#">Web Devs</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consec tetur adipis cing  emper tinci dunt. Aenean ligula suada quis sem id, ollic.</p>
                                    <a href="#" class="btn btn-red">Download</a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-pad">
                                <div class="item bg-green">
                                    <a href="#"><i class="fa fa-bullhorn"></i></a>
                                    <h3><a href="#">Java Apps</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consec tetur adipis cing  emper tinci dunt. Aenean ligula suada quis sem id, ollic.</p>
                                    <a href="#" class="btn">Download</a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-pad">
                                <div class="item bg-white">
                                    <a href="#"><i class="fa fa-desktop color-green"></i></a>
                                    <h3><a href="#">Minor Kunju</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consec tetur adipis cing  emper tinci dunt. Aenean ligula suada quis sem id, ollic.</p>
                                    <a href="#" class="btn btn-green">Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7 col-md-7">
                            <div class="dashboard-list">
                                <div class="dashboard-message bdr clearfix ">
                                    <div class="tab-box-2">
                                        <div class="clearfix mb-30 comments-tr">
                                            <span>New Users</span>
                                            <ul class="nav nav-pills float-right" id="pills-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active show" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Today</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="true">Month</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                <div class="new-user-box">
                                                    <div class="user-author">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/avatar/avatar-3.jpg') }}" alt="avatar-user">
                                                        </a>
                                                    </div>
                                                    <div class="user-content">
                                                        <div class="f-left">
                                                            <h5>John Antony</h5>
                                                            <p>Product Designer, Apple Inc</p>
                                                        </div>
                                                        <div class="f-right">
                                                            <a href="#" class="follow">Follow</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="new-user-box">
                                                    <div class="user-author">
                                                        <a href="#">
                                                            <img src="img/avatar/avatar-2.jpg" alt="avatar-user">
                                                        </a>
                                                    </div>
                                                    <div class="user-content">
                                                        <div class="f-left">
                                                            <h5>Emma Connor</h5>
                                                            <p>Visual Designer,Google Inc</p>
                                                        </div>
                                                        <div class="f-right">
                                                            <a href="#" class="follow">Follow</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="new-user-box">
                                                    <div class="user-author">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/avatar/avatar-1.jpg') }}" alt="avatar-user">
                                                        </a>
                                                    </div>
                                                    <div class="user-content">
                                                        <div class="f-left">
                                                            <h5>Maikel Alisa</h5>
                                                            <p>Product Designer, Apple Inc</p>
                                                        </div>
                                                        <div class="f-right">
                                                            <a href="#" class="follow">Follow</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="new-user-box">
                                                    <div class="user-author">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/avatar/avatar-4.jpg') }}" alt="avatar-user">
                                                        </a>
                                                    </div>
                                                    <div class="user-content">
                                                        <div class="f-left">
                                                            <h5>Nick Jessy</h5>
                                                            <p>Visual Designer,Google Inc</p>
                                                        </div>
                                                        <div class="f-right">
                                                            <a href="#" class="follow">Follow</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="new-user-box mb-0">
                                                    <div class="user-author">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/avatar/avatar-5.jpg') }}" alt="avatar-user">
                                                        </a>
                                                    </div>
                                                    <div class="user-content">
                                                        <div class="f-left">
                                                            <h5>Wiltor Delton</h5>
                                                            <p>Product Designer, Apple Inc</p>
                                                        </div>
                                                        <div class="f-right">
                                                            <a href="#" class="follow">Follow</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade active show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                <div class="new-user-box">
                                                    <div class="user-author">
                                                        <a href="#">
                                                            <img src="img/avatar/avatar-2.jpg" alt="avatar-user">
                                                        </a>
                                                    </div>
                                                    <div class="user-content">
                                                        <div class="f-left">
                                                            <h5>Emma Connor</h5>
                                                            <p>Visual Designer,Google Inc</p>
                                                        </div>
                                                        <div class="f-right">
                                                            <a href="#" class="follow">Follow</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="new-user-box">
                                                    <div class="user-author">
                                                        <a href="#">
                                                            <img src="img/avatar/avatar-5.jpg" alt="avatar-user">
                                                        </a>
                                                    </div>
                                                    <div class="user-content">
                                                        <div class="f-left">
                                                            <h5>Wiltor Delton</h5>
                                                            <p>Product Designer, Apple Inc</p>
                                                        </div>
                                                        <div class="f-right">
                                                            <a href="#" class="follow">Follow</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="new-user-box">
                                                    <div class="user-author">
                                                        <a href="#">
                                                            <img src="img/avatar/avatar-3.jpg" alt="avatar-user">
                                                        </a>
                                                    </div>
                                                    <div class="user-content">
                                                        <div class="f-left">
                                                            <h5>John Antony</h5>
                                                            <p>Product Designer, Apple Inc</p>
                                                        </div>
                                                        <div class="f-right">
                                                            <a href="#" class="follow">Follow</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="new-user-box">
                                                    <div class="user-author">
                                                        <a href="#">
                                                            <img src="img/avatar/avatar-1.jpg" alt="avatar-user">
                                                        </a>
                                                    </div>
                                                    <div class="user-content">
                                                        <div class="f-left">
                                                            <h5>Maikel Alisa</h5>
                                                            <p>Product Designer, Apple Inc</p>
                                                        </div>
                                                        <div class="f-right">
                                                            <a href="#" class="follow">Follow</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="new-user-box mb-0">
                                                    <div class="user-author">
                                                        <a href="#">
                                                            <img src="img/avatar/avatar-4.jpg" alt="avatar-user">
                                                        </a>
                                                    </div>
                                                    <div class="user-content">
                                                        <div class="f-left">
                                                            <h5>Nick Jessy</h5>
                                                            <p>Visual Designer,Google Inc</p>
                                                        </div>
                                                        <div class="f-right">
                                                            <a href="#" class="follow">Follow</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <div class="dashboard-list">
                                <div class="dashboard-message bdr clearfix ">
                                    <div class="tab-box-2">
                                        <div class="clearfix mb-30 comments-tr">
                                            <span>Accounts</span>
                                            <ul class="nav nav-pills float-right" id="pills-tab2" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active show" id="pills-profile-tab2" data-toggle="pill" href="#pills-profile2" role="tab" aria-controls="pills-profile" aria-selected="false">Today</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-contact-tab2" data-toggle="pill" href="#pills-contact2" role="tab" aria-controls="pills-contact" aria-selected="true">Month</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content" id="pills-tabContent2">
                                            <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact-tab2">
                                                <div class="accounts">
                                                    <div class="icon">
                                                        <i class="fa fa-facebook"></i>
                                                    </div>
                                                    <div class="user-content">
                                                        <div class="f-left">
                                                            <h5>Facebook</h5>
                                                            <h6>$39053</h6>
                                                        </div>
                                                        <div class="f-right">
                                                            <a href="#" class="delete">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accounts">
                                                    <div class="icon">
                                                        <i class="fa fa-linkedin"></i>
                                                    </div>
                                                    <div class="user-content">
                                                        <div class="f-left">
                                                            <h5>Linkedin</h5>
                                                            <h6>$45126</h6>
                                                        </div>
                                                        <div class="f-right">
                                                            <a href="#" class="delete">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accounts">
                                                    <div class="icon">
                                                        <i class="fa fa-dribbble"></i>
                                                    </div>
                                                    <div class="user-content">
                                                        <div class="f-left">
                                                            <h5>Dribbble</h5>
                                                            <h6>$39053</h6>
                                                        </div>
                                                        <div class="f-right">
                                                            <a href="#" class="delete">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accounts">
                                                    <div class="icon">
                                                        <i class="fa fa-google"></i>
                                                    </div>
                                                    <div class="user-content">
                                                        <div class="f-left">
                                                            <h5>Google</h5>
                                                            <h6>$45126</h6>
                                                        </div>
                                                        <div class="f-right">
                                                            <a href="#" class="delete">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accounts">
                                                    <div class="icon">
                                                        <i class="fa fa-twitter"></i>
                                                    </div>
                                                    <div class="user-content">
                                                        <div class="f-left">
                                                            <h5>Twitter</h5>
                                                            <h6>$39053</h6>
                                                        </div>
                                                        <div class="f-right">
                                                            <a href="#" class="delete">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accounts mb-0">
                                                    <div class="icon">
                                                        <i class="fa fa-behance"></i>
                                                    </div>
                                                    <div class="user-content">
                                                        <div class="f-left">
                                                            <h5>Behance</h5>
                                                            <h6>$45126</h6>
                                                        </div>
                                                        <div class="f-right">
                                                            <a href="#" class="delete">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade active show" id="pills-profile2" role="tabpanel" aria-labelledby="pills-profile-tab2">
                                                <div class="accounts">
                                                    <div class="icon">
                                                        <i class="fa fa-linkedin"></i>
                                                    </div>
                                                    <div class="user-content">
                                                        <div class="f-left">
                                                            <h5>Linkedin</h5>
                                                            <h6>$45126</h6>
                                                        </div>
                                                        <div class="f-right">
                                                            <a href="#" class="delete">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accounts">
                                                    <div class="icon">
                                                        <i class="fa fa-facebook"></i>
                                                    </div>
                                                    <div class="user-content">
                                                        <div class="f-left">
                                                            <h5>Facebook</h5>
                                                            <h6>$39053</h6>
                                                        </div>
                                                        <div class="f-right">
                                                            <a href="#" class="delete">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accounts">
                                                    <div class="icon">
                                                        <i class="fa fa-google"></i>
                                                    </div>
                                                    <div class="user-content">
                                                        <div class="f-left">
                                                            <h5>Google</h5>
                                                            <h6>$45126</h6>
                                                        </div>
                                                        <div class="f-right">
                                                            <a href="#" class="delete">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accounts">
                                                    <div class="icon">
                                                        <i class="fa fa-dribbble"></i>
                                                    </div>
                                                    <div class="user-content">
                                                        <div class="f-left">
                                                            <h5>Dribbble</h5>
                                                            <h6>$39053</h6>
                                                        </div>
                                                        <div class="f-right">
                                                            <a href="#" class="delete">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accounts">
                                                    <div class="icon">
                                                        <i class="fa fa-behance"></i>
                                                    </div>
                                                    <div class="user-content">
                                                        <div class="f-left">
                                                            <h5>Behance</h5>
                                                            <h6>$45126</h6>
                                                        </div>
                                                        <div class="f-right">
                                                            <a href="#" class="delete">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accounts mb-0">
                                                    <div class="icon">
                                                        <i class="fa fa-twitter"></i>
                                                    </div>
                                                    <div class="user-content">
                                                        <div class="f-left">
                                                            <h5>Twitter</h5>
                                                            <h6>$39053</h6>
                                                        </div>
                                                        <div class="f-right">
                                                            <a href="#" class="delete">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dashboard-list">
                                <h3>
                                    Latest Projects</h3>
                                <div class="dashboard-message dashboard-table-responsive bdr clearfix ">
                                    <div class="table-responsive dashboard-table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Project Name</th>
                                                <th>Start Date</th>
                                                <th>Due Date</th>
                                                <th>Status</th>
                                                <th>Assign</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Adminto Admin v1</td>
                                                <td>01/01/2019</td>
                                                <td>26/04/2019</td>
                                                <td><span class="badge badge-danger">Released</span></td>
                                                <td>Coderthemes</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Adminto Frontend v1</td>
                                                <td>01/01/2019</td>
                                                <td>26/04/2019</td>
                                                <td><span class="badge badge-success">Released</span></td>
                                                <td>Adminto admin</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Adminto Admin v1.1</td>
                                                <td>01/05/2019</td>
                                                <td>10/05/2019</td>
                                                <td><span class="badge badge-pink">Pending</span></td>
                                                <td>Coderthemes</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Adminto Frontend v1.1</td>
                                                <td>01/01/2019</td>
                                                <td>31/05/2019</td>
                                                <td><span class="badge badge-purple">Work in Progress</span>
                                                </td>
                                                <td>Adminto admin</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Adminto Admin v1.3</td>
                                                <td>01/01/2019</td>
                                                <td>31/05/2019</td>
                                                <td><span class="badge badge-warning">Coming soon</span></td>
                                                <td>Coderthemes</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Adminto Admin v1.3</td>
                                                <td>01/01/2019</td>
                                                <td>31/05/2019</td>
                                                <td><span class="badge badge-primary">Coming soon</span></td>
                                                <td>Adminto admin</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
                <p class="sub-banner-2 text-center">© 2020 <a href="#">Theme Vessel.</a> All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>


@endsection