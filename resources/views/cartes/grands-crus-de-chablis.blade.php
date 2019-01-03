@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

    <div class="container"><!-- container -->
        <div class="row"><!-- row -->
            <!-- =========================== ANNONCES GAUCHES ============================ -->
            @include('layouts.4emeniveau.grdscruschablis.gauche')
            <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

            <!-- =================================== CONTENU ================================-->
            <div class="col-lg-8"><!-- contenu -->
                <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                    <!-- ===================== LE BLOC CARTE ============================-->
                    <div class="col-lg-12"><!-- col-lg-12 -->
                        <div class="cadrecarte1"><!-- cadrecarte1 -->
                            <div class="textetitre">
                                <h3>Les Grands Crus de Chablis</h3>
                            </div>
                            <a href="#modalgoogle">
                                <i class="fa fa-map-marker grand" data-toggle="tooltip"
                                   data-placement="left3" title="Tous vos Chablis sur Google Map">
                                </i>
                            </a>
                            <div class="clear"></div>
                            <!-- ======================== LA CARTE ============================== -->
                            <!-- carte -->
                            <div id="carte3emeniveau">
                                <img src="{{ asset('img/gdschablis.jpg') }}" alt="gdschablis.jpg">
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
                                                        <h5>Chablis Grands Crus</h5>
                                                        <li>
                                                            <i class="fa fa-user" aria-hidden="true"></i>
                                                            <span class="pad3px padright5px">Laura Gourault</span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-calendar"></i>
                                                            <span class="pad3px">Rédigé le 23 février 2022</span>
                                                        </li>
                                                    </ul>
                                                    <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                        <h6 class="chablis">Présentation</h6>
                                                        <p>Vin AOP produit dans le Vignoble de Chablis en Bourgogne,
                                                            les Chablis Grand Crus sont des vins blancs secs à cépage
                                                            chardonnais, appelé localement « Beaunois. » Ils sont produits
                                                            essentiellement sur le village de Chablis ainsi qu’à Fyé et
                                                            à Poinchy.
                                                        </p>
                                                        <p>Il existe 7 grands crus dans le vignoble de Chablis :
                                                            Les Clos (25,87 ha), Grenouille (9,38 ha),
                                                            Les Preuses (10,81 ha), Valmur (10,55), Vaudésir (15,43 ha),
                                                            Blanchot (12,68 ha) et Bougrot (15,07 ha).
                                                        </p>
                                                        <p>En terme de volume de production, le Chablis Grand Cru
                                                            représente seulement 1 % des vins de Chablis.
                                                        </p>
                                                        <p>Les vignes sont plantées sur les coteaux les plus ensoleillés entre
                                                            100 et 250 m d’altitude ; un sol brun, calcaire marneux et contenant des fossiles
                                                            d’huitres minuscules (Exogyra Virgula). L’AOP Chablis Grand Cru est une des
                                                            seules AOC française à se référer à la géologie (étage kimmeridginen).
                                                        </p>
                                                        <h6 class="chablis">caractère :</h6>
                                                        <p>Les Grands Crus de Chablis ont une robe or vert, virant au jaune clair avec la maturité.
                                                            Selon les parcelles de plantation et les producteurs, on retrouvera tantôt un vin marqué
                                                            par la minéralité, tantôt un vin aux aromes fruités et boisés plus présents. La bouche
                                                            et le nez sont bien plus concentrés qu’un Chablis ou qu’un Chablis 1er Cru. Au palais,
                                                            l’équilibre entre le gras et la fraicheur est tout bonnement parfait.
                                                        </p>
                                                    </div><!-- ../textes3emeniveau -->
                                                </div><!-- End col-lg-6 -->
                                                <div class="col-lg-6"><!-- col-lg-6 -->
                                                    <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                        <h6 class="chablis">garde, température et gastronomie</h6>
                                                        <p>Température de service entre 12 et 14 °C.<br/>
                                                            Il accompagne à merveilles poissons et fruits de mer (notamment le homard,
                                                            la langouste et les huitres), mais également le foie gras, les viandes blanches
                                                            et les volailles.<br/>
                                                            Temps de garde : 10 à 15 ans.
                                                        </p>
                                                        <h6 class="chablis">fiche d’identité :</h6>
                                                        <p>&middot; Désignation : Basse-Bourgogne.<br/>
                                                            &middot; Appellation : Chablis Grand Cru.<br/>
                                                            &middot; Vignoble : Bourgogne.<br/>
                                                            &middot; Sous-vignoble : Vignoble de Chablis<br/>
                                                            &middot; Sol : argilo-calcaire ou marneux.<br/>
                                                            &middot; Climat : tempéré océanique à tendance continental.<br/>
                                                            &middot; Heure d’ensoleillement : 1758 heures/an.<br/>
                                                            &middot; Cépage dominant : chardonnay.<br/>
                                                            &middot; Superficie plantée : 102,92 ha en 2008).<br/>
                                                            &middot; Superficie de production : 99 ha (2013).<br/>
                                                            &middot; Pieds à l’hectare : 5 500 pieds.<br/>
                                                            &middot; Production en hectolitre (moyenne entre 2009 et 2013) : 4810 hl (soit 639 730 bouteilles).<br/>
                                                            &middot; Rendement moyen : 54 à 64 hl/ha.</p>
                                                    </div><!-- ../textes3emeniveau -->
                                                    <!-- Présence de l'image -->
                                                    <img src="{{ asset('img/vigne.jpg') }}" alt="vigne">
                                                    <!-- Fin présence de l'image  -->
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

                    <!-- =========================== ANNONCES DROITES ============================ -->
                    @include('layouts.4emeniveau.grdscruschablis.droite')
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
                                <h3 class="jaunechablis gras">Les Grands Crus de Chablis</h3>
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
                                <h6 class="gcruschablis">7 CHABLIS GRANDS CRUS</h6>
                                <p class="gcruschablis">Les Clos (25,87 ha)</p>
                                <p class="gcruschablis">Les Grenouilles (9,38 ha)
                                <p class="gcruschablis">Les Preuses (10,81 ha)</p>
                                <p class="gcruschablis">Valmur (10,55b ha)</p>
                                <p class="gcruschablis">Vaudésir (15,43 ha)</p>
                                <p class="gcruschablis">Blanchot (12,68 ha)</p>
                                <p class="gcruschablis">Les Bougros (15,07 ha)
                            </div><!-- ../col-md-3 -->

                            <div class="col-md-9">
                                <div id="mapgdschablis"></div>
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
@include('layouts.4emeniveau.grdscruschablis.appelsjsgrdscruschablis')

@include('layouts.4emeniveau.footer')
