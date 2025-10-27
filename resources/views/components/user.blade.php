<!doctype html>
<html lang="en">

<head>
    <title>Husniddin &mdash; Shaxsiy sahifa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="keywords" content="html, css, javascript, jquery">
    <meta name="author" content="">

    <link rel="stylesheet" href="{{ asset('css/vendor/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/styles/github-dark.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">
    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body data-spy="scroll" data-target=".site-nav-target" data-offset="200">

    <nav class="unslate_co--site-mobile-menu">
        <div class="close-wrap d-flex">
            <a href="#" class="d-flex ml-auto js-menu-toggle">
                <span class="close-label">Close</span>
                <div class="close-times">
                    <span class="bar1"></span>
                    <span class="bar2"></span>
                </div>
            </a>
        </div>
        <div class="site-mobile-inner"></div>
    </nav>


    <div class="unslate_co--site-wrap">

        <div class="unslate_co--site-inner">

            <div class="lines-wrap">
                <div class="lines-inner">
                    <div class="lines"></div>
                </div>
            </div>
            <!-- END lines -->

            <nav class="unslate_co--site-nav site-nav-target">

                <div class="container">

                    <div class="row align-items-center justify-content-between text-left">
                        <div class="col-md-5 text-right">
                            <ul class="site-nav-ul js-clone-nav text-left d-none d-lg-inline-block">
                                <li class="has-children">
                                    <a href="{{ route('welcome') }}#home-section" class="nav-link">Asosiy</a>
                                    <ul class="dropdown">
                                        @guest
                                            <li>
                                                <a href="{{ route('register') }}">Ro'yxatdan o'tish</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('login') }}">Kirish</a>
                                            </li>
                                        @endguest
                                        @auth
                                            <li>
                                                <a>
                                                    <form action="{{ route('logout') }}" method="post">
                                                        @csrf
                                                        <button class="btn p-0 text-danger" type="submit">Chiqish</button>
                                                    </form>
                                                </a>
                                            </li>
                                        @endauth
                                    </ul>
                                </li>
                                <li><a href="{{ route('welcome') }}#portfolio-section" class="nav-link">Portfolio</a>
                                </li>
                                <li><a href="{{ route('welcome') }}#about-section" class="nav-link">Haqimda</a></li>
                                <li><a href="{{ route('welcome') }}#services-section" class="nav-link">Xizmatlar</a>
                                </li>
                            </ul>
                        </div>
                        <div class="site-logo pos-absolute">
                            <a href="{{ route('welcome') }}" class="unslate_co--site-logo">Husniddin<span>.</span></a>
                        </div>
                        <div class="col-md-5 text-right text-lg-left">
                            <ul class="site-nav-ul js-clone-nav text-left d-none d-lg-inline-block">
                                <li><a href="{{ route('welcome') }}#skills-section" class="nav-link">Mahoratlar</a>
                                </li>
                                <li><a href="{{ route('welcome') }}#testimonial-section"
                                        class="nav-link">Iqtiboslar</a></li>
                                <li><a href="{{ route('welcome') }}#journal-section" class="nav-link">Postlar</a></li>
                                <li><a href="{{ route('welcome') }}#contact-section" class="nav-link">Kontact</a></li>
                            </ul>

                            <ul class="site-nav-ul-none-onepage text-right d-inline-block d-lg-none">
                                <li><a href="#" class="js-menu-toggle">Menu</a></li>
                            </ul>

                        </div>
                    </div>
                </div>

            </nav>
            <!-- END nav -->
            {{ $slot }}

            <footer class="unslate_co--footer unslate_co--section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-7">

                            <div class="footer-site-logo"><a href="#">Husniddin<span>.</span></a></div>

                            <ul class="footer-site-social">
                                <li><a href="https://t.me/matritsachi">Telegram</a></li>
                                <li><a href="https://www.youtube.com/@Husniddin.Gafforov">YouTube</a></li>
                                <li><a href="mailto:husniddin13124041@gmail.com">Email</a></li>

                                <p class="site-copyright">

                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | This template is made with <i
                                        class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                        target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                                </p>

                        </div>
                    </div>
                </div>
            </footer>


        </div>


        <!-- Loader -->
        <div id="unslate_co--overlayer"></div>
        <div class="site-loader-wrap">
            <div class="site-loader"></div>
        </div>

        <script src="{{ asset('js/scripts-dist.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </div>

    <!-- Highlight.js JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/highlight.min.js"></script>
    <script>
        hljs.highlightAll();
    </script>
</body>

</html>
