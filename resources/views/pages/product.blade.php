@extends('layouts.app')
@section('content')
@include('includes.breadcrumb')
<div id="product">
    <div class="container p-5">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="row">
                    <div class="col-6">
                        <div class="product-image">
                        <img src="{{asset('images/product/nero-nendo.jpg')}}" alt="Product Image" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6">
                        <h2>Nero Nendoroid</h2>
                        <br>
                        <div class="h6 text-muted">Handmade Nendoroid, Original</div>
                        <h1>$5.00</h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque qui, ullam provident quas ratione deserunt temporibus labore beatae aliquam ad sit, blanditiis quod repellendus neque quae reprehenderit totam nisi earum!<br><br>
                        Aliquid repudiandae ratione distinctio odio doloribus rem provident dolorem ex consequatur doloremque adipisci, consequuntur fugit exercitationem officiis iusto animi excepturi corporis fuga!</p>
                        <a href="#" class="btn btn-outline-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
        
@include('includes.similar')
    </div>
</div>
@endsection