@extends('layouts.app')
@section('content')
    <div id="blog">
        <div class="bg-secondary">
                <div id="blog-banner">
                    <div class="mask"></div>
                    <div class="banner-text text-center">
                        <div class="display-4 text-white">
                            This is <span class="bg-primary text-white px-3">Nero</span> Blog
                        </div>
                    </div>
                </div>
        </div>
        <div id="divider" class="p-3 text-center border-bottom">
            <h3>Find Awesomeness</h3>
        </div>
        <div id="feed">
            <div class="container my-5">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="head">
                            <h5>Recent Post</h5>
                            <hr>
                        </div>
                        <div id="recent-container">
                            <div class="recent-post">
                            <div class="row justify-content-around">
                                <div class="col-md-4 text-center">
                                    <div class="thumb-medium bg-primary mx-auto">
                                    <a href="/post"><img src="{{asset('images/blog/collaboration.jpg')}}" alt="recent-thumbnail"></a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <a href="/post" class="h3">This is cool title</a>
                                    <div class="h6 text-muted ">Author, 29 Jun</div>
                                    <div class="desc">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias incidunt iusto neque consequatur maxime facere, a repellat blanditiis sint aliquam enim reiciendis quaerat iste, alias recusandae praesentium quod porro beatae!
                                    </div>
                                </div>
                            </div>
                            <hr>
                            </div>
                            
                        </div>
                        <div id="pagination">
                            <div class="container">
                                <div class="float-right">
                                        <a href="#">Prev</a>
                                        <a href="#">1</a>
                                        <a href="#">2</a>
                                        <a href="#">3</a>
                                        <a href="#">4</a>
                                        <a href="#">...</a>
                                        <a href="#">Next</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div id="ad-banner" class="p-2 bg-secondary">
                            <p class="text-white">Ads goes here !</p>
                        </div>
                        <hr>
                        <div id="popular">
                            <div class="head text-center">
                                <h6>Popular Post</h6>
                            </div>
                            <div class="popular-post-container">
                                <hr>
                                <div class="popular-post">
                                    <div class="row justify-content-around">
                                        <div class="col-3">
                                                <div class="thumb-small">
                                                    <img src="{{asset('images/blog/laptop-desk.jpg')}}" alt="thumbnail">
                                                </div>
                                        </div>
                                        <div class="col-8">
                                            <h5><a href="#">post title</a></h5>
                                            <p class="text-muted">some spoiler</p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div id="addons">
                            <hr>
                            <div class="bg-dark text-white">
                                <div class="container p-3">
                                    <h4>Newsletter</h4>
                                    <h6 class="text-muted">Subscribe to our Newsletter</h6>
                                    <div class="container">
                                    <form action="#" class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Your E-mail">
                                            <div class="input-group-append">
                                                <button class="input-group-text btn btn-light">@</button>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection