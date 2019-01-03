@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.pessacleognan.gauche')
        <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Vins de Pessac-Léognan</h3>
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
                            <img src="{{ asset('img/pessac.jpg') }}" alt="Pessac-Léognan">
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
                                                                    <h5>Pessac-Léognan</h5>
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
                                                                    <h6 class="rougepessacleognan">Présentation</h6>
                                                                    <p>Le Pessac-Léognan est un vin AOC rouge ou blanc produit dans le Vignoble de Bordeaux, sur les communes de Pessac et Leognan en Gironde.
                                                                    </p>
                                                                    <h6 class="rougepessacleognan">caractère :</h6>
                                                                    <p>
                                                                        <span class="rougepessacleognan">Rouges : </span>
                                                                        Bouche : longue et souple<br/>
                                                                        Robe : rouge profond<br/>
                                                                        Arômes : notes florales
                                                                    </p>

                                                                    <p>
                                                                        <span class="jaunechablis">Blancs : </span>
                                                                        Bouche : ronde et ample<br/>
                                                                        Robe : jaune or<br/>
                                                                        Arômes : acacia, agrumes, pain grillé, noisette
                                                                    </p>
                                                                </div><!-- ../textes3emeniveau -->
                                                            </div><!-- End col-lg-6 -->
                                                            <div class="col-lg-6"><!-- col-lg-6 -->
                                                                <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                                    <h6 class="rougepessacleognan">garde, température et gastronomie</h6>
                                                                    <p>
                                                                        <span class="rougepessacleognan">Rouges : </span>
                                                                        Température de service : 16 °C<br/>
                                                                        Temps de garde : plsu de 50 ans<br/>
                                                                        Accords mets/vins : gibiers
                                                                    </p>

                                                                    <p>
                                                                        <span class="jaunechablis">Blancs : </span>
                                                                        Température de service : 11 °C<br/>
                                                                        Temps de garde : 15 ans<br/>
                                                                        Accords mets/vins : homards
                                                                    </p>
                                                                    <h6 class="rougepessacleognan">fiche d’identité :</h6>
                                                                    <p>
                                                                        &middot; Désignation : pessac-leognan<br/>
                                                                        &middot; Appellation principale : pessac-leognan<br/>
                                                                        &middot; Vignoble : de Bordeaux<br/>
                                                                        &middot; Climat : océanique<br/>
                                                                        &middot; Vins produits : rouges (80 %), blancs (20 %)<br/>
                                                                        &middot; Superficie : 1 610 hectares<br/>
                                                                        &middot; Production (en hl.) : 71 145 hl.<br/>
                                                                        &middot; Cépages dominants : semillon, sauvignon, cabernet sauvignon, cabernet franc, merlot<br/>
                                                                        &middot; Rendement moyen : 54 à 60 hl/ha.
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
                @include('layouts.4emeniveau.pessacleognan.droite')
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
                            <h3 class="rougepessacleognan gras">Vins de Pessac-Léognan</h3>
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
                            <h5 class="rougepessacleognan gras">CRU CLASSÉ DE 1855</h5>
                            <p>
                                Ch. Haut-Brion
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="grispessacleognan">Premier Cru</span>
                            </p>
                            <h5 class="rougepessacleognan gras">CRUS CLASSÉS DE 1859</h5>
                            <p>
                                Ch. Bouscaut<br/>
                                Ch. Carbonnieux<br/>
                                Dom. de Chevalier<br/>
                                Ch. Couhins<br/>
                                Ch. Couhins-Lurton<br/>
                                Ch. de Fieuzal<br/>
                                Ch. Haut-Bailly<br/>
                                Ch. Haut-Brion<br/>
                                Ch. Laville Haut-Brion<br/>
                                Ch. Malartic-Lagravière<br/>
                                Ch. la Mission Haut-Brion<br/>
                                Ch. Olivier<br/>
                                Ch. Pape-Clément<br/>
                                Ch. Smith Haut Lafitte<br/>
                                Ch. La Tour Haut-Brion<br/>
                                Ch. Latour-Martillac
                            </p>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-2 plus20px enplus"><!-- col-md-2 -->
                            <h5 class="rougepessacleognan gras">AUTRES CRUS</h5>
                            <p style="font-size: 10px">
                                Ch. Bardins<br/>
                                Ch. Baret<br/>
                                Ch. Baulos-Charmes<br/>
                                Ch. Bois-Martin<br/>
                                Ch. Branon<br/>
                                Ch. Brown<br/>
                                Ch. le Bruilleau<br/>
                                Ch. Cantelys<br/>
                                Ch. les Carmes Haut-Brion<br/>
                                Ch. de Cruzeau<br/>
                                Ch. d’Eck<br/>
                                Ch. Espiot<br/>
                                Ch. d’Eyran<br/>
                                Ch. Ferran<br/>
                                Ch. de France<br/>
                                Ch. la Garde<br/>
                                Ch. Gazin-Rocquencourt<br/>
                                Dom. de Grandmaison<br/>
                                Dom. Hannetot-Grandmaison<br/>
                                Ch. Haut Plantade<br/>
                                Ch. Haut-Bergey<br/>
                                Ch. Haut-Brana<br/>
                                Ch. Haut-Gardère<br/>
                                Ch. Haut-Lagrange<br/>
                                Ch. Haut-Nouchet<br/>
                                Ch. Haut-Vigneau<br/>
                                Ch. Jaulien<br/>
                                Ch. Lafargue<br/>
                                Ch. Lafont-Menaut<br/>
                                Ch. Lamothe Bouscaut<br/>
                                Ch. Larrivet Haut-Brion<br/>
                                Ch. Léognan<br/>
                                Ch. Lespault-Martillac<br/>
                                Ch. Limbourg<br/>
                                Ch. la Louvière<br/>
                                Ch. Luchey-Halde<br/>
                                Ch. de Malleprat<br/>
                                Ch. Mancèdre<br/>
                                Clos Marsalette<br/>
                                Ch. de Merlet<br/>
                                Ch. Mirebeau<br/>
                                Ch. le Pape<br/>
                                Dom. du Petit Bourdieu<br/>
                                Ch. Picque-Caillou<br/>
                                Ch. Pont Saint-Martin<br/>
                                Ch. Pontac-Monplaisir<br/>
                                Dom. du Pontet<br/>
                                Ch. Pontet-Caillou<br/>
                                Ch. Poumey<br/>
                                Ch. la Prade<br/>
                                Ch. de Rochemorin<br/>
                                Ch. de Rouillac<br/>
                                Ch. le Sartre<br/>
                                Ch. Seguin<br/>
                                Dom. de la Solitude<br/>
                                Ch. le Thil Comte Clary<br/>
                                Ch. Trignant
                            </p>
                        </div><!-- ../col-md-2 -->

                        <div class="col-md-6">
                            <div id="mappessacleognan"></div>
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
@include('layouts.4emeniveau.pessacleognan.appelsjspessacleognan')

@include('layouts.4emeniveau.footer')
