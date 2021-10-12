@extends('layouts.auth')
@section('content')
<div class="page_loader"></div>

<!-- Coming soon start -->
<div class="coming-soon coming-soon-bg ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="coming-soon-inner">
                    <a href="index.html"><img src="img/logos/logo.png" alt="logo"></a>
                    <h1>Coming Soon</h1>
                    <div class="countdown styled coming-soon-counter"></div>
                    <div class="clearfix"></div>
                    <h6>Notify Me When It's Ready</h6>
                    <div class="coming-form clearfix">
                        <form class="form-inline" action="#" method="GET">
                            <input type="text" class="form-control" id="inlineFormInputName2" placeholder="Email Address">
                            <button type="submit" class="btn btn-color">Subscribe</button>
                        </form>
                    </div>
                    <ul class="social-list clearfix">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Coming soon end -->
@endsection



