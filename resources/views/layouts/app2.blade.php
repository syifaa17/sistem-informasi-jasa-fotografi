<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Katara Studio</title>
    <meta content="" name="description">

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center  me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <i class="bi bi-camera"></i>
                <h1>KataraStudio</h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.html" class="active">Home</a></li>
                    <li><a href="http://localhost/KataraStudio/about">About</a></li>
                    <li class="dropdown"><a href="#"><span>Gallery</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="gallery.html">Family</a></li>
                            <li><a href="gallery.html">Graduation</a></li>
                            <li><a href="gallery.html">Couple</a></li>
                            <li><a href="gallery.html">Personal</a></li>
                            <li><a href="gallery.html">Grup</a></li>
                            <li><a href="gallery.html">Maternity</a></li>
                        </ul>
                    </li>
                    <li><a href="services.html">Package</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav><!-- .navbar -->

            <div class="header-login d-none d-lg-block">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-10 pt-[35px] sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="link text-white">Dashboard</a>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="ml-4">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @else
                            <!-- <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a> -->
                            <a class="link text-white" href="{{ route('login') }}"><i class="far fa-user"></i> Login</a>

                            @if (Route::has('register'))
                                <!-- <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a> -->
                                <a class="link text-white ml-4" href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <!-- <a class="link text-white" href="{{ route('login') }}"><i class="far fa-user"></i> Login</a>
        <a class="link text-white" href="{{ route('login') }}">Register</a> -->
            </div>

        </div>
    </header><!-- End Header -->
    @yield('content')
    <footer id="footer" class="footer bg-default bg-dark">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>PhotoFolio</span></strong>. All Rights Reserved
            </div>

            <div class="header-social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- <div id="preloader">
    <div class="line"></div>
  </div> -->

    <!-- Vendor JS Files -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</body>

</html>
