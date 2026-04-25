

@extends('layout')

@section('content')
    <div class="contact-area">
        <a href="tel:+7770076663" target="blank" class="contain">
            <div class="icon"><i class="bi bi-telephone-plus"></i></div>
            <span class="title">Call Us</span>
            <span class="desc">+91-7770076663</span>
        </a>

        <a href="https://wa.me/7770076663" target="blank" class="contain">
            <div class="icon"><i class="bi bi-whatsapp"></i></div>
            <span class="title">Whats App Us</span>
            <span class="desc">+91-7770076663</span>
        </a>

        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=prakashlalbahadur@gmail.com" target="blank" class="contain">
            <div class="icon"><i class="bi bi-envelope-open"></i></div>
            <span class="title">Mail Us</span>
            <span class="desc">GoaDriveRentals@gmail.com</span>
        </a>


    </div>
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61548.845248526704!2d73.80808755796168!3d15.387161116020584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbfb9c3d6f77463%3A0x2846d2bfc1f28c85!2sSolitude%20residency!5e0!3m2!1sen!2sin!4v1722530294132!5m2!1sen!2sin"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection

@push('cssjs')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush
