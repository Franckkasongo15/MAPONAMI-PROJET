<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MAPONAMI</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="voting-box.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/voter.css') }}" rel="stylesheet">
</head>

<body>
<section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
    </div>
</section>

<header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="{{route('index')}}" class="logo d-flex align-items-center">

            <h1>MAPONAMI<span>.</span></h1>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ route('index') }}">Acceuil</a></li>
                <li><a href="{{route('user.publicVote')}}">Vote BDE</a></li>
                <li><a href="{{route('user.promotionVote')}}">Vote promotionnel</a></li>
                <li><a href="#contact">Statistique</a></li>
                @auth
                    <li>
                        <form action="{{route('auth.logout')}}" method="post">
                            @csrf
                            @method('delete')
                            <button>Se deconnecter</button>
                        </form>
                    </li>
                @endguest
                @guest
                    <li><a href="{{route('auth.login')}}">Se connecter</a></li>
                @endguest

            </ul>
        </nav><!-- .navbar -->
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
</header>

<main id="main">
    <!-- ======= entete1 =======-->
    <div class="entete">
        <div class="page-header d-flex align-items-center">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>VOTER</h2>
                        <p>Votez responsable chers etudiants et gardé secret </p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="{{route('index')}}">ACCEUIL</a></li>
                    <li>voter</li>
                </ol>
            </div>
        </nav>
    </div><!-- entete1 -->

    <main id="main">
        <section id="candidats" class="candidats">
            <div class="section-header">
                <h2>TROUVER UN CANDIDAT </h2>
                <p></p>
            </div>

            @if (session('success'))
                <div class="m-4 align-items-center ">
                    <span class="alert alert-success w-100" role="alert">{{ session('success') }}</span>
                </div>
            @endif

            @if (session('failed'))
                <div class="m-4 align-items-center ">
                    <span class="alert alert-danger w-100">{{ session('failed') }}</span>
                </div>
            @endif

            <div class="swiper-slide">
                <div class="testimonial-wrap">
                    <div class="row">
                        <!--DEbut candidat-->
                        @foreach ($candidates as $candidate)
                            <div class="col">
                                <div class="candidat">
                                    <div class="d-flex align-items-center">
                                        <img src="storage/{{ $candidate['image'] }}"
                                             class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>{{ strtoupper($candidate['firstname']) }}</h3>
                                            <h4>{{ strtoupper($candidate['promotion']) }}</h4>

                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        {{ ucfirst($candidate['motivation']) }}
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                    <div class=" align-items-center ">
                                        @auth
                                            <form action="{{route('user.doPublicVote', $candidate )}}" method="post">
                                                @csrf
                                                <button class="btn">voter</button>
                                            </form>
                                        @endauth
                                        @guest
                                            <form action="{{route('auth.login')}}" method="get">
                                                @csrf
                                                <button class="btn">Acceder aux votes</button>
                                            </form>
                                        @endguest
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="{{route('index')}}" class="logo d-flex align-items-center">
                            <span>MAPONAMI</span>
                        </a>
                        <p> Suivez également toutes les informations sur </p>
                        <div class="social-links d-flex mt-4">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Retour</h4>
                        <ul>
                            <li><a href="{{route('index')}}">Acceuil</a></li>
                            <li><a href="{{route('user.publicVote')}}">Vote BDE</a></li>
                            <li><a href="{{route('user.publicVote')}}">vote promotionnel</a></li>
                            <li><a href="#">Statistique</a></li>
                            <li><a href="#">connexion</a></li>
                            <li><a href="#">other</a></li>
                        </ul>
                    </div>


                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Notre address</h4>
                        <p>
                            AV :Femme Katangaise <br>
                            lumbumbashi, N°2<br>
                            RDC <br><br>
                            <strong>Phone:</strong> +243 810 805 154<br>
                            <strong>Email:</strong> maponami@esisalama.org<br>
                        </p>

                    </div>

                </div>
            </div>

            <div class="container mt-4">
                <div class="copyright">
                    &copy; Copyright <strong><span>MAPONAMI</span></strong>. All Rights Reserved
                </div>
                <div class="credits">

                </div>
            </div>

        </footer><!-- End Footer -->
        <!-- End Footer -->

        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="voter.js"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </main>
</main>
</body>

</html>
