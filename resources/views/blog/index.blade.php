@extends('layouts.main')
@section('content')
<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Blog Right Sidebar</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Blog Right Sidebar</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Blog body start -->
<div class="blog-body content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <!-- Blog 3 start -->
                <div class="blog-3">
                    <div class="blog-photo">
                    <img src="{{asset('assets/img/blog/blog-1.jpg')}}" alt="blog" class="img-fluid">
                    </div>
                    <div class="detail">
                        <h2>
                            <a href="{{route('post.show')}} ">How You Can Give Someone A Second Chance</a>
                        </h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with  into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with</p>
                        <div class="footer">
                            <div class="float-left">
                                <p class="date"><i class="flaticon-calendar"></i> 24 Sep, 2019</p>
                            </div>
                            <div class="float-right">
                                <a href="#">Read more..</a>
                            </div>
                        </div>
                    </div>
                </div>
         
                <!-- Page navigation start -->
                <div class="pagination-box pb-2 text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-right-2">
                    <!-- Search box -->
                    <div class="widget search-box">
                        <h3 class="sidebar-title">Search</h3>
                        <div class="s-border"></div>
                        <div class="m-border"></div>
                        <form class="form-inline form-search" method="GET">
                            <div class="form-group">
                                <label class="sr-only" for="textsearch2">Search Keywords</label>
                                <input type="text" class="form-control" id="textsearch2" placeholder="Search Keywords">
                            </div>
                            <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- Recent listing start -->
                    <div class="widget recent-listing">
                        <h3 class="sidebar-title">Recent Post</h3>
                        <div class="s-border"></div>
                        <div class="m-border"></div>
                        <div class="media mb-4">
                            <a class="pr-3" href="#">
                                <img class="media-object" src="img/recent-listing/img-1.jpg" alt="recent-listing">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="#">How You Can Give Someone A Second Chance</a>
                                </h5>
                                <div class="listing-post-meta">
                                    $345,000 | <a href="#"><i class="fa fa-calendar"></i> Oct 27, 2018 </a>
                                </div>
                            </div>
                        </div>
                        <div class="media mb-4">
                            <a class="pr-3" href="#">
                                <img class="media-object" src="img/recent-listing/img-2.jpg" alt="recent-listing">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="#">How To Get Out Of Stress At Work</a>
                                </h5>
                                <div class="listing-post-meta">
                                    $415,000 | <a href="#"><i class="fa fa-calendar"></i> Feb 14, 2018 </a>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <a class="pr-3" href="#">
                                <img class="media-object" src="img/recent-listing/img-3.jpg" alt="recent-listing">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="#">Negotiate A Job Offer & Close The Deal</a>
                                </h5>
                                <div class="listing-post-meta">
                                    $345,000 | <a href="#"><i class="fa fa-calendar"></i> Oct 12, 2018 </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Category 2 Start -->
                    <div class="category-2 widget">
                        <h3 class="sidebar-title">Category</h3>
                        <div class="s-border"></div>
                        <div class="m-border"></div>
                        <ul class="list-unstyled list-cat">
                            <li><a href="#">Information <span>(45)</span></a></li>
                            <li><a href="#">Jobs <span>(21)</span></a></li>
                            <li><a href="#">Education <span>(18)</span></a></li>
                            <li><a href="#">Skill <span>(32)</span></a></li>
                            <li><a href="#">Learn <span>(9)</span></a> </li>
                            <li><a href="#">Other <span>(22) </span></a></li>
                        </ul>
                    </div>
                    <!-- Tags box Start -->
                    <div class="widget-5 tags-box">
                        <h3 class="sidebar-title">Tags</h3>
                        <div class="s-border"></div>
                        <div class="m-border"></div>
                        <ul class="tags">
                            <li><a href="#">Image</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Slideshow</a></li>
                            <li><a href="#">Post Formats</a></li>
                            <li><a href="#">Typography</a></li>
                            <li><a href="#">Best Sellers</a></li>
                            <li><a href="#">WooCommerce</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog body end -->

    
@endsection


