<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kori Oil | HOME</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('assets/css/main.css') }}" rel="stylesheet">
</head>

<body>

    @include('layout.header')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">

        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 data-aos="fade-down">Bienvenue à <span>KORI OIL</span></h2>
                        <p data-aos="fade-up">Vous recherchez un fournisseur de produits pétroliers sérieux et fiable?
                            KORI OIL
                            répond à vos attentes! Par un service de qualité à travers notre réseau de Stations-service,
                            nous
                            préservons la sécurité de votre matériel roulant.</p>
                        <a data-aos="fade-up" data-aos-delay="200" href="{{ route('GETPAGECONTACT') }}"
                            class="btn-get-started">Contactez-nous</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active" style="background-image: url(assets/img/kori10.jpg)"></div>
            <div class="carousel-item" style="background-image: url(assets/img/kori3.jpg)"></div>

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Get Started Section ======= -->
        <section id="get-started" class="get-started section-bg">
            <div class="container">

                <div class="row justify-content-between gy-4">

                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
                        <div class="content">
                            <h3>Qualité-Ponctualité-Discipline.</h3>
                            <p>Notre entreprise est fondée sur les valeurs de qualité, ponctualité et discipline. Nous
                                nous engageons
                                à fournir à nos clients des produits et services de la plus haute qualité, tout en
                                respectant les délais
                                impartis et en suivant une approche disciplinée dans toutes nos opérations.
                            <p>Nous nous engageons à maintenir ces principes dans toutes nos activités et à continuer
                                d'améliorer nos
                                processus pour répondre aux besoins de nos clients de manière efficace.</p><br><br><br>
                        </div>
                    </div>

                    <div class="col-lg-5" data-aos="fade"
                        style="background-image: url(assets/img/kori15.jpg); background-repeat: no-repeat; background-size: cover;">

                    </div><!-- End Quote Form -->

                </div>

            </div>
        </section><!-- End Get Started Section -->

        <!-- ======= Constructions Section ======= -->
        <section id="constructions" class="constructions">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>KORI OIL</h2>
                    <p>Nos atouts</p>
                </div>

                <div class="row gy-4">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url(assets/img/kori8.jpg);"></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Force commerciale.</h4>
                                        <p>Nous nous efforçons de fournir des produits pétroliers de qualité supérieure
                                            à nos clients, tout
                                            en offrant un excellent service à la clientèle. Nous sommes constamment à
                                            l'écoute des besoins de
                                            nos clients et nous nous adaptons rapidement pour répondre à leurs
                                            demandes.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url(assets/img/kori1.jpg);"></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Respect des normes</h4>
                                        <p>En tant que société pétrolière, nous sommes conscients de l'importance du
                                            respect des Hommes, des
                                            normes et de la préservation de l'environnement.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg"
                                        style="background-image: url(assets/img/constructions-3.jpg);">
                                    </div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Expertise technique</h4>
                                        <p>Nous accompagnons nos clients dans tous les secteurs d'activité consommateurs
                                            de carburants:
                                            Transport, BTP, Industrie...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url(assets/img/kori11.jpg);"></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Réseau de distribution</h4>
                                        <p>Pour un service de proximité, nous sommes engagés à étendre notre réseau et
                                            ses services partout
                                            où vos besoin seront .</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->

                </div>

            </div>
        </section><!-- End Constructions Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Services</h2>
                    <p>Nos différents services</p>
                </div>

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-mountain-city"></i>
                            </div>
                            <h3>Importation de produits pétroliers</h3>
                            <p>Sous le controle de l'Etat du Cameroun et dans le strict respect de la règlementation et
                                des normes,
                                nous importons les produits dans des conditions hautement sécurisées</p>
                            <a href="{{ route('GETPAGESERVICES') }}" class="readmore stretched-link">Voir plus <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class=" bi bi-fuel-pump-diesel"></i>
                            </div>
                            <h3>Distribution</h3>
                            <p>Notre réseau de stations-service offre à notre clientèle accueil chaleureux, convivialité
                                et sécurité
                            </p>
                            <a href="{{ route('GETPAGESERVICES') }}" class="readmore stretched-link">Voir plus <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class=" bi bi-water"></i>
                            </div>
                            <h3>Soutage</h3>
                            <p>KORI OIL offre aussi ses services aux usagers du transport maritime; à quai vos bateaux
                                seront servis
                            </p>
                            <a href="{{ route('GETPAGESERVICES') }}" class="readmore stretched-link"> Voir plus <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-send-check-fill"></i>
                            </div>
                            <h3>Exportation de produits pétroliers</h3>
                            <p>Selon vos besoins spécifiques, KORI OIL peut vous servir hors des frontières nationales.
                            </p>
                            <a href="{{ route('GETPAGESERVICES') }}" class="readmore stretched-link">Voir plus<i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->
                </div>
            </div>
        </section><!-- End Services Section -->

        <!-- ======= Alt Services Section ======= -->
        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-6 img-bg" style="background-image: url(assets/img/kori16.jpg);"
                        data-aos="zoom-in" data-aos-delay="100"></div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3>Faites-nous confiance et évoluons ensemble</h3>
                        <p>En choisissant notre sociéte, vous bénéficiez:</p>

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-house-door-fill"></i>
                            <div>
                                <h4><a href="" class="stretched-link">D'un statut de client exceptionnel</a>
                                </h4>
                                <p>Bénéficiez d'un service qui fait de vous un client exceptionnel</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-patch-check flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">D'une bonne qualité de produits</a></h4>
                                <p>Nos produits sont de qualités</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-brightness-high flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">D'un service personnalisé</a></h4>
                                <p>Choisissez les poduits qui vous conviennent le mieux</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-fast-forward-btn-fill"></i>
                            <div>
                                <h4><a href="" class="stretched-link">De la rapidité</a></h4>
                                <p>La rapidité est un de nos atouts</p>
                            </div>
                        </div><!-- End Icon Box -->

                    </div>
                </div>

            </div>
        </section><!-- End Alt Services Section -->

        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/kori3.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Un public satisfait</h2>

            </div>
        </div><!-- End Breadcrumbs -->


    </main><!-- End #main -->
    @include('layout.footer')
</body>

</html>
