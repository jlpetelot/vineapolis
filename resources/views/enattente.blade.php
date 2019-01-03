<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Compatibilité -->
    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Vineapolis | Tous les vins</title>

    <!-- Métadonnées -->
    <meta name="Madinici" content="Jean-Luc Petelot" />
    <meta name="copyright" content="https://www.madinici.org" />
    <meta name="description" content="Phrase qui décrit l'activité" />
    <meta name="keywords" content="Les mots clés séparés par des virgules" />

    <!-- Le favicon -->
    <link rel="icon" href="http://127.0.0.1:8000/img/favicon.ico">

    <!-- Fonts awavesome -->
    <script src="https://use.fontawesome.com/09469ca861.js"></script>

    <!-- Css carte -->
    <link href="http://127.0.0.1:8000/css/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />

    <!-- Appel jQuery par Google -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
    <!-- jQuery 1.11.2 local (LES AUTRES JQUERY NE FONCTIONNENT PAS) -->
    <script src="http://127.0.0.1:8000/js/jquery-1.11.2.min.js"></script>

    <!-- Css boostrap et perso -->
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/bootstrap.css" media="screen">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/style.css" media="screen">

    <!-- L'url de l'api de Google (sensor dut true permet d'utiliser la géolocalisation) -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAp19-Unh1wLi0eR0LX_V5gEI6a8FUb4iY&callback=initMap" type="text/javascript"></script>
</head>

<body>
<!-- ========================== PAGE, DIV QUI CONTROLE TOUT LE DÉPLACEMENT DU SITE ================-->
<div id="page"><!-- page -->

    <!-- ======================================== MENU ====================================-->
    <div id="customnavbarouverte"><!-- Customnavbar -->
        <!-- ====================================== LOGO ==================================-->
        <div class="logo-box2">
            <a href="http://127.0.0.1:8000">
                <img alt="Logo" src="http://127.0.0.1:8000/img/logo.png">
            </a>
        </div>
        <!-- ==================================== FIN LOGO ================================-->

        <!-- ====================================== MENU ==================================-->
        <div id="menu-box"><!-- menu-box -->
            <ul class="menu">
                <li><a href="http://127.0.0.1:8000"
                    >Accueil</a>
                </li>
                <li><a href="http://127.0.0.1:8000/tous-les-vins"
                       class="active"
                    >Tous les vins</a>
                </li>
                <li><a href="http://127.0.0.1:8000/oenologie"
                    >Oenologie</a>
                </li>
                <li><a href="http://127.0.0.1:8000/newsletter"
                    >Newsletter</a>
                </li>
                <li><a href="http://127.0.0.1:8000/contact"
                    >Contact</a>
                </li>
            </ul>
        </div><!-- ../menu-box -->
        <a class="show-menu"></a>
        <!-- ======================================= FOOTER MENU ====================================-->
        <div id="header-foot"><!-- header-foot -->
            <div class="social-box"><!-- social-box -->
                <ul class="social-icons"><!-- social-icons -->
                    <li><a href="#" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank" class="google"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://www.youtube.com/user/Team8Tuto" target="_blank" class="youtube"><i class="fa fa-youtube-square"></i></a></li>
                </ul><!-- ../social-icons -->
            </div><!-- ../social-box -->
        </div><!-- ../header-foot -->
        <!-- ===================================== FIN FOOTER MENU ===================================-->
    </div><!-- Fin Customnavbar -->
    <!-- =========================================== FIN MENU ========================================-->

    <!-- ======================================== MENU OUVERT ====================================-->
    <div id="menuouvert">
        <div id="customnavbar"><!-- Customnavbar -->
            <!-- =================================== CACHER LE MENU ==========================-->
            <a class="hide-menu" href="javascript:;"><i class="fa fa-long-arrow-left"></i></a>
            <!-- ================================= FIN CACHER LE MENU =========================-->
            <!-- ====================================== LOGO ==================================-->
            <div class="logo-box"><!-- logo-box -->
                <a href="http://127.0.0.1:8000">
                    <img alt="" src="http://127.0.0.1:8000/img/logo.png"></a>
            </div><!-- ../logo-box -->
            <!-- ==================================== FIN LOGO ================================-->
            <!-- ====================================== MENU ==================================-->
            <div id="menu-box"><!-- menu-box -->
                <ul class="menu">
                    <li><a href="http://127.0.0.1:8000"
                        >Accueil</a>
                    </li>
                    <li><a href="http://127.0.0.1:8000/tous-les-vins"
                           class="active"
                        >Tous les vins</a>
                    </li>
                    <li><a href="http://127.0.0.1:8000/oenologie"
                        >Oenologie</a>
                    </li>
                    <li><a href="http://127.0.0.1:8000/newsletter"
                        >Newsletter</a>
                    </li>
                    <li><a href="http://127.0.0.1:8000/contact"
                        >Contact</a>
                    </li>
                </ul>
            </div><!-- ../menu-box -->
            <a href="javascript:;" class="show-menu active"><i class="fa fa-bars"></i></a>
            <!-- ======================================= FOOTER MENU ====================================-->
            <div id="header-foot"><!-- header-foot -->
                <div class="social-box"><!-- social-box -->
                    <ul class="social-icons"><!-- social-icons -->
                        <li><a href="#" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank" class="google"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://www.youtube.com/user/Team8Tuto" target="_blank" class="youtube"><i class="fa fa-youtube-square"></i></a></li>
                    </ul><!-- ../social-icons -->
                </div><!-- ../social-box -->
            </div><!-- ../header-foot -->
            <!-- ===================================== FIN FOOTER MENU ===================================-->
        </div><!-- ../Customnavbar -->
    </div>
    <!-- ======================================== FIN MENU OUVERT ====================================-->

    <!-- ======================================== MENU PETITS ÉCRANS ====================================-->
    <!-- Fixed navbar -->
    <div id="menupetitecran">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Menu</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="http://127.0.0.1:8000"
                            >Accueil</a>
                        </li>
                        <li><a href="http://127.0.0.1:8000/tous-les-vins"
                               class="active"
                            >Tous les vins</a>
                        </li>
                        <li><a href="http://127.0.0.1:8000/oenologie"
                            >Oenologie</a>
                        </li>
                        <li><a href="http://127.0.0.1:8000/newsletter"
                            >Newsletter</a>
                        </li>
                        <li><a href="http://127.0.0.1:8000/contact"
                            >Contact</a>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </div>
    <!-- ======================================== ../MENU PETITS ÉCRANS ====================================-->
    <div class="container"><!-- container -->
        <div class="row"><!-- row -->
            <!-- =========================== ANNONCES GAUCHES ============================ -->
            <!-- =========================== ANNONCES GAUCHES ============================-->
            <article class="a3emeniveau1">
                <figure class="effet">
                    <img src="http://127.0.0.1:8000/img/pubs/2.jpg" alt="2.jpg" title="2.jpg">
                    <figcaption class="annonceur p3emeniveau">
                        <h5>Accédez au site</h5>
                    </figcaption>
                    <a href="#" target="_blank" title="Accédez au site"></a>
                </figure>
            </article>

            <article class="a3emeniveau2">
                <figure class="effet">
                    <img src="http://127.0.0.1:8000/img/pubs/6.jpg" alt="6.jpg" title="6.jpg">
                    <figcaption class="annonceur p3emeniveau">
                        <h5>Accédez au site</h5>
                    </figcaption>
                    <a href="#" target="_blank" title="Accédez au site"></a>
                </figure>
            </article>

            <article class="a3emeniveau3">
                <figure class="effet">
                    <img src="http://127.0.0.1:8000/img/pubs/19.jpg" alt="19.jpg" title="19.jpg">
                    <figcaption class="annonceur p3emeniveau">
                        <h5>Accédez au site</h5>
                    </figcaption>
                    <a href="#" target="_blank" title="Accédez au site"></a>
                </figure>
            </article>

            <article class="a3emeniveau4">
                <figure class="effet">
                    <img src="http://127.0.0.1:8000/img/pubs/15.jpg" alt="15.jpg" title="15.jpg">
                    <figcaption class="annonceur p3emeniveau">
                        <h5>Accédez au site</h5>
                    </figcaption>
                    <a href="#" target="_blank" title="Accédez au site"></a>
                </figure>
            </article>
            <!-- ========================== FIN ANNONCES GAUCHES ==========================-->        <!-- ========================== ../ANNONCES GAUCHES ==========================-->

            <!-- =================================== CONTENU ================================-->
            <div class="row"><!-- row -->
                <div class="col-lg-8"><!-- contenu -->
                    <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->

                        <div class="recherche"><!-- recherche -->
                            <div class="col-xs-12" style="padding: 0 20px"><!-- col-xs-12 -->
                                <h3 style="margin-top: 20px;">Recherchez tous les vins</h3>
                                <p style="margin-bottom: 20px; font-size: 12px;">
                                    (par nom, région, département, rouge, blanc, rosé, pétillant, champagne, Roussette du Bugey, Bordeaux, Bourgogne, Châteauneuf-du-Pape, 1er Cru, grand Cru, etc.)
                                </p>
                                <!-- Le formulaire de recherches -->
                                <form action="http://127.0.0.1:8000/tous-les-vins" method="get">
                                    <input type="hidden" name="_token" value="WUINHmwLvgMGOMjY2VkZ7wtOndYSZ7H1pDPASliz">
                                    <div class="input-group">
                                        <input type="text" name="q" class="form-control input-lg" placeholder="Recherchez tous les vins" value="">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default btn-lg">
                                        Recherchez
                                    </button>
                                </span>
                                    </div>
                                </form>
                                <!-- ../Le formulaire de recherches -->
                                <!-- =========================== RÉSULTATS ============================ -->
                                <div style="margin-top: -10px;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Si le vigneron est actif -->
                                            <h4>
                    <span style="font-size: 14px">
                                                    <i class="fa fa-glass fa-lg" style="color:#990033" aria-hidden="true"></i>
                            <i class="fa fa-glass fa-lg" style="color:#f4ca41" aria-hidden="true"></i>
                            <i class="fa fa-glass fa-lg" style="color:#ff00aa" aria-hidden="true"></i>
                                                <strong>Producteurs Du Haut Bugey</strong>
                        &nbsp;1080, avenue du Général Andréa, 01100 Arbent
                        -&nbsp;Tél&nbsp;:&nbsp;09 62 57 39 50
                                                                            <span class="reportage">
                                <a href="#modalgoogle">
                                    <i class="fa fa-map-marker" style="font-size: 24px"
                                       data-toggle="tooltip"
                                       data-placement="top" title="Situer sur Google Map"
                                       aria-hidden="true">
                                    </i>
                                </a>
                                <a href="#">
                                    &nbsp;<i class="fa fa-at" style="font-size: 22px"
                                             data-toggle="tooltip"
                                             data-placement="top" title="Leur envoyer un message"
                                             aria-hidden="true">
                                    </i>
                                </a>
                            </span>
                                            </span>
                                            </h4>
                                            <!-- ../Si le vigneron est actif -->

                                            <!-- Si le vigneron est inactif -->
                                            <!-- ../Si le vigneron est inactif -->

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Si le vigneron est actif -->
                                            <h4>
                    <span style="font-size: 14px">
                                                    <i class="fa fa-glass fa-lg" style="color:#990033" aria-hidden="true"></i>
                            <i class="fa fa-glass fa-lg" style="color:#f4ca41" aria-hidden="true"></i>
                            <i class="fa fa-glass fa-lg" style="color:#ff00aa" aria-hidden="true"></i>
                                                <strong>Desserrieres Henri</strong>
                        &nbsp;139, grande rue, 01150 Saint-Sorlin en Bugey
                        -&nbsp;Tél&nbsp;:&nbsp;04 74 35 82 48
                                                                        <span class="reportage">
                                <a href="#modalgoogle">
                                    <i class="fa fa-map-marker" style="font-size: 22px"
                                       data-toggle="tooltip"
                                       data-placement="top" title="Situer sur Google Map"
                                       aria-hidden="true">
                                    </i>
                                </a>
                                <a href="#">
                                    &nbsp;<i class="fa fa-at" style="font-size: 22px"
                                             data-toggle="tooltip"
                                             data-placement="top" title="Leur envoyer un message"
                                             aria-hidden="true">
                                    </i>
                                </a>
                                <a href="#modal">
                                    &nbsp;<i class="fa fa-camera" style="font-size: 22px"
                                             data-toggle="tooltip"
                                             data-placement="top" title="Le reportage"
                                             aria-hidden="true">
                                    </i>
                                </a>
                                <a href="#">
                                    &nbsp;<i class="fa fa-video-camera" style="font-size: 22px"
                                             data-toggle="tooltip"
                                             data-placement="top" title="Le reportage vidéo"
                                             aria-hidden="true">
                                    </i>
                                </a>
                            </span>
                                            </span>
                                            </h4>
                                            <!-- ../Si le vigneron est actif -->

                                            <!-- Si le vigneron est inactif -->
                                            <!-- ../Si le vigneron est inactif -->

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Si le vigneron est actif -->
                                            <h4>
                    <span style="font-size: 14px">
                                                    <i class="fa fa-glass fa-lg" style="color:#990033" aria-hidden="true"></i>
                            <i class="fa fa-glass fa-lg" style="color:#f4ca41" aria-hidden="true"></i>
                            <i class="fa fa-glass fa-lg" style="color:#ff00aa" aria-hidden="true"></i>
                                                <strong>Pellerin Jean Christophe</strong>
                        &nbsp;Lieu-dit Perrozan, 01150 Saint-Sorlin en Bugey
                        -&nbsp;Tél&nbsp;:&nbsp;04 74 35 87 69
                                                                            <span class="reportage">
                                <a href="#modalgoogle">
                                    <i class="fa fa-map-marker" style="font-size: 24px"
                                       data-toggle="tooltip"
                                       data-placement="top" title="Situer sur Google Map"
                                       aria-hidden="true">
                                    </i>
                                </a>
                                <a href="#">
                                    &nbsp;<i class="fa fa-at" style="font-size: 22px"
                                             data-toggle="tooltip"
                                             data-placement="top" title="Leur envoyer un message"
                                             aria-hidden="true">
                                    </i>
                                </a>
                                <a href="#">
                                    &nbsp;<i class="fa fa-video-camera" style="font-size: 22px"
                                             data-toggle="tooltip"
                                             data-placement="top" title="Le reportage vidéo"
                                             aria-hidden="true">
                                    </i>
                                </a>
                            </span>
                                            </span>
                                            </h4>
                                            <!-- ../Si le vigneron est actif -->

                                            <!-- Si le vigneron est inactif -->
                                            <!-- ../Si le vigneron est inactif -->

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Si le vigneron est actif -->
                                            <h4>
                    <span style="font-size: 14px">
                                                    <i class="fa fa-glass fa-lg" style="color:#990033" aria-hidden="true"></i>
                            <i class="fa fa-glass fa-lg" style="color:#f4ca41" aria-hidden="true"></i>
                            <i class="fa fa-glass fa-lg" style="color:#ff00aa" aria-hidden="true"></i>
                                                <strong>Philippe Christian</strong>
                        &nbsp;Grande Rue, 01150 Saint-Sorlin en Bugey
                        -&nbsp;Tél&nbsp;:&nbsp;04 74 35 80 52
                                                                            <span class="reportage">
                                <a href="#modalgoogle">
                                    <i class="fa fa-map-marker" style="font-size: 24px"
                                       data-toggle="tooltip"
                                       data-placement="top" title="Situer sur Google Map"
                                       aria-hidden="true">
                                    </i>
                                </a>
                                <a href="#">
                                    &nbsp;<i class="fa fa-at" style="font-size: 22px"
                                             data-toggle="tooltip"
                                             data-placement="top" title="Leur envoyer un message"
                                             aria-hidden="true">
                                    </i>
                                </a>
                                <a href="#modal">
                                    &nbsp;<i class="fa fa-camera" style="font-size: 22px"
                                             data-toggle="tooltip"
                                             data-placement="top" title="Le reportage"
                                             aria-hidden="true">
                                    </i>
                                </a>
                            </span>
                                            </span>
                                            </h4>
                                            <!-- ../Si le vigneron est actif -->

                                            <!-- Si le vigneron est inactif -->
                                            <!-- ../Si le vigneron est inactif -->

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Si le vigneron est actif -->
                                            <h4>
                    <span style="font-size: 14px">
                                                    <i class="fa fa-glass fa-lg" style="color:#990033" aria-hidden="true"></i>
                            <i class="fa fa-glass fa-lg" style="color:#f4ca41" aria-hidden="true"></i>
                            <i class="fa fa-glass fa-lg" style="color:#ff00aa" aria-hidden="true"></i>
                                                <strong>Domaine Duport Schwab</strong>
                        &nbsp;46, Grande Rue, 01150 Vaux-en-Bugey
                        -&nbsp;Tél&nbsp;:&nbsp;09 61 29 22 65
                                                                            <span class="reportage">
                                <a href="#modalgoogle">
                                    <i class="fa fa-map-marker" style="font-size: 24px"
                                       data-toggle="tooltip"
                                       data-placement="top" title="Situer sur Google Map"
                                       aria-hidden="true">
                                    </i>
                                </a>
                                <a href="#">
                                    &nbsp;<i class="fa fa-at" style="font-size: 22px"
                                             data-toggle="tooltip"
                                             data-placement="top" title="Leur envoyer un message"
                                             aria-hidden="true">
                                    </i>
                                </a>
                            </span>
                                            </span>
                                            </h4>
                                            <!-- ../Si le vigneron est actif -->

                                            <!-- Si le vigneron est inactif -->
                                            <!-- ../Si le vigneron est inactif -->

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Si le vigneron est actif -->
                                            <h4>
                    <span style="color: #999; font-size: 14px">
                        Maison Tissot
                        &nbsp;42, Quai du Buizin, 01150 Vaux-en-Bugey
                        <span>&nbsp;
                            <a href="http://127.0.0.1:8000/contact">
                                <i class="fa fa-at" style="color: #999"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>
                                <i class="fa fa-phone" style="color: #999"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>
                                <i class="fa fa-map-marker" style="color: #999"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>
                                <i class="fa fa-camera" style="color: #999; font-size: 12px"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>
                                <i class="fa fa-video-camera" style="color: #999; font-size: 12px"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>

                            </a>
                        </span>
                    </span>
                                            </h4>
                                            <!-- ../Si le vigneron est inactif -->

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Si le vigneron est actif -->
                                            <h4>
                    <span style="font-size: 14px">
                                                    <i class="fa fa-glass fa-lg" style="color:#990033" aria-hidden="true"></i>
                                                <strong>Folliat Roland</strong>
                        &nbsp;85, Chemin de la Tour, 01160 Saint-Martin-du-Mont
                        -&nbsp;Tél&nbsp;:&nbsp;04 74 35 50 96
                                                                            <span class="reportage">
                                <a href="#modalgoogle">
                                    <i class="fa fa-map-marker" style="font-size: 24px"
                                       data-toggle="tooltip"
                                       data-placement="top" title="Situer sur Google Map"
                                       aria-hidden="true">
                                    </i>
                                </a>
                                <a href="#">
                                    &nbsp;<i class="fa fa-at" style="font-size: 22px"
                                             data-toggle="tooltip"
                                             data-placement="top" title="Leur envoyer un message"
                                             aria-hidden="true">
                                    </i>
                                </a>
                            </span>
                                            </span>
                                            </h4>
                                            <!-- ../Si le vigneron est actif -->

                                            <!-- Si le vigneron est inactif -->
                                            <!-- ../Si le vigneron est inactif -->

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Si le vigneron est actif -->
                                            <h4>
                    <span style="font-size: 14px">
                                                    <i class="fa fa-glass fa-lg" style="color:#990033" aria-hidden="true"></i>
                                                <strong>Antoine Véronique</strong>
                        &nbsp;281, En Reculet, 01250 Bohas-Meyriat-Rignat
                        -&nbsp;Tél&nbsp;:&nbsp;06 67 13 00 86
                                                                            <span class="reportage">
                                <a href="#modalgoogle">
                                    <i class="fa fa-map-marker" style="font-size: 24px"
                                       data-toggle="tooltip"
                                       data-placement="top" title="Situer sur Google Map"
                                       aria-hidden="true">
                                    </i>
                                </a>
                                <a href="#">
                                    &nbsp;<i class="fa fa-at" style="font-size: 22px"
                                             data-toggle="tooltip"
                                             data-placement="top" title="Leur envoyer un message"
                                             aria-hidden="true">
                                    </i>
                                </a>
                            </span>
                                            </span>
                                            </h4>
                                            <!-- ../Si le vigneron est actif -->

                                            <!-- Si le vigneron est inactif -->
                                            <!-- ../Si le vigneron est inactif -->

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Si le vigneron est actif -->
                                            <h4>
                    <span style="font-size: 14px">
                                                    <i class="fa fa-glass fa-lg" style="color:#990033" aria-hidden="true"></i>
                            <i class="fa fa-glass fa-lg" style="color:#f4ca41" aria-hidden="true"></i>
                                                <strong>Domaine de la Bélière</strong>
                        &nbsp;120, chemin de la Ravat, 01250 Bohas-Meyriat-Rignat
                        -&nbsp;Tél&nbsp;:&nbsp;06 80 15 27 93
                                                    -&nbsp;Site&nbsp;:&nbsp;
                            <a href="http://www.cerdon-domainedelabeliere.fr" target="_blank">
                                http://www.cerdon-domainedelabeliere.fr
                            </a>
                                                                            <span class="reportage">
                                <a href="#modalgoogle">
                                    <i class="fa fa-map-marker" style="font-size: 24px"
                                       data-toggle="tooltip"
                                       data-placement="top" title="Situer sur Google Map"
                                       aria-hidden="true">
                                    </i>
                                </a>
                                <a href="#">
                                    &nbsp;<i class="fa fa-at" style="font-size: 22px"
                                             data-toggle="tooltip"
                                             data-placement="top" title="Leur envoyer un message"
                                             aria-hidden="true">
                                    </i>
                                </a>
                            </span>
                                            </span>
                                            </h4>
                                            <!-- ../Si le vigneron est actif -->

                                            <!-- Si le vigneron est inactif -->
                                            <!-- ../Si le vigneron est inactif -->

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Si le vigneron est actif -->
                                            <h4>
                    <span style="font-size: 14px">
                                                    <i class="fa fa-glass fa-lg" style="color:#990033" aria-hidden="true"></i>
                            <i class="fa fa-glass fa-lg" style="color:#f4ca41" aria-hidden="true"></i>
                            <i class="fa fa-glass fa-lg" style="color:#ff00aa" aria-hidden="true"></i>
                                                <strong>Collomb Claude</strong>
                        &nbsp;Massignieu Belmont, 01260 Belmont-Luthézieu
                        -&nbsp;Tél&nbsp;:&nbsp;04 79 87 33 62
                                                                            <span class="reportage">
                                <a href="#modalgoogle">
                                    <i class="fa fa-map-marker" style="font-size: 24px"
                                       data-toggle="tooltip"
                                       data-placement="top" title="Situer sur Google Map"
                                       aria-hidden="true">
                                    </i>
                                </a>
                                <a href="#">
                                    &nbsp;<i class="fa fa-at" style="font-size: 22px"
                                             data-toggle="tooltip"
                                             data-placement="top" title="Leur envoyer un message"
                                             aria-hidden="true">
                                    </i>
                                </a>
                            </span>
                                            </span>
                                            </h4>
                                            <!-- ../Si le vigneron est actif -->

                                            <!-- Si le vigneron est inactif -->
                                            <!-- ../Si le vigneron est inactif -->

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Si le vigneron est actif -->
                                            <h4>
                    <span style="color: #999; font-size: 14px">
                        Domaine D&#039;Andert
                        &nbsp;289, rue Chapelle, 01300 Andert et Condon
                        <span>&nbsp;
                            <a href="http://127.0.0.1:8000/contact">
                                <i class="fa fa-at" style="color: #999"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>
                                <i class="fa fa-phone" style="color: #999"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>
                                <i class="fa fa-map-marker" style="color: #999"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>
                                <i class="fa fa-camera" style="color: #999; font-size: 12px"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>
                                <i class="fa fa-video-camera" style="color: #999; font-size: 12px"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>

                            </a>
                        </span>
                    </span>
                                            </h4>
                                            <!-- ../Si le vigneron est inactif -->

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Si le vigneron est actif -->
                                            <h4>
                    <span style="font-size: 14px">
                                                    <i class="fa fa-glass fa-lg" style="color:#990033" aria-hidden="true"></i>
                            <i class="fa fa-glass fa-lg" style="color:#f4ca41" aria-hidden="true"></i>
                            <i class="fa fa-glass fa-lg" style="color:#ff00aa" aria-hidden="true"></i>
                                                <strong>Cave Martin Barbaz</strong>
                        &nbsp;73, Chemin de Thieux, 01300 Izieu
                        -&nbsp;Tél&nbsp;:&nbsp;06 81 54 38 95
                                                                            <span class="reportage">
                                <a href="#modalgoogle">
                                    <i class="fa fa-map-marker" style="font-size: 24px"
                                       data-toggle="tooltip"
                                       data-placement="top" title="Situer sur Google Map"
                                       aria-hidden="true">
                                    </i>
                                </a>
                                <a href="#">
                                    &nbsp;<i class="fa fa-at" style="font-size: 22px"
                                             data-toggle="tooltip"
                                             data-placement="top" title="Leur envoyer un message"
                                             aria-hidden="true">
                                    </i>
                                </a>
                            </span>
                                            </span>
                                            </h4>
                                            <!-- ../Si le vigneron est actif -->

                                            <!-- Si le vigneron est inactif -->
                                            <!-- ../Si le vigneron est inactif -->

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Si le vigneron est actif -->
                                            <h4>
                    <span style="color: #999; font-size: 14px">
                        Maison Angelot
                        &nbsp;121, rue du Lavoir, 01300 Marignieu
                        <span>&nbsp;
                            <a href="http://127.0.0.1:8000/contact">
                                <i class="fa fa-at" style="color: #999"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>
                                <i class="fa fa-phone" style="color: #999"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>
                                <i class="fa fa-map-marker" style="color: #999"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>
                                <i class="fa fa-camera" style="color: #999; font-size: 12px"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>
                                <i class="fa fa-video-camera" style="color: #999; font-size: 12px"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>

                            </a>
                        </span>
                    </span>
                                            </h4>
                                            <!-- ../Si le vigneron est inactif -->

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Si le vigneron est actif -->
                                            <h4>
                    <span style="color: #999; font-size: 14px">
                        Caveau Quinard
                        &nbsp;201, Lit au Roi, 01300 Massignieu-de-Rives
                        <span>&nbsp;
                            <a href="http://127.0.0.1:8000/contact">
                                <i class="fa fa-at" style="color: #999"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>
                                <i class="fa fa-phone" style="color: #999"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>
                                <i class="fa fa-map-marker" style="color: #999"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>
                                <i class="fa fa-camera" style="color: #999; font-size: 12px"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>
                                <i class="fa fa-video-camera" style="color: #999; font-size: 12px"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>

                            </a>
                        </span>
                    </span>
                                            </h4>
                                            <!-- ../Si le vigneron est inactif -->

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Si le vigneron est actif -->
                                            <h4>
                    <span style="font-size: 14px">
                                                <strong>Caveau Dufour</strong>
                        &nbsp;257, Montée Bourg, 01300 Massignieu-de-Rives
                        -&nbsp;Tél&nbsp;:&nbsp;04 79 42 19 98
                                                    -&nbsp;Site&nbsp;:&nbsp;
                            <a href="http://www.caveau-dufour.fr/" target="_blank">
                                http://www.caveau-dufour.fr/
                            </a>
                                                                            <span class="reportage">
                                <a href="#modalgoogle">
                                    <i class="fa fa-map-marker" style="font-size: 24px"
                                       data-toggle="tooltip"
                                       data-placement="top" title="Situer sur Google Map"
                                       aria-hidden="true">
                                    </i>
                                </a>
                                <a href="#">
                                    &nbsp;<i class="fa fa-at" style="font-size: 22px"
                                             data-toggle="tooltip"
                                             data-placement="top" title="Leur envoyer un message"
                                             aria-hidden="true">
                                    </i>
                                </a>
                            </span>
                                            </span>
                                            </h4>
                                            <!-- ../Si le vigneron est actif -->

                                            <!-- Si le vigneron est inactif -->
                                            <!-- ../Si le vigneron est inactif -->

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Si le vigneron est actif -->
                                            <h4>
                    <span style="color: #999; font-size: 14px">
                        Caveau Dufour
                        &nbsp;257, Montée Bourg, 01300 Massignieu-de-Rives
                        <span>&nbsp;
                            <a href="http://127.0.0.1:8000/contact">
                                <i class="fa fa-at" style="color: #999"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>
                                <i class="fa fa-phone" style="color: #999"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>
                                <i class="fa fa-map-marker" style="color: #999"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>
                                <i class="fa fa-camera" style="color: #999; font-size: 12px"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>
                                <i class="fa fa-video-camera" style="color: #999; font-size: 12px"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>

                            </a>
                        </span>
                    </span>
                                            </h4>
                                            <!-- ../Si le vigneron est inactif -->

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Si le vigneron est actif -->
                                            <h4>
                    <span style="font-size: 14px">
                                                <strong>Vivier Georges</strong>
                        &nbsp;204, impasse Terrasses, 01300 Parves-et-Nattages
                        -&nbsp;Tél&nbsp;:&nbsp;04 79 36 90 25
                                                                            <span class="reportage">
                                <a href="#modalgoogle">
                                    <i class="fa fa-map-marker" style="font-size: 24px"
                                       data-toggle="tooltip"
                                       data-placement="top" title="Situer sur Google Map"
                                       aria-hidden="true">
                                    </i>
                                </a>
                                <a href="#">
                                    &nbsp;<i class="fa fa-at" style="font-size: 22px"
                                             data-toggle="tooltip"
                                             data-placement="top" title="Leur envoyer un message"
                                             aria-hidden="true">
                                    </i>
                                </a>
                            </span>
                                            </span>
                                            </h4>
                                            <!-- ../Si le vigneron est actif -->

                                            <!-- Si le vigneron est inactif -->
                                            <!-- ../Si le vigneron est inactif -->

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Si le vigneron est actif -->
                                            <h4>
                    <span style="font-size: 14px">
                                                <strong>Perdrix Philippe</strong>
                        &nbsp;Domaine de Villeneuve, 01300 Saint-Benoît
                        -&nbsp;Tél&nbsp;:&nbsp;04 74 39 74 24
                                                    -&nbsp;Site&nbsp;:&nbsp;
                            <a href="http://www.vin-perdrixphilippe.com/" target="_blank">
                                http://www.vin-perdrixphilippe.com/
                            </a>
                                                                            <span class="reportage">
                                <a href="#modalgoogle">
                                    <i class="fa fa-map-marker" style="font-size: 24px"
                                       data-toggle="tooltip"
                                       data-placement="top" title="Situer sur Google Map"
                                       aria-hidden="true">
                                    </i>
                                </a>
                                <a href="#">
                                    &nbsp;<i class="fa fa-at" style="font-size: 22px"
                                             data-toggle="tooltip"
                                             data-placement="top" title="Leur envoyer un message"
                                             aria-hidden="true">
                                    </i>
                                </a>
                            </span>
                                            </span>
                                            </h4>
                                            <!-- ../Si le vigneron est actif -->

                                            <!-- Si le vigneron est inactif -->
                                            <!-- ../Si le vigneron est inactif -->

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Si le vigneron est actif -->
                                            <h4>
                    <span style="color: #999; font-size: 14px">
                        Roux Jean-Jacques
                        &nbsp;Chatonod, 01300 Saint-Champ
                        <span>&nbsp;
                            <a href="http://127.0.0.1:8000/contact">
                                <i class="fa fa-at" style="color: #999"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>
                                <i class="fa fa-phone" style="color: #999"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>
                                <i class="fa fa-map-marker" style="color: #999"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>
                                <i class="fa fa-camera" style="color: #999; font-size: 12px"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>
                                <i class="fa fa-video-camera" style="color: #999; font-size: 12px"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>

                            </a>
                        </span>
                    </span>
                                            </h4>
                                            <!-- ../Si le vigneron est inactif -->

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Si le vigneron est actif -->
                                            <h4>
                    <span style="font-size: 14px">
                                                    <i class="fa fa-glass fa-lg" style="color:#990033" aria-hidden="true"></i>
                            <i class="fa fa-glass fa-lg" style="color:#f4ca41" aria-hidden="true"></i>
                                                <strong>Domaine l&#039;abbe dîne</strong>
                        &nbsp;1bis, chemin Louise Michel, 84350 Courthézon
                        -&nbsp;Tél&nbsp;:&nbsp;06 12 66 99 50
                                                                            <span class="reportage">
                                <a href="#modalgoogle">
                                    <i class="fa fa-map-marker" style="font-size: 24px"
                                       data-toggle="tooltip"
                                       data-placement="top" title="Situer sur Google Map"
                                       aria-hidden="true">
                                    </i>
                                </a>
                                <a href="#">
                                    &nbsp;<i class="fa fa-at" style="font-size: 22px"
                                             data-toggle="tooltip"
                                             data-placement="top" title="Leur envoyer un message"
                                             aria-hidden="true">
                                    </i>
                                </a>
                            </span>
                                            </span>
                                            </h4>
                                            <!-- ../Si le vigneron est actif -->

                                            <!-- Si le vigneron est inactif -->
                                            <!-- ../Si le vigneron est inactif -->

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Si le vigneron est actif -->
                                            <h4>
                    <span style="font-size: 14px">
                                                    <i class="fa fa-glass fa-lg" style="color:#990033" aria-hidden="true"></i>
                            <i class="fa fa-glass fa-lg" style="color:#f4ca41" aria-hidden="true"></i>
                            <i class="fa fa-glass fa-lg" style="color:#ff00aa" aria-hidden="true"></i>
                                                <strong>Domaine de la Destinée</strong>
                        &nbsp;215, Chemin de la Gironde, 84100 Orange
                        -&nbsp;Tél&nbsp;:&nbsp;04 90 11 06 85
                                                    -&nbsp;Site&nbsp;:&nbsp;
                            <a href="https://www.ladestinee.com/" target="_blank">
                                https://www.ladestinee.com/
                            </a>
                                                                            <span class="reportage">
                                <a href="#modalgoogle">
                                    <i class="fa fa-map-marker" style="font-size: 24px"
                                       data-toggle="tooltip"
                                       data-placement="top" title="Situer sur Google Map"
                                       aria-hidden="true">
                                    </i>
                                </a>
                                <a href="#">
                                    &nbsp;<i class="fa fa-at" style="font-size: 22px"
                                             data-toggle="tooltip"
                                             data-placement="top" title="Leur envoyer un message"
                                             aria-hidden="true">
                                    </i>
                                </a>
                            </span>
                                            </span>
                                            </h4>
                                            <!-- ../Si le vigneron est actif -->

                                            <!-- Si le vigneron est inactif -->
                                            <!-- ../Si le vigneron est inactif -->

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Si le vigneron est actif -->
                                            <h4>
                    <span style="color: #999; font-size: 14px">
                        Domaine de l&#039;Arnesque
                        &nbsp;Traverse de Monsieur Ode, 84150 Jonquières
                        <span>&nbsp;
                            <a href="http://127.0.0.1:8000/contact">
                                <i class="fa fa-at" style="color: #999"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>
                                <i class="fa fa-phone" style="color: #999"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>
                                <i class="fa fa-map-marker" style="color: #999"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>
                                <i class="fa fa-camera" style="color: #999; font-size: 12px"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>
                                <i class="fa fa-video-camera" style="color: #999; font-size: 12px"
                                   data-toggle="tooltip"
                                   data-placement="top" title="Cliquez ici pour vous démarquer des autres !"
                                   aria-hidden="true">
                                </i>

                            </a>
                        </span>
                    </span>
                                            </h4>
                                            <!-- ../Si le vigneron est inactif -->

                                        </div>
                                    </div>
                                    <div style="margin-bottom: 140px;"></div>



                                </div>
                                <!-- ========================== ../RÉSULTATS ==========================-->
                            </div><!-- ../col-xs-12 -->
                        </div><!-- ../recherche -->

                        <!-- =========================== ANNONCES DROITES ============================ -->
                        <!-- ============================= ANNONCES DROITES =============================-->
                        <article class="a3emeniveau5">
                            <figure class="effet">
                                <img src="http://127.0.0.1:8000/img/remplace1/06.jpg" alt="Pub remplaçante" title="Pub remplaçante">
                                <figcaption class="annonceur p3emeniveau">
                                    <h5>Voir les détails</h5>
                                </figcaption>
                                <a href="http://127.0.0.1:8000/contact" target="_self" title="Ici votre publicité"></a>
                            </figure>
                        </article>


                        <article class="a3emeniveau6">
                            <figure class="effet">
                                <img src="http://127.0.0.1:8000/img/remplace1/09.jpg" alt="Pub remplaçante" title="Pub remplaçante">
                                <figcaption class="annonceur p3emeniveau">
                                    <h5>Voir les détails</h5>
                                </figcaption>
                                <a href="http://127.0.0.1:8000/contact" target="_self" title="Ici votre publicité"></a>
                            </figure>
                        </article>

                        <article class="a3emeniveau7">
                            <figure class="effet">
                                <img src="http://127.0.0.1:8000/img/remplace1/03.jpg" alt="Pub remplaçante" title="Pub remplaçante">
                                <figcaption class="annonceur p3emeniveau">
                                    <h5>Voir les détails</h5>
                                </figcaption>
                                <a href="http://127.0.0.1:8000/contact" target="_self" title="Ici votre publicité"></a>
                            </figure>
                        </article>

                        <article class="a3emeniveau8">
                            <figure class="effet">
                                <img src="http://127.0.0.1:8000/img/pubs/1.jpg" alt="1.jpg" title="1.jpg">
                                <figcaption class="annonceur p3emeniveau">
                                    <h5>Accédez au site</h5>
                                </figcaption>
                                <a href="#" target="_blank" title="Accédez au site"></a>
                            </figure>
                        </article>
                        <!-- ========================== FIN ANNONCES DROITES ==========================-->                    <!-- ========================== ../ANNONCES DROITES ==========================-->

                    </div><!-- ../cadreblanc3emeniveau2 -->
                </div><!-- ../contenu -->
            </div><!-- ../row -->
            <!-- =================================== ../CONTENU ================================-->

            <!-- =================================== FOOTER2 ================================-->
            <!-- ============================================= FOOTER =============================================-->
            <footer id="footer2">
                <p>
                    <img src="http://127.0.0.1:8000/img/logobas2.png" id="logobas" alt="Logo du bas de la page"><span class="paddingdroite">|</span>
                    <a href="conditionsgenerales">Conditions générales</a><span class="paddingdroite">|</span>
                    <a href="contact"> Contact</a><span class="paddingdroite">|</span>
                    <a class="signup" href="/contact">Devenez annonceur</a><span class="paddingdroite">|</span>
                    &nbsp;Sources cartes Benoît France ®, design Jean-Luc Petelot
                    <span class="paddingdroite">|</span>
                    <span class="powered2">&nbsp;Powered by </span>
                    <a href="http://madinici.org" target="_blank">Madinici.org</a>
                </p>
            </footer>
            <!-- =========================================== FIN FOOTER ============================================-->
            <!-- =================================== ../FOOTER2 ================================-->

            <!-- ==================================== MODAL REPORTAGES ===================================-->
            <div id="modal">
                <div class="modal-content-tls">
                    <div class="row">
                        <div class="col-md-12" id="modalentete"><!-- col-md-12 -->
                            <div class="col-md-2 margehaute10px">
                                <a href="http://www.chateauneuf.com" target="_blank">
                                    <h3 class="gras rouge sitemodal">http://www.chateauneuf.com
                                    </h3>
                                </a>
                            </div>
                            <a href="http://www.chateauneuf.com" target="_blank">
                                <div class="col-md-2 margehaute15px gauche10px imagefleche">
                                    <img src="http://vineapolis.vineapolis.fr/assets/img/flechemodalverte.png" alt="">
                                </div>
                            </a>
                            <a class="modal-close2" href="#" title="Fermer la fenêtre">
                                <i class="fa fa-times-circle fa-3x" aria-hidden="true"></i>
                            </a>
                        </div><!-- ../col-md-12 -->
                        <div class="col-md-12"><!-- col-md-12 -->
                            <img src="http://127.0.0.1:8000/img/chateauneuf-du-pape.jpg" style="width:100%; max-height:480px" alt="domainelabbedine">

                            <div class="commentaires2">
                                <ul>
                                    <li>
                                        <h3 class="gras">Domaine l'abbe dîne</h3>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o padleft8px"></i>&nbsp;
                                        <span>
                                            1480 ch. des mulets&nbsp;-&nbsp;
                                            84350&nbsp;-&nbsp;
                                            Courthezon&nbsp;-&nbsp;
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i>&nbsp;
                                        <span>(0)4 90 70 20 21</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="modal2touslesvins">
                                <div class="col-md-4">
                                    <hr class="moins15px">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, quis, natus, tempore aspernatur laborum ipsa <span class="vert gras">illo quae commodi quosodit culpa</span> distinctio ut amet omnis sint voluptate exercitationem totam veniam!</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, quis, natus, tempore aspernatur laborum ipsa illo quae commodi quos odit culpa distinctio ut amet omnis sint voluptate exercitationem totam veniam!</p>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, quis, natus, tempore aspernatur laborum ipsa <span class="vert gras">illo quae commodi quosodit culpa</span> distinctio ut amet omnis sint voluptate exercitationem totam veniam!</p>
                                </div>
                                <div class="col-md-4">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, quis, natus, tempore aspernatur laborum ipsa illo quae commodi quos odit culpa distinctio ut amet omnis sint voluptate exercitationem totam veniam!</p>
                                    <p>Lorem ipsum dolor sit amet, <span class="vert gras">consectetur adipisicing elit.</span> Eum, quis, natus, tempore aspernatur laborum ipsa illo quae commodi quos odit culpa distinctio ut amet omnis sint voluptate exercitationem totam veniam!</p>
                                </div>
                                <div class="col-md-4">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, quis, natus, tempore aspernatur laborum ipsa illo quae commodi quos odit culpa distinctio ut amet omnis sint voluptate exercitationem totam veniam!</p>
                                    <p>Lorem ipsum dolor sit amet, <span class="vert gras">consectetur adipisicing elit.</span> Eum, quis, natus, tempore aspernatur laborum ipsa illo quae commodi quos odit culpa distinctio ut amet omnis sint voluptate exercitationem totam veniam!</p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a type="button" href="#" class="btn btn-vert2" data-dismiss="modal">Fermer</a>
                            </div>

                        </div><!-- ../col-md-12 -->
                    </div>
                </div>
            </div>
            <!-- ================================== ../MODAL REPORTAGES   ===================================-->

            <!-- ============================ MODAL CARTE GOOGLE ==================================== -->
            <div id="modalgoogle"><!-- Bloccarte Google -->
                <div class="modalgoogle-content-3emeniveau">
                    <div class="row">
                        <div class="col-md-12" id="modalentetegoogle"><!-- col-md-12 -->
                            <div class="col-md-6 margehaute10px">
                                <ul class="tlvs">
                                    <li><h3 class="vert gras">Domaine l'abbe dîne</h3></li>
                                    <li>
                                        <p>1480 ch. des mulets&nbsp;-&nbsp;84350&nbsp;-&nbsp;
                                            Courthezon&nbsp;-&nbsp;(0)4 90 70 20 21&nbsp;-&nbsp;
                                            <a href="http://www.chateauneuf.com">http://www.chateauneuf.com</a>
                                        </p>
                                    </li>
                                    <div style="margin-top: -10px; color: #999; font-size: 12px">
                                        Si la carte n'apparait pas,
                                        rafraîchissez votre navigateur
                                        avec votre clavier :
                                        Ctrl + r sur Windows et Cmd + r sur Mac.
                                    </div>
                                </ul>
                            </div>

                            <div class="col-md-offset-5 col-md-1 margehaute10px">
                                <a class="modalggogle-close" href="#" title="Fermer la fenêtre">
                                    <i class="fa fa-times-circle fa-3x" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div><!-- ../col-md-12 -->
                        <div class="col-md-12"><!-- col-md-12 -->
                            <div id="cartegoogle"></div>
                        </div><!-- ../col-md-12 -->
                    </div>
                </div>
            </div><!-- ../Bloccarte Google -->
            <!-- ============================ ../MODAL CARTE GOOGLE ==================================== -->

            <!-- ============================= GOOGLE MAP JL PETELOT 2017 ============================ -->
            <script type="text/javascript">
                // window.onload = function () {} permet de forcer le chargement de la carte
                window.onload = function ()
                {
                    /* LES LOCATIONS ET MARQUEURS */
                    var domaine = '/img/marker-gdscruschablis.png';

                    var locations = [
                        ['<h4>'+"Domaine l'abbe dîne"+'</h4>'+
                        '<div>'+""+'</div>'+
                        '<div>'+"1480 ch. des mulets"+'</div>'+
                        '<div>'+"Tél. : (0)4 90 70 20 21"+'</div>'+
                        '<p>'+"84350 Courthezon"+'</p>'+
                        '<a href="http://www.chateauneuf.com" target="_blank">http://www.chateauneuf.com</a>',
                            44.0831502,
                            4.8600323,
                            domaine
                        ]
                    ];

                    /* CARTE DE GOOGLE MAP */
                    var map = new google.maps.Map(document.getElementById('cartegoogle'), {
                        zoom: 13,
                        center: new google.maps.LatLng(44.0831502,4.86),
                        mapTypeControl: true,
                        mapTypeControlOptions: {
                            style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
                        },
                        navigationControl: true,
                        navigationControlOptions: {
                            style: google.maps.NavigationControlStyle.SMALL,
                            position: google.maps.ControlPosition.TOP_RIGHT
                        },
                        scaleControl: true,
                        streetViewControl: true,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    });

                    /* INITIALISATION DE GOOGLE MAP ET ANIMATION */
                    var infowindow = new google.maps.InfoWindow();

                    var marker, i;

                    for (i = 0; i < locations.length; i++) {
                        marker = new google.maps.Marker({
                            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                            map: map,
                            /* animation :google.maps.Animation.DROP, */
                            icon : locations[i][3]
                        });

                        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                            return function() {
                                infowindow.setContent(locations[i][0]);
                                infowindow.open(map, marker);
                            }
                        })(marker, i));
                    }
                }
            </script>
            <!-- =========================== FIN GOOGLE MAP JL PETELOT 2017 ========================== -->
        </div><!-- ../row -->
    </div><!-- ../container -->

    <!-- ========================================== APPELS JAVASCRIPTS ====================================-->
    <!-- js Boostrap -->
    <script type="text/javascript" src="http://127.0.0.1:8000/js/bootstrap.js"></script>
    <!-- js site -->
    <script type="text/javascript" src="http://127.0.0.1:8000/js/script.js"></script>
    <!-- ======================================= FIN APPELS JAVASCRIPTS ==================================-->

</body>

</html><!-- ================= APPELS JAVASCRIPTS DE LA CARTE GRANDS CRUS DE CHABLIS ============================= -->
<script src="http://127.0.0.1:8000/js/cartegdschablis.js" type="text/javascript"></script>
<script src="http://127.0.0.1:8000/js/jquery.vmap.gdschablis.js" type="text/javascript"></script>
<!-- =============== FIN APPELS JAVASCRIPTS DE LA CARTE GRANDS CRUS DE CHABLIS =============================-->