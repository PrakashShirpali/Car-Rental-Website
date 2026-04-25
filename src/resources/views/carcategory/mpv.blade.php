

@extends('navlinks.cars')

@section('carType')
    <x-car-card :cars="$cars" />
@endsection
