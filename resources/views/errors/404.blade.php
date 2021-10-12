@extends('layouts.auth')
@section('content')
<div class="page_loader"></div>

<!-- Pages 404 start -->
<div class="pages-404">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-12 align-self-center">
                <div class="error404-content">
                    <div class="error404">404</div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5 col-md-12">
                <div class="nobottomborder">
                    <h1>Ooops, This Page Could Not Be Found!</h1>
                    <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
                </div>
                <div class="row">
                    <div class="col-xl-9 col-lg-10 col-md-8 col-sm-10 col-xs-10">
                        <div class="coming-form clearfix">
                            <div class="hr"></div>
                            <p>Please try searching again</p>
                            <form class="form-inline" action="#" method="GET">
                                <input type="text" class="form-control" placeholder="Search For Page">
                                <button type="submit" class="btn btn-color">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pages 404 end -->

@endsection