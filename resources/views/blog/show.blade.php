
@extends('layouts.main')
@section('content')

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Blog Details</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Blog Details</li>
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
                <!-- Blog 1 start -->
                <div class="blog-3 blog-big">
                    <div class="blog-photo">
                        <img src="{{asset('assets/img/blog/blog-3.jpg')}}" alt="blog" class="img-fluid">
                    </div>
                    <div class="detail">
                        <h2>
                            <a href="#">Negotiate A Job Offer & Close The Deal</a>
                        </h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five</p>
                        <p>electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.more recently with desktop publishing</p>
                        <p>essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.more recently with desktop publishing</p>
                        <p>porem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.more recently with desktop publishing</p>
                        <br>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="blog-tags">
                                    <span>Tags</span>
                                    <a href="#">Features</a>
                                    <a href="#">Gallery</a>
                                    <a href="#">Slideshow</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="social-list-2">
                                    <span>Share</span>
                                    <a href="#" class="facebook-bg">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#" class="twitter-bg">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#" class="google-bg">
                                        <i class="fa fa-google"></i>
                                    </a>
                                    <a href="#" class="linkedin-bg">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                    <a href="#" class="pinterest-bg">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Heading 2 -->
                <h3 class="heading-2">Comments Section</h3>
                <!-- Comments start -->
                <ul class="comments">
                    <li>
                        <div class="comment">
                            <div class="comment-author">
                                <a href="#">
                                    <img src="{{asset('assets/img/avatar/avatar-1.jpg')}}" alt="comments-user">
                                </a>
                            </div>
                            <div class="comment-content">
                                <div class="comment-meta">
                                    <h3>
                                        Maikel Alisa
                                    </h3>
                                    <div class="comment-meta">
                                        8:42 PM 10/28/2019<a href="#">Reply</a>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel, dapibus tempus nulla.</p>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <div class="comment">
                                    <div class="comment-author">
                                        <a href="#">
                                            <img src="img/avatar/avatar-2.jpg" alt="comments-user">
                                        </a>
                                    </div>
                                    <div class="comment-content">
                                        <div class="comment-meta">
                                            <h3>
                                                Karen Paran
                                            </h3>
                                            <div class="comment-meta">
                                                8:42 PM 10/28/2019<a href="#">Reply</a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa .</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="comment">
                            <div class="comment-author">
                                <a href="#">
                                    <img src="img/avatar/avatar-3.jpg" alt="comments-user">
                                </a>
                            </div>
                            <div class="comment-content">
                                <div class="comment-meta">
                                    <h3>
                                        Anne Brady
                                    </h3>
                                    <div class="comment-meta">
                                        8:42 PM 10/28/2019<a href="#">Reply</a>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel, dapibus tempus nulla.</p>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <div class="comment">
                                    <div class="comment-author">
                                        <a href="#">
                                            <img src="img/avatar/avatar-4.jpg" alt="comments-user">
                                        </a>
                                    </div>
                                    <div class="comment-content mrg-bdr">
                                        <div class="comment-meta">
                                            <h3>
                                                Jane Doe
                                            </h3>
                                            <div class="comment-meta">
                                                8:42 PM 10/28/2019<a href="#">Reply</a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Contact 1 start -->
                <div class="contact-1 mb-30">
                    <h3 class="heading-2">Contact Form</h3>
                    <form action="#" method="GET" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group name">
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group email">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group subject">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group number">
                                    <input type="text" name="phone" class="form-control" placeholder="Number">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group message">
                                    <textarea class="form-control" name="message" placeholder="Write message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="send-btn">
                                    <button type="submit" class="btn btn-md button-theme">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
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