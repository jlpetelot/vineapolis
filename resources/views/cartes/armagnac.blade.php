@include('layouts.4emeniveau.header')

@include('layouts.4emeniveau.menu')

<div class="container"><!-- container -->
    <div class="row"><!-- row -->
        <!-- =========================== ANNONCES GAUCHES ============================ -->
        @include('layouts.4emeniveau.armagnac.gauche')
                <!-- ========================== FIN ANNONCES GAUCHES ==========================-->

        <!-- =================================== CONTENU ================================-->
        <div class="col-lg-8"><!-- contenu -->
            <div class="cadreblanc3emeniveau2"><!-- cadreblanc3emeniveau2 -->
                <!-- ===================== LE BLOC CARTE ============================-->
                <div class="col-lg-12"><!-- col-lg-12 -->
                    <div class="cadrecarte1"><!-- cadrecarte1 -->
                        <div class="textetitre">
                            <h3>Eaux-de-vie d'Armagnac</h3>
                        </div>
                        <a href="#modalgoogle">
                            <i class="fa fa-map-marker grand" data-toggle="tooltip"
                               data-placement="left3" title="Tous vos Armagnac sur Google Map">
                            </i>
                        </a>
                        <div class="clear"></div>
                        <!-- ======================== LA CARTE ============================== -->
                        <!-- carte -->
                        <div id="carte3emeniveau">
                            <img src="{{ asset('img/armagnac.jpg') }}" alt="cognac.jpg">
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
                                                    <h5>Eaux-de-vie d'Armagnac</h5>
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
                                                    <p>
                                                        L’Armagnac est une eau de vie AOC/AOP produite dans les départements du Gers, des Landes et du Lot et Garonne, dans le Vignoble du sud-ouest.
                                                    </p>
                                                    <h6 class="chablis">caractère :</h6>
                                                    <p>
                                                        Bouche : ample, chaleureuse et souple<br/>
                                                        Robe : de dorée à cuivrée selon l’âge<br/>
                                                        Arômes : fruits secs, confits, notes boisées et épicées
                                                    </p>
                                                </div><!-- ../textes3emeniveau -->
                                            </div><!-- End col-lg-6 -->
                                            <div class="col-lg-6"><!-- col-lg-6 -->
                                                <div class="textes3emeniveau"><!-- textes3emeniveau -->
                                                    <h6 class="chablis">garde, température et gastronomie</h6>
                                                    <p>
                                                        Temperature de service : température ambiante ou glacée<br/>
                                                        Temps de garde : 2 à 20 ans<br/>
                                                        Accords mets/vin : digestif, en patisserie ou en marinade
                                                    </p>
                                                    <h6 class="chablis">fiche d’identité :</h6>
                                                    <p>
                                                        &middot;&nbsp;Désignation : Armagnac<br/>
                                                        &middot;&nbsp;Appellation principale : Armagnac, bas-armagnac, armagnac ténazèze, haut-armagnac, 
                                                        &nbsp;&nbsp;blanche-armagnac<br/>
                                                        &middot;&nbsp;Climat : tempéré océanique à tendance méditerranéenne<br/>
                                                        &middot;&nbsp;Superficie plantée : 2015 ha.<br/>
                                                        &middot;&nbsp;Production : 18900 hl.
                                                        &middot;&nbsp;Cépages dominants : Ugni blanc, folle blanche, colombard
                                                    <p/>
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

                <!-- =========================== ANNONCES DROITES ============================ -->
                @include('layouts.4emeniveau.armagnac.droite')
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
                            <h3 class="jaunechablis gras">Eaux-de-vie et liqueurs de Cognac</h3>
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
                        <div id="armagnacmapmodal"></div>
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
@include('layouts.4emeniveau.armagnac.appelsjsarmagnac')

@include('layouts.4emeniveau.footer')
