@extends('layouts.app')
@section('content')
@include('includes.breadcrumb')
    <div id="shop">
        <div class="container p-5">
            <div class="row justify-content-center">

                <div id="control" class="col-3 pr-5">
                    <h5>By Category</h5>
                    <ul class="list-group">
                        <li class="list-group-item">Keychain</li>
                        <li class="list-group-item">Dakimakura</li>
                        <li class="list-group-item">Figure</li>
                        <li class="list-group-item">Art</li>
                        <li class="list-group-item">T-shirt</li>
                    </ul>
                    <br>
                    <h5>By Prize</h5>
                    <ul class="list-group">
                        <li class="list-group-item">$0 - $500</li>
                        <li class="list-group-item">$500 - $900</li>
                        <li class="list-group-item">$900+</li>
                    </ul>
                    
                </div>
                <div id="products" class="col-8">
                    <div class="h2">All</div>
                    <hr>
                    <div class="row justify-content-center">
                        
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
        </div>
    </div>
@endsection