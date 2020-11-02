@extends('layouts.app')

@section('content')
<section class="contentWrap">
    <div class="container">
        <div class="titleArea mt-5 text-left">
            <h1 class="title">About Us</h1>
        </div>

        <div class="aboutus">
            <div class="Aboutimg">
                <img src="{{asset('assets/landing/images/banner.jpg')}}" alt="">
            </div>
            <p>
                It is needed to add some text here
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis natus corporis quaerat temporibus ut expedita similique, reprehenderit officiis quisquam dolor officia quam fugiat, asperiores fugit cumque deleniti eligendi inventore quibusdam.
                similique, reprehenderit officiis quisquam dolor officia quam fugiat, asperiores fugit cumque deleniti eligendi inventore quibusdam.
            </p>

            <ul>
                <li><i class="fas fa-angle-right"></i> <a href="">Cras convallis sem pretium, fringilla leo quis, ornare leo.</a></li>
                <li><i class="fas fa-angle-right"></i> <a href="">Cras convallis sem pretium, fringilla leo quis, ornare leo.</a></li>
                <li><i class="fas fa-angle-right"></i> <a href="">Cras convallis sem pretium, fringilla leo quis, ornare leo.</a></li>
                <li><i class="fas fa-angle-right"></i> <a href="">Cras convallis sem pretium, fringilla leo quis, ornare leo.</a></li>
                <li><i class="fas fa-angle-right"></i> <a href="">Cras convallis sem pretium, fringilla leo quis, ornare leo.</a></li>
                <li><i class="fas fa-angle-right"></i> <a href="">Cras convallis sem pretium, fringilla leo quis, ornare leo.</a></li>
                <li><i class="fas fa-angle-right"></i> <a href="">Cras convallis sem pretium, fringilla leo quis, ornare leo.</a></li>
                <li><i class="fas fa-angle-right"></i> <a href="">Cras convallis sem pretium, fringilla leo quis, ornare leo.</a></li>
                <li><i class="fas fa-angle-right"></i> <a href="">Cras convallis sem pretium, fringilla leo quis, ornare leo.</a></li>
                <li><i class="fas fa-angle-right"></i> <a href="">Cras convallis sem pretium, fringilla leo quis, ornare leo.</a></li>
                <li><i class="fas fa-angle-right"></i> <a href="">Cras convallis sem pretium, fringilla leo quis, ornare leo.</a></li>
                <li><i class="fas fa-angle-right"></i> <a href="">Cras convallis sem pretium, fringilla leo quis, ornare leo.</a></li>
                <li><i class="fas fa-angle-right"></i> <a href="">Cras convallis sem pretium, fringilla leo quis, ornare leo.</a></li>
            </ul>
        </div>
        <!-- End about us -->

        <div class="chooseWrap">
            <div class="titleArea mb-4 text-left">
                <h3 class="title">  Why Choose Us ? </h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="media Choose">
                        <div class="thumb">01.</div>
                        <div class="media-body">
                            <h5>Media with stretched link</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a risus auctor, varius metus eu, congue nulla. Suspendisse sit amet est tristique.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="media Choose">
                        <div class="thumb">02.</div>
                        <div class="media-body">
                            <h5>Media with stretched link</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a risus auctor, varius metus eu, congue nulla. Suspendisse sit amet est tristique.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="media Choose">
                        <div class="thumb">03.</div>
                        <div class="media-body">
                            <h5>Media with stretched link</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a risus auctor, varius metus eu, congue nulla. Suspendisse sit amet est tristique.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="media Choose">
                        <div class="thumb">04.</div>
                        <div class="media-body">
                            <h5>Media with stretched link</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a risus auctor, varius metus eu, congue nulla. Suspendisse sit amet est tristique.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="media Choose">
                        <div class="thumb">05.</div>
                        <div class="media-body">
                            <h5>Media with stretched link</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a risus auctor, varius metus eu, congue nulla. Suspendisse sit amet est tristique.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="media Choose">
                        <div class="thumb">06.</div>
                        <div class="media-body">
                            <h5>Media with stretched link</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a risus auctor, varius metus eu, congue nulla. Suspendisse sit amet est tristique.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Choose Wrap -->

        <div class="teamWrap">
            <div class="titleArea mb-4 text-left">
                <h3 class="title"> Our Team </h3>
            </div>
            <div class="teamSlider">
                <div id="teamSlider" class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="teamThumb">
                                <div class="thumArea">
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}" class="card-img-top" alt="...">
                                </div>
                                <div class="thumbOverlay">
                                    <ul>
                                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h5 class="card-title">John Smith</h5>
                            <p>Seles Menager</p>
                        </li>
                        <!-- End thumb -->
                        <li>
                            <div class="teamThumb">
                                <div class="thumArea">
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}" class="card-img-top" alt="...">
                                </div>
                                <div class="thumbOverlay">
                                    <ul>
                                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h5 class="card-title">John Smith</h5>
                            <p>Seles Menager</p>
                        </li>
                        <!-- End thumb -->
                        <li>
                            <div class="teamThumb">
                                <div class="thumArea">
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}" class="card-img-top" alt="...">
                                </div>
                                <div class="thumbOverlay">
                                    <ul>
                                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h5 class="card-title">John Smith</h5>
                            <p>Seles Menager</p>
                        </li>
                        <!-- End thumb -->
                        <li>
                            <div class="teamThumb">
                                <div class="thumArea">
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}" class="card-img-top" alt="...">
                                </div>
                                <div class="thumbOverlay">
                                    <ul>
                                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h5 class="card-title">John Smith</h5>
                            <p>Seles Menager</p>
                        </li>
                        <!-- End thumb -->
                        <li>
                            <div class="teamThumb">
                                <div class="thumArea">
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}" class="card-img-top" alt="...">
                                </div>
                                <div class="thumbOverlay">
                                    <ul>
                                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h5 class="card-title">John Smith</h5>
                            <p>Seles Menager</p>
                        </li>
                        <!-- End thumb -->
                        <li>
                            <div class="teamThumb">
                                <div class="thumArea">
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}" class="card-img-top" alt="...">
                                </div>
                                <div class="thumbOverlay">
                                    <ul>
                                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h5 class="card-title">John Smith</h5>
                            <p>Seles Menager</p>
                        </li>
                        <!-- End thumb -->
                        <li>
                            <div class="teamThumb">
                                <div class="thumArea">
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}" class="card-img-top" alt="...">
                                </div>
                                <div class="thumbOverlay">
                                    <ul>
                                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h5 class="card-title">John Smith</h5>
                            <p>Seles Menager</p>
                        </li>
                        <!-- End thumb -->
                        <li>
                            <div class="teamThumb">
                                <div class="thumArea">
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}" class="card-img-top" alt="...">
                                </div>
                                <div class="thumbOverlay">
                                    <ul>
                                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h5 class="card-title">John Smith</h5>
                            <p>Seles Menager</p>
                        </li>
                        <!-- End thumb -->
                        <li>
                            <div class="teamThumb">
                                <div class="thumArea">
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}" class="card-img-top" alt="...">
                                </div>
                                <div class="thumbOverlay">
                                    <ul>
                                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h5 class="card-title">John Smith</h5>
                            <p>Seles Menager</p>
                        </li>
                        <!-- End thumb -->
                        <li>
                            <div class="teamThumb">
                                <div class="thumArea">
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}" class="card-img-top" alt="...">
                                </div>
                                <div class="thumbOverlay">
                                    <ul>
                                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h5 class="card-title">John Smith</h5>
                            <p>Seles Menager</p>
                        </li>
                        <!-- End thumb -->
                        <li>
                            <div class="teamThumb">
                                <div class="thumArea">
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}" class="card-img-top" alt="...">
                                </div>
                                <div class="thumbOverlay">
                                    <ul>
                                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h5 class="card-title">John Smith</h5>
                            <p>Seles Menager</p>
                        </li>
                        <!-- End thumb -->
                        <li>
                            <div class="teamThumb">
                                <div class="thumArea">
                                    <img src="{{asset('assets/landing/images/banner.jpg')}}" class="card-img-top" alt="...">
                                </div>
                                <div class="thumbOverlay">
                                    <ul>
                                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h5 class="card-title">John Smith</h5>
                            <p>Seles Menager</p>
                        </li>
                        <!-- End thumb -->

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection