@extends('layouts.app')
@section('content')
    <div id="cart">
        <div class="container my-3">
            <div class="row justify-content-around">
                <div class="col-8 bg-white p-5 shadow-sm">
                    <h4>Cart</h4>
                    <hr>
                    <div id="product-container">
                            @for ($i = 0; $i < 4; $i++)
                                
                    <div class="product" id="product{{$i}}">
                                <div class="row justify-content-around">
                                    <div class="col-2 ">
                                        <div class="thumb-medium2">
                                            <a href="/shop/product">
                                                <img class="img-fluid" src="{{asset('images/product/nero-nendo.jpg')}}" alt="product">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-9 ">
                                        <div class="h5">Nero Nendoroid</div>
                                        <div class="row">
                                            <div class="col-7">
                                                <p class="text-small text-muted desc">
                                                Description. Lorem ipsum dolor sit.
                                                </p>
                                                
                                                <h6 class="">$5.00</h6>
                                            </div>
                                            <div class="col-3 text-right">
                                                <a href="">Remove</a><br>
                                                <a href="">Save for Later</a>
                                            </div>
                                            <div class="col-2">
                                                <form action="">
                                                    <select name="quantity" id="q" class="btn btn-light">
                                                        <option value="1" selected>1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                    </select>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            @endfor
                    </div>
                </div>
                <div class="col-4">
                    <div class="container p-4 bg-white shadow-sm">
                        <div class="table-responsive">
                        <table class="" style="width: 100%">
                            <tr>
                                <th scope="row">Subtotal</th>
                                <td>$20.00</td>
                            </tr>
                            <tr>
                                <th scope="row">Tax</th>
                                <td>$0.40</td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <th scope="row">Total</th>
                                <td>$20.40</td>
                            </tr>
                        </table>
                        </div>
                        <div id="checkout">
                            <div class="container py-3 text-center">
                            <a href="/checkout" class="btn btn-primary">Proceed to checkout</a>
                            </div>
                        </div>
                        <p class="text-muted">
                            Free shipping for this pre-launched app.
                            <br>Back to shopping for more product
                        </p>
                        <div class="container text-center">
                        <a href="/shop" class="btn btn-outline-primary">Continue Shopping</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('includes/similar')
@endsection