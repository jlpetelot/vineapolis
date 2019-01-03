@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.moulislistrac.gauche')
        <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Vins de Moulis et Listrac</h3>
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
                            <img src="{{ asset('img/margaux.jpg') }}" alt="Mâcon">
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
                                                        Moulis
                                                    </a>
                                                </li>
                                                <!-- ../1ER ONGLET -->

                                                <!-- 2ND ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet2" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Listrac-Médoc
                                                    </a>
                                                </li>
                                                <!-- ../2ND ONGLET -->

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
                                                                                <h5>Moulis</h5>
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
                                                                                <p>Le Moulis (ou Moulis-en-Médoc) est un vin rouge AOC produit dans le Vignoble de Bordeaux, en Gironde. Il est produit autour de la commune de Moulis-en-Médoc.
                                                                                </p>
                                                                                <h6 class="rougemoulislistrac">caractère :</h6>
                                                                                <p> Bouche : fine et puissante</br>
                                                                                    Robe : rubis foncé</br>
                                                                                    Arômes : fruits noirs, cèdre, vanille, réglisse, tabac
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rougemoulislistrac">garde, température et gastronomie</h6>
                                                                                <p> Température de service : 16 °C</br>
                                                                                    Temps de garde : 10 ans</br>
                                                                                    Accords mets/vins : agneau
                                                                                </p>
                                                                                <h6 class="rougemoulislistrac">fiche d’identité :</h6>
                                                                                <p> &middot; Désignation : Moulis<br/>
                                                                                    &middot; Appellation principale : Moulis<br/>
                                                                                    &middot; Vignoble : de Bordeaux<br/>
                                                                                    &middot; Superficie plantée : 630 ha.<br/>
                                                                                    &middot; Production (en hectolitres) : 23 830 hl.<br/>
                                                                                    &middot; Climat : océanique<br/>
                                                                                    &middot; Vins produits : rouges<br/>
                                                                                    &middot; Cépages dominants : cabernet franc, cabernet sauvignon, merlot, carménère, côt, petit verdot<br/>
                                                                                    &middot; Rendement moyen : 57 à 63 hl/ha.
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
                                                                                <h5>Listrac-Médoc</h5>
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
                                                                                <h6 class="rougelistrac">Présentation</h6>
                                                                                <p>
                                                                                    Le Listrac-Médoc est un vin rouge AOC produit dans le Vignoble de Bordeaux.
                                                                                </p>
                                                                                <h6 class="rougelistrac">caractère :</h6>
                                                                                <p>
                                                                                    Bouche : ronde et délicate<br/>
                                                                                    Robe : rubis soutenu<br/>
                                                                                    Arômes : fruits rouges, chêne, pin, eucalyptus, vanille, fèves de cacao
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rougelistrac">garde, température et gastronomie</h6>
                                                                                <p>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Temps de garde : 5 à 15 ans<br/>
                                                                                    Accords mets/vins : viandes rouges
                                                                                </p>
                                                                                <h6 class="rougelistrac">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Listrac-Médoc<br/>
                                                                                    &middot; Appellation principale : Listrac-Médoc<br/>
                                                                                    &middot; Vignoble : de Bordeaux<br/>
                                                                                    &middot; Superficie plantée : 635 ha.<br/>
                                                                                    &middot; Production (en hectolitres) : 25 205 hl.<br/>
                                                                                    &middot; Climat : océanique<br/>
                                                                                    &middot; Vins produits : rouges<br/>
                                                                                    &middot; Cépages dominants : cabernet sauvignon, merlot, cabernet franc, carmenere, cot et petit verdot<br/>
                                                                                    &middot; Rendement moyen : 57 à 63 hl/ha.
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
                @include('layouts.4emeniveau.moulislistrac.droite')
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
                            <h3 class="rougemoulislistrac gras">Vins de Moulis et Listrac</h3>
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
                            <h5 class="rougemoulislistrac gras">CRUS DE MOULIS</h5>
                            <p>
                                Ch. Anthonic<br/>
                                Ch. Bel Air Lagrave<br/>
                                Ch. Bergeron<br/>
                                Ch. Biston Brillette<br/>
                                Ch. Bouqueyran<br/>
                                Ch. Branas Grand Poujeaux<br/>
                                Ch. Brillette<br/>
                                Ch. Cantelaude<br/>
                                Ch. Caroline<br/>
                                Ch. Chasse Spleen<br/>
                                Ch. Chemin Royal<br/>
                                Ch. Dargan<br/>
                                Ch. Duplessis<br/>
                                Ch. Dutruch Grand Poujeaux<br/>
                                Ch. Franquet Grand Poujeaux<br/>
                                Ch. la Garricq<br/>
                                Ch. Granins Gand Poujeaux<br/>
                                Ch. Grave Richebon<br/>
                                Ch. Gressier Grand Poujeaux<br/>
                                Ch. Guitignan<br/>
                                Ch. Jordi<br/>
                                Ch. Lalaudey<br/>
                                Ch. Lamorère<br/>
                                Ch. Lestage Darquier<br/>
                                Ch. Marcotte Grand Poujeaux<br/>
                                Ch. Malmaison<br/>
                                Ch. Maucaillou<br/>
                                Ch. Mauvesin-Barton<br/>
                                Ch. Moulin à Vent<br/>
                                Ch. la Mouline<br/>
                                Ch. Moulis<br/>
                                Ch. Myon de l’Enclos<br/>
                                Ch. Pomeys<br/>
                                Ch. Poujeaux<br/>
                                Clos la Rose de Grave<br/>
                                Ch. Ruat Petit Poujeaux
                            </p>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-2 plus20px enplus"><!-- col-md-2 -->
                            <h5 class="rougelistrac gras">CRUS DE LISTRAC</h5>
                            <p>
                                Ch. Baudan<br/>
                                Ch. la Bécade<br/>
                                Ch. Bellegrave<br/>
                                Ch. Bibian<br/>
                                Ch. Cap Léon Veyrin<br/>
                                Ch. Clarke<br/>
                                Clos des Demoiselles<br/>
                                Ch. Donissan<br/>
                                Ch. Ducluzeau<br/>
                                Ch. l’Ermitage<br/>
                                Ch. Fonréaud<br/>
                                Ch. Fourcas-Dumont<br/>
                                Ch. Fourcas-Dupré<br/>
                                Ch. Fourcas-Hosten<br/>
                                Ch. Fourcas-Loubaney<br/>
                                Ch. Gobinaud<br/>
                                Cave Grand Listrac<br/>
                                Ch. Jander<br/>
                                Ch. Lafon<br/>
                                Ch. Lalande<br/>
                                Ch. la Lauzette<br/>
                                Ch. Lestage<br/>
                                Ch. Liouner<br/>
                                Ch. Mayne-Lalande<br/>
                                Ch. Moulin de Laborde<br/>
                                Ch. Peyredon-Lagravette<br/>
                                Ch. Reverdi<br/>
                                Ch. Rose-Sainte-Croix<br/>
                                Ch. Saransot-Dupré<br/>
                                Ch. Sémeillan<br/>
                                Ch. Sémeillan-Mazeau
                            </p>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-6">
                            <div id="mapmoulislistrac"></div>
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
@include('layouts.4emeniveau.moulislistrac.appelsjsmoulislistrac')

@include('layouts.4emeniveau.footer')
