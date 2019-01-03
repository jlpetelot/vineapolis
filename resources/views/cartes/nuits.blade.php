@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.nuits.gauche')
        <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Les vignobles de Nuits-Saint-Georges</h3>
                        </div>
                        <a href="#modalgoogle"">
                            <i class="fa fa-map-marker grand" data-toggle="tooltip"
                               data-placement="left3" title="Tous vos {{ $vinzoom->localitevinicole }} sur Google Map">
                            </i>
                        </a>
                        <div class="clear"></div>
                        <!-- ======================== LA CARTE ============================== -->
                        <!-- carte -->
                        <div id="carte3emeniveau">
                            <img src="{{ asset('img/nuits.jpg') }}" alt="Nuits-Saint-Georges">
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
                                        <!-- TEXTE -->
                                        <div class="row"><!-- row -->
                                            <div class="col-lg-6"><!-- col-lg-6 -->
                                                <ul class="commentairesonglets">
                                                    <h5>Nuits-Saint-Georges</h5>
                                                    <li>
                                                        <i class="fa fa-user" aria-hidden="true"></i>
                                                        <span class="pad3px padright5px">Laura Gourault</span>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-calendar"></i>
                                                        <span class="pad3px">Rédigé le 23 février 2022</span>
                                                    </li>
                                                    <div class="visibilitecartegoogle">
                                                        <a href="#modalgoogle">
                                                            <i class="fa fa-search" data-toggle="tooltip"
                                                               data-placement="left3"
                                                               title="Tous les Chablis sur Google Map">
                                                            </i>
                                                        </a>
                                                    </div>
                                                </ul>
                                                <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                    <h5 class="textetitre3">PRÉSENTATION</h5>
                                                    <p>Le Nuits-Saint-Georges est un vin rouge (presque exclusivement) ou blanc (moindre quanIté) AOC produit sur les commune de Nuits-Saint-Georges et Premeaux en Côte d’Or. Il est classé parmi les appellations village du Vignoble de la Côte de Nuits. L’appellation comporte 41 climats classés en 1er Cru, dont par exemple : Aux Perdrix, Clos des Grandes Vignes, Clos des Corvées, Les Cailles, Les Chaboeufs, Les Vallerots, Roncière ou encore Rue de Chaux
                                                    </p>
                                                    <h5 class="textetitre3">CARACTÈRE</h5>

                                                    <p>
                                                        <span class="rouge gras">Pour les Rouges</span><br/>
                                                        Bouche : corsée, puissante, équilibrée<br/>
                                                        Robe : pourpre<br/>
                                                        Arômes : réglisse, rose, cerise, fraise, cassis
                                                    </p>
                                                    <p>
                                                        <span class="jaune gras">Pour les blancs</span><br/>
                                                        Bouche : ferme<br/>
                                                        Robe : or soutenu<br/>
                                                        Arôme : fleurs blanches, miel, brioche
                                                    </p>
                                                </div><!-- ../textes3emeniveau -->
                                            </div><!-- End col-lg-6 -->
                                            <div class="col-lg-6"><!-- col-lg-6 -->
                                                <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                    <h5 class="textetitre3">GARDE, TEMPÉRATURE ET GASTRONOMIE</h5>
                                                    <p>
                                                        <span class="rouge gras">Pour les Rouges</span><br/>
                                                        Température de service : 15 à 16 °C<br/>
                                                        Accords mets/vin : agneau rôI, boeuf, magret de canard, gibiers à poil, carpe au vin rouge,
                                                        époisses, langres ou soumaintrain pour les fromages
                                                    </p>
                                                    <p>
                                                        <span class="jaune gras">Pour les blancs</span><br/>
                                                        Température de service : 12 à 13 °C<br/>
                                                        Accords mets/vin : poissons de mer grillés, crustacés grillés
                                                    </p>
                                                    <h5 class="textetitre3">FICHE D’IDENTITÉ</h5>
                                                    <p>&middot; Désignation : Côte de Nuits<br/>
                                                        &middot; Appellation principale : Nuits-Saint-Georges<br/>
                                                        &middot; Vignoble : Bourgogne.<br/>
                                                        &middot; Sous-vignoble : Vignoble de la Côte de Nuits<br/>
                                                        &middot; Sol : argilo-calcaire<br/>
                                                        &middot; Climat : tempéré océanique à tendance continental<br/>
                                                        &middot; Production : rouges (98 %) et blancs (2 %)<br/>
                                                        &middot; Cépages dominants : Pinot noir (rouges), chardonnay (blancs)<br/>
                                                        &middot; Superficie en production : 297 ha. environ dont 9 ha. environ en blanc<br/>
                                                        &middot; Production en hectolitres : 12 809 hl environ dont 5 757 hl environ en 1er Cru<br/>
                                                        &middot; Rendement moyen : 40 à 58 hl/ha. pour les rouges, 45 à 64 hl/ha. pour les blancs</p>
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
                    </div><!-- ../cadrecarte1 -->
                </div><!-- ../col-lg-12 -->
                <!-- ===================== FIN CONTENU ============================ -->

                    </div><!-- ../cadrecarte1 -->
                </div><!-- ../col-lg-12 -->
                <!-- ===================== FIN CONTENU ============================ -->

                <!-- =========================== ANNONCES DROITES ============================ -->
                @include('layouts.4emeniveau.nuits.droite')
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
                            <h3 style="color: #cc6699; font-weight: 700;">Les vignobles de Nuits-Saint-Georges</h3>
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
                        <div id="mapnuits"></div>
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
@include('layouts.4emeniveau.nuits.appelsjsnuits')

@include('layouts.4emeniveau.footer')
