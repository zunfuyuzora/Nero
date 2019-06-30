@extends('layouts.app')
@section('content')
    <div id="about">
        <div class="container mt-3 shadow bg-white">
            <div class="container p-4">
                <h2>About <span class="bg-primary text-white px-1">us</span></h2>
                <hr>
                <div class="row">
                    <div class="col-lg-8">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, quia dignissimos.
                        <br>Sint, itaque velit! Quo aspernatur atque culpa delectus, maiores fugit at neque repudiandae tempora, enim earum, reiciendis quos debitis!
                        <br>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio nihil culpa dolorum, veritatis maiores ratione? Iure, quisquam temporibus. Adipisci asperiores fugiat eveniet ratione distinctio illum quo doloremque odio! Exercitationem, aliquid.
                        <ul>
                            <li>lorem ipsum</li>
                            <li>dolor sit</li>
                            <li>amet consectetur</li>
                        </ul>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro unde dolore repellendus soluta tempora praesentium, quo nobis labore qui eligendi provident voluptatem saepe aspernatur nesciunt vero earum impedit beatae quam.
                    </div>
                    <div class="col-lg-4">
                    <img src="{{asset('images/nero-cute.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container shadow bg-white p-4 mt-3">
                <h4>Find what you want, <span class="bg-primary text-white px-2">Nero</span> !</h4>

        </div>
    </div>
@endsection