

@extends('layout')

@section('content')
    <div class="card text-bg-dark bgCar">
        <img src="images/car.jpg" class="cardimage" alt="">
        <img src="images/car2.jpeg" class="cardimage2" alt="">
        <div class="card-img-overlay">
            <h5 class="card-title">Welcome to <br>GoaDrive Rentals</h5>
            <p class="card-text">Get the Car you're looking for</p>
        </div>
    </div>

    <div class="jhalak">
        <div class="fleet">
            <span class="title">Our Fleets</span>
            <div class="d-flex gap-4 flex-wrap align-items-center justify-content-center">
                <a href="{{ route('hatchback') }}" class="card text-bg-dark">
                    <!-- <img src="images/cars/1 baleno manual.png" class="card-img" alt="..."> -->
                    <img src="images/car.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h1 class="card-title">Hatchback</h1>
                    </div>
                </a>
                <a href="{{ route('sedan') }}" class="card text-bg-dark">
                    <!-- <img src="images/cars/7 dzire manual.png" class="card-img" alt="..."> -->
                    <img src="images/car.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h1 class="card-title">Sedan</h1>
                    </div>
                </a>
                <a href="{{ route('suv') }}" class="card text-bg-dark">
                    <!-- <img src="images/cars/14 breeza automatic.png" class="card-img" alt="..."> -->
                    <img src="images/car.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h1 class="card-title">SUV</h1>
                    </div>
                </a>
                <a href="{{ route('mpv') }}" class="card text-bg-dark">
                    <!-- <img src="images/cars/20 ertiga automatic.png" class="card-img" alt="..."> -->
                    <img src="images/car.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h1 class="card-title">MPV</h1>
                    </div>
                </a>
            </div>
        </div>
        <div>
            <a href="{{ route('cars') }}" class="btn btn-success">See All Cars<i class="bi bi-chevron-double-right"></i></a>
        </div>
    </div>

    <div class="whyus">
        <div class="topic">Why Choose Us</div>
        <div class="containers">

            @if (isset($chooses))
                @foreach ($chooses as $choose)
                    <div class="info">
                        <i class="bi bi-car-front"></i>
                        <div class="details">
                            <span class="title"> {{ $choose->title }} </span>
                            <span class="description"> {{ $choose->descryption }} </span>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </div>

    <div class="mission">
        <span class="title">Our Mission</span>
        <p class="para">"Discover Goa with confidence! We offer a premier car rental service ensuring sanitized vehicles
            for your safety. Explore Goa's diverse landscape hassle-free with our wide range of vehicles. Contact our expert
            team to book your ride today!"
        </p>
    </div>
@endsection


@push('cssjs')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush
