@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.saintemilion.gauche')
        <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Vins de Saint-Émilion</h3>
                        </div>
                        <a href="#modalgoogle">
                            <i class="fa fa-map-marker grand" data-toggle="tooltip"
                               data-placement="left3" title="Tous vos {{ $vinzoom->localitevinicole }} sur Google Map">
                            </i>
                        </a>
                        <div class="clear"></div>
                        <!-- ======================== LA CARTE ============================== -->
                        <!-- carte -->
                        <div id="carte3emeniveau">
                            <img src="{{ asset('img/saint-emilion.jpg') }}" alt="Saint-Émilion">
                        </div>
                        <a href="#modal" id="modal3emeniveau">
                            <i class="fa fa-eye" data-toggle="tooltip"
                               data-placement="left2" title="Voir les parcelles">
                            </i>
                        </a>
                        <!-- Fin carte -->
                        <!-- ======================== FIN CARTE ============================== -->

                        <!-- ======================= LE CONTENU ============================== -->
                        <div class="row"><!-- row -->
                            <div class="col-lg-12"><!-- col-lg-12 -->
                                <div class="cadrecarte1"><!-- cadrecarte1 -->
                                    <div class="emballage3emeniveau"><!-- détermine les padings -->

                                        <!-- ==================== LE CONTENU DES ONGLETS ========================-->
                                        <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs"><!-- bs-example -->
                                            <ul id="myTabs" class="nav nav-tabs" role="tablist"><!-- nav nav-tabs -->

                                                <!-- 1ER ONGLET -->
                                                <li role="presentation" class="active">
                                                    <a href="#onglet1" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                                                        Saint-Émilion
                                                    </a>
                                                </li>
                                                <!-- ../1ER ONGLET -->

                                                <!-- 2ND ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet2" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Saint-Émilion Grand Cru
                                                    </a>
                                                </li>
                                                <!-- ../2ND ONGLET -->

                                                <!-- 3ÈME ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet3" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Lussac-Saint-Émilion
                                                    </a>
                                                </li>
                                                <!-- ../3ÈME ONGLET -->

                                                <!-- 4ÈME ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet4" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Montagne-Saint-Émilion
                                                    </a>
                                                </li>
                                                <!-- ../4ÈME ONGLET -->

                                                <!-- 5ÈME ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet5" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Puisseguin-Saint-Émilion
                                                    </a>
                                                </li>
                                                <!-- ../5ÈME ONGLET -->

                                                <!-- 6ÈME ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet6" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Saint-Georges-Saint-Émilion
                                                    </a>
                                                </li>
                                                <!-- ../6ÈME ONGLET -->


                                            </ul><!-- End nav nav-tabs -->
                                            <div id="myTabContent" class="tab-content"><!-- myTabContent -->

                                                <!-- ======================= TEXTE 1 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet1" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Saint-Émilion</h5>
                                                                                <li>
                                                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                                </li>
                                                                                <li>
                                                                                    <i class="fa fa-calendar"></i>
                                                                                    <span class="pad3px">Rédigé le 01 février 2022</span>
                                                                                </li>
                                                                            </ul>
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rougemoulislistrac">Présentation</h6>
                                                                                <p>Le Saint-Émilion est un vin rouge AOC produit dans le Vignoble de Bordeaux, en Gironde. Il est produit autour de la commune de Saint-Emilion.
                                                                                </p>
                                                                                <h6 class="rougemoulislistrac">caractère :</h6>
                                                                                <p> Bouche : ferme et veloutée</br>
                                                                                    Robe : rubis profond</br>
                                                                                    Arômes : fruits rouges, épices, pin, cèdre, cacao
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rougemoulislistrac">garde, température et gastronomie</h6>
                                                                                <p> Température de service : 16 °C</br>
                                                                                    Temps de garde : 30 ans</br>
                                                                                    Accords mets/vins : boeuf grillé, foie gras
                                                                                </p>
                                                                                <h6 class="rougemoulislistrac">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Rendement moyen : 53 à 65 hl/ha.</br>
                                                                                    &middot; Désignation : Saint-Émilion</br>
                                                                                    &middot; Appellation principale : Saint-Émilion</br>
                                                                                    &middot; Vignoble : de Bordeaux</br>
                                                                                    &middot; Superficie plantée : 5 400 ha.</br>
                                                                                    &middot; Production (en hectolitres) : 51 000 hl.</br>
                                                                                    &middot; Climat : tempéré océanique</br>
                                                                                    &middot; Vins produits : rouges</br>
                                                                                    &middot; Cépages dominants : merlot, cabernet franc, cabernet sauvignon</br>
                                                                                    &middot; Rendement moyen : 53 à 65 hl/ha.
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                    </div><!-- End row -->
                                                                    <!-- ../TEXTE -->
                                                                    <!-- ==================== FIN CONTENU DES ONGLETS ========================-->
                                                                </div><!-- Fin détermine les padings -->
                                                            </div><!-- Fin cadrecarte1 -->
                                                        </div><!-- Fin col-lg-12 -->
                                                    </div><!-- End row -->
                                                </div><!-- tabpanel -->
                                                <!-- ===================== TEXTE 1 ============================-->

                                                <!-- ======================= TEXTE 2 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet2" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Saint-Émilion Grand Cru</h5>
                                                                                <li>
                                                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                                </li>
                                                                                <li>
                                                                                    <i class="fa fa-calendar"></i>
                                                                                    <span class="pad3px">Rédigé le 15 mars 2022</span>
                                                                                </li>
                                                                            </ul>
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rougemoulislistrac">Présentation</h6>
                                                                                <p>
                                                                                    Le Saint-Émilion Grand Cru est un vin rouge AOC produit dans le Vignoble de Bordeaux, en Gironde. Il est produit sur une partie des 9 communes de l’appellation saint-émilion. Ce vin est considéré comme un « vin de légende. »
                                                                                </p>
                                                                                <h6 class="rougemoulislistrac">caractère :</h6>
                                                                                <p>
                                                                                    Bouche : dense et longue<br/>
                                                                                    Robe : rubis profond, reflets grenat<br/>
                                                                                    Arômes : fruits rouges frais, pruneau, figue, pivoine, cacao, amande, santal
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rougemoulislistrac">garde, température et gastronomie</h6>
                                                                                <p>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Temps de garde : 50 ans<br/>
                                                                                    Accords mets/vins : plats nobles, champignons, volailles, truffe
                                                                                </p>
                                                                                <h6 class="rougemoulislistrac">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Saint-Émilion Grand Cru<br/>
                                                                                    &middot; Appellation principale : Saint-Émilion Grand Cru<br/>
                                                                                    &middot; Vignoble : de Bordeaux<br/>
                                                                                    &middot; Superficie plantée : 5 400 ha.<br/>
                                                                                    &middot; Production (en hectolitres) : 72 000 hl.<br/>
                                                                                    &middot; Climat : tempéré océanique<br/>
                                                                                    &middot; Vins produits : rouges<br/>
                                                                                    &middot; Cépages dominants : merlot, cabernet franc, cabernet sauvignon<br/>
                                                                                    &middot; Rendement moyen : 46 à 55 hl/ha.
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                    </div><!-- End row -->
                                                                    <!-- ../TEXTE -->
                                                                    <!-- ==================== FIN CONTENU DES ONGLETS ========================-->
                                                                </div><!-- Fin détermine les padings -->
                                                            </div><!-- Fin cadrecarte1 -->
                                                        </div><!-- Fin col-lg-12 -->
                                                    </div><!-- End row -->
                                                </div><!-- tabpanel -->
                                                <!-- ===================== TEXTE 2 ============================-->

                                                <!-- ======================= TEXTE 3 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet3" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Lussac-Saint-Émilion</h5>
                                                                                <li>
                                                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                                </li>
                                                                                <li>
                                                                                    <i class="fa fa-calendar"></i>
                                                                                    <span class="pad3px">Rédigé le 15 mars 2022</span>
                                                                                </li>
                                                                            </ul>
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rougemoulislistrac">Présentation</h6>
                                                                                <p>
                                                                                    Le Lussac-Saint-Émilion est un vin rouge AOC produit dans le Vignoble de Bordeaux, en Gironde. Il est produit sur la commune de Lussac.
                                                                                </p>
                                                                                <h6 class="rougemoulislistrac">caractère :</h6>
                                                                                <p>
                                                                                    Bouche : souple et longue<br/>
                                                                                    Robe : rouge profonde<br/>
                                                                                    Arômes : fruits rouges, réglisse, cuir, épices
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rougemoulislistrac">garde, température et gastronomie</h6>
                                                                                <p>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Temps de garde : 3 à 5 ans<br/>
                                                                                    Accords mets/vins : gibiers, viandes blanches
                                                                                </p>
                                                                                <h6 class="rougemoulislistrac">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Lussac-Saint-Emilion Grand Cru<br/>
                                                                                    &middot; Appellation principale : Lussac-Saint-Emilion Grand Cru<br/>
                                                                                    &middot; Vignoble : de Bordeaux<br/>
                                                                                    &middot; Superficie plantée : 1 440 ha.<br/>
                                                                                    &middot; Production (en hectolitres) : 85 000 hl.<br/>
                                                                                    &middot; Climat : tempéré océanique<br/>
                                                                                    &middot; Vins produits : rouges<br/>
                                                                                    &middot; Cépages dominants : merlot, cabernet franc, cabernet sauvignon<br/>
                                                                                    &middot; Rendement moyen : 53 à 65 hl/ha.
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                    </div><!-- End row -->
                                                                    <!-- ../TEXTE -->
                                                                    <!-- ==================== FIN CONTENU DES ONGLETS ========================-->
                                                                </div><!-- Fin détermine les padings -->
                                                            </div><!-- Fin cadrecarte1 -->
                                                        </div><!-- Fin col-lg-12 -->
                                                    </div><!-- End row -->
                                                </div><!-- tabpanel -->
                                                <!-- ===================== TEXTE 3 ============================-->

                                                <!-- ======================= TEXTE 4 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet4" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Montagne-Saint-Émilion</h5>
                                                                                <li>
                                                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                                </li>
                                                                                <li>
                                                                                    <i class="fa fa-calendar"></i>
                                                                                    <span class="pad3px">Rédigé le 15 mars 2022</span>
                                                                                </li>
                                                                            </ul>
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rougemoulislistrac">Présentation</h6>
                                                                                <p>
                                                                                    Le Montagne-Saint-Émilion est un vin rouge AOC produit dans le Vignoble de Bordeaux, en Gironde. Il est produit sur la commune de Montagne.
                                                                                </p>
                                                                                <h6 class="rougemoulislistrac">caractère :</h6>
                                                                                <p>
                                                                                    Bouche : fine et élégante<br/>
                                                                                    Robe : rubis profonde<br/>
                                                                                    Arômes : fruits rouges et noirs, fruits cuits, cacao
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rougemoulislistrac">garde, température et gastronomie</h6>
                                                                                <p>
                                                                                    Température de service : 16 °Ce<br/>
                                                                                    Temps de garde : 10 ans<br/>
                                                                                    Accords mets/vins : viandes rouges
                                                                                </p>
                                                                                <h6 class="rougemoulislistrac">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Montagne-Saint-Emilion<br/>
                                                                                    &middot; Appellation principale : Montagne-Saint-Emilion<br/>
                                                                                    &middot; Vignoble : de Bordeaux<br/>
                                                                                    &middot; Superficie plantée : 1 600 ha.<br/>
                                                                                    &middot; Production (en hectolitres) : 91 600 hl.<br/>
                                                                                    &middot; Climat : tempéré océanique<br/>
                                                                                    &middot; Vins produits : rouges<br/>
                                                                                    &middot; Cépages dominants : merlot<br/>
                                                                                    &middot; Rendement moyen : 53 à 65 hl/ha.
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                    </div><!-- End row -->
                                                                    <!-- ../TEXTE -->
                                                                    <!-- ==================== FIN CONTENU DES ONGLETS ========================-->
                                                                </div><!-- Fin détermine les padings -->
                                                            </div><!-- Fin cadrecarte1 -->
                                                        </div><!-- Fin col-lg-12 -->
                                                    </div><!-- End row -->
                                                </div><!-- tabpanel -->
                                                <!-- ===================== TEXTE 4 ============================-->

                                                <!-- ======================= TEXTE 5 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet5" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Puisseguin-Saint-Émilion</h5>
                                                                                <li>
                                                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                                </li>
                                                                                <li>
                                                                                    <i class="fa fa-calendar"></i>
                                                                                    <span class="pad3px">Rédigé le 15 mars 2022</span>
                                                                                </li>
                                                                            </ul>
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rougemoulislistrac">Présentation</h6>
                                                                                <p>
                                                                                    Le Puisseguin-Saint-Émilion est un vin rouge AOC produit dans le Vignoble de Bordeaux, en Gironde. Il est produit autour de la commune de Puisseguin.
                                                                                </p>
                                                                                <h6 class="rougemoulislistrac">caractère :</h6>
                                                                                <p>
                                                                                    Bouche : ronde et moelleuse<br/>
                                                                                    Robe : rubis profond, reflets violets voir bruns<br/>
                                                                                    Arômes : fruits rouges murs, fruits à noyaux, violette, vanille, épices, bois, épices
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rougemoulislistrac">garde, température et gastronomie</h6>
                                                                                <p>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Temps de garde : 10 ans<br/>
                                                                                    Accords mets/vins : côte de boeuf
                                                                                </p>
                                                                                <h6 class="rougemoulislistrac">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Puisseguin-Saint-Émilion<br/>
                                                                                    &middot; Appellation principale : Puisseguin-Saint-Émilion<br/>
                                                                                    &middot; Vignoble : de Bordeaux<br/>
                                                                                    &middot; Superficie plantée : 745 ha.<br/>
                                                                                    &middot; Production (en hectolitres) : 43 000 hl.<br/>
                                                                                    &middot; Climat : tempéré océanique<br/>
                                                                                    &middot; Vins produits : rouges<br/>
                                                                                    &middot; Cépages dominants : merlot, cabernet franc, cabernet sauvignon<br/>
                                                                                    &middot; Rendement moyen : 53 à 65 hl/ha.
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                    </div><!-- End row -->
                                                                    <!-- ../TEXTE -->
                                                                    <!-- ==================== FIN CONTENU DES ONGLETS ========================-->
                                                                </div><!-- Fin détermine les padings -->
                                                            </div><!-- Fin cadrecarte1 -->
                                                        </div><!-- Fin col-lg-12 -->
                                                    </div><!-- End row -->
                                                </div><!-- tabpanel -->
                                                <!-- ===================== TEXTE 5 ============================-->

                                                <!-- ======================= TEXTE 6 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet6" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Saint-Georges-Saint-Émilion</h5>
                                                                                <li>
                                                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                                </li>
                                                                                <li>
                                                                                    <i class="fa fa-calendar"></i>
                                                                                    <span class="pad3px">Rédigé le 15 mars 2022</span>
                                                                                </li>
                                                                            </ul>
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rougemoulislistrac">Présentation</h6>
                                                                                <p>
                                                                                    Le Saint-Georges-Saint-Émilion est un vin rouge AOC produit dans le Vignoble de Bordeaux, en Gironde. Il est produit sur le hameau de Saint-Georges-Saint-Emilion, dépendant de la commune de Montagne.
                                                                                </p>
                                                                                <h6 class="rougemoulislistrac">caractère :</h6>
                                                                                <p>
                                                                                    Bouche : ronde et moelleuse<br/>
                                                                                    Robe : pourpre foncé<br/>
                                                                                    Arômes : épices, pruneaux, petits fruits rouges, sous-bois, réglisse, gibier
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rougemoulislistrac">garde, température et gastronomie</h6>
                                                                                <p>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Temps de garde : 5 à 10 ans<br/>
                                                                                    Accords mets/vins : lapin, viandes rouges ou blanches
                                                                                </p>
                                                                                <h6 class="rougemoulislistrac">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Saint-Georges-Saint-Émilion<br/>
                                                                                    &middot; Appellation principale : Saint-Georges-Saint-Émilionn<br/>
                                                                                    &middot; Vignoble : de Bordeaux<br/>
                                                                                    &middot; VSuperficie plantée : 200 ha.<br/>
                                                                                    &middot; VProduction (en hectolitres) : 11 500 hl.<br/>
                                                                                    &middot; VClimat : océanique<br/>
                                                                                    &middot; Vins produits : rouges<br/>
                                                                                    &middot; Cépages dominants : merlot, cabernet franc, cabernet sauvignon<br/>
                                                                                    &middot; Rendement moyen : 53 à 65 hl/ha.
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                    </div><!-- End row -->
                                                                    <!-- ../TEXTE -->
                                                                    <!-- ==================== FIN CONTENU DES ONGLETS ========================-->
                                                                </div><!-- Fin détermine les padings -->
                                                            </div><!-- Fin cadrecarte1 -->
                                                        </div><!-- Fin col-lg-12 -->
                                                    </div><!-- End row -->
                                                </div><!-- tabpanel -->
                                                <!-- ===================== TEXTE 6 ============================-->

                                            </div><!-- End myTabContent -->
                                        </div><!-- End bs-example -->
                                        <!-- ==================== FIN CONTENU DES ONGLETS ========================-->
                                    </div><!-- Fin détermine les padings -->
                                </div><!-- Fin cadrecarte1 -->
                            </div><!-- Fin col-lg-12 -->
                        </div><!-- End row -->
                        <!-- ===================== FIN CONTENU ============================ -->

                    </div><!-- ../cadrecarte1 -->
                </div><!-- ../col-lg-12 -->
                <!-- ===================== FIN CONTENU ============================ -->

                <!-- =========================== ANNONCES DROITES ============================ -->
                @include('layouts.4emeniveau.saintemilion.droite')
                <!-- ========================== FIN ANNONCES DROITES ==========================-->

            </div><!-- ../cadreblanc3emeniveau2 -->
        </div><!-- ../contenu -->
        <!--  ============================= ../CONTENU ====================================-->

        <!-- ==================================== MODAL GRANDE CARTE ===================================-->
        <div id="modal">
            <div class="modal-content-3emeniveau">
                <div class="row">
                    <div class="col-md-12" id="modalentete"><!-- col-md-12 -->
                        <div class="col-md-5 margehaute10px">
                            <h3 class="rougemoulislistrac gras">Vins de Saint-Émilion</h3>
                        </div>
                        <div class="col-md-5 margehaute15px">
                            Agrandissez la carte avec les boutons + et -,
                            puis naviguez dans celle-ci en cliquant/déplacant votre souris.
                        </div>
                        <div class="col-md-offset-1 col-md-1 margehaute10px">
                            <div class="col-md-offset-8 col-md-1">
                                <a class="modal-close" href="#" title="Fermer la fenêtre">
                                    <i class="fa fa-times-circle fa-2x" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div><!-- ../col-md-12 -->
                    <div class="col-md-12"><!-- col-md-12 -->

                        <div class="col-md-2 plus20px enplus"><!-- col-md-2 -->
                            <h5 class="rougemoulislistrac gras">PREMIERS GRANDS CRUS CLASSÉS</h5>
                            <p>
                                Ch. Angélus<br/>
                                Ch. Ausone<br/>
                                Ch. Cheval Blanc<br/>
                                Ch. Pavie<br/>
                                Ch. Beauséjour<br/>
                                Ch. Beau-Séjour-Bécot<br/>
                                Ch. Belair<br/>
                                Ch. Bellisle-Mondotte<br/>
                                Ch. Canon<br/>
                                Ch. Canon la Gaffelière<br/>
                                Clos Fourtet<br/>
                                Ch. Figeac<br/>
                                Ch. La Gaffelière<br/>
                                Ch. Larcis-Ducasse<br/>
                                Ch. Pavie-Macquin<br/>
                                Ch. Troplong-Mondot<br/>
                                Château Trotte Vieille<br/>
                                Ch. Valandraud
                            </p>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-2 plus20px enplus"><!-- col-md-2 -->
                            <h5 class="rougemoulislistrac gras">GRANDS CRUS CLASSÉS</h5>
                            <p style="font-size: 9.5px">
                                Ch. l’Arrosée<br/>
                                Ch. Balestard la Tonnelle<br/>
                                Ch. Barde-Haut<br/>
                                Ch. Bellefont-Belcier<br/>
                                Ch. Bellevue<br/>
                                Ch. Berliquet<br/>
                                Ch. Cadet-Bon<br/>
                                Ch. Cap de Mourlin<br/>
                                Ch. le Châtelet<br/>
                                Ch. Chauvin<br/>
                                Clos de l’Oratoire<br/>
                                Ch. Clos de Sarpe<br/>
                                Clos des Jacobins<br/>
                                Clos la Madeleine<br/>
                                Clos Saint-Martin<br/>
                                Ch. la Clotte<br/>
                                Ch. la Commanderie<br/>
                                Ch. Corbin<br/>
                                Ch. Côte de Baleau<br/>
                                Ch. la Couspaude<br/>
                                Couvent des Jacobins<br/>
                                Ch. Dassault<br/>
                                Ch. Destieux<br/>
                                Ch. la Dominique<br/>
                                Ch. Faugères<br/>
                                Ch. Faurie de Souchard<br/>
                                Ch. de Ferrand<br/>
                                Ch. Fleur Cardinale<br/>
                                Ch. la Fleur Morange<br/>
                                Ch. Fombrauge<br/>
                                Ch. Fonplégade<br/>
                                Ch. Fonroque<br/>
                                Ch. Franc Mayne<br/>
                                Ch. Grand Corbin<br/>
                                Ch. Grand Corbin-Despagne<br/>
                                Ch. les Grandes Murailles<br/>
                                Ch. Grand-Mayne<br/>
                                Ch. Grand-Pontet<br/>
                                Ch. Guadet<br/>
                                Ch. Haut-Sarpe<br/>
                                Ch. Jean Faure<br/>
                                Ch. Laniotte<br/>
                                Ch. Larmande<br/>
                                Ch. Laroque<br/>
                                Ch. Laroze<br/>
                                Ch. la Marzelle<br/>
                                Ch. Monbousquet<br/>
                                Ch. Moulin du Cadet<br/>
                                Ch. Pavie Decesse<br/>
                                Ch. Peby Faugères<br/>
                                Ch. Petit Faurie de Soutard<br/>
                                Ch. de Pressac<br/>
                                Ch. le Prieuré<br/>
                                Ch. Quinault l’Enclos<br/>
                                Ch. Ripeau<br/>
                                Ch. Rochebelle<br/>
                                Ch. Sansonnet<br/>
                                Ch. la Serre<br/>
                                Ch. Soutard<br/>
                                Ch. St-Georges Côte Pavie<br/>
                                Ch. Terte Daugay<br/>
                                Ch. la Tour Figeac<br/>
                                Ch. Villemaurine<br/>
                                Ch. Yon-Figeac
                            </p>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-6">
                            <div id="mapsaintemilion"></div>
                        </div>
                    </div><!-- ../col-md-12 -->
                </div>
            </div>
        </div>
        <!-- ================================== ../MODAL GRANDE CARTE  ===================================-->

        @include('layouts.cartegoogle.googlemap')

                <!--=============================  LES RÉSEAUX SOCIAUX PETITES FENÊTRES ===========================-->
        <div class="col-md-12" id="presenceicons"><!-- col-md-12 -->
            <ul class="petits-sociaux-icons"><!-- social-icons -->
                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-youtube-square"></i></a></li>
            </ul><!-- ../social-icons -->
        </div><!-- ../col-md-12 -->
        <!--=============================  LES RÉSEAUX SOCIAUX PETITES FENÊTRES ===========================-->

    </div><!-- ../row -->
</div><!-- ../container -->
<!-- ================================================ FIN DIV PAGE =========================================-->
</div><!-- ../page -->
<!-- ========================================== APPELS JAVASCRIPTS ====================================-->
<!-- L' appel javascripts de la carte principale -->
<script src="{{ asset('js/jquery.vmap.js') }}" type="text/javascript"></script>
<!-- js Boostrap -->
<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
<!-- js site -->
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
<!-- ======================================= FIN APPELS JAVASCRIPTS ==================================-->


</body>

</html>
@include('layouts.4emeniveau.saintemilion.appelsjssaintemilion')

@include('layouts.4emeniveau.footer')
