

@extends('layout')

@section('content')
    <div class="car-category">
        <a class="{{ Route::currentRouteNamed('allcars') ? 'active' : '' }}" href="{{ route('allcars') }}">
            All Cars
        </a>
        <a class="{{ Route::currentRouteNamed('hatchback') ? 'active' : '' }}" href="{{ route('hatchback') }}">
            Hatchback
        </a>
        <a class="{{ Route::currentRouteNamed('sedan') ? 'active' : '' }}" href="{{ route('sedan') }}">
            Sedan
        </a>
        <a class="{{ Route::currentRouteNamed('suv') ? 'active' : '' }}" href="{{ route('suv') }}">
            SUV
        </a>
        <a class="{{ Route::currentRouteNamed('mpv') ? 'active' : '' }}" href="{{ route('mpv') }}">
            MPV
        </a>
    </div>

    @yield('carType')
@endsection

@push('cssjs')
    <link rel="stylesheet" href="{{ asset('css/cars.css') }}">
@endpush
