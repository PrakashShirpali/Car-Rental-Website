

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <script src="{{ asset('js/layout.js') }}"></script>
    @stack('cssjs')
    <title>GoaDrive Rentals car service</title>
</head>

<body>

    <div class="galaxy-header">
        <div class="marquee">"kindly Call/Whatsapp for better rates and availability."
        </div>
    </div>

    <div class="galaxy-header2">
        <div class="location">
            <i class="bi bi-geo-alt"></i> Vasco, Goa - 403801
        </div>

        <div class="contact"><i class="bi bi-telephone"></i> +91&nbsp;- 7770076663&nbsp;<span
                class="text-secondary">|</span>
            <div class="book">Book Now <i class="bi bi-arrow-right"></i></div>
        </div>
    </div>

    <div class="nav-logo">
        <div class="title">
            <span class="title1">GoaDrive Rentals <i class="bi bi-car-front"></i></span>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <i class="bi bi-list"></i>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">GoaDrive Rentals</h5>
                        <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close"><i
                                class="bi bi-x"></i></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            @if ($navlinks->isNotEmpty())
                                @foreach ($navlinks as $navlink)
                                    <li class="nav-item">
                                        <a class="nav-link {{ Route::currentRouteNamed($navlink->route_name) ? 'active' : '' }}"
                                            aria-current="page"
                                            href="{{ route($navlink->route_name) }}">{{ $navlink->display_name }}</a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>

                    </div>
                </div>
        </nav>
    </div>

    <main class="main-content">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="footer1">
            <div class="div1">
                <div class="title">
                    <span class="title1">GoaDrive Rentals <i class="bi bi-car-front"></i></span>
                </div>
                <p class="paraf">
                    GoaDrive Rentals sets the standard for car rentals in Goa. We provide a vast fleet of top-quality
                    vehicles at unmatched rates, making us the trusted choice for all your driving needs.
                </p>
                <div class="social">
                    <button class="btn facebook"><i class="bi bi-facebook"></i></button>
                    <button class="btn twitter"><i class="bi bi-twitter"></i></button>
                    <button class="btn linkedin"><i class="bi bi-linkedin"></i></button>
                    <button class="btn youtube"><i class="bi bi-youtube"></i></button>
                </div>
            </div>
            <div class="div2">
                <div class="tag">Quick Links</div>
                <div>
                    <ul>
                        @if ($navlinks->isNotEmpty())
                            @foreach ($navlinks as $navlink)
                                <li>
                                    <a class="nav-link {{ Route::currentRouteNamed($navlink->route_name) ? 'active' : '' }}"
                                        aria-current="page"
                                        href="{{ route($navlink->route_name) }}">{{ $navlink->display_name }}</a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <div class="div3">
                <div class="tag">Main Location</div>
                <div>
                    <ul>
                        <li>Mopa Airport</li>
                        <li>Dabolim Airport</li>
                        <li>Vasco da Gama</li>
                        <li>Panjim</li>
                        <li>Margao</li>
                        <li>Calangute</li>
                        <li>Candolim</li>
                    </ul>
                </div>
            </div>
            <div class="div4">
                <div class="tag">
                    Contact Us
                </div>
                <div class="hov">
                    <i class="bi bi-telephone"></i>
                    <a href="tel:+7770076663" target="blank" class="contain">
                        <span class="desc">+91-7770076663</span>
                    </a>
                </div>
                <div class="hov">
                    <i class="bi bi-whatsapp"></i>
                    <a href="https://wa.me/7770076663" target="blank" class="contain">
                        <span class="desc">+91-7770076663</span>
                    </a>
                </div>
                <div class="hov">
                    <i class="bi bi-envelope"></i>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=prakashlalbahadur@gmail.com" target="blank"
                        class="contain">
                        <span>GoaDriveRentals@gmail.com</span>
                    </a>
                </div>
                <div>
                    <i class="bi bi-geo-alt"></i>
                    <span>Dabolim, Vasco, Goa 403801</span>
                </div>
            </div>
        </div>
        <div class="footer2">
            <p>
                Copyright © 2024 GoaDrive Rentalsl. All Rights Reserved & Design by GoaDrive Rentals
            </p>
            <span class="own">
                Site By :&nbsp;<span class="prakash">Prakash Shirpali</span>
            </span>
        </div>
    </footer>

    <button class="scroll-to-top-btn">
        <i class="bi bi-chevron-up"></i>
    </button>

    <a href="https://wa.me/7770076663" target="blank" class="wahtsapp-us">
        <i class="bi bi-whatsapp btn"></i>
    </a>

</body>

</html>
