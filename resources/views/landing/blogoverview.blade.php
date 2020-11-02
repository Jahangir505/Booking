@extends('layouts.app')

@section('content')
    <section class="contentWrap">
        <div class="container">
            <div class="titleArea text-left mt-5 mb-4">
                <h1 class="title">Blogs</h1>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <div class="singlePost" >
                        <img src="{{asset('assets/landing/images/banner.jpg')}}" class="card-img-top" alt="...">
                        <div class="post-body">
                            <h4>Morbi elementum sagittis metus</h4>
                            <div class="meta"> <i class="fas fa-calendar-alt pr-2"></i>Sep 19, 2019   &nbsp; <i class="fas fa-comment pr-2"></i>0 comment(s)</div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel lectus at purus consectetur pulvinar. Sed venenatis dapibus magna, vel mattis cu auctor id. Nulla blandit tempus lacus at consectetur. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam ex felis, aliquet nec rhoncus egestas, feugiat eu lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae augue quam. Vestibulum pellentesque erat sit amet purus vestibulum congue. Suspendisse ultricies, dolor eu ullamcorper malesuada. Proin at tellus fringilla, porttitor velit in, convallis libero. Vivamus facilisis quis augue dapibus pharetra. Fusce suscipit tincidunt.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel lectus at purus consectetur pulvinar. Sed venenatis dapibus magna, vel mattis cu auctor id. Nulla blandit tempus lacus at consectetur. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam ex felis, aliquet nec rhoncus egestas, feugiat eu lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae augue quam. Vestibulum pellentesque erat sit amet purus vestibulum congue. Suspendisse ultricies, dolor eu ullamcorper malesuada. Proin at tellus fringilla, porttitor velit in, convallis libero. Vivamus facilisis quis augue dapibus pharetra. Fusce suscipit tincidunt.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel lectus at purus consectetur pulvinar. Sed venenatis dapibus magna, vel mattis cu auctor id. Nulla blandit tempus lacus at consectetur. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam ex felis, aliquet nec rhoncus egestas, feugiat eu lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae augue quam. Vestibulum pellentesque erat sit amet purus vestibulum congue. Suspendisse ultricies, dolor eu ullamcorper malesuada. Proin at tellus fringilla, porttitor velit in, convallis libero. Vivamus facilisis quis augue dapibus pharetra. Fusce suscipit tincidunt.
                            </p>

                        </div>
                    </div>
                    <!-- End single details -->

                    <div class="commentWrap">
                        <div class="titleArea text-left mt-5 mb-4">
                            <h3 class="title">Comments</h3>
                        </div>
                        <div class="comments card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="avater">
                                        <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Kevin Fernandez  <time> <i class="far fa-clock"></i> August 25th, 2014</time> </h4>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus, quis non accusamus eaque atque quae unde deleniti repudiandae ipsam molestias quos officia ipsum vitae explicabo tempora dignissimos eius! Ad, mollitia!</p>
                                        <a class="reply" href="">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End comment -->
                        <div class="comments child card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="avater">
                                        <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Kevin Fernandez  <time> <i class="far fa-clock"></i> August 25th, 2014</time> </h4>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus, quis non accusamus eaque atque quae unde deleniti repudiandae ipsam molestias quos officia ipsum vitae explicabo tempora dignissimos eius! Ad, mollitia!</p>
                                        <a class="reply" href="">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End comment -->
                        <div class="comments child card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="avater">
                                        <img src="{{asset('assets/landing/images/pakage.png')}}" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Kevin Fernandez  <time> <i class="far fa-clock"></i> August 25th, 2014</time> </h4>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus, quis non accusamus eaque atque quae unde deleniti repudiandae ipsam molestias quos officia ipsum vitae explicabo tempora dignissimos eius! Ad, mollitia!</p>
                                        <a class="reply" href="">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End comment -->
                    </div>
                    <!-- End comments Wrap  -->

                    <div class="leaveCommentWrap">
                        <div class="titleArea text-left mt-5 mb-4">
                            <h3 class="title">Leave a Comment</h3>
                        </div>
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="Name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="Email: id" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="Website" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea  placeholder="Comment" rows="8" class="form-control"> </textarea>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 mb-5">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-tvl btn-block">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
                <!-- End Blog details Area -->

                <div class="col-lg-3 col-md-4">
                    <div class="sidebar">
                        <div class="widget">
                            <h4>Search </h4>
                            <form class="d-flex" method="post">
                                <input type="text" class="form-control " placeholder="">
                                <button type="submit" class="btn btn-orange">Search</button>
                            </form>
                        </div>
                        <!-- End Widget -->

                        <div class="widget">
                            <h4>Categories </h4>
                            <ul>
                                <li><i class="fas fa-angle-right pr-2"></i><a href="#">lorem ipsum dolar site </a></li>
                                <li><i class="fas fa-angle-right pr-2"></i><a href="#">lorem ipsum dolar site </a></li>
                                <li><i class="fas fa-angle-right pr-2"></i><a href="#">lorem ipsum dolar site </a></li>
                                <li><i class="fas fa-angle-right pr-2"></i><a href="#">lorem ipsum dolar site </a></li>
                                <li><i class="fas fa-angle-right pr-2"></i><a href="#">lorem ipsum dolar site </a></li>
                                <li><i class="fas fa-angle-right pr-2"></i><a href="#">lorem ipsum dolar site </a></li>
                                <li><i class="fas fa-angle-right pr-2"></i><a href="#">lorem ipsum dolar site </a></li>
                                <li><i class="fas fa-angle-right pr-2"></i><a href="#">lorem ipsum dolar site </a></li>
                                <li><i class="fas fa-angle-right pr-2"></i><a href="#">lorem ipsum dolar site </a></li>
                                <li><i class="fas fa-angle-right pr-2"></i><a href="#">lorem ipsum dolar site </a></li>
                            </ul>
                        </div>
                        <!-- End Widget -->

                        <div class="widget">
                            <h4>Archives </h4>
                            <ul>
                                <li><i class="fas fa-angle-right pr-2"></i><a href="#"> May 2019 </a></li>
                                <li><i class="fas fa-angle-right pr-2"></i><a href="#"> March 2019</a></li>
                                <li><i class="fas fa-angle-right pr-2"></i><a href="#"> February 2019 </a></li>
                                <li><i class="fas fa-angle-right pr-2"></i><a href="#"> January 2019</a></li>
                                <li><i class="fas fa-angle-right pr-2"></i><a href="#"> December 2019</a></li>
                            </ul>
                        </div>
                        <!-- End Widget -->

                        <div class="widget">
                            <h4>Tags </h4>
                            <ul class="tags">
                                <li><a href="#">Lorem  </a></li>
                                <li><a href="#"> Ipsum </a></li>
                                <li><a href="#"> Dolar site </a></li>
                                <li><a href="#"> Amite Dolar </a></li>
                                <li><a href="#">Lorem  </a></li>
                                <li><a href="#"> Ipsum </a></li>
                                <li><a href="#"> Dolar site </a></li>
                                <li><a href="#"> Amite Dolar </a></li>
                                <li><a href="#">Lorem  </a></li>
                                <li><a href="#"> Ipsum </a></li>
                                <li><a href="#"> Dolar site </a></li>
                                <li><a href="#"> Amite Dolar </a></li>
                            </ul>
                        </div>
                        <!-- End Widget -->

                        <div class="widget twitter">
                            <h4>Twitter Feed </h4>
                            <div class="media">
                                <i class="fab fa-twitter"></i>
                                <div class="media-body">
                                    <p> <a href="#">@Lorem ipsum </a>dolor sit amet consectetur adipisicing elit. Expedita  </p>
                                    <time>15 Minutes ago</time>
                                </div>
                            </div>
                            <div class="media">
                                <i class="fab fa-twitter"></i>
                                <div class="media-body">
                                    <p> <a href="#">@Lorem ipsum </a>dolor sit amet consectetur adipisicing elit. Expedita  </p>
                                    <time>15 Minutes ago</time>
                                </div>
                            </div>
                            <div class="media">
                                <i class="fab fa-twitter"></i>
                                <div class="media-body">
                                    <p> <a href="#">@Lorem ipsum </a>dolor sit amet consectetur adipisicing elit. Expedita  </p>
                                    <time>15 Minutes ago</time>
                                </div>
                            </div>
                            <div class="media">
                                <i class="fab fa-twitter"></i>
                                <div class="media-body">
                                    <p> <a href="#">@Lorem ipsum </a>dolor sit amet consectetur adipisicing elit. Expedita  </p>
                                    <time>15 Minutes ago</time>
                                </div>
                            </div>
                            <div class="media">
                                <i class="fab fa-twitter"></i>
                                <div class="media-body">
                                    <p> <a href="#">@Lorem ipsum </a>dolor sit amet consectetur adipisicing elit. Expedita  </p>
                                    <time>15 Minutes ago</time>
                                </div>
                            </div>
                        </div>
                        <!-- End Widget -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection