@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.margaux.gauche')
        <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Vins de Margaux</h3>
                        </div>
                        <a href="#modalgoogle">
                            <i class="fa fa-map-marker grand" data-toggle="tooltip"
                               data-placement="left3" title="Tous vos vins de {{ $vinzoom->localitevinicole }} sur Google Map">
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

                                        <!-- ======================= LE CONTENU ============================== -->
                                        <div class="row"><!-- row -->
                                            <div class="col-lg-12"><!-- col-lg-12 -->
                                                <div class="cadrecarte1"><!-- cadrecarte1 -->
                                                    <div class="emballage3emeniveau"><!-- détermine les padings -->
                                                        <!-- TEXTE -->
                                                        <div class="row"><!-- row -->
                                                            <div class="col-lg-6"><!-- col-lg-6 -->
                                                                <ul class="commentairesonglets">
                                                                    <h5>Margaux</h5>
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
                                                                    <h6 class="rougemargaux">Présentation</h6>
                                                                    <p>Le Margaux est un vin rouge AOC produit dans le Vignoble de Bordeaux autour de la commune de Margaux.
                                                                    </p>
                                                                    <h6 class="rougemargaux">caractère :</h6>
                                                                    <p> Bouche : puissante et délicate<br/>
                                                                        Robe : grenat foncé<br/>
                                                                        Arômes : fruits rouges, cèdre, épices
                                                                    </p>
                                                                </div><!-- ../textes3emeniveau -->
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6"><!-- col-lg-6 -->
                                                                <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                    <h6 class="rougemargaux">garde, température et gastronomie</h6>
                                                                    <p> Température de service : 16 °C<br/>
                                                                        Temps de garde : plus de 50 ans<br/>
                                                                        Accords mets/vins : veau
                                                                    </p>
                                                                    <h6 class="rougemargaux">fiche d’identité :</h6>
                                                                    <p>&middot; Désignation : Margaux<br/>
                                                                        &middot; Appellation principale : Margaux<br/>
                                                                        &middot; Vignoble : de Bordeaux<br/>
                                                                        &middot; Superficie plantée : 1 490 ha.<br/>
                                                                        &middot; Production (en hectolitres) : 60 900 hl.<br/>
                                                                        &middot; Climat : océanique<br/>
                                                                        &middot; Vins produits : rouges<br/>
                                                                        &middot; Cépages dominants : cabernet sauvignon, merlot, cabernet franc<br/>
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
                                        <!-- ===================== FIN CONTENU ============================-->
                                    </div><!-- Fin détermine les padings -->
                                </div><!-- Fin cadrecarte1 -->
                            </div><!-- Fin col-lg-12 -->
                        </div><!-- End row -->
                        <!-- ===================== FIN CONTENU ============================-->
                    </div><!-- ../cadrecarte1 -->
                </div><!-- ../col-lg-12 -->
                <!-- ===================== FIN CONTENU ============================ -->

                <!-- =========================== ANNONCES DROITES ============================ -->
                @include('layouts.4emeniveau.margaux.droite')
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
                            <h3 class="rougemargaux gras">Vins de Margaux</h3>
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
                            <h5 class="rougemargaux gras">CRUS CLASSÉS DE 1855</h5>
                            <p>
                                Ch. Margaux<br/>
                                Ch. Rauzan-Ségla<br/>
                                Ch. Rauzan-Gassies<br/>
                                Ch. Durfort-Vivens<br/>
                                Ch. Lascombes<br/>
                                Ch. Brane-Cantenac<br/>
                                Ch. Kirwan<br/>
                                Ch. d’Issan<br/>
                                Ch. Giscours<br/>
                                Ch. Malescot Saint-Exupéry<br/>
                                Ch. Boyd Cantenac<br/>
                                Ch. Brane Cantenac<br/>
                                Ch. Cantenac-Brown<br/>
                                Ch. Palmer<br/>
                                Ch. Desmirail<br/>
                                Ch. Ferrière<br/>
                                Ch. Marquis d’Alesme-Becker<br/>
                                Ch. Pouget<br/>
                                Ch. Prieuré-Lichine<br/>
                                Ch. Marquis de Terme<br/>
                                Ch. Dauzac<br/>
                                Ch. du Tertre
                            </p>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-1 plus20px enplus"><!-- col-md-2 -->
                            <br/><br/>
                            <p style="margin-left: -70px; color: #666;">
                                Premier Cru<br/>
                                Deuxième Cru<br/>
                                Deuxième Cru<br/>
                                Deuxième Cru<br/>
                                Deuxième Cru<br/>
                                Deuxième Cru<br/>
                                Troisième Cru<br/>
                                Troisième Cru<br/>
                                Troisième Cru<br/>
                                Troisième Cru<br/>
                                Troisième Cru<br/>
                                Troisième Cru<br/>
                                Troisième Cru<br/>
                                Troisième Cru<br/>
                                Troisième Cru<br/>
                                Troisième Cru<br/>
                                Troisième Cru<br/>
                                Quatrième Cru<br/>
                                Quatrième Cru<br/>
                                Quatrième Cru<br/>
                                Cinquième Cru<br/>
                                Cinquième Cru
                            </p>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-2 plus20px enplus"><!-- col-md-2 -->
                            <h5 class="rougemargaux gras">AUTRES CRUS</h5>
                            <p style="font-size: 10px">
                                Ch. d’Angludet<br/>
                                Ch. d’Arsac<br/>
                                Ch. l’Aura de Cambon<br/>
                                Ch. les Baraillots<br/>
                                Ch. Bel Air Marquis d’Aligre<br/>
                                Ch. Bellevue de Tayac<br/>
                                Clos de Bigos<br/>
                                Ch. Boston<br/>
                                Ch. Canuet<br/>
                                Ch. Chantelune<br/>
                                Ch. Charmant<br/>
                                Ch. Cos-Laborie<br/>
                                Ch. le Coteau<br/>
                                Ch. Deyrem-Valentin<br/>
                                Ch. les Eyquem<br/>
                                Ch. des Eyrins<br/>
                                Ch. la Galiane<br/>
                                Ch. Gassies du Vieux Bourg<br/>
                                Ch. Grand Tayac<br/>
                                Ch. les Graves du Soc<br/>
                                Ch. des Graviers<br/>
                                Ch. la Gurgue<br/>
                                Ch. Haut Breton-Larigaudière<br/>
                                Ch. Haut-Tayac<br/>
                                Clos du Jaugeyron<br/>
                                Ch. Labégorce<br/>
                                Ch. Labégorce-Zédé<br/>
                                Ch. de Labourgade<br/>
                                Ch. Larrieu-Terrefort<br/>
                                Ch. Larruau<br/>
                                Ch. Ligondras<br/>
                                Ch. Marojallia<br/>
                                Ch. Marsac-Seguineau<br/>
                                Ch. Martinens<br/>
                                Dom. de Maucaillou<br/>
                                Ch. Meyre<br/>
                                Ch. Mille Roses<br/>
                                Ch. Monbrison<br/>
                                Ch. Mongravey<br/>
                                Ch. Moulin de Tricot<br/>
                                Ch. Moutte Blanc<br/>
                                Ch. Paveil de Luze<br/>
                                Ch. Piche Leibre<br/>
                                Ch. Pichecan<br/>
                                Ch. Pontac-Lynch<br/>
                                Ch. Pontet-Chappaz<br/>
                                Clos des Quatre Vents<br/>
                                Ch. Richet<br/>
                                Dom. la Rose Maucaillou<br/>
                                Ch. Saint-Marc<br/>
                                Ch. Siran<br/>
                                Ch. Tayac<br/>
                                Ch. Tayac-Plaisance<br/>
                                Ch. la Tour de Bessan<br/>
                                Ch. la Tour de Mons<br/>
                                Dom. les Treilles<br/>
                                Ch. les Trois Chardons<br/>
                                Ch. Vallière<br/>
                                Ch. Vincent
                            </p>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-6">
                            <div id="mapmargaux"></div>
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
@include('layouts.4emeniveau.margaux.appelsjsmargaux')

@include('layouts.4emeniveau.footer')
