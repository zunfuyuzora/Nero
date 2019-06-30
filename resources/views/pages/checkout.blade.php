@extends('layouts.app')
@section('content')
    <div id="checkout">
        <div class="container my-3">
            <div class="row justify-content-around">
                <div class="col-7">
                    <div id="checkout-information">
                    <div class="bg-white p-4 shadow-sm">
                    <h4>Checkout</h4>
                    <hr>
                    <form action="" class="form-group">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" placeholder="Full name" name="name" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" placeholder="Your Email" name="email" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="telp">Phone</label>
                            <input type="tel" class="form-control" placeholder="Your Phone Number" name="phone" id="telp" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea name="address" id="address" cols="30" rows="5" class="form-control" required placeholder="Shipping Address"></textarea>
                        </div>
                    </form>
                    </div>
                    <div id="credit-card">
                        <div class="bg-white p-4 mt-3 shadow-sm">
                            <h4>Bank Account</h4>
                            <hr>

                        </div>
                    </div>
                </div>
                </div>
                <div class="col-4">
                    <div class="bg-white p-4 shadow-sm">x</div>
                </div>
            </div>
        </div>
    </div>
@endsection