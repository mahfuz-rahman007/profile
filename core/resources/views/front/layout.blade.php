<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    @if (request()->is('blog-details/*'))
        <meta content=" @yield('meta_description')" name="description">
        <meta content="@yield('meta_keywords')" name="keywords">
    @else
        <meta content="@yield('meta_description')" name="description">
        <meta content="@yield('meta_keywords')" name="keywords">
    @endif

    <title>{{ $setting->website_title }}</title>

    <link rel="shortcut icon" href="{{ asset('assets/front/img/'. $setting->fav_icon) }}" type="image/x-icon">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/front/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- plugin css -->
	<link href="{{asset('assets/front/css/plugin.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/front/css/style.css') }}" rel="stylesheet">

    <!-- dynamic Style change -->
	<link href="{{url('/')}}/assets/front/css/dynamic-style.php?color={{ $setting->base_color }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container-fluid d-flex justify-content-between align-items-center">

            <h1 class="logo me-auto me-lg-0"><a href="{{ route('front.index') }}">
                @php
                $number = explode( '/', $setting->website_title );
                @endphp
                {{ $number[0] }}
            </a></h1>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    @if ($setting->ishome)
                        <li>
                            <a
                            href="@if(request()->path() == '/')#hero @else {{ route('front.index') }}#hero @endif"
                            class="@if(request()->path() == '/') active @endif">Home</a>
                        </li>
                    @endif

                    @if ($setting->isabout)
                        <li>
                            <a href="@if(request()->path() == '/')#about @else {{ route('front.index') }}#about @endif"  class=""> About</a>
                        </li>
                    @endif

                    @if ($setting->isresume)
                        <li>
                            <a href="@if(request()->path() == '/')#resume @else {{ route('front.index') }}#resume @endif" class="">Resume</a>
                        </li>
                    @endif

                    @if ($setting->isservice)
                        <li>
                            <a href="@if(request()->path() == '/')#service @else {{ route('front.index') }}#service @endif"  class="@if(request()->is('service-details/*')) active @endif">Services</a>
                        </li>
                    @endif

                    @if ($setting->isportfolio)
                        <li>
                            <a href="@if(request()->path() == '/')#portfolio @else {{ route('front.index') }}#portfolio @endif" class="@if(request()->path() == 'portfolios') active
                                @elseif(request()->is('portfolio-details/*')) active
                                @endif">Portfolio</a>
                        </li>
                    @endif

                    @if ($setting->isblog)
                        <li>
                            <a href="@if(request()->path() == '/')#blog @else {{ route('front.index') }}#blog @endif" class="@if(request()->path() == 'blogs') active
                                    @elseif(request()->is('blog-details/*')) active
                                    @endif">Blog</a>
                        </li>
                    @endif

                    @if ($setting->iscontact)
                        <li>
                            <a href="@if(request()->path() == '/')#contact @else {{ route('front.index') }}#contact @endif" class="">Contact</a>
                        </li>
                    @endif

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            @if ($setting->is_home_social)
                <div class="header-social-links">
                    @foreach ($socials as $social)
                    <a href="{{ $social->url }}" ><i class="{{ $social->icon }}"></i></a>

                    @endforeach
                </div>
            @endif

        </div>

    </header><!-- End Header -->

     {{-- home section --}}
        @yield('home')
     {{-- home section --}}

     {{-- main area --}}
    <main id="main">

        @yield('content')

    </main>
     {{-- main area --}}

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                {!! $setting->copyright_text !!}
                <div class="social-links">
                    @foreach ($socials as $social)
                    <a href="{{ $social->url }}" ><i class="{{ $social->icon }} "></i></a>
                    @endforeach
                </div>

            </div>
        </div>
    </footer><!-- End  Footer -->

    {{-- <div id="preloader"></div> --}}
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/front/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('assets/front/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/front/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/front/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/front/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/front/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/front/vendor/php-email-form/validate.js') }}"></script>

    {{-- jquery --}}
    <script src="{{ asset('assets/front/js/jquery-1.12.4.min.js') }}"></script>
    {{-- plugins --}}
    <script src="{{ asset('assets/front/js/plugins.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/front/js/main.js') }}"></script>

</body>

</html>
