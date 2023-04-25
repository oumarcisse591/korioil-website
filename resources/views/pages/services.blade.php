<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nos services</title>

    <!-- Favicons -->
    <link href="{{ url('assets/img/logo.jpg') }}" rel="icon">
    <link href="{{ url('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

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
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/propos.png');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Services</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Services</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

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

        <!-- ======= Servie Cards Section ======= -->
        <section id="services-cards" class="services-cards">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <h3>La boutique</h3>
                        <p>Nous proposons une large gamme de produits pour les besoins quotidiens au sein de notre
                            station essence.
                            Vous trouverez aussi:
                        </p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check2"></i> <span>Des accéssoires automobiles</span></li>
                            <li><i class="bi bi-check2"></i> <span>Des aliments</span></li>
                        </ul>
                    </div><!-- End feature item-->

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <h3>Essence super et gasoil</h3>
                        <p>Venez faire le plein chez nous en toute confiance. Nous disposons:</p>

                        <ul class="list-unstyled">
                            <li><i class="bi bi-check2"></i> <span>Notre station service est équipée de pompes
                                    modernes</span></li>
                            <li><i class="bi bi-check2"></i> <span>Qualité supérieure</span></li>
                        </ul>
                    </div><!-- End feature item-->

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <h3>La vidange</h3>
                        <p>Nous proposons également un service de vidange pour votre voiture afin de maintenir votre
                            moteur en bon
                            état de fonctionnement</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check2"></i> <span>Nous utilisons des huiles de qualités
                                    supérieure</span></li>
                            <li><i class="bi bi-check2"></i> <span>Nos techniciens sont qualifiés</span></li>
                        </ul>
                    </div><!-- End feature item-->

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <h3>Le lavage</h3>
                        <p>Nous proposons également un service de lavage pour votre voiture afin de la maintenir propre
                            et en bon
                            état esthétique.</p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check2"></i> <span>Nous utilisons des prodits de nettoyage de bonnes
                                    qualités</span>
                            </li>
                            <li><i class="bi bi-check2"></i> <span>Nos techniciens sont à votre écoute</span></li>
                        </ul>
                    </div><!-- End feature item-->

                </div>

            </div>
        </section><!-- End Servie Cards Section -->

        <!-- ======= Alt Services Section 2 ======= -->
        <section id="alt-services-2" class="alt-services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3>Tous vos besoins chez nous</h3>
                        <p>Notre station service est là pour répondre à tous vos besoins en matière de carburant et
                            d'entretien de
                            votre véhicule.</p>

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-easel flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Notre équipe est amicale et
                                        professionnelle</a></h4>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-patch-check flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Nous sommes à votre disposition</a></h4>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-brightness-high flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Une gamme de carburants de qualité</a>
                                </h4>
                            </div>
                        </div><!-- End Icon Box -->
                    </div>

                    <div class="col-lg-6 img-bg"
                        style="background-image: url(assets/img/kori13.jpg); background-size: cover; background-repeat:no-repeat;"
                        data-aos="zoom-in" data-aos-delay="100"></div>
                </div>

            </div>
        </section><!-- End Alt Services Section 2 -->

        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/kori3.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Un public satisfait</h2>
            </div>
        </div>
    </main>
    <!-- End #main -->
    @include('layout.footer')
</body>

</html>
