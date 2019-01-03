@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.corse.gauche')
                <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3 class="corse">Les vins de corse</h3>
                        </div>
                        <a href="#modalgoogle">
                            <i class="fa fa-map-marker grand" data-toggle="tooltip"
                               data-placement="left3" title="Tous vins Corse sur Google Map">
                            </i>
                        </a>
                        <div class="clear"></div>
                        <!-- ======================== LA CARTE ============================== -->
                        <!-- carte -->
                        <div id="carte3emeniveau">
                            <img src="{{ asset('img/corse.jpg') }}" alt="Corse">
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

                                                <!-- CONDITIONS DE PRÉSENCE DU 1ER ONGLET - 1ÈRE NAVIGATION -->
                                                <li role="presentation" class="active">
                                                    <a href="#onglet1" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                                                        Vignoble de Corse
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 1ER ONGLET - FIN 1ÈRE NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 2ND ONGLET - 2NDE NAVIGATION -->
                                                <li role="presentation">
                                                    <a href="#onglet2" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Ajaccio
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 2ND ONGLET - FIN 2NDE NAVIGATION -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 3ÈME ONGLET - 3ÈME NAVIGATION SANS DROPDOWN -->
                                                <li role="presentation">
                                                    <a href="#onglet3" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Muscat du Cap Corse
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 3ÈME ONGLET - FIN 3ÈME NAVIGATION SANS DROPDOWN -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 4ÈME ONGLET - 4ÈME NAVIGATION SANS DROPDOWN -->
                                                <li role="presentation">
                                                    <a href="#onglet4" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Patrimonio
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 5ÈME ONGLET - FIN 4ÈME NAVIGATION SANS DROPDOWN -->

                                                <!-- CONDITIONS DE PRÉSENCE DU 5ÈME ONGLET - 4ÈME NAVIGATION SANS DROPDOWN -->
                                                <li role="presentation">
                                                    <a href="#onglet5" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Vin de Corse
                                                    </a>
                                                </li>
                                                <!-- FIN CONDITIONS DE PRÉSENCE DU 5ÈME ONGLET - FIN 4ÈME NAVIGATION SANS DROPDOWN -->

                                            </ul><!-- End nav nav-tabs -->
                                            <div id="myTabContent" class="tab-content"><!-- myTabContent -->

                                                <!-- CONDITIONS 1ER TEXTE -->
                                                <div role="tabpanel" class="tab-pane fade margebasse80px" id="onglet1" aria-labelledby="profile-tab">
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                            <ul class="commentairesonglets">
                                                                <div class="titre">Vignoble de Corse</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 24 février 2022</span>
                                                                </li>
                                                            </ul>
                                                            <p>Le vignoble de Corse s’étend sur tout le littoral de l’île de Beauté (Haute-Corse et Corse du Sud). Les vins qui y sont produits sont très hétérogènes du fait de la grande superficie du vignoble on y trouve de nombreuses différences au niveau du climat, des sols ainsi que des vents.</p>
                                                            <p>Le vignoble produit des vins blancs (11,3 %), rouges (31,3 %) et rosés (55,8 %) ainsi que des vins mielleux (1,7 %).</p>
                                                            <h5>Le vignoble de corse produit quatre A.O.C</h5>
                                                            <p>&bull;&nbsp;Ajaccio<br/>
                                                                &bull;&nbsp;Muscat du Cap Corse<br/>
                                                                &bull;&nbsp;Patrimonio<br/>
                                                                &bull;&nbsp;Vin de Corse
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute80px"><!-- col-lg-6 -->
                                                            <p>Superficie totale : 7 180 hectares environ<br/>
                                                                Superficie plantée : 2 759 ha. en AOC<br/>
                                                                Hectolitres de vins produit / an : 98 000 hectolitres environ<br/>
                                                                Vins produits : blancs, rouges, rosés, mielleux<br/>
                                                                Cépages dominants : nielluccio, sciacarello, carcajolo noir, malvoisie, vermenano, carcajolo blanc<br/>
                                                                Climat : Tempéré méditerranéen
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                    </div><!-- End row -->
                                                </div>
                                                <!-- FIN CONDITIONS 1ER TEXTE -->

                                                <!-- CONDITIONS 2ND TEXTE -->
                                                <div role="tabpanel" class="tab-pane fade in active margebasse80px" id="onglet2" aria-labelledby="home-tab">
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                            <ul class="commentairesonglets">
                                                                <div class="titre">Ajaccio</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 23 février 2022</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">PRÉSENTATION</h5>
                                                            <p>L’Ajaccio, auparavant appelé « côteaux-d’ajaccio, » est un vin AOC produit autour de la ville d’Ajaccio (Corse du Sud) dans le Vignoble de Corse. Les vins produits peuvent être rouges (majoritairement), rosés ou blancs.</p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p><span class="gras">Rosés</span><br/>
                                                                Bouche : équilibrée et gourmande<br/>
                                                                Robe : rose fuchsia<br/>
                                                                Arômes : rose, cerise</p>
                                                            <p>
                                                            <p><span class="gras">Rouges</span><br/>
                                                                Bouche : élégante et délicate<br/>
                                                                Robe : rubis<br/>
                                                                Arômes : fruits rouges, épices, violette</p>
                                                            <p>
                                                            <p><span class="gras">Blancs</span><br/>
                                                                Bouche : souple et dense<br/>
                                                                Robe : dorée<br/>
                                                                Arômes : agrumes, fleurs</p>
                                                            <p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p><span class="gras">Rosés</span><br/>
                                                                Temperature de service : 8 °C<br/>
                                                                Accords mets/vin : apéritif
                                                            <p>
                                                            <p><span class="gras">Rouges</span><br/>
                                                                Température de service : 16 °C<br/>
                                                                Accords mets/vin : grillade (agneau, porc), charcuterie et fromages corses<br/>
                                                                Temps de garde : 5 ans
                                                            </p>
                                                            <p>
                                                            <p><span class="gras">Blancs</span><br/>
                                                                Temperature de service : 7 °C<br/>
                                                                Accords mets/vin : poissons grillés<br/>
                                                                Temps de garde : à consommer dans les 3 ans
                                                            </p>
                                                            <h5 class="textetitre3">FICHE D4IDENTITÉ</h5>
                                                            <p>Désignation : Ajaccio<br/>
                                                                Appellation principale : Ajaccio<br/>
                                                                Vignoble : de Corse<br/>
                                                                Sol : côteaux granitiques<br/>
                                                                Climat : tempéré méditerranéen<br/>
                                                                Production : rouges et rosés (90 %), blancs (10 %)<br/>
                                                                Cépages dominants : sciacarello, vermentino, carignan<br/>
                                                                Superficie en production : 243 ha. environ<br/>
                                                                Production (en hectolitres) : 8 824 hl. environ<br/>
                                                                Rendement moyen : 45 à 50 hl./ha<br/>
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                    </div><!-- End row -->
                                                </div>
                                                <!-- FIN CONDITIONS 2ND TEXTE -->

                                                <!-- CONDITIONS 3ÈME TEXTE -->
                                                <div role="tabpanel" class="tab-pane fade margebasse80px" id="onglet3" aria-labelledby="profile-tab">
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                            <ul class="commentairesonglets">
                                                                <div class="titre">Muscat du Cap Corse</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 24 février 2022</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">PRÉSENTATION</h5>
                                                            <p>Le Muscat du Cap Corse est un vin blanc doux AOC produit sur 17 communes au nord de la Corse dans le Vignoble de Corse.</p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p><span class="gras">Blancs</span><br/>
                                                                Bouche : fine et fruitée<br/>
                                                                Robe : or pâle<br/>
                                                                Arômes : agrumes, fruits confits, cannelle</p>
                                                            <p>
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p><span class="gras">Blancs</span><br/>
                                                                Temperature de service : entre 10 et 13 °C<br/>
                                                                Accords mets/vin : sorbets, desserts<br/>
                                                                Temps de garde : de 3 à 10 ans
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">FICHE IDENTITÉ</h5>
                                                            <p>Désignation : Muscat du Cap Corse<br/>
                                                                Appellation principale : Muscat du Cap Corse<br/>
                                                                Vignoble : de Corse<br/>
                                                                Sol : côteaux granitiques<br/>
                                                                Climat : tempéré méditerranéen<br/>
                                                                Production : vin blanc doux naturel<br/>
                                                                Cépages dominants : muscat blanc à petits grains<br/>
                                                                Superficie en production : 89 ha. environ<br/>
                                                                Production (en hectolitres) : 1 977 hl. environ<br/>
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                    </div><!-- End row -->
                                                </div>
                                                <!-- FIN CONDITIONS 3ÈME TEXTE -->

                                                <!-- CONDITIONS 4ÈME TEXTE -->
                                                <div role="tabpanel" class="tab-pane fade margebasse80px" id="onglet4" aria-labelledby="profile-tab">
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                            <ul class="commentairesonglets">
                                                                <div class="titre">Patrimonio</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 26 février 2022</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">PRÉSENTATION</h5>
                                                            <p>Le Patrimonio est un vin AOC produit en Haute-Corse dans le Vignoble de Corse. Les vins produits peuvent être rouges (majoritairement), rosés ou blancs.</p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p><span class="gras">Rosés</span><br/>
                                                                Bouche : fraîche et dense<br/>
                                                                Robe : framboise<br/>
                                                                Arômes : fruits rouges, épices</p>
                                                            <p>
                                                            <p><span class="gras">Rouges</span><br/>
                                                                Bouche : puissante et robuste<br/>
                                                                Robe : rubis, reflets violets<br/>
                                                                Arômes : épices, poivre, fruits rouges</p>
                                                            <p>
                                                            <p><span class="gras">Blancs</span><br/>
                                                                Bouche : fine et équilibrée<br/>
                                                                Robe : jaune pâle<br/>
                                                                Arômes : camomille, aubépine, fruits à chair blanche</p>
                                                            <p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p><span class="gras">Rosés</span><br/>
                                                                Temperature de service : 12 °C<br/>
                                                                Temps de garde : à boire jeune
                                                            <p>
                                                            <p><span class="gras">Rouges</span><br/>
                                                                Température de service : 16 °C<br/>
                                                                Accords mets/vin : gibiers<br/>
                                                                Temps de garde : entre 3 et 10 ans
                                                            </p>
                                                            <p>
                                                            <p><span class="gras">Blancs</span><br/>
                                                                Temperature de service : 10 °C<br/>
                                                                Accords mets/vin : poissons en sauce<br/>
                                                                Temps de garde : à consommer dans les 2 ans
                                                            </p>
                                                            <h5 class="textetitre3">FICHE IDENTITÉ</h5>
                                                            <p>Désignation : Patrimonio<br/>
                                                                Appellation principale : Patrimonio<br/>
                                                                Vignoble : de Corse<br/>
                                                                Sol : éboulis calcaires et argile<br/>
                                                                Climat : tempéré méditerranéen<br/>
                                                                Production : rouges et rosés (85 %), blancs (15 %)<br/>
                                                                Cépages dominants : nielluccio et vermentino<br/>
                                                                Superficie en production : 418 ha. environ<br/>
                                                                Production (en hectolitres) : 16 140 hl. environ<br/>
                                                                Rendement moyen : 50 à 55 hl./ha<br/>
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                    </div><!-- End row -->
                                                </div>
                                                <!-- FIN CONDITIONS 4ÈME TEXTE -->

                                                <!-- CONDITIONS 5ÈME TEXTE -->
                                                <div role="tabpanel" class="tab-pane fade margebasse80px" id="onglet5" aria-labelledby="profile-tab">
                                                    <div class="row"><!-- row -->
                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                            <ul class="commentairesonglets">
                                                                <div class="titre">Vin de Corse</div>
                                                                <li>
                                                                    <i class="fa fa-user"></i>
                                                                    <span class="pad3px padright5px">Laura Gourault</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="pad3px">Rédigé le 26 février 2022</span>
                                                                </li>
                                                            </ul>
                                                            <h5 class="textetitre3">PRÉSENTATION</h5>
                                                            <p>Le Vin de Corse, aussi appelé « Corse » est un vin AOC produit sur la totalité du Vignoble de Corse. L’appellation peut être suivi de l’une des 5 dénominations géographiques : Côteaux du Cap-Corse, Figari, Calvi, Sartène et Porto-Vecchio. Les vins produits peuvent être rouges (majoritairement), rosés ou blancs.</p>
                                                            <h5 class="textetitre3">CARACTÈRE</h5>
                                                            <p><span class="gras">Rosés</span><br/>
                                                                Bouche : ronde et tendre<br/>
                                                                Robe : saumon pâle<br/>
                                                                Arômes : fruits rouges, épices</p>
                                                            <p>
                                                            <p><span class="gras">Rouges</span><br/>
                                                                Bouche : dense<br/>
                                                                Robe : sombre<br/>
                                                                Arômes : cuir, fruits noirs, réglisse</p>
                                                            <p>
                                                            <p><span class="gras">Blancs</span><br/>
                                                                Bouche : fruitée et équilibrée<br/>
                                                                Robe : or pâle, reflets verts<br/>
                                                                Arômes : agrumes, fruits à chair blanche, fruits exoFques</p>
                                                            <p>
                                                        </div><!-- End col-lg-6 -->
                                                        <div class="col-lg-6 margehaute70px"><!-- col-lg-6 -->
                                                            <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                            <p><span class="gras">Rosés</span><br/>
                                                                Temperature de service : entre 8 et 11 °C<br/>
                                                                Temps de garde : à boire jeune
                                                            <p>
                                                            <p><span class="gras">Rouges</span><br/>
                                                                Température de service : 14 à 16 °C<br/>
                                                            </p>
                                                            <p>
                                                            <p><span class="gras">Blancs</span><br/>
                                                                Temperature de service : 8 à 11 °C<br/>
                                                                Temps de garde : 3 à 5 ans
                                                            </p>
                                                            <h5 class="textetitre3">FICHE IDENTITÉ</h5>
                                                            <p>Désignation : Vin de Corse, ou Corse<br/>
                                                                Appellation principale : Vin de Corse, ou Corse<br/>
                                                                Vignoble : de Corse<br/>
                                                                Sol : éboulis calcaires et argile<br/>
                                                                Climat : tempéré méditerranéen<br/>
                                                                Production : rouges et rosés (90 %), blancs (10 %)<br/>
                                                                Cépages dominants : nielluccio, grenache, sciaccarello et vermentino<br/>
                                                                Superficie en production : 2 150 ha. environ<br/>
                                                                Production (en hectolitres) : 90 360 hl. environ<br/>
                                                                Rendement moyen : 50 à 55 hl./ha<br/>
                                                            </p>
                                                        </div><!-- End col-lg-6 -->
                                                    </div><!-- End row -->
                                                </div>
                                                <!-- FIN CONDITIONS 5ÈME TEXTE -->

                                            </div><!-- End myTabContent -->
                                        </div><!-- End bs-example -->
                                        <!-- ==================== FIN CONTENU DES ONGLETS ========================-->
                                    </div><!-- Fin détermine les padings -->
                                </div><!-- Fin cadrecarte1 -->
                            </div><!-- Fin col-lg-12 -->
                        </div><!-- End row -->
                        <!-- ===================== FIN CONTENU ============================ -->

                    </div>
                </div>

                <!-- =========================== ANNONCES DROITES ============================ -->
                @include('layouts.4emeniveau.corse.droite')
                        <!-- ========================== FIN ANNONCES DROITES ==========================-->

            </div><!-- ../cadreblanc3emeniveau2 -->
        </div><!-- ../contenu -->
        <!--  ============================= ../CONTENU ====================================-->

        <!-- ==================================== MODAL GRANDE CARTE ===================================-->
        <div id="modal">
            <div class="modal-content-3emeniveau-corse">
                <div class="row">
                    <div class="col-md-12" id="modalentete"><!-- col-md-12 -->
                        <div class="col-md-5 margehaute10px">
                            <h3 class="corse gras">Les vins de Corse</h3>
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
                        <div class="col-md-3"><!-- col-md-3 -->
                            <h6 class="corse">Appellations de Corse</h6>
                            <p>AOC Côteaux du Cap Corse</p>
                            <p>AOC Corse Calvi</p>
                            <p>AOC Corse Sartene</p>
                            <p>AOC Corse Porto Vecchio</p>
                            <p>AOC Corse Ajaccio</p>
                            <p>AOC Corse Patrimonio</p>
                            <p>AOC Corse</p>
                        </div><!-- ../col-md-3 -->

                        <div class="col-md-9">
                            <div id="mapcorse"></div>
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
@include('layouts.4emeniveau.corse.appelsjscorse')

@include('layouts.4emeniveau.footer')
