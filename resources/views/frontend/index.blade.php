<!-- resources/views/welcome.blade.php -->
@extends('frontend.layouts.app')
@section('title', 'Welcome')
@section('content')
    <h1>Welcome to My Laravel App</h1>
    <p>This is the home page content.</p>
    <div class="row my-3">
        <div class="col-3">
            <div class="container mt-4">
                <div class="card">
                    <img src="{{ asset('assets/images/sec1.jpeg') }}" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title">Card Title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="container mt-4">
                <div class="card">
                    <img src="{{ asset('assets/images/sec1.jpeg') }}" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title">Card Title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="container mt-4">
                <div class="card">
                    <img src="{{ asset('assets/images/sec1.jpeg') }}" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title">Card Title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection
