@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.pomerol.gauche')
        <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Vins de Pomerol</h3>
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
                            <img src="{{ asset('img/pomerol.jpg') }}" alt="Pomerol">
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
                                                        Lalande-de-Pomerol
                                                    </a>
                                                </li>
                                                <!-- ../1ER ONGLET -->

                                                <!-- 2ND ONGLET -->
                                                <li role="presentation">
                                                    <a href="#onglet2" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                        Pomerol
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
                                                                                <h5>Lalande-de-Pomerol</h5>
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
                                                                                <p>Le Lalande-de-Pomerol est un vin rouge AOC produit dans le Vignoble de Bordeaux, en Gironde. Il est produit sur la commune de Lussac.
                                                                                </p>
                                                                                <h6 class="rougemoulislistrac">caractère :</h6>
                                                                                <p> Bouche : souple et longue</br>
                                                                                    Robe : rouge profonde</br>
                                                                                    Arômes : fruits rouges, pruneaux, cuir, cacao
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
                                                                                <p>
                                                                                    &middot; Désignation : Lalande-de-Pomerol<br/>
                                                                                    &middot; Appellation principale : Lalande-de-Pomerol<br/>
                                                                                    &middot; Vignoble : de Bordeaux<br/>
                                                                                    &middot; Superficie plantée : 1 130 ha.<br/>
                                                                                    &middot; Production (en hectolitres) : 61 400 hl.<br/>
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
                                                                                <h5>Pomerol</h5>
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
                                                                                <h6 class="rougepomerol">Présentation</h6>
                                                                                <p>
                                                                                    Le Pomerol est un vin rouge AOC produit dans le Vignoble de Bordeaux, en Gironde. Il est produit sur la commune de Pomerol mais également sur une partie des communes de Libourne et de Lalande-de-Pomerol. Ses crus sont très réputés.
                                                                                </p>
                                                                                <h6 class="rougepomerol">caractère :</h6>
                                                                                <p>
                                                                                    Bouche : dense et ronde<br/>
                                                                                    Robe : rubis foncé<br/>
                                                                                    Arômes : fruits rouges, truffe, cuir, sous-bois
                                                                                </p>
                                                                            </div><!-- ../textes3emeniveau -->
                                                                        </div><!-- End col-lg-6 -->
                                                                        <div class="col-lg-6"><!-- col-lg-6 -->
                                                                            <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                                <h6 class="rougepomerol">garde, température et gastronomie</h6>
                                                                                <p>
                                                                                    Température de service : 16 °C<br/>
                                                                                    Temps de garde : 30 ans<br/>
                                                                                    Accords mets/vins : plats nobles comme la bécasse
                                                                                </p>
                                                                                <h6 class="rougepomerol">fiche d’identité :</h6>
                                                                                <p>
                                                                                    &middot; Désignation : Pomerol<br/>
                                                                                    &middot; Appellation principale : Pomerol<br/>
                                                                                    &middot; Vignoble : de Bordeaux<br/>
                                                                                    &middot; Superficie plantée : 785 ha.<br/>
                                                                                    &middot; Production (en hectolitres) : 40 500 hl.<br/>
                                                                                    &middot; Climat : tempéré océanique<br/>
                                                                                    &middot; Vins produits : rouges<br/>
                                                                                    &middot; Cépages dominants : merlot<br/>
                                                                                    Rendement moyen : 49 à 60 hl/ha.
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
                @include('layouts.4emeniveau.pomerol.droite')
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
                            <h3 class="rougepomerol gras">Vins de Pomerol</h3>
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
                            <h5 class="rougepomerol gras">CHÂTEAUX DE POMEROL</h5>
                            <p style="font-size: 11px">
                                Ch. Altimar<br/>
                                Ch. la Bassonnerie<br/>
                                Ch. Beau Soleil<br/>
                                Ch. Beauchêne<br/>
                                Ch. Beauregard<br/>
                                Ch. Beauséjour de Bonalgue<br/>
                                Ch. Bel-Air<br/>
                                Ch. Belle Brise<br/>
                                Ch. Bellegrave<br/>
                                Ch. le Bon Pasteur<br/>
                                Ch. Bonalgue<br/>
                                Ch. de Bourgueneuf<br/>
                                Ch. Bourgneuf-Vayron<br/>
                                Ch. la Cabanne<br/>
                                Ch. le Caillou<br/>
                                Ch. Cantelauze<br/>
                                Ch. le Carillon<br/>
                                Ch. du Castel<br/>
                                Ch. le Castelet<br/>
                                Ch. Certan de May de Certan<br/>
                                Ch. Certan Giraud<br/>
                                Ch. le Chemin<br/>
                                Ch. Chêne Liège<br/>
                                Ch. Clinet<br/>
                                Clos 56<br/>
                                Clos des Amandiers<br/>
                                Clos Beauregard<br/>
                                Clos Bel Air<br/>
                                Clos Brun Mazeyres<br/>
                                Clos de la Vieille Eglise<br/>
                                Clos de Salles<br/>
                                Clos du Beau Père<br/>
                                Clos du Clocher<br/>
                                Clos du Pèlerin<br/>
                                Clos Grangeneuve<br/>
                                Clos l’Eglise<br/>
                                Clos des Litanies<br/>
                                Clos René<br/>
                                Clos les Rouzes-Clinet<br/>
                                Clos Saint-André<br/>
                                Ch. la Commanderie<br/>
                                Ch. la Conseillante<br/>
                                Ch. Côte l’Eglise<br/>
                                Ch. la Croix<br/>
                                Ch. la Croix de Gay<br/>
                                Ch. Croix des Rouzes<br/>
                                Ch. la Croix des Templiers<br/>
                                Ch. la Croix du Casse<br/>
                                Ch. la Croix Saint-Georges<br/>
                                Ch. la Croix Taillefer<br/>
                                Ch. la Croix Toulifaut<br/>
                                Ch. Deltour
                            </p>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-2 plus58px enplus"><!-- col-md-2 -->
                            <p style="font-size: 11px">
                                Ch. l’Écuyer<br/>
                                Dom. de l’Église<br/>
                                Ch. l’Église-Clinet<br/>
                                Ch. Élisée<br/>
                                Ch. l’Enclos<br/>
                                Ch. Enclos Haut-Mazeyres<br/>
                                Esprit de l’Eglise<br/>
                                Ch. l’Évangile<br/>
                                Ch. Ferrand<br/>
                                Ch. Feytit-Clinet<br/>
                                Ch. Feytit-Guillot<br/>
                                Ch. la Fleur de Gay<br/>
                                Ch. la Fleur des Rouzes<br/>
                                Ch. la Fleur du Mayne<br/>
                                Ch. la Fleur Gazin<br/>
                                Ch. la Fleur Grange Neuve<br/>
                                Ch. la Fleur Petrus<br/>
                                Ch. la Fleur Tressac<br/>
                                Ch. Franc-Maillet<br/>
                                Ch. la Ganne<br/>
                                Ch. le Gay<br/>
                                Ch. Gazin<br/>
                                Ch. Gombaude-Guillot<br/>
                                Ch. Gouprie<br/>
                                Ch. Grand Moulinet<br/>
                                Ch. les Grands Sillons<br/>
                                Ch. Grands Sillons Gabachot<br/>
                                Ch. Grange Neuve<br/>
                                Ch. Grate Cap<br/>
                                Ch. la Grave à Pomerol<br/>
                                Ch. Guillot<br/>
                                Ch. Guillot-Clauzel<br/>
                                Ch. Haut Cloquet<br/>
                                Ch. Haut Ferrand<br/>
                                Ch. Haut Maillet<br/>
                                Ch. Haut Tropchaud<br/>
                                Ch. des Jacobins<br/>
                                Ch. Lafleur<br/>
                                Ch. Lafleur du Roy<br/>
                                Ch. Lagrange<br/>
                                Ch. Latour à Pomerol<br/>
                                Ch. Lecuyer<br/>
                                Ch. Marzy<br/>
                                Ch. Mazeyres<br/>
                                Ch. Monbrun<br/>
                                Ch. Montviel<br/>
                                Ch. Moulinet<br/>
                                Ch. Moulinet-Lasserre<br/>
                                Ch. Ménin<br/>
                                Ch. la Patache<br/>
                                Ch. Petit-Village
                            </p>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-2 plus58px enplus"><!-- col-md-2 -->
                            <p style="font-size: 11px">
                                Petrus<br/>
                                Ch. Pierhem<br/>
                                Ch. le Pin<br/>
                                Ch. Plince<br/>
                                Ch. Plincette<br/>
                                Ch. la Pointe<br/>
                                Ch. Pomeaux<br/>
                                Ch. Pont Cloquet<br/>
                                Ch. Prieurs de la Commanderie<br/>
                                Ch. La Providence<br/>
                                Ch. Ratouin<br/>
                                Ch. la Renaissance<br/>
                                Ch. Rêve d’Or<br/>
                                Ch. Robert<br/>
                                Ch. Rochet-Bonregard<br/>
                                Ch. la Rose-Figeac<br/>
                                Dom. Roses Camille<br/>
                                Ch. Rouget<br/>
                                Ch. Sainte-Marie<br/>
                                Ch. Saint-Pierre<br/>
                                Ch. de Sales<br/>
                                Ch. du Tailhas<br/>
                                Ch. Taillefer<br/>
                                Ch. Thibeaud-Maillet<br/>
                                Ch. Toulifaut<br/>
                                Ch. Tour du Roy<br/>
                                Ch. Tristan<br/>
                                Ch. Tropchaud-l’Eglise<br/>
                                Ch. Trotanoy<br/>
                                Ch. de Valois<br/>
                                Vieux Château Certan<br/>
                                Vieux Château Cloquet<br/>
                                Vieux Château Ferron<br/>
                                Ch. Vieux Maillet<br/>
                                Ch. Vieux Taillefer<br/>
                                Ch. la Violette<br/>
                                Ch. Vray Croix de Gay
                            </p>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-6">
                            <div id="mappomerol"></div>
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
@include('layouts.4emeniveau.pomerol.appelsjspomerol')

@include('layouts.4emeniveau.footer')
