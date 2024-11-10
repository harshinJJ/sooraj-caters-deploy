<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sooraj Caterers & Events</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins:wght@300;400;600&family=Lora:wght@400;700&display=swap" rel="stylesheet">
    </head>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: Arial, sans-serif; margin-top: 100px; } /* Adjust for fixed navbar */

        /* Background image section */

        body {
    font-family: 'Poppins', sans-serif;
}
        /* Navbar styling */
        .navbar-fixed-top {
            background-color: rgba(255, 255, 255, 0.8);
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 9999;
            padding: 10px 40px;
            transition: background-color 0.3s ease;
        }
        /* Change navbar background on scroll */
        .navbar-fixed-top.scrolled {
            background-color: #bebebe;
        }
        /* Footer styling */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em 0;
            padding-top: 20px;
        }
    </style>
</head>
<body>

    <!-- Header Background Image -->
    <div class="header-background"></div>

    <!-- Navbar -->
    <header class="navbar-fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Logo Image Instead of Brand Text -->
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Sooraj Caterers & Events Logo" style="height: 50px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('aboutUs') }}">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('menu') }}">Menu</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('gallery') }}">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('contactUs') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="mt-5">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- Contact Info -->
                <div class="col-md-4 footer-section">
                    <h5>Contact Us</h5>
                    <p><strong>Phone:</strong> 9746654776.</p>
                    <p><strong>Email:</strong> soorajcateringservice@gmail.com</p>
                    <p><strong>Address:</strong> Sooraj Caterers & Events
                        West Hill, Calicut-5,</p>
                </div>

                <!-- Quick Links -->
                <div class="col-md-4 footer-section">
                    <h5>Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('aboutUs') }}">About Us</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('menu') }}">Menu</a></li>
                        <li><a href="{{ route('contactUs') }}">Contact</a></li>
                    </ul>
                </div>

                <!-- Social Media Links (Optional) -->
                <div class="col-md-4 footer-section">
                    <h5>Follow Us</h5>
                    <ul class="social-links">
                        <li><a href="#" target="_blank">Facebook</a></li>
                        <li><a href="#" target="_blank">Instagram</a></li>
                        <li><a href="#" target="_blank">Twitter</a></li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="footer-bottom mt-3">
                <p>&copy; 2024 Sooraj Caterers & Events. All rights reserved.</p>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Add a 'scrolled' class to the navbar when the page is scrolled
        window.onscroll = function() {
            var header = document.querySelector('.navbar-fixed-top');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        };
    </script>
</body>
</html>
