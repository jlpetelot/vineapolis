@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.rhonemeridional.gauche')
                <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Côtes du Rhône Méridional</h3>
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
                            <img src="{{ asset('img/cotesdurhonemeri.jpg') }}" alt="Saumur">
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

                                                <!-- 1ER ONGLET AVEC DROPDOWN -->
                                                <li role="presentation" class="dropdown active">
                                                    <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">
                                                        Côtes-du-Rhône<span class="caret"></span>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                                        <!-- 1ER ONGLET -->
                                                        <li role="presentation">
                                                            <a href="#onglet1" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                                Côtes-du-Rhône
                                                            </a>
                                                        </li>
                                                        <!-- ../Tavel ONGLET -->

                                                        <!-- 2ÈME ONGLET -->
                                                        <li role="presentation">
                                                            <a href="#onglet2" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                                Côtes-du-Rhône Villages
                                                            </a>
                                                        </li>
                                                        <!-- 2ÈME ONGLET -->
                                                    </ul>
                                                </li>
                                                <!-- ../1ER ONGLET AVEC DROPDOWN -->

                                                <!-- 2ÈME ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet3" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Châteauneuf-du-Pape
                                                    </a>
                                                </li>
                                                <!-- ../2ÈME ONGLET -->

                                                <!-- 3ÈME ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet4" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Luberon
                                                    </a>
                                                </li>
                                                <!-- ../3ÈME ONGLET -->

                                                <!-- 2ÈME ONGLET AVEC DROPDOWN -->
                                                <li role="presentation" class="dropdown">
                                                    <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">
                                                        Drôme<span class="caret"></span>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                                        <!-- 1ER ONGLET -->
                                                        <li role="presentation">
                                                            <a href="#onglet5" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                                Vinsobres
                                                            </a>
                                                        </li>
                                                        <!-- ../Tavel ONGLET -->

                                                        <!-- 2ÈME ONGLET -->
                                                        <li role="presentation">
                                                            <a href="#onglet6" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                                Grignan-les-Adhémar
                                                            </a>
                                                        </li>
                                                        <!-- ../2ÈME ONGLET -->
                                                    </ul>
                                                </li>
                                                <!-- ../2ÈME ONGLET AVEC DROPDOWN -->

                                                <!-- 4ÈME ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet7" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Clairette-de-Belgarde
                                                    </a>
                                                </li>
                                                <!-- ../4ÈME ONGLET -->

                                                <!-- 3ÈME ONGLET AVEC DROPDOWN -->
                                                <li role="presentation" class="dropdown">
                                                    <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">
                                                        Gard<span class="caret"></span>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                                        <!-- 1ER ONGLET -->
                                                        <li role="presentation">
                                                            <a href="#onglet8" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                                Costières-de-Nîmes
                                                            </a>
                                                        </li>
                                                        <!-- FIN 1ER ONGLET -->

                                                        <!-- 2ÈME ONGLET -->
                                                        <li role="presentation">
                                                            <a href="#onglet9" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                                Côtes-du-Vivarais
                                                            </a>
                                                        </li>
                                                        <!-- ../2ÈME ONGLET -->

                                                        <!-- 3ÈME ONGLET -->
                                                        <li role="presentation">
                                                            <a href="#onglet10" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                                Lirac
                                                            </a>
                                                        </li>
                                                        <!-- ../3ÈME ONGLET -->

                                                        <!-- 4ÈME ONGLET -->
                                                        <li role="presentation">
                                                            <a href="#onglet11" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                                Tavel
                                                            </a>
                                                        </li>
                                                        <!-- ../4ÈME ONGLET -->
                                                    </ul>
                                                </li>
                                                <!-- ../3ÈME ONGLET AVEC DROPDOWN -->

                                                <!-- 4ÈME ONGLET AVEC DROPDOWN -->
                                                <li role="presentation" class="dropdown">
                                                    <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">
                                                        Vaucluse<span class="caret"></span>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                                        <!-- 1ER ONGLET -->
                                                        <li role="presentation">
                                                            <a href="#onglet12" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                                Beaumes-de-Venise
                                                            </a>
                                                        </li>
                                                        <!-- FIN 1ER ONGLET -->

                                                        <!-- 2ÈME ONGLET -->
                                                        <li role="presentation">
                                                            <a href="#onglet13" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                                Gigondas
                                                            </a>
                                                        </li>
                                                        <!-- ../2ÈME ONGLET -->

                                                        <!-- 3ÈME ONGLET -->
                                                        <li role="presentation">
                                                            <a href="#onglet14" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                                Muscat des Beaumes-de-Venise
                                                            </a>
                                                        </li>
                                                        <!-- ../3ÈME ONGLET -->

                                                        <!-- 4ÈME ONGLET -->
                                                        <li role="presentation">
                                                            <a href="#onglet15" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                                Rasteau
                                                            </a>
                                                        </li>
                                                        <!-- ../4ÈME ONGLET -->

                                                        <!-- 5ÈME ONGLET -->
                                                        <li role="presentation">
                                                            <a href="#onglet16" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                                Vacqueyras
                                                            </a>
                                                        </li>
                                                        <!-- ../5ÈME ONGLET -->

                                                        <!-- 6ÈME ONGLET -->
                                                        <li role="presentation">
                                                            <a href="#onglet17" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                                Ventoux
                                                            </a>
                                                        </li>
                                                        <!-- ../6ÈME ONGLET -->
                                                    </ul>
                                                </li>
                                                <!-- ../4ÈME ONGLET AVEC DROPDOWN -->

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
                                                                                <h5>Côtes-du-Rhône</h5>
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
                                                                                <h6 class="sancerre">Présentation</h6>
                                                                                <p>
                                                                                    Le Côtes-du-Rhône est un vin rouge, rosé ou blanc, produit sur les rives du Rhône entre Vienne et Avignon.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : souple et charpentée<br/>
                                                                                    Robe : rouge sombre<br/>
                                                                                    Arômes : fruits rouges, cuir, épices<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Bouche : ronde et profonde<br/>
                                                                                    Robe : rose pâle<br/>
                                                                                    Arômes : fruits rouges, violette, bonbon anglais<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : fraiche et gourmande<br/>
                                                                                    Robe : jaune pâle, reflets verts<br/>
                                                                                    Arômes : fruits à chair blanche, vanille
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Temps de garde : 1 à 3 ans<br/>
                                                                                    Accords mets/vins : viandes grillées<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Température de service : 12 °C<br/>
                                                                                    Accords mets/vins : apéritif, charcuterie<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Température de service : 11 °C<br/>
                                                                                    Accords mets/vins : poissons grillés
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Côtes-du-Rhône<br/>
                                                                                    &middot; Appellation principale : Côtes-du-Rhône<br/>
                                                                                    &middot; Vignoble : Vallée du Rhône<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Production : 3.5 million d’hectolitres<br/>
                                                                                    &middot; Superficie plantée : 73 000 ha.<br/>
                                                                                    &middot; Vins produits : rouges, rosés et blancs<br/>
                                                                                    &middot; Cépages dominants : grenache, syrah, mourvèdre, clairette, marsanne, roussanne, bourboulenc et viognier<br/>
                                                                                    &middot; Superficie en production : 640 ha. environ<br/>
                                                                                    &middot; Rendement moyen : 51 à 60 hl/ha.
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
                                                <!-- ===================== FIN TEXTE 1 ============================-->

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
                                                                                <h5>Côtes-du-Rhône Villages</h5>
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
                                                                                <h6 class="sancerre">Présentation</h6>
                                                                                <p>
                                                                                    Le Côtes-du-Rhône Villages est un vin rouge, rosé ou blanc produit dans le Vignoble de la vallée du Rhône, sur les quatre département : Ardèche, Drôme, Gard, Vaucluse.
                                                                                </p>
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Temps de garde : 10 ans<br/>
                                                                                    Accords mets/vins : daube, civet de cerf<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Température de service : 8 °C<br/>
                                                                                    Accords mets/vins : poissons, fruits de mer
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Côtes-du-Rhône Villages<br/>
                                                                                    &middot; Appellation principale : Côtes-du-Rhône Villages<br/>
                                                                                    &middot; Vignoble : Vallée du Rhône<br/>
                                                                                    &middot; Climat : tempéré méditerranéen sous influence du mistral<br/>
                                                                                    &middot; Production : 282 618 hl.<br/>
                                                                                    &middot; Superficie plantée : 7 698 ha.<br/>
                                                                                    &middot; Vins produits : rouges, rosés et blancs<br/>
                                                                                    &middot; Cépages dominants : clairette, bourboulenc, roussanne, grenache, carignan, cinsault, mourvèdre, syrah, camarèse<br/>
                                                                                    &middot; Rendement moyen : 44 à 50 hl/ha.
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
                                                <!-- ===================== FIN TEXTE 2 ============================-->

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
                                                                                <h5>Châteauneuf-du-Pape</h5>
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
                                                                                <h6 class="sancerre">Présentation</h6>
                                                                                <p>
                                                                                    Le Châteauneuf-du-Pape est un vin rouge ou blanc produit dans le Vignoble de la Vallée du Rhône sur les communes de Châteauneuf-du-Pape, d’Orange, de Bédarrides, de Sorgues et de Courthézon situées dans le département du Vaucluse. Le Châteauneuf-du-Pape rouge est mondialement connu.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : charnue<br/>
                                                                                    Robe : rubis profonde<br/>
                                                                                    Arômes : fruits rouges et noirs, épices, chocolat, musc<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : ronde et chaleureuse<br/>
                                                                                    Robe : or pâle reflets verts<br/>
                                                                                    Arômes : acacia, agrumes, fruits à chair blanche, miel
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Temps de garde : 20 ans<br/>
                                                                                    Accords mets/vins : gibiers<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Température de service : 12 °C<br/>
                                                                                    Accords mets/vins : apéritif, charcuterie<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Température de service : 13°C<br/>
                                                                                    Temps de garde : 15 ans<br/>
                                                                                    Accords mets/vins : poissons exotiques
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Châteauneuf-du-Pape<br/>
                                                                                    &middot; Appellation principale : Châteauneuf-du-Pape<br/>
                                                                                    &middot; Vignoble : Vallée du Rhône<br/>
                                                                                    &middot; Climat : tempéré méditerranéen sous influence du mistral<br/>
                                                                                    &middot; Production : 110 000 hl.<br/>
                                                                                    &middot; Superficie plantée : 3 200 ha.<br/>
                                                                                    &middot; Vins produits : rouges (97 %) et blancs (3 %)<br/>
                                                                                    &middot; Cépages dominants : Grenache, cinsault, syrah, clairette, piquepoul, roussanne, mourvèdre, picardan, bourboulenc, muscardin<br/>
                                                                                    &middot; Superficie en production : 640 ha. environ<br/>
                                                                                    &middot; Rendement moyen : 35 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 3 ============================-->

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
                                                                                <h5>Luberon</h5>
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
                                                                                <h6 class="sancerre">Présentation</h6>
                                                                                <p>
                                                                                    Le Luberon est un vin rouge, rosé ou blanc, produit dans le Vignoble de la Vallée du Rhône. Il était autrefois appelé « Côtes-du-Luberon. »
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : souple et soyeuse<br/>
                                                                                    Robe : grenat profond<br/>
                                                                                    Arômes : fruits rouges et noir, prunes, écorce d’orange<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Bouche : ample et grasse<br/>
                                                                                    Robe : rose clair<br/>
                                                                                    Arômes : fruits rouges, épices, agrumes, pêche<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : fine, dense et ronde<br/>
                                                                                    Robe : jaune paille<br/>
                                                                                    Arômes : fleurs blanches, agrumes
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Temps de garde : 5 ans<br/>
                                                                                    Accords mets/vins : agneau<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Température de service : 10 °C<br/>
                                                                                    Accords mets/vins : apéritif<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Température de service : 10 °C<br/>
                                                                                    Temps de garde : 3 ans<br/>
                                                                                    Accords mets/vins : poissons à la poêle
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Luberon<br/>
                                                                                    &middot; Appellation principale : Luberon<br/>
                                                                                    &middot; Vignoble : Vallée du Rhône<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Production : 150 000 hl.<br/>
                                                                                    &middot; Vins produits : rouges (29 %), rosés (47 %) et blancs (24 %)<br/>
                                                                                    &middot; Cépages dominants : grenache, syrah, mourvèdre, cinsault, carignan, bourboulenc<br/>
                                                                                    &middot; Rendement moyen : 55 hl/ha. en rouges et rosé, 60 hl/ha en blancs
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
                                                <!-- ===================== FIN TEXTE 4 ============================-->

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
                                                                                <h5>Vinsobres</h5>
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
                                                                                <h6 class="sancerre">Présentation</h6>
                                                                                <p>
                                                                                    Le Vinsobres est un vin rouge produit dans le Vignoble de la Vallée du Rhône sur la commune de Vinsobres dans la Drôme.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Bouche : franche et généreuse<br/>
                                                                                    Robe : rouge profond<br/>
                                                                                    Arômes : fruits rouges et noirs, épices, violette
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Température de service : 16 °C<br/>
                                                                                    Temps de garde : plus de 5 ans<br/>
                                                                                    Accords mets/vins : Gibiers, viandes rouges grillées
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Vinsobres<br/>
                                                                                    &middot; Appellation principale : Vinsobres<br/>
                                                                                    &middot; Vignoble : Vallée du Rhône<br/>
                                                                                    &middot; Climat : tempéré méditerranéen avec influence du mistral et de la montagne<br/>
                                                                                    &middot; Production : 1 385 hl.<br/>
                                                                                    &middot; Superficie totale : 995 ha.<br/>
                                                                                    &middot; Vins produits : rouges<br/>
                                                                                    &middot; Cépages dominants : syrah, grenache<br/>
                                                                                    &middot; Rendement moyen : 38 à 42 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 5 ============================-->

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
                                                                                <h5>Grignan-les-Adhémar</h5>
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
                                                                                <h6 class="sancerre">Présentation</h6>
                                                                                <p>
                                                                                    Le Grignan-les-Adhémar est un vin rouge, rosé ou blanc, produit dans le Vignoble de la vallée du Rhône, au sud de Montélimar dans la Drôme.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : dense et généreuse<br/>
                                                                                    Robe : rubis soutenue<br/>
                                                                                    Arômes : fruits rouges et noirs, agrumes, violette, pivoine<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Bouche : ample et douce<br/>
                                                                                    Robe : saumon clair<br/>
                                                                                    Arômes : fruits rouges, fruits à chair blanche, rose<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : grasse<br/>
                                                                                    Robe : jaune paille<br/>
                                                                                    Arômes : fruits à chair blanche, agrumes, fruits exotiques
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Temps de garde : 5 ans<br/>
                                                                                    Accords mets/vins : canard à l’orange<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Température de service : 8 °C<br/>
                                                                                    Accords mets/vins : barbecue<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Température de service : 10 °C<br/>
                                                                                    Accords mets/vins : poissons en saucee
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Grignan-les-Adhémar<br/>
                                                                                    &middot; Appellation principale : Grignan-les-Adhémar<br/>
                                                                                    &middot; Vignoble : Vallée du Rhône<br/>
                                                                                    &middot; Climat : tempéré méditerranéen sous influence du Mistral<br/>
                                                                                    &middot; Production : 60 000 hl..<br/>
                                                                                    &middot; Vins produits : rouges (72 %), rosés (18 %) et blancs (10 %)<br/>
                                                                                    &middot; Cépages dominants : grenache, syrah, marselan, carignan, cinsault, mourvèdre, marsanne, roussanne, clairette, bourboulenc, viognier
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
                                                <!-- ===================== FIN TEXTE 6 ============================-->

                                                <!-- ======================= TEXTE 7 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet7" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Clairette-de-Belgarde</h5>
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
                                                                                <h6 class="jaunefonce">Présentation</h6>
                                                                                <p>
                                                                                    Le Clairette-de-Belgarde est un vin blanc produit sur le Vignoble de la Vallée du Rhône et plus précisément dans la partie méridionale de ce vignoble.
                                                                                </p>
                                                                                <h6 class="jaunefonce">caractère :</h6>
                                                                                <p> Bouche : dense et ronde<br/>
                                                                                    Robe : jaune pâle, reflets verts<br/>
                                                                                    Arômes : fruits à chair blanche, ananas
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="jaunefonce">garde, température et gastronomie</h6>
                                                                                <p> Température de service : 10 °C<br/>
                                                                                    Temps de garde : 2 ans<br/>
                                                                                    Accords mets/vins : poissons grillés
                                                                                </p>
                                                                                <h6 class="jaunefonce">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Clairette-de-Belgarde<br/>
                                                                                    &middot; Appellation principale : Clairette-de-Belgarde<br/>
                                                                                    &middot; Vignoble : Vallée du Rhône<br/>
                                                                                    &middot; Climat : tempéré méditerranéen avec influence du mistral<br/>
                                                                                    &middot; Production : .5 millions d’hectolitres (soit 465 millions de bouteilles)<br/>
                                                                                    &middot; Superficie totale : 40 ha.<br/>
                                                                                    &middot; Vins produits : blancs<br/>
                                                                                    &middot; Cépages dominants : clairette<br/>
                                                                                    &middot; Rendement moyen : 60 à 68 hl./ha..
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
                                                <!-- ===================== FIN TEXTE 7 ============================-->

                                                <!-- ======================= TEXTE 8 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet8" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Costières-de-Nîmes</h5>
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
                                                                                <h6 class="sancerre">Présentation</h6>
                                                                                <p>
                                                                                    Le Costières-de-Nîmes est un vin rouge, rosé ou blanc, produit dans le Vignoble de la Vallée du Rhône, au nord ouest de la Camargue. Avant de devenir « Costières-de-Nîmes, » l’appellation se nommait « Costières-du-gard. »
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : ronde et généreuse<br/>
                                                                                    Robe : rubis, reflets violets<br/>
                                                                                    Arômes : fruits rouges et noirs, fruits à noyau, épices, poivre, violette<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Bouche : ronde et rafraichissante<br/>
                                                                                    Robe : rose tendre<br/>
                                                                                    Arômes : cerise, framboise<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : ronde et aromatique<br/>
                                                                                    Robe : jaune pâle<br/>
                                                                                    Arômes : fleurs blanches, agrume
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Temps de garde : 5 ans<br/>
                                                                                    Accords mets/vins : viande grillée<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Température de service : 11 °C<br/>
                                                                                    Temps de garde : 2 ans<br/>
                                                                                    Accords mets/vins : apéritif, charcuterie<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Température de service : 8 °C<br/>
                                                                                    Accords mets/vins : poissons, fruits de mer
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Costières-de-Nîmes<br/>
                                                                                    &middot; Appellation principale : Costières-de-Nîmes<br/>
                                                                                    &middot; Vignoble : Vallée du Rhône<br/>
                                                                                    &middot; Climat : tempéré méditerranéen avec influence montagnarde<br/>
                                                                                    &middot; Production : 220 000 hl.<br/>
                                                                                    &middot; Superficie plantée : 3 945 ha.<br/>
                                                                                    &middot; Vins produits : rouges (50 %), rosés (40 %) et blancs (10 %)<br/>
                                                                                    &middot; Cépages dominants : grenache, mourvèdre, syrah, marsanne, roussanne<br/>
                                                                                    &middot; Rendement moyen : 60 hl//ha.
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
                                                <!-- ===================== FIN TEXTE 8 ============================-->

                                                <!-- ======================= TEXTE 9 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet9" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Côtes-du-Vivarais</h5>
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
                                                                                <h6 class="sancerre">Présentation</h6>
                                                                                <p>
                                                                                    Le Côtes-du-Vivarais est un vin rouge, rosé ou blanc, produit dans le Vignoble de la Vallée du Rhône, dans les départements de l’Ardèche et du Gard.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : dense et profonde<br/>
                                                                                    Robe : rouge profond<br/>
                                                                                    Arômes : fruits noirs, épices<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Bouche : ample et vivace<br/>
                                                                                    Robe : rose soutenu<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : ronde et minerale<br/>
                                                                                    Robe : jaune pâle<br/>
                                                                                    Arômes : fleurs blanches, fruits secs, litchi
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Temps de garde : 3 ans<br/>
                                                                                    Accords mets/vins : daube provencale<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Température de service : 10 °C<br/>
                                                                                    Accords mets/vins : grillades, charcuterie<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Température de service : 8 °C<br/>
                                                                                    Temps de garde : 5 ans<br/>
                                                                                    Accords mets/vins : crustacés
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Côtes-du-Vivarais<br/>
                                                                                    &middot; Appellation principale : Côtes-du-Vivarais<br/>
                                                                                    &middot; Vignoble : Vallée du Rhône<br/>
                                                                                    &middot; Climat : tempéré méditerranéen à tendance continentale<br/>
                                                                                    &middot; Production : 15 000 hl.<br/>
                                                                                    &middot; Superficie plantée : 550 ha.<br/>
                                                                                    &middot; Vins produits : rouges (50 %), rosés (44 %) et blancs (5 %)<br/>
                                                                                    &middot; Cépages dominants : grenache, clairette, syrah, marsanne
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
                                                <!-- ===================== FIN TEXTE 9 ============================-->

                                                <!-- ======================= TEXTE 10 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet10" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Lirac</h5>
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
                                                                                <h6 class="sancerre">Présentation</h6>
                                                                                <p>
                                                                                    Le Lirac est un vin rouge, rosé ou blanc, produit dans le Vignoble de la Vallée du Rhône, sur les communes de Lirac, Roquemaure, Saint-Geniès-de-Comolas et Saint-Laurent-des-Arbres, dans le Gard.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : puissante et profonde<br/>
                                                                                    Robe : rouge grenat sombre<br/>
                                                                                    Arômes : fruits rouges et noir, cuir, sous-bois<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Bouche : ample et grasse<br/>
                                                                                    Robe : rose profond<br/>
                                                                                    Arômes : fruits rouges et fruits des bois<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : équilibtée<br/>
                                                                                    Robe : jaune, reflets verts<br/>
                                                                                    Arômes : florales
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Temps de garde : 2 ou 3 ans<br/>
                                                                                    Accords mets/vins : daube<br/>

                                                                                    Les rosés :<br/>
                                                                                    Températude de service : 11 °C<br/>
                                                                                    Accords mets/vins : charcuteries<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Température de service : 10 °C<br/>
                                                                                    Temps de garde : 5 ans<br/>
                                                                                    Accords mets/vins : poissons en sauce
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Lirac<br/>
                                                                                    &middot; Appellation principale : Lirac<br/>
                                                                                    &middot; Vignoble : Vallée du Rhône<br/>
                                                                                    &middot; Climat : tempéré méditerranéen sous influence du Mistral<br/>
                                                                                    &middot; Production : 20 000 hl.<br/>
                                                                                    &middot; Superficie plantée : 715 ha.<br/>
                                                                                    &middot; Vins produits : rouges (80 %), rosés (15 %) et blancs (5 %)<br/>
                                                                                    &middot; Cépages dominants : grenache, syrah, mourvèdre, cinsault, carignan, bourboulenc<br/>
                                                                                    &middot; Rendement moyen : 41 à 43 hl/ha.
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
                                                <!-- ===================== FIN TEXTE 10 ============================-->

                                                <!-- ======================= TEXTE 11 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet11" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Tavel</h5>
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
                                                                                <h6 class="rosejura">Présentation</h6>
                                                                                <p>
                                                                                    Le Tavel est un vin rosé produit dans le Vignoble de la Vallée du Rhône sur les communes de Tavel et de Roquement situées dans le département du Gard. Il est considéré comme le plus grand des rosés de France.
                                                                                </p>
                                                                                <h6 class="rosejura">caractère :</h6>
                                                                                <p> Bouche : gourmande et texturée<br/>
                                                                                    Robe : rose framboise<br/>
                                                                                    Arômes : fruits à noyau, réglisse, fruits rouges, amande
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rosejura">garde, température et gastronomie</h6>
                                                                                <p> Température de service : 10 °C<br/>
                                                                                    Temps de garde : maximum 3 ans<br/>
                                                                                    Accords mets/vins : grillades
                                                                                </p>
                                                                                <h6 class="rosejura">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Tavel<br/>
                                                                                    &middot; Appellation principale : Tavel<br/>
                                                                                    &middot; Vignoble : Vallée du Rhône<br/>
                                                                                    &middot; Climat : tempéré méditerranéen sous influence du Mistral<br/>
                                                                                    &middot; Production : 43 370 hl.<br/>
                                                                                    &middot; Superficie plantée : 933 ha.<br/>
                                                                                    &middot; Vin produit : rosé<br/>
                                                                                    &middot; Cépages dominants : Grenache, cinsault, syrah, clairette, piquepoul, calitor, mourvèdre, carignan, bourboulenc<br/>
                                                                                    &middot; Rendement moyen : 46 à 50 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 11 ============================-->

                                                <!-- ======================= TEXTE 12 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet12" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Beaumes-de-Venise</h5>
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
                                                                                <h6 class="rouge">Présentation</h6>
                                                                                <p>
                                                                                    Le Beaumes-de-Venise est un vin rouge produit produit sur le Vignoble de la Vallée du Rhône et plus précisément dans le Vaucluse, sur les communes de Beaumes-de-Venise, Lafare, La Roque-Alric et Suzette.
                                                                                </p>
                                                                                <h6 class="rouge">caractère :</h6>
                                                                                <p> Bouche : dense et puissante<br/>
                                                                                    Robe : rouge rubis, reflets violets<br/>
                                                                                    Arômes : fruits rouges et noirs, épices, poivre, girofle
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rouge">garde, température et gastronomie</h6>
                                                                                <p> Température de service : 16°C<br/>
                                                                                    Temps de garde : 8 ans<br/>
                                                                                    Accords mets/vins : Gibiers, viande rouge

                                                                                </p>
                                                                                <h6 class="rouge">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Beaumes-de-Venise<br/>
                                                                                    &middot; Appellation principale : Beaumes-de-Venise<br/>
                                                                                    &middot; Vignoble : Vallée du Rhône<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Production : 17 948 hl.<br/>
                                                                                    &middot; Superficie plantée : 541 ha.<br/>
                                                                                    &middot; Hectolitres de vin produits : 3.5 millions d’hectolitres (soit 465 millions de bouteilles)<br/>
                                                                                    &middot; Vin produit : rouge<br/>
                                                                                    &middot; Cépages dominants : syrah, grenache<br/>
                                                                                    &middot; Rendement moyen : 38 à 42 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 12 ============================-->

                                                <!-- ======================= TEXTE 13 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet13" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Gigondas</h5>
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
                                                                                <h6 class="rouge">Présentation</h6>
                                                                                <p>
                                                                                    Le Gigondas est un vin rouge ou rosé produit dans le Vignoble de la Vallée du Rhône sur la commune de Gigondas dans le Vaucluse.
                                                                                </p>
                                                                                <h6 class="rouge">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : ferme<br/>
                                                                                    Robe : grenat profond<br/>
                                                                                    Arômes : fruits rouges et noirs, épices, moka, cacao<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Bouche : fraiche et profonde<br/>
                                                                                    Robe : rose soutenu<br/>
                                                                                    Arômes : fruits rouges murs, noisette, amande
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rouge">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Temps de garde : 15 ans<br/>
                                                                                    Accords mets/vins : gibiers<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Température de service : 11 à 13 °C<br/>
                                                                                    Temps de garde : 2 ans<br/>
                                                                                    Accords mets/vins : viandes rouges, grillades, charcuteries
                                                                                </p>
                                                                                <h6 class="rouge">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Gigondas<br/>
                                                                                    &middot; Appellation principale : Gigondas<br/>
                                                                                    &middot; Vignoble : Vallée du Rhône<br/>
                                                                                    &middot; Climat : tempéré méditerranéen sous influence du Mistral<br/>
                                                                                    &middot; Production : 40 000 hl.<br/>
                                                                                    &middot; Superficie plantée : 1 233 ha.<br/>
                                                                                    &middot; Vins produits : rouges (98 %) et rosé (2 %)<br/>
                                                                                    &middot; Cépages dominants : syrah, marsanne, roussanne<br/>
                                                                                    &middot; Rendement moyen : 36 à 40 hl./ha.
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
                                                <!-- ===================== FIN TEXTE 13 ============================-->

                                                <!-- ======================= TEXTE 14 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet14" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Muscat des Beaumes-de-Venise</h5>
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
                                                                                <h6 class="sancerre">Présentation</h6>
                                                                                <p>
                                                                                    Le Muscat des Beaumes-de-Venise est un vin doux naturel qui peut-être produit en rouge, rosé ou blanc, produit sur les communes de Beaumes-les-Venise et d’Aubignan dans le Vaucluse.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : onctueuse et aromatique<br/>
                                                                                    Robe : framboise<br/>
                                                                                    Arômes : fruits cuits et fruits à l’eau de vie<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Bouche : vive et équilibrée<br/>
                                                                                    Robe : saumon pâle<br/>
                                                                                    Arômes : fruits à chair blanche, agrumes<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : fraîche et gourmande<br/>
                                                                                    Robe : or, reflets dorés<br/>
                                                                                    Arômes : fruits exotiques et à chair blanche, fruits confits
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Température de service : 8 °C<br/>
                                                                                    Temps de garde : doit être bu jeune<br/>
                                                                                    Accords mets/vins : apéritif, desserts au chocolat<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Température de service : 8 °C<br/>
                                                                                    Accords mets/vins : apéritif<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Température de service : 6 °C<br/>
                                                                                    Temps de garde : doit être bu jeune<br/>
                                                                                    Accords mets/vins : plats exotiquese
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Muscat des Beaumes-de-Venise<br/>
                                                                                    &middot; Appellation principale : Muscat des Beaumes-de-Venise<br/>
                                                                                    &middot; Vignoble : Vallée du Rhône<br/>
                                                                                    &middot; Climat : tempéré méditerranéen<br/>
                                                                                    &middot; Production : 12 741 hl.<br/>
                                                                                    &middot; Superficie plantée : 503 ha.<br/>
                                                                                    &middot; Vins produits : rouges, rosés et blancs (2 %)<br/>
                                                                                    &middot; Cépages dominants : muscat blanc à petits grains, muscat rouge à petits grains<br/>
                                                                                    &middot; Rendement moyen : 30 à 40 hl/ha.
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
                                                <!-- ===================== FIN TEXTE 14 ============================-->

                                                <!-- ======================= TEXTE 15 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet15" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Rasteau</h5>
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
                                                                                <h6 class="sancerre">Présentation</h6>
                                                                                <p>
                                                                                    Le Rasteau est un vin rouge, ou vin doux naturel produit dans le Vignoble de la vallée du Rhône, plus précisément sur les communes de Cairanne, Rasteau et Sablet dans le Vaucluse. Attention, seule la commune de Rasteau a le droit de le produire en rouge.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : dense et généreuse<br/>
                                                                                    Robe : grenat<br/>
                                                                                    Arômes : fruits rouges et noirs, cacao, moka<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : équilibrée et moelleuse<br/>
                                                                                    Robe : dorée<br/>
                                                                                    Arômes : fruits secs et confits, épices
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Température de service : 14 à 16 °C<br/>
                                                                                    Temps de garde : 10 à 20 ans<br/>
                                                                                    Accords mets/vins : dessert au chocolat<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Température de service : 11 °C<br/>
                                                                                    Accords mets/vins : apéritif, desserts
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Rasteau<br/>
                                                                                    &middot; Appellation principale : Rasteau<br/>
                                                                                    &middot; Vignoble : Vallée du Rhône<br/>
                                                                                    &middot; Climat : tempéré méditerranéen sous influence du mistral<br/>
                                                                                    &middot; Vins produits : rouges et vins doux naturels<br/>
                                                                                    &middot; Cépages dominants : grenache, syrah, mourvèdre
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
                                                <!-- ===================== FIN TEXTE 15 ============================-->

                                                <!-- ======================= TEXTE 16 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet16" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Vacqueyras</h5>
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
                                                                                <h6 class="sancerre">Présentation</h6>
                                                                                <p>
                                                                                    Le Vacqueyras est un vin rouge, rosé ou blanc (dans de moindres mesures) produit dans le Vignoble de la Vallée du Rhône sur les commune de Sarrians et de Vacqueyras dans le Vaucluse.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : puissante et généreuse<br/>
                                                                                    Robe : grenat foncé, reflets violets<br/>
                                                                                    Arômes : fruits rouges et noir, épices, violette, poivre<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Bouche : ronde et dense<br/>
                                                                                    Robe : rose framboise<br/>
                                                                                    Arômes : fruits rouges, agrumes<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : dense et ample<br/>
                                                                                    Robe : jaune pâle, reflets verts<br/>
                                                                                    Arômes : fleurs (acacia, genêt)
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Temps de garde : 3 ans<br/>
                                                                                    Accords mets/vins : agneau, viandes rouges grillées<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Température de service : 13 °C<br/>
                                                                                    Accords mets/vins : apéritif<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Température de service : 11 °C<br/>
                                                                                    Temps de garde : quelques années<br/>
                                                                                    Accords mets/vins : poissons d’eau douce, fromage de chèvre
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Vacqueyras<br/>
                                                                                    &middot; Appellation principale : Vacqueyras<br/>
                                                                                    &middot; Vignoble : Vallée du Rhône<br/>
                                                                                    &middot; Climat : tempéré méditerranéen sous influence du mistral<br/>
                                                                                    &middot; Production : 50 000 hl.<br/>
                                                                                    &middot; Superficie plantée : 1 300 ha.<br/>
                                                                                    &middot; Vins produits : rouges (97 %), rosés (1 %) et blancs (2 %)<br/>
                                                                                    &middot; Cépages dominants : grenache, syrah, mourvèdre, cinsault, clairette, roussanne, viognier, bourboulenc<br/>
                                                                                    &middot; Rendement moyen : 30 à 40 hl/ha.
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
                                                <!-- ===================== FIN TEXTE 16 ============================-->

                                                <!-- ======================= TEXTE 17 ============================== -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet17" aria-labelledby="home-tab"><!-- tabpanel -->
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-12"><!-- col-lg-12 -->
                                                            <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                                <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                                    <!-- TEXTE -->
                                                                    <div class="row"><!-- row -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <ul class="commentairesonglets">
                                                                                <h5>Ventoux</h5>
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
                                                                                <h6 class="sancerre">Présentation</h6>
                                                                                <p>
                                                                                    Le Ventoux est un vin rouge, rosé ou blanc, produit dans le Vignoble de la vallée du Rhône, plus précisément autour du Mont Ventoux dans le Vaucluse.
                                                                                </p>
                                                                                <h6 class="sancerre">caractère :</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Bouche : profonde et soyeuse<br/>
                                                                                    Robe : rubis profond<br/>
                                                                                    Arômes : fruits rouges, garrigue, olive, réglisse, sous-bois<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Bouche : ronde et légère<br/>
                                                                                    Robe : rose soutenu<br/>
                                                                                    Arômes : cerise, framboise<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Bouche : grasse<br/>
                                                                                    Robe : jaune pâle<br/>
                                                                                    Arômes : vanille, agrumes, poire, pomme
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="sancerre">garde, température et gastronomie</h6>
                                                                                <p> Les rouges :<br/>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Temps de garde : 3 ans<br/>
                                                                                    Accords mets/vins : viandes grillées<br/><br/>

                                                                                    Les rosés :<br/>
                                                                                    Température de service : 10 °C<br/>
                                                                                    Accords mets/vins : apéritif, poissons<br/><br/>

                                                                                    Les blancs :<br/>
                                                                                    Température de service : 11 °C<br/>
                                                                                    Accords mets/vins : poissons en sauce
                                                                                </p>
                                                                                <h6 class="sancerre">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Ventoux<br/>
                                                                                    &middot; Appellation principale : Ventoux<br/>
                                                                                    &middot; Vignoble : Vallée du Rhône<br/>
                                                                                    &middot; Climat : tempéré méditerranéen sous influence montagnarde<br/>
                                                                                    &middot; Production : 308 890 hl.<br/>
                                                                                    &middot; Superficie plantée : 7 450 ha.<br/>
                                                                                    &middot; Vins produits : rouges (76 %), rosés (20 %) et blancs (4)<br/>
                                                                                    &middot; Cépages dominants : grenache, syrah, carignan, cinsault, mourvèdre, roussanne, bourboulenc
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
                                                <!-- ===================== FIN TEXTE 17 ============================-->

                                            </div><!-- End myTabContent -->
                                        </div><!-- End bs-example -->
                                        <!-- ==================== FIN CONTENU DES ONGLETS ========================-->
                                    </div><!-- Fin détermine les padings -->
                                </div><!-- Fin cadrecarte1 -->
                            </div><!-- Fin col-lg-12 -->
                        </div><!-- End row -->
                        <!-- ===================== FIN CONTENU ============================-->


                    </div><!-- ../cadrecarte1 -->
                </div><!-- ../col-lg-12 -->
                <!-- ===================== FIN CONTENU ============================ -->

                <!-- =========================== ANNONCES DROITES ============================ -->
                @include('layouts.4emeniveau.rhonemeridional.droite')
                        <!-- ========================== FIN ANNONCES DROITES ==========================-->

            </div><!-- ../cadreblanc3emeniveau2 -->
        </div><!-- ../contenu -->
        <!--  ============================= ../CONTENU ====================================-->

        <!-- ==================================== MODAL GRANDE CARTE ===================================-->
        <div id="modal">
            <div class="modal-content-3emeniveau">
                <div class="row">
                    <div class="col-md-12" id="modalentete"><!-- col-md-12 -->
                        <div class="col-md-5">
                            <h3 class="gras mapecran" style="color: #c50051">Côtes du Rhône Méridional</h3>
                        </div>
                        <div class="col-md-5 margehaute15px textemodal">
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
                        <div class="col-md-4">
                            <h5 style="color:#c50051; font-weight:700">RÉGIONS VINICOLES ET QUALITÉ DES VINS</h5>
                        </div>
                    </div><!-- ../col-md-12 -->

                    <div class="col-md-12"><!-- col-md-12 -->

                        <div class="col-md-2"><!-- col-md-2 -->
                            <p>
                                Vinsobres<br/>
                                Beaumes de Venise 2008<br/>
                                Vigne du Pape<br/>
                                Rasteau Vins Doux Naturels<br/>
                                Châteauneuf-du-Pape<br/>
                                Gigondas Atlas<br/>
                                Lirac<br/>
                                Lubéron<br/>
                                Ventoux<br/>
                                Vacqueyras<br/>
                                Tavel<br/>
                                Côtes-du-rhône Rochegude<br/>
                                Côtes-du-rhône Saint-Maurice-sur-Eygues<br/>
                                Côtes-du-rhône Vinsobres<br/>
                                Côtes-du-rhône Cairanne<br/>
                                Côtes-du-rhône Rasteau<br/>
                                Côtes-du-rhône Roaix<br/>
                                Côtes-du-rhône Rousset-les-Vignes<br/>
                                Côtes-du-rhône Saint-Pantaléon-les-Vignes<br/>
                                Côtes-du-rhône Seguret<br/>
                                Côtes-du-rhône Sablet<br/>
                                Côtes-du-rhône Valréas<br/>
                                Côtes-du-rhône Visan<br/>
                                Côtes-du-rhône Laudun<br/>
                                Côtes-du-rhône Saint-Gervais<br/>
                                Côtes-du-rhône Chusclan<br/>
                                Côtes-du-rhône Beaumes-de-Venise<br/>
                                Côtes-du-rhône Villages<br/>
                                Côtes-du-rhône<br/>
                                Vallon-Pont-d'Arc<br/>
                                Vinezac<br/>
                                Saint-Remèze<br/>
                                Saint-Montant<br/>
                                Aven d'Orgnac<br/>
                                Bidon<br/>
                                Grignan-les-Adhémar
                            </p>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-2 plus7px"><!-- col-md-2 -->
                            <div class="carre rougecarrefonce espacescarres"></div>
                            <div class="carre rougecarrefonce espacescarres"></div>
                            <div class="carre orangecarre espacescarres"></div>
                            <div class="carre rougeorange espacescarres"></div>
                            <div class="carre rougecarrefonce espacescarres"></div>
                            <div class="carre rougecarrefonce espacescarres"></div>
                            <div class="carre rougeclair espacescarres"></div>
                            <div class="carre violet espacescarres"></div>
                            <div class="carre violet espacescarres"></div>
                            <div class="carre rougecarrefonce espacescarres"></div>
                            <div class="carre rougecarrefonce espacescarres"></div>
                            <div class="carre corail espacescarres"></div>
                            <div class="carre corail espacescarres"></div>
                            <div class="carre corail espacescarres"></div>
                            <div class="carre corail espacescarres"></div>
                            <div class="carre rougerouge espacescarres"></div>
                            <div class="carre rougerouge espacescarres"></div>
                            <div class="carre rougerouge espacescarres"></div>
                            <div class="carre rougerouge espacescarres"></div>
                            <div class="carre rougerouge espacescarres"></div>
                            <div class="carre rougerouge espacescarres"></div>
                            <div class="carre rougecarrefonce espacescarres"></div>
                            <div class="carre rougecarrefonce espacescarres"></div>
                            <div class="carre rougecarrefonce espacescarres"></div>
                            <div class="carre rougecarrefonce espacescarres"></div>
                            <div class="carre rougecarrefonce espacescarres"></div>
                            <div class="carre rougeorange espacescarres"></div>
                            <div class="carre corailfonce espacescarres"></div>
                            <div class="carre corailclair espacescarres"></div>
                            <div class="carre violet espacescarres"></div>
                            <div class="carre violet espacescarres"></div>
                            <div class="carre violet espacescarres"></div>
                            <div class="carre violet espacescarres"></div>
                            <div class="carre violet espacescarres"></div>
                            <div class="carre violet espacescarres"></div>
                            <div class="carre violet espacescarres"></div>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-8">
                            <div id="cotesdurhonemerimapmodal"></div>
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
@include('layouts.4emeniveau.rhonemeridional.appelsjsrhonemeridional')

@include('layouts.4emeniveau.footer')
