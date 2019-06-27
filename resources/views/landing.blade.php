@extends('layouts.app')

@section('content')
    <div class="bg-primary pt-5" id="banner">
        <div class="container bg-transparent">
            <div class="row">
                <div class="col-md-6 col-sm-12 text-white p-3">
                    <div class="h1">Nero Hobby Shop</div>
                    <p>Nero will fulfill your Hobby needs. Lets go shopping, umu !</p>
                    <div class="row">
                        <div class="col-4">
                            <a href="/shop" class="btn btn-outline-light form-control">Shop</a>
                        </div>
                        <div class="col-4">
                            <a href="/register" class="btn btn-light form-control">Register</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 text-center">
                    <img class="img-fluid" src="{{ asset('images/nero-cute.png') }}" alt="Nero-Cute">
                </div>
            </div>
        </div>
    </div>
    
    <div id="highlight">
        <div class="container">
            <div class="lead m-5 text-center">
                <h3>Nero Product</h3>
            </div>
            <div class="text px-5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum culpa vero autem cum, assumenda sequi ullam blanditiis sunt aperiam corrupti. Sed praesentium voluptatum ratione quam fugit quas iste inventore omnis.
            </div>
            <div id="products">
                <div class="container my-5">
                    <div class="row justify-content-center">
                        <button class="btn btn-outline-dark mx-2 active">Featured</button>
                        <button class="btn btn-outline-dark mx-2">On-Site</button>
                    </div>
                </div>
                <div class="container my-5">
                    <div class="row justify-content-center" id="product">
                        <div class="col-8">
                            <div class="row justify-content-center">
                                <div class="card">
                                    <div class="product-thumb">
                                        <a href="#">
                                        <img src="{{asset('images/product/nero-keychain.jpg')}}" alt="Product Image" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h5>Nero Keychain</h5>
                                        <p>$5.00</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="product-thumb">
                                        <a href="#">
                                        <img src="{{asset('images/product/nero-nendo.jpg')}}" alt="Product Image" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h5>Nero Nendoroid</h5>
                                        <p>$5.00</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="product-thumb">
                                        <a href="#">
                                        <img src="{{asset('images/product/nero-keychain.jpg')}}" alt="Product Image" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h5>Nero Keychain</h5>
                                        <p>$5.00</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="product-thumb">
                                        <a href="#">
                                        <img src="{{asset('images/product/nero-nendo.jpg')}}" alt="Product Image" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h5>Nero Nendoroid</h5>
                                        <p>$5.00</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="product-thumb">
                                        <a href="#">
                                        <img src="{{asset('images/product/nero-keychain.jpg')}}" alt="Product Image" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h5>Nero Keychain</h5>
                                        <p>$5.00</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="product-thumb">
                                        <a href="#">
                                        <img src="{{asset('images/product/nero-nendo.jpg')}}" alt="Product Image" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h5>Nero Nendoroid</h5>
                                        <p>$5.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-4">
                            <a href="#" class="btn btn-outline-dark">See more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection