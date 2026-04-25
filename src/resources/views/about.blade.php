

@extends('layout')

@section('content')
    <div class="overview">
        <span class="title">Overview</span>
        <span class="descryption">Welcome to GoaDrive Rentals, your premier destination for convenient and reliable car
            rentals in Goa. Established with a passion for providing exceptional service and a commitment to customer
            satisfaction, we strive to make every journey memorable and hassle-free.

            Choose from our wide selection of vehicles, including sedans, SUVs, and luxury cars, tailored to suit every need
            and budget. Whether you're traveling for business or pleasure, our flexible rental options and convenient
            booking process ensure a smooth and enjoyable experience.

            At GoaDrive Rentals, we prioritize the maintenance and cleanliness of our vehicles, offering quality and
            reliability you can trust. Our transparent pricing, with no hidden fees, provides value for your money. As
            locals, we understand the unique needs of travelers in Goa and are dedicated to exceeding your expectations.

            Ready to embark on your next adventure? Contact us today to learn more about our services or to reserve your
            vehicle. We look forward to serving you!</span>
    </div>
@endsection

@push('cssjs')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush
