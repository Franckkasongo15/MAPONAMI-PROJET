<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MAPONAMI</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/voting-box.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">


    <!-- Vendor CSS Files -->
    <link href="{{ asset('bootstrap-5.1.3-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css" rel="stylesheet') }}">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/index.css') }}" rel="stylesheet">
</head>

<body>


    <section id="topbar" class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:contact@example.com">maponami@esisalama.org</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+243 81 080 515 4</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
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
                    <li><a href="{{route('index')}}">Accueil</a></li>
                    <li><a href="{{route('user.publicVote')}}">Vote BDE</a></li>
                    <li><a href="{{route('user.publicVote')}}">Vote promotionnel</a></li>
                    <li><a href="#contact">Statistiques</a></li>
                    @auth
                    <li>
                        <form action="{{route('auth.logout')}}" method="post">
                            @csrf
                            @method('delete')
                            <button>Se deconnecter</button>
                        </form>
                    </li>
                    @endauth
                    @guest
                        <li><a href="{{route('auth.login')}}">Se connecter</a></li>
                    @endguest
                </ul>
            </nav><!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div
                    class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Welcome to <span>MAPONAMI</span></h2>
                    <p>Site electoral universitaire </p>

                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="https://form.jotform.com/232215830578558" class="btn-get-started">Postuler</a>
                    </div>
                    <!--
                        <div class="d-flex justify-content-center justify-content-lg-start">
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLScllJpLJN7aK6AsXW526h6eioLDsnmnkcMpzfiQ_pqUFAVJaA/viewform?usp=pp_url"
                                class="btn-get-started">Postuler</a>
                        </div>
                    -->
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{ asset('assets/img/voting-box.png') }}" class="img-fluid" alt=""
                        data-aos="zoom-out" data-aos-delay="100">
                </div>
            </div>
        </div>

        <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row gy-4 mt-5">

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-easel"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Temps reel</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-gem"></i></div>
                            <h4 class="title"><a href="" class="stretched-link"></a></h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-geo-alt"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Mobile</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-command"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">securisé</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                </div>
            </div>
        </div>

        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">

        <!-- ======= partie 2 ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>MAPONAMI</h2>
                    <p>Site electoral universitaire qui vise a organiser les élection avec trensparence </p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-5">
                        <h3>ANALYSE DES RESULTAT EN TEMPS REEL</h3>
                        <img src="assets/img/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
                        <p class="div_presentation">Ut fugiat ut sunt quia veniam. Voluptate perferendis perspiciatis
                            quod nisi et. Placeat debitis quia recusandae odit et consequatur voluptatem. Dignissimos
                            pariatur consectetur fugiat voluptas ea.</p>
                        <p>Temporibus nihil enim deserunt sed ea. Provident sit expedita aut cupiditate nihil vitae quo
                            officia vel. Blanditiis eligendi possimus et in cum. Quidem eos ut sint rem veniam qui. Ut
                            ut repellendus nobis tempore doloribus debitis explicabo similique sit. Accusantium sed ut
                            omnis beatae neque deleniti repellendus.</p>
                    </div>
                    <div class="col-lg-5">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">
                                Quelques fonctionnalité de base du site MAPONAMI :
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> Résultat visible par tous</li>
                                <li><i class="bi bi-check-circle-fill"></i> 0% de tricherie </li>
                                <li><i class="bi bi-check-circle-fill"></i> Trensparence.</li>
                            </ul>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident
                            </p>

                            <div class="position-relative mt-4">
                                <img src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="">
                                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- partie 2 -->




        <!-- ======= Question frequent  ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="content px-xl-5">
                            <h3><strong>Questions</strong> frequentes</h3>

                        </div>
                    </div>

                    <div class="col-lg-8">

                        <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up"
                            data-aos-delay="100">

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                        <span class="num">1.</span>
                                        Comment voter ?
                                    </button>
                                </h3>
                                <div id="faq-content-1" class="accordion-collapse collapse"
                                    data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Connecté vous avec votre compte Email de Esisalama
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                        <span class="num">2.</span>
                                        je peux voter jusqu'a combien de candidats ?
                                    </button>
                                </h3>
                                <div id="faq-content-2" class="accordion-collapse collapse"
                                    data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Un electeur n'est peux voter qu'un seul et unique candidat pour une categorie
                                        d'election.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                        <span class="num">3.</span>
                                        Comment postuler ?
                                    </button>
                                </h3>
                                <div id="faq-content-3" class="accordion-collapse collapse"
                                    data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Connecté vous avec votre address Email de Esisalama et completé le formulair
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                                        <span class="num">4.</span>
                                        je suis pas sur la liste de candidats ?
                                    </button>
                                </h3>
                                <div id="faq-content-4" class="accordion-collapse collapse"
                                    data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Apres soumission, votre demande est analysé par la commission, si elle est
                                        valable on publie sur le site sinon elle n'est pas .
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                                        <span class="num">5.</span>
                                        Autres problemes ?
                                    </button>
                                </h3>
                                <div id="faq-content-5" class="accordion-collapse collapse"
                                    data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        veillez passer aux bureaux de la commision de electoral
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                        </div>

                    </div>
                </div>

            </div>
        </section><!-- Question frequent  -->



    </main><!-- fin main -->

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
                        <li><a href="{{route('index')}}">ACCEUIL</a></li>
                        <li><a href="{{route('user.publicVote')}}">vote BDE</a></li>
                        <li><a href="{{route('user.promotionVote')}}">vote promotionnel</a></li>
                        <li><a href="#">statistique</a></li>
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
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- index JS File -->
    <script src="{{ asset('assets/js/index.js') }}"></script>

</body>

</html>
