@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.pauillac.gauche')
        <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Vins de Pauillac</h3>
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
                            <img src="{{ asset('img/pauillac.jpg') }}" alt="Mâcon">
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
                                                                    <h5>Pauillac</h5>
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
                                                                    <h6 class="rougepauillac">Présentation</h6>
                                                                    <p>Le Pauillac est un vin rouge AOC produit dans le Vignoble de Bordeaux, en Gironde. Il est produit autour de la commune de Pauillac.
                                                                    </p>
                                                                    <h6 class="rougepauillac">caractère :</h6>
                                                                    <p> Bouche : puissant et charpentée<br/>
                                                                        Robe : rubis foncé<br/>
                                                                        Arômes : fruits rouges et noirs, chêne, cuir, vanille, réglisse, tabac
                                                                    </p>
                                                                </div><!-- ../textes3emeniveau -->
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6"><!-- col-lg-6 -->
                                                                <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                    <h6 class="rougepauillac">garde, température et gastronomie</h6>
                                                                    <p> Température de service : 16 °C<br/>
                                                                        Temps de garde : vin de garde<br/>
                                                                        Accords mets/vins : foie gras, volaille rôtie, gibiers
                                                                    </p>
                                                                    <h6 class="rougepauillac">fiche d’identité :</h6>
                                                                    <p>	&middot; Désignation : Pauillac<br/>
                                                                        &middot; Appellation principale : Pauillac<br/>
                                                                        &middot; Vignoble : de Bordeaux<br/>
                                                                        &middot; Superficie plantée : 1 215 ha.<br/>
                                                                        &middot; Production (en hectolitres) : 53 215 hl.<br/>
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
                @include('layouts.4emeniveau.pauillac.droite')
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
                            <h3 class="rougepauillac gras">Vins de Pauillac</h3>
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
                            <h5 class="rougepauillac gras">CRUS CLASSÉS DE 1855</h5>
                            <p>
                                Ch. Lafite-Rothschild<br/>
                                Ch. Latour<br/>
                                Ch. Mouton-Rothschild<br/>
                                Ch. Pichon-Longueville<br/>
                                Ch. Pichon-Longueville-Comtesse-<br/>
                                de-Lalande<br/>
                                Ch. Duhart-Milon<br/>
                                Ch. Pontet-Canet<br/>
                                Ch. Batailley<br/>
                                Ch. Haut-Batailley<br/>
                                Ch. Grand-Puy-Lacoste<br/>
                                Ch. Grand-Puy-Ducasse<br/>
                                Ch. Lynch-Bages<br/>
                                Ch. Lynch-Moussas<br/>
                                Ch. d’Armailhac<br/>
                                Ch. Haut-Bages-Libéral<br/>
                                Ch. Pédesclaux<br/>
                                Ch. Cler-Milon<br/>
                                Ch. Croizet-Bages
                            </p>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-1 plus20px enplus"><!-- col-md-2 -->
                            <br/><br/>
                            <p style="margin-left: -70px; color: #666;">
                                Premier Cru<br/>
                                Premier Cru<br/>
                                Premier Cru<br/>
                                Deuxième Cru<br/>
                                Deuxième Cru<br/><br/>
                                Quatrième Cru<br/>
                                Cinquième Cru<br/>
                                Cinquième Cru<br/>
                                Cinquième Cru<br/>
                                Cinquième Cru<br/>
                                Cinquième Cru<br/>
                                Cinquième Cru<br/>
                                Cinquième Cru<br/>
                                Cinquième Cru<br/>
                                Cinquième Cru<br/>
                                Cinquième Cru<br/>
                                Cinquième Cru<br/>
                                Cinquième Cru
                            </p>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-2 plus20px enplus"><!-- col-md-2 -->
                            <h5 class="rougepauillac gras">AUTRES CRUS</h5>
                            <p>
                                Ch. La Bécasse<br/>
                                Ch. Béhéré<br/>
                                Ch. Bellegrave<br/>
                                Ch. Belle-Rose<br/>
                                Ch. Colombier-Monpelou<br/>
                                Ch. Cordeillan-Bages<br/>
                                Ch. la Fleur Milon<br/>
                                Ch. Fonbadet<br/>
                                Ch. Gaudin<br/>
                                Ch. Grand Canyon<br/>
                                Ch. Haut Bages-Averous<br/>
                                Dom. Iris de Gaillon<br/>
                                Ch. Landes de Cach<br/>
                                Ch. Padarnac<br/>
                                Ch. Peybaron<br/>
                                Ch. Pibran<br/>
                                Ch. du Plantey<br/>
                                La Rose Pauillac<br/>
                                Dom. des Sadons<br/>
                                Ch. Tour Pibran
                            </p>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-6">
                            <div id="mappauillac"></div>
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
@include('layouts.4emeniveau.pauillac.appelsjspauillac')

@include('layouts.4emeniveau.footer')
